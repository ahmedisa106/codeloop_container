<div class="card">
    <div class="card-header">
        <h3>بيانات المؤسسة</h3>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-8">
                <form id="search_form" action="" method="get">
                    @csrf
                    <input type="hidden" name="company_id" value="{{$company->id}}">
                    <div class="row">
                        <div class="col-md-4 form-group">
                            <label class="form-label">الحالة</label>
                            <select name="status" class="select2-custom status">
                                <option value="">الكل</option>
                                <option value="subscribed">مفعل</option>
                                <option value="pending">منتظر التفعيل</option>
                                <option value="finished">منتهي</option>
                            </select>
                        </div>
                        <div class="col-md-4 form-group">
                            <label class="form-label">من تاريخ</label>
                            <input name="date_from" class="form-control date_from datepicker-here" type="text">
                        </div>
                        <div class="col-md-4 form-group">
                            <label class="form-label">الى تاريخ</label>
                            <input name="date_to" class="form-control date_to datepicker-here" type="text">
                        </div>
                        <div class="col-md-4 form-group">
                            <button class="btn btn-primary btn-air-primary btn-icon search_btn" type="submit">
                                <i class="fa fa-search"></i>
                                بحث
                            </button>
                        </div>
                    </div>
                </form>

                <hr>
                <span class="loader-div d-none"></span>
                <div id="search_data">

                    @include('admin.pages.companies.table')
                </div>

            </div>
            <div class="col-md-4">
                <div class="company-box">
                    <img class="logo-com" src="{{$company->image}}" alt="">
                    <h4>{{$company->name}}</h4>
                    <ul>
                        <li>
                            <p>الباقة الحالية</p>
                            <span>{{$company->package->package->title}}</span>
                        </li>
                        <li>
                            <p>حالة الباقة</p>
                            <span>
                                @if($company->package->status == 'pending')
                                    منتظره التفعيل


                                @elseif($company->package->status == 'subscribed' )
                                    مشترك
                                    <img class="verifed" src="{{asset('assets/dashboard')}}/images/verify.png" alt="">
                                @else

                                    منتهيه
                                @endif
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="modal-footer">
            <button class="btn btn-danger exsit_modal btn-air-danger btn-icon" type="button" data-bs-dismiss="modal">
                <i class="fa fa-times"></i>
                خروج
            </button>
        </div>
    </div>
</div>

<script>

    $('#search_form').on('submit', function (e) {
        e.preventDefault();
        let url = '{{route('companies.historySearch')}}';
        let data = $(this).serialize();


        $.ajax({
            url: url,
            type: 'get',
            data: data,

            beforeSend:function (){
                $('.loader-div').removeClass('d-none');
            },
            success: function (res) {

                $('#search_data').html(res.data)
            },
            complete:function (){
                $('.loader-div').addClass('d-none');
            }
        })

    })

</script>
