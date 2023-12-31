<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
    <title>Contact me</title>
</head>
<body>
    
    @extends('layouts.app')

    @section('content')

        <h2>Get In Touch</h2>
        <hr>
        <br>
        <form action="{{route('coontact.store')}}" method="post">
            @csrf
            <div class="input-container">
                <label class="form-label" for="name">Enter Your Name</label>
                <input type="text" name="contact_name" id="name" required>
            </div>
            <div class="input-container">
                <label class="form-label" for="email">Enter Your E-Mail</label>
                <input type="email" name="contact_email" id="email" required>
            </div>
            <div class="input-container">
                <label class="form-label" for="subject">Subject</label>
                <input type="text" name="contact_subject" id="subject" required>
            </div>
            <div class="input-container">
                <label class="form-label" for="message">Message</label>
                <textarea name="contact_message" id="message" required></textarea>
            </div>
            <div class="button-container">
                <button type="submit">Send</button>
            </div>
        </form>
    @endsection
    
</body>
</html>
