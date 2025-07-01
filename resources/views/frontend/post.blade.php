@extends('frontend.layout')

@php
    $seo = [
        'title' => $post->seo_title ?? $post->title,
        'description' => $post->meta_description ?? Str::limit(strip_tags($post->content), 160),
        'keywords' => $post->keywords,
        'canonical' => url('/blog/' . $post->slug),
    ];
@endphp

@section('content')
    <article>
        <h1>{{ $post->title }}</h1>
        {!! $post->content !!}
    </article>
@endsection
