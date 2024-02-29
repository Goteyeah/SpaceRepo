<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    //
    public function setLanguage($locale){
        app()->setlocale($locale);
        session()->put('lang',$locale);
        return redirect()->back();
    }

}
