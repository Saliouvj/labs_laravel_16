{{-- Blade que laravel fourni avec style par défaut --}}
@component('mail::message')
# Introduction

{{-- The body of your message. --}}
Vous êtes bel et bien inscrit(e) à la Newsletter de Labs !

Votre e-mail : {{$mail->email}}

A bientôt,<br>
{{ config('app.name') }}
@endcomponent
