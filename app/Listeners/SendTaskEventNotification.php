<?php

namespace App\Listeners;

use App\Events\TaskEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendTaskEventNotification
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
     * @param  \App\Events\TaskEvent  $event
     * @return void
     */
    public function handle(TaskEvent $event)
    {
        return $event;
    }
}
