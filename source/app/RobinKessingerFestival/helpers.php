<?php

use App\RobinKessingerFestival\Mailer;

if ( !function_exists('email') ) {
    function email() {
        return app(Mailer::class);
    }
}