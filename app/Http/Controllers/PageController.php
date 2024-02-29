<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function home(){
        
        
        return view("welcome")->with('message','Vous y etes!'); 

    }

    public function crew(){
        return view("crew"); 

    }

    public function planets(){
        return view("planets"); 

    }

    public function technologie(){
        return view("techno"); 

    }





}
