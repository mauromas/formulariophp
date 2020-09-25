<?php
    $destinatario = 'mauro.mas.1997@gmail.com';

    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];

    $header = "Enviado desde la página de Mauro Mas";
    $mensajeCompleto = $mensaje . "\n\r";


    mail($destinatario, $email, $mensajeCompleto, $header);
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <title>Bootstrap</title>
</head>

<body>




    <!-- Formulario-->
    <!--/Formulario-->

    <form class="row" action="correos.php" method="POST">

        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <h1>Formulario de Contacto</h1>
            <div class="form-group">
                <label for="name">Nombre:</label>
                <input name="nombre" type="text" class="form-control" id="name">
            </div>
            <div class="form-group">
                <label for="email">Email adress:</label>
                <input name="email" type="email" class="form-control" id="email">
            </div>
            <div class="form-group">
                <label for="pwd">Consulta:</label>
                <textarea name="mensaje" name="contact-mesage" class="form-control" id="pwd" rows="5"></textarea>
            </div>
            <button type="submit" class="btn btn-default">Enviar</button>
        </div>
    </form>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>

</html>