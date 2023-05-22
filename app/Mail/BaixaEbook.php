<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class BaixaEbook extends Mailable
{
    use Queueable, SerializesModels;

    protected $data= null;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return  $this
            ->subject('Baixar e-book')
            ->markdown('email_baixar', ['data' => $this->data,]);
    }
}
