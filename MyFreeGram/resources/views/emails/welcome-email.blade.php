@component('mail::message')
 
Welcome is my app.

<br>  
Thanks,<br> 
{{ config('app.name') }}

@component('mail::button', ['url' => ''])
Hi
@endcomponent


@endcomponent
