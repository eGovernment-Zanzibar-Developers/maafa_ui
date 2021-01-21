<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\{Ministry,Department,SysUser};
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function getUsers(){
        
        $users = Http::get($this->serverUrl().'User')->json();
        $userTypes = Http::get($this->serverUrl().'UserType')->json();
        $ministries = Http::get($this->serverUrl().'Ministry')->json();
        $departments = Http::get($this->serverUrl().'Department')->json();

        return view('users.users-list',
        [
            'users'=>$users,
            'userTypes'=>$userTypes,
            'ministries'=>$ministries,
            'departments'=>$departments
        ]);
    }

    public function getDeptById(Request $req){
        //$departments = Department::select('Id','DepartmentName')->where('MinistryId', $req->id)->get();
        $id = (int)$req->id;
        $departments = Http::get($this->serverUrl().'Department/ministry/'.$id)->json();
        return response($departments);
    }

    public function createUser(Request $request)
    {
        $user = new SysUser();

        $user->firstName = $request->firstName;
        $user->middleName = $request->middleName;
        $user->lastName = $request->lastName;
        $user->title = $request->title;
        $user->phoneNumber = $request->phoneNumber;
        $user->email = $request->email;
        $user->employeeNumber = $request->employeeNumber;
        $user->passportNumber = $request->passportNumber;
        $user->userName = $request->email;
        $user->password = (string)"smz@1234";
        $user->userTypeId = (int)$request->userType;
        $user->userStatusId = 1;
        $user->departmentId = (int)$request->department;

        $usr= Http::post($this->serverUrl().'User',[
            "firstName" => $user->firstName,
            "middleName" => $user->middleName,
            "lastName" => $user->lastName,
            "title" => $user->title,
            "phoneNumber" => $user->phoneNumber,
            "email" => $user->email,
            "employeeNumber"=> $user->employeeNumber,
            "passportNumber" => $user->passportNumber,
            "userName" => $user->userName,
            "password" => $request->password,
            "userTypeId" => $user->userTypeId,
            "userStatusId" => $user->userStatusId,
            "departmentId" => $user->departmentId
            ])->json();
            
            //dd($usr);

        return back()->with('success','');
    }

    // public function getUserById(Request $request)
    // {
    //     $user = Http::get($this->serverUrl().'User/'.$request->id)->json();
    //     return view('Users.users-list',['user'=>$user]);
    // }

    public function updateUser(Request $request)
    {
        
    }

    public function applyPermit(){
        return view('users.apply-permit');
    }
}
