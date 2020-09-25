<?php
    $destinatario = 'mauro.mas.1997@gmail.com';

    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];

    $header = "Enviado desde la página de Mauro Mas";
    $mensajeCompleto = $mensaje . "\nAtentamente: " . $nombre;


    @mail($destinatario, $email, $mensajeCompleto, $header);
    echo "<script>alert('correo enviado exitosamente')</script>";
    echo "<script> setTimeout(\"location.href='index.html'\",1000)</script>";
?>