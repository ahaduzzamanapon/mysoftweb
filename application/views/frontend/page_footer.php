

<!-- dynamic script start -->

<?php
$current_url = base_url(uri_string());
$Specific= $this->db->where('page_link', $current_url)->where('type', 2)->get('script')->result();
$all= $this->db->where('type', 1)->get('script')->result();

foreach($all as $key => $value) {
  echo $value->script;
}
foreach($Specific as $key => $value) {
  echo $value->script;
}

?>
<!-- dynamic script end -->























<style type="text/css">
  .iso_box {
    position: fixed;
    width: 120px;
    bottom: 0;
    right: 0%;
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
<div class="iso_box"><img loading="lazy" src="<?= base_url('fwedget/img/iso-logo-2015.png') ?>" width="75px;">
  <div style="margin:10px 0 0 5px" class="fb-like" data-href="https://www.facebook.com/mysoftheavenltd/" data-layout="box_count" data-action="like" data-size="large" data-show-faces="true" data-share="true"></div>
</div>


<!-- WhatsHelp.io widget -->
<!--<script type="text/javascript">
    (function () {
        var options = {
            facebook: "410036575718217", // Facebook page ID
            company_logo_url: "//storage.whatshelp.io/widget/2e/2ebb/2ebb501a400e8176992cde7aabb542b9/285084_410036792384862_1200684801_n.jpg", // URL of company logo (png, jpg, gif)
            greeting_message: "Hello, how may we help you? Just send us a message now to get assistance.", // Text of greeting message
            call_to_action: "", // Call to action
            position: "right", // Position may be 'right' or 'left'
        };
        var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s. = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>-->
<!-- /WhatsHelp.io widget -->

<section class="call-to-action featured footer" style="background-color: white; padding: 15px 0;">
  <div class="container">
    <div class="row">
      <div class="center">
        <h3>To build <strong>your business</strong> with <strong>Mysoftheaven (BD) Ltd.</strong> <a href="<?= base_url(); ?>request-quotation" class="btn btn-lg btn-primary request-btn">Request for Quotation</a></h3>
        <h3 style="color:black; font-family: 'Roboto', sans-serif;line-height: 37px;">A Parent Company of <a href="https://rokomariit.com/" style="color: #318af8;">Rokomari IT Ltd</a></h3>

      </div>
    </div>
  </div>
</section>

<footer id="footer" class="color">
  <div class="footer-copyright">
    <div class="container">
      <div class="row">
        <div class="col-md-2 pull-left">
          <a href="index.html" class="logo" style="margin-top:7px">
            <img alt="Porto Website Template" class="img-responsive" src="<?= base_url(); ?>fwedget/img/membership.png">
          </a>

        </div>
        <div class="col-md-10 pull-right">
          <p>© Copyright <?= date('Y') ?> | Mysoftheaven (BD) Ltd. | All Rights Reserved | <a href="<?= base_url('our-team-member') ?>">Our team member</a> | <a href="<?= base_url() ?>privacy-policy" target="_blank"> Privacy Policy </a> |<a href="<?= base_url() ?>terms" target="_blank"> Terms & Conditions </a> | <a href="<?= base_url('blog') ?>">Blogs</a> | <a href="<?= base_url() ?>pages" target="_blank"> Pages </a> </p>
        </div>
      </div>
    </div>
  </div>
</footer>
</div>

<!-- jQuery (required by Owl Carousel) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


<!-- Owl Carousel JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<!-- Vendor -->
<!-- <script type="text/javascript" src="https://mysoftheaven.com/fwedget/vendor/bootstrap/bootstrap.min.js"></script>
<script type="text/javascript" src="https://mysoftheaven.com/fwedget/vendor/jquery/jquery.min.js"></script>
<script type="text/javascript" src="https://mysoftheaven.com/fwedget/vendor/jquery.appear/jquery.appear.min.js"></script>
<script type="text/javascript" src="https://mysoftheaven.com/fwedget/vendor/jquery.easing/jquery.easing.min.js"></script>
<script type="text/javascript" src="https://mysoftheaven.com/fwedget/vendor/common/common.min.js" async></script>
 -->



<!-- <script type="text/javascript" src="<?= base_url(); ?>fwedget/vendor/jquery/jquery.min.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>fwedget/vendor/jquery/jquery.min.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>fwedget/vendor/jquery.appear/jquery.appear.min.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>fwedget/vendor/jquery.easing/jquery.easing.min.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>fwedget/vendor/jquery-cookie/jquery-cookie.min.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>fwedget/vendor/bootstrap/bootstrap.min.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>fwedget/vendor/common/common.min.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>fwedget/vendor/jquery.validation/jquery.validation.min.js"></script> -->
<!-- <script src="<?= base_url(); ?>fwedget/vendor/jquery.stellar/jquery.stellar.min.js"></script> -->
<!-- <script type="text/javascript" src="<?= base_url(); ?>fwedget/vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>fwedget/vendor/jquery.gmap/jquery.gmap.min.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>fwedget/vendor/isotope/jquery.isotope.min.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>fwedget/vendor/owlcarousel/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>fwedget/vendor/jflickrfeed/jflickrfeed.min.js"></script> -->
<!-- <script src="<?= base_url(); ?>fwedget/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>-->
<!-- <script type="text/javascript" src="<?= base_url(); ?>fwedget/vendor/vide/vide.min.js"></script> -->

<!-- Theme Base, Components and Settings -->
<script type="text/javascript" src="https://mysoftheaven.com/fwedget/js/theme.min.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>fwedget/js/swiper-bundle.min.js"></script>

<!-- Specific Page Vendor and Views -->
<!-- <script src="<?= base_url(); ?>fwedget/vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>-->
<!-- <script src="<?= base_url(); ?>fwedget/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script> -->
<!-- <script type="text/javascript" src="<?= base_url(); ?>fwedget/vendor/circle-flip-slideshow/js/jquery.flipshow.min.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>fwedget/js/views/view.home.min.js"></script> -->

<!-- Theme Custom -->
<script type="text/javascript" src="<?= base_url(); ?>fwedget/js/custom.js"></script>

<!-- Theme Initialization Files -->
<!-- <script type="text/javascript" src="<?= base_url(); ?>fwedget/js/theme.init.js" ></script> -->
<!-- <script type="text/javascript" src="https://mysoftheaven.com/fwedget/js/theme.init.js"></script> -->

<!-- add new link  -->

<!-- <script type="text/javascript" src="https://mysoftheaven.com/fwedget/vendor/jquery/jquery.min.js" async></script> -->
<!-- <script type="text/javascript" src="https://mysoftheaven.com/fwedget/vendor/jquery/jquery.min.js" async></script> -->
<!-- <script type="text/javascript" src="https://mysoftheaven.com/fwedget/vendor/jquery.appear/jquery.appear.min.js" async></script>
<script type="text/javascript" src="https://mysoftheaven.com/fwedget/vendor/jquery.easing/jquery.easing.min.js" async></script>
<script type="text/javascript" src="https://mysoftheaven.com/fwedget/vendor/jquery-cookie/jquery-cookie.min.js" async></script>
<script type="text/javascript" src="https://mysoftheaven.com/fwedget/vendor/bootstrap/bootstrap.min.js" async></script>
<script type="text/javascript" src="https://mysoftheaven.com/fwedget/vendor/common/common.min.js" async></script>
<script type="text/javascript" src="https://mysoftheaven.com/fwedget/vendor/jquery.validation/jquery.validation.min.js" async></script> -->
<!-- <script src="https://mysoftheaven.com/fwedget/vendor/jquery.stellar/jquery.stellar.min.js"></script> -->
<!-- <script type="text/javascript" src="https://mysoftheaven.com/fwedget/vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js" async></script>
<script type="text/javascript" src="https://mysoftheaven.com/fwedget/vendor/jquery.gmap/jquery.gmap.min.js" async></script>
<script type="text/javascript" src="https://mysoftheaven.com/fwedget/vendor/isotope/jquery.isotope.min.js" async></script>
<script type="text/javascript" src="https://mysoftheaven.com/fwedget/vendor/owlcarousel/owl.carousel.min.js" async></script>
<script type="text/javascript" src="https://mysoftheaven.com/fwedget/vendor/jflickrfeed/jflickrfeed.min.js" async></script> -->
<!-- <script src="https://mysoftheaven.com/fwedget/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>-->
<!-- <script type="text/javascript" src="https://mysoftheaven.com/fwedget/vendor/vide/vide.min.js" async></script> -->

<!-- Theme Base, Components and Settings -->
<script type="text/javascript" src="https://mysoftheaven.com/fwedget/js/theme.min.js" async></script>



<!-- Specific Page Vendor and Views -->
<!-- <script src="https://mysoftheaven.com/fwedget/vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>-->
<!-- <script src="https://mysoftheaven.com/fwedget/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script> -->
<!-- <script type="text/javascript" src="https://mysoftheaven.com/fwedget/vendor/circle-flip-slideshow/js/jquery.flipshow.min.js" async></script>
<script type="text/javascript" src="https://mysoftheaven.com/fwedget/js/views/view.home.min.js" async></script> -->

<!-- Theme Custom -->
<script type="text/javascript" src="https://mysoftheaven.com/fwedget/js/custom.js" async></script>

<!-- Theme Initialization Files -->
<!-- <script type="text/javascript" src="https://mysoftheaven.com/fwedget/js/theme.init.js" async></script> -->



<!-- Specific Page Vendor and Views -->
<!-- <script type="text/javascript" src="https://mysoftheaven.com/fwedget/js/views/view.contact.js" async></script> -->
<script type="text/javascript" src="https://maps.google.com/maps/api/js?key=AIzaSyDMxJ92oBkSnVNHFX3R8XhtYQPEgk1_IiI"></script>
<!-- end new link  -->



<script>
  $(document).ready(function() {

    var counters = $(".counter_value");
    var countersQuantity = counters.length;
    var counter = [];
    let newArray = [];

    // let minumuValue = Math.min(...counters);  
    console.log("minumuValue: " + counters);


    for (i = 0; i < countersQuantity; i++) {
      counter[i] = parseInt(counters[i].innerHTML);
      newArray.push(counter[i]);

    }

    let minimunValue = Math.min(...newArray);

    if (minimunValue > 20) {
      minimunValue = 20;
    }

    var count = function(start, value, id) {
      var localStart = value - start;

      setInterval(function() {
        if (localStart < value) {
          localStart++;
          counters[id].innerHTML = localStart + "+";
        }
      }, 80);
    }

    for (j = 0; j < countersQuantity; j++) {
      count(minimunValue, counter[j], j);
    }
  });
</script>






<?php if ($this->router->fetch_method('contact-us')) { ?>
  <!-- Specific Page Vendor and Views -->
  <!-- <script type="text/javascript" src="<?= base_url(); ?>fwedget/js/views/view.contact.js"></script> -->
  <script type="text/javascript" src="https://maps.google.com/maps/api/js?key=AIzaSyDMxJ92oBkSnVNHFX3R8XhtYQPEgk1_IiI"></script>

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
        image: "<?= base_url(); ?>fwedget/img/pin.png",
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



</body>

</html>