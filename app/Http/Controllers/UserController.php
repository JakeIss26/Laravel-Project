<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('index', compact('users'));
    }

    public function registration() {
        return view('registration');
    }

    public function store(Request $request) {
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->save();
        echo "Registration";
        return $user;
    }

    public function create() {
        $user = new User();

        $user->name = 'Somebody';
        $user->email = "somebody@gmail.com";
        $user->password = "12345";
        $user->save();
        return $user;
    }

}
