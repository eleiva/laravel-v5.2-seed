<?php

namespace LaravelBootstrapSeed\Listeners;

use LaravelBootstrapSeed\Events\SomeEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use LaravelBootstrapSeed\User;
use LaravelBootstrapSeed\AccessLog;
use LaravelBootstrapSeed\Events\LoginEvent;
use Log;

class LoginListener
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
     * @param  SomeEvent  $event
     * @return void
     */
    public function handle(LoginEvent $event)
    {
        Log::info('Event Handler - Registering Login of the user id #: '.$event->user->id);
        AccessLog::create(['user_id' => $event->user->id]);
    }
}
