@component('mail::message')
# Introduction

This is my app.

@component('mail::button', ['url' => ''])
Hi
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
