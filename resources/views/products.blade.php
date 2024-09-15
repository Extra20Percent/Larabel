@extends('layouts.app')

@section('content')
<h1 class="text-center">Our Products</h1>
<div class="row mt-4">
    <div class="col-md-4">
        <div class="card">
            <img src="{{ asset('images/rosmi3.jpg') }}" class="card-img-top" alt="Product 1">
            <div class="card-body">
                <h5 class="card-title">Product 1</h5>
                <p class="card-text">Description of product 1...</p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <img src="{{ asset('images/rosmi4.png') }}" class="card-img-top" alt="Product 2">
            <div class="card-body">
                <h5 class="card-title">Product 2</h5>
                <p class="card-text">Description of product 2...</p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <img src="{{ asset('images/rosmi5.jpg') }}" class="card-img-top" alt="Product 3">
            <div class="card-body">
                <h5 class="card-title">Product 3</h5>
                <p class="card-text">Description of product 3...</p>
            </div>
        </div>
    </div>
</div>
@endsection
