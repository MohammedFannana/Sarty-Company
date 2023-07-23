<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Models\Contact;

class CreateContact extends Notification
{
    use Queueable;

    protected $contact;


    /**
     * Create a new notification instance.
     */
    public function __construct(Contact $contact)
    {
        $this->contact = $contact;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail', 'database'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject('New Message # ' . $this->contact->id)
            ->from($this->contact->email)
            ->line("The Email is " . $this->contact->email)
            ->line("The phone number is " . $this->contact->phoneNumber)
            ->line("A new Message created by " .  $this->contact->name)
            ->line($this->contact->message);
    }

    public function toDatabase(object $notifiable)
    {
        return [
            'body' => "New Mesaage From {$this->contact->name}",
            'icon' => "far fa-comments",
            'url'  => url('/dashboard'),
            'contact_id' => $this->contact->id,
        ];
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
