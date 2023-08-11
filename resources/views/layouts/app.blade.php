<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>CV</title>
</head>
<body>
    
    <div class="container">

        <header>
            <div class="header-text">
                <a href="/">
                    <h1>Joori Abdullah</h1>
                    <p>CS enthuasist and web developer </p>
                </a>
            </div>
    
        </header> 

        <main>
            <nav>
                <ul>
                    <li class="home-element">
                        <a href="/">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="/about">
                            About Me
                        </a>
                    </li>
                    <li>
                        <a href="/projects">
                            Projects
                        </a>    
                    </li>
                    <li>
                        <a href="/skills">
                            Skills
                        </a>    
                    </li>
                    <li>
                        <a href="/coontact/create">
                            Contact Me
                        </a>    
                    </li>
                    <li>
                        <a href="/contacts">
                            Contacts
                        </a>    
                    </li>
                </ul>
            </nav>

            <script>
                const liElements = document.querySelectorAll('nav li');
                
                liElements.forEach( li => li.addEventListener('click', 
                (e) => {
                    let {target} = e;
                    liElements.forEach(li => li.style.backgroundColor = '');
                    target.style.backgroundColor = 'pink';
                }));
            </script>

            <div class="content">
                <div class="title">
                    @yield('pageTitle')
                </div>
                @section('content')
                    <h1>Hey! I'm <span class="name">Joori</span></h1>
                    <h4>Web Developer</h4>
                    <h4>Senior CS Student</h4> 
                    <ul class="socials-home" style="background-color: ;">
                        <li><a href="https://github.com/jouryABDULLAH"><img src="{{ asset('images/github-custom.png') }}" alt=""></a></li>
                        <li><a href="https://www.linkedin.com/in/joori-abdullah/"> <img src="{{ asset('images/linkedin-custom.png') }}" alt=""> </a></li>
                    </ul>
                @show
            </div>

        </main>

    </div>

</body>
</html>