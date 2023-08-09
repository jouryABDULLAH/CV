<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Contacts</title>
</head>
<body>
    
    @extends('layouts.app')

    @section('content')
        <div class="contacts">
        
            <p>People who contacted me:</p>
            <br>
            <p>you can join the list by contacting me <a href="/contact">HERE</a>!!</p>
        </div>
    @endsection
</body>
</html>