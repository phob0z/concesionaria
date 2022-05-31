<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function dataContact(Request $request)
    {

        (!request()->nombre) ? $name='invitado': $name = request()->nombre;

        return view('contactos',compact('name'));
    }
}
