<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Http\Requests\ContactRequest;
use App\Mail\ContactReply;

class MailsController extends Controller
{
    public function send(ContactRequest $request)
    {
        $contact = $request->input('contact');
        Mail::send(new ContactReply($contact));
        return back()->withInput($request->only(['name']))
                    ->with('sent', '送信完了しました。');
    }
}
