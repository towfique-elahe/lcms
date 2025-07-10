@extends('frontend.layout')

@php
    $seo = [
        'title' => $page->seo_title ?? $page->title,
        'description' => $page->meta_description ?? Str::limit(strip_tags($page->content), 160),
        'canonical' => url('/page/' . $page->slug),
    ];
@endphp

@section('content')
    <div class="min-h-screen bg-background px-4 py-12 md:py-20 animate-fade-in font-sans">
        <div class="max-w-4xl mx-auto">
            <h1 class="text-4xl md:text-5xl font-extrabold text-onBackground mb-8 text-center">
                {{ $page->title }}
            </h1>

            <div class="prose prose-base md:prose-lg max-w-none text-onSurface dark:prose-invert">
                {!! $page->content !!}
            </div>
        </div>
    </div>
@endsection
