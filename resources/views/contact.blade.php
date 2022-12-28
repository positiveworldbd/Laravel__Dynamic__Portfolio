@php
    $title =  "Contact Page"
@endphp


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{  $title }}</title>
</head>
<body>

        <h1>This is a {{ $title }} from Controller</h1>
        <div class="menu">
            <a href="{{ route('about.page') }}">About</a>
            <a href="{{ route('blog.page') }}">Blog</a>
            <a href="{{ route('contact.page') }}">Contact</a>
        </div>
       
</body>
</html>