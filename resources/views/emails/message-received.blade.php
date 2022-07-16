@component('mail::message')
Has recibido un nuevo mensaje
<br>
@component('mail::panel')
    ¿Quién? {{$msg['name']}} - {{$msg['email']}}
    <br>
    Asunto: {{$msg['subject']}}
    <br>
    Mensaje: {{$msg['content']}}
@endcomponent
@endcomponent