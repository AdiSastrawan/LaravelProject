<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('kos.kita', 'Laravel') }}</title>
    
    <!--FONTS-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    
    <!--SCRIPTS-->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="js/script.js" async></script>
</head>

<body class="bg-gray-100 font-poppins">
    <!--NAVIGATION BAR SECTION-->
    @include('layouts.navbar-layout')

    <!--CONTENT SECTION-->
    <main>
        {{$slot}}
    </main>
</body>
</html>
