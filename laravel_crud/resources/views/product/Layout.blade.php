<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel CRUD</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <style>
        body{
            background-color: #25274d;
        }
        .container{
            background: #ffff;
            padding: 4%;
            margin-top:1.5%;
            border-top-left-radius: 0.5rem;
            border-top-right-radius: 0.5rem;
            border-bottom-left-radius: 0.5rem;
            border-bottom-right-radius: 0.5rem;
        }
    </style>
    </head>
    <body>
        <div class="container">
            <br>
            @yield('content')
        </div>
    </body>
</html>