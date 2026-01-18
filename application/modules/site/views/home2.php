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
                            <a href="tel:+8801958633202" class="btn-product btn-call"><i class="fa fa-phone"></i> Call
                                Now</a>
                            <a href="<?= base_url('product/hr-sheba') ?>" class="btn-product btn-demo"><i
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
                            <a href="tel:+8801958633202" class="btn-product btn-call"><i class="fa fa-phone"></i> Call
                                Now</a>
                            <a href="<?= base_url('product/school-management') ?>" class="btn-product btn-demo"><i
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
                            <a href="tel:+8801958633202" class="btn-product btn-call"><i class="fa fa-phone"></i> Call
                                Now</a>
                            <a href="<?= base_url('product/inventory') ?>" class="btn-product btn-demo"><i
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