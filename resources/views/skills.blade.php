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

    @section('content')
        <div class="skills">
            <div class="skill">
                <img src="{{ asset('images/language-html5-custom.png') }}" alt="">
                <span class="tooltip">HTML</span>
            </div>

            <div class="skill">
                <img src="{{ asset('images/language-css3-custom.png') }}" alt="">
                <span class="tooltip">CSS</span>
            </div>

            <div class="skill">
                <img src="{{ asset('images/language-javascript-custom.png') }}" alt="">                
                <span class="tooltip">JavaScript</span>
            </div>

            <div class="skill">
                <img src="{{ asset('images/webpack-custom.png') }}" alt="">                
                <span class="tooltip">Webpack</span>
            </div>

            <div class="skill">
                <img src="{{ asset('images/microsoft-visual-studio-code-custom.png') }}" alt="">                
                <span class="tooltip">VS Code</span>
            </div>

            <div class="skill">
                <img src="{{ asset('images/bootstrap-custom.png') }}" alt="">                
                <span class="tooltip">Bootstrap</span>
            </div>

            <div class="skill">
                <img src="{{ asset('git-custom.png') }}" alt="">                
                <span class="tooltip">Git and Github</span>
            </div>
        </div>
    @endsection
</body>
</html>
