<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="image/favicon.png" type="image/png">
    <title>Intan Hotel Cirebon</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ themeUrl('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ themeUrl('assets/vendors/linericon/style.css') }}">
    <link rel="stylesheet" href="{{ themeUrl('assets/css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ themeUrl('assets/vendors/owl-carousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ themeUrl('assets/vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css') }}">
    <link rel="stylesheet" href="{{ themeUrl('assets/vendors/nice-select/css/nice-select.css') }}">
    <!-- main css -->
    <link rel="stylesheet" href="{{ themeUrl('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ themeUrl('assets/css/responsive.css') }}">

    <style>
        .img-testimony {
            height: 80px;
            width: 80px;
        }

        .img-ig-feed {
            height: 58px;
            width: 58px;
        }

    </style>
</head>

<body>

    {{-- nav-bar --}}
    <!--================Header Area =================-->
<header class="header_area">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <!-- Brand and toggle get grouped for better mobile display -->
            <i class="fas fa-hotel mr-2 text-warning"></i><a class="navbar-brand logo_h" href="/"><img
                    src="{{ themeUrl('assets/images/hotel/logo_hotel.png') }}" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                <ul class="nav navbar-nav menu_nav ml-auto">
                    <li class="nav-item active"><a class="nav-link" href="{{ url('/') }}"><i class="fas fa-home"></i></a>
                    </li>
                    @foreach(getMenus() as $menu)

                    @if($menu->isHasSubmenu())
                    <li class="nav-item submenu dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                            aria-haspopup="true" aria-expanded="false"> {{ $menu->title }} </a>
                        <ul class="dropdown-menu">
                            @foreach($menu->submenus as $submenu)
                            <li class="nav-item">
                                <a class="nav-link" href="{{ $submenu->getLink() }}"> {{ $submenu->title }} </a>
                            </li>
                            @endforeach
                        </ul>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ $menu->getLink() }}"> {{ $menu->title }} </a>
                    </li>
                    @endif

                    @endforeach
                    <!-- <li class="nav-item"><a class="nav-link" href="/blog">Blog</a>
                    </li>
                    <li class="nav-item submenu dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                            aria-haspopup="true" aria-expanded="false">Room</a>
                        <ul class="dropdown-menu">
                            <li class="nav-item"><a class="nav-link" href="/suite">Suite</a></li>
                            <li class="nav-item"><a class="nav-link" href="/junior-suite">Junior
                                    Suite</a></li>
                            <li class="nav-item"><a class="nav-link" href="/premier-suite">Premier
                                    Suite</a></li>
                            <li class="nav-item"><a class="nav-link" href="/standard">Standard</a></li>
                        </ul>
                    </li>
                    <li class="nav-item submenu dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                            aria-haspopup="true" aria-expanded="false">Facilities</a>
                        <ul class="dropdown-menu">
                            <li class="nav-item"><a class="nav-link" href="/spa">Spa</a></li>
                            <li class="nav-item"><a class="nav-link" href="/fitness">Fitness</a>
                            <li class="nav-item"><a class="nav-link"
                                    href="/swimming-pool">Swimming
                                    Pool</a>
                            <li class="nav-item"><a class="nav-link" href="/garden">Garden</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item submenu dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                            aria-haspopup="true" aria-expanded="false">Restaurant</a>
                        <ul class="dropdown-menu">
                            <li class="nav-item"><a class="nav-link" href="/restaurant1">Tempat 1</a></li>
                            <li class="nav-item"><a class="nav-link" href="/restaurant2">Tempat 2</a></li>
                        </ul>
                    </li>
                    <li class="nav-item submenu dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                            aria-haspopup="true" aria-expanded="false">Services Apartement</a>
                        <ul class="dropdown-menu">
                            <li class="nav-item"><a class="nav-link" href="/one-bad-room">One Bad Room</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="/two-bad-room">Two Bad Room</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="/meeting">Meeting</a></li>
                    <li class="nav-item"><a class="nav-link" href="/about-hotel">About Hotel</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li> -->
                </ul>
            </div>
        </nav>
    </div>
</header>
<!--================Header Area =================-->


    {{-- content --}}
    @yield('content')

    {{-- footer --}}
<!--================ start footer Area  =================-->
<footer class="footer-area section_gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-3  col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6 class="footer_title">About Hotel</h6>
                    <p>Hotel simpel yang terletak di bangunan dengan fasad warni-warni ini berjarak 3 km dari stasiun kereta Cirebon Prujakan, 1 km dari Keraton Kacirebonan abad ke-19, dan 5 km dari Pantai
                        Kejawanan. </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6 class="footer_title">Navigation Links</h6>
                    <div class="row">
                        <div class="col-4">
                            <ul class="list_style">
                                <li><a href="/">Home</a></li>
                                <li><a href="/meeting">Meeting</a></li>
                                <li><a href="/contact">Contact</a></li>
                            </ul>
                        </div>
                        <div class="col-8">
                            <ul class="list_style">
                                <li><a href="/room-suite">Suite</a></li>
                                <li><a href="/room-junior-suite">Junior Suite</a></li>
                                <li><a href="/room-premier-suite">Premier Suite</a></li>
                                <li><a href="/room-standard">Standard</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="border_line"></div>
        <div class="row footer-bottom d-flex justify-content-between align-items-center">
            <p class="col-lg-8 col-sm-12 footer-text m-0">
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;
                <script>
                    document.write(new Date().getFullYear());
                </script> All rights reserved <i class="fas fa-heart"></i> by <a
                    href="https://adiva.co.id" target="_blank">PT Adiva Sumber Solusi</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
            <div class="col-lg-4 col-sm-12 footer-social">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fas fa-envelope"></i></a>
            </div>
        </div>
    </div>
</footer>
<!--================ End footer Area  =================-->


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{ themeUrl('assets/js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ themeUrl('assets/js/popper.js') }}"></script>
<script src="{{ themeUrl('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ themeUrl('assets/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
<script src="{{ themeUrl('assets/js/jquery.ajaxchimp.min.js') }}"></script>
<script src="{{ themeUrl('assets/js/mail-script.js') }}"></script>
<script src="{{ themeUrl('assets/vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js') }}"></script>
<script src="{{ themeUrl('assets/vendors/nice-select/js/jquery.nice-select.js') }}"></script>
<script src="{{ themeUrl('assets/js/stellar.js') }}"></script>
<script src="{{ themeUrl('assets/vendors/lightbox/simpleLightbox.min.js') }}"></script>
<script src="{{ themeUrl('assets/js/custom.js') }}"></script>
<script src="{{ themeUrl('assets/js/font-awesome.js') }}"></script>
</body>

</html>

