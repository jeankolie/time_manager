@component('mail::message')
Bienvenu {{ $personnel->prenom }}, vos identifiants sont: login: {{ $personnel->login }} et votre mot de passe: {{ $password }}

@component('mail::button', ['url' => config('app.url')])
	Connectez-vous
@endcomponent

Merci,<br>
{{ config('app.name') }}
@endcomponent
