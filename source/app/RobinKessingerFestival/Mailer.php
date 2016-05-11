<?php

namespace App\RobinKessingerFestival;

use App\Registrant;
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
     * Admin email addresses
     *
     * @var array
     */
    protected $admins;

    /**
     * Consolidated mailer class that also
     * defines a global email() function
     *
     * @param Mailer $mailer
     * @param array $admins
     */
    public function __construct(IlluminateMailer $mailer, array $admins)
    {
        $this->mailer = $mailer;
        $this->admins = $admins;
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

    /**
     * Email admins, letting them know that
     * the registrant just registered
     *
     * @param  Registrant $registrant
     * @return void
     */
    public function mailAlertAdminsOfNewRegistration(Registrant $registrant)
    {
        $this->mailer->send(['text' => 'emails.registration'],
        compact('registrant'), function($message) {
            $message->to($this->admins);
            $message->subject('New contest registration!');
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
        $methodName = 'mail'.ucfirst($name);

        // If the method doesn't exist, throw an exception
        if ( !method_exists($this, $methodName) ) {
            throw new \BadMethodCallException("Neither {$name} nor {$methodName} are valid methods in " . get_class($this));
        }

        // Call the method!
        return call_user_func_array([$this, $methodName], $args);
    }
}