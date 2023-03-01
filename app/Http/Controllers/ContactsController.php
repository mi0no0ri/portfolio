<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Http\Requests\ContactRequest;

class ContactsController extends Controller
{
    public function create(ContactRequest $request){
        $contact = Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'title' => $request->title,
            'contact' => $request->contact,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        return redirect()->route('contact');
    }
}
