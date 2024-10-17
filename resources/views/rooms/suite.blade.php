@extends('layout')

@section('title', 'Suite Room')

@section('content')
<div class="container">
    <h1 class="mb-4 text-center" style="font-family: 'Poppins', sans-serif; color: #4A4A4A;">Suite Room</h1>
    <div class="card mb-4">
        <img src="https://image-tc.galaxy.tf/wijpeg-2ofe2wg1akyihp1lytvujz7ud/presidential-suite-bedroom_wide.jpg?crop=0%2C100%2C1920%2C1080" class="card-img-top" alt="Suite Room Image" style="max-height: 300px; object-fit: cover;">
        <div class="card-body">
            <h5 class="card-title" style="color: #007BFF; font-family: 'Poppins', sans-serif;">Ultimate Luxury</h5>
            <p class="card-text" style="font-family: 'Poppins', sans-serif;">
                Experience the ultimate luxury in our Suite Room, designed for those who appreciate the finer things in life. 
                Enjoy a spacious living area, exquisite decor, and top-notch amenities to make your stay truly unforgettable.
            </p>
            <p style="font-family: 'Poppins', sans-serif;"><strong>Amenities:</strong></p>
            <ul style="font-family: 'Poppins', sans-serif;">
                <li>Separate Living Area</li>
                <li>Free Wi-Fi</li>
                <li>Smart TV</li>
                <li>Luxury Toiletries</li>
                <li>24/7 Room Service</li>
            </ul>
            <a href="{{ route('reservations.index') }}" class="btn btn-primary" style="font-family: 'Poppins', sans-serif;">Book Now</a>
        </div>
    </div>
</div>

<!-- Add Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
@endsection
