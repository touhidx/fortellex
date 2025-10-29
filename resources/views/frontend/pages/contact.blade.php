@extends('frontend.layouts.app')

@section('title', 'Contact Us - Fortelle')

@section('content')
<div class="container">
    <div class="page-hero mb-5">
        <div class="container">
            <h1 class="display-4 fw-bold mb-4">CONTACT US</h1>
            <p class="lead">We'd love to hear from you. Get in touch with any questions or feedback.</p>
        </div>
    </div>

    <div class="row mb-5">
        <div class="col-md-4">
            <div class="contact-info-box">
                <i class="bi bi-geo-alt"></i>
                <h4>Visit Our Store</h4>
                <p>123 Fashion Avenue<br>New York, NY 10001</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="contact-info-box">
                <i class="bi bi-telephone"></i>
                <h4>Call Us</h4>
                <p>+1 (555) 123-4567<br>Mon-Fri: 9AM-6PM EST</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="contact-info-box">
                <i class="bi bi-envelope"></i>
                <h4>Email Us</h4>
                <p>info@fortelle.com<br>support@fortelle.com</p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">
            <div class="card border-0 shadow-sm">
                <div class="card-body p-4">
                    <h3 class="card-title mb-4">Send Us a Message</h3>
                    <form action="{{ route('contact.submit') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="firstName" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="firstName" name="first_name" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="lastName" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="lastName" name="last_name" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="subject" class="form-label">Subject</label>
                            <input type="text" class="form-control" id="subject" name="subject" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body p-4">
                    <h3 class="card-title mb-4">Store Information</h3>
                    <div class="mb-4">
                        <h5>Main Store</h5>
                        <p class="mb-1">123 Fashion Avenue</p>
                        <p class="mb-1">New York, NY 10001</p>
                        <p class="mb-0">United States</p>
                    </div>
                    <div class="mb-4">
                        <h5>Opening Hours</h5>
                        <p class="mb-1">Monday - Friday: 9:00 AM - 8:00 PM</p>
                        <p class="mb-1">Saturday: 10:00 AM - 7:00 PM</p>
                        <p class="mb-0">Sunday: 11:00 AM - 6:00 PM</p>
                    </div>
                    <div>
                        <h5>Follow Us</h5>
                        <div class="social-icons mt-3">
                            <a href="#"><i class="bi bi-facebook"></i></a>
                            <a href="#"><i class="bi bi-instagram"></i></a>
                            <a href="#"><i class="bi bi-twitter"></i></a>
                            <a href="#"><i class="bi bi-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection