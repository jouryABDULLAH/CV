<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact;

class ContactsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contact = contact::all(); // stores all data from the DB.
        return view('coontact.index',['contact'=> $contact]);
        // return view('coontact.index')->with('contact',$contact);

        // return view('coontact.index',[ 'coontact.index' => 'contact' ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('coontact.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $contact = new contact();
        $contact->contact_name = $request->input('contact_name');
        $contact->contact_email = $request->input('contact_email');
        $contact->contact_subject = $request->input('contact_subject');
        $contact->contact_message = $request->input('contact_message');
        $contact->save();
        return redirect()->route('coontact.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $contact = contact::findOrFail($id);
        return view('coontact.show',['contact'=>$contact]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $contact = contact::findOrFail($id);
        return view('coontact.edit',['contact'=>$contact]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $contact = contact::findOrFail($id);

        $contact->contact_name = $request->input('contact_name');
        $contact->contact_email = $request->input('contact_email');
        $contact->contact_subject = $request->input('contact_subject');
        $contact->contact_message = $request->input('contact_message');
        $contact->save();

        return redirect()->route('coontact.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $contact = contact::findOrFail($id);
        $contact-> delete();
        
        return redirect()->route('coontact.index');
    }
}
