<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body class="antialiased">
    <div
        class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white flex-col">
        <div class="created-by text-white">
            <span>Desarrollado por: <b>Isaac Humberto Penado Cruz - Ministerio de Vivienda</b></span>
        </div>
        @yield('content')
    </div>
</body>

</html>
