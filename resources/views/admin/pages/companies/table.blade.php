@if($company->history->count() >0)


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


        @forelse($company->history as $index=> $history)
            <tr>
                <td>{{++$index}}</td>
                <td>{{$history->package->title}}</td>
                <td>{{$history->note}}</td>
                <td>
                    @if($history->status == 'pending')
                        منتظره التفعيل


                    @elseif($history->status == 'subscribed' || $history->status == 'resubscribed')
                        مشترك
                        <img class="verifed" src="{{asset('assets/dashboard')}}/images/verify.png" alt="">
                    @else

                        منتهيه
                    @endif
                </td>
                <td>{{$history->at}}</td>
            </tr>
        @empty

        @endforelse


        </tbody>
    </table>
</div>
@else
    <h2 class="text-danger text-center">لا يوجد أي سجلات </h2>
@endif
