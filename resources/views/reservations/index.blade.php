@extends('layout')

@section('title', 'Reservations List')

@section('content')
<div class="container">
    <h1 class="mb-4" style="font-family: 'Poppins', sans-serif;">Reservation List</h1>

    @if(session('success'))
        <div class="alert alert-success" style="font-family: 'Poppins', sans-serif;">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('reservations.create') }}" class="btn btn-primary mb-3" style="font-family: 'Poppins', sans-serif;">Create Reservation</a>
    <a href="{{ route('landing-page') }}" class="btn btn-danger mb-3" style="font-family: 'Poppins', sans-serif;">Back</a>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>Guest Name</th>
                <th>Room Number</th>
                <th>Check In</th>
                <th>Check Out</th>
                <th>Total Price</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @if($reservations->count() > 0)
                @foreach($reservations as $reservation)
                    <tr>
                        <td>{{ $reservation->guest_name }}</td>
                        <td>{{ $reservation->room_number }}</td>
                        <td>{{ $reservation->check_in }}</td>
                        <td>{{ $reservation->check_out }}</td>
                        <td>${{ number_format($reservation->total_price, 2) }}</td>
                        <td>
                            <a href="{{ route('reservations.show', $reservation->id) }}" class="btn btn-info btn-sm" style="font-family: 'Poppins', sans-serif;">View</a>
                            <a href="{{ route('reservations.edit', $reservation->id) }}" class="btn btn-warning btn-sm" style="font-family: 'Poppins', sans-serif;">Edit</a>

                            <form action="{{ route('reservations.destroy', $reservation->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" style="font-family: 'Poppins', sans-serif;" onclick="return confirm('Are you sure you want to delete this reservation?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="6" class="text-center">No reservations found.</td>
                </tr>
            @endif
        </tbody>
    </table>
</div>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

<style>
    body {
        font-family: 'Poppins', sans-serif;
    }
    .table {
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
    }
    .table th, .table td {
        vertical-align: middle;
    }
</style>
@endsection
