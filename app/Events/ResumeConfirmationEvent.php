<?php

namespace App\Events;

use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ResumeConfirmationEvent
{
    use Dispatchable, SerializesModels;

    public $mail;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($mail)
    {
        $this->mail = $mail;
    }
}
