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
            @foreach($sliders as $slider)
                <div class="swiper-slide">
                    <div class="image-layer"
                         style="background-image: url({{asset($slider->image)}});">
                    </div>
                    <!-- /.image-layer -->
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="main-slider__content">
                                    <h2>{{$slider->title}}</h2>
                                    <a href="{{url('/contact-us')}}" class="thm-btn">تواصل معنا</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach


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
