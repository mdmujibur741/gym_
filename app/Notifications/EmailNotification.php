<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Inertia\Inertia;

class EmailNotification extends Notification
{
    use Queueable;

  
    public function __construct()
    {
        //
    }


    public function via($notifiable)
    {
        return ['mail'];
    }

  
    public function toMail($notifiable)
    {
        // return (new MailMessage)->line('The introduction to the notification.')->line('This Is MUjiBur Hundred Email Testing')->line('Thank you for using our application!');
        return (new MailMessage)->view('mailBody');
    }

  
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
