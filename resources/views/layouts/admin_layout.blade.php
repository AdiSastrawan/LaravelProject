<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('Laravel', 'Admin Page | kos.kita') }}</title>

    <!--FONTS-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;800&display=swap" rel="stylesheet">

    <!--ICON-->
    <link rel="shortcut icon" href="img/logo.png">

    <!--Tailwind-->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="js/script.js" async></script>

    <style>
        .bg-sidebar {
            background: #3d68ff;
        }

        .cta-btn {
            color: #3d68ff;
        }

        .upgrade-btn {
            background: #1947ee;
        }

        .upgrade-btn:hover {
            background: #0038fd;
        }

        .active-nav-link {
            background: #1947ee;
        }

        .nav-item:hover {
            background: #1947ee;
        }

        .account-link:hover {
            background: #3d68ff;
        }
    </style>
</head>

<body class="bg-gray-100 font-poppins flex">
    @include('layouts.admin_nav')
    <div class="w-full overflow-x-hidden border-t flex flex-col">
        {{ $slot }}
    </div>
    @include('layouts.admin_footer')
    @include('sweetalert::alert')
</body>

</html>
