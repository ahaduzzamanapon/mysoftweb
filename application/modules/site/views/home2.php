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
<!-- FontAwesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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


    .ht-main-wrapper {
        width: 100vw;
        overflow: hidden;
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
        font-family: 'Nourd-Medium', sans-serif !important;
    }

    .counter {
        padding: 0 !important;
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
        padding: 0;
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

    /* Products Refactored */
    .product-card {
        border: 1px solid #0088cc;
        border-radius: 12px;
        overflow: hidden;
        padding: 25px 80px;
        text-align: center;
        background: #fff;
        height: 100%;
        transition: 0.3s;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .product-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }

    .product-logo {
        height: 40px;
        object-fit: contain;
        margin-bottom: 5px;
        display: block;
        margin-left: auto;
        margin-right: auto;
    }

    .product-logo-text {
        font-family: 'Nourd-Bold', sans-serif;
        font-size: 28px;
        color: #0088cc;
        margin-bottom: 5px;
        display: inline-block;
    }

    .product-tagline {
        font-weight: 700;
        font-size: 15px;
        margin-bottom: 20px;
        color: #000;
    }

    .product-frame {
        border: 1px solid #ddd;
        border-radius: 8px;
        padding: 5px;
        background: #fdfdfd;
        margin-bottom: 25px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
    }

    .product-img {
        width: 100%;
        height: auto;
        border-radius: 4px;
        display: block;
    }

    .product-actions {
        display: flex;
        gap: 10px;
        justify-content: space-between;
    }

    .btn-product {
        flex: 1;
        padding: 10px 5px;
        border-radius: 5px;
        font-size: 14px;
        font-weight: 600;
        text-decoration: none;
        color: #fff !important;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        white-space: nowrap;
        transition: 0.3s;
    }

    .btn-call {
        background: #007bb5;
    }

    .btn-call:hover {
        background: #005f8c;
    }

    .btn-demo {
        background: #f47920;
    }

    .btn-demo:hover {
        background: #d06010;
    }

    .btn-demo:hover {
        background: #d06010;
    }

    /* Equal Height for Owl Carousel Items */
    #product-carousel .owl-stage {
        display: flex;
    }

    #product-carousel .owl-item {
        display: flex;
        flex: 1 0 auto;
    }

    #product-carousel .product-card {
        width: 100%;
    }

    /* Carousel Dots Styling */
    /* Carousel Dots Styling - Forced Visibility */
    #product-carousel .owl-dots {
        text-align: center;
        margin-top: 30px;
        display: block !important;
        width: 100%;
    }

    #product-carousel .owl-dot {
        display: inline-block !important;
        background: none;
        border: none;
        padding: 0;
    }

    #product-carousel .owl-dot span {
        width: 12px;
        height: 12px;
        margin: 5px 6px;
        background: #ccc !important;
        /* Default visible gray */
        display: block;
        transition: all 0.3s ease;
        border-radius: 50%;
        opacity: 0.5;
    }

    #product-carousel .owl-dot.active span,
    #product-carousel .owl-dot:hover span {
        background: #0088cc !important;
        /* Active blue */
        opacity: 1;
        transform: scale(1.2);
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

    /* Hero Section Refactored */
    .hero-stat-card {
        padding: 7px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: center;
        transition: transform 0.3s ease;
    }

    .hero-stat-card:hover {
        transform: translateY(-5px);
    }

    .hero-card-pink {
        background: #FFC1DC;
        border-radius: 60px 4px 4px 4px;
        min-height: 140px;
    }

    .hero-card-blue-light {
        background: #A3CFF9;
        border-radius: 4px 57px 4px 4px;
        min-height: 61%;
    }

    .hero-card-blue-round {
        background: #A3CFF9;
        border-radius: 60px 4px 4px 4px;
        min-height: 140px;
    }

    .hero-card-green {
        background: #85F1C3;
        border-radius: 5px 50px 4px 4px;
        min-height: 140px;
    }

    .hero-stat-title {
        font-family: 'Nourd-Bold', sans-serif;
        line-height: 1;
        margin-bottom: 5px;
        font-size: clamp(14px, 3vw, 24px) !important;
    }

    .hero-stat-subtitle {
        font-family: 'Poppins', sans-serif;
        margin: 0;
        font-size: 13px;
        font-weight: 500;
        line-height: 1.2;
    }

    .hero-stat-subtitle.bold {
        font-weight: 700;
    }



    /* Tech Stack Redesign */
    .tech-logos-grid {
        display: flex;
        flex-direction: column;
        gap: 30px;
        align-items: center;
        margin-top: 30px;
    }

    #tech-marquee-1 .owl-item,
    #tech-marquee-2 .owl-item,
    #tech-marquee-3 .owl-item,
    #certified_marquee .owl-item,
    #clients_marquee .owl-item {
        text-align: center;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 80px;
    }

    .tech-logos-grid i {
        font-size: 60px;
        display: inline-block;
        transition: transform 0.3s ease;
    }

    /* Specific sizing adjustments */
    .devicon-nodejs-plain-wordmark,
    .devicon-mysql-plain-wordmark,
    .devicon-microsoftsqlserver-plain-wordmark,
    .devicon-kubernetes-plain-wordmark,
    .devicon-docker-plain-wordmark,
    .devicon-amazonwebservices-plain-wordmark,
    .devicon-laravel-plain-wordmark,
    .devicon-mongodb-plain-wordmark,
    .devicon-apachekafka-original-wordmark {
        font-size: 70px !important;
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .hero-title {
            font-size: 32px;
        }

        .hexagon-grid {
            justify-content: center;
        }

        .hex-item {
            margin: 10px;
        }

        .rel-grid {
            grid-template-columns: 1fr;
        }
    }

    /* Hexagon Grid Styles */
    .hexagon-grid {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        /* Center the grid */
        gap: 15px;
        /* Reduced gap */
        padding: 20px 0;
    }

    .hex-item {
        width: 130px;
        /* Slightly reduced width to fit 8 */
        height: 150px;
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        transition: transform 0.3s;
        /* Flex basis for 8 items: approx 12% */
        flex: 0 0 auto;
        margin-bottom: 18px;
    }

    /* Force 9 items per row on large screens */
    @media (min-width: 1200px) {
        .hex-item {
            width: auto;
            flex: 0 0 10%;
            /* 9 items * 10% = 90% + gaps */
            height: 120px;
        }

        .hexagon-grid {
            gap: 3.1%;
            /* Distribute remaining space */
            max-width: 100%;
            justify-content: center;
        }
    }

    .hex-bg {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: #fff;
        clip-path: polygon(50% 0%, 100% 25%, 100% 75%, 50% 100%, 0% 75%, 0% 25%);
        border: 2px solid #ddd;
        z-index: 1;
        transition: 0.3s;
    }

    /* Border hack for clip-path */
    .hex-item::before {
        content: "";
        position: absolute;
        top: -1px;
        left: -1px;
        right: -1px;
        bottom: -1px;
        background: #0088cc;
        z-index: 0;
        clip-path: polygon(50% 0%, 100% 25%, 100% 75%, 50% 100%, 0% 75%, 0% 25%);
        display: none;
        /* simple version first */
    }

    /* SVG Octagon/Hexagon border look is better simulated with an SVG background or image if border is critical. 
       For now, let's use a simpler "Honey comb" style or just the shape. 
       The user image shows a stroke hexagon. 
       Best way for stroke hexagon is SVG. */

    .hex-svg-container {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 1;
    }

    .hex-svg-border {
        fill: none;
        stroke: #ccc;
        stroke-width: 2;
        transition: 0.3s;
    }

    .hex-content {
        position: relative;
        z-index: 2;
        padding: 10px;
    }

    .hex-content i {
        font-size: 32px;
        color: #555;
        margin-bottom: 10px;
        display: block;
    }

    .hex-content span {
        font-size: 12px;
        font-weight: 600;
        color: #333;
        display: block;
        line-height: 1.2;
    }

    .hex-item:hover .hex-svg-border {
        stroke: #0088cc;
    }

    .hex-item:hover .hex-content i,
    .hex-item:hover .hex-content span {
        color: #0088cc;
    }

    .ht-left-title-block {
        text-align: left;
        margin-bottom: 40px;
        border-left: 5px solid #0088cc;
        padding-left: 20px;
    }

    .ht-left-title-block h2 {
        font-family: 'Nourd-Bold';
        font-size: 36px;
        color: #333;
        margin-bottom: 10px;
    }

    .ht-left-title-block p {
        color: #666;
        max-width: 700px;
        margin: 0;
    }

    /* Relationships Redesign */
    .relationship-header {
        margin-bottom: 40px;
    }

    .rel-title-block h2 {
        font-family: 'Nourd-Bold';
        font-size: 36px;
        color: #000;
        margin-bottom: 10px;
    }

    .rel-desc p {
        color: #555;
        font-size: 15px;
        line-height: 1.6;
        max-width: 600px;
    }

    .rel-grid-scroll {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        /* Align top initially */
        gap: 20px;
        padding-bottom: 50px;
        /* Space for staggered items */
        overflow: visible;
        /* No Scroll */
    }

    .rel-grid-scroll::-webkit-scrollbar {
        display: none;
    }

    .rel-img-item {
        flex: 1;
        /* Distribute space evenly */
        height: 350px;
        /* Fixed height */
        border-radius: 20px;
        overflow: hidden;
        position: relative;
        transition: transform 0.3s;
    }

    /* Staggered Effect: Even items pushed down */
    .rel-img-item:nth-child(even) {
        margin-top: 50px;
    }

    /* Target specifically 6 items for desktop, but wrap on mobile if needed */
    @media (max-width: 991px) {
        .rel-grid-scroll {
            flex-wrap: wrap;
            justify-content: center;
        }

        .rel-img-item {
            flex: 0 0 calc(50% - 20px);
            margin-top: 0 !important;
            /* Reset stagger on mobile */
            margin-bottom: 20px;
        }


        .hero-overlay-img {
            right: 3% !important;
            width: 60% !important;

        }
    }

    .rel-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.4s;
    }

    .rel-img-item:hover .rel-img {
        transform: scale(1.05);
    }

    /* Clients Section (from hire_talent.php) */
    .clients-section {
        background-color: #bbe8ff;
        padding: 80px 0;
    }

    .client-box-marquee {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100px;
        background: #fff;
        border: 1px solid #eee;
        padding: 10px;
        margin-right: 1px;
    }

    /* Synced Styles from hire_talent.php */

    /* Testimonials Section */
    .testimonials-section {
        background-color: #002b49;
        padding: 80px 0;
        text-align: center;
    }

    .testimonials-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 20px;
        margin-top: 40px;
    }

    .testimonial-card {
        border-radius: 12px;
        overflow: hidden;
        text-align: left;
    }

    .test-header {
        background: #bae6fd;
        padding: 20px;
        display: flex;
        align-items: center;
        gap: 15px;
        height: 120px;
    }

    .test-avatar {
        width: 50px;
        height: 50px;
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
        object-fit: cover;
    }

    .test-info h5 {
        font-size: 16px;
        font-weight: 700;
        margin: 0;
        color: #000;
    }

    .test-info span {
        font-size: 12px;
        color: #555;
        display: block;
    }

    .test-body {
        background: #fff;
        padding: 30px 20px 20px 20px;
        position: relative;
        height: 180px;
    }

    .project-tag {
        position: absolute;
        top: -15px;
        left: 20px;
        background: #fff;
        padding: 5px 15px;
        border-radius: 4px;
        font-size: 11px;
        font-weight: 600;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        color: #333;
    }

    .test-body p {
        font-size: 13px;
        line-height: 1.6;
        color: #333;
        margin: 0;
    }

    /* Awards Section */
    .awards-section {
        background: #fff;
        padding: 60px 0;
    }

    .awards-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 30px;
    }

    .award-card {
        background: #fff;
        border: 1px solid #eee;
        border-radius: 12px;
        padding: 30px 20px;
        text-align: center;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        transition: transform 0.3s ease;
    }

    .award-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    }

    .award-icon-box {
        width: 100px;
        height: 100px;
        margin: 0 auto 20px auto;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        border: 2px solid #eee;
        padding: 15px;
    }

    .award-icon-box img {
        max-width: 100%;
        max-height: 100%;
    }

    .award-card h4 {
        font-size: 18px;
        font-weight: 700;
        margin-bottom: 15px;
        color: #333;
    }

    .award-card p {
        font-size: 13px;
        color: #666;
        line-height: 1.6;
        margin: 0;
    }

    @media (max-width: 768px) {
        .awards-grid {
            grid-template-columns: repeat(1, 1fr);
        }
    }

    /* Membership Section */
    .certifications-section {
        background: #eef8ff;
        padding: 60px 0;
        text-align: center;
    }

    .certs-row {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 50px;
        flex-wrap: wrap;
        margin-top: 30px;
    }

    .cert-logo {
        height: 90px;
        width: auto !important;
        transition: 0.3s;
    }



    /* Contact / Get in Touch Section */
    .contact-card {
        background: #fff;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
        border-radius: 12px;
        overflow: hidden;
        margin-top: -80px;
        position: relative;
        z-index: 10;
        border: none;
    }

    .contact-info-side {
        background: #002b49;
        padding: 60px 40px !important;
        color: #fff;
    }

    .contact-form-side {
        background: #fff;
        padding: 60px 40px;
    }

    .contact-item {
        display: flex;
        gap: 20px;
        align-items: flex-start;
    }

    .icon-circle {
        width: 40px;
        height: 40px;
        background: #fff;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .icon-circle i {
        color: #002b49;
        font-size: 16px;
    }

    .contact-text strong {
        display: block;
        font-size: 15px;
        margin-bottom: 5px;
        font-weight: 600;
    }

    .contact-text span {
        font-size: 14px;
        opacity: 0.9;
        display: block;
        line-height: 1.5;
    }

    .social-links {
        display: flex;
        gap: 15px;
        margin-top: 60px;
    }

    .social-btn {
        width: 40px;
        height: 40px;
        background: #fff;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #002b49;
        font-size: 18px;
        transition: 0.3s;
    }

    .social-btn:hover {
        background: #0088cc;
        color: #fff;
    }

    .form-control-custom {
        height: 50px;
        border-radius: 8px;
        border: 1px solid #e1e1e1;
        font-size: 14px;
        background: #fff;
        padding: 0 15px;
        width: 100%;
        display: block;
        transition: 0.3s;
    }

    .form-control-custom:focus {
        border-color: #002b49;
        outline: none;
        box-shadow: 0 0 0 3px rgba(0, 43, 73, 0.1);
    }

    textarea.form-control-custom {
        height: auto;
        padding: 15px;
    }

    .btn-submit {
        background: #002b49;
        color: #fff;
        height: 55px;
        border-radius: 8px;
        font-weight: 700;
        font-size: 16px;
        margin-top: 10px;
        width: 100%;
        border: none;
        cursor: pointer;
        transition: 0.3s;
    }

    .btn-submit:hover {
        background: #004d80;
    }


    /* Awards Section Redesign */
    .awards-section {
        background-color: #E6F4FF;
        /* Light Blue Background */
        padding: 80px 0;
        text-align: center;
    }

    .awards-desc {
        max-width: 800px;
        margin: 0 auto 50px auto;
        color: #555;
        font-size: 15px;
        line-height: 1.6;
    }

    .award-card {
        background: #fff;
        border-radius: 12px;
        padding: 30px 20px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        /* Subtle shadow */
        height: 100%;
        transition: transform 0.3s, box-shadow 0.3s;
        border: 1px solid #eee;
    }

    .award-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    }

    .award-img-wrapper {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        border: 2px solid #E6F4FF;
        /* Light blue border */
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 20px auto;
        background: #fff;
        padding: 10px;
    }

    .award-img {
        max-width: 100%;
        max-height: 100%;
        object-fit: contain;
    }

    .award-card h5 {
        font-family: 'Nourd-Bold';
        font-size: 18px;
        margin-bottom: 15px;
        color: #333;
    }

    .award-card p {
        font-size: 13px;
        color: #666;
        line-height: 1.6;
    }



    .client-box-marquee img {
        max-width: 80%;
        max-height: 60px;
        object-fit: contain;
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

    .hero-overlay-img {
        position: relative;
        right: 5%;
        width: 113%;
        margin-top: 15px;
    }

    .btn-custom {
        border-radius: 30px;
        font-weight: 600;
        text-transform: uppercase;
        text-decoration: none;
        display: inline-block;
        transition: 0.3s;
        font-size: clamp(13px, 2vw, 13px);
        white-space: nowrap;
        padding: 6px 20px 1px 20px !important;
    }

    .certified {
        border-right: 3px solid #979797;

    }


    @media (max-width: 430px) {
        .hero-card-green {
            width: 93px;
        }

        .hero-card-pink {
            background: #FFC1DC;
            border-radius: 60px 4px 4px 4px;
            min-height: 99px;
        }

        .certified {
            border-right: none;
            margin-bottom: 25px !important;
        }

        .hero-overlay-img {
            width: 107% !important;
        }

        .btn-custom {

            padding: 6px 20px 1px 20px !important;
        }
    }

    .counter_box {
        min-height: 122px;
        margin-bottom: 12px;
    }

    a {
        text-decoration: none !important;
    }


    /* Marquee Fade Wrapper */
    .marquee-fader {
        position: relative;
        overflow: hidden;
        flex: 1;
        min-width: 0;
    }

    .marquee-fader::before,
    .marquee-fader::after {
        content: "";
        position: absolute;
        top: 0;
        width: 80px;
        height: 100%;
        z-index: 2;
        pointer-events: none;
    }

    .marquee-fader::before {
        left: 0;
    }

    .marquee-fader::after {
        right: 0;
    }

    /* White Fade (for white backgrounds) */
    .marquee-fader-white::before {
        background: linear-gradient(to right, #ffffff, transparent);
    }

    .marquee-fader-white::after {
        background: linear-gradient(to left, #ffffff, transparent);
    }

    /* Light Fade (for light gray backgrounds e.g. bg-light) */
    .marquee-fader-light::before {
        background: linear-gradient(to right, #f8f9fa, transparent);
    }

    .marquee-fader-light::after {
        background: linear-gradient(to left, #f8f9fa, transparent);
    }

    /* Blue Light Fade (for #eef8ff backgrounds) */
    .marquee-fader-blue-light::before {
        background: linear-gradient(to right, #eef8ff, transparent);
    }

    .marquee-fader-blue-light::after {
        background: linear-gradient(to left, #eef8ff, transparent);
    }

    /* Dark Blue Fade (for #002b49 backgrounds) */
    .marquee-fader-dark-blue::before {
        background: linear-gradient(to right, #bbe8ff, transparent);
    }

    .marquee-fader-dark-blue::after {
        background: linear-gradient(to left, #bbe8ff, transparent);
    }

    /* Services Section Redesign */
    .services-bg-gradient {
        background: linear-gradient(180deg, #E8E9EB 0%, #E8E9EB 100%);
        padding: 80px 0;
        position: relative;
        overflow: hidden;
    }

    .services-bg-gradient::before {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 100%;
        height: 100%;
        background: radial-gradient(circle, rgb(59 130 246 / 30%) 0%, rgb(59 130 246 / 0%) 60%);
        z-index: 0;
        pointer-events: none;
    }

    .services-bg-gradient .container {
        position: relative;
        z-index: 1;
    }

    /* .service-header-modern {
        margin-bottom: 50px;
    } */

    .service-title-block {
        border-left: 5px solid #0056b3;
        /* Darker blue */
        padding-left: 20px;
        margin-bottom: 15px;
    }

    .service-title-modern {
        font-weight: 700;
        font-size: 32px;
        color: #000;
        margin: 0;
    }

    .service-desc-modern {
        color: #666;
        max-width: 700px;
        line-height: 1.6;
    }

    .service-card-modern {
        background: transparent;
        box-shadow: none;
        border-radius: 20px;
        padding: 12px !important;
        position: relative;
        margin-bottom: -3px;
        transition: transform 0.3s ease;
        min-height: 149px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        margin-top: 45px;
        border: none;
        overflow: visible;
        z-index: 1;
    }

    /* The White Scoop Shape */
    .service-card-modern::before {
        content: '';
        position: absolute;
        inset: 0;
        background: linear-gradient(180deg, #ffffff 0%, #edf6ff 100%);
        border-radius: 20px;
        /* Scoop at top right, aligned with icon center at right: 50px */
        mask-image: radial-gradient(circle at calc(100% - 50px) 0, transparent 40px, black 41px);
        -webkit-mask-image: radial-gradient(circle at calc(100% - 50px) 0, transparent 40px, black 41px);
        z-index: -1;
        /* Soft shadow to match Figma */
        filter: drop-shadow(0 5px 20px rgba(0, 0, 0, 0.05));
        transition: filter 0.3s ease;
    }


    /* Watermark - Using Mask for Color Control */
    .service-card-modern::after {
        content: '';
        position: absolute;
        bottom: 0px;
        right: 0px;
        width: 85px;
        height: 89px;
        background-color: #dbeafe;
        mask-image: url("http://127.0.0.1/mysoftweb/home2media/vector.png");
        -webkit-mask-image: url("http://127.0.0.1/mysoftweb/home2media/vector.png");
        mask-size: contain;
        -webkit-mask-size: contain;
        mask-repeat: no-repeat;
        -webkit-mask-repeat: no-repeat;
        mask-position: bottom right;
        -webkit-mask-position: bottom right;
        opacity: 1;
        pointer-events: none;
        z-index: 0;
        border-radius: 0 0 20px 0;
    }

    .service-card-modern:hover {
        transform: translateY(-5px);
    }

    .service-card-modern:hover::before {
        filter: drop-shadow(0 15px 30px rgba(0, 0, 0, 0.08));
    }






    .ht-hero-section {
        height: 475px !important;
    }

    .service-icon-floating {
        position: absolute;
        top: -30px;
        /* Sit on the edge */
        right: 20px;
        /* Center at 20px + 30px = 50px from right */
        width: 60px;
        height: 60px;
        background: #fff;
        border-radius: 50%;
        /* Double ring effect using border */
        border: 6px solid #eef6fc;
        box-shadow: none;
        /* Removed heavy shadow, border provides the contrast */
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 2;
    }

    /* Gradient Border/Glow for Icon - Optional, disabling to match clean Figma look, relying on border */
    .service-icon-floating::before {
        display: none;
    }

    /* Strict Color Mapping */
    .icon-blue i {
        color: #1a73e8;
        font-size: 24px;
    }

    .icon-cyan i {
        color: #00bcd4;
        font-size: 24px;
    }

    .icon-orange i {
        color: #ff9800;
        font-size: 24px;
    }

    .icon-purple i {
        color: #9c27b0;
        font-size: 24px;
    }

    .service-card-title {
    display: flex;
    font-family: 'Poppins', sans-serif;
    font-weight: 600;
    font-size: 16px;
    margin-top: 29px;
    color: #000;
    line-height: 1.4;
    position: relative;
    z-index: 1;
    letter-spacing: -0.5px;
    justify-content: center;
    align-content: center;
    text-align: -webkit-center;
}

    .btn-service-view {
    background: #fff;
    color: #1a73e8;
    border: 1px solid #eef6fc;
    border-radius: 50px;
    padding: 8px 24px;
    font-size: 14px;
    font-weight: 600;
    display: inline-block;
    transition: all 0.3s;
    text-align: center;
    width: auto;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
    align-self: flex-start;
    position: relative;
    z-index: 1;
    text-decoration: none !important;
    place-self: anchor-center;
}

    .btn-service-view:hover {
        background: #1a73e8;
        color: #fff;
        box-shadow: 0 8px 20px rgba(26, 115, 232, 0.2);
        transform: translateY(-2px);
        border-color: #1a73e8;
    }

    .explore-services-btn {
        background: #4A90E2;
        color: #fff;
        padding: 12px 35px;
        border-radius: 30px;
        font-weight: 600;
        box-shadow: 0 4px 15px rgba(74, 144, 226, 0.3);
        border: none;
        transition: all 0.3s;
    }

    .explore-services-btn:hover {
        background: #357abd;
        transform: translateY(-2px);
        color: #fff;
    }

    .container-fluid {
        padding-right: 50px;
        padding-left: 50px;
        margin-right: auto;
        margin-left: auto;
    }

    .cert-logo2 {
        width: 100%;
        max-width: 71%;
        height: 103px;
        object-fit: contain;
        display: block;
        margin: 0 auto;
    }
</style>

<div class="ht-main-wrapper">

    <!-- Hero Section -->
    <!-- Hero Section -->
    <!-- Hero Section -->
    <section class="hero-section" style="padding-bottom: 0px; position: relative; overflow: visible;">
        <div class="container-fluid">
            <div id="hero-carousel" class="owl-carousel owl-theme">
                <div class="item">
                    <div class="container-fluid">
                        <div class="row" style="margin-right: 32px;">
                            <!-- Left Content -->
                            <div class="col-lg-7">
                                <h1 class="hero-title" style="margin-bottom: 25px;" data-aos="fade-right">
                                    Transforming Ideas. <span class="text-blue">Powering</span><br>
                                    <span style="">Scalable
                                        Solutions.</span>
                                </h1>
                                <p data-aos="fade-up" class="hero-desc"
                                    style="color: #555; font-size: 16px; line-height: 1.6; margin-bottom: 35px; text-align: justify;">
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
                            <div class="col-lg-5 mt-5 p-2">
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
                                        <!-- Bottom Image -->
                                        <div class="w-100 position-relative" data-aos="fade-up">
                                            <img src="<?= base_url('home2media/heroimage.png') ?>" alt="Team Overlay"
                                                class="hero-overlay-img">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="container-fluid">
                        <div class="row" style="margin-right: 32px;">
                            <!-- Left Content -->
                            <div class="col-lg-7">
                                <h1 class="hero-title" style="margin-bottom: 25px;" data-aos="fade-right">
                                    Flexible Teams. <span class="text-blue">On-Demand</span><br>
                                    <span style="">Expertise.</span>
                                </h1>
                                <p data-aos="fade-up" class="hero-desc"
                                    style="color: #555; font-size: 16px; line-height: 1.6; margin-bottom: 35px; text-align: justify;">
                                    Scale your technology team instantly with skilled professionals who integrate
                                    seamlessly
                                    into your workflows. Our IT staff augmentation model gives you immediate access to
                                    developers, engineers, and specialists who follow your processes, contribute from
                                    day one,
                                    and maintain full alignment with your architecture and product goals.
                                </p>
                                <div class="d-flex gap-3 btn-group-hero">
                                    <a data-aos="fade-right" href="<?= base_url('hire_talent') ?>"
                                        class="btn-custom btn-outline"
                                        style="padding: 12px 30px; border-radius: 30px; font-weight: 600;">Explore
                                        Roles</a>
                                    <a data-aos="fade-left" href="<?= base_url('contact_us') ?>"
                                        class="btn-custom btn-blue"
                                        style="padding: 6px 5px 1px 5px !important;border-radius: 30px;font-weight: 600;color: white;">Schedule
                                        a
                                        Consultation <i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                            <!-- Right Content (Grid Layout) -->
                            <div class="col-lg-5 mt-5 p-2">
                                <div class="row g-3">
                                    <!-- Left Column: Stacked Stats -->
                                    <div class="col-md-4 col-6 d-flex flex-column gap-2" style="padding-top: 40px;">
                                        <!-- Pink Card -->
                                        <div data-aos="fade-right" class="hero-stat-card hero-card-pink">
                                            <h2 class="hero-stat-title"><span class="counter" data-count="500">0</span>+
                                            </h2>
                                            <p class="hero-stat-subtitle">Offshore Clients Served</p>
                                        </div>
                                        <!-- Blue Card -->
                                        <div data-aos="fade-up" class="hero-stat-card hero-card-blue-light">
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
                                                <div data-aos="fade-down" class="hero-stat-card hero-card-blue-round">
                                                    <h2 class="hero-stat-title"><span class="counter"
                                                            data-count="2500">0</span>+
                                                    </h2>
                                                    <p class="hero-stat-subtitle bold">Projects Delivered Successfully
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div data-aos="fade-left" class="hero-stat-card hero-card-green">
                                                    <h2 class="hero-stat-title">Top 1%</h2>
                                                    <p class="hero-stat-subtitle bold">Global IT Talent On-Demand</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Bottom Image -->
                                        <div class="w-100 position-relative" data-aos="fade-up">
                                            <img src="<?= base_url('home2media/heroimage.png') ?>" alt="Team Overlay"
                                                class="hero-overlay-img">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="container-fluid">
                        <div class="row" style="margin-right: 32px;">
                            <!-- Left Content -->
                            <div class="col-lg-7">
                                <h1 class="hero-title" style="margin-bottom: 25px;" data-aos="fade-right">
                                    Delivering Large-Scale, <span class="text-blue">High-Impact</span><br>
                                    <span style="">Solutions</span>
                                </h1>
                                <p data-aos="fade-up" class="hero-desc"
                                    style="color: #555; font-size: 16px; line-height: 1.6; margin-bottom: 35px; text-align: justify;">
                                    Our systems handle complex, high-volume operations with nationwide coverage and
                                    global
                                    reach. We support millions of users, process critical transactions, and enable
                                    secure,
                                    reliable, and scalable platforms that organizations depend on every day.
                                </p>
                                <div class="d-flex gap-3 btn-group-hero">
                                    <a data-aos="fade-right" href="<?= base_url('products') ?>"
                                        class="btn-custom btn-outline"
                                        style="padding: 12px 30px; border-radius: 30px; font-weight: 600;">Explore
                                        Products</a>
                                    <a data-aos="fade-left" href="<?= base_url('client/government-sector') ?>"
                                        class="btn-custom btn-blue"
                                        style="padding: 6px 5px 1px 5px !important;border-radius: 30px;font-weight: 600;color: white;">See
                                        Our
                                        Clients <i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                            <!-- Right Content (Grid Layout) -->
                            <div class="col-lg-5 mt-5 p-2">
                                <div class="row g-3">
                                    <!-- Left Column: Stacked Stats -->
                                    <div class="col-md-4 col-6 d-flex flex-column gap-2" style="padding-top: 40px;">
                                        <!-- Pink Card -->
                                        <div data-aos="fade-right" class="hero-stat-card hero-card-pink">
                                            <h2 class="hero-stat-title"><span class="counter" data-count="15">0</span>+
                                            </h2>
                                            <p class="hero-stat-subtitle">Years Industry Experience</p>
                                        </div>
                                        <!-- Blue Card -->
                                        <div data-aos="fade-up" class="hero-stat-card hero-card-blue-light">
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
                                                <div data-aos="fade-down" class="hero-stat-card hero-card-blue-round">
                                                    <h2 class="hero-stat-title"><span class="counter"
                                                            data-count="12">0</span>M+
                                                    </h2>
                                                    <p class="hero-stat-subtitle bold">BDT Processed Daily Through
                                                        Platforms</p>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div data-aos="fade-left" class="hero-stat-card hero-card-green">
                                                    <h2 class="hero-stat-title"><span class="counter"
                                                            data-count="1.5">0</span>M+
                                                    </h2>
                                                    <p class="hero-stat-subtitle bold">Pages Scanned & Digitized</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Bottom Image -->
                                        <div class="w-100 position-relative" data-aos="fade-up">
                                            <img src="<?= base_url('home2media/heroimage.png') ?>" alt="Team Overlay"
                                                class="hero-overlay-img">
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
    <section class="hero-section" style="padding-bottom: 0px; position: relative; overflow: visible;">
        <div class="container-fluid">
            <!-- Bottom Info Strip -->
            <div class="row mt-5" style="position: relative; z-index: 10;">
                <div class="col-12">
                    <div class="bg-white" style="box-shadow: 0px 3px 3px 1px #dbdbdb;padding: 25px;border-radius: 6px;">
                        <!-- Stats Row -->
                        <div class="row text-center">
                            <div class="col-lg-3 col-6">
                                <div data-aos="fade-right"
                                    class="counter_box d-flex align-items-center justify-content-center gap-4"
                                    style="box-shadow: 0px 3px 3px 1px #dbdbdb;padding: 15px;border-radius: 6px;">
                                    <i class="fa fa-users text-primary" style="font-size: 28px;"></i>
                                    <div class="text-start">
                                        <h4 class="custom-stat-number"><span class="counter"
                                                data-count="500">500</span>+
                                        </h4>
                                        <small style="display:block; font-size: 12px; color: #666;">Offshore Clients
                                            Served</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-6">
                                <div data-aos="fade-up"
                                    class="counter_box d-flex align-items-center justify-content-center gap-4"
                                    style="box-shadow: 0px 3px 3px 1px #dbdbdb;padding: 15px;border-radius: 6px;">
                                    <i class="fa fa-line-chart text-danger" style="font-size: 28px;"></i>
                                    <div class="text-start">
                                        <h4 class="custom-stat-number"><span class="counter"
                                                data-count="100">100</span>+
                                        </h4>
                                        <small style="display:block; font-size: 12px; color: #666;">Tech Specializations
                                            Covered</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-6">
                                <div data-aos="fade-up"
                                    class="counter_box d-flex align-items-center justify-content-center gap-4"
                                    style="box-shadow: 0px 3px 3px 1px #dbdbdb;padding: 15px;border-radius: 6px;">
                                    <i class="fa fa-check-circle text-success" style="font-size: 28px;"></i>
                                    <div class="text-start">
                                        <h4 class="custom-stat-number"><span class="counter"
                                                data-count="2500">2500</span>+
                                        </h4>
                                        <small style="display:block; font-size: 12px; color: #666;">Projects
                                            Delivered</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-6">
                                <div data-aos="fade-left"
                                    class="counter_box d-flex align-items-center justify-content-center gap-4"
                                    style="box-shadow: 0px 3px 3px 1px #dbdbdb;padding: 15px;border-radius: 6px;">
                                    <i class="fa fa-globe text-warning" style="font-size: 28px;"></i>
                                    <div class="text-start">
                                        <h4 class="custom-stat-number">Top 1%</h4>
                                        <small style="display:block; font-size: 12px; color: #666;">Global IT Talent
                                            On-Demand</small>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Certified & Clients Row -->
                        <div class="row align-items-center" style="padding: 26px 0px 0px 0px;">
                            <div data-aos="fade-right"
                                class="col-lg-6 mb-3 mb-lg-0 d-flex align-items-center gap-3 certified">
                                <h5 class="custom-stat-number"
                                    style="color: #666; font-size: 18px; white-space: nowrap; margin-bottom: 0;">
                                    Certified
                                </h5>
                                <div class="marquee-fader marquee-fader-white">
                                    <div class="owl-carousel owl-theme" id="certified_marquee" style="width: 100%;">
                                        <div class="item"><img src="<?= base_url('home2media/Rectangle-1.png') ?>"
                                                class="cert-logo2" /></div>
                                        <div class="item"><img src="<?= base_url('home2media/Rectangle-2.png') ?>"
                                                class="cert-logo2" /></div>
                                        <div class="item"><img src="<?= base_url('home2media/Rectangle-3.png') ?>"
                                                class="cert-logo2" /></div>
                                        <div class="item"><img src="<?= base_url('home2media/Rectangle-4.png') ?>"
                                                class="cert-logo2" /></div>
                                    </div>
                                </div>
                            </div>
                            <div data-aos="fade-left" class="col-lg-6 d-flex align-items-center gap-3">
                                <h5
                                    style="font-weight: 700; color: #555; margin: 0; font-size: 18px; white-space: nowrap;">
                                    Clients</h5>
                                <div class="marquee-fader marquee-fader-white">
                                    <div class="owl-carousel owl-theme" id="clients_marquee" style="width: 100%;">
                                        <div class="item"><img src="<?= base_url('home2media/clients/Group-2.png') ?>"
                                                style="height: 35px; width: auto;"></div>
                                        <div class="item"><img src="<?= base_url('home2media/clients/Group-3.png') ?>"
                                                style="height: 35px; width: auto;"></div>
                                        <div class="item"><img src="<?= base_url('home2media/clients/Group-4.png') ?>"
                                                style="height: 35px; width: auto;"></div>
                                        <div class="item"><img src="<?= base_url('home2media/clients/Group-7.png') ?>"
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
                            <div class="service-card-modern" data-aos="fade-up" data-aos-delay="<?= $delay ?>">
                                <div class="service-icon-floating <?= $color_class ?>">
                                    <?php if (!empty($service->fa_icon)): ?>
                                        <i class="fa <?= $service->fa_icon ?>"></i>
                                    <?php else: ?>
                                        <i class="fa fa-cogs"></i>
                                    <?php endif; ?>
                                </div>
                                <h4 class="service-card-title"><?= $service->name ?></h4>
                                <a href="<?= base_url('service/' . $service->slug) ?>" class="btn-service-view">View Service</a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>

            <div class="text-center mt-5">
                <a href="<?= base_url('services') ?>" class="explore-services-btn">Explore More
                    Services <i class="fa fa-angle-right ms-2"></i></a>
            </div>
        </div>
    </section>

    <!-- Our Products -->
    <section class="ht-section" style="background-color: #E6F1FE!important;">
        <div class="container-fluid">
            <h2 class="section-title" data-aos="fade-down">Our <span class="text-blue">Products</span></h2>
            <div class="owl-carousel owl-theme" id="product-carousel" data-aos="fade-up">
                <?php if (!empty($products)): ?>
                    <?php foreach ($products as $product): ?>
                        <div class="item">
                            <div class="product-card">
                                <div>
                                    <!-- Placeholder for Logo - Using Icon for now as no explicit logo field found -->
                                    <div class="mb-2"><span class="product-logo-text"><i class="fa fa-cube"></i>
                                            <?= $product->name ?></span></div>
                                    <h5 class="product-tagline"><?= $product->hero_heading ?></h5>
                                    <div class="product-frame">
                                        <?php
                                        $img_src = base_url('home2media/HR Sheba_page-0001 1.png'); // Default fallback
                                        if (!empty($product->hero_image)) {
                                            $img_src = base_url('product_img/' . $product->hero_image);
                                        }
                                        ?>
                                        <img src="<?= $img_src ?>" class="product-img">
                                    </div>
                                </div>
                                <div class="product-actions">
                                    <a href="tel:+8801958633202" class="btn-product btn-call"><i class="fa fa-phone"></i> Call
                                        Now</a>
                                    <a href="<?= base_url('product/' . $product->slug) ?>" class="btn-product btn-demo"><i
                                            class="fa fa-search"></i> Try Free Demo</a>
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
    <section class="ht-section bg-light" style="padding-bottom: 80px;background-color: #E6F1FE!important;">
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
                        <h2>Crafting Long-Term <br><span class="text-blue">Relationships</span></h2>
                    </div>
                </div>
                <div class="col-md-6" data-aos="fade-left">
                    <div class="rel-desc">
                        <p>We see you as a partner, where your goals become our mission. Your success is the inspiration
                            of our works, and your growth is the real measure of our achievements.</p>
                    </div>
                </div>
            </div>

            <!-- Image Row - Converted to Marquee -->
            <div class="owl-carousel owl-theme" id="relationship-marquee" data-aos="fade-up">
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
                    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
                }

                .rel-img {
                    width: 100%;
                    height: 100%;
                    object-fit: cover;
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
        style="height: auto; padding-top: 100px; padding-bottom: 50px; background-color: #002b49;">
        <div class="container-fluid">
            <h2 class="section-title text-white center-text mb-40">Client Testimonials</h2>

            <div class="testimonials-carousel owl-carousel owl-theme">
                <!-- Card 1 -->
                <div class="testimonial-card hover-lift" data-aos="fade-up" data-aos-delay="0">
                    <div class="test-header">
                        <div class="test-avatar"><img src="<?= base_url('hire_talent_media/Group-1.png') ?>">
                        </div>
                        <div class="test-info">
                            <h5>A2i</h5>
                            <span>CEO<br>TheWebagency</span>
                        </div>
                    </div>
                    <div class="test-body">
                        <div class="project-tag">E-court Project</div>
                        <p>Ten the hastened steepest feelings pleasant few surprise property. An brother he do colonel
                            against.</p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="testimonial-card hover-lift" data-aos="fade-up" data-aos-delay="100">
                    <div class="test-header">
                        <div class="test-avatar"><img src="<?= base_url('hire_talent_media/Group-5.png') ?>">
                        </div>
                        <div class="test-info">
                            <h5>BD Scouts</h5>
                            <span>Manager<br>TheWebtech</span>
                        </div>
                    </div>
                    <div class="test-body">
                        <div class="project-tag">ERP Project</div>
                        <p>Can how elinor warmly mrs basket marked. Led raising expense yet demesne weather musical. Me
                            mr what.</p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="testimonial-card hover-lift" data-aos="fade-up" data-aos-delay="200">
                    <div class="test-header">
                        <div class="test-avatar"><img src="<?= base_url('hire_talent_media/Group-1.png') ?>">
                        </div>
                        <div class="test-info">
                            <h5>A2i</h5>
                            <span>Developer<br>12c Company</span>
                        </div>
                    </div>
                    <div class="test-body">
                        <div class="project-tag">DBID Project</div>
                        <p>park next busy ever. Elinor her his secure far twenty eat object. Any for saw size want man.
                            Which way you wrong.</p>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="testimonial-card">
                    <div class="test-header">
                        <div class="test-avatar"><img src="<?= base_url('hire_talent_media/Group-1.png') ?>">
                        </div>
                        <div class="test-info">
                            <h5>A2i</h5>
                            <span>Accountant<br>TheContruction</span>
                        </div>
                    </div>
                    <div class="test-body">
                        <div class="project-tag">ERP Project</div>
                        <p>Concerns greatest margaret him absolute entrance nay. Door neat week do find past he. Be no
                            surprise he honoured.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Awards & Recognitions -->
    <section class="ht-section awards-section"
        style="height: auto; padding-top: 80px; padding-bottom: 80px;background-color: #E6F1FE!important;">
        <div class="container-fluid">
            <h2 class="section-title center-text mb-20">Awards <span class="text-blue">& Recognitions</span></h2>
            <p class="center-text mb-50" style="max-width: 800px; margin: 0 auto 50px auto; color: #666;">
                Recognized nationally and globally, Mysoftheaven (BD) Ltd. has earned top awards from the Bangladesh
                government, international partners, and NGOs. Our work has been instrumental in advancing Bangladesh's
                digital transformation in the public sector.
            </p>

            <div class="awards-grid">
                <div class="award-card hover-lift" data-aos="fade-up">
                    <div class="award-icon-box">
                        <svg width="82" height="34" viewBox="0 0 82 34" fill="none" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink">
                            <rect width="82" height="34" fill="url(#pattern0_198_2597)" />
                            <defs>
                                <pattern id="pattern0_198_2597" patternContentUnits="objectBoundingBox" width="1"
                                    height="1">
                                    <use xlink:href="#image0_198_2597"
                                        transform="matrix(0.000662691 0 0 0.00159825 0 -0.000253382)" />
                                </pattern>
                                <image id="image0_198_2597" width="1509" height="626" preserveAspectRatio="none"
                                    xlink:href="data:image/png;base64,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" />
                            </defs>
                        </svg>
                        <!-- Placeholder -->
                    </div>
                    <h4>World Summit Information Society (WSIS) Prize</h4>
                    <p>About 4.2 crore Holding data, 11+ crore holdingowner data stored in the system. Citizen paying
                        their LD Tax through the system and every day a good amount of revenue automatically received by
                        Bangladesh bank.</p>
                </div>
                <div class="award-card hover-lift" data-aos="fade-up">
                    <div class="award-icon-box">
                        <svg width="83" height="43" viewBox="0 0 83 43" fill="none" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g clip-path="url(#clip0_205_2621)">
                                <mask id="mask0_205_2621" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0"
                                    y="0" width="83" height="43">
                                    <path d="M83 0H0V43H83V0Z" fill="white" />
                                </mask>
                                <g mask="url(#mask0_205_2621)">
                                    <rect width="83" height="43.0034" fill="url(#pattern0_205_2621)" />
                                </g>
                            </g>
                            <defs>
                                <pattern id="pattern0_205_2621" patternContentUnits="objectBoundingBox" width="1"
                                    height="1">
                                    <use xlink:href="#image0_205_2621" transform="scale(0.00333333 0.00617284)" />
                                </pattern>
                                <clipPath id="clip0_205_2621">
                                    <rect width="83" height="43" fill="white" />
                                </clipPath>
                                <image id="image0_205_2621" width="300" height="162" preserveAspectRatio="none"
                                    xlink:href="data:image/png;base64,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" />
                            </defs>
                        </svg>
                        <!-- Placeholder -->
                    </div>
                    <h4>Digital Bangladesh Award 2022 For LD Tax</h4>
                    <p>About 4.2 crore Holding data, 11+ crore holdingowner data stored in the system. Citizen paying
                        their LD Tax through the system and every day a good amount of revenue automatically received by
                        Bangladesh bank.</p>
                </div>
                <div class="award-card hover-lift" data-aos="fade-up">
                    <div class="award-icon-box">
                        <svg width="85" height="45" viewBox="0 0 85 45" fill="none" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink">
                            <mask id="mask0_205_2632" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0"
                                width="85" height="45">
                                <path d="M85 0H0V45H85V0Z" fill="white" />
                            </mask>
                            <g mask="url(#mask0_205_2632)">
                                <rect width="85" height="45.0036" fill="url(#pattern0_205_2632)" />
                            </g>
                            <defs>
                                <pattern id="pattern0_205_2632" patternContentUnits="objectBoundingBox" width="1"
                                    height="1">
                                    <use xlink:href="#image0_205_2632" transform="scale(0.00333333 0.00617284)" />
                                </pattern>
                                <image id="image0_205_2632" width="300" height="162" preserveAspectRatio="none"
                                    xlink:href="data:image/png;base64,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" />
                            </defs>
                        </svg>
                        <!-- Placeholder -->
                    </div>
                    <h4>Digital Bangladesh Award 2022 For Vumi Seba</h4>
                    <p>About 4.2 crore Holding data, 11+ crore holdingowner data stored in the system. Citizen paying
                        their LD Tax through the system and every day a good amount of revenue automatically received by
                        Bangladesh bank.</p>
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
                <div class="item"><img src="<?= base_url('home2media/Rectangle-1.png') ?>" class="cert-logo" /></div>
                <div class="item"><img src="<?= base_url('home2media/Rectangle-2.png') ?>" class="cert-logo" /></div>
                <div class="item"><img src="<?= base_url('home2media/Rectangle-3.png') ?>" class="cert-logo" /></div>
                <div class="item"><img src="<?= base_url('home2media/Rectangle-4.png') ?>" class="cert-logo" /></div>
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
                            <h2 class="billing-title">Easily Control your Billing and Invoicing.</h2>
                            <p class="billing-text">
                                Offending belonging promotion provision an be oh consulted ourselves it. Blessing
                                welcomed ladyship she met humoured sir breeding her.We see you as a partner, where your
                                goals become our mission.
                            </p>
                            <p class="billing-text">
                                Your success is the inspiration of our works, and your growth is the real measure of our
                                achievements.We see you as a partner, where your goals become our mission. Your success
                                is the inspiration of our works, and your growth is the real measure of our
                                achievements.
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
                top: 50%;
                left: 50%;
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
                        <h3 class="text-white mb-20 " style="font-weight: 700;">Ready to Transform Your Team?</h3>
                        <p class="text-white mb-40" style="opacity: 0.9; font-size: 14px; line-height: 1.6;">
                            Schedule a discovery call with our experts to explore how we can help you build
                            high-performing remote teams.
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
                                <strong>Visit Us Head Office</strong>
                                <span>P.R.Tower, 924/1, Level 8, Begum Rokeya Sarani, Shewrapara, Mirpur,
                                    Dhaka-1216.</span>
                            </div>
                        </div>

                        <div class="contact-item mb-40">
                            <div class="icon-circle"><i class="fa fa-map-marker"></i></div>
                            <div class="contact-text">
                                <strong>Visit Us Corporate Office</strong>
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
                        <h3 class="mb-20" style="font-weight: 700; color: #000;">Get in Touch</h3>
                        <p class="mb-30" style="font-size: 13px; color: #666; line-height: 1.6;">
                            About 4.2 crore Holding data, 11+ crore holdingowner data stored in the system. Citizen
                            paying their LD Tax through the system and every day a good amount of revenue automatically
                            received by Bangladesh bank.
                        </p>

                        <form action="#" method="post">
                            <div class="row">
                                <div class="col-md-6 col-sm-12 form-group">
                                    <label>Full Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control form-control-custom" placeholder="">
                                </div>
                                <div class="col-md-6 col-sm-12 form-group">
                                    <label>Email <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control form-control-custom" placeholder="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-12 form-group">
                                    <label>Phone Number <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control form-control-custom" placeholder="">
                                </div>
                                <div class="col-md-6 col-sm-12 form-group">
                                    <label>Company Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control form-control-custom" placeholder="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 col-sm-12 form-group">
                                    <label>Select Industry <span class="text-danger">*</span></label>
                                    <select class="form-control form-control-custom">
                                        <option>Select an Industry</option>
                                    </select>
                                </div>
                                <div class="col-md-4 col-sm-12 form-group">
                                    <label>Select Service <span class="text-danger">*</span></label>
                                    <select class="form-control form-control-custom">
                                        <option>Select a service</option>
                                    </select>
                                </div>
                                <div class="col-md-4 col-sm-12 form-group">
                                    <label>Select Budget Range <span class="text-danger">*</span></label>
                                    <select class="form-control form-control-custom">
                                        <option>Select a budget range</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Project details <span class="text-danger">*</span></label>
                                <textarea class="form-control form-control-custom" rows="4"
                                    placeholder="Tell us about your project or talent needs..."></textarea>
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
                1000: { items: 5 },
                1400: { items: 8 }
            }
        });

</script>