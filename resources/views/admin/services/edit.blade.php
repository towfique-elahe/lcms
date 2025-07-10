@extends('layouts.admin')

@section('title', 'Edit Service')

@section('content')
    <div class="max-w-3xl mx-auto">
        <h1 class="text-3xl font-bold text-onBackground mb-8">Edit Service: {{ $service->title }}</h1>

        <form method="POST" action="{{ route('admin.services.update', $service) }}" class="space-y-6 bg-surface p-6 rounded-lg shadow">
            @csrf
            @method('PUT')

            <div>
                <label for="title" class="block text-sm font-medium text-onSurface mb-1">Title</label>
                <input type="text" name="title" id="title" value="{{ old('title', $service->title) }}" required
                       class="w-full px-4 py-2 border border-gray-300 rounded focus:ring-2 focus:ring-primary bg-white text-onBackground" />
            </div>

            <div>
                <label for="slug" class="block text-sm font-medium text-onSurface mb-1">Slug</label>
                <input type="text" name="slug" id="slug" value="{{ old('slug', $service->slug) }}" required
                       class="w-full px-4 py-2 border border-gray-300 rounded focus:ring-2 focus:ring-primary bg-white text-onBackground" />
            </div>

            <div>
                <label for="content" class="block text-sm font-medium text-onSurface mb-1">Content</label>
                <textarea name="content" id="content" rows="6"
                          class="w-full px-4 py-2 border border-gray-300 rounded focus:ring-2 focus:ring-primary bg-white text-onBackground">{{ old('content', $service->content) }}</textarea>
            </div>

            <div>
                <label for="seo_title" class="block text-sm font-medium text-onSurface mb-1">SEO Title</label>
                <input type="text" name="seo_title" id="seo_title" value="{{ old('seo_title', $service->seo_title) }}"
                       class="w-full px-4 py-2 border border-gray-300 rounded focus:ring-2 focus:ring-primary bg-white text-onBackground" />
            </div>

            <div>
                <label for="meta_description" class="block text-sm font-medium text-onSurface mb-1">Meta Description</label>
                <input type="text" name="meta_description" id="meta_description" value="{{ old('meta_description', $service->meta_description) }}"
                       class="w-full px-4 py-2 border border-gray-300 rounded focus:ring-2 focus:ring-primary bg-white text-onBackground" />
            </div>

            <div>
                <label for="status" class="block text-sm font-medium text-onSurface mb-1">Status</label>
                <select name="status" id="status"
                        class="w-full px-4 py-2 border border-gray-300 rounded focus:ring-2 focus:ring-primary bg-white text-onBackground">
                    <option value="published" @selected(old('status', $service->status) === 'published')>Published</option>
                    <option value="draft" @selected(old('status', $service->status) === 'draft')>Draft</option>
                </select>
            </div>

            <div class="text-right">
                <button type="submit"
                        class="bg-primary text-onPrimary px-6 py-2 rounded hover:bg-primaryVariant transition font-medium">
                    Update Service
                </button>
            </div>
        </form>
    </div>
@endsection
