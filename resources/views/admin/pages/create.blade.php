@extends('layouts.admin')

@section('title', 'Create Page')

@section('content')
    <div class="max-w-3xl mx-auto">
        <h1 class="text-3xl font-bold text-onBackground mb-8">Create New Page</h1>

        <form method="POST" action="{{ route('admin.pages.store') }}" class="space-y-6 bg-surface p-6 rounded-lg shadow">
            @csrf

            <div>
                <label for="title" class="block text-sm font-medium text-onSurface mb-1">Title</label>
                <input type="text" name="title" id="title" required
                       class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-primary text-onBackground bg-white" />
            </div>

            <div>
                <label for="slug" class="block text-sm font-medium text-onSurface mb-1">Slug</label>
                <input type="text" name="slug" id="slug" required
                       class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-primary text-onBackground bg-white" />
            </div>

            <div>
                <label for="content" class="block text-sm font-medium text-onSurface mb-1">Content</label>
                <textarea name="content" id="content" rows="6"
                          class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-primary text-onBackground bg-white"></textarea>
            </div>

            <div>
                <label for="seo_title" class="block text-sm font-medium text-onSurface mb-1">SEO Title</label>
                <input type="text" name="seo_title" id="seo_title"
                       class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-primary text-onBackground bg-white" />
            </div>

            <div>
                <label for="meta_description" class="block text-sm font-medium text-onSurface mb-1">Meta Description</label>
                <input type="text" name="meta_description" id="meta_description"
                       class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-primary text-onBackground bg-white" />
            </div>

            <div>
                <label for="status" class="block text-sm font-medium text-onSurface mb-1">Status</label>
                <select name="status" id="status"
                        class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-primary text-onBackground bg-white">
                    <option value="published">Published</option>
                    <option value="draft">Draft</option>
                </select>
            </div>

            <div class="text-right">
                <button type="submit"
                        class="bg-primary text-onPrimary px-6 py-2 rounded hover:bg-primaryVariant transition font-medium">
                    Save Page
                </button>
            </div>
        </form>
    </div>
@endsection
