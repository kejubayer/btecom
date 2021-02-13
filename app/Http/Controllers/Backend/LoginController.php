<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('backend.login');
    }

    public function submitLogin(Request $request)
    {
        $cred=$request->only('email','password');
        if (Auth::attempt($cred)){
            return redirect()->route('admin.dashboard');
        }

    }

}
