<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\{Ministry,Department};

class UsersController extends Controller
{
    public function getUsers(){
        
        $users = Http::get($this->serverUrl().'User')->json();
        $ministries = Http::get($this->serverUrl().'Ministry')->json();
        $departments = Http::get($this->serverUrl().'Department')->json();

        return view('users.users-list',
        [
            'users'=>$users,
            'ministries'=>$ministries,
            'departments'=>$departments
        ]);
    }

    public function getDeptById($id){
        $departments = Http::get($this->serverUrl().'Department'.$id)->json();
        return response()->json($departments);
    }
}
