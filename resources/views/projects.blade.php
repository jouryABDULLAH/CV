<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/projects.css') }}">
    <title>Projects</title>
</head>
<body>
    @extends('layouts.app')

    @section('pageTitle', 'Projects')
    @section('content')
        <div class="projects">
            <div class="project-container">
                <div class="project-info">
                    <img src="{{ asset('images/projects-imgs\library2.PNG') }}" alt="">
                    <h5>Library</h5>
                    <h6>A Library website that lets you manage your personal collection of books on various topics.</h6>
                    
                </div>
                <div class="project-links">
                <ul class="links">
                        <li><a href="https://github.com/jouryABDULLAH/Library"><img src="{{ asset('images/github-custom.png') }}" alt=""></a></li>
                        <li><a href="https://jouryabdullah.github.io/Library/"><img src="{{ asset('images/link-custom.png') }}" alt=""></a></li>
                    </ul>
                </div>
            </div>


            <div class="project-container">
                <div class="project-info">
                    <img src="{{ asset('images/projects-imgs/Etch-a-sketsh.PNG') }}" alt="">
                    <h5>Etch-a-sketch</h5>
                    <h6>an Etch-A-Sketch game created with HTMl, CSS and JavaScript</h6>
                </div>
                <div class="project-links">
                    <ul class="links">
                        <li><a href="https://github.com/jouryABDULLAH/Etch-a-Sketch"><img src="{{ asset('images/github-custom.png') }}" alt=""></a></li>
                        <li><a href="https://jouryabdullah.github.io/Etch-a-Sketch/"><img src="{{ asset('images/link-custom.png') }}" alt=""></a></li>
                    </ul>
                </div>
            </div>
            
            <div class="project-container">
                <div class="project-info">
                    <img src="{{ asset('images/projects-imgs/calculator.PNG') }}" alt="">
                    <h5>Calculator</h5>
                    <h6>a calculator made with HTML, CSS and JavaScript</h6>
                </div>
                <div class="project-links">
                    <ul class="links">
                        <li><a href="https://github.com/jouryABDULLAH/Calculator"><img src="{{ asset('images/github-custom.png') }}" alt=""></a></li>
                        <li><a href="https://jouryabdullah.github.io/Calculator/"><img src="{{ asset('images/link-custom.png') }}" alt=""></a></li>
                    </ul>
                </div>
            </div>

        </div>

    @endsection
</body>
</html>
