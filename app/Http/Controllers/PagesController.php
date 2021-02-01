<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PagesController extends Controller
{
    public function dashboard()
    {
        $ministries = Http::get($this->serverUrl().'Ministry')->json();
        $users = Http::get($this->serverUrl().'User')->json();

        return view('dashboard',[
            'ministries' => $ministries,
            'users' => $users
        ]);
    }

    public function login(){
        return view('login');
    }

}
