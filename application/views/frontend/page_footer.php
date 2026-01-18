<!-- dynamic script start -->

<?php
$current_url = base_url(uri_string());
$Specific = $this->db->where('page_link', $current_url)->where('type', 2)->get('script')->result();
$all = $this->db->where('type', 1)->get('script')->result();

foreach ($all as $key => $value) {
  echo $value->script;
}
foreach ($Specific as $key => $value) {
  echo $value->script;
}

?>
<!-- dynamic script end -->























<style>
  /* New Footer Styles */
  #new-footer {
    background-color: #eaf6ff;
    padding-top: 60px;
    padding-bottom: 0;
    font-family: 'Open Sans', sans-serif;
    color: #333;
    font-size: 14px;
  }

  #new-footer h4 {
    color: #000;
    font-weight: 700;
    font-size: 16px;
    margin-bottom: 25px;
    font-family: 'Nourd-Bold', sans-serif;
  }

  #new-footer ul {
    list-style: none;
    padding: 0;
    margin: 0;
  }

  #new-footer ul li {
    margin-bottom: 12px;
  }

  #new-footer ul li a {
    color: #555;
    text-decoration: none;
    transition: color 0.3s;
    font-size: 14px;
  }

  #new-footer ul li a:hover {
    color: #0088cc;
  }

  .footer-logo-section {
    margin-bottom: 30px;
  }

  .footer-logo {
    max-width: 220px;
    margin-bottom: 20px;
  }

  .contact-info-item {
    display: flex;
    align-items: flex-start;
    margin-bottom: 15px;
    color: #555;
  }

  .contact-info-item i {
    margin-right: 10px;
    font-size: 16px;
    margin-top: 3px;
    color: #666;
    width: 20px;
    text-align: center;
  }

  .contact-info-item img {
    margin-right: 10px;
    margin-top: 3px;
    width: 20px;
  }

  .membership-icons {
    margin-top: 20px;
    display: flex;
    gap: 15px;
    align-items: center;
  }

  .membership-icons img {
    height: 35px;
    object-fit: contain;
  }

  .footer-bottom-bar {
    border-top: 1px solid #d1e6f5;
    margin-top: 40px;
    padding: 20px 0;
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
  }

  .download-btn {
    background-color: #0077b5;
    color: #fff !important;
    padding: 10px 20px;
    border-radius: 25px;
    font-weight: 600;
    display: inline-flex;
    align-items: center;
    gap: 10px;
    text-decoration: none;
    transition: background 0.3s;
  }

  .download-btn:hover {
    background-color: #005fa3;
    text-decoration: none;
  }

  .footer-social-icons {
    display: flex;
    gap: 10px;
  }

  .footer-social-icons a {
    width: 35px;
    height: 35px;
    background-color: #fff;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #0088cc;
    font-size: 16px;
    transition: all 0.3s;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
  }

  .footer-social-icons a:hover {
    background-color: #0088cc;
    color: #fff;
  }

  .copyright-text {
    color: #777;
    margin-top: 5px;
  }

  @media (max-width: 767px) {
    .footer-bottom-bar {
      flex-direction: column;
      gap: 15px;
      text-align: center;
    }

    .footer-col {
      margin-bottom: 30px;
    }
  }
</style>

<footer id="new-footer">
  <div class="container">
    <div class="row">
      <!-- Column 1: Logo & Contact -->
      <div class="col-md-4 footer-col">
        <div class="footer-logo-section">
          <img src="<?= base_url('fwedget/img/mysoft-logo.png') ?>" alt="Mysoftheaven (BD) Ltd." class="footer-logo">
          <div style="font-weight: 600; margin-bottom: 20px; display:none;">Mysoftheaven (BD) Ltd.<br><small>A Complete
              IT Solution</small></div>
        </div>

        <div class="contact-info-item">
          <i class="fa fa-phone"></i>
          <span>+880 1958-633202</span>
        </div>
        <div class="contact-info-item">
          <i class="fa fa-envelope"></i>
          <span>info@mysoftheaven.com</span>
        </div>
        <div class="contact-info-item">
          <!-- BD Flag Placeholder -->
          <img src="https://flagcdn.com/w40/bd.png" alt="BD">
          <span>P.R.Tower, 924/1, Level 8, Begum Rokeya Sarani, Shewrapara , Mirpur, Dhaka-1216.</span>
        </div>
        <div class="contact-info-item">
          <!-- US Flag Placeholder -->
          <img src="https://flagcdn.com/w40/us.png" alt="USA">
          <span>8813 NW 23 Street. Miami, FL 33172, USA.</span>
        </div>

        <div class="membership-icons">
          <!-- Using text/placeholders for icons as specific images might not be in the exact path -->
          <img src="<?= base_url('fwedget/img/basis_logo.png') ?>" alt="BASIS" onerror="this.style.display='none'">
          <img src="<?= base_url('fwedget/img/bacco_logo.png') ?>" alt="BACCO" onerror="this.style.display='none'">
          <!-- Add more icons here if available -->
        </div>
      </div>

      <!-- Column 2: Company -->
      <div class="col-md-2 footer-col">
        <h4>Company</h4>
        <ul>
          <li><a href="<?= base_url('about-us') ?>">About Us</a></li>
          <li><a href="<?= base_url('portfolio') ?>">Portfolio</a></li>
          <li><a href="<?= base_url('all-services') ?>">Our Services</a></li>
          <li><a href="#">Staff Augmentation</a></li>
          <li><a href="<?= base_url('company-profile') ?>">Company Profile</a></li>
        </ul>
      </div>

      <!-- Column 3: Quick Links -->
      <div class="col-md-2 footer-col">
        <h4>Quick Links</h4>
        <ul>
          <li><a href="#">Affiliates</a></li>
          <li><a href="<?= base_url('privacy-policy') ?>">Privacy Policy</a></li>
          <li><a href="<?= base_url('terms') ?>">Terms & Condition</a></li>
          <li><a href="#">Refund Policy</a></li>
          <li><a href="#">Affiliate Policy</a></li>
        </ul>
      </div>

      <!-- Column 4: Our Products -->
      <div class="col-md-2 footer-col">
        <h4>Our Products</h4>
        <ul>
          <li><a href="#">HR Sheba</a></li>
          <li><a href="#">Sheba ERP</a></li>
          <li><a href="#">Remit Sheba</a></li>
          <li><a href="#">Gym Master</a></li>
          <li><a href="#">Point of Sales</a></li>
        </ul>
      </div>

      <!-- Column 5: Resources -->
      <div class="col-md-2 footer-col">
        <h4>Resources</h4>
        <ul>
          <li><a href="#">Page</a></li>
          <li><a href="#">Documentation</a></li>
          <li><a href="#">FAQ</a></li>
          <li><a href="<?= base_url('contact-us') ?>">Contact</a></li>
          <li><a href="<?= base_url('about-us') ?>">About</a></li>
        </ul>
      </div>
    </div>

    <!-- Bottom Bar -->
    <div class="footer-bottom-bar">
      <div>
        <a href="<?= base_url('company-profile') ?>" class="download-btn">
          <i class="fa fa-download"></i> Download Company Profile
        </a>
      </div>
      <div class="copyright-text">
        Copyright © 2026 Mysoftheaven (BD) Ltd.
      </div>
      <div class="footer-social-icons">
        <a href="https://www.facebook.com/mysoftheavenltd/" target="_blank"><i class="fa fa-facebook"></i></a>
        <a href="https://www.linkedin.com/company/mysoftheaven/mycompany/" target="_blank"><i
            class="fa fa-linkedin"></i></a>
        <a href="https://www.youtube.com/c/mysoftheaven" target="_blank"><i class="fa fa-youtube-play"></i></a>
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
<script type="text/javascript"
  src="https://maps.google.com/maps/api/js?key=AIzaSyDMxJ92oBkSnVNHFX3R8XhtYQPEgk1_IiI"></script>
<!-- end new link  -->



<script>
  $(document).ready(function () {

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

    var count = function (start, value, id) {
      var localStart = value - start;

      setInterval(function () {
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
  <script type="text/javascript"
    src="https://maps.google.com/maps/api/js?key=AIzaSyDMxJ92oBkSnVNHFX3R8XhtYQPEgk1_IiI"></script>

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
    var mapCenterAt = function (options, e) {
      e.preventDefault();
      $("#googlemaps").gMap("centerAt", options);
    }
  </script>

<?php } ?>



</body>

</html>