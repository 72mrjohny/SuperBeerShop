
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
                <a class="navbar-brand" href="#">SuperBeerShop</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMenu"
                    aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarMenu">
                    <ul class="navbar-nav navbar-right">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
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
                

<!-- <?php
    if(!isset($_SESSION['user']))
    {
        echo ("<p class='loginData' >Witaj  " .$_SESSION['user']."!</p>");
    }else {
        return (`<h1 class="display-4">Welcome to SuperBeerShop</h1>`);
    }
?> -->


<h1 class="display-4">Welcome to SuperBeerShop</h1>
                <p class="lead">Low prices, high quality, fast delivery!</p>
                <button class="btn btn-lg btn-dark">Click to see</button>
            </div>

        </div>
    </header>
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Home page</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="#">Lorem ipsum</a>
                </li>
            </ol>
        </nav>

        <main class="row">
            <div class="col-md-3">
                <h2 class="mb-4">Categories</h2>
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action list-group-item-dark">
                        Category_1
                    </a>
                    <a href="#" class="list-group-item list-group-item-action list-group-item-dark">
                        Category_2
                    </a>
                    <a href="#" class="list-group-item list-group-item-action list-group-item-dark">
                        Category_3
                    </a>
                    <a href="#" class="list-group-item list-group-item-action list-group-item-dark">
                        Category_4
                    </a>
                </div>
            </div>
            <div class="col-md-9">
                <h2 class="mb-4">Products</h2>
                <ul class="pagination">
                    <li class="page-item">
                        <a href="#" class="page-link">Previous</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link">1</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link">2</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link">3</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link">Next</a>
                    </li>
                </ul>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <img src="images/beer1.jpg" alt="" class="card-img-top">
                            <div class="card-body">
                                <h3 class="card-title mb-0">
                                    Beer
                                    <span class="badge badge-success">New!</span>
                                    <p class="mt-0">light lager</p>
                                </h3>
                            </div>
                            <div class="card-footer text-center">
                                2,99$
                            </div>
                        </div>
                    </div>


                    <div class="col-md-4">
                        <div class="card mb-4">
                            <img src="images/beer2.jpg" alt="" class="card-img-top">
                            <div class="card-body">
                                <h3 class="card-title mb-0">
                                    Beer
                                    <p class="mt-0">light pils</p>
                                </h3>
                            </div>
                            <div class="card-footer text-center">
                                1,99$
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <img src="images/beer3.jpg" alt="" class="card-img-top">
                            <div class="card-body">
                                <h3 class="card-title mb-0">
                                    Beer
                                    <p class="mt-0">wheat beer</p>
                                </h3>
                            </div>
                            <div class="card-footer text-center">
                                3,49$
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <img src="images/beer4.jpg" alt="" class="card-img-top">
                            <div class="card-body">
                                <h3 class="card-title mb-0">
                                    Beer
                                    <p class="mt-0">pale ALE</p>
                                </h3>
                            </div>
                            <div class="card-footer text-center">
                                5,29$
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <footer class="bg-secondary text-white py-4 mt-4">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h5>SuperBeerShop</h5>
                    <p class="info">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus debitis porro
                        nesciunt, hic
                        adipisci maiores ad at blanditiis dicta, rerum eaque recusandae? Placeat laudantium hic eum
                        voluptatibus neque ut nihil?</p>
                </div>
                <div class="col-md-4">
                    <form method="post" action="save.php">
                        <h5>Newsletter</h5>
                        <div class="input-group-append">
                            <input name="email" type="email" class="form-control" placeholder="e-mail adress">
                            <input type="submit" class="btn btn-dark text-nowrap" value="Sign In">
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </footer>
    <div class="second-footer py-4 d-flex justify-content-center align-items-center">
        <p class="text-white m-0">Copyright © SuperBeerShop</p>
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