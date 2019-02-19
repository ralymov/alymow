<?php

namespace App;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class Email
{
    public $email;
    public $name;
    public $message;

    public function __construct(string $email, string $name, string $message)
    {
        $this->email = $email;
        $this->name = $name;
        $this->message = $message;
    }

    public function send()
    {
        try {
            $html = $this->email . '<br/>' . $this->name . '<br/>' . $this->message;
            Mail::send(array(), array(), function ($message) use ($html) {
                $message->from(env('MAIL_USERNAME'), 'Alymov Roman')
                    ->subject('New contact request')
                    ->to(env('MAIL_USERNAME'), 'Alymov Roman')
                    ->setBody($html, 'text/html');
            });
        } catch (\Exception $e) {
            Log::error($e->getMessage());
        }

    }
}