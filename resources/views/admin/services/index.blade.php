@extends('layouts.admin')

@section('title', 'Services')

@section('content')
    <div class="max-w-5xl mx-auto">
        <div class="flex items-center justify-between mb-8">
            <h1 class="text-3xl font-bold text-onBackground">Services</h1>
            <a href="{{ route('admin.services.create') }}"
               class="bg-primary text-onPrimary px-4 py-2 rounded hover:bg-primaryVariant transition text-sm font-medium">
                + Create New Service
            </a>
        </div>

        @if ($services->count())
            <div class="bg-surface shadow rounded-lg overflow-hidden">
                <ul class="divide-y divide-gray-200">
                    @foreach ($services as $service)
                        <li class="p-4 flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                            <div class="text-onBackground font-medium">{{ $service->title }}</div>

                            <div class="flex items-center gap-4 text-sm">
                                <a href="{{ route('admin.services.edit', $service) }}"
                                   class="text-primary hover:underline">
                                    Edit
                                </a>

                                <form action="{{ route('admin.services.destroy', $service) }}" method="POST"
                                      onsubmit="return confirm('Delete this service?')">
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
                {{ $services->links('pagination::tailwind') }}
            </div>
        @else
            <p class="text-onSurface">No services found.</p>
        @endif
    </div>
@endsection
