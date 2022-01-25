<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Email_message;

class MessagesController extends Controller
{
    function index(){
        $home='';
        $contact_us='';
        $messages= Email_message::get();
        return view('messages',compact('home','contact_us','messages'));
    }
}
