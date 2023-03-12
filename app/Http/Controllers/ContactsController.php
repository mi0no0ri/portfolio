<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Http\Requests\ContactRequest;
use App\Mail\ContactSendmail;
use Illuminate\Support\Facades\DB;

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
    public function send(ContactRequest $request) {
        $contact = $request->all();
        \Mail::to('minori.0314@minoriportfolio.sakura.ne.jp')->send(new ContactSendmail($contact));
        $request->session()->regenerateToken();
        return redirect()->route('contact');
    }
    public function contactlist() {
        $contacts = DB::table('contacts')->get();
        return view('auth.contact', compact('contacts'));
    }
}
