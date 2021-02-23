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
    public function edit(\App\Models\User $user){
        return view('profiles/edit',compact($user));
    }
    public function update(\App\Models\User $user){
        return view('profiles/edit',compact($user));
    }
}
