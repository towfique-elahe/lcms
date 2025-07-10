@extends('frontend.layout')

@php
    $seo = [
        'title' => 'Blog | My CMS',
        'description' => 'Read the latest blog posts from our CMS.',
        'canonical' => url('/blog'),
    ];
@endphp

@section('content')
    <div class="min-h-screen bg-background px-4 py-12 md:py-20 animate-fade-in font-sans">
        <div class="max-w-5xl mx-auto">
            <h1 class="text-4xl md:text-5xl font-extrabold text-onBackground mb-12 text-center">
                Our <span class="text-primary">Blog</span>
            </h1>

            <div class="space-y-10">
                @forelse ($posts as $post)
                    <article class="bg-surface rounded-lg shadow p-6 hover:shadow-md transition">
                        <h2 class="text-2xl font-bold text-onBackground mb-3">
                            <a href="{{ route('post', $post->slug) }}" class="hover:text-primary transition-colors">
                                {{ $post->title }}
                            </a>
                        </h2>
                        <p class="text-onSurface text-base mb-4">
                            {{ Str::limit($post->excerpt, 150) }}
                        </p>
                        <a href="{{ route('post', $post->slug) }}"
                            class="inline-block text-sm font-medium text-primary hover:underline">
                            Read More →
                        </a>
                    </article>
                @empty
                    <p class="text-onBackground text-center">No blog posts available right now.</p>
                @endforelse
            </div>

            <div class="mt-12">
                {{ $posts->links('pagination::tailwind') }}
            </div>
        </div>
    </div>
@endsection
