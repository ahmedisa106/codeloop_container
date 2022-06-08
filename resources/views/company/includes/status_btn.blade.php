<div class="switch-showcase">
    <div class="media">
        <label class="col-form-label">نشط</label>
        <div class="icon-state">
            <label class="switch">
                <input class="change_status" name="status" data-link="{{route($model.'.updateStatus',$raw->id)}}" value="{{$raw->status=='active'?'active':'inactive'}}" type="checkbox" {{$raw->status=='active'?'checked':''}} >
                <span class="switch-state"></span>
            </label>
        </div>
        <label class="col-form-label">غير نشط</label>
    </div>
</div>


