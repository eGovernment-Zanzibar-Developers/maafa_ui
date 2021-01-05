<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UsersController extends Controller
{
    public function getUsers(){
        
        $users = Http::get($this->serverUrl().'User')->json();

        return view('users.users-list',['users'=>$users]);
        
    }
}
