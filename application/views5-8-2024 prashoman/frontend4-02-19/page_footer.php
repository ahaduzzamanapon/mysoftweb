<style type="text/css">

.iso_box{

    position: fixed;

    width: 120px;

    top: 40%;

    left: 0%;

    /*border: 3px solid #a1a1a1;*/

    background: none;

    padding: 0 15px 15px 10px;

    /*padding:15px;*/

    -webkit-border-radius: 3px;

        -moz-border-radius: 3px;

        border-radius: 3px;

    z-index: 999;

}

</style>

<div class="iso_box"><img src="<?=base_url('fwedget/img/iso-logo-2015.png')?>" width="75px;">

<div style="margin:10px 0 0 5px" class="fb-like" data-href="https://www.facebook.com/mysoftheavenltd/" data-layout="box_count" data-action="like" data-size="large" data-show-faces="true" data-share="true"></div>

</div>





<!-- WhatsHelp.io widget -->

<script type="text/javascript">

    (function () {

        var options = {

            facebook: "410036575718217", // Facebook page ID

            company_logo_url: "//storage.whatshelp.io/widget/2e/2ebb/2ebb501a400e8176992cde7aabb542b9/285084_410036792384862_1200684801_n.jpg", // URL of company logo (png, jpg, gif)

            greeting_message: "Hello, how may we help you? Just send us a message now to get assistance.", // Text of greeting message

            call_to_action: "", // Call to action

            position: "right", // Position may be 'right' or 'left'

        };

        var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;

        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';

        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };

        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);

    })();

</script>

<!-- /WhatsHelp.io widget -->



  <section class="call-to-action featured footer" style="background-color: white; padding: 15px 0;">

    <div class="container">

      <div class="row">

        <div class="center">

          <h3>To build <strong>your business</strong> with <strong>Mysoftheaven (BD) Ltd.</strong> <a href="request-quotation"  class="btn btn-lg btn-primary">Request for Quotation</a></h3>

        </div>

      </div>

    </div>

  </section>



  <footer id="footer" class="color">

    <div class="footer-copyright">

      <div class="container">

        <div class="row">

          <div class="col-md-3 pull-left">

            <a href="index.html" class="logo">

              <img alt="Porto Website Template" class="img-responsive" src="<?=base_url();?>fwedget/img/membership.png">

            </a>

          </div>

          <div class="col-md-5 pull-right">

            <p>© Copyright <?=date('Y')?> | Mysoftheaven (BD) Ltd. | All Rights Reserved </p>

          </div>

        </div>

      </div>

    </div>

  </footer>

</div>





<!-- Vendor -->

<script src="<?=base_url();?>fwedget/vendor/jquery/jquery.js"></script>

<script src="<?=base_url();?>fwedget/vendor/jquery.appear/jquery.appear.js"></script>

<script src="<?=base_url();?>fwedget/vendor/jquery.easing/jquery.easing.js"></script>

<script src="<?=base_url();?>fwedget/vendor/jquery-cookie/jquery-cookie.js"></script>

<script src="<?=base_url();?>fwedget/vendor/bootstrap/bootstrap.js"></script>

<script src="<?=base_url();?>fwedget/vendor/common/common.js"></script>

<script src="<?=base_url();?>fwedget/vendor/jquery.validation/jquery.validation.js"></script>

<script src="<?=base_url();?>fwedget/vendor/jquery.stellar/jquery.stellar.js"></script>

<script src="<?=base_url();?>fwedget/vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.js"></script>

<script src="<?=base_url();?>fwedget/vendor/jquery.gmap/jquery.gmap.js"></script>

<script src="<?=base_url();?>fwedget/vendor/isotope/jquery.isotope.js"></script>

<script src="<?=base_url();?>fwedget/vendor/owlcarousel/owl.carousel.js"></script>

<script src="<?=base_url();?>fwedget/vendor/jflickrfeed/jflickrfeed.js"></script>

<script src="<?=base_url();?>fwedget/vendor/magnific-popup/jquery.magnific-popup.js"></script>

<script src="<?=base_url();?>fwedget/vendor/vide/vide.js"></script>



<!-- Theme Base, Components and Settings -->

<script src="<?=base_url();?>fwedget/js/theme.js"></script>



<!-- Specific Page Vendor and Views -->

<script src="<?=base_url();?>fwedget/vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>

<script src="<?=base_url();?>fwedget/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

<script src="<?=base_url();?>fwedget/vendor/circle-flip-slideshow/js/jquery.flipshow.js"></script>

<script src="<?=base_url();?>fwedget/js/views/view.home.js"></script>



<!-- Theme Custom -->

<script src="<?=base_url();?>fwedget/js/custom.js"></script>



<!-- Theme Initialization Files -->

<script src="<?=base_url();?>fwedget/js/theme.init.js"></script>



<?php if($this->router->fetch_method('contact-us')){ ?>

  <!-- Specific Page Vendor and Views -->

  <script src="<?=base_url();?>fwedget/js/views/view.contact.js"></script>

  <script type="text/javascript" src="https://maps.google.com/maps/api/js?key=AIzaSyA_L-CJ8c21ytc3703UP8KLTpiuyVY-Utw&callback=myMap"></script>

  <!-- <script src="http://maps.google.com/maps/api/js?sensor=false"></script> -->





  <script>

    /*

    Map Settings

      Find the Latitude and Longitude of your address:

        - http://universimmedia.pagesperso-orange.fr/geo/loc.htm

        - http://www.findlatitudeandlongitude.com/find-address-from-latitude-and-longitude/

    */



    // Map Markers

    var mapMarkers = [{

      address: "19-B/2-C & 2-D, Block-F, 5th Floor, Ring Road, Shamoli, Dhaka-1207",

      html: "<strong>Head Office</strong><br>19-B/2-C & 2-D, <br>Block-F, 5th Floor, <br>Ring Road, Shamoli, Dhaka-1207.",

      icon: {

        image: "<?=base_url();?>fwedget/img/pin.png",

        iconsize: [26, 46],

        iconanchor: [12, 46]

      },

      popup: true

    }];



    // Map Initial Location

    var initLatitude = 23.770451;

    var initLongitude = 90.359478;



    // Map Extended Settings

    var mapSettings = {

      controls: {

        draggable: true,

        panControl: true,

        zoomControl: true,

        mapTypeControl: true,

        scaleControl: true,

        streetViewControl: true,

        overviewMapControl: true

      },

      scrollwheel: false,

      markers: mapMarkers,

      latitude: initLatitude,

      longitude: initLongitude,

      zoom: 16

    };



    var map = $("#googlemaps").gMap(mapSettings);



    // Map Center At

    var mapCenterAt = function(options, e) {

      e.preventDefault();

      $("#googlemaps").gMap("centerAt", options);

    }



  </script>



<?php } ?>



<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.

<script type="text/javascript">



var _gaq = _gaq || [];

_gaq.push(['_setAccount', 'UA-12345678-1']);

_gaq.push(['_trackPageview']);



(function() {

var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;

ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';

var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);

})();



</script>

-->



</body>

</html>