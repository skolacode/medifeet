<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'MEDIFEET') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">

        {{-- Do a if else and show nav bar base on roles --}}
    
        @if ( Auth::user()->roles->first()->id == config('constants.roles.MANAGER'))

            <!-- Manager Nav Bar -->
            @include('nav.managerNav')
        @else

            <!-- Staff nav Bar -->
            @include('nav.staffNav')
        @endif
        
        <!-- Content -->
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
