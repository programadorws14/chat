<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ChatController extends Controller
{
    public function index()
    {   
        if (empty(Session::get('user'))) {
            return redirect()->route('home');
        }
        return view('chat');
    }

    public function sairdoChat()
    {
        Session::forget('user');
        return  redirect()->route('home');
    }
}
