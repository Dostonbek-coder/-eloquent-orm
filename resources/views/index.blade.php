@extends('layouts.app')
@section('title','Posts')

@section('content')
    <div class="container mt-5">
        <h1 class="text-center text-primary">Post CRUD</h1>
        <div class="row">
            <div class="col-md-12">
                <a href="{{ route('posts.create') }}" class="btn btn-success mb-3">➕ Add New Post</a>
                <table class="table table-bordered table-hover shadow-lg">
                    <thead class="table-dark text-center">
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        
                        @if (isset($posts) && count($posts) > 0)
                            @foreach ($posts as $post)
                                <tr>
                                    <td class="fw-bold">{{ $post->id }}</td>
                                    <td>{{ $post->title }}</td>
                                    <td>{{ $post->description }}</td>
                                    <td class="text-success">${{ number_format($post->price, 2) }}</td>
                                    <td>
                                        <a href="{{ route('posts.show', $post->id) }}" class="btn btn-info btn-sm">👁 Show</a>
                                        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning btn-sm">✏️ Edit</a>
                                        <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">🗑 Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="5" class="text-danger text-center fw-bold">No posts available!</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection