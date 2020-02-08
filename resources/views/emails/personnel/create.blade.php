@component('mail::message')
Bienvenu <b>{{ $personnel->nom }}</b>, vos identifiants sont: login: {{ $personnel->login }} et votre mot de passe: <b>{{ $password }}</b>

@component('mail::button', ['url' => config('app.url')])
	Connectez-vous
@endcomponent

Merci,<br>
{{ config('app.name') }}
@endcomponent
