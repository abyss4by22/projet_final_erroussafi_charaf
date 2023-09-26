<?php

namespace App\Http\Controllers;

use App\Mail\DemoMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index(){
        return view("contact");
    }

    public function sendEmail(Request $request)
{
    $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'message' => 'required',
    ]);

    $data = [
        'name' => $request->name,
        'email' => $request->email,
        'message' => $request->message,
    ];

    // Mail::to('admin@example.com')->send(new ContactFormMail($data));

    return redirect()->back()->with('success', 'Email sent successfully!');
}

public function send(){
    $user = Auth::user();
    $DemoMail = [
        "email"=>$user->email,
        "name"=>$user->name,
    ];
    Mail::to($user->email)->send(new DemoMail($DemoMail));
    return redirect()->back();
}
}
