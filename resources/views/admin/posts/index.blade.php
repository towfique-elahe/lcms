@extends('layouts.admin')

@section('title', 'Posts')

@section('content')
    <h1>Posts</h1>
    <a href="{{ route('admin.posts.create') }}">Create New Post</a>

    <ul>
        @foreach ($posts as $post)
            <li>
                {{ $post->title }}
                <a href="{{ route('admin.posts.edit', $post) }}">Edit</a>
                <form action="{{ route('admin.posts.destroy', $post) }}" method="POST" style="display:inline;">
                    @csrf @method('DELETE')
                    <button onclick="return confirm('Delete this post?')">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>

    {{ $posts->links() }}
@endsection
