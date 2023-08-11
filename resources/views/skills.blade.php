<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/skills.css') }}">
    <title>Skills</title>
</head>
<body>

    @extends('layouts.app')


    @section('pageTitle', 'Skills')
    @section('content')

        
        @if (count($skill) > 0) 

            <div class="skills">

                    @foreach( $skill as $s)
                        <div class="skill">
                            <img src= "{{ $s['link'] }}"  alt="">
                            <span class="tooltip">{{ $s['name'] }}</span>
                        </div>
                    @endforeach
            </div> 
        @else
            <p>No Skills Yet</p>
        @endif

    @endsection


</body>
</html>
