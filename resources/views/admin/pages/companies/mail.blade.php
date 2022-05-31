@component('mail::message')
# {{ isset($setting)?$setting->name : config('app.name') }}

<span class="text-center">{{$data['message']}}</span>

@component('mail::button', ['url' => config('app.url').'/contact-us'])
Button Text
@endcomponent

Thanks,<br>
{{ isset($setting)?$setting->name : config('app.name') }}
@endcomponent
