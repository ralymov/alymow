<?php

namespace App;

class Telegram
{
    public $message;
    public $token;
    public $chatId;

    public function __construct(string $email, string $name, string $message)
    {
        $this->message = "email: $email, name: $name, message; $message";
        $this->token = env('TELEGRAM_TOKEN');
        $this->chatId = env('TELEGRAM_CHAT_ID');
    }

    public function send()
    {
        $url = "https://api.telegram.org/bot$this->token/sendMessage?chat_id=$this->chatId";
        $url = $url . "&text=" . urlencode($this->message);
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
}