@extends('website.layouts.master')
@push('title',$page_title)
@section('content')
    @include('website.includes.breadcramp',['page_title'=>$page_title])
    <section class="services-one service-page">
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
                            <a href="{{route('website.services.show',$service->id)}}" class="project-one__single">
                                <div class="project-one__img">
                                    <img src="{{$service->image}}" alt="">
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
@endsection
