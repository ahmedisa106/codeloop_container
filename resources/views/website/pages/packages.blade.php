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
                                        <li>المدة : <span>{{$package->period}} شهر </span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="pricing__tab-content-right">

                                <div class="pricing__tab-content-order">
                                    <p class="pricing__tab-content-rate">{{$package->price}}<span>ر.س</span></p>
                                    <a href="{{url('contact-us')}}" data-package_id="{{$package->id}}" class="thm-btn pricing__order-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">اطلب الآن</a>
                                </div>
                            </div>
                        </div>

                    @endforeach

                </div>
            </div>
        </div>
    </section>
    <!--Pricing End-->

    <!-- Modal -->
    <div class="modal fade modal-custom" id="exampleModal" data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">طلب انشاء مؤسسة</h5>
                </div>
                <form id="company_form" action="{{route('website.packageRequest')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="package_id" value="{{$package->id}}" class="package_id">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label class="form-label">اسم المؤسسه</label>
                                <input name="name" class="form-control" type="text" placeholder="">
                            </div>
                            <div class="col-md-6 form-group">
                                <label class="form-label">رقم السجل التجاري</label>
                                <input name="commercial_number" class="form-control" type="number" placeholder="">
                            </div>
                            <div class="col-md-6 form-group">
                                <label class="form-label">رقم البطاقه الضريبيه</label>
                                <input name="tax_card_number" class="form-control" type="number" placeholder="">
                            </div>
                            <div class="col-md-6 form-group">
                                <label class="form-label">اسم المستخدم</label>
                                <input name="username" class="form-control" type="text" placeholder="">
                            </div>
                            <div class="col-md-6 form-group">
                                <label class="form-label">رقم الجوال</label>
                                <input name="phone" class="form-control" type="text" placeholder="">
                            </div>
                            <div class="col-md-6 form-group">
                                <label class="form-label">البريد الإلكتروني</label>
                                <input name="email" class="form-control" type="text" placeholder="">
                            </div>
                            <div class="col-md-6 form-group">
                                <label class="form-label">كلمه المرور</label>
                                <input name="password" class="form-control" type="password" placeholder="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label class="form-label">الشعار</label>
                                <input name="logo" class="form-control photo" id="photo" type="file">
                            </div>
                            <div class="col-md-6 form-group">
                                <img id="pic-prev" src="http://127.0.0.1:8000/default/default.png" class="pic-prev">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="save-btn">
                            <i class="fa fa-save"></i>
                            حفظ
                        </button>
                        <button type="button" class="close-modal" data-bs-dismiss="modal">
                            <i class="fa fa-sign-out-alt"></i>
                            خروج
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection

@push('js')

    <script>
        $(function () {
            $(document).on('click', '.pricing__order-btn', function () {
                $('.package_id').val($(this).data('package_id'))
            })
        });


        $('#company_form').on('submit', function (e) {
            e.preventDefault();
            let url = $(this).attr('action'),
                data = new FormData($(this)[0]);

            $.ajax({
                type: 'post',
                url: url,
                contentType: false,
                cache: false,
                processData: false,
                data: data,
                success: function (response) {
                    toastr.options = {
                        "positionClass": "toast-bottom-left",
                    }
                    toastr.success(response.data);

                    $('#exampleModal').modal('hide')
                    $('#company_form').trigger('reset')
                },
                error: function (xhr) {
                    toastr.options = {
                        "positionClass": "toast-bottom-left",
                    }

                    xhr.responseJSON.error ?

                        toastr.error(xhr.responseJSON.error)

                        :
                        $.each(xhr.responseJSON.errors, function (key, value) {

                            toastr.error(value)

                        });
                },
            })
        })

    </script>


@endpush
