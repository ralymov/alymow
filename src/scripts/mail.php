<?php

require '../vendor/autoload.php';

use Dotenv\Dotenv;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    return;
}

try {
    $dotenv = Dotenv::create(__DIR__);
    $dotenv->load();

    $email = htmlspecialchars($_POST['email']);
    $name = htmlspecialchars($_POST['name']);
    $message = htmlspecialchars($_POST['message']);
    $body = $email . '<br/>' . $name . '<br/>' . $message;

    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->SMTPDebug = 0;
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = getenv('MAIL_ENCRYPTION');
    $mail->Host = getenv('MAIL_HOST');
    $mail->Port = getenv('MAIL_PORT');

    $mail->Username = getenv('MAIL_USERNAME');
    $mail->Password = getenv('MAIL_PASSWORD');
    $mail->setFrom(getenv('MAIL_USERNAME'), 'Alymov Roman');
    $mail->addAddress(getenv('MAIL_USERNAME'), 'Alymov Roman');
    $mail->isHTML();
    $mail->Subject = 'New contact request';
    $mail->Body = $body;
    if (!$mail->send()) {
        http_response_code(500);
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message sent!';
    }
} catch (\Exception $exception) {
    echo 'Message could not be sent';
}

