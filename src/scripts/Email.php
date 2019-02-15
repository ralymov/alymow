<?php

namespace App;

use PHPMailer\PHPMailer\PHPMailer;

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
        $this->validate();
        $this->isValidEmail();
    }

    public function send()
    {
        $body = $this->email . '<br/>' . $this->name . '<br/>' . $this->message;
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
        return $mail->send();
    }

    private function validate(): void
    {
        if (!$this->email) {
            throw new \InvalidArgumentException(
                sprintf('Email "%s" is empty', $this->email)
            );
        }
        if (!$this->message) {
            throw new \InvalidArgumentException(
                sprintf('Message "%s" is empty', $this->message)
            );
        }
        if (!$this->name) {
            throw new \InvalidArgumentException(
                sprintf('Name "%s" is empty', $this->name)
            );
        }
    }

    private function isValidEmail(): void
    {
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            throw new \InvalidArgumentException(
                sprintf('"%s" is not a valid email address', $this->email)
            );
        }
    }
}