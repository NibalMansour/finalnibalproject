<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class SetLocale
{
    public function handle($request, Closure $next)
    {
        // قراءة اللغة من الـ session أو اللغة الافتراضية من config/app.php
        $locale = Session::get('locale', config('app.locale'));

        // ضبط اللغة للتطبيق
        App::setLocale($locale);

        return $next($request);
    }
}
