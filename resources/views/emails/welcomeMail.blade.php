@component('mail::message')
# Introduction

Order Placed

@component('mail::button', ['url' => 'http://localhost:3000/login'])
Login here
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
