@extends('admin.admin_master')

@section('contand')


<style>
    .table-bordered{
        width: 700px;
        margin-left: 220px;
        margin-top: 100px;
    }


    .btn-warning{
        background-color: turquoise;
        padding: 5px 10px;
        border-radius: 5px;
    }

    button{
        background-color: red;
        padding: 5px 10px;
        border: none;
        border-radius: 5px;

    }

    button:hover{
        background-color: tomato;
    }
</style>

<div class="container mt-5">
    <h2>Post List</h2>

    <!-- Success message display -->
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <!-- Post Table -->
     
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Content</th>
                <th>Category</th>
                <th>Image</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ Str::limit($post->contant, 50) }}</td> <!-- Limit content display -->
                    <td>{{ $post->category }}</td>
                    <td>
                        @if ($post->image)
                            <img src="{{ asset('storage/' . $post->image) }}" alt="Post Image" style="width: 100px; height: auto;">
                        @else
                            No Image
                        @endif
                    </td>
                    <td>
                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning">Edit</a>

                    </td>
                    <td>
                        <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            
        </tbody>
    </table>
</div>

@endsection
