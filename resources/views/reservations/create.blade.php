@extends('layout')

@section('title', 'Create Reservation')

@section('content')
<div class="container">
    <h1 class="mb-4" style="font-family: 'Poppins', sans-serif;">Create Reservation</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('reservations.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="guest_name" class="form-label" style="font-family: 'Poppins', sans-serif;">Guest Name</label>
            <input type="text" name="guest_name" id="guest_name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="room_number" class="form-label" style="font-family: 'Poppins', sans-serif;">Room Number</label>
            <input type="text" name="room_number" id="room_number" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="check_in" class="form-label" style="font-family: 'Poppins', sans-serif;">Check In</label>
            <input type="date" name="check_in" id="check_in" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="check_out" class="form-label" style="font-family: 'Poppins', sans-serif;">Check Out</label>
            <input type="date" name="check_out" id="check_out" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="total_price" class="form-label" style="font-family: 'Poppins', sans-serif;">Total Price</label>
            <input type="number" name="total_price" id="total_price" class="form-control" required step="0.01" min="0">
        </div>

        <div class="mb-3">
            <label for="room_image" class="form-label" style="font-family: 'Poppins', sans-serif;">Select Room Image</label>
            <select name="room_image" id="room_image" class="form-select" required onchange="showSelectedImage()">
                <option value="">Choose an image</option>
                <option value="https://amorgoshotel.com/wp-content/uploads/2014/12/Amorgos-Standard-Room2-e1464286437370.jpg">Standard Room</option>
                <option value="https://www.satoriahotel.com/wp-content/uploads/2022/04/E.-Deluxe-Room-1-scaled-e1651111459463.jpg">Deluxe Room</option>
                <option value="https://image-tc.galaxy.tf/wijpeg-2ofe2wg1akyihp1lytvujz7ud/presidential-suite-bedroom_wide.jpg?crop=0%2C100%2C1920%2C1080">Suite</option>
            </select>
        </div>

        <div class="mb-3" id="selected-image" style="display: none;">
            <label class="form-label" style="font-family: 'Poppins', sans-serif;">Selected Room Image</label>
            <img id="room-image-preview" src="" class="img-fluid square-image" alt="Room Image">
        </div>

        <button type="submit" class="btn btn-primary" style="font-family: 'Poppins', sans-serif;">Reserve</button>
        <a href="{{ route('reservations.index') }}" class="btn btn-secondary" style="font-family: 'Poppins', sans-serif;">Cancel</a>
    </form>
</div>

<style>
    .square-image {
        width: 100%;
        height: auto;
        max-width: 300px;
        aspect-ratio: 1 / 1;
        object-fit: cover;
    }
</style>

<script>
    function showSelectedImage() {
        const select = document.getElementById('room_image');
        const imagePreview = document.getElementById('room-image-preview');
        const selectedImageDiv = document.getElementById('selected-image');
        
        const selectedValue = select.value;
        if (selectedValue) {
            imagePreview.src = selectedValue;
            selectedImageDiv.style.display = 'block';
        } else {
            selectedImageDiv.style.display = 'none';
        }
    }
</script>

<!-- Add Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
@endsection
