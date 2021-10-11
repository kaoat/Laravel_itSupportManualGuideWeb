<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{asset('/css/summernote.min.css')}}">
    <script src="{{asset('/js/jquery-3.5.1.min.js')}}"></script>
    <script src="{{ asset('/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{asset('/js/summernote.min.js')}}"></script>
</head>
<body>

    @section('Layout.topnavigation')
        <x-layout.topnavigation></x-layout.topnavigation>
    @show

    <div class="container">
        @yield('content')
    </div>

    @section('Layout.footer')
        <x-layout.footer></x-layout.footer>
    @show

    @yield('script')
</body>

</html>
