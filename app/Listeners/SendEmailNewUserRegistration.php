<?php

namespace App\Listeners;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewUserWelcomeEmail;
use App\User;

class SendEmailNewUserRegistration
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
    public function handle($event)
    {
        //$user = User::find($event->user_id);

        Mail::to('eng.manar.2016@gmail.com')->send(new NewUserWelcomeEmail());
          //Mail::to('user')->send(new NewUserWelcomeEmail());


    }
}
