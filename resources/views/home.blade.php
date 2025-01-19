@extends('layouts.app')

@section('title', 'Home - My Laravel Website')

@section('content')
<div class="container mt-5">
    <!-- Hero Section -->
    <div class="bg-light p-5 rounded-lg mb-5">
        <h1 class="display-4">Welcome to Our Website</h1>
        <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
        <hr class="my-4">
        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
        <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
    </div>

    <!-- Featured Items -->
    <div class="row">
        @foreach($featuredItems as $item)
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ asset('images/' . $item['image']) }}" class="card-img-top" alt="{{ $item['title'] }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $item['title'] }}</h5>
                    <p class="card-text">{{ $item['description'] }}</p>
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Additional Content Section -->
    <div class="row mt-5">
        <div class="col-md-6">
            <h2>About Us</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
        </div>
        <div class="col-md-6">
            <h2>Our Services</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
        </div>
    </div>
</div>
@endsection