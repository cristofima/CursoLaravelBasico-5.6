<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

use App\Producto;

class ProductoEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $nombre;
    public $fecha;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Producto $prod)
    {
        $this->nombre=$prod->nombreproducto;
        $this->fecha=date('Y-m-d H:i:s');
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.delete_producto')
        ->subject('Producto Eliminado');
    }
}
