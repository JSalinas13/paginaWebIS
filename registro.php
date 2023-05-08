<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

try {
  if (isset($_POST['registro']) && isset($_POST['nombre']) && isset($_POST['correo'])) {
   if(!empty($_POST['nombre']) && !empty($_POST['correo'])){
        $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];

    //CONFIGURACIÓN PARA ENVIAR CORREO
    $mail = new PHPMailer(true);
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'jesus.salinas.le.9@gmail.com';
    $mail->Password = 'uoikhogtyebvyhar';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port = 465;

    $mail->setFrom('jesus.salinas.le.9@gmail.com', 'Contacto de pagina WEB');
    $mail->addAddress('20030048@itcelaya.edu.mx');
    $mail->addAddress('19031645@itcelaya.edu.mx');
    $mail->addAddress('20030114@itcelaya.edu.mx');
    $mail->addAddress('20030389@itcelaya.edu.mx');
    $mail->isHTML(true);
    $mail->Subject = 'Te enviaron un correo de contacto por medio de tu pagina web';
    $mail->Body = 'Hola mi nombre es ' . $nombre . ' y quiero contactar a un asesor de vuelos, correo: ' . $correo;
    $mail->send();
    echo '<script>

    window.location.assign("index.php?r=t")
  </script>';
   }
   else {
    echo '<script>
            window.location.assign("index.php?r=f")
          </script>';
  }
  }else{
        echo '<script>
            window.location.assign("index.php?r=err")
          </script>';
  }
} catch (\Throwable $th) {
  echo '<script>
            window.location.assign("index.php?r=err")
          </script>';
}
