@extends('frontend.layout')

@php
    $seo = [
        'title' => 'Blog | My CMS',
        'description' => 'Read the latest blog posts from our CMS.',
        'canonical' => url('/blog'),
    ];
@endphp

@section('content')
    <h1>Blog</h1>
    @foreach ($posts as $post)
        <article>
            <h2><a href="{{ route('post', $post->slug) }}">{{ $post->title }}</a></h2>
            <p>{{ Str::limit($post->excerpt, 150) }}</p>
        </article>
    @endforeach

    {{ $posts->links() }}
@endsection
