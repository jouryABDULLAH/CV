<?php

use App\Http\Controllers\DataController;
// use App\Http\Controllers\SkillsController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('layouts.app');
});


// single controller:
// Route::get('contacts',[ContactController::class,'showContacts']);
// Route::get('contact',[ContactController::class,'contactMe']);


// single controller as a route controller:
Route::controller(ContactController::class)->group(function (){
    Route::get('contacts', 'showContacts');
    Route::get('contact','contactMe');
});



Route::get('/{page}', function($page) {
    if ($page == 'about') {
        return view('about');
    } elseif ($page == 'projects') {
        return view('projects');
    } elseif ($page == 'contact') {
        return view('contact');
    } elseif ($page == 'contacts') {
        return view('contacts');
    } elseif ($page == 'skills'){
        return view('skills');
    }
});

// Route::get('/skills',[DataController::class,'index'])->name('skills');

// Route::get('/skills', function () {
//     return view('skills');
// });
