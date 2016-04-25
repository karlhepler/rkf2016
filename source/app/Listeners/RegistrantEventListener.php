<?php

namespace App\Listeners;

use App\Events\ExampleEvent;
use App\Events\RegistrantRegistered;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class RegistrantEventListener
{
    /**
     * The registrant just registered!
     *
     * @param  RegistrantRegistered $event
     * @return void
     */
    public function onRegistrantRegistered(RegistrantRegistered $event)
    {
        //
    }

    /**
     * Register the listeners for the subscriber.
     *
     * @param  Illuminate\Events\Dispatcher  $events
     */
    public function subscribe($events)
    {
        $events->listen(RegistrantRegistered::class, static::class.'@onRegistrantRegistered');
    }
}
