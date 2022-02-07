<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function homePage()
    {
        $user = User::with('languages','softwares','hobbys','academics')->first();
        //dd($user);
        return view('index', compact('user'));

    }
}
