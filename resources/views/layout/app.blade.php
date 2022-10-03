<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Dc-Lavarel</title>
</head>
<body>

    @include('partials.header')
    @include('partials.jumbotron')
    @include('partials.section')
    @yield('content')
        
    @include('partials.footer')

</body>
</html>