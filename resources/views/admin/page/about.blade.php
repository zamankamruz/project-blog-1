@extends('admin.admin_master')

@section('contand')

<style>
    /* Form container */


    .teamform{
        width: 500px;
        height: 100px;

    }


.team-form-container {
    
    max-width: 750px;
    margin: 0 auto;
    padding: 20px;
    margin-left: 220px;
    background-color: #f9f9f9;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    font-family: 'Arial', sans-serif;
}




/* Form heading */
.team-form-container h2 {
    text-align: center;
    font-size: 24px;
    margin-bottom: 20px;
    color: #333;
}

/* Form group styling */
.form-group {
    margin-bottom: 15px;
}

/* Label styling */
.form-group label {
    display: block;
    margin-bottom: 5px;
    font-size: 14px;
    color: #555;
}

/* Input styling */
.form-group input[type="text"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    color: #333;
    background-color: #fff;
    box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
    transition: border-color 0.3s ease-in-out;
}

/* Input hover/focus effects */
.form-group input[type="text"]:focus {
    border-color: #007bff;
    outline: none;
}

/* Button styling */
.submit-btn {
    width: 100%;
    padding: 10px;
    font-size: 16px;
    color: #fff;
    background-color: #007bff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s ease-in-out;
}

/* Button hover effect */
.submit-btn:hover {
    background-color: #0056b3;
}

</style>

<div class="teamform">

 
</div>

<div class="team-form-container">
    <h2>Add Team Member</h2>
    <form action="{{ route('team.store') }}" method="POST" class="team-form" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Team Member Name</label>
            <input type="text" id="name" name="name" placeholder="Enter name" required value="{{ old('name') }}">
            @if ($errors->has('name'))
                <span class="error-message">{{ $errors->first('name') }}</span>
            @endif
        </div>

        <div class="form-group">
            <label for="role">Role</label>
            <input type="text" id="role" name="role" placeholder="Enter role" required value="{{ old('role') }}">
            @if ($errors->has('role'))
                <span class="error-message">{{ $errors->first('role') }}</span>
            @endif
        </div>

        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" id="image" name="image">
            @if ($errors->has('image'))
                <span class="error-message">{{ $errors->first('image') }}</span>
            @endif
        </div>

        <div class="form-group">
            <button type="submit" class="submit-btn">Add Team Member</button>
        </div>
    </form>
</div>





@endsection