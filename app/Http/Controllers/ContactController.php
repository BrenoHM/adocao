<?php

namespace App\Http\Controllers;

use App\Mail\SendEmailContactForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('site.contacts');
    }

    public function send(Request $req)
    {
        Mail::to('emaildobrenomol@gmail.com')->send(new SendEmailContactForm($req->all()));

        return ['send' => 'ok'];
    }
}
