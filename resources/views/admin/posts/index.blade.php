@extends('layouts.admin')

@section('title', 'Posts')

@section('content')
    <div class="max-w-5xl mx-auto">
        <div class="flex items-center justify-between mb-8">
            <h1 class="text-3xl font-bold text-onBackground">Posts</h1>
            <a href="{{ route('admin.posts.create') }}"
               class="bg-primary text-onPrimary px-4 py-2 rounded hover:bg-primaryVariant transition text-sm font-medium">
                + Create New Post
            </a>
        </div>

        @if ($posts->count())
            <div class="bg-surface shadow rounded-lg overflow-hidden">
                <ul class="divide-y divide-gray-200">
                    @foreach ($posts as $post)
                        <li class="p-4 flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                            <div class="text-onBackground font-medium">{{ $post->title }}</div>

                            <div class="flex items-center gap-4 text-sm">
                                <a href="{{ route('admin.posts.edit', $post) }}"
                                   class="text-primary hover:underline">
                                    Edit
                                </a>

                                <form action="{{ route('admin.posts.destroy', $post) }}" method="POST"
                                      onsubmit="return confirm('Delete this post?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:underline">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>

            <div class="mt-6">
                {{ $posts->links('pagination::tailwind') }}
            </div>
        @else
            <p class="text-onSurface">No posts found.</p>
        @endif
    </div>
@endsection
