<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function index($user)
    {
        //dd($user);
        return view('profiles/index',[
            'user'=> User::findOrFail($user),
        ]);
    }
}