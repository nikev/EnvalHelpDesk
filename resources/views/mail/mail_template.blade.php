@component('mail::message')
Bonjour un ticket d'incident a été créé par l'utilisateur **{{ $data['user_name'] }}**.<br>
id utilisateur:**{{ $data['id'] }}** <br>   {{-- use double space for line break --}}
Catégorie: **{{ $data['cat'] }}**<br>
Niveau de sévérité: **{{ $data['niv'] }}**<br>
Service: **{{ $data['serv'] }}**<br>
Description : **{{ $data['descr'] }}**



 {{-- @component('mail::button', ['url' => $link])
Go to your inbox
@endcomponent--}}

Cordialement,
Enval Helpdesk.

@endcomponent
