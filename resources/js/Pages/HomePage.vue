<template>
<!DOCTYPE html>

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--  
    Document Title
    =============================================
    -->
    <title>CCF | Christian Couples Forum</title>
    <!--  
    Favicons
    =============================================
    -->
    <link rel="apple-touch-icon" sizes="57x57" href="frontend/assets/images/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="frontend/assets/images/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="frontend/assets/images/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="frontend/assets/images/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="frontend/assets/images/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="frontend/assets/images/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="frontend/assets/images/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="frontend/assets/images/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="frontend/assets/images/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="frontend/assets/images/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="frontend/assets/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="frontend/assets/images/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="frontend/assets/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="frontend/assets/images/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!--  
    Stylesheets
    =============================================
    
    -->
    <!-- Default stylesheets-->
    <link href="frontend/assets/lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Template specific stylesheets-->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Volkhov:400i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="frontend/assets/lib/animate.css/animate.css" rel="stylesheet">
    <link href="frontend/assets/lib/components-font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="frontend/assets/lib/et-line-font/et-line-font.css" rel="stylesheet">
    <link href="frontend/assets/lib/flexslider/flexslider.css" rel="stylesheet">
    <link href="frontend/assets/lib/owl.carousel/dist/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="frontend/assets/lib/owl.carousel/dist/assets/owl.theme.default.min.css" rel="stylesheet">
    <link href="frontend/assets/lib/magnific-popup/dist/magnific-popup.css" rel="stylesheet">
    <link href="frontend/assets/lib/simple-text-rotator/simpletextrotator.css" rel="stylesheet">
    <!-- Main stylesheet and color file-->
    <link href="frontend/assets/css/style.css" rel="stylesheet">
    <link id="color-scheme" href="frontend/assets/css/colors/default.css" rel="stylesheet">
  </head>
  
      <div class="page-loader">
        <div class="loader">Loading...</div>
      </div>
      <nav class="navbar navbar-custom navbar-transparent navbar-fixed-top one-page" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#custom-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="navbar-brand" href="/">CCF</a>
          </div>
          <div class="collapse navbar-collapse" id="custom-collapse">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#totop">Home</a></li>
              <li><a class="section-scroll" href="#services">About Us</a></li>
              <!--li><a class="section-scroll" href="#works">Works</a></li-->
              <li><a class="section-scroll" href="#alt-features">Nuggets</a></li>
              <li><a class="section-scroll" href="#news">Blog</a></li>
              <li><a class="section-scroll" href="#contact">Counselling</a></li>
              <li><a class="section-scroll" href="#team">Team</a></li>
              <li><a class="section-scroll" href="/login">Login</a></li>
            </ul>
          </div>
        </div>
      </nav>

      @include('header')
 
 <section class="home-section home-parallax home-fade home-full-height" id="home">
   <div class="hero-slider">
     <ul class="slides">
       <li class="bg-dark-30 bg-dark" style="background-image:url(frontend/assets/images/welcome-couple.jpg);">
         <div class="titan-caption">
           <div class="caption-content">
             <div class="font-alt mb-30 titan-title-size-2">Hello &amp; welcome</div>
             <div class="font-alt mb-40 titan-title-size-4">This is Christian Couples Forum</div><a class="section-scroll btn btn-border-w btn-round" href="#about">Learn More</a>
           </div>
         </div>
       </li>
       <li class="bg-dark-30 bg-dark" style="background-image:url(frontend/assets/images/loving-couple.jpg);">
         <div class="titan-caption">
           <div class="caption-content">
             <div class="font-alt mb-30 titan-title-size-2">We Are Christian Couples </div>
             <div class="font-alt mb-30 titan-title-size-3">Peaceful Home is Our Concern
             </div>
           </div>
         </div>
       </li>
       <li class="bg-dark-30 bg-dark" style="background-image:url(frontend/assets/images/praying-couple.jpg);">
         <div class="titan-caption">
           <div class="caption-content">
             <div class="font-alt mb-30 titan-title-size-2">Through the undiluted teaching of the word of God and Prayers</div>
             <div class="font-alt mb-40 titan-title-size-3">We bring about an atmosphere of God's presence in our homes</div>
           </div>
         </div>
       </li>
       <li class="bg-dark-30 bg-dark" style="background-image:url(frontend/assets/images/playing-couple.jpg);">
         <div class="titan-caption">
           <div class="caption-content">
             <div class="font-alt mb-30 titan-title-size-2">We also keep the love atmosphere fresh</div>
             <div class="font-alt mb-40 titan-title-size-3">By imbibing practical and dynamic ways to relate with our spouses</div>
           </div>
         </div>
       </li>
       <li class="bg-dark-30 bg-dark" style="background-image:url(frontend/assets/images/nice-couple.jpeg);">
         <div class="titan-caption">
           <div class="caption-content">
             <div class="font-alt mb-30 titan-title-size-2">If this looks like what you're looking for</div>
             <div class="font-alt mb-40 titan-title-size-3">You are welcome to Join us</div><a class="section-scroll btn btn-border-w btn-round" href="#about">Learn More</a>
           </div>
         </div>
       </li>
     </ul>
   </div>
 </section>
 
 
 
 
 <!-- STATIC HERO IMAGE
       <section class="home-section home-full-height bg-dark bg-gradient" id="home" data-background="frontend/assets/images/section-10.jpg">
         <div class="titan-caption">
           <div class="caption-content">
             <div class="font-alt mb-30 titan-title-size-1">Hello &amp; welcome</div>
             <div class="font-alt mb-40 titan-title-size-4">We are Christian Couples</div><a class="section-scroll btn btn-border-w btn-round" href="#">Learn More</a>
             <div class="font-alt mb-30 titan-title-size-1">Peaceful Home Is Our Concern</div>
           </div>
         </div>
       </section>
     -->
       <div class="main">
         <section class="module" id="services">
           <div class="container">
             <div class="row">
               <div class="col-sm-6 col-sm-offset-3">
                 <h2 class="module-title font-alt">What We Do</h2>
                 <div class="module-subtitle font-serif">We have a couple of activites wherein we engage ourselves in order to learn what different ways to keep the fire burning in our love lives.</div>
               </div>
             </div>
             <div class="row multi-columns-row">
               <div class="col-md-3 col-sm-6 col-xs-12">
                 <div class="features-item">
                   <div class="features-icon"><span class="icon-lightbulb"></span></div>
                   <h3 class="features-title font-alt">Bible Study</h3>
                   <p>Since marriage was God's idea, we believe He has the requisite instructions for anyone who desires to make the best of the institution. So, we look into His word for a daily guide</p>
                 </div>
               </div>
               <!--div class="col-md-3 col-sm-6 col-xs-12">
                 <div class="features-item">
                   <div class="features-icon"><span class="icon-bike"></span></div>
                   <h3 class="features-title font-alt">Optimised for speed</h3>
                   <p>Careful attention to detail and clean, well structured code ensures a smooth user experience for all your visitors.</p>
                 </div>
               </div-->
               <div class="col-md-3 col-sm-6 col-xs-12">
                 <div class="features-item">
                   <div class="features-icon"><span class="icon-tools"></span></div>
                   <h3 class="features-title font-alt">Seminars</h3>
                   <p>Our seminars look into ways outside the bible but not against God's standards, to learn more about eachother and bring a dynamic touch into the marriage relationship.</p>
                 </div>
               </div>
               <!--div class="col-md-3 col-sm-6 col-xs-12">
                 <div class="features-item">
                   <div class="features-icon"><span class="icon-gears"></span></div>
                   <h3 class="features-title font-alt">Highly customizable</h3>
                   <p>Careful attention to detail and clean, well structured code ensures a smooth user experience for all your visitors.</p>
                 </div>
               </div-->
               <div class="col-md-3 col-sm-6 col-xs-12">
                 <div class="features-item">
                   <div class="features-icon"><span class="icon-tools-2"></span></div>
                   <h3 class="features-title font-alt">Prayer Meetings</h3>
                   <p>We do not claim to have all the knowledge in this ministry, hence, we trust God for grace through prayers for divine intervention to make all our human efforts a success.</p>
                 </div>
               </div>
               <!--div class="col-md-3 col-sm-6 col-xs-12">
                 <div class="features-item">
                   <div class="features-icon"><span class="icon-genius"></span></div>
                   <h3 class="features-title font-alt">Features &amp; plugins</h3>
                   <p>Careful attention to detail and clean, well structured code ensures a smooth user experience for all your visitors.</p>
                 </div>
               </div-->
               <div class="col-md-3 col-sm-6 col-xs-12">
                 <div class="features-item">
                   <div class="features-icon"><span class="icon-mobile"></span></div>
                   <h3 class="features-title font-alt">Variety Hangouts</h3>
                   <p>Talk about real fun in marriage, our variety hangouts are a time to look forward to for a real drill into exploring the fun side of your spouse and having a refreshing marriage.</p>
                 </div>
               </div>
               <!--div class="col-md-3 col-sm-6 col-xs-12">
                 <div class="features-item">
                   <div class="features-icon"><span class="icon-lifesaver"></span></div>
                   <h3 class="features-title font-alt">Dedicated support</h3>
                   <p>Careful attention to detail and clean, well structured code ensures a smooth user experience for all your visitors.</p>
                 </div>
               </div-->
               <div class="module-subtitle font-serif">All our activities hold weekly on thursdays (or weekends in the case of Variety hangouts) and on our whatsapp groups.</div>
             </div>
           </div>
         </section>
         <section class="module bg-dark-60" data-background="frontend/assets/images/section-6.jpg">
           <div class="container">
             <div class="row">
               <div class="col-sm-12">
                 <div class="video-box">
                   <div class="video-box-icon"><a class="video-pop-up" href="https://www.youtube.com/watch?v=TTxZj3DZiIM"><span class="icon-video"></span></a></div>
                   <div class="video-title font-alt">Presentation</div>
                   <div class="video-subtitle font-alt">Watch the video about our new products</div>
                 </div>
               </div>
             </div>
           </div>
         </section>
         <section class="module pb-0" id="works">
           <div class="container">
             <div class="row">
               <div class="col-sm-6 col-sm-offset-3">
                 <h2 class="module-title font-alt">Our Works</h2>
                 <div class="module-subtitle font-serif"></div>
               </div>
             </div>
           </div>
           <div class="container">
             <div class="row">
               <div class="col-sm-12">
                 <ul class="filter font-alt" id="filters">
                   <li><a class="current wow fadeInUp" href="#" data-filter="*">All</a></li>
                   <li><a class="wow fadeInUp" href="#" data-filter=".illustration" data-wow-delay="0.2s">Illustration</a></li>
                   <li><a class="wow fadeInUp" href="#" data-filter=".marketing" data-wow-delay="0.4s">Marketing</a></li>
                   <li><a class="wow fadeInUp" href="#" data-filter=".photography" data-wow-delay="0.6s">Photography</a></li>
                   <li><a class="wow fadeInUp" href="#" data-filter=".webdesign" data-wow-delay="0.6s">Web Design</a></li>
                 </ul>
               </div>
             </div>
           </div>
           <ul class="works-grid works-grid-gut works-grid-3 works-hover-w" id="works-grid">
             <li class="work-item illustration webdesign"><a href="portfolio-single-1.html">
                 <div class="work-image"><img src="frontend/assets/images/work-1.jpg" alt="Portfolio Item"/></div>
                 <div class="work-caption font-alt">
                   <h3 class="work-title">Corporate Identity</h3>
                   <div class="work-descr">Illustration</div>
                 </div></a></li>
             <li class="work-item marketing photography"><a href="portfolio-single-1.html">
                 <div class="work-image"><img src="frontend/assets/images/work-2.jpg" alt="Portfolio Item"/></div>
                 <div class="work-caption font-alt">
                   <h3 class="work-title">Bag MockUp</h3>
                   <div class="work-descr">Marketing</div>
                 </div></a></li>
             <li class="work-item illustration photography"><a href="portfolio-single-1.html">
                 <div class="work-image"><img src="frontend/assets/images/work-3.jpg" alt="Portfolio Item"/></div>
                 <div class="work-caption font-alt">
                   <h3 class="work-title">Disk Cover</h3>
                   <div class="work-descr">Illustration</div>
                 </div></a></li>
             <li class="work-item marketing photography"><a href="portfolio-single-1.html">
                 <div class="work-image"><img src="frontend/assets/images/work-4.jpg" alt="Portfolio Item"/></div>
                 <div class="work-caption font-alt">
                   <h3 class="work-title">Business Card</h3>
                   <div class="work-descr">Photography</div>
                 </div></a></li>
             <li class="work-item illustration webdesign"><a href="portfolio-single-1.html">
                 <div class="work-image"><img src="frontend/assets/images/work-5.jpg" alt="Portfolio Item"/></div>
                 <div class="work-caption font-alt">
                   <h3 class="work-title">Business Card</h3>
                   <div class="work-descr">Webdesign</div>
                 </div></a></li>
             <li class="work-item marketing webdesign"><a href="portfolio-single-1.html">
                 <div class="work-image"><img src="frontend/assets/images/work-6.jpg" alt="Portfolio Item"/></div>
                 <div class="work-caption font-alt">
                   <h3 class="work-title">Business Cards in paper clip</h3>
                   <div class="work-descr">Marketing</div>
                 </div></a></li>
           </ul>
         </section>
         <section class="module-small bg-dark">
           <div class="container">
             <div class="row">
               <div class="col-sm-6 col-md-8 col-lg-6 col-lg-offset-2">
                 <div class="callout-text font-alt">
                   <h3 class="callout-title">Want to see more works?</h3>
                   <p>We are always open to interesting projects.</p>
                 </div>
               </div>
               <div class="col-sm-6 col-md-4 col-lg-2">
                 <div class="callout-btn-box"><a class="btn btn-w btn-round" href="portfolio_boxed_gutter_col_3.html">Lets view portfolio</a></div>
               </div>
             </div>
           </div>
         </section>
         <section class="module" id="alt-features">
           <div class="container">
             <div class="row">
               <div class="col-sm-6 col-sm-offset-3">
                 <h2 class="module-title font-alt">Marital Nuggets</h2>
                 <div class="module-subtitle font-serif">A collection of golden marital nuggets from the bowels of inspirational counselling.</div>
               </div>
             </div>
             <div class="row">
               <div class="col-sm-6 col-md-3 col-lg-3">
                 <div class="alt-features-item">
                   <div class="alt-features-icon"><span class="icon-strategy"></span></div>
                   <h3 class="alt-features-title font-alt">Husband</h3>A wonderful serenity has taken possession of my entire soul like these sweet mornings.
                 </div>
                 <div class="alt-features-item">
                   <div class="alt-features-icon"><span class="icon-tools-2"></span></div>
                   <h3 class="alt-features-title font-alt">Wife</h3>Any woman who directly or indirectly wishes to or controls her husband is a witch. Why do you want to be richer than your husband? So you could use your economical power to subdue him - this is exactly what witches do.
                 </div>
                 <div class="alt-features-item">
                   <div class="alt-features-icon"><span class="icon-target"></span></div>
                   <h3 class="alt-features-title font-alt">Sex</h3>A wonderful serenity has taken possession of my entire soul like these sweet mornings.
                 </div>
                 <div class="alt-features-item">
                   <div class="alt-features-icon"><span class="icon-tools"></span></div>
                   <h3 class="alt-features-title font-alt">Finance</h3>A wonderful serenity has taken possession of my entire soul like these sweet mornings.
                 </div>
               </div>
               <div class="col-md-6 col-lg-6 hidden-xs hidden-sm">
                 <div class="alt-services-image align-center"><img src="frontend/assets/images/promo.png" alt="Feature Image"></div>
               </div>
               <div class="col-sm-6 col-md-3 col-lg-3">
                 <div class="alt-features-item">
                   <div class="alt-features-icon"><span class="icon-camera"></span></div>
                   <h3 class="alt-features-title font-alt">General</h3>In Africa, a woman does not have the audacity to cheat with impunity like the man will do due to our tradition and religious principles. Such woman will be thrown out of such marriage because men are the custodian of our traditions. Any attempt to fight this wicked traditions is always fought by men. So God has taken it upon himself to fight for the oppressed, that's why men are dying like chicken leaving their wives as widows. .
                 </div>
                 <div class="alt-features-item">
                   <div class="alt-features-icon"><span class="icon-mobile"></span></div>
                   <h3 class="alt-features-title font-alt">Spirituality</h3>A wonderful serenity has taken possession of my entire soul like these sweet mornings.
                 </div>
                 <div class="alt-features-item">
                   <div class="alt-features-icon"><span class="icon-linegraph"></span></div>
                   <h3 class="alt-features-title font-alt">Music</h3>A wonderful serenity has taken possession of my entire soul like these sweet mornings.
                 </div>
                 <div class="alt-features-item">
                   <div class="alt-features-icon"><span class="icon-basket"></span></div>
                   <h3 class="alt-features-title font-alt">Fun</h3>A wonderful serenity has taken possession of my entire soul like these sweet mornings.
                 </div>
               </div>
             </div>
           </div>
         </section>
         <hr class="divider-w">
         <section class="module" id="team">
           <div class="container">
             <div class="row">
               <div class="col-sm-6 col-sm-offset-3">
                 <h2 class="module-title font-alt">Meet Our Team</h2>
                 <div class="module-subtitle font-serif">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</div>
               </div>
             </div>
             <div class="row">
               <div class="mb-sm-20 wow fadeInUp col-sm-6 col-md-3" onclick="wow fadeInUp">
                 <div class="team-item">
                   <div class="team-image"><img src="frontend/assets/images/team-1.jpg" alt="Member Photo"/>
                     <div class="team-detail">
                       <h5 class="font-alt">Hi all</h5>
                       <p class="font-serif">Lorem ipsum dolor sit amet, consectetur adipiscing elit lacus, a&amp;nbsp;iaculis diam.</p>
                       <div class="team-social"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-dribbble"></i></a><a href="#"><i class="fa fa-skype"></i></a></div>
                     </div>
                   </div>
                   <div class="team-descr font-alt">
                     <div class="team-name">Ayodele Adeoye</div>
                     <div class="team-role">President</div>
                   </div>
                 </div>
               </div>
               <div class="mb-sm-20 wow fadeInUp col-sm-6 col-md-3" onclick="wow fadeInUp">
                 <div class="team-item">
                   <div class="team-image"><img src="frontend/assets/images/team-2.jpg" alt="Member Photo"/>
                     <div class="team-detail">
                       <h5 class="font-alt">Good day</h5>
                       <p class="font-serif">Lorem ipsum dolor sit amet, consectetur adipiscing elit lacus, a&amp;nbsp;iaculis diam.</p>
                       <div class="team-social"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-dribbble"></i></a><a href="#"><i class="fa fa-skype"></i></a></div>
                     </div>
                   </div>
                   <div class="team-descr font-alt">
                     <div class="team-name">Christi Christiana</div>
                     <div class="team-role">Secretary</div>
                   </div>
                 </div>
               </div>
               <div class="mb-sm-20 wow fadeInUp col-sm-6 col-md-3" onclick="wow fadeInUp">
                 <div class="team-item">
                   <div class="team-image"><img src="frontend/assets/images/team-3.jpg" alt="Member Photo"/>
                     <div class="team-detail">
                       <h5 class="font-alt">Hello</h5>
                       <p class="font-serif">Lorem ipsum dolor sit amet, consectetur adipiscing elit lacus, a&amp;nbsp;iaculis diam.</p>
                       <div class="team-social"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-dribbble"></i></a><a href="#"><i class="fa fa-skype"></i></a></div>
                     </div>
                   </div>
                   <div class="team-descr font-alt">
                     <div class="team-name">Charity Akanbi</div>
                     <div class="team-role">Account manager</div>
                   </div>
                 </div>
               </div>
               <div class="mb-sm-20 wow fadeInUp col-sm-6 col-md-3" onclick="wow fadeInUp">
                 <div class="team-item">
                   <div class="team-image"><img src="frontend/assets/images/team-4.jpg" alt="Member Photo"/>
                     <div class="team-detail">
                       <h5 class="font-alt">Yes, it's me</h5>
                       <p class="font-serif">Lorem ipsum dolor sit amet, consectetur adipiscing elit lacus, a&amp;nbsp;iaculis diam.</p>
                       <div class="team-social"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-dribbble"></i></a><a href="#"><i class="fa fa-skype"></i></a></div>
                     </div>
                   </div>
                   <div class="team-descr font-alt">
                     <div class="team-name">Ekpereamaka Ekpereamaka</div>
                     <div class="team-role">Developer</div>
                   </div>
                 </div>
               </div>
             </div>
           </div>
         </section>
         <section class="module bg-dark-60" data-background="frontend/assets/images/section-3.jpg">
           <div class="container">
             <div class="row">
               <div class="col-sm-6 col-sm-offset-3">
                 <h2 class="module-title font-alt">Scoreboard</h2>
                 <div class="module-subtitle font-serif"></div>
               </div>
             </div>
             <div class="row multi-columns-row">
               <div class="col-sm-6 col-md-3 col-lg-3">
                 <div class="count-item mb-sm-40">
                   <div class="count-icon"><span class="icon-wallet"></span></div>
                   <h3 class="count-to font-alt" data-countto="6543"></h3>
                   <h5 class="count-title font-serif">Dollars raised for charity</h5>
                 </div>
               </div>
               <div class="col-sm-6 col-md-3 col-lg-3">
                 <div class="count-item mb-sm-40">
                   <div class="count-icon"><span class="icon-wine"></span></div>
                   <h3 class="count-to font-alt" data-countto="8"></h3>
                   <h5 class="count-title font-serif">Cups of wine consumed</h5>
                 </div>
               </div>
               <div class="col-sm-6 col-md-3 col-lg-3">
                 <div class="count-item mb-sm-40">
                   <div class="count-icon"><span class="icon-camera"></span></div>
                   <h3 class="count-to font-alt" data-countto="184"></h3>
                   <h5 class="count-title font-serif">Photographs taken</h5>
                 </div>
               </div>
               <div class="col-sm-6 col-md-3 col-lg-3">
                 <div class="count-item mb-sm-40">
                   <div class="count-icon"><span class="icon-map-pin"></span></div>
                   <h3 class="count-to font-alt" data-countto="32"></h3>
                   <h5 class="count-title font-serif">Locations covered</h5>
                 </div>
               </div>
             </div>
           </div>
         </section>
         
         <section class="module" id="news">
           <div class="container">
             <div class="row">
               <div class="col-sm-6 col-sm-offset-3">
                 <h2 class="module-title font-alt">Latest blog posts</h2>
                 <div class="module-subtitle font-serif">Here is a collection of an unending stream of inspiring thoughts from our president and other writers.</div>
               </div>
             </div>
             <div class="row multi-columns-row post-columns">
               <div class="col-sm-6 col-md-4 col-lg-4">
                 <div class="post mb-20">
                   <div class="post-thumbnail"><a href="#"><img src="frontend/assets/images/post-1.jpg" alt="Blog-post Thumbnail"/></a></div>
                   <div class="post-header font-alt">
                     <h2 class="post-title"><a href="#">Trust is Expensive</a></h2>
                     <div class="post-meta">By&nbsp;<a href="#">Ayodele Adeoye</a>&nbsp;| 23 November | 3 Comments
                     </div>
                   </div>
                   <div class="post-entry">
                     <p>TRUST is very expensive and for anyone to earn your trust, he or she must pay the price. If you give your trust to anyone because they are your spouse, siblings or church member without them earning it, when they betray the trust, the injury may take a long time to heal.</p>
                   </div>
                   <div class="post-more"><a class="more-link" href="#">Read more</a></div>
                 </div>
               </div>
               <div class="col-sm-6 col-md-4 col-lg-4">
                 <div class="post mb-20">
                   <div class="post-thumbnail"><a href="#"><img src="frontend/assets/images/post-2.jpg" alt="Blog-post Thumbnail"/></a></div>
                   <div class="post-header font-alt">
                     <h2 class="post-title"><a href="#">ADVISES FOR WOMEN WHOSE HUSBANDS ARE CHEATING ON THEM</a></h2>
                     <div class="post-meta">By&nbsp;<a href="#">Ayodele Adeoye</a>&nbsp;| 11 November | 4 Comments
                     </div>
                   </div>
                   <div class="post-entry">
                     <p>Unfortunately here in Africa and some parts of the world you almost cannot stop a man who wants to cheat from cheating because our wicked tradition gives the man a soft landing when he cheats, unlike the woman..</p>
                   </div>
                   <div class="post-more"><a class="more-link" href="#">Read more</a></div>
                 </div>
               </div>
               <div class="col-sm-6 col-md-4 col-lg-4">
                 <div class="post mb-20">
                   <div class="post-thumbnail"><a href="#"><img src="frontend/assets/images/post-3.jpg" alt="Blog-post Thumbnail"/></a></div>
                   <div class="post-header font-alt">
                     <h2 class="post-title"><a href="#">GETTING HEALED FROM EMOTIONAL INJURY</a></h2>
                     <div class="post-meta">By&nbsp;<a href="#">Ayodele Adeoye</a>&nbsp;| 5 November | 15 Comments
                     </div>
                   </div>
                   <div class="post-entry">
                     <p>Have you been raped before, has someone you loved so much jilted you? Or someone betrayed so much that you vowed never to trust anyone again in life? Or someone you had so much trust on dashed your hope and caused you internal injury and unstoppable bleeding?</p>
                   </div>
                   <div class="post-more"><a class="more-link" href="#">Read more</a></div>
                 </div>
               </div>
             </div>
           </div>
         </section>
         <div class="module-small bg-dark">
           <div class="container">
             <div class="row">
               <div class="col-sm-6 col-md-6 col-lg-4 col-lg-offset-2">
                 <div class="callout-text font-alt">
                   <h3 class="callout-title">Subscribe now</h3>
                   <p>We will not spam your email.</p>
                 </div>
               </div>
               <div class="col-sm-6 col-md-6 col-lg-4">
                 <div class="callout-btn-box">
                   <form id="subscription-form" role="form" method="post" action="php/subscribe.php">
                     <div class="input-group">
                       <input class="form-control" type="email" id="semail" name="semail" placeholder="Your Email" data-validation-required-message="Please enter your email address." /><span class="input-group-btn">
                         <button class="btn btn-g btn-round" id="subscription-form-submit" type="submit">Submit</button></span>
                     </div>
                   </form>
                   <div class="text-center" id="subscription-response"></div>
                 </div>
               </div>
             </div>
           </div>
         </div>
         <section class="module" id="contact">
           <div class="container">
             <div class="row">
               <div class="col-sm-6 col-sm-offset-3">
                 <h2 class="module-title font-alt">Get in touch</h2>
                 <div class="module-subtitle font-serif"></div>
               </div>
             </div>
             <div class="row">
               <div class="col-sm-6 col-sm-offset-3">
                 <form id="contactForm" role="form" method="post" action="php/contact.php">
                   <div class="form-group">
                     <label class="sr-only" for="name">Name</label>
                     <input class="form-control" type="text" id="name" name="name" placeholder="Your Name*"  />
                     <p class="help-block text-danger"></p>
                   </div>
                   <div class="form-group">
                     <label class="sr-only" for="email">Email</label>
                     <input class="form-control" type="email" id="email" name="email" placeholder="Your Email*"  />
                     <p class="help-block text-danger"></p>
                   </div>
                   <div class="form-group">
                     <textarea class="form-control" rows="7" id="message" name="message" placeholder="Your Message*"  ></textarea>
                     <p class="help-block text-danger"></p>
                   </div>
                   <div class="text-center">
                     <button class="btn btn-block btn-round btn-d" id="cfsubmit" type="submit">Submit</button>
                   </div>
                 </form>
                 <div class="ajax-response font-alt" id="contactFormResponse"></div>
               </div>
             </div>
           </div>
         </section>
         <section id="map-section">
           <div id="map"></div>
         </section>
         <div class="module-small bg-dark">
           <div class="container">
             <div class="row">
               <div class="col-sm-3">
                 <div class="widget">
                   <h5 class="widget-title font-alt">About Titan</h5>
                   <p>The languages only differ in their grammar, their pronunciation and their most common words.</p>
                   <p>Phone: +1 234 567 89 10</p>Fax: +1 234 567 89 10
                   <p>Email:<a href="#">somecompany@example.com</a></p>
                 </div>
               </div>
               <div class="col-sm-3">
                 <div class="widget">
                   <h5 class="widget-title font-alt">Recent Comments</h5>
                   <ul class="icon-list">
                     <li>Maria on <a href="#">Designer Desk Essentials</a></li>
                     <li>John on <a href="#">Realistic Business Card Mockup</a></li>
                     <li>Andy on <a href="#">Eco bag Mockup</a></li>
                     <li>Jack on <a href="#">Bottle Mockup</a></li>
                     <li>Mark on <a href="#">Our trip to the Alps</a></li>
                   </ul>
                 </div>
               </div>
               <div class="col-sm-3">
                 <div class="widget">
                   <h5 class="widget-title font-alt">Blog Categories</h5>
                   <ul class="icon-list">
                     <li><a href="#">Photography - 7</a></li>
                     <li><a href="#">Web Design - 3</a></li>
                     <li><a href="#">Illustration - 12</a></li>
                     <li><a href="#">Marketing - 1</a></li>
                     <li><a href="#">Wordpress - 16</a></li>
                   </ul>
                 </div>
               </div>
               <div class="col-sm-3">
                 <div class="widget">
                   <h5 class="widget-title font-alt">Popular Posts</h5>
                   <ul class="widget-posts">
                     <li class="clearfix">
                       <div class="widget-posts-image"><a href="#"><img src="frontend/assets/images/rp-1.jpg" alt="Post Thumbnail"/></a></div>
                       <div class="widget-posts-body">
                         <div class="widget-posts-title"><a href="#">Designer Desk Essentials</a></div>
                         <div class="widget-posts-meta">23 january</div>
                       </div>
                     </li>
                     <li class="clearfix">
                       <div class="widget-posts-image"><a href="#"><img src="frontend/assets/images/rp-2.jpg" alt="Post Thumbnail"/></a></div>
                       <div class="widget-posts-body">
                         <div class="widget-posts-title"><a href="#">Realistic Business Card Mockup</a></div>
                         <div class="widget-posts-meta">15 February</div>
                       </div>
                     </li>
                   </ul>
                 </div>
               </div>
             </div>
           </div>
         </div>
        </div>

        <hr class="divider-d">
        <footer class="footer bg-dark">
          <div class="container">
            <div class="row">
              <div class="col-sm-6">
                <p class="copyright font-alt">&copy; &nbsp;<a href="/">CCF</a>, All Rights Reserved</p>
              </div>
              <div class="col-sm-6">
                <div class="footer-social-links"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-dribbble"></i></a><a href="#"><i class="fa fa-skype"></i></a>
                </div>
              </div>
            </div>
          </div>
        </footer>
    
      <div class="scroll-up"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div>
       
</template>

<script setup>
import "./init"
  import '/frontend/assets/lib/jquery/dist/jquery.js'
  import '/frontend/assets/lib/bootstrap/dist/js/bootstrap.min.js'
  import '/frontend/assets/lib/wow/dist/wow.js'
  import '/frontend/assets/lib/jquery.mb.ytplayer/dist/jquery.mb.YTPlayer.js'
  import '/frontend/assets/lib/isotope/dist/isotope.pkgd.js'
  import '/frontend/assets/lib/imagesloaded/imagesloaded.pkgd.js'
  import '/frontend/assets/lib/flexslider/jquery.flexslider.js'
  import '/frontend/assets/lib/owl.carousel/dist/owl.carousel.min.js'
  import '/frontend/assets/lib/smoothscroll.js'
  import '/frontend/assets/lib/magnific-popup/dist/jquery.magnific-popup.js'
  import '/frontend/assets/lib/simple-text-rotator/jquery.simple-text-rotator.min.js'
  import '/frontend/assets/js/plugins.js'
  import '/frontend/assets/js/main.js'
</script>