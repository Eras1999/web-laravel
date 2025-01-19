@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <h1>Contact Us</h1>
            <p class="lead">Get in touch with us for any inquiries.</p>
            
            <form>
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" required>
                </div>
                
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" required>
                </div>
                
                <div class="mb-3">
                    <label for="subject" class="form-label">Subject</label>
                    <input type="text" class="form-control" id="subject">
                </div>
                
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" rows="5" required></textarea>
                </div>
                
                <button type="submit" class="btn btn-primary">Send Message</button>
            </form>
        </div>
        
        <div class="col-md-6">
            <h2>Our Location</h2>
            <p>123 Web Street<br>
            Digital City, DC 12345<br>
            United States</p>
            
            <h2>Contact Info</h2>
            <p>
                Email: info@example.com<br>
                Phone: (123) 456-7890<br>
                Hours: Mon-Fri 9am-5pm
            </p>
        </div>
    </div>
</div>
@endsection