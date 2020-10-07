<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LanguageMiddleware
{
    private $fallbackLocale;

    public function __construct()
    {
        $this->fallbackLocale = 'ru';
    }

    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $locale = $this->getLocale($request);

        if (!Session::has('locale') || Session::get('locale') !== $locale) {
            Session::put('locale', $locale);
        }

        App::setLocale(Session::get('locale'));

        return $next($request);
    }

    private function getLocale($request): string
    {
        if (!empty($request->lang)) {
            return mb_strtolower($request->lang);
        }
        return $request->getPreferredLanguage(['en', 'ru']);
    }
}
