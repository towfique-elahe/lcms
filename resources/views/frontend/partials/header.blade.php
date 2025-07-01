<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $seo['title'] ?? 'My CMS' }}</title>
    <meta name="description" content="{{ $seo['description'] ?? 'Default description' }}">
    <meta name="keywords" content="{{ $seo['keywords'] ?? '' }}">
    <link rel="canonical" href="{{ $seo['canonical'] ?? request()->url() }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Optional for styling -->
</head>

<body>
    <header>
        <nav>
            <ul style="list-style: none; display: flex; gap: 1rem; padding: 1rem; margin: 0;">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('blog') }}">Blog</a></li>
                <li><a href="{{ route('services') }}">Services</a></li>
                <li><a href="{{ route('page', 'about') }}">About</a></li>
                <li><a href="{{ route('page', 'contact') }}">Contact</a></li>
            </ul>
        </nav>
    </header>
