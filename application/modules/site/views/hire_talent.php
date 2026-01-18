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
        font-size: 4rem !important;
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
        color: #666;
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



    .bubble strong {
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
        border-color: #9c27b0;
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
    }

    .card-purple-light h4::after {
        background-color: #9c27b0;
    }

    .card-green-light h4::after {
        background-color: #4caf50;
    }

    .card-orange-light h4::after {
        background-color: #ff9800;
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
        /* Light blue header */
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
        filter: grayscale(100%);
        opacity: 0.7;
        transition: 0.3s;
    }

    .cert-logo:hover {
        filter: grayscale(0%);
        opacity: 1;
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
            grid-column: span 2;
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
        font-size: 17px;
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

    /* Why Mysoftheaven Section */
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
        color: #666;
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
    }

    .why-img-bottom_left {
        height: 294px;
        top: 52%;
        position: absolute;
    }

    .why-img-bottom_right {
        height: 294px;
        top: 63%;
        right: 10%;
        position: absolute;
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
        padding-right: 50px;
        padding-left: 50px;
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

        /* Why Mysoftheaven Responsive */
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
        }

        .hero-btns {
            justify-content: center;
        }

        /* Grids to 1 Column */
        .process-grid,
        .awards-grid,
        .roles-grid,
        .ft-grid,
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
</style>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">


<!-- Hire Talent Page Content - Exact Replica -->
<div class="ht-main-wrapper">

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
                        <a href="<?= base_url('contact-us') ?>" class="btn-custom btn-none"
                            style="font-family: 'Nourd-Bold';font-weight: 500;font-size: 18px;line-height: 150%;">Explore
                            Roles</a>
                        <a href="<?= base_url('request-quotation') ?>" class="btn-custom btn-blue"
                            style="font-family: 'Nourd-Bold';font-weight: 500;font-size: 18px;line-height: 150%;">Get in
                            Touch <i class="fa fa-arrow-right"></i> </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 relative" data-aos="fade-left">
                    <div class="bubble-container">
                        <div class="bubble-1">
                            <div class="bubble hover-lift">
                                <strong class="hero_bobble_number">
                                    2M+
                                </strong>
                                <span class="hero_bobble_text">Customers</span>
                            </div>
                        </div>
                        <div class="bubble-2">
                            <div class="bubble hover-lift">
                                <strong class="hero_bobble_number">
                                    20+
                                </strong>
                                <span class="hero_bobble_text">Countries</span>
                            </div>
                        </div>
                        <div class="bubble-3">
                            <div class="bubble hover-lift">
                                <strong class="hero_bobble_number">
                                    35k+
                                </strong>
                                <span class="hero_bobble_text"> Dealer Network</span>
                            </div>
                        </div>
                        <div class="bubble-4">
                            <div class="bubble hover-lift">
                                <strong class="hero_bobble_number">
                                    15+
                                </strong>
                                <span class="hero_bobble_text">Years of Innovation</span>
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
                            <img src="<?= base_url('hire_talent_media/rectangle_6752.png') ?>" class="ft-img">
                        </div>
                        <div class="ft-item pink-box hover-lift" data-aos="fade-down" data-aos-delay="200">
                            <strong>120+</strong>
                            <span>Professionals</span>
                        </div>
                        <div class="ft-item hover-lift" data-aos="fade-left" data-aos-delay="300">
                            <img src="<?= base_url('hire_talent_media/rectangle_6754.png') ?>" class="ft-img">
                        </div>

                        <!-- Row 2 -->
                        <div class="ft-item blue-box hover-lift" data-aos="fade-right" data-aos-delay="150">
                            <i class="fa fa-users"></i>
                        </div>
                        <div class="ft-item hover-lift" data-aos="zoom-in" data-aos-delay="250">
                            <img src="<?= base_url('hire_talent_media/rectangle_6729.png') ?>" class="ft-img">
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
    <!-- Why Mysoftheaven -->
    <section class="ht-section why-mysoftheaven-section" style="min-height: 713px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="why-images-wrapper">
                        <img src="<?= base_url('hire_talent_media/rectangle_6729.png') ?>" alt="Team Meeting"
                            class="why-img-top" data-aos="fade-down">
                        <img src="<?= base_url('hire_talent_media/rectangle_6730.png') ?>" alt="Office Space"
                            class="why-img-bottom_left" data-aos="fade-right" data-aos-delay="100">
                        <img src="<?= base_url('hire_talent_media/rectangle_6731.png') ?>" alt="Office Space"
                            class="why-img-bottom_right" data-aos="fade-left" data-aos-delay="200">
                    </div>
                </div>
                <div class="col-md-6 col-sm-12" data-aos="fade-left">
                    <h2 class="why-mysoftheaven-title">Why <span class="text-blue">Mysoft heaven</span></h2>
                    <p class="why-mysoftheaven-subtitle">Trusted. Experienced. Ready to deliver.</p>
                    <p class="why-description">
                        For 15+ years, MySoftheaven has built mission-critical systems for governments, enterprises, and
                        fast-growing businesses—handling millions of records and high transaction volumes without
                        missing a beat. With 1,000+ clients and 2,500+ successful projects across finance, retail,
                        manufacturing, NGOs, and e-governance, we know how to deliver complex, always-on software that
                        organizations rely on every day.
                    </p>
                    <p class="why-description">
                        Through our proven IT staff augmentation model, we connect you with top global talent who
                        seamlessly integrate into your team. Whether you need a senior developer, AI specialist, or full
                        remote squad, your augmented team works under your guidance, backed by MySoftheaven's QA
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
            <h2 class="section-title center-text mb-20">Engagement <span class="text-black">Models</span></h2>
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
                                <i class="fa fa-clock-o text-green-dark"></i>
                            </div>
                            <span class="eng-text">Full time resource contracted monthly for sustained product
                                work</span>
                        </li>
                        <li class="hover-lift">
                            <div class="icon-box bg-blue-light">
                                <i class="fa fa-hourglass-half text-blue-dark"></i>
                            </div>
                            <span class="eng-text">Part time or hourly for advisory tasks and short lived
                                features</span>
                        </li>
                        <li class="hover-lift">
                            <div class="icon-box bg-purple-light">
                                <i class="fa fa-users text-purple-dark"></i>
                            </div>
                            <span class="eng-text">Fixed team for a group of resources working continuously with your
                                squads</span>
                        </li>
                        <li class="hover-lift">
                            <div class="icon-box bg-orange-light">
                                <i class="fa fa-file-text-o text-orange-dark"></i>
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
    <section class="ht-section roles-section-bg" style="min-height:1040px;">
        <div class="container-fluid">
            <h2 class="section-title center-text mb-20">Roles <span class="text-blue">We Provide</span></h2>
            <p class="center-text mb-50 roles-subtitle">
                Mysoftheaven (BD) Ltd. connects you with top IT professionals across software, cloud, data, security,
                and niche engineering domains. Each role integrates seamlessly into your team to accelerate delivery and
                maintain quality.
            </p>

            <div class="roles-grid">
                <!-- Row 1 -->
                <div class="role-card hover-lift" data-aos="fade-up">
                    <div class="role-img-wrapper"><img src="<?= base_url('hire_talent_media/role1.png') ?>"
                            class="role-img-new"></div>
                    <div class="role-content">
                        <h4>Software Engineers</h4>
                        <p>Build scalable systems and APIs that meet your technical standards. Deliver production-ready
                            solutions that integrate smoothly into your workflows and drive business results.</p>
                    </div>
                </div>
                <div class="role-card hover-lift" data-aos="fade-up">
                    <div class="role-img-wrapper"><img src="<?= base_url('hire_talent_media/role2.png') ?>"
                            class="role-img-new"></div>
                    <div class="role-content">
                        <h4>Web Developers</h4>
                        <p>Build scalable systems and APIs that meet your technical standards. Deliver production-ready
                            solutions that integrate smoothly into your workflows and drive business results.</p>
                    </div>
                </div>
                <div class="role-card hover-lift" data-aos="fade-up">
                    <div class="role-img-wrapper"><img src="<?= base_url('hire_talent_media/role1.png') ?>"
                            class="role-img-new"></div>
                    <div class="role-content">
                        <h4>Application Developers</h4>
                        <p>Build scalable systems and APIs that meet your technical standards. Deliver production-ready
                            solutions that integrate smoothly into your workflows and drive business results.</p>
                    </div>
                </div>
                <div class="role-card hover-lift" data-aos="fade-up">
                    <div class="role-img-wrapper"><img src="<?= base_url('hire_talent_media/role2.png') ?>"
                            class="role-img-new"></div>
                    <div class="role-content">
                        <h4>DevOps Engineers</h4>
                        <p>Build scalable systems and APIs that meet your technical standards. Deliver production-ready
                            solutions that integrate smoothly into your workflows and drive business results.</p>
                    </div>
                </div>

                <!-- Row 2 -->
                <div class="role-card hover-lift" data-aos="fade-up">
                    <div class="role-img-wrapper"><img src="<?= base_url('hire_talent_media/role1.png') ?>"
                            class="role-img-new"></div>
                    <div class="role-content">
                        <h4>Software Engineers</h4>
                        <p>Build scalable systems and APIs that meet your technical standards. Deliver production-ready
                            solutions that integrate smoothly into your workflows and drive business results.</p>
                    </div>
                </div>
                <div class="role-card hover-lift" data-aos="fade-up">
                    <div class="role-img-wrapper"><img src="<?= base_url('hire_talent_media/role2.png') ?>"
                            class="role-img-new"></div>
                    <div class="role-content">
                        <h4>Web Developers</h4>
                        <p>Build scalable systems and APIs that meet your technical standards. Deliver production-ready
                            solutions that integrate smoothly into your workflows and drive business results.</p>
                    </div>
                </div>
                <div class="role-card hover-lift" data-aos="fade-up">
                    <div class="role-img-wrapper"><img src="<?= base_url('hire_talent_media/role1.png') ?>"
                            class="role-img-new"></div>
                    <div class="role-content">
                        <h4>Application Developers</h4>
                        <p>Build scalable systems and APIs that meet your technical standards. Deliver production-ready
                            solutions that integrate smoothly into your workflows and drive business results.</p>
                    </div>
                </div>
                <div class="role-card hover-lift" data-aos="fade-up">
                    <div class="role-img-wrapper"><img src="<?= base_url('hire_talent_media/role2.png') ?>"
                            class="role-img-new"></div>
                    <div class="role-content">
                        <h4>DevOps Engineers</h4>
                        <p>Build scalable systems and APIs that meet your technical standards. Deliver production-ready
                            solutions that integrate smoothly into your workflows and drive business results.</p>
                    </div>
                </div>
            </div>
            <div class="center-text mt-5">
                <a href="<?= base_url('contact-us') ?>" class="btn-custom btn-outline-blue">Explore More Roles</a>
            </div>
        </div>
    </section>

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
    <section class="ht-section clients-section"
        style="height: auto; min-height: 500px; padding: 60px 0; overflow: hidden;">
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
                Recognized nationally and globally, Mysoftheaven (BD) Ltd. has earned top awards from the Bangladesh
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
        style="height: auto; padding-top: 100px; padding-bottom: 50px; background-color: #002b49;">
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

    <!-- Get in Touch Section -->
    <section class="ht-section contact-section-wrapper"
        style="height: auto; padding: 60px 0 100px 0; background: #fff;">
        <div class="container-fluid">
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
            dots: false,
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
    });
</script>