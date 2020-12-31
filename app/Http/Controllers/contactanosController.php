<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\contactanoMailable;
use Illuminate\Support\Facades\Mail;


class contactanosController extends Controller
{
        //GET
        public function index(){
            return view('contactanos.index');
        }

        //POST
        public function store(Request $request){

            $request->validate([
                'name'=>'required',
                'correo'=>'required|email',
                'mensaje'=>'required',
            ]);

            $correo = new contactanoMailable($request->all());
            Mail::to('warlinsano@gmail.com')->send($correo);

            return Redirect()->route('contactanos.index')->with('info', 'Mensaje enviado...');
        }
}
