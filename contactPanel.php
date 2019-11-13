<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Contact us!</title>
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
                            <a class="nav-link" href="index.php">Home</a>
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
                <h1 class="display-4">SuperBeerShop - contact us!</h1>
                <p class="lead">Low prices, high quality, fast delivery!</p>
            </div>
        </div>
    </header>



<div class="container">

    <form class="form-group row">



        <div class="col-md-10">
            <label for="name" class="col-sm-2 col-form-label">Name: </label>
            <input type="text" name="name" id="contactFormName" placeholder="Your name">
        </div>
        <div class="col-md-10">
            <label for="email" class="col-sm-2 col-form-label">Email: </label>
            <input type="text" name="email" id="contactFormMail" cols="30" rows="6" placeholder="Your email">
        </div>



        <div class="col-md-4 mt-3">

            <textarea class="form-control" name="content" id="contactFormMessage" placeholder="Your message" rows="4"></textarea>
        </div>

        <div class="col-md-10 mt-4">
        <button class="btn btn-dark .btn-lg" type="button" id="contactSendMessage">Wyślij wiadomość</button>
        </div>


    </form>

</div>










    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>




    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
    crossorigin="anonymous"></script>

    <script>
        $(document).ready(function () {

        $('#contactSendMessage').click(function () {
            var name = $('#contactFormName').val();
            var mail = $('#contactFormMail').val();
            var message = $('#contactFormMessage').val();

            $.ajax
            ({
                asynch: true,
                type: 'POST',
                data: { 'name': name, 'mail': mail, 'message': message },
                url: 'script.php',
                dataType: 'json',

                success: function (data) {
                if (data.status == 'ok') {
                    $('#contactFormName').val('');
                    $('#contactFormMail').val('');
                    $('#contactFormMessage').val('');
                    alert('Wysłano wiadomość e-mail do janpieniazek.pl');
                } else if (data.status == 'error') {
                    switch (data.feed) {
                    case '101':
                        alert('Blad 101: brak e-maila lub treści wiadomości ');
                        break;
                    case '102':
                        alert('Blad 102: e-mail nie przeszedł walidacji');
                        break;
                    case '103':
                        alert('Blad 103: response status = error');
                        break;
                    }
                }
                else {
                    alert('error: inny błąd');
                }
                },
                error: function () {
                alert('error: jeszcze coś innego');
                },
            });

        });
        });


    </script>
  </body>
</html>