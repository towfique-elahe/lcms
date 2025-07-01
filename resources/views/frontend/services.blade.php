@extends('frontend.layout')

@php
    $seo = [
        'title' => 'Our Services',
        'description' => 'Explore the professional services we offer.',
        'canonical' => url('/services'),
    ];
@endphp

@section('content')
    <h1>Our Services</h1>
    @foreach ($services as $service)
        <div>
            <h2><a href="{{ route('service.show', $service->slug) }}">{{ $service->title }}</a></h2>
            <p>{{ Str::limit($service->excerpt, 150) }}</p>
        </div>
    @endforeach
@endsection
