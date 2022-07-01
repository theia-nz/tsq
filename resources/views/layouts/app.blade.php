<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') | {{ $setting->byKey('company_name') }}</title>
    <link rel="icon" type="image/png" href="">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @livewireStyles
</head>

<body class="@if(config('app.debug')) debug-screens @endif">
    @include('partials.header')
    @yield('content')
    @include('partials.footer')
    <script src="{{ mix('js/alpine.js') }}" defer></script>
    <script src="{{ mix('js/app.js') }}"></script>
    @livewireScripts
    @stack('scripts')
    <!-- coded with care by https://kevinlim.net -->
</body>

</html>