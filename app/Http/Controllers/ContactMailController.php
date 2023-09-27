<?php

namespace App\Http\Controllers;

use App\Mail\ContactMailSender;
use App\Models\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactMailController extends Controller
{

    public function index(){
        $contactMails = ContactMail::all();
        return view("admin.mailbox" , compact("contactMails"));
    }

    public function store(Request $request){
        request()->validate([
            "name" => "required",
            "email" => "required",
            "subject" => "required",
            "message" => "required",
        ]);

        $data = [
            "name" => $request->name,
            "email" => $request->email,
            "subject" => $request->subject,
            "message" => $request->message,
        ];

        ContactMail::create($data);
        Mail::to($request->email)->send(new ContactMailSender($request));
        return redirect()->back();
    }
}
