@extends('website.layouts.master')
@push('seo')
    <meta name="title" content="{{isset($term)?$term->meta_title:''}}">
    <meta name="keywords" content="{{isset($term)?$term->meta_keywords:''}}">
    <meta name="description" content="{{isset($term)?$term->meta_description:''}}">
@endpush
@push('title',$page_title)
@section('content')
    @include('website.includes.breadcramp')
    <!--privacy Start-->
    <section class="privacy-page">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="et_pb_text_inner">
                        {!! isset($term)?$term->body:'' !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--privacy End-->
@endsection
