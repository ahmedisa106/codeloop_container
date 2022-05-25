@extends('website.layouts.master')

@section('content')
    <!--Welcome Start-->
    @include('website.includes.slider',['sliders'=>$sliders])
    <section class="welcome">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="welcome__left">
                        <div class="welcome__img-box wow slideInRight" data-wow-delay="100ms"
                             data-wow-duration="2500ms">
                            <div class="welcome__img">
                                <img src="{{isset($about)? asset($about->image):''}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="welcome__right">
                        <div class="section-title text-left">
                            <span class="section-title__tagline">شركة متخصصة في خدمات النفايات</span>
                            <h2 class="section-title__title">{{isset($about)?$about->title:''}}</h2>
                        </div>
                        <div class="desc">
                            {!! isset($about)?$about->description:'' !!}
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
                    @foreach($services as $service)

                        <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                            <a href="" class="project-one__single">
                                <div class="project-one__img">
                                    <img src="{{asset($service->image)}}" alt="">
                                </div>
                                <div class="project-one__content">
                                    <h3 class="project-one__title">
                                        {{$service->title}}
                                    </h3>
                                </div>
                            </a>
                        </div>
                    @endforeach


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
                            <a href="{{url('contact-us')}}" class="thm-btn manage-waste__btn-2">تواصل معنا</a>
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
                                        "items": 2
                                    },
                                    "992": {
                                        "items": 2
                                    },
                                    "1200": {
                                        "items": 2.01
                                    }
                                }
                            }'>
                            @foreach($blogs as $blog)
                                <div class="news-one__single">
                                    <div class="news-one__img">
                                        <img src="{{asset($blog->image)}}" alt="">
                                        <div class="news-one__date">
                                            <p>{{\Carbon\Carbon::create($blog->created_at)->format('d M')}}</p>
                                        </div>
                                        <a href="blog-details.html">
                                            <span class="news-one__plus"></span>
                                        </a>
                                    </div>
                                    <div class="news-one__content">
                                        <h3 class="news-one__title"><a href="#">
                                                {{$blog->title}}</a></h3>
                                        <div class="news-one__read-more">
                                            <a href=""><i class="fa fa-arrow-left"></i>قراءة المزيد</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--News Three End-->


@endsection
