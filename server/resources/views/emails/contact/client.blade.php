<!doctype html>
<html>
<head>
	<title></title>
</head>
<body>
	<p>Bonjour {{ $contact->name }},</p>
	<br>
	<p>Merci de m'avoir laissé un message sur <a href="http://laravel-nuxt.test/" target="_blank">mon site</a>, je vous apporterai une réponse dès que possible.</a></p>
	<p>En attendant, voici un récapitulatif des informations que vous m'avez transmises :</a></p>
	<p><strong>Nom complet</strong> : {{ $contact->name }}</p>
	<p><strong>Email</strong> : {{ $contact->email }}</p>
	<p><strong>Message</strong> : {{ $contact->message }}<p>
	<br>
	<p>Cordialement,<p>
	<p>Alain Perrier<p>
</body>
</html>