@extends('layouts.admin')

@section('title', 'Create Post')

@section('content')
    <h1>Create New Post</h1>
    <form method="POST" action="{{ route('admin.posts.store') }}">
        @csrf
        <input name="title" placeholder="Title" required><br>
        <input name="slug" placeholder="Slug" required><br>
        <textarea name="content" placeholder="Content" rows="6"></textarea><br>
        <input name="seo_title" placeholder="SEO Title"><br>
        <input name="meta_description" placeholder="Meta Description"><br>
        <select name="status">
            <option value="published">Published</option>
            <option value="draft">Draft</option>
        </select><br>
        <button type="submit">Save</button>
    </form>
@endsection
