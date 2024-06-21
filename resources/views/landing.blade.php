<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Flower Booking</title>
    <link rel="shortcut icon" href="{{ asset('images/logo.webp') }}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
    <header>
        <nav id="navbar" class="navbar navbar-expand-lg navbar-dark shadow-5-strong">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('images/logo.webp') }}" alt="Flower Booking" class="logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active text-white " aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Rooms</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Contact</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <a class="btn btn-primary" href="{{ route('login') }}">Login</a>
                    </form>
                </div>
            </div>
        </nav>
    </header>

    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" style="background-image: url('{{ asset('images/banner/banner.png') }}');">
                <div class="d-flex align-items-center justify-content-center" style="height: 400px;">
                    <div class="carousel-caption d-md-block text-center slider_text">
                        <h3>Flower Booking</h3>
                        <p>Unlock to enjoy the view of Martine</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item" style="background-image: url({{ asset('images/banner/banner2.png') }});">
                <div class="d-flex align-items-center justify-content-center" style="height: 400px;">
                    <div class="carousel-caption d-md-block text-center slider_text">
                        <h3>Life is Beautiful</h3>
                        <p>Unlock to enjoy the view of Martine</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item" style="background-image:  url('{{ asset('images/banner/banner.png') }}');">
                <div class="d-flex align-items-center justify-content-center" style="height: 400px;">
                    <div class="carousel-caption d-md-block text-center slider_text">
                        <h3>Book a Room</h3>
                        <p>Nikmati Liburan Anda</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item" style="background-image:  url('{{ asset('images/banner/banner2.png') }}');">
                <div class="d-flex align-items-center justify-content-center" style="height: 400px;">
                    <div class="carousel-caption d-md-block text-center slider_text">
                        <h3>Life is Beautiful</h3>
                        <p>Unlock to enjoy the view of Martine</p>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="about_area" id="about">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5">
                    <div class="about_info">
                        <div class="section_title mb-20px">
                            <span>About Us</span>
                            <h3>Flower <span> <br> </span>
                                Booking</h3>
                        </div>
                        <p class="text-justify">Welcome to Flower Booking, where we specialize in providing a seamless
                            experience for booking rooms that cater to your comfort and luxury needs. Whether you're
                            planning a relaxing getaway, a business trip, or a special occasion, we are here to ensure
                            your stay is nothing short of exceptional.</p>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7">
                    <div class="about_thumb d-flex">
                        <div class="img_1">
                            <img src="{{ asset('images/banner/about_1.png') }}" alt="">
                        </div>
                        <div class="img_2">
                            <img src="{{ asset('images/banner/about_2.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        window.addEventListener('scroll', function() {
            const navbar = document.getElementById('navbar');
            if (window.scrollY > 0) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
    </script>
</body>

</html>
