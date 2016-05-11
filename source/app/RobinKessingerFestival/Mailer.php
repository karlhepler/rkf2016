<?php

namespace App\RobinKessingerFestival;

use Illuminate\Contracts\Mail\Mailer as IlluminateMailer;

class Mailer
{
    /**
     * Illuminate Mailer
     *
     * @var \Illuminate\Contracts\Mail\Mailer
     */
    protected $mailer;

    /**
     * Consolidated mailer class that also
     * defines a global email() function
     *
     * @param Mailer $mailer
     */
    public function __construct(IlluminateMailer $mailer)
    {
        $this->mailer = $mailer;
    }

    ////////////////////
    // PUBLIC METHODS //
    ////////////////////

    /**
     * Send a test email to the given email address
     *
     * @return void
     */
    public function mailTest($emailAddress)
    {
        $this->mailer->raw('Email for RKF works!',
        function($message) use ($emailAddress) {
            $message->to($emailAddress);
            $message->subject('Email from RKF works!');
        });
    }

    ///////////////////
    // MAGIC METHODS //
    ///////////////////

    /**
     * Handle calling mail methods
     *
     * @param  string $name
     * @param  array  $args
     * @return mixed
     */
    public function __call($name, array $args)
    {
        // Get the method name
        $methodName = 'mail'.ucfirst(strtolower($name));

        // If the method doesn't exist, throw an exception
        if ( !method_exists($this, $methodName) ) {
            throw new \BadMethodCallException("Neither {$name} nor {$methodName} are valid methods in " . get_class($this));
        }

        // Call the method!
        return call_user_func_array([$this, $methodName], $args);
    }
}