<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>GalaicaTech - Time Tracker</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon">
    <link rel="shortcut icon" sizes="16x16" href="{{ asset('img/favicon-16x16.png') }}" type="image/png">
    <link rel="shortcut icon" sizes="32x32" href="{{ asset('img/favicon-32x32.png') }}" type="image/png">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <link rel="stylesheet" href="{{ asset('css/styles.css') }}" >
</head>
<body>
    <div id="app-container" class="container-fluid">
        <x-side-bar :sideBar="$sideBar"></x-side-bar>
        <x-top-bar :topBar="$topBar" :projects="$projects"></x-top-bar>
        {{ $slot }}
    </div>
</body>
</html>
