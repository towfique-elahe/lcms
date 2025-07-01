@extends('layouts.admin')

@section('title', 'Edit Page')

@section('content')
    <h1>Edit Page: {{ $page->title }}</h1>
    <form method="POST" action="{{ route('admin.pages.update', $page) }}">
        @csrf @method('PUT')
        <input name="title" value="{{ $page->title }}" required><br>
        <input name="slug" value="{{ $page->slug }}" required><br>
        <textarea name="content" rows="6">{{ $page->content }}</textarea><br>
        <input name="seo_title" value="{{ $page->seo_title }}"><br>
        <input name="meta_description" value="{{ $page->meta_description }}"><br>
        <select name="status">
            <option value="published" @selected($page->status === 'published')>Published</option>
            <option value="draft" @selected($page->status === 'draft')>Draft</option>
        </select><br>
        <button type="submit">Update</button>
    </form>
@endsection
