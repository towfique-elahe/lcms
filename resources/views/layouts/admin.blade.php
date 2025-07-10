<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin | @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- Compiled CSS & JS via Vite --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-background text-onBackground font-sans min-h-screen flex flex-col">
    <!-- Top Bar -->
    <header class="bg-background border-b border-gray-200 shadow-sm">
        <div class="max-w-7xl mx-auto px-4 py-4 flex flex-col md:flex-row justify-between items-start md:items-center space-y-4 md:space-y-0">
            <h1 class="text-xl font-semibold text-primary">Admin Panel</h1>

            <!-- Navigation -->
            <nav class="flex flex-col md:flex-row items-start md:items-center space-y-2 md:space-y-0 md:space-x-6 text-sm font-medium w-full md:w-auto">
                <a href="{{ route('admin.dashboard') }}" class="hover:text-primary">Dashboard</a>
                <a href="{{ route('admin.pages.index') }}" class="hover:text-primary">Pages</a>
                <a href="{{ route('admin.posts.index') }}" class="hover:text-primary">Posts</a>
                <a href="{{ route('admin.services.index') }}" class="hover:text-primary">Services</a>

                <!-- Logout Button -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit"
                        class="bg-primary text-onPrimary px-4 py-1.5 rounded hover:bg-primaryVariant transition w-full md:w-auto text-center">
                        Logout
                    </button>
                </form>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main class="flex-grow max-w-7xl mx-auto w-full px-4 py-10">
        @if (session('success'))
            <div class="mb-6 bg-green-100 border border-green-300 text-green-800 text-sm px-4 py-3 rounded">
                {{ session('success') }}
            </div>
        @endif

        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="text-center text-xs text-onBackground py-4 border-t border-gray-200 bg-background">
        &copy; {{ now()->year }} <span class="text-primary font-semibold">{{ config('app.name') }}</span>. All rights reserved.
    </footer>
</body>

</html>
