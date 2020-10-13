<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
    public function index($user)
    {
        $user=User::findorfail($user);
        return view('profile.index',['user' => $user,]);
    }
}
