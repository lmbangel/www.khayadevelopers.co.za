<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class ContactFormController extends Controller
{
    //

    public function getContactMsg(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required|email',
            'message_body' => 'required'
        ]);
        Mail::send('contact_form_email',
             array(
                 'name' => $request->get('name'),
                 'email' => $request->get('email'),
                 'messageBody' => $request->get('message_body'),
             ), function($message) use($request)
               {
                  $message->from($request['email'], $request['name']);
                  $message->to('mbangelalihle@gmail.com')->subject('Subject of Email');
               });
        return back()->with('flash_message', 'Thank you for contacting us!');
    }
}
