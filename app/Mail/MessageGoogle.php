<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MessageGoogle extends Mailable
{
    use Queueable, SerializesModels;

    public $data=[]; // Données pour la vue

    public function __construct(Array $user)
    {
        $this->data = $user;
        
    }

    public function build()
    {
        return $this->from("omarbanini00@gmail.com") // L'expéditeur
                    ->subject("Message d'un utilisateur") // Le sujet
                    ->view('emails.message-google'); // La vue
    }
}
