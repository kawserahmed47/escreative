<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class MailController extends Controller
{
    public function sendMail(){

        $subject = "Test Mail";
        $details = "Mail Body Test Message";


        \Mail::to("kawserahmed47@gmail.com")->send(new \App\Mail\EsMail($details, $subject));

        dd("Email is Sent.");
    }
}
