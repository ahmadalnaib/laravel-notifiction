<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class UserNotify extends Notification implements ShouldQueue
{
    use Queueable;
    // public $data;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
        // $data pass in __construct
        // $this->data = $data;

    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail','database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)->view(
              'email'
            //   ,[$this->data['title']],
            // ,['data'=>$this->data]
            
        )  ->subject('Notification Subject');
                    // ->line('The introduction to the notification.')
                    // ->greeting('Hello User')
                    // ->action('Notification Action', url('/'))
                    // ->line('Thank you for using our application!'.$this->data['title']);
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
            'data' => 'this is my first notification'
        ];
    }
}
