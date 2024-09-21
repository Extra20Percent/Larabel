@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<div class="jumbotron text-center">
    <img src="{{ asset('images/') }}" class="img-fluid" alt="Company Hero Image" style="max-height: 500px; width: 100%; object-fit: cover;">
    <h1 class="display-4 mt-4">Welcome to Our Company</h1>
    <p class="lead">Providing high-quality products for our customers in the biomass industry.</p>
    <a class="btn btn-primary btn-lg" href="{{ url('/products') }}" role="button">Explore Our Products</a>
</div>

<!-- Content Sections -->
<div class="container-fluid px-0">
    <!-- Section 1: Our Services (Background: Light Gray) -->
    <div class="row py-5" style="background-color: #f8f9fa;">
        <div class="col-md-12 text-center">
            <i class="fas fa-cogs fa-3x mb-3"></i>
            <h3>Our Services</h3>
            <p>We provide top-notch services in the biomass industry, ensuring that our clients receive the best solutions for their energy needs.</p>
            <a href="{{ url('/services') }}" class="btn btn-outline-primary">Learn More</a>
        </div>
    </div>

    <!-- Section 2: Our Products (Background: White) -->
    <div class="row py-5" style="background-color: #ffffff;">
        <div class="col-md-12 text-center">
            <i class="fas fa-boxes fa-3x mb-3"></i>
            <h3>Our Products</h3>
            <p>We offer a variety of high-quality biomass products to meet the needs of our customers worldwide. Explore our product range to find the perfect solution for your business.</p>
            <a href="{{ url('/products') }}" class="btn btn-outline-primary">View Products</a>
        </div>
    </div>

    <!-- Section 3: Testimonials (Background: Light Gray) -->
    <div class="row py-5" style="background-color: #f8f9fa;">
        <div class="col-md-12 text-center">
            <i class="fas fa-users fa-3x mb-3"></i>
            <h3>Testimonials</h3>
            <p>Hear what our satisfied clients have to say about our exceptional products and services. We value every feedback and continuously strive to meet and exceed expectations.</p>
            <a href="{{ url('/testimonials') }}" class="btn btn-outline-primary">Read Testimonials</a>
        </div>
    </div>
</div>
@endsection
