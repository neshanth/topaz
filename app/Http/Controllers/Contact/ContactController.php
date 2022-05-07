<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view("Contact.contact");
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'body' => 'required'
        ]);

        Mail::to("admin@topazfoundation.org.in")->send(new ContactMail($request->name, $request->email, $request->subject, $request->phone, $request->body));

        return redirect()->back()->with("success", "Thank you for getting in touch with us");
    }
}
