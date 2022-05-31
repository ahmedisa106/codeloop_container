<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendEmailToCompany extends Mailable
{
    use Queueable, SerializesModels;


    public $company;
    public $message;

    public function __construct($company, $message)
    {
        $this->company = $company;
        $this->message = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $data['company'] = $this->company;
        $data['message'] = $this->message;
        return $this->markdown('admin\pages\companies\mail', compact('data'))->subject(config('app.name'));
    }
}
