<?php

namespace App\Listeners;

use App\Events\ContactCreated;
use App\Models\User;
use App\Notifications\CreateContact;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Notification;

class SendContactCreatedNotification
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
    public function handle(ContactCreated $event): void
    {
        $contact = $event->contact;
        $users  = User::where('type', '!=', 'user')->get();
        Notification::send($users, new CreateContact($contact));
    }
}
