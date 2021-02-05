<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Crypt;
use App\Models\Hazard;

class HazardController extends Controller
{
    public function getHazards()
    {
        try {
            $hazards = Http::get($this->serverUrl().'Hazard')->json();
    
            return view('hazards.hazard-list',
            [
                'hazards'=>$hazards
            ]);
        } catch (\Throwable $th) {
            return view('not-found');
        }
    }

    public function getHazardById($id)
    {
        $decryptId = Crypt::decrypt($id);
        try {
            $hazard = Http::get($this->serverUrl().'Hazard/'.$decryptId)->json();
            $peoples = Http::get($this->serverUrl().'AffectedPeople/count/'.$decryptId)->json();
            $properties = Http::get($this->serverUrl().'AffectedProperty/count/'.$decryptId)->json();
            $affPeoples = Http::get($this->serverUrl().'AffectedPeople/hazard/'.$decryptId)->json();
            $affProperties = Http::get($this->serverUrl().'AffectedProperty/hazard/'.$decryptId)->json();
           $genders = Http::get($this->serverUrl().'Gender')->json();
    
            return view('hazards.hazard-affected',
            [
                'hazard'=>$hazard,
                'peoples' => $peoples,
                'properties' => $properties,
                'affPeoples' => $affPeoples,
                'affProperties' => $affProperties,
                'genders' => $genders

            ]);
        } catch (\Throwable $th) {
            return '<h1>Mfumo haupatikani utarudi baada mda mchache</h1>';
        }
    }

    public function getHazardUpdateById($id)
    {
        $decryptId = Crypt::decrypt($id);
        try {

    
            $hazard = Http::get($this->serverUrl().'Hazard/'.$decryptId)->json();
            $hazardTypes = Http::get($this->serverUrl().'HazardType')->json();
            $hazardCategories = Http::get($this->serverUrl().'HazardCategory')->json();
            $hazardSources = Http::get($this->serverUrl().'HazardSource')->json();
            $reporterTypes = Http::get($this->serverUrl().'ReporterType')->json();
            $districts = Http::get($this->serverUrl().'District')->json();
           
    
            return view('hazards.update-hazard',
            [
                'hazardTypes'=>$hazardTypes,
                'hazardCategories'=>$hazardCategories,
                'hazardSources'=>$hazardSources,
                'reporterTypes'=>$reporterTypes,
                'districts'=>$districts,
                'hazard'=>$hazard
            ]);
    
            // return view('hazards.update-hazard',
            // [
            //     'hazard'=>$hazard,
                
            // ]);
        } catch (\Throwable $th) {
            return view('not-found');
        }
    }

    public function getResource()
    {
        try {
            $hazardTypes = Http::get($this->serverUrl().'HazardType')->json();
            $hazardCategories = Http::get($this->serverUrl().'HazardCategory')->json();
            $hazardSources = Http::get($this->serverUrl().'HazardSource')->json();
            $reporterTypes = Http::get($this->serverUrl().'ReporterType')->json();
            $districts = Http::get($this->serverUrl().'District')->json();
    
            return view('hazards.add-hazard',
            [
                'hazardTypes'=>$hazardTypes,
                'hazardCategories'=>$hazardCategories,
                'hazardSources'=>$hazardSources,
                'reporterTypes'=>$reporterTypes,
                'districts'=>$districts
            ]);
            
        } catch (\Throwable $th) {
            return;
        }
    }

    public function getResourceUpdate()
    {
        try {
            $hazardTypes = Http::get($this->serverUrl().'HazardType')->json();
            $hazardCategories = Http::get($this->serverUrl().'HazardCategory')->json();
            $hazardSources = Http::get($this->serverUrl().'HazardSource')->json();
            $reporterTypes = Http::get($this->serverUrl().'ReporterType')->json();
            $districts = Http::get($this->serverUrl().'District')->json();
    
            return view('hazards.update-hazard',
            [
                'hazardTypes'=>$hazardTypes,
                'hazardCategories'=>$hazardCategories,
                'hazardSources'=>$hazardSources,
                'reporterTypes'=>$reporterTypes,
                'districts'=>$districts
            ]);
            
        } catch (\Throwable $th) {
            return;
        }
    }

    public function getShehias(Request $req){
        try {
            $id = (int)$req->id;
            $shehias = Http::get($this->serverUrl().'Shehia/district/'.$id)->json();
            return response($shehias);
        } catch (\Throwable $th) {
            return;
        }
    }

    public function addHazard(Request $req)
    {
        try {
            $hazard = new Hazard();
    
            $hazard->hazardTypeId = (int)$req->type;
            $hazard->hazardCategoryId = (int)$req->category;
            $hazard->hazardSourceId = (int)$req->source;
            $hazard->hazardStatusId = 1;
            $hazard->hazardTitle = $req->title;
            $hazard->description = $req->description;
            $hazard->reporterTypeId = (int)$req->reporterType;
            $hazard->shehiaId = (int)$req->shehia;
            $hazard->place = $req->place;
            $hazard->reporter = $req->reporter;
            $hazard->reportedDate = $req->reportedDate;
            $hazard->startDate = $req->startDate;
            $hazard->registeredBy = 1;
            
    
            Http::post($this->serverUrl().'Hazard',
            [
                'hazardTypeId' =>  $hazard->hazardTypeId,
                'hazardCategoryId' =>  $hazard->hazardCategoryId,
                'hazardSourceId' =>  $hazard->hazardSourceId,
                'hazardStatusId' =>  $hazard->hazardStatusId,
                'hazardTitle' =>  $hazard->hazardTitle,
                'description' =>  $hazard->description,
                'reporterTypeId' =>  $hazard->reporterTypeId,
                'shehiaId' =>  $hazard->shehiaId,
                'place' =>  $hazard->place,
                'reporter' =>  $hazard->reporter,
                'reportedDate' =>  $hazard->reportedDate,
                'startDate' =>  $hazard->startDate,
                'registeredBy' =>  $hazard->registeredBy,
    
            ]);
    
            $notification = array(
                'message' => 'Hazard added successfully!',
                'alert-type' => 'success'
            );
            
            return redirect('add-hazard')->with($notification);
        
        } catch (\Throwable $th) {
           return;
        }

    }

    public function updateHazard(Request $req,$id)
    {
        try
        {
            $hazard = new hazard();
            $decryptedId = Crypt::decrypt($id);

            $hazard->hazardTypeId = int($req)->Type;
            $hazard->hazardCategoryId = int($req)->category;
            $hazard->hazardSourceId = int($req)->source;
            $hazard->hazardStatusId = 1;
            $hazard->hazardTitle = $req->title;
            $hazard->description = $req->description;
            $hazard->reporterTypeId = int($req)->reporterType;
            $hazard->shehiaId = int($req)->shehia;
            $hazard->place = $req->place;
            $hazard->reporter = $req->reporter;
            $hazard->reportedDate = $req->reportedDate;
            $hazard->startDate = $req->startDate;
            $hazard->registeredBy = 1;
            // dd($hazard);


            Http::put($this->ServerUrl().'Hazard/'.$decryptedId,
            [
            'hazardTypeId' =>  $hazard->hazardTypeId,
                'hazardCategoryId' =>  $hazard->hazardCategoryId,
                'hazardSourceId' =>  $hazard->hazardSourceId,
                'hazardStatusId' =>  $hazard->hazardStatusId,
                'hazardTitle' =>  $hazard->hazardTitle,
                'description' =>  $hazard->description,
                'reporterTypeId' =>  $hazard->reporterTypeId,
                'shehiaId' =>  $hazard->shehiaId,
                'place' =>  $hazard->place,
                'reporter' =>  $hazard->reporter,
                'reportedDate' =>  $hazard->reportedDate,
                'startDate' =>  $hazard->startDate,
                'registeredBy' =>  $hazard->registeredBy,

            
            ]);
            $notification = array(
                'message' => 'Hazard updated successfully!',
                'alert-type' => 'success'
            );
            
            return redirect('hazards.hazard-list')->with($notification);


        } catch (\Throwable $th) 
        {
            return;

        }


    }

}
