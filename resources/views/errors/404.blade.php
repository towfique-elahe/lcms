@extends('frontend.layout')

@php
    $seo = [
        'title' => 'Page Not Found',
        'description' => 'The page you are looking for could not be found.',
        'canonical' => request()->url(),
    ];
@endphp

@section('content')
    <div class="min-h-screen bg-background flex items-center justify-center px-4 py-20 animate-fade-in font-sans">
        <div class="max-w-xl w-full text-center">
            <h1 class="text-7xl font-extrabold text-primary mb-6">404</h1>
            <h2 class="text-2xl md:text-3xl font-semibold text-onBackground mb-4">
                Page Not Found
            </h2>
            <p class="text-onSurface text-base md:text-lg mb-8">
                Sorry, the page you are trying to access does not exist or may have been moved.
            </p>
            <a href="{{ route('home') }}"
                class="inline-block px-6 py-3 bg-primary text-onPrimary font-medium rounded-lg shadow hover:bg-primaryVariant transition">
                Back to Home
            </a>
        </div>
    </div>
@endsection
