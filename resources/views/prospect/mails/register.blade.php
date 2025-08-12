@component('mail::message')

<p>Hello {{ $user->name}},</p>
<p>Thank you for your interest in applying for the course {{$user->entrance_fee->course->title}} at {{ config('app.name') }} Plz verify your email id to proceed with the application process.</p>

@component('mail::button',['url' =>url('verify/'. $user->remember_token)])
Verify
@endcomponent

@endcomponent
