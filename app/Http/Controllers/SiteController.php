<?php

namespace App\Http\Controllers;

class SiteController extends Controller
{
    public function index()
    {
        $locales = [
            [
                'code' => 'RU',
                'name' => 'Русский',
                'flag' => '/images/ru-flag.svg',
            ],
            [
                'code' => 'EN',
                'name' => 'English',
                'flag' => '/images/en-flag.svg',
            ],
        ];
        return view('index', [
            'locale' => 'RU',
            'locales' => $locales
        ]);
    }
}
