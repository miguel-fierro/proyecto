<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
class PostContacts extends Controller
{
    public function saveContact(Request $request)
    {
        $booking = new Contact;
        $booking->nombre = $request->reservaNombre;
        $booking->correo = $request->reservaCorreo;
        $booking->numero = $request->reservaNumero;
        $booking->fecha = $request->reservaFecha;
        $booking->descripcion = $request->reservaDescripcion;
        $booking->save();
    }
}
