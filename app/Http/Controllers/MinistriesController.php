<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Ministry;

class MinistriesController extends Controller
{
 
    //VIEW ALL MINISTRIES
    public function getInstitutes(){
        
        $ministries = Http::get($this->serverUrl().'Ministry')->json();
        $departmentTypes = Http::get($this->serverUrl().'DepartmentType')->json();
        $departments = Http::get($this->serverUrl().'Department')->json();
        
        return view('ministry.institute-config', 
        [
            'ministries'=>$ministries,
            'departmentTypes'=>$departmentTypes,
            'departments'=>$departments
        ]);
    }


    public function createMinistry(Request $request){


        $min = new Ministry();
        $min->name = $request->ministry;
        
        //VALIDATION
        $request->validate([
            'ministry' => 'required'
        ]);

       Http::post($this->serverUrl().'Ministry',
            [
            'name' => $min->name
            ])->json();
        
        return back()->with('message');
    }

    
}