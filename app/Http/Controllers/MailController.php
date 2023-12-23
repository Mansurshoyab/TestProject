<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use mail;
use App\Mail\MailNotify;

class MailController extends Controller
{
    public function index(){
        $data = [
            'subject' => 'This is test mail',
            'body' => 'Hello This is my test mail'
        ];

        try {
            Mail::to('shoyabm58@gmail.com')->send(new MailNotify($data));
            return response()->json(['Please check your email']);
        } catch (Exception $th) {
            return response()->json(['Sorry !!']);
        }
    }
}
