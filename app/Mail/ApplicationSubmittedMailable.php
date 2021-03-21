<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;


class ApplicationSubmittedMailable extends Mailable
{
    use Queueable, SerializesModels;
    public $subject = "Gracias por postularte!";
    public $fullName;
    public $job_id;
    public $jobToApply;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($fullName, $jobToApply, $job_id)
    {
        $this->fullName = $fullName;
        $this->job_id = $job_id;
        $this->jobToApply = $jobToApply;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.application-submitted');
    }
}
