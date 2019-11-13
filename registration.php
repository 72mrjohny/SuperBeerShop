<?php
session_start();

if(isset($_POST['email']))
{
	$all_OK=true;
// SPRAWDZENIE NICKa
	$nick = $_POST['nick'];
	if((strlen($nick)<3) || (strlen($nick)>20))
	{
	$all_OK=false;
	$_SESSION['e_nick']="Nick musi mieć od 3 do 20 znaków";
	}
	if(ctype_alnum($nick)==false)
	{
	$all_OK=false;
	$_SESSION['e_nick']="Nick może składać się z cyfr lub liter bez polskich znaków";
	}
// SPRAWDZENIE e-mailla
	$email = $_POST['email'];
	$emailB = filter_var($email,FILTER_SANITIZE_EMAIL);

	if((filter_var($emailB,FILTER_VALIDATE_EMAIL)==false) || ($emailB!=$email))
	{
	$all_OK=false;
	$_SESSION['e_email']="Podaj poprawny adres e-mail";
	}

// SPRAWDZENIE hasła
	$password1 = $_POST['password1'];
	$password2 = $_POST['password2'];

	if((strlen($password1)<8) || (strlen($password1)>20))
	{
	$all_OK=false;
	$_SESSION['e_password']="Hasło musi mieć od 8 do 20 znaków";
	}

	if($password1!=$password2)
	{
	$all_OK=false;
	$_SESSION['e_password']="Hasła nie są identyczne";	
	}

	$password_hashed = password_hash($password1,PASSWORD_DEFAULT);

	// SPRAWDZENIE checkboxa
	if(!isset($_POST['acceptTerms']))
	{
		$all_OK=false;
		$_SESSION['e_acceptTerms']="Potwierdź akceptację regulaminu";	
	}


$_SESSION['temporary_nick'] = $nick;
$_SESSION['temporary_email'] = $email;
$_SESSION['temporary_password1'] = $password1;
$_SESSION['temporary_password2'] = $password2;




require_once "connect.php";
mysqli_report(MYSQLI_REPORT_STRICT);
try
{
	$connection = new mysqli($host, $db_user,$db_password, $db_name);
	if($connection->connect_errno!=0)
{
	throw new Exception(mysqli_connect_errno());
}
else
{
	$email_exist = $connection->query("SELECT id FROM accounts WHERE email='$email'");

	if(!$email_exist) throw new Exception($connection->error);
	$email_exist_no = $email_exist->num_rows;
	if($email_exist_no>0)
	{
		$all_OK=false;
		$_SESSION['e_email']="Konto o tym adresie już istnieje";
	}

	$nick_exist = $connection->query("SELECT id FROM accounts WHERE user='$nick'");

	if(!$nick_exist) throw new Exception($connection->error);
	$nick_exist_no = $nick_exist->num_rows;
	if($nick_exist_no>0)
	{
		$all_OK=false;
		$_SESSION['e_nick']="Konto o tej nazwie już istnieje. Wybierz inny nick";
	}
	if($all_OK==true)
	{
		if($connection->query("INSERT INTO accounts VALUES(NULL,'$nick','$password_hashed','$email',14)"))
		{
			$_SESSION['succesful_registration']=true;
			header('Location:newAccount.php');
		}
		else
		{
			throw new Exception($connection->error);
		}
	}
	$connection->close();
}
}
catch(Exception $e)
{
	echo '<span class="error">Błąd servera. Spróbuj się zarejestrować za chwilę</span>';
	echo '<br />Informacja developerska: '.$e;
}
}
?>
	
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	 <!-- Required meta tags -->
	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" href="style.css">
	<title>Rejestracja nowego konta</title>

<style>
.error {
	color:red;
	margin-top:5px;
	margin-bottom:5px;
}
</style>

</head>
<body>



<header>
        <nav class="navbar navbar-expand-lg sticky-top navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="index.php">SuperBeerShop</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMenu"
                        aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarMenu">
                    <ul class="navbar-nav navbar-right">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Home <span class="sr-only"></span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./loginPanel.php">LogIn</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                    </ul>
            </div>
                </div>
            </nav>

            <div class="jumbotron jumbotron-fluid">
                <div class="container">

    <h1 class="display-4">Register to SuperBeerShop</h1>
                    <p class="lead">Low prices, high quality, fast delivery!</p>
                </div>

            </div>
</header>




	<div class="container">
		<form  method="post">
			<div class="col-sm-12">
				<label for="nick" class="col-sm-2 col-form-label">Nickname: </label>
				<input type="text" name="nick" value="<?php if(isset($_SESSION['temporary_nick'])){
					echo $_SESSION['temporary_nick'];
					unset($_SESSION['temporary_nick']);
				}?>">
			</div>
				<?php
				if(isset($_SESSION['e_nick']))
				{
					echo '<div class="error">'.$_SESSION['e_nick'].'</div>';
					unset($_SESSION['e_nick']);
				}
				?>


			<div class="col-sm-12">
                <label for="email" class="col-sm-2 col-form-label">E-mail: </label>
                <input type="email" name="email" value="<?php if(isset($_SESSION['temporary_email'])){
					echo $_SESSION['temporary_email'];
					unset($_SESSION['temporary_email']);
				}?>">
            </div>
				<?php
				if(isset($_SESSION['e_email']))
				{
					echo '<div class="error">'.$_SESSION['e_email'].'</div>';
					unset($_SESSION['e_email']);
				}
				?>



			<div class="col-sm-12">
                <label for="password1" class="col-sm-2 col-form-label">Password: </label>
                <input type="password" name="password1" value="<?php if(isset($_SESSION['temporary_password1'])){
					echo $_SESSION['temporary_password1'];
					unset($_SESSION['temporary_password1']);
				}?>">
            </div>
				<?php
				if(isset($_SESSION['e_password']))
				{
					echo '<div class="error">'.$_SESSION['e_password'].'</div>';
					unset($_SESSION['e_password']);
				}
				?>




			<div class="col-sm-12">
                <label for="password2" class="col-sm-2 col-form-label">Repeat password: </label>
                <input type="password" name="password2" value="<?php if(isset($_SESSION['temporary_password2'])){
					echo $_SESSION['temporary_password2'];
					unset($_SESSION['temporary_password2']);
					}?>">
            </div>


			<div class="form-check mt-4">
				<input class="form-check-input" name="acceptTerms" type="checkbox" value="" >
				<label class="form-check-label" for="acceptTerms">
					Agree to terms and conditions
				</label>
			</div>
			<?php
			if(isset($_SESSION['e_acceptTerms']))
				{
					echo '<div class="error">'.$_SESSION['e_acceptTerms'].'</div>';
					unset($_SESSION['e_acceptTerms']);
				}
			?>


		<input class="btn btn-dark mt-4" type="submit" value="Zarejestruj się "> 

		</form>

		</div>






		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
			integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
			crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
			integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
			crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
			integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
			crossorigin="anonymous"></script>
	</body>
</html>