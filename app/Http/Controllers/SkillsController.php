<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillsController extends Controller
{

    private static function getData(){

        return[
            ['id'=> 1 ,'name'=>'HTML', 'link'=> '{{ asset("images/language-html5-custom.png") }}'],
            ['id'=> 2 ,'name'=>'CSS', 'link'=> '{{ asset("images/language-css3-custom.png") }}'],
            ['id'=> 3 ,'name'=>'JavaScript', 'link'=> '{{ asset("images/language-javascript-custom.png") }}'],
            ['id'=> 4 ,'name'=>'Webpack', 'link'=> '{{ asset("images/webpack-custom.png") }}'],
            ['id'=> 5 ,'name'=>'VS Code', 'link'=> '{{ asset("images/microsoft-visual-studio-code-custom.png") }}'],
            ['id'=> 6 ,'name'=>'Bootstrap', 'link'=> '{{ asset("images/bootstrap-custom.png") }}'],
            ['id'=> 7 ,'name'=>'Git-and-Github', 'link'=> '{{ asset("images/git-custom.png") }}']
        ];
    }

    public function index(Request $request)
    {
        return view('skills',['skill'=>self::getData()]);
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
