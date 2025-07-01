@extends('layouts.admin')

@section('title', 'Services')

@section('content')
    <h1>Services</h1>
    <a href="{{ route('admin.services.create') }}">Create New Service</a>

    <ul>
        @foreach ($services as $service)
            <li>
                {{ $service->title }}
                <a href="{{ route('admin.services.edit', $service) }}">Edit</a>
                <form action="{{ route('admin.services.destroy', $service) }}" method="POST" style="display:inline;">
                    @csrf @method('DELETE')
                    <button onclick="return confirm('Delete this service?')">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>

    {{ $services->links() }}
@endsection
