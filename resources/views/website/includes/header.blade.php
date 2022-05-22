<header class="main-header-three">
    <nav class="main-menu main-menu-three">
        <div class="main-menu-three__wrapper">
            <div class="main-menu-wrapper__logo">
                <a href="{{url('/')}}"><img src={{{isset($setting)? $setting->image:''}}} alt=""></a>
            </div>
            <div class="main-menu-three__main-menu">
                <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                <ul class="main-menu__list">
                    <li><a href="{{url('/')}}">الرئيسية</a></li>
                    <li class="{{active('about')}}"><a href="{{url('/about')}}">من نحن</a></li>
                    <li class="{{active('services')}}"><a href="{{url('/services')}}">خدماتنا</a></li>
                    <li class="{{active('packages')}}"><a href="{{url('/packages')}}">الباقات</a></li>
                    <li class="{{active('blogs')}}"><a href="{{url('blogs')}}">المقالات</a></li>
                    <li class="{{active('terms')}}"><a href="{{url('/terms')}}">الشروط والاحكام</a></li>
                    <li class="{{active('contact-us')}}"><a href="{{url('/contact-us')}}">تواصل معنا</a></li>
                </ul>
            </div>
            <div class="main-menu-three__right">
                <div class="main-menu-three__call">
                    <div class="main-menu-three__call-icon">
                        <span class="icon-phone-ringing"></span>
                    </div>
                    <div class="main-menu-three__call-number">
                        <p>اتصل بنا</p>
                        <h5><a href="tel:{{isset($setting)? $setting->mobile:''}}">{{isset($setting)? $setting->mobile:''}}</a></h5>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>

<div class="stricky-header stricked-menu main-menu main-menu-three">
    <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
</div><!-- /.stricky-header -->
