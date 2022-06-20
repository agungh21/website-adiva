@extends('themes.hotel_intan.layouts')
@section('content')
    <!--================Banner Area =================-->
    <section class="banner_area">
        <div class="booking_table d_flex align-items-center">
            <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background="">
            </div>
            <div class="container">
                <div class="banner_content text-center">
                    <h6>Away From The Bustling Life</h6>
                    <h2>Come Fly The Friendly Hotel Rest</h2>
                    <p>If you need a cheap and friendly place to rest, come to our hotel.</p>
                </div>
            </div>
        </div>
    </section>
    <!--================Banner Area =================-->

    <!--================ Accomodation Area  =================-->
    <section class="accomodation_area section_gap">
        <div class="container">
            <div class="section_title text-center">
                <h2 class="title_color">Intan Hotel Room</h2>
                <p>We all live in an age that belongs to the young at heart. Life that is becoming extremely fast, </p>
            </div>
            <div class="row mb_30">
                <div class="col-lg-3 col-sm-6">
                    <div class="accomodation_item text-center">
                        <div class="hotel_img">
                            <img style="height: 200px;" src="{{ themeUrl('assets/images/hotel/room-1.jpg') }}" alt="">
                        </div>
                        <a href="/room-suite">
                            <h4 class="sec_h4">Suite</h4>
                        </a>
                        <h5>Rp. 200.000<small>/night</small></h5>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="accomodation_item text-center">
                        <div class="hotel_img">
                            <img style="height: 200px;" src="{{ themeUrl('assets/images/hotel/room-2.jpg') }}" alt="">
                        </div>
                        <a href="/room-junior-suite">
                            <h4 class="sec_h4">Junior Suite</h4>
                        </a>
                        <h5>Rp. 250.000<small>/night</small></h5>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="accomodation_item text-center">
                        <div class="hotel_img">
                            <img style="height: 200px;" src="{{ themeUrl('assets/images/hotel/room-3.jpg') }}" alt="">
                        </div>
                        <a href="/room-premier-suite">
                            <h4 class="sec_h4">Priemer Suite</h4>
                        </a>
                        <h5>Rp. 750.000<small>/night</small></h5>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="accomodation_item text-center">
                        <div class="hotel_img">
                            <img style="height: 200px;" src="{{ themeUrl('assets/images/hotel/room-4.jpg') }}" alt="">
                        </div>
                        <a href="/room-standard">
                            <h4 class="sec_h4">Standard</h4>
                        </a>
                        <h5>Rp. 150.000<small>/night</small></h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ Accomodation Area  =================-->

    <!--================ Facilities Area  =================-->
    <section class="facilities_area section_gap">
        <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="">
        </div>
        <div class="container">
            <div class="section_title text-center">
                <h2 class="title_w">Intan Hotel Facilities</h2>
                <p>Who are in extremely love with eco friendly system.</p>
            </div>
            <div class="row mb_30">
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h4 class="sec_h4"><i class="lnr lnr-dinner"></i>Restaurant</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In illum fugiat, ab voluptates tenetur
                            harum placeat laudantium voluptatem nam.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h4 class="sec_h4"><i class="lnr lnr-heart"></i>Spa</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In illum fugiat, ab voluptates tenetur
                            harum placeat laudantium voluptatem nam.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h4 class="sec_h4"><i class="lnr lnr-construction"></i>Fitness</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In illum fugiat, ab voluptates tenetur
                            harum placeat laudantium voluptatem nam.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h4 class="sec_h4"><i class="lnr lnr-shirt"></i>Swimming Pool</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In illum fugiat, ab voluptates tenetur
                            harum placeat laudantium voluptatem nam.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h4 class="sec_h4"><i class="lnr lnr-leaf"></i>Garden</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In illum fugiat, ab voluptates tenetur
                            harum placeat laudantium voluptatem nam.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h4 class="sec_h4"><i class="lnr lnr-users"></i>Meeting</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In illum fugiat, ab voluptates tenetur
                            harum placeat laudantium voluptatem nam.
                        </p>
                    </div>
                </div>
    </section>
    <!--================ Facilities Area  =================-->

    <!--================ About History Area  =================-->
    <section class="about_history_area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d_flex align-items-center">
                    <div class="about_content ">
                        <h2 class="title title_color">About Vision & Mission</h2>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat voluptas laudantium officiis
                            repudiandae deserunt ad porro tenetur asperiores illum et. Tempore eaque architecto obcaecati
                            quae at quas ipsa maiores exercitationem!.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <img class="img-fluid" src="{{ themeUrl('assets/images/hotel/hotel-intan-1.jpg') }}" alt="img">
                </div>
            </div>
        </div>
    </section>
    <!--================ About History Area  =================-->

    <!--================ Testimonial Area  =================-->
    <section class="testimonial_area section_gap">
        <div class="container">
            <div class="section_title text-center">
                <h2 class="title_color">Testimonial from our Clients</h2>
                <p>we have customers from various regions.
                </p>
            </div>
            <div class="testimonial_slider owl-carousel">
                <div class="media testimonial_item">
                    <img class="rounded-circle img-testimony" src="{{ themeUrl('assets/images/hotel/testimony-1.jpg') }}"
                        alt="">
                    <div class="media-body">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem eum facilis mollitia dolorum?
                            Debitis nemo nisi sed a explicabo repellendus aliquid harum consequatur fugiat eveniet, laborum
                            cumque rem voluptas accusantium!</p>
                        <a href="#">
                            <h4 class="sec_h4">Diana William</h4>
                        </a>
                        <div class="star">
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star-half"></i></a>
                        </div>
                    </div>
                </div>
                <div class="media testimonial_item">
                    <img class="rounded-circle img-testimony" src="{{ themeUrl('assets/images/hotel/testimony-2.jpg') }}"
                        alt="">
                    <div class="media-body">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem eum facilis mollitia dolorum?
                            Debitis nemo nisi sed a explicabo repellendus aliquid harum consequatur fugiat eveniet, laborum
                            cumque rem voluptas accusantium!</p>
                        <a href="#">
                            <h4 class="sec_h4">Cicilia Brookman</h4>
                        </a>
                        <div class="star">
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star-half"></i></a>
                        </div>
                    </div>
                </div>
                <div class="media testimonial_item">
                    <img class="rounded-circle img-testimony" src="{{ themeUrl('assets/images/hotel/testimony-3.jpg') }}"
                        alt="">
                    <div class="media-body">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem eum facilis mollitia dolorum?
                            Debitis nemo nisi sed a explicabo repellendus aliquid harum consequatur fugiat eveniet, laborum
                            cumque rem voluptas accusantium!</p>
                        <a href="#">
                            <h4 class="sec_h4">Tom Holland</h4>
                        </a>
                        <div class="star">
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star-half"></i></a>
                        </div>
                    </div>
                </div>
                <div class="media testimonial_item">
                    <img class="rounded-circle img-testimony" src="{{ themeUrl('assets/images/hotel/testimony-4.jpg') }}"
                        alt="">
                    <div class="media-body">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem eum facilis mollitia dolorum?
                            Debitis nemo nisi sed a explicabo repellendus aliquid harum consequatur fugiat eveniet, laborum
                            cumque rem voluptas accusantium!</p>
                        <a href="#">
                            <h4 class="sec_h4">Gerard Way</h4>
                        </a>
                        <div class="star">
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star-half"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ Testimonial Area  =================-->
@endsection
