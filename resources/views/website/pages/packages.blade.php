@extends('website.layouts.master')
@push('title',$page_title)
@section('content')
    @include('website.includes.breadcramp')

    <!--Pricing Start-->
    <section class="pricing-page">
        <div class="container">
            <div class="pricing__tab-box tabs-box">
                <div class="pricing__tab-content-box">
                    @foreach($packages as $package)
                        <div class="pricing__tab-content-single">
                            <div class="pricing__tab-content-left">
                                <div class="pricing__tab-content-img">
                                    <img src="{{$package->image}}" alt="">
                                </div>
                                <div class="pricing__tab-content">
                                    <h3 class="pricing__tab-content-title">{{$package->title}}
                                    </h3>
                                    <ul class="list-unstyled pricing__tab-content-list">
                                        <li>المدة : <span>{{$package->period}}</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="pricing__tab-content-right">
                                <div class="pricing__tab-content-order">
                                    <p class="pricing__tab-content-rate">{{$package->price}}<span>ر.س</span></p>
                                    <a href="{{url('contact-us')}}" class="thm-btn pricing__order-btn">اطلب الآن</a>
                                </div>
                            </div>
                        </div>

                    @endforeach

                </div>
            </div>
        </div>
    </section>
    <!--Pricing End-->
@endsection
