@extends('frontend.layout')

@php
    $seo = [
        'title' => 'Page Not Found',
        'description' => 'The page you are looking for could not be found.',
        'canonical' => request()->url(),
    ];
@endphp

@section('content')
    <h1>404 - Page Not Found</h1>
    <p>Sorry, the page you are trying to access does not exist.</p>
    <a href="{{ route('home') }}">Back to Home</a>
@endsection
