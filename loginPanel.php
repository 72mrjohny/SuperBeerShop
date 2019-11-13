<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
    <title>Hello, world!</title>
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
                            <a class="nav-link" href="contactPanel.php">Contact</a>
                        </li>
                    </ul>
            </div>
                </div>
            </nav>

            <div class="jumbotron jumbotron-fluid">
                <div class="container">

    <h1 class="display-4">Login to SuperBeerShop account</h1>
                    <p class="lead">Low prices, high quality, fast delivery!</p>
                </div>

            </div>
</header>





    <div class="container">
        <form class="form-group row" action="login.php" method="post">
     
            <div class="col-md-10">
                <label for="login" class="col-sm-2 col-form-label">Login: </label>
                <input type="text" name="login">
            </div>

            <div class="col-md-10">
                <label for="password" class="col-sm-2 col-form-label">Password: </label>
                <input type="password" name="password">
            </div>
        
            <div class="col-md-10">
                <input class="btn btn-dark .btn-lg" type="submit" value="login">
            </div>


        </form><br><br>

        <a href="registration.php">Rejestracja - załóż darmowe konto!</a>
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