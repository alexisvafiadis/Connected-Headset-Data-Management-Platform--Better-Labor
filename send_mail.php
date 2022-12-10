<!DOCTYPE html>

<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

function sendmail($conn, $row, $subject, $body, $file = NULL){
    $mail = new PHPMailer(true);
    $mail->Mailer = "smtp";
    $mail->SMTPSecure = 'tls';
    $mail->SMTPDebug = 0;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'contact.betterlabor@gmail.com';
    $mail->Password = 'xszhlpteythrkbwt';
    $mail->Port = 587;
    $mail->setFrom('contact.betterlabor@gmail.com', 'Better Labor');
    if (!is_null($file)) {
        $mail->addAttachment($file);
    }
    $mail->isHTML(true);
    $mail->Subject = $subject;
    try {
        $mail->addAddress($row->email);
        $mail->Body = 'Bonjour ' . $row->prenom . ' ' . $row->nom . '!<br><br>' . $body . '<br><br>Infinite Measures<br>Service Better Labor<br><a href="127.0.0.1/Better-Labor">Notre site</a>';
        $mail->AltBody = 'Bonjour ' . $row->prenom . ' ' . $row->nom . '! ' . $body . 'Infinite Measures
        Service Better Labor
        Infinite Measures
        https://127.0.0.1/Better-Labor';
        $mail->send();
        return true;
    }
    catch (Exception $e) {
        echo $e->getMessage();
        return false;
    }
}
?>