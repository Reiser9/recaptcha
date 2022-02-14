<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Каппча</title>
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
	
	<form action="send.php" method="POST">
		
		<input type="text">

		<div class="g-recaptcha" data-sitekey="6LdjkLkUAAAAAC1HkBvqp_fP-Qm2sL_saoaLbHMs"></div>

		<button class="button__send" type="submit">Отправить</button>

	</form>


	<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
	    async defer>
	</script>
</body>
</html>