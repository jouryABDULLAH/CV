<?php

use App\Http\Controllers\SkillController;
use App\Http\Controllers\ContactsController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('layouts.app');
});

Route::get('/contacts', function (){
    return redirect()->route('coontact.index');
});

Route::resource('coontact',ContactsController::class,(array)'index');


// single controller
Route::get('/skills',[SkillController::class,'index'])->name('skills');



Route::get('/{page}', function($page) {
    if ($page == 'about') {
        return view('about');
    } elseif ($page == 'projects') {
        return view('projects');
    } elseif ($page == 'contact') {
        return view('contact');
    }elseif ($page == 'index'){
        return view('coontact.index');
    }
});

