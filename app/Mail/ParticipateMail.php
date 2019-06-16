<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ParticipateMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $nom;
    protected $civilite;
    protected $numero;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($nom, $civilite,$numero)
    {
        $this->nom = $nom;
        $this->civilite = $civilite;
        $this->numero = $numero;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mailTemplate')
            ->subject('Votre participation au GRAND JEU ÉTÉ est bien prise en compte')
            ->with([
                'nom' => $this->nom,
                'civilite' => $this->civilite,
                'numero' => $this->numero,
            ]);
    }
}
