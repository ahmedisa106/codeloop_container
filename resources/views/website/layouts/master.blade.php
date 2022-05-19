<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/website')}}/images/favicons/favicon-16x16.png"/>
    <title>الحاويات</title>
    <link rel="stylesheet" href="{{asset('assets/website')}}/vendors/bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="{{asset('assets/website')}}/vendors/animate/animate.min.css"/>
    <link rel="stylesheet" href="{{asset('assets/website')}}/vendors/animate/custom-animate.css"/>
    <link rel="stylesheet" href="{{asset('assets/website')}}/vendors/fontawesome/css/all.min.css"/>
    <link rel="stylesheet" href="{{asset('assets/website')}}/vendors/jarallax/jarallax.css"/>
    <link rel="stylesheet" href="{{asset('assets/website')}}/vendors/jquery-magnific-popup/jquery.magnific-popup.css"/>
    <link rel="stylesheet" href="{{asset('assets/website')}}/vendors/nouislider/nouislider.min.css"/>
    <link rel="stylesheet" href="{{asset('assets/website')}}/vendors/nouislider/nouislider.pips.css"/>
    <link rel="stylesheet" href="{{asset('assets/website')}}/vendors/odometer/odometer.min.css"/>
    <link rel="stylesheet" href="{{asset('assets/website')}}/vendors/swiper/swiper.min.css"/>
    <link rel="stylesheet" href="{{asset('assets/website')}}/vendors/wostin-icons/style.css">
    <link rel="stylesheet" href="{{asset('assets/website')}}/vendors/tiny-slider/tiny-slider.min.css"/>
    <link rel="stylesheet" href="{{asset('assets/website')}}/vendors/reey-font/stylesheet.css"/>
    <link rel="stylesheet" href="{{asset('assets/website')}}/vendors/owl-carousel/owl.carousel.min.css"/>
    <link rel="stylesheet" href="{{asset('assets/website')}}/vendors/owl-carousel/owl.theme.default.min.css"/>
    <link rel="stylesheet" href="{{asset('assets/website')}}/vendors/bxslider/jquery.bxslider.css"/>
    <link rel="stylesheet" href="{{asset('assets/website')}}/vendors/bootstrap-select/css/bootstrap-select.min.css"/>
    <link rel="stylesheet" href="{{asset('assets/website')}}/vendors/vegas/vegas.min.css"/>
    <link rel="stylesheet" href="{{asset('assets/website')}}/vendors/jquery-ui/jquery-ui.css"/>
    <link rel="stylesheet" href="{{asset('assets/website')}}/vendors/timepicker/timePicker.css"/>
    <link rel="stylesheet" href="{{asset('assets/website')}}/css/style.css"/>
</head>

<body>
<div class="preloader">
    <img class="preloader__image" width="60" src="{{asset('assets/website')}}/images/loader.png" alt=""/>
</div>
<!-- /.preloader -->
<div class="page-wrapper">
    <header class="main-header-three">
        <nav class="main-menu main-menu-three">
            <div class="main-menu-three__wrapper">
                <div class="main-menu-wrapper__logo">
                    <a href="index.html"><img src="{{asset('assets/website')}}/images/resources/logo-2.png" alt=""></a>
                </div>
                <div class="main-menu-three__main-menu">
                    <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                    <ul class="main-menu__list">
                        <li><a href="index.html">الرئيسية</a></li>
                        <li><a href="about.html">من نحن</a></li>
                        <li><a href="services.html">خدماتنا</a></li>
                        <li><a href="prices.html">الباقات</a></li>
                        <li><a href="blogs.html">المقالات</a></li>
                        <li><a href="privacy.html">الشروط والاحكام</a></li>
                        <li><a href="contact.html">تواصل معنا</a></li>
                    </ul>
                </div>
                <div class="main-menu-three__right">
                    <div class="main-menu-three__call">
                        <div class="main-menu-three__call-icon">
                            <span class="icon-phone-ringing"></span>
                        </div>
                        <div class="main-menu-three__call-number">
                            <p>اتصل بنا</p>
                            <h5><a href="tel:12463330088">+ 1- (246) 333-0088</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <div class="stricky-header stricked-menu main-menu main-menu-three">
        <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
    </div><!-- /.stricky-header -->


    <!--Main Slider Start-->
    <section class="main-slider">
        <div class="main-slider-three-car">
            <img src="{{asset('assets/website')}}/images/resources/main-slider-three-car.png" alt="" class="float-bob-y">
        </div>
        <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
                        "effect": "fade",
                        "pagination": {
                        "el": "#main-slider-pagination",
                        "type": "bullets",
                        "clickable": true
                        },
                        "navigation": {
                        "nextEl": "#main-slider__swiper-button-next",
                        "prevEl": "#main-slider__swiper-button-prev"
                        },
                        "autoplay": {
                        "delay": 5000
                        }}'>
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="image-layer"
                         style="background-image: url({{asset('assets/website')}}/images/backgrounds/main-slider-1-1.jpg);">
                    </div>
                    <!-- /.image-layer -->
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="main-slider__content">
                                    <h2>خدمات نفايات موثوقة وبأسعار معقولة</h2>
                                    <a href="contact.html" class="thm-btn">تواصل معنا</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="image-layer"
                         style="background-image: url({{asset('assets/website')}}/images/backgrounds/main-slider-1-2.jpg);">
                    </div>
                    <!-- /.image-layer -->
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="main-slider__content">
                                    <h2>خدمات نفايات موثوقة وبأسعار معقولة</h2>
                                    <a href="contact.html" class="thm-btn">تواصل معنا</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- If we need navigation buttons -->
            <div class="main-slider__nav">
                <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                    <i class="icon-right-arrow"></i>
                </div>
                <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                    <i class="icon-right-arrow arrow-left"></i>
                </div>
            </div>
        </div>
    </section>
    <!--Main Slider End-->

    <!--Welcome Start-->
    <section class="welcome">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="welcome__left">
                        <div class="welcome__img-box wow slideInRight" data-wow-delay="100ms"
                             data-wow-duration="2500ms">
                            <div class="welcome__img">
                                <img src="{{asset('assets/website')}}/images/resources/welcome-img-1.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="welcome__right">
                        <div class="section-title text-left">
                            <span class="section-title__tagline">شركة متخصصة في خدمات النفايات</span>
                            <h2 class="section-title__title">من نحن</h2>
                        </div>
                        <div class="desc">
                            هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص
                            العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد
                            الحروف التى يولدها التطبيق.
                            إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما
                            تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على
                            وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Welcome End-->

    <section class="services-one">
        <div class="container">
            <div class="services-one__top">
                <div class="section-title text-center">
                    <span class="section-title__tagline">ماذا نقدم</span>
                    <h2 class="section-title__title">خدمات نقدمها لك</h2>
                </div>
            </div>
            <div class="services-one__bottom">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <a href="service-details.html" class="project-one__single">
                            <div class="project-one__img">
                                <img src="{{asset('assets/website')}}/images/services/service-details-img-2.jpg" alt="">
                            </div>
                            <div class="project-one__content">
                                <h3 class="project-one__title">
                                    هذا النص هو مثال لنص يمكن أن يستبدل
                                </h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <!--Services One Single-->
                        <a href="service-details.html" class="project-one__single">
                            <div class="project-one__img">
                                <img src="{{asset('assets/website')}}/images/services/service-details-img-3.jpg" alt="">
                            </div>
                            <div class="project-one__content">
                                <h3 class="project-one__title">
                                    هذا النص هو مثال لنص يمكن أن يستبدل
                                </h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                        <!--Services One Single-->
                        <a href="service-details.html" class="project-one__single">
                            <div class="project-one__img">
                                <img src="{{asset('assets/website')}}/images/services/service-details-img-4.jpg" alt="">
                            </div>
                            <div class="project-one__content">
                                <h3 class="project-one__title">
                                    هذا النص هو مثال لنص يمكن أن يستبدل
                                </h3>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--Manage Waste Two Start-->
    <section class="manage-waste manage-waste-two">
        <div class="manage-waste-bg-box">
            <div class="manage-waste-bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
                 style="background-image: url({{asset('assets/website')}}/images/backgrounds/manage-waste-bg.jpg);"></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="manage-waste__inner">
                        <h3 class="manage-waste__title">إدارة النفايات بشكل فعال <br> وتقليل الأثر البيئي</h3>
                        <div class="manage-waste__btn-box">
                            <a href="contact.html" class="thm-btn manage-waste__btn-2">تواصل معنا</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Manage Waste Two End-->


    <!--News Three Start-->
    <section class="news-three">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4">
                    <div class="news-three__left">
                        <div class="news-three__bg-box">
                            <div class="news-three__bg"
                                 style="background-image: url({{asset('assets/website')}}/images/backgrounds/news-three-bg.jpg);"></div>
                        </div>
                        <div class="section-title text-left">
                            <span class="section-title__tagline">ماذا يحدث</span>
                            <h2 class="section-title__title">آخر الاخبار والمقالات</h2>
                        </div>
                        <p class="news-three__text">هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص</p>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8">
                    <div class="news-three__right">
                        <div class="news-three__carousel owl-carousel owl-theme thm-owl__carousel" data-owl-options='{
                                "loop": true,
                                "autoplay": true,
                                "margin": 30,
                                "rtl": true,
                                "nav": true,
                                "dots": false,
                                "smartSpeed": 500,
                                "autoplayTimeout": 10000,
                                "navText": ["<span class=\"icon-right-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"],
                                "responsive": {
                                    "0": {
                                        "items": 1
                                    },
                                    "768": {
                                        "items": 1
                                    },
                                    "992": {
                                        "items": 2
                                    },
                                    "1200": {
                                        "items": 2.01
                                    }
                                }
                            }'>
                            <!--News One Single-->
                            <div class="news-one__single">
                                <div class="news-one__img">
                                    <img src="{{asset('assets/website')}}/images/blog/news-1-1.jpg" alt="">
                                    <div class="news-one__date">
                                        <p>20 Dec</p>
                                    </div>
                                    <a href="blog-details.html">
                                        <span class="news-one__plus"></span>
                                    </a>
                                </div>
                                <div class="news-one__content">
                                    <h3 class="news-one__title"><a href="blog-details.html">
                                            حاوية أو حاوية إدارة النفايات لمنزلي؟</a></h3>
                                    <div class="news-one__read-more">
                                        <a href="blog-details.html"><i class="fa fa-arrow-left"></i>قراءة المزيد</a>
                                    </div>
                                </div>
                            </div>
                            <!--News One Single-->
                            <div class="news-one__single">
                                <div class="news-one__img">
                                    <img src="{{asset('assets/website')}}/images/blog/news-1-2.jpg" alt="">
                                    <div class="news-one__date">
                                        <p>20 Dec</p>
                                    </div>
                                    <a href="blog-details.html">
                                        <span class="news-one__plus"></span>
                                    </a>
                                </div>
                                <div class="news-one__content">
                                    <h3 class="news-one__title"><a href="blog-details.html">
                                            الاستفادة من الأطر الرشيقة لتقديم أفضل خدمة</a></h3>
                                    <div class="news-one__read-more">
                                        <a href="blog-details.html"><i class="fa fa-arrow-left"></i>قراءة المزيد</a>
                                    </div>
                                </div>
                            </div>
                            <!--News One Single-->
                            <div class="news-one__single">
                                <div class="news-one__img">
                                    <img src="{{asset('assets/website')}}/images/blog/news-1-3.jpg" alt="">
                                    <div class="news-one__date">
                                        <p>20 Dec</p>
                                    </div>
                                    <a href="blog-details.html">
                                        <span class="news-one__plus"></span>
                                    </a>
                                </div>
                                <div class="news-one__content">
                                    <h3 class="news-one__title"><a href="blog-details.html">
                                            قم بإحضار استراتيجيات البقاء على قيد الحياة المربحة للجانبين لتحديدها</a></h3>
                                    <div class="news-one__read-more">
                                        <a href="blog-details.html"><i class="fa fa-arrow-left"></i>قراءة المزيد</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--News Three End-->

    <!--Brand One Start-->
    <section class="brand-one brand-three">
        <div class="container">
            <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 100, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {
                    "0": {
                        "spaceBetween": 30,
                        "slidesPerView": 2
                    },
                    "375": {
                        "spaceBetween": 30,
                        "slidesPerView": 2
                    },
                    "575": {
                        "spaceBetween": 30,
                        "slidesPerView": 3
                    },
                    "767": {
                        "spaceBetween": 50,
                        "slidesPerView": 4
                    },
                    "991": {
                        "spaceBetween": 50,
                        "slidesPerView": 5
                    },
                    "1199": {
                        "spaceBetween": 100,
                        "slidesPerView": 5
                    }
                }}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="{{asset('assets/website')}}/images/brand/brand-1-1.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{asset('assets/website')}}/images/brand/brand-1-2.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{asset('assets/website')}}/images/brand/brand-1-3.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{asset('assets/website')}}/images/brand/brand-1-4.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{asset('assets/website')}}/images/brand/brand-1-5.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{asset('assets/website')}}/images/brand/brand-1-1.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{asset('assets/website')}}/images/brand/brand-1-2.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{asset('assets/website')}}/images/brand/brand-1-3.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{asset('assets/website')}}/images/brand/brand-1-4.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{asset('assets/website')}}/images/brand/brand-1-5.png" alt="">
                    </div><!-- /.swiper-slide -->
                </div>
            </div>
        </div>
    </section>
    <!--Brand One End-->

    <!--Site Footer Start-->
    <footer class="site-footer">
        <div class="site-footer-bg" style="background-image: url({{asset('assets/website')}}/images/backgrounds/site-footer-bg.jpg);">
        </div>
        <div class="site-footer__top">
            <div class="container">
                <div class="site-footer__top-inner">
                    <div class="site-footer__top-logo">
                        <a href="index.html"><img src="{{asset('assets/website')}}/images/resources/footer-logo.png" alt=""></a>
                    </div>
                    <div class="site-footer__top-right">
                        <p class="site-footer__top-right-text">إدارة التخلص من النفايات وخدمات الاستلام</p>
                        <div class="site-footer__social">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-facebook"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-footer__bottom">
            <div class="site-footer-bottom-shape"
                 style="background-image: url({{asset('assets/website')}}/images/backgrounds/site-footer-bottom-shape.png);"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="site-footer__bottom-inner">
                            <p class="site-footer__bottom-text">© جميع الحقوق محفوظة لدي شركة 2022 <a href="https://codlop.sa/ar" target="_blank">Codlop</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--Site Footer End-->

</div><!-- /.page-wrapper -->


<div class="mobile-nav__wrapper">
    <div class="mobile-nav__overlay mobile-nav__toggler"></div>
    <!-- /.mobile-nav__overlay -->
    <div class="mobile-nav__content">
        <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

        <div class="logo-box">
            <a href="index.html" aria-label="logo image"><img src="{{asset('assets/website')}}/images/resources/footer-logo.png"
                                                              width="155" alt=""/></a>
        </div>
        <!-- /.logo-box -->
        <div class="mobile-nav__container"></div>
        <!-- /.mobile-nav__container -->

        <ul class="mobile-nav__contact list-unstyled">
            <li>
                <i class="fa fa-envelope"></i>
                <a href="mailto:needhelp@packageName__.com">needhelp@wostin.com</a>
            </li>
            <li>
                <i class="fa fa-phone-alt"></i>
                <a href="tel:666-888-0000">666 888 0000</a>
            </li>
        </ul><!-- /.mobile-nav__contact -->
        <div class="mobile-nav__top">
            <div class="mobile-nav__social">
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-facebook-square"></a>
                <a href="#" class="fab fa-pinterest-p"></a>
                <a href="#" class="fab fa-instagram"></a>
            </div><!-- /.mobile-nav__social -->
        </div><!-- /.mobile-nav__top -->


    </div>
    <!-- /.mobile-nav__content -->
</div>
<!-- /.mobile-nav__wrapper -->

<a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>

<script src="{{asset('assets/website')}}/vendors/jquery/jquery-3.6.0.min.js"></script>
<script src="{{asset('assets/website')}}/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('assets/website')}}/vendors/jarallax/jarallax.min.js"></script>
<script src="{{asset('assets/website')}}/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
<script src="{{asset('assets/website')}}/vendors/jquery-appear/jquery.appear.min.js"></script>
<script src="{{asset('assets/website')}}/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
<script src="{{asset('assets/website')}}/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="{{asset('assets/website')}}/vendors/jquery-validate/jquery.validate.min.js"></script>
<script src="{{asset('assets/website')}}/vendors/nouislider/nouislider.min.js"></script>
<script src="{{asset('assets/website')}}/vendors/odometer/odometer.min.js"></script>
<script src="{{asset('assets/website')}}/vendors/swiper/swiper.min.js"></script>
<script src="{{asset('assets/website')}}/vendors/tiny-slider/tiny-slider.min.js"></script>
<script src="{{asset('assets/website')}}/vendors/wnumb/wNumb.min.js"></script>
<script src="{{asset('assets/website')}}/vendors/wow/wow.js"></script>
<script src="{{asset('assets/website')}}/vendors/isotope/isotope.js"></script>
<script src="{{asset('assets/website')}}/vendors/countdown/countdown.min.js"></script>
<script src="{{asset('assets/website')}}/vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="{{asset('assets/website')}}/vendors/bxslider/jquery.bxslider.min.js"></script>
<script src="{{asset('assets/website')}}/vendors/bootstrap-select/js/bootstrap-select.min.js"></script>
<script src="{{asset('assets/website')}}/vendors/vegas/vegas.min.js"></script>
<script src="{{asset('assets/website')}}/vendors/jquery-ui/jquery-ui.js"></script>
<script src="{{asset('assets/website')}}/vendors/timepicker/timePicker.js"></script>
<script src="{{asset('assets/website')}}/js/script.js"></script>
</body>
</html>
