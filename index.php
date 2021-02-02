<?php 

   include ('fb.php');

 ?>




<html lang="en"><head>
      <title>Circuit | voyages</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Alex+Brush" rel="stylesheet">
      <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
      <link rel="stylesheet" href="css/animate.css">
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="css/magnific-popup.css">
      <link rel="stylesheet" href="css/aos.css">
      <link rel="stylesheet" href="css/ionicons.min.css">
      <link rel="stylesheet" href="css/bootstrap-datepicker.css">
      <link rel="stylesheet" href="css/jquery.timepicker.css">
      <link rel="stylesheet" href="css/flaticon.css">
      <link rel="stylesheet" href="css/icomoon.css">
      <link rel="stylesheet" href="css/style.css">
      <style type="text/css">.scrollax-performance, .scrollax-performance *, .scrollax-performance *:before, .scrollax-performance *:after { pointer-events: none !important; -webkit-animation-play-state: paused !important; animation-play-state: paused !important; };</style><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/43/3/intl/fr_ca/common.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/43/3/intl/fr_ca/util.js"></script></head>
   <body data-aos-easing="slide" data-aos-duration="800" data-aos-delay="0">
      <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light scrolled awake" id="ftco-navbar">
         <div class="container">
            <a class="navbar-brand" href="index.php">Djurdjura</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
            </button>
            <div class="collapse navbar-collapse" id="ftco-nav" class="flex">
               <ul class="navbar-nav ml-auto">
                  <li class="nav-item active"><a href="index-2.html" class="nav-link"><?= $lang['nav_1']; ?></a></li>
                  <li class="nav-item"><a href="about.html" class="nav-link"><?= $lang['nav_2']; ?></a></li>
                  <li class="nav-item"><a href="tour.html" class="nav-link"><?= $lang['nav_3']; ?></a></li>
                  <li class="nav-item"><a href="hotel.html" class="nav-link"><?= $lang['nav_4']; ?></a></li>
                  <li class="nav-item" style="padding-right: 10px;">
                     <a href="contact.html" class="nav-link"><?= $lang['nav_5']; ?></a>
                  </li>
                  <li class="nav-item">
                     <a href="#" class="nav-link"><?= $lang['nav_6']; ?></a>
                  </li>
                  <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?= $lang['nav_7']; ?></a>
                     <div class="dropdown-menu" aria-labelledby="dropdown09">
                        <a class="dropdown-item" href="index.php?lang=fr"><span><img src="Flags/flag_fr-ca.gif" alt="" width="25px" height="15px"></span> French</a>
                        <a class="dropdown-item" href="index.php?lang=en"><span><img src="Flags/flag_en-us.gif" alt="" width="25px" height="15px"></span>  English</a>
                        <a class="dropdown-item" href="index.php?lang=es"><span><img src="Flags/flag_es.gif" alt="" width="25px" height="15px"></span>  Spanish</a>
                     </div>
                  </li>
               </ul>
              
            </div>
         </div>
         <!-- <div class="flex">             
            <a class="dropdown-item" href="index.php?lang=fr"><span><img src="Flags/flag_fr-ca.gif" alt="" width="25px" height="15px"></span></a>
            <a class="dropdown-item" href="index.php?lang=en"><span><img src="Flags/flag_en-us.gif" alt="" width="25px" height="15px"></span></a>
            <a class="dropdown-item" href="index.php?lang=es"><span><img src="Flags/flag_es.gif" alt="" width="25px" height="15px"></span></a>
         </div> -->
      </nav>
      <!-- END nav -->
      <div class="hero-wrap" style="background-image: url(&quot;images/bg_1.jpg&quot;); height: 7065px;">
         <div class="overlay"></div>
         <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true" styles="/* height: 7065px; */">
               
            </div>
         </div>
      </div>
      <section class="ftco-section services-section bg-light">
         <div class="container">
            <div class="row">
               <div class="col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
                  <div class="section-title">
                     <h2 class="mb-4"><?= $lang['The_1']; ?></h2>
                  </div>
               </div>
            </div>
            <div class="grid destination-grid-wrapper" style="position: relative; height: 580px;">
               <div class="grid-item" data-colspan="10" data-rowspan="10" style="position: absolute; top: 0px; left: 0px; width: 580px; height: 580px;">
                  <a href="result-grid.html" class="top-destination-image-bg" style="background-image:url('images/destination/01.jpg');">
                     <div class="relative">
                        <h4><?= $lang['The_2']; ?></h4>
                        <span><?= $lang['The_3']; ?></span>
                     </div>
                  </a>
               </div>
               <div class="grid-item" data-colspan="10" data-rowspan="4" style="position: absolute; top: 0px; left: 580px; width: 580px; height: 232px;">
                  <a href="result-grid.html" class="top-destination-image-bg" style="background-image:url('images/destination/02.jpg');">
                     <div class="relative">
                        <h4><?= $lang['The_4']; ?></h4>
                        <span><?= $lang['The_5']; ?></span>
                     </div>
                  </a>
               </div>
               <div class="grid-item" data-colspan="5" data-rowspan="6" style="position: absolute; top: 232px; left: 580px; width: 290px; height: 348px;">
                  <a href="result-grid.html" class="top-destination-image-bg" style="background-image:url('images/destination/03.jpg');">
                     <div class="relative">
                        <h4><?= $lang['The_6']; ?></h4>
                        <span><?= $lang['The_7']; ?></span>
                     </div>
                  </a>
               </div>
               <div class="grid-item" data-colspan="5" data-rowspan="6" style="position: absolute; top: 232px; left: 870px; width: 290px; height: 348px;">
                  <a href="result-grid.html" class="top-destination-image-bg" style="background-image:url('images/destination/04.jpg');">
                     <div class="relative">
                        <h4><?= $lang['The_8']; ?></h4>
                        <span><?= $lang['The_9']; ?></span>
                     </div>
                  </a>
               </div>
            </div>
         </div>
      </section>
      <section class="ftco-section bg-light">
         <div class="container">
            <div class="row justify-content-start mb-5 pb-3">
               <div class="col-md-7 heading-section ftco-animate fadeInUp ftco-animated">
                  <span class="subheading"><?= $lang['Pkg_1']; ?></span>
                  <h2 class="mb-4"><?= $lang['Pkg_2']; ?></h2>
               </div>
            </div>
         </div>
         <div class="container">
            <div class="row">
               <div class="col-sm col-md-6 col-lg ftco-animate fadeInUp ftco-animated">
                  <div class="destination">
                     <a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/destination-1.jpg);">
                        <div class="icon d-flex justify-content-center align-items-center">
                           <span class="icon-search2"></span>
                        </div>
                     </a>
                     <div class="text p-3">
                        <div class="d-flex">
                           <div class="one">
                              <h3><a href="#"><?= $lang['Pkg_3']; ?></a></h3>
                              <p class="rate">
                                 <i class="icon-star"></i>
                                 <i class="icon-star"></i>
                                 <i class="icon-star"></i>
                                 <i class="icon-star"></i>
                                 <i class="icon-star-o"></i>
                                 <span><?= $lang['Pkg_4']; ?></span>
                              </p>
                           </div>
                           <div class="two">
                              <span class="price">$200</span>
                           </div>
                        </div>
                        <p><?= $lang['Pkg_5']; ?></p>
                        <p class="days"><span><?= $lang['Pkg_6']; ?></span></p>
                        <hr>
                        <p class="bottom-area d-flex">
                           <span><i class="icon-map-o"></i><?= $lang['Pkg_7']; ?></span> 
                           <span class="ml-auto"><a href="#"><?= $lang['Pkg_8']; ?></a></span>
                        </p>
                     </div>
                  </div>
               </div>
               <div class="col-sm col-md-6 col-lg ftco-animate fadeInUp ftco-animated">
                  <div class="destination">
                     <a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/destination-2.jpg);">
                        <div class="icon d-flex justify-content-center align-items-center">
                           <span class="icon-search2"></span>
                        </div>
                     </a>
                     <div class="text p-3">
                        <div class="d-flex">
                           <div class="one">
                              <h3><a href="#"><?= $lang['Pkg_9']; ?></a></h3>
                              <p class="rate">
                                 <i class="icon-star"></i>
                                 <i class="icon-star"></i>
                                 <i class="icon-star"></i>
                                 <i class="icon-star"></i>
                                 <i class="icon-star-o"></i>
                                 <span><?= $lang['Pkg_4']; ?></span>
                              </p>
                           </div>
                           <div class="two">
                              <span class="price">$200</span>
                           </div>
                        </div>
                        <p><?= $lang['Pkg_5']; ?></p>
                        <p class="days"><span><?= $lang['Pkg_6']; ?></span></p>
                        <hr>
                        <p class="bottom-area d-flex">
                           <span><i class="icon-map-o"></i> <?= $lang['Pkg_10']; ?></span> 
                           <span class="ml-auto"><a href="#"><?= $lang['Pkg_8']; ?></a></span>
                        </p>
                     </div>
                  </div>
               </div>
               <div class="col-sm col-md-6 col-lg ftco-animate fadeInUp ftco-animated">
                  <div class="destination">
                     <a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/destination-3.jpg);">
                        <div class="icon d-flex justify-content-center align-items-center">
                           <span class="icon-search2"></span>
                        </div>
                     </a>
                     <div class="text p-3">
                        <div class="d-flex">
                           <div class="one">
                              <h3><a href="#"><?= $lang['Pkg_11']; ?></a></h3>
                              <p class="rate">
                                 <i class="icon-star"></i>
                                 <i class="icon-star"></i>
                                 <i class="icon-star"></i>
                                 <i class="icon-star"></i>
                                 <i class="icon-star-o"></i>
                                 <span><?= $lang['Pkg_4']; ?></span>
                              </p>
                           </div>
                           <div class="two">
                              <span class="price">$200</span>
                           </div>
                        </div>
                        <p><?= $lang['Pkg_5']; ?></p>
                        <p class="days"><span><?= $lang['Pkg_6']; ?></span></p>
                        <hr>
                        <p class="bottom-area d-flex">
                           <span><i class="icon-map-o"></i><?= $lang['Pkg_7']; ?></span> 
                           <span class="ml-auto"><a href="#"><?= $lang['Pkg_8']; ?></a></span>
                        </p>
                     </div>
                  </div>
               </div>
               <div class="col-sm col-md-6 col-lg ftco-animate fadeInUp ftco-animated">
                  <div class="destination">
                     <a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/destination-4.jpg);">
                        <div class="icon d-flex justify-content-center align-items-center">
                           <span class="icon-search2"></span>
                        </div>
                     </a>
                     <div class="text p-3">
                        <div class="d-flex">
                           <div class="one">
                              <h3><a href="#"><?= $lang['Pkg_13']; ?></a></h3>
                              <p class="rate">
                                 <i class="icon-star"></i>
                                 <i class="icon-star"></i>
                                 <i class="icon-star"></i>
                                 <i class="icon-star"></i>
                                 <i class="icon-star-o"></i>
                                 <span><?= $lang['Pkg_4']; ?></span>
                              </p>
                           </div>
                           <div class="two">
                              <span class="price">$200</span>
                           </div>
                        </div>
                        <p><?= $lang['Pkg_5']; ?></p>
                        <p class="days"><span><?= $lang['Pkg_6']; ?></span></p>
                        <hr>
                        <p class="bottom-area d-flex">
                           <span><i class="icon-map-o"></i> <?= $lang['Pkg_14']; ?></span> 
                           <span class="ml-auto"><a href="#"><?= $lang['Pkg_8']; ?></a></span>
                        </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="ftco-section">
         <div class="container">
            <div class="row justify-content-start mb-5 pb-3">
               <div class="col-md-7 heading-section ftco-animate fadeInUp ftco-animated">
                  <span class="subheading"><?= $lang['Pkg_1']; ?> </span>
                  <h2 class="mb-4"><?= $lang['Res_1']; ?></h2>
               </div>
            </div>
            <div class="row">
               <div class="col-md-6 col-lg-3 ftco-animate fadeInUp ftco-animated">
                  <div class="destination">
                     <a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/restaurant-1.jpg);">
                        <div class="icon d-flex justify-content-center align-items-center">
                           <span class="icon-search2"></span>
                        </div>
                     </a>
                     <div class="text p-3">
                        <h3><a href="#"><?= $lang['Res_2']; ?></a></h3>
                        <p class="rate">
                           <i class="icon-star"></i>
                           <i class="icon-star"></i>
                           <i class="icon-star"></i>
                           <i class="icon-star"></i>
                           <i class="icon-star-o"></i>
                           <span><?= $lang['Pkg_4']; ?></span>
                        </p>
                        <p><?= $lang['Pkg_5']; ?></p>
                        <hr>
                        <p class="bottom-area d-flex">
                           <span><i class="icon-map-o"></i><?= $lang['Res_3']; ?></span> 
                           <span class="ml-auto"><a href="#"><?= $lang['Res_4']; ?></a></span>
                        </p>
                     </div>
                  </div>
               </div>
               <div class="col-md-6 col-lg-3 ftco-animate fadeInUp ftco-animated">
                  <div class="destination">
                     <a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/restaurant-2.jpg);">
                        <div class="icon d-flex justify-content-center align-items-center">
                           <span class="icon-search2"></span>
                        </div>
                     </a>
                     <div class="text p-3">
                        <h3><a href="#"><?= $lang['Res_2']; ?></a></h3>
                        <p class="rate">
                           <i class="icon-star"></i>
                           <i class="icon-star"></i>
                           <i class="icon-star"></i>
                           <i class="icon-star"></i>
                           <i class="icon-star-o"></i>
                           <span><?= $lang['Pkg_4']; ?></span>
                        </p>
                        <p><?= $lang['Pkg_5']; ?></p>
                        <hr>
                        <p class="bottom-area d-flex">
                           <span><i class="icon-map-o"></i> <?= $lang['Res_3']; ?></span> 
                           <span class="ml-auto"><a href="#"><?= $lang['Res_4']; ?></a></span>
                        </p>
                     </div>
                  </div>
               </div>
               <div class="col-md-6 col-lg-3 ftco-animate fadeInUp ftco-animated">
                  <div class="destination">
                     <a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/restaurant-3.jpg);">
                        <div class="icon d-flex justify-content-center align-items-center">
                           <span class="icon-search2"></span>
                        </div>
                     </a>
                     <div class="text p-3">
                        <h3><a href="#"><?= $lang['Res_2']; ?></a></h3>
                        <p class="rate">
                           <i class="icon-star"></i>
                           <i class="icon-star"></i>
                           <i class="icon-star"></i>
                           <i class="icon-star"></i>
                           <i class="icon-star-o"></i>
                           <span><?= $lang['Pkg_4']; ?></span>
                        </p>
                        <p><?= $lang['Pkg_5']; ?></p>
                        <hr>
                        <p class="bottom-area d-flex">
                           <span><i class="icon-map-o"></i> <?= $lang['Pkg_10']; ?></span> 
                           <span class="ml-auto"><a href="#"><?= $lang['Res_4']; ?></a></span>
                        </p>
                     </div>
                  </div>
               </div>
               <div class="col-md-6 col-lg-3 ftco-animate fadeInUp ftco-animated">
                  <div class="destination">
                     <a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/restaurant-4.jpg);">
                        <div class="icon d-flex justify-content-center align-items-center">
                           <span class="icon-search2"></span>
                        </div>
                     </a>
                     <div class="text p-3">
                        <h3><a href="#"><?= $lang['Res_2']; ?></a></h3>
                        <p class="rate">
                           <i class="icon-star"></i>
                           <i class="icon-star"></i>
                           <i class="icon-star"></i>
                           <i class="icon-star"></i>
                           <i class="icon-star-o"></i>
                           <span><?= $lang['Pkg_4']; ?></span>
                        </p>
                        <p><?= $lang['Pkg_5']; ?></p>
                        <hr>
                        <p class="bottom-area d-flex">
                           <span><i class="icon-map-o"></i> <?= $lang['Pkg_14']; ?></span> 
                           <span class="ml-auto"><a href="#"><?= $lang['Res_4']; ?></a></span>
                        </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <footer class="ftco-footer ftco-bg-dark ftco-section" style="background-image: url('images/home.jpg');height: 73%;">
         <div class="colore">
         <div class="container">
            <div class="row mb-5">
               <div class="col-md">
                  <div class="ftco-footer-widget mb-4">
                     <h2 class="ftco-heading-2">Djurdjura</h2>
                     <p><?= $lang['Foo_1']; ?></p>
                     <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                        <li class="ftco-animate fadeInUp ftco-animated"><a href="#"><span class="icon-twitter"></span></a></li>
                        <li class="ftco-animate fadeInUp ftco-animated"><a href="#"><span class="icon-facebook"></span></a></li>
                        <li class="ftco-animate fadeInUp ftco-animated"><a href="#"><span class="icon-instagram"></span></a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-md">
                  <div class="ftco-footer-widget mb-4 ml-md-5">
                     <h2 class="ftco-heading-2"><?= $lang['Foo_2']; ?></h2>
                     <ul class="list-unstyled">
                        <li><a href="#" class="py-2 d-block"><?= $lang['Foo_3']; ?></a></li>
                        <li><a href="#" class="py-2 d-block"><?= $lang['Foo_4']; ?></a></li>
                        <li><a href="#" class="py-2 d-block"><?= $lang['Foo_5']; ?></a></li>
                        <li><a href="#" class="py-2 d-block"><?= $lang['Foo_6']; ?></a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-md">
                  <div class="ftco-footer-widget mb-4">
                     <h2 class="ftco-heading-2"><?= $lang['Foo_7']; ?></h2>
                     <ul class="list-unstyled">
                        <li><a href="#" class="py-2 d-block"><?= $lang['Foo_8']; ?></a></li>
                        <li><a href="#" class="py-2 d-block"><?= $lang['Foo_9']; ?></a></li>
                        <li><a href="#" class="py-2 d-block"><?= $lang['Foo_10']; ?></a></li>
                        <li><a href="#" class="py-2 d-block"><?= $lang['Foo_11']; ?></a></li>
                        <li><a href="#" class="py-2 d-block"><?= $lang['Foo_12']; ?></a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-md">
                  <div class="ftco-footer-widget mb-4">
                     <h2 class="ftco-heading-2"><?= $lang['Foo_13']; ?></h2>
                     <div class="block-23 mb-3">
                        <ul>
                           <li><a href="#"><span class="icon icon-envelope"></span><span class="text"><?= $lang['Foo_14']; ?></span></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12 text-center">
               </div>
            </div>
         </div>
         </div>
      </footer>
      <!-- loader -->
      <div id="ftco-loader" class="fullscreen">
         <svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"></circle>
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"></circle>
         </svg>
      </div>
      <script src="js/jquery.min.js"></script>
      <script src="js/jquery-migrate-3.0.1.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/jquery.easing.1.3.js"></script>
      <script src="js/jquery.waypoints.min.js"></script>
      <script src="js/jquery.stellar.min.js"></script>
      <script src="js/owl.carousel.min.js"></script>
      <script src="js/jquery.magnific-popup.min.js"></script>
      <script src="js/aos.js"></script>
      <script src="js/jquery.animateNumber.min.js"></script>
      <script src="js/bootstrap-datepicker.js"></script>
      <script src="js/jquery.timepicker.min.html"></script>
      <script src="js/scrollax.min.js"></script>
      <script src="js/main.js"></script>
      
</body></html>