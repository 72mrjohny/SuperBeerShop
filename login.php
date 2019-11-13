<?php
session_start();

if((!isset($_POST['login'])) || (!isset($_POST['password'])))
{
	header('Location:index.php');
	exit();
}

require_once "connect.php";




// Otwieramy połączenie z bazą danych
//  @ - wyciszenie kontroli błędów, ostrzeżniea ze strony PHP
$connection = @new mysqli($host, $db_user, $db_password, $db_name);

if($connection->connect_errno!=0)
{
	echo "Error:".$connection->connect_errno;
}
else {

	$login = $_POST['login'];
	$password = $_POST['password'];

	$login = htmlentities($login,ENT_QUOTES,"UTF-8");


	if ($queryResult = @$connection->query(sprintf("SELECT * FROM accounts WHERE user ='%s'",
	mysqli_real_escape_string($connection,$login))))
	{
		$resultNumber = $queryResult->num_rows;
		if($resultNumber>0)
		{
			$matchingResult = $queryResult->fetch_assoc(); //tablica skojarzeniowa i zmienne sesyjne _SESSION
			if(password_verify($password,$matchingResult['pass']))
			{
				$_SESSION['loggedin'] = true;  // flaga

				$_SESSION['id'] = $matchingResult['id'];
				$_SESSION['user'] = $matchingResult['user'];
				$_SESSION['email'] = $matchingResult['email'];
				$_SESSION['dnipremium'] = $matchingResult['dnipremium'];

				unset($_SESSION['error']);
				$queryResult->free_result();

				header('Location:accountPanel.php');
			}else {
				$_SESSION['error'] = '<span style="color:red">Nieprawidłowy login lub hasło!</span>';
				header('Location:loginPanel.php');
			}
		} else {
			$_SESSION['error'] = '<span style="color:red">Nieprawidłowy login lub hasło!</span>';
			header('Location:loginPanel.php');
		}

	}

	$connection->close();
	
}


?>