<?php

use PHPMailer\PHPMailer\PHPMailer;

require 'vendor/autoload.php';

function EnviarCorreo()
{
    $nombre = "Samantha Jiménez";
    //crear una instancia de PHPmailer.
    $mail = new PHPMailer(true);
    //configurar SMTP (protocolo para envio de email)  
    $mail->isSMTP();
    $mail->Host = 'sandbox.smtp.mailtrap.io';
    $mail->SMTPAuth = true;
    $mail->Username = 'a894004d9ec80e';
    $mail->Password = '62a26e1e98611c';
    $mail->SMTPSecure = 'tls'; // no encriptados pero van por un canal seguro, ssl es para los certificados
    $mail->Port = 2525;

    //Configurar contenido del correo
    $mail->setFrom('maquilas@gmail.com'); // quien envia el email
    $mail->addAddress('jimenezs0589@gmail.com', 'Samantha Jiménez');     //receptor
    $mail->Subject = 'Nuevo mensaje';

    //habilitar HTML
    $mail->isHTML(true);
    $mail->CharSet = 'UTF-8'; //para mostrar acentos y caracteres especiales

    //definir contenido

    $contenido = '<html> <p> Hola ' . $nombre . 'Tienes un nuevo mensaje</p></html>';

    $mail->Body = $contenido;
    $mail->AltBody = 'Esto es texto aleternativo sin HMTL';

    if ($mail->send()) {
        echo 'El correo fue enviado correctamente';
    } else {
        echo "El correo no se pudo enviar";
    }
}

EnviarCorreo();
