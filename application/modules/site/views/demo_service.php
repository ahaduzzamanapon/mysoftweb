<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script> -->
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"
    />
<style>
    @import url('https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap');
    .main{
        font-family: 'Outfit', sans-serif;
        margin-left: 45px;
    }
/* Head */
.head {
    /* background:linear-gradient(#DCE8F51F,#F5FAFF,#DAE6F400); */
    display: flex;
    gap: 40px;
    
    margin: 25px auto;
    padding: 0 20px;
}

.headsidebar {
    display: flex;
    flex-direction: column;
    width: 10px;
    gap: 15px;
    position: sticky;
    top: 20px;
    align-self:flex-start;
    margin-left: 20px;
}

.headmenu-item {
    width: 370px;
    height: 69px;
    display: flex;
    align-items: center;
    gap: 10px;
    border: 1px solid #ddd;
    padding: 10px;
    border-radius: 5px;
    color: #000;
    cursor: pointer;
    background-color: #fff;
    transition: 0.3s;
}

.headmenu-item:hover {
    background-color: #f0f8ff;
}

.headmenu-item.active {
    background-color: #0172B9;
    color: #ffffff;
}

.headmenu-item.active,
.headmenu-item.active h4 {
    color: #ffffff !important;
}


.headmenu-item .headimg {
    font-size: 24px;
}

.headmenu-item h4 {
    margin-bottom: 5px;
    color: #000;
    font-size: 18px;
    font-weight: 500;
}

.headmenu-item p {
    font-size: 14px;
    color: #555;
}

.headimg{
    width: 47px;
    height: 47px;
}

.calldiv {
    width: 370px;
    height: 60px;
    display: flex;
    align-items: center;
    gap: 10px;
    border: 1px solid #ddd;
    padding: 10px;
    border-radius: 5px;
    color: #000;
    cursor: pointer;
    background-color:#4CAF50;
    transition: 0.3s;
}

.callimg {
    height: 40px;
    width: 40px;
}

.call-btn {
    padding: 10px 16px;
    background-color:#4CAF50;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-weight: bold;
    font-size: 16px;
}

.check{
    display: flex;
    flex-direction: row;
}

.headmain-content {
    flex: 1;
    display: flex;
    flex-direction: column;
    gap: 20px;
    margin-left: 380px;
}

.headmain-content h2 {
    height: 68px;
    width: 457px;
    font-size: 28px;
    font-weight: bold;
    color: #333;
}

.headmain-content p {
    height:auto;
    width: 467px;
    font-size: 17px;
    text-align: justify;
    color: #000000ff;
    line-height: 1.6;
    margin-bottom: 50px;
}

.headbuttons {
   margin-top: -48px;
}

.get-started {
    padding: 10px 20px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.get-started:hover {
    background-color: #0056b3;
}

.screenshot img {
 margin-left: -20px;
  height: 347px;
  width: 270px;
  margin-right: 55px;
}

/* Ipad responsive */
/* iPad Portrait & Landscape */
/* @media (min-width: 768px) and (max-width: 1024px) {
    .headsidebar {
        width: 100%;
        flex-direction: column;
        gap: 10px;
        margin-left: 0;
        justify-content: center;
        position: relative;
        top: 0;
    }

    .headmenu-item,
    .calldiv {
        width: 100%;
        max-width: 320px;
        height: auto;
        flex: 1;
    }

    .headmain-content {
        margin-left: 0;
        padding: 20px;
        align-items: center;
        text-align: center;
    }

    .headmain-content h2 {
        width: 100%;
        font-size: 24px;
        height: auto;
    }

    .headmain-content p {
        width: 100%;
        height: auto;
        font-size: 16px;
    }

    .screenshot img {
        width: 220px;
        height: auto;
        margin: 20px auto;
        display: block;
    }

    .headbuttons {
        margin-top: 10px;
        display: flex;
        justify-content: center;
    }
} */


/* Mobile Responsive CSS */
@media (max-width: 768px) {

  .iso_box {
    position: fixed;
    width: 120px;
    bottom: 82px !important;
    right: 0%;
    /* border: 3px solid #a1a1a1; */
    background: none;
    padding: 0 15px 15px 10px;
    /* padding: 15px; */
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    display: none !important;
    z-index: 999;
}

  .main{
    margin-left: 1px;
  }
  .head {
    flex-direction: column;
    gap: 20px;
    padding: 10px;
  }
  .check{
    display: block;
    
}
  .headsidebar {
    width: 100%;
    margin-left: 0;
    position: relative;
    top: 0;
  }

  .headmenu-item,
  .calldiv {
    width: 100%;
    height: auto;
    flex-direction: row;
    align-items: center;
    padding: 15px;
  }

  .headmenu-item h4 {
    font-size: 14px;
  }

  .headmenu-item p {
    font-size: 13px;
  }

  .headmain-content {
    margin-left: 0;
    width: 100%;
  }

  .headmain-content h2,
  .headmain-content p {
    width: 100%;
    height: auto;
  }

  .screenshot img {
    width: 100%;
    height: auto;
    margin: 0 auto;
    display: block;
  }

  .get-started{
    margin-top: 25px;
    margin-left: 130px;
    margin-bottom: 20px;
  }

  /* Sticky Call Button */
  /* .calldiv {
    position: fixed;
    bottom: 0;
    left: 0;
    right: 0;
    border-radius: 0;
    justify-content: center;
    z-index: 1000;
  } */

  /* .call-btn {
    width: 100%;
    text-align: center;
    font-size: 16px;
    padding: 15px;
    border-radius: 0;
  }
} */
    .calldiv {
        position: fixed;
        bottom: 18px;
        left: 40px;
        right: 0;
        width: 80%;
        z-index: 9999;
        border-radius: 45px;
        text-align: center;
        padding: 10px;
        box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.15);
  }

  .calldiv .call-btn {
    display: inline-block;
    padding: 12px 20px;
    color: #fff;
    text-decoration: none;
    border-radius: 6px;
    font-size: 16px;
  }

}



/* Middel */
.middel{
  margin-left: 10px;
}
.mhead{
    margin-left: 380px;
    margin-top: 60px;
    font-weight: 600;
    font-size: 32px;
    

}
.mhead2{
    margin-left: 380px;
    margin-top: 60px;
    font-weight: 600;
    font-size: 32px;
    width: 674px;
    height: 75px;
    text-align: center;
}
.mcard{
    display: flex;
    flex-direction: row;
    gap: 30px;
    margin-left: 380px;

}
.maincard{
    width: 357px;
    height: 392px;
    align-items: center;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1); 
   
}
 .maincard img{
    width: 80px;
    height: 95px;
    margin-top: 20px;
    margin-left: 120px;
 }
 .maincard h2{
    font-size: 22px;
    font-weight: 500;
    color: #000;
    margin-top: 20px;
    margin-left: 10px;
 }

  .maincard p{
    font-size: 18px;
    font-weight: 400;
    width: 326px;
    height: auto;
    color: #000;
    text-align: justify;
    margin-left: 10px;
  }

  /* Mobile Responsive CSS */
@media (max-width: 768px) {

  .mhead,
  .mhead2 {
    margin-left: 0;
    margin-top: 30px;
    font-size: 19px;
    width: 100%;
    text-align: center;
  }

  .mcard {
    flex-direction: row;
    gap: 20px;
    margin-left: 0;
    align-items: center;
  }

  .maincard {
    width: 50%;
    height: auto;
    padding: 10px;
  }

  .maincard img {
    width: 60px;
    height: 70px;
    margin: 0 auto 15px auto;
    display: block;
  }

  .maincard h2 {
    font-size: 14px;
    text-align: center;
    line-height: 150%;
    margin: 10px 0;
  }

  .maincard p {
    font-size: 12px;
    line-height: 150%;
    width: 100%;
    height: auto;
    text-align: left;
    margin: 0;
  }
}


  /* App card */
  .app{
    margin-left: 380px;
    display: flex;
    gap: 15px;
  }
  /* .appimg{
    width: 190px;
    height: 228px;
  } */

    .appcard {
    background: #0bb55e;
    width: 175px;
    height: 214px;
    border-radius: 4px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    color: white;
    text-align: center;
    font-family: "outfit", sans-serif;
    }

    .appcard img {
      background: white;
      border-radius: 50%;
      padding: 10px;
      width: 70px;
      height: 70px;
      margin-bottom: 20px;
    }

    .appcard h2 {
    font-size: 20px;
    font-weight: 600;
    margin: 0;
    line-height: 120%;
    color: white;
    }

    @media (max-width: 768px) {
  .app {
    margin-left: 0;
    justify-content: center;
    flex-wrap: wrap;
  }

  .appcard {
    width: 47%;  /* 2 cards in one row */
    margin-bottom: 15px;
  }

      .appcard h2 {
    font-size: 18px;
    line-height: 120%;
   
    }
}


  .apphead{
    width: 674px;
    height: 39px;
    font-weight: 600;
    font-size: 32px;
    margin-left: 380px;
    text-align: center;
    margin-top: 30px;
  }
  .developh{
    width: 700px;
    height: auto;
    margin-left: 410px;
    margin-right: 60px;
    font-weight: 600px;
    font-size: 22px;
    text-align: justify;
    color: #000;
  }
  .developimg{
    width: 750px;
    height: 460px;
    margin-left: 380px;
  }

  .developheading{
    width: 731px;
    height: 559px;
    margin-left: 395px;
    font-weight: 400;
    font-size: 20px;
    color: #000;
     white-space: normal;
  line-height: 150%;

  }

.developheading2{
    width: 731px;
    height: 100px;
    margin-top: -230px;
    margin-left: 395px;
    font-weight: 400;
    font-size: 20px;
    color: #000;
    white-space: normal;
    line-height: 150%;
    margin-bottom: 50px;
  }

  .developheading3{
    width: 731px;
    margin-left: 395px;
    font-weight: 400;
    font-size: 20px;
    color: #000;
    white-space: normal;
    line-height: 150%;
    margin-top: -40px;
  }

    .developheadingmob{
 
  }
  /* Mobile Responsive CSS */
@media (max-width: 768px) {

    .appgrid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    justify-items: center;
    margin: 20px 0;
    margin-top:-60px;
  }

  .appimg {
    width: 90px;
    height: auto;
  }


  /* .appimg {
    width: 120px;
    height: auto;
    display: block;
    margin: 0 auto;
  } */

  .apphead {
    width: 100%;
    margin: 20px 0;
    font-size: 18px;
    text-align: center;
    margin-top: 20px;
  }

    .apphead2 {
    width: 100%;
    margin: 20px 0;
    font-size: 18px;
    text-align: center;
    margin-top: 70px;
  }

  .developh {
    width: 100%;
    margin: 20px 0;
    font-size: 16px;
    text-align: justify;
  }

  .developimg {
    width: 100%;
    height: auto;
    margin: 20px 0;
    display: block;
  }

  .developheading,
  .developheading3 {
    width: 100%;
    margin: 20px 0;
    font-size: 16px;
    line-height: 1.6;
    text-align: justify;
  }
  .developheading2{
    width: 100%;
    margin: 20px 0;
    margin-top: -135px;
    font-size: 16px;
    line-height: 1.6;
    text-align: justify;
  }

    .developheadingnew{
    width: 100%;
    margin: 20px 0;
    margin-top: -135px;
    font-size: 16px;
    line-height: 1.6;
    text-align: justify;
  }

  .newhead2{
   line-height: 150%;
    margin-bottom: 60px;
    margin-top: 20px;
  }

  .appsummary{
    margin-top: -107px;
  }

}

@media (max-width :1024px){
    .appsummary{
    margin-top: -74px;
  }
}


/* National App */
.mobileapp-slider img {
  width: 150px;
  height: 110px;
  margin: auto;
  display: block;
}

.slick-slide {
  display: flex !important;
  justify-content: center;
  align-items: center;
}

.mobileapp-slider {
  max-width: 780px;
  margin-left: 360px;
  padding: 20px 0;
}

@media (max-width: 768px) {
  .mobileapp-slider {
    max-width: 100%;
    margin-left: 0;
    padding: 10px 0;
  }

  .mobileapp-slider img {
    width: 110px;
    height: 90px;
  }
}



  /* Process */
  .processimg{
    margin-left: 365px;
    width: 740px;
    height: 269px;
  }
  .process{
    width: 690px;
    color: #000;
    display: flex;
    margin-left: 360px;
  }


.pro1{
  margin-left: 28px;
}
.pro2{
      margin-left: 100px;
    margin-top: 20px;
}
.pro3{
  margin-left: 133px;
    margin-top: 18px;
}

.pro4{
      margin-left: 127px;
}

 .pro5{
    margin-left:450px;
     color:#000; 
  }

  .pro6{
    margin-left:688px; 
    margin-top:-23px;
     color:#000;
  }

  .pro7{
    margin-left:850px; margin-top:-21px; color:#000;

  }

/* Mobile Responsive CSS */
@media (max-width: 768px) {

  .processimg {
    width: 100%;
    height: auto;
    margin-left: 0;
    margin-top: -34px;
  }

  .process {
    width: 100%;
    margin-left: 0;
    display: flex;
    flex-wrap: wrap; /* allow wrapping on small screens */
  }


  .pro1{
    margin-left: 3px;
    font-size: 12px;
        width: 1px;
        line-height: 100%;

  }
   .pro2{
        margin-left: 90px;
        margin-top: 0px;
        width: 0px;
        font-size: 12px;
        font-size: 12px;
       
  }
   .pro3{
    margin-left: 110px;
        margin-top: 2px;
        font-size: 12px;
       
  }
   .pro4{
         margin-left: 280px;
        margin-bottom: 22px;
        margin-top: -48px;
        font-size: 12px;
        width: 10px;
        line-height: 100%;
        padding: 20px;
  }
   .pro5{
    margin-left: 30px;
    font-size: 12px;
  }
   .pro6{
    margin-left: 165px;
    font-size: 12px;
  }
   .pro7{
    margin-left: 241px;
    font-size: 12px;
  }

}


/* Smart App */

 .features {
      list-style: none;
      padding: 0;
      margin-left: 380px;
    }
    .features li {
    font-weight: 500;
    font-size: 20px;
    line-height: 45px;
      gap: 20px;
      font-size: 14px;
      color: #000000ff;
    }
    
.features li::before {
  content: "✔";
  display: inline-flex;
  align-items: center;
  justify-content: center;
  width: 18px; 
  gap: 20px;        
  height: 18px;
  border-radius: 50%;   
  background: #c2d3e5ff;  
  color: #6465bbff;          
  font-size: 12px;      
  margin-right: 8px;    
}

.android{
    display: flex;
    flex-direction: row;
}

.mobileimg{
    width: 420px;
    height: 300px;
    margin-left: 100px;
    margin-top: -20px;
}

  .developheading4{
    width: 731px;
    height: 270px;
    margin-left: 395px;
    font-weight: 400;
    font-size: 20px;
    color: #000;
    white-space: normal;
  line-height: 150%;

  }

    .developheading5{
    width: 731px;
    height: 140px;
    margin-left: 395px;
    font-weight: 400;
    font-size: 20px;
    color: #000;
    white-space: normal;
  line-height: 150%;

  }

  .ios{
    display: flex;
    flex-direction: row;
    margin-left: 380px;
}

.mobileimg2{
    width: 420px;
    height: 300px;
}

 .features2 {
      list-style: none;
      padding: 0;
      margin-left: 50px;
    }
    
    .features2 li {
    font-weight: 500;
    font-size: 20px;
    line-height: 45px;
      gap: 20px;
      font-size: 14px;
      color: #000000ff;
    }
    
.features2 li::before {
  content: "✔";
  display: inline-flex;
  align-items: center;
  justify-content: center;
  width: 18px; 
  gap: 20px;        
  height: 18px;
  border-radius: 50%;   
  background: #c2d3e5ff;  
  color: #6465bbff;          
  font-size: 12px;      
  margin-right: 8px;    
}

/* Mobile Responsive CSS */
@media (max-width: 767.98px) {

  .features {
    margin-left: 0;
    padding: 0 15px;
    text-align: left;
    margin-left: -128px;

  }

  .features li {
    font-size: 14px;
    line-height: 30px;
  }

  .android {
    flex-direction: column;
    margin: 0;
    align-items: center;
    text-align: center;
  }

  .mobileimg {
    width: 100%;
    height: auto;
    margin: 10px 0;
  }

  .developheading4,
  .developheading5 {
    width: 100%;
    height: auto;
    margin: 20px 0;
    font-size: 16px;
    line-height: 1.6;
    padding: 0 15px;
    text-align: justify;
  }

  .ios {
    flex-direction: column;
    margin: 0;
    align-items: center;
    text-align: center;
  }

  .mobileimg2 {
    width: 100%;
    height: auto;
    margin: 10px 0;
  }

  .features2 {
    margin: 15px 0;
    padding: 0 15px;
    text-align: left;
    margin-left: -128px;

  }

  .features2 li {
    font-size: 14px;
    line-height: 30px;
  }

  .newhead{
    margin-bottom: -20px;
  }

  .marginsize{
    margin-bottom: 18px;
  }

  .marginsize2{
      margin-top: 56px;
      margin-bottom: 18px;
  }
}

/* Benefit of Mobile App */

.mhead3{
  
    margin-left: 380px;
    margin-top: 60px;
    font-weight: 600;
    font-size: 32px;
    width: 674px;
    height: 65px;
    text-align: center;
}

.coicon{
  display: flex;
  flex-direction: row;
  margin-top: 40px;
  height: auto;
}

.mobileicon{
    margin-left: 380px;
    margin-top: -20px;
    display: flex;
    flex-direction: row;
}
.mobileicon2{
    margin-left: 20px;
    margin-top: -20px;
    display: flex;
    flex-direction: row;
}
.iconhead{
    margin-top: 13px;
    font-weight: 500;
    font-size: 25px;
    width: 228px;
    height: 64px;
    color: #000;
}
.iconpara{
    margin-top: -5px;
    font-weight: 500;
    font-size: 16px;
    width: 280px;
    height: auto;
    color: #000;

}

.iconimg{
      margin: 15px;
      margin-left: 27px;
}

@media (max-width: 768px) {
  .mhead3 {
    margin-left: 0;
    width: 100%;
    font-size: 22px;
    height: auto;
    text-align: center;
  }

  .coicon {
    flex-wrap: wrap;
    justify-content: center;
    gap: 15px;
  }

  .coicon img{
        width: 80px;
        height: 80px;
        margin-left: -120px;
        padding: 10px;
    }

    .headmargin{
      margin-top: -6px;
    }
  

  .mobileicon,
  .mobileicon2 {
    margin: 0;
    width: 47%; /* 2 cards in one row */
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    margin-top: -30px;
  }

  .iconhead {
    font-size: 18px;
    width: auto;
    height: auto;
    text-align: left;
  }

  .iconpara {
    font-size: 14px;
    width: auto;
    height: auto;
    text-align: left;
    margin-top: 10px;
  }

  .iconimg {
    margin: 10px auto;

  }

  .hchange{
    height: 50px;
  }

  .paraspace{
        width: 100%;
        margin-left: 0;
        margin-top: -80px;
        margin-bottom: 30px;
        font-size: 18px;
        line-height: 1.4;
        text-align: center;
  }
}

/* Developing sector */
.sectorhead1{
      font-weight: 600;
      font-size: 32px;
      color: #000;
      margin-left: 430px;
      
}
.sectorhead2{
      font-weight: 600;
      font-size: 32px;
      color: #000;
      margin-left: 830px;
      margin-top: -88px;
      
      
}


  .sector{
    margin-left: 380px;
    display: flex;
    flex-direction: row;
    gap: 20px;
    margin-top: -20px;
    margin-bottom: 30px;
  }
  .sectorimg{
  margin-top: 30px;
  margin-left: 80px;
  width: 210px;
  height: 210px;
  }
    .sectorimg2{
  margin-top: 15px;
  margin-left: 80px;
   width: 210px;
  height: 210px;
  }

  .cosector1{
    width: 395px;
    height: auto;
    background: #F3FAFF;
    border-radius: 2%;
  }

    .cosector2{
    width: 395px;
    height: auto;
    background: #F3FAFF;
    border-radius: 2%;
  }

  .sectorpara{
    font-weight: 400;
    font-size: 22px;
    color: #000;
    margin: 0px 26px;
    margin-top: 28px;
    line-height: 123%;
  }

  @media (max-width: 768px) {
  .sectorhead1{
    margin: 0 auto;
    font-size: 16px;
    margin-left: 20px;
  }

    .sectorhead2 {
    margin: 0 auto;
    font-size: 16px;
        margin-left: 225px;
        margin-top: -43px;

  }
  .sector {
    margin: 5px auto;
    flex-wrap: wrap;
    justify-content: center;
    gap: 15px;
  }

  .cosector1,
  .cosector2 {
    width: 46%; /* 2 cards per row */
    height: auto;
    border-radius: 8px;
  }

  .sectorimg,
  .sectorimg2 {
    margin-left: 15px;
    width: 100px;
    height: 100px;
  }

  .sectorpara {
    font-size: 14px;
    margin: 15px;
    text-align: left;
  }
}



  /* Industries */
  .industries{
    margin-left: 380px;
    display: flex;
    flex-direction: row;
    gap: 20px;
    
  }
.industriescard {
  width: 237px;
  height: 177px;
  border-radius: 12px; 
  box-shadow: 0 6px 15px rgba(0, 0, 0, 0.32); 
  display: flex; 
  flex-direction: column; 
  align-items: center; 
  justify-content: center; 
  background: #fff; 
  text-align: center;
  margin-top: 20px;
}
.industrieshead{
  font-weight: 600;
  font-size: 18px;
  color: #006BA3;
  font-family: Poppins;
}

.industryimg{
  margin-top: 45px;
  width: 100px;
  height: 100px;
}


  .developheading7{
    width: 731px;
    height: 80px;
    margin-left: 395px;
    margin-top: 35px;
    margin-bottom: 80px;
    font-weight: 400;
    font-size: 22px;
    color: #000;
    white-space: normal;
  line-height: 150%;

  }

@media (max-width: 768px) {
  .industries {
    margin-left: 0;
    flex-wrap: wrap;
    justify-content: center;
    gap: 10px;
  }

  .industriescard {
    width: 30%; /* 3 cards per row */
    margin-top: 15px;
    height: 120px;
  }

  .industrieshead {
    font-size: 12px;
  }

  .industryimg {
    margin-top: 55px;
    max-width: 55px;
    height: auto;
  }
  
  .developheading7 {
    width: 100%;
    margin-left: 0;
    margin-top: -70px;
    margin-bottom: 80px;
    font-size: 18px;
    line-height: 1.4;
    text-align:left;
  }
}






/* Service List */

 .listfeatures {
      list-style: none;
      padding: 0;
      margin-left: 380px;
    }
.listfeatures li {
  display: flex;              /* keep icon + text aligned */
  align-items: flex-start;    /* align top of icon with first line */
  gap: 10px;                  /* spacing between icon and text */
  font-weight: 500;
  font-size: 18px;
  line-height: 26px;
      margin-top: 20px;
  color: #000;
}

.listfeatures li::before {
  content: "✔";
  flex-shrink: 0;             /* prevent icon from resizing */
  display: flex;
  align-items: center;
  justify-content: center;
  width: 20px;
  height: 20px;
  border-radius: 50%;
  background: #c2d3e5;
  color: #6465bb;
  font-size: 12px;
}

.list{
  display: flex;
  flex-direction: row;
      margin-top: -40px;
}

.leftlist{
    width: 755px;
    margin-right:-367px;
    margin-left: 30px;
}

@media (max-width: 768px) {
  .list {
    flex-direction: row;
    justify-content: space-between;
    margin-top: -52px;
    margin-left: 10px;
  }

  .listfeatures {
    margin-left: 0;
    padding: 0;
    width: 100%;
    gap: 15px;
  }

  .listfeatures li {
    font-size: 12px;
    line-height: 20px;
    margin-top: 15px;
  }

  .leftlist {
   width: 75%;
    margin: 0;
  }
}



/* Teacnologies */
.mhead5{
  
    margin-left: 380px;
    margin-top: 20px;
    font-weight: 600;
    font-size: 32px;
    width: 674px;
    height: 65px;
    text-align: center;
}

.tecnologies{
  margin-left: 380px;
  display: flex;
  flex-direction: row;
  gap: 25px;
}
.technologiescard{
  
  margin-top: -35px;
    width: 104px;
    height: 104px;
    border: 1px solid #caccceff; 
    border-radius: 50%;
    margin-top: -10px;

}
.tech{
  display: flex;
  flex-direction: column;
  gap: 80px;
}

.technologiescard img{
  margin-top: 5px;
}

.technologieshead{
    color: #000;
    font-weight: 600;
    font-size: 18px;
    text-align: center;
    margin-left: -10px;
    margin-top: 10px;
}

.techicon{
  margin-left: 4px;
  width: 90px;
  height: 88px;
  padding: 7px;
}

@media (max-width: 768px) {

  .tech{
  gap: 10px;
}
  .mhead5 {
    margin-left: 0;
    width: 100%;
    font-size: 22px;
    height: auto;
    text-align: center;
  }

  .tecnologies {
    margin-left: 0;
    flex-wrap: wrap;
    justify-content: center;
    gap: 15px;
  }

  .technologiescard {
    width: 30%; /* 3 cards per row */
    height: auto;
    margin: 10px 0;
  }

  .technologiescard img {
    margin-top: 0;
    max-width: 60px;
    height: auto;
    margin-left: 25px;
    margin-top: 15px;
  }

  .technologieshead {
    font-size: 14px;
    margin: 5px 0 0 0;
    text-align: center;
  }

  .techicon {
    width: 60px;
    height: 60px;
    margin: 0 auto;
    padding: 5px;
  }
}


/* Awards */
.mhead6{
  
    margin-left: 380px;
    margin-top: 80px;
    font-weight: 600;
    font-size: 32px;
    width: 674px;
    height: 65px;
    text-align: center;
}

  .awards{
    
    margin-left: 380px;
    display: flex;
    flex-direction: row;
    gap: 20px;
    margin-top: -20px;
    margin-bottom: 50px;
  }
  .awardimg{
  margin-top: 30px;
  margin-left: 135px;
  width: 90px;
  height: 90px;
  border: 1px solid #e6e9ecff; 
  border-radius: 50%;
  }
  .coaward1{
    border-radius: 2%;
    width: 365px;
    height: auto;
    background: #ffffff;
    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.32); 
    padding-bottom: 25px;
  }

    .coaward2{
      border-radius: 2%;
    width: 365px;
    height: auto;
    background: #ffffff;
    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.32); 
    padding-bottom: 25px;
  }

  .awardhead{
    width: 300px;
    height: 31px;
    margin-left: 28px;
    line-height: 100%;
    margin-top: 10px;
    text-align: center;
    font-weight: 500;
    font-size: 25px;
  }

  .awardpara{
    font-weight: 400;
    font-size: 16px;
    color: #000;
    margin: 0px 26px;
    line-height: 150%;
    margin-top: 28px;
    line-height: 123%;
    text-align: justify;
  }

  @media (max-width: 768px) {
  .mhead6 {
    margin-left: 0;
    width: 100%;
    font-size: 22px;
    height: auto;
    text-align: center;
    margin-top: 40px;
  }

  .awards {
    margin: 20px auto;
    flex-wrap: wrap;
    justify-content: center;
    gap: 15px;
  }

  .coaward1,
  .coaward2 {
    width: 47%; /* 2 cards per row */
    height: auto;
  }

  .awardimg {
    margin: 20px auto 10px auto; /* center inside card */
    display: block;
    height: 60px;
    width: 60px;
  }

  .awardhead {
      width: auto;
      font-size: 16px;
      margin: 10px auto;
      text-align: center;
      margin-left: 10px;
  }

  .awardpara {
    font-size: 12px;
    margin: 10px 15px 20px 10px;
    text-align: left;
}

  }
  /* Membership */

  .membership{
    margin-left: 380px;
    margin-top: -15px;
    margin-bottom: 40px;

  }

  .memberimg1{
    gap: 15px;
    margin-left: 10px;
  }

  @media (max-width: 768px) {
  .membership {
  margin-left: 0;
  margin-top: -10px;
  margin-bottom: 20px;
  display: flex;
  gap: 19px;
    }
  

  .memberimg1 {
    margin-left: 0;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 10px;
    height: 110px;
        width: 110px;
  }
}


  /* Client */


  

.client-slider {
        max-width: 780px;
        margin: 0 auto;
        margin-left: 380px;
      }

      .card {
        background: white;
        width: 350px;
        padding: 30px 20px 20px;
        border-radius: 25px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        text-align: center;
        position: relative;
        margin: 15px;
      }

      .card::after {
        content: "";
        position: absolute;
        top: 20px;
        right: -10px;
        width: 20px;
        height: calc(100% - 40px);
        background: #007bff;
        border-radius: 0 20px 20px 0;
        z-index: -1;
      }

      .card img {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        object-fit: cover;
        margin-top: -50px;
        border: 4px solid white;
      }

      .card h2 {
        margin: 15px 0 5px;
        font-size: 20px;
        color: #333;
      }

      .card p.title {
        margin: 0 0 15px;
        font-size: 14px;
        color: #777;
        margin-bottom: -90px;
        text-align: center;
      }

      .card p.text {
        font-size: 14px;
        color: #555;
        line-height: 1.6;
        margin: 0;
      }

      .quote {
        color: #007bff;
        font-size: 24px;
        display: block;
        margin-top: 100px;
      }

      /* Slick dots customization */
      .slick-dots li button:before {
        color: #007bff;
        font-size: 12px;
      }
      .slick-dots li.slick-active button:before {
        color: #0056b3;
      }
    /* Mobile Responsive */
@media (max-width: 768px) {
  .client-slider {
    margin-left: 0;        /* Center slider on mobile */
    padding: 0 15px;       /* Add some horizontal padding */
    max-width: 100%;
  }

  .card {
    max-width: 90%;        /* Make card almost full width */
    margin: 15px auto;     /* Center each card */
    padding: 20px 15px;    /* Adjust padding for smaller screens */
  }

  .card::after {
    width: 10px;            /* Smaller side bar for mobile */
    top: 15px;
    right: -5px;
    height: calc(100% - 30px);
  }

  .card img {
    width: 60px;           /* Smaller image */
    height: 60px;
    margin-top: -40px;     /* Adjust overlap */
  }

  .card h2 {
    font-size: 18px;       /* Slightly smaller heading */
    margin: 10px 0 5px;
  }

  .card p.title {
    font-size: 13px;
    margin-bottom: 5px;    /* Reduce large negative margin */
  }

  .card p.text {
    font-size: 13px;
    line-height: 1.4;
  }

  .quote {
    font-size: 20px;
    margin-top: 5px;
  }

  /* Adjust slick dots for mobile */
  .slick-dots li button:before {
    font-size: 10px;
  }
  .slick-dots li.slick-active button:before {
    color: #0056b3;
  }
}
      


    /* Q&A */
.mhead8{
  
    margin-left: 380px;
    margin-top: 80px;
    font-weight: 600;
    font-size: 32px;
    color: #037FFF;
    width: 674px;
    height: 65px;
    text-align: center;
}

.question{
  margin-left: 300px;
}

    .queshead{

           font-weight: 600;
           font-size: 20px;
           line-height: 22px;
           color: #037FFF;
            text-align: center;
            margin-top: 20px;
            margin-bottom: 50px;
    }

    
    .faq-container {
      max-width: 695px;
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
      padding: 8px;
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
  .mhead8 {
    margin-left: 0;
    margin-top: 40px;
    font-size: 24px;
    width: 100%;
    height: auto;
    padding: 0 10px;
  }

  .question {
    margin-left: 0;
    padding: 0 10px;
  }

  .queshead {
    font-size: 18px;
    margin-top: 15px;
    margin-bottom: 30px;
  }

  .faq-container {
    max-width: 100%;
    padding: 0 10px;
  }

  .faq-question {
    font-size: 16px;
    padding: 12px 15px;
  }

  .faq-answer {
    font-size: 14px;
    padding: 0 15px;
  }
}

 
  .developheading9{
    width: 585px;
    height: 87px;
    margin-left: 475px;
    margin-top: -35px;
    margin-bottom: 20px;
    font-weight: 500;
    font-size: 24px;
    color: #000;
    white-space: normal;
  line-height: 135%;

  }

  .lastbtn{
    margin-left: 600px;
    text-align: center;
    width: 164px;
    height: 58px;
    background: #037FFF;
    color: white;
    border: none;
    border-radius: 5%;
    margin-top: -30px;
    font-weight: 500;
    font-size: 18px;
  }

  .cimg{
    width: 120px;
    height: 90px;
    border-radius: 50%;
    padding: 15px;
    margin: 10px auto;
    border: 1px solid #d1d4d8ff; 
    margin-left: 11px;
}

.last{
  margin-left: 380px;
  
}

@media (max-width: 768px) {
  .developheading9 {
    width: 100%;
    height: auto;
    margin-left: 0;
    margin-top: 10px;
    margin-bottom: 15px;
    font-size: 18px;
    text-align: center;
    padding: 0 10px;
  }

  .lastbtn {
    margin-left: 0;
    margin-top: 15px;
    width: 140px;
    height: 50px;
    font-size: 16px;
    display: block;
    margin-right: auto;
    margin-left: auto;
  }

  .cimg {
width: 95px;
height: 80px;
margin: 8px 7px auto;
  }

  .last {
    margin-left: 0;
    text-align: center;
    padding: 0 10px;
  }
}




</style>



<div class="main">
<!-- Head part -->
     <div class="head">
    
        <div class="headsidebar">
            <div class="headmenu-item active">
                <div class="headimg">
                    <img src="awedget/demo_service/h1.webp" alt="">
                </div>
                <div class="">
                    <h4>Android Apps Development <br> Best Android Solution</h4>
                </div>
            </div>
            <div class="headmenu-item">
                <div class="headimg">
                    <img src="awedget/demo_service/h2.webp" alt="">
                </div>
                <div class="headh">
                    <h4>iOS App Development <br> iPhone App Service</h4>
                </div>
            </div>
            <div class="headmenu-item">
                <div class="headimg">
                    <img src="awedget/demo_service/h3.webp" alt="">
                </div>
                <div class="headh">
                    <h4>Windows Apps Development <br> Windows Device Solution </h4>
                </div>
            </div>
            <div class="headmenu-item">
                <div class="headimg">
                    <img src="awedget/demo_service/h4.webp" alt="">
                </div>
                <div class="headh">
                    <h4>Hybrid Mobile Apps<br>Next Generation Apps </h4>
                </div>
            </div>
             <div class="calldiv">
              
            <img src="awedget/demo_service/call.webp" alt="" class="callimg">
            <a href="tel:+8801404453008" class="call-btn" >Call for free consultation</a>
            
             </div>
        </div>
<div >
       <div class="check">
                <div class="headmain-content">
            <h2>Android Apps Development | Best Android Solution</h2>
            <p>
                Website is the face of your business and services that you provide so Web design and development services are like the strong starting of your business success. Mysoftheaven (BD) Ltd, offer web development services professionally that will fasten your business growth. A well-designed website is the necessity to ensure the perfect delivery of your services to the targeted audience. Web design and Web development are the most important and also sensitive tasks for a business.
            </p>
            <div class="headbuttons">
                <button class="get-started">Get Started</button>
            </div>
         </div>
          <div class="screenshot">
         <img src="awedget/demo_service/screen.webp" alt="Website Screenshot">
        </div>
       </div>
    <!-- Middel Part -->
    <div class="middle">
        <div>
            <h1 class="mhead newhead2">Explore Mobile App Development with <span style="color:#037FFF">Mysoftheaven</span></h1>
        </div>
        <div class="mcard">
        <div class="maincard">
            <img src="awedget/demo_service/card1.webp" alt="icon">
            <h2>Cross-Platform App Development</h2>
            <p> We craft native mobile applications for iOS and Android, designed for speed, seamless performance, and intuitive user experiences—fully optimized to leverage each device’s unique capabilities.</p>

        </div>
        <div class="maincard">
            <img src="awedget/demo_service/card2.webp" alt="icon">
            <h2>Android App Development</h2>
            <p> We craft native mobile applications for iOS and Android, designed for speed, seamless performance, and intuitive user experiences—fully optimized to leverage each device’s unique capabilities.</p>

        </div>
        </div>
        <!-- Service card -->
          <section>
        <h1 class="mhead2 newhead2">Mobile App Development Service Summary of <span style="color:#037FFF">Mysoftheaven</span></h1>

        <div class="app">
        <div class="appcard" >
        <img src="awedget/demo_service/newapp4.webp" alt="Playstore">
        <h2>200+<br>Total Published<br>Playstore Apps</h2>
      </div>

        <div class="appcard" style="background-color: #307dcfff;">
        <img src="awedget/demo_service/newapp3.webp" alt="Playstore">
        <h2>200+<br>Total Published<br>Playstore Apps</h2>
             </div>

        <div class="appcard" style="background-color: #b30054ff;">
        <img src="awedget/demo_service/newapp2.webp" alt="Playstore">
        <h2>200+<br>Total Published<br>Playstore Apps</h2>
             </div>

        <div class="appcard" style="background-color: #b38300ff;">
        <img src="awedget/demo_service/newapp1.webp" alt="Playstore">
        <h2>200+<br>Total Published<br>Playstore Apps</h2>
             </div>
             
        </div>
        <h1 class="apphead">Some of our Developed Apps</h1>
        <div class="developh"> We craft seamless mobile experiences that drive business success, streamline operations, and boost customer engagement. With deep expertise in user experience and mobile technology, we design across ecosystems to create maximum impact for your users.</div>
        <img src="awedget/demo_service/app_develop.webp" alt="" class="developimg">
        <p class="developheading">At Mysoftheaven, we specialize in building high-quality mobile applications backed by years of experience and a proven track record. Having developed numerous apps across industries, we understand the mobile app development process inside out.Our services empower you to build, customize, and deploy powerful apps across all major mobile platforms. With a team of skilled developers, we translate your ideas into functional, user-friendly applications that deliver real business value.Our mobile app development process covers the entire cycle—from in-depth business analysis and UX/UI design to development, testing, deployment, and ongoing support. We leverage modern tools, agile methodologies, and user-centered design practices to ensure that every app we build is functional, intuitive, and aligned with your business objectives.</p>

          <p class="developheading2 appsummary"> What sets Mysoftheaven apart is our ability to transform ideas into scalable products that drive measurable results. We not only focus on technical excellence but also emphasize delivering apps that improve customer engagement, streamline operations, and accelerate business growth.</p>
          </section>
         <!-- Process  -->
          <section>
           <h1 class="apphead apphead2">Our Working Process</h1>
           <div class="process">
            <div class="pro1">Requirement Analysis </div>
            <div class="pro2">Development </div>
            <div class="pro3">Deployment </div>
             <div class="pro4">Customer Support</div>
           </div>
          <img src="awedget/demo_service/process.webp" alt="" class="processimg">
          
            <div class="pro5">Product Design</div>
            <div  class="pro6">Testing </div>
            <div class="pro7">Operational Testing </div>
           </div>
         </section>
           <h1 class="mhead2 newhead">Some of our national mobile apps</h1>
          <div class="mobileapp-slider">
            <div><img src="awedget/demo_service/mobileapp1.webp" alt="" class="mobileappimg"></div>
            <div><img src="awedget/demo_service/mobileapp2.webp" alt="" class="mobileappimg"></div>
            <div><img src="awedget/demo_service/mobileapp3.webp" alt="" class="mobileappimg"></div>
            <div><img src="awedget/demo_service/mobileapp4.webp" alt="" class="mobileappimg"></div>
            <div><img src="awedget/demo_service/mobileapp5.webp" alt="" class="mobileappimg"></div>
          </div>

            <!-- <div class="tech-slider">
            <div class="mobileapp">
            <img src="awedget/demo_service/mobileapp1.webp" alt="" style="width: 100px; height:100px; gap:10px">
            <img src="awedget/demo_service/mobileapp2.webp" alt="" style="width: 160px; height:100px;">
            <img src="awedget/demo_service/mobileapp3.webp" alt="" style="width: 160px; height:100px;">
            <img src="awedget/demo_service/mobileapp4.webp" alt="" style="width: 160px; height:100px;">
            <img src="awedget/demo_service/mobileapp5.webp" alt="" style="width: 160px; height:100px;">
           </div>
            </div> -->


            <h1 class="mhead2 newhead2 marginsize2">Building Smarter Mobile Apps with <span style="color:#037FFF">Mysoftheaven</span></h1>
           <p class="developheading3 developheadingmob">Android App Development is the process of creating powerful and user-friendly applications for Android devices. As the most versatile platform, Android powers phones, tablets, watches, TVs, cars, and more—making it a technology that connects and empowers everyone.Mysoftheaven is a leading Android app development company in Bangladesh.We craft custom apps for smartphones, tablets, wearables, and TVs.Our expert developers ensure compatibility with the latest Android OS.Delivering scalable, high-performance apps for startups and global brands. </p>
          
         <section>
        <div class="android">
        <div>
        <ul class="features">
        <li>Android Smartphone Apps</li>
        <li>Android Tablet Apps</li>
        <li>Android Things Apps</li>
        <li>Android Wear Apps</li>
        <li>Android Apps with Dialogflow</li>
        <li>Android Wear Apps</li>
      </ul>
        </div>
        <div>
            <img src="awedget/demo_service/mobile.webp" alt="" class="mobileimg">
        </div>
    </div>
        
         
            <p class="developheading4">At Mysoftheaven, we stand as one of Bangladesh’s top Android app development companies, delivering tailored solutions for businesses of all sizes—from startups to global enterprises. Our skilled developers specialize in creating custom apps designed for smartphones, tablets, Android Wear, and Android TV, ensuring smooth performance and compatibility with the latest Android OS.

            <br><br>  By combining deep technical expertise with creative design, we deliver high-performance, future-ready Android applications that enhance user experience, support business growth, and provide maximum impact in today’s digital ecosystem.</p>
          </section>
          <section>
            <h1 class="mhead2 newhead marginsize ">iOS App Development with <br> <span style="color:#037FFF">Mysoftheaven</span></h1>
            <p class="developheading5">iOS App Development involves creating mobile applications specifically designed for Apple devices such as the iPhone, iPad, and iPod Touch. It focuses on delivering seamless performance, intuitive interfaces, and secure functionality tailored to Apple’s ecosystem.</p>
              <div class="ios">
                <div>
                <img src="awedget/demo_service/mobile.webp" alt="" class="mobileimg2">
            </div>
            <div>
            <ul class="features2">
            <li>Android Smartphone Apps</li>
            <li>Android Tablet Apps</li>
            <li>Android Things Apps</li>
            <li>Android Wear Apps</li>
            <li>Android Apps with Dialogflow</li>
            <li>Android Wear Apps</li>
            </ul>
              </div>
          </section>
          <p class="developheading4">At Mysoftheaven, we specialize in developing cutting-edge iOS applications tailored to Apple’s ecosystem, including iPhone, iPad, iPod Touch, and even Apple Watch. Our team of expert iOS developers combines creativity with technical proficiency to craft apps that are fast, secure, and user-friendly.

<br><br>With years of experience in delivering iOS solutions for startups, enterprises, and global brands, we understand the unique standards and guidelines set by Apple. From sleek interfaces to seamless performance, we ensure every application meets App Store requirements while exceeding user expectations.</p>
          <section>
            <h1 class="mhead3 newhead2">Benefits of Mobile App Development for Business</h1>

               <div class="coicon">
                <div class="mobileicon">
                <div class="item">
                <img src="awedget/demo_service/mobileicon1.webp" alt="">
               </div>
               <div class="icondata">
                 <div class="iconhead"> Enhanced Customer Engagement</div>
                 <div class="iconpara">Apps provide direct, personalized interaction with your customers.</div>
               </div>
                </div>

                <div class="mobileicon2">
                <div class="item">
                <img src="awedget/demo_service/mobileicon4.webp" alt="">
               </div>
               <div class="icondata">
                 <div class="iconhead"> Increased Brand Visibility</div>
                 <div class="iconpara">Being on users’ mobile screens increases brand awareness and recall.</div>
               </div>
                </div>
              </div>

                <div class="coicon">
                <div class="mobileicon">
                <div class="item">
                <img src="awedget/demo_service/mobileicon2.webp" alt="">
               </div>
               <div class="icondata">
                 <div class="iconhead"> Better CustomerService</div>
                 <div class="iconpara"> A well-designed app helps your business stand out in the market.</div>
               </div>
                </div>

                <div class="mobileicon2">
                <div class="item">
                <img src="awedget/demo_service/mobileicon5.webp" alt="" class="iconimg hchange">
               </div>
               <div class="icondata">
                 <div class="iconhead headmargin">Personalized User Experience</div>
                 <div class="iconpara">User Experience to meet the unique needs and preferences of individual users.</div>
               </div>
                </div>
              </div>

               <div class="coicon">
                <div class="mobileicon">
                <div class="item">
                <img src="awedget/demo_service/mobileicon3.webp" alt="" >
               </div>
               <div class="icondata">
                 <div class="iconhead">Competitive Advantage</div>
                 <div class="iconpara"> A mobile app can give you an edge over competitors who do not have one.</div>
               </div>
                </div>

                <div class="mobileicon2">
                <div class="item">
                <img src="awedget/demo_service/mobileicon6.webp" alt="" class="iconimg hchange">
               </div>
               <div class="icondata">
                 <div class="iconhead headmargin"> Accessibility & Convenience</div>
                 <div class="iconpara"> Customers can access your business anytime, anywhere.</div>
               </div>
                </div>
              </div>
                
          </section>
       <!-- Build Apps -->
          <section>
            <h1 class="mhead2 newhead2">Mysoftheaven helps you build apps for</h1>
            <p class="paraspace developheading7 developheadingnew ">We follow a user-centric mobile app development strategy to meet every client’s unique requirements. We design and build apps tailored for diverse sectors, ensuring functionality, scalability, and a seamless user experience.</p>
            <div class="gapsector">
            <h1 class="sectorhead1">Corporate</h1>
            <h1 class="sectorhead2">Public Sector</h1>

            <div class="sector">
              <div class="cosector1">
                <img src="awedget/demo_service/buildapp1.webp" alt="" class="sectorimg">
                <p class="sectorpara"> Our collaborative consulting on mobile strategy catalyzes streamlining  IT frameworks and processes with the mobile roadmap aligned with  corporate scenarios, policies, and current systems.</p>
              </div>
              <div class="cosector2">
                <img src="awedget/demo_service/buildapp2.webp" alt="" class="sectorimg2">
                <p class="sectorpara">Mysoftheaven collaborative consulting on the Mobile Strategy serves as a catalyst in streamlining IT (Information Technology) frameworks and  processes with the mobile roadmap that is aligned with public sector  scenarios, policies, and current systems.</p>
              </div>
            </div>

            <h1 class="sectorhead1">Small Business</h1>
            <h1 class="sectorhead2">Individuals</h1>

            <div class="sector">
              <div class="cosector1">
                <img src="awedget/demo_service/buildapp3.webp" alt="" class="sectorimg">
                <p class="sectorpara">Our collaborative consulting on mobile strategy catalyzes streamlining  IT frameworks and processes with the mobile roadmap aligned with  corporate scenarios, policies, and current systems.</p>
              </div>
              <div class="cosector2">
                <img src="awedget/demo_service/buildapp4.webp" alt="" class="sectorimg2">
                <p class="sectorpara">Mysoftheaven collaborative consulting on the Mobile Strategy serves as a catalyst in streamlining IT (Information Technology) frameworks and  processes with the mobile roadmap that is aligned with public sector  scenarios, policies, and current systems.</p>
              </div>
            </div>

            </div>

          </section>
          <!-- Industries -->
          <section>
            <h1 class="mhead2">Industries We Serve</h1>
            <p class="developheading7">With over a decade of experience as a leading software development  company in Bangladesh, we have developed many user-centric and  business-friendly mobile applications for our clients in nearly every  industry. Including the following:</p>
            <div class="industries">
              <div class="industriescard">
                <img src="awedget/demo_service/industry1.webp" alt="" class="industryimg">
                <h1 class="industrieshead">Finance & Banking</h1>
              </div>

               <div class="industriescard">
                <img src="awedget/demo_service/industry5.webp" alt="" class="industryimg">
                <h1 class="industrieshead">E-commerce</h1>
              </div>

                <div class="industriescard">
                <img src="awedget/demo_service/industry9.webp" alt="" class="industryimg">
                <h1 class="industrieshead">Real Estate</h1>
              </div>
            </div>

             <div class="industries">
              <div class="industriescard">
                <img src="awedget/demo_service/industry2.webp" alt="" class="industryimg">
                <h1 class="industrieshead">Software</h1>
              </div>

               <div class="industriescard">
                <img src="awedget/demo_service/industry6.webp" alt="" class="industryimg">
                <h1 class="industrieshead">Health & Fitness</h1>
              </div>

                <div class="industriescard">
                <img src="awedget/demo_service/industry10.webp" alt="" class="industryimg">
                <h1 class="industrieshead">Food & Drink</h1>
              </div>
            </div>

              <div class="industries">
              <div class="industriescard">
                <img src="awedget/demo_service/industry3.webp" alt="" class="industryimg">
                <h1 class="industrieshead">Medical</h1>
              </div>

               <div class="industriescard">
                <img src="awedget/demo_service/industry7.webp" alt="" class="industryimg">
                <h1 class="industrieshead">Education</h1>
              </div>

                <div class="industriescard">
                <img src="awedget/demo_service/industry11.webp" alt="" class="industryimg">
                <h1 class="industrieshead">Travel</h1>
              </div>
            </div>

              <div class="industries">
              <div class="industriescard">
                <img src="awedget/demo_service/industry4.webp" alt="" class="industryimg">
                <h1 class="industrieshead">Automobile </h1>
              </div>

               <div class="industriescard">
                <img src="awedget/demo_service/industry8.webp" alt="" class="industryimg">
                <h1 class="industrieshead">Business</h1>
              </div>

                <div class="industriescard">
                <img src="awedget/demo_service/industry12.webp" alt="" class="industryimg">
                <h1 class="industrieshead">Entertainment</h1>
              </div>
            </div>
          </section>
      <!-- Service List -->
          <h1 class="mhead2 newhead2">Mobile Application Development Services Offered by <span style="color:#037FFF">Mysoftheaven</span></h1>
          <p class="developheading7">At Mysoftheaven, we deliver end-to-end mobile app development services tailored to your business needs. Our expertise spans across platforms and technologies, ensuring seamless user experiences and high-performance applications.</p>

          <section>
            <h1 class="mhead2">Mobile App Development Services List</h1>
            <div class="list">
              <div class="leftlist">
        <ul class="listfeatures">
        <li>Android App Development</li>
        <li>Cross-Platform App Development</li>
        <li>Hybrid App Developmen</li>
        <li>Native Mobile App Development</li>
        <li>Mobile Apps Driven by Cloud</li>
        <li>E-commerce Mobile App Development</li>
        <li>Custom Business Mobile App Development</li>
        <li>Custom Mobile App Development</li>
        <li>Consumer Mobile App Development</li>
        <li>Video Streaming App Development</li>
        <li>Native Mobile App Development</li>
        <li>Mobile Banking App Development</li>
        <li>Financial Mobile App Development</li>
        <li>Custom Business Mobile App Development</li>
      </ul>
              </div>
              <div class="rightlist">
        <ul class="listfeatures">
        <li>Angular Mobile App Development</li>
        <li>GIS Mobile App Development</li>
        <li>Automotive Mobile App Development</li>
        <li>Native Mobile App Development</li>
        <li>Mobile Apps Driven by Cloud</li>
        <li>Xamarin App Development</li>
        <li>React Native App Development</li>
        <li>Ionic App Development</li>
        <li>iBeacon App Development</li>
        <li>Enterprise Mobility Strategy</li>
        <li>Cross-Platform Mobile App Development</li>
        <li>Food Delivery App Development</li>
        <li>Taxi Booking App Development</li>
        <li>Health and Fitness App Development</li>
      </ul>
        </div>
          </div>
          </section>

          <!-- Technologies -->
           <section>
            <h1 class="mhead5">Mobile Technologies We Work With</h1>
             <div class="tech">
                          <div class="tecnologies">
              <div class="technologiescard">
               <img src="awedget/demo_service/techicon1.webp" alt="" class="techicon">
               <h1 class="technologieshead">Android</h1>
              </div>
              <div class="technologiescard">
               <img src="awedget/demo_service/techicon2.webp" alt="" class="techicon">
               <h1 class="technologieshead">iOS</h1>
              </div>
              <div class="technologiescard">
               <img src="awedget/demo_service/techicon3.webp" alt="" class="techicon">
               <h1 class="technologieshead">Java</h1>
              </div>
              <div class="technologiescard">
               <img src="awedget/demo_service/techicon12.webp" alt="" class="techicon">
               <h1 class="technologieshead">React Native</h1>
              </div>
              <div class="technologiescard">
               <img src="awedget/demo_service/techicon5.webp" alt="" class="techicon">
               <h1 class="technologieshead">Objective-C</h1>
              </div>
              <div class="technologiescard">
               <img src="awedget/demo_service/techicon6.webp" alt="" class="techicon">
               <h1 class="technologieshead">Flutter</h1>
              </div>
            </div>
                        <div class="tecnologies">
              <div class="technologiescard">
               <img src="awedget/demo_service/techicon7.webp" alt="" class="techicon">
               <h1 class="technologieshead">Xamarin</h1>
              </div>
              <div class="technologiescard">
               <img src="awedget/demo_service/techicon8.webp" alt="" class="techicon">
               <h1 class="technologieshead">Swift</h1>
              </div>
              <div class="technologiescard">
               <img src="awedget/demo_service/techicon9.webp" alt="" class="techicon">
               <h1 class="technologieshead">VR</h1>
              </div>
              <div class="technologiescard">
               <img src="awedget/demo_service/techicon10.webp" alt="" class="techicon">
               <h1 class="technologieshead">AR</h1>
              </div>
              <div class="technologiescard">
               <img src="awedget/demo_service/techicon11.webp" alt="" class="techicon">
               <h1 class="technologieshead">Ionic</h1>
              </div>
              <div class="technologiescard">
               <img src="awedget/demo_service/techicon4.webp" alt="" class="techicon">
               <h1 class="technologieshead">Kotlin</h1>
              </div>
            </div>
             </div>
           </section>
         <!-- Awards & Recognition -->
           <section>
            <h1 class="mhead6">Awards & Recognition</h1>
            <div class="award">
              <div class="awards">
              <div class="coaward1">
                <img src="awedget/demo_service/award1.webp" alt="" class="awardimg">
                <h1 class="awardhead">Land Development <br> Tax System </h1>
                <p class="awardpara"> About 4.2 crore Holding data , 11+ crore holdingowner data stored in the system. Citizen paying their LD Tax through the system and every day a good amount of revenue automatically received by Bangladesh bank.</p>
              </div>
              <div class="coaward2">
                <img src="awedget/demo_service/award2.webp" alt="" class="awardimg">
                <h1 class="awardhead">Digital Bangladesh <br> Award 2022</h1>
                <p class="awardpara"> About 4.2 crore Holding data , 11+ crore holding owner data stored in the system. Citizen paying their LD Tax through the system and every day a good amount of revenue automatically received by Bangladesh bank.</p>
              </div>
            </div>
            </div>

            <div class="award">
              <div class="awards">
              <div class="coaward1">
                <img src="awedget/demo_service/award3.webp" alt="" class="awardimg">
                <h1 class="awardhead">Vumi Seba <br>Mobile App</h1>
                <p class="awardpara">About 4.2 crore Holding data , 11+ crore holdingowner data stored in the system. Citizen paying their LD Tax through the system and every day a good amount of revenue automatically received by Bangladesh bank.</p>
              </div>
              <div class="coaward2">
                <img src="awedget/demo_service/award4.webp" alt="" class="awardimg">
                <h1 class="awardhead">Digital Bangladesh <br> Award 2022</h1>
                <p class="awardpara"> About 4.2 crore Holding data , 11+ crore holding owner data stored in the system. Citizen paying their LD Tax through the system and every day a good amount of revenue automatically received by Bangladesh bank.</p>
              </div>
            </div>
            </div>
           </section>
           <!-- Membership -->
           <section>
            <h1 class="mhead6">Membership  & Certification</h1>
            <div class="membership">
              <img src="awedget/demo_service/member1.webp" alt="" class="memberimg1">
              <img src="awedget/demo_service/member2.webp" alt="" class="memberimg1">
              <img src="awedget/demo_service/member3.webp" alt="" class="memberimg1">
            </div>
           </section>
           <!-- client -->
            <section>
              <h1 class="mhead5">What Our Clients Say About Us</h1>

              <div class="client-slider">
                <div class="card">
                  <img src="awedget/demo_service/client1.webp" alt="Hannah Schmitt">
                  <h2>Hannah Schmitt</h2>
                  <p class="title">Lead designer</p>
                  <span class="quote">“</span>
                  <p class="text">
                    As a strategic partner to our clients across different industries, we help them deliver their business goals and drive technology-led transformations. Our clients worldwide have achieved significant business results using our world-class solutions and have recognized us for our efforts.
                  </p>
                </div>

                <div class="card">
                  <img src="awedget/demo_service/client2.webp" alt="Hannah Schmitt">
                  <h2>Hannah Schmitt</h2>
                  <p class="title">Lead designer</p>
                  <span class="quote">“</span>
                  <p class="text">
                    As a strategic partner to our clients across different industries, we help them deliver their business goals and drive technology-led transformations. Our clients worldwide have achieved significant business results using our world-class solutions and have recognized us for our efforts.
                  </p>
                </div>

                <div class="card">
                  <img src="awedget/demo_service/client2.webp" alt="Hannah Schmitt">
                  <h2>Hannah Schmitt</h2>
                  <p class="title">Lead designer</p>
                  <span class="quote">“</span>
                  <p class="text">
                    As a strategic partner to our clients across different industries, we help them deliver their business goals and drive technology-led transformations. Our clients worldwide have achieved significant business results using our world-class solutions and have recognized us for our efforts.
                  </p>
                </div>

              </div>
            </section>

            <!-- Q&A -->
             <section>
              <h1 class="mhead8">Fequently asked questions</h1>
              <div class="question">
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

    </div>

  </div>
              <h1 class="mhead6">We can build your story</h1>
              <p class="developheading9">We’ve built lasting partnerships with innovative businesses and entrepreneurs worldwide.</p>
              <button class="lastbtn">Get Started</button>

              <h2 class="mhead2"><span class="text-primary">Trusted</span> by 150+ paying customers</h2>
              <div class="col-lg-7 mt-5 mt-lg-0 last">
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
             </section>

        </div>
    
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
<!-- <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script> -->
<!-- <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
 <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Slick JS -->
    <script
      type="text/javascript"
      src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"
    ></script>

    <script>
$('.client-slider').slick({
  dots: true,
  arrows: false,
  infinite: true,
  autoplay: true,
  autoplaySpeed: 2000,
  slidesToShow: 2,      // ✅ Show only 3 cards in desktop
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: { slidesToShow: 2 }
    },
    {
      breakpoint: 600,
      settings: { slidesToShow: 1 }
    }
  ]
});

$('.mobileapp-slider').slick({
  dots: true,
  arrows: false,
  infinite: true,
  autoplay: true,
  autoplaySpeed: 2000,
  slidesToShow: 4,   // ✅ 4 logos per row on desktop
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,  // tablet
      settings: { slidesToShow: 3 }
    },
    {
      breakpoint: 768,   // mobile
      settings: { slidesToShow: 3 }
    },
    {
      breakpoint: 480,   // small mobile
      settings: { slidesToShow: 3 }
    }
  ]
});


    </script>