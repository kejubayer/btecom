<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\User;

class UserController extends Controller
{

    public function index()
    {
        $user = User::where('id', auth()->user()->id)->with('order')->first();
        $orders=$user->order;
        return view('frontend.users.profile', compact('user','orders'));
    }

    public function login()
    {
        return view('frontend.users.login');
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('home');
    }
}
