@extends('admin.admin_master')

@section('contand')

<!-- Custom CSS Styling -->
<style>
    /* Post Form Container */
    .postform {
    background-color: #f9f9f9;
    border-radius: 10px;
    padding: 20px;
    margin-left: 210px;
    margin-right: 20px;
    max-width: 800px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}


.blog{
    margin-top: 70px;
}
    /* Form Group Styling */
    .form-group2 {
        margin-bottom: 20px;
    }

    .form-group2 label {
        font-weight: bold;
        color: #333;
        margin-bottom: 5px;
        display: block;
    }

    .form-group2 input, 
    .form-group2 textarea, 
    .form-group2 select {
        width: 100%;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 5px;
        font-size: 16px;
        box-sizing: border-box;
        transition: border-color 0.3s;
    }

    .form-group2 input:focus, 
    .form-group2 textarea:focus, 
    .form-group2 select:focus {
        border-color: #007bff;
        outline: none;
    }

    /* File Input Styling */
    .form-group2 input[type="file"] {
        border: none;
    }

    /* Submit Button Styling */
    button {
        background-color: #007bff;
        color: #fff;
        padding: 12px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
        transition: background-color 0.3s;
        display: block;
        width: 100%;
    }

    button:hover {
        background-color: #0056b3;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .postform {
            margin-left: 0;
            margin-right: 0;
            padding: 15px;
        }

        button {
            font-size: 14px;
            padding: 10px;
        }
    }
</style>



<div class="posreta">
    <form action="{{ route('posts.store') }}" method="POST" class="postform" enctype="multipart/form-data">
        @csrf
        <!-- Blog Title -->
         <div class="blog">

        
        <div class="form-group2">
            <label for="title"  >Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Enter blog title" required>
        </div>

        <!-- Blog Content -->
        <div class="form-group2">
            <label for="content">Content</label>
            <textarea class="form-control" id="content" name="contant" rows="5" placeholder="Write your blog content" required></textarea>
        </div>

        <!-- Category -->
        <div class="form-group2">
            <label for="category">Category</label>
            <select class="form-control" id="category" name="category">
                @foreach ($category as $categories)
        
                <option value="{{$categories->category_name}}">{{$categories->category_name}}</option>
               

                @endforeach
            </select>
        </div>

        <!-- Image Upload -->
        <div class="form-group2">
            <label for="image">Blog Image</label>
            <input type="file" class="form-control-file" id="image" name="image">
        </div>

        <!-- Publish Button -->
        <button type="submit">Publish Post</button>
        </div>
    </form>
</div>



@endsection
