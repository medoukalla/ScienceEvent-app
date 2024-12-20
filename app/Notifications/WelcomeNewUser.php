<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class WelcomeNewUser extends Notification
{
    use Queueable;

    protected $user;
    protected $order;
    protected $password;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct( $user, $order, $password )
    {
        $this->user = $user;
        $this->order = $order;
        $this->password = $password;
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
                ->greeting('Bonjour '.$this->user->name.',')
                ->line('Votre commande est en attente de validation du paiement. Un email vous sera envoyé une fois la validation réalisée.')
                ->action('Visiter le site', url('/'))
                ->line('Vous pouvez vous connecter sur le site avec vos identifiants:')
                ->line('Email: '.$this->user->email)
                ->line('Mot de passe: '.$this->password)
                ->line('N\'oubliez pas de modifier votre mot de passe une fois connecté.')
                ->line('Merci d\'utiliser notre application!');
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
