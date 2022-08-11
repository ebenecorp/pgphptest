<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Get comments of User from Database by User's ID.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    // a
    public function getUserComments(User $user)
    {
        return view('index', compact('user'));
    }

    public function appendUserComments(){
        
    }
}
