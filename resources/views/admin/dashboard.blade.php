@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
    <h1>Admin Dashboard</h1>
    <ul>
        <li><a href="{{ route('admin.pages.index') }}">Manage Pages</a></li>
        <li><a href="{{ route('admin.posts.index') }}">Manage Posts</a></li>
        <li><a href="{{ route('admin.services.index') }}">Manage Services</a></li>
    </ul>
@endsection
