@component('mail::message')
	{{ $message }}<br>
Thanks,<br>
{{ config('app.name') }}
@endcomponent
