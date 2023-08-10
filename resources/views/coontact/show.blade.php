<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/showContacts.css') }}">
    <title>show contact</title>
</head>
<body>

    @extends('layouts.app')

    @section('content')
        <ul>
                <li>
                    <p>
                        <strong>{{$contact['contact_name']}}</strong> sent a message with the following subject: <strong>{{$contact['contact_subject']}}</strong>
                    </p>
                   
                    <div class="buttons">
                        <form action="{{route('coontact.destroy',$contact->id)}}" method="post">
                            @csrf 
                            @method('DELETE')
                            <button type="submit" class="btn">
                                Delete
                            </button>
                        </form>
                        <button class="btn edit">
                            <a href="{{ route('coontact.edit', $contact->id)}}">
                                Edit
                            </a>
                        </button>
                    </div>
                </li>
        </ul>
    @endsection
    
</body>
</html>