@component('mail::message')
	{{ $message }}<br>
Merci,<br>
{{ config('app.name') }}
@endcomponent
