@extends('layouts.admin')

@section('title', 'Pages')

@section('content')
    <h1>Pages</h1>
    <a href="{{ route('admin.pages.create') }}">Create New Page</a>

    <ul>
        @foreach ($pages as $page)
            <li>
                {{ $page->title }}
                <a href="{{ route('admin.pages.edit', $page) }}">Edit</a>
                <form action="{{ route('admin.pages.destroy', $page) }}" method="POST" style="display:inline;">
                    @csrf @method('DELETE')
                    <button onclick="return confirm('Delete this page?')">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>

    {{ $pages->links() }}
@endsection
