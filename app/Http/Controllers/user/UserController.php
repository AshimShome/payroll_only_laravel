<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function userIndex(){
        $user=User::all();
        return view('admin.user.user');

    }
}
