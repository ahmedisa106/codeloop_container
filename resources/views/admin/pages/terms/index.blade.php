<div class="card">
    <div class="card-header">
        <h3>{{$data['page_title']}}</h3>
        <div class="btns-header">

        </div>
    </div>
    <div class="card-body">
        <form class="row form" method="post" action="{{route('terms.store')}}" enctype="multipart/form-data">
            @csrf

            <div class="col-md-12 form-group">
                <label class="form-label">المحتوي</label>
                <textarea name="body" class="editor" id="" cols="203" rows="10">{!! isset($term)?$term->body:'' !!}</textarea>
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
