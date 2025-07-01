@extends('frontend.layout')

@php
    $seo = [
        'title' => $service->seo_title ?? $service->title,
        'description' => $service->meta_description ?? Str::limit(strip_tags($service->content), 160),
        'keywords' => $service->keywords,
        'canonical' => url('/services/' . $service->slug),
    ];
@endphp

@section('content')
    <article>
        <h1>{{ $service->title }}</h1>
        {!! $service->content !!}
    </article>
@endsection
