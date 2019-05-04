<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class AccessToCompanyGranted extends Mailable
{
    use Queueable, SerializesModels;

    public $companies;

    public function __construct($companies)
    {
        $this->companies = $companies;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('New access previliges have been assigned to you')->markdown('emails.access-permissions');
    }
}
