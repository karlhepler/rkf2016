<?php

use App\RobinKessingerFestival\Mailer;
use Illuminate\Contracts\Mail\Mailer as IlluminateMailer;

if ( !function_exists('email') ) {
    function email() {
        return new Mailer(app(IlluminateMailer::class));
    }
}