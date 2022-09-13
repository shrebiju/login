
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SMS</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        
        <!-- Styles -->
        <link href="{{ asset('assets/css/login.css') }}" rel="stylesheet">

    </head>
    <body class="">
        <div class="">
            <nav class="container navbar navbar-expand-lg navbar-light ">
                <a class="navbar-brand" href="#">Company Logo</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                      <a class="nav-link" href="#">Home</a>
                    </li>
                  </ul>
                  <span class="navbar-text">
                    @if (Route::has('login'))
                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                        @auth
                            <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                        @else
                            <a href="{{ route('login') }}" class="btn btn-outline-success">Login</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="btn btn-outline-primary">Register</a>
                            @endif
                           
                                <a href="{{route('frontend.customer.create')}}" class="btn btn-outline-primary">Customer</a>
                           
                        @endif
                    </div>
                @endif
                  </span>
                </div>
              </nav>
              <section class="hero_section">
                <div class="container position-relative hero ">
                  <div class="row gy-5 hero-inner" data-aos="fade-in">
                    <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-lg-start hero_1">
                      <h2>Welcome to <span>Infocom Solutions</span></h2>
                      <p>Sed autem laudantium dolores. Voluptatem itaque ea consequatur eveniet. Eum quas beatae cumque eum quaerat.</p>
                      <div class="d-flex justify-content-center justify-content-lg-start">
                        <a href="#about" class="btn-get-started">Get Started</a>
                        <!-- <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a> -->
                      </div>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 hero_2">
                      <img src="{{asset('assets/frontend/image/hero-img.svg')}}" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="100">
                    </div>
                  </div>
                </div>
              </section>
              <footer class="">
                <div class="footer_section nav justify-content-center">
                  <p>@2022 Infocom Solutions All rights reserved.</p>
                </div>
              </footer>
        </div>
    </body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>
