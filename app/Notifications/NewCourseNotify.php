<?php

namespace App\Notifications;

use App\Models\Courses;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\BroadcastMessage;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewCourseNotify extends Notification implements ShouldBroadcast
{
    use Queueable;
    public $course;


    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Courses $course)
    {
        $this->course = $course;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database','broadcast'];
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
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');
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
            'id'=>$this->course->id,
            'name'=>$this->course->name,
            'statues'=>$this->course->status,
            'user'=>$this->course->user->name,
        ];
    }
    public function toBroadcast($notifiable)
    {
        return new BroadcastMessage([
            'id'=>$this->course->id,
            'name'=>$this->course->name,
            'statues'=>$this->course->status,
            'user'=>$this->course->user->name,
            'count'=>$notifiable->unreadNotifications()->count(),


        ]);

    }
}
