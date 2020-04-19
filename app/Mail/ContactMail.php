<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;
    public $nom;
    public $mail;
  

    public function __construct($name, $email)
    {
        $this->nom = $name;
        $this->mail = $email;

    }

    public function build()
    {
        return $this->from('rmz@hotmail.com')->subject("Message d'un utilisateur")->view('mail', compact('nom', 'mail'));
    }

}
