@extends('admin.admin_master')

@section('contand')

<style>


.container {
   
    max-width: 1000px;
    margin: 0 auto;
    padding: 20px;
}

.category {
    margin-top: 70px;
    margin-left: 200px;
    background: white;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    padding: 20px;
}

.message {
    margin-bottom: 20px;
}

.alert {
    padding: 15px;
    margin-bottom: 20px;
    border-radius: 5px;
    position: relative;
}

.alert.success {
    background-color: #d4edda;
    color: #155724;
}

.alert.error {
    background-color: #f8d7da;
    color: #721c24;
}

.close-btn {
    position: absolute;
    top: 10px;
    right: 15px;
    cursor: pointer;
    font-size: 20px;
}

.catform {
    margin-bottom: 30px;
}

.form-group {
    margin-top: 10px;
    margin-bottom: 15px;
}

label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}

input.form-control {
    width: 100%;
    padding: 10px;
    border: 1px solid #ced4da;
    border-radius: 5px;
}

.btn {
    background-color: #007bff;
    color: white;
    border: none;
    padding: 10px 15px;
    border-radius: 5px;
    cursor: pointer;
}

.btn:hover {
    background-color: #0056b3;
}

.table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

.table th, .table td {
    padding: 10px;
    border: 1px solid #dee2e6;
    text-align: left;
}

.table th {
    background-color: #f1f1f1;
}

.edit-button {
    color: #007bff;
    text-decoration: none;
}

.edit-button:hover {
    text-decoration: underline;
}

.btn-danger {
    background-color: #dc3545;
    border: none;
    padding: 5px 10px;
    border-radius: 5px;
    cursor: pointer;
}

.btn-danger:hover {
    background-color: #c82333;
}

</style>

<div class="container">
    <div class="category">
        <div class="message">
            <!-- Success Message -->
            @if (session('success'))
                <div class="alert success" id="success-alert">
                    {{ session('success') }}
                    <span class="close-btn">&times;</span>
                </div>
            @endif

            <!-- Error Message (for validation) -->
            @if ($errors->any())
                <div class="alert error" id="error-alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <span class="close-btn">&times;</span>
                </div>
            @endif
        </div>

        <form class="catform" action="{{ route('categories.store') }}" method="POST">
            @csrf
            <h2>Add New Category</h2>
            <div class="form-group">
                
                <input type="text" name="category_name" placeholder="Category Name" id="category_name" class="form-control" value="{{ old('category_name') }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Add Category</button>
        </form>


        

        <h2>Categories List</h2>

        <!-- Table to show categories -->
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Category Name</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->category_name }}</td>
                        <td>
                            <a href="{{ route('categories.edit', $category->id) }}" class="edit-button">Edit</a>
                        </td>
                        <td>
                            <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display:inline;">
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
</div>

<script>
    // Hide the success/error messages after 3 seconds
    setTimeout(function() {
        let successAlert = document.getElementById('success-alert');
        if (successAlert) {
            successAlert.style.opacity = "0";
            setTimeout(function() {
                successAlert.remove();
            }, 500);
        }

        let errorAlert = document.getElementById('error-alert');
        if (errorAlert) {
            errorAlert.style.opacity = "0";
            setTimeout(function() {
                errorAlert.remove();
            }, 500);
        }
    }, 3000);
    
    // Close button functionality for alerts
    document.querySelectorAll('.close-btn').forEach(function(button) {
        button.onclick = function() {
            this.parentElement.style.opacity = "0";
            setTimeout(() => this.parentElement.remove(), 500);
        };
    });
</script>
@endsection
