<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="#" type="image/png">
    <title>Lintas Jaringan Nusantara</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/linericon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/owl-carousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/nice-select/css/nice-select.css') }}">
    <!-- main css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

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
    <div class="container-fluid p-0 m-0">
        <nav class="navbar navbar-expand-lg navbar-light" style="b">
            <!-- Brand and toggle get grouped for better mobile display -->
            <a class="navbar-brand logo_h" href="/"><img src="{{ asset('assets/images/ljn/ljnpng.png') }}" width="150px" alt="" class="p-2"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                <ul class="nav navbar-nav menu_nav ml-auto">
                    <li class="nav-item active"><a class="nav-link" href="{{ url('/') }}"><i class="fas fa-home text-warning"></i></a>
                    </li>
                    {{-- @foreach(getMenus() as $menu)

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

                    @endforeach --}}
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
            <div class="col-lg-6  col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6 class="footer_title">About LJN</h6>
                    <p>We are the best solution for school, campus, office, hotel and personal needs. LJN is here by optimizing fiber optic cables so as to produce fast and stable internet. LJN has internet packages and cctv installation at the best prices.
                    </p>
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
<script src="{{ asset('assets/js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('assets/js/popper.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.ajaxchimp.min.js') }}"></script>
<script src="{{ asset('assets/js/mail-script.js') }}"></script>
<script src="{{ asset('assets/vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js') }}"></script>
<script src="{{ asset('assets/vendors/nice-select/js/jquery.nice-select.js') }}"></script>
<script src="{{ asset('assets/js/stellar.js') }}"></script>
<script src="{{ asset('assets/vendors/lightbox/simpleLightbox.min.js') }}"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>
<script src="{{ asset('assets/js/font-awesome.js') }}"></script>
</body>

</html>
