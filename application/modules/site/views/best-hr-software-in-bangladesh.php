<link rel="icon" type="image/png" sizes="32x32" href="http://au.mysoftheaven.com/images/mysoft-logo 1.png">
<title>Mysoftheaven (BD) Ltd. - A Complete IT Solution</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
<script src="https://unpkg.com/feather-icons"></script>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
<link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">


<style>
    @import url('https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap');

    :root {
        --primary: #007BFF;
        --secondary: #6C757D;
        --success: #28A745;
        --danger: #DC3545;
        --warning: #FFC107;
        --info: #17A2B8;
        --light: #F8F9FA;
        --dark: #343A40;
        --body-bg: #f8f9fa;
    }

    .collapse {

        visibility: visible;
    }

    .display-3 {
        font-weight: 700 !important;
    }

    .display-4 {
        font-weight: 700 !important;
    }


    /* .text-primary {
        color: var(--primary) !important;
    }

    .bg-primary {
        background-color: var(--primary) !important;
    }

    .btn {
        transition: all 0.3s ease-in-out;
        border-radius: 50rem;
        padding: 1rem 2rem;
    } */

    .btn-lg {
        padding: 1.25rem 2.5rem;
    }

    .btn-primary {
        background-color: var(--primary);
        border-color: var(--primary);
        box-shadow: 0 4px 15px rgba(0, 123, 255, 0.2);
    }

    .btn-primary:hover {
        background-color: #0069d9;
        border-color: #0062cc;
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(0, 123, 255, 0.3);
    }

    .btn-outline-primary {
        color: var(--primary);
        border-color: var(--primary);
    }

    .btn-outline-primary:hover {
        color: #fff;
        background-color: var(--primary);
        border-color: var(--primary);
        transform: translateY(-2px);
    }

    /* .card {
        border: none;
        transition: all 0.3s ease-in-out;
        box-shadow: 0 4px 25px rgba(0, 0, 0, 0.05);
        border-radius: 1rem;
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    } */

    /* -----feature part start----- */
    /* #feature-part .feature-item {
        padding: 2rem;
        border-radius: 1rem;
        transition: all 0.3s ease-in-out;
        background-color: #fff;
        box-shadow: 0 4px 25px rgba(0, 0, 0, 0.05);
        border: 1px solid #131313; */
        /* max-height: 100%; */
        /* transition: .6s; */
    /* }

    #feature-part .feature-item .image {
        width: 100%;
        height: 165px;
    }

    #feature-part .feature-item .list {
        opacity: 0;
        width: 100%;
        max-height: 0;
    }

    #feature-part .feature-item h4 {
        color: #131313;
        margin-top: 17px;
        margin-bottom: 16px;
    }

    #feature-part .feature-item .feature-sub-title {
        max-height: 0;
        opacity: 0;
        margin-top: -25px;
        transition: .6s;
    } */

    /* #feature-part .feature-item .feature-item-list{
        max-height: 0;
        opacity: 0;
        margin-top: -25px;
        transition: .6s;
    } */

    /* #feature-part .feature-item */

    /* #feature-part .feature-item:hover{
        height: 100%;
    } */

    /* #feature-part .feature-item:hover .list{
        max-height: 500px;
        opacity: 1;
    } */

    /* #feature-part .feature-item:hover .feature-sub-title {
        max-height: 500px;
        opacity: 1;
        margin-top: 20px;
    }

    #feature-part .feature-item:hover .feature-item-list {
        max-height: 500px;
        opacity: 1;
        margin-top: 20px;
    } */

    /* Hover effect */


    #feature-part .feature-item img {
        width: 58px;
    }

    /* -----feature part end----- */

    .pricing-card:hover {
        transform: translateY(-5px) scale(1.02);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    }

    /* -----question part start----- */

    /* .faq-section {
            padding: 60px 0;
        } */

    /* .accordion-button::after {
      background-image: none !important;
      content: '\002B'; plus sign
      font-size: 22px;
      font-weight: bold;
      margin-left: auto; push to right
      transition: transform 0.2s ease;
    } */

    /* Accordion custom icon */
    /* .accordion-button::after {
      content: '\002B'; plus sign
      font-size: 20px;
      font-weight: bold;
      transform: rotate(0deg);
      transition: transform 0.2s ease;
    } */
    /* .accordion-button:not(.collapsed)::after {
      content: '\2212'; minus sign
      font-size: 20px;
      font-weight: bold;
    } */

    /* #question-part .accordion .accordion-item{
        margin-bottom: 10px;
    }         */


    /* -----question part end----- */


    /* .accordion-button:focus {
        box-shadow: none;
        border-color: rgba(0,0,0,.125);
    }

    .accordion-button:not(.collapsed) {
        color: var(--primary);
        background-color: #e7f1ff;
    }

    .accordion-item {
        border-radius: .5rem !important;
        margin-bottom: 1rem;
        border: 1px solid rgba(0,0,0,.125);
    } */

    .swiper-slide img {
        transition: all 0.3s ease-in-out;
        filter: grayscale(100%);
        opacity: 0.8;
    }

    .swiper-slide:hover img {
        filter: grayscale(0%);
        opacity: 1;
    }

    /* -----hrm sheba software part start----- */
    .hrm-soft-wrapper {
        display: flex;
    }

    .hrm-soft-wrapper .hrm-soft-item .hrm-soft-left {
        width: 60%;
    }

    .hrm-soft-wrapper .hrm-soft-item .hrm-soft-right {
        width: 40%;
    }

    /* -----hrm sheba software part end----- */



    .plan-btn {
        width: auto;
        color: #131313;
        background: transparent;
    }

    .request-btn {
        width: auto;
    }

    /* -----tech part start----- */


    .tech-slider .tech-item .image img {
        width: 100px;
    }

    .tech-slider .tech-item .tech-php-img {
        margin-top: 20px;
    }

    .tech-slider .tech-item .tech-last-img {
        margin-top: 50px;
    }

    @media (max-width: 768px) {
    .tech-slider .tech-item .image img {
        width: 60px;       /* smaller images for mobile */
    }

    .tech-slider .tech-item .tech-php-img {
        margin-top: 10px;  /* reduce gap */
    }

    .tech-slider .tech-item .tech-last-img {
        margin-top: 20px;  /* reduce gap */
    }

    .tech-slider {
        text-align: center;   /* center align icons */
    }

    .tech-slider .tech-item {
        padding: 10px;        /* spacing between items */
    }
}

/* Extra small devices (max 480px) */
@media (max-width: 480px) {
    .tech-slider .tech-item .image img {
        width: 50px;   /* even smaller for very small phones */
    }

    .tech-slider .tech-item {
        padding: 8px;
    }
}

  .main{
    font-family: 'Outfit', sans-serif;
  }
/* Top part Start */    

    .titel{
        font-weight: 700;
        font-style:Bold;
        font-size: 30px;
        height: 71px;
        width: 529px;
        top: 100px;
        left: 104px;
        line-height: 71px;
    }
    .titel2{
        font-weight: 700;
        font-style:Bold;
        font-size: 25px;
        height: 72px;
        width: 520px;
        line-height: 36px;
        color: #000;
    }
    .titelPara{
        height: 243px;
        width: 529px;
        font-weight:400;
        font-size: 24px;
        color: #17191bff;
        line-height: 36px;
    }

    .topimg{
        height: 348px;
        width: 550px;
        margin-top: -100px;
        left: 700px;
    }

    .topbutton{
        text-align: center;
        height: 45px;
        width: 164 px;
        top: 535px;
        margin-top: 20px;
        display: inline-block;
        border-radius: 8px;
        color: white;
        background: #037FFF;
        font-weight: 600px;
        font-size: 20px;
        padding: 10px 20px;
        gap: 23px;
    }
    .topbutton:hover{
        background-color: #0062cc;
         text-decoration: none;
        color: #F5FAFF;
    }
  
@media (max-width: 768px) {
  .titel {
    width: 100%;
    font-size: 20px;        
    line-height: 32px;
    left: 30px;
    height: 30px;
  }

  .titel2 {
    width: 100%;
    font-size: 20px;
    height: 40px;
    line-height: 28px;
    text-align: center;
  }

  .titelPara {
    width: 100%;
    height: 150px;
    font-size: 16px;
    line-height: 26px;
    text-align: center;
    margin: 15px auto;
  }

  .topimg {
    width: 100%;            
    height: auto;
    margin: 15px auto;
    display: block;
  }

  .topbutton {
    width: auto;   
    height: 40px;         
    font-size: 20px;
    padding: 8px 16px;
    display: block;         
    margin: 20px auto;
  }
}

@media (max-width: 480px) {
  .titel {
    font-size: 18px;
    line-height: 28px;
    text-align: center;
  }

  .titel2 {
    font-size: 18px;
    line-height: 24px;
  }

  .titelPara {
    font-size: 14px;
    line-height: 22px;
  }

  .topbutton {
    font-size: 14px;
    padding: 7px 14px;
  }
}

 /* Mobile Responsive Top part Start */

/*Top Middel part Started */
.middleimg{
    width: 650px;
    height: 770x;
    top: 681px;
    left: -8px;

}

.side{
    width: 583px;
    height: 654px;
    top: 623px;
    left: 753px;
}
.sideheader{
    font-weight: 600;
    font-size: 48px;
}
.sidetext{
    width: 540px;
    height: 654px;
    text-align: justify;
    top: 623px;
    left: 753px;
    font-weight: 400;
    font-size: 20px;
    line-height: 150%;
    margin-right: 20px;
    color: #000000;
}

/* 📱 Tablet & Mobile (<=768px) */
@media (max-width: 768px) {
  .hrm-soft-wrapper {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
  }

  .hrm-soft-item {
    width: 100%;
    max-width: 100%;
  }

  .middleimg {
    width: 100%;
    height: auto;
    margin-bottom: 20px;
  }

  .sideheader {
    font-size: 28px;
    margin-bottom: 15px;
  }

  .sidetext {
    width: 95%;
    height: auto;
    font-size: 16px;
    line-height: 1.5;
    text-align: justify;
    padding: 0 15px;
  }
}

/* 📱 Small Phones (<=480px) */
@media (max-width: 480px) {
  .sideheader {
    font-size: 22px;
  }

  .sidetext {
    font-size: 14px;
    padding: 0 10px;
  }
}


/*Top Middel part End */


   

    /* Modules Part start */
 .modh{
    width: 187px;
    height: 28px;
    top: 1300px;
    left: 624px;
    font-weight: 700;
    font-size: 32px;
    color: #0172B9;
    margin: auto;
    line-height: 28px;
 } 
  .techh{
    width: 373px;
    height: 52px;
    top: 1983px;
    left: 534px;
    font-weight: 700;
    font-size: 32px;
    color: #0172B9;
    margin: auto;
    line-height: 28px;
 } 
  .modhh{
    width: 494px;
    height: 37px;
    top: 1394px;
    left: 470px;
    font-weight: 400;
    font-size: 24px;
    margin: auto;
    line-height: 37px;
    margin-top: 10px;
    margin-bottom: 50px;
 } 
 @media (max-width: 768px) {
  .modhh {
    width: 100%;         /* full width on mobile */
    font-size: 18px;     /* smaller font */
    line-height: 28px;   /* adjust line height */
    text-align: center;  /* center align text */
    margin: 15px auto;   /* reduce spacing */
  }
}

@media (max-width: 480px) {
  .modhh {
    font-size: 16px;     
    line-height: 24px;
    margin: 10px auto;
  }
}


 
.iconbox{
    width: 363px;
    height: 105px;
    
}
.iconimg{
    width: 58px;
    height: 58px;
    top: 8px;
    left: 8px;
}
.iconh{
    width: 247px;
    height: 70px;
    font-weight: 700px;
    font-size:20px;
    line-height: 130%;
    gap: 12px;
    color: #1F1F1F;
}




    /* Modules Part end */
     /* Feature Part start */

.featureh{
    width: 549px;
    height: 37px;
    top: 1394px;
    left: 470px;
    font-weight: 400;
    font-size: 24px;
    margin: auto;
    line-height: 37px;
    margin-top: 10px;
    margin-bottom: 50px;
    color: #000000;
 }

 @media (max-width: 768px) {
  .featureh {
    width: 100%;         
    font-size: 18px;     
    line-height: 28px;   
    text-align: center;  
    margin: 15px auto;   
  }
}

@media (max-width: 480px) {
  .featureh {
    font-size: 16px;     
    line-height: 24px;
    margin: 10px auto;
  }
}

.card {
    width: 320px;
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    padding: 16px;
    margin: 20px;
    transition: all 0.6s ease-in-out;
    overflow: hidden;
    border: 1px solid gray;
    min-height: 213px;
    height: fit-content;
}

.card-header {
  display: flex;
  flex-direction: column;
  gap: 10px;
  background:#fff;
}
.card-header {
  border-bottom: none;   /* disable bottom line */
}


.card-header h3 {
  color: #000;
  background: #fff;
  font-weight: 600;
  font-size: 20px;
  text-transform: none; 
}


.card-header img {
  width: 50px;
  height: 50px;
}

.card-body {
  max-height: 0;
  opacity: 0;
  transition: max-height 0.8s ease-in-out, opacity 0.8s ease-in-out, margin 0.8s ease-in-out;
  overflow: hidden;
}

.card:hover {
  border-color: #000000;
  transform: translateY(-3px); /* slight lift on hover */
}

.card:hover .card-body {
  max-height: 500px; /* enough for full content */
  opacity: 1;
  margin-top: 10px;
}

@media (max-width: 768px) {
  .card {
    width: 100%;             /* full width */
    max-width: 350px;        /* keep a neat size */
    margin: 15px auto;       /* center cards */
    padding: 12px;
  }

  .card-header {
    flex-direction: row;     /* icon + title side by side */
    align-items: center;
    gap: 12px;
    text-align: left;
  }

  .card-header h3 {
    font-size: 18px;
  }

  .card-header img {
    width: 40px;
    height: 40px;
  }

  .card-body {
    font-size: 14px;
    line-height: 22px;
  }
}

@media (max-width: 480px) {
  .card {
    max-width: 100%;         /* take full width */
    padding: 10px;
    margin: 10px 0;
  }

  .card-header {
    flex-direction: column;  /* stack icon + title on very small screens */
    align-items: flex-start;
    gap: 8px;
  }

  .card-header h3 {
    font-size: 16px;
  }

  .card-header img {
    width: 35px;
    height: 35px;
  }

  .card-body {
    font-size: 13px;
    line-height: 20px;
  }
}


     /* Feature Part end */
     /* --Business Part start */
       .pricing-container {
      display: flex;
      align-items: center;
      gap: 45px;
    }

    .business {
      background: #fff;
      height: 458px;
      border-radius: 12px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.08);
      padding: 30px 25px;
      width: 334px;
      display: flex;
      flex-direction: column;
      transition: 0.3s;
      box-shadow:5px black;
    }

    .business:hover {
      transform: translateY(-8px);
      box-shadow: 0 6px 20px rgba(0,0,0,0.15);
    }

    .business h3 {
      font-size: 18px;
      color: #2084f7ff;
      margin-bottom: 12px;
      text-transform: none; 
      font-weight: 600px;
      font-size: 18px;
     
    }

    .business p {
      
      font-size: 16px;
      margin-bottom: 20px;
    }

    .price {
      font-size: 28px;
      font-weight: bold;
      margin-bottom: 5px;
      color: #000000ff;
    
    }

    .price span {
      font-size: 14px;
      font-weight: normal;
      color: #555;
    }

    .bfeatures {
      list-style: none;
      padding: 0;
      margin: 15px 0;
      width: 100%;
    }

    .bfeatures li {
      display: flex;
      align-items: center;
      gap: 8px;
      font-size: 14px;
      color: #333;
      margin: 10px 0;
    }

.bfeatures li::before {
  content: "✔";
  display: inline-flex;
  align-items: center;
  justify-content: center;
  width: 18px;         
  height: 18px;
  border-radius: 50%;   
  background: #398ef0ff;  
  color: #fff;          
  font-size: 12px;      
  margin-right: 8px;    
}

    .bbtn {
      margin-top: auto;
      padding: 12px 25px;
      border-radius: 30px;
      border: 2px solid #0070f3;
      background: transparent;
      color: #0070f3;
      font-size: 15px;
      font-weight: 600;
      cursor: pointer;
      transition: 0.3s;
      width: 230px;
    }

    .bbtn:hover {
      background: #0070f3;
      color: #fff;
    }

    /* Highlighted card */
    .highlight .bbtn {
      background: #0070f3;
      color: #fff;
    }

    .highlight .bbtn:hover {
      background: #0059c9;
    }

   @media (max-width: 768px) {
  .pricing-container {
    flex-direction: column;
    gap: 20px;
    align-items: center;
    text-align: center;
  }

  .business {
    max-width: 350px;
    padding: 20px 15px;
    align-items: center;
    text-align: center;
  }

  .business h3 {
    font-size: 16px;
  }

  .business p {
    font-size: 14px;
  }

  .price {
    font-size: 22px;
  }

  .bfeatures li {
    justify-content:first baseline; 
    margin-left: 50px;
    font-size: 13px;
  }

  .bbtn {
    max-width: 250px;
    padding: 10px 20px;
    font-size: 14px;
  }
}

/* ----------------- Responsive: Mobile ----------------- */
@media (max-width: 480px) {
  .business {
    padding: 15px;
    max-width: 100%;
  }

  .business h3 {
    font-size: 15px;
  }

  .price {
    font-size: 20px;
  }

  .bfeatures li {
    font-size: 12px;
  }

  .bbtn {
    font-size: 13px;
    padding: 8px 18px;
  }
}
   /* --Business Part */
    /* Question part start */
    .queshead{

           font-weight: 700;
           font-size: 40px;
           left: 421px;
           color: #037FFF;
            text-align: center;
            margin-top: 20px;
            margin-bottom: 50px;
    }

    
    .faq-container {
      max-width: 984px;
      margin: auto;
    }

    .faq-item {
      border: 1px solid #ddd;
      border-radius: 6px;
      margin-bottom: 10px;
      overflow: hidden;
    }

    .faq-question {
      background: #fff;
      color: #0070f3;
      font-weight: 700;
      padding: 15px 20px;
      font-size: 20px;
      cursor: pointer;
      display: flex;
      justify-content: space-between;
      align-items: center;
      transition: background 0.3s;
    }

    .faq-question:hover {
      background: #f5f5f5;
    }

    .faq-question::after {
      content: "+";
      font-size: 22px;
      color: gray;
      transition: transform 0.3s;
    }

    input[type="checkbox"] {
      display: none;
    }

    .faq-answer {
      max-height: 0;
      overflow: hidden;
      background: #fff;
      padding: 0 20px;
      font-weight: 500;
      font-size: 16px;
      transition: max-height 0.4s ease, padding 0.4s ease;
    }
    .faq-answer p {
  color: #000000;
}

    input[type="checkbox"]:checked ~ .faq-question::after {
      content: "−";
    }

    input[type="checkbox"]:checked ~ .faq-answer {
      max-height: 500px; /* large enough to fit content */
      padding: 15px 20px;
    }

    @media (max-width: 768px) {
  .queshead {
    font-size: 28px;       /* smaller heading */
    margin-top: 15px;
    margin-bottom: 30px;
    text-align: center;
  }

  .faq-container {
    max-width: 100%;       /* full width on mobile */
    padding: 0 15px;       /* add side padding */
  }

  .faq-question {
    font-size: 16px;       /* smaller question text */
    padding: 12px 15px;
  }

  .faq-answer {
    font-size: 14px;       /* smaller answer text */
    padding: 0 15px;
  }
}

@media (max-width: 480px) {
  .queshead {
    font-size: 24px;
    margin-top: 10px;
    margin-bottom: 20px;
  }

  .faq-question {
    font-size: 15px;
    padding: 10px 12px;
  }

  .faq-answer {
    font-size: 13px;
    padding: 0 12px;
  }
}

    /* Question part End */

    /* Last part */
.lastimg {
 
    width: 490px;
    height: 386px;
    margin-top: 20px;
    
}

.lasttext{
    height: 30px;
    font-size: 40px;
    font-weight: 600px;
    color: #000;
    width: 280px;
    margin-top: -40px;
}
.lastimg2{
    height: 156px;
    width: 700px;
    margin-top: -80px;
    margin-left: -82px;
} 

@media (max-width: 768px) {
  .lastimg {
    width: 100%;
    height: auto;
    margin: 0;             /* remove gap */
  }

  .lasttext {
    width: 100%;
    font-size: 24px;
    line-height: 32px;
    text-align: center;
    margin: 5px 0;         /* minimal gap */
  }

  .lastimg2 {
    width: 100%;
    height: auto;
    margin: 0;             /* remove gap */
    display: block;
  }
}

@media (max-width: 480px) {
  .lasttext {
    font-size: 20px;
    line-height: 28px;
    margin: 5px 0;         /* keep tight spacing */
  }

  .lastimg,
  .lastimg2 {
    margin: 0;             /* no gap */
  }
}


.cimg{
    width: 120px;
    height: 80px;
    padding: 15px;
    margin: 10px auto;
}


</style>


<main class="main">
    <!-- Top part Start     -->
    <div class="py-5"
        style="background: linear-gradient(234.14deg, rgba(220, 232, 245, 0.121213) 29.21%, #F5FAFF 73.31%, rgba(218, 230, 244, 0) 73.31%);">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h2 class="display-4 fw-bold mb-3 titel">
                        Best <span class="text-primary">HR Software </span class=""> in Bangladesh</h2>
                    <h2 class="h2 fw-bold mb-3 titel2">
                        Complete HRM,
                        Payroll, and Attendance Solution </h2>
                    <p class="titelPara">
                        Looking for the Best HR Software in Bangladesh to simplify and automate your human
                        resources
                        operations? Our all-in-one HR management platform is built to streamline every step
                        of the
                        employee lifecycle—from hiring to retirement—while ensuring full compliance with
                        local labor
                        laws.
                    </p>
                    <a href="#" class="topbutton">Get
                        Started</a>
                </div>

                <div class="col-lg-6  mt-lg-0">
                  <img src="<?php echo base_url('awedget/best-hr-software-in-bangladesh/hr_sheba_for_tab.webp'); ?>" alt="hr_sheba_for_tab" class="topimg">
                </div>
            </div>
        </div>
    </div>
    <!-- /* Top part End */    
    /* Top Middel part Start */ -->
    <div class="py-5 bg-white">
        <div class="hrm-soft-wrapper">
            <div class="hrm-soft-item hrm-soft-left">
                <img src="<?= base_url('awedget/best-hr-software-in-bangladesh/11_3.png') ?>" alt="11_3.png" class="middleimg">
            </div>
            <div class="hrm-soft-item hrm-soft-right">
                <h2 class="display-3 fw-bold text-dark mb-3 sideheader"><span class="text-primary sideheader">HR Sheba </span> HRM Software </h2>
                <p class="sidetext">
                    This comprehensive HR system integrates Time Attendance, HRM, and Payroll into one
                    seamless
                    solution. Whether you're managing a factory floor or an office-based team, our
                    software adapts
                    to your organizational needs, supporting both compliance and non-compliance setups.
                    <br><br>
                    A SMART HRM Software will help to revolutionize a workplace and to maximize employee
                    performance
                    in the service of an employer's strategic objectives. HRMS is primarily concerned
                    with the
                    management of people within organizations, focusing on policies and on systems.
                    <br><br>
                    Our researchers began documenting ways of creating business value through the
                    strategic
                    management of the workforce. Our experimentation work intricate world-class HR
                    professionals
                    from elect corporate to Government organization. It was initially dominated by
                    transactional
                    work, such as payroll and benefits administration, but due to technological
                    advances, and
                    further research.
                </p>
            </div>
        </div>
    </div>
    <!-- /* Top Middel part End */ -->

    <div class="" data-aos="fade-in">
        <div class="container">
            <div class=" text-center">
                <h2 class="modh">
                    Our Modules
                </h2>
                <h2 class="modhh">
                    We Manage
                    the Entire Development Process
                </h2>
            </div>
            <div class="row justify-content-center ">
                <div class="iconbox d-flex gap-4 my-3">
                    <!-- <i data-feather="user-check" class="text-primary" style="width: 48px; height: 48px;"></i> -->
                    <img src="<?= base_url('awedget/best-hr-software-in-bangladesh/fa-user-clock.svg') ?>" class="iconimg" alt="fa-user-clock">
                    <h3 class="iconh">
                        Employee
                        Information Management</h3>
                </div>
                <div class="iconbox d-flex gap-4 my-3">
                    <img src="<?= base_url('awedget/best-hr-software-in-bangladesh/fa-clock.svg') ?>" class="iconimg" alt="fa-clock">
                    <h3 class="iconh">Time
                        and Attendance
                        Management </h3>
                </div>
                <div class="iconbox d-flex gap-4 my-3">
                    <img src="<?= base_url('awedget/best-hr-software-in-bangladesh/fa-money-check.svg') ?>"class="iconimg" alt="fa-money-check">
                    <h3 class="iconh">Payroll
                        Processing
                    </h3>
                </div>
                <div class="iconbox d-flex gap-4 my-3">
                    <img src="<?= base_url('awedget/best-hr-software-in-bangladesh/vsc-repo.svg') ?>" class="iconimg" alt="vsc-repo">
                    <h3 class="iconh">HR
                        Analytics and
                        Reporting</h3>
                </div>
                <div class="iconbox d-flex gap-4 my-3">
                    <img src="<?= base_url('awedget/best-hr-software-in-bangladesh/fa-users.svg') ?>" class="iconimg" alt="fa-users">
                    <h3 class="iconh">
                        Compliance
                        Management</h3>
                </div>
                <div class="iconbox d-flex gap-4 my-3">
                    <img src="<?= base_url('awedget/best-hr-software-in-bangladesh/fa-users.svg') ?>" class="iconimg"alt="fa-users">
                    <h3 class="iconh">Non
                        Compliance
                        Management</h3>
                </div>
                <div class="iconbox d-flex gap-4 my-3">
                    <img src="<?= base_url('awedget/best-hr-software-in-bangladesh/mask-group.svg') ?>" class="iconimg" alt="mask-group">
                    <h3 class="iconh">
                        Performance Record
                    </h3>
                </div>
                <div class="iconbox d-flex gap-4 my-3">
                    <img src="<?= base_url('awedget/best-hr-software-in-bangladesh/g_597.svg') ?>" class="iconimg" alt="g_597">
                    <h3 class="iconh">
                        Scheduling</h3>
                </div>
                <div class="iconbox d-flex gap-4 my-3">
                    <img src="<?= base_url('awedget/best-hr-software-in-bangladesh/absentism_1.svg') ?>"class="iconimg" alt="absentism_1">
                    <h3 class="iconh">Absence
                        Management
                    </h3>
                </div>
            </div>

        </div>
    </div>

    <div class="py-5"
        style="background: linear-gradient(234.14deg, rgba(220, 232, 245, 0.121213) 29.21%, #F5FAFF 73.31%, rgba(218, 230, 244, 0) 73.31%);">
        <div class="container">
            <div class="my-5 text-center">
                <h2 class="techh">Technology What We Use
                </h2>
            </div>
            <!-- Swiper -->
            <div class="tech-slider">
                <div class="tech-item">
                    <div class="image">
                        <img src="<?= base_url('awedget/best-hr-software-in-bangladesh/tech-icon-1.webp') ?>" alt="tech-icon-1">
                    </div>
                </div>
                <div class="tech-item">
                    <div class="image">
                        <img src="<?= base_url('awedget/best-hr-software-in-bangladesh/tech-icon-2.webp') ?>" alt="tech-icon-2">
                    </div>
                </div>
                <div class="tech-item">
                    <div class="image">
                        <img src="<?= base_url('awedget/best-hr-software-in-bangladesh/tech-icon-3.webp') ?>" alt="tech-icon-3">
                    </div>
                </div>
                <div class="tech-item">
                    <div class="image">
                        <img src="<?= base_url('awedget/best-hr-software-in-bangladesh/tech-icon-4.webp') ?>" alt="tech-icon-4">
                    </div>
                </div>
                <div class="tech-item">
                    <div class="image">
                        <img src="<?= base_url('awedget/best-hr-software-in-bangladesh/tech-icon-5.webp') ?>" alt="tech-icon-5">
                    </div>
                </div>
                <div class="tech-item">
                    <div class="image tech-php-img">
                        <img src="<?= base_url('awedget/best-hr-software-in-bangladesh/tech-icon-6.webp') ?>" alt="tech-icon-6">
                    </div>
                </div>
                <div class="tech-item">
                    <div class="image">
                        <img src="<?= base_url('awedget/best-hr-software-in-bangladesh/tech-icon-7.webp') ?>" alt="tech-icon-7">
                    </div>
                </div>
                <div class="tech-item">
                    <div class="image tech-last-img">
                        <img src="<?= base_url('awedget/best-hr-software-in-bangladesh/tech-icon-8.webp') ?>" alt="tech-icon-8">
                    </div>
                </div>
                <!-- <div class="tech-item">
                        <div class="image">
                            <img src="<?= base_url('awedget/best-hr-software-in-bangladesh/tech-icon-1.webp') ?>" alt="tech-icon-1">
                        </div>
                    </div>
                    <div class="tech-item">
                        <div class="image">
                            <img src="<?= base_url('awedget/best-hr-software-in-bangladesh/tech-icon-2.png') ?>" alt="tech-icon-2">
                        </div>
                    </div>
                    <div class="tech-item">
                        <div class="image">
                            <img src="<?= base_url('awedget/best-hr-software-in-bangladesh/tech-icon-3.png') ?>" alt="tech-icon-3">
                        </div>
                    </div>
                    <div class="tech-item">
                        <div class="image">
                            <img src="<?= base_url('awedget/best-hr-software-in-bangladesh/tech-icon-4.png') ?>" alt="tech-icon-4">
                        </div>
                    </div>
                    <div class="tech-item">
                        <div class="image">
                            <img src="<?= base_url('awedget/best-hr-software-in-bangladesh/tech-icon-5.png') ?>" alt="tech-icon-5">
                        </div>
                    </div>
                    <div class="tech-item">
                        <div class="image">
                            <img src="<?= base_url('awedget/best-hr-software-in-bangladesh/tech-icon-6.png') ?>" alt="tech-icon-6">
                        </div>
                    </div>
                    <div class="tech-item">
                        <div class="image">
                            <img src="<?= base_url('awedget/best-hr-software-in-bangladesh/tech-icon-7.png') ?>" alt="tech-icon-7">
                        </div>
                    </div>
                    <div class="tech-item">
                        <div class="image">
                        <img src="<?= base_url('awedget/best-hr-software-in-bangladesh/tech-icon-8.png') ?>" alt="tech-icon-8">
                        </div>
                    </div> -->
            </div>
            <!-- <div class="swiper mySwiper" style="height: 200px;">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="http://au.mysoftheaven.com/images/technology_4.png" class="w-75" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="http://au.mysoftheaven.com/images/technology_8.png" class="w-75" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="http://au.mysoftheaven.com/images/technology_9.png" class="w-75" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="http://au.mysoftheaven.com/images/technology_10.png" class="w-75 mx-auto" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="http://au.mysoftheaven.com/images/technology_15.png" class="w-75 mx-auto" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="http://au.mysoftheaven.com/images/technology_17.png" class="w-75 mx-auto" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="http://au.mysoftheaven.com/images/technology_22.png" class="w-75 mx-auto" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="http://au.mysoftheaven.com/images/technology_23.png" class="w-75 mx-auto" alt="">
                        </div>
                    </div>
                    <div class="swiper-pagination mt-20"></div>
                </div> -->
        </div>
    </div>

    <!-- -----feaure part start----- -->
    <section id="feature-part">
        <div class="py-5 bg-white">
            <div class="container">
                <div class="px-5 mt-5">
                    <h2 class="display-4 fw-bold text-center text-primary mb-4">
                        Key Features
                    </h2>
                    <p class="featureh">Tailoring Workforce Management for Every Sector
                    </p>
                    <div class="row">
                    <div class="card">
                        <div class="card-header">
                            <img src="<?= base_url('awedget/best-hr-software-in-bangladesh/feature1.webp') ?>" alt="icon">
                            <h3>Mobile Attendance Tracking <br>with HR Sheba</h3>
                        </div>
                        <div class="card-body">
                            <p>The HR Sheba app simplifies attendance management with accurate, real-time tools</p>
                            <ul>
                            <li>GPS-based location tracking and biometric selfie attendance</li>
                            <li>Cloud-synced data visible instantly on your dashboard</li>
                            <li>Supports remote workforces, field staff, and hybrid models</li>
                            </ul>
                        </div>
                        </div>
                    <div class="card">
                        <div class="card-header">
                            <img src="<?= base_url('awedget/best-hr-software-in-bangladesh/feature2.webp') ?>" alt="icon">
                            <h3>Geo-Fencing for Attendance</h3>
                        </div>
                        <div class="card-body">
                            <p>Control where your team can clock in</p>
                            <ul>
                            <li>Restrict attendance to office or job sites</li>
                            <li>Prevent false or remote check-ins</li>
                            <li>Boost accountability in your HR system</li>
                            </ul>
                        </div>
                        </div>     
                        <div class="card">
                        <div class="card-header">
                            <img src="<?= base_url('awedget/best-hr-software-in-bangladesh/feature3.webp') ?>" alt="icon">
                            <h3>Live Location Tracking</h3>
                        </div>
                        <div class="card-body">
                            <p>Track employee location live during working hours</p>
                            <ul>
                            <li>Manage mobile and field staff easily</li>
                            <li>Increase transparency and operational control</li>
                            <li>Reduce location-related attendance fraud</li>
                            </ul>
                        </div>
                        </div>                   
                        <div class="card">
                        <div class="card-header">
                            <img src="<?= base_url('awedget/best-hr-software-in-bangladesh/feature4.webp') ?>" alt="icon">
                            <h3>Instant Leave Requests & Approvals</h3>
                        </div>
                        <div class="card-body">
                            <p>No more paperwork or delays. The HR Sheba mobile app brings digital leave management to your fingertips</p>
                            <ul>
                            <li>Submit and approve leave anytime, anywhere</li>
                            <li>Live leave balance tracking for employees</li>
                            <li>HR stays informed through real-time updates</li>
                            </ul>
                        </div>
                        </div>
                        <div class="card">
                        <div class="card-header">
                            <img src="<?= base_url('awedget/best-hr-software-in-bangladesh/feature5.webp') ?>" alt="icon">
                            <h3>Shift & Schedule Management</h3>
                        </div>
                        <div class="card-body">
                            <p>Efficient scheduling is critical for workforce performance.</p>
                            <ul>
                            <li>Create and assign employee shifts</li>
                            <li>Notify staff of changes instantly</li>
                            <li>Maintain consistent workforce coverage</li>
                            </ul>
                        </div>
                        </div>                    
                        <div class="card">
                        <div class="card-header">
                            <img src="<?= base_url('awedget/best-hr-software-in-bangladesh/feature6.webp') ?>" alt="icon">
                            <h3>Payslip & Payroll Access</h3>
                        </div>
                        <div class="card-body">
                            <p>Ensure payroll transparency with mobile access to payslips and salary breakdowns</p>
                            <ul>
                            <li>View and download payslips on-demand</li>
                            <li>Breakdown includes gross salary, deductions, bonuses</li>
                            <li>Integrated with your existing payroll process</li>
                            </ul>
                        </div>
                        </div>                    
                        <div class="card">
                        <div class="card-header">
                            <img src="<?= base_url('awedget/best-hr-software-in-bangladesh/feature7.webp') ?>" alt="icon">
                            <h3>Real-Time HR Notifications</h3>
                        </div>
                        <div class="card-body">
                            <p>Keep employees informed with push notifications for</p>
                            <ul>
                            <li>HR announcements</li>
                            <li>Policy updates</li>
                            <li>Attendance, leave, and payroll deadlines</li>
                            </ul>
                        </div>
                        </div>                    
                        <div class="card">
                        <div class="card-header">
                            <img src="<?= base_url('awedget/best-hr-software-in-bangladesh/feature8.webp') ?>" alt="icon">
                            <h3>Employee Management Dashboard</h3>
                        </div>
                        <div class="card-body">
                            <p>Access and manage employee data in real time</p>
                            <ul>
                            <li>Centralized employee profiles with salary, leave, and attendance history</li>
                            <li>Lifecycle tracking from onboarding to exit</li>
                            <li>Admin and managers can update employee info securely</li>
                            </ul>
                        </div>
                        </div>                    
                        <div class="card">
                        <div class="card-header">
                            <img src="<?= base_url('awedget/best-hr-software-in-bangladesh/feature9.webp') ?>" alt="icon">
                            <h3>Auto-Generated Salary Certificate</h3>
                        </div>
                        <div class="card-body">
                            <p>Control Generate official salary certificates with one tapwhere your team can clock in</p>
                            <ul>
                            <li>Includes monthly payroll, deductions, and net pay</li>
                            <li>Ready for bank, visa, and internal us</li>
                            <li>Supports remote workforces, field staff, and hybrid models</li>
                            </ul>
                        </div>
                        </div>                    
                        <div class="card">
                        <div class="card-header">
                            <img src="<?= base_url('awedget/best-hr-software-in-bangladesh/feature10.webp') ?>" alt="icon">
                            <h3>Seamless Integration with Web-Based HR Platform</h3>
                        </div>
                        <div class="card-body">
                            <p>The mobile app connects directly with HR Sheba web dashboard</p>
                            <ul>
                            <li>HR announcements</li>
                            <li>Policy updates</li>
                            <li>Attendance, leave, and payroll deadlines</li>
                            </ul>
                        </div>
                        </div>                    
                        <div class="card">
                        <div class="card-header">
                            <img src="<?= base_url('awedget/best-hr-software-in-bangladesh/feature11.webp') ?>" alt="icon">
                            <h3>Reporting & Analytics</h3>
                        </div>
                        <div class="card-body">
                            <p>Generate real-time HR reports, analyze attendance data, and ensure payroll  compliance all within a powerful HR software in Bangladesh.</p>
                            <ul>
                            <li>Visualize employee attendance, leave balances, and payroll summaries</li>
                            <li>Make data-driven decisions with built-in HR reporting tools</li>
                            <li>Streamline audits and forecasting with detailed workforce analytics</li>
                            </ul>
                        </div>
                        </div>
                        <div class="card">
                        <div class="card-header">
                            <img src="<?= base_url('awedget/best-hr-software-in-bangladesh/feature.12.webp') ?>" alt="icon">
                            <h3>Security & Access Control</h3>
                        </div>
                        <div class="card-body">
                            <p>Protect your HR and payroll data with secure, role-based access controls built for compliance and transparency in Bangladesh.</p>
                            <ul>
                            <li>Assign user permissions to HR, admins, and managers</li>
                            <li>Prevent unauthorized access to sensitive employee information</li>
                            <li>Ensure full HR data security aligned with GDPR and local labor laws</li>
                            </ul>
                        </div>
                        </div>
                        <!-- 
                            <div class="col-lg-4">
                                <div class="feature-item">
                                    <img src="<?= base_url('awedget/best-hr-software-in-bangladesh/gps_navigation_1.svg') ?>" alt="gps_navigation_1">
                                    <h4>Mobile Attendance Tracking with HR Sheba</h4>
                                    <p class="feature-sub-title">The HR Sheba app simplifies attendance management with accurate, real-time tools</p>
                                    <ul class="feature-item-list">
                                        <li>GPS-based location tracking and biometric selfie attendance</li>
                                        <li>Cloud-synced data visible instantly on your dashboard</li>
                                        <li>Supports remote workforces, field staff, and hybrid models</li>
                                    </ul>
                                </div>
                            </div> -->
                    </div>
                    <!-- <div class="my-8">
                            <div class="row justify-content-center">
                                <div class="col-md-4">
                                    <div class="card h-100 shadow-sm">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-start">
                                                <img src="http://au.mysoftheaven.com/images/about_us/strategy-development 1.png"
                                                    style="width: 4rem;" alt="">
                                            </div>
                                            <div class="mt-4">
                                                <h3 class="h5 fw-bold text-dark my-3">Mobile Attendance Tracking
                                                    with HR Sheba
                                                </h3>
                                                <p>The HR Sheba app simplifies attendance management with accurate,
                                                    real-time tools
                                                </p>
                                                <ul class="list-unstyled">
                                                    <li class="d-flex align-items-baseline gap-2 my-2">
                                                        <i data-feather="circle" class="text-dark" style="width: 8px; height: 8px;"></i>
                                                        <p>GPS-based location tracking and biometric selfie attendance</p>
                                                    </li>
                                                    <li class="d-flex align-items-baseline gap-2 my-2">
                                                        <i data-feather="circle" class="text-dark" style="width: 8px; height: 8px;"></i>
                                                        <p>Cloud-synced data visible instantly on your dashboard</p>
                                                    </li>
                                                    <li class="d-flex align-items-baseline gap-2 my-2">
                                                        <i data-feather="circle" class="text-dark" style="width: 8px; height: 8px;"></i>
                                                        <p>Supports remote workforces, field staff, and hybrid models</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card h-100 shadow-sm">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-start">
                                                <img src="http://au.mysoftheaven.com/images/pointer 1.png"
                                                    style="width: 4rem;" alt="">
                                            </div>
                                            <div class="mt-4">
                                                <h3 class="h5 fw-bold text-dark my-3">Geo-Fencing for Attendance
                                                </h3>
                                                <p>Control where your team can clock in</p>
                                                <ul class="list-unstyled">
                                                    <li class="d-flex align-items-baseline gap-2 my-2">
                                                        <i data-feather="circle" class="text-dark" style="width: 8px; height: 8px;"></i>
                                                        <p>
                                                            Restrict attendance to office or job sites
                                                        </p>
                                                    </li>
                                                    <li class="d-flex align-items-baseline gap-2 my-2">
                                                        <i data-feather="circle" class="text-dark" style="width: 8px; height: 8px;"></i>
                                                        <p>
                                                            Prevent false or remote check-ins</p>
                                                    </li>
                                                    <li class="d-flex align-items-baseline gap-2 my-2">
                                                        <i data-feather="circle" class="text-dark" style="width: 8px; height: 8px;"></i>
                                                        <p>
                                                            Boost accountability in your HR system</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card h-100 shadow-sm">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-start">
                                                <img src="http://au.mysoftheaven.com/images/gps-navigation 1.png"
                                                    style="width: 4rem;" alt="">
                                            </div>
                                            <div class="mt-4">
                                                <h3 class="h5 fw-bold text-dark my-3">Live Location Tracking
                                                </h3>
                                                <p>Track employee location live during working hours
                                                </p>
                                                <ul class="list-unstyled">
                                                    <li class="d-flex align-items-baseline gap-2 my-2">
                                                        <i data-feather="circle" class="text-dark" style="width: 8px; height: 8px;"></i>
                                                        <p>
                                                            Manage mobile and field staff easily</p>
                                                    </li>
                                                    <li class="d-flex align-items-baseline gap-2 my-2">
                                                        <i data-feather="circle" class="text-dark" style="width: 8px; height: 8px;"></i>
                                                        <p>
                                                            Increase transparency and operational control</p>
                                                    </li>
                                                    <li class="d-flex align-items-baseline gap-2 my-2">
                                                        <i data-feather="circle" class="text-dark" style="width: 8px; height: 8px;"></i>
                                                        <p>
                                                            Reduce location-related attendance fraud</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                </div>
            </div>
        </div>
    </section>
    <!-- -----feaure part end----- -->

    <div class="py-5 bg-white">
        <div class="container">
            <!-- Pricing Section -->
            <section class="bg-white">
                <div class="text-center mx-auto mb-5" style="max-width: 50rem;">
                    <h2 class="display-3 fw-bold text-center "style="color: #000000;">
                        Choose the plan that’s <br> right for <span class="text-primary">your business</span>
                    </h2>
                    <p class="text-secondary mt-4 fs-5 text-center "style="margin-bottom:12px;">
                        The involvement of time and regions makes it the <br>biggest disadvantage of a business the plan.
                    </p>
                </div>

                <div class="row justify-content-center">
                     <div class="pricing-container">
    
    <!-- Basic -->
    <div class="business">
      <h3>Basic</h3>
      <p>A smart HR solution tailored to your team’s size and business needs.</p>
      <div class="price">৳ 2400/<span>/month</span></div>
      <ul class="bfeatures">
        <li>Excluding Vat & Tax</li>
        <li>Installation Charge Applicable</li>
        <li>For 1-30 Employees</li>
        <li>24/7 Free Support</li>
        <li>Free Updates</li>
        <br>
      </ul>
      <button class="bbtn">Get Started</button>
    </div>

    <!-- Standard -->
    <div class="business highlight">
      <h3>Standard</h3>
      <p>Built for growing businesses that demand smarter, scalable HR solutions.</p>
      <div class="price">৳ 4200 <span>/month</span></div>
      <ul class="bfeatures">
        <li>Excluding Vat & Tax</li>
        <li>Installation Charge Applicable</li>
        <li>For 31-60 Employees</li>
        <li>Free Employee Databas</li>
        <li>24/7 Free Support</li>
        <li>Free Updates</li>
      </ul>
      <button class="bbtn">Get Started</button>
    </div>

    <!-- Premium -->
    <div class="business">
      <h3>Premium</h3>
      <p>Premium HR solutions for organizations ready to lead and scale.</p>
      <div class="price">৳ 6000 <span>/month</span></div>
      <ul class="bfeatures">
        <li>Excluding Vat & Tax</li>
        <li>Installation Charge Applicable</li>
        <li>For 61-100 Employees</li>
        <li>24/7 Free Support</li>
        <li>Free Updates</li>
        <br>
      </ul>
      <button class="bbtn">Get Started</button>
    </div>

  </div>
  </div>
  </section>
</div></div>
    <!-- -----question part star----- -->
     <h1 class="queshead">Fequently asked questions</h1>
    <section>
          <div class="faq-container">

    <div class="faq-item">
      <input type="checkbox" id="q1">
      <label class="faq-question" for="q1">Which is the best HR software in Bangladesh for managing payroll and attendance??</label>
      <div class="faq-answer">
        <p>HR Sheba is widely recognized as the best HR software in Bangladesh for payroll, attendance, and employee management. It offers features like automated salary calculation, payslip generation, mobile attendance with geo-fencing, and full compliance with local labor laws.</p>
      </div>
    </div>

    <div class="faq-item">
      <input type="checkbox" id="q2">
      <label class="faq-question" for="q2">Does HR Sheba support mobile attendance tracking with GPS and geo-fencing?</label>
      <div class="faq-answer">
        <p>Yes. HR Sheba is one of the few HRM software in Bangladesh that includes mobile attendance tracking, live location, and geo-fencing features — perfect for remote and on-field employees.</p>
      </div>
    </div>

    <div class="faq-item">
      <input type="checkbox" id="q3">
      <label class="faq-question" for="q3">Is HR Sheba suitable for both factories and office-based teams?</label>
      <div class="faq-answer">
        <p>Absolutely. HR Sheba is built for factories, corporate offices, and SMEs. It supports shift management, non-compliance setups, and employee scheduling, making it one of the most flexible HR solutions in Bangladesh.</p>
      </div>
    </div>

    <div class="faq-item">
      <input type="checkbox" id="q4">
      <label class="faq-question" for="q4">How does HR Sheba handle payroll processing and salary slips?</label>
      <div class="faq-answer">
        <p>With HR Sheba, payroll is 100% automated. It calculates salary, deductions, taxes, and bonuses, and generates downloadable salary slips and salary certificates — ensuring accuracy and compliance for every employee.</p>
      </div>
    </div>

    <div class="faq-item">
      <input type="checkbox" id="q5">
      <label class="faq-question" for="q5">What makes HR Sheba the best HRM software for small businesses in Bangladesh?</label>
      <div class="faq-answer">
        <p>HR Sheba offers a cost-effective HR solution starting from just ৳2400/month, with features like employee information management, leave tracking, real-time notifications, and payroll integration — making it ideal for small and growing businesses in Bangladesh.</p>
      </div>
    </div>
        <div class="faq-item">
      <input type="checkbox" id="q6">
      <label class="faq-question" for="q6">Does HR Sheba support compliance with Bangladeshi labor laws?
      </label>
      <div class="faq-answer">
        <p>Yes. HR Sheba is developed to ensure compliance with Bangladeshi labor regulations while also offering non-compliance customizations for flexible HR setups in factories or other sectors.</p>
      </div>
      </div>
          <div class="faq-item">
      <input type="checkbox" id="q7">
      <label class="faq-question" for="q7">Can I get a demo of HR Sheba HR Software before purchasing?
      </label>
      <div class="faq-answer">
        <p>Yes, you can request a free demo to see why HR Sheba is considered the best HR software in Bangladesh. Experience its features in real-time and discover how it can streamline your HR operations.</p>
      </div>
      </div>

          <div class="faq-item">
      <input type="checkbox" id="q8">
      <label class="faq-question" for="q8">How secure is HR Sheba for storing employee data and payroll information?
       </label>
      <div class="faq-answer">
        <p>HR Sheba ensures enterprise-grade data security, access control, and encrypted storage, making it a trusted HR and payroll software in Bangladesh for both private and government sectors.</p>
      </div>
     </div>

         <div class="faq-item">
      <input type="checkbox" id="q9">
      <label class="faq-question" for="q9">What sectors use HR Sheba in Bangladesh?
      </label>
      <div class="faq-answer">
        <p>HR Sheba is used across multiple industries including garments/factories, corporate offices, educational institutions, tech firms, and government projects — proving its capability as a complete HR solution in Bangladesh.</p>
      </div>
    </div>

        <div class="faq-item">
      <input type="checkbox" id="q10">
      <label class="faq-question" for="q10">How do I choose the best HRM software plan for my business?
      </label>
      <div class="faq-answer">
        <p>HR Sheba offers three pricing plans — Basic, Standard, and Premium — based on team size and features needed. Whether you’re managing 1 or 100+ employees, there's a plan tailored to fit your needs and budget.</p>
      </div>
    </div>

  </div>
    </section>
    <!-- -----question part end----- -->
    <!-- <div class="py-5 bg-white">
            <div class="container">
                <div class="px-5 mt-5">
                    <h2 class="display-4 text-center fw-bold text-primary mb-5">
                        Fequently asked questions</h2>
                    <div class="d-flex justify-content-center">
                        <div class="my-8 w-75">
                            <div class="accordion" id="faqAccordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            Which is the best HR software in Bangladesh for managing payroll and
                                            attendance?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            HR Sheba is widely recognized as the
                                            best HR software in Bangladesh for payroll, attendance, and employee
                                            management. It offers features like automated salary calculation, payslip
                                            generation, mobile attendance with geo-fencing, and full compliance with
                                            local labor laws.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                            aria-expanded="false" aria-controls="collapseTwo">
                                            Does HR Sheba support mobile attendance tracking with GPS and
                                            geo-fencing?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                        aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            Yes. HR Sheba is one of the few HRM software in Bangladesh that includes
                                            mobile attendance tracking, live location, and geo-fencing features —
                                            perfect for remote and on-field employees.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                            aria-expanded="false" aria-controls="collapseThree">
                                            Is HR Sheba suitable for both factories and office-based teams?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            Absolutely. HR Sheba is built for factories, corporate offices, and SMEs. It
                                            supports shift management, non-compliance setups, and employee scheduling,
                                            making it one of the most flexible HR solutions in Bangladesh.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                            aria-expanded="false" aria-controls="collapseFour">
                                            How does HR Sheba handle payroll processing and salary slips?
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse"
                                        aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            With HR Sheba, payroll is 100% automated. It calculates salary, deductions,
                                            taxes, and bonuses, and generates downloadable salary slips and salary
                                            certificates — ensuring accuracy and compliance for every employee.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFive">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFive"
                                            aria-expanded="false" aria-controls="collapseFive">
                                            What makes HR Sheba the best HRM software for small businesses in
                                            Bangladesh?
                                        </button>
                                    </h2>
                                    <div id="collapseFive" class="accordion-collapse collapse"
                                        aria-labelledby="headingFive" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            HR Sheba offers a cost-effective HR solution starting from just ৳2400/month,
                                            with features like employee information management, leave tracking,
                                            real-time notifications, and payroll integration — making it ideal for small
                                            and growing businesses in Bangladesh.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingSix">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseSix"
                                            aria-expanded="false" aria-controls="collapseSix">
                                            Does HR Sheba support compliance with Bangladeshi labor laws?
                                        </button>
                                    </h2>
                                    <div id="collapseSix" class="accordion-collapse collapse"
                                        aria-labelledby="headingSix" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            Yes. HR Sheba is developed to ensure compliance with Bangladeshi labor
                                            regulations while also offering non-compliance customizations for flexible
                                            HR setups in factories or other sectors.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingSeven">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseSeven"
                                            aria-expanded="false" aria-controls="collapseSeven">
                                            Can I get a demo of HR Sheba HR Software before purchasing?
                                        </button>
                                    </h2>
                                    <div id="collapseSeven" class="accordion-collapse collapse"
                                        aria-labelledby="headingSeven" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            Yes, you can request a free demo to see why HR Sheba is considered the best
                                            HR software in Bangladesh. Experience its features in real-time and discover
                                            how it can streamline your HR operations.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingEight">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseEight"
                                            aria-expanded="false" aria-controls="collapseEight">
                                            How secure is HR Sheba for storing employee data and payroll information?
                                        </button>
                                    </h2>
                                    <div id="collapseEight" class="accordion-collapse collapse"
                                        aria-labelledby="headingEight" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            HR Sheba ensures enterprise-grade data security, access control, and
                                            encrypted storage, making it a trusted HR and payroll software in Bangladesh
                                            for both private and government sectors.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingNine">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseNine"
                                            aria-expanded="false" aria-controls="collapseNine">
                                            What sectors use HR Sheba in Bangladesh?
                                        </button>
                                    </h2>
                                    <div id="collapseNine" class="accordion-collapse collapse"
                                        aria-labelledby="headingNine" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            HR Sheba is used across multiple industries including garments/factories,
                                            corporate offices, educational institutions, tech firms, and government
                                            projects — proving its capability as a complete HR solution in Bangladesh.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTen">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTen"
                                            aria-expanded="false" aria-controls="collapseTen">
                                            How do I choose the best HRM software plan for my business?
                                        </button>
                                    </h2>
                                    <div id="collapseTen" class="accordion-collapse collapse"
                                        aria-labelledby="headingTen" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            HR Sheba offers three pricing plans — Basic, Standard, and Premium — based on
                                            team size and features needed. Whether you’re managing 1 or 100+ employees,
                                            there's a plan tailored to fit your needs and budget.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

    <div class="py-5 bg-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h2 class="display-3 fw-bold mb-3 "> Want to see demo of our best <br> <span class="text-primary"> 
                         HRM Software HR Sheba ?</h2>
                    <div class="mt-4">
                        <a href="https://mysoftheaven.com/request-quotation" class="btn btn-primary btn-lg request-btn">Request for
                            Quotation</a>
                    </div>
                </div>
                <div class="lastimg">
                    <img src="<?= base_url('awedget/best-hr-software-in-bangladesh/Layer_1.png') ?>" alt="Layer_1" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</main>

<!-- Footer -->
<div class="container py-5">
    <div class="row align-items-center">
        <div class="col-lg-5 flex">
            <h2 class="display-4 fw-bold lh-1 text-center text-lg-start lasttext ">
                <span class="text-primary">Trusted</span> by 150+ paying customers
            </h2>
        </div>
        <div class="col-lg-7 mt-5 mt-lg-0">
            <div>
                <img src="<?= base_url('awedget/best-hr-software-in-bangladesh/c1.webp') ?>" alt="" class="cimg">
                <img src="<?= base_url('awedget/best-hr-software-in-bangladesh/c2.webp') ?>" alt="" class="cimg">
                <img src="<?= base_url('awedget/best-hr-software-in-bangladesh/c3.webp') ?>" alt="" class="cimg">
                <img src="<?= base_url('awedget/best-hr-software-in-bangladesh/c4.webp') ?>" alt="" class="cimg">
                <img src="<?= base_url('awedget/best-hr-software-in-bangladesh/c5.webp') ?>" alt="" class="cimg">
                <img src="<?= base_url('awedget/best-hr-software-in-bangladesh/c6.webp') ?>" alt="" class="cimg">
                <img src="<?= base_url('awedget/best-hr-software-in-bangladesh/c7.webp') ?>" alt="" class="cimg">
                <img src="<?= base_url('awedget/best-hr-software-in-bangladesh/c8.webp') ?>" alt="" class="cimg">
                <img src="<?= base_url('awedget/best-hr-software-in-bangladesh/c9.webp') ?>" alt="" class="cimg">
                <img src="<?= base_url('awedget/best-hr-software-in-bangladesh/c10.webp') ?>" alt="" class="cimg">
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 6,
        spaceBetween: 30,
        loop: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        breakpoints: {
            0: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 4,
                spaceBetween: 25,
            },
            1024: {
                slidesPerView: 6,
                spaceBetween: 30,
            },
        },
    });
</script>

<script>
    AOS.init();
</script>
<script>
    feather.replace()
</script>

<script>
$('.tech-slider').slick({
    dots: false,
    arrows: false,
    infinite: true,
    autoplay: true,
    slidesToShow: 7,
    slidesToScroll: 1
});

</script>