<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">
</head>
<body>

    @section('topnavigation')
        <x-topnavigation></x-topnavigation>
    @show

    @yield('content')

    @section('footer')
        <x-footer></x-footer>
    @show

    <script src="{{asset('/js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>