<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;





class mailController extends Controller
{
    
    public function send() {
        Mail::send(['text'=>'message'],['name'=>'deep'],function($message){
            $message->to('dpersonalcoach@gmail.com','To deepam kalekar')->subject('test email');
            $message->from('dpersonalcoach@gmail.com','deepam');
        });

    }
}

