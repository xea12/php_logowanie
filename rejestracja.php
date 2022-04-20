<?php

	session_start();


	if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
	{
		header('Location: gra.php');
		exit();

	}


?>

<DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Osadnicy - załóż nowe konto</title>
	<script src="https://www.google.com/recaptcha/enterprise.js?render=6LeO0ogfAAAAAM1yVdzE1mNy0WPK125G6jsFKh5Z"></script>
	<script>
	grecaptcha.enterprise.ready(function() {
		grecaptcha.enterprise.execute('6LeO0ogfAAAAAM1yVdzE1mNy0WPK125G6jsFKh5Z', {action: 'login'}).then(function(token) {
		   ...
		});
	});
	</script>
</head>
<body>
	<form method="post">
		Nickname: <br /> <input type="text" name="nick" /><br />
		E-mail: <br /> <input type="text" name="email" /><br />
		Twoje hasło: <br /> <input type="text" name="haslo1" /><br />
		Powtórz hasło: <br /> <input type="text" name="haslo2" /><br />
		<label>
			<input type="checkbox" name="regulamin" />Akceptuję regulamin<br />
		</label> 
		
		<div class="g-recaptcha" data-sitekey="6LeO0ogfAAAAAM1yVdzE1mNy0WPK125G6jsFKh5Z"></div>
		
		
		<input type="subimt" value="Zarejestruj się" />
	</form>

</body>
</html>