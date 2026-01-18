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
        padding: 25px 20px;
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
        background-color: #002b49;
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
        height: 60px;
        width: auto !important;
        filter: grayscale(100%);
        opacity: 0.7;
        transition: 0.3s;
    }

    .cert-logo:hover {
        filter: grayscale(0%);
        opacity: 1;
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
        padding: 60px 40px;
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
        background: linear-gradient(to right, #002b49, transparent);
    }

    .marquee-fader-dark-blue::after {
        background: linear-gradient(to left, #002b49, transparent);
    }

    /* Services Section Redesign */
    .services-bg-gradient {
        background: linear-gradient(180deg, #f3f5f8 0%, #e8ecf1 100%);
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
        background: radial-gradient(circle, rgba(59, 130, 246, 0.08) 0%, rgba(59, 130, 246, 0) 60%);
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
        font-family: 'Poppins', sans-serif;
        font-weight: 600;
        font-size: 16px;
        margin-top: 29px;
        color: #000;
        line-height: 1.4;
        position: relative;
        z-index: 1;
        letter-spacing: -0.5px;
    }

    .btn-service-view {
        background: #fff;
        color: #1a73e8;
        /* Blue text */
        border: 1px solid #eef6fc;
        /* Subtle border */
        border-radius: 50px;
        padding: 8px 24px;
        font-size: 14px;
        font-weight: 600;
        display: inline-block;
        transition: all 0.3s;
        text-align: center;
        width: auto;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
        /* Soft shadow */
        align-self: flex-start;
        position: relative;
        z-index: 1;
        text-decoration: none !important;
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
</style>

<div class="ht-main-wrapper">

    <!-- Hero Section -->
    <!-- Hero Section -->
    <!-- Hero Section -->
    <section class="hero-section" style="padding-bottom: 0px; position: relative; overflow: visible;">
        <div class="container">
            <div id="hero-carousel" class="owl-carousel owl-theme">
                <div class="item">
                    <div class="container">
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
                                    <a data-aos="fade-left" href="<?= base_url('service') ?>"
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
                    <div class="container">
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
                    <div class="container">
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
                                    <a data-aos="fade-left" href="<?= base_url('client_details') ?>"
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
        <div class="container">
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
                                        <div class="item"><img src="<?= base_url('home2media/clients/Group.png') ?>"
                                                style="height: 30px; width: 70px;" alt="ISO"></div>
                                        <div class="item"><img src="<?= base_url('home2media/clients/Group-1.png') ?>"
                                                style="height: 40px; width: auto;" alt="ISO"></div>
                                        <div class="item"><img src="<?= base_url('home2media/clients/Group-5.png') ?>"
                                                style="height: 40px; width: auto;" alt="ISO"></div>
                                        <div class="item"><img src="<?= base_url('home2media/clients/Group-6.png') ?>"
                                                style="height: 35px; width: auto;" alt="BACCO"></div>
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
        <div class="container">
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
                <!-- Row 1 -->
                <!-- Service 1: Custom Software Development -->
                <div class="col-lg-3 col-md-6">
                    <div class="service-card-modern" data-aos="fade-up" data-aos-delay="0">
                        <div class="service-icon-floating icon-blue">
                            <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
<mask id="mask0_729_1178" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="25" height="25">
<path d="M24.25 24.25V0.749998H0.75V24.25H24.25Z" fill="white" stroke="white" stroke-width="1.5"/>
</mask>
<g mask="url(#mask0_729_1178)">
<path d="M0.488281 7.58429H8.14917H22.7304" stroke="#006998" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M4.56611 5.50647C5.20557 5.50647 5.72734 4.98635 5.72734 4.34724C5.72734 3.70813 5.20557 3.18801 4.56611 3.18801C3.92808 3.18801 3.40625 3.70813 3.40625 4.34724C3.40625 4.98635 3.92808 5.50647 4.56611 5.50647Z" stroke="#006998" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M14.6462 3.18795H19.0144C19.6524 3.18795 20.1742 3.70948 20.1742 4.34718C20.1742 4.98492 19.6524 5.50641 19.0144 5.50641H14.6462C14.0082 5.50641 13.4863 4.98492 13.4863 4.34718C13.4863 3.70948 14.0082 3.18795 14.6462 3.18795Z" stroke="#006998" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M8.84834 5.50647C9.48779 5.50647 10.0096 4.98635 10.0096 4.34724C10.0096 3.70813 9.48779 3.18801 8.84834 3.18801C8.2103 3.18801 7.68848 3.70813 7.68848 4.34724C7.68848 4.98635 8.2103 5.50647 8.84834 5.50647Z" stroke="#006998" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M7.93032 11.34L6.95312 15.4293" stroke="#006998" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M10.1807 15.0599L11.5633 13.5077C11.6242 13.44 11.6242 13.3293 11.5633 13.2615L10.1807 11.7094" stroke="#006998" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M4.70278 15.0599L3.32012 13.5077C3.25918 13.44 3.25918 13.3293 3.32012 13.2615L4.70278 11.7094" stroke="#006998" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M19.7519 13.498C20.2861 13.617 20.7857 13.8273 21.2356 14.1095L21.6356 13.7111C21.8723 13.4731 22.2612 13.4731 22.4993 13.7111L23.129 14.3405C23.367 14.5785 23.367 14.9672 23.129 15.2038L22.7304 15.6035C23.0114 16.049 23.2189 16.5442 23.3394 17.0727H23.8999C24.2363 17.0727 24.5117 17.3479 24.5117 17.6827V18.575C24.5117 18.9097 24.2363 19.185 23.8999 19.185H23.3366C23.2162 19.7107 23.0086 20.2032 22.7304 20.6458L23.129 21.0442C23.367 21.2822 23.367 21.6709 23.129 21.9075L22.4993 22.5383C22.2612 22.7762 21.8723 22.7762 21.6356 22.5383L21.2356 22.1398C20.7913 22.4193 20.2972 22.6268 19.7685 22.7472V23.3143C19.7685 23.6505 19.493 23.9258 19.1581 23.9258H18.2654C17.9304 23.9258 17.655 23.6505 17.655 23.3143V22.7458C17.129 22.6268 16.6349 22.4179 16.1906 22.1398L15.792 22.5383C15.5539 22.7762 15.165 22.7762 14.9283 22.5383L14.2972 21.9075C14.0605 21.6709 14.0605 21.2822 14.2972 21.0442L14.6972 20.6458C14.4176 20.2032 14.21 19.7107 14.0896 19.185H13.5235C13.1872 19.185 12.9131 18.9097 12.9131 18.575V17.6827C12.9131 17.3479 13.1872 17.0727 13.5235 17.0727H14.0882C14.2072 16.5498 14.4121 16.0601 14.6875 15.6187L14.2861 15.2162C14.0481 14.9796 14.0481 14.5909 14.2861 14.353L14.9159 13.7235C15.154 13.4856 15.5429 13.4856 15.7795 13.7235L16.1768 14.1192C16.6197 13.8384 17.1124 13.6294 17.6384 13.5063V12.9434C17.6384 12.6072 17.9124 12.3319 18.2487 12.3319H19.1401C19.4764 12.3319 19.7519 12.6072 19.7519 12.9434V13.498Z" stroke="#006998" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M18.712 15.6132C20.1016 15.6132 21.2283 16.7393 21.2283 18.1295C21.2283 19.5184 20.1016 20.6445 18.712 20.6445C17.321 20.6445 16.1943 19.5184 16.1943 18.1295C16.1943 16.7393 17.321 15.6132 18.712 15.6132Z" stroke="#006998" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M5.19692 19.185H2.30693C1.30771 19.185 0.488281 18.207 0.488281 17.0132V3.24603C0.488281 2.05087 1.30625 1.0742 2.30693 1.0742H4.41353H20.9118C21.9125 1.0742 22.7304 2.05223 22.7304 3.24603V13.9421M13.5235 19.185H9.56094" stroke="#006998" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M7.38379 19.185H7.39423" stroke="#006998" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
</g>
</svg>

                        </div>
                        <h4 class="service-card-title">Custom Software Development</h4>
                        <a href="<?= base_url('service/software-development') ?>" class="btn-service-view">View
                            Service</a>
                    </div>
                </div>
                <!-- Service 2: Web Application Development -->
                <div class="col-lg-3 col-md-6">
                    <div class="service-card-modern" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-icon-floating icon-cyan">
                            <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_729_2001)">
<path d="M2.87928 9.15755C2.95061 9.22888 3.04426 9.26474 3.13791 9.26474C3.23157 9.26474 3.32522 9.22907 3.39674 9.15755C3.5396 9.01469 3.5396 8.78294 3.39674 8.64008L2.5083 7.75164L3.39674 6.86338C3.5396 6.72033 3.5396 6.48878 3.39674 6.34592C3.25388 6.20305 3.02214 6.20305 2.87928 6.34592L1.73219 7.493C1.66353 7.56166 1.625 7.65474 1.625 7.75164C1.625 7.84872 1.66353 7.9418 1.73219 8.01046L2.87928 9.15755Z" fill="#006998"/>
<path d="M6.51022 7.75164L5.62177 8.64009C5.47891 8.78295 5.47891 9.0147 5.62196 9.15756C5.6933 9.22889 5.78695 9.26475 5.8806 9.26475C5.97425 9.26475 6.0679 9.22889 6.13924 9.15756L7.28651 8.01028C7.42937 7.86742 7.42937 7.63568 7.28651 7.49301L6.13924 6.34573C5.99638 6.20287 5.76482 6.20287 5.62196 6.34573C5.47891 6.48878 5.47891 6.72034 5.62196 6.8632L6.51022 7.75164Z" fill="#006998"/>
<path d="M3.96361 9.2394C4.00748 9.25657 4.05287 9.26477 4.09731 9.26477C4.24342 9.26477 4.38132 9.17665 4.43797 9.03265L5.33919 6.73829C5.4132 6.55022 5.3205 6.33793 5.13243 6.26393C4.94456 6.19011 4.73208 6.28262 4.65827 6.47069L3.75685 8.76504C3.68303 8.95311 3.77554 9.16559 3.96361 9.2394Z" fill="#006998"/>
<path d="M2.19786 11.4113H4.66274C4.86473 11.4113 5.02857 11.2475 5.02857 11.0453C5.02857 10.8433 4.86473 10.6794 4.66274 10.6794H2.19786C1.99568 10.6794 1.83203 10.8433 1.83203 11.0453C1.83203 11.2475 1.99568 11.4113 2.19786 11.4113Z" fill="#006998"/>
<path d="M10.34 10.6794H6.00646C5.80447 10.6794 5.64062 10.8433 5.64062 11.0453C5.64062 11.2475 5.80447 11.4113 6.00646 11.4113H10.34C10.5421 11.4113 10.706 11.2475 10.706 11.0453C10.706 10.8433 10.5421 10.6794 10.34 10.6794Z" fill="#006998"/>
<path d="M2.19786 12.9545H3.24786C3.44985 12.9545 3.61369 12.7907 3.61369 12.5885C3.61369 12.3865 3.44985 12.2227 3.24786 12.2227H2.19786C1.99568 12.2227 1.83203 12.3865 1.83203 12.5885C1.83203 12.7907 1.99568 12.9545 2.19786 12.9545Z" fill="#006998"/>
<path d="M9.0006 12.2227C8.79842 12.2227 8.63477 12.3865 8.63477 12.5885C8.63477 12.7907 8.79842 12.9545 9.0006 12.9545H9.63994C9.84212 12.9545 10.006 12.7907 10.006 12.5885C10.006 12.3865 9.84212 12.2227 9.63994 12.2227H9.0006Z" fill="#006998"/>
<path d="M8.03833 12.5885C8.03833 12.3865 7.87449 12.2227 7.6725 12.2227H4.53185C4.32967 12.2227 4.16602 12.3865 4.16602 12.5885C4.16602 12.7907 4.32967 12.9545 4.53185 12.9545H7.6725C7.87449 12.9545 8.03833 12.7907 8.03833 12.5885Z" fill="#006998"/>
<path d="M10.4346 12.5885C10.4346 12.7907 10.5984 12.9545 10.8004 12.9545H11.998C12.2002 12.9545 12.3641 12.7907 12.3641 12.5885C12.3641 12.3865 12.2002 12.2227 11.998 12.2227H10.8004C10.5984 12.2227 10.4346 12.3865 10.4346 12.5885Z" fill="#006998"/>
<path d="M8.44219 8.04521H9.70544C9.90762 8.04521 10.0715 7.88137 10.0715 7.67919C10.0715 7.4772 9.90762 7.31335 9.70544 7.31335H8.44219C8.24001 7.31335 8.07617 7.4772 8.07617 7.67919C8.07617 7.88137 8.24001 8.04521 8.44219 8.04521Z" fill="#006998"/>
<path d="M11.1199 8.04521H18.8277C19.0299 8.04521 19.1936 7.88137 19.1936 7.67919C19.1936 7.4772 19.0299 7.31335 18.8277 7.31335H11.1199C10.9177 7.31335 10.7539 7.4772 10.7539 7.67919C10.7539 7.88137 10.9177 8.04521 11.1199 8.04521Z" fill="#006998"/>
<path d="M17.6571 8.92316H14.5348C14.3328 8.92316 14.1689 9.087 14.1689 9.28918C14.1689 9.49117 14.3328 9.65501 14.5348 9.65501H17.6571C17.8591 9.65501 18.0229 9.49117 18.0229 9.28918C18.0229 9.087 17.8591 8.92316 17.6571 8.92316Z" fill="#006998"/>
<path d="M13.3639 8.92316H12.2906C12.0885 8.92316 11.9248 9.087 11.9248 9.28918C11.9248 9.49117 12.0885 9.65501 12.2906 9.65501H13.3639C13.5661 9.65501 13.7297 9.49117 13.7297 9.28918C13.7297 9.087 13.5661 8.92316 13.3639 8.92316Z" fill="#006998"/>
<path d="M8.44219 9.65501H11.0715C11.2735 9.65501 11.4373 9.49117 11.4373 9.28918C11.4373 9.087 11.2735 8.92316 11.0715 8.92316H8.44219C8.24001 8.92316 8.07617 9.087 8.07617 9.28918C8.07617 9.49117 8.24001 9.65501 8.44219 9.65501Z" fill="#006998"/>
<path d="M7.67641 13.7529H5.21172C5.00954 13.7529 4.8457 13.9168 4.8457 14.1188C4.8457 14.3207 5.00954 14.4846 5.21172 14.4846H7.67641C7.8784 14.4846 8.04224 14.3207 8.04224 14.1188C8.04224 13.9168 7.8784 13.7529 7.67641 13.7529Z" fill="#006998"/>
<path d="M4.09149 13.7529H2.19786C1.99568 13.7529 1.83203 13.9168 1.83203 14.1188C1.83203 14.3207 1.99568 14.4846 2.19786 14.4846H4.09149C4.29367 14.4846 4.45732 14.3207 4.45732 14.1188C4.45732 13.9168 4.29367 13.7529 4.09149 13.7529Z" fill="#006998"/>
<path d="M12.1442 13.7529H8.92442C8.72224 13.7529 8.55859 13.9168 8.55859 14.1188C8.55859 14.3207 8.72224 14.4846 8.92442 14.4846H12.1442C12.3462 14.4846 12.5101 14.3207 12.5101 14.1188C12.5101 13.9168 12.3462 13.7529 12.1442 13.7529Z" fill="#006998"/>
<path d="M16.4986 11.8734H14.7379C14.5359 11.8734 14.3721 12.0373 14.3721 12.2392C14.3721 12.4414 14.5359 12.6053 14.7379 12.6053H16.4986C16.7008 12.6053 16.8644 12.4414 16.8644 12.2392C16.8644 12.0373 16.7008 11.8734 16.4986 11.8734Z" fill="#006998"/>
<path d="M19.5543 12.6053H22.0398C22.242 12.6053 22.4058 12.4414 22.4058 12.2392C22.4058 12.0373 22.242 11.8734 22.0398 11.8734H19.5543C19.3521 11.8734 19.1885 12.0373 19.1885 12.2392C19.1885 12.4414 19.3523 12.6053 19.5543 12.6053Z" fill="#006998"/>
<path d="M18.3115 11.8734H17.742C17.5398 11.8734 17.376 12.0373 17.376 12.2392C17.376 12.4414 17.5398 12.6053 17.742 12.6053H18.3115C18.5137 12.6053 18.6774 12.4414 18.6774 12.2392C18.6774 12.0373 18.5137 11.8734 18.3115 11.8734Z" fill="#006998"/>
<path d="M14.7379 16.5924H16.4986C16.7008 16.5924 16.8644 16.4288 16.8644 16.2266C16.8644 16.0246 16.7008 15.8608 16.4986 15.8608H14.7379C14.5359 15.8608 14.3721 16.0246 14.3721 16.2266C14.3721 16.4288 14.5359 16.5924 14.7379 16.5924Z" fill="#006998"/>
<path d="M19.5543 16.5924H22.0398C22.242 16.5924 22.4058 16.4288 22.4058 16.2266C22.4058 16.0246 22.242 15.8608 22.0398 15.8608H19.5543C19.3521 15.8608 19.1885 16.0246 19.1885 16.2266C19.1885 16.4288 19.3523 16.5924 19.5543 16.5924Z" fill="#006998"/>
<path d="M17.7418 16.5924H18.3113C18.5135 16.5924 18.6774 16.4288 18.6774 16.2266C18.6774 16.0246 18.5135 15.8608 18.3113 15.8608H17.7418C17.5396 15.8608 17.376 16.0246 17.376 16.2266C17.376 16.4288 17.5396 16.5924 17.7418 16.5924Z" fill="#006998"/>
<path d="M16.4986 19.8481H14.7379C14.5359 19.8481 14.3721 20.0119 14.3721 20.2139C14.3721 20.4159 14.5359 20.5797 14.7379 20.5797H16.4986C16.7008 20.5797 16.8644 20.4159 16.8644 20.2139C16.8644 20.0119 16.7008 19.8481 16.4986 19.8481Z" fill="#006998"/>
<path d="M22.0398 19.8481H19.5543C19.3521 19.8481 19.1885 20.0119 19.1885 20.2139C19.1885 20.4159 19.3521 20.5797 19.5543 20.5797H22.0398C22.242 20.5797 22.4058 20.4159 22.4058 20.2139C22.4058 20.0119 22.242 19.8481 22.0398 19.8481Z" fill="#006998"/>
<path d="M18.3115 19.8481H17.742C17.5398 19.8481 17.376 20.0119 17.376 20.2139C17.376 20.4159 17.5398 20.5797 17.742 20.5797H18.3115C18.5137 20.5797 18.6774 20.4159 18.6774 20.2139C18.6774 20.0119 18.5137 19.8481 18.3115 19.8481Z" fill="#006998"/>
<path d="M23.3899 0.0487671H1.61038C0.722507 0.0487671 0 0.771083 0 1.65915V19.3627C0 20.2505 0.722507 20.9728 1.61038 20.9728H2.9873C3.18929 20.9728 3.35313 20.8092 3.35313 20.607C3.35313 20.405 3.18929 20.2412 2.9873 20.2412H1.61038C1.12591 20.2412 0.731853 19.8471 0.731853 19.3627V17.9747H14.0618V18.6052H13.7717C13.3748 18.6052 13.052 18.928 13.052 19.3249V20.2412H5.21185C5.00986 20.2412 4.84602 20.405 4.84602 20.607C4.84602 20.8092 5.00986 20.9728 5.21185 20.9728H8.72978V22.2851H7.62504C6.88804 22.2851 6.28855 22.8848 6.28855 23.6216V24.412C6.28855 24.7483 6.56207 25.0218 6.89833 25.0218H18.0739C18.4102 25.0218 18.6837 24.7483 18.6837 24.412V23.6216C18.6837 22.8848 18.0842 22.2851 17.3472 22.2851H16.2425V21.8226H23.0065C23.4033 21.8226 23.726 21.4998 23.726 21.1029V20.9307C24.4391 20.7651 24.9723 20.1252 24.9723 19.3627L24.9999 1.65896C25.0001 0.771083 24.2778 0.0487671 23.3899 0.0487671ZM13.7839 17.1036V15.3498H22.9943V17.1036H13.7839ZM14.7935 14.6179V13.8481H21.9846V14.6179H14.7935ZM21.9846 17.8352V18.6052H14.7935V17.8352H21.9846ZM9.46144 20.9728H13.052V21.1031C13.052 21.4998 13.3748 21.8226 13.7717 21.8226H15.5108V22.2851H9.46144V20.9728ZM17.3474 23.017C17.6808 23.017 17.952 23.2882 17.952 23.6216V24.2901H7.02022V23.6216C7.02022 23.2882 7.29163 23.017 7.62504 23.017H17.3474ZM22.9943 21.0907H13.7839V19.3371H22.9943V21.0907ZM24.2406 19.3627C24.2406 19.717 24.0293 20.0224 23.7262 20.1611V19.3247C23.7262 18.928 23.4033 18.6052 23.0065 18.6052H22.7164V17.9747H24.2406V19.3627ZM24.2406 17.243H23.7142C23.7216 17.2016 23.7262 15.3376 23.7262 15.3376C23.7262 14.9406 23.4033 14.6179 23.0065 14.6179H22.7164V13.8481H23.0065C23.4033 13.8481 23.7262 13.5252 23.7262 13.1285V11.3502C23.7262 10.9535 23.4033 10.6306 23.0065 10.6306H20.9399C20.7377 10.6306 20.5741 10.7944 20.5741 10.9966C20.5741 11.1986 20.7377 11.3624 20.9399 11.3624H22.9943V13.1163H13.7839V11.3624H18.6633C18.8655 11.3624 19.0291 11.1986 19.0291 10.9966C19.0291 10.7944 18.8655 10.6306 18.6633 10.6306H13.7717C13.3748 10.6306 13.052 10.9535 13.052 11.3502V13.1285C13.052 13.5252 13.3748 13.8481 13.7717 13.8481H14.0618V14.6179H13.7717C13.3748 14.6179 13.052 14.9408 13.052 15.3376C13.052 15.3376 13.0566 17.2016 13.0641 17.243H0.731853V5.02582H24.2406V17.243ZM24.2406 4.29397H0.758746V1.65896C0.758746 1.17468 1.15281 0.78062 1.63727 0.78062H23.3621C23.8465 0.78062 24.2406 1.17468 24.2406 1.65915V4.29397Z" fill="#006998"/>
<path d="M2.69865 1.45319C2.10661 1.45319 1.625 1.93479 1.625 2.52684C1.625 3.11888 2.10661 3.60068 2.69865 3.60068C3.29069 3.60068 3.77249 3.11888 3.77249 2.52684C3.77249 1.93479 3.29069 1.45319 2.69865 1.45319ZM2.69865 2.86883C2.5102 2.86883 2.35666 2.71547 2.35666 2.52684C2.35666 2.33839 2.5102 2.18485 2.69865 2.18485C2.88729 2.18485 3.04064 2.33839 3.04064 2.52684C3.04064 2.71547 2.88729 2.86883 2.69865 2.86883Z" fill="#006998"/>
<path d="M5.43224 1.45319C4.8402 1.45319 4.3584 1.93479 4.3584 2.52684C4.3584 3.11888 4.8402 3.60068 5.43224 3.60068C6.02428 3.60068 6.50589 3.11888 6.50589 2.52684C6.50589 1.93479 6.02409 1.45319 5.43224 1.45319ZM5.43224 2.86883C5.2436 2.86883 5.09025 2.71547 5.09025 2.52684C5.09025 2.33839 5.2436 2.18485 5.43224 2.18485C5.62069 2.18485 5.77423 2.33839 5.77423 2.52684C5.77423 2.71547 5.62069 2.86883 5.43224 2.86883Z" fill="#006998"/>
<path d="M8.16545 1.45319C7.5734 1.45319 7.0918 1.93479 7.0918 2.52684C7.0918 3.11888 7.5734 3.60068 8.16545 3.60068C8.75749 3.60068 9.23929 3.11888 9.23929 2.52684C9.23929 1.93479 8.75749 1.45319 8.16545 1.45319ZM8.16545 2.86883C7.977 2.86883 7.82346 2.71547 7.82346 2.52684C7.82346 2.33839 7.977 2.18485 8.16545 2.18485C8.35409 2.18485 8.50744 2.33839 8.50744 2.52684C8.50744 2.71547 8.35409 2.86883 8.16545 2.86883Z" fill="#006998"/>
</g>
<defs>
<clipPath id="clip0_729_2001">
<rect width="25" height="25" fill="white"/>
</clipPath>
</defs>
</svg>

                        </div>
                        <h4 class="service-card-title">Web Application Development</h4>
                        <a href="<?= base_url('service/web-development') ?>" class="btn-service-view">View Service</a>
                    </div>
                </div>
                <!-- Service 3: Mobile Apps & Game Development -->
                <div class="col-lg-3 col-md-6">
                    <div class="service-card-modern" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-icon-floating icon-orange">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M17.5 4H14.5C14.224 4 14 3.776 14 3.5C14 3.224 14.224 3 14.5 3H17.5C17.776 3 18 3.224 18 3.5C18 3.776 17.776 4 17.5 4Z" fill="#086B9E"/>
<path d="M21.5 31H10.5C9.121 31 8 29.878 8 28.5V11.5C8 11.224 8.224 11 8.5 11C8.776 11 9 11.224 9 11.5V28.5C9 29.327 9.673 30 10.5 30H21.5C22.327 30 23 29.327 23 28.5V11.5C23 11.224 23.224 11 23.5 11C23.776 11 24 11.224 24 11.5V28.5C24 29.878 22.879 31 21.5 31Z" fill="#086B9E"/>
<path d="M23.5 15C23.224 15 23 14.776 23 14.5V3.5C23 2.673 22.327 2 21.5 2H10.5C9.673 2 9 2.673 9 3.5V14.5C9 14.776 8.776 15 8.5 15C8.224 15 8 14.776 8 14.5V3.5C8 2.122 9.121 1 10.5 1H21.5C22.879 1 24 2.122 24 3.5V14.5C24 14.776 23.776 15 23.5 15Z" fill="#086B9E"/>
<path d="M26.5 6.05C26.224 6.05 26 5.876 26 5.6V5.5C26 5.224 26.224 5 26.5 5C26.776 5 27 5.224 27 5.5C27 5.776 26.776 6.05 26.5 6.05Z" fill="#086B9E"/>
<path d="M26.5 8.05C26.224 8.05 26 7.876 26 7.6V7.5C26 7.224 26.224 7 26.5 7C26.776 7 27 7.224 27 7.5C27 7.776 26.776 8.05 26.5 8.05Z" fill="#086B9E"/>
<path d="M26.5 10.05C26.224 10.05 26 9.876 26 9.6V9.5C26 9.224 26.224 9 26.5 9C26.776 9 27 9.224 27 9.5C27 9.776 26.776 10.05 26.5 10.05Z" fill="#086B9E"/>
<path d="M5.5 22.95C5.224 22.95 5 22.776 5 22.5V22.4C5 22.124 5.224 21.9 5.5 21.9C5.776 21.9 6 22.124 6 22.4C6 22.676 5.776 22.95 5.5 22.95Z" fill="#086B9E"/>
<path d="M5.5 24.95C5.224 24.95 5 24.776 5 24.5V24.4C5 24.124 5.224 23.9 5.5 23.9C5.776 23.9 6 24.124 6 24.4C6 24.676 5.776 24.95 5.5 24.95Z" fill="#086B9E"/>
<path d="M5.5 26.95C5.224 26.95 5 26.776 5 26.5V26.4C5 26.124 5.224 25.9 5.5 25.9C5.776 25.9 6 26.124 6 26.4C6 26.676 5.776 26.95 5.5 26.95Z" fill="#086B9E"/>
<path d="M24.841 27C24.806 27 24.77 26.997 24.735 26.989C24.465 26.931 24.294 26.665 24.352 26.395L24.682 24.865C24.722 24.677 24.867 24.53 25.053 24.485C25.525 24.371 25.985 24.179 26.42 23.914C26.581 23.814 26.788 23.817 26.949 23.919L27.939 24.552L28.552 23.934L27.919 22.952C27.815 22.791 27.813 22.584 27.912 22.421C28.177 21.986 28.369 21.526 28.482 21.054C28.527 20.868 28.673 20.724 28.86 20.682L30 20.429V19.572L28.861 19.319C28.674 19.277 28.528 19.133 28.483 18.947C28.37 18.475 28.177 18.015 27.913 17.58C27.813 17.417 27.815 17.211 27.919 17.05L28.553 16.059L27.941 15.447L26.95 16.081C26.789 16.184 26.583 16.186 26.421 16.086C25.985 15.821 25.525 15.629 25.054 15.515C24.867 15.47 24.723 15.322 24.683 15.135L24.437 14H24C23.724 14 23.5 13.776 23.5 13.5C23.5 13.224 23.724 13 24 13H24.84C25.075 13 25.279 13.165 25.328 13.395L25.595 14.628C25.961 14.739 26.32 14.889 26.666 15.076L27.74 14.389C27.938 14.263 28.196 14.291 28.363 14.457L29.544 15.637C29.71 15.803 29.738 16.062 29.611 16.26L28.924 17.334C29.111 17.681 29.261 18.04 29.372 18.407L30.607 18.681C30.837 18.732 31 18.936 31 19.17V20.83C31 21.064 30.837 21.268 30.608 21.318L29.373 21.592C29.262 21.959 29.112 22.318 28.925 22.664L29.611 23.728C29.739 23.925 29.712 24.185 29.546 24.351L28.365 25.541C28.198 25.708 27.939 25.736 27.741 25.61L26.667 24.923C26.32 25.11 25.962 25.26 25.596 25.371L25.329 26.604C25.278 26.84 25.07 27 24.841 27Z" fill="#086B9E"/>
<path d="M25.3912 22.578C25.2312 22.578 25.0732 22.5 24.9762 22.357C24.8222 22.128 24.8832 21.817 25.1132 21.663C25.6682 21.289 26.0002 20.667 26.0002 20C26.0002 18.897 25.1032 18 24.0002 18C23.8642 18 23.7292 18.014 23.6002 18.04C23.3322 18.094 23.0652 17.922 23.0092 17.65C22.9542 17.379 23.1282 17.115 23.3992 17.06C23.5952 17.021 23.7972 17 24.0002 17C25.6542 17 27.0002 18.346 27.0002 20C27.0002 21.001 26.5032 21.933 25.6692 22.493C25.5842 22.55 25.4872 22.578 25.3912 22.578Z" fill="#086B9E"/>
<path d="M8 15C6.346 15 5 13.654 5 12C5 10.995 5.5 10.062 6.338 9.502C6.565 9.35 6.877 9.41 7.031 9.641C7.184 9.87 7.122 10.181 6.892 10.334C6.334 10.708 6 11.33 6 12C6 13.103 6.897 14 8 14C8.134 14 8.266 13.987 8.392 13.961C8.657 13.906 8.926 14.081 8.981 14.353C9.036 14.624 8.86 14.887 8.589 14.941C8.398 14.98 8.202 15 8 15Z" fill="#086B9E"/>
<path d="M8 19H7.16C6.925 19 6.721 18.835 6.672 18.605L6.405 17.372C6.039 17.261 5.68 17.111 5.334 16.924L4.26 17.611C4.061 17.737 3.804 17.71 3.637 17.543L2.456 16.363C2.29 16.197 2.262 15.938 2.389 15.74L3.076 14.666C2.889 14.319 2.739 13.96 2.628 13.593L1.393 13.319C1.163 13.268 1 13.064 1 12.83V11.17C1 10.936 1.163 10.732 1.392 10.682L2.627 10.408C2.738 10.041 2.888 9.682 3.075 9.336L2.39 8.271C2.262 8.074 2.289 7.814 2.455 7.648L3.636 6.458C3.801 6.29 4.061 6.262 4.26 6.389L5.334 7.076C5.681 6.889 6.039 6.739 6.405 6.628L6.672 5.395C6.73 5.124 7.001 4.952 7.266 5.012C7.536 5.07 7.707 5.336 7.649 5.606L7.319 7.136C7.279 7.324 7.134 7.471 6.948 7.516C6.476 7.63 6.016 7.822 5.58 8.087C5.418 8.187 5.212 8.184 5.051 8.082L4.061 7.449L3.447 8.067L4.08 9.049C4.185 9.21 4.187 9.417 4.087 9.58C3.822 10.015 3.63 10.475 3.517 10.947C3.472 11.133 3.326 11.277 3.139 11.319L2 11.571V12.428L3.139 12.681C3.326 12.723 3.472 12.867 3.517 13.053C3.63 13.525 3.823 13.985 4.087 14.42C4.187 14.583 4.185 14.789 4.081 14.95L3.447 15.94L4.059 16.552L5.05 15.918C5.211 15.816 5.418 15.814 5.579 15.913C6.015 16.178 6.475 16.37 6.946 16.484C7.133 16.529 7.277 16.677 7.317 16.864L7.563 18H8C8.276 18 8.5 18.224 8.5 18.5C8.5 18.776 8.276 19 8 19Z" fill="#086B9E"/>
<path d="M15.5001 18.5C15.4601 18.5 15.4201 18.495 15.3791 18.485C15.1101 18.418 14.9481 18.147 15.0151 17.879L16.0151 13.879C16.0811 13.61 16.3481 13.448 16.6211 13.515C16.8901 13.582 17.0521 13.853 16.9851 14.121L15.9851 18.121C15.9291 18.349 15.7251 18.5 15.5001 18.5Z" fill="#086B9E"/>
<path d="M18.5003 18.5C18.3723 18.5 18.2443 18.451 18.1463 18.354C17.9512 18.159 17.9512 17.842 18.1463 17.647L19.7932 16L18.1472 14.354C17.9522 14.159 17.9522 13.842 18.1472 13.647C18.3422 13.452 18.6593 13.452 18.8543 13.647L20.8543 15.647C21.0493 15.842 21.0493 16.159 20.8543 16.354L18.8543 18.354C18.7563 18.451 18.6283 18.5 18.5003 18.5Z" fill="#086B9E"/>
<path d="M13.5002 18.5002C13.3722 18.5002 13.2442 18.4512 13.1462 18.3542L11.1462 16.3542C10.9513 16.1592 10.9513 15.8422 11.1462 15.6472L13.1462 13.6472C13.3412 13.4522 13.6582 13.4522 13.8532 13.6472C14.0482 13.8422 14.0482 14.1592 13.8532 14.3542L12.2072 16.0002L13.8532 17.6462C14.0482 17.8412 14.0482 18.1582 13.8532 18.3532C13.7562 18.4512 13.6282 18.5002 13.5002 18.5002Z" fill="#086B9E"/>
</svg>

                        </div>
                        <h4 class="service-card-title">Mobile Apps & Game Development</h4>
                        <a href="<?= base_url('service/mobile-app-development') ?>" class="btn-service-view">View
                            Service</a>
                    </div>
                </div>
                <!-- Service 4: ICT Consultancy -->
                <div class="col-lg-3 col-md-6">
                    <div class="service-card-modern" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-icon-floating icon-purple">
                            <svg width="29" height="28" viewBox="0 0 29 28" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_729_2104)">
<path d="M14.4998 7.28667L17.9432 4.51613H22.4514V0H11.2256V4.51613H14.4998V7.28667ZM12.1611 3.6129V0.903226H21.5159V3.6129H17.6047L15.4353 5.35849V3.6129H12.1611Z" fill="#006998"/>
<path d="M13.0967 1.80646H14.0322V2.70968H13.0967V1.80646Z" fill="#006998"/>
<path d="M14.9678 1.80646H18.7097V2.70968H14.9678V1.80646Z" fill="#006998"/>
<path d="M19.6455 1.80646H20.581V2.70968H19.6455V1.80646Z" fill="#006998"/>
<path d="M23.8103 27.0968L23.4321 23.4408C24.9938 23.2025 26.1936 21.8968 26.1936 20.3226V14.4516H24.3226V13.8275C24.3226 13.2136 23.9731 12.6623 23.4113 12.3796C23.9699 11.8841 24.3226 11.1756 24.3226 10.3871V9.48385C24.3226 7.98942 23.0639 6.77417 21.5161 6.77417C19.9683 6.77417 18.7097 7.98942 18.7097 9.48385V10.3871C18.7097 11.5562 19.4819 12.5516 20.5587 12.9309L18.0483 15.3548H15.4252C15.3729 14.602 14.8373 13.9457 14.0786 13.7362L12.1613 13.2079V12.4012C12.7339 11.9049 13.0968 11.1873 13.0968 10.3871V9.48385C13.0968 7.98942 11.8381 6.77417 10.2903 6.77417C8.74253 6.77417 7.48387 7.98942 7.48387 9.48385V10.3871C7.48387 11.1869 7.84678 11.9044 8.41936 12.4012V13.2083L6.50202 13.7367C5.70312 13.9565 5.14516 14.671 5.14516 15.4737V17.1613H3.27419V19.8709H4.20968V27.0968H0V28H29V27.0968H23.8103ZM19.6452 19.8709V17.7999L22.9596 14.5998C23.1991 14.3685 23.3416 14.0578 23.3736 13.7336C23.3777 13.7651 23.3871 13.7949 23.3871 13.8275V19.4193C23.3871 20.1662 22.7574 20.7742 21.9839 20.7742H18.2419V19.8709H19.6452ZM18.2419 23.4838H20.6252L20.9993 27.0968H18.2419V23.4838ZM21.5652 23.4838H22.4962L22.8703 27.0968H21.9393L21.5652 23.4838ZM24.3226 19.4193V15.3548H25.2581V20.3226C25.2581 21.5676 24.2088 22.5806 22.9194 22.5806H18.2419V21.6774H21.9839C23.2734 21.6774 24.3226 20.6644 24.3226 19.4193ZM19.6452 10.3871V9.48385C19.6452 8.48756 20.4843 7.6774 21.5161 7.6774C22.548 7.6774 23.3871 8.48756 23.3871 9.48385V10.3871C23.3871 11.3834 22.548 12.1935 21.5161 12.1935C20.4843 12.1935 19.6452 11.3834 19.6452 10.3871ZM18.4356 16.258L21.5563 13.2449C21.6541 13.1506 21.7893 13.0968 21.9272 13.0968C22.2164 13.0968 22.4516 13.3239 22.4516 13.6031C22.4516 13.7362 22.3959 13.8668 22.2981 13.9612L18.9837 17.1613H14.0323C13.7742 17.1613 13.5645 16.9588 13.5645 16.7097C13.5645 16.4605 13.7742 16.258 14.0323 16.258H18.4356ZM8.41936 9.48385C8.41936 8.48756 9.25846 7.6774 10.2903 7.6774C11.3222 7.6774 12.1613 8.48756 12.1613 9.48385V10.3871C12.1613 11.3834 11.3222 12.1935 10.2903 12.1935C9.25846 12.1935 8.41936 11.3834 8.41936 10.3871V9.48385ZM10.2903 13.0968C10.6187 13.0968 10.9326 13.039 11.2258 12.9386V13.4238C11.1098 13.5967 10.7875 14 10.2903 14C9.79312 14 9.47086 13.5967 9.35484 13.4238V12.9386C9.64809 13.039 9.9619 13.0968 10.2903 13.0968ZM6.08065 15.4737C6.08065 15.0721 6.35997 14.7153 6.75896 14.6051L8.68589 14.0736C8.95721 14.415 9.48525 14.9032 10.2903 14.9032C11.0954 14.9032 11.6234 14.415 11.8948 14.0732L13.8217 14.6046C14.18 14.7036 14.4299 15.0044 14.4799 15.3544H14.0323C13.2587 15.3544 12.629 15.9623 12.629 16.7092C12.629 16.8682 12.6626 17.019 12.7151 17.1608H6.08065V15.4737ZM4.20968 18.0645H18.7097V18.9677H4.20968V18.0645ZM5.14516 21.6774H6.54839V20.7742H5.14516V19.8709H17.3065V20.7742H7.48387V21.6774H17.3065V27.0968H16.1924L15.2569 25.2903H7.19473L6.25925 27.0968H5.14516V21.6774ZM15.1463 27.0968H7.30527L7.77301 26.1935H14.6786L15.1463 27.0968Z" fill="#006998"/>
</g>
<defs>
<clipPath id="clip0_729_2104">
<rect width="29" height="28" fill="white"/>
</clipPath>
</defs>
</svg>

                        </div>
                        <h4 class="service-card-title">ICT Consultancy</h4>
                        <a href="<?= base_url('service/ict-consultancy') ?>" class="btn-service-view">View Service</a>
                    </div>
                </div>

                <!-- Row 2 -->
                <!-- Service 5: Cloud Solutions -->
                <div class="col-lg-3 col-md-6">
                    <div class="service-card-modern" data-aos="fade-up" data-aos-delay="0">
                        <div class="service-icon-floating icon-blue">
                            <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_717_1017)">
<mask id="mask0_717_1017" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="25" height="25">
<path d="M24.25 24.25V0.75H0.75V24.25H24.25Z" fill="white" stroke="white" stroke-width="1.5"/>
</mask>
<g mask="url(#mask0_717_1017)">
<path d="M0.488281 7.58423H8.14917H22.7304" stroke="#006998" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M4.56611 5.50647C5.20557 5.50647 5.72734 4.98635 5.72734 4.34724C5.72734 3.70813 5.20557 3.18801 4.56611 3.18801C3.92808 3.18801 3.40625 3.70813 3.40625 4.34724C3.40625 4.98635 3.92808 5.50647 4.56611 5.50647Z" stroke="#006998" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M14.6462 3.18801H19.0144C19.6524 3.18801 20.1742 3.70955 20.1742 4.34724C20.1742 4.98499 19.6524 5.50647 19.0144 5.50647H14.6462C14.0082 5.50647 13.4863 4.98499 13.4863 4.34724C13.4863 3.70955 14.0082 3.18801 14.6462 3.18801Z" stroke="#006998" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M8.84834 5.50647C9.48779 5.50647 10.0096 4.98635 10.0096 4.34724C10.0096 3.70813 9.48779 3.18801 8.84834 3.18801C8.2103 3.18801 7.68848 3.70813 7.68848 4.34724C7.68848 4.98635 8.2103 5.50647 8.84834 5.50647Z" stroke="#006998" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M7.93032 11.34L6.95312 15.4292" stroke="#006998" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M10.1807 15.0599L11.5633 13.5078C11.6242 13.44 11.6242 13.3294 11.5633 13.2616L10.1807 11.7094" stroke="#006998" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M4.70278 15.0599L3.32012 13.5078C3.25918 13.44 3.25918 13.3294 3.32012 13.2616L4.70278 11.7094" stroke="#006998" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M19.7519 13.498C20.2861 13.617 20.7857 13.8273 21.2356 14.1095L21.6356 13.7111C21.8723 13.4731 22.2612 13.4731 22.4993 13.7111L23.129 14.3405C23.367 14.5785 23.367 14.9672 23.129 15.2038L22.7304 15.6035C23.0114 16.049 23.2189 16.5442 23.3394 17.0727H23.8999C24.2363 17.0727 24.5117 17.348 24.5117 17.6827V18.575C24.5117 18.9097 24.2363 19.185 23.8999 19.185H23.3366C23.2162 19.7107 23.0086 20.2032 22.7304 20.6458L23.129 21.0442C23.367 21.2822 23.367 21.6709 23.129 21.9075L22.4993 22.5383C22.2612 22.7762 21.8723 22.7762 21.6356 22.5383L21.2356 22.1398C20.7913 22.4193 20.2972 22.6268 19.7685 22.7472V23.3143C19.7685 23.6505 19.493 23.9258 19.1581 23.9258H18.2654C17.9304 23.9258 17.655 23.6505 17.655 23.3143V22.7458C17.129 22.6268 16.6349 22.4179 16.1906 22.1398L15.792 22.5383C15.5539 22.7762 15.165 22.7762 14.9283 22.5383L14.2972 21.9075C14.0605 21.6709 14.0605 21.2822 14.2972 21.0442L14.6972 20.6458C14.4176 20.2032 14.21 19.7107 14.0896 19.185H13.5235C13.1872 19.185 12.9131 18.9097 12.9131 18.575V17.6827C12.9131 17.348 13.1872 17.0727 13.5235 17.0727H14.0882C14.2072 16.5498 14.4121 16.0601 14.6875 15.6188L14.2861 15.2162C14.0481 14.9796 14.0481 14.5909 14.2861 14.353L14.9159 13.7235C15.154 13.4856 15.5429 13.4856 15.7795 13.7235L16.1768 14.1192C16.6197 13.8384 17.1124 13.6294 17.6384 13.5063V12.9434C17.6384 12.6072 17.9124 12.3319 18.2487 12.3319H19.1401C19.4764 12.3319 19.7519 12.6072 19.7519 12.9434V13.498Z" stroke="#006998" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M18.712 15.6132C20.1016 15.6132 21.2283 16.7392 21.2283 18.1295C21.2283 19.5184 20.1016 20.6444 18.712 20.6444C17.321 20.6444 16.1943 19.5184 16.1943 18.1295C16.1943 16.7392 17.321 15.6132 18.712 15.6132Z" stroke="#006998" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M5.19692 19.1851H2.30693C1.30771 19.1851 0.488281 18.2071 0.488281 17.0132V3.24609C0.488281 2.05093 1.30625 1.07427 2.30693 1.07427H4.41353H20.9118C21.9125 1.07427 22.7304 2.0523 22.7304 3.24609V13.9422M13.5235 19.1851H9.56094" stroke="#006998" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M7.38379 19.1851H7.39423" stroke="#006998" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
</g>
</g>
<defs>
<clipPath id="clip0_717_1017">
<rect width="25" height="25" fill="white"/>
</clipPath>
</defs>
</svg>

                        </div>
                        <h4 class="service-card-title">Cloud Solutions</h4>
                        <a href="<?= base_url('service/cloud-solutions') ?>" class="btn-service-view">View Service</a>
                    </div>
                </div>
                <!-- Service 6: Cyber Security -->
                <div class="col-lg-3 col-md-6">
                    <div class="service-card-modern" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-icon-floating icon-blue">
                            <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_717_1017)">
<mask id="mask0_717_1017" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="25" height="25">
<path d="M24.25 24.25V0.75H0.75V24.25H24.25Z" fill="white" stroke="white" stroke-width="1.5"/>
</mask>
<g mask="url(#mask0_717_1017)">
<path d="M0.488281 7.58423H8.14917H22.7304" stroke="#006998" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M4.56611 5.50647C5.20557 5.50647 5.72734 4.98635 5.72734 4.34724C5.72734 3.70813 5.20557 3.18801 4.56611 3.18801C3.92808 3.18801 3.40625 3.70813 3.40625 4.34724C3.40625 4.98635 3.92808 5.50647 4.56611 5.50647Z" stroke="#006998" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M14.6462 3.18801H19.0144C19.6524 3.18801 20.1742 3.70955 20.1742 4.34724C20.1742 4.98499 19.6524 5.50647 19.0144 5.50647H14.6462C14.0082 5.50647 13.4863 4.98499 13.4863 4.34724C13.4863 3.70955 14.0082 3.18801 14.6462 3.18801Z" stroke="#006998" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M8.84834 5.50647C9.48779 5.50647 10.0096 4.98635 10.0096 4.34724C10.0096 3.70813 9.48779 3.18801 8.84834 3.18801C8.2103 3.18801 7.68848 3.70813 7.68848 4.34724C7.68848 4.98635 8.2103 5.50647 8.84834 5.50647Z" stroke="#006998" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M7.93032 11.34L6.95312 15.4292" stroke="#006998" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M10.1807 15.0599L11.5633 13.5078C11.6242 13.44 11.6242 13.3294 11.5633 13.2616L10.1807 11.7094" stroke="#006998" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M4.70278 15.0599L3.32012 13.5078C3.25918 13.44 3.25918 13.3294 3.32012 13.2616L4.70278 11.7094" stroke="#006998" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M19.7519 13.498C20.2861 13.617 20.7857 13.8273 21.2356 14.1095L21.6356 13.7111C21.8723 13.4731 22.2612 13.4731 22.4993 13.7111L23.129 14.3405C23.367 14.5785 23.367 14.9672 23.129 15.2038L22.7304 15.6035C23.0114 16.049 23.2189 16.5442 23.3394 17.0727H23.8999C24.2363 17.0727 24.5117 17.348 24.5117 17.6827V18.575C24.5117 18.9097 24.2363 19.185 23.8999 19.185H23.3366C23.2162 19.7107 23.0086 20.2032 22.7304 20.6458L23.129 21.0442C23.367 21.2822 23.367 21.6709 23.129 21.9075L22.4993 22.5383C22.2612 22.7762 21.8723 22.7762 21.6356 22.5383L21.2356 22.1398C20.7913 22.4193 20.2972 22.6268 19.7685 22.7472V23.3143C19.7685 23.6505 19.493 23.9258 19.1581 23.9258H18.2654C17.9304 23.9258 17.655 23.6505 17.655 23.3143V22.7458C17.129 22.6268 16.6349 22.4179 16.1906 22.1398L15.792 22.5383C15.5539 22.7762 15.165 22.7762 14.9283 22.5383L14.2972 21.9075C14.0605 21.6709 14.0605 21.2822 14.2972 21.0442L14.6972 20.6458C14.4176 20.2032 14.21 19.7107 14.0896 19.185H13.5235C13.1872 19.185 12.9131 18.9097 12.9131 18.575V17.6827C12.9131 17.348 13.1872 17.0727 13.5235 17.0727H14.0882C14.2072 16.5498 14.4121 16.0601 14.6875 15.6188L14.2861 15.2162C14.0481 14.9796 14.0481 14.5909 14.2861 14.353L14.9159 13.7235C15.154 13.4856 15.5429 13.4856 15.7795 13.7235L16.1768 14.1192C16.6197 13.8384 17.1124 13.6294 17.6384 13.5063V12.9434C17.6384 12.6072 17.9124 12.3319 18.2487 12.3319H19.1401C19.4764 12.3319 19.7519 12.6072 19.7519 12.9434V13.498Z" stroke="#006998" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M18.712 15.6132C20.1016 15.6132 21.2283 16.7392 21.2283 18.1295C21.2283 19.5184 20.1016 20.6444 18.712 20.6444C17.321 20.6444 16.1943 19.5184 16.1943 18.1295C16.1943 16.7392 17.321 15.6132 18.712 15.6132Z" stroke="#006998" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M5.19692 19.1851H2.30693C1.30771 19.1851 0.488281 18.2071 0.488281 17.0132V3.24609C0.488281 2.05093 1.30625 1.07427 2.30693 1.07427H4.41353H20.9118C21.9125 1.07427 22.7304 2.0523 22.7304 3.24609V13.9422M13.5235 19.1851H9.56094" stroke="#006998" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M7.38379 19.1851H7.39423" stroke="#006998" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
</g>
</g>
<defs>
<clipPath id="clip0_717_1017">
<rect width="25" height="25" fill="white"/>
</clipPath>
</defs>
</svg>

                        </div>
                        <h4 class="service-card-title">Cyber Security</h4>
                        <a href="<?= base_url('service/cyber-security') ?>" class="btn-service-view">View Service</a>
                    </div>
                </div>
                <!-- Service 7: UI/UX Design -->
                <div class="col-lg-3 col-md-6">
                    <div class="service-card-modern" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-icon-floating icon-orange">
                            <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_717_1017)">
<mask id="mask0_717_1017" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="25" height="25">
<path d="M24.25 24.25V0.75H0.75V24.25H24.25Z" fill="white" stroke="white" stroke-width="1.5"/>
</mask>
<g mask="url(#mask0_717_1017)">
<path d="M0.488281 7.58423H8.14917H22.7304" stroke="#006998" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M4.56611 5.50647C5.20557 5.50647 5.72734 4.98635 5.72734 4.34724C5.72734 3.70813 5.20557 3.18801 4.56611 3.18801C3.92808 3.18801 3.40625 3.70813 3.40625 4.34724C3.40625 4.98635 3.92808 5.50647 4.56611 5.50647Z" stroke="#006998" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M14.6462 3.18801H19.0144C19.6524 3.18801 20.1742 3.70955 20.1742 4.34724C20.1742 4.98499 19.6524 5.50647 19.0144 5.50647H14.6462C14.0082 5.50647 13.4863 4.98499 13.4863 4.34724C13.4863 3.70955 14.0082 3.18801 14.6462 3.18801Z" stroke="#006998" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M8.84834 5.50647C9.48779 5.50647 10.0096 4.98635 10.0096 4.34724C10.0096 3.70813 9.48779 3.18801 8.84834 3.18801C8.2103 3.18801 7.68848 3.70813 7.68848 4.34724C7.68848 4.98635 8.2103 5.50647 8.84834 5.50647Z" stroke="#006998" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M7.93032 11.34L6.95312 15.4292" stroke="#006998" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M10.1807 15.0599L11.5633 13.5078C11.6242 13.44 11.6242 13.3294 11.5633 13.2616L10.1807 11.7094" stroke="#006998" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M4.70278 15.0599L3.32012 13.5078C3.25918 13.44 3.25918 13.3294 3.32012 13.2616L4.70278 11.7094" stroke="#006998" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M19.7519 13.498C20.2861 13.617 20.7857 13.8273 21.2356 14.1095L21.6356 13.7111C21.8723 13.4731 22.2612 13.4731 22.4993 13.7111L23.129 14.3405C23.367 14.5785 23.367 14.9672 23.129 15.2038L22.7304 15.6035C23.0114 16.049 23.2189 16.5442 23.3394 17.0727H23.8999C24.2363 17.0727 24.5117 17.348 24.5117 17.6827V18.575C24.5117 18.9097 24.2363 19.185 23.8999 19.185H23.3366C23.2162 19.7107 23.0086 20.2032 22.7304 20.6458L23.129 21.0442C23.367 21.2822 23.367 21.6709 23.129 21.9075L22.4993 22.5383C22.2612 22.7762 21.8723 22.7762 21.6356 22.5383L21.2356 22.1398C20.7913 22.4193 20.2972 22.6268 19.7685 22.7472V23.3143C19.7685 23.6505 19.493 23.9258 19.1581 23.9258H18.2654C17.9304 23.9258 17.655 23.6505 17.655 23.3143V22.7458C17.129 22.6268 16.6349 22.4179 16.1906 22.1398L15.792 22.5383C15.5539 22.7762 15.165 22.7762 14.9283 22.5383L14.2972 21.9075C14.0605 21.6709 14.0605 21.2822 14.2972 21.0442L14.6972 20.6458C14.4176 20.2032 14.21 19.7107 14.0896 19.185H13.5235C13.1872 19.185 12.9131 18.9097 12.9131 18.575V17.6827C12.9131 17.348 13.1872 17.0727 13.5235 17.0727H14.0882C14.2072 16.5498 14.4121 16.0601 14.6875 15.6188L14.2861 15.2162C14.0481 14.9796 14.0481 14.5909 14.2861 14.353L14.9159 13.7235C15.154 13.4856 15.5429 13.4856 15.7795 13.7235L16.1768 14.1192C16.6197 13.8384 17.1124 13.6294 17.6384 13.5063V12.9434C17.6384 12.6072 17.9124 12.3319 18.2487 12.3319H19.1401C19.4764 12.3319 19.7519 12.6072 19.7519 12.9434V13.498Z" stroke="#006998" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M18.712 15.6132C20.1016 15.6132 21.2283 16.7392 21.2283 18.1295C21.2283 19.5184 20.1016 20.6444 18.712 20.6444C17.321 20.6444 16.1943 19.5184 16.1943 18.1295C16.1943 16.7392 17.321 15.6132 18.712 15.6132Z" stroke="#006998" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M5.19692 19.1851H2.30693C1.30771 19.1851 0.488281 18.2071 0.488281 17.0132V3.24609C0.488281 2.05093 1.30625 1.07427 2.30693 1.07427H4.41353H20.9118C21.9125 1.07427 22.7304 2.0523 22.7304 3.24609V13.9422M13.5235 19.1851H9.56094" stroke="#006998" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M7.38379 19.1851H7.39423" stroke="#006998" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
</g>
</g>
<defs>
<clipPath id="clip0_717_1017">
<rect width="25" height="25" fill="white"/>
</clipPath>
</defs>
</svg>

                        </div>
                        <h4 class="service-card-title">UI/UX Design</h4>
                        <a href="<?= base_url('service/ui-ux-design') ?>" class="btn-service-view">View Service</a>
                    </div>
                </div>
                <!-- Service 8: E-Commerce Solution -->
                <div class="col-lg-3 col-md-6">
                    <div class="service-card-modern" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-icon-floating icon-purple">
                            <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_717_1017)">
<mask id="mask0_717_1017" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="25" height="25">
<path d="M24.25 24.25V0.75H0.75V24.25H24.25Z" fill="white" stroke="white" stroke-width="1.5"/>
</mask>
<g mask="url(#mask0_717_1017)">
<path d="M0.488281 7.58423H8.14917H22.7304" stroke="#006998" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M4.56611 5.50647C5.20557 5.50647 5.72734 4.98635 5.72734 4.34724C5.72734 3.70813 5.20557 3.18801 4.56611 3.18801C3.92808 3.18801 3.40625 3.70813 3.40625 4.34724C3.40625 4.98635 3.92808 5.50647 4.56611 5.50647Z" stroke="#006998" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M14.6462 3.18801H19.0144C19.6524 3.18801 20.1742 3.70955 20.1742 4.34724C20.1742 4.98499 19.6524 5.50647 19.0144 5.50647H14.6462C14.0082 5.50647 13.4863 4.98499 13.4863 4.34724C13.4863 3.70955 14.0082 3.18801 14.6462 3.18801Z" stroke="#006998" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M8.84834 5.50647C9.48779 5.50647 10.0096 4.98635 10.0096 4.34724C10.0096 3.70813 9.48779 3.18801 8.84834 3.18801C8.2103 3.18801 7.68848 3.70813 7.68848 4.34724C7.68848 4.98635 8.2103 5.50647 8.84834 5.50647Z" stroke="#006998" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M7.93032 11.34L6.95312 15.4292" stroke="#006998" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M10.1807 15.0599L11.5633 13.5078C11.6242 13.44 11.6242 13.3294 11.5633 13.2616L10.1807 11.7094" stroke="#006998" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M4.70278 15.0599L3.32012 13.5078C3.25918 13.44 3.25918 13.3294 3.32012 13.2616L4.70278 11.7094" stroke="#006998" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M19.7519 13.498C20.2861 13.617 20.7857 13.8273 21.2356 14.1095L21.6356 13.7111C21.8723 13.4731 22.2612 13.4731 22.4993 13.7111L23.129 14.3405C23.367 14.5785 23.367 14.9672 23.129 15.2038L22.7304 15.6035C23.0114 16.049 23.2189 16.5442 23.3394 17.0727H23.8999C24.2363 17.0727 24.5117 17.348 24.5117 17.6827V18.575C24.5117 18.9097 24.2363 19.185 23.8999 19.185H23.3366C23.2162 19.7107 23.0086 20.2032 22.7304 20.6458L23.129 21.0442C23.367 21.2822 23.367 21.6709 23.129 21.9075L22.4993 22.5383C22.2612 22.7762 21.8723 22.7762 21.6356 22.5383L21.2356 22.1398C20.7913 22.4193 20.2972 22.6268 19.7685 22.7472V23.3143C19.7685 23.6505 19.493 23.9258 19.1581 23.9258H18.2654C17.9304 23.9258 17.655 23.6505 17.655 23.3143V22.7458C17.129 22.6268 16.6349 22.4179 16.1906 22.1398L15.792 22.5383C15.5539 22.7762 15.165 22.7762 14.9283 22.5383L14.2972 21.9075C14.0605 21.6709 14.0605 21.2822 14.2972 21.0442L14.6972 20.6458C14.4176 20.2032 14.21 19.7107 14.0896 19.185H13.5235C13.1872 19.185 12.9131 18.9097 12.9131 18.575V17.6827C12.9131 17.348 13.1872 17.0727 13.5235 17.0727H14.0882C14.2072 16.5498 14.4121 16.0601 14.6875 15.6188L14.2861 15.2162C14.0481 14.9796 14.0481 14.5909 14.2861 14.353L14.9159 13.7235C15.154 13.4856 15.5429 13.4856 15.7795 13.7235L16.1768 14.1192C16.6197 13.8384 17.1124 13.6294 17.6384 13.5063V12.9434C17.6384 12.6072 17.9124 12.3319 18.2487 12.3319H19.1401C19.4764 12.3319 19.7519 12.6072 19.7519 12.9434V13.498Z" stroke="#006998" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M18.712 15.6132C20.1016 15.6132 21.2283 16.7392 21.2283 18.1295C21.2283 19.5184 20.1016 20.6444 18.712 20.6444C17.321 20.6444 16.1943 19.5184 16.1943 18.1295C16.1943 16.7392 17.321 15.6132 18.712 15.6132Z" stroke="#006998" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M5.19692 19.1851H2.30693C1.30771 19.1851 0.488281 18.2071 0.488281 17.0132V3.24609C0.488281 2.05093 1.30625 1.07427 2.30693 1.07427H4.41353H20.9118C21.9125 1.07427 22.7304 2.0523 22.7304 3.24609V13.9422M13.5235 19.1851H9.56094" stroke="#006998" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M7.38379 19.1851H7.39423" stroke="#006998" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
</g>
</g>
<defs>
<clipPath id="clip0_717_1017">
<rect width="25" height="25" fill="white"/>
</clipPath>
</defs>
</svg>

                        </div>
                        <h4 class="service-card-title">E-Commerce Solution</h4>
                        <a href="<?= base_url('service/ecommerce') ?>" class="btn-service-view">View Service</a>
                    </div>
                </div>
            </div>

            <div class="text-center mt-5">
                <a href="<?= base_url('service') ?>" class="explore-services-btn">Explore More Services <i
                        class="fa fa-angle-right ms-2"></i></a>
            </div>
        </div>
    </section>

    <!-- Our Products -->
    <section class="ht-section" style="background: #ebf5fa;">
        <div class="container">
            <h2 class="section-title" data-aos="fade-down">Our <span class="text-blue">Products</span></h2>
            <div class="owl-carousel owl-theme" id="product-carousel" data-aos="fade-up">
                <div class="item">
                    <div class="product-card">
                        <div>
                            <!-- Placeholder for Logo -->
                            <div class="mb-2"><span class="product-logo-text"><i class="fa fa-user-circle"></i>
                                    HRSheba</span></div>
                            <h5 class="product-tagline">Best HR Software In Bangladesh</h5>
                            <div class="product-frame">
                                <img src="<?= base_url('home2media/HR Sheba_page-0001 1.png') ?>" class="product-img">
                            </div>
                        </div>
                        <div class="product-actions">
                            <a href="#" class="btn-product btn-call"><i class="fa fa-phone"></i> Call Now</a>
                            <a href="<?= base_url('products/hr-sheba') ?>" class="btn-product btn-demo"><i
                                    class="fa fa-search"></i> Try Free Demo</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="product-card">
                        <div>
                            <div class="mb-2"><span class="product-logo-text" style="color:#004a80;"><i
                                        class="fa fa-shield"></i> ShebaERP</span></div>
                            <h5 class="product-tagline">Best ERP Software In Bangladesh</h5>
                            <div class="product-frame">
                                <img src="<?= base_url('home2media/HR Sheba_page-0001 1 (1).png') ?>"
                                    class="product-img">
                            </div>
                        </div>
                        <div class="product-actions">
                            <a href="#" class="btn-product btn-call"><i class="fa fa-phone"></i> Call Now</a>
                            <a href="<?= base_url('products/school-management') ?>" class="btn-product btn-demo"><i
                                    class="fa fa-search"></i> Try Free Demo</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="product-card">
                        <div>
                            <div class="mb-2"><span class="product-logo-text" style="color:#f47920;"><i
                                        class="fa fa-paper-plane"></i> RemitSeba</span></div>
                            <h5 class="product-tagline">Best Remittance Management Software</h5>
                            <div class="product-frame">
                                <img src="<?= base_url('home2media/HR Sheba_page-0001 1 (2).png') ?>"
                                    class="product-img">
                            </div>
                        </div>
                        <div class="product-actions">
                            <a href="#" class="btn-product btn-call"><i class="fa fa-phone"></i> Call Now</a>
                            <a href="<?= base_url('products/inventory') ?>" class="btn-product btn-demo"><i
                                    class="fa fa-search"></i> Try Free Demo</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Industries We Serve -->
    <section class="ht-section">
        <div class="container">
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
        <div class="container">
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
        <div class="container">
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

            <!-- Image Row -->
            <div class="rel-grid-scroll" data-aos="fade-up">
                <div class="rel-img-item">
                    <img src="<?= base_url('home2media/Rectangle 24042.png') ?>" class="rel-img">
                </div>
                <div class="rel-img-item">
                    <img src="<?= base_url('home2media/Rectangle 24043.png') ?>" class="rel-img">
                </div>
                <div class="rel-img-item">
                    <img src="<?= base_url('home2media/Rectangle 24045.png') ?>" class="rel-img">
                </div>
                <div class="rel-img-item">
                    <img src="<?= base_url('home2media/Rectangle 24047.png') ?>" class="rel-img">
                </div>
                <div class="rel-img-item">
                    <img src="<?= base_url('home2media/Rectangle 24044.png') ?>" class="rel-img">
                    <!-- Reusing existing image as placeholder if needed or existing ones -->
                </div>
                <div class="rel-img-item">
                    <img src="<?= base_url('home2media/Rectangle 24046.png') ?>" class="rel-img">
                </div>
            </div>
        </div>
    </section>

    <!-- Clients -->
    <section class="ht-section clients-section"
        style="height: auto; min-height: 500px; padding: 60px 0; overflow: hidden;">
        <div class="container">
            <div class="row items-center">
                <!-- Left Column: Text -->
                <div class="col-md-4 col-sm-12" data-aos="fade-right">
                    <h2 class="section-title mb-20 text-white" style="text-align: left; color: #fff;">Clients</h2>
                    <p class="text-white mb-30" style="line-height: 1.8; opacity: 0.9; color: #fff;">
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
        <div class="container">
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
    <section class="ht-section awards-section" style="height: auto; padding-top: 80px; padding-bottom: 80px;">
        <div class="container">
            <h2 class="section-title center-text mb-20">Awards <span class="text-blue">& Recognitions</span></h2>
            <p class="center-text mb-50" style="max-width: 800px; margin: 0 auto 50px auto; color: #666;">
                Recognized nationally and globally, Mysoftheaven (BD) Ltd. has earned top awards from the Bangladesh
                government, international partners, and NGOs. Our work has been instrumental in advancing Bangladesh's
                digital transformation in the public sector.
            </p>

            <div class="awards-grid">
                <div class="award-card hover-lift" data-aos="fade-up">
                    <div class="award-icon-box">
                        <img src="<?= base_url('hire_talent_media/Group-1.png') ?>" alt="Award Logo">
                        <!-- Placeholder -->
                    </div>
                    <h4>World Summit Information Society (WSIS) Prize</h4>
                    <p>About 4.2 crore Holding data, 11+ crore holdingowner data stored in the system. Citizen paying
                        their LD Tax through the system and every day a good amount of revenue automatically received by
                        Bangladesh bank.</p>
                </div>
                <div class="award-card hover-lift" data-aos="fade-up">
                    <div class="award-icon-box">
                        <img src="<?= base_url('hire_talent_media/Group-2.png') ?>" alt="Award Logo">
                        <!-- Placeholder -->
                    </div>
                    <h4>Digital Bangladesh Award 2022 For LD Tax</h4>
                    <p>About 4.2 crore Holding data, 11+ crore holdingowner data stored in the system. Citizen paying
                        their LD Tax through the system and every day a good amount of revenue automatically received by
                        Bangladesh bank.</p>
                </div>
                <div class="award-card hover-lift" data-aos="fade-up">
                    <div class="award-icon-box">
                        <img src="<?= base_url('hire_talent_media/Group-2.png') ?>" alt="Award Logo">
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
    <section class="ht-section certifications-section"
        style="height: auto;padding-top: 50px;background-color: #eef8ff;">
        <div class="container">
            <h2 class="section-title center-text mb-40">Membership <span class="text-blue">& Certification</span></h2>

            <div class="certifications-carousel owl-carousel owl-theme" style="margin-bottom: 30px;" data-aos="fade-up">
                <img src="<?= base_url('hire_talent_media/Group.png') ?>" class="cert-logo">
                <img src="<?= base_url('hire_talent_media/Group-3.png') ?>" class="cert-logo">
                <img src="<?= base_url('hire_talent_media/Group-4.png') ?>" class="cert-logo">
                <img src="<?= base_url('hire_talent_media/Rectangle.png') ?>" class="cert-logo" style="height:50px;">
                <img src="<?= base_url('hire_talent_media/XMLID_117_.png') ?>" class="cert-logo">
            </div>
        </div>
    </section>

    <!-- Get in Touch Section (Synced) -->
    <section class="ht-section contact-section-wrapper"
        style="height: auto; padding: 60px 0 100px 0; background: #fff;">
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
        // If                         we wa                   nt to re          -e        nable carousel for something else:
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
</script>