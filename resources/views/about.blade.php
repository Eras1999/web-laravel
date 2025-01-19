@extends('layouts.app')

@section('title', 'About Us')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-8">
            <h1>About Us</h1>
            <p class="lead">We are a passionate team dedicated to creating amazing web solutions.</p>
            
            <div class="mt-4">
                <h2>Our Story</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
            </div>

            <div class="mt-4">
                <h2>Our Mission</h2>
                <p>To deliver exceptional web solutions that help our clients succeed in the digital world.</p>
            </div>

            <div class="mt-4">
                <h2>Our Team</h2>
                <div class="row mt-3">
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img src="{{ asset('images/team1.jpg') }}" class="card-img-top" alt="Team Member">
                            <div class="card-body">
                                <h5 class="card-title">John Doe</h5>
                                <p class="card-text">CEO & Founder</p>
                            </div>
                        </div>
                    </div>
                    <!-- Add more team members similarly -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection