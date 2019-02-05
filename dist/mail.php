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

    $postData = file_get_contents('php://input');
    $data = json_decode($postData, true);
    $email = htmlspecialchars($data['email']);
    $name = htmlspecialchars($data['name']);
    $message = htmlspecialchars($data['message']);

    $body = $email . '<br/>' . $name . '<br/>' . $message;
    $telegramMessage = "email: $email, name: $name, message; $message";

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
    $mail->send();
    sendMessage($telegramMessage);
    echo 'Message sent!';
} catch (\Exception $exception) {
    echo 'Message could not be sent';
}

function sendMessage($message)
{
    $token = getenv('TELEGRAM_TOKEN');
    $chatId = getenv('TELEGRAM_CHAT_ID');
    $url = "https://api.telegram.org/bot$token/sendMessage?chat_id=$chatId";
    $url = $url . "&text=" . urlencode($message);
    $ch = curl_init();
    $optArray = [
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true
    ];
    curl_setopt_array($ch, $optArray);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}

