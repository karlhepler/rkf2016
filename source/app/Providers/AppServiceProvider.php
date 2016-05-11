<?php

namespace App\Providers;

use App\RobinKessingerFestival\Mailer;
use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Mail\Mailer as IlluminateMailer;

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
        $this->app->singleton(IlluminateMailer::class, function($app) {
            $app->configure('mail');
            return $app->loadComponent('mail', 'Illuminate\Mail\MailServiceProvider', 'mailer');
        });
    }

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        if ( !function_exists('email') ) {
            function email() {
                return new Mailer(app(IlluminateMailer::class));
            }
        }
    }
}
