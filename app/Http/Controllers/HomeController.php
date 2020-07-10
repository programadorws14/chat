<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function index()
    {
        if (!empty(Session::get('user'))) {
            return redirect()->route('chat.home');
        }
        
        return view('home');
    }

    public function store(request $request)
    {
        $user = User::whereCpf($request->cpf)->first();
        if (!empty($user)) {
            Session::put('user', $user);
            return redirect()->route('chat.home');
        }

        $user = User::create($request->except('_token'));
        Session::put('user', $user);
        return redirect()->route('chat.home');
    }
}
