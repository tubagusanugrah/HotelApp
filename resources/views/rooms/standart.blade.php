@extends('layout')

@section('title', 'Standard Room')

@section('content')
<div class="container">
    <h1 class="mb-4 text-center" style="font-family: 'Poppins', sans-serif; color: #4A4A4A;">Standard Room</h1>
    <div class="card mb-4">
        <img src="https://amorgoshotel.com/wp-content/uploads/2014/12/Amorgos-Standard-Room2-e1464286437370.jpg" class="card-img-top" alt="Standard Room Image" style="max-height: 300px; object-fit: cover;">
        <div class="card-body">
            <h5 class="card-title" style="color: #007BFF; font-family: 'Poppins', sans-serif;">Comfort and Style</h5>
            <p class="card-text" style="font-family: 'Poppins', sans-serif;">
                Our Standard Room offers a comfortable and stylish environment, perfect for both relaxation and productivity. 
                Enjoy modern amenities such as air conditioning, Wi-Fi, and a flat-screen TV. 
                The room features a cozy bed, a work desk, and an en-suite bathroom.
            </p>
            <p style="font-family: 'Poppins', sans-serif;"><strong>Amenities:</strong></p>
            <ul style="font-family: 'Poppins', sans-serif;">
                <li>Air Conditioning</li>
                <li>Free Wi-Fi</li>
                <li>Flat-Screen TV</li>
                <li>Complimentary Toiletries</li>
                <li>Room Service</li>
            </ul>
            <a href="{{ route('reservations.index') }}" class="btn btn-primary" style="font-family: 'Poppins', sans-serif;">Book Now</a>
        </div>
    </div>
</div>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
@endsection
