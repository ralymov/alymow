<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\App;
use Closure;
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
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $lang = $request->lang;
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
            $code = mb_strtolower($request->lang);
            return $code ?? $this->fallbackLocale;
        }
        return $this->fallbackLocale;
    }
}
