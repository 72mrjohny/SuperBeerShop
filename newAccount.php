<?php
	session_start();
	if(!isset($_SESSION['succesful_registration']))
	{
		header('Location:index.php');
		exit();
	}
	else
	{
	unset($_SESSION['succesful_registration']);
	}
	if(isset($_SESSION['temporary_nick'])) unset($_SESSION['temporary_nick']);
	
	if(isset($_SESSION['temporary_email'])) unset($_SESSION['temporary_email']);
	
	if(isset($_SESSION['temporary_password1'])) unset($_SESSION['temporary_password1']);
	
	if(isset($_SESSION['temporary_password2'])) unset($_SESSION['temporary_password2']);

	if(isset($_SESSION['e_nick'])) unset($_SESSION['e_nick']);

	if(isset($_SESSION['e_email'])) unset($_SESSION['e_email']);
	
	if(isset($_SESSION['e_password'])) unset($_SESSION['e_password']);

	if(isset($_SESSION['e_acceptTerms'])) unset($_SESSION['e_acceptTerms']);
	

    ?>
	
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>New Account</title>
</head>
<body>

Dziękujemy za rejestrację w serwisie! Teraz możesz zalogować się na swoje konto!

	<a href="loginPanel.php">Zaloguj się na swoje konto!</a>

	<a href="index.php">Przejdź do strony głównej serwisu</a>

</body>
</html>