@extends('frontend.layouts.app')

@section('title', 'About Us - Fortelle')

@section('content')
<div class="container">
    <div class="page-hero mb-5">
        <div class="container">
            <h1 class="display-4 fw-bold mb-4">ABOUT FORTELLE</h1>
            <p class="lead">Our story of passion, craftsmanship, and style</p>
        </div>
    </div>

    <div class="row align-items-center mb-5">
        <div class="col-md-6">
            <h2 class="mb-4">Our Story</h2>
            <p class="mb-4">Founded in 2010, Fortelle began as a small boutique with a simple vision: to provide high-quality, timeless fashion that transcends trends. Our founders, Sarah and Michael Johnson, believed that everyone deserves to wear clothing that makes them feel confident and elegant.</p>
            <p class="mb-4">Over the years, we've grown from a single store to an international brand, but our commitment to quality and craftsmanship has never wavered. Each piece in our collection is carefully selected or designed to meet our exacting standards.</p>
            <p>Today, Fortelle continues to blend traditional techniques with contemporary design, creating fashion that stands the test of time while embracing modern aesthetics.</p>
        </div>
        <div class="col-md-6">
            <img src="https://images.unsplash.com/photo-1441986300917-64674bd600d8?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" class="img-fluid rounded shadow" alt="Our Story">
        </div>
    </div>

    <div class="row mb-5">
        <div class="col-12">
            <div class="section-title">
                <h2>Our Values</h2>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="feature-box bg-white shadow-sm">
                <i class="bi bi-award"></i>
                <h4>Quality Craftsmanship</h4>
                <p>We believe in the enduring value of well-made clothing. Each piece is crafted with attention to detail and made to last.</p>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="feature-box bg-white shadow-sm">
                <i class="bi bi-heart"></i>
                <h4>Sustainable Practices</h4>
                <p>We're committed to ethical sourcing and sustainable production methods that minimize our environmental impact.</p>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="feature-box bg-white shadow-sm">
                <i class="bi bi-people"></i>
                <h4>Customer Focus</h4>
                <p>Our customers are at the heart of everything we do. We strive to provide exceptional service and build lasting relationships.</p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="section-title">
                <h2>Our Team</h2>
            </div>
        </div>
        @foreach($teamMembers as $member)
        <div class="col-md-4 mb-4">
            <div class="card border-0 text-center">
                <img src="{{ $member->image }}" class="card-img-top rounded-circle mx-auto mt-3" style="width: 150px; height: 150px; object-fit: cover;" alt="{{ $member->name }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $member->name }}</h5>
                    <p class="text-muted">{{ $member->position }}</p>
                    <p class="card-text">{{ $member->bio }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection