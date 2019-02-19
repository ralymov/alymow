<?php

Route::get('/', function () {
    return view('index');
});

Route::post('mail', 'MailController@index');
