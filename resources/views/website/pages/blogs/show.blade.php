@extends('website.layouts.master')
@push('seo')
<meta name="title" content="{{isset($current_blog)?$current_blog->meta_title:''}}">
<meta name="keywords" content="{{isset($current_blog)?$current_blog->meta_keywords:''}}">
<meta name="description" content="{{isset($current_blog)?$current_blog->meta_description:''}}">
@endpush
@push('title',$page_title)
@section('content')
@include('website.includes.breadcramp')

<!--News Details Start-->
<section class="news-details">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="news-details__left">
                    <div class="news-details__img">
                        <img src="{{$current_blog->image}}" alt="{{$current_blog->title}}"
                            title="{{$current_blog->title}}">
                        <div class="news-details__date">
                            <p>{{\Carbon\Carbon::create($current_blog->created_at)->format('d M')}}</p>
                        </div>
                    </div>
                    <div class="news-details__content">
                        <h3 class="news-details__title">{{$current_blog->title}}</h3>
                        <div class="news-details__text-1">
                            {{strip_tags($current_blog->description)}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="sidebar">
                    <div class="sidebar__single sidebar__post">
                        <h3 class="sidebar__title">مقالات اخري</h3>
                        <ul class="sidebar__post-list list-unstyled">
                            @foreach($blogs as $blog)
                            <li style="background-color: {{$blog->id == $current_blog->id ? 'white':''}}">
                                <div class="sidebar__post-image">
                                    <img src="{{$blog->image}}" alt="{{$blog->title}}" title="{{$blog->title}}">
                                </div>
                                <div class="sidebar__post-content">
                                    <h3>
                                        <a href="{{route('website.blogs.show',$blog->id)}}" title="{{$blog->title}}">
                                            {{$blog->title}}
                                        </a>
                                    </h3>
                                </div>
                            </li>

                            @endforeach

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--News Details End-->
@endsection
