<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@300..700&family=Nabla&display=swap"
    rel="stylesheet">
<!-- Devicon for logos -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css">
<!-- Owl Carousel CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
<!-- AOS Animation CSS -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

<style>
    /* Fonts */
    @font-face {
        font-family: 'Nourd-Bold';
        src: url('<?= base_url("home2media/nourd_bold.ttf") ?>') format('truetype');
        font-weight: bold;
        font-style: normal;
        font-display: swap;
    }

    body {
        font-family: 'Poppins', sans-serif;
        color: #333;
        overflow-x: hidden;
    }

    .ht-section {
        padding: 60px 0;
    }

    .section-title {
        font-family: 'Nourd-Bold', sans-serif;
        font-size: 36px;
        color: #000;
        margin-bottom: 40px;
        text-align: center;
    }

    .text-blue {
        color: #0088cc;
    }

    .btn-custom {
        padding: 10px 30px;
        border-radius: 30px;
        font-weight: 600;
        text-transform: uppercase;
        text-decoration: none;
        display: inline-block;
        transition: 0.3s;
    }

    .btn-blue {
        background: #0088cc;
        color: #fff;
    }

    .btn-outline {
        border: 2px solid #0088cc;
        color: #0088cc;
    }

    .btn-outline:hover {
        background: #0088cc;
        color: #fff;
    }

    /* Hero Section */
    .hero-section {
        padding: 80px 0;
        background: #fff;
    }

    .hero-title {
        font-family: 'Nourd-Bold', sans-serif;
        font-size: 42px;
        line-height: 1.2;
        margin-bottom: 20px;
    }

    .hero-badge {
        display: inline-block;
        background: #FFD1E3;
        color: #D81B60;
        padding: 5px 15px;
        border-radius: 20px;
        font-weight: 700;
        margin-bottom: 10px;
    }

    .hero-img {
        width: 100%;
        max-width: 600px;
    }

    /* Stats Strip */
    .stats-strip {
        padding: 30px 0;
        border-top: 1px solid #eee;
        border-bottom: 1px solid #eee;
    }

    .stat-item {
        display: flex;
        align-items: center;
        gap: 15px;
    }

    .custom-stat-number {
        font-family: 'Nourd-Bold', sans-serif;
        font-weight: 800;
        margin: 0;
    }

    .stat-icon {
        width: 40px;
        height: 40px;
    }

    /* Services Grid */
    .service-card {
        padding: 30px;
        border-radius: 12px;
        text-align: left;
        transition: 0.3s;
        height: 100%;
        margin-bottom: 20px;
    }

    .service-card.light-blue {
        background: #E1F5FE;
    }

    .service-card.light-pink {
        background: #FCE4EC;
    }

    .service-card.light-green {
        background: #E8F5E9;
    }

    .service-card.light-orange {
        background: #FFF3E0;
    }

    .service-card.light-purple {
        background: #F3E5F5;
    }

    .service-icon {
        width: 50px;
        height: 50px;
        margin-bottom: 20px;
        background: #fff;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
    }

    .service-title {
        font-weight: 700;
        font-size: 18px;
        margin-bottom: 15px;
    }

    /* Products */
    .product-card {
        border: 1px solid #eee;
        border-radius: 12px;
        overflow: hidden;
        padding: 20px;
        text-align: center;
        background: #fff;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        margin-bottom: 30px;
    }

    .product-img {
        width: 100%;
        height: auto;
        margin-bottom: 15px;
        border-radius: 8px;
    }

    /* Industries */
    .industry-icon {
        width: 80px;
        height: 80px;
        border: 1px solid #eee;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 10px auto;
        transition: 0.3s;
    }

    .industry-icon:hover {
        background: #0088cc;
        color: #fff;
        border-color: #0088cc;
    }

    .industry-item {
        text-align: center;
        margin-bottom: 30px;
    }

    /* Relationship Images */
    .rel-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 15px;
    }

    .rel-img {
        width: 100%;
        height: 250px;
        object-fit: cover;
        border-radius: 12px;
    }

    /* Clients & Testimonials */
    .client-logo {
        max-width: 100px;
        height: 50px;
        width: auto;
        margin: 20px;
        filter: grayscale(100%);
        transition: 0.3s;
        object-fit: contain;
    }

    .client-logo:hover {
        filter: grayscale(0%);
    }

    .testimonial-card {
        background: #E1F5FE;
        padding: 30px;
        border-radius: 12px;
        text-align: center;
        margin-bottom: 30px;
        position: relative;
    }

    .testimonial-img {
        width: 70px;
        height: 70px;
        border-radius: 50%;
        margin: 0 auto 15px auto;
        object-fit: cover;
    }

    .award-card {
        padding: 20px;
        border: 1px solid #eee;
        border-radius: 12px;
        text-align: center;
        margin-bottom: 30px;
        transition: 0.3s;
    }

    .award-card:hover {
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }

    .award-img {
        height: 80px;
        margin-bottom: 15px;
        object-fit: contain;
    }

    /* Membership */
    .membership-logo {
        height: 60px;
        margin: 15px 30px;
        filter: grayscale(100%);
        transition: 0.3s;
    }

    .membership-logo:hover {
        filter: grayscale(0%);
    }

    /* Footer Form */
    .footer-cta {
        background: linear-gradient(90deg, #002B49 0%, #004D80 100%);
        color: #fff;
        padding: 60px 0;
        border-radius: 20px;
        margin-bottom: -50px;
        position: relative;
        z-index: 10;
        overflow: hidden;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .hero-title {
            font-size: 32px;
        }

        .rel-grid {
            grid-template-columns: 1fr;
        }

        .stat-item {
            margin-bottom: 20px;
            justify-content: center;
        }

        .footer-cta {
            text-align: center;
        }

        .footer-cta img {
            margin: 0 auto 20px auto;
            width: 80% !important;
            margin-left: 0 !important;
        }

        .footer-cta .text-left {
            text-align: center !important;
            padding: 20px !important;
        }
    }
</style>

<div class="ht-main-wrapper">

    <!-- Hero Section -->
    <!-- Hero Section -->
    <!-- Hero Section -->
    <section class="hero-section" style="padding-bottom: 0px; position: relative; overflow: visible;">
        <div class="container">
            <div class="row">
                <!-- Left Content -->
                <div class="col-lg-5" data-aos="fade-right" data-aos-duration="1000">
                    <h1 class="hero-title" style="margin-bottom: 25px;">
                        Transforming Ideas. <span class="text-blue">Powering</span><br>
                        <span
                            style="background: #D9D9D9; padding: 0 5px; display: inline-block; line-height: 1.2;">Scalable
                            Solutions.</span>
                    </h1>
                    <p class="hero-desc"
                        style="color: #555; font-size: 16px; line-height: 1.6; margin-bottom: 35px; text-align: justify;">
                        With <strong>15+ years</strong> of experience, MySoftHeaven is a trusted technology solutions
                        provider delivering secure, scalable, and mission-critical software. ISO 9001, 27001,
                        and 20000 certified, we combine deep technical expertise with proven delivery
                        discipline to power complex systems that organizations rely on every day.
                    </p>
                    <div class="d-flex gap-3 btn-group-hero">
                        <a href="<?= base_url('portfolio') ?>" class="btn-custom btn-outline"
                            style="padding: 12px 30px; border-radius: 30px; font-weight: 600;">View Portfolio</a>
                        <a href="<?= base_url('service') ?>" class="btn-custom btn-blue"
                            style="padding: 12px 30px; border-radius: 30px; font-weight: 600;">Explore Services <i
                                class="fa fa-angle-right"></i></a>
                    </div>
                </div>

                <!-- Right Content (Grid Layout) -->
                <div class="col-lg-7" style="position: relative;" data-aos="fade-left" data-aos-duration="1000">
                    <div class="row g-3">
                        <!-- Top Row: 90000M+ and 100M+ -->
                        <div class="col-md-6 col-6">
                            <div class="p-4"
                                style="background: #90CAF9; border-radius: 20px; color: #000; display: flex; flex-direction: column; justify-content: center; min-height: 160px; text-align: center;">
                                <h2 class="custom-stat-number" style="font-size: 32px;">90000M+</h2>
                                <p style="margin: 0; font-size: 14px; font-weight: 500;">Revenue Processed</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-6">
                            <div class="p-4"
                                style="background: #69F0AE; border-radius: 20px; color: #000; display: flex; flex-direction: column; justify-content: center; min-height: 160px; text-align: center;">
                                <h2 class="custom-stat-number" style="font-size: 32px;">100M+</h2>
                                <p style="margin: 0; font-size: 14px; font-weight: 500;">Records Digitized</p>
                            </div>
                        </div>

                        <!-- Bottom Row Left: 1100M+ and 9M+ Stacked -->
                        <div class="col-md-6 col-6 d-flex flex-column gap-3">
                            <div class="p-4"
                                style="background: #F8BBD0; border-radius: 20px; color: #000; display: flex; flex-direction: column; justify-content: center; min-height: 160px; text-align: center;">
                                <h2 class="custom-stat-number" style="font-size: 28px;">1100M+</h2>
                                <p style="margin: 0; font-size: 14px; font-weight: 500;">Service<br>Interactions</p>
                            </div>
                            <div class="p-4"
                                style="background: #90CAF9; border-radius: 20px; color: #000; display: flex; flex-direction: column; justify-content: center; min-height: 160px; text-align: center;">
                                <h2 class="custom-stat-number" style="font-size: 28px;">9M+</h2>
                                <p style="margin: 0; font-size: 14px; font-weight: 500;">Daily<br>Active Users</p>
                            </div>
                        </div>

                        <!-- Bottom Row Right: Engagement Models -->
                        <div class="col-md-6 col-6">
                            <div class="p-2 h-100"
                                style="display: flex; flex-direction: column; justify-content: center;">
                                <h5 class="custom-stat-number" style="font-size: 20px; margin-bottom: 5px;">
                                    <span class="text-blue">Engagement</span> Models
                                </h5>
                                <p style="font-size: 10px; color: #666; margin-bottom: 15px;">Choose the engagement that
                                    fits your project and budget</p>

                                <div class="d-flex align-items-start">
                                    <!-- Blob Image -->
                                    <img src="<?= base_url('home2media/engegment.png') ?>" alt="Engagement"
                                        style="width: 80px; height: auto; margin-right: 10px; border-radius: 10px;">

                                    <!-- List -->
                                    <ul class="list-unstyled" style="font-size: 10px; line-height: 2; margin: 0;">
                                        <li class="d-flex align-items-center mb-1">
                                            <img src="<?= base_url('home2media/Group-10.png') ?>"
                                                style="width: 15px; height: 15px; object-fit: contain; margin-right: 8px;">
                                            Full time resource contracted monthly
                                        </li>
                                        <li class="d-flex align-items-center mb-1">
                                            <img src="<?= base_url('home2media/Group-8.png') ?>"
                                                style="width: 15px; height: 15px; object-fit: contain; margin-right: 8px;">
                                            Part time or hourly for advisory tasks
                                        </li>
                                        <li class="d-flex align-items-center mb-1">
                                            <img src="<?= base_url('home2media/Group-9.png') ?>"
                                                style="width: 15px; height: 15px; object-fit: contain; margin-right: 8px;">
                                            Fixed team for a group of resources
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <img src="<?= base_url('home2media/Group-11.png') ?>"
                                                style="width: 15px; height: 15px; object-fit: contain; margin-right: 8px;">
                                            Contract to hire when you want to convert
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom Info Strip -->
            <div class="row mt-5" style="position: relative; z-index: 10;">
                <div class="col-12">
                    <div class="bg-white p-4 shadow-sm" style="border-radius: 10px; border: 1px solid #eee;">
                        <!-- Stats Row -->
                        <div class="row text-center mb-4" style="border-bottom: 1px solid #eee; padding-bottom: 20px;">
                            <div class="col-lg-3 col-6 mb-3 mb-lg-0 border-end-lg">
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <i class="fa fa-users text-primary" style="font-size: 28px;"></i>
                                    <div class="text-start">
                                        <h4 class="custom-stat-number" style="font-size: 24px;">500+</h4>
                                        <small style="font-size: 12px; color: #666;">Offshore Clients Served</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-6 mb-3 mb-lg-0 border-end-lg">
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <i class="fa fa-line-chart text-danger" style="font-size: 28px;"></i>
                                    <div class="text-start">
                                        <h4 class="custom-stat-number" style="font-size: 24px;">100+</h4>
                                        <small style="font-size: 12px; color: #666;">Tech Specializations
                                            Covered</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-6 mb-3 mb-lg-0 border-end-lg">
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <i class="fa fa-check-circle text-success" style="font-size: 28px;"></i>
                                    <div class="text-start">
                                        <h4 class="custom-stat-number" style="font-size: 24px;">2,500+</h4>
                                        <small style="font-size: 12px; color: #666;">Projects Delivered</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-6">
                                <div class="d-flex align-items-center justify-content-center gap-2">
                                    <i class="fa fa-globe text-warning" style="font-size: 28px;"></i>
                                    <div class="text-start">
                                        <h4 class="custom-stat-number" style="font-size: 24px;">Top 1%</h4>
                                        <small style="font-size: 12px; color: #666;">Global IT Talent On-Demand</small>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Certified & Clients Row -->
                        <div class="row align-items-center">
                            <div class="col-lg-5 mb-3 mb-lg-0 d-flex align-items-center gap-3">
                                <h5 class="custom-stat-number" style="color: #666; font-size: 18px;">Certified</h5>
                                <div class="d-flex gap-2">
                                    <img src="<?= base_url('home2media/clients/Group.png') ?>"
                                        style="height: 40px; width: auto;" alt="ISO">
                                    <img src="<?= base_url('home2media/clients/Group-1.png') ?>"
                                        style="height: 40px; width: auto;" alt="ISO">
                                    <img src="<?= base_url('home2media/clients/Group-5.png') ?>"
                                        style="height: 40px; width: auto;" alt="ISO">
                                    <img src="<?= base_url('home2media/clients/Group-6.png') ?>"
                                        style="height: 35px; width: auto;" alt="BACCO">
                                </div>
                                <div style="height: 50px; width: 1px; background: #ddd; margin: 0 15px;"></div>
                            </div>
                            <div class="col-lg-7 d-flex align-items-center gap-3">
                                <h5 style="font-weight: 700; color: #555; margin: 0; font-size: 18px;">Clients</h5>
                                <div class="d-flex gap-3 overflow-auto" style="white-space: nowrap;">
                                    <img src="<?= base_url('home2media/clients/Group-2.png') ?>"
                                        style="height: 35px; width: auto;">
                                    <img src="<?= base_url('home2media/clients/Group-3.png') ?>"
                                        style="height: 35px; width: auto;">
                                    <img src="<?= base_url('home2media/clients/Group-4.png') ?>"
                                        style="height: 35px; width: auto;">
                                    <img src="<?= base_url('home2media/clients/Group-7.png') ?>"
                                        style="height: 35px; width: auto;">
                                    <img src="<?= base_url('assets/frontend/images/client/1.png') ?>"
                                        style="height: 35px; width: auto;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Services -->
    <section class="ht-section">
        <div class="container">
            <h2 class="section-title">Our <span class="text-blue">Services</span></h2>
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="service-card light-blue">
                        <div class="service-icon"><i class="fa fa-code text-blue"></i></div>
                        <h4 class="service-title">Software Development</h4>
                        <p>Detailed technical analysis and scalable software architecture.</p>
                        <a href="<?= base_url('service/software-development') ?>"
                            class="btn btn-sm btn-outline-primary">Learn More</a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="service-card light-pink">
                        <div class="service-icon"><i class="fa fa-mobile text-danger"></i></div>
                        <h4 class="service-title">Mobile App Development</h4>
                        <p>Native and Hybrid mobile applications for iOS and Android.</p>
                        <a href="<?= base_url('service/mobile-app-development') ?>"
                            class="btn btn-sm btn-outline-primary">Learn More</a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="service-card light-green">
                        <div class="service-icon"><i class="fa fa-globe text-success"></i></div>
                        <h4 class="service-title">Web Development</h4>
                        <p>Responsive and high-performance websites and web apps.</p>
                        <a href="<?= base_url('service/web-development') ?>"
                            class="btn btn-sm btn-outline-primary">Learn More</a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="service-card light-orange">
                        <div class="service-icon"><i class="fa fa-paint-brush text-warning"></i></div>
                        <h4 class="service-title">UI/UX Design</h4>
                        <p>User-centric design solutions for better engagement.</p>
                        <a href="<?= base_url('service/ui-ux-design') ?>" class="btn btn-sm btn-outline-primary">Learn
                            More</a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="service-card light-purple">
                        <div class="service-icon"><i class="fa fa-cloud text-info"></i></div>
                        <h4 class="service-title">Cloud Solutions</h4>
                        <p>Secure and scalable cloud infrastructure management.</p>
                        <a href="<?= base_url('service/cloud-solutions') ?>"
                            class="btn btn-sm btn-outline-primary">Learn More</a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="service-card light-blue">
                        <div class="service-icon"><i class="fa fa-shield text-primary"></i></div>
                        <h4 class="service-title">Cyber Security</h4>
                        <p>Protecting your digital assets from modern threats.</p>
                        <a href="<?= base_url('service/cyber-security') ?>" class="btn btn-sm btn-outline-primary">Learn
                            More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Products -->
    <section class="ht-section bg-light">
        <div class="container">
            <h2 class="section-title">Our <span class="text-blue">Products</span></h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="product-card">
                        <img src="<?= base_url('home2media/HR Sheba_page-0001 1.png') ?>" class="product-img">
                        <h4>HR Sheba</h4>
                        <p>Complete HR & Payroll Solution.</p>
                        <a href="<?= base_url('products/hr-sheba') ?>" class="btn btn-outline-primary">View Details</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product-card">
                        <img src="<?= base_url('home2media/HR Sheba_page-0001 1 (1).png') ?>" class="product-img">
                        <h4>School Management</h4>
                        <p>Smart education management system.</p>
                        <a href="<?= base_url('products/school-management') ?>" class="btn btn-outline-primary">View
                            Details</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product-card">
                        <img src="<?= base_url('home2media/HR Sheba_page-0001 1 (2).png') ?>" class="product-img">
                        <h4>Inventory System</h4>
                        <p>Efficient inventory and stock control.</p>
                        <a href="<?= base_url('products/inventory') ?>" class="btn btn-outline-primary">View Details</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Industries We Serve -->
    <section class="ht-section">
        <div class="container">
            <h2 class="section-title">Industries <span class="text-blue">We Serve</span></h2>
            <div class="owl-carousel owl-theme" id="industries-carousel">
                <?php
                $industries = ['Fintech', 'Healthcare', 'Education', 'E-commerce', 'Real Estate', 'Logistics', 'Travel', 'Agriculture'];
                foreach ($industries as $ind) {
                    ?>
                    <div class="item">
                        <div class="industry-icon"><i class="fa fa-building"></i></div>
                        <h5 class="text-center"><?= $ind ?></h5>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <!-- Tech Stack -->
    <section class="ht-section bg-light">
        <div class="container">
            <h2 class="section-title">Our <span class="text-blue">Tech Stack</span></h2>
            <div class="owl-carousel owl-theme" id="tech-stack-carousel">
                <div class="item"><i class="devicon-react-original colored" style="font-size: 60px;"></i></div>
                <div class="item"><i class="devicon-angularjs-plain colored" style="font-size: 60px;"></i></div>
                <div class="item"><i class="devicon-vuejs-plain colored" style="font-size: 60px;"></i></div>
                <div class="item"><i class="devicon-nodejs-plain colored" style="font-size: 60px;"></i></div>
                <div class="item"><i class="devicon-python-plain colored" style="font-size: 60px;"></i></div>
                <div class="item"><i class="devicon-php-plain colored" style="font-size: 60px;"></i></div>
                <div class="item"><i class="devicon-java-plain colored" style="font-size: 60px;"></i></div>
                <div class="item"><i class="devicon-docker-plain colored" style="font-size: 60px;"></i></div>
            </div>
        </div>
    </section>

    <!-- Crafting Long Term Relationships -->
    <section class="ht-section" id="roles">
        <div class="container">
            <h2 class="section-title">Crafting Long-Term <span class="text-blue">Relationships</span></h2>
            <div class="rel-grid">
                <img src="<?= base_url('home2media/Rectangle 24042.png') ?>" class="rel-img">
                <img src="<?= base_url('home2media/Rectangle 24043.png') ?>" class="rel-img">
                <img src="<?= base_url('home2media/Rectangle 24045.png') ?>" class="rel-img">
                <img src="<?= base_url('home2media/Rectangle 24047.png') ?>" class="rel-img">
            </div>
        </div>
    </section>

    <!-- Clients -->
    <section class="ht-section bg-light">
        <div class="container">
            <h2 class="section-title">Our <span class="text-blue">Clients</span></h2>
            <div class="text-center">
                <img src="<?= base_url('home2media/clients/Group.png') ?>" class="client-logo">
                <img src="<?= base_url('home2media/clients/Group-1.png') ?>" class="client-logo">
                <img src="<?= base_url('home2media/clients/Group-2.png') ?>" class="client-logo">
                <img src="<?= base_url('home2media/clients/Group-3.png') ?>" class="client-logo">
                <img src="<?= base_url('home2media/clients/Group-4.png') ?>" class="client-logo">
                <img src="<?= base_url('home2media/clients/Group-5.png') ?>" class="client-logo">
                <img src="<?= base_url('home2media/clients/Group-6.png') ?>" class="client-logo">
                <img src="<?= base_url('home2media/clients/Group-7.png') ?>" class="client-logo">
            </div>
        </div>
    </section>

    <!-- Client Testimonials -->
    <section class="ht-section">
        <div class="container">
            <h2 class="section-title">Client <span class="text-blue">Testimonials</span></h2>
            <div class="row">
                <div class="col-md-3">
                    <div class="testimonial-card">
                        <img src="<?= base_url('assets/frontend/images/client/1.png') ?>" class="testimonial-img"
                            alt="Client">
                        <h5>John Doe</h5>
                        <p class="text-muted">CEO, Tech Corp</p>
                        <p><i class="fa fa-quote-left"></i> Excellent service and delivery. Highly recommended!</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="testimonial-card">
                        <img src="<?= base_url('assets/frontend/images/client/2.png') ?>" class="testimonial-img"
                            alt="Client">
                        <h5>Jane Smith</h5>
                        <p class="text-muted">CTO, StartUp Inc</p>
                        <p><i class="fa fa-quote-left"></i> The team is very professional and skilled.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="testimonial-card">
                        <img src="<?= base_url('assets/frontend/images/client/3.png') ?>" class="testimonial-img"
                            alt="Client">
                        <h5>Mike Ross</h5>
                        <p class="text-muted">Manager, IT Solutions</p>
                        <p><i class="fa fa-quote-left"></i> Great experience working with MySoftHeaven.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="testimonial-card">
                        <img src="<?= base_url('assets/frontend/images/client/4.png') ?>" class="testimonial-img"
                            alt="Client">
                        <h5>Sarah Lee</h5>
                        <p class="text-muted">Director, Future Tech</p>
                        <p><i class="fa fa-quote-left"></i> Delivered on time and within budget.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Awards & Recognitions -->
    <section class="ht-section bg-light">
        <div class="container">
            <h2 class="section-title">Awards <span class="text-blue">& Recognitions</span></h2>
            <div class="row text-center">
                <div class="col-md-4">
                    <div class="award-card">
                        <img src="<?= base_url('home2media/clients/Group-2.png') ?>" class="award-img">
                        <h5>Best IT Firm 2024</h5>
                        <p>Recognized for excellence in software development.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="award-card">
                        <img src="<?= base_url('home2media/clients/Group-3.png') ?>" class="award-img">
                        <h5>Top Exporter</h5>
                        <p>Awarded for outstanding export performance.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="award-card">
                        <img src="<?= base_url('home2media/clients/Group-4.png') ?>" class="award-img">
                        <h5>Innovation Award</h5>
                        <p>For innovative tech solutions in 2023.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Membership & Certification -->
    <section class="ht-section">
        <div class="container">
            <h2 class="section-title">Membership <span class="text-blue">& Certification</span></h2>
            <div class="d-flex justify-content-center flex-wrap align-items-center">
                <img src="<?= base_url('home2media/clients/Group.png') ?>" class="membership-logo">
                <img src="<?= base_url('home2media/clients/Group-1.png') ?>" class="membership-logo">
                <img src="<?= base_url('home2media/clients/Group-5.png') ?>" class="membership-logo">
                <img src="<?= base_url('home2media/clients/Group-6.png') ?>" class="membership-logo">
            </div>
        </div>
    </section>

    <!-- Footer CTA & Form -->
    <section class="ht-section" style="padding-bottom: 0;">
        <div class="container">
            <div class="footer-cta text-center">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <img src="<?= base_url('home2media/Rectangle 24046.png') ?>"
                            style="width: 100%; border-radius: 12px; margin-left: -30px;">
                    </div>
                    <div class="col-md-6 text-left" style="padding: 40px;">
                        <h2>Easily Control your Billing and Invoicing.</h2>
                        <p>Streamline your financial operations with our integrated solutions.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div style="background: #f8f9fa; padding-top: 100px; padding-bottom: 50px;">
        <div class="container">
            <div class="row">
                <!-- Form Section Match -->
                <div class="col-md-12">
                    <form
                        style="background: #fff; padding: 40px; border-radius: 12px; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" placeholder="Your Name">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" placeholder="Your Email">
                            </div>
                            <div class="col-md-12 form-group">
                                <label>Message</label>
                                <textarea class="form-control" rows="4" placeholder="How can we help?"></textarea>
                            </div>
                            <div class="col-md-12">
                                <button class="btn btn-blue btn-block">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Scripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
    $('#tech-stack-carousel').owlCarousel({
        loop: true,
        margin: 10,
        autoplay: true,
        responsive: {
            0: { items: 3 },
            600: { items: 5 },
            1000: { items: 7 }
        }
    });
    $('#industries-carousel').owlCarousel({
        loop: true,
        margin: 20,
        autoplay: true,
        nav: false,
        responsive: {
            0: { items: 2 },
            600: { items: 4 },
            1000: { items: 6 }
        }
    });
</script>