<?php

namespace App\Listeners;

use App\Events\ResumeConfirmationEvent;
use App\Mail\ResumeConfirmationEmail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendResumeConfirmationEmail
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(ResumeConfirmationEvent $event)
    {
        Mail::to($event->mail['email'])->send(new ResumeConfirmationEmail($event->mail));
    }
}
