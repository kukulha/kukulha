@component('mail::message')
![Logotipo Kukulha][logo]
# Gracias {{ $data->name }}

Estamos entusiamados por saber que estas interesado en nuestros servicios. 

En un momento un ejecutivo se pondra en contacto contigo para saber mas de ti y de tu proyecto


Nuevamente gracias,<br>
el equipo de {{ config('app.name') }}
[logo]: {{ asset('/img/logo.png') }}
@endcomponent
