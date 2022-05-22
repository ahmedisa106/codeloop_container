@extends('website.layouts.master')
@push('title',$page_title)
@section('content')
    @include('website.includes.breadcramp')
    <!--News One Start-->
    <section class="news-one">
        <div class="container">
            <div class="row">
                @foreach($blogs as $blog)
                    <div class="col-xl-4 col-lg-6">
                        <!--News One Single-->
                        <div class="news-one__single">
                            <div class="news-one__img">
                                <img src="{{$blog->image}}" alt="">
                                <div class="news-one__date">
                                    <p>{{\Carbon\Carbon::create($blog->created_at)->format('d M')}}</p>
                                </div>
                                <a href="{{route('website.blogs.show',$blog->id)}}">
                                    <span class="news-one__plus"></span>
                                </a>
                            </div>
                            <div class="news-one__content">
                                <h3 class="news-one__title"><a href="blog-details.html">
                                        {{$blog->title}}</a></h3>
                                <div class="news-one__read-more">
                                    <a href="{{route('website.blogs.show',$blog->id)}}"><i class="fa fa-arrow-left"></i>قراءة المزيد</a>
                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach

            </div>
        </div>
    </section>
    <!--News One End-->
@endsection
