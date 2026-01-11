<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@300..700&family=Nabla&display=swap"
    rel="stylesheet">


<!-- Devicon for logos -->
<!-- Devicon for logos -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css">
<!-- Owl Carousel CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
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
        overflow-x: hidden; /* Prevent horizontal scroll */
        width: 100%;
        position: relative;
    }

.ht-section {
    height: 492px;
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
        padding-top: 80px; /* Increased space for higher arcs */
    }

    .process-card {
        padding: 30px 20px;
        border-radius: 15px;
        text-align: left;
        position: relative;
        z-index: 1;
    }

    /* Dashed Connecting Lines (Desktop) */
    /* Dashed Connecting Lines (Grid aligned) */
    @media (min-width: 992px) {
        .process-card:not(:last-child)::after {
            content: '';
            position: absolute;
            top: -80px; /* Higher peak */
            left: 50%; 
            width: calc(100% + 20px); 
            height: 90px; /* Taller height for rounder arc */
            border: 3px dashed #B3E5FC;
            border-bottom: none;
            border-left: 3px dashed #B3E5FC;
            border-right: 3px dashed #B3E5FC;
            border-radius: 50% 50% 0 0 / 100% 100% 0 0; /* Elliptical radius for steeper arch */
            z-index: -1; 
            pointer-events: none;
        }

        /* Triangle Arrowhead at destination */
        .process-card:not(:last-child)::before {
            content: '';
            position: absolute;
            top: 2px; /* Landing on top of next card */
            left: calc(150% + 20px); /* Center of next card */
            width: 0;
            height: 0;
            border-left: 8px solid transparent;
            border-right: 8px solid transparent;
            border-top: 12px solid #B3E5FC; /* Points Down */
            transform: translateX(-50%); /* Center the arrow */
            z-index: 0;
        }
        
        /* Adjust arc shapes */
        /* To simulate the "jump" correctly, we need the arc to look like it lands. 
           With border-left/right/top and radius, it creates a semi-circle.
           This works perfectly for center-to-center. */

        /* Specific Colors */
        .process-card:nth-child(1)::after { border-color: #bbdefb; }
        .process-card:nth-child(2)::after { border-color: #e1bee7; }
        .process-card:nth-child(3)::after { border-color: #b2dfdb; }

        .process-card:nth-child(1)::before { border-top-color: #bbdefb; }
        .process-card:nth-child(2)::before { border-top-color: #e1bee7; }
        .process-card:nth-child(3)::before { border-top-color: #b2dfdb; }

        /* Stacking Order: Ensure previous cards constitute layers ABOVE next cards 
           so the arrow (child of previous) shows on top of next. */
        .process-card:nth-child(1) { z-index: 4; }
        .process-card:nth-child(2) { z-index: 3; }
        .process-card:nth-child(3) { z-index: 2; }
        .process-card:nth-child(4) { z-index: 1; }
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
        border: 2px solid transparent; /* Prepare for border transition */
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
        transition: transform 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275); /* Bouncy transition */
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
    .card-blue-light:hover h4 { color: #2196f3 !important; }

    .card-purple-light:hover { 
        border-color: #9c27b0; 
        background: #fff;
    }
    .card-purple-light:hover h4 { color: #9c27b0 !important; }

    .card-green-light:hover { 
        border-color: #4caf50; 
        background: #fff;
    }
    .card-green-light:hover h4 { color: #4caf50 !important; }

    .card-orange-light:hover { 
        border-color: #ff9800; 
        background: #fff;
    }
    .card-orange-light:hover h4 { color: #ff9800 !important; }

    .bg-blue { background: #039BE5; }
    .bg-purple { background: #E91E63; }
    .bg-green { background: #00897B; }
    .bg-orange { background: #FF7043; }

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

    .card-blue-light h4::after { background-color: #2196f3; }
    .card-purple-light h4::after { background-color: #9c27b0; }
    .card-green-light h4::after { background-color: #4caf50; }
    .card-orange-light h4::after { background-color: #ff9800; }

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
        box-shadow: 0 4px 15px rgba(0,0,0,0.05);
        transition: transform 0.3s ease;
        text-align: left;
    }

    .role-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.1);
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
        border-bottom: none; /* Reset existing style */
    }
    
    .role-card h4::after {
        display: none; /* Remove the underline from previous generic card styles */
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
            grid-template-columns: repeat(1, 1fr); /* 1 column on mobile */
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
        font-size: 100px; /* Base size */
        transition: transform 0.3s ease;
    }

    /* Specific sizing adjustments to match visual balance from image */
    .devicon-nodejs-plain-wordmark { font-size: 70px !important; }
    .devicon-mysql-plain-wordmark { font-size: 70px !important; }
    .devicon-microsoftsqlserver-plain-wordmark { font-size: 70px !important; }
    .devicon-kubernetes-plain-wordmark { font-size: 70px !important; }
    .devicon-docker-plain-wordmark { font-size: 70px !important; }
    .devicon-amazonwebservices-plain-wordmark { font-size: 70px !important; }
    .devicon-laravel-plain-wordmark { font-size: 70px !important; }
    .devicon-mongodb-plain-wordmark { font-size: 70px !important; }
    .devicon-apachekafka-original-wordmark { font-size: 70px !important; }

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
        will-change: transform; /* Performance optimization */
    }
    
    .hover-lift:hover {
        transform: translateY(-10px) scale(1.02); /* Lift and Zoom */
        box-shadow: 0 15px 30px rgba(0,0,0,0.15); /* Strong shadow */
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
        font-size: 60px; /* Default size for all tech icons */
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
        background: #fff; /* White background */
        border: 1px solid #eee; /* Light border used in original design */
        padding: 10px;
        margin-right: 1px; /* Slight separation if needed, or rely on Owl carousel margin */
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
        background: #002b49;
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
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        transition: transform 0.3s ease;
    }

    .award-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.1);
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
        background: #bae6fd; /* Light blue header */
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
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
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
        box-shadow: 0 10px 40px rgba(0,0,0,0.1);
        border-radius: 12px;
        overflow: hidden;
        margin-top: -80px; /* Stronger overlap */
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
        border-radius: 8px; /* Softer, more modern radius */
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

        .bubble {
            width: 80px;
            height: 80px;
        }

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
        height: auto; /* Allow auto height to maintain aspect ratio */
        max-width: 100%; /* Ensure it doesn't overflow */
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
    .bg-green-light { background-color: #E8F5E9; }
    .text-green-dark { color: #2E7D32; }

    .bg-blue-light { background-color: #E3F2FD; }
    .text-blue-dark { color: #1565C0; }

    .bg-purple-light { background-color: #F3E5F5; }
    .text-purple-dark { color: #7B1FA2; }

    .bg-orange-light { background-color: #FBE9E7; }
    .text-orange-dark { color: #D84315; }

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
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
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

</style>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">


<!-- Hire Talent Page Content - Exact Replica -->
<div class="ht-main-wrapper">

    <!-- Hero Section -->
    <section class="ht-section ht-hero-section">
        <div class="container">
            <div class="row items-center">
                <div class="col-md-8 col-sm-12" data-aos="fade-right">
                    <h1 class="hero-title">Scale faster. <span style="color: #FC6000;">Build smarter.</span><br><span
                            class="text-blue" id="hero-typewriter"></span></h1>
                    <p class="hero-desc" data-aos="fade-up" data-aos-delay="200">
                        When speed, quality, and control matter you cannot wait for traditional hiring cycles. MySoft  Heaven delivers vetted global IT professionals who join your team and begin contributing  from day one. You run the roadmap. We deliver the talent.
                    </p>
                    <div class="hero-btns" data-aos="fade-up" data-aos-delay="400">
                        <a href="<?= base_url('contact-us') ?>" class="btn-custom btn-none" style="font-family: 'Nourd-Bold';font-weight: 500;font-size: 18px;line-height: 150%;">Explore Roles</a>
                        <a href="<?= base_url('request-quotation') ?>" class="btn-custom btn-blue" style="font-family: 'Nourd-Bold';font-weight: 500;font-size: 18px;line-height: 150%;">Get in Touch <i class="fa fa-arrow-right"></i> </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 relative" data-aos="fade-left">
                    <div class="bubble-container">
                        <div class="bubble-1" >
                            <div class="bubble hover-lift">
                                <strong class="hero_bobble_number"><svg width="66" height="43" viewBox="0 0 66 43"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M6.96003 29.2V36.4L17.32 30.4V34.4L3.48003 42.4V31.2C3.48003 30.48 3.64003 29.7333 3.96003 28.96C4.28003 28.16 4.7067 27.4267 5.24003 26.76C5.77336 26.0667 6.3467 25.5467 6.96003 25.2L13.88 21.2V12.8L6.96003 16.8V20L3.48003 22V18.8C3.48003 18.08 3.64003 17.3333 3.96003 16.56C4.28003 15.76 4.7067 15.0267 5.24003 14.36C5.77336 13.6667 6.3467 13.1467 6.96003 12.8L13.88 8.79999C14.7867 8.26666 15.5867 8.19999 16.28 8.59999C16.9734 8.99999 17.32 9.73333 17.32 10.8V19.2C17.32 19.8933 17.16 20.64 16.84 21.44C16.52 22.24 16.0934 22.9867 15.56 23.68C15.0534 24.3467 14.4934 24.8533 13.88 25.2L6.96003 29.2ZM13.88 12.8V21.2L10.4 19.2V10.8L13.88 12.8ZM17.32 30.4L6.96003 36.4L3.48003 34.4L13.88 28.4L17.32 30.4ZM13.88 21.2L6.96003 25.2C6.3467 25.5467 5.77336 26.0667 5.24003 26.76C4.7067 27.4267 4.28003 28.16 3.96003 28.96C3.64003 29.7333 3.48003 30.48 3.48003 31.2V42.4L2.93553e-05 40.4V29.2C2.93553e-05 28.48 0.160029 27.7333 0.480029 26.96C0.800029 26.16 1.2267 25.4267 1.76003 24.76C2.29336 24.0667 2.8667 23.5467 3.48003 23.2L10.4 19.2L13.88 21.2ZM16.28 8.59999C15.5867 8.19999 14.7867 8.26666 13.88 8.79999L6.96003 12.8C6.3467 13.1467 5.77336 13.6667 5.24003 14.36C4.7067 15.0267 4.28003 15.76 3.96003 16.56C3.64003 17.3333 3.48003 18.08 3.48003 18.8V22L2.93553e-05 20V16.8C2.93553e-05 16.08 0.160029 15.3333 0.480029 14.56C0.800029 13.76 1.2267 13.0267 1.76003 12.36C2.29336 11.6667 2.8667 11.1467 3.48003 10.8L10.4 6.79999C11.3334 6.26666 12.1467 6.19999 12.84 6.59999L16.28 8.59999ZM27.7413 10.8L41.5813 2.79999C42.4879 2.26666 43.2879 2.19999 43.9813 2.59999C44.7013 2.99999 45.0613 3.73332 45.0613 4.79999V30.4L41.5813 32.4V6.79999L36.3813 9.79999V35.4L32.9013 37.4V11.8L27.7413 14.8V40.4L24.2613 42.4V16.8C24.2613 16.08 24.4213 15.3333 24.7413 14.56C25.0613 13.76 25.4879 13.0267 26.0213 12.36C26.5546 11.6667 27.1279 11.1467 27.7413 10.8ZM41.5813 6.79999V32.4L38.1013 30.4V4.79999L41.5813 6.79999ZM32.9013 11.8V37.4L29.4613 35.4V9.79999L32.9013 11.8ZM43.9813 2.59999C43.2879 2.19999 42.4879 2.26666 41.5813 2.79999L27.7413 10.8C27.1279 11.1467 26.5546 11.6667 26.0213 12.36C25.4879 13.0267 25.0613 13.76 24.7413 14.56C24.4213 15.3333 24.2613 16.08 24.2613 16.8V42.4L20.7813 40.4V14.8C20.7813 14.08 20.9413 13.3333 21.2613 12.56C21.5813 11.76 22.0079 11.0267 22.5413 10.36C23.0746 9.66666 23.6479 9.14666 24.2613 8.79999L38.1013 0.799991C39.0346 0.26666 39.8479 0.199993 40.5413 0.599991L43.9813 2.59999ZM51.9957 30.4L57.1957 27.4V21.4L60.6357 19.4V25.4L65.8357 22.4V26.4L60.6357 29.4V35.4L57.1957 37.4V31.4L51.9957 34.4V30.4ZM57.1957 31.4V37.4L53.7157 35.4V29.4L57.1957 31.4ZM65.8357 22.4L60.6357 25.4L57.1957 23.4L62.3957 20.4L65.8357 22.4ZM60.6357 19.4L57.1957 21.4L53.7157 19.4L57.1957 17.4L60.6357 19.4ZM57.1957 21.4V27.4L53.7157 25.4V19.4L57.1957 21.4ZM57.1957 27.4L51.9957 30.4L48.5157 28.4L53.7157 25.4L57.1957 27.4ZM51.9957 30.4V34.4L48.5157 32.4V28.4L51.9957 30.4Z"
                                            fill="#0177BC" />
                                    </svg>
                                </strong>
                                <span class="hero_bobble_text">Customers</span>
                            </div>
                        </div>
                        <div class="bubble-2">
                            <div class="bubble hover-lift">
                                <strong class="hero_bobble_number"><svg width="79" height="49" viewBox="0 0 79 49"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9.22195 30.74V40.28L22.9489 32.33V37.63L4.61095 48.23V33.39C4.61095 32.436 4.82295 31.4467 5.24695 30.422C5.67095 29.362 6.23628 28.3903 6.94295 27.507C7.64961 26.5883 8.40928 25.8993 9.22195 25.44L18.3909 20.14V9.01L9.22195 14.31V18.55L4.61095 21.2V16.96C4.61095 16.006 4.82295 15.0167 5.24695 13.992C5.67095 12.932 6.23628 11.9603 6.94295 11.077C7.64961 10.1583 8.40928 9.46933 9.22195 9.01L18.3909 3.71C19.5923 3.00333 20.6523 2.915 21.5709 3.445C22.4896 3.975 22.9489 4.94667 22.9489 6.36V17.49C22.9489 18.4087 22.7369 19.398 22.3129 20.458C21.8889 21.518 21.3236 22.5073 20.6169 23.426C19.9456 24.3093 19.2036 24.9807 18.3909 25.44L9.22195 30.74ZM18.3909 9.01V20.14L13.7799 17.49V6.36L18.3909 9.01ZM22.9489 32.33L9.22195 40.28L4.61095 37.63L18.3909 29.68L22.9489 32.33ZM18.3909 20.14L9.22195 25.44C8.40928 25.8993 7.64961 26.5883 6.94295 27.507C6.23628 28.3903 5.67095 29.362 5.24695 30.422C4.82295 31.4467 4.61095 32.436 4.61095 33.39V48.23L-5.2657e-05 45.58V30.74C-5.2657e-05 29.786 0.211947 28.7967 0.635947 27.772C1.05995 26.712 1.62528 25.7403 2.33195 24.857C3.03861 23.9383 3.79828 23.2493 4.61095 22.79L13.7799 17.49L18.3909 20.14ZM21.5709 3.445C20.6523 2.915 19.5923 3.00333 18.3909 3.71L9.22195 9.01C8.40928 9.46933 7.64961 10.1583 6.94295 11.077C6.23628 11.9603 5.67095 12.932 5.24695 13.992C4.82295 15.0167 4.61095 16.006 4.61095 16.96V21.2L-5.2657e-05 18.55V14.31C-5.2657e-05 13.356 0.211947 12.3667 0.635947 11.342C1.05995 10.282 1.62528 9.31033 2.33195 8.427C3.03861 7.50833 3.79828 6.81933 4.61095 6.36L13.7799 1.06C15.0166 0.353334 16.0943 0.265001 17.0129 0.795L21.5709 3.445ZM41.3151 4.77C42.9404 3.816 44.4421 3.445 45.8201 3.657C47.2334 3.83367 48.3641 4.48733 49.2121 5.618C50.0601 6.71333 50.4841 8.19733 50.4841 10.07V31.27C50.4841 32.6833 50.2368 34.1673 49.7421 35.722C49.2474 37.2767 48.5761 38.796 47.7281 40.28C46.8801 41.764 45.9084 43.1067 44.8131 44.308C43.7178 45.5093 42.5518 46.4633 41.3151 47.17C39.6898 48.0887 38.1704 48.4597 36.7571 48.283C35.3791 48.1063 34.2661 47.4527 33.4181 46.322C32.5701 45.2267 32.1461 43.7427 32.1461 41.87V20.67C32.1461 19.2567 32.3934 17.7727 32.8881 16.218C33.3828 14.6633 34.0541 13.144 34.9021 11.66C35.7501 10.176 36.7218 8.83333 37.8171 7.632C38.9478 6.43067 40.1138 5.47667 41.3151 4.77ZM45.9261 12.72C45.9261 11.3067 45.4668 10.335 44.5481 9.805C43.6294 9.275 42.5518 9.36333 41.3151 10.07C40.5024 10.5293 39.7428 11.2183 39.0361 12.137C38.3648 13.0203 37.8171 13.992 37.3931 15.052C36.9691 16.0767 36.7571 17.066 36.7571 18.02V39.22C36.7571 40.6333 37.2164 41.605 38.1351 42.135C39.0538 42.665 40.1138 42.5767 41.3151 41.87C42.1278 41.4107 42.8874 40.7393 43.5941 39.856C44.3008 38.9373 44.8661 37.948 45.2901 36.888C45.7141 35.828 45.9261 34.8387 45.9261 33.92V12.72ZM44.5481 9.805C45.4668 10.335 45.9261 11.3067 45.9261 12.72V33.92C45.9261 34.8387 45.7141 35.828 45.2901 36.888C44.8661 37.948 44.3008 38.9373 43.5941 39.856C42.8874 40.7393 42.1278 41.4107 41.3151 41.87C40.1138 42.5767 39.0538 42.665 38.1351 42.135L33.5241 39.485C34.4428 40.015 35.5204 39.9267 36.7571 39.22C37.5344 38.7607 38.2764 38.0893 38.9831 37.206C39.6898 36.2873 40.2551 35.298 40.6791 34.238C41.1031 33.178 41.3151 32.1887 41.3151 31.27V10.07C41.3151 8.65667 40.8558 7.685 39.9371 7.155L44.5481 9.805ZM47.7281 4.24C46.8801 3.78067 45.9084 3.58633 44.8131 3.657C43.7178 3.69233 42.5518 4.06333 41.3151 4.77C40.1138 5.47667 38.9478 6.43067 37.8171 7.632C36.7218 8.83333 35.7501 10.176 34.9021 11.66C34.0541 13.144 33.3828 14.6633 32.8881 16.218C32.3934 17.7727 32.1461 19.2567 32.1461 20.67V41.87C32.1461 43.2833 32.3934 44.4847 32.8881 45.474C33.3828 46.4633 34.0541 47.2053 34.9021 47.7L30.2911 45.05C29.4784 44.5553 28.8071 43.8133 28.2771 42.824C27.7824 41.8347 27.5351 40.6333 27.5351 39.22V18.02C27.5351 16.6067 27.7824 15.1227 28.2771 13.568C28.7718 12.0133 29.4431 10.494 30.2911 9.01C31.1744 7.526 32.1638 6.18333 33.2591 4.982C34.3544 3.78067 35.5204 2.82667 36.7571 2.12C37.9584 1.41333 39.1068 1.04233 40.2021 1.007C41.3328 0.936333 42.3221 1.13067 43.1701 1.59L47.7281 4.24ZM59.6813 32.33L66.5713 28.355V20.405L71.1293 17.755V25.705L78.0193 21.73V27.03L71.1293 31.005V38.955L66.5713 41.605V33.655L59.6813 37.63V32.33ZM66.5713 33.655V41.605L61.9603 38.955V31.005L66.5713 33.655ZM78.0193 21.73L71.1293 25.705L66.5713 23.055L73.4613 19.08L78.0193 21.73ZM71.1293 17.755L66.5713 20.405L61.9603 17.755L66.5713 15.105L71.1293 17.755ZM66.5713 20.405V28.355L61.9603 25.705V17.755L66.5713 20.405ZM66.5713 28.355L59.6813 32.33L55.0703 29.68L61.9603 25.705L66.5713 28.355ZM59.6813 32.33V37.63L55.0703 34.98V29.68L59.6813 32.33Z"
                                            fill="#0177BC" />
                                    </svg>
                                </strong>
                                <span class="hero_bobble_text">Countries</span>
                            </div>
                        </div>
                        <div class="bubble-3">
                            <div class="bubble hover-lift">
                                <strong class="hero_bobble_number"><svg width="111" height="44" viewBox="0 0 111 44"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M16.656 23.04L8.35197 27.84V23.04L16.656 18.24V8.16L8.35197 12.96V16.8L4.17597 19.2V15.36C4.17597 14.496 4.36797 13.6 4.75197 12.672C5.13597 11.712 5.64797 10.832 6.28797 10.032C6.92797 9.2 7.61597 8.576 8.35197 8.16L16.656 3.36C17.744 2.72 18.704 2.64 19.536 3.12C20.368 3.6 20.784 4.48 20.784 5.76V11.04C20.784 11.872 20.592 12.768 20.208 13.728C19.824 14.688 19.312 15.584 18.672 16.416C18.064 17.216 17.392 17.824 16.656 18.24C17.744 17.6 18.704 17.52 19.536 18C20.368 18.48 20.784 19.36 20.784 20.64V29.28C20.784 30.112 20.592 31.008 20.208 31.968C19.824 32.928 19.312 33.824 18.672 34.656C18.064 35.456 17.392 36.064 16.656 36.48L4.17597 43.68V38.88L16.656 31.68V23.04ZM16.656 23.04V31.68L12.48 29.28V20.64L16.656 23.04ZM16.656 31.68L4.17597 38.88L-2.58088e-05 36.48L12.48 29.28L16.656 31.68ZM4.17597 38.88V43.68L-2.58088e-05 41.28V36.48L4.17597 38.88ZM19.536 18C18.704 17.52 17.744 17.6 16.656 18.24L12.48 15.84C13.6 15.2 14.576 15.12 15.408 15.6L19.536 18ZM16.656 8.16V18.24L12.48 15.84V5.76L16.656 8.16ZM16.656 18.24L8.35197 23.04L4.17597 20.64L12.48 15.84L16.656 18.24ZM8.35197 23.04V27.84L4.17597 25.44V20.64L8.35197 23.04ZM19.536 3.12C18.704 2.64 17.744 2.72 16.656 3.36L8.35197 8.16C7.61597 8.576 6.92797 9.2 6.28797 10.032C5.64797 10.832 5.13597 11.712 4.75197 12.672C4.36797 13.6 4.17597 14.496 4.17597 15.36V19.2L-2.58088e-05 16.8V12.96C-2.58088e-05 12.096 0.191974 11.2 0.575974 10.272C0.959974 9.312 1.47197 8.432 2.11197 7.632C2.75197 6.8 3.43997 6.176 4.17597 5.76L12.48 0.959997C13.6 0.319998 14.576 0.239998 15.408 0.719997L19.536 3.12ZM41.5935 23.04L33.2895 27.84C32.1695 28.48 31.1935 28.56 30.3615 28.08C29.5295 27.6 29.1135 26.72 29.1135 25.44V12.48L33.2895 10.08L45.7215 2.88V7.68L37.4175 12.48C36.3295 13.12 35.3695 13.2 34.5375 12.72C33.7055 12.24 33.2895 11.36 33.2895 10.08V23.04L41.5935 18.24C42.6815 17.6 43.6415 17.52 44.4735 18C45.3055 18.48 45.7215 19.36 45.7215 20.64V29.28C45.7215 30.112 45.5295 31.008 45.1455 31.968C44.7615 32.928 44.2495 33.824 43.6095 34.656C43.0015 35.456 42.3295 36.064 41.5935 36.48L29.1135 43.68V38.88L41.5935 31.68V23.04ZM41.5935 23.04V31.68L37.4175 29.28V20.64L41.5935 23.04ZM41.5935 31.68L29.1135 38.88L24.9375 36.48L37.4175 29.28L41.5935 31.68ZM29.1135 38.88V43.68L24.9375 41.28V36.48L29.1135 38.88ZM45.7215 2.88L33.2895 10.08L29.1135 7.68L41.5935 0.479998L45.7215 2.88ZM44.4735 18C43.6415 17.52 42.6815 17.6 41.5935 18.24L33.2895 23.04L29.1135 20.64L37.4175 15.84C38.5375 15.2 39.5135 15.12 40.3455 15.6L44.4735 18ZM33.2895 10.08C33.2895 11.36 33.7055 12.24 34.5375 12.72L30.3615 10.32C29.5295 9.84 29.1135 8.96 29.1135 7.68L33.2895 10.08ZM29.1135 12.48V25.44C29.1135 26.72 29.5295 27.6 30.3615 28.08L26.1855 25.68C25.3535 25.2 24.9375 24.32 24.9375 23.04V10.08L29.1135 12.48ZM33.2895 10.08L29.1135 12.48L24.9375 10.08L29.1135 7.68L33.2895 10.08ZM52.323 41.28C51.683 41.28 51.363 40.96 51.363 40.32V6.24C51.363 5.6 51.683 5.28 52.323 5.28H58.635C59.275 5.28 59.595 5.6 59.595 6.24V19.8L72.099 5.808C72.435 5.456 72.835 5.28 73.299 5.28H81.363C81.763 5.28 82.019 5.4 82.131 5.64C82.243 5.88 82.163 6.16 81.891 6.48L67.995 22.2L81.963 40.128C82.219 40.432 82.283 40.704 82.155 40.944C82.043 41.168 81.795 41.28 81.411 41.28H72.651C72.171 41.28 71.779 41.096 71.475 40.728L59.595 25.32V40.32C59.595 40.96 59.275 41.28 58.635 41.28H52.323ZM95.8691 41.28C95.2291 41.28 94.9091 40.96 94.9091 40.32V31.824H86.3651C85.7251 31.824 85.4051 31.504 85.4051 30.864V26.352C85.4051 25.712 85.7251 25.392 86.3651 25.392H94.9091V16.896C94.9091 16.256 95.2291 15.936 95.8691 15.936H100.405C101.045 15.936 101.365 16.256 101.365 16.896V25.392H109.885C110.525 25.392 110.845 25.712 110.845 26.352V30.864C110.845 31.504 110.525 31.824 109.885 31.824H101.365V40.32C101.365 40.96 101.045 41.28 100.405 41.28H95.8691Z"
                                            fill="#0177BC" />
                                    </svg>
                                </strong>
                                <span class="hero_bobble_text"> Dealer Network</span>
                            </div>
                        </div>
                        <div class="bubble-4">
                            <div class="bubble hover-lift">
                                <strong class="hero_bobble_number"><svg width="67" height="44" viewBox="0 0 67 44"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M8.73604 36V9.60001L4.17604 12.24V7.44001L4.60804 7.20001C5.69604 6.56001 6.65604 6.48001 7.48804 6.96001C8.32004 7.44001 8.73604 8.32001 8.73604 9.60001V4.80001L12.912 2.40001V33.6L17.04 31.2V36L4.17604 43.44V38.64L8.73604 36ZM8.73604 36L4.17604 38.64L3.52263e-05 36.24L4.60804 33.6L8.73604 36ZM4.17604 38.64V43.44L3.52263e-05 41.04V36.24L4.17604 38.64ZM17.04 31.2L12.912 33.6L8.73604 31.2L12.912 28.8L17.04 31.2ZM12.912 2.40001L8.73604 4.80001L4.60804 2.40001L8.73604 7.62939e-06L12.912 2.40001ZM8.73604 4.80001V9.60001L4.60804 7.20001V2.40001L8.73604 4.80001ZM8.73604 9.60001V36L4.60804 33.6V7.20001L8.73604 9.60001ZM7.48804 6.96001C6.65604 6.48001 5.69604 6.56001 4.60804 7.20001L4.17604 7.44001L3.52263e-05 5.04001L0.432035 4.80001C1.52004 4.16001 2.48004 4.08001 3.31204 4.56001L7.48804 6.96001ZM4.17604 7.44001V12.24L3.52263e-05 9.84001V5.04001L4.17604 7.44001ZM37.8904 22.8L29.5864 27.6C28.4664 28.24 27.4904 28.32 26.6584 27.84C25.8264 27.36 25.4104 26.48 25.4104 25.2V12.24L29.5864 9.84001L42.0184 2.64001V7.44001L33.7144 12.24C32.6264 12.88 31.6664 12.96 30.8344 12.48C30.0024 12 29.5864 11.12 29.5864 9.84001V22.8L37.8904 18C38.9784 17.36 39.9384 17.28 40.7704 17.76C41.6024 18.24 42.0184 19.12 42.0184 20.4V29.04C42.0184 29.872 41.8264 30.768 41.4424 31.728C41.0584 32.688 40.5464 33.584 39.9064 34.416C39.2984 35.216 38.6264 35.824 37.8904 36.24L25.4104 43.44V38.64L37.8904 31.44V22.8ZM37.8904 22.8V31.44L33.7144 29.04V20.4L37.8904 22.8ZM37.8904 31.44L25.4104 38.64L21.2344 36.24L33.7144 29.04L37.8904 31.44ZM25.4104 38.64V43.44L21.2344 41.04V36.24L25.4104 38.64ZM42.0184 2.64001L29.5864 9.84001L25.4104 7.44001L37.8904 0.240007L42.0184 2.64001ZM40.7704 17.76C39.9384 17.28 38.9784 17.36 37.8904 18L29.5864 22.8L25.4104 20.4L33.7144 15.6C34.8344 14.96 35.8104 14.88 36.6424 15.36L40.7704 17.76ZM29.5864 9.84001C29.5864 11.12 30.0024 12 30.8344 12.48L26.6584 10.08C25.8264 9.60001 25.4104 8.72001 25.4104 7.44001L29.5864 9.84001ZM25.4104 12.24V25.2C25.4104 26.48 25.8264 27.36 26.6584 27.84L22.4824 25.44C21.6504 24.96 21.2344 24.08 21.2344 22.8V9.84001L25.4104 12.24ZM29.5864 9.84001L25.4104 12.24L21.2344 9.84001L25.4104 7.44001L29.5864 9.84001ZM50.3479 29.04L56.5879 25.44V18.24L60.7159 15.84V23.04L66.9559 19.44V24.24L60.7159 27.84V35.04L56.5879 37.44V30.24L50.3479 33.84V29.04ZM56.5879 30.24V37.44L52.4119 35.04V27.84L56.5879 30.24ZM66.9559 19.44L60.7159 23.04L56.5879 20.64L62.8279 17.04L66.9559 19.44ZM60.7159 15.84L56.5879 18.24L52.4119 15.84L56.5879 13.44L60.7159 15.84ZM56.5879 18.24V25.44L52.4119 23.04V15.84L56.5879 18.24ZM56.5879 25.44L50.3479 29.04L46.1719 26.64L52.4119 23.04L56.5879 25.44ZM50.3479 29.04V33.84L46.1719 31.44V26.64L50.3479 29.04Z"
                                            fill="#0177BC" />
                                    </svg>
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
        <div style="margin-right: 13px;margin-left: 98px;">
            <div class="row">
                <div class="col-md-7 col-sm-12" style="padding-right: 0;" data-aos="fade-right">
                    <h2 class="section-title"><span class="text-blue">Flexible Teams</span> for Rapid Delivery</h2>
                    <p class="section-text" style="font-family: Arial;font-weight: 400;font-size: 18px;line-height: 33px;padding-right: 77px;">
                        Businesses today are moving faster than ever, and traditional hiring can’t always keep up. Teams need a flexible way to fill skill gaps, tackle urgent projects, and scale quickly without slowing down delivery. With the right talent on-demand, you can maintain momentum and meet deadlines without compromise. This approach helps organizations respond quickly to changing priorities and evolving technical demands
                    </p>
                    <p class="section-text" style="font-family: Arial;font-weight: 400;font-size: 18px;line-height: 33px;padding-right: 77px;">
                        IT Staff Augmentation gives you immediate access to skilled professionals who integrate directly into your workflows. They follow your standards, contribute from day one, and let you retain full control over architecture, product direction, and delivery decisions—ensuring continuity, quality, and faster results. This model allows your team to stay agile while scaling efficiently as project needs evolve. It also reduces long hiring cycles while keeping delivery predictable and aligned with business goals.
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
                        <img src="<?= base_url('hire_talent_media/rectangle_6729.png') ?>" alt="Team Meeting" class="why-img-top" data-aos="fade-down">
                        <img src="<?= base_url('hire_talent_media/rectangle_6730.png') ?>" alt="Office Space" class="why-img-bottom_left" data-aos="fade-right" data-aos-delay="100">
                        <img src="<?= base_url('hire_talent_media/rectangle_6731.png') ?>" alt="Office Space" class="why-img-bottom_right" data-aos="fade-left" data-aos-delay="200">
                    </div>
                </div>
                <div class="col-md-6 col-sm-12" data-aos="fade-left">
                    <h2 class="why-mysoftheaven-title">Why <span class="text-blue">Mysoftheaven</span></h2>
                    <p class="why-mysoftheaven-subtitle">Trusted. Experienced. Ready to deliver.</p>
                    <p class="why-description">
                        For 15+ years, MySoftheaven has built mission-critical systems for governments, enterprises, and fast-growing businesses—handling millions of records and high transaction  volumes without missing a beat. With 1,000+ clients and 2,500+ successful projects across finance, retail, manufacturing, NGOs, and e-governance, we know how to deliver complex, always-on software that organizations rely on every day.
                    </p>
                    <p class="why-description">
                        Through our proven IT staff augmentation model, we connect you with top global talent who  seamlessly integrate into your team. Whether you need a senior developer, AI specialist, or  full remote squad, your augmented team works under your guidance, backed by  MySoftheaven's QA culture, delivery discipline, and unmatched experience in building  secure, scalable, and reliable software.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="ht-section text-center" style="min-height: 571px;">
        <div class="container">
            <h2 class="section-title center-text">Our Talent Delivery Process</h2>
            <div class="process-grid">
                <div class="process-card card-blue-light hover-lift" data-aos="zoom-in" data-aos-delay="0">
                    <div class="p-icon bg-blue">1</div>
                    <h4>Requirement Discovery</h4>
                    <p>We align on required skills, experience level, budget expectations, delivery timeline, time zone overlap, and target start date to ensure complete clarity from day one.</p>
                </div>
                <div class="process-card card-purple-light hover-lift" data-aos="zoom-in" data-aos-delay="100">
                    <div class="p-icon bg-purple">2</div>
                    <h4>Candidate Matching</h4>
                    <p>We present a curated shortlist of pre-vetted engineers, including technical summaries, relevant experience, and real work samples aligned to your needs.</p>
                </div>
                <div class="process-card card-green-light hover-lift" data-aos="zoom-in" data-aos-delay="200">
                    <div class="p-icon bg-green">3</div>
                    <h4>Client Interviews And Selection</h4>
                    <p>You interview the candidates directly and choose the engineer who best fits your team, culture, and technical expectations.</p>
                </div>
                <div class="process-card card-orange-light hover-lift" data-aos="zoom-in" data-aos-delay="300">
                    <div class="p-icon bg-orange">4</div>
                    <h4>Onboarding And Continuous Support</h4>
                    <p>The selected professional integrates into your tools and workflows immediately. We handle contracts, payroll, compliance, and fast replacement if required, while you manage daily tasks and priorities.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Engagement Models -->
    <section class="ht-section engagement-section" style="min-height:653px;">
        <div class="container">
            <h2 class="section-title center-text mb-20">Engagement <span class="text-black">Models</span></h2>
            <p class="center-text mb-50" style="color: #000;">Choose the engagement that fits your project and budget.</p>
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
                            <span class="eng-text">Full time resource contracted monthly for sustained product work</span>
                        </li>
                        <li class="hover-lift">
                            <div class="icon-box bg-blue-light">
                                <i class="fa fa-hourglass-half text-blue-dark"></i>
                            </div>
                            <span class="eng-text">Part time or hourly for advisory tasks and short lived features</span>
                        </li>
                        <li class="hover-lift">
                            <div class="icon-box bg-purple-light">
                                <i class="fa fa-users text-purple-dark"></i>
                            </div>
                            <span class="eng-text">Fixed team for a group of resources working continuously with your squads</span>
                        </li>
                        <li class="hover-lift">
                            <div class="icon-box bg-orange-light">
                                <i class="fa fa-file-text-o text-orange-dark"></i>
                            </div>
                            <span class="eng-text">Contract to hire when you want to convert a contributor to full time employment</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Roles We Provide -->
    <section class="ht-section roles-section-bg" style="min-height:1040px;">
        <div class="container">
            <h2 class="section-title center-text mb-20">Roles <span class="text-blue">We Provide</span></h2>
            <p class="center-text mb-50 roles-subtitle">
                Mysoftheaven (BD) Ltd. connects you with top IT professionals across software, cloud, data, security, and niche engineering domains. Each role integrates seamlessly into your team to accelerate delivery and maintain quality.
            </p>

            <div class="roles-grid">
                <!-- Row 1 -->
                <div class="role-card hover-lift" data-aos="fade-up">
                    <div class="role-img-wrapper"><img src="<?= base_url('hire_talent_media/role1.png') ?>" class="role-img-new"></div>
                    <div class="role-content">
                        <h4>Software Engineers</h4>
                        <p>Build scalable systems and APIs that meet your technical standards. Deliver production-ready solutions that integrate smoothly into your workflows and drive business results.</p>
                    </div>
                </div>
                <div class="role-card hover-lift" data-aos="fade-up">
                    <div class="role-img-wrapper"><img src="<?= base_url('hire_talent_media/role2.png') ?>" class="role-img-new"></div>
                    <div class="role-content">
                        <h4>Web Developers</h4>
                        <p>Build scalable systems and APIs that meet your technical standards. Deliver production-ready solutions that integrate smoothly into your workflows and drive business results.</p>
                    </div>
                </div>
                <div class="role-card hover-lift" data-aos="fade-up">
                    <div class="role-img-wrapper"><img src="<?= base_url('hire_talent_media/role1.png') ?>" class="role-img-new"></div>
                    <div class="role-content">
                        <h4>Application Developers</h4>
                        <p>Build scalable systems and APIs that meet your technical standards. Deliver production-ready solutions that integrate smoothly into your workflows and drive business results.</p>
                    </div>
                </div>
                <div class="role-card hover-lift" data-aos="fade-up">
                    <div class="role-img-wrapper"><img src="<?= base_url('hire_talent_media/role2.png') ?>" class="role-img-new"></div>
                    <div class="role-content">
                        <h4>DevOps Engineers</h4>
                        <p>Build scalable systems and APIs that meet your technical standards. Deliver production-ready solutions that integrate smoothly into your workflows and drive business results.</p>
                    </div>
                </div>

                <!-- Row 2 -->
                <div class="role-card hover-lift" data-aos="fade-up">
                    <div class="role-img-wrapper"><img src="<?= base_url('hire_talent_media/role1.png') ?>" class="role-img-new"></div>
                    <div class="role-content">
                        <h4>Software Engineers</h4>
                        <p>Build scalable systems and APIs that meet your technical standards. Deliver production-ready solutions that integrate smoothly into your workflows and drive business results.</p>
                    </div>
                </div>
                <div class="role-card hover-lift" data-aos="fade-up">
                    <div class="role-img-wrapper"><img src="<?= base_url('hire_talent_media/role2.png') ?>" class="role-img-new"></div>
                    <div class="role-content">
                        <h4>Web Developers</h4>
                        <p>Build scalable systems and APIs that meet your technical standards. Deliver production-ready solutions that integrate smoothly into your workflows and drive business results.</p>
                    </div>
                </div>
                <div class="role-card hover-lift" data-aos="fade-up">
                    <div class="role-img-wrapper"><img src="<?= base_url('hire_talent_media/role1.png') ?>" class="role-img-new"></div>
                    <div class="role-content">
                        <h4>Application Developers</h4>
                        <p>Build scalable systems and APIs that meet your technical standards. Deliver production-ready solutions that integrate smoothly into your workflows and drive business results.</p>
                    </div>
                </div>
                <div class="role-card hover-lift" data-aos="fade-up">
                    <div class="role-img-wrapper"><img src="<?= base_url('hire_talent_media/role2.png') ?>" class="role-img-new"></div>
                    <div class="role-content">
                        <h4>DevOps Engineers</h4>
                        <p>Build scalable systems and APIs that meet your technical standards. Deliver production-ready solutions that integrate smoothly into your workflows and drive business results.</p>
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
        <div class="container">
            <h2 class="section-title center-text mb-40">Our <span class="text-blue">Tech Stack</span></h2>
            <div class="tech-logos-grid" data-aos="fade-left">
                <!-- Row 1 -->
                <!-- Tech Marquee Row 1 (LTR) -->
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

                <!-- Tech Marquee Row 2 (RTL) -->
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

                <!-- Tech Marquee Row 3 (LTR) -->
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
    </section>

    <!-- Clients Section -->
    <section class="ht-section clients-section" style="height: auto; min-height: 500px; padding: 60px 0; overflow: hidden;">
        <div class="container">
            <div class="row items-center">
                <!-- Left Column: Text -->
                <div class="col-md-4 col-sm-12" data-aos="fade-right">
                    <h2 class="section-title mb-20 text-white">Clients</h2>
                    <p class="text-white mb-30" style="line-height: 1.8; opacity: 0.9;">
                        We partner with businesses, corporations, service providers, and government agencies that rely on our technology every day. Trusted by leading organizations, we deliver reliable, scalable, and secure solutions.
                    </p>
                </div>

                <!-- Right Column: Marquees -->
                <div class="col-md-8 col-sm-12" data-aos="fade-left">
                    <!-- Marquee Row 1 (Left to Right / RTL: true) -->
                    <div id="clients-marquee-1" class="owl-carousel owl-theme" style="margin-bottom: 5px;" dir="rtl">
                        <div class="client-box-marquee"><img src="<?= base_url('hire_talent_media/clients/Group.png') ?>"></div>
                        <div class="client-box-marquee"><img src="<?= base_url('hire_talent_media/clients/Group-1.png') ?>"></div>
                        <div class="client-box-marquee"><img src="<?= base_url('hire_talent_media/clients/Group-2.png') ?>"></div>
                        <div class="client-box-marquee"><img src="<?= base_url('hire_talent_media/clients/Group-3.png') ?>"></div>
                        <div class="client-box-marquee"><img src="<?= base_url('hire_talent_media/clients/Group-4.png') ?>"></div>
                        <div class="client-box-marquee"><img src="<?= base_url('hire_talent_media/clients/Group-5.png') ?>"></div>
                        <div class="client-box-marquee"><img src="<?= base_url('hire_talent_media/clients/Group-6.png') ?>"></div>
                    </div>

                    <!-- Marquee Row 2 (Right to Left / Default) -->
                    <div id="clients-marquee-2" class="owl-carousel owl-theme" style="margin-bottom: 5px;">
                        <div class="client-box-marquee"><img src="<?= base_url('hire_talent_media/clients/Group-7.png') ?>"></div>
                        <div class="client-box-marquee"><img src="<?= base_url('hire_talent_media/clients/Group-8.png') ?>"></div>
                        <div class="client-box-marquee"><img src="<?= base_url('hire_talent_media/clients/Group-9.png') ?>"></div>
                        <div class="client-box-marquee"><img src="<?= base_url('hire_talent_media/clients/Group-10.png') ?>"></div>
                        <div class="client-box-marquee"><img src="<?= base_url('hire_talent_media/clients/Group-11.png') ?>"></div>
                        <div class="client-box-marquee"><img src="<?= base_url('hire_talent_media/clients/Group-12.png') ?>"></div>
                        <div class="client-box-marquee"><img src="<?= base_url('hire_talent_media/clients/Rectangle.png') ?>"></div>
                    </div>

                    <!-- Marquee Row 3 (Left to Right / RTL: true) -->
                    <div id="clients-marquee-3" class="owl-carousel owl-theme" style="margin-bottom: 5px;" dir="rtl">
                        <div class="client-box-marquee"><img src="<?= base_url('hire_talent_media/clients/XMLID_79_.png') ?>"></div>
                        <div class="client-box-marquee"><img src="<?= base_url('hire_talent_media/clients/XMLID_117_.png') ?>"></div>
                        <div class="client-box-marquee"><img src="<?= base_url('hire_talent_media/clients/XMLID_120_.png') ?>"></div>
                        <div class="client-box-marquee"><img src="<?= base_url('hire_talent_media/clients/XMLID_197_.png') ?>"></div>
                        <div class="client-box-marquee"><img src="<?= base_url('hire_talent_media/clients/XMLID_198_.png') ?>"></div>
                        <div class="client-box-marquee"><img src="<?= base_url('hire_talent_media/clients/XMLID_199_.png') ?>"></div>
                        <div class="client-box-marquee"><img src="<?= base_url('hire_talent_media/clients/Group.png') ?>"></div>
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
                Recognized nationally and globally, Mysoftheaven (BD) Ltd. has earned top awards from the Bangladesh government, international partners, and NGOs. Our work has been instrumental in advancing Bangladesh's digital transformation in the public sector.
            </p>

            <div class="awards-grid">
                <div class="award-card hover-lift" data-aos="fade-up">
                    <div class="award-icon-box">
                        <img src="<?= base_url('hire_talent_media/clients/Group-1.png') ?>" alt="Award Logo"> <!-- Placeholder -->
                    </div>
                    <h4>World Summit Information Society (WSIS) Prize</h4>
                    <p>About 4.2 crore Holding data, 11+ crore holdingowner data stored in the system. Citizen paying their LD Tax through the system and every day a good amount of revenue automatically received by Bangladesh bank.</p>
                </div>
                <div class="award-card hover-lift" data-aos="fade-up">
                    <div class="award-icon-box">
                         <img src="<?= base_url('hire_talent_media/clients/Group-2.png') ?>" alt="Award Logo"> <!-- Placeholder -->
                    </div>
                    <h4>Digital Bangladesh Award 2022 For LD Tax</h4>
                    <p>About 4.2 crore Holding data, 11+ crore holdingowner data stored in the system. Citizen paying their LD Tax through the system and every day a good amount of revenue automatically received by Bangladesh bank.</p>
                </div>
                <div class="award-card hover-lift" data-aos="fade-up">
                    <div class="award-icon-box">
                         <img src="<?= base_url('hire_talent_media/clients/Group-2.png') ?>" alt="Award Logo"> <!-- Placeholder -->
                    </div>
                    <h4>Digital Bangladesh Award 2022 For Vumi Seba</h4>
                    <p>About 4.2 crore Holding data, 11+ crore holdingowner data stored in the system. Citizen paying their LD Tax through the system and every day a good amount of revenue automatically received by Bangladesh bank.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Client Testimonials -->
    <section class="ht-section testimonials-section" style="height: auto; padding-top: 100px; padding-bottom: 50px; background-color: #002b49;">
        <div class="container">
            <h2 class="section-title text-white center-text mb-40">Client Testimonials</h2>
            
            <div class="testimonials-carousel owl-carousel owl-theme">
                <!-- Card 1 -->
                <div class="testimonial-card hover-lift" data-aos="fade-up" data-aos-delay="0">
                    <div class="test-header">
                        <div class="test-avatar"><img src="<?= base_url('hire_talent_media/clients/Group-1.png') ?>"></div>
                        <div class="test-info">
                            <h5>A2i</h5>
                            <span>CEO<br>TheWebagency</span>
                        </div>
                    </div>
                    <div class="test-body">
                        <div class="project-tag">E-court Project</div>
                        <p>Ten the hastened steepest feelings pleasant few surprise property. An brother he do colonel against.</p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="testimonial-card hover-lift" data-aos="fade-up" data-aos-delay="100">
                    <div class="test-header">
                        <div class="test-avatar"><img src="<?= base_url('hire_talent_media/clients/Group-5.png') ?>"></div>
                        <div class="test-info">
                            <h5>BD Scouts</h5>
                            <span>Manager<br>TheWebtech</span>
                        </div>
                    </div>
                    <div class="test-body">
                        <div class="project-tag">ERP Project</div>
                        <p>Can how elinor warmly mrs basket marked. Led raising expense yet demesne weather musical. Me mr what.</p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="testimonial-card hover-lift" data-aos="fade-up" data-aos-delay="200">
                    <div class="test-header">
                        <div class="test-avatar"><img src="<?= base_url('hire_talent_media/clients/Group-1.png') ?>"></div>
                        <div class="test-info">
                            <h5>A2i</h5>
                            <span>Developer<br>12c Company</span>
                        </div>
                    </div>
                    <div class="test-body">
                        <div class="project-tag">DBID Project</div>
                        <p>park next busy ever. Elinor her his secure far twenty eat object. Any for saw size want man. Which way you wrong.</p>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="testimonial-card">
                    <div class="test-header">
                        <div class="test-avatar"><img src="<?= base_url('hire_talent_media/clients/Group-1.png') ?>"></div>
                        <div class="test-info">
                            <h5>A2i</h5>
                            <span>Accountant<br>TheContruction</span>
                        </div>
                    </div>
                    <div class="test-body">
                        <div class="project-tag">ERP Project</div>
                        <p>Concerns greatest margaret him absolute entrance nay. Door neat week do find past he. Be no surprise he honoured.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Get in Touch Section -->


    <!-- Membership & Certification -->
    <section class="ht-section certifications-section" style="height: auto; min-height: 400px; padding-top: 50px; padding-bottom: 250px; background-color: #eef8ff;">
        <div class="container">
            <h2 class="section-title center-text mb-40">Membership <span class="text-blue">& Certification</span></h2>
            
            <div class="certifications-carousel owl-carousel owl-theme" style="margin-bottom: 30px;" data-aos="fade-up">
               <img src="<?= base_url('hire_talent_media/clients/Group.png') ?>" class="cert-logo">
               <img src="<?= base_url('hire_talent_media/clients/Group-3.png') ?>" class="cert-logo"> 
               <img src="<?= base_url('hire_talent_media/clients/Group-4.png') ?>" class="cert-logo">
               <img src="<?= base_url('hire_talent_media/clients/Rectangle.png') ?>" class="cert-logo" style="height:50px;">
               <img src="<?= base_url('hire_talent_media/clients/XMLID_117_.png') ?>" class="cert-logo">
            </div>
        </div>
    </section>

    <!-- Get in Touch Section -->
    <section class="ht-section contact-section-wrapper" style="height: auto; padding: 60px 0 100px 0; background: #fff;">
        <div class="container">
            <div class="contact-card hover-lift" data-aos="fade-up">
                <div class="row no-gutters">
                    <!-- Left Info Column -->
                    <div class="col-md-5 col-sm-12 contact-info-side">
                        <h3 class="text-white mb-20 " style="font-weight: 700;">Ready to Transform Your Team?</h3>
                        <p class="text-white mb-40" style="opacity: 0.9; font-size: 14px; line-height: 1.6;">
                            Schedule a discovery call with our experts to explore how we can help you build high-performing remote teams.
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
                                <span>P.R.Tower, 924/1, Level 8, Begum Rokeya Sarani, Shewrapara, Mirpur, Dhaka-1216.</span>
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
                            About 4.2 crore Holding data, 11+ crore holdingowner data stored in the system. Citizen paying their LD Tax through the system and every day a good amount of revenue automatically received by Bangladesh bank.
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
                                <textarea class="form-control form-control-custom" rows="4" placeholder="Tell us about your project or talent needs..."></textarea>
                            </div>
                            
                            <button type="submit" class="btn btn-block btn-submit">Send Inquiry <i class="fa fa-paper-plane"></i></button>
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

    $(document).ready(function(){
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