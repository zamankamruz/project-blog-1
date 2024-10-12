@extends('admin.admin_master')

@section('contand')

<div class="container mt-5">
    <h2>Edit Post</h2>

    <!-- Success message display -->
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="postform">
        <form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- Blog Title -->
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $post->title) }}" placeholder="Enter blog title" required>
            </div>

            <!-- Blog Content -->
            <div class="form-group">
                <label for="content">Content</label>
                <textarea class="form-control" id="content" name="contant" rows="5" placeholder="Write your blog content" required>{{ old('content', $post->contant) }}</textarea>
            </div>

            <!-- Category -->
            <div class="form-group">
                <label for="category">Category</label>
                <select class="form-control" id="category" name="category" required>
                   @foreach ($category as $categorie)
                      <option value="{{ $categorie->category_name }}" {{ $post->category == $categorie->category_name ? 'selected' : '' }}>{{ $categorie->category_name }}</option>
                   @endforeach
                </select>
            </div>

            <!-- Image Upload -->
            <div class="form-group">
                <label for="image">Blog Image</label>
                <input type="file" class="form-control-file" id="image" name="image">
                @if ($post->image)
                    <small>Current Image:</small><br>
                    <img src="{{ asset('storage/' . $post->image) }}" alt="Current Image" style="width: 100px; height: auto;">
                @endif
            </div>

            <!-- Update Button -->
            <button type="submit" class="btn btn-primary">Update Post</button>
        </form>
    </div>
</div>

<style>
    .postform {

        margin-top: 90px;
        margin-left: 220px;
        background-color: #f9f9f9;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        font-weight: bold;
        color: #333;
    }

    .form-group input,
    .form-group textarea,
    .form-group select {
        width: 100%;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 5px;
        font-size: 16px;
    }

    button {
        background-color: #007bff;
        color: #fff;
        padding: 12px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    button:hover {
        background-color: #0056b3;
    }
</style>

@endsection
