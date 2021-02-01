<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\{HazardCategory,HazardSource,HazardType};

class HazardConfigController extends Controller
{
    //hazard category
    public function gethazardcategories()
    {
        $hazardCategories = Http::get($this->serverUrl().'HazardCategory')->json();
       
        return view('hazards.hazard-category',
        [
            'hazardCategories'=>$hazardCategories
        ]);
    }

    public function addhazardcategories(Request $req)
    {
        $hazardCategory = new HazardCategory();
        $hazardCategory->name = $req->category;

        $hazardCategories = Http::post($this->serverUrl().'HazardCategory',[
            'name' => $hazardCategory->name
        ])->json();

        $notification = array(
            'message' => 'Hazard category added successfully!',
            'alert-type' => 'success'
        );
       
        return redirect('hazard-category')->with($notification);
    }
    //end hazard category

    //Hazard Type    
    public function gethazardTypes()
    {
         $hazardTypes = Http::get($this->serverUrl().'HazardType')->json();
         
         return view('hazards.hazard-type',
         [
             'hazardTypes'=>$hazardTypes
         ]);
    }

    public function addHazardType(Request $req)
    {
        $hazardType = new HazardType();
        $hazardType->name = $req->type;
        
        Http::post($this->serverUrl().'HazardSource',
        [
            'name' => $hazardSource->name
        ])->json();

        $notification = array(
            'message' => 'Hazard type added successfully!',
            'alert-type' => 'success'
        );

        return redirect('hazard-source')->with($notification);
    }
    //end hazard type

    //Hazard Source  
    public function gethazardSources()
    {
        $hazardSources = Http::get($this->serverUrl().'HazardSource')->json();

        return view('hazards.hazard-source',
        [
            'hazardSources'=>$hazardSources
        ]);
    }

    public function addHazardSource(Request $req)
    {
        $hazardSource = new HazardSource();
        $hazardSource->name = $req->source;
        
        Http::post($this->serverUrl().'HazardSource',
        [
            'name' => $hazardSource->name
        ])->json();

        $notification = array(
            'message' => 'Hazard category added successfully!',
            'alert-type' => 'success'
        );

        return redirect('hazard-source')->with($notification);
    }
}
