<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\ContactMail;

class MailController extends Controller
{
    public function index()
    {
        Mail::to('ulisesvs21@gmail.com')->send(new NotifyMail());
 
        if (Mail::failures()) {
           return response()->Fail('Sorry! Please try again latter');
        }else{
           return response()->success('Great! Successfully send in your mail');
         }
    }
}
