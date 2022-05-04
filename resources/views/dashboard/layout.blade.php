<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dahboard</title>
</head>
<body>

    @if(session('status'))
        <h2>{{session('status')}}</h2> <br>
    @endif

    @yield('content')
    
</body>
</html>