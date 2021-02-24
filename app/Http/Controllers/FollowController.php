<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class FollowController extends Controller
{
    public function follow(User $user){
        return auth()->user()->following()->toggle($user->profile);
    }
}
