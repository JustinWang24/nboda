<?php

namespace App\Listeners\Page\Content;

use App\Events\Page\Content\FinishLoading;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class FinishLoadingEventListener
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
     * @param  FinishLoading  $event
     * @return void
     */
    public function handle(FinishLoading $event)
    {
        //
    }
}
