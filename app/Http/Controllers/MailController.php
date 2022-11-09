<?php

namespace App\Http\Controllers;

use App\Mail\Signup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendMail() {
        Mail::to('robert@rjmchicago.com')->send(new Signup());
        return view('welcome');
    }
}
