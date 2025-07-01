@extends('layouts.admin')

@section('title', 'Edit Post')

@section('content')
    <h1>Edit Post: {{ $post->title }}</h1>
    <form method="POST" action="{{ route('admin.posts.update', $post) }}">
        @csrf @method('PUT')
        <input name="title" value="{{ $post->title }}" required><br>
        <input name="slug" value="{{ $post->slug }}" required><br>
        <textarea name="content" rows="6">{{ $post->content }}</textarea><br>
        <input name="seo_title" value="{{ $post->seo_title }}"><br>
        <input name="meta_description" value="{{ $post->meta_description }}"><br>
        <select name="status">
            <option value="published" @selected($post->status === 'published')>Published</option>
            <option value="draft" @selected($post->status === 'draft')>Draft</option>
        </select><br>
        <button type="submit">Update</button>
    </form>
@endsection
