<div class="card">
    <div class="card-header">
        <h3>بيانات المؤسسة</h3>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-8">
                <div class="table-responsive">
                    <table class="table table-bordered datatable text-center">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>الباقة</th>
                            <th>الحالة</th>
                            <th>---</th>
                            <th>في</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($company->history as $index=> $history)
                            <tr>
                                <td>{{++$index}}</td>
                                <td>{{$history->package->title}}</td>
                                <td>{{$history->note}}</td>
                                <td>
                                    @if($history->status == 'pending')
                                        منتظره التفعيل


                                    @elseif($history->status == 'subscribed' || $history->status == 'resubscribed')
                                        مشترك
                                        <img style="width: 50px" height="50px" class="verify" src="{{asset('assets/dashboard')}}/images/verify.png" alt="">
                                    @else

                                        منتهيه
                                    @endif
                                </td>
                                <td>{{$history->at}}</td>
                            </tr>
                        @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-4">
                <div class="company-box">
                    <img src="{{$company->image}}" alt="">
                    <h4>{{$company->name}}</h4>
                    <ul>
                        <li>
                            <p>الباقة الحالية</p>
                            <span>{{$company->package->package->title}}</span>
                        </li>
                        <li>
                            <p>حالة الباقة</p>
                            <span>
                                 @if($history->company->package->status == 'pending')
                                    منتظره التفعيل


                                @elseif($history->company->package->status == 'subscribed'  )
                                    مشترك
                                    <img style="width: 50px" height="50px" class="verify" src="{{asset('assets/dashboard')}}/images/verify.png" alt="">
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
