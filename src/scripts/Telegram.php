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
        $this->token = getenv('TELEGRAM_TOKEN');
        $this->chatId = getenv('TELEGRAM_CHAT_ID');
        $this->validate();
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

    private function validate(): void
    {
        if (!$this->message) {
            throw new \InvalidArgumentException(
                sprintf('Message "%s" is empty', $this->message)
            );
        }
        if (!$this->token) {
            throw new \InvalidArgumentException(
                sprintf('Token "%s" is empty', $this->token)
            );
        }
        if (!$this->chatId) {
            throw new \InvalidArgumentException(
                sprintf('ChatId "%s" is empty', $this->chatId)
            );
        }
    }
}