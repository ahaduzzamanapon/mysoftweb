<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title><?= $meta_title ?> | <?= $domain_title ?></title>
    <meta name="keywords" content="<?= $meta_keywords ?>">
    <meta name="description" content="<?= $meta_description ?>">
    <meta name="tag" content="<?= isset($meta_tag) ? $meta_tag : '' ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">





    <meta property="og:image" content="https://mysoftheaven.com/fwedget/img/mysoft-logo.png" />

    <meta property="og:image:width" content="180" />

    <meta property="og:image:height" content="110" />

    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url(); ?>fwedget/img/favicon.ico">
    <!-- <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light"
        rel="stylesheet" type="text/css"> -->
    <!-- Vendor CSS -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url(); ?>fwedget/vendor/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="<?= base_url(); ?>fwedget/vendor/fontawesome/css/font-awesome.css">
    <link rel="stylesheet" href="<?= base_url(); ?>fwedget/vendor/owlcarousel/owl.carousel.min.css" media="screen">
    <link rel="stylesheet" href="<?= base_url(); ?>fwedget/vendor/owlcarousel/owl.theme.default.min.css" media="screen">
    <link rel="stylesheet" href="<?= base_url(); ?>fwedget/vendor/magnific-popup/magnific-popup.css" media="screen">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

   


    <!-- Theme CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>fwedget/css/theme.css">
    <link rel="stylesheet" href="<?= base_url(); ?>fwedget/css/theme-elements.css">
    <link rel="stylesheet" href="<?= base_url(); ?>fwedget/css/theme-blog.css">
    <link rel="stylesheet" href="<?= base_url(); ?>fwedget/css/theme-animate.css">
    <link rel="stylesheet" href="<?= base_url(); ?>fwedget/vendor/circle-flip-slideshow/css/component.css"
        media="screen">
    <link rel="stylesheet" href="<?= base_url(); ?>fwedget/css/skins/default.css">
    <link rel="stylesheet" href="<?= base_url(); ?>fwedget/css/custom.css">
    <link rel="stylesheet" href="<?= base_url(); ?>fwedget/css/swiper-bundle.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


    <style>
        .tg-yw4l {
            text-align-last: center;
        }

        @media screen and (min-width: 360px) and (max-width: 430px) {

            .nav-main-collapse {
                background-color: #0088cc !important;
                color: #fff !important;
            }

            .btn-responsive-nav {
                background-color: #0088cc !important;
                color: #fff !important;
            }

            #header .nav-main ul li {
                border-bottom: 1px solid #fff !important;
            }

        }

         /* Fonts */
    @font-face {
        font-family: 'Nourd-Bold';
        src: url('<?= base_url("home2media/nourd_bold.ttf") ?>') format('truetype');
        font-weight: bold;
        font-style: normal;
        font-display: swap;
    }
    </style>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/fonts/fontawesome-webfont.eot"> -->
    <!-- <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/fonts/fontawesome-webfont.svg"> -->
    <!-- <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/fonts/fontawesome-webfont.ttf"> -->
    <!-- <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/fonts/fontawesome-webfont.woff"> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/fonts/FontAwesome.otf"> -->


    <!-- add new link -->
    <link rel="stylesheet" href="https://mysoftheaven.com/fwedget/vendor/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="https://mysoftheaven.com/fwedget/vendor/fontawesome/css/font-awesome.css">
    <link rel="stylesheet" href="https://mysoftheaven.com/fwedget/vendor/owlcarousel/owl.carousel.min.css"
        media="screen">
    <link rel="stylesheet" href="https://mysoftheaven.com/fwedget/vendor/owlcarousel/owl.theme.default.min.css"
        media="screen">
    <link rel="stylesheet" href="https://mysoftheaven.com/fwedget/vendor/magnific-popup/magnific-popup.css"
        media="screen">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="https://mysoftheaven.com/fwedget/css/theme.css">
    <link rel="stylesheet" href="https://mysoftheaven.com/fwedget/css/theme-elements.css">
    <link rel="stylesheet" href="https://mysoftheaven.com/fwedget/css/theme-blog.css">
    <link rel="stylesheet" href="https://mysoftheaven.com/fwedget/css/theme-animate.css">
    <link rel="stylesheet" href="https://mysoftheaven.com/fwedget/vendor/circle-flip-slideshow/css/component.css"
        media="screen">
    <link rel="stylesheet" href="https://mysoftheaven.com/fwedget/css/skins/default.css">
    <link rel="stylesheet" href="https://mysoftheaven.com/fwedget/css/custom.css">

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <!-- Head Libs -->
    <!-- <script src="https://mysoftheaven.com/fwedget/vendor/modernizr/modernizr.js"></script> -->


    <!--end new link -->

    <!-- Head Libs -->
    <!-- <script src="<?= base_url(); ?>fwedget/vendor/modernizr/modernizr.js"></script> -->
    <!--[if IE]>
    <link rel="stylesheet" href="<?= base_url(); ?>fwedget/css/ie.css">
    <![endif]-->

    <!--[if lte IE 8]>
    <script src="<?= base_url(); ?>fwedget/vendor/respond/respond.js"></script>
    <script src="<?= base_url(); ?>fwedget/vendor/excanvas/excanvas.js"></script>
    <![endif]-->

    <!-- <script type="text/javascript" src="https://secure.skypeassets.com/i/scom/js/skype-uri.js"></script>
<div id="SkypeButton_Call_mostafa.csit_1">
 <script type="text/javascript">
 Skype.ui({
 "name": "chat",
 "element": "SkypeButton_Call_mostafa.csit_1",
 "participants": ["mostafa.csit"],
 "imageSize": 32
 });
 </script>
</div> -->

    <!-- Google Tag Manager -->
    <!-- Google Tag Manager -->
    <script>
        window.dataLayer = window.dataLayer || [];
        dataLayer.push({
            'event': 'Pageview',
            'pagePath': '<?php echo current_url(); ?>',
            'pageTitle': '<?= $meta_title ?> | <?= $domain_title ?>',
            'visitorType': '<?= $this->session->userdata('user_id') == '' ? 'customer' : '' ?>',
            'location_id': "<?php echo $_SERVER['REMOTE_ADDR']; ?>"
        });

        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5FKLJ3ZH');
    </script>

    <!-- End Google Tag Manager -->

    <!-- End Google Tag Manager -->
</head>

<?php

$current_url = base_url(uri_string());
update_sitemap_txt($current_url);
?>

<body>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FKLJ3ZH"
            height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->










    <div id="fb-root"></div>
    <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.12';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <div class="body">
        <header id="header">

        

            <div class="container">
                <div class="logo">
                    <a href="<?= base_url(); ?>">
                        <img loading="lazy" alt="Mysoftheaven (BD) Ltd. Logo" height="54" data-sticky-height="40"
                            src="<?= base_url('fwedget/img/mysoft-logo.png') ?>" title="Mysoftheaven (BD) Ltd.">
                    </a>
                </div>

                <div class="hidden-xs" style="float: right;margin: 15px 0 0 15px;position: relative;">
                    <ul class="social-icons">
                        <li class="facebook"><a href="https://www.facebook.com/mysoftheavenltd/" target="_blank"
                                title="Facebook">Facebook</a></li>
                        <li class="youtube"><a href="https://www.youtube.com/c/mysoftheaven" target="_blank"
                                title="Youtube">Youtube</a></li>
                        <li class="twitter"><a href="https://twitter.com/mysoftheaven" target="_blank"
                                title="Twitter">Twitter</a></li>
                        <!-- <li class="googleplus"><a href="https://twitter.com/mysoftheaven" target="_blank" title="Google Plus">Google Plus</a></li> -->
                        <li class="linkedin"><a href="https://www.linkedin.com/company/mysoftheaven/mycompany/"
                                target="_blank" title="Linkedin">Linkedin</a></li>
                        <!-- <li class="skype"><a href="http://www.skype.com/" target="_blank" title="Skype">Skype</a></li> -->
                    </ul>
                </div>


                <nav class="hidden-xs">
                    <ul class="nav nav-pills nav-top">
                        <li class="email"> <span><i class="fa fa-envelope"></i>info@mysoftheaven.com</span> </li>
                        <li class="phone"> <span><i class="fa fa-phone"></i> <a href="javascript:void(0);" onclick="copyToClipboard('+8801958633202', this);">+880 1958-633202</a>, <a href="javascript:void(0);" onclick="copyToClipboard('+8801970776605', this);">+880 1970-776605</a>, <a href="javascript:void(0);" onclick="copyToClipboard('+8801404453001', this);">+8801404453001</a></span> </li>
                    </ul>
                    <script>
                        function copyToClipboard(text, element) {
                            var input = document.createElement('input');
                            input.setAttribute('value', text);
                            document.body.appendChild(input);
                            input.select();
                            var result = document.execCommand('copy');
                            document.body.removeChild(input);
                            if (result) {
                                element.setAttribute('title', 'Copied!');
                                $(element).tooltip('show');
                                setTimeout(function() {
                                    $(element).tooltip('hide');
                                }, 1000);
                            }
                            return result;
                        }
                    </script>
                </nav>
                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

                <button class="btn btn-responsive-nav btn-inverse" id="navbarResponsivebtn" data-toggle="collapse"
                    data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
            </div>

            <div class="navbar-collapse nav-main-collapse collapse" id="navbarResponsive" style="margin-top: 18px;">
                <div class="container">

                    <nav class="nav-main mega-menu">
                        <ul class="nav nav-pills nav-main" id="mainMenu">
                            <li class="<?= activate_menu_method('index'); ?>"> <a href="<?= base_url(); ?>"><i
                                        class="fa fa-home menuicon"></i> Home</a> </li>

                            <li class="dropdown">
                                <a class="dropdown-toggle" href="#"><i class="fa fa-users menuicon"></i> About <i
                                        class="fa fa-angle-down"></i> </a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?= base_url('about-us') ?>">About Us</a></li>
                                    <li><a href="<?= base_url('ceo-message') ?>">CEO Message</a></li>
                                    <li><a href="<?= base_url('company-profile') ?>">Company Profile</a></li>
                                    <li><a href="<?= base_url('management-team') ?>">Management Team</a></li>
                                </ul>
                            </li>

                            <li
                                class="dropdown mega-menu-item mega-menu-fullwidth <?php echo activate_menu_method('service') ?>">
                                <a class="dropdown-toggle" href="javascript:void(0);"><i
                                        class="fa fa-cogs menuicon"></i> Services <i class="fa fa-angle-down"></i> </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <div class="mega-menu-content">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <ul class="sub-menu">
                                                        <li>
                                                            <span class="mega-menu-sub-title">WEB DESIGN &
                                                                DEVELOPMENT</span>
                                                            <ul class="sub-menu">
                                                                <li><a
                                                                        href="<?= base_url('service/website-design-development') ?>">Web
                                                                        Design & Development</a></li>
                                                                <li><a
                                                                        href="<?= base_url('service/web-application-development') ?>">Web
                                                                        Application Development</a></li>
                                                                <li><a
                                                                        href="<?= base_url('service/e-commerce-solution') ?>">E-Commerce
                                                                        Solution</a></li>
                                                                <li><a
                                                                        href="<?= base_url('service/content-management-system-development') ?>">Content
                                                                        Management System (CMS) Development</a></li>
                                                            </ul>

                                                            <span class="mega-menu-sub-title">CUSTOM SOFTWARE
                                                                DEVELOPMENT</span>
                                                            <ul class="sub-menu">
                                                                <li><a
                                                                        href="<?= base_url('service/enterprise-resource-planning-erp') ?>">Enterprise
                                                                        Resource Planning (ERP)</a></li>
                                                                <li><a href="<?= base_url('#') ?>">Integrated Office
                                                                        Management System (IOMS)</a></li>
                                                                <li><a href="<?= base_url('#') ?>">Customer Relationship
                                                                        Management (CRM)</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-3">
                                                    <ul class="sub-menu">
                                                        <li>
                                                            <span class="mega-menu-sub-title">MOBILE APPS
                                                                DEVELOPMENT</span>
                                                            <ul class="sub-menu">
                                                                <li><a
                                                                        href="<?= base_url('service/android-apps-development') ?>">Android
                                                                        Apps Development</a></li>
                                                                <li><a
                                                                        href="<?= base_url('service/ios-apps-development') ?>">IOS
                                                                        Apps Development</a></li>
                                                                <li><a
                                                                        href="<?= base_url('service/windows-apps-development') ?>">Windows
                                                                        Apps Development</a></li>
                                                                <li><a
                                                                        href="<?= base_url('service/hybrid-mobile-apps') ?>">Hybrid
                                                                        Mobile Apps</a></li>
                                                            </ul>

                                                            <span class="mega-menu-sub-title">MOBILE GAMES
                                                                DEVELOPMENT</span>
                                                            <ul class="sub-menu">
                                                                <li><a
                                                                        href="<?= base_url('service/android-games-development') ?>">Android
                                                                        Games Development</a></li>
                                                                <li><a
                                                                        href="<?= base_url('service/ios-games-development') ?>">IOS
                                                                        Games Development</a></li>
                                                                <li><a
                                                                        href="<?= base_url('service/windows-games-development') ?>">Windows
                                                                        Games Development</a></li>
                                                                <li><a
                                                                        href="<?= base_url('service/hybrid-mobile-games-development') ?>">Hybrid
                                                                        Mobile Games Development</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-3">
                                                    <ul class="sub-menu">
                                                        <li>
                                                            <span class="mega-menu-sub-title">DIGITAL MARKETING</span>
                                                            <ul class="sub-menu">
                                                                <li><a
                                                                        href="<?= base_url('service/social-media-marketing-smm') ?>">Social
                                                                        Media Marketing (SMM)</a></li>
                                                                <li><a href="<?= base_url('service/email-marketing') ?>">Email
                                                                        Marketing</a></li>
                                                                <li><a href="<?= base_url('service/sms-marketing') ?>">SMS
                                                                        Marketing</a></li>
                                                                <li><a
                                                                        href="<?= base_url('service/search-engine-optimization-seo') ?>">Search
                                                                        Engine Optimization (SEO)</a></li>
                                                            </ul>

                                                            <span class="mega-menu-sub-title">ADVANCE TECHNOLOGY</span>
                                                            <ul class="sub-menu">
                                                                <li><a
                                                                        href="<?= base_url('service/natural-language-processing-nlp') ?>">Natural
                                                                        Language Processing (NLP)</a></li>
                                                                <li><a href="<?= base_url('service/machine-learning') ?>">Machine
                                                                        Learning</a></li>
                                                                <li><a
                                                                        href="<?= base_url('service/blockchain-technology') ?>">Blockchain
                                                                        Technology </a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-3">
                                                    <ul class="sub-menu">
                                                        <li>
                                                            <span class="mega-menu-sub-title">OTHERS SERVICES</span>
                                                            <ul class="sub-menu">
                                                                <li><a
                                                                        href="<?= base_url('service/outsource-project-development') ?>">Outsource
                                                                        Project Development </a></li>
                                                                <li><a
                                                                        href="<?= base_url('service/business-process-outsourcing-bpo') ?>">Business
                                                                        Process Outsourcing (BPO)</a></li>
                                                                <li><a href="<?= base_url('service/ict-training') ?>">ICT
                                                                        Training </a></li>
                                                                <li><a href="<?= base_url('service/ict-consultancy') ?>">ICT
                                                                        Consultancy</a></li>
                                                                <li><a
                                                                        href="<?= base_url('service/support-maintenance-service') ?>">Support
                                                                        & Maintenance Service</a></li>
                                                                <li><a
                                                                        href="<?= base_url('service/manpower-outsource') ?>">Manpower
                                                                        Outsource</a></li>
                                                                <li><a
                                                                        href="<?= base_url('service/graphics-design-multimedia') ?>">Graphics
                                                                        Design & Multimedia</a></li>
                                                                <li><a
                                                                        href="<?= base_url('service/domain-hosting-services') ?>">Domain
                                                                        & Hosting Services</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="<?= activate_menu_method('products') ?>"> <a href="<?= base_url('products') ?>"><i
                                        class="fa fa-cubes menuicon"></i> Products</a> </li>
                            <li> <a href="<?= base_url() . 'notable_products' ?>"><i class="fa fa-cube menuicon"></i>
                                    Projects</a> </li>
                            <li class="<?= activate_menu_method('portfolio') ?>"> <a href="<?= base_url('portfolio') ?>"><i
                                        class="fa fa-briefcase menuicon"></i> Portfolio </a> </li>
                            <li class="dropdown <?= activate_menu_class('client') ?>">
                                <a class="dropdown-toggle" href="#"><i class="fa fa-th menuicon"></i> Clients <i
                                        class="fa fa-angle-down"></i> </a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?= base_url() . 'client/government-sector' ?>">Government Sector</a></li>
                                    <li><a href="<?= base_url() . 'client/private-sector' ?>">Private Sector</a></li>
                                    <li><a href="<?= base_url() . 'client/education-sector' ?>">Education Sector</a></li>
                                    <li><a href="<?= base_url() . 'client/offshore-client' ?>">Offshore Client</a></li>
                                    <li><a href="<?= base_url() . 'client/rmg-sector' ?>">RMG Sector</a></li>
                                </ul>
                            </li>
                            <!-- <li class="dropdown <?= activate_menu_class('client') ?>">
                                <a class="dropdown-toggle" href="#"><i class="fa fa-th menuicon"></i> Pages <i
                                        class="fa fa-angle-down"></i> </a>
                                <ul class="dropdown-menu">
                                    <?php
                                    $pages = $this->db->get('pages')->result_array();
                                    foreach ($pages as $page) {
                                    ?>
                                        <li><a href="<?= base_url('pages/' . $page['page_link']); ?>"><?= $page['title'] ?></a></li>
                                    <?php
                                    }

                                    ?>                                   
                                </ul>
                            </li> -->
                            <li> <a href="<?= base_url('events') ?>"><i class="fa fa-file-text menuicon"></i> Events</a>
                            </li>
                            <li class="<?= activate_menu_method('contact_us') ?>"> <a
                            href="<?= base_url('contact-us') ?>"><i class="fa fa-map-marker menuicon"></i>
                            Contact</a> </li>
                            <li class="<?= activate_menu_method('hire_talent') ?>"> <a href="<?= base_url('hire-talent') ?>" style="border: 1px solid #1e92d6;border-radius: 20px;padding: 5px 20px;font-family: Nourd-Bold;font-weight: 500;font-size: 13px;"></i> Hire Talent</a> </li>
<li class="<?= activate_menu_method('home2') ?>"> <a href="<?= base_url('home2') ?>" style="border: 1px solid #1e92d6;border-radius: 20px;padding: 5px 20px;font-family: Nourd-Bold;font-weight: 500;font-size: 13px;"></i> Home 2</a> </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <style>
                .showthis {
                    display: block !important;
                }
            </style>
            <script>
                $(document).ready(function() {
                    $('#navbarResponsivebtn').click(function() {
                        $('#navbarResponsive').collapse('toggle');
                    });
                });
            </script>
            <script>
                $(document).ready(function() {
                    $('.dropdown-toggle').click(function(e) {
                        e.preventDefault(); // Prevent the default action
                        $(this).next('ul').toggleClass('dropdown-menu');
                    });
                });
            </script>
        </header>