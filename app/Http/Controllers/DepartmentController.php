<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\{Ministry,DepartmentType,Department};

class DepartmentController extends Controller
{
    //Get all Departments
    public function getDepartments(){
        
        $ministries = Http::get($this->serverUrl().'Ministry')->json();
        $departmentTypes = Http::get($this->serverUrl().'DepartmentType')->json();
        $departments = Http::get($this->serverUrl().'Department')->json();
        
        return view('institutes.department', 
        [
            'ministries'=>$ministries,
            'departmentTypes'=>$departmentTypes,
            'departments'=>$departments
        ]);
    }

    public function createDepartment(Request $request){
        //Validation
        $request->validate([
            'ministryId' => 'required',
            'departmentId' => 'required',
            'department' => 'required',
        ]);

       
        $dept = new Department();

        $dept->departmentName = $request->department;
        $dept->ministryId = (int)$request->ministryId;
        $dept->departmentTypeId = (int)$request->departmentId;

        $departments = Http::post($this->serverUrl().'Department',[
            'departmentName' => $dept->departmentName,
            'ministryId' => $dept->ministryId,
            'departmentTypeId' => $dept->departmentTypeId
        ])->json();
                
        return back()->with('success','Saved');
    }
}
