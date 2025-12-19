<?php

namespace App\Providers;


use Illuminate\Support\ServiceProvider;
use BezhanSalleh\LanguageSwitch\LanguageSwitch;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        LanguageSwitch::configureUsing(function (LanguageSwitch $switch) {
            $switch
                ->locales(['ar','en']); // also accepts a closure
        });
      $locale = session('locale', config('app.locale'));
    \Illuminate\Support\Facades\App::setLocale($locale);

      
    }
    protected $middlewareGroups = [
    'web' => [
        // ...
        \App\Http\Middleware\SetLocale::class,
    ],
];
}
