<?php

namespace App\Http\Controllers;

use App\Mail\MailContact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailContactController extends Controller
{
    public function show(Request $request) 
    {
        $feedback = null;
        return view('pages/contact', compact('feedback'));
    }
    
    public function send(Request $request) 
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'message' => 'required',
        ]);

        
        // send mail with request values
        $mail = new MailContact($request->all());
        Mail::to($request['email'])->send($mail);
        
        // check for sending errors
        if (!Mail::failures()) {
            $feedback = "Votre message a bien été envoyé";
        } else {
            $feedback = "Votre message n'a pas pu s'envoyer";
        }
        return view('pages/contact', compact('feedback'));
    }
}
