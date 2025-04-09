@extends('layouts.app')
@section('title','Show Post')

@section('content')

    <div class="container mt-5">
        <h1 class="text-center post-header mb-4 text-primary">{{ $post->title }}</h1>
        <h3 class="text-center text-secondary">{{ $post->description }}</h3>

        <div class="text-center mt-4">
            <span class="badge bg-success fs-5">Price: ${{ number_format($post->price, 2) }}</span>
        </div>

        <!-- Back to Index Button -->
        <div class="text-center back-btn mt-4">
            <a href="{{ route('posts.index') }}" class="btn btn-outline-primary">⬅ Back</a>
        </div>
    </div>
@endsection

@section('styles')
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
@endsection