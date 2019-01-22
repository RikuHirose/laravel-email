<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;
use App\Mail\SendMail;

class mailController extends Controller
{
    public function send()
    {
      // Mail::send(['text' => 'mail'], ['name' => 'Starthank'], function($message) {
      //   $message->to('rikuparkour9@gmail.com', 'To Riku')->subject('test email');
      //   $message->from('rikuparkour9@gmail.com', 'Riku');
      // });

      Mail::send(new SendMail());
    }

    public function email()
    {
      return view('email');
    }
}
