<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{

    public function index()
    {
        $user = User::where('id',auth()->user()->id)->first();
     return view('frontend.users.profile',compact('user'));
    }

    public function login()
    {
        return view('frontend.users.login');
    }
}
