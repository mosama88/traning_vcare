<?php

namespace App\Listeners;

use Illuminate\Support\Facades\Mail;
use Illuminate\Auth\Events\Registered;
use Illuminate\Queue\InteractsWithQueue;
use App\Mail\SendRegistrationWelcomeMail;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendWelcomeMailListerner
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(Registered $event): void
    {
        Mail::to($event->user->email)->send(new SendRegistrationWelcomeMail($event->user));
    }
}