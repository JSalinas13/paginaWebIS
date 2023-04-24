<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;



if (isset($_POST['registro']) && isset($_POST['nombre']) && isset($_POST['correo'])) {
    //CONFIGURACIÓN PARA ENVIAR CORREO
    $mail = new PHPMailer(true);
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = '20030389@itcelaya.edu.mx';
    $mail->Password = 'dtjgdzobmxqwhczr';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port = 465;

    $mail->setFrom('20030389@itcelaya.edu.mx', 'Contacto de pagina WEB');
    $mail->addAddress('');
    $mail->isHTML(true);
    $mail->Subject = 'Te enviaron un correo de contacto por medio de tu pagina web';
    $mail->Body = 'Hola mi nombre es ' . $nombre . ' y quiero contactar a un asesor de vuelos';
    $mail->send();


    echo '<script>
            window.location.assign("index.php&r=t")
          </script>';
}
