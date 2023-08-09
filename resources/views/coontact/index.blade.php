<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/contacts.css') }}">
    <title>contacts</title>
</head>
<body>
    
    @extends('/layouts.app')

    @section('content')

        <div class="contacts">
            
            
            <p>People who contacted me:</p>

            @if (count((array) $contact)>0)
                <br>

                <ul class="contact-list">
                    @foreach($contact as $con)
                        <li>
                            <p>name: {{ $con['contact_name'] }}</p>
                            <p>subject: {{ $con['contact_subject'] }}</p>
                        </li>
                    @endforeach
                </ul>

                <br>
                <p>you can join the list by contacting me <a href="/contact">HERE</a>!!</p>


            @else
            <p>no connections yet...be the first to connect! --> <a href="/contact">Contact Me</a></p>
            <p>be the first to connect! --> <a href="{{ url('coontact/create')}}">Contact Me</a></p>
                
            @endif
        </div>
    @endsection
</body>
</html>