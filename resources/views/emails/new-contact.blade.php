@component('mail::message')
![Logotipo Kukulha][logo]
# Nuevo contacto desde la web

Los datos del cliente son:

**Nombre**: {{ $data->name }}

**Email**: {{ $data->email }}


Gracias,<br>
{{ config('app.name') }}
[logo]: {{ asset('/img/logo.png') }}
@endcomponent
