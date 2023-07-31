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
                <h1>Joori Abdullah</h1>
                <p>CS enthuasist and web developer </p>
            </div>
    
        </header> 

        <main>
            <nav>
                <ul>
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
                        <a href="/contact">
                            Contact Me
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
                @section('content')
                    <p>This is the default about section</p>
                @show
            </div>

        </main>

    </div>

</body>
</html>