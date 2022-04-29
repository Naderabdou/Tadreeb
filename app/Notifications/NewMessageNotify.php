<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewMessageNotify extends Notification
{
    use Queueable;
    public $data;
    public $users;
    public $course;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($data,$users,$course)
    {
        $this->data = $data;
        $this->users=$users;
        $this->course=$course;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Hey :' .$this->users->name )
            ->line('Message : '.$this->data) //Send with post title
            ->action('To complete the course' , url(route('user.subscription.show' , $this->course->id))) //Send with post url
            ->line('Thank you for being with us!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
