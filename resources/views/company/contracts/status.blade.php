@php
    switch ($raw->status) {
                       case 'on':
                           $class = 'valid-con';
                           $name = 'ساري';
                           break;
                       case 'off':
                           $class = 'expired-con';
                           $name = 'منتهي';
                           break;
                       case 'broken':
                           $class = 'canceled-con';
                           $name = 'ملغي';
                           break;

                   }

@endphp
<span class='cont-status " . {{$class}} . " '>{{$name }}</span>
