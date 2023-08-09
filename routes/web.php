<?php

use App\Http\Controllers\DataController;
// use App\Http\Controllers\SkillsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContactsController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('layouts.app');
});

Route::get('/contacts', function (){
    return redirect()->route('coontact.index');
});

Route::resource('coontact',ContactsController::class,(array)'index');

// single controller:
// Route::get('contacts',[ContactController::class,'showContacts']);
// Route::get('contact',[ContactController::class,'contactMe']);


// single controller as a route controller:
// Route::controller(ContactController::class)->group(function (){
//     Route::get('contacts', 'showContacts');
//     Route::get('contact','contactMe');
// });



Route::get('/{page}', function($page) {
    if ($page == 'about') {
        return view('about');
    } elseif ($page == 'projects') {
        return view('projects');
    } 
    elseif ($page == 'contact') {
        return view('contact');
    } 
    // elseif ($page == 'contacts') {
    //     return view('cotacts');
    // } 
    elseif ($page == 'skills'){
        return view('skills');
    }elseif ($page == 'index'){
        return view('coontact.index');
    }
});

// Route::get('/skills',[DataController::class,'index'])->name('skills');

// Route::get('/skills', function () {
//     return view('skills');
// });
