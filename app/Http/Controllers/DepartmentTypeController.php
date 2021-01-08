<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\DepartmentType;

class DepartmentTypeController extends Controller
{
    //Get all DepartmentTypes
    public function getDepartmentTypes(){
        
        $departmentTypes = Http::get($this->serverUrl().'DepartmentType')->json();
        
        return view('institutes.department-type', 
        [
            'departmentTypes'=>$departmentTypes,
        ]);
    }


     //Create Department Type
     public function createDepartmentType(Request $request){

        //VALIDATION
        $request->validate([
            'departmentType' => 'required'
        ]);

        $deptType = new DepartmentType();
        $deptType->name = $request->departmentType;

        Http::post($this->serverUrl().'DepartmentType',[
            'name' => $deptType->name
        ])->json();

        return back()->with('message');
    }
}
