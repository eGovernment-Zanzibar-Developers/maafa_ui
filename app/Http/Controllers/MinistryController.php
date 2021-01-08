<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\{Ministry,DepartmentType,Department};

class MinistryController extends Controller
{
 
    //Get all Ministries
    public function getMinistries(){
        
        $ministries = Http::get($this->serverUrl().'Ministry')->json();
        $departmentTypes = Http::get($this->serverUrl().'DepartmentType')->json();
        $departments = Http::get($this->serverUrl().'Department')->json();
        
        return view('institutes.ministry', 
        [
            'ministries'=>$ministries,
            'departmentTypes'=>$departmentTypes,
            'departments'=>$departments
        ]);
    }

    // Create Ministry
    public function createMinistry(Request $request){


        //VALIDATION
        $request->validate([
            'ministry' => 'required'
        ]);
        $min = new Ministry();
        $min->name = $request->ministry;
        

       Http::post($this->serverUrl().'Ministry',[
            'name' => $min->name
            ])->json();
        
        return back()->with('success','Wizara imeingia');
    }  
}