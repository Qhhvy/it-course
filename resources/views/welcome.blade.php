<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <title>Freecourse</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('vendor') }}/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/fontawesome.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/templatemo-scholar.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/owl.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <!--

TemplateMo 586 Scholar

https://templatemo.com/tm-586-scholar

-->
</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="{{ url('/') }}" class="logo">
                            <h1>Freecourse
                            </h1>
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Serach Start ***** -->
                        <!-- ***** Serach Start ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#services">About</a></li>
                            <li class="scroll-to-section"><a href="#instructor">Instructor</a></li>
                            <li class="scroll-to-section"><a href="#courses">Courses</a></li>
                            @if (Route::has('login'))
                                @auth
                                    <li class="scroll-to-section"><a href="{{ url('/orders/create') }}">Join Course</a></li>
                                    <li class="scroll-to-section"><a href="{{ url('/orders') }}">Dashboard</a></li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <li class="scroll-to-section"><a href="{{ route('logout') }}"
                                                class="btn btn-dark pb-5 fw-bold"
                                                onclick="event.preventDefault();
                                                    this.closest('form').submit();">Logout</a>
                                        </li>
                                    </form>
                                @else
                                    <li class="scroll-to-section"><a href="{{ route('login') }}"
                                            class="btn btn-dark pb-5 fw-bold">Login</a>
                                    </li>
                                    @if (Route::has('register'))
                                        <li class="scroll-to-section"><a href="{{ route('register') }}"
                                                class="btn btn-dark pb-5 fw-bold">Register</a>
                                        </li>
                                    @endif
                                @endauth
                            @endif
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <div class="main-banner" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="owl-carousel owl-banner">
                        <div class="item item-1">
                            <div class="header-text">
                                <span class="category">Our Courses</span>
                                <h2>With Freecourse Teachers, Everything Is Easier</h2>
                                <p>Freecourse is free CSS template designed by TemplateMo for online educational related
                                    websites. This layout is based on the famous Bootstrap v5.3.0 framework.</p>
                                <div class="buttons">
                                    <div class="main-button">
                                        <a href="#">Request Demo</a>
                                    </div>
                                    <div class="icon-button">
                                        <a href="#"><i class="fa fa-play"></i> What's Freecourse?</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item item-2">
                            <div class="header-text">
                                <span class="category">Best Result</span>
                                <h2>Get the best result out of your effort</h2>
                                <p>You are allowed to use this template for any educational or commercial purpose. You
                                    are not allowed to re-distribute the template ZIP file on any other website.</p>
                                <div class="buttons">
                                    <div class="main-button">
                                        <a href="#">Request Demo</a>
                                    </div>
                                    <div class="icon-button">
                                        <a href="#"><i class="fa fa-play"></i> What's the best result?</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item item-3">
                            <div class="header-text">
                                <span class="category">Online Learning</span>
                                <h2>Online Learning helps you save the time</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temporious
                                    incididunt ut labore et dolore magna aliqua suspendisse.</p>
                                <div class="buttons">
                                    <div class="main-button">
                                        <a href="#">Request Demo</a>
                                    </div>
                                    <div class="icon-button">
                                        <a href="#"><i class="fa fa-play"></i> What's Online Course?</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="services section" id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="icon">
                            <img src="{{ asset('assets') }}/images/service-01.png" alt="online degrees">
                        </div>
                        <div class="main-content">
                            <h4>Online Degrees</h4>
                            <p>Whenever you need free templates in HTML CSS, you just remember TemplateMo website.</p>
                            <div class="main-button">
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="icon">
                            <img src="{{ asset('assets') }}/images/service-02.png" alt="short courses">
                        </div>
                        <div class="main-content">
                            <h4>Short Courses</h4>
                            <p>You can browse free templates based on different tags such as digital marketing, etc.</p>
                            <div class="main-button">
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="icon">
                            <img src="{{ asset('assets') }}/images/service-03.png" alt="web experts">
                        </div>
                        <div class="main-content">
                            <h4>Web Experts</h4>
                            <p>You can start learning HTML CSS by modifying free templates from our website too.</p>
                            <div class="main-button">
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section about-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-1">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Where shall we begin?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show"
                                aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Dolor <strong>almesit amet</strong>, consectetur adipiscing elit, sed doesn't
                                    eiusmod tempor incididunt ut labore consectetur <code>adipiscing</code> elit, sed do
                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse
                                    ultrices gravida.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    How do we work together?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Dolor <strong>almesit amet</strong>, consectetur adipiscing elit, sed doesn't
                                    eiusmod tempor incididunt ut labore consectetur <code>adipiscing</code> elit, sed do
                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse
                                    ultrices gravida.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    Why Freecourse is the best?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    There are more than one hundred responsive HTML templates to choose from
                                    <strong>Template</strong>Mo website. You can browse by different tags or categories.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false"
                                    aria-controls="collapseFour">
                                    Do we get the best support?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    You can also search on Google with specific keywords such as <code>templatemo
                                        business templates, templatemo gallery templates, admin dashboard templatemo,
                                        3-column templatemo, etc.</code>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 align-self-center">
                    <div class="section-heading">
                        <h6>About Us</h6>
                        <h2>What make us the best academy online?</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravid risus commodo.</p>
                        <div class="main-button">
                            <a href="#">Discover More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section fun-facts">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="wrapper">
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="counter">
                                    <h2 class="timer count-title count-number" data-to="150" data-speed="1000"></h2>
                                    <p class="count-text ">Happy Students</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="counter">
                                    <h2 class="timer count-title count-number" data-to="804" data-speed="1000"></h2>
                                    <p class="count-text ">Course Hours</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="counter">
                                    <h2 class="timer count-title count-number" data-to="50" data-speed="1000"></h2>
                                    <p class="count-text ">Employed Students</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="counter end">
                                    <h2 class="timer count-title count-number" data-to="15" data-speed="1000"></h2>
                                    <p class="count-text ">Years Experience</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="team section" id="instructor">
        <div class="container">
            <div class="row">
                @foreach ($instructor as $data)
                    <div class="col-lg-4 col-md-6">
                        <div class="team-member">
                            <div class="main-content">
                                <img src="{{ asset('assets') }}/images/member-05.png" alt="">
                                <h4>{{ $data->name }}</h4>
                                <ul class="social-icons">
                                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="section testimonials">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="owl-carousel owl-testimonials">
                        <div class="item">
                            <p>“Please tell your friends or collegues about TemplateMo website. Anyone can access the
                                website to download free templates. Thank you for visiting.”</p>
                            <div class="author">
                                <img src="{{ asset('assets') }}/images/testimonial-author.jpg" alt="">
                                <span class="category">Full Stack Master</span>
                                <h4>Claude David</h4>
                            </div>
                        </div>
                        <div class="item">
                            <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravid.”
                            </p>
                            <div class="author">
                                <img src="{{ asset('assets') }}/images/testimonial-author.jpg" alt="">
                                <span class="category">UI Expert</span>
                                <h4>Thomas Jefferson</h4>
                            </div>
                        </div>
                        <div class="item">
                            <p>“Freecourse is free website template provided by TemplateMo for educational related
                                websites. This CSS layout is based on Bootstrap v5.3.0 framework.”</p>
                            <div class="author">
                                <img src="{{ asset('assets') }}/images/testimonial-author.jpg" alt="">
                                <span class="category">Digital Animator</span>
                                <h4>Stella Blair</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 align-self-center">
                    <div class="section-heading">
                        <h6>TESTIMONIALS</h6>
                        <h2>What they say about us?</h2>
                        <p>You can search free CSS templates on Google using different keywords such as templatemo
                            portfolio, templatemo gallery, templatemo blue color, etc.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section events" id="courses">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-heading">
                        <h6>Courses</h6>
                        <h2>Courses</h2>
                    </div>
                </div>
                @foreach ($course as $item)
                    <div class="col-lg-12 col-md-6">
                        <div class="item">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="image">
                                        <img src="{{ asset('assets') }}/images/event-01.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-9">
                                    <ul>
                                        <li>
                                            <span class="category">{{ $item['name'] }}</span>
                                            <h4>Lorem ipsum dolor sir amet</h4>
                                        </li>
                                        <li>
                                            <span>Date:</span>
                                            <h6>12 June 2024</h6>
                                        </li>
                                        <li>
                                            <span>Duration:</span>
                                            <h6>{{ $item['duration'] }} Hours</h6>
                                        </li>
                                        <li>
                                            <span>Price:</span>
                                            <h6>Rp {{ $item['price'] }}</h6>
                                        </li>
                                    </ul>
                                    <a href="{{ route('orders.create') }}"><i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="col-lg-12">
                <p>Copyright © 2024 Freecourse Organization. All rights reserved. &nbsp;&nbsp;&nbsp;</p>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('vendor') }}/jquery/jquery.min.js"></script>
    <script src="{{ asset('vendor') }}/bootstrap/js/bootstrap.min.js"></script>
    <script src="{{ asset('assets') }}/js/isotope.min.js"></script>
    <script src="{{ asset('assets') }}/js/owl-carousel.js"></script>
    <script src="{{ asset('assets') }}/js/counter.js"></script>
    <script src="{{ asset('assets') }}/js/custom.js"></script>

</body>

</html>
