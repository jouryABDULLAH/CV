<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function showContacts(){
        return view('contacts');
    }

    public function contactMe(){
        return view('contact');
    }
    
}
