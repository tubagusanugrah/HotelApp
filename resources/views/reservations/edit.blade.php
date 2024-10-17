@extends('layout')

@section('title', 'Edit Reservation')

@section('content')
<div class="container">
    <h1 class="mb-4" style="font-family: 'Poppins', sans-serif;">Edit Reservation</h1>

    <form action="{{ route('reservations.update', $reservation->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="guest_name" class="form-label" style="font-family: 'Poppins', sans-serif;">Guest Name</label>
            <input type="text" name="guest_name" id="guest_name" class="form-control" value="{{ $reservation->guest_name }}" required>
        </div>

        <div class="mb-3">
            <label for="room_number" class="form-label" style="font-family: 'Poppins', sans-serif;">Room Number</label>
            <input type="number" name="room_number" id="room_number" class="form-control" value="{{ $reservation->room_number }}" required min="1" max="10">
        </div>

        <div class="mb-3">
            <label for="check_in" class="form-label" style="font-family: 'Poppins', sans-serif;">Check In</label>
            <input type="date" name="check_in" id="check_in" class="form-control" value="{{ $reservation->check_in }}" required>
        </div>

        <div class="mb-3">
            <label for="check_out" class="form-label" style="font-family: 'Poppins', sans-serif;">Check Out</label>
            <input type="date" name="check_out" id="check_out" class="form-control" value="{{ $reservation->check_out }}" required>
        </div>

        <div class="mb-3">
            <label for="total_price" class="form-label" style="font-family: 'Poppins', sans-serif;">Total Price</label>
            <input type="number" name="total_price" id="total_price" class="form-control" value="{{ $reservation->total_price }}" required step="0.01" min="0">
        </div>

        <button type="submit" class="btn btn-primary" style="font-family: 'Poppins', sans-serif;">Update Reservation</button>
        <a href="{{ route('reservations.index') }}" class="btn btn-secondary" style="font-family: 'Poppins', sans-serif;">Cancel</a>
    </form>
</div>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
@endsection
