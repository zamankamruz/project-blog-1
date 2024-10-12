@extends('admin.admin_master')

@section('contand')

<style>
    /* Contact Form Styles */

    .formcontace{
        max-width: 500px;
        height: 100px;
    }
.contact-form {
    max-width: 750px;
    margin: 0 auto;
    margin-left: 200px;
    background-color: #f9f9f9;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    font-family: 'Arial', sans-serif;
}

.contact-form h2 {
    text-align: center;
    font-size: 24px;
    margin-bottom: 20px;
    color: #333;
}

.contact-form .form-group {
    margin-bottom: 20px;
}

.contact-form .form-group label {
    display: block;
    font-size: 16px;
    margin-bottom: 5px;
    color: #555;
}

.contact-form .form-group input,
.contact-form .form-group textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ddd;
    border-radius: 6px;
    font-size: 14px;
    box-sizing: border-box;
    background-color: #fff;
    transition: border-color 0.3s;
}

.contact-form .form-group input:focus,
.contact-form .form-group textarea:focus {
    border-color: #007BFF;
    outline: none;
}

.contact-form .form-group input[type="submit"],
.contact-form .btn {
    background-color: #007BFF;
    color: white;
    border: none;
    cursor: pointer;
    padding: 12px 20px;
    font-size: 16px;
    border-radius: 6px;
    width: 100%;
    transition: background-color 0.3s;
}

.contact-form .btn:hover {
    background-color: #0056b3;
}

.contact-form .form-group input[type="submit"]:hover {
    background-color: #0056b3;
}

.contact-form .form-group input[type="url"],
.contact-form .form-group input[type="text"],
.contact-form .form-group input[type="email"] {
    font-size: 16px;
}

.contact-form .form-group textarea {
    resize: none;
    font-size: 16px;
    height: 120px;
}

@media (max-width: 768px) {
    .contact-form {
        padding: 15px;
    }

    .contact-form h2 {
        font-size: 20px;
    }

    .contact-form .form-group input,
    .contact-form .form-group textarea {
        padding: 10px;
    }

    .contact-form .btn {
        padding: 10px 16px;
        font-size: 14px;
    }
}

</style>

<div class="formcontace">

</div>

<div class="contact-form">
    @foreach ($contact_info as $contact_infoe)
    
    <form action="{{ route('contact-info.store') }}" method="POST">
        @csrf
        <h2>Contact info</h2>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" value="{{$contact_infoe->email}}" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" id="phone" value="{{$contact_infoe->phone}}"  name="phone" required>
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" id="address" value="{{$contact_infoe->address}}" name="address" required>
        </div>
        <div class="form-group">
            <label for="facebook">Facebook URL</label>
            <input type="url" id="facebook" value="{{$contact_infoe->facebook}}" name="facebook">
        </div>
        <div class="form-group">
            <label for="twitter">Twitter URL</label>
            <input type="url" id="twitter" value="{{$contact_infoe->twitter}}" name="twitter">
        </div>
        <div class="form-group">
            <label for="linkedin">LinkedIn URL</label>
            <input type="url" id="linkedin" value="{{$contact_infoe->linkedin}}" name="linkedin">
        </div>
        <div class="form-group">
            <button type="submit" class="btn">Save Contact Info</button>
        </div>
    </form>
    @endforeach
</div>



@endsection