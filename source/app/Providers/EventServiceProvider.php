<?php

namespace App\Providers;

use App\Listeners\RegistrantEventListener;
use Laravel\Lumen\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The subscriber classes to register.
     *
     * @var array
     */
    protected $subscribe = [
        RegistrantEventListener::class,
    ];
}
