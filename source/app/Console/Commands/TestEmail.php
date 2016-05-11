<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class TestEmail extends Command
{
    protected $signature = 'test:email {--to= : The email address to which you will send the test email}';
    protected $description = 'Test sending an email to make sure emailing works';

    public function handle()
    {
        list($to) = $this->enforceRequiredOptions();

        $this->info('Sending...');
        email()->test($to);
        $this->info("Sent to {$to}!");
    }

    /**
     * Make sure all required options are there.
     * If not, then print errors & die
     *
     * @return array
     */
    protected function enforceRequiredOptions()
    {
        // Make sure there is a "to" address
        if ( is_null($this->option('to')) ) {
            $this->error('You must supply a "to" email address: --to=email@address.com');
            die;
        }

        return [
            $this->option('to')
        ];
    }
}