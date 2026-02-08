<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@300..700&family=Nabla&display=swap"
    rel="stylesheet">


<!-- Devicon for logos -->
<!-- Devicon for logos -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css">
<!-- Owl Carousel CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
<!-- AOS Animation CSS -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<style>
    p {
        color: #575757 !important;
        font-family: Arial;
        font-weight: 400 !important;
        font-style: Regular;
        font-size: 18px !important;
        line-height: 182% !important;
        letter-spacing: 0%;


    }

    /* Custom Font */
    @font-face {
        font-family: 'Nourd-Bold';
        src: url('<?= base_url("hire_talent_media/nourd_bold.ttf") ?>') format('truetype');
        font-weight: bold;
        font-style: normal;
    }

    /* @font-face {
  font-family: 'Nabla';
  src: url('<?= base_url("hire_talent_media/nabla.ttf") ?>') format('truetype');
  font-weight: bold;
  font-style: normal;
} */

    @font-palette-values blue {
        font-family: 'Nabla';
        override-colors:
            0 #007aff,
            1 #007aff,
            2 #007aff,
            3 #007aff,
            4 #007aff,
            5 #007aff,
            6 #007aff;
    }

    .hero_bobble_number {
        font-family: 'Nabla';
        font-palette: blue;
    }

    .hero_bobble_number {
        background: #0177BC;
        -webkit-background-clip: text !important;
        background-clip: text !important;
        color: transparent !important;
        font-size: 3.5rem !important;
        line-height: 44px;
    }



    .hero-title {
        margin-bottom: 20px;
        font-family: 'Nourd-Bold', 'Poppins', sans-serif;
        font-weight: 700;
        font-size: 41px;
        line-height: 120%;
        min-height: 100px;
    }

    /* Global Styles */
    .ht-main-wrapper {
        font-family: 'Poppins', sans-serif;
        color: #333;
        overflow-x: hidden;
        /* Prevent horizontal scroll */
        width: 100%;
        position: relative;
    }

    .ht-section {
        height: auto;
        opacity: 1;
        padding-top: 43px;
    }

    .bg-light {
        background-color: #f9fbfd;
    }

    .text-orange {
        color: #fe7a36;
    }

    .text-blue {
        color: #0088cc;
    }

    .text-green {
        color: #28a745;
    }

    .text-purple {
        color: #6f42c1;
    }

    .center-text {
        text-align: center;
    }

    .items-center {
        display: flex;
        align-items: center;
        flex-wrap: wrap;
    }

    .mb-20 {
        margin-bottom: 20px;
    }

    .mb-30 {
        margin-bottom: 30px;
    }

    .mb-50 {
        margin-bottom: 50px;
    }

    .mt-30 {
        margin-top: 30px;
    }

    .p-30 {
        padding: 30px;
    }


    .rounded {
        border-radius: 10px;
    }

    /* Hero */
    .hero-desc {
        color: #575757;
        margin: 52px 22px 59px 1px;
        font-family: Arial;
        font-weight: 400;
        font-size: 18px;
        line-height: 182%;
    }

    .btn-custom {
        padding: 5px 22px;
        border-radius: 32px;
        font-weight: 600;
        text-transform: uppercase;
        transition: 0.3s;
        display: inline-block;
        border: 1px solid;
        text-decoration: none !important;
    }

    .btn-custom:hover {
        background: #0088cc;
        color: #fff;
    }

    .btn-orange {
        background: #fe7a36;
        color: #fff;
        margin-right: 15px;
        border: 1px solid #fe7a36;
    }

    .btn-orange:hover {
        background: #e5601d;
        color: #fff;
    }

    .btn-blue {
        background: #0088cc;
        color: #fff;
        border: 1px solid #0088cc;
    }

    .btn-blue:hover {
        background: #006699;
        color: #fff;
    }

    .btn-outline-blue {
        border: 2px solid #0088cc;
        color: #0088cc;
        background: transparent;
    }

    .btn-outline-blue:hover {
        background: #0088cc;
        color: #fff;
    }

    /* Hero Bubbles */
    .bubble-container {
        position: relative;
        height: 350px;
    }

    .bubble {
        position: absolute;
        background: #fff;
        border-radius: 50%;
        box-shadow: 0px 0px 5px 1px rgb(113 113 113);
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
        height: 90%;
        width: 90%;
    }

    .bubble:hover {
        background: #0177BC;
    }

    .bubble:hover .hero_bobble_number {
        background: #ffffff;
        -webkit-background-clip: text !important;
        background-clip: text !important;
        color: transparent !important;
        font-size: 4rem !important;
        line-height: 44px;
    }

    .bubble:hover .hero_bobble_text {
        color: #ffffff !important;

    }



    rgba(255, 255, 255, 1) .bubble strong {
        font-size: 18px;
        color: #333;
        line-height: 1;
    }

    .bubble-1 {
        top: 8%;
        right: 42%;
        animation: float 6s infinite;
        position: absolute;
        height: 170px;
        width: 170px;
        background: #fff;
        border-radius: 50%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
        border: 2px dashed #0172b9;
    }

    .bubble-2 {
        top: 1px;
        right: -14%;
        animation: float 6s infinite 1s;
        position: absolute;
        height: 170px;
        width: 170px;
        background: #fff;
        border-radius: 50%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
        border: 2px dashed #0172b9;
    }

    .bubble-3 {
        top: 64%;
        right: 52%;
        animation: float 6s infinite;
        position: absolute;
        height: 170px;
        width: 170px;
        background: #fff;
        border-radius: 50%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
        border: 2px dashed #0172b9;
    }

    .bubble-4 {
        top: 54%;
        right: -2%;
        animation: float 6s infinite 1s;
        position: absolute;
        height: 170px;
        width: 170px;
        background: #fff;
        border-radius: 50%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
        border: 2px dashed #0172b9;
    }

    @keyframes float {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-15px);
        }
    }

    /* Photo Grid */
    .photo-grid {
        display: flex;
        gap: 15px;
    }

    .grid-col {
        display: flex;
        flex-direction: column;
        gap: 15px;
        flex: 1;
    }

    .grid-img {
        width: 100%;
        height: auto;
        display: block;
        object-fit: cover;
    }

    .stat-box {
        padding: 20px;
        text-align: center;
        border-radius: 10px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 100%;
    }

    .pink-box {
        background: #fce4ec;
        color: #d81b60;
    }

    .green-box {
        background: #e8f5e9;
        color: #2e7d32;
        font-size: 30px;
    }

    /* Process */
    .section-title {
        font-size: 32px;
        margin-bottom: 40px;
        font-family: Nourd-Bold;
        font-style: Regular;
        font-size: 40px;
        line-height: 38px;
        letter-spacing: 0%;

    }

    .process-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 20px;
        position: relative;
        padding-top: 80px;
        /* Increased space for higher arcs */
    }

    .process-card {
        padding: 30px 20px;
        border-radius: 15px;
        text-align: left;
        position: relative;
        z-index: 1;
    }

    .flexible_teams_section {
        margin-right: 13px;
        margin-left: 98px;
    }

    /* Dashed Connecting Lines (Desktop) */
    /* Dashed Connecting Lines (Grid aligned) */
    @media (min-width: 992px) {
        .process-card:not(:last-child)::after {
            content: '';
            position: absolute;
            top: -80px;
            /* Higher peak */
            left: 50%;
            width: calc(100% + 20px);
            height: 90px;
            /* Taller height for rounder arc */
            border: 3px dashed #B3E5FC;
            border-bottom: none;
            border-left: 3px dashed #B3E5FC;
            border-right: 3px dashed #B3E5FC;
            border-radius: 50% 50% 0 0 / 100% 100% 0 0;
            /* Elliptical radius for steeper arch */
            z-index: -1;
            pointer-events: none;
        }

        /* Triangle Arrowhead at destination */
        .process-card:not(:last-child)::before {
            content: '';
            position: absolute;
            top: 2px;
            /* Landing on top of next card */
            left: calc(150% + 20px);
            /* Center of next card */
            width: 0;
            height: 0;
            border-left: 8px solid transparent;
            border-right: 8px solid transparent;
            border-top: 12px solid #B3E5FC;
            /* Points Down */
            transform: translateX(-50%);
            /* Center the arrow */
            z-index: 0;
        }

        /* Adjust arc shapes */
        /* To simulate the "jump" correctly, we need the arc to look like it lands. 
           With border-left/right/top and radius, it creates a semi-circle.
           This works perfectly for center-to-center. */

        /* Specific Colors */
        .process-card:nth-child(1)::after {
            border-color: #bbdefb;
        }

        .process-card:nth-child(2)::after {
            border-color: #e1bee7;
        }

        .process-card:nth-child(3)::after {
            border-color: #b2dfdb;
        }

        .process-card:nth-child(1)::before {
            border-top-color: #bbdefb;
        }

        .process-card:nth-child(2)::before {
            border-top-color: #e1bee7;
        }

        .process-card:nth-child(3)::before {
            border-top-color: #b2dfdb;
        }

        /* Stacking Order: Ensure previous cards constitute layers ABOVE next cards 
           so the arrow (child of previous) shows on top of next. */
        .process-card:nth-child(1) {
            z-index: 4;
        }

        .process-card:nth-child(2) {
            z-index: 3;
        }

        .process-card:nth-child(3) {
            z-index: 2;
        }

        .process-card:nth-child(4) {
            z-index: 1;
        }
    }

    .card-blue-light {
        background: #B3E5FC;
    }

    .card-purple-light {
        background: #F8BBD0;
    }

    .card-green-light {
        background: #B2DFDB;
    }

    .card-orange-light {
        background: #FFCCBC;
    }

    .process-card {
        transition: all 0.3s ease;
        border: 2px solid transparent;
        /* Prepare for border transition */
    }

    .p-icon {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        color: #fff;
        text-align: center;
        line-height: 40px;
        font-weight: bold;
        margin-bottom: 15px;
        transition: transform 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        /* Bouncy transition */
    }

    /* Enhanced Hover Effects */
    .process-card:hover .p-icon {
        transform: scale(1.3) rotate(-10deg);
    }

    /* Specific Card Hover Colors */
    .card-blue-light:hover {
        border-color: #2196f3;
        background: #fff;
    }

    .card-blue-light:hover h4 {
        color: #2196f3 !important;
    }

    .card-purple-light:hover {
        background: #fff;
    }

    .card-purple-light:hover h4 {
        color: #9c27b0 !important;
    }

    .card-green-light:hover {
        border-color: #4caf50;
        background: #fff;
    }

    .card-green-light:hover h4 {
        color: #4caf50 !important;
    }

    .card-orange-light:hover {
        border-color: #ff9800;
        background: #fff;
    }

    .card-orange-light:hover h4 {
        color: #ff9800 !important;
    }

    .bg-blue {
        background: #039BE5;
    }

    .bg-purple {
        background: #E91E63;
    }

    .bg-green {
        background: #00897B;
    }

    .bg-orange {
        background: #FF7043;
    }

    .process-card h4 {
        font-size: 18px;
        font-weight: 700;
        margin-bottom: 10px;
        position: relative;
        display: inline-block;
        color: #000 !important;
        transition: color 0.3s ease;
    }

    .process-card h4::after {
        content: "";
        display: block;
        width: 100%;
        height: 3px;
        background-color: #000;
        margin-top: 5px;
        border-radius: 2px;
        transition: width 0.3s ease, background-color 0.3s ease;
    }

    .card-blue-light h4::after {
        background-color: #2196f3;
        width: 63%;
        padding: 3px;
    }

    .card-purple-light h4::after {
        background-color: #9c27b0;
        width: 63%;
        padding: 3px;
    }

    .card-green-light h4::after {
        background-color: #4caf50;
        width: 63%;
        padding: 3px;
    }

    .card-orange-light h4::after {
        background-color: #ff9800;
        width: 63%;
        padding: 3px;
    }

    .process-card p {
        font-size: 13px;
        line-height: 1.5;
        color: #555;
    }

    /* Engagement */
    .engagement-list {
        list-style: none;
        padding: 0;
    }

    .engagement-list li {
        display: flex;
        margin-bottom: 20px;
        font-size: 15px;
        line-height: 1.5;
    }

    .engagement-list li i {
        font-size: 20px;
        width: 30px;
        margin-top: 3px;
    }

    .blob-wrapper {
        position: relative;
        text-align: center;
    }

    .blob-img {
        width: 80%;
        border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    }

    /* Roles We Provide Redesign */
    .roles-section-bg {
        background-color: #f4f4f4;
        padding: 60px 0;
    }

    .roles-subtitle {
        max-width: 800px;
        margin: 0 auto 50px auto;
        font-size: 14px;
        color: #666;
        line-height: 1.6;
    }

    .roles-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 20px;
    }

    .role-card {
        background: #fff;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
        transition: transform 0.3s ease;
        text-align: left;
    }

    .role-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
    }

    .role-img-wrapper {
        width: 100%;
        height: 180px;
        overflow: hidden;
    }

    .role-img-new {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .role-card:hover .role-img-new {
        transform: scale(1.1);
    }

    .role-content {
        padding: 20px;
    }

    .role-card h4 {
        font-size: 16px;
        font-weight: 700;
        margin-bottom: 10px;
        color: #000 !important;
        border-bottom: none;
        /* Reset existing style */
    }

    .role-card h4::after {
        display: none;
        /* Remove the underline from previous generic card styles */
    }

    .role-card p {
        font-size: 12px;
        color: #666;
        line-height: 1.6;
        margin: 0;
    }

    /* Mobile Responsive */
    @media (max-width: 768px) {
        .roles-grid {
            grid-template-columns: repeat(1, 1fr);
            /* 1 column on mobile */
        }
    }

    /* Tech Stack */
    /* Tech Stack Redesign */
    .tech-logos-grid {
        display: flex;
        flex-direction: column;
        gap: 30px;
        align-items: center;
        margin-top: 30px;
    }

    .tech-row {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 100px;
        align-items: center;
    }

    .tech-row i {
        font-size: 100px;
        /* Base size */
        transition: transform 0.3s ease;
    }

    /* Specific sizing adjustments to match visual balance from image */
    .devicon-nodejs-plain-wordmark {
        font-size: 70px !important;
    }

    .devicon-mysql-plain-wordmark {
        font-size: 70px !important;
    }

    .devicon-microsoftsqlserver-plain-wordmark {
        font-size: 70px !important;
    }

    .devicon-kubernetes-plain-wordmark {
        font-size: 70px !important;
    }

    .devicon-docker-plain-wordmark {
        font-size: 70px !important;
    }

    .devicon-amazonwebservices-plain-wordmark {
        font-size: 70px !important;
    }

    .devicon-laravel-plain-wordmark {
        font-size: 70px !important;
    }

    .devicon-mongodb-plain-wordmark {
        font-size: 70px !important;
    }

    .devicon-apachekafka-original-wordmark {
        font-size: 70px !important;
    }

    /* Clients Section */
    .clients-section {
        background-color: #002b49;
        padding: 80px 0;
    }

    /* Clients Carousel specific */
    .client-group {
        display: flex;
        flex-direction: column;
        gap: 6px;
    }

    /* AOS Animation CSS - Moved to Head */

    <style>
    /* ... existing styles ... */

    /* Hover Lift Effect */
    .hover-lift {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        will-change: transform;
        /* Performance optimization */
    }

    .hover-lift:hover {
        transform: translateY(-10px) scale(1.02);
        /* Lift and Zoom */
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
        /* Strong shadow */
    }

    /* Tech Stack Marquee Specifics */
    #tech-marquee-1 .owl-item,
    #tech-marquee-2 .owl-item,
    #tech-marquee-3 .owl-item {
        text-align: center;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 80px;
    }

    #tech-marquee-1 i,
    #tech-marquee-2 i,
    #tech-marquee-3 i {
        font-size: 60px;
        /* Default size for all tech icons */
        display: inline-block;
    }

    .client-box {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100px;
        background: #fff;
        border: 1px solid #eee;
        padding: 10px;
    }

    /* Marquee Box Style (Same as client-box) */
    .client-box-marquee {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100px;
        background: #fff;
        /* White background */
        border: 1px solid #eee;
        /* Light border used in original design */
        padding: 10px;
        margin-right: 1px;
        /* Slight separation if needed, or rely on Owl carousel margin */
    }

    .client-box-marquee img {
        max-width: 80%;
        max-height: 60px;
        object-fit: contain;
    }

    .client-box img {
        max-width: 80%;
        max-height: 60px;
        object-fit: contain;
    }

    .clients-section .owl-dots {
        margin-top: 20px;
        text-align: center;
    }

    .clients-section .owl-dot span {
        background: #004d80 !important;
    }

    .clients-section .owl-dot.active span {
        background: #fff !important;
    }

    /* Old clients-grid removed */
    .clients-grid-removed {
        display: none;
    }


    .client-box {
        background: #fff;
        border: 1px solid #eee;
        height: 100px;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 15px;
    }

    .client-box img {
        max-width: 100%;
        max-height: 100%;
        object-fit: contain;
    }

    /* Awards Section */
    .awards-section {
        background: #fff;
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
        border: 2px solid #509ecf;
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

    @media (max-width: 992px) {
        .clients-grid {
            grid-template-columns: repeat(4, 1fr);
            margin-top: 30px;
        }
    }

    @media (max-width: 768px) {
        .clients-grid {
            grid-template-columns: repeat(3, 1fr);
        }

        .awards-grid {
            grid-template-columns: repeat(1, 1fr);
        }
    }

    /* Testimonials Section */
    .testimonials-section {
        background-color: #002b49;
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
        /* Light blue header */
        padding: 20px;
        display: flex;
        align-items: center;
        gap: 15px;
        height: 120px;
    }

    .test-avatar {
        width: 70px;
        height: 70px;
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
        height: 210px;
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
        text-align: -webkit-center;
    }

    /* Slider dots visual only */
    .slider-dots {
        display: flex;
        justify-content: center;
        gap: 10px;
        margin-top: 30px;
    }

    .dot {
        width: 30px;
        height: 5px;
        background: #334e68;
        border-radius: 5px;
    }

    .dot.active {
        background: #0088cc;
        width: 40px;
    }

    /* Certifications Section */
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
    }


    @media (max-width: 992px) {
        .testimonials-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 768px) {
        .testimonials-grid {
            grid-template-columns: repeat(1, 1fr);
        }
    }

    /* Contact Section CSS */
    .contact-card {
        background: #fff;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
        border-radius: 12px;
        overflow: hidden;
        margin-top: -80px;
        /* Stronger overlap */
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

    /* Updated Icon Style: White Circle, Blue Icon */
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

    .contact-text {}

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

    /* Slider dots visual only */
    .testimonials-carousel .owl-dots,
    .certifications-carousel .owl-dots {
        text-align: center;
        margin-top: 30px;
    }

    .testimonials-carousel .owl-dot,
    .certifications-carousel .owl-dot {
        display: inline-block;
        zoom: 1;
        background: transparent;
    }

    .testimonials-carousel .owl-dot span,
    .certifications-carousel .owl-dot span {
        width: 40px;
        height: 6px;
        margin: 5px 5px;
        background: #002b4950;
        /* Changed to dark for white background visibility if needed, or stick to white if bg is dark */
        display: block;
        -webkit-backface-visibility: visible;
        transition: opacity 200ms ease;
        border-radius: 3px;
    }

    /* Adjust specific background colors for visibility */
    .testimonials-section .owl-dot span {
        background: #ffffff50;
    }

    .certifications-section .owl-dot span {
        background: #002b4930;
        /* Darker color for white background */
    }

    .testimonials-carousel .owl-dot.active span,
    .certifications-carousel .owl-dot.active span {
        background: #007bff;
    }

    .testimonials-carousel .owl-dot:hover span,
    .certifications-carousel .owl-dot:hover span {
        background: #007bff;
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

    /* Form Styles */
    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        font-size: 14px;
        font-weight: 600;
        margin-bottom: 8px;
        display: block;
        color: #333;
    }

    .form-control-custom {
        height: 50px;
        border-radius: 8px;
        /* Softer, more modern radius */
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








    /* Form Styles */





    @media (max-width: 768px) {
        .tech-row {
            gap: 25px;
        }

        .tech-row i {
            font-size: 40px;
        }

        /* scale down specific icons on mobile too */
        .devicon-nodejs-plain-wordmark,
        .devicon-mysql-plain-wordmark,
        .devicon-microsoftsqlserver-plain-wordmark,
        .devicon-kubernetes-plain-wordmark,
        .devicon-docker-plain-wordmark,
        .devicon-amazonwebservices-plain-wordmark,
        .devicon-laravel-plain-wordmark,
        .devicon-mongodb-plain-wordmark,
        .devicon-apachekafka-original-wordmark {
            font-size: 55px !important;
        }
    }

    /* Footer Form */
    .ht-form-section {
        background: #f0f2f5;
        padding-top: 60px;
        padding-bottom: 60px;
    }

    .form-box {
        background: #001f3f;
        border-radius: 20px;
        padding: 0;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
    }

    .form-box .row>div {
        padding: 40px;
    }

    .text-white {
        color: #fff;
    }

    .contact-info p {
        margin-bottom: 10px;
        font-size: 14px;
        opacity: 0.8;
    }

    .contact-info i {
        width: 20px;
    }

    .btn-navy {
        background: #001f3f;
        color: #fff;
        border: 1px solid #001f3f;
        font-weight: 600;
        padding: 10px;
    }

    .btn-navy:hover {
        background: #003366;
        color: #fff;
    }

    /* Mobile */
    @media (max-width: 768px) {
        .items-center {
            flex-direction: column;
            text-align: center;
        }

        .process-grid,
        .roles-grid {
            grid-template-columns: 1fr;
        }

        .photo-grid {
            display: none;
        }

        .bubble-container {
            height: 300px;
            margin-top: 40px;
        }

        /* 
        .bubble {
            width: 80px;
            height: 80px;
        } */

        .hero-title {
            font-family: Nourd-Bold;
            font-weight: 700;
            font-style: Regular;
            font-size: 40px;
            line-height: 120%;
            letter-spacing: 0%;

        }

        .hero-btns {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 10px;
        }

        .btn-custom {
            margin: 0;
            width: 100%;
        }

        .form-box .row>div {
            padding: 20px;
        }
    }

    /* Flexible Teams Grid */
    .ft-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 15px;
    }

    .ft-item {
        border-radius: 12px;
        position: relative;
        min-height: 140px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
    }

    .ft-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
        border-radius: 24px;
    }

    .span-2 {
        grid-column: span 2;
    }

    .pink-box {
        background: #FFC0CB;
        color: #000;
        text-align: center;
    }

    .pink-box strong {
        font-size: 28px;
        display: block;
        line-height: 1;
    }

    .pink-box span {
        font-size: 12px;
    }

    .blue-box {
        background: #90CAF9;
        color: #0D47A1;
        font-size: 40px;
    }

    .green-box {
        background: #69F0AE;
        color: #1B5E20;
        font-size: 40px;
    }

    .purple-box {
        background: #E040FB;
        color: #fff;
        font-size: 18px;
        font-weight: 600;
        flex-direction: column;
        gap: 10px;
        padding: 10px;
        text-align: center;
    }

    .purple-box i {
        font-size: 30px;
        margin-bottom: 5px;
    }

    .floating-badge {
        position: absolute;
        bottom: 10px;
        right: 10px;
        background: #F8BBD0;
        padding: 10px 15px;
        border-radius: 10px;
        text-align: left;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        width: 80%;
    }

    .badg-title {
        font-size: 10px;
        display: block;
        color: #333;
        margin-bottom: 2px;
    }

    .floating-badge strong {
        font-size: 20px;
        color: #000;
        display: block;
        line-height: 1;
    }

    /* Mobile */
    @media (max-width: 768px) {
        .ft-grid {
            grid-template-columns: repeat(2, 1fr);
        }

        .span-2 {
            grid-column: span 1;
        }

        .floating-badge {
            width: 90%;
            right: 5%;
            bottom: 5%;
        }
    }

    .hero_bobble_text {
        font-family: 'Nourd-Bold';
        font-weight: 500;
        font-size: 14px;
        line-height: 22px;
        color: #0177BC !important;
    }

    /* .hero_bobble_number {
    font-family: "Poppins", "Inter", sans-serif;
    font-weight: 700;
    font-size: 40px;
    line-height: 50px;
    text-transform: uppercase;
    color: #0177BC;
} */

    /* Why Mysoft Heaven  Section */
    .why-mysoftheaven-section {
        background-color: #fff;
        padding: 80px 0;
    }

    .why-mysoftheaven-title {
        font-family: 'Nourd-Bold', 'Poppins', sans-serif;
        font-size: 36px;
        font-weight: 700;
        color: #000000ff;
        margin: 0 0 15px 0;
        line-height: 1.2;
    }

    .why-mysoftheaven-title .text-blue {
        color: #0088cc;
    }

    .why-mysoftheaven-subtitle {
        font-size: 16px;
        font-weight: 500;
        color: #000 !important;
        margin: 0 0 25px 0;
        display: block;
    }

    .why-description {
        font-size: 15px;
        line-height: 1.8;
        color: #333;
        margin-bottom: 20px;
        text-align: justify;
    }

    /* Why Images Styling */
    /* .why-images-wrapper {
        display: flex;
        flex-direction: column;
        gap: 20px;
        padding-right: 30px;
    } */

    .why-img-top {
        height: 345px;
        border-radius: 50px;
        box-shadow: 0px 0px 11px 3px #5f97e999;
    }

    .why-img-bottom_left {
        height: 202px;
        top: 60%;
        right: 5%;
        position: absolute;
        transform: rotate(14deg) !important;
        box-shadow: 0px 0px 11px 3px #5f97e999;
        z-index: 9;
        border-radius: 48px;
    }

    .why-img-bottom_right {
        height: 190px;
        top: 52%;
        right: 53%;
        position: absolute;
        transform: rotate(-10deg) !important;
        border-radius: 39px;
        box-shadow: 0px 0px 11px 3px #5f97e999;
    }

    /* Mobile responsive */
    @media (max-width: 768px) {
        .why-mysoftheaven-section {
            padding: 40px 0;
        }

        .why-mysoftheaven-title {
            font-size: 28px;
        }

        .why-mysoftheaven-subtitle {
            font-size: 14px;
        }

        .why-description {
            font-size: 14px;
            text-align: left;
        }

        .why-images-wrapper {
            padding-right: 0;
            margin-bottom: 30px;
        }

        .why-img-top {
            height: 200px;
        }


        .why-img-bottom_left {
            height: 160px;
        }

        .why-img-bottom_right {
            height: 160px;
        }
    }


    /* Engagement Models Redesign */
    .engagement-section {
        padding: 80px 0;
        background: #fff;
    }

    .text-black {
        color: #000;
        font-weight: 700;
    }

    .blob-container {
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 400px;
    }

    .eng-img {
        width: 100%;
        height: auto;
        /* Allow auto height to maintain aspect ratio */
        max-width: 100%;
        /* Ensure it doesn't overflow */
    }

    .engagement-list-new {
        list-style: none;
        padding: 0;
    }

    .engagement-list-new li {
        display: flex;
        align-items: center;
        margin-bottom: 30px;
        padding: 15px;
        border-radius: 10px;
        transition: 0.5s;

    }

    .icon-box {
        width: 50px;
        height: 50px;
        min-width: 50px;
        border-radius: 12px;
        display: flex;
        justify-content: center;
        align-items: center;
        margin-right: 20px;
        font-size: 20px;
    }

    .eng-text {
        font-size: 16px;
        color: #444;
        line-height: 1.4;
    }

    /* Icon Colors */
    .bg-green-light {
        background-color: #E8F5E9;
    }

    .text-green-dark {
        color: #2E7D32;
    }

    .bg-blue-light {
        background-color: #E3F2FD;
    }

    .text-blue-dark {
        color: #1565C0;
    }

    .bg-purple-light {
        background-color: #F3E5F5;
    }

    .text-purple-dark {
        color: #7B1FA2;
    }

    .bg-orange-light {
        background-color: #FBE9E7;
    }

    .text-orange-dark {
        color: #D84315;
    }

    .container-fluid {
        padding-right: 90px;
        padding-left: 90px;
        margin-right: auto;
        margin-left: auto;
    }


    /* Mobile Responsive */
    @media (max-width: 768px) {
        .blob-container {
            height: 300px;
            margin-bottom: 40px;
        }

        .blob-mask {
            width: 250px;
            height: 250px;
        }

        .engagement-list-new li {
            margin-bottom: 20px;
        }

        .eng-text {
            font-size: 14px;
            flex-direction: column;
            text-align: center;
        }

        .icon-box {
            margin-right: 0;
            margin-bottom: 10px;
        }
    }



    /* =========================================
       RESPONSIVE IMPLEMENTATION
       ========================================= */

    /* Tablet & Smaller (Max Width: 991px) */
    @media (max-width: 991px) {

        /* Process: Hide Arrows & Stack */
        .process-card:not(:last-child)::after,
        .process-card:not(:last-child)::before {
            display: none !important;
        }

        .process-grid,
        .awards-grid {
            grid-template-columns: repeat(2, 1fr) !important;
            gap: 20px;
        }

        .roles-grid {
            grid-template-columns: repeat(2, 1fr) !important;
        }

        /* Why Mysoft Heaven  Responsive */
        .why-mysoftheaven-section .col-md-6 {
            flex: 0 0 100%;
            max-width: 100%;
        }

        .why-images-wrapper {
            height: auto !important;
            display: flex;
            flex-direction: column;
            gap: 20px;
            margin-bottom: 40px;
            padding-right: 0 !important;
        }

        .why-img-top,
        .why-img-bottom_left,
        .why-img-bottom_right {
            position: static !important;
            width: 100%;
            height: auto !important;
            max-width: 100%;
            object-fit: cover;
        }
    }

    /* Mobile (Max Width: 768px) */
    @media (max-width: 768px) {

        /* Global Section Padding */
        .ht-section {
            padding-top: 40px !important;
            padding-bottom: 40px !important;
            height: auto !important;
            min-height: auto !important;
        }

        /* Hero */
        .hero-title {
            font-size: 32px !important;
            text-align: center;
        }


        .hero-desc {
            text-align: center;
            color: #575757;
        }

        .hero-btns {
            justify-content: center;
        }

        /* Grids to 1 Column */
        .process-grid,
        .awards-grid,
        .roles-grid,
        .testimonials-grid {
            grid-template-columns: 1fr !important;
            gap: 20px !important;
        }

        /* Flexible Teams */
        .span-2 {
            grid-column: span 1 !important;
        }

        /* Contact Section Overlap Reset */
        .certifications-section {
            padding-bottom: 50px !important;
        }

        .contact-card {
            margin-top: 0 !important;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            border-radius: 0;
            border: 1px solid #eee;
        }

        .contact-section-wrapper {
            padding-top: 0 !important;
            background: #f9fbfd !important;
        }

        .contact-info-side,
        .contact-form-side {
            padding: 30px 20px !important;
        }

        /* Typography */
        .section-title {
            font-size: 26px !important;
            line-height: 1.3;
        }

        p {
            font-size: 14px !important;
        }

        /* Engagement */
        .blob-container {
            height: 250px;
            margin-top: 0;
        }

        .engagement-list-new li {
            flex-direction: column;
            text-align: center;
        }

        .icon-box {
            margin-right: 0;
            margin-bottom: 10px;
        }
    }

    .ht-hero-section {
        height: 475px !important;
    }




    /* Responsiveness */
    @media (max-width: 992px) {
        .ht-hero-section {
            height: 940px !important;
        }

        .bubble-1 {
            right: 57%;
        }

        .bubble-2 {
            right: 17%;
        }

        .bubble-3 {
            right: 21%;
        }

        .bubble-4 {
            right: 59%;
            top: 76%;
        }

        .why-img-bottom_left {
            height: 34rem !important;
            width: 34rem;
            position: absolute !important;
            top: 43% !important;
            right: 48% !important;
        }

        .why-img-bottom_right {
            height: 34rem !important;
            width: 34rem;
            position: absolute !important;
            top: 53% !important;
            right: 15% !important;
        }

        .why-images-wrapper {
            height: 598px !important;
        }

    }

    @media (max-width: 477px) {

        .section-text,
        .section-title {
            text-align: -webkit-center;
            padding: 16px !important;
            margin: 0;
        }

        .bubble-1 {
            right: 57%;
        }

        .bubble-2 {
            right: 10%;
        }

        .bubble-3 {
            right: 15%;
        }

        .bubble-4 {
            right: 59%;
            top: 76%;
        }

        .flexible_teams_section {
            padding: 18px;
            margin: auto;
        }
    }

    @media (max-width: 430px) {
        .ht-hero-section {
            height: 933px !important;
        }

    }

    @media (max-width: 1199px) {
        .why-img-top {
            height: 350px;
            position: absolute;
            right: 2%;
        }

        .why-img-bottom_left {
            top: 41%;
            right: 58%;
        }

        .why-img-bottom_right {
            top: 50%;
            right: 16%;
        }
    }

    @media (max-width: 1127px) {
        .why-img-top {
            height: 320px;
            position: absolute;
            right: 2%;
        }


    }

    @media (max-width: 1114px) {
        .why-img-top {
            height: 284px;
            position: absolute;
            right: 2%;
        }

        .why-img-bottom_left {
            top: 33%;
            right: 38%;
        }

        .why-img-bottom_right {
            top: 42%;
            right: -4%;
        }


    }

    @media (max-width: 430px) {
        .bubble-1 {
            right: 51%;
            height: 150px;
            width: 150px;
        }

        .bubble-2 {
            right: 1%;
            height: 150px;
            width: 150px;
        }

        .bubble-4 {
            right: 54%;
            top: 76%;
            height: 150px;
            width: 150px;
        }

        .bubble-3 {
            right: 4%;
            height: 150px;
            width: 150px;
        }

        .bubble {
            position: absolute;
            background: #fff;
            border-radius: 50%;
            box-shadow: 0px 0px 5px 1px rgb(113 113 113);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            height: 80%;
            width: 80%;
        }

        .section-text,
        .section-title {
            padding: 5px !important;
        }

        .ft-item {
            box-shadow: none !important;
            margin: 0px 25px;
        }
    }

    @media (max-width: 767px) {
        .why-img-bottom_left {
            top: 31% !important;
        }

        .why-img-bottom_right {
            top: 40% !important;
            right: 4% !important;
        }
    }

    @media (max-width: 619px) {
        .why-img-bottom_left {
            top: 42vw !important;
            height: 35vw !important;
            width: 37vw !important;
            right: 49vw !important;
        }

        .why-images-wrapper {
            height: 334px !important;
        }

        .why-img-bottom_right {
            top: 49vw !important;
            right: 24vw !important;
            height: 35vw !important;
            width: 37vw !important;
        }

        .why-img-top {
            height: 59vw !important;
            width: 93vw !important;
        }
    }

    /* Marquee Fader */
    .marquee-fader {
        position: relative;
        overflow: hidden;
    }

    .marquee-fader::before,
    .marquee-fader::after {
        content: '';
        position: absolute;
        top: 0;
        bottom: 0;
        width: 10%;
        /* Adjust fade width as needed */
        z-index: 2;
        pointer-events: none;
    }

    .marquee-fader::before {
        left: 0;
    }

    .marquee-fader::after {
        right: 0;
    }

    /* White Fade */
    .marquee-fader-white::before {
        background: linear-gradient(to right, #fff, transparent);
    }

    .marquee-fader-white::after {
        background: linear-gradient(to left, #fff, transparent);
    }

    /* Light Fade (for bg-light/gray) */
    .marquee-fader-light::before {
        background: linear-gradient(to right, #f9fbfd, transparent);
    }

    .marquee-fader-light::after {
        background: linear-gradient(to left, #f9fbfd, transparent);
    }

    /* Blue Light Fade (for #eef8ff) */
    .marquee-fader-blue-light::before {
        background: linear-gradient(to right, #eef8ff, transparent);
    }

    .marquee-fader-blue-light::after {
        background: linear-gradient(to left, #eef8ff, transparent);
    }

    /* Dark Blue Fade (for #002b49) */
    .marquee-fader-dark-blue::before {
        background: linear-gradient(to right, #002b49, transparent);
    }

    .marquee-fader-dark-blue::after {
        background: linear-gradient(to left, #002b49, transparent);
    }

    /* Select Dropdown Icon Styles */
    .select-wrapper {
        position: relative;
    }

    .select-icon {
        position: absolute;
        right: 25px;
        top: 45px;
        pointer-events: none;
        color: #666;
        font-size: 14px;
    }

    .form-control-custom {
        appearance: none;
        -webkit-appearance: none;
        -moz-appearance: none;
        padding-right: 40px;
    }

    /* Floating CTA Button */
    .floating-cta-btn {
        position: fixed;
        bottom: 30px;
        right: 30px;
        background: linear-gradient(135deg, #0088cc 0%, #0066aa 100%);
        color: #fff;
        padding: 16px 28px;
        border-radius: 50px;
        font-size: 16px;
        font-weight: 600;
        text-decoration: none;
        box-shadow: 0 8px 20px rgba(0, 136, 204, 0.4);
        z-index: 9999;
        cursor: pointer;
        border: none;
        transition: all 0.3s ease;
        opacity: 0;
        transform: translateY(100px);
        pointer-events: none;
        display: flex;
        align-items: center;
        gap: 10px;
        font-family: 'Poppins', sans-serif;
    }

    .floating-cta-btn.show {
        opacity: 1;
        transform: translateY(0);
        pointer-events: all;
    }

    .floating-cta-btn:hover {
        background: linear-gradient(135deg, #006699 0%, #004477 100%);
        box-shadow: 0 12px 30px rgba(0, 136, 204, 0.6);
        transform: translateY(-3px);
        color: #fff;
        text-decoration: none;
    }

    .floating-cta-btn i {
        font-size: 18px;
        animation: pulse 2s infinite;
    }

    @keyframes pulse {

        0%,
        100% {
            transform: scale(1);
        }

        50% {
            transform: scale(1.2);
        }
    }

    @media (max-width: 768px) {
        .floating-cta-btn {
            bottom: 20px;
            right: 20px;
            padding: 14px 24px;
            font-size: 14px;
        }
    }
</style>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">


<!-- Hire Talent Page Content - Exact Replica -->
<div class="ht-main-wrapper">

    <!-- Floating CTA Button -->
    <button class="floating-cta-btn scroll-link" href="#contact-section">
        <i class="fa fa-paper-plane"></i>
        <span id="floatingBtnText">Hire Devs In 24H</span>
    </button>

    <!-- Hero Section -->

    <section class="ht-section ht-hero-section">
        <div class="container-fluid">
            <div class="row items-center">
                <div class="col-md-8 col-sm-12" data-aos="fade-right">
                    <h1 class="hero-title">Scale faster. <span style="color: #FC6000;">Build smarter.</span><br><span
                            class="text-blue" id="hero-typewriter"></span></h1>
                    <p class="hero-desc" data-aos="fade-up" data-aos-delay="200">
                        When speed, quality, and control matter you cannot wait for traditional hiring cycles. MySoft
                        Heaven delivers vetted global IT professionals who join your team and begin contributing from
                        day one. You run the roadmap. We deliver the talent.
                    </p>
                    <div class="hero-btns" data-aos="fade-up" data-aos-delay="400">
                        <a href="#roles-section" class="btn-custom btn-none scroll-link"
                            style="font-family: 'Nourd-Medium';font-weight: 500;font-size: 19px;line-height: 150%;">Explore
                            Roles</a>
                        <a href="#contact-section" class="btn-custom btn-blue scroll-link"
                            style="font-family: 'Nourd-Medium';font-weight: 500;font-size: 19px;line-height: 150%;">Get
                            in
                            Touch <i class="fa fa-arrow-right"></i> </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 relative" data-aos="fade-left">
                    <div class="bubble-container">
                        <div class="bubble-1">
                            <div class="bubble">
                                <strong class="hero_bobble_number">
                                    500+
                                </strong>
                                <span class="hero_bobble_text">Offshore Clients Served</span>
                            </div>
                        </div>
                        <div class="bubble-2">
                            <div class="bubble">
                                <strong class="hero_bobble_number">
                                    100+
                                </strong>
                                <span class="hero_bobble_text">Tech Specializations Covered</span>
                            </div>
                        </div>
                        <div class="bubble-3">
                            <div class="bubble">
                                <strong class="hero_bobble_number">
                                    2,500+
                                </strong>
                                <span class="hero_bobble_text">Projects Delivered Successfully</span>
                            </div>
                        </div>
                        <div class="bubble-4">
                            <div class="bubble">
                                <strong class="hero_bobble_number">
                                    Top 1%
                                </strong>
                                <span class="hero_bobble_text">Global IT Talent On-Demand</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Flexible Teams Section -->
    <section class="ht-section" style="background-color: #E6F1FE;padding-top: 71px;min-height: 640px;">
        <div class="flexible_teams_section">
            <div class="row">
                <div class="col-md-7 col-sm-12" data-aos="fade-right">
                    <h2 class="section-title"><span class="text-blue">Flexible Teams</span> for Rapid Delivery</h2>
                    <p class="section-text"
                        style="font-family: Arial;font-weight: 400;font-size: 18px;line-height: 33px;padding-right: 77px;">
                        Businesses today are moving faster than ever, and traditional hiring can’t always keep up. Teams
                        need a flexible way to fill skill gaps, tackle urgent projects, and scale quickly without
                        slowing down delivery. With the right talent on-demand, you can maintain momentum and meet
                        deadlines without compromise. This approach helps organizations respond quickly to changing
                        priorities and evolving technical demands
                    </p>
                    <p class="section-text"
                        style="font-family: Arial;font-weight: 400;font-size: 18px;line-height: 33px;padding-right: 77px;">
                        IT Staff Augmentation gives you immediate access to skilled professionals who integrate directly
                        into your workflows. They follow your standards, contribute from day one, and let you retain
                        full control over architecture, product direction, and delivery decisions—ensuring continuity,
                        quality, and faster results. This model allows your team to stay agile while scaling efficiently
                        as project needs evolve. It also reduces long hiring cycles while keeping delivery predictable
                        and aligned with business goals.
                    </p>
                </div>
                <div class="col-md-5 col-sm-12" style="padding-left: 0;margin-top: 44px;">
                    <div class="ft-grid">
                        <!-- Row 1 -->
                        <div class="ft-item hover-lift" data-aos="fade-right" data-aos-delay="100">
                            <img src="<?= base_url('talent/flexible_teams/1.JPG') ?>" class="ft-img">
                        </div>
                        <div class="ft-item pink-box hover-lift" data-aos="fade-down" data-aos-delay="200">
                            <strong>120+</strong>
                            <span>Professionals</span>
                        </div>
                        <div class="ft-item hover-lift rounded" data-aos="fade-left" data-aos-delay="300">
                            <img src="<?= base_url('talent/flexible_teams/2.JPG') ?>" class="ft-img rounded">
                        </div>

                        <!-- Row 2 -->
                        <div class="ft-item blue-box hover-lift" data-aos="fade-right" data-aos-delay="150">
                            <i class="fa fa-users"></i>
                        </div>
                        <div class="ft-item hover-lift" data-aos="zoom-in" data-aos-delay="250">
                            <img src="<?= base_url('talent/flexible_teams/3.JPG') ?>" class="ft-img">
                        </div>
                        <div class="ft-item green-box hover-lift" data-aos="fade-left" data-aos-delay="350">
                            <i class="fa fa-globe"></i>
                        </div>

                        <!-- Row 3 -->
                        <div class="ft-item purple-box span-2 hover-lift" data-aos="fade-up" data-aos-delay="400">
                            <i class="fa fa-check-circle"></i>
                            <span>Pre-Vetted Professionals</span>
                        </div>
                        <div class="ft-item relative hover-lift" data-aos="fade-up" data-aos-delay="500">
                            <img src="<?= base_url('hire_talent_media/rectangle_6760.png') ?>" class="ft-img">
                            <div class="floating-badge">
                                <span class="badg-title">Average Onboarding</span>
                                <strong>72h</strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Why Mysoft Heaven  -->
    <section class="ht-section why-mysoftheaven-section" style="min-height: 713px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="why-images-wrapper">
                        <img src="<?= base_url('talent/why_mysoftheaven/1.webp') ?>" alt="Team Meeting"
                            class="why-img-top" data-aos="fade-down">
                        <img src="<?= base_url('talent/why_mysoftheaven/2.webp') ?>" alt="Office Space"
                            class="why-img-bottom_left" data-aos="fade-right" data-aos-delay="100">
                        <img src="<?= base_url('talent/why_mysoftheaven/3.webp') ?>" alt="Office Space"
                            class="why-img-bottom_right" data-aos="fade-left" data-aos-delay="200">
                    </div>
                </div>
                <div class="col-md-6 col-sm-12" data-aos="fade-left">
                    <h2 class="why-mysoftheaven-title">Why <span class="text-blue">Mysoft Heaven </span></h2>
                    <p class="why-mysoftheaven-subtitle">Trusted. Experienced. Ready to deliver.</p>
                    <p class="why-description">
                        For 15+ years, Mysoft Heaven has built mission-critical systems for governments, enterprises,
                        and
                        fast-growing businesses—handling millions of records and high transaction volumes without
                        missing a beat. With 1,000+ clients and 2,500+ successful projects across finance, retail,
                        manufacturing, NGOs, and e-governance, we know how to deliver complex, always-on software that
                        organizations rely on every day.
                    </p>
                    <p class="why-description">
                        Through our proven IT staff augmentation model, we connect you with top global talent who
                        seamlessly integrate into your team. Whether you need a senior developer, AI specialist, or full
                        remote squad, your augmented team works under your guidance, backed by Mysoft Heaven 's QA
                        culture, delivery discipline, and unmatched experience in building secure, scalable, and
                        reliable software.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="ht-section text-center" style="min-height: 571px;">
        <div class="container-fluid">
            <h2 class="section-title center-text">Our Talent Delivery Process</h2>
            <div class="process-grid">
                <div class="process-card card-blue-light hover-lift" data-aos="zoom-in" data-aos-delay="0">
                    <div class="p-icon bg-blue">1</div>
                    <h4>Requirement Discovery</h4>
                    <p>We align on required skills, experience level, budget expectations, delivery timeline, time zone
                        overlap, and target start date to ensure complete clarity from day one.</p>
                </div>
                <div class="process-card card-purple-light hover-lift" data-aos="zoom-in" data-aos-delay="100">
                    <div class="p-icon bg-purple">2</div>
                    <h4>Candidate Matching</h4>
                    <p>We present a curated shortlist of pre-vetted engineers, including technical summaries, relevant
                        experience, and real work samples aligned to your needs.</p>
                </div>
                <div class="process-card card-green-light hover-lift" data-aos="zoom-in" data-aos-delay="200">
                    <div class="p-icon bg-green">3</div>
                    <h4>Client Interviews And Selection</h4>
                    <p>You interview the candidates directly and choose the engineer who best fits your team, culture,
                        and technical expectations.</p>
                </div>
                <div class="process-card card-orange-light hover-lift" data-aos="zoom-in" data-aos-delay="300">
                    <div class="p-icon bg-orange">4</div>
                    <h4>Onboarding And Continuous Support</h4>
                    <p>The selected professional integrates into your tools and workflows immediately. We handle
                        contracts, payroll, compliance, and fast replacement if required, while you manage daily tasks
                        and priorities.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Engagement Models -->
    <section class="ht-section engagement-section" style="min-height:653px;">
        <div class="container-fluid">
            <h2 class="section-title center-text"
                style="font-family: Nourd-Bold;font-weight: 700;font-size: 40px;line-height: 150%;margin: 0;"><strong
                    style="color:#0172B9">Engagement</strong> Models</h2>
            <p class="center-text mb-50" style="color: #000;">Choose the engagement that fits your project and budget.
            </p>
            <div class="row items-center">
                <div class="col-md-6 col-sm-12" data-aos="fade-right">
                    <div class="blob-container">
                        <img src="<?= base_url('hire_talent_media/engegment.png') ?>" class="eng-img">
                    </div>
                </div>
                <div class="col-md-6 col-sm-12" data-aos="fade-left">
                    <ul class="engagement-list-new">
                        <li class="hover-lift">
                            <div class="icon-box bg-green-light">
                                <svg width="34" height="34" viewBox="0 0 34 34" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_91_3313)">
                                        <path
                                            d="M14.3152 12.135C14.6087 12.135 14.8458 12.3728 14.8458 12.6656V17.488H19.6682C19.9611 17.488 20.1988 17.7258 20.1988 18.0186C20.1988 18.3115 19.9611 18.5492 19.6682 18.5492H14.3145C14.0217 18.5492 13.7839 18.3115 13.7839 18.0186V12.6649C13.7846 12.3728 14.0223 12.135 14.3152 12.135ZM31.7189 30.0521C30.2474 31.5237 28.2838 32.3338 26.1886 32.3338C24.3492 32.3338 22.6113 31.7089 21.2195 30.5608C19.1091 31.7222 16.7311 32.3351 14.3152 32.3351C6.42148 32.3345 0 25.913 0 18.0193C0 10.3035 6.13594 3.99361 13.7846 3.71338V2.196C13.7846 1.98151 13.9141 1.7876 14.112 1.70526C14.3099 1.62291 14.539 1.66873 14.6904 1.82014L18.8746 6.0044C18.9743 6.10401 19.03 6.23881 19.03 6.37959C19.03 6.52037 18.9743 6.65518 18.8746 6.75479L18.3925 7.2369C19.9179 7.81065 21.3144 8.70713 22.4699 9.8626C24.316 11.708 25.4721 14.1272 25.7616 16.7224C25.9031 16.7151 26.0452 16.7111 26.188 16.7111C28.2824 16.7111 30.2467 17.5212 31.7183 18.9928C34.7677 22.0422 34.7677 27.0034 31.7189 30.0521ZM17.5605 8.07029L14.6904 10.9404C14.5383 11.0924 14.3105 11.1376 14.112 11.0553C13.9134 10.9729 13.7846 10.7797 13.7846 10.5652V9.07303C9.08902 9.34862 5.35367 13.256 5.35367 18.0193C5.35367 22.9612 9.37391 26.9815 14.3159 26.9815C15.7801 26.9815 17.2191 26.6229 18.5034 25.9429C18.0559 23.4985 18.7744 20.8801 20.661 18.9941C21.7786 17.8758 23.1811 17.1401 24.7091 16.8512C24.4481 14.4918 23.3976 12.2924 21.7208 10.6156C20.5561 9.45088 19.1237 8.57565 17.5605 8.07029ZM14.3152 31.2733C16.4389 31.2733 18.5307 30.7606 20.4086 29.7885C19.6529 28.9597 19.1077 28.0061 18.773 26.9981C17.3945 27.6834 15.8671 28.0433 14.3152 28.0433C8.7882 28.0433 4.29184 23.5469 4.29184 18.0193C4.29184 12.4916 8.7882 7.99526 14.3152 7.99526C14.608 7.99526 14.8458 8.23299 14.8458 8.52584V9.28287L17.0146 7.11404C17.0279 7.09944 17.0412 7.08549 17.0558 7.07287L17.7491 6.37959L14.8458 3.47631V4.23334C14.8458 4.52686 14.608 4.76393 14.3152 4.76393C7.00719 4.76393 1.06117 10.7093 1.06117 18.018C1.06117 25.3266 7.00719 31.2733 14.3152 31.2733ZM30.9679 19.7445C29.6969 18.4735 27.9995 17.7736 26.1886 17.7736C24.3777 17.7736 22.6811 18.4735 21.4107 19.7439C19.7067 21.4478 19.1051 23.8431 19.6051 26.0352C19.6191 26.0744 19.6284 26.1142 19.633 26.154C19.9179 27.3082 20.5102 28.4012 21.4107 29.3017C21.4857 29.3767 21.5628 29.4498 21.6405 29.5208L21.6425 29.5228C22.8836 30.6537 24.4853 31.2726 26.1886 31.2726C27.9995 31.2726 29.6969 30.5727 30.9679 29.3017C33.6029 26.6667 33.6029 22.3788 30.9679 19.7445ZM28.6244 22.414L25.5345 25.5059L23.7529 23.7229C23.5457 23.5157 23.2097 23.5157 23.0025 23.7229C22.7953 23.9301 22.7946 24.2661 23.0025 24.474L25.1593 26.6328C25.2589 26.7324 25.3937 26.7882 25.5345 26.7882C25.6753 26.7882 25.8101 26.7324 25.9097 26.6328L29.3755 23.1658C29.5827 22.9586 29.5827 22.6226 29.3755 22.4147C29.1676 22.2069 28.8316 22.2069 28.6244 22.414Z"
                                            fill="#286701" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_91_3313">
                                            <rect width="34" height="34" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <span class="eng-text">Full time resource contracted monthly for sustained product
                                work</span>
                        </li>
                        <li class="hover-lift">
                            <div class="icon-box bg-blue-light">
                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M24.8437 14.625C24.8437 15.7969 24.6563 16.875 24.3281 17.9063H24.2344C24.2344 17.9063 24.2812 17.7656 24.375 17.4844C24.4687 17.2031 24.5625 16.8281 24.6562 16.3125C24.75 15.7969 24.7969 15.1406 24.7969 14.3906C24.7969 13.6406 24.7031 12.7969 24.4688 11.9062C24.4219 11.7187 24.375 11.5313 24.3281 11.3438C24.3281 11.3438 24.3281 11.3438 24.3281 11.2969C24.6563 12.375 24.8437 13.5 24.8437 14.625Z"
                                        fill="#2E79BE" />
                                    <path
                                        d="M23.6727 25.4143C24.7859 25.4098 25.6847 24.5038 25.6802 23.3906C25.6758 22.2774 24.7698 21.3786 23.6566 21.3831C22.5434 21.3875 21.6445 22.2935 21.649 23.4067C21.6534 24.5199 22.5595 25.4188 23.6727 25.4143Z"
                                        fill="#2E79BE" />
                                    <path
                                        d="M19.564 27.8678C20.0448 27.0393 19.7629 25.9779 18.9345 25.4971C18.106 25.0163 17.0447 25.2982 16.5639 26.1266C16.0831 26.9551 16.3649 28.0165 17.1934 28.4973C18.0218 28.9781 19.0832 28.6962 19.564 27.8678Z"
                                        fill="#2E79BE" />
                                    <path
                                        d="M12.1118 28.5444C12.8325 28.1368 13.0864 27.2221 12.6788 26.5014C12.2712 25.7806 11.3565 25.5268 10.6358 25.9344C9.91508 26.3419 9.66122 27.2566 10.0688 27.9774C10.4764 28.6981 11.3911 28.9519 12.1118 28.5444Z"
                                        fill="#2E79BE" />
                                    <path
                                        d="M6.8529 24.4582C6.86067 23.9405 6.44728 23.5145 5.92957 23.5067C5.41186 23.4989 4.98588 23.9123 4.97811 24.43C4.97035 24.9477 5.38374 25.3737 5.90144 25.3815C6.41915 25.3893 6.84513 24.9759 6.8529 24.4582Z"
                                        fill="#2E79BE" />
                                    <path
                                        d="M28.875 15.0938C28.875 16.5 28.6875 17.8125 28.2656 19.125L24.2812 17.9531C24.6094 16.9219 24.7969 15.7969 24.7969 14.6719C24.7969 13.5 24.6094 12.4219 24.2812 11.3906C23.625 9.32812 22.3125 7.54688 20.6719 6.23438C20.625 6.1875 20.5781 6.14062 20.5312 6.14062C19.7812 5.57812 18.9375 5.10938 18.0469 4.73438C17.4844 4.5 16.875 4.3125 16.2187 4.17187L15.9844 4.125L15.75 4.07812C15.6094 4.03125 15.4219 4.03125 15.2812 3.98438L15.0469 3.9375C14.9531 3.9375 14.9062 3.9375 14.8125 3.9375H14.5312H14.3906H14.3438H14.2969C13.0312 3.89062 11.7188 4.07812 10.5 4.45312C9.28125 4.82812 8.10937 5.4375 7.125 6.1875C6.14062 6.9375 5.29688 7.82812 4.64062 8.76562C4.45312 9 4.3125 9.23438 4.17187 9.46875C4.07812 9.60938 4.03125 9.70312 3.98438 9.84375C3.9375 9.98438 3.84375 10.0781 3.79688 10.2187C3.5625 10.6875 3.375 11.2031 3.1875 11.6719C3.09375 11.9062 3.04688 12.1406 2.95312 12.375C2.90625 12.4688 2.90625 12.6094 2.85937 12.7031C2.85937 12.7969 2.8125 12.9375 2.8125 13.0312C2.8125 13.0781 2.76562 13.125 2.76562 13.2188C2.76562 13.2656 2.76562 13.3125 2.71875 13.4062C2.71875 13.5 2.67187 13.6406 2.67187 13.7344C2.625 13.9687 2.625 14.1562 2.57812 14.3438C2.57812 14.5781 2.53125 14.7656 2.53125 15V15.0469V15.1406V15.2812V15.5625C2.53125 15.9375 2.53125 16.2656 2.57812 16.5469C2.625 17.1562 2.71875 17.625 2.8125 17.9063C2.85938 18.0469 2.85937 18.1875 2.90625 18.2812C2.90625 18.375 2.95312 18.4219 2.95312 18.4219L1.6875 18.75C1.6875 18.75 1.6875 18.7031 1.64062 18.6094C1.59375 18.5156 1.54687 18.375 1.5 18.2344C1.45312 18.0469 1.35937 17.8125 1.3125 17.5313C1.17187 16.7813 1.125 15.9844 1.125 15.1406C1.125 7.45312 7.35938 1.21875 15 1.21875C18.4688 1.21875 21.6094 2.48437 24.0469 4.54688C25.125 5.48438 26.0625 6.51562 26.7656 7.73438C28.0781 9.89062 28.875 12.4219 28.875 15.0938Z"
                                        fill="#2E79BE" />
                                    <path
                                        d="M9.1875 14.7188C9 15.1875 9.14062 15.6563 9.46875 16.0313C10.5469 17.1094 11.25 17.8594 12.375 18.9375C12.5156 19.0781 12.7031 19.1719 12.8437 19.2188C13.3594 19.3594 13.7812 19.2656 14.1562 18.8906C15.0469 18 16.0781 17.0156 17.2969 15.7969C18.2812 14.8125 19.4531 13.7344 20.3906 12.7969L20.4844 12.7031C20.8594 12.3281 20.9062 11.6719 20.625 11.25C20.3906 10.875 20.0156 10.6875 19.5937 10.6875C19.2656 10.6875 18.9375 10.8281 18.7031 11.0625C17.9062 11.8594 16.875 12.8438 16.125 13.5938L15.9844 13.7344C15.1875 14.5313 14.25 15.4219 13.4531 16.2188L13.2656 16.4063L11.25 14.3438C11.0156 14.1094 10.6875 13.9688 10.3594 13.9688C10.3125 13.9688 10.3125 13.9688 10.2656 13.9688C9.75 13.9688 9.375 14.25 9.1875 14.7188Z"
                                        fill="#2E79BE" />
                                </svg>
                            </div>
                            <span class="eng-text">Part time or hourly for advisory tasks and short lived
                                features</span>
                        </li>
                        <li class="hover-lift">
                            <div class="icon-box bg-purple-light">
                                <svg width="32" height="31" viewBox="0 0 32 31" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M27.684 17.0186C27.9816 18.0107 28.8745 18.9036 30.1146 19.3996C29.7178 21.0862 29.0729 22.6736 28.18 24.0626C26.6422 23.4673 25.1045 23.5665 24.162 24.509C23.2194 25.4515 23.1202 26.9893 23.7155 28.5271C22.3265 29.42 20.7392 30.0649 19.0526 30.4617C18.4077 28.9735 17.2171 27.9318 15.8778 27.9318C14.5384 27.9318 13.3975 28.9239 12.703 30.4617C11.0164 30.0649 9.47864 29.42 8.04008 28.5271C8.63535 26.9893 8.48653 25.4515 7.59362 24.509C6.65111 23.5665 5.11333 23.4673 3.57556 24.0626C2.68265 22.6736 2.03778 21.0862 1.64093 19.3996C2.88107 18.854 3.72437 18.0107 4.07161 17.0186"
                                        stroke="#AC25FF" stroke-miterlimit="10" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M22.5746 9.32959C24.6084 9.77604 26.6422 9.77604 28.6265 9.32959C30.065 9.32959 31.206 10.4705 31.206 11.9091V15.8279C31.206 16.4728 30.6603 17.0185 30.0154 17.0185H21.1856C20.5407 17.0185 19.9951 16.4728 19.9951 15.8279V11.9091C19.9951 10.4705 21.136 9.32959 22.5746 9.32959Z"
                                        stroke="#AC25FF" stroke-miterlimit="10" />
                                    <path d="M29.2217 13.7451V17.0191" stroke="#AC25FF" stroke-miterlimit="10"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M22.0289 13.7451V17.0191" stroke="#AC25FF" stroke-miterlimit="10"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path
                                        d="M25.6501 9.67725L24.5588 13.5961L25.6501 14.8859L26.6918 13.5961L25.6501 9.67725Z"
                                        stroke="#AC25FF" stroke-miterlimit="10" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M25.6501 7.3953C26.9925 7.3953 28.0808 6.30705 28.0808 4.96462C28.0808 3.62219 26.9925 2.53394 25.6501 2.53394C24.3077 2.53394 23.2194 3.62219 23.2194 4.96462C23.2194 6.30705 24.3077 7.3953 25.6501 7.3953Z"
                                        stroke="#AC25FF" stroke-miterlimit="10" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M10.7683 9.87564C10.7683 8.43708 11.9092 7.29614 13.3478 7.29614C15.3816 7.74259 17.4155 7.74259 19.3997 7.29614C20.6399 7.29614 21.6816 8.18905 21.9296 9.37959"
                                        stroke="#AC25FF" stroke-miterlimit="10" />
                                    <path
                                        d="M16.3738 7.59375L15.3321 11.5622L16.3738 12.8024L17.4651 11.5622L16.3738 7.59375Z"
                                        stroke="#AC25FF" stroke-miterlimit="10" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M16.4235 5.36137C17.7659 5.36137 18.8542 4.27311 18.8542 2.93068C18.8542 1.58825 17.7659 0.5 16.4235 0.5C15.0811 0.5 13.9928 1.58825 13.9928 2.93068C13.9928 4.27311 15.0811 5.36137 16.4235 5.36137Z"
                                        stroke="#AC25FF" stroke-miterlimit="10" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M3.0795 9.28027C5.11334 9.72673 7.14717 9.72673 9.1314 9.28027C10.57 9.28027 11.7109 10.4212 11.7109 11.8598V15.7786C11.7109 16.4235 11.1652 16.9692 10.5204 16.9692H1.69054C1.04566 16.9692 0.5 16.4731 0.5 15.7786V11.8598C0.5 10.4212 1.64093 9.28027 3.0795 9.28027Z"
                                        stroke="#AC25FF" stroke-miterlimit="10" />
                                    <path d="M9.72662 13.6953V16.9693" stroke="#AC25FF" stroke-miterlimit="10"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M2.53381 13.6953V16.9693" stroke="#AC25FF" stroke-miterlimit="10"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path
                                        d="M6.10544 9.62769L5.06372 13.5465L6.10544 14.7867L7.19677 13.5465L6.10544 9.62769Z"
                                        stroke="#AC25FF" stroke-miterlimit="10" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M6.10537 7.3455C7.4478 7.3455 8.53605 6.25724 8.53605 4.91481C8.53605 3.57238 7.4478 2.48413 6.10537 2.48413C4.76294 2.48413 3.67468 3.57238 3.67468 4.91481C3.67468 6.25724 4.76294 7.3455 6.10537 7.3455Z"
                                        stroke="#AC25FF" stroke-miterlimit="10" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M11.7604 14.6875H19.995" stroke="#AC25FF" stroke-miterlimit="10"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path
                                        d="M25.8485 16.9692C25.0052 21.7314 20.8383 25.3526 15.8777 25.3526C10.9172 25.3526 6.75028 21.7314 5.90698 17.0188"
                                        stroke="#AC25FF" stroke-miterlimit="10" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M15.8778 17.8127V14.6875" stroke="#AC25FF" stroke-miterlimit="10"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M15.8778 25.3526V21.5825" stroke="#AC25FF" stroke-miterlimit="10"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path
                                        d="M15.8778 17.8126C16.0762 17.763 16.2747 17.7134 16.4731 17.7134C17.5644 17.7134 18.4573 18.6063 18.4573 19.6976C18.4573 20.7889 17.5644 21.6818 16.4731 21.6818C16.2747 21.6818 16.0762 21.6322 15.8778 21.5826"
                                        stroke="#AC25FF" stroke-miterlimit="10" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                            <span class="eng-text">Fixed team for a group of resources working continuously with your
                                squads</span>
                        </li>
                        <li class="hover-lift">
                            <div class="icon-box bg-orange-light">
                                <svg width="38" height="38" viewBox="0 0 38 38" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M27.586 31.3275L23.9149 29.1526" stroke="#FF4B23" stroke-miterlimit="10"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M25.3016 32.9759L22.5967 31.3734" stroke="#FF4B23" stroke-miterlimit="10"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M22.5332 34.3372L21.4732 33.7093" stroke="#FF4B23" stroke-miterlimit="10"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M6.5354 10.5831H24.3935" stroke="#FF4B23" stroke-miterlimit="10"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M6.5354 6.77766H15.4645" stroke="#FF4B23" stroke-miterlimit="10"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M6.5354 13.9547H24.3935" stroke="#FF4B23" stroke-miterlimit="10"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <mask id="mask0_91_3346" style="mask-type:luminance" maskUnits="userSpaceOnUse"
                                        x="0" y="0" width="38" height="38">
                                        <path d="M0 0H37.2857V37.2857H0V0Z" fill="white" />
                                    </mask>
                                    <g mask="url(#mask0_91_3346)">
                                        <path
                                            d="M22.0588 0.699728V4.52785C22.0588 5.77044 23.0661 6.77766 24.3087 6.77766H28.1368"
                                            stroke="#FF4B23" stroke-miterlimit="10" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M28.2902 16.8251V7.4834C28.2902 7.03138 28.1107 6.59786 27.7911 6.27824L22.558 1.04513C22.2383 0.725505 21.8048 0.545921 21.3528 0.545921H4.88835C3.64591 0.545921 2.63861 1.55315 2.63861 2.79574V31.7755C2.63861 33.018 3.64591 34.0252 4.88835 34.0252H10.6034"
                                            stroke="#FF4B23" stroke-miterlimit="10" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M13.6714 19.7277L12.5409 19.0579C12.2298 18.8736 11.8283 18.9765 11.644 19.2874L6.99592 27.1332C6.81168 27.4443 6.91443 27.8458 7.22546 28.03L8.35605 28.6998C9.11436 29.1491 10.0933 28.8985 10.5426 28.1402L14.231 21.9142C14.6803 21.1559 14.4298 20.177 13.6714 19.7277Z"
                                            stroke="#FF4B23" stroke-miterlimit="10" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M29.2801 25.2221L31.0088 28.1402C31.4581 28.8985 32.4371 29.1491 33.1954 28.6998L34.326 28.0301C34.637 27.8457 34.7398 27.4443 34.5555 27.1332L29.9074 19.2874C29.7231 18.9764 29.3216 18.8737 29.0106 19.0579L27.88 19.7277C27.1217 20.177 26.8711 21.1559 27.3204 21.9143L27.9725 23.0149"
                                            stroke="#FF4B23" stroke-miterlimit="10" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M20.7191 22.3157L20.5326 22.2053C19.4602 21.5898 18.9587 21.4761 17.9911 21.85L16.9366 22.2578C16.2949 22.5058 15.5748 22.4459 14.9829 22.0953L14.3309 21.7108"
                                            stroke="#FF4B23" stroke-miterlimit="10" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M10.291 28.4601L11.3837 29.1051" stroke="#FF4B23"
                                            stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M19.4675 35.5226L21.2169 36.559C21.8305 36.9226 22.6225 36.7198 22.9859 36.1063C23.3495 35.4928 23.1467 34.7007 22.5332 34.3373L23.9853 35.1975C24.5989 35.561 25.3909 35.3583 25.7544 34.7448C26.1179 34.1313 25.9151 33.3393 25.3016 32.9758L26.2697 33.5493C26.8832 33.9128 27.6753 33.71 28.0387 33.0966C28.4022 32.483 28.1995 31.691 27.5859 31.3275L28.7708 32.0294C29.3842 32.3928 30.1762 32.1901 30.5396 31.5767C30.903 30.9632 30.7004 30.1713 30.0869 29.8078"
                                            stroke="#FF4B23" stroke-miterlimit="10" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M27.3753 22.0064L27.2233 22.0949C26.6313 22.4455 25.9113 22.5054 25.2695 22.2573L24.0803 21.7901C23.7083 21.644 23.3 21.6182 22.9126 21.7162L21.0905 22.1774C20.2423 22.392 19.6481 23.1552 19.6481 24.0302V26.4625C19.6481 26.8064 19.9268 27.0861 20.2707 27.0863C21.3078 27.087 22.1487 26.2465 22.1487 25.2096V25.1066L29.9479 29.7252C30.0924 29.5713 30.258 29.4382 30.4402 29.3303L31.5453 28.6847"
                                            stroke="#FF4B23" stroke-miterlimit="10" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M12.6186 31.782C12.2029 32.3611 11.3963 32.4936 10.8172 32.0778C10.2382 31.6621 10.1057 30.8555 10.5214 30.2764L11.2526 29.2579C11.6684 28.6789 12.4749 28.5463 13.054 28.9621C13.6332 29.3779 13.7656 30.1844 13.3498 30.7635"
                                            stroke="#FF4B23" stroke-miterlimit="10" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M16.254 31.1451L14.7159 33.2876C14.3001 33.8668 13.4936 33.9992 12.9145 33.5834C12.3353 33.1677 12.2029 32.3611 12.6187 31.7821L14.1568 29.6395C14.5726 29.0604 15.3791 28.928 15.9582 29.3438C16.5374 29.7595 16.6698 30.566 16.254 31.1451Z"
                                            stroke="#FF4B23" stroke-miterlimit="10" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M16.254 31.1452C16.6697 30.566 17.4762 30.4336 18.0553 30.8494C18.6344 31.2651 18.7669 32.0717 18.3512 32.6507L16.813 34.7933C16.3972 35.3724 15.5908 35.5048 15.0115 35.089C14.4324 34.6733 14.3 33.8668 14.7158 33.2877"
                                            stroke="#FF4B23" stroke-miterlimit="10" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M17.6677 33.6025C18.0835 33.0234 18.89 32.891 19.4691 33.3067C20.0482 33.7225 20.1807 34.529 19.7649 35.1081L19.2534 35.8206C18.8376 36.3997 18.0312 36.5321 17.452 36.1164C16.8729 35.7006 16.7405 34.8941 17.1563 34.315"
                                            stroke="#FF4B23" stroke-miterlimit="10" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </g>
                                </svg>


                            </div>
                            <span class="eng-text">Contract to hire when you want to convert a contributor to full time
                                employment</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Roles We Provide -->
    <section id="roles-section" class="ht-section roles-section-bg" style="min-height:1040px;">
        <div class="container-fluid">
            <h2 class="section-title center-text mb-20">Roles <span class="text-blue">We Provide</span></h2>
            <p class="center-text mb-50 roles-subtitle">
                Mysoft Heaven (BD) Ltd. connects you with top IT professionals across software, cloud, data, security,
                and niche engineering domains. Each role integrates seamlessly into your team to accelerate delivery and
                maintain quality.
            </p>

            <div class="roles-grid">
                <!-- 1. Software Engineers -->
                <div class="role-card hover-lift" data-aos="fade-up">
                    <div class="role-img-wrapper"><img
                            src="<?= base_url('roles_we_provide_image/software_engineers.png') ?>" class="role-img-new">
                    </div>
                    <div class="role-content">
                        <h4>Software Engineers</h4>
                        <p>Build scalable systems and APIs that meet your technical standards. Deliver production-ready
                            solutions that integrate smoothly into your workflows and drive business results.</p>
                    </div>
                </div>

                <!-- 2. Web Developers -->
                <div class="role-card hover-lift" data-aos="fade-up">
                    <div class="role-img-wrapper"><img
                            src="<?= base_url('roles_we_provide_image/web_developers.jpg') ?>" class="role-img-new">
                    </div>
                    <div class="role-content">
                        <h4>Web Developers</h4>
                        <p>Develop responsive, high-performance web applications. Ensure polished user interfaces and
                            seamless front-end to back-end integration.</p>
                    </div>
                </div>

                <!-- 3. Application Developers -->
                <div class="role-card hover-lift" data-aos="fade-up">
                    <div class="role-img-wrapper"><img
                            src="<?= base_url('roles_we_provide_image/application_developers.jpg') ?>"
                            class="role-img-new"></div>
                    <div class="role-content">
                        <h4>Application Developers</h4>
                        <p>Create cross-platform mobile and desktop applications. Deliver apps with smooth performance
                            and robust functionality.</p>
                    </div>
                </div>

                <!-- 4. DevOps Engineers -->
                <div class="role-card hover-lift" data-aos="fade-up">
                    <div class="role-img-wrapper"><img
                            src="<?= base_url('roles_we_provide_image/devops_engineers.png') ?>" class="role-img-new">
                    </div>
                    <div class="role-content">
                        <h4>DevOps Engineers</h4>
                        <p>Automate deployment pipelines and manage infrastructure efficiently. Improve release speed
                            and reliability across projects.</p>
                    </div>
                </div>

                <!-- 5. QA Engineers -->
                <div class="role-card hover-lift" data-aos="fade-up">
                    <div class="role-img-wrapper"><img src="<?= base_url('roles_we_provide_image/qa_engineers.jpg') ?>"
                            class="role-img-new"></div>
                    <div class="role-content">
                        <h4>QA Engineers</h4>
                        <p>Design and implement testing strategies to catch issues early. Ensure your software meets
                            high-quality standards before release.</p>
                    </div>
                </div>

                <!-- 6. UI/UX Designers -->
                <div class="role-card hover-lift" data-aos="fade-up">
                    <div class="role-img-wrapper"><img
                            src="<?= base_url('roles_we_provide_image/uiux_designers.jpg') ?>" class="role-img-new">
                    </div>
                    <div class="role-content">
                        <h4>UI/UX Designers</h4>
                        <p>Translate research into intuitive, user-friendly designs. Improve adoption and overall
                            experience for your end users.</p>
                    </div>
                </div>

                <!-- 7. Cloud Support Engineers -->
                <div class="role-card hover-lift" data-aos="fade-up">
                    <div class="role-img-wrapper"><img
                            src="<?= base_url('roles_we_provide_image/cloud_support_engineers.jpeg') ?>"
                            class="role-img-new"></div>
                    <div class="role-content">
                        <h4>Cloud Support Engineers</h4>
                        <p>Manage cloud deployments and optimize costs across platforms. Ensure resilience and
                            scalability for critical systems.</p>
                    </div>
                </div>

                <!-- 8. Data Scientists -->
                <div class="role-card hover-lift" data-aos="fade-up">
                    <div class="role-img-wrapper"><img
                            src="<?= base_url('roles_we_provide_image/data_scientists.jpg') ?>" class="role-img-new">
                    </div>
                    <div class="role-content">
                        <h4>Data Scientists</h4>
                        <p>Analyze complex datasets to extract actionable insights. Build predictive models that drive
                            smarter business decisions.</p>
                    </div>
                </div>

                <!-- HIDDEN ROLES (Initially Hidden) -->

                <!-- 9. AI & ML Developers -->
                <div class="role-card hover-lift hidden-role" data-aos="fade-up" style="display: none;">
                    <div class="role-img-wrapper"><img
                            src="<?= base_url('roles_we_provide_image/ai_and_ml_developers.jpg') ?>"
                            class="role-img-new">
                    </div>
                    <div class="role-content">
                        <h4>AI & ML Developers</h4>
                        <p>Develop machine learning and AI solutions for automation. Deliver intelligent features that
                            enhance your products.</p>
                    </div>
                </div>

                <!-- 10. Security Engineers -->
                <div class="role-card hover-lift hidden-role" data-aos="fade-up" style="display: none;">
                    <div class="role-img-wrapper"><img
                            src="<?= base_url('roles_we_provide_image/security_engineers.jpg') ?>" class="role-img-new">
                    </div>
                    <div class="role-content">
                        <h4>Security Engineers</h4>
                        <p>Protect applications, infrastructure, and data from threats. Implement best practices to
                            maintain a secure environment.</p>
                    </div>
                </div>

                <!-- 11. System Architects -->
                <div class="role-card hover-lift hidden-role" data-aos="fade-up" style="display: none;">
                    <div class="role-img-wrapper"><img
                            src="<?= base_url('roles_we_provide_image/system_architects.jpg') ?>" class="role-img-new">
                    </div>
                    <div class="role-content">
                        <h4>System Architects</h4>
                        <p>Design high-level architectures for scalability and performance. Ensure systems are robust
                            and ready for future growth.</p>
                    </div>
                </div>

                <!-- 12. Database Administrators -->
                <div class="role-card hidden-role hover-lift" data-aos="fade-up" style="display: none;">
                    <div class="role-img-wrapper"><img
                            src="<?= base_url('roles_we_provide_image/database_administrators.jpg') ?>"
                            class="role-img-new"></div>
                    <div class="role-content">
                        <h4>Database Administrators</h4>
                        <p>Manage, optimize, and secure databases for peak performance. Maintain data integrity and high
                            availability.</p>
                    </div>
                </div>

                <!-- 13. Network Engineers -->
                <div class="role-card hidden-role hover-lift" data-aos="fade-up" style="display: none;">
                    <div class="role-img-wrapper"><img
                            src="<?= base_url('roles_we_provide_image/network_engineers.jpg') ?>" class="role-img-new">
                    </div>
                    <div class="role-content">
                        <h4>Network Engineers</h4>
                        <p>Design and maintain secure, reliable networks. Support hybrid and multi-cloud connectivity
                            seamlessly.</p>
                    </div>
                </div>

                <!-- 14. IoT Developers -->
                <div class="role-card hidden-role hover-lift" data-aos="fade-up" style="display: none;">
                    <div class="role-img-wrapper"><img
                            src="<?= base_url('roles_we_provide_image/iot_developers.jpg') ?>" class="role-img-new">
                    </div>
                    <div class="role-content">
                        <h4>IoT Developers</h4>
                        <p>Connect devices to cloud services and develop end-to-end solutions. Enable real-time data
                            collection and smart automation.</p>
                    </div>
                </div>

                <!-- 15. Blockchain Developers -->
                <div class="role-card hidden-role hover-lift" data-aos="fade-up" style="display: none;">
                    <div class="role-img-wrapper"><img
                            src="<?= base_url('roles_we_provide_image/blockchain_developers.jpg') ?>"
                            class="role-img-new"></div>
                    <div class="role-content">
                        <h4>Blockchain Developers</h4>
                        <p>Build secure smart contracts and decentralized applications. Ensure correctness,
                            transparency, and auditability.</p>
                    </div>
                </div>

                <!-- 16. Game Developers -->
                <div class="role-card hidden-role hover-lift" data-aos="fade-up" style="display: none;">
                    <div class="role-img-wrapper"><img
                            src="<?= base_url('roles_we_provide_image/game_developers.jpeg') ?>" class="role-img-new">
                    </div>
                    <div class="role-content">
                        <h4>Game Developers</h4>
                        <p>Develop optimized, real-time gaming experiences. Deliver engaging gameplay on engines like
                            Unity or Unreal.</p>
                    </div>
                </div>
            </div>

            <div class="center-text mt-5">
                <a href="javascript:void(0)" id="exploreMoreBtn" class="btn-custom btn-outline-blue">Explore More
                    Roles</a>
                <div id="roleLoader" class="role-loader"></div>
            </div>
        </div>
    </section>

    <style>
        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }

            25% {
                opacity: 0.25;
                transform: translateY(15px);
            }

            50% {
                opacity: 0.5;
                transform: translateY(10px);
            }

            75% {
                opacity: 0.75;
                transform: translateY(5px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .fade-in-up {
            animation: fadeInUp 0.6s ease-out forwards;
        }

        /* Loader CSS */
        .role-loader {
            display: none;
            width: 40px;
            height: 40px;
            margin: 20px auto;
            border: 4px solid #f3f3f3;
            border-top: 4px solid #007bff;
            /* Blue */
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var exploreBtn = document.getElementById('exploreMoreBtn');
            var loader = document.getElementById('roleLoader');

            if (exploreBtn) {
                exploreBtn.addEventListener('click', function () {
                    // Hide button, show loader
                    exploreBtn.style.display = 'none';
                    if (loader) loader.style.display = 'block';

                    // Simulate loading delay
                    setTimeout(function () {
                        if (loader) loader.style.display = 'none';

                        var hiddenRoles = document.querySelectorAll('.hidden-role');
                        hiddenRoles.forEach(function (role, index) {
                            role.style.display = 'block'; // Or 'flex' depending on layout
                            // Add animation class
                            role.classList.add('fade-in-up');
                            // Stagger the animation
                            role.style.animationDelay = (index * 0.1) + 's';
                        });
                        // this.parentElement.style.display = 'none'; // Hide the button container

                        // Refresh AOS if used elsewhere to ensure layout recalculations map correctly
                        if (typeof AOS !== 'undefined') {
                            setTimeout(() => { AOS.refresh(); }, 100);
                        }
                    }, 800); // 800ms delay
                });
            }
        });
    </script>

    <!-- Tech Stack -->
    <section class="ht-section bg-light" style="height: auto; padding-bottom: 80px;">
        <div class="container-fluid">
            <h2 class="section-title center-text mb-40">Our <span class="text-blue">Tech Stack</span></h2>
        </div>
        <div class="container-fluid p-0">
            <div class="tech-logos-grid" data-aos="fade-left">
                <!-- Row 1 -->
                <!-- Tech Marquee Row 1 (LTR) -->
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

                <!-- Tech Marquee Row 2 (RTL) -->
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

                <!-- Tech Marquee Row 3 (LTR) -->
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

    <!-- Clients Section -->
    <section class="ht-section clients-section" style="height: auto; padding: 60px 0; overflow: hidden;">
        <div class="container-fluid">
            <div class="row items-center">
                <!-- Left Column: Text -->
                <div class="col-md-4 col-sm-12" data-aos="fade-right">
                    <h2 class="section-title mb-20 text-white">Clients</h2>
                    <p class="text-white mb-30" style="line-height: 1.8; opacity: 0.9;">
                        We partner with businesses, corporations, service providers, and government agencies that rely
                        on our technology every day. Trusted by leading organizations, we deliver reliable, scalable,
                        and secure solutions.
                    </p>
                </div>

                <!-- Right Column: Marquees -->
                <div class="col-md-8 col-sm-12" data-aos="fade-left">
                    <!-- Marquee Row 1 (Left to Right / RTL: true) -->
                    <div class="marquee-fader marquee-fader-dark-blue" style="width: 100%;">
                        <div id="clients-marquee-1" class="owl-carousel owl-theme" style="margin-bottom: 5px;"
                            dir="rtl">
                            <div class="client-box-marquee"><img
                                    src="<?= base_url('hire_talent_media/clients/Group.png') ?>"></div>
                            <div class="client-box-marquee"><img
                                    src="<?= base_url('hire_talent_media/clients/Group-1.png') ?>"></div>
                            <div class="client-box-marquee"><img
                                    src="<?= base_url('hire_talent_media/clients/Group-2.png') ?>"></div>
                            <div class="client-box-marquee"><img
                                    src="<?= base_url('hire_talent_media/clients/Group-3.png') ?>"></div>
                            <div class="client-box-marquee"><img
                                    src="<?= base_url('hire_talent_media/clients/Group-4.png') ?>"></div>
                            <div class="client-box-marquee"><img
                                    src="<?= base_url('hire_talent_media/clients/Group-5.png') ?>"></div>
                            <div class="client-box-marquee"><img
                                    src="<?= base_url('hire_talent_media/clients/Group-6.png') ?>"></div>
                        </div>
                    </div>

                    <!-- Marquee Row 2 (Right to Left / Default) -->
                    <div class="marquee-fader marquee-fader-dark-blue" style="width: 100%;">
                        <div id="clients-marquee-2" class="owl-carousel owl-theme" style="margin-bottom: 5px;">
                            <div class="client-box-marquee"><img
                                    src="<?= base_url('hire_talent_media/clients/Group-7.png') ?>"></div>
                            <div class="client-box-marquee"><img
                                    src="<?= base_url('hire_talent_media/clients/Group-8.png') ?>"></div>
                            <div class="client-box-marquee"><img
                                    src="<?= base_url('hire_talent_media/clients/Group-9.png') ?>"></div>
                            <div class="client-box-marquee"><img
                                    src="<?= base_url('hire_talent_media/clients/Group-10.png') ?>"></div>
                            <div class="client-box-marquee"><img
                                    src="<?= base_url('hire_talent_media/clients/Group-11.png') ?>"></div>
                            <div class="client-box-marquee"><img
                                    src="<?= base_url('hire_talent_media/clients/Group-12.png') ?>"></div>
                            <div class="client-box-marquee"><img
                                    src="<?= base_url('hire_talent_media/clients/Rectangle.png') ?>"></div>
                        </div>
                    </div>

                    <!-- Marquee Row 3 (Left to Right / RTL: true) -->
                    <div class="marquee-fader marquee-fader-dark-blue" style="width: 100%;">
                        <div id="clients-marquee-3" class="owl-carousel owl-theme" style="margin-bottom: 5px;"
                            dir="rtl">
                            <div class="client-box-marquee"><img
                                    src="<?= base_url('hire_talent_media/clients/XMLID_79_.png') ?>"></div>
                            <div class="client-box-marquee"><img
                                    src="<?= base_url('hire_talent_media/clients/XMLID_117_.png') ?>"></div>
                            <div class="client-box-marquee"><img
                                    src="<?= base_url('hire_talent_media/clients/XMLID_120_.png') ?>"></div>
                            <div class="client-box-marquee"><img
                                    src="<?= base_url('hire_talent_media/clients/XMLID_197_.png') ?>"></div>
                            <div class="client-box-marquee"><img
                                    src="<?= base_url('hire_talent_media/clients/XMLID_198_.png') ?>"></div>
                            <div class="client-box-marquee"><img
                                    src="<?= base_url('hire_talent_media/clients/XMLID_199_.png') ?>"></div>
                            <div class="client-box-marquee"><img
                                    src="<?= base_url('hire_talent_media/clients/Group.png') ?>"></div>
                        </div>
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
                        <img src="<?= base_url('hire_talent_media/clients/Group-1.png') ?>" alt="Award Logo">
                        <!-- Placeholder -->
                    </div>
                    <h4>World Summit Information Society (WSIS) Prize</h4>
                    <p>About 4.2 crore Holding data, 11+ crore holdingowner data stored in the system. Citizen paying
                        their LD Tax through the system and every day a good amount of revenue automatically received by
                        Bangladesh bank.</p>
                </div>
                <div class="award-card hover-lift" data-aos="fade-up">
                    <div class="award-icon-box">
                        <img src="<?= base_url('hire_talent_media/clients/Group-2.png') ?>" alt="Award Logo">
                        <!-- Placeholder -->
                    </div>
                    <h4>Digital Bangladesh Award 2022 For LD Tax</h4>
                    <p>About 4.2 crore Holding data, 11+ crore holdingowner data stored in the system. Citizen paying
                        their LD Tax through the system and every day a good amount of revenue automatically received by
                        Bangladesh bank.</p>
                </div>
                <div class="award-card hover-lift" data-aos="fade-up">
                    <div class="award-icon-box">
                        <img src="<?= base_url('hire_talent_media/clients/Group-2.png') ?>" alt="Award Logo">
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

    <!-- Client Testimonials -->
    <section class="ht-section testimonials-section"
        style="height: auto;  padding-bottom: 50px; background-color: #002b49;">
        <div class="container-fluid">
            <h2 class="section-title text-white center-text mb-40">Client Testimonials</h2>

            <div class="testimonials-carousel owl-carousel owl-theme">
                <!-- Card 1 -->
                <div class="testimonial-card hover-lift" data-aos="fade-up" data-aos-delay="0">
                    <div class="test-header">
                        <div class="test-avatar"><img src="<?= base_url('hire_talent_media/clients/Group-1.png') ?>">
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
                        <div class="test-avatar"><img src="<?= base_url('hire_talent_media/clients/Group-5.png') ?>">
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
                        <div class="test-avatar"><img src="<?= base_url('hire_talent_media/clients/Group-1.png') ?>">
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
                        <div class="test-avatar"><img src="<?= base_url('hire_talent_media/clients/Group-1.png') ?>">
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

    <!-- Get in Touch Section -->
    <section id="contact-section" class="ht-section contact-section-wrapper"
        style="height: auto; padding: 60px 0 100px 0; background: #fff;">
        <div class="container-fluid">
            <div class="contact-card hover-lift" data-aos="fade-up">
                <div class="row no-gutters">
                    <!-- Left Info Column -->
                    <div class="col-md-5 col-sm-12 contact-info-side">
                        <h3 class="text-white mb-20 " style="font-weight: 700;">Let’s Talk About Your Business?</h3>
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
                        <h3 class="mb-20" style="font-weight: 700; color: #000;">Get in Touch</h3>
                        <p class="mb-30" style="font-size: 13px; color: #666; line-height: 1.6;">
                            Have a project in mind or need the right tech team? Reach out to us and our experts will get back to you shortly.
                        </p>

                        <form id="contactForm" action="#" method="post">
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
                                <div class="col-md-4 col-sm-12 form-group select-wrapper">
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
                                    <i class="fa fa-chevron-down select-icon"></i>
                                </div>
                                <div class="col-md-4 col-sm-12 form-group select-wrapper">
                                    <label>Select Service <span class="text-danger">*</span></label>
                                    <select class="form-control form-control-custom" name="service">
                                        <option value="">Select a service</option>
                                        <option value="Full Stack Developer">Full Stack Developer</option>
                                        <option value="AI/ML Engineers">AI/ML Engineers</option>
                                        <option value="Data Analysts">Data Analysts</option>
                                        <option value="End-to-End Software Development">End-to-End Software Development
                                        </option>
                                        <option value="Sales & Support Staff">Sales & Support Staff</option>
                                        <option value="Back Office Management">Back Office Management</option>
                                        <option value="Other">Other</option>
                                    </select>
                                    <i class="fa fa-chevron-down select-icon"></i>
                                </div>
                                <div class="col-md-4 col-sm-12 form-group select-wrapper">
                                    <label>Select Budget Range <span class="text-danger">*</span></label>
                                    <select class="form-control form-control-custom" name="budget">
                                        <option value="">Select a budget range</option>
                                        <option value="$1,000 - $5,000">$1,000 - $5,000</option>
                                        <option value="$5,000 - $10,000">$5,000 - $10,000</option>
                                        <option value="$10,000 - $25,000">$10,000 - $25,000</option>
                                        <option value="$25,000 - $50,000">$25,000 - $50,000</option>
                                        <option value="$50,000 - $100,000">$50,000 - $100,000</option>
                                        <option value="$100,000+">$100,000+</option>
                                    </select>
                                    <i class="fa fa-chevron-down select-icon"></i>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Project details <span class="text-danger">*</span></label>
                                <textarea class="form-control form-control-custom" rows="4"
                                    placeholder="Tell us about your project or talent needs..."></textarea>
                            </div>

                            <button type="submit" class="btn btn-block btn-submit" id="submitBtn">
                                <span id="btnText">Send Inquiry <i class="fa fa-paper-plane"></i></span>
                                <span id="btnLoader" style="display: none;">
                                    <i class="fa fa-spinner fa-spin"></i> Sending...
                                </span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>



</div>
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




<!-- Typewriter JS -->
<script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
<!-- jQuery (Required for Owl Carousel) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- Owl Carousel JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<!-- AOS Animation JS -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Initialize AOS
        AOS.init({
            duration: 800, // Animation duration
            offset: 100, // Offset (in px) from the original trigger point
            once: false, // Whether animation should happen only once - while scrolling down
            easing: 'ease-out-cubic', // Easing function
        });

        var typed = new Typed('#hero-typewriter', {
            strings: ['Own delivery.'],
            typeSpeed: 50,
            backSpeed: 50,
            startDelay: 500,
            loop: true,
            showCursor: true,
            contentType: 'html'
        });
    });

    $(document).ready(function () {
        // Marquee Row 1 (RTL: True -> Moves Left to Right? actually RTL usually moves Right to Left content-wise, 
        // but let's stick to standard behavior: RTL makes items flow from right.
        // User requested: "first row dandike (right), 2nd row badike (left), 3rd row dandike (right)"
        // In Owl Carousel, 'rtl: true' often changes the direction of flow. Let's try it.
        $("#clients-marquee-1").owlCarousel({
            loop: true,
            margin: 5,
            nav: false,
            dots: false,
            autoplay: true,
            slideTransition: 'linear',
            autoplayTimeout: 3000,
            autoplaySpeed: 3000,
            smartSpeed: 3000,
            autoplayHoverPause: false,
            rtl: true, // Moves items towards Right (usually)
            responsive: {
                0: { items: 3 },
                600: { items: 5 },
                1000: { items: 7 }
            }
        });

        // Marquee Row 2 (Standard -> Moves Left)
        $("#clients-marquee-2").owlCarousel({
            loop: true,
            margin: 5,
            nav: false,
            dots: false,
            autoplay: true,
            slideTransition: 'linear',
            autoplayTimeout: 3000,
            autoplaySpeed: 3000,
            smartSpeed: 3000,
            autoplayHoverPause: false,
            rtl: false, // Standard direction
            responsive: {
                0: { items: 3 },
                600: { items: 5 },
                1000: { items: 7 }
            }
        });

        // Marquee Row 3 (RTL: True -> Moves Right)
        $("#clients-marquee-3").owlCarousel({
            loop: true,
            margin: 5,
            nav: false,
            dots: false,
            autoplay: true,
            slideTransition: 'linear',
            autoplayTimeout: 3000,
            autoplaySpeed: 3000,
            smartSpeed: 3000,
            autoplayHoverPause: false,
            rtl: true, // Moves items towards Right
            responsive: {
                0: { items: 3 },
                600: { items: 5 },
                1000: { items: 7 }
            }
        });

        // Testimonials Carousel
        $(".testimonials-carousel").owlCarousel({
            loop: true,
            margin: 20,
            nav: false,
            dots: true,
            autoplay: true,
            autoplayTimeout: 5000,
            responsive: {
                0: { items: 1 },
                768: { items: 2 },
                992: { items: 4 }
            }
        });

        // Certifications Carousel
        $(".certifications-carousel").owlCarousel({
            loop: true,
            margin: 50,
            nav: false,
            dots: true,
            autoplay: true,
            autoplayTimeout: 2500,
            autoWidth: true, // Allow logos to have natural width
            center: true, // Center active item
            responsive: {
                0: { items: 2, margin: 20 },
                600: { items: 4, margin: 30 },
                1000: { items: 6, margin: 50 }
            }
        });
        // Tech Stack Marquee Row 1 (RTL: True -> Moves Left to Right - aligned with request)
        $("#tech-marquee-1").owlCarousel({
            loop: true,
            margin: 30, // Good spacing for icons
            nav: false,
            dots: false,
            autoplay: true,
            slideTransition: 'linear',
            autoplayTimeout: 3000,
            autoplaySpeed: 3000,
            smartSpeed: 3000,
            autoplayHoverPause: false,
            rtl: true,
            responsive: {
                0: { items: 4 },
                600: { items: 6 },
                1000: { items: 8 }
            }
        });

        // Tech Stack Marquee Row 2 (Standard -> Moves Right to Left)
        $("#tech-marquee-2").owlCarousel({
            loop: true,
            margin: 30,
            nav: false,
            dots: false,
            autoplay: true,
            slideTransition: 'linear',
            autoplayTimeout: 3000,
            autoplaySpeed: 3000,
            smartSpeed: 3000,
            autoplayHoverPause: false,
            rtl: false,
            responsive: {
                0: { items: 4 },
                600: { items: 6 },
                1000: { items: 8 }
            }
        });

        // Tech Stack Marquee Row 3 (RTL: True -> Moves Left to Right)
        $("#tech-marquee-3").owlCarousel({
            loop: true,
            margin: 30,
            nav: false,
            dots: false,
            autoplay: true,
            slideTransition: 'linear',
            autoplayTimeout: 3000,
            autoplaySpeed: 3000,
            smartSpeed: 3000,
            autoplayHoverPause: false,
            rtl: true,
            responsive: {
                0: { items: 4 },
                600: { items: 6 },
                1000: { items: 8 }
            }
        });

        // Smooth Scroll for Navigation Links
        $('.scroll-link').on('click', function (e) {
            e.preventDefault();
            var target = $(this).attr('href');
            if ($(target).length) {
                $('html, body').animate({
                    scrollTop: $(target).offset().top - 80
                }, 800, 'swing');
            }
        });

        // Form Submission with Loader
        $('#contactForm').on('submit', function (e) {
            e.preventDefault();

            // Show loader
            $('#btnText').hide();
            $('#btnLoader').show();
            $('#submitBtn').prop('disabled', true);

            // Simulate form submission (replace with actual AJAX call)
            setTimeout(function () {
                // Here you would normally submit the form via AJAX
                // For now, we'sll just reset after 2 seconds

                // Hide loader
                $('#btnLoader').hide();
                $('#btnText').show();
                $('#submitBtn').prop('disabled', false);

                // Show success message or handle form submission
                alert('Form submitted successfully!');

                // Optionally reset the form
                // $('#contactForm')[0].reset();
            }, 2000);
        });
    // Floating CTA Button - Text Rotation
        const btnTexts = ['Hire Devs In 24H', 'Get CV In 24H', 'Book Call', 'Free Call'];
        let currentTextIndex = 0;

        // Rotate button text every 3 seconds
        setInterval(function() {
            currentTextIndex = (currentTextIndex + 1) % btnTexts.length;
            $('#floatingBtnText').fadeOut(300, function() {
                $(this).text(btnTexts[currentTextIndex]).fadeIn(300);
            });
        }, 3000);

        // Show/Hide Floating Button on Scroll
        $(window).on('scroll', function() {
            var scrollTop = $(window).scrollTop();
            var firstSectionHeight = $('.ht-hero-section').outerHeight();
            
            if (scrollTop > firstSectionHeight) {
                $('.floating-cta-btn').addClass('show');
            } else {
                $('.floating-cta-btn').removeClass('show');
            }
        });
    });

</script>