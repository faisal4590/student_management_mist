<?php

namespace App\Listeners;

use App\Events\UserLoginEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendWelcomeMessageToUserListener
{
    public function __construct()
    {
        //
    }

    public function handle(UserLoginEvent $event)
    {
        return 'Welcome' . $event->user->name;
    }
}
