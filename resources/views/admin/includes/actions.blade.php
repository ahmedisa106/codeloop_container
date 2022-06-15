@if($model =='subscriptions')

@if($raw->status === 'pending')
<div class="switch-showcase">
    <div class="media">
        <label class="col-form-label">تفعيل</label>
        <div class="icon-state">
            <label class="switch">
                <input name="status" data-package_id="{{$raw->package_id}}" data-id="{{$raw->id}}" value="active"
                    class="pending_company" type="checkbox"><span class="switch-state"></span>
            </label>
        </div>

    </div>
</div>
@elseif($raw->status === 'finished')
<a href="{{route('subscriptions.resubscribed',$raw->id)}}" class="btn btn-primary btn-icon show_modal">
    <i class="fa fa-repeat"></i>
    تجديد
</a>
@else
<img class="verify" src="{{asset('assets/dashboard')}}/images/verify.png" alt="">
@endif




@else
<div class="btns-table">
    @if($model != 'contact-us')
    <a href="{{route($model.'.edit',$raw->id)}}" class="btn btn-primary btn-icon show_modal"> <i class="fa fa-edit"></i>
        تعديل</a>
    @else
    <a href="{{route($model.'.edit',$raw->id)}}" class="btn btn-info btn-icon show_modal"> <i class="fa fa-eye"></i>
        عرض</a>

    @endif
    <a href="{{route($model.'.destroy',$raw->id)}}" class="btn btn-danger btn-icon delete_btn"> <i
            class="fa fa-close"></i> حذف</a>
</div>
@endif
