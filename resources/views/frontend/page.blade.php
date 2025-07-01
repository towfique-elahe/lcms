@extends('frontend.layout')

@php
    $seo = [
        'title' => $page->seo_title ?? $page->title,
        'description' => $page->meta_description ?? Str::limit(strip_tags($page->content), 160),
        'canonical' => url('/page/' . $page->slug),
    ];
@endphp

@section('content')
    <h1>{{ $page->title }}</h1>
    {!! $page->content !!}
@endsection
