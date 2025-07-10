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
    <article class="min-h-screen bg-background px-4 py-12 md:py-20 animate-fade-in font-sans">
        <div class="max-w-4xl mx-auto">
            <h1 class="text-4xl md:text-5xl font-extrabold text-onBackground mb-6 text-center">
                {{ $post->title }}
            </h1>

            @if (!empty($post->published_at))
                <p class="text-sm text-onSurface text-center mb-10">
                    Published on {{ \Carbon\Carbon::parse($post->published_at)->format('F j, Y') }}
                </p>
            @endif

            <div class="prose prose-base md:prose-lg max-w-none text-onSurface dark:prose-invert">
                {!! $post->content !!}
            </div>

            <div class="mt-12 text-center">
                <a href="{{ route('blog') }}" class="inline-block text-sm text-primary font-medium hover:underline">
                    ← Back to Blog
                </a>
            </div>
        </div>
    </article>
@endsection
