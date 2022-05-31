<style>



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

            <span class="loader-div d-none"></span>
            <div class="package_details d-none">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="form-label">سعر الباقه (ر.س)</label>
                            <input type="number" name="package_price" readonly class="package_price form-control"
                                min="0">
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
                            <input type="number" name="price_after_discount" readonly
                                class="price_after_discount form-control" min="0">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label class="form-label">الحاله</label>
                    <select name="status" class="form-control" id="">
                        <option value="pending">منتظر التفعيل</option>
                        <option value="subscribed">مشترك</option>
                    </select>
                </div>
            </div>

            <div class="modal-footer">
                <button class="btn btn-primary btn-air-primary btn-icon" type="submit">
                    <i class="fa fa-save"></i>
                    حفظ
                </button>
                <button class="btn btn-danger exsit_modal btn-air-danger btn-icon" type="button"
                    data-bs-dismiss="modal">
                    <i class="fa fa-times"></i>
                    خروج
                </button>
            </div>
        </form>
    </div>

</div>
