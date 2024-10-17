@extends('layout')

@section('title', 'Login - Hostel')

@section('content')
    <div class="container">
        <div class="row justify-content-center align-items-center" style="min-height: 100vh;">
            <div class="col-md-6">
                <h1 class="text-center mb-4" style="font-family: 'Poppins', sans-serif;">Login to Your Account</h1>
                <div class="card shadow-sm">
                    <div class="card-body">
                        @if (session('alert'))
                            <div class="alert alert-warning">
                                {{ session('alert') }}
                            </div>
                        @endif
                        <form action="{{ route('login.submit') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" id="email"
                                    class="form-control @error('email') is-invalid @enderror" required autofocus>
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" id="password"
                                    class="form-control @error('password') is-invalid @enderror" required>
                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Login</button>

                            <div class="text-center mt-3">
                                <small>Don't have an account? <a href="{{ route('register') }}">Register here</a></small>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
        }

        .card {
            border-radius: 15px;
        }
    </style>
@endsection
