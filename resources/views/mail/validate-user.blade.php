{{-- Blade que laravel fourni avec style par défaut --}}
@component('mail::message')
# Introduction

{{-- The body of your message. --}}
Bienvenue dans l'équipe de Labs !

Votre e-mail : {{$mail->email}}

Vous êtes validé ! Vous pouvez dès à présent modifier votre profil.

Token de connection : /xy

A bientôt,<br>
{{ config('app.name') }}
@endcomponent
