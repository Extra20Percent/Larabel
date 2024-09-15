@extends('layouts.app')

@section('content')
<div class="jumbotron text-center">
    <img src="{{ asset('images/rosmi2.png') }}" class="img-fluid" alt="Company Hero Image" style="max-height: 500px; width: 100%; object-fit: cover;">
    <h1 class="display-4 mt-4">Welcome to Our Company</h1>
    <p class="lead">Providing high-quality products for our customers in the biomass industry.</p>
    <a class="btn btn-primary btn-lg" href="{{ url('/products') }}" role="button">Explore Our Products</a>
</div>
@endsection
