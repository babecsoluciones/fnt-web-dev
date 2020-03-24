<?php

//envio seguro
		

$message=stripslashes($_POST['message']);

$mensaje="
Nombre: $_POST[name] <br>
Telefono: $_POST[telefono] <br>
E-mail: $_POST[email] <br><br>

Mensaje:<br>
$message
";

$mensaje2="
Nombre: $_POST[name] \n
Telefono: $_POST[telefono] \n
E-mail: $_POST[email] \n\n

Mensaje: \n
$message
";




require 'phpmailer/class.phpmailer.php';
require 'phpmailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->IsSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'mail.diversionesfanthy.com';                 // Specify main and backup server
$mail->Port = 587;                                    // Set the SMTP port
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'no-reply@diversionesfanthy.com';                // SMTP username
$mail->Password = 'Bas@2891';                  // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted

$mail->From = $_POST['email'];
$mail->FromName = $_POST['nombre'];
$mail->AddAddress('contacto@diversionesfanthy.com', 'Diversiones FANTHY');  // Add a recipient

$mail->IsHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Contacto Diversiones FANTHY';
$mail->Body    = $mensaje;
$mail->AltBody = $mensaje;

if(!$mail->Send()) {
   echo '<script language="javascript">alert("El mensaje no pudo ser enviado");</script>';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
}
else
{
echo '<script language="javascript">alert("Mensaje enviado");</script>';
echo '<script>window.location="/web/inicio/";</script>';
}

		//fin envio seguro

?>