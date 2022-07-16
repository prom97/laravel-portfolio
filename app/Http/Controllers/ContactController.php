<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request){
        $msg = $request->validate([
            'name' => 'required',
            'email' => ['required','email'],
            'subject' => 'required',
            'content' => ['required', 'min:3']
        ]);

        Mail::to('romero.pablo.wd@gmail.com')->queue(new MessageReceived($msg));

        return back()->with('status', 'Recibimos tu mensaje, te responderemos en menos de 24 horas.');
    }
}
