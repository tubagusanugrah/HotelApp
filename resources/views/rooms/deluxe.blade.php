@extends('layout')

@section('title', 'Deluxe Room')

@section('content')
<div class="container">
    <h1 class="mb-4 text-center" style="font-family: 'Poppins', sans-serif; color: #4A4A4A;">Deluxe Room</h1>
    <div class="card mb-4">
        <img src="https://www.satoriahotel.com/wp-content/uploads/2022/04/E.-Deluxe-Room-1-scaled-e1651111459463.jpg" class="card-img-top" alt="Deluxe Room Image" style="max-height: 300px; object-fit: cover;">
        <div class="card-body">
            <h5 class="card-title" style="color: #007BFF; font-family: 'Poppins', sans-serif;">Spacious and Luxurious</h5>
            <p class="card-text" style="font-family: 'Poppins', sans-serif;">
                Our Deluxe Room provides a spacious and luxurious setting for an unforgettable stay. 
                Enjoy premium features such as a comfortable king-size bed, a seating area, and modern amenities. 
                Perfect for those seeking a little extra comfort during their travels.
            </p>
            <p style="font-family: 'Poppins', sans-serif;"><strong>Amenities:</strong></p>
            <ul style="font-family: 'Poppins', sans-serif;">
                <li>King-Size Bed</li>
                <li>Free Wi-Fi</li>
                <li>Smart TV</li>
                <li>Complimentary Toiletries</li>
                <li>Room Service</li>
            </ul>
            <a href="{{ route('reservations.index') }}" class="btn btn-primary" style="font-family: 'Poppins', sans-serif;">Book Now</a>
        </div>
    </div>
</div>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
@endsection