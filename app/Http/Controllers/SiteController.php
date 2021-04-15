<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;

class SiteController extends Controller
{
    public function index()
    {
        $locales = [
            [
                'code' => 'ru',
                'name' => 'Русский',
                'flag' => '/images/ru-flag.svg',
            ],
            [
                'code' => 'en',
                'name' => 'English',
                'flag' => '/images/en-flag.svg',
            ],
        ];

        return view('index', [
            'locale' => App::getLocale(),
            'locales' => $locales
        ]);
    }

    public function veeam()
    {
        $locales = [
            [
                'code' => 'ru',
                'name' => 'Русский',
                'flag' => '/images/ru-flag.svg',
            ],
            [
                'code' => 'en',
                'name' => 'English',
                'flag' => '/images/en-flag.svg',
            ],
        ];

        return view('veeam', [
            'locale' => App::getLocale(),
            'locales' => $locales
        ]);
    }
}
