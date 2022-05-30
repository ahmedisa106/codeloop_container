@extends('website.layouts.master')
@push('seo')
    <meta name="title" content="{{isset($current_service)?$current_service->meta_title:''}}">
    <meta name="keywords" content="{{isset($current_service)?$current_service->meta_keywords:''}}">
    <meta name="description" content="{{isset($current_service)?$current_service->meta_description:''}}">
@endpush
@push('title',$page_title)
@section('content')
@include('website.includes.breadcramp')
<section class="service-details">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="service-details__left">
                    <div class="service-details__category">
                        <h3 class="service-details__title">{{$page_title}}</h3>
                        <ul class="service-details__cagegory-list list-unstyled">
                            @foreach($services as $service)
                            <li class="{{$service->id == $current_service->id ? 'active':''}}">
                                <a href="{{route('website.services.show',$service->id)}}">{{$service->title}}
                                    <span class="fa fa-arrow-left"></span>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="service-details__need-help">
                        <div class="service-details__need-help-bg"
                            style="background-image: url({{asset('assets/website')}}/images/backgrounds/manage-waste-bg.jpg)">
                        </div>
                        <div class="service-details__need-help-icon">
                            <span class="icon-phone-ringing"></span>
                        </div>
                        <h2 class="service-details__need-help-title">هل تريد المساعدة <br> تواصل معنا</h2>
                        <div class="service-details__need-help-contact">
                            <p>اتصل بنا</p>
                            <a
                                href="tel:{{isset($setting)?$setting->mobile:''}}">{{isset($setting)?$setting->mobile:''}}</a>
                        </div>
                    </div>
                    <div class="service-details__banner">
                        <div class="service-details__banner-content">
                            <h3 class="service-details__banner-title">نحن لا ندير النفايات فقط , نحن نقدم الحلول</h3>
                            <div class="service-details__banner-shape-1 float-bob-y"><img
                                    src="{{asset('assets/website')}}/images/backgrounds/service-details-banner-shape-1.png"
                                    alt=""></div>
                        </div>
                        <div class="services-details__banner-car float-bob-x">
                            <img src="{{asset('assets/website')}}/images/resources/service-details-banner-car.png"
                                alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="service-details__right">
                    <div class="service-details__img">
                        <img src="{{$current_service->image}}" alt="">
                    </div>
                    <div class="service-details__content">
                        <h3 class="service-details__content-title">{{$current_service->title}}</h3>
                        <div class="service-details__text-1">
                            {!! $current_service->description !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
