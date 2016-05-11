<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // Register mailer
        $this->app->singleton(\Illuminate\Contracts\Mail\Mailer::class, function($app) {
            $app->configure('mail');
            return $app->loadComponent('mail', 'Illuminate\Mail\MailServiceProvider', 'mailer');
        });
    }
}
