@extends('layouts.admin')

@section('title', 'Edit Service')

@section('content')
    <h1>Edit Service: {{ $service->title }}</h1>
    <form method="POST" action="{{ route('admin.services.update', $service) }}">
        @csrf @method('PUT')
        <input name="title" value="{{ $service->title }}" required><br>
        <input name="slug" value="{{ $service->slug }}" required><br>
        <textarea name="content" rows="6">{{ $service->content }}</textarea><br>
        <input name="seo_title" value="{{ $service->seo_title }}"><br>
        <input name="meta_description" value="{{ $service->meta_description }}"><br>
        <select name="status">
            <option value="published" @selected($service->status === 'published')>Published</option>
            <option value="draft" @selected($service->status === 'draft')>Draft</option>
        </select><br>
        <button type="submit">Update</button>
    </form>
@endsection
