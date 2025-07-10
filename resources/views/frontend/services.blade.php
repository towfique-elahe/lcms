@extends('frontend.layout')

@php
    $seo = [
        'title' => 'Our Services',
        'description' => 'Explore the professional services we offer.',
        'canonical' => url('/services'),
    ];
@endphp

@section('content')
    <div class="min-h-screen bg-background px-4 py-12 md:py-20 animate-fade-in font-sans">
        <div class="max-w-5xl mx-auto">
            <h1 class="text-4xl md:text-5xl font-extrabold text-onBackground mb-12 text-center">
                Our <span class="text-primary">Services</span>
            </h1>

            <div class="grid gap-8 md:grid-cols-2">
                @forelse ($services as $service)
                    <div class="bg-surface rounded-lg shadow p-6 hover:shadow-md transition">
                        <h2 class="text-2xl font-semibold text-onBackground mb-2">
                            <a href="{{ route('service.show', $service->slug) }}"
                               class="hover:text-primary transition-colors">
                                {{ $service->title }}
                            </a>
                        </h2>
                        <p class="text-onSurface text-base mb-4">
                            {{ Str::limit($service->excerpt, 150) }}
                        </p>
                        <a href="{{ route('service.show', $service->slug) }}"
                           class="inline-block text-sm font-medium text-primary hover:underline">
                            Learn More →
                        </a>
                    </div>
                @empty
                    <p class="text-onBackground text-center col-span-full">No services available at the moment.</p>
                @endforelse
            </div>
        </div>
    </div>
@endsection
