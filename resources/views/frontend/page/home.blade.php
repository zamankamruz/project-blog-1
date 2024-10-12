@extends('frontend.master')

@section('contand')

<section class="blog-posts">
        <div class="container">
            <h2>Latest Posts</h2>
                <div class="posts-grid">
                    @foreach ($posts as $post)
                        <div class="post">
                            @if ($post->image)
                                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" style="width: 300px; height: 200px; object-fit: cover;">
                            @else
                                <img src="https://via.placeholder.com/300x200?text=No+Image" alt="No Image">
                            @endif
                            <h3>{{ $post->title }}</h3>
                            <a href="{{ route('post.show', ['id' => $post->id, 'title' => Str::slug($post->title)]) }}">Read me</a>
                            </div>
                    @endforeach
                </div>

        </div>
    </section>

@endsection


