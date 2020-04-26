<?php

namespace App\Listeners\User;

use App\Events\User\UserCreated;
use App\Events\User\UserLoggedin;
use App\Events\User\UserLoggedOut;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class UserEventListener
{
    public function onCreated($event)
    {
        logger('User Created');
    }

    public function onLoggedin($event)
    {
        logger('User Loggedin');
    }

    public function onLoggedOut($event)
    {
        logger('User LoggedOut');
    }

    public function subscribe($events)
    {
        $events->listen(
            UserCreated::class,
            'App\Listeners\User\UserEventListener@onCreated'
        );

        $events->listen(
            UserLoggedin::class,
            'App\Listeners\User\UserEventListener@onLoggedin'
        );

        $events->listen(
            UserLoggedOut::class,
            'App\Listeners\User\UserEventListener@onLoggedOut'
        );
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        //
    }
}
