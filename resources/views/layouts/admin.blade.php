<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin | @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <header style="background: #f5f5f5; padding: 1rem;">
        <nav>
            <a href="{{ route('admin.dashboard') }}">Dashboard</a> |
            <a href="{{ route('admin.pages.index') }}">Pages</a> |
            <a href="{{ route('admin.posts.index') }}">Posts</a> |
            <a href="{{ route('admin.services.index') }}">Services</a> |
            <a href="{{ route('dashboard') }}">User Dashboard</a>
        </nav>
    </header>

    <main class="container mt-4">
        @if (session('success'))
            <div style="color: green;">{{ session('success') }}</div>
        @endif

        @yield('content')
    </main>
</body>

</html>
