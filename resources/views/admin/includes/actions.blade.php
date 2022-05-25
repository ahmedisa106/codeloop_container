@if($model =='subscriptions')

    @if($raw->status === 'pending')
        <div class="switch-showcase">
            <div class="media">
                <label class="col-form-label">تفعيل</label>
                <div class="icon-state">
                    <label class="switch">
                        <input name="status" data-package_id="{{$raw->package_id}}" data-id="{{$raw->id}}" value="active" class="pending_company" type="checkbox"><span class="switch-state"></span>
                    </label>
                </div>

            </div>
        </div>
    @elseif($raw->status === 'finished')
        <a href="{{route('subscriptions.resubscribed',$raw->id)}}" class="btn btn-primary show_modal">تجديد</a>
    @else
        <a href="" class="btn btn-success">مشترك</a>
    @endif


@else
    @if($model != 'contact-us')
        <a href="{{route($model.'.edit',$raw->id)}}" class="btn btn-primary show_modal"> <i class="fa fa-edit"></i> </a>
    @else
        <a href="{{route($model.'.edit',$raw->id)}}" class="btn btn-info show_modal"> <i class="fa fa-eye"></i> </a>

    @endif
    <a href="{{route($model.'.destroy',$raw->id)}}" class="btn btn-danger delete_btn"> <i class="fa fa-close"></i> </a>
@endif

