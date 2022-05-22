<!--Site Footer Start-->
<footer class="site-footer">
    <div class="site-footer-bg" style="background-image: url({{asset('assets/website')}}/images/backgrounds/site-footer-bg.jpg);">
    </div>
    <div class="site-footer__top">
        <div class="container">
            <div class="site-footer__top-inner">
                <div class="site-footer__top-logo">
                    <a href="{{url('/')}}"><img src="{{isset($setting)?$setting->footer:''}}" alt=""></a>
                </div>
                <div class="site-footer__top-right">
                    <p class="site-footer__top-right-text">{{isset($setting)?$setting->name:''}}</p>
                    <div class="site-footer__social">
                        <a href="{{isset($setting)?$setting->facebook:''}}"><i class="fab fa-facebook"></i></a>
                        <a href="{{isset($setting)?$setting->instagram:''}}"><i class="fab fa-instagram"></i></a>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="site-footer__bottom">
        <div class="site-footer-bottom-shape" style="background-image: url({{asset('assets/website')}}/images/backgrounds/site-footer-bottom-shape.png);"></div>
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
