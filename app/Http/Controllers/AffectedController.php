<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class AffectedController extends Controller
{
    // public function countAffected($id){
    //     $decryptId = Crypt::decrypt($id);
    //     try {
            
    //         $peoples = Http::get($this->serverUrl().'AffectedPeople/count/'.$decryptId)->json();

    //         return view('hazard.hazard-affected',[
    //             'peoples' => $peoples
    //         ]);
    //     } catch (\Throwable $th) {
    //         return;
    //     }
    // }
}
