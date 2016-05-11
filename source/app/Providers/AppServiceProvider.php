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
        // Register illuminate mailer
        $this->app->singleton(IlluminateMailer::class, function($app) {
            $app->configure('mail');
            return $app->loadComponent('mail', 'Illuminate\Mail\MailServiceProvider', 'mailer');
        });

        // Register custom mailer
        $this->app->singleton(Mailer::class, function($app) {
            $app->configure('admins');
            return new Mailer(
                $app[IlluminateMailer::class],
                $app['config']['admins']
            );
        });
    }
}
