<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\DatabaseMessage; // Import DatabaseMessage

class WaitingConfirmation extends Notification
{
    use Queueable;

    public $user;
    public $order;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($user, $order)
    {
        $this->user = $user;
        $this->order = $order;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        // Return both 'mail' and 'database' channels
        return ['mail', 'database'];
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
            ->greeting('Bonjour ' . $this->user->name . ',')
            ->line('Votre commande est en attente de validation du paiement. Un email vous sera envoyé une fois la validation réalisée.')
            ->action('Visiter le site', url('/'))
            ->line('Merci d\'utiliser notre application!');
    }

    /**
     * Get the database representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toDatabase($notifiable)
    {
        return [
            'user_id' => $this->user->id,
            'user_name' => $this->user->name,
            'order_id' => $this->order->id,
            'message' => 'Nouvelle commande en attente de validation de paiement.',
            'link' => route('voyager.inscriptions.index'),
        ];
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