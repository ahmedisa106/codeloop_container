<div class="sidebar-wrapper">
    <div class="logo-wrapper"><a href="index.html"><img class="img-fluid for-light" src="{{asset('assets/dashboard')}}/images/logo.svg"
                                                        alt=""></a>
        <div class="back-btn"><i class="fa fa-angle-left"></i></div>
    </div>

    <nav class="sidebar-main">
        <div class="left-arrow" id="left-arrow"><i class="fa fa-arrow-left"></i></div>
        <div id="sidebar-menu">
            <ul class="sidebar-links" id="simple-bar">

                <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="{{route('admin.home')}}">
                        <img src="{{asset('assets/dashboard')}}/images/icons/home.png" alt="">
                        <span>الرئيسية</span></a>
                </li>

                <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title link-nav" href="{{route('companies.index')}}">
                        <img src="{{asset('assets/dashboard')}}/images/icons/safe.png" alt="">
                        <span>المؤسسات</span>
                    </a>

                </li>


            </ul>
            <div class="road">
                <div class="buildings">
                    <img src="{{asset('assets/dashboard')}}/images/tree.svg" alt="">
                    <img src="{{asset('assets/dashboard')}}/images/house.svg" alt="">
                    <img src="{{asset('assets/dashboard')}}/images/tree.svg" alt="">
                </div>
                <img class="image truck-img" src="{{asset('assets/dashboard')}}/images/truck.png" alt="">
                <img class="image box-img" src="{{asset('assets/dashboard')}}/images/box.png" alt="">
                <img class="image box-img box-img2" src="{{asset('assets/dashboard')}}/images/box.png" alt="">
            </div>
        </div>
        <div class="right-arrow" id="right-arrow"><i class="fa fa-arrow-left"></i></div>
    </nav>
</div>
