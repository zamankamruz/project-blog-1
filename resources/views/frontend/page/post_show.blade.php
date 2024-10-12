@extends('frontend.master')

@section('contand')

<style>
    /* Post Container */
    .post-container {
        display: flex;
        justify-content: space-between;
        margin: 30px;
    }

    /* Post Content Section */
    .post-design {
        width: 70%;
        margin-right: 30px;
    }

    /* Post Title */
    .post-title {
        font-size: 25px;
        color: #333;
        margin-bottom: 25px;
    }

    /* Post Image */
    .post-image .notworking {
        width: 100%;
        height: auto;
        text-align: center;
        margin-bottom: 10px;
        max-width: 250px;
        max-height: 250px;
    }

    /* Post Content */
    .post-content {
        font-size: 1.1rem;
        line-height: 1.8;
        color: #555;
        text-align: justify;
        margin-bottom: 30px;
    }

    /* Post Category */
    .post-category {
        display: inline-block;
        font-size: 1rem;
        font-weight: 600;
        color: #007bff;
        background-color: #e7f3ff;
        padding: 10px 18px;
        border-radius: 25px;
        margin-bottom: 30px;
        transition: background-color 0.3s ease;
    }

    .post-category:hover {
        background-color: #d0e8ff;
    }

    .post-category i {
        margin-right: 8px;
    }

    /* Call to Action Button */
    .post-cta {
        margin-bottom: 40px;
    }

    .post-cta a {
        text-decoration: none;
    }

    .post-cta .btn-primary {
        background-color: #007bff;
        color: #ffffff;
        padding: 12px 25px;
        border: none;
        border-radius: 8px;
        font-size: 1rem;
        font-weight: 500;
        transition: background-color 0.3s ease;
    }

    .post-cta .btn-primary:hover {
        background-color: #0056b3;
    }

    /* Latest Posts Section */
    .latest-posts {
        width: 25%;
    }

    .latest-posts h2 {
        font-size: 24px;
        margin-bottom: 20px;
    }

    .latest-posts .posts-grid {
        display: block; /* Ensures posts are stacked vertically */
    }

    .latest-posts .post {
        margin-bottom: 20px;
        text-align: center;
    }

    .latest-posts .post img {
        width: 250px;
        height: 250px;
        object-fit: cover;
        margin-bottom: 10px;
    }

    .latest-posts .post h3 {
        font-size: 1.2rem;
        margin-bottom: 10px;
    }

    .latest-posts .post a {
        text-decoration: none;
        color: #007bff;
        font-weight: 600;
    }

    .latest-posts .post a:hover {
        color: #0056b3;
    }

    /* Media Queries for Responsiveness */
    @media screen and (max-width: 768px) {
        .post-container {
            flex-direction: column;
        }

        .post-design, .latest-posts {
            width: 100%;
        }

        .latest-posts {
            margin-top: 30px;
        }
    }
</style>

<div class="post-container">

    <!-- Main Post Content -->
    <div class="post-design">
        <h1 class="post-title">{{ $post_data->title }}</h1>

        <!-- Post Image Section -->
        <div class="post-image">
            <img class="notworking" src="{{ asset('storage/' . $post_data->image) }}" alt="{{ $post_data->title }}">
        </div>

        <!-- Post Content Section -->
        <div class="post-content">
            <p>{{ $post_data->contant }}</p>
        </div>

        <!-- Post Category Section -->
        <div class="post-category">
            <span><i class="fas fa-tag"></i> {{ $post_data->category }}</span>
        </div>

        <!-- Call to Action -->
        <div class="post-cta">
            <a href="{{ route('blog') }}" class="btn-primary">Back to Blog</a>
        </div>
    </div>

    <!-- Latest Posts Section -->
    <div class="latest-posts">
        <h2>Latest Posts</h2>
        <div class="posts-grid">
            @foreach ($posts->take(3) as $post)
                <div class="post">
                    @if ($post->image)
                        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}">
                    @else
                        <img src="https://via.placeholder.com/250x250?text=No+Image" alt="No Image">
                    @endif
                    <h3>{{ $post->title }}</h3>
                    <a href="{{ route('post.show', ['id' => $post->id, 'title' => Str::slug($post->title)]) }}">Read More</a>
                </div>
            @endforeach
        </div>
    </div>

</div>

@endsection
