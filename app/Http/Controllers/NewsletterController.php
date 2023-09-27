<?php

namespace App\Http\Controllers;

use App\Mail\NewsletterSender;
use App\Models\Newsletter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class NewsletterController extends Controller
{
    public function store(Request $request){
        request()->validate([
            
            "email" => "required",
            
        ]);
        $data = [
            
            "email" => $request->email,
            
        ];
        Newsletter::create($data);
        Mail::to($request->email)->send(new NewsletterSender($request));
        return redirect()->back();
}
}
