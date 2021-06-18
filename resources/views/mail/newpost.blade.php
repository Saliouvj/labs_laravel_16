{{-- Blade que laravel fourni avec style par défaut --}}
@component('mail::message')
# Introduction

{{-- The body of your message. --}}
Un nouvel article a été mis en ligne sur le site !

A bientôt,<br>
{{ config('app.name') }}
@endcomponent