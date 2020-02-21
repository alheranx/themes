<?php

if (isset($_POST['email'])) {
    
    $nombre         =        $_POST['nombre'] ;
    $email          =        $_POST['email'] ;
    $telefono       =        $_POST['telefono'] ;
    $mensaje        =        $_POST['message'];

    $subject = "Mensaje Publineza";
    $sever = "From: no-reply@tornillostoreo.com";


$mensaje = "Nombre: " .$nombre ."\ne-mail: " .$email ."\nTeléfono: " .$telefono ."\n\nMensaje: " .$mensaje ."\n \n";


    mail("alheranx@hotmail.com", $subject, $mensaje, $sever);

    http_response_code(200);
    echo "Tu mensaje se ha envíado";
}

else {
    http_response_code(500);
    echo "Ocurrió un error, intentalo de nuevo.";
}

?>