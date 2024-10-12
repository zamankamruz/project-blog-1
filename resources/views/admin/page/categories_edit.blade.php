@extends('admin.admin_master')

@section('contand')


<style>


  /* Form Styling */
  .edit-form {
        width: 500px;
        height: 500px;
        margin-top: 100px;
        margin-left: 220px;
        display: flex;
        flex-direction: column;
        gap: 15px;
    }

    .form-group {
        display: flex;
        flex-direction: column;
    }

    label {
  
        font-size: 16px;
        color: #333;
        margin-bottom: 5px;
        font-weight: bold;
    }

    .input-field {
        margin-top: 10px;
        padding: 10px;
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 5px;
        transition: border-color 0.3s;
    }

    .input-field:focus {
        border-color: #007bff;
        outline: none;
    }

    /* Submit Button */
    .submit-btn {
        padding: 12px;
        font-size: 16px;
        background-color: #007bff;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .submit-btn:hover {
        background-color: #0056b3;
    }

    
</style>


<div class="container">
    
    <h2>Edit Category</h2>

    <!-- Success message display -->
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <!-- Error message display -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    
 <!-- Edit category form -->
 <form action="{{ route('categories.update', $category->id) }}" method="POST" class="edit-form">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="category_name">Category Name</label>
        <!-- The new category name -->
        <input type="text" name="category_name" id="category_name" class="input-field" value="{{ $category->category_name }}" required>

        <!-- The original category name, hidden field -->
        <input type="hidden" name="category_not" value="{{ $category->category_name }}">
    </div>

    <button type="submit" class="submit-btn">Update Category</button>
</form>


</div>


@endsection