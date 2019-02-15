<?php

namespace App;

require '../vendor/autoload.php';

use Dotenv\Dotenv;

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    return;
}

try {
    $dotenv = Dotenv::create(dirname(__DIR__));
    $dotenv->load();

    $postData = file_get_contents('php://input');
    $data = json_decode($postData, true);
    $emailAddress = htmlspecialchars($data['email']) ?? null;
    $name = htmlspecialchars($data['name']) ?? null;
    $message = htmlspecialchars($data['message']) ?? null;

    //$email = new Email($emailAddress, $name, $message);
    //$email->send();

    $telegramMessage = new Telegram($emailAddress, $name, $message);
    $telegramMessage->send();

    echo 'Message sent!';
} catch (\Exception $exception) {
    echo 'Message could not be sent';
}

