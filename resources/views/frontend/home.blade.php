@extends('frontend.layout')

@php
    $seo = [
        'title' => 'Welcome to My CMS',
        'description' => 'Home page description for SEO',
        'canonical' => url('/'),
    ];
@endphp

@section('content')
    <h1>Welcome to My CMS</h1>
    <p>This is a sample home page with SEO metadata support.</p>
@endsection
