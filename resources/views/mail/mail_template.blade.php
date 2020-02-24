@component('mail::message')
Bonjour un ticket d'incident a été créé par l'utilisateur **{{ $data['user_name'] }}**.<br>
id utilisateur:**{{ $data['id_user'] }}** <br>   {{-- use double space for line break --}}
Catégorie: **{{ $data['cat'] }}**<br>
Niveau de sévérité: **{{ $data['niv'] }}**<br>
Service: **{{ $data['serv'] }}**<br>
Description : **{{ $data['descr'] }}**




@component('mail::button', ['url' => 'http://127.0.0.1:8000/liste'])
Tableau de bord
@endcomponent

Cordialement,
Enval Helpdesk.

@endcomponent
