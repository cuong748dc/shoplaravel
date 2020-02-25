<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function email()
    {
        $data = array('name' => "Shop laravel");
        $email = array(Auth::user()->email);

        Mail::send('mail', $data, function ($message) use ($email){
            $message->to($email)->subject
            ('Check out');
            $message->from('cuong748dc@gmail.com');
        });
        return redirect()->route('bills.index');
    }
}
