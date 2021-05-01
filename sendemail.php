<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);

$alert = '';

if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  // $tipo = $_POST['tipo'];
  // $problema = $_POST['radio'];
  $phone = $_POST['phone'];
  // $phone = $_POST['phone'];




  try{
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = '#'; // Gmail address which you want to use as SMTP server
    $mail->Password = '#'; // Gmail address Password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = '587';

    $mail->setFrom('#'); // Direcci
    $mail->addAddress('#'); // Email address where you want to receive emails (you can use any of your gmail address including the gmail address which you used as SMTP server)

    $mail->isHTML(true);
    $mail->Subject = 'Solicitud de Incidencia';
    $mail->Body = "<h3>Tipo de persona:  <br> Nombre : $name <br>Email: $email <br> Teléfono: $phone <br> <br>Tipo de incidencia:  <br>Mensaje : $message <br> </h3>";

    $mail->send();
    $alert = '<div class="alert-success">
                 <span>Mensaje enviado correctamente.</span>
                </div>';
  } catch (Exception $e){
    $alert = '<div class="alert-error">
                <span>'.$e->getMessage().'</span>
              </div>';
  }
}
?>
