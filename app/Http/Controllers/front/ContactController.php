<?php

namespace App\Http\Controllers\front;

use App\Events\ContactCreated;
use App\Http\Controllers\Controller;
use App\Mail\ContactMail;
use App\Models\Contact;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('front.contact');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'min:3'],
            'email' => ['required', 'email'],
            'phoneNumber' => ['required', 'numeric'],
            'message' => ['string', 'required']
        ]);

        // $contact = $request->all();
        // Contact::create($contact);
        $contact = Contact::create([
            'name' => $request->name,
            'phoneNumber' => $request->phoneNumber,
            'email' => $request->email,
            'message' => $request->message
        ]);

        //this event excute auto ,
        //must conaction with listener in provider EventServiceProvider
        event(new ContactCreated($contact));



        //in store process you must follow in redirct()   
        return redirect()->route('contact')->with('success', 'The Mesaage is Send!');
    }
}
