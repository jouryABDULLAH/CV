<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('layouts.app');
});

Route::get('/{page}', function($page) {
    if ($page == 'about') {
        return view('about');
    } elseif ($page == 'skills') {
        return view('skills');
    } elseif ($page == 'projects') {
        return view('projects');
    } elseif ($page == 'contact') {
        return view('contact');
    }
});


Route::get('/home',[ App\Http\Controllers\HomeController::class,'index'])->name('home.index');  