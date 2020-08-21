<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function create(){

        return view('contact.create');
    }

    public function store(){

        $data = request()->validate([
            'contact_name' => 'required',
            'contact_email' => 'required|email',
            'contact_message' => 'required'
        ]);

        Mail::to('test@test.com')->send(new ContactFormMail($data)); 

        return redirect('contact');
    }
}
