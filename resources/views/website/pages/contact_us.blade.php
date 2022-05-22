@extends('website.layouts.master')
@push('title',$page_title)
@section('content')
    @include('website.includes.breadcramp')
    <!--Contact One Start-->
    <section class="contact-one contact-page">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="contact-one__left">
                        <div class="section-title text-left">
                            <span class="section-title__tagline">اتصل بنا</span>
                            <h2 class="section-title__title">هل لديك أسئلة؟ لا تتردد في الاتصال بنا</h2>
                        </div>
                        <ul class="list-unstyled contact-one__info">
                            <li>
                                <div class="icon">
                                    <span class="icon-placeholder"></span>
                                </div>
                                <div class="text">
                                    <p>العنوان</p>
                                    <span>{{isset($setting)?$setting->address:''}}</span>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-phone-call"></span>
                                </div>
                                <div class="text">
                                    <p>رقم الهاتف</p>
                                    <a href="tel:12463330088">{{isset($setting)?$setting->mobile:''}}</a>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-message"></span>
                                </div>
                                <div class="text">
                                    <p>البريد الالكتروني</p>
                                    <a href="mailto:needhelp@wostin.com">{{isset($setting)?$setting->email:''}}</a>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="contact-one__right">
                        <form id="contact_us_form" action="{{route('website.contactUs')}}" method="post" class="contact-one__form">
                            @csrf
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="contact-one__form-input-box">
                                        <input type="text" placeholder="الاسم" name="name">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="contact-one__form-input-box">
                                        <input type="text" placeholder="رقم الهاتف" name="phone">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="contact-one__form-input-box">
                                        <input type="email" placeholder="البريد الالكتروني" name="email">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="contact-one__form-input-box text-message-box">
                                        <textarea name="body" placeholder="رسالتك"></textarea>
                                    </div>
                                    <div class="contact-one__btn-box">
                                        <button type="submit" class="thm-btn contact-one__btn">ارسال
                                            الرسالة
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Contact One End-->

    <!--Google Map Start-->
    <section class="google-map">
        {!! isset($setting)?$setting->map:'' !!}

    </section>
    <!--Google Map End-->
@endsection
@push('js')
    <script>

        $('#contact_us_form').on('submit', function (e) {
            e.preventDefault();
            let form = new FormData($(this)[0]),
                url = $(this).attr('action');
            $.ajax({
                type: 'post',
                url: url,
                contentType: false,
                cache: false,
                processData: false,
                data: form,
                success: function (res) {
                    toastr.options = {
                        "positionClass": "toast-bottom-left",
                    }
                    toastr.success(res.data);

                    $('#contact_us_form').trigger('reset')
                },
                error: function (res) {
                    toastr.options = {
                        "positionClass": "toast-bottom-left",
                    }

                    toastr.error(res.responseJSON.data)
                }
            })
        })
    </script>
@endpush
