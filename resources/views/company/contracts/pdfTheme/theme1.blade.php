<html>
<head>
    <title></title>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/dashboard')}}/css/vendors/font-awesome.css">
    <script src="{{asset('assets/dashboard/plugins/printThis/js/printThis.js')}}"></script>
    <link href="" type="text/css" rel="stylesheet" media="mpdf"/>

    <style>
        @font-face {
            font-family: 'Bahij_Plain';

        }

        @media print {
            * {
                box-sizing: border-box;
            }

            body {
                margin: 0;
                direction: rtl;
                font-size: 16px;
                font-family: 'Bahij_Plain';
                color: #111;
            }

            .container {
                max-width: 1200px;
                margin: 20px auto;
                border-radius: 10px;
                background: #fff;
                border: 1px solid #777;
                padding: 4px;
            }

            .contract {
                padding: 20px;
                border: 1px solid #777;
                border-radius: 8px;
                position: relative;
                overflow: hidden;
            }

            ul {
                margin: 0;
                padding: 0;
                list-style: none;
            }

            .header {
                display: flex;
                padding-bottom: 25px;
                border-bottom: 1px solid #eaeaea;
                justify-content: space-between;
                align-items: end;
            }

            .header li {
                width: 100%;
            }

            .header li:nth-child(2) {
                text-align: center;
            }

            .header li:last-child {
                text-align: left;
            }

            .header li:last-child p {
                margin-bottom: 0
            }

            .header li h3 {
                margin: 0;
                margin-bottom: 5px;
                font-size: 15px;
            }

            .header li p {
                margin: 0;
                margin-bottom: 5px;
                font-size: 15px;
            }

            .header li p i {
                border: 1px solid #000;
                border-radius: 50%;
                width: 22px;
                height: 22px;
                display: inline-flex;
                justify-content: center;
                align-items: center;
                margin-left: 4px;
            }

            .header li p:last-child {
                margin-bottom: 0;
            }

            img {
                max-width: 100%;
            }

            .header li img.logo {
                height: 90px;
                margin-bottom: 13px;
            }

            li img.qr {
                height: 95px;
            }

            h4.title {
                display: block;
                margin: 0 auto;
                margin-bottom: 0;
                font-size: 17px;
                text-align: center;
                margin-top: -15px;
                width: max-content;
                padding: 0 15px;
                background: #fff;
            }

            h4.title span {
                font-weight: normal;
            }


            .flex-middle {
                display: flex;
                justify-content: space-between;
                align-items: center;

            }

            .flex-middle li:first-child:before {
                content: '';
                width: 2px;
                height: 73%;
                position: absolute;
                right: 4px;
                top: 50%;
                -webkit-transform: translateY(-50%);
                transform: translateY(-50%);
                background-color: #eaeaea;
            }

            .flex-middle li {
                position: relative;
            }

            .flex-middle li p:after {
                content: '';
                height: 10px;
                width: 10px;
                border-radius: 50%;
                background-color: #eaeaea;
                position: absolute;
                right: 0;
                top: 6px;
            }

            .flex-middle li p:not(:last-child) {
                margin-bottom: 10px;
            }


            .flex-middle li p {
                margin: 0;
                padding-right: 25px;
                position: relative;
                font-weight: bold;
                color: #111;
            }

            .flex-middle li p span {
                font-weight: normal;
                font-size: 16px;
                margin-left: 5px;
            }

            table {
                width: 100%;
                text-align: center;
                margin-top: 10px;
            }

            table th {
                padding: 8px;
                border-radius: 4px;
            }

            table thead {
                background: #f4f4f4;
            }

            .conditions {
                margin-top: 20px;
            }

            .conditions h5 {
                font-size: 16px;
                margin-top: 0;
                margin-bottom: 10px;
            }

            .conditions h5 span {
                color: #f44336;
                padding: 0 5px;
            }

            .conditions ul li {
                margin-bottom: 8px;
            }

            .conditions ul li span {
                display: inline-block;
                width: 10px;
                height: 10px;
                margin-left: 7px;
                background: #ddd;
                border-radius: 50%;
            }

            .conditions ul {
                padding-right: 20px;
            }

            .signature {
                display: flex;
                margin-top: 25px;
                padding-top: 25px;
                border-top: 1px dashed #eaeaea;
            }

            .signature li {
                width: 100%;
                text-align: center;
            }

            .signature li p {
                margin-top: 0;
                margin-bottom: 6px;
                font-weight: bold;
            }

            .signature li img {
                height: 90px;
            }

            .watermark {
                opacity: 0.1;
                position: absolute;
                width: 100%;
                height: 100%;
                left: 0;
                right: 0;
                top: 0;
                bottom: 0;
                background-repeat: no-repeat;
                background-position: center center;
                background-size: contain;
            }

            .red {
                color: #f44336;
            }

            .logo-div {
                width: 180px;
                text-align: center;
                margin-left: 0;
                margin-right: auto;
            }
        }


    </style>

</head>
<body>

<div class="container">
    <div class="contract" id="contract">
        <div class="watermark" style="background-image: url(https://ivonne.vercel.app/assets/img/logo.svg); width: 50px ;height: 50px"></div>
        <ul class="header">
            <li>
                <h3>{{$data['contract']->company->name}}</h3>
                <p>تأجير المعدات والحاويات وتنظيف المدن</p>
                <p><b>الرقم الضريبي : </b> {{\Alkoumi\LaravelArabicNumbers\Numbers::ShowInArabicDigits($data['contract']->company->tax_card_number)}}</p>
                <p><b>السجل التجاري : </b> {{\Alkoumi\LaravelArabicNumbers\Numbers::ShowInArabicDigits($data['contract']->company->commercial_number)}}</p>
                <p><i class="fa fa-map-marker"></i>حفر الباطن</p>
                <p><i class="fa fa-phone"></i>{{\Alkoumi\LaravelArabicNumbers\Numbers::ShowInArabicDigits($data['contract']->company->phone)}}</p>
            </li>
            <li>
                <div class="logo-div">
                    <img src="{{asset('images/companies/'.$data['contract']->company->logo)}}" class="logo" width="50" height="50">
                    <p>التاريخ : <strong>{{\Alkoumi\LaravelArabicNumbers\Numbers::ShowInArabicDigits(\Illuminate\Support\Carbon::create($data['contract']->containerRentals->start_at)->format(' d - m - Y '))}}</strong></p>
                    <p>رقم العقد : <strong class="red">{{\Alkoumi\LaravelArabicNumbers\Numbers::ShowInArabicDigits(\App\Models\Company::invoiceSerial($data['contract']->contract_serial))}}</strong></p>
                    <p>رقم الحاوية : <strong>{{\Alkoumi\LaravelArabicNumbers\Numbers::ShowInArabicDigits($data['contract']->containerRentals->container->number)}}</strong></p>
                </div>
            </li>
        </ul>
        <h4 class="title">
            عقد تأجير حاوية
            <span>( {{$data['contract']->containerRentals->category->name}} )</span>
        </h4>
        <ul class="flex-middle">
            <li>
                <p><span>طرف اول :</span>{{$data['contract']->company->name}} </p>
                <p><span>طرف ثاني :</span>{{$data['contract']->customer->name}}</p>
            </li>
            <li>
                {!! $data['contract']->qr !!}
            </li>
        </ul>
        <table>
            <thead>
            <tr>
                <th>اسم الحي</th>
                <th>رقم القطعة</th>
                <th>رقم البلك</th>
                <th>رقم المخطط</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>{{$data['contract']->area_name}}</td>
                <td>{{$data['contract']->area_number}}</td>
                <td>{{$data['contract']->block_number}}</td>
                <td>{{$data['contract']->plan_number}}</td>
            </tr>
            </tbody>
        </table>

        <div class="conditions">
            <h5>
                العقد ساري من تاريخ كتابة العقد الي تاريخ <span>{{\Illuminate\Support\Carbon::create($data['contract']->containerRentals->end_at)->format(' d - m - Y ')}}</span> علي ان يقوم الطرف الاول بتأجير حاوية للطرف الثاني حسب الشروط التالية :
            </h5>
            <ul>
                @foreach($data['clauses'] as $clause)
                    <li>
                        <span></span>{{$clause->clause}}
                    </li>

                @endforeach


            </ul>
        </div>
        <ul class="signature">
            <li>
                <p>طرف أول</p><span>{{$data['contract']->company->name}}</span>
            </li>
            <li>
                <p>طرف ثاني</p><span>{{$data['contract']->customer->name}}</span>
            </li>
            @if($data['contract']->company->seal)
                <li>
                    <p>الختم</p>


                    <img src="{{asset('images/companies/'.$data['contract']->company->seal)}} " width="50" height="50" alt="">

                </li>
            @endif
        </ul>
    </div>
</div>

</body>
</html>
