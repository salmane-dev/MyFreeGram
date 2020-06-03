@component('mail::message')
 
Welcome is my app.

<br>
<br> 

Thanks,<br><br>
{{ config('app.name') }}

@component('mail::button', ['url' => ''])
Hi
@endcomponent


@endcomponent
