<?php

namespace App\Notifications\cancel;

use App\Mail\cancel\CustomerNotificationCancel;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Notification;

class ToCustomerNotificationsCancel extends Notification implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
  
    public $freelance,$customer;

    public $job;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct( $freelance, $customer, $job)
    {
        $this->freelance = $freelance;
        $this->customer = $customer;
        $this->job = $job;
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
        return (new CustomerNotificationCancel($this->freelance, $this->customer , $this->job))
                            ->to($notifiable->email);
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
