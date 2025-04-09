@extends('layouts.app')
@section('title','Edit Post')

@section('content')
    <div class="container mt-5">
        <h1 class="text-center">Edit Post</h1>
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <form id="editForm" action="{{ route('posts.update', $post->id) }}" method="POST">
                    @csrf
                    @method('PATCH')

                    <div class="mb-3">
                        <label for="editTitle" class="form-label">Title</label>
                        <input type="text" class="form-control" name="title" id="editTitle"
                            value="{{ $post->title }}">
                    </div>
                    <div class="mb-3">
                        <label for="editDescription" class="form-label">Description</label>
                        <textarea class="form-control" id="editDescription" name="description" rows="3">{{ $post->description }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="editPrice" class="form-label">Price</label>
                        <input type="number" step="0.01" class="form-control" id="editPrice" name="price" value="{{ $post->price }}">
                    </div>
                    <button type="submit" class="btn btn-warning">Update Post</button>
                    <a href="{{ route('posts.index') }}" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection