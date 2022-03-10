<?php

namespace App\Listeners;

use App\Events\PostPublished as PostPublishedEvent;
use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class PostPublished
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\PostPublished  $event
     * @return void
     */
    public function handle(PostPublishedEvent $event)
    {
        $users = User::all();

        foreach ($users as $user) {
            Mail::to($user)->queue(new \App\Mail\PostPublished($event->post, $user));
        }
    }
}
