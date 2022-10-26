<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactReply;


class ContactController extends Controller
{
    //
    public function index(){
        return view("index");
    }

    public function send(Request $request){
        $data = $request->all();
        Mail::to("test@test.com")->send(new ContactReply($data));
        return view("confirm");
    }
}
