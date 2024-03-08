<?php

namespace App\Listeners;

use App\Events\UserUpdated;
use Illuminate\Support\Facades\Mail;
use App\Mail\UserUpdatedEmail;

class SendUserUpdatedEmail
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
    public function handle(UserUpdated $event)
    {
        Mail::to($event->user->email)->send(new UserUpdatedEmail($event->user));
    }
}
