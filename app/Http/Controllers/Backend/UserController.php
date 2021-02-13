<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::orderBy('id','desc')->paginate(5);
        return view('backend.users.index',compact('users'));
    }

    public function profile()
    {
        return view('backend.users.profile');
    }

    public function editProfile(Request $request )
    {
        $data=[
          'name'=>$request->input('name'),
          'phone'=>$request->input('phone'),
          'address'=>$request->input('address'),
        ];
        $user = auth()->user();
        $user->update($data);
        return redirect()->back();
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->back();
    }
}
