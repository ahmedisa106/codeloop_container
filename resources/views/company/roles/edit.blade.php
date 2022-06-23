<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h3>{{$data['edit']}}</h3>

        </div>
        <div class="card-body">
            <form class="row form" method="post" action="{{route('roles.update',$role->id)}}" enctype="multipart/form-data">
                @csrf
                @method('put')

                <input type="hidden" name="id" value="{{$role->id}}">
                <div class="col-md-12 form-group">
                    <label class="form-label">الإسم</label>
                    <input value="{{$role->name}}" {{$role->name =='driver' || $role->name =='messenger' || $role->name=='admin' ? 'readonly':''}} required class="form-control" name="name" type="text" placeholder="">
                </div>

                <div class="body-div">
                    <h4>الصلاحيات</h4>
                    <div class="animate-chk custom-chk">
                        <div class="row">
                            <label class="d-block" for="check_all_permissions">
                                <input class="checkbox_animated" id="check_all_permissions" type="checkbox"> تحديد كل الصلاحيات
                            </label>
                        </div>
                    </div>
                    <div class="check-list">

                        @foreach(apps() as $model_index => $model)


                            <div class="animate-chk">
                                <div class="row">
                                    <label class="d-block header-check" for="{{$model}}">
                                        <input class="checkbox_animated permissions_checkbox_all" id="{{$model}}" type="checkbox"> تحديد الكل <span>{{$model}}</span>
                                    </label>
                                    <div class="flex-perm">
                                        <div class="col">
                                            @foreach(getMaps() as $map_index => $map)
                                                <label class="d-block" for="{{$map_index.'__'.$model_index}}">
                                                    <input {{$role->hasPermission($map_index.'_'.$model_index) ?'checked':''}} name="permissions[]" value="{{$map_index.'_'.$model_index}}" id="{{$map_index.'__'.$model_index}}" class="checkbox_animated permissions_checkbox" type="checkbox"> {{$map}}
                                                </label>
                                            @endforeach


                                        </div>

                                    </div>
                                </div>
                            </div>
                        @endforeach


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
</div>


<script>
    $('.permissions_checkbox_all').on('click', function () {
        if ($(this).is(':checked')) {
            $(this).parent().parent().find('.permissions_checkbox').prop('checked', true)
        } else {
            $(this).parent().parent().find('.permissions_checkbox').prop('checked', false)
        }
    })

    $('#check_all_permissions').on('click', function () {
        if ($(this).is(':checked')) {
            $('.permissions_checkbox').prop('checked', true)
        } else {
            $('.permissions_checkbox').prop('checked', false)
        }
    })
</script>
