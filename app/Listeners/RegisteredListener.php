<?php

namespace App\Listeners;

use App\Events\RegisterEvent;
use App\Events\RegisteredEvent;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Notification;
use App\Notifications\welcome\WelcomeNotification;

class RegisteredListener implements ShouldQueue
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
     * @param  \App\Events\RegisterEvent  $event
     * @return void
     */
    public function handle(RegisteredEvent $event)
    {
        // dd("Event and Listerner work fine");
        Notification::send($event->user, new WelcomeNotification($event->user));

    }
}
