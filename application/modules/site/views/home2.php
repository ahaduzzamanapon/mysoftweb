<!-- DNS Prefetch & Preconnect for External Resources -->
<link rel="dns-prefetch" href="//fonts.googleapis.com">
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link rel="dns-prefetch" href="//cdnjs.cloudflare.com">
<link rel="dns-prefetch" href="//unpkg.com">
<link rel="dns-prefetch" href="//cdn.jsdelivr.net">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://cdnjs.cloudflare.com">
<link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@300..700&family=Nabla&display=swap"
    rel="stylesheet">
<!-- Devicon for logos - Deferred Loading -->
<link rel="preload" href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css" as="style"
    onload="this.onload=null;this.rel='stylesheet'">
<noscript>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css">
</noscript>
<!-- Owl Carousel CSS - Deferred Loading -->
<link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
    as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
</noscript>
<link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
    as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
</noscript>
<!-- AOS Animation CSS - Deferred Loading -->
<link rel="preload" href="https://unpkg.com/aos@2.3.1/dist/aos.css" as="style"
    onload="this.onload=null;this.rel='stylesheet'">
<noscript>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</noscript>
<!-- FontAwesome - Deferred Loading -->
<link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" as="style"
    onload="this.onload=null;this.rel='stylesheet'">
<noscript>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</noscript>

<link rel="stylesheet" href="<?= base_url('assets/css/home2.css') ?>">
<style>
        .test-avatar {
        width: 70px;
        height: 56px;  
        border-radius: 50%;
        background: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
    }

    .test-avatar img {
        width: 100%;
        height: 100%;
        object-fit: contain;
    }
    .test-info span {
        font-size: 13px;
        color: #555;
        display: block;
        line-height: 15px;
    }
    .testimonial-card {
        background: #e1f5fe !important;
        padding: 0px !important;
        border-radius: 12px !important;
        /* text-align: left !important; */
        margin-bottom: 30px;
        position: relative;
    }
    .test-body {
        background: #fff;
        padding: 30px 20px 20px 20px;
        position: relative;
        height: 210px;
    }
    .test-body p {
        font-size: 13px;
        line-height: 1.6;
        color: #333;
        margin: 0;
        /* text-align: -webkit-center; */
    }

    </style>
<div class="ht-main-wrapper">

    <!-- Hero Section -->
    <section class="hero-section" style="padding-bottom: 0px; position: relative; overflow: visible;">
        <div class="container-fluid">
            <div id="hero-carousel" class="owl-carousel owl-theme">
                <div class="item">
                    <div class="container-fluid">
                        <div class="row">
                            <!-- Left Content -->
                            <div class="col-lg-7">
                                <h1 class="hero-title" style="margin-bottom: 25px;" data-aos="fade-right">
                                    Transforming Ideas. <span class="text-blue">Powering</span><br>
                                    <span style="">Scalable
                                        Solutions.</span>
                                </h1>
                                <p data-aos="fade-up" class="hero-desc"
                                    style="color: #555; font-size: 16px; line-height: 1.6; margin-bottom: 35px;">
                                    With <strong>15+ years</strong> of experience, MySoftHeaven is a trusted technology
                                    solutions
                                    provider delivering secure, scalable, and mission-critical software. ISO 9001,
                                    27001,
                                    and 20000 certified, we combine deep technical expertise with proven delivery
                                    discipline to power complex systems that organizations rely on every day.
                                </p>
                                <div class="d-flex gap-3 btn-group-hero">
                                    <a data-aos="fade-right" href="<?= base_url('portfolio') ?>"
                                        class="btn-custom btn-outline"
                                        style="padding: 12px 30px; border-radius: 30px; font-weight: 600;">View
                                        Portfolio</a>
                                    <a data-aos="fade-left" href="<?= base_url('services') ?>"
                                        class="btn-custom btn-blue"
                                        style="padding: 12px 30px; border-radius: 30px; font-weight: 600;">Explore
                                        Services <i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                            <!-- Right Content (Grid Layout) -->
                            <div class="col-lg-5 mt-5 p-2 hero-right-content">
                                <div class="row g-3">
                                    <!-- Left Column: Stacked Stats -->
                                    <div class="col-md-4 col-6 d-flex flex-column gap-2" style="padding-top: 40px;">
                                        <!-- Pink Card -->
                                        <div data-aos="fade-right" class="hero-stat-card hero-card-pink">
                                            <h2 class="hero-stat-title"><span class="counter"
                                                    data-count="1100">0</span>M+</h2>
                                            <p class="hero-stat-subtitle">Service Interactions</p>
                                        </div>
                                        <!-- Blue Card -->
                                        <div data-aos="fade-up" class="hero-stat-card hero-card-blue-light">
                                            <h2 class="hero-stat-title"><span class="counter" data-count="9">0</span>M+
                                            </h2>
                                            <p class="hero-stat-subtitle bold">Daily Active Users</p>
                                        </div>
                                    </div>

                                    <!-- Right Column: Top Stats Row + Bottom Image -->
                                    <div class="col-md-8 col-6">
                                        <!-- Top Stats Row -->
                                        <div class="row g-2 mb-2">
                                            <div class="col-6">
                                                <div data-aos="fade-down" class="hero-stat-card hero-card-blue-round">
                                                    <h2 class="hero-stat-title"><span class="counter"
                                                            data-count="90000">0</span>M+
                                                    </h2>
                                                    <p class="hero-stat-subtitle bold">BDT Revenue Processed</p>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div data-aos="fade-left" class="hero-stat-card hero-card-green">
                                                    <h2 class="hero-stat-title"><span class="counter"
                                                            data-count="100">0</span>M+
                                                    </h2>
                                                    <p class="hero-stat-subtitle bold">Records Digitized</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Bottom Image - First slide, eager loading for LCP -->
                                        <div class="w-100 position-relative" data-aos="fade-up">
                                            <img src="<?= base_url('hero_image/transforming_ideas.webp') ?>"
                                                alt="Team Overlay" class="hero-overlay-img" width="600" height="400">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="container-fluid">
                        <div class="row">
                            <!-- Left Content -->
                            <div class="col-lg-7">
                                <h1 class="hero-title" style="margin-bottom: 25px;">
                                    Flexible Teams. <span class="text-blue">On-Demand</span><br>
                                    <span style="">Expertise.</span>
                                </h1>
                                <p class="hero-desc"
                                    style="color: #555; font-size: 16px; line-height: 1.6; margin-bottom: 35px;">
                                    Scale your technology team instantly with skilled professionals who integrate
                                    seamlessly
                                    into your workflows. Our IT staff augmentation model gives you immediate access to
                                    developers, engineers, and specialists who follow your processes, contribute from
                                    day one,
                                    and maintain full alignment with your architecture and product goals.
                                </p>
                                <div class="d-flex gap-3 btn-group-hero">
                                    <a href="<?= base_url('it-staffing-agency') ?>" class="btn-custom btn-outline"
                                        style="padding: 12px 30px; border-radius: 30px; font-weight: 600;">Explore
                                        Roles</a>
                                    <a href="<?= base_url('contact-us') ?>" class="btn-custom btn-blue"
                                        style="padding: 12px 30px;border-radius: 30px;font-weight: 600;color: white;">Schedule
                                        a
                                        Consultation <i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                            <!-- Right Content (Grid Layout) -->
                            <div class="col-lg-5 mt-5 p-2 hero-right-content">
                                <div class="row g-3">
                                    <!-- Left Column: Stacked Stats -->
                                    <div class="col-md-4 col-6 d-flex flex-column gap-2" style="padding-top: 40px;">
                                        <!-- Pink Card -->
                                        <div class="hero-stat-card hero-card-pink">
                                            <h2 class="hero-stat-title"><span class="counter" data-count="500">0</span>+
                                            </h2>
                                            <p class="hero-stat-subtitle">Offshore Clients Served</p>
                                        </div>
                                        <!-- Blue Card -->
                                        <div class="hero-stat-card hero-card-blue-light">
                                            <h2 class="hero-stat-title"><span class="counter" data-count="100">0</span>+
                                            </h2>
                                            <p class="hero-stat-subtitle bold">Tech Specializations Covered</p>
                                        </div>
                                    </div>

                                    <!-- Right Column: Top Stats Row + Bottom Image -->
                                    <div class="col-md-8 col-6">
                                        <!-- Top Stats Row -->
                                        <div class="row g-2 mb-2">
                                            <div class="col-6">
                                                <div class="hero-stat-card hero-card-blue-round">
                                                    <h2 class="hero-stat-title"><span class="counter"
                                                            data-count="2500">0</span>+
                                                    </h2>
                                                    <p class="hero-stat-subtitle bold">Projects Delivered Successfully
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="hero-stat-card hero-card-green">
                                                    <h2 class="hero-stat-title">Top 1%</h2>
                                                    <p class="hero-stat-subtitle bold">Global IT Talent On-Demand</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Bottom Image - Lazy loaded -->
                                        <div class="w-100 position-relative">
                                            <img src="<?= base_url('hero_image/flexable_teams.webp') ?>"
                                                alt="Team Overlay" class="hero-overlay-img" loading="lazy" width="600"
                                                height="400">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="container-fluid">
                        <div class="row">
                            <!-- Left Content -->
                            <div class="col-lg-7">
                                <h1 class="hero-title" style="margin-bottom: 25px;">
                                    Delivering Large-Scale,<br> <span class="text-blue">High-Impact</span>
                                    <span style="">Solutions</span>
                                </h1>
                                <p class="hero-desc"
                                    style="color: #555; font-size: 16px; line-height: 1.6; margin-bottom: 35px;">
                                    Our systems handle complex, high-volume operations with nationwide coverage and
                                    global
                                    reach. We support millions of users, process critical transactions, and enable
                                    secure,
                                    reliable, and scalable platforms that organizations depend on every day.
                                </p>
                                <div class="d-flex gap-3 btn-group-hero">
                                    <a href="<?= base_url('products') ?>" class="btn-custom btn-outline"
                                        style="padding: 12px 30px; border-radius: 30px; font-weight: 600;">Explore
                                        Products</a>
                                    <a href="<?= base_url('client/government-sector') ?>" class="btn-custom btn-blue"
                                        style="padding: 6px 10px 1px 10px;border-radius: 30px;font-weight: 600;color: white;">See
                                        Our
                                        Clients <i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                            <!-- Right Content (Grid Layout) -->
                            <div class="col-lg-5 mt-5 p-2 hero-right-content">
                                <div class="row g-3">
                                    <!-- Left Column: Stacked Stats -->
                                    <div class="col-md-4 col-6 d-flex flex-column gap-2" style="padding-top: 40px;">
                                        <!-- Pink Card -->
                                        <div class="hero-stat-card hero-card-pink">
                                            <h2 class="hero-stat-title"><span class="counter" data-count="15">0</span>+
                                            </h2>
                                            <p class="hero-stat-subtitle">Years Industry Experience</p>
                                        </div>
                                        <!-- Blue Card -->
                                        <div class="hero-stat-card hero-card-blue-light">
                                            <h2 class="hero-stat-title"><span class="counter"
                                                    data-count="80000">0</span>+</h2>
                                            <p class="hero-stat-subtitle bold">Offices Connected Nationwide</p>
                                        </div>
                                    </div>

                                    <!-- Right Column: Top Stats Row + Bottom Image -->
                                    <div class="col-md-8 col-6">
                                        <!-- Top Stats Row -->
                                        <div class="row g-2 mb-2">
                                            <div class="col-6">
                                                <div class="hero-stat-card hero-card-blue-round">
                                                    <h2 class="hero-stat-title"><span class="counter"
                                                            data-count="12">0</span>M+
                                                    </h2>
                                                    <p class="hero-stat-subtitle bold">BDT Processed Daily Through
                                                        Platforms</p>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="hero-stat-card hero-card-green">
                                                    <h2 class="hero-stat-title"><span class="counter"
                                                            data-count="1.5">0</span>M+
                                                    </h2>
                                                    <p class="hero-stat-subtitle bold">Pages Scanned & Digitized</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Bottom Image - Lazy loaded -->
                                        <div class="w-100 position-relative">
                                            <img src="<?= base_url('hero_image/delivering_large.webp') ?>"
                                                alt="Team Overlay" class="hero-overlay-img" loading="lazy" width="600"
                                                height="400">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="hero-section bottom-hero-section"
        style="padding-bottom: 0px; position: relative; overflow: visible;">
        <div class="container-fluid">
            <!-- Bottom Info Strip -->
            <div class="row mt-5" style="position: relative; z-index: 10;">
                <div class="col-12">
                    <div class="bg-white bottom-hero-section-container">
                        <!-- Stats Row -->
                        <!-- Stats Row Carousel (Desktop) -->
                        <div class="owl-carousel owl-theme bottom-hero-section-card d-none d-lg-block"
                            id="bottom-hero-slider">

                            <!-- Slide 1 -->
                            <div class="item">
                                <div class="row text-center">
                                    <div class="col-lg-3 col-6">
                                        <div class="counter_box d-flex align-items-center justify-content-center gap-4 hero-bottom-card-slider"
                                            style="box-shadow: 0px 3px 3px 1px #dbdbdb;padding: 15px;border-radius: 6px; min-height: 100px;">
                                            <i class="fa fa-handshake-o text-primary" style="font-size: 28px;"></i>
                                            <div class="text-start">
                                                <h4 class="custom-stat-number"><span class="counter"
                                                        data-count="1100">1,100</span><span style="font-size: 0.7em;">
                                                        Million+</span></h4>
                                                <small style="display:block; font-size: 12px; color: #666;">Service
                                                    Interactions</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-6">
                                        <div class="counter_box d-flex align-items-center justify-content-center gap-4 hero-bottom-card-slider"
                                            style="box-shadow: 0px 3px 3px 1px #dbdbdb;padding: 15px;border-radius: 6px; min-height: 100px;">
                                            <i class="fa fa-user-circle text-danger" style="font-size: 28px;"></i>
                                            <div class="text-start">
                                                <h4 class="custom-stat-number"><span class="counter"
                                                        data-count="9">9</span><span style="font-size: 0.7em;">
                                                        Million+</span></h4>
                                                <small style="display:block; font-size: 12px; color: #666;">Daily Active
                                                    Users</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-6">
                                        <div class="counter_box d-flex align-items-center justify-content-center gap-4 hero-bottom-card-slider"
                                            style="box-shadow: 0px 3px 3px 1px #dbdbdb;padding: 15px;border-radius: 6px; min-height: 100px;">
                                            <i class="fa fa-money text-success" style="font-size: 28px;"></i>
                                            <div class="text-start">
                                                <h4 class="custom-stat-number"><span class="counter"
                                                        data-count="90000">90,000</span><span style="font-size: 0.6em;">
                                                        Million+ BDT</span></h4>
                                                <small style="display:block; font-size: 12px; color: #666;">Revenue
                                                    Processed</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-6">
                                        <div class="counter_box d-flex align-items-center justify-content-center gap-4 hero-bottom-card-slider"
                                            style="box-shadow: 0px 3px 3px 1px #dbdbdb;padding: 15px;border-radius: 6px; min-height: 100px;">
                                            <i class="fa fa-database text-warning" style="font-size: 28px;"></i>
                                            <div class="text-start">
                                                <h4 class="custom-stat-number"><span class="counter"
                                                        data-count="100">100</span><span style="font-size: 0.7em;">
                                                        Million+</span></h4>
                                                <small style="display:block; font-size: 12px; color: #666;">Records
                                                    Digitized</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Slide 2 -->
                            <div class="item">
                                <div class="row text-center">
                                    <div class="col-lg-3 col-6">
                                        <div class="counter_box d-flex align-items-center justify-content-center gap-4 hero-bottom-card-slider"
                                            style="box-shadow: 0px 3px 3px 1px #dbdbdb;padding: 15px;border-radius: 6px; min-height: 100px;">
                                            <i class="fa fa-users text-primary" style="font-size: 28px;"></i>
                                            <div class="text-start">
                                                <h4 class="custom-stat-number"><span class="counter"
                                                        data-count="500">500</span>+</h4>
                                                <small style="display:block; font-size: 12px; color: #666;">Offshore
                                                    Clients Served</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-6">
                                        <div class="counter_box d-flex align-items-center justify-content-center gap-4 hero-bottom-card-slider"
                                            style="box-shadow: 0px 3px 3px 1px #dbdbdb;padding: 15px;border-radius: 6px; min-height: 100px;">
                                            <i class="fa fa-line-chart text-danger" style="font-size: 28px;"></i>
                                            <div class="text-start">
                                                <h4 class="custom-stat-number"><span class="counter"
                                                        data-count="100">100</span>+</h4>
                                                <small style="display:block; font-size: 12px; color: #666;">Tech
                                                    Specializations Covered</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-6">
                                        <div class="counter_box d-flex align-items-center justify-content-center gap-4 hero-bottom-card-slider"
                                            style="box-shadow: 0px 3px 3px 1px #dbdbdb;padding: 15px;border-radius: 6px; min-height: 100px;">
                                            <i class="fa fa-check-circle text-success" style="font-size: 28px;"></i>
                                            <div class="text-start">
                                                <h4 class="custom-stat-number"><span class="counter"
                                                        data-count="2500">2500</span>+</h4>
                                                <small style="display:block; font-size: 12px; color: #666;">Projects
                                                    Delivered Successfully</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-6">
                                        <div class="counter_box d-flex align-items-center justify-content-center gap-4 hero-bottom-card-slider"
                                            style="box-shadow: 0px 3px 3px 1px #dbdbdb;padding: 15px;border-radius: 6px; min-height: 100px;">
                                            <i class="fa fa-globe text-warning" style="font-size: 28px;"></i>
                                            <div class="text-start">
                                                <h4 class="custom-stat-number">Top 1%</h4>
                                                <small style="display:block; font-size: 12px; color: #666;">Global IT
                                                    Talent On-Demand</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Slide 3 -->
                            <div class="item">
                                <div class="row text-center">
                                    <div class="col-lg-3 col-6">
                                        <div class="counter_box d-flex align-items-center justify-content-center gap-4 hero-bottom-card-slider"
                                            style="box-shadow: 0px 3px 3px 1px #dbdbdb;padding: 15px;border-radius: 6px; min-height: 100px;">
                                            <i class="fa fa-briefcase text-primary" style="font-size: 28px;"></i>
                                            <div class="text-start">
                                                <h4 class="custom-stat-number"><span class="counter"
                                                        data-count="15">15</span>+ Years</h4>
                                                <small style="display:block; font-size: 12px; color: #666;">Industry
                                                    Experience</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-6">
                                        <div class="counter_box d-flex align-items-center justify-content-center gap-4 hero-bottom-card-slider"
                                            style="box-shadow: 0px 3px 3px 1px #dbdbdb;padding: 15px;border-radius: 6px; min-height: 100px;">
                                            <i class="fa fa-building text-danger" style="font-size: 28px;"></i>
                                            <div class="text-start">
                                                <h4 class="custom-stat-number"><span class="counter"
                                                        data-count="80000">80,000</span>+</h4>
                                                <small style="display:block; font-size: 12px; color: #666;">Offices
                                                    Connected Nationwide</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-6">
                                        <div class="counter_box d-flex align-items-center justify-content-center gap-4 hero-bottom-card-slider"
                                            style="box-shadow: 0px 3px 3px 1px #dbdbdb;padding: 15px;border-radius: 6px; min-height: 100px;">
                                            <i class="fa fa-credit-card text-success" style="font-size: 28px;"></i>
                                            <div class="text-start">
                                                <h4 class="custom-stat-number"><span class="counter"
                                                        data-count="12">12</span><span style="font-size: 0.6em;">
                                                        Million+ BDT</span></h4>
                                                <small style="display:block; font-size: 12px; color: #666;">Processed
                                                    Daily Through Platforms</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-6">
                                        <div class="counter_box d-flex align-items-center justify-content-center gap-4 hero-bottom-card-slider"
                                            style="box-shadow: 0px 3px 3px 1px #dbdbdb;padding: 15px;border-radius: 6px; min-height: 100px;">
                                            <i class="fa fa-file-text text-warning" style="font-size: 28px;"></i>
                                            <div class="text-start">
                                                <h4 class="custom-stat-number"><span class="counter"
                                                        data-count="1.5">1.5</span><span style="font-size: 0.7em;">
                                                        Million+</span></h4>
                                                <small style="display:block; font-size: 12px; color: #666;">Pages
                                                    Scanned & Digitized</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- Certified & Clients Row -->
                        <div class="d-none d-lg-block"> <!-- Hidden on mobile -->
                            <div class="row align-items-center" style="padding: 26px 0px 0px 0px;">
                                <div
                                    class="certified_section_hero col-lg-6 mb-3 mb-lg-0 d-flex align-items-center gap-3 certified">
                                    <h5 class="custom-stat-number"
                                        style="color: #666; font-size: 18px; white-space: nowrap; margin-bottom: 0;">
                                        Certified
                                    </h5>
                                    <div class="marquee-fader marquee-fader-white">
                                        <div class="owl-carousel owl-theme" id="certified_marquee" style="width: 100%;">
                                            <div class="item"><img src="<?= base_url('membership/1.gif') ?>"
                                                    class="cert-logo2" /></div>
                                            <div class="item"><img src="<?= base_url('membership/2.gif') ?>"
                                                    class="cert-logo2" /></div>
                                            <div class="item"><img src="<?= base_url('membership/3.gif') ?>"
                                                    class="cert-logo2" /></div>
                                            <div class="item"><img src="<?= base_url('membership/4.gif') ?>"
                                                    class="cert-logo2" /></div>
                                            <div class="item"><img src="<?= base_url('membership/5.gif') ?>"
                                                    class="cert-logo2" /></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clients_section_hero col-lg-6 d-flex align-items-center gap-3">
                                    <h5
                                        style="font-weight: 700; color: #555; margin: 0; font-size: 18px; white-space: nowrap;">
                                        Clients</h5>
                                    <div class="marquee-fader marquee-fader-white">
                                        <div class="owl-carousel owl-theme" id="clients_marquee" style="width: 100%;">
                                            <div class="item"><img
                                                    src="<?= base_url('home2media/clients/Group-2.png') ?>"
                                                    style="height: 35px; width: auto;"></div>
                                            <div class="item"><img
                                                    src="<?= base_url('home2media/clients/Group-3.png') ?>"
                                                    style="height: 35px; width: auto;"></div>
                                            <div class="item"><img
                                                    src="<?= base_url('home2media/clients/Group-4.png') ?>"
                                                    style="height: 35px; width: auto;"></div>
                                            <div class="item"><img
                                                    src="<?= base_url('home2media/clients/Group-7.png') ?>"
                                                    style="height: 35px; width: auto;"></div>
                                            <div class="item"><img src="<?= base_url('home2media/XMLID_79_.png') ?>"
                                                    style="height: 35px; width: auto;"></div>
                                            <div class="item"><img
                                                    src="<?= base_url('home2media/clients/Group-2.png') ?>"
                                                    style="height: 35px; width: auto;"></div>
                                            <div class="item"><img
                                                    src="<?= base_url('home2media/clients/Group-3.png') ?>"
                                                    style="height: 35px; width: auto;"></div>
                                            <div class="item"><img
                                                    src="<?= base_url('home2media/clients/Group-4.png') ?>"
                                                    style="height: 35px; width: auto;"></div>
                                            <div class="item"><img
                                                    src="<?= base_url('home2media/clients/Group-7.png') ?>"
                                                    style="height: 35px; width: auto;"></div>
                                            <div class="item"><img src="<?= base_url('home2media/XMLID_79_.png') ?>"
                                                    style="height: 35px; width: auto;"></div>
                                            <div class="item"><img
                                                    src="<?= base_url('home2media/clients/Group-2.png') ?>"
                                                    style="height: 35px; width: auto;"></div>
                                            <div class="item"><img
                                                    src="<?= base_url('home2media/clients/Group-3.png') ?>"
                                                    style="height: 35px; width: auto;"></div>
                                            <div class="item"><img
                                                    src="<?= base_url('home2media/clients/Group-4.png') ?>"
                                                    style="height: 35px; width: auto;"></div>
                                            <div class="item"><img
                                                    src="<?= base_url('home2media/clients/Group-7.png') ?>"
                                                    style="height: 35px; width: auto;"></div>
                                            <div class="item"><img src="<?= base_url('home2media/XMLID_79_.png') ?>"
                                                    style="height: 35px; width: auto;"></div>
                                            <div class="item"><img
                                                    src="<?= base_url('home2media/clients/Group-2.png') ?>"
                                                    style="height: 35px; width: auto;"></div>
                                            <div class="item"><img
                                                    src="<?= base_url('home2media/clients/Group-3.png') ?>"
                                                    style="height: 35px; width: auto;"></div>
                                            <div class="item"><img
                                                    src="<?= base_url('home2media/clients/Group-4.png') ?>"
                                                    style="height: 35px; width: auto;"></div>
                                            <div class="item"><img
                                                    src="<?= base_url('home2media/clients/Group-7.png') ?>"
                                                    style="height: 35px; width: auto;"></div>
                                            <div class="item"><img src="<?= base_url('home2media/XMLID_79_.png') ?>"
                                                    style="height: 35px; width: auto;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!-- Mobile Hero Slider (Visible only on mobile) -->
    <div class="d-block d-lg-none mobile-hero-slider-wrapper mt-3 mb-5">
        <div class="owl-carousel owl-theme" id="mobile-hero-slider">
            <!-- Slide 1 -->
            <div class="item">
                <div class="mobile-stat-grid">
                    <div class="mobile-stat-col text-center">
                        <div class="stat-text-box">
                            <h4 class="m-stat-number">15+</h4>
                            <span class="m-stat-desc">Years of Experience</span>
                        </div>
                        <div class="m-img-wrapper mt-2">
                            <img src="<?= base_url('hero_image/transforming_ideas.webp') ?>"
                                class="m-stat-img rounded-3" alt="Experience" loading="lazy" width="300" height="200">
                        </div>
                    </div>
                    <div class="mobile-stat-col text-center">
                        <div class="m-img-wrapper mb-2">
                            <img src="<?= base_url('hero_image/flexable_teams.webp') ?>" class="m-stat-img rounded-3"
                                alt="Team" loading="lazy" width="300" height="200">
                        </div>
                        <div class="stat-text-box">
                            <h4 class="m-stat-number">88%+</h4>
                            <span class="m-stat-desc">Employee Retention</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="item">
                <div class="mobile-stat-grid">
                    <div class="mobile-stat-col text-center">
                        <div class="stat-text-box">
                            <h4 class="m-stat-number">500+</h4>
                            <span class="m-stat-desc">Clients Served</span>
                        </div>
                        <div class="m-img-wrapper mt-2">
                            <img src="<?= base_url('hero_image/delivering_large.webp') ?>" class="m-stat-img rounded-3"
                                alt="Clients" loading="lazy" width="300" height="200">
                        </div>
                    </div>
                    <div class="mobile-stat-col text-center">
                        <div class="m-img-wrapper mb-2">
                            <img src="<?= base_url('hero_image/flexable_teams.webp') ?>" class="m-stat-img rounded-3"
                                alt="Projects">
                        </div>
                        <div class="stat-text-box">
                            <h4 class="m-stat-number">2500+</h4>
                            <span class="m-stat-desc">Projects Delivered</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="item">
                <div class="mobile-stat-grid">
                    <div class="mobile-stat-col text-center">
                        <div class="stat-text-box">
                            <h4 class="m-stat-number">12M+</h4>
                            <span class="m-stat-desc">BDT Daily Processed</span>
                        </div>
                        <div class="m-img-wrapper mt-2">
                            <img src="<?= base_url('hero_image/transforming_ideas.webp') ?>"
                                class="m-stat-img rounded-3" alt="Revenue" loading="lazy" width="300" height="200">
                        </div>
                    </div>
                    <div class="mobile-stat-col text-center">
                        <div class="m-img-wrapper mb-2">
                            <img src="<?= base_url('hero_image/delivering_large.webp') ?>" class="m-stat-img rounded-3"
                                alt="Security" loading="lazy" width="300" height="200">
                        </div>
                        <div class="stat-text-box">
                            <h4 class="m-stat-number">Top 1%</h4>
                            <span class="m-stat-desc">IT Talent</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Certified & Clients (Mobile Only) -->
    <div class="d-block d-lg-none mb-4">
        <div class="container">
            <!-- Certified Section -->
            <div class="certified_section_hero mb-3 d-flex align-items-center gap-3">
                <h5 style="color: #666; font-size: 16px; white-space: nowrap; margin-bottom: 0;">
                    Certified
                </h5>
                <div class="marquee-fader marquee-fader-white" style="flex: 1;">
                    <div class="owl-carousel owl-theme" id="certified_marquee_mobile" style="width: 100%;">
                        <div class="item"><img src="<?= base_url('membership/1.gif') ?>" class="cert-logo2" /></div>
                        <div class="item"><img src="<?= base_url('membership/2.gif') ?>" class="cert-logo2" /></div>
                        <div class="item"><img src="<?= base_url('membership/3.gif') ?>" class="cert-logo2" /></div>
                        <div class="item"><img src="<?= base_url('membership/4.gif') ?>" class="cert-logo2" /></div>
                        <div class="item"><img src="<?= base_url('membership/5.gif') ?>" class="cert-logo2" /></div>
                    </div>
                </div>
            </div>

            <!-- Clients Section -->
            <div class="clients_section_hero d-flex align-items-center gap-3">
                <h5 style="font-weight: 700; color: #555; margin: 0; font-size: 16px; white-space: nowrap;">
                    Clients
                </h5>
                <div class="marquee-fader marquee-fader-white" style="flex: 1;">
                    <div class="owl-carousel owl-theme" id="clients_marquee_mobile" style="width: 100%;">
                        <div class="item"><img src="<?= base_url('home2media/clients/Group-2.png') ?>"
                                style="height: 30px; width: auto;"></div>
                        <div class="item"><img src="<?= base_url('home2media/clients/Group-3.png') ?>"
                                style="height: 30px; width: auto;"></div>
                        <div class="item"><img src="<?= base_url('home2media/clients/Group-4.png') ?>"
                                style="height: 30px; width: auto;"></div>
                        <div class="item"><img src="<?= base_url('home2media/clients/Group-7.png') ?>"
                                style="height: 30px; width: auto;"></div>
                        <div class="item"><img src="<?= base_url('home2media/XMLID_79_.png') ?>"
                                style="height: 30px; width: auto;"></div>
                        <div class="item"><img src="<?= base_url('home2media/clients/Group-2.png') ?>"
                                style="height: 30px; width: auto;"></div>
                        <div class="item"><img src="<?= base_url('home2media/clients/Group-3.png') ?>"
                                style="height: 30px; width: auto;"></div>
                        <div class="item"><img src="<?= base_url('home2media/clients/Group-4.png') ?>"
                                style="height: 30px; width: auto;"></div>
                        <div class="item"><img src="<?= base_url('home2media/clients/Group-7.png') ?>"
                                style="height: 30px; width: auto;"></div>
                        <div class="item"><img src="<?= base_url('home2media/XMLID_79_.png') ?>"
                                style="height: 30px; width: auto;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Our Services -->
    <section class="ht-section services-bg-gradient" id="services">
        <div class="container-fluid">
            <div class="service-header-modern" data-aos="fade-right">
                <div class="service-title-block">
                    <h2 class="service-title-modern">Our <span class="text-blue">Services</span></h2>
                </div>
                <p class="service-desc-modern">
                    We are the best custom software development company for custom software development outsourcing. And
                    we provide robust, scalable, and efficient solutions to various clients around the world
                </p>
            </div>

            <div class="row">
                <?php
                // Color cycle: icon-blue, icon-cyan, icon-orange, icon-purple
                $colors = ['icon-blue', 'icon-cyan', 'icon-orange', 'icon-purple'];
                $color_count = count($colors);
                $i = 0;
                ?>
                <?php if (!empty($services)): ?>
                    <?php foreach ($services as $service): ?>
                        <?php
                        $color_class = $colors[$i % $color_count];
                        $delay = $i * 100;
                        $i++;
                        ?>
                        <div class="col-lg-3 col-md-6">
                            <div class="service-card-modern" data-aos="fade-up">
                                <div class="service-icon-floating <?= $color_class ?>">
                                    <!-- Use category icon if available, else default -->
                                    <i class="fa fa-cogs"></i>
                                </div>
                                <h4 class="service-card-title"><?= $service->main_service_name ?></h4>
                                <?php
                                $cat_slug = strtolower(str_replace(' ', '-', $service->main_service_name));
                                ?>
                                <a href="<?= base_url('service-category/' . $cat_slug) ?>" class="btn-service-view">View
                                    Services</a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>

            <div class="text-center mt-5 " data-aos="fade-up" data-aos-delay_old_rem="0">
                <a href="<?= base_url('services') ?>" class="explore-services-btn">Explore More
                    Services <i class="fa fa-angle-right ms-2"></i></a>
            </div>
        </div>
    </section>

    <!-- Our Products -->
    <section class="ht-section" style="background-color: #E6F1FE!important;">
        <div class="container-fluid">
            <h2 class="section-title" data-aos="fade-down" style="margin-bottom: 3px;">Our <span
                    class="text-blue">Products</span></h2>
            <p class="center-text mb-50" data-aos="fade-up" data-aos-delay_old_rem="0"
                style="max-width: 800px;margin: 0 auto 50px auto;color: #666;text-align: -webkit-center;">
                We are the best custom software development company for custom software development outsourcing. And we
                provide robust, scalable, and efficient solutions to various clients around the world
            </p>
            <div class="owl-carousel owl-theme" id="product-carousel" data-aos="fade-up">
                <?php if (!empty($products)): ?>
                    <?php foreach ($products as $product):
                        ?>
                        <div class="item">
                            <div class="product-card">
                                <div>
                                    <!-- Placeholder for Logo - Using Icon for now as no explicit logo field found -->
                                    <div class="mb-2"> <?php if ($product->hero_image): ?>
                                            <br><img src="<?php echo base_url('product_img/' . $product->hero_image); ?>"
                                                style="width: 90px;place-self: center;align-self: center;">
                                        <?php endif; ?>
                                    </div>
                                    <h5 class="product-tagline"><?= $product->hero_heading ?></h5>
                                    <div class="product-frame">
                                        <?php
                                        $img_src = base_url('home2media/HR Sheba_page-0001 1.png'); // Default fallback
                                        if (!empty($product->demo_call_to_action_image)) {
                                            $img_src = base_url('product_img/' . $product->demo_call_to_action_image);
                                        }
                                        ?>
                                        <img src="<?= $img_src ?>" class="product-img" loading="lazy">
                                    </div>
                                </div>
                                <div class="product-actions">
                                    <a href="tel:+8801958633202" class="btn-product btn-call"><i class="fa fa-phone"></i> Call
                                        Now</a>
                                    <a href="<?= base_url('product/' . $product->slug) ?>" class="btn-product btn-demo"><i
                                            class="fa fa-mouse-pointer"></i> Try Free Demo</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <!-- Industries We Serve -->
    <section class="ht-section">
        <div class="container-fluid">
            <div class="ht-left-title-block" data-aos="fade-right">
                <h2>Industries <span class="text-blue">we serve</span></h2>
                <p>We are the best custom software development company for custom software development outsourcing. And
                    we provide robust, scalable, and efficient solutions to various clients around the world.</p>
            </div>

            <div class="hexagon-grid" data-aos="fade-up">
                <!-- Row 1 -->
                <div class="hex-item">
                    <svg class="hex-svg-container" viewBox="0 0 100 115" preserveAspectRatio="none">
                        <path class="hex-svg-border" d="M50 1 L99 28 L99 87 L50 114 L1 87 L1 28 Z"
                            vector-effect="non-scaling-stroke"></path>
                    </svg>
                    <div class="hex-content">
                        <i class="fa fa-university"></i>
                        <span>E-Governance</span>
                    </div>
                </div>
                <div class="hex-item">
                    <svg class="hex-svg-container" viewBox="0 0 100 115" preserveAspectRatio="none">
                        <path class="hex-svg-border" d="M50 1 L99 28 L99 87 L50 114 L1 87 L1 28 Z"
                            vector-effect="non-scaling-stroke"></path>
                    </svg>
                    <div class="hex-content">
                        <i class="fa fa-money"></i>
                        <span>Banking / NBFI</span>
                    </div>
                </div>
                <div class="hex-item">
                    <svg class="hex-svg-container" viewBox="0 0 100 115" preserveAspectRatio="none">
                        <path class="hex-svg-border" d="M50 1 L99 28 L99 87 L50 114 L1 87 L1 28 Z"
                            vector-effect="non-scaling-stroke"></path>
                    </svg>
                    <div class="hex-content">
                        <i class="fa fa-hospital-o"></i>
                        <span>Health & Fitness</span>
                    </div>
                </div>
                <div class="hex-item">
                    <svg class="hex-svg-container" viewBox="0 0 100 115" preserveAspectRatio="none">
                        <path class="hex-svg-border" d="M50 1 L99 28 L99 87 L50 114 L1 87 L1 28 Z"
                            vector-effect="non-scaling-stroke"></path>
                    </svg>
                    <div class="hex-content">
                        <i class="fa fa-bolt"></i>
                        <span>Energy</span>
                    </div>
                </div>
                <div class="hex-item">
                    <svg class="hex-svg-container" viewBox="0 0 100 115" preserveAspectRatio="none">
                        <path class="hex-svg-border" d="M50 1 L99 28 L99 87 L50 114 L1 87 L1 28 Z"
                            vector-effect="non-scaling-stroke"></path>
                    </svg>
                    <div class="hex-content">
                        <i class="fa fa-shopping-cart"></i>
                        <span>E-Commerce</span>
                    </div>
                </div>
                <div class="hex-item">
                    <svg class="hex-svg-container" viewBox="0 0 100 115" preserveAspectRatio="none">
                        <path class="hex-svg-border" d="M50 1 L99 28 L99 87 L50 114 L1 87 L1 28 Z"
                            vector-effect="non-scaling-stroke"></path>
                    </svg>
                    <div class="hex-content">
                        <i class="fa fa-home"></i>
                        <span>Real Estate</span>
                    </div>
                </div>
                <div class="hex-item">
                    <svg class="hex-svg-container" viewBox="0 0 100 115" preserveAspectRatio="none">
                        <path class="hex-svg-border" d="M50 1 L99 28 L99 87 L50 114 L1 87 L1 28 Z"
                            vector-effect="non-scaling-stroke"></path>
                    </svg>
                    <div class="hex-content">
                        <i class="fa fa-plane"></i>
                        <span>Travel</span>
                    </div>
                </div>

                <!-- Row 2 -->
                <div class="hex-item">
                    <svg class="hex-svg-container" viewBox="0 0 100 115" preserveAspectRatio="none">
                        <path class="hex-svg-border" d="M50 1 L99 28 L99 87 L50 114 L1 87 L1 28 Z"
                            vector-effect="non-scaling-stroke"></path>
                    </svg>
                    <div class="hex-content">
                        <i class="fa fa-graduation-cap"></i>
                        <span>Education</span>
                    </div>
                </div>
                <div class="hex-item">
                    <svg class="hex-svg-container" viewBox="0 0 100 115" preserveAspectRatio="none">
                        <path class="hex-svg-border" d="M50 1 L99 28 L99 87 L50 114 L1 87 L1 28 Z"
                            vector-effect="non-scaling-stroke"></path>
                    </svg>
                    <div class="hex-content">
                        <i class="fa fa-cubes"></i>
                        <span>Logistics</span>
                    </div>
                </div>
                <div class="hex-item">
                    <svg class="hex-svg-container" viewBox="0 0 100 115" preserveAspectRatio="none">
                        <path class="hex-svg-border" d="M50 1 L99 28 L99 87 L50 114 L1 87 L1 28 Z"
                            vector-effect="non-scaling-stroke"></path>
                    </svg>
                    <div class="hex-content">
                        <i class="fa fa-users"></i>
                        <span>HR & Payroll</span>
                    </div>
                </div>
                <div class="hex-item">
                    <svg class="hex-svg-container" viewBox="0 0 100 115" preserveAspectRatio="none">
                        <path class="hex-svg-border" d="M50 1 L99 28 L99 87 L50 114 L1 87 L1 28 Z"
                            vector-effect="non-scaling-stroke"></path>
                    </svg>
                    <div class="hex-content">
                        <i class="fa fa-film"></i>
                        <span>Media</span>
                    </div>
                </div>
                <div class="hex-item">
                    <svg class="hex-svg-container" viewBox="0 0 100 115" preserveAspectRatio="none">
                        <path class="hex-svg-border" d="M50 1 L99 28 L99 87 L50 114 L1 87 L1 28 Z"
                            vector-effect="non-scaling-stroke"></path>
                    </svg>
                    <div class="hex-content">
                        <i class="fa fa-industry"></i>
                        <span>Manufacturing</span>
                    </div>
                </div>
                <div class="hex-item">
                    <svg class="hex-svg-container" viewBox="0 0 100 115" preserveAspectRatio="none">
                        <path class="hex-svg-border" d="M50 1 L99 28 L99 87 L50 114 L1 87 L1 28 Z"
                            vector-effect="non-scaling-stroke"></path>
                    </svg>
                    <div class="hex-content">
                        <i class="fa fa-cutlery"></i>
                        <span>Restaurant</span>
                    </div>
                </div>
                <div class="hex-item">
                    <svg class="hex-svg-container" viewBox="0 0 100 115" preserveAspectRatio="none">
                        <path class="hex-svg-border" d="M50 1 L99 28 L99 87 L50 114 L1 87 L1 28 Z"
                            vector-effect="non-scaling-stroke"></path>
                    </svg>
                    <div class="hex-content">
                        <i class="fa fa-gamepad"></i>
                        <span>Gaming</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tech Stack -->
    <!-- Tech Stack -->
    <section class="ht-section bg-light" style="padding-bottom: 80px;">
        <div class="container-fluid">
            <h2 class="section-title center-text mb-40">Our <span class="text-blue">Tech Stack</span></h2>
        </div>
        <div class="container-fluid p-0">
            <div class="tech-logos-grid" data-aos="fade-left">
                <!-- Row 1 (LTR) -->
                <div class="marquee-fader marquee-fader-light" style="width: 100%;">
                    <div id="tech-marquee-1" class="owl-carousel owl-theme" style="margin-bottom: 20px;" dir="rtl">
                        <i class="devicon-angularjs-plain colored" title="Angular"></i>
                        <i class="devicon-react-original colored" title="React"></i>
                        <i class="devicon-javascript-plain colored" title="JavaScript"></i>
                        <i class="devicon-vuejs-plain colored" title="Vue.js"></i>
                        <i class="devicon-nodejs-plain-wordmark colored" title="Node.js"></i>
                        <i class="devicon-nextjs-plain colored" title="Next.js"></i>
                        <i class="devicon-typescript-plain colored" title="TypeScript"></i>
                        <i class="devicon-html5-plain-wordmark colored" title="HTML5"></i>
                        <i class="devicon-css3-plain-wordmark colored" title="CSS3"></i>
                        <i class="devicon-sass-original colored" title="SASS"></i>
                    </div>
                </div>

                <!-- Row 2 (RTL) -->
                <div class="marquee-fader marquee-fader-light" style="width: 100%;">
                    <div id="tech-marquee-2" class="owl-carousel owl-theme" style="margin-bottom: 20px;">
                        <i class="devicon-mysql-plain-wordmark colored" title="MySQL"></i>
                        <i class="devicon-dotnetcore-plain colored" title=".NET"></i>
                        <i class="devicon-microsoftsqlserver-plain-wordmark colored" title="SQL Server"></i>
                        <i class="devicon-kubernetes-plain-wordmark colored" title="Kubernetes"></i>
                        <i class="devicon-docker-plain-wordmark colored" title="Docker"></i>
                        <i class="devicon-python-plain colored" title="Python"></i>
                        <i class="devicon-java-plain colored" title="Java"></i>
                        <i class="devicon-php-plain colored" title="PHP"></i>
                        <i class="devicon-laravel-plain-wordmark colored" title="Laravel"></i>
                        <i class="devicon-codeigniter-plain-wordmark colored" title="CodeIgniter"></i>
                    </div>
                </div>

                <!-- Row 3 (LTR) -->
                <div class="marquee-fader marquee-fader-light" style="width: 100%;">
                    <div id="tech-marquee-3" class="owl-carousel owl-theme" style="margin-bottom: 20px;" dir="rtl">
                        <i class="devicon-amazonwebservices-plain-wordmark colored" title="AWS"></i>
                        <i class="devicon-jenkins-plain colored" title="Jenkins"></i>
                        <i class="devicon-apachekafka-original-wordmark colored" title="Apache Kafka"></i>
                        <i class="devicon-mongodb-plain-wordmark colored" title="MongoDB"></i>
                        <i class="devicon-nginx-original colored" title="Nginx"></i>
                        <i class="devicon-git-plain colored" title="Git"></i>
                        <i class="devicon-linux-plain colored" title="Linux"></i>
                        <i class="devicon-redis-plain colored" title="Redis"></i>
                        <i class="devicon-postgresql-plain colored" title="PostgreSQL"></i>
                        <i class="devicon-firebase-plain colored" title="Firebase"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Crafting Long Term Relationships -->
    <section class="ht-section" id="roles">
        <div class="container-fluid">
            <!-- Split Header -->
            <div class="row relationship-header align-items-center">
                <div class="col-md-6" data-aos="fade-right">
                    <div class="rel-title-block">
                        <small
                            style="color: #666; letter-spacing: 1px; font-weight: 500; display: block; margin-bottom: 5px;">#WE
                            ARE MYSOFTHEAVEN</small>
                        <h2 class="gallery-title">Inside Mysoftheaven — <br><span class="text-blue">Our People, Culture
                                & Moments</span></h2>
                    </div>
                </div>
                <div class="col-md-6" data-aos="fade-left">
                    <div class="rel-desc">
                        <p>Celebrating our journey, our team, and our culture. Every moment captured reflects our
                            commitment, collaboration, and the vibrant environment that drives innovation and
                            excellence.</p>
                    </div>
                </div>
            </div>

            <!-- Image Row - Converted to Marquee -->
            <div class="owl-carousel owl-theme" id="relationship-marquee" data-aos="fade-up">
                <?php if (!empty($relationship_gallery)): ?>
                    <?php foreach ($relationship_gallery as $gallery_item): ?>
                        <?php if ($gallery_item['display'] == 1): ?>
                            <div class="item">
                                <div class="rel-img-item">
                                    <img src="<?= base_url('relationship_gallery_img/' . $gallery_item['image']) ?>"
                                        class="rel-img">
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                <?php else: ?>
                    <!-- Default Static Images if no dynamic data -->
                    <div class="item">
                        <div class="rel-img-item">
                            <img src="<?= base_url('home2media/Rectangle 24042.png') ?>" class="rel-img">
                        </div>
                    </div>
                    <div class="item">
                        <div class="rel-img-item">
                            <img src="<?= base_url('home2media/Rectangle 24043.png') ?>" class="rel-img">
                        </div>
                    </div>
                    <div class="item">
                        <div class="rel-img-item">
                            <img src="<?= base_url('home2media/Rectangle 24045.png') ?>" class="rel-img">
                        </div>
                    </div>
                    <div class="item">
                        <div class="rel-img-item">
                            <img src="<?= base_url('home2media/Rectangle 24047.png') ?>" class="rel-img">
                        </div>
                    </div>
                    <div class="item">
                        <div class="rel-img-item">
                            <img src="<?= base_url('home2media/Rectangle 24044.png') ?>" class="rel-img">
                        </div>
                    </div>
                    <div class="item">
                        <div class="rel-img-item">
                            <img src="<?= base_url('home2media/Rectangle 24046.png') ?>" class="rel-img">
                        </div>
                    </div>
                <?php endif; ?>
            </div>

            <style>
                #relationship-marquee .owl-stage {
                    display: flex;
                    align-items: center;
                    padding-bottom: 40px;
                    padding-top: 40px;
                }

                #relationship-marquee .item {
                    padding: 10px;
                }

                /* Staggered Effect */
                #relationship-marquee .owl-item:nth-child(even) .rel-img-item {
                    margin-top: 40px;
                }

                #relationship-marquee .owl-item:nth-child(odd) .rel-img-item {
                    margin-top: -40px;
                }

                .rel-img-item {
                    height: 350px;
                    border-radius: 20px;
                    overflow: hidden;
                    width: 100%;
                }

                .rel-img {
                    width: 100%;
                    height: 100%;
                    object-fit: cover;
                    object-position: center;
                }
            </style>
        </div>
    </section>

    <!-- Clients -->
    <section class="ht-section clients-section"
        style="height: auto; min-height: 500px; padding: 60px 0; overflow: hidden;">
        <div class="container-fluid">
            <div class="row items-center">
                <!-- Left Column: Text -->
                <div class="col-md-4 col-sm-12" data-aos="fade-right">
                    <h2 class="section-title mb-20 text-white" style="text-align: left;color: #0172b9!important;">
                        Clients</h2>
                    <p class="text-white mb-30" style="line-height: 1.8;opacity: 0.9;color: #5d5d5d!important;">
                        We partner with businesses, corporations, service providers, and government agencies that rely
                        on our technology every day. Trusted by leading organizations, we deliver reliable, scalable,
                        and secure solutions. Here are some of the leading organizations and innovative businesses that
                        trust our expertise.
                    </p>
                </div>

                <!-- Right Column: Marquees -->
                <div class="col-md-8 col-sm-12" data-aos="fade-left">
                    <!-- Marquee Row 1 (RTL) -->
                    <div class="marquee-fader marquee-fader-dark-blue" style="width: 100%;">
                        <div id="clients-marquee-1" class="owl-carousel owl-theme" style="margin-bottom: 5px;"
                            dir="rtl">
                            <div class="client-box-marquee"><img src="<?= base_url('home2media/clients/Group.png') ?>">
                            </div>
                            <div class="client-box-marquee"><img
                                    src="<?= base_url('home2media/clients/Group-1.png') ?>">
                            </div>
                            <div class="client-box-marquee"><img
                                    src="<?= base_url('home2media/clients/Group-2.png') ?>">
                            </div>
                            <div class="client-box-marquee"><img
                                    src="<?= base_url('home2media/clients/Group-3.png') ?>">
                            </div>
                            <div class="client-box-marquee"><img
                                    src="<?= base_url('home2media/clients/Group-4.png') ?>">
                            </div>
                            <div class="client-box-marquee"><img
                                    src="<?= base_url('home2media/clients/Group-5.png') ?>">
                            </div>
                            <div class="client-box-marquee"><img
                                    src="<?= base_url('home2media/clients/Group-6.png') ?>">
                            </div>
                        </div>
                    </div>

                    <!-- Marquee Row 2 (LTR) -->
                    <div class="marquee-fader marquee-fader-dark-blue" style="width: 100%;">
                        <div id="clients-marquee-2" class="owl-carousel owl-theme" style="margin-bottom: 5px;">
                            <div class="client-box-marquee"><img
                                    src="<?= base_url('home2media/clients/Group-7.png') ?>">
                            </div>
                            <div class="client-box-marquee"><img
                                    src="<?= base_url('home2media/clients/Group-8.png') ?>">
                            </div>
                            <div class="client-box-marquee"><img
                                    src="<?= base_url('home2media/clients/Group-9.png') ?>">
                            </div>
                            <div class="client-box-marquee"><img src="<?= base_url('home2media/clients/Group.png') ?>">
                            </div> <!-- Repeating for fullness -->
                            <div class="client-box-marquee"><img
                                    src="<?= base_url('home2media/clients/Group-1.png') ?>">
                            </div>
                            <div class="client-box-marquee"><img
                                    src="<?= base_url('home2media/clients/Group-2.png') ?>">
                            </div>
                            <div class="client-box-marquee"><img
                                    src="<?= base_url('home2media/clients/Group-3.png') ?>">
                            </div>
                        </div>
                    </div>

                    <!-- Marquee Row 3 (RTL) -->
                    <div class="marquee-fader marquee-fader-dark-blue" style="width: 100%;">
                        <div id="clients-marquee-3" class="owl-carousel owl-theme" style="margin-bottom: 5px;"
                            dir="rtl">
                            <div class="client-box-marquee"><img
                                    src="<?= base_url('home2media/clients/Group-4.png') ?>">
                            </div>
                            <div class="client-box-marquee"><img
                                    src="<?= base_url('home2media/clients/Group-5.png') ?>">
                            </div>
                            <div class="client-box-marquee"><img
                                    src="<?= base_url('home2media/clients/Group-6.png') ?>">
                            </div>
                            <div class="client-box-marquee"><img
                                    src="<?= base_url('home2media/clients/Group-7.png') ?>">
                            </div>
                            <div class="client-box-marquee"><img
                                    src="<?= base_url('home2media/clients/Group-8.png') ?>">
                            </div>
                            <div class="client-box-marquee"><img
                                    src="<?= base_url('home2media/clients/Group-9.png') ?>">
                            </div>
                            <div class="client-box-marquee"><img src="<?= base_url('home2media/clients/Group.png') ?>">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Client Testimonials -->
    <section class="ht-section testimonials-section"
        style="height: auto;  padding-bottom: 50px; background-color: #002b49;">
        <div class="container-fluid">
            <h2 class="section-title text-white center-text mb-40">Client Testimonials</h2>

            <div class="testimonials-carousel owl-carousel owl-theme">
                <!-- Card 1 -->
                <div class="testimonial-card hover-lift" data-aos="fade-up" data-aos-delay="0">
                    <div class="test-header">
                        <div class="test-avatar"><img src="<?= base_url('hire_talent_media/picture1.png') ?>">
                        </div>
                        <div class="test-info"> 
                            <span style="font-family: Nourd-Bold">LIMS</span>
                            <span>Md. Rashed Kamal | ALRC-2</span>
                            <span>Ministry of Land</span>
                        </div>
                    </div>
                    <div class="test-body">
                        <div class="project-tag"> Land Information Management System</div>
                        <p style="font-size:12px !important; ">“Mysoft Heaven delivered a complex e-governance system with strong expertise, professionalism, reliable delivery, and responsive support”</p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="testimonial-card hover-lift" data-aos="fade-up" data-aos-delay="0">
                    <div class="test-header">
                        <div class="test-avatar"><img src="<?= base_url('hire_talent_media/picture2.png') ?>">
                        </div>
                        <div class="test-info">
                            <span style="font-family: Nourd-Bold">LA</span>
                            <span> Mostak Ahmed |  Mostak Ahmed</span>
                            <span>Ministry of Land</span>
                        </div>
                    </div>
                    <div class="test-body">
                        <div class="project-tag">Library Automation </div>
                        <p style="font-size:12px !important ">“Mysoft Heaven showed professionalism and technical clarity, resolving challenges quickly while maintaining quality and strong collaboration.”</p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="testimonial-card hover-lift" data-aos="fade-up" data-aos-delay="0">
                    <div class="test-header">
                        <div class="test-avatar"><img src="<?= base_url('hire_talent_media/picture3.png') ?>">
                        </div>
                        <div class="test-info">
                            <span style="font-family: Nourd-Bold">ERP</span>
                            <span> Sheikh Mofizul Islam | Director</span>
                            <span>National Institute of Local Government</span>
                        </div>
                    </div>
                    <div class="test-body">
                        <div class="project-tag">Enterprise Resource Planning System</div>
                        <p style="font-size:12px !important ">“The team delivered a reliable ERP with technical excellence, timely support, and dedicated coordination throughout the project”</p>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="testimonial-card" data-aos="fade-up" data-aos-delay="0">
                    <div class="test-header">
                        <div class="test-avatar"><img src="<?= base_url('hire_talent_media/picture4.png') ?>">
                        </div>
                        <div class="test-info">
                            <span style="font-family: Nourd-Bold">AD</span>
                            <span>Phil Yone | Managing Partner</span>
                            <span>Intelli Systems</span>
                        </div>
                    </div>
                    <div class="test-body">
                        <div class="project-tag">Application Development</div>
                        <p style="font-size:13px !important ">"Great experience with Mysoft Heaven for strong communication, high technical quality, and timely delivery across time zones.”</p>
                    </div>
                </div>

                <!-- Card 5 -->
                <div class="testimonial-card" data-aos="fade-up" data-aos-delay="0">
                    <div class="test-header">
                        <div class="test-avatar"><img src="<?= base_url('hire_talent_media/picture5.png') ?>">
                        </div>
                        <div class="test-info">
                            <span style="font-family: Nourd-Bold">HR Sheba System</span>
                            <span> Md. Mahabubur Rahman|  General Manager </span>
                            <span>Ministry of Land</span>
                        </div>
                    </div>
                    <div class="test-body">
                        <div class="project-tag">Implementation of HR Sheba System.</div>
                        <p style="font-size:13px !important ">"HR Sheba improved efficiency with user-friendly design, accurate payroll, and highly responsive support from the team.”</p>
                    </div>
                </div>

                <!-- Card 6 -->
                <div class="testimonial-card" data-aos="fade-up" data-aos-delay="0">
                    <div class="test-header">
                        <div class="test-avatar"><img src="<?= base_url('hire_talent_media/picture6.png') ?>">
                        </div>
                        <div class="test-info">
                            <span style="font-family: Nourd-Bold">Sheba ERP System</span>
                            <span> Tanveer Kadir | General Manage</span>
                            <span>Rishal Group</span>
                        </div>
                    </div>
                    <div class="test-body">
                        <div class="project-tag"> Implementation of Sheba ERP System</div>
                        <p style="font-size:13px !important ">"Sheba ERP is robust and well-tailored, backed by strong domain knowledge, clear communication, and effective training support.”</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Awards & Recognitions -->
    <section class="ht-section awards-section" style="height: auto; padding-top: 80px; padding-bottom: 80px;">
        <div class="container-fluid">
            <h2 class="section-title center-text mb-20">Awards <span class="text-blue">& Recognitions</span></h2>
            <p class="center-text mb-50" style="max-width: 800px; margin: 0 auto 50px auto; color: #666;">
                Recognized nationally and globally, Mysoft Heaven (BD) Ltd. has earned top awards from the Bangladesh
                government, international partners, and NGOs. Our work has been instrumental in advancing Bangladesh's
                digital transformation in the public sector.
            </p>

            <div class="awards-grid">
                <div class="award-card hover-lift" data-aos="fade-up">
                    <div class="award-icon-box">
                        <img src="<?= base_url('hire_talent_media/Land_Development_Tax(LDTAX).png') ?>" alt="Award Logo">
                        <!-- Placeholder -->
                    </div>
                    <h4 style="font-family:Nourd-Bold">Land Development Tax (LDTAX)</h4>
                    <p class="" style="font-family:arial;font-size:13px !important;">The Land Development Tax System, a winner of the World Summit on the Information Society (WSIS) Prize, manages around 5.7 crore land holding records nationwide, securely storing owner data and enabling citizens to pay Land Development Tax with automated daily revenue collection directly to Bangladesh Bank.</p>
                </div>
                <div class="award-card hover-lift" data-aos="fade-up">
                    <div class="award-icon-box">
                        <img src="<?= base_url('hire_talent_media/Bhumi_Sheba_Mobile_App.png') ?>" alt="Award Logo">
                        <!-- Placeholder -->
                    </div>
                    <h4 style="font-family:Nourd-Bold">Bhumi Sheba Mobile App</h4>
                    <p class="" style="font-family:arial;font-size:13px !important;">The Bhumi Sheba (Vumi Seba) Mobile App, winner of the Digital Bangladesh Award 2022, delivers citizen-centric digital land services by providing easy mobile access to land information, tax calculations, and clear service guidelines for improved public convenience.
                    </p>
                </div>
                <div class="award-card hover-lift" data-aos="fade-up">
                    <div class="award-icon-box">
                        <img src="<?= base_url('hire_talent_media/Land_Development_Tax(LDTAX).png') ?>" alt="Award Logo">
                        <!-- Placeholder --> 
                    </div>
                    <h4 style="font-family:Nourd-Bold">Land Development Tax (LDTAX)</h4>
                    <p class="" style="font-family:arial;font-size:13px !important;">The Land Development Tax System, awarded the Digital Bangladesh Award 2022, is a nationwide e-governance platform managing 5.7 crore+ holding records, ensuring secure owner data storage and enabling transparent, accessible, and accountable Land Development Tax payments.
                    </p>
                </div>
            </div>
        </div>
    </section>



    <!-- Membership & Certification -->
    <section class="ht-section certifications-section" style="height: auto;padding-top: 50px;background-color: #fff;">
        <div class="container">
            <h2 class="section-title center-text mb-40">Membership <span class="text-blue">& Certification</span></h2>

            <style>
                .cert-logo {
                    width: 100%;
                    max-width: 100%;
                    height: 80px;
                    object-fit: contain;
                    display: block;
                    margin: 0 auto;
                }
            </style>
            <div class="certifications-carousel owl-carousel owl-theme" style="margin-bottom: 30px;" data-aos="fade-up">
                <div class="item"><img src="<?= base_url('membership/1.gif') ?>" class="cert-logo" /></div>
                <div class="item"><img src="<?= base_url('membership/2.gif') ?>" class="cert-logo" /></div>
                <div class="item"><img src="<?= base_url('membership/3.gif') ?>" class="cert-logo" /></div>
                <div class="item"><img src="<?= base_url('membership/4.gif') ?>" class="cert-logo" /></div>
                <div class="item"><img src="<?= base_url('membership/5.gif') ?>" class="cert-logo" /></div>
            </div>
        </div>
    </section>

    <!-- Billing & Invoicing Section -->
    <section class="ht-section billing-section">
        <div class="container">
            <div class="billing-wrapper">
                <div class="row no-gutters">
                    <div class="col-md-6">
                        <div class="billing-video-box">
                            <img src="<?= base_url('home2media/billing_video_thumb.png') ?>" alt="Billing Control"
                                class="billing-img">
                            <div class="play-btn-overlay">
                                <i class="fa fa-play"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="billing-content p-5">
                            <h2 class="billing-title">Step Inside Our World of Innovation.</h2>
                            <p class="billing-text">
                                Mysoftheaven is more than a technology company. We are growing continuously in the
                                fast-paced IT landscape while delivering seamless, efficient, and tailored solutions for
                                businesses of all sizes. Our teams combine deep technical expertise with innovative
                                thinking to solve real-world challenges and drive meaningful results.
                            </p>
                            <p class="billing-text">
                                The strength of Mysoftheaven lies in our ability to merge industry knowledge, advanced
                                technologies, and collaborative processes. Step inside and discover how we build
                                solutions, nurture talent, and create an environment where innovation meets impact.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <style>
            .billing-section {
                background-color: #0088cc;
            }

            .billing-wrapper {
                background: #fff;
                border-radius: 12px;
                overflow: hidden;
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            }

            .billing-video-box {
                position: relative;
                height: 100%;
                min-height: 400px;
            }

            .billing-img {
                width: 100%;
                height: 100%;
                object-fit: cover;
            }

            .play-btn-overlay {
                position: absolute;
                top: 47.5%;
                left: 50.5%;
                transform: translate(-50%, -50%);
                width: 70px;
                height: 70px;
                background: #fff;
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
                cursor: pointer;
                transition: transform 0.3s;
            }

            .play-btn-overlay i {
                color: #0088cc;
                font-size: 24px;
                margin-left: 4px;
            }

            .play-btn-overlay:hover {
                transform: translate(-50%, -50%) scale(1.1);
            }

            .billing-content {
                display: flex;
                flex-direction: column;
                justify-content: center;
                height: 100%;
                padding: 50px !important;
            }

            .billing-title {
                font-family: 'Nourd-Bold', sans-serif;
                font-size: 32px;
                color: #333;
                margin-bottom: 25px;
                line-height: 1.3;
            }

            .billing-text {
                color: #666;
                font-size: 15px;
                line-height: 1.7;
                margin-bottom: 20px;
            }

            @media (max-width: 768px) {
                .billing-content {
                    padding: 30px !important;
                }

                .billing-title {
                    font-size: 26px;
                }
            }
        </style>
    </section>

    <!-- Get in Touch Section -->
    <section class="ht-section contact-section-wrapper" style="height: auto;padding: 96px 0 100px 0;background: #fff;">
        <div class="container">
            <div class="contact-card hover-lift" data-aos="fade-up">
                <div class="row no-gutters">
                    <!-- Left Info Column -->
                    <div class="col-md-5 col-sm-12 contact-info-side">
                        <h3 class="text-white mb-20 " style="font-weight: 700;">Let’s Talk About Your Business</h3>
                        <p class="text-white mb-40" style="opacity: 0.9; font-size: 14px; line-height: 1.6;">
                            Schedule a discovery call to explore how we can support your
                            business goals.
                        </p>

                        <div class="contact-item mb-30">
                            <div class="icon-circle"><i class="fa fa-phone"></i></div>
                            <div class="contact-text">
                                <strong>Call Us</strong>
                                <span>+880 1958-633202</span>
                            </div>
                        </div>

                        <div class="contact-item mb-30">
                            <div class="icon-circle"><i class="fa fa-envelope"></i></div>
                            <div class="contact-text">
                                <strong>Email Us</strong>
                                <span>info@mysoftheaven.com</span>
                            </div>
                        </div>

                        <div class="contact-item mb-30">
                            <div class="icon-circle"><i class="fa fa-map-marker"></i></div>
                            <div class="contact-text">
                                <strong>Visit Head Office</strong>
                                <span>P.R.Tower, 924/1, Level 8, Begum Rokeya Sarani, Shewrapara, Mirpur,
                                    Dhaka-1216.</span>
                            </div>
                        </div>

                        <div class="contact-item mb-40">
                            <div class="icon-circle"><i class="fa fa-map-marker"></i></div>
                            <div class="contact-text">
                                <strong>Visit Corporate Office</strong>
                                <span>8813 NW 23 Street, Miami, FL 33172, USA.</span>
                            </div>
                        </div>

                        <div class="social-links">
                            <a href="#" class="social-btn"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="social-btn"><i class="fa fa-linkedin"></i></a>
                            <a href="#" class="social-btn"><i class="fa fa-youtube-play"></i></a>
                        </div>
                    </div>

                    <!-- Right Form Column -->
                    <div class="col-md-7 col-sm-12 contact-form-side">
                        <h3 class="mb-20" style="font-weight: 700; color: #000;">GET IN TOUCH</h3>
                        <p class="mb-30" style="font-size: 13px; color: #666; line-height: 1.6;">
                            Have a project in mind or need the right tech
                            team? Reach out to us and our experts will get back to you
                            shortly.
                        </p>

                        <form action="<?= base_url('submit-contact') ?>" method="post" id="contact-form-home2">
                            <div class="row">
                                <div class="col-md-6 col-sm-12 form-group">
                                    <label>Full Name <span class="text-danger">*</span></label>
                                    <input type="text" name="name" class="form-control form-control-custom"
                                        placeholder="" required>
                                </div>
                                <div class="col-md-6 col-sm-12 form-group">
                                    <label>Email <span class="text-danger">*</span></label>
                                    <input type="email" name="email" class="form-control form-control-custom"
                                        placeholder="" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-12 form-group">
                                    <label>Phone Number <span class="text-danger">*</span></label>
                                    <input type="text" name="phone" class="form-control form-control-custom"
                                        placeholder="" oninput="this.value = this.value.replace(/[^0-9]/g, '');">
                                </div>
                                <div class="col-md-6 col-sm-12 form-group">
                                    <label>Company Name <span class="text-danger">*</span></label>
                                    <input type="text" name="company" class="form-control form-control-custom"
                                        placeholder="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 col-sm-12 form-group">
                                    <label>Select Industry <span class="text-danger">*</span></label>
                                    <select class="form-control form-control-custom" name="industry">
                                        <option value="">Select an Industry</option>
                                        <option value="Technology">Technology</option>
                                        <option value="Healthcare">Healthcare</option>
                                        <option value="Finance">Finance</option>
                                        <option value="Retail">Retail</option>
                                        <option value="Manufacturing">Manufacturing</option>
                                        <option value="Education">Education</option>
                                        <option value="Real Estate">Real Estate</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                                <div class="col-md-4 col-sm-12 form-group">
                                    <label>Select Service <span class="text-danger"></span></label>
                                    <select class="form-control form-control-custom" name="service">
                                        <option value="">Select a service</option>
                                        <?php if (!empty($all_services)): ?>
                                            <?php foreach ($all_services as $service): ?>
<option value="<?= $service->id ?>">
    <?= ucwords(str_replace('-', ' ', $service->slug)) ?>
</option>                                               <?php endforeach; ?>
                                        <?php endif; ?>
                                    </select>
                                </div>
                                <div class="col-md-4 col-sm-12 form-group">
                                    <label>Select Product <span class="text-danger"></span></label>
                                    <select class="form-control form-control-custom" name="product">
                                        <option value="">Select a Product</option>
                                        <?php if (!empty($all_products)): ?>
                                            <?php foreach ($all_products as $product): ?>
                                                <option value="<?= $product->id ?>"><?= $product->name ?></option>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Project details <span class="text-danger">*</span></label>
                                <textarea name="project_details" class="form-control form-control-custom" rows="4"
                                    placeholder="Tell us about your project or talent needs..." required></textarea>
                            </div>

                            <button type="submit" class="btn btn-block btn-submit">Send Inquiry <i
                                    class="fa fa-paper-plane"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

<!-- Scripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
    const UNIQUE_CLASS = 'js-fluid-converted';

    function handleContainerSwitch() {
        // শুধু যেগুলোতে ইউনিক ক্লাস আছে অথবা container-fluid আছে
        const elements = document.querySelectorAll(
            '.container-fluid, .' + UNIQUE_CLASS
        );

        elements.forEach(el => {
            // header বাদ
            if (el.id === 'header') return;

            if (window.innerWidth <= 900) {
                // শুধু আগের container-fluid গুলো
                if (
                    el.classList.contains('container-fluid') &&
                    !el.classList.contains(UNIQUE_CLASS)
                ) {
                    el.classList.remove('container-fluid');
                    el.classList.add('container', UNIQUE_CLASS);
                }
            } else {
                // শুধু যেগুলো JS দিয়ে convert করা হয়েছিল
                if (el.classList.contains(UNIQUE_CLASS)) {
                    el.classList.remove('container', UNIQUE_CLASS);
                    el.classList.add('container-fluid');
                }
            }
        });
    }

    // page load
    handleContainerSwitch();

    // resize
    window.addEventListener('resize', handleContainerSwitch);
</script>



<script>
    $(document).ready(function () {
        // Initialize AOS
        AOS.init();

        // Counter Animation
        $('.counter').each(function () {
            var $this = $(this),
                countTo = $this.attr('data-count');

            $({ countNum: $this.text() }).animate({
                countNum: countTo
            },
                {
                    duration: 2500,
                    easing: 'swing',
                    step: function () {
                        $this.text(Math.floor(this.countNum));
                    },
                    complete: function () {
                        $this.text(this.countNum);
                    }
                });
        });

        // Testimonial Carousel (Synced from hire_talent.php logic)
        $(".testimonials-carousel").owlCarousel({
            loop: true,
            margin: 20,
            autoplay: true,
            nav: false,
            dots: true,
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 2
                },
                992: {
                    items: 4
                }
            }
        });

        // Certifications Carousel (Synced)
        $(".certifications-carousel").owlCarousel({
            loop: true,
            margin: 30,
            autoplay: true,
            nav: false,
            dots: false,
            responsive: {
                0: { items: 3 },
                600: { items: 4 },
                1000: { items: 5 }
            }
        });

        // Hero Carousel
        $('#hero-carousel').owlCarousel({
            loop: true,
            margin: 0,
            nav: false,
            dots: false,
            autoplay: true,
            autoplayTimeout: 5000,
            smartSpeed: 1000,
            items: 1,
            navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"]
        });

        // Product Carousel
        $('#product-carousel').owlCarousel({
            loop: true,
            margin: 20,
            autoplay: true,
            nav: false,
            dots: true,
            responsive: {
                0: { items: 1 },
                600: { items: 2 },
                1000: { items: 3 }
            }
        });

        // Tech Stack Marquees
        var marqueeOptions = {
            loop: true,
            margin: 10,
            nav: false,
            dots: false,
            autoplay: true,
            slideTransition: 'linear',
            autoplayTimeout: 3000,
            autoplaySpeed: 3000,
            smartSpeed: 3000,
            autoplayHoverPause: false,
            responsive: {
                0: { items: 3 },
                450: { items: 4 },
                600: { items: 5 },
                1000: { items: 7 }
            }
        };

        // Row 1 (RTL)
        $('#tech-marquee-1').owlCarousel($.extend({}, marqueeOptions, { rtl: true }));
        $('#certified_marquee').owlCarousel($.extend({}, marqueeOptions, { rtl: true }));
        $('#clients_marquee').owlCarousel($.extend({}, marqueeOptions));

        // Row 2 (LTR)
        $('#tech-marquee-2').owlCarousel(marqueeOptions);

        // Row 3 (RTL)
        $('#tech-marquee-3').owlCarousel($.extend({}, marqueeOptions, { rtl: true }));

        // Mobile Certified & Clients Marquees
        $('#certified_marquee_mobile').owlCarousel($.extend({}, marqueeOptions, { rtl: true }));
        $('#clients_marquee_mobile').owlCarousel($.extend({}, marqueeOptions));



        // Industries Carousel (Removed - now Hexagon Grid)
        // If                         we wa                   nt to re          -e        nable carousel for something e                        lse:
        /*
        $('#industries-carousel').owlCarousel({ ... });
        */

        // Clients Marquees
        var clientMarqueeOptions = {
            loop: true,
            margin: 5,
            nav: false,
            dots: false,
            autoplay: true,
            slideTransition: 'linear',
            autoplayTimeout: 3000,
            autoplaySpeed: 3000,
            smartSpeed: 3000,
            autoplayHoverPause: true,
            responsive: {
                0: { items: 3 },
                600: { items: 4 },
                1000: { items: 6 }
            }
        };

        // Row 1 (RTL)
        $('#clients-marquee-1').owlCarousel($.extend({}, clientMarqueeOptions, { rtl: true }));

        // Row 2 (LTR)
        $('#clients-marquee-2').owlCarousel(clientMarqueeOptions);

        // Row 3 (RTL)
        $('#clients-marquee-3').owlCarousel($.extend({}, clientMarqueeOptions, { rtl: true }));

        // Testimonial Carousel
        $('#testimonial-carousel').owlCarousel({
            loop: true,
            margin: 20,
            autoplay: true,
            nav: false,
            dots: true,
            responsive: {
                0: { items: 1 },
                768: { items: 2 },
                1000: { items: 4 }
            }
        });

    });

    // Relationship Section Marquee
    $('#relationship-marquee').owlCarousel({
        loop: true,
        margin: 20,
        nav: false,
        dots: false,
        autoplay: true,
        slideTransition: 'linear',
        autoplayTimeout: 3000,
        autoplaySpeed: 3000,
        smartSpeed: 3000,
        autoplayHoverPause: false,
        responsive: {
            0: { items: 1 },
            600: { items: 3 },
            1000: { items: 4 },
            1400: { items: 5 }
        }
    });

    // Bottom Hero Slider - Counters
    $('#bottom-hero-slider').owlCarousel({
        loop: true,
        margin: 0,
        nav: false,
        dots: false,
        autoplay: true,
        autoplayTimeout: 4000, // Slightly faster than 5s primarily for better user feedback loop
        smartSpeed: 1000,
        items: 1,
        touchDrag: false,
        mouseDrag: false,
        animateOut: 'fadeOut', // Optional: simpler transition for numbers
        animateIn: 'fadeIn'
    });

    // Mobile Hero Slider
    $('#mobile-hero-slider').owlCarousel({
        loop: true,
        autoplay: true,
        margin: 10,
        nav: false,
        dots: true,
        items: 1,
        autoplayTimeout: 4000,
        smartSpeed: 1000
    });

</script>

<script>
    function hideLoader() {
        const loader = document.getElementById('global-loader');
        if (loader) {
            loader.style.transition = 'opacity 0.5s ease';
            loader.style.opacity = '0';
            loader.style.pointerEvents = 'none';
            setTimeout(() => {
                loader.style.display = 'none';
            }, 500);
        }
    }

    window.addEventListener('load', hideLoader);

    // Fallback if load event doesn't fire or takes too long
    setTimeout(hideLoader, 3000); 
</script><!-- Contact Form Validation: Service and Product Mutual Optional -->
<script>
    $(document).ready(function () {
        const $form = $('#contact-form-home2');
        const $serviceSelect = $form.find('select[name="service"]');
        const $productSelect = $form.find('select[name="product"]');
        const $serviceLabel = $form.find('label:contains("Select Service")');
        const $productLabel = $form.find('label:contains("Select Product")');

        // Add error message container if not exists
        if (!$form.find('.service-product-error').length) {
            $productSelect.parent().after('<div class="service-product-error text-danger" style="font-size: 12px; margin-top: 5px; display: none;">Please select either Service or Product</div>');
        }

        const $errorMsg = $form.find('.service-product-error');

        // Update labels based on selection
        function updateLabels() {
            const serviceSelected = $serviceSelect.val() !== '';
            const productSelected = $productSelect.val() !== '';

            // Update label indicators
            if (serviceSelected) {
                $productLabel.find('.text-danger').text(''); // Make product optional
            } else if (productSelected) {
                $serviceLabel.find('.text-danger').text(''); // Make service optional
            } else {
                // Both empty - show one is required
                $serviceLabel.find('.text-danger').text('*');
                $productLabel.find('.text-danger').text('*');
            }
        }

        // Listen to changes
        $serviceSelect.on('change', function () {
            updateLabels();
            $errorMsg.hide();
        });

        $productSelect.on('change', function () {
            updateLabels();
            $errorMsg.hide();
        });

        // Form submission validation
        $form.on('submit', function (e) {
            const serviceSelected = $serviceSelect.val() !== '';
            const productSelected = $productSelect.val() !== '';

            if (!serviceSelected && !productSelected) {
                e.preventDefault();
                $errorMsg.show();
                $errorMsg.text('Please select at least one: Service or Product');

                // Scroll to error
                $('html, body').animate({
                    scrollTop: $errorMsg.offset().top - 100
                }, 500);

                return false;
            }

            $errorMsg.hide();
            return true;
        });

        // Initialize
        updateLabels();
    });
</script>