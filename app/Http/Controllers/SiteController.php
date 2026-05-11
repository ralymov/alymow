<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;

class SiteController extends Controller
{
    public function index()
    {
        return view('index', [
            'locale' => App::getLocale(),
        ]);
    }
}
