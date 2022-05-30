<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/website')}}/images/favicons/favicon-16x16.png"/>
    <meta name="title" content="{{isset($setting)?$setting->meta_title:''}}">
    <meta name="keywords" content="{{isset($setting)?$setting->meta_keywords:''}}">
    <meta name="description" content="{{isset($setting)?$setting->meta_description:''}}">
    @include('website.includes.sitemap')
    @stack('seo')

    <title>{{isset($setting)?$setting->name:''}} | @stack('title')</title>
    @include('website.includes.css')
</head>

<body>
<div class="preloader">
    <img class="preloader__image" width="60" src="{{asset('assets/website')}}/images/loader.png" alt=""/>
</div>
<!-- /.preloader -->
<div class="page-wrapper">
@include('website.includes.header')




@yield('content')

<!--Brand One Start-->
    <section class="brand-one brand-three">
        <div class="container">
            <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 100, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {
                    "0": {
                        "spaceBetween": 20,
                        "slidesPerView": 2
                    },
                    "375": {
                        "spaceBetween": 20,
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
                    @foreach($clients as $client)
                        <div class="swiper-slide">
                            <img src="{{$client->image}}" alt="">
                        </div><!-- /.swiper-slide -->
                    @endforeach


                </div>
            </div>
        </div>
    </section>
    <!--Brand One End-->


    @include('website.includes.footer')

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
@include('website.includes.js')
</body>
</html>
