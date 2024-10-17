<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Hostel')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="{{ asset('images/logo.png') }}">
            
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">

    <style>
        body {
            font-family: 'Poppins', sans-serif; 
        }
    </style>
</head>

<body>

    @if (auth()->check())
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand">Hostel</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav me-auto">
                        @if (auth()->user()->role === 'admin')
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('reservations.index') }}">Reservation</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('manage-account.index') }}">Manage Account</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="roomDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Rooms
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="roomDropdown">
                            <li><a class="dropdown-item" href="{{ route('rooms.standard') }}">Standard Room</a></li>
                            <li><a class="dropdown-item" href="{{ route('rooms.deluxe') }}">Deluxe Room</a></li>
                            <li><a class="dropdown-item" href="{{ route('rooms.suite') }}">Suite</a></li>
                        </ul>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('landing-page') }}">Home</a>
                    </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="roomDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Rooms
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="roomDropdown">
                                    <li><a class="dropdown-item" href="{{ route('rooms.standard') }}">Standard Room</a></li>
                                    <li><a class="dropdown-item" href="{{ route('rooms.deluxe') }}">Deluxe Room</a></li>
                                    <li><a class="dropdown-item" href="{{ route('rooms.suite') }}">Suite</a></li>
                                </ul>
                            </li>
                        @endif

                        <li class="nav-item">
                            <button type="submit" class="nav-link btn btn-link" onclick="window.location.href='/logout'"
                                style="color: inherit;">Logout</button>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    @endif

    <div class="container mt-4">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
