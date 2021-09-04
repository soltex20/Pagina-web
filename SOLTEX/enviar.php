<?php

    $correo = $_POST['correo'];
    $mensaje = $_POST['mensaje'];
    $from = "soltexin@soltex-innovation.axwebsite.com";
    $to = "soltex2021@hotmail.com";
    $subject = "Nuevo mensaje de: ". $correo;
    $message = $mensaje;
    $headers = "Mensaje proveniente del sitio Web: "; 

    mail($to,$subject,$message,$headers);

    echo "<script>alert('Correo Enviado con Éxito')</script>";
    // echo "<script>setTimeout(\"location.href='index.html'\",1000)</script>";
?>