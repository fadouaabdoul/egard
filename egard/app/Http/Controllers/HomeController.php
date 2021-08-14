<?php

namespace App\Http\Controllers;


use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index(){

        return view('home');
    }

    public function contact(Request $request){

        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'message' =>$request->message

        ];

        Mail::to('fadwaabdoul@gmail.com')->send(new ContactMail($details));
        return back()->with('conatact_sent','Your message has been sent successfully, thank you.');

    }
}
