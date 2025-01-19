@extends('layouts.app')

@section('title', 'Our Services')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-5">Our Services</h1>

    <div class="row">
        @foreach($services as $service)
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <div class="card-body text-center">
                    <div class="mb-4">
                        <i class="bi bi-{{ $service['icon'] }} display-4"></i>
                    </div>
                    <h3 class="card-title">{{ $service['title'] }}</h3>
                    <p class="card-text">{{ $service['description'] }}</p>
                    <a href="#" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="row mt-5">
        <div class="col-md-12">
            <h2 class="text-center mb-4">Why Choose Us?</h2>
            <div class="row">
                <div class="col-md-4">
                    <h4>Experience</h4>
                    <p>Over 10 years of industry experience</p>
                </div>
                <div class="col-md-4">
                    <h4>Quality</h4>
                    <p>Top-notch solutions with best practices</p>
                </div>
                <div class="col-md-4">
                    <h4>Support</h4>
                    <p>24/7 customer support and maintenance</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection