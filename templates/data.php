<?php

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
//require 'vendor/autoload.php';
require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';
//Datos a enviar
//datos del formulario
$nombre = strtoupper($_POST['cliente']);

$domicilio = $_POST['direction'];
$asunto = $_POST['motivo'];
$phone = $_POST['noTel'];
$contacto = $_POST['mail'];
$descripcion = $_POST['message'];

switch ($asunto) {
    case '1':
        $asunto = "Una cotización";
        break;
    case '2':
        $asunto = "Asesoria técnica";
        break;
    case '3':
        $asunto = "Información de nuestros productos";
        break;
    case '4':
        $asunto = "Agendar una cita";
        break;
    case '5':
        $asunto = "Un posible proyecto";
        break;
}

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 2;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'mail.alubauglass.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'noreply@alubauglass.com';                     //SMTP username
    $mail->Password   = 'SCl(mCf$q,?q';                               //SMTP password
    $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('noreply@alubauglass.com', 'Alubau Glass');
    $mail->addAddress('rvgabino36@gmail.com');     //Add a recipient
    //Con copia a:
    $mail->addCC('rv.development@outlook.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');        
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Asunto: Contacto de cliente';
    $mail->Body    = "<b>$nombre</b>" . " te a contactado solicitando: " . "<u> $asunto</u>" . "<br>" . "<br>" . "Mensaje recibido: " . "<br>" . $descripcion . "<br>"."<strong>Contactalo en :</strong>"."<ol><li>Tel: $phone</li><li>Email: $contacto</li><ol>"."<br>"."<p>Este cliente te contacto desde: $domicilio.</p>"."<br>"."<p><small>Datos recabados desde alubauglass.com</small></p>";

    $mail->send();
    echo '<script>alert("¡Mensaje eviado exitosamente!")</script>';
} catch (Exception $e) {
    echo '<script>alert("No pudimos enviar tu información, intentalo mas tarde")</script>' . '<br>' . "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

header("Location: ../routes/about.php", TRUE, 301);

exit();

