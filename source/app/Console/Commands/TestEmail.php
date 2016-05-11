<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Contracts\Mail\Mailer;

class TestEmail extends Command
{
    protected $signature = 'test:email
                            {--to= : The email address to which you will send the test email}';
    protected $description = 'Test sending an email to make sure emailing works';
    protected $mailer;

    function __construct(Mailer $mailer)
    {
        parent::__construct();

        $this->mailer = $mailer;
    }

    public function handle()
    {
        $this->enforceRequiredOptions();

        $this->info('Sending...');
        $this->sendTestEmailTo($this->option('to'));
        $this->info('Sent to ' . $this->option('to') . '!');
    }

    /**
     * Make sure all required options are there.
     * If not, then print errors & die
     *
     * @return void
     */
    protected function enforceRequiredOptions()
    {
        // Make sure there is a "to" address
        if ( is_null($this->option('to')) ) {
            $this->error('You must supply a "to" email address: --to=email@address.com');
            die;
        }
    }

    /**
     * Send a test email to the given email address
     *
     * @param  string $emailAddress
     * @return void
     */
    protected function sendTestEmailTo($emailAddress)
    {
        $this->mailer->raw('Email for RKF works!',
        function($message) use ($emailAddress) {
            $message->to($emailAddress);
            $message->subject('Email from RKF works!');
        });
    }
}