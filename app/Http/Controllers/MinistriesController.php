<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Ministry;

class MinistriesController extends Controller
{
    //VIEW ALL MINISTRIES
    public function getMinistries(){
        $ministries = Http::get('http://localhost:57893/api/Ministry')->json();
        
        return view('ministry.ministry', ['ministries'=>$ministries]);
    }


    public function createMinistry(Request $request){

        //VALIDATION
        $request->validate([
            'ministry' => 'required'
        ]);

        $min = new Ministry();
        $min->name = $request->ministry;

       Http::post('http://localhost:57893/api/Ministry',
            [
            'name' => $min->name
            ])->json();
        
        return back()->with('message');
    }

    
}