<?php

namespace App\Http\Controllers;

use App\Email;
use App\Telegram;
use Illuminate\Http\Request;

class MailController extends Controller
{
    public function index(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'name' => 'required|max:255',
            'message' => 'required|max:1024',
        ]);

        $emailAddress = $request->input('email');
        $name = $request->input('name');
        $message = $request->input('message');

        $telegramMessage = new Telegram($emailAddress, $name, $message);
        $telegramMessage->send();

        $email = new Email($emailAddress, $name, $message);
        $email->send();
    }
}