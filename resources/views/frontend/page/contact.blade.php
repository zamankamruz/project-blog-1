@extends('frontend.master')

@section('contand')


<style>


/* Contact Section */
.contact-section {
    padding: 50px 0;
}

.contact-section h2 {
    text-align: center;
    margin-bottom: 20px;
    font-size: 28px;
}

.contact-section p {
    text-align: center;
    margin-bottom: 40px;
    font-size: 16px;
}

.contact-grid {
    display: flex;
    gap: 30px;
}

.contact-form, .contact-info {
    flex: 1;
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.contact-form .form-group {
    margin-bottom: 20px;
}

.contact-form label {
    display: block;
    margin-bottom: 5px;
}

.contact-form input, .contact-form textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
    font-size: 16px;
}

.contact-form textarea {
    resize: vertical;
}

.contact-form .btn {
    display: inline-block;
    padding: 10px 20px;
    background-color: #333;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
}

.contact-form .btn:hover {
    background-color: #555;
}




/* Improved Contact Info Styling */
.contact-info {
    background-color: #f9f9f9;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
}

.contact-info h3 {
    font-size: 22px;
    margin-bottom: 15px;
    color: #333;
}

.info-list {
    list-style: none;
    padding: 0;
}

.info-list li {
    display: flex;
    align-items: center;
    margin-bottom: 15px;
}

.info-list li i {
    margin-right: 10px;
    color: #555;
}

.contact-info p {
    margin: 0;
    font-size: 16px;
}

.social-links {
    margin-top: 20px;
}

.social-links a {
    display: inline-flex;
    align-items: center;
    margin-right: 15px;
    text-decoration: none;
    color: #333;
    font-size: 16px;
    transition: color 0.3s ease;
}

.social-links a i {
    margin-right: 8px;
    color: #555;
    transition: color 0.3s ease;
}

.social-links a:hover {
    color: #007bff;
}

.social-links a:hover i {
    color: #007bff;
}

/* Feather Icon Styling */
.icon {
    width: 20px;
    height: 20px;
    margin-right: 10px;
    stroke-width: 2;
    color: #333;
    transition: color 0.3s ease;
}

.info-list li:hover .icon, .social-links a:hover .icon {
    color: #007bff;
}













/* Map Section */
.map-section {
    padding: 50px 0;
    background-color: #fff;
}

.map-section h3 {
    text-align: center;
    margin-bottom: 20px;
}

.map-embed {
    text-align: center;
    max-width: 100%;
}

.map-embed iframe {
    width: 100%;
    border-radius: 8px;
    border: none;
}


</style>


 <!-- Contact Section -->
 <section class="contact-section">
        <div class="container">
            <h2>Contact Us</h2>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
           @endif

            <div class="contact-grid">
                <!-- Contact Form -->
                <div class="contact-form">
                <form action="{{ route('contact.send') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Your Name</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Your Email</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Your Message</label>
                        <textarea id="message" name="message" rows="6" required></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn">Send Message</button>
                    </div>
                </form>

                </div>



                <div class="contact-info">
                    <h3>Get in Touch</h3>
                    @foreach ($contact_info as $contact_infoe)
                    
                    @endforeach
                    <ul class="info-list">
                        <li>
                            <i class="icon" data-feather="mail"></i>
                            <p><strong>Email:</strong> {{$contact_infoe->email}}</p>
                        </li>
                        <li>
                            <i class="icon" data-feather="phone"></i>
                            <p><strong>Phone:</strong> {{$contact_infoe->phone}}</p>
                        </li>
                        <li>
                            <i class="icon" data-feather="map-pin"></i>
                            <p><strong>Address:</strong> {{$contact_infoe->address}}</p>
                        </li>
                    </ul>

                    <h3>Follow Us</h3>
                    <div class="social-links">
                        <a href="{{$contact_infoe->facebook}}" target="blank" ><i class="icon" data-feather="facebook"></i> Facebook</a>
                        <a href="{{$contact_infoe->twitter}}" target="blank" ><i class="icon" data-feather="twitter"></i> Twitter</a>
                        <a href="{{$contact_infoe->	linkedin}}" target="blank" ><i class="icon" data-feather="linkedin"></i> LinkedIn</a>
                    </div>
                </div>



            </div>
        </div>
    </section>

    <!-- Google Maps Embed -->
    <section class="map-section">
        <div class="container">
            <h3>Our Location</h3>
            <div class="map-embed">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.8354345081166!2d144.95373531567973!3d-37.81627967975157!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0f11fd81%3A0xf577d1f1e4c12e0!2sFlinders+Street+Station!5e0!3m2!1sen!2sau!4v1516176055467" 
                    width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </section>

    <script>
    feather.replace();
</script>

@endsection