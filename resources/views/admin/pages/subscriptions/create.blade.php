<style>
    .lds-facebook {
        display: inline-block;
        position: relative;
        width: 80px;
        height: 80px;
    }

    .lds-facebook div {
        display: inline-block;
        position: absolute;
        left: 8px;
        width: 16px;
        background: #fcf;
        animation: lds-facebook 1.2s cubic-bezier(0, 0.5, 0.5, 1) infinite;
    }

    .lds-facebook div:nth-child(1) {
        left: 8px;
        animation-delay: -0.24s;
    }

    .lds-facebook div:nth-child(2) {
        left: 32px;
        animation-delay: -0.12s;
    }

    .lds-facebook div:nth-child(3) {
        left: 56px;
        animation-delay: 0;
    }

    @keyframes lds-facebook {
        0% {
            top: 8px;
            height: 64px;
        }
        50%, 100% {
            top: 24px;
            height: 32px;
        }
    }

</style>

<div class="card">
    <div class="card-header">
        <h3>{{$data['create']}}</h3>
        <div class="btns-header">

        </div>
    </div>
    <div class="card-body">
        <form class="row form" method="post" action="{{route('subscriptions.store')}}" enctype="multipart/form-data">
            @csrf

            <div class="row">
                <div class="col-md-6">
                    <div class=" form-group">
                        <label class="form-label">المؤسسه</label>
                        <select name="company_id" class="form-control" id="">
                            <option value="" selected disabled>إختر مؤسسه</option>
                            @foreach($companies as $company)
                                <option value="{{$company->id}}">{{$company->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">الباقه</label>
                        <select name="package_id" class="form-control package_id" id="">
                            <option value="" selected disabled>إختر باقه</option>
                            @foreach($packages as $package)
                                <option value="{{$package->id}}">{{$package->title}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

            <div class="lds-facebook d-none text-center justify-content-center">
                <div></div>
                <div></div>
                <div></div>
            </div>

            <div class="row package_details d-none">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="form-label">سعر الباقه (ر.س)</label>
                        <input type="number" name="package_price" readonly class="package_price form-control" min="0">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="form-label">تاريخ إنتهاء الباقه</label>
                        <input type="text" name="package_finish_at" readonly class="package_finish_at form-control" min="0">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="form-label"> الخصم (ر.س)</label>
                        <input type="number" name="discount" value="0" class="discount form-control" min="0">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="form-label">السعر بعد الخصم (ر.س) </label>
                        <input type="number" name="price_after_discount" readonly class="price_after_discount form-control" min="0">
                    </div>
                </div>


            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label class="form-label">الحاله</label>
                    <select name="status" class="form-control" id="">
                        <option value="pending">منتظر التفعيل</option>
                        <option value="subscribed">مشترك</option>
                        <option value="finished">إشتراك منتهي</option>

                    </select>
                </div>
            </div>

            <div class="modal-footer">
                <button class="btn btn-primary btn-air-primary btn-icon" type="submit">
                    <i class="fa fa-save"></i>
                    حفظ
                </button>
                <button class="btn btn-danger exsit_modal btn-air-danger btn-icon"
                        type="button" data-bs-dismiss="modal">
                    <i class="fa fa-times"></i>
                    خروج
                </button>
            </div>
        </form>
    </div>

</div>
