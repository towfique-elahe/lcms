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
    <article class="min-h-screen bg-background px-4 py-12 md:py-20 animate-fade-in font-sans">
        <div class="max-w-4xl mx-auto">
            <h1 class="text-4xl md:text-5xl font-extrabold text-onBackground mb-6 text-center">
                {{ $service->title }}
            </h1>

            @if (!empty($service->published_at))
                <p class="text-sm text-onSurface text-center mb-10">
                    Published on {{ \Carbon\Carbon::parse($service->published_at)->format('F j, Y') }}
                </p>
            @endif

            <div class="prose prose-base md:prose-lg max-w-none text-onSurface dark:prose-invert">
                {!! $service->content !!}
            </div>

            <div class="mt-12 text-center">
                <a href="{{ route('services') }}"
                   class="inline-block text-sm text-primary font-medium hover:underline">
                    ← Back to Services
                </a>
            </div>
        </div>
    </article>
@endsection
