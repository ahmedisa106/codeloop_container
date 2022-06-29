@extends('website.layouts.master')
@push('title',$page_title)
@section('content')
    <div class="stricky-header stricked-menu main-menu main-menu-three">
        <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
    </div><!-- /.stricky-header -->

    @include('website.includes.breadcramp',['page_title'=>$page_title])
    <!--Welcome Start-->
    <section class="welcome">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="welcome__left">
                        <div class="welcome__img-box wow slideInRight" data-wow-delay="100ms"
                             data-wow-duration="2500ms">
                            <div class="welcome__img">
                                <img src="{{isset($about)?$about->image:''}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="welcome__right">
                        <div class="section-title text-left">
                            <span class="section-title__tagline">شركة متخصصة في أنظمه مؤسسات الحاويات</span>
                            <h2 class="section-title__title">{{$page_title}}</h2>
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

@endsection
