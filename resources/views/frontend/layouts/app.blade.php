<!doctype html>
<html class="no-js" lang="zxx">

<head>
   <meta charset="utf-8">
   <title>Mekina - Medical & Health HTML5 Template</title>
   <meta name="description" content="">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- Place favicon.ico in the root directory -->
   <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/favicon.png">

   <!-- CSS here -->
   <link rel="stylesheet" href="assets/css/bootstrap.css">
   <link rel="stylesheet" href="assets/css/animate.css">
   <link rel="stylesheet" href="assets/css/swiper-bundle.css">
   <link rel="stylesheet" href="assets/css/slick.css">
   <link rel="stylesheet" href="assets/css/style.css">
   <link rel="stylesheet" href="assets/css/icofont.css">
   <link rel="stylesheet" href="assets/css/icofont.min.css">
   <link rel="stylesheet" href="assets/css/magnific-popup.css">
   <link rel="stylesheet" href="assets/css/font-awesome-pro.css">
   <link rel="stylesheet" href="assets/css/spacing.css">
   <link rel="stylesheet" href="assets/css/custom-animation.css">
   <link rel="stylesheet" href="assets/css/main.css">
</head>

<body>
   <!--[if lte IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="htrrs://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
      <![endif]-->

<!-- preloader start -->
<div id="loading">
   <div class="preloader-close">x</div>
   <div id="loading-center">
      <div id="loading-center-absolute">
         <div class="object" id="object_four"></div>
         <div class="object" id="object_three"></div>
         <div class="object" id="object_two"></div>
         <div class="object" id="object_one"></div>
      </div>
   </div>
</div>
<!-- preloader start -->

   <!-- back to top start -->
   <div class="back-to-top-wrapper">
      <button id="back_to_top" type="button" class="back-to-top-btn">
         <svg width="12" height="7" viewBox="0 0 12 7" fill="none" >
            <path d="M11 6L6 1L1 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
               stroke-linejoin="round" />
         </svg>
      </button>
   </div>
   <!-- back to top end -->

   <!-- search popup start -->
   <div class="search__popup">
      <div class="container">
         <div class="row">
            <div class="col-xxl-12">
               <div class="search__wrapper">
                  <div class="search__top d-flex justify-content-between align-items-center">
                     <div class="search__logo">
                        <a href="index.html">
                           <img src="assets/img/logo/logo-white.png" alt="img">
                        </a>
                     </div>
                     <div class="search__close">
                        <button type="button" class="search__close-btn search-close-btn">
                           <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                              >
                              <path d="M17 1L1 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                 stroke-linejoin="round" />
                              <path d="M1 1L17 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                 stroke-linejoin="round" />
                           </svg>
                        </button>
                     </div>
                  </div>
                  <div class="search__form">
                     <form action="#">
                        <div class="search__input">
                           <input class="search-input-field" type="text" placeholder="Type here to search...">
                           <span class="search-focus-border"></span>
                           <button type="submit">
                              <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                 >
                                 <path
                                    d="M9.55 18.1C14.272 18.1 18.1 14.272 18.1 9.55C18.1 4.82797 14.272 1 9.55 1C4.82797 1 1 4.82797 1 9.55C1 14.272 4.82797 18.1 9.55 18.1Z"
                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                 <path d="M19.0002 19.0002L17.2002 17.2002" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                              </svg>
                           </button>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- search popup end -->

   <!-- rr-offcanvus-area-start -->
   <div class="rroffcanvas-area">
      <div class="rroffcanvas">
         <div class="rroffcanvas__close-btn">
            <button class="close-btn"><i class="fal fa-times"></i></button>
         </div>
         <div class="rroffcanvas__logo">
            <a href="index.html">
               <img src="assets/img/logo/logo-white.png" alt="img">
            </a>
         </div>
         <div class="rr-main-menu-mobile d-xl-none"></div>
         <div class="rroffcanvas__contact-info">
            <div class="rroffcanvas__contact-title">
               <h5>Contact us</h5>
            </div>
            <ul>
               <li>
                  <i class="fa-light fa-location-dot"></i>
                  <a href="htrrs://www.google.com/maps/@23.8223586,90.3661283,15z" target="_blank">Melbone st,
                     Australia, Ny 12099</a>
               </li>
               <li>
                  <i class="fas fa-envelope"></i>
                  <a href="mailto:rubelmah55@gmail.com">rubelmah55@gmail.com</a>
               </li>
               <li>
                  <i class="fal fa-phone-alt"></i>
                  <a href="tel:+48555223224">+48 555 223 224</a>
               </li>
            </ul>
         </div>
         <div class="rroffcanvas__social">
            <div class="social-icon">
               <a href="#"><i class="fab fa-twitter"></i></a>
               <a href="#"><i class="fab fa-instagram"></i></a>
               <a href="#"><i class="fab fa-facebook-f"></i></a>
               <a href="#"><i class="fab fa-pinterest-p"></i></a>
            </div>
         </div>
      </div>
   </div>
   <div class="body-overlay"></div>
   <!-- rr-offcanvus-area-end -->

   @include('frontend.layouts.header')


   <main>

      <!-- slider area start -->
      @yield('slider','')
      @yield('breadcrumb','')
      <!-- slider area end -->
      <!-- features area strat -->
      <section class="rr-features-box-area rr-features-box-bg-color p-relative pb-20 d-none d-md-block">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-xl-12">
                  <div class="rr-features-box-wrap p-relative">
                     <div class="rr-features-box-img d-none d-lg-block">
                        <img src="assets/img/feature/img.jpg" alt="img">
                     </div>
                     <div class="rr-features-box-item d-flex justify-content-end align-items-center">
                        <div class="rr-features-box-box d-flex align-items-center">
                           <div class="rr-features-box-icon mr-25">
                              <span><i class="icofont-test-bottle"></i></span>
                           </div>
                           <div class="rr-features-box-text">
                              <h4>Testbottle</h4>
                              <b>Medical</b>
                           </div>
                        </div>
                        <div class="rr-features-box-box d-flex align-items-center">
                           <div class="rr-features-box-icon mr-25">
                              <span><i class="icofont-pills"></i></span>
                           </div>
                           <div class="rr-features-box-text">
                              <h4>Teblet</h4>
                              <b>Cardiology</b>
                           </div>
                        </div>
                        <div class="rr-features-box-box d-flex align-items-center">
                           <div class="rr-features-box-icon mr-25">
                              <span><i class="icofont-heart-beat-alt"></i></span>
                           </div>
                           <div class="rr-features-box-text">
                              <h4>Heartbeat</h4>
                              <b>Cardiology</b>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- features area end -->
      <!-- about area start -->
      <section class="rr-about-area pt-100 pb-100">
         <div class="container">
            <div class="row">
               <div class="col-xl-6 col-lg-6 col-md-12 col-12">
                  <div class="rr-about-wapp p-relative wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
                     <div class="rr-about-shap d-none d-lg-block">
                        <img src="assets/img/about/shape-1.png" alt="img">
                     </div>
                     <div class="rr-about-shap-2 d-none d-lg-block">
                        <img src="assets/img/about/shape-2.png" alt="img">
                     </div>
                     <div class="rr-about-thumb p-relative">
                        <div class="rr-about-main-img">
                           <img src="assets/img/about/img-1.png" alt="img">
                        </div>
                        <div class="rr-about-sml-img d-none d-xl-block">
                           <img src="assets/img/about/img-2.png" alt="img">
                        </div>
                        <div class="rr-about-sm-img text-end p-relative">
                           <a href="#"><img src="assets/img/about/img-3.png" alt="img"></a>
                           <div class="rr-slider-2-video-play">
                              <a class="popup-video" href="htrrs://www.youtube.com/watch?v=K527oNxtO7o"><i
                                    class="fa-sharp fa-regular fa-play"></i></a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-6 col-lg-6 col-md-12 col-12">
                  <div class="rr-about-content p-relative rr-about-wapp">
                     <div class="rr-about-title-box mb-30">
                        <span class="rr-section-subtitle p-relative wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".3s"><img src="assets/img/testimonial/section-icon.png"
                              alt="img"> OUR ABOUT US</span>
                        <h4 class="rr-section-title pb-15 wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".4s">About Medical Immediately
                           Advanced Manual.</h4>
                        <p class="wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".7s">Sed ut pers piciatis unde omnis iste natus error volu ptatem accus antium one dolor emque
                           laudan tium, totam rem aperiam, eaque <br />ipsam quae
                           eillo invetore off et quasi and medical page</p>
                     </div>
                     <div class="rr-about-list mb-35 wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".5s">
                        <ul class="d-flex align-items-center">
                           <li><a href="about.html"><i class="fa-solid fa-check"></i> Medicine & Health</a></li>
                           <li><a href="about.html"><i class="fa-solid fa-check"></i> Equipment</a></li>
                           <li><a href="about.html"><i class="fa-solid fa-check"></i> Team Doctor Support</a></li>
                        </ul>
                     </div>
                     <div class="rr-about-tag  d-flex align-items-center mb-30 wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".6s">
                        <div class="rr-about-icon">
                           <img src="assets/img/about/about-tag.png" alt="img">
                        </div>
                        <div class="rr-about-text ml-20">
                           <h4 class="rr-about-tag-title">Medical success rate solving.</h4>
                           <p>Medical give you a complete account of
                              expound the actual teachings...</p>
                        </div>
                        <div class="rr-about-img text-end ml-35">
                           <img src="assets/img/about/img-1.jpg" alt="img">
                        </div>
                     </div>
                     <div class="rr-about-btn wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".7s">
                        <a class="rr-btn-1 mr-30" href="about.html"><span>About More <i class="fa-sharp fa-solid fa-plus"></i></span></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- about area end -->
      <!-- doctor area start -->
      <div class="rr-doctors-area  pb-80">
         <div class="container">
            <div class="row">
               <div class="col-xl-12 wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
                  <div class="rr-doctors-title-box text-center mb-45">
                     <div class="rr-doctors-title-box z-index-2">
                        <span class="rr-section-subtitle p-relative"><img src="assets/img/testimonial/section-icon.png"
                              alt="img"> Our Best Doctors <img src="assets/img/testimonial/section-icon.png"
                              alt="img"></span>
                        <h4 class="rr-section-title">Experts in Range Medical Services</h4>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row mb-50">
               <div class="col-xl-6 col-lg-6 col-md-6 col-12 wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
                  <div class="rr-doctors-item mb-25 d-flex align-items-center justify-content-center">
                     <div class="rr-doctors-img">
                        <img src="assets/img/team/doctor-3.png" alt="">
                     </div>
                     <div class="rr-doctors-content">
                        <h4 class="rr-doctors-name"><a href="doctor-details.html">Dr. Jason Roy</a></h4>
                        <span>MBBS, M.D of Medicine </span>
                        <p>Efficiently myocardinate market-driven innovation via open-source alignments. </p>
                        <a class="rr-doctors-button" href="doctor-details.html">Book an Appointment </a>
                     </div>
                  </div>
               </div>
               <div class="col-xl-6 col-lg-6 col-md-6 col-12 wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".5s">
                  <div class="rr-doctors-item mb-25 d-flex align-items-center justify-content-center">
                     <div class="rr-doctors-img">
                        <img src="assets/img/team/doctor-2.png" alt="">
                     </div>
                     <div class="rr-doctors-content">
                        <h4 class="rr-doctors-name"><a href="doctor-details.html">Dr. Nadim Kamal</a></h4>
                        <span>MBBS, M.D of Medicine </span>
                        <p>Efficiently myocardinate market-driven innovation via open-source alignments. </p>
                        <a class="rr-doctors-button" href="doctor-details.html">Book an Appointment </a>
                     </div>
                  </div>
               </div>
               <div class="col-xl-6 col-lg-6 col-md-6 col-12 wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".7s">
                  <div class="rr-doctors-item mb-25 d-flex align-items-center justify-content-center">
                     <div class="rr-doctors-img">
                        <img src="assets/img/team/doctor-1.png" alt="">
                     </div>
                     <div class="rr-doctors-content">
                        <h4 class="rr-doctors-name"><a href="doctor-details.html">Dr. Zinia Zara</a></h4>
                        <span>MBBS, M.D of Medicine </span>
                        <p>Efficiently myocardinate market-driven innovation via open-source alignments. </p>
                        <a class="rr-doctors-button" href="doctor-details.html">Book an Appointment </a>
                     </div>
                  </div>
               </div>
               <div class="col-xl-6 col-lg-6 col-md-6 col-12 wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".9s">
                  <div class="rr-doctors-item mb-25 d-flex align-items-center justify-content-center">
                     <div class="rr-doctors-img">
                        <img src="assets/img/team/team-img-6.png" alt="">
                     </div>
                     <div class="rr-doctors-content">
                        <h4 class="rr-doctors-name"><a href="doctor-details.html">Dr. Nadim Kamal </a></h4>
                        <span>MBBS, M.D of Medicine </span>
                        <p>Efficiently myocardinate market-driven innovation via open-source alignments. </p>
                        <a class="rr-doctors-button" href="doctor-details.html">Book an Appointment </a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-xl-12 col-12 wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".5s">
                  <div class="rr-doctors-btn text-center">
                     <a class="rr-btn-black" href="doctors.html"><span>View all Doctors <i class="fa-sharp fa-solid fa-plus"></i></span></a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- doctor area end -->
      <!-- brand area start -->
      <div class="rr-brand-area">
         <div class="container">
            <div class="row">
               <div class="col-xl-12">
                  <div class="rr-blog-title-box text-center mb-60 p-relative">
                     <span class="rr-section-subtitle  rr-section-border-rl"><img
                           src="assets/img/testimonial/section-icon.png" alt="img"> More Brands work <img
                           src="assets/img/testimonial/section-icon.png" alt="img"></span>
                  </div>
                  <div class="rr-brand-wrapper rr-brand-border pb-70">
                     <div class="swiper-container rr-brand-active">
                        <div class="swiper-wrapper">
                           <div class="swiper-slide">
                              <div class="rr-brand-item text-center">
                                 <img src="assets/img/brand/brand-1-1.png" alt="img">
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="rr-brand-item text-center">
                                 <img src="assets/img/brand/brand-1-2.png" alt="img">
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="rr-brand-item text-center">
                                 <img src="assets/img/brand/brand-1-3.png" alt="img">
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="rr-brand-item text-center">
                                 <img src="assets/img/brand/brand-1-4.png" alt="img">
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="rr-brand-item text-center">
                                 <img src="assets/img/brand/brand-1-3.png" alt="img">
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- brand area end -->
      <!-- funfact area start -->
      <div class="rr-funfact-area pt-100">
         <div class="container">
            <div class="rr-funfact">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
                     <div class="rr-funfact-content text-center fix p-relative">
                        <div class="rr-funfact_shap">
                           <img src="assets/img/footer/footer-shap.png" alt="img">
                        </div>
                        <div class="rr-funfact-icon">
                           <img src="assets/img/counter/icon1.png" alt="img">
                        </div>
                        <div class="rr-funfact-number d-flex align-items-center justify-content-center">
                           <h5 class="rr-funfact-number purecounter" data-purecounter-duration="1"
                              data-purecounter-end="56">0</h5>
                           <b>k+</b>
                        </div>
                        <div class="rr-funfact-text">
                           <span>Happy Clients</span>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".5s">
                     <div class="rr-funfact-content text-center mt-20 fix p-relative rr-funfact-content-2">
                        <div class="rr-funfact_shap">
                           <img src="assets/img/footer/footer-shap.png" alt="img">
                        </div>
                        <div class="rr-funfact-icon">
                           <img src="assets/img/counter/icon2.png" alt="img">
                        </div>
                        <div class="rr-funfact-number d-flex align-items-center justify-content-center">
                           <h5 class="rr-funfact-number purecounter" data-purecounter-duration="1"
                              data-purecounter-end="266">0</h5>
                           <b>+</b>
                        </div>
                        <div class="rr-funfact-text">
                           <span>Team Support</span>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".7s">
                     <div class="rr-funfact-content text-center fix p-relative">
                        <div class="rr-funfact_shap">
                           <img src="assets/img/footer/footer-shap.png" alt="img">
                        </div>
                        <div class="rr-funfact-icon">
                           <img src="assets/img/counter/icon3.png" alt="img">
                        </div>
                        <div class="rr-funfact-number d-flex align-items-center justify-content-center">
                           <h5 class="rr-funfact-number purecounter" data-purecounter-duration="1"
                              data-purecounter-end="1">0</h5>
                           <b>k+</b>
                        </div>
                        <div class="rr-funfact-text">
                           <span>Doctor Numbers</span>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".9s">
                     <div class="rr-funfact-content text-center mt-20 fix p-relative rr-funfact-content-2">
                        <div class="rr-funfact_shap">
                           <img src="assets/img/footer/footer-shap.png" alt="img">
                        </div>
                        <div class="rr-funfact-icon">
                           <img src="assets/img/counter/icon4.png" alt="img">
                        </div>
                        <div class="rr-funfact-number d-flex align-items-center justify-content-center">
                           <h5 class="rr-funfact-number purecounter" data-purecounter-duration="1"
                              data-purecounter-end="59">0</h5>
                           <b>k+</b>
                        </div>
                        <div class="rr-funfact-text">
                           <span>Medical Award</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- funfact area end -->
      <!-- service area start -->
      <section class="rr-service-area rr-service-height rr-service-wapp" data-background="assets/img/team/shap-bg.png">
         <div class="container">
            <div class="row">
               <div class="col-xl-12 wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
                  <div class="rr-price-2-title-box text-center mb-45">
                     <div class="rr-video-title-box z-index-2">
                        <span class="rr-video-subtitle p-relative"><img src="assets/img/testimonial/section-icon.png"
                              alt="img"> Our Best Service <img src="assets/img/testimonial/section-icon.png"
                              alt="img"></span>
                        <h4 class="rr-video-title">Experts in Range Medical Services</h4>
                     </div>
                  </div>
               </div>
            </div>
            <div class="rr-service-active swiper-container">
               <div class="swiper-wrapper">
                  <div class="swiper-slide wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
                     <div class="rr-service-item fix mb-30">
                        <div class="rr-service-content white-bg p-relative">
                           <div class="rr-service-number">
                              <span>01</span>
                           </div>
                           <div class="rr-service-icon">
                              <img src="assets/img/service/medicine.png" alt="img">
                           </div>
                           <div class="rr-service-info ml-80">
                              <h3 class="rr-service-title"><a href="service-details.html">Medicine & Health</a></h3>
                              <span><i class="fa-solid fa-check"></i> <a href="service-details.html">Medicine & Health</a></span>
                           </div>
                           <p>Medical is the knowledge or master event
                              dentify the error of the we website
                              best coding page speed.</p>
                           <div class="rr-service-right-icon text-end">
                              <a href="service-details.html"><i class="fa-solid fa-angle-right"></i></a>
                           </div>
                        </div>

                        <div class="rr-service-thumb">
                           <img class="w-100" src="assets/img/service/bg-1-1.jpg" alt="img">
                        </div>
                     </div>
                  </div>
                  <div class="swiper-slide wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".5s">
                     <div class="rr-service-item  fix mb-30">
                        <div class="rr-service-content white-bg p-relative">
                           <div class="rr-service-number">
                              <span>02</span>
                           </div>
                           <div class="rr-service-icon">
                              <img src="assets/img/service/medicine2.png" alt="img">
                           </div>
                           <div class="rr-service-info ml-80">
                              <h3 class="rr-service-title"><a href="service-details.html">Heart-Beat Service</a></h3>
                              <span><i class="fa-solid fa-check"></i> <a href="service-details.html">Medicine & Health</a></span>
                           </div>
                           <p>Medical is the knowledge or master event
                              dentify the error of the we website
                              best coding page speed.</p>
                           <div class="rr-service-right-icon text-end">
                              <a href="service-details.html"><i class="fa-solid fa-angle-right"></i></a>
                           </div>
                        </div>

                        <div class="rr-service-thumb">
                           <img class="w-100" src="assets/img/service/bg-1-2.jpg" alt="img">
                        </div>
                     </div>
                  </div>
                  <div class="swiper-slide wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".7s">
                     <div class="rr-service-item fix mb-30">
                        <div class="rr-service-content white-bg p-relative">
                           <div class="rr-service-number">
                              <span>03</span>
                           </div>
                           <div class="rr-service-icon">
                              <img src="assets/img/service/medicine3.png" alt="img">
                           </div>
                           <div class="rr-service-info ml-80">
                              <h3 class="rr-service-title"><a href="service-details.html">Economical Choice</a></h3>
                              <span><i class="fa-solid fa-check"></i> <a href="service-details.html">Medicine & Health</a></span>
                           </div>
                           <p>Medical is the knowledge or master event
                              dentify the error of the we website
                              best coding page speed.</p>
                           <div class="rr-service-right-icon text-end">
                              <a href="service-details.html"><i class="fa-solid fa-angle-right"></i></a>
                           </div>
                        </div>

                        <div class="rr-service-thumb">
                           <img class="w-100" src="assets/img/service/bg-1-3.jpg" alt="img">
                        </div>
                     </div>
                  </div>
               </div>
               <div class="rr-main-swiper-dot text-center"></div>
            </div>
            <div class="gallery-slider-dots text-center">
               <span></span>
               <span></span>
               <span></span>
            </div>
         </div>
      </section>
      <!-- service area end -->
      <!-- project area start -->
      <section class="rr-project-area pb-70">
         <div class="container">
            <div class="row">
               <div class="col-lg-6 col-md-6">
                  <div class="rr-project-title-wrapper ">
                     <span class="rr-section-subtitle wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".3s"><img src="assets/img/testimonial/section-icon.png" alt="img">
                        OUR BEST PROJECTS <img src="assets/img/testimonial/section-icon.png" alt="img"></span>
                     <h3 class="rr-section-title rr-section-title-space wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".5s">Work Gallery Medical This
                        Recent Projects.</h3>
                  </div>
               </div>
               <div class="col-lg-6 col-md-6">
                  <div class="rr-project-text wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".7s">
                     <p>In job gives you handcrafted options such as front adm in this
                        reviews or email notifications. It also gives employer projects
                        management fo apps ial media in area.</p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-12">
                  <div class="rr-project-tab-wrapper wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".9s">
                     <ul class="nav nav-pills mb-50 justify-content-end " id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                           <button class="nav-link" id="pills-home-tab" data-bs-toggle="pill"
                              data-bs-target="#pills-home" type="button" role="tab"
                              aria-selected="false">All</button>
                        </li>
                        <li class="nav-item" role="presentation">
                           <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                              data-bs-target="#pills-Architecher" type="button" role="tab"
                              aria-selected="false">Dental</button>
                        </li>
                        <li class="nav-item" role="presentation">
                           <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                              data-bs-target="#pills-Large" type="button" role="tab"
                              aria-selected="false">Neurolog</button>
                        </li>
                        <li class="nav-item" role="presentation">
                           <button class="nav-link" id="pills-Interiour-tab" data-bs-toggle="pill"
                              data-bs-target="#pills-Interiour" type="button" role="tab" 
                              aria-selected="false">Medical</button>
                        </li>
                        <li class="nav-item" role="presentation">
                           <button class="nav-link active" id="pills-House-tab" data-bs-toggle="pill"
                              data-bs-target="#pills-House" type="button" role="tab" 
                              aria-selected="true">Technology</button>
                        </li>
                     </ul>

                     <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade" id="pills-home" role="tabpanel" >
                           <div class="row">
                              <div class="col-lg-4 col-md-4">
                                 <div class="rr-project-item">
                                    <div class="rr-project-thumb mb-25 p-relative">
                                       <img class="w-100" src="assets/img/project/project1.jpg" alt="img">
                                       <div class="rr-project-thumb-info">
                                          <h4 class="rr-project-thumb-title"><a href="project-details.html">Home Visit</a></h4>
                                          <p>Clinic</p>
                                       </div>
                                       <div class="rr-project-right-icon">
                                          <a href="project-details.html"><i class="fa-regular fa-arrow-right"></i></a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-4 col-md-4">
                                 <div class="rr-project-item">
                                    <div class="rr-project-thumb mb-25 p-relative">
                                       <img class="w-100" src="assets/img/project/project2.jpg" alt="img">
                                       <div class="rr-project-thumb-info">
                                          <h4 class="rr-project-thumb-title"><a href="project-details.html">Investigations</a></h4>
                                          <p>Family</p>
                                       </div>
                                       <div class="rr-project-right-icon">
                                          <a href="project-details.html"><i class="fa-regular fa-arrow-right"></i></a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-4 col-md-4">
                                 <div class="rr-project-item">
                                    <div class="rr-project-thumb mb-25 p-relative">
                                       <img class="w-100" src="assets/img/project/project3.jpg" alt="img">
                                       <div class="rr-project-thumb-info">
                                          <h4 class="rr-project-thumb-title"><a href="project-details.html">Cardiology</a></h4>
                                          <p> Medical / Team</p>
                                       </div>
                                       <div class="rr-project-right-icon">
                                          <a href="project-details.html"><i class="fa-regular fa-arrow-right"></i></a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-8 col-md-8">
                                 <div class="rr-project-item rr-project-padding">
                                    <div class="rr-project-thumb mb-25 p-relative">
                                       <img class="w-100" src="assets/img/project/project4.jpg" alt="img">
                                       <div class="rr-project-thumb-info">
                                          <h4 class="rr-project-thumb-title"><a href="project-details.html">Economical
                                                Choice</a></h4>
                                          <p> Pediatrics</p>
                                       </div>
                                       <div class="rr-project-right-icon">
                                          <a href="project-details.html"><i class="fa-regular fa-arrow-right"></i></a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-4 col-md-4">
                                 <div class="rr-project-item">
                                    <div class="rr-project-thumb mb-25 p-relative">
                                       <img class="w-100" src="assets/img/project/project5.jpg" alt="img">
                                       <div class="rr-project-thumb-info">
                                          <h4 class="rr-project-thumb-title"><a href="project-details.html">Pediatrics Care</a></h4>
                                          <p>Pediatrics</p>
                                       </div>
                                       <div class="rr-project-right-icon">
                                          <a href="project-details.html"><i class="fa-regular fa-arrow-right"></i></a>
                                       </div>
                                    </div>
                                 </div>
                              </div>

                           </div>
                        </div>
                        <div class="tab-pane fade" id="pills-Architecher" role="tabpanel"
                          >
                          <div class="row">
                           <div class="col-lg-4 col-md-4">
                              <div class="rr-project-item">
                                 <div class="rr-project-thumb mb-25 p-relative">
                                    <img class="w-100" src="assets/img/project/project2.jpg" alt="img">
                                    <div class="rr-project-thumb-info">
                                       <h4 class="rr-project-thumb-title"><a href="project-details.html">Home Visit</a></h4>
                                       <p>Clinic</p>
                                    </div>
                                    <div class="rr-project-right-icon">
                                       <a href="project-details.html"><i class="fa-regular fa-arrow-right"></i></a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-md-4">
                              <div class="rr-project-item">
                                 <div class="rr-project-thumb mb-25 p-relative">
                                    <img class="w-100" src="assets/img/project/project1.jpg" alt="img">
                                    <div class="rr-project-thumb-info">
                                       <h4 class="rr-project-thumb-title"><a href="project-details.html">Investigations</a></h4>
                                       <p>Family</p>
                                    </div>
                                    <div class="rr-project-right-icon">
                                       <a href="project-details.html"><i class="fa-regular fa-arrow-right"></i></a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-md-4">
                              <div class="rr-project-item">
                                 <div class="rr-project-thumb mb-25 p-relative">
                                    <img class="w-100" src="assets/img/project/project3.jpg" alt="img">
                                    <div class="rr-project-thumb-info">
                                       <h4 class="rr-project-thumb-title"><a href="project-details.html">Cardiology</a></h4>
                                       <p> Medical / Team</p>
                                    </div>
                                    <div class="rr-project-right-icon">
                                       <a href="project-details.html"><i class="fa-regular fa-arrow-right"></i></a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-8 col-md-8">
                              <div class="rr-project-item rr-project-padding">
                                 <div class="rr-project-thumb mb-25 p-relative">
                                    <img class="w-100" src="assets/img/project/project4.jpg" alt="img">
                                    <div class="rr-project-thumb-info">
                                       <h4 class="rr-project-thumb-title"><a href="project-details.html">Economical
                                             Choice</a></h4>
                                       <p> Pediatrics</p>
                                    </div>
                                    <div class="rr-project-right-icon">
                                       <a href="project-details.html"><i class="fa-regular fa-arrow-right"></i></a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-md-4">
                              <div class="rr-project-item">
                                 <div class="rr-project-thumb mb-25 p-relative">
                                    <img class="w-100" src="assets/img/project/project5.jpg" alt="img">
                                    <div class="rr-project-thumb-info">
                                       <h4 class="rr-project-thumb-title"><a href="project-details.html">Pediatrics Care</a></h4>
                                       <p>Pediatrics</p>
                                    </div>
                                    <div class="rr-project-right-icon">
                                       <a href="project-details.html"><i class="fa-regular fa-arrow-right"></i></a>
                                    </div>
                                 </div>
                              </div>
                           </div>

                        </div>
                        </div>
                        <div class="tab-pane fade" id="pills-Large" role="tabpanel" >
                           <div class="row">
                              <div class="col-lg-4 col-md-4">
                                 <div class="rr-project-item">
                                    <div class="rr-project-thumb mb-25 p-relative">
                                       <img class="w-100" src="assets/img/project/project1.jpg" alt="img">
                                       <div class="rr-project-thumb-info">
                                          <h4 class="rr-project-thumb-title"><a href="project-details.html">Home Visit</a></h4>
                                          <p>Clinic</p>
                                       </div>
                                       <div class="rr-project-right-icon">
                                          <a href="project-details.html"><i class="fa-regular fa-arrow-right"></i></a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-4 col-md-4">
                                 <div class="rr-project-item">
                                    <div class="rr-project-thumb mb-25 p-relative">
                                       <img class="w-100" src="assets/img/project/project2.jpg" alt="img">
                                       <div class="rr-project-thumb-info">
                                          <h4 class="rr-project-thumb-title"><a href="project-details.html">Investigations</a></h4>
                                          <p>Family</p>
                                       </div>
                                       <div class="rr-project-right-icon">
                                          <a href="project-details.html"><i class="fa-regular fa-arrow-right"></i></a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-4 col-md-4">
                                 <div class="rr-project-item">
                                    <div class="rr-project-thumb mb-25 p-relative">
                                       <img class="w-100" src="assets/img/project/project3.jpg" alt="img">
                                       <div class="rr-project-thumb-info">
                                          <h4 class="rr-project-thumb-title"><a href="project-details.html">Cardiology</a></h4>
                                          <p> Medical / Team</p>
                                       </div>
                                       <div class="rr-project-right-icon">
                                          <a href="project-details.html"><i class="fa-regular fa-arrow-right"></i></a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-8 col-md-8">
                                 <div class="rr-project-item rr-project-padding">
                                    <div class="rr-project-thumb mb-25 p-relative">
                                       <img class="w-100" src="assets/img/project/project4.jpg" alt="img">
                                       <div class="rr-project-thumb-info">
                                          <h4 class="rr-project-thumb-title"><a href="project-details.html">Economical
                                                Choice</a></h4>
                                          <p> Pediatrics</p>
                                       </div>
                                       <div class="rr-project-right-icon">
                                          <a href="project-details.html"><i class="fa-regular fa-arrow-right"></i></a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-4 col-md-4">
                                 <div class="rr-project-item">
                                    <div class="rr-project-thumb mb-25 p-relative">
                                       <img class="w-100" src="assets/img/project/project5.jpg" alt="img">
                                       <div class="rr-project-thumb-info">
                                          <h4 class="rr-project-thumb-title"><a href="project-details.html">Pediatrics Care</a></h4>
                                          <p>Pediatrics</p>
                                       </div>
                                       <div class="rr-project-right-icon">
                                          <a href="project-details.html"><i class="fa-regular fa-arrow-right"></i></a>
                                       </div>
                                    </div>
                                 </div>
                              </div>

                           </div>
                        </div>
                        <div class="tab-pane fade" id="pills-Interiour" role="tabpanel">
                           <div class="row">
                              <div class="col-lg-4 col-md-4">
                                 <div class="rr-project-item">
                                    <div class="rr-project-thumb mb-25 p-relative">
                                       <img class="w-100" src="assets/img/project/project2.jpg" alt="img">
                                       <div class="rr-project-thumb-info">
                                          <h4 class="rr-project-thumb-title"><a href="project-details.html">Home Visit</a></h4>
                                          <p>Clinic</p>
                                       </div>
                                       <div class="rr-project-right-icon">
                                          <a href="project-details.html"><i class="fa-regular fa-arrow-right"></i></a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-4 col-md-4">
                                 <div class="rr-project-item">
                                    <div class="rr-project-thumb mb-25 p-relative">
                                       <img class="w-100" src="assets/img/project/project1.jpg" alt="img">
                                       <div class="rr-project-thumb-info">
                                          <h4 class="rr-project-thumb-title"><a href="project-details.html">Investigations</a></h4>
                                          <p>Family</p>
                                       </div>
                                       <div class="rr-project-right-icon">
                                          <a href="project-details.html"><i class="fa-regular fa-arrow-right"></i></a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-4 col-md-4">
                                 <div class="rr-project-item">
                                    <div class="rr-project-thumb mb-25 p-relative">
                                       <img class="w-100" src="assets/img/project/project3.jpg" alt="img">
                                       <div class="rr-project-thumb-info">
                                          <h4 class="rr-project-thumb-title"><a href="project-details.html">Cardiology</a></h4>
                                          <p> Medical / Team</p>
                                       </div>
                                       <div class="rr-project-right-icon">
                                          <a href="project-details.html"><i class="fa-regular fa-arrow-right"></i></a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-8 col-md-8">
                                 <div class="rr-project-item rr-project-padding">
                                    <div class="rr-project-thumb mb-25 p-relative">
                                       <img class="w-100" src="assets/img/project/project4.jpg" alt="img">
                                       <div class="rr-project-thumb-info">
                                          <h4 class="rr-project-thumb-title"><a href="project-details.html">Economical
                                                Choice</a></h4>
                                          <p> Pediatrics</p>
                                       </div>
                                       <div class="rr-project-right-icon">
                                          <a href="project-details.html"><i class="fa-regular fa-arrow-right"></i></a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-4 col-md-4">
                                 <div class="rr-project-item">
                                    <div class="rr-project-thumb mb-25 p-relative">
                                       <img class="w-100" src="assets/img/project/project5.jpg" alt="img">
                                       <div class="rr-project-thumb-info">
                                          <h4 class="rr-project-thumb-title"><a href="project-details.html">Pediatrics Care</a></h4>
                                          <p>Pediatrics</p>
                                       </div>
                                       <div class="rr-project-right-icon">
                                          <a href="project-details.html"><i class="fa-regular fa-arrow-right"></i></a>
                                       </div>
                                    </div>
                                 </div>
                              </div>

                           </div>
                        </div>

                        <div class="tab-pane fade active show" id="pills-House" role="tabpanel">
                           <div class="row">
                              <div class="col-lg-4 col-md-4">
                                 <div class="rr-project-item">
                                    <div class="rr-project-thumb mb-25 p-relative">
                                       <img class="w-100" src="assets/img/project/project1.jpg" alt="img">
                                       <div class="rr-project-thumb-info">
                                          <h4 class="rr-project-thumb-title"><a href="project-details.html">Home Visit</a></h4>
                                          <p>Clinic</p>
                                       </div>
                                       <div class="rr-project-right-icon">
                                          <a href="project-details.html"><i class="fa-regular fa-arrow-right"></i></a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-4 col-md-4">
                                 <div class="rr-project-item">
                                    <div class="rr-project-thumb mb-25 p-relative">
                                       <img class="w-100" src="assets/img/project/project2.jpg" alt="img">
                                       <div class="rr-project-thumb-info">
                                          <h4 class="rr-project-thumb-title"><a href="project-details.html">Investigations</a></h4>
                                          <p>Family</p>
                                       </div>
                                       <div class="rr-project-right-icon">
                                          <a href="project-details.html"><i class="fa-regular fa-arrow-right"></i></a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-4 col-md-4">
                                 <div class="rr-project-item">
                                    <div class="rr-project-thumb mb-25 p-relative">
                                       <img class="w-100" src="assets/img/project/project3.jpg" alt="img">
                                       <div class="rr-project-thumb-info">
                                          <h4 class="rr-project-thumb-title"><a href="project-details.html">Cardiology</a></h4>
                                          <p> Medical / Team</p>
                                       </div>
                                       <div class="rr-project-right-icon">
                                          <a href="project-details.html"><i class="fa-regular fa-arrow-right"></i></a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-8 col-md-8">
                                 <div class="rr-project-item rr-project-padding">
                                    <div class="rr-project-thumb mb-25 p-relative">
                                       <img class="w-100" src="assets/img/project/project4.jpg" alt="img">
                                       <div class="rr-project-thumb-info">
                                          <h4 class="rr-project-thumb-title"><a href="project-details.html">Economical
                                                Choice</a></h4>
                                          <p> Pediatrics</p>
                                       </div>
                                       <div class="rr-project-right-icon">
                                          <a href="project-details.html"><i class="fa-regular fa-arrow-right"></i></a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-4 col-md-4">
                                 <div class="rr-project-item">
                                    <div class="rr-project-thumb mb-25 p-relative">
                                       <img class="w-100" src="assets/img/project/project5.jpg" alt="img">
                                       <div class="rr-project-thumb-info">
                                          <h4 class="rr-project-thumb-title"><a href="project-details.html">Pediatrics Care</a></h4>
                                          <p>Pediatrics</p>
                                       </div>
                                       <div class="rr-project-right-icon">
                                          <a href="project-details.html"><i class="fa-regular fa-arrow-right"></i></a>
                                       </div>
                                    </div>
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
      <!-- project area end -->
      <!-- call area start -->
      <section class="rr-call-area rr-call-shap p-relative pt-35 pb-35 fix" data-background="assets/img/contact/contact-bg.jpg">
         <div class="container">
            <div class="row align-items-center justify-content-between">
               <div class="col-xl-8 col-lg-7 col-md-8 col-12">
                  <div class="rr-call-warap d-flex align-items-center z-index-2">
                     <div class="rr-call-icon">
                        <img src="assets/img/contact/call.png" alt="img">
                     </div>
                     <div class="rr-call-info">
                        <h3>Immediately Call Medical Health Care</h3>
                        <span><a href="tel:+09627387877">Call: ++5544555444</a></span>
                     </div>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-5 col-md-4 col-12">
                  <div class="rr-call-btn text-end mt-10">
                     <a class="rr-btn-white-2" href="contact.html"><span>Contact Us <i
                              class="fa-sharp fa-solid fa-plus"></i></span></a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- call area end -->
      <!-- faq area start -->
      <div class="rr-faq-area p-relative fix pt-110 pb-80">
         <div class="container">
            <div class="row">
               <div class="col-xl-6 col-lg-6 col-md-6 wow rrfadeLeft" data-wow-duration=".9s" data-wow-delay=".7s">
                  <div class="rr-faq-left z-index-3">
                     <div class="rr-faq-title-box pb-25">
                        <span class="rr-section-subtitle"><img src="assets/img/testimonial/section-icon.png" alt="img">
                           OUR FAQ NOW</span>
                        <h4 class="rr-section-title  rr-section-title-space">Medical Team Question <br/>
                           Faq This Advanced .</h4>
                        <p>Sed ut pers piciatis unde omnis iste natus error volu ptatem accus antium one dolor emque
                           laudan tium, totam rem aperiam, eaque ipsam quae
                           eillo invetore off veritatis et quasi and medical page</p>
                     </div>
                     <div class="rr-faq-wrap">
                        <div class="rr-custom-accordion">
                           <div class="accordion" id="accordionExample">
                              <div class="accordion-items rr-faq-active">
                                 <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-buttons " type="button" data-bs-toggle="collapse"
                                       data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                       <i class="fa-solid fa-check"></i> Maecenas facilisis erat id odio
                                    </button>
                                 </h2>
                                 <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                       There are many variations of passages of is psum 
                                       the majority have suffered alteration in some we 
                                       by injected humour,
                                       <span>01</span>
                                    </div>
                                 </div>
                              </div>
                              <div class="accordion-items">
                                 <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-buttons collapsed" type="button" data-bs-toggle="collapse"
                                       data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                       <i class="fa-solid fa-check"></i> Phasellus et vehicula nulla
                                    </button>
                                 </h2>
                                 <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                       There are many variations of passages of is psum 
                                       the majority have suffered alteration in some we 
                                       by injected humour,
                                       <span>02</span>
                                    </div>
                                 </div>
                              </div>
                              <div class="accordion-items">
                                 <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-buttons collapsed" type="button" data-bs-toggle="collapse"
                                       data-bs-target="#collapseThree" aria-expanded="false"
                                       aria-controls="collapseThree">
                                       <i class="fa-solid fa-check"></i> Maecenas malesuada
                                    </button>
                                 </h2>
                                 <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                       There are many variations of passages of is psum 
                                       the majority have suffered alteration in some we
                                       by injected humour,
                                       <span>03</span>
                                    </div>
                                 </div>
                              </div>
                              <div class="accordion-items">
                                 <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-buttons collapsed" type="button" data-bs-toggle="collapse"
                                       data-bs-target="#collapseFour" aria-expanded="false"
                                       aria-controls="collapseFour">
                                       <i class="fa-solid fa-check"></i> Why you join our team
                                    </button>
                                 </h2>
                                 <div id="collapseFour" class="accordion-collapse collapse"
                                    aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                       There are many variations of passages of is psum 
                                       the majority have suffered alteration in some we 
                                       by injected humour,
                                       <span>04</span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-6 col-lg-6 col-md-6 wow rrfadeLeft" data-wow-duration=".9s" data-wow-delay=".5s">
                  <div class="rr-faq-thumb">
                     <img src="assets/img/faq/thumb-1-1.png" alt="img">
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- faq area end -->
      <!-- progressbar area end -->
      <section class="rr-about-area pb-100">
         <div class="container">
            <div class="row">
               <div class="col-xl-12 col-lg-12">
                  <div class="rr-about-progressbar-inner d-flex flex-wrap pt-20">
                     <div class="rr-about-3-progressbar text-center z-index-3">
                        <div class="circular tl-progress">
                           <input type="text" class="knob" value="0" data-rel="50" data-linecap="round" data-width="96"
                              data-height="96" data-bgcolor="#eeeeee" data-fgcolor="#e72254" data-thickness=".2"
                              data-readonly="true" disabled />
                        </div>
                        <div class="rr-about-3-progressbar-title">
                           <p>Happy Client</p>
                        </div>
                     </div>
                     <div class="rr-about-3-progressbar text-center z-index-3">
                        <div class="circular tl-progress">
                           <input type="text" class="knob" value="0" data-rel="63" data-linecap="round" data-width="96"
                              data-height="96" data-bgcolor="#eeeeee" data-fgcolor="#e72254" data-thickness=".2"
                              data-readonly="true" disabled />
                        </div>
                        <div class="rr-about-3-progressbar-title">
                           <p>Science Laboratory</p>
                        </div>
                     </div>
                     <div class="rr-about-3-progressbar text-center z-index-3">
                        <div class="circular tl-progress">
                           <input type="text" class="knob" value="0" data-rel="70" data-linecap="round" data-width="96"
                              data-height="96" data-bgcolor="#eeeeee" data-fgcolor="#e72254" data-thickness=".2"
                              data-readonly="true" disabled />
                        </div>
                        <div class="rr-about-3-progressbar-title">
                           <p>Doctor Support</p>
                        </div>
                     </div>
                     <div class="rr-about-3-progressbar text-center z-index-3">
                        <div class="circular tl-progress">
                           <input type="text" class="knob" value="0" data-rel="50" data-linecap="round" data-width="96"
                              data-height="96" data-bgcolor="#eeeeee" data-fgcolor="#e72254" data-thickness=".2"
                              data-readonly="true" disabled />
                        </div>
                        <div class="rr-about-3-progressbar-title">
                           <p>Medical Choice</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>

      </section>
      <!-- progressbar area end -->
      <!-- contact area start -->
      <section class="rr-contact-area p-relative black-bg fix">
         <div class="rr-contact-shap">
            <img src="assets/img/contact/shap01.png" alt="img">
         </div>
         <div class="rr-contact-img">
            <img src="assets/img/contact/contact-img.jpg" alt="img">
         </div>
         <div class="container">
            <div class="row">
               <div class="col-xl-6 col-lg-3 col-md-1"></div>
               <div class="col-xl-4 col-lg-9 col-md-10">
                  <div class="rr-form-box text-center">
                     <b>OUR Booking Now</b>
                     <h4 class="rr-section-title pb-60">Appoinment</h4>
                     <form>
                        <div class="row">
                           <div class="col-xl-6 col-lg-6 col-md-6 mb-20">
                              <div class="rr-form-input-box rr-form-input-main">
                                 <input type="text" placeholder="Name">
                              </div>
                           </div>
                           <div class="col-xl-6 col-lg-6 col-md-6 mb-20">
                              <div class="rr-form-input-box rr-form-input-main">
                                 <input type="email" placeholder="Email">
                              </div>
                           </div>

                           <div class="col-xl-12 col-lg-12 col-md-12 mb-20">
                              <div class="rr-form-input-box rr-form-input-main">
                                 <input type="text" placeholder="Address">
                              </div>
                           </div>
                           <div class=" col-md-12 col-12">
                              <div class="rr-form-input-box pb-30 rr-form-input-main">
                                 <select style="display: none;">
                                    <option>Choose Service</option>
                                    <option>Medicine &amp; Health</option>
                                    <option>Economical Choice</option>
                                    <option>Team Of Support</option>
                                    <option>Test Laboratory</option>
                                 </select>
                                 <div class="nice-select" tabindex="0"><span class="current">Choose Service</span>
                                    <ul class="list">
                                       <li data-value="Your Inquiry about" class="option selected focus">Choose
                                          Service
                                       </li>
                                       <li data-value="01 Year" class="option">Medicine &amp; Health</li>
                                       <li data-value="02 Year" class="option">Economical Choice</li>
                                       <li data-value="03 Year" class="option">Team Of Support</li>
                                       <li data-value="04 Year" class="option">Test Laboratory</li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <div class="col-12 mb-20">
                              <div class="rr-form-textarea-box">
                                 <textarea placeholder="Your meassage"></textarea>
                              </div>
                           </div>

                        </div>
                     </form>
                     <button class="rr-btn-1 rr-form-theme-bg" type="submit"><span>Make an appoinment</span></button>
                  </div>
               </div>
               <div class="col-xl-2 col-lg-10 col-md-1"></div>
            </div>
         </div>

      </section>
      <!-- contact area end -->
      <!-- testimonial area start -->
      <div class="rr-testimonial-area p-relative pt-90 pb-90">
         <div class="container">
            <div class="row">
               <div class="col-xl-12 wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
                  <div class="rr-price-2-title-box text-center mb-45">
                     <div class="rr-video-title-box z-index-2">
                        <span class="rr-video-subtitle p-relative"><img src="assets/img/testimonial/section-icon.png"
                              alt="img"> Our testimonials Say <img src="assets/img/testimonial/section-icon.png"
                              alt="img"></span>
                        <h4 class="rr-section-title">We Are People Say Doctor</h4>
                     </div>
                  </div>
                  <div class="rr-testimonial-wrapper">
                     <div class="swiper-container rr-testimonial-active">
                        <div class="swiper-wrapper">
                           <div class="swiper-slide wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
                              <div class="rr-testimonial-item p-relative">
                                 <div class="rr-testimonial-shap">
                                    <img src="assets/img/testimonial/testimonial-icon.png" alt="img">
                                 </div>
                                 <div class="rr-testimonial-quote">
                                    <i class="fa-solid fa-quote-right"></i>
                                 </div>
                                 <div class="quote-border"></div>
                                 <div class="rr-testimonial-text mb-25">
                                    <p>We are privileged to work with
                                       hundreds of future-thin this best
                                       including many of the world’s
                                       top ha,medical,brands..</p>
                                 </div>
                                 <div class="rr-testimonial-author-box">

                                    <div class="rr-testimonial-author-info">
                                       <h5>Dr. Mean Bara</h5>
                                       <span>Founder</span>
                                    </div>
                                 </div>
                                 <div class="rr-testimonial-star text-end">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    
                                 </div>
                                 <div class="rr-testimonial-author-thumb">
                                    <img src="assets/img/testimonial/avada-5.png" alt="img">
                                 </div>
                              </div>
                           </div>
                           <div class="swiper-slide wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".5s">
                              <div class="rr-testimonial-item p-relative">
                                 <div class="rr-testimonial-shap">
                                    <img src="assets/img/testimonial/testimonial-icon.png" alt="img">
                                 </div>
                                 <div class="rr-testimonial-quote">
                                    <i class="fa-solid fa-quote-right"></i>
                                 </div>
                                 <div class="quote-border"></div>
                                 <div class="rr-testimonial-text mb-25">
                                    <p>We are privileged to work with
                                       hundreds of future-thin this best
                                       including many of the world’s
                                       top ha,medical,brands..</p>
                                 </div>
                                 <div class="rr-testimonial-author-box">

                                    <div class="rr-testimonial-author-info">
                                       <h5>Dr. Larat Mara</h5>
                                       <span>Manager</span>
                                    </div>
                                 </div>
                                 <div class="rr-testimonial-star text-end">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <span><i class="fa-solid fa-star"></i></span>
                                 </div>
                                 <div class="rr-testimonial-author-thumb">
                                    <img src="assets/img/testimonial/avada-2.png" alt="img">
                                 </div>
                              </div>
                           </div>
                           <div class="swiper-slide wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".7s">
                              <div class="rr-testimonial-item p-relative">
                                 <div class="rr-testimonial-shap">
                                    <img src="assets/img/testimonial/testimonial-icon.png" alt="img">
                                 </div>
                                 <div class="rr-testimonial-quote">
                                    <i class="fa-solid fa-quote-right"></i>
                                 </div>
                                 <div class="quote-border"></div>
                                 <div class="rr-testimonial-text mb-25">
                                    <p>We are privileged to work with
                                       hundreds of future-thin this best
                                       including many of the world’s
                                       top ha,medical,brands..</p>
                                 </div>
                                 <div class="rr-testimonial-author-box">

                                    <div class="rr-testimonial-author-info">
                                       <h5>Dr. Raf Bara</h5>
                                       <span>Founder</span>
                                    </div>
                                 </div>
                                 <div class="rr-testimonial-star text-end">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <span><i class="fa-solid fa-star"></i></span>
                                 </div>
                                 <div class="rr-testimonial-author-thumb">
                                    <img src="assets/img/testimonial/avada-4.png" alt="img">
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="rr-main-swiper-dot text-center mt-20">
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- testimonial area end -->
      <!-- features area start -->
      <section class="rr-main-features-area pb-80">
         <div class="container">
            <div class="row wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
               <div class="rr-features-3-title-box text-center mb-45">
                  <span class="rr-section-subtitle p-relative"><img src="assets/img/testimonial/section-icon.png" alt="img"> Our Best Features <img src="assets/img/testimonial/section-icon.png" alt="img"></span>
                  <h4 class="rr-section-title  rr-section-title-space">Experts in Range Medical Features</h4>
               </div>
            </div>
            <div class="row">
               <div class="col-xl-4 col-lg-4 col-md-6 col-12 wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
                  <div class="rr-features-3">
                     <div class="rr-features-3-item p-relative d-flex align-items-center">
                        <div class="rr-features-3-icon mr-20">
                           <i class="icofont-pills"></i>
                        </div>
                        <div class="rr-features-3-content">
                           <h4 class="rr-features-3-title"><a href="service.html">Precise Diagnosis</a></h4>
                           <p>Lorem ipsum dolor sit amet, cons ectetuer. Proin gravida nibh vel velit auctor aliquet aenean</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-6 col-12 wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".4s">
                  <div class="rr-features-3">
                     <div class="rr-features-3-item p-relative d-flex align-items-center">
                        <div class="rr-features-3-icon mr-20">
                           <i class="icofont-doctor-alt"></i>
                        </div>
                        <div class="rr-features-3-content">
                           <h4 class="rr-features-3-title"><a href="service.html">Vascular Surgery</a></h4>
                           <p>Lorem ipsum dolor sit amet, cons ectetuer. Proin gravida nibh vel velit auctor aliquet aenean</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-6 col-12 wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".5s">
                  <div class="rr-features-3">
                     <div class="rr-features-3-item p-relative d-flex align-items-center">
                        <div class="rr-features-3-icon mr-20">
                           <i class="icofont-stethoscope-alt"></i>
                        </div>
                        <div class="rr-features-3-content">
                           <h4 class="rr-features-3-title"><a href="service.html">Primary Care</a></h4>
                           <p>Lorem ipsum dolor sit amet, cons ectetuer. Proin gravida nibh vel velit auctor aliquet aenean</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-6 col-12 wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".6s">
                  <div class="rr-features-3">
                     <div class="rr-features-3-item p-relative d-flex align-items-center">
                        <div class="rr-features-3-icon mr-20">
                          <i class="icofont-first-aid"></i>
                        </div>
                        <div class="rr-features-3-content">
                           <h4 class="rr-features-3-title"><a href="service.html">General Surgery</a></h4>
                           <p>Lorem ipsum dolor sit amet, cons ectetuer. Proin gravida nibh vel velit auctor aliquet aenean</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-6 col-12 wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".7s">
                  <div class="rr-features-3">
                     <div class="rr-features-3-item p-relative d-flex align-items-center">
                        <div class="rr-features-3-icon mr-20">
                          <i class="icofont-heartbeat"></i>
                        </div>
                        <div class="rr-features-3-content">
                           <h4 class="rr-features-3-title"><a href="service.html">Cardiac Clinic</a></h4>
                           <p>Lorem ipsum dolor sit amet, cons ectetuer. Proin gravida nibh vel velit auctor aliquet aenean</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-6 col-12 wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".8s">
                  <div class="rr-features-3">
                     <div class="rr-features-3-item p-relative d-flex align-items-center">
                        <div class="rr-features-3-icon mr-20">
                          <i class="icofont-ambulance"></i>
                        </div>
                        <div class="rr-features-3-content">
                           <h4 class="rr-features-3-title"><a href="service.html">Emergency Clinic</a></h4>
                           <p>Lorem ipsum dolor sit amet, cons ectetuer. Proin gravida nibh vel velit auctor aliquet aenean</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- features area end -->

      <!-- price area start -->
      <div class="rr-price-2-area pb-70 pt-80 grey-bg">
         <div class="container">
            <div class="row">
               <div class="col-xl-12 wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
                  <div class="rr-price-2-title-box text-center mb-45">
                     <span class="rr-section-subtitle p-relative"><img src="assets/img/testimonial/section-icon.png"
                           alt="img"> Our popular pricing <img src="assets/img/testimonial/section-icon.png"
                           alt="img"></span>
                     <h4 class="rr-section-title rr-section-title-space">Medical Terms Pricing Package</h4>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-6 mb-30 wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
                  <div class="rr-price-2-item p-relative">
                     <div class="rr-price-2-top">
                        <span>BASIC PLAN</span>
                        <h4 class="rr-price-2-rate pb-30">$100 <b>/Per Month</b></h4>
                     </div>
                     <div class="rr-price-2-shap">
                        <img src="assets/img/testimonial/pricing.png" alt="img">
                     </div>
                     <div class="rr-price-2-list">
                        <ul>
                           <li><i class="fa-sharp fa-regular fa-circle-check"></i> Analyzer Medical business</li>
                           <li><i class="fa-regular fa-xmark"></i> Team Best Support</li>
                           <li><i class="fa-sharp fa-regular fa-circle-check"></i> Communicate This Process</li>
                           <li><i class="fa-sharp fa-regular fa-circle-check"></i> No Risk Garrunty</li>
                           <li><i class="fa-sharp fa-regular fa-circle-check"></i> Company Solution</li>
                        </ul>
                     </div>
                     <a class="rr-btn-2" href="pricing.html"><span>learn more <i
                              class="fa-sharp fa-solid fa-plus"></i></span></a>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-6 mb-30 wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".5s">
                  <div class="rr-price-2-item p-relative active">
                     <div class="rr-price-2-shap-side-icon">
                        <img src="assets/img/testimonial/icon.png" alt="img">
                     </div>
                     <div class="rr-price-2-top">
                        <span>ADVANCED</span>
                        <h4 class="rr-price-2-rate pb-30">$200 <b>/Per Month</b></h4>
                     </div>
                     <div class="rr-price-2-shap">
                        <img src="assets/img/testimonial/pricing.png" alt="img">
                     </div>
                     <div class="rr-price-2-list">
                        <ul>
                           <li><i class="fa-sharp fa-regular fa-circle-check"></i> Analyzer Medical business</li>
                           <li><i class="fa-regular fa-xmark"></i> Team Best Support</li>
                           <li><i class="fa-sharp fa-regular fa-circle-check"></i> Communicate This Process</li>
                           <li><i class="fa-sharp fa-regular fa-circle-check"></i> No Risk Garrunty</li>
                           <li><i class="fa-sharp fa-regular fa-circle-check"></i> Company Solution</li>
                        </ul>
                     </div>
                     <a class="rr-btn-2" href="pricing.html"><span>learn more <i
                              class="fa-sharp fa-solid fa-plus"></i></span></a>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-6 mb-30 wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".7s">
                  <div class="rr-price-2-item p-relative">
                     <div class="rr-price-2-top">
                        <span>PREMIUM</span>
                        <h4 class="rr-price-2-rate pb-30">$500 <b>/Per Years</b></h4>
                     </div>
                     <div class="rr-price-2-shap">
                        <img src="assets/img/testimonial/pricing.png" alt="img">
                     </div>
                     <div class="rr-price-2-list">
                        <ul>
                           <li><i class="fa-sharp fa-regular fa-circle-check"></i> Analyzer Medical business</li>
                           <li><i class="fa-regular fa-xmark"></i> Team Best Support</li>
                           <li><i class="fa-sharp fa-regular fa-circle-check"></i> Communicate This Process</li>
                           <li><i class="fa-sharp fa-regular fa-circle-check"></i> No Risk Garrunty</li>
                           <li><i class="fa-sharp fa-regular fa-circle-check"></i> Company Solution</li>
                        </ul>
                     </div>
                     <a class="rr-btn-2" href="pricing.html"><span>learn more <i
                              class="fa-sharp fa-solid fa-plus"></i></span></a>
                  </div>
               </div>

            </div>
         </div>
      </div>
      <!-- price area end -->

      <!-- blog area start -->
      <div class="rr-blog-area pt-100 pb-60">
         <div class="container">
            <div class="row">
               <div class="col-xl-12 wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
                  <div class="rr-blog-title-box text-center mb-45">
                     <span class="rr-section-subtitle">Our Largest Blog</span>
                     <h4 class="rr-section-title">Latest News Health and Medical</h4>
                  </div>
               </div>
               <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mb-25 wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
                  <div class="rr-blog-item d-flex">
                     <div class="rr-blog-thumb-main p-relative">
                        <a href="blog-details.html">
                           <div class="rr-blog-thumb rr-blog-wid">
                              <img src="assets/img/blog/1.jpg" alt="img">
                           </div>
                        </a>
                        <div class="rr-blog-cat">
                           <a href="blog-details.html">Medical</a>
                        </div>
                     </div>
                     <div class="rr-blog-content">
                        <div class="rr-blog-meta pb-10">
                             <span><a href="blog-details.html"><i class="fa-sharp fa-solid fa-comments"></i> 02 Comments</a></span>
                           <span><i class="fa-sharp fa-regular fa-calendar-days"></i> April 23, 2024</span>
                        </div>
                        <div class="rr-blog-text">
                           <h4 class="rr-blog-title mb-0"><a href="blog-details.html">Improve Assistant This
                                 Medical This Blog</a></h4>
                           <p>We will give you a complete account
                              theen teachings of the great.</p>
                        </div>
                        <div class="rr-blog-item-user d-flex align-items-center">
                           <div class="rr-blog-item-user-thumb">
                              <img src="assets/img/blog/avada.png" alt="img">
                           </div>
                           <div class="rr-blog-item-user-content">
                              <span class="rr-blog-item-user-title"><a href="blog-details.html">Dr: Meran Bara</a></span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mb-25 wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".5s">
                  <div class="rr-blog-item d-flex">
                     <div class="rr-blog-thumb-main p-relative">
                        <a href="blog-details.html">
                           <div class="rr-blog-thumb rr-blog-wid">
                              <img src="assets/img/blog/2.jpg" alt="img">
                           </div>
                        </a>
                        <div class="rr-blog-cat">
                           <a href="blog-details.html">Medical</a>
                        </div>
                     </div>
                     <div class="rr-blog-content">
                        <div class="rr-blog-meta pb-10">
                             <span><a href="blog-details.html"><i class="fa-sharp fa-solid fa-comments"></i> 02 Comments</a></span>
                           <span><i class="fa-sharp fa-regular fa-calendar-days"></i> April 23, 2024</span>
                        </div>
                        <div class="rr-blog-text">
                           <h4 class="rr-blog-title mb-0"><a href="blog-details.html">Unlimited High Ppeed Internet Access.</a></h4>
                           <p>We will give you a complete account
                              theen teachings of the great.</p>
                        </div>
                        <div class="rr-blog-item-user d-flex align-items-center">
                           <div class="rr-blog-item-user-thumb">
                              <img src="assets/img/blog/avada.png" alt="img">
                           </div>
                           <div class="rr-blog-item-user-content">
                              <span class="rr-blog-item-user-title"><a href="blog-details.html">Dr: Meran Bara</a></span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mb-25 wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".9s">
                  <div class="rr-blog-item d-flex">
                     <div class="rr-blog-thumb-main p-relative">
                        <a href="blog-details.html">
                           <div class="rr-blog-thumb rr-blog-wid">
                              <img src="assets/img/blog/4.jpg" alt="img">
                           </div>
                        </a>
                        <div class="rr-blog-cat">
                           <a href="blog-details.html">Medical</a>
                        </div>
                     </div>
                     <div class="rr-blog-content">
                        <div class="rr-blog-meta pb-10">
                           <span><a href="blog-details.html"><i class="fa-sharp fa-solid fa-comments"></i> 02 Comments</a></span>
                           <span><i class="fa-sharp fa-regular fa-calendar-days"></i> April 23, 2024</span>
                        </div>
                        <div class="rr-blog-text">
                           <h4 class="rr-blog-title mb-0"><a href="blog-details.html">Latest Equipment for the Heart Treatment</a></h4>
                           <p>We will give you a complete account
                              theen teachings of the great.</p>
                        </div>
                        <div class="rr-blog-item-user d-flex align-items-center">
                           <div class="rr-blog-item-user-thumb">
                              <img src="assets/img/blog/avada.png" alt="img">
                           </div>
                           <div class="rr-blog-item-user-content">
                              <span class="rr-blog-item-user-title"><a href="blog-details.html">Dr: Meran Bara</a></span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mb-25 wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".9s">
                  <div class="rr-blog-item d-flex">
                     <div class="rr-blog-thumb-main p-relative">
                        <a href="blog-details.html">
                           <div class="rr-blog-thumb rr-blog-wid">
                              <img src="assets/img/blog/5.jpg" alt="img">
                           </div>
                        </a>
                        <div class="rr-blog-cat">
                           <a href="blog-details.html">Medical</a>
                        </div>
                     </div>
                     <div class="rr-blog-content">
                        <div class="rr-blog-meta pb-10">
                           <span><a href="blog-details.html"><i class="fa-sharp fa-solid fa-comments"></i> 02 Comments</a></span>
                           <span><i class="fa-sharp fa-regular fa-calendar-days"></i> April 23, 2024</span>
                        </div>
                        <div class="rr-blog-text">
                           <h4 class="rr-blog-title mb-0"><a href="blog-details.html">12 Days Free Access to All Media First</a></h4>
                           <p>We will give you a complete account
                              theen teachings of the great.</p>
                        </div>
                        <div class="rr-blog-item-user d-flex align-items-center">
                           <div class="rr-blog-item-user-thumb">
                              <img src="assets/img/blog/avada.png" alt="img">
                           </div>
                           <div class="rr-blog-item-user-content">
                              <span class="rr-blog-item-user-title"><a href="blog-details.html">Dr: Meran Bara</a></span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- blog area end -->

      <!-- cta area start -->
      <div class="rr-cta-area  rr-cta-bg  fix p-relative">
         <div class="container">
            <div class="row align-items-center rr-cta-wrap">
               <div class="col-xl-6 col-lg-6 col-md-6 wow rrfadeUp">
                  <div class="rr-cta-left-box d-flex align-items-center">
                     <div class="rr-cta-icon">
                        <img src="assets/img/footer/email-icon.png" alt="img">
                     </div>
                     <div class="rr-cta-content ml-20">
                        <h4 class="rr-cta-title">Our Newslatter</h4>
                        <span>We are dolor sit amet csectetur</span>
                     </div>
                  </div>
               </div>
               <div class="col-xl-6 col-lg-6 col-md-6 wow rrfadeUp">
                  <div class="rr-cta-right-box p-relative">
                     <input type="text" placeholder="Email address">
                     <div class="rr-cta-button">
                        <button class="black-bg rr-cta-btn"><span>Subscribe</span></button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- cta area end -->


   </main>


   <footer>
      <div class="rr-footer-main p-relative fix" data-background="assets/img/footer/footer-bg.jpg">

       <!-- footer area start -->
       <div class="rr-footer-area pt-125 p-relative fix">
         <div class="rr-footer-right-shap d-none d-xl-block">
            <img src="assets/img/footer/footer-shap.png" alt="img">
         </div>
         <div class="container">
            <div class="rr-footer-border">
               <div class="row">
                  <div class="col-xl-4 col-lg-3 col-md-6 col-sm-6 mb-50 wow rrfadeUp" data-wow-duration=".9s"
                     data-wow-delay=".3s">
                     <div class="rr-footer-widget footer-cols-1">
                        <div class="rr-footer-logo pb-35">
                           <a href="index.html"><img src="assets/img/logo/logo-white.png" alt="img"></a>
                        </div>
                        <div class="rr-footer-widget-content-list mb-25">
                           <div class="rr-footer-widget-content-list-item">
                              <i class="fa-sharp fa-solid fa-clock"></i> <a href="#">Open Hours of Government:<br />
                                 Mon - Fri: 8.00 am. - 6.00 pm.</a>
                           </div>
                           <div class="rr-footer-widget-content-list-item">
                              <i class="fa-solid fa-location-dot"></i> <a href="#"> 13/A, Miranda Halim City .</a>
                           </div>
                           <div class="rr-footer-widget-content-list-item">
                              <i class="fa-sharp fa-solid fa-phone"></i><a href="tel:09969569535">099 695 695 35</a>
                           </div>
                        </div>
                        <div class="rr-footer-social">
                           <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                           <a href="#"><i class="fa-brands fa-pinterest-p"></i></a>
                           <a href="#"><i class="fa-brands fa-twitter"></i></a>
                           <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6 mb-50 wow rrfadeUp" data-wow-duration=".9s"
                     data-wow-delay=".5s">
                     <div class="rr-footer-widget footer-cols-2">
                        <h4 class="rr-footer-title">Service</h4>
                        <div class="rr-footer-list ">
                           <ul>
                              <li><a href="service.html">Why choose us</a></li>
                              <li><a href="service.html"> Our solutions</a></li>
                              <li><a href="service.html">Partners</a></li>
                              <li><a href="service.html">Core values</a></li>
                              <li><a href="service.html">Our projects</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6 mb-50 wow rrfadeUp" data-wow-duration=".9s"
                     data-wow-delay=".7s">
                     <div class="rr-footer-widget footer-cols-3">
                        <h4 class="rr-footer-title">Quick Link</h4>
                        <div class="rr-footer-list">
                           <ul>
                              <li><a href="service.html">Residents</a></li>
                              <li><a href="service.html">Medical</a></li>
                              <li><a href="service.html">Online Service</a></li>
                              <li><a href="service.html">Visiting</a></li>
                              <li><a href="service.html">Employment</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-4 col-lg-3 col-md-6 col-sm-6 mb-50 wow rrfadeUp" data-wow-duration=".9s"
                     data-wow-delay=".9s">
                     <div class="rr-footer-widget footer-cols-4">
                        <h4 class="rr-footer-title">Opening Schedule</h4>
                        <div class="rr-footer-contact">
                           <ul>
                              <li><span>Sunday ---------- 08.00 - 10.00</span></li>
                              <li><span>Monday ---------- 08.00 - 10.00</span></li>
                              <li><span>Tuesday ---------- 08.00 - 10.00</span></li>
                              <li><span>Wednesday ------- 08.00 - 10.00</span></li>
                              <li><span>Tuesday ---------- 08.00 - 10.00</span></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- footer area end -->

         <!-- copy-right area start -->
         <div class="rr-copyright-area p-relative">
            <div class="container rr-copyright-broder rr-copyright-space">
               <div class="row align-items-center">
                  <div class="col-xl-6 col-lg-6 col-md-6 col-12 wow rrfadeUp" data-wow-duration=".9s"
                     data-wow-delay=".3s">
                     <div class="rr-copyright-left text-center text-md-start">
                        <p>Copyright © 2024 <a href="#"> Mekina, </a> All Rights Reserved.</p>
                     </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-12 wow rrfadeUp" data-wow-duration=".9s"
                     data-wow-delay=".5s">
                     <div class="rr-copyright-right text-center text-md-end">
                        <a href="about.html">About Us </a>
                        <a href="service.html">Events</a>
                        <a href="blog.html">News</a>
                        <a href="service.html">Portfolio</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- copy-right area end -->
      </div>
   </footer>

   <!-- JS here -->
   <script src="assets/js/vendor/jquery.js"></script>
   <script src="assets/js/vendor/waypoints.js"></script>
   <script src="assets/js/bootstrap-bundle.js"></script>
   <script src="assets/js/ajax-form.js"></script>
   <script src="assets/js/imagesloaded-pkgd.js"></script>
   <script src="assets/js/isotope-pkgd.js"></script>
   <script src="assets/js/jarallax.js"></script>
   <script src="assets/js/magnific-popup.js"></script>
   <script src="assets/js/nice-select.js"></script>
   <script src="assets/js/purecounter.js"></script>
   <script src="assets/js/jquery-knob.js"></script>
   <script src="assets/js/jquery-appear.js"></script>
   <script src="assets/js/wow.js"></script>
   <script src="assets/js/slick.js"></script>
   <script src="assets/js/swiper-bundle.js"></script>
   <script src="assets/js/main.js"></script>

</body>

</html>