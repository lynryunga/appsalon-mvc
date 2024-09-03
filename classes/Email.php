<?php 

namespace Classes;

use PHPMailer\PHPMailer\PHPMailer;

class Email {

  public $email;
  public $nombre;
  public $token;

  public function __construct($email, $nombre, $token)
  {
    $this->email = $email;
    $this->nombre = $nombre;
    $this->token = $token;
  }

  public function enviarConfirmacion() {

    //Crear el objeto mail
    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->Host = 'sandbox.smtp.mailtrap.io';
    $mail->SMTPAuth = true;
    $mail->Port = 2525;
    $mail->Username = 'c03781e2126934';
    $mail->Password = 'aef13c3ebf94e1';

    $mail->setFrom('cuentas@appsalon.com');
    $mail->addAddress('cuentas@appsalon.com', 'AppSalon.com');
    $mail->Subject = "Confirma tu cuenta";

    //set HTML
    $mail->isHTML(TRUE);
    $mail->CharSet = 'UTF-8';

    $contenido = "<html>";
    $contenido.= "<p><strong>Hola " . $this->nombre . "</strong> Has creado tu cuenta en AppSalon, solo debes confirmarla presionando el siguiente enlace</p>";
    $contenido.= "<p>Presiona aqui: <a href='http://localhost:3000/confirmar-cuenta?token=" . $this->token . "'>Confirmar Cuenta</a> </p>";
    $contenido.= "<p>Si tu no solicitaste esta cuenta, puedes ignorar el mensaje</p>";
    $contenido.= "</html>";

    $mail->Body = $contenido;

    //enviar el mail
    $mail->send();
  }

}