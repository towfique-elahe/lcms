@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
    <div class="max-w-4xl mx-auto">
        <h1 class="text-3xl md:text-4xl font-bold text-onBackground mb-8 text-center">
            Welcome to the <span class="text-primary">Admin Dashboard</span>
        </h1>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <a href="{{ route('admin.pages.index') }}"
               class="block bg-surface border border-gray-200 rounded-lg shadow hover:shadow-md transition p-6 text-center hover:border-primary">
                <h2 class="text-xl font-semibold text-onBackground mb-2">Manage Pages</h2>
                <p class="text-sm text-onSurface">Create, edit, and organize site pages.</p>
            </a>

            <a href="{{ route('admin.posts.index') }}"
               class="block bg-surface border border-gray-200 rounded-lg shadow hover:shadow-md transition p-6 text-center hover:border-primary">
                <h2 class="text-xl font-semibold text-onBackground mb-2">Manage Posts</h2>
                <p class="text-sm text-onSurface">Control your blog content and updates.</p>
            </a>

            <a href="{{ route('admin.services.index') }}"
               class="block bg-surface border border-gray-200 rounded-lg shadow hover:shadow-md transition p-6 text-center hover:border-primary">
                <h2 class="text-xl font-semibold text-onBackground mb-2">Manage Services</h2>
                <p class="text-sm text-onSurface">Update your service offerings and info.</p>
            </a>
        </div>
    </div>
@endsection
