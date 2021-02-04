<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Toko Figureku</title>
    <link rel="shortcut icon" href="{{asset('assets/img/icon.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/footer.css')}}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    {{-- Navbar --}}
        @include('layout.navbar')
    {{-- End Navbar --}}
    <div style="margin-top: 80px">
        @yield('content')
    </div>
    

    {{-- Footer --}}
    @include('layout.footer')
    {{-- End Footer --}}
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    @yield('script')
</body>
</html>