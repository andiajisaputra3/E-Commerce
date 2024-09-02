<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/boxicons/css/boxicons.css') }}">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">

    <div class="flex min-h-screen">

        <!-- Sidebar -->
        @include('layouts.sidebar')

        <!-- Konten Utama -->
        <div class="flex flex-col w-full">

            <!-- Navbar -->
            @include('layouts.navbar')

            <!-- Area Konten -->
            <main id="main-content" class="flex-1 p-6 mt-16 bg-gray-100 sm:ml-64">
                <div class="block p-4 bg-white rounded-lg shadow">
                    <h5 class="mb-2 text-lg tracking-tight text-gray-900 dark:text-white">
                        @yield('title')
                    </h5>
                </div>

                @yield('content')

            </main>

            <!-- Footer -->
            @include('layouts.footer')

        </div>
    </div>


    <script src="{{ asset('assets/js/index.js') }}" defer></script>
    <script src="{{ asset('assets/js/sidebar.js') }}" defer></script>
    <script src="{{ asset('assets/js/constants.js') }}" defer></script>
    <script src="{{ asset('assets/js/charts.js') }}" defer></script>
</body>

</html>
