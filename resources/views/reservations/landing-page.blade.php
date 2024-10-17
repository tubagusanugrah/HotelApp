@extends('layout')

@section('title', 'Welcome to Hostel')

@section('content')
    <header class="bg-dark text-white text-center py-5" data-aos="fade-down">
        <div class="container">
            <img src="https://i.redd.it/0op30z32r2z61.png" alt="Hostel Logo" class="mb-4" style="max-width: 150px;">
            <h1 style="font-family: 'Poppins', sans-serif;">Welcome to Hostel</h1>
            <p class="lead" style="font-family: 'Poppins', sans-serif;">Experience the best comfort and convenience at our hotel</p>
            <a href="{{ route('reservations.index')}}" class="btn btn-primary btn-lg">Booking Now</a>
        </div>
    </header>

    <section id="rooms" class="py-5" data-aos="fade-up">
        <div class="container">
            <h2 class="text-center mb-4" style="font-family: 'Poppins', sans-serif;">Our Rooms</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card shadow-sm room-card" data-aos="zoom-in">
                        <img src="https://amorgoshotel.com/wp-content/uploads/2014/12/Amorgos-Standard-Room2-e1464286437370.jpg" class="card-img-top" alt="Room Image">
                        <div class="card-body">
                            <h5 class="card-title" style="font-family: 'Poppins', sans-serif;">Standard Room</h5>
                            <p class="card-text">A comfortable room with modern amenities.</p>
                            <a href="{{ route('reservations.index')}}" class="btn btn-primary">Book Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-sm room-card" data-aos="zoom-in" data-aos-delay="100">
                        <img src="https://www.satoriahotel.com/wp-content/uploads/2022/04/E.-Deluxe-Room-1-scaled-e1651111459463.jpg" class="card-img-top" alt="Room Image">
                        <div class="card-body">
                            <h5 class="card-title" style="font-family: 'Poppins', sans-serif;">Deluxe Room</h5>
                            <p class="card-text">Spacious room with premium features.</p>
                            <a href="{{ route('reservations.index')}}" class="btn btn-primary">Book Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-sm room-card" data-aos="zoom-in" data-aos-delay="200">
                        <img src="https://image-tc.galaxy.tf/wijpeg-2ofe2wg1akyihp1lytvujz7ud/presidential-suite-bedroom_wide.jpg?crop=0%2C100%2C1920%2C1080" class="card-img-top" alt="Room Image">
                        <div class="card-body">
                            <h5 class="card-title" style="font-family: 'Poppins', sans-serif;">Suite</h5>
                            <p class="card-text">Ultimate luxury for an unforgettable stay.</p>
                            <a href="{{ route('reservations.index')}}" class="btn btn-primary">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="services" class="bg-light py-5" data-aos="fade-up">
        <div class="container">
            <h2 class="text-center mb-4" style="font-family: 'Poppins', sans-serif;">Our Services</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="text-center" data-aos="fade-right">
                        <i class="bi bi-wifi" style="font-size: 2rem;"></i>
                        <h4 style="font-family: 'Poppins', sans-serif;">Free Wi-Fi</h4>
                        <p>Stay connected with our high-speed internet.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="text-center" data-aos="fade-up" data-aos-delay="100">
                        <i class="bi bi-cup-hot" style="font-size: 2rem;"></i>
                        <h4 style="font-family: 'Poppins', sans-serif;">Complimentary Breakfast</h4>
                        <p>Enjoy a delicious breakfast every morning.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="text-center" data-aos="fade-left">
                        <i class="bi bi-p-square" style="font-size: 2rem;"></i>
                        <h4 style="font-family: 'Poppins', sans-serif;">24/7 Reception</h4>
                        <p>Our team is available round the clock for your convenience.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="testimonials" class="py-5" data-aos="fade-up">
        <div class="container">
            <h2 class="text-center mb-4" style="font-family: 'Poppins', sans-serif;">What Our Guests Say</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card text-center shadow-sm hover-shadow testimonial-card" data-aos="zoom-in">
                        <img src="https://i.pinimg.com/originals/ed/c0/8c/edc08c54a92bbab65f2c85f6c48ad7b0.jpg" class="card-img-top rounded-circle mx-auto mt-2" alt="Guest Image">
                        <div class="card-body">
                            <p class="card-text">"The hostel was amazing!"</p>
                            <h5 class="card-title" style="font-family: 'Poppins', sans-serif;">- Janghyun, Traveler</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-center shadow-sm hover-shadow testimonial-card" data-aos="zoom-in" data-aos-delay="100">
                        <img src="https://i.pinimg.com/474x/0f/67/bf/0f67bf23ccde97fc79205aa58394fd2c.jpg" class="card-img-top rounded-circle mx-auto mt-2" alt="Guest Image">
                        <div class="card-body">
                            <p class="card-text">"I had a wonderful stay. The amenities were top-notch, and I loved the complimentary breakfast!"</p>
                            <h5 class="card-title" style="font-family: 'Poppins', sans-serif;">- Park Serim, Traveler</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-center shadow-sm hover-shadow testimonial-card" data-aos="zoom-in" data-aos-delay="200">
                        <img src="https://pbs.twimg.com/media/F6lwIfFawAAPrh5?format=jpg&name=large" class="card-img-top rounded-circle mx-auto mt-2" alt="Guest Image">
                        <div class="card-body">
                            <p class="card-text">"Good."</p>
                            <h5 class="card-title" style="font-family: 'Poppins', sans-serif;">- Jonggun, Businessman</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-dark text-white text-center py-4">
        <div class="container">
            <p>&copy; {{ date('Y') }} Hostel. All Rights Reserved.</p>
        </div>
    </footer>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.css" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <style>
        .room-card img, 
        .testimonial-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 8px;
        }

        .testimonial-card img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
        }

        .room-card, .testimonial-card {
            transition: transform 0.3s;
        }

        .room-card:hover, .testimonial-card:hover {
            transform: scale(1.05);
        }

        .hover-shadow {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
    </style>
@endsection
