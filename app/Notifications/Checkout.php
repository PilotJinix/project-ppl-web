<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class Checkout extends Notification
{
    use Queueable;

    protected $action_link;
    protected $tgl;

    public function __construct($link,$ttg)
    {
        $this->action_link = $link;
        $this->tgl = $ttg;
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
                    ->from('no-reply@mail.com','no-reply')
                    ->subject('Pembayaran Menunggu Diproses')
                    ->greeting('Segera lakukan pembayaran anda sebelum masa pembauaran habis')
                    ->line('Masa Pembayaran Anda Berakhir pada')
                    ->line($this->tgl)
                    ->action('Status Pembayaran', url($this->action_link))
                    ->line('Terima kasih telah menggunakan aplikasi kami!');
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