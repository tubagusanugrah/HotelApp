@extends('layout')

@section('title', 'Reservation Details')

@section('content')
<div class="container">
    <h1 class="mb-4" style="font-family: 'Poppins', sans-serif;">Reservation Details</h1>

    <div class="card mb-3" style="border-radius: 10px; overflow: hidden;">
        <div class="card-body" style="font-family: 'Poppins', sans-serif;">
            <h5 class="card-title">Guest Name: <strong>{{ $reservation->guest_name }}</strong></h5>
            <p class="card-text"><strong>Room Number:</strong> {{ $reservation->room_number }}</p>
            <p class="card-text"><strong>Check In:</strong> {{ $reservation->check_in }}</p>
            <p class="card-text"><strong>Check Out:</strong> {{ $reservation->check_out }}</p>
            <p class="card-text"><strong>Total Price:</strong> ${{ number_format($reservation->total_price, 2) }}</p>
        </div>
    </div>

    <div class="d-flex justify-content-between">
        <a href="{{ route('reservations.index') }}" class="btn btn-secondary" style="font-family: 'Poppins', sans-serif;">Back to List</a>
        <div>
            <a href="{{ route('reservations.edit', $reservation->id) }}" class="btn btn-warning" style="font-family: 'Poppins', sans-serif;">Edit</a>
            <form action="{{ route('reservations.destroy', $reservation->id) }}" method="POST" style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" style="font-family: 'Poppins', sans-serif;">Delete</button>
            </form>
        </div>
    </div>
</div>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

<style>
    .card {
        background-color: #f8f9fa; 
        border: 1px solid #dee2e6; 
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
    }
</style>
@endsection
