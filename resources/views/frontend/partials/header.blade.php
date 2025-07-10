<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $seo['title'] ?? config('app.name') }}</title>
    <meta name="description" content="{{ $seo['description'] ?? 'Default description' }}">
    <meta name="keywords" content="{{ $seo['keywords'] ?? '' }}">
    <link rel="canonical" href="{{ $seo['canonical'] ?? request()->url() }}">
    {{-- Compiled CSS & JS via Vite --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{-- Google Fonts CDN --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    {{-- Google Material Icons CDN --}}
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
    <header class="bg-primary text-onPrimary">
        <nav class="container mx-auto flex items-center justify-between px-4 py-3">
            <!-- Logo or Site Title -->
            <a href="{{ route('home') }}" class="text-lg font-bold tracking-wide hover:text-secondary transition">
                {{ config('app.name') }}
            </a>

            <!-- Navigation Links -->
            <ul class="hidden md:flex items-center gap-6">
                <li>
                    <a href="{{ route('home') }}" class="hover:text-secondary transition">Home</a>
                </li>
                <li>
                    <a href="{{ route('blog') }}" class="hover:text-secondary transition">Blog</a>
                </li>
                <li>
                    <a href="{{ route('services') }}" class="hover:text-secondary transition">Services</a>
                </li>
                <li>
                    <a href="{{ route('page', 'about') }}" class="hover:text-secondary transition">About</a>
                </li>
                <li>
                    <a href="{{ route('page', 'contact') }}" class="hover:text-secondary transition">Contact</a>
                </li>
            </ul>

            <!-- Mobile Menu Button -->
            <button id="mobileMenuButton" class="md:hidden text-onPrimary focus:outline-none">
                <span class="material-icons">menu</span>
            </button>
        </nav>

        <!-- Mobile Menu -->
        <div id="mobileMenu" class="hidden md:hidden bg-primary text-onPrimary px-4 pb-4">
            <ul class="flex flex-col gap-3">
                <li><a href="{{ route('home') }}" class="hover:text-secondary transition">Home</a></li>
                <li><a href="{{ route('blog') }}" class="hover:text-secondary transition">Blog</a></li>
                <li><a href="{{ route('services') }}" class="hover:text-secondary transition">Services</a></li>
                <li><a href="{{ route('page', 'about') }}" class="hover:text-secondary transition">About</a></li>
                <li><a href="{{ route('page', 'contact') }}" class="hover:text-secondary transition">Contact</a></li>
            </ul>
        </div>

    </header>
