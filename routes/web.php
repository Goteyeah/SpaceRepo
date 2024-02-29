<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\LanguageController;
use App\Http\Middleware\Language;
use App\Http\Controllers\testUnitaireGA;
use App\Http\Controllers\ContactsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [PageController::class,'home'])->middleware(Language::class)->name("welcome");

Route::get('/crew', [PageController::class,'crew'])->middleware(Language::class)->name('crew');

Route::get('/techno', [PageController::class,'technologie'])->middleware(Language::class)->name('techno');

Route::get('/planets', [PageController::class,'planets'])->middleware(Language::class)->name('planets');

Route::get('/language/{locale}', [LanguageController::class,'setLanguage'])->name('language');

Route::get('welcome', [testUnitaireGA::class, 'index']);

Route::get('/', function(){
    return view('welcome')->with('message','vous y etes!');
});

 

Route::get('contact', [ContactsController::class, 'create'])->name('contact.create');
Route::post('contact', [ContactsController::class, 'store'])->name('contact.store');


