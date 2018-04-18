<?php

namespace App\Http\Controllers;

use Illuminate\Mail\Mailer;

class PostController extends Controller
{
    public function index(Mailer $mail){
        $mail->send('emails.auth.email',[],function ($m){
            $m->to('sheezarehman09@gmail.com','Sheeza Rehman')
                ->subject('Test Email');
        });
    }
}
