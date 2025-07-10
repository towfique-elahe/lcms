@extends('frontend.layout')

@php
    $seo = [
        'title' => 'Welcome to LCMS',
        'description' => 'Home page description for SEO',
        'canonical' => url('/'),
    ];
@endphp

@section('content')
    <div class="min-h-screen bg-background flex items-center justify-center px-4">
        <div class="max-w-3xl w-full text-center py-12 md:py-20 animate-fade-in">
            <h1 class="text-4xl md:text-5xl font-extrabold text-onBackground mb-4">
                Welcome to <span class="text-primary">LCMS</span>
            </h1>
            <p class="text-lg md:text-xl text-onBackground">
                This is a sample home page with SEO metadata support.
            </p>
            <div class="mt-8">
                <a href="{{ url('/about') }}"
                    class="inline-block px-6 py-3 bg-primary text-onPrimary font-medium rounded-lg shadow hover:bg-blue-700 transition">
                    Learn More
                </a>
            </div>
        </div>
    </div>
@endsection
