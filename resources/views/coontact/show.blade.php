<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>show contact</title>
</head>
<body>

    @extends('layouts.app')

    @section('content')
        <ul>
            <a href="{{ route('coontact.edit', $contact->id)}}">
                <li>
                    <p>
                        {{$contact['contact_name']}} sent a message with the following subject: <strong>{{$contact['contact_subject']}}</strong>
                    </p>
                   
                    <form action="{{route('coontact.destroy',$contact->id)}}" method="post">
                        @csrf 
                        @method('DELETE')
                        <button type="submit" class="delete-btn">
                            X
                        </button>
                    </form>
                </li>
            </a>
        </ul>
    @endsection
    
</body>
</html>