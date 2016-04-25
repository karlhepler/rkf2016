<?php

namespace App\Events;

use App\Registrant;

class RegistrantRegistered extends Event
{
    public $registrant;
    
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Registrant $registrant)
    {
        $this->registrant = $registrant;
    }
}
