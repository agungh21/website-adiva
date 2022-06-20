@extends('themes.ljn.layouts')
@section('content')
    <!--================Banner Area =================-->
    <section class="banner_area">
        <div class="booking_table d_flex align-items-center">
            <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background="">
            </div>
            <div class="container">
                <div class="banner_content text-center">
                    <h6>Internet Service Provide</h6>
                    <h2>Best from the best In Cirebon City</h2>
                    <p>If you need a fast and cheap internet, come to our ISP.</p>
                </div>
            </div>
        </div>
    </section>
    <!--================Banner Area =================-->

    <!--================ Accomodation Area  =================-->
    <section class="accomodation_area section_gap">
        <div class="container">
            <div class="section_title text-center">
                <h2 class="title_color text-warning">Lintas Jaringan Nusantara</h2>
                <p>Nowadays, the internet has become an important need for humans. General activities to special activities, the internet is needed to simplify and speed up these activities.</p>
            </div>
            <div class="row mb_30">
                <div class="col-lg-3 col-sm-6">
                    <div class="accomodation_item text-center">
                        <div class="hotel_img">
                            <img style="height: 200px;" src="{{ asset('assets/images/ljn/paket.jpg') }}" alt="">
                        </div>
                        <a href="/room-suite">
                            <h4 class="sec_h4">Paket A</h4>
                        </a>
                        <h5 class="text-warning">Rp. 199.000<small>/Mount</small></h5>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="accomodation_item text-center">
                        <div class="hotel_img">
                            <img style="height: 200px;" src="{{ asset('assets/images/ljn/paket.jpg') }}" alt="">
                        </div>
                        <a href="/room-junior-suite">
                            <h4 class="sec_h4">Paket B</h4>
                        </a>
                        <h5 class="text-warning">Rp. 299.000<small>/Mount</small></h5>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="accomodation_item text-center">
                        <div class="hotel_img">
                            <img style="height: 200px;" src="{{ asset('assets/images/ljn/paket.jpg') }}" alt="">
                        </div>
                        <a href="/room-premier-suite">
                            <h4 class="sec_h4">Paket C</h4>
                        </a>
                        <h5 class="text-warning">Rp. 699.000<small>/Mount</small></h5>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="accomodation_item text-center">
                        <div class="hotel_img">
                            <img style="height: 200px;" src="{{ asset('assets/images/ljn/paket.jpg') }}" alt="">
                        </div>
                        <a href="/room-standard">
                            <h4 class="sec_h4">Paket D</h4>
                        </a>
                        <h5 class="text-warning">Rp. 999.000<small>/Mount</small></h5>
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
                <h2 class="title_w">Our Product</h2>
                <p>We have several products which are the best choice for customers.</p>
            </div>
            <div class="row mb_30">
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h4 class="sec_h4"><i class="lnr lnr-earth"></i>Internet</h4>
                        <p>LJN is an internet service provider that offers several choices of internet packages according to customer needs.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h4 class="sec_h4"><i class="lnr lnr-construction"></i>Maintenance Internet</h4>
                        <p>LJN has reliable and experienced technicians in handling network problems.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h4 class="sec_h4"><i class="lnr lnr-database"></i>Provider Data Center</h4>
                        <p>LJN has its own data server, therefore we have a higher internet speed compared to other ISP.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h4 class="sec_h4"><i class="lnr lnr-camera-video"></i>CCTV</h4>
                        <p>In addition to internet service provider products, we also serve the installation of CCTV..
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h4 class="sec_h4"><i class="lnr lnr-construction"></i>Maintenance CCTV</h4>
                        <p>LJN has reliable and experienced technicians in handling CCTV Problem.
                        </p>
                    </div>
                </div>
    </section>
    <!--================ Facilities Area  =================-->

    <!--================ About History Area  =================-->
    <section class="about_history_area section_gap">
        <div class="container">
            <div class="section_title text-center">
                <h2 class="title title_color text-warning">Contact Me</h2>
                <p>We are the best solution for school, campus, office, hotel and personal needs. LJN is here by optimizing fiber optic cables so as to produce fast and stable internet. LJN has internet packages and cctv installation at the best prices.</p>
                <a href="#" class="btn btn-outline-warning mt-3">Click Here</a>
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
                    <img class="rounded-circle img-testimony" src="{{ asset('assets/images/ljn/testimony-1.jpg') }}"
                        alt="">
                    <div class="media-body">
                        <p>Internet Cepat dan Stabil!</p>
                        <a href="#">
                            <h4 class="sec_h4">Dian Diana</h4>
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
                    <img class="rounded-circle img-testimony" src="{{ asset('assets/images/ljn/testimony-2.jpg') }}"
                        alt="">
                    <div class="media-body">
                        <p>Pelayanan teknisi baik dan handal untuk penanganan masalah internet!</p>
                        <a href="#">
                            <h4 class="sec_h4">Cintya Cinti</h4>
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
                    <img class="rounded-circle img-testimony" src="{{ asset('assets/images/ljn/testimony-3.jpg') }}"
                        alt="">
                    <div class="media-body">
                        <p>Tempat pemasangan CCTV terbaik di wilayah kota cirebon!</p>
                        <a href="#">
                            <h4 class="sec_h4">Agus Agusa</h4>
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
                    <img class="rounded-circle img-testimony" src="{{ asset('assets/images/ljn/testimony-4.jpg') }}"
                        alt="">
                    <div class="media-body">
                        <p>Paket internet sangat terjangkau!</p>
                        <a href="#">
                            <h4 class="sec_h4">Tomi Tom</h4>
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
    <section class="gallery_area section_gap">
        <div class="container">
            <div class="section_title text-center">
                <h2 class="title_color">Our Gallery</h2>
            </div>
            <div class="row imageGallery1" id="gallery">
                <div class="col-md-4 gallery_item">
                        <img src="{{ asset('assets/images/ljn/galeri-1.png') }}" alt="">
                </div>
                <div class="col-md-4 gallery_item">
                        <img src="{{ asset('assets/images/ljn/galeri-2.png') }}" alt="">
                </div>
                <div class="col-md-4 gallery_item">
                        <img src="{{ asset('assets/images/ljn/galeri-3.jpg') }}" alt="">
                </div>
                <div class="col-md-4 gallery_item">
                        <img src="{{ asset('assets/images/ljn/galeri-5.jpg') }}" alt="">
                </div>

                <div class="col-md-4 gallery_item">
                        <img src="{{ asset('assets/images/ljn/galeri-4.jpg') }}" alt="">
                </div>
                {{-- <div class="col-md-4 gallery_item">
                    <div class="gallery_img">
                        <img src="image/gallery/05.jpg" alt="">
                        <div class="hover">
                            <a class="light" href="image/gallery/06.jpg"><i class="fa fa-expand"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 gallery_item">
                    <div class="gallery_img">
                        <img src="image/gallery/01-1.jpg" alt="">
                        <div class="hover">
                            <a class="light" href="image/gallery/01-1.jpg"><i class="fa fa-expand"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 gallery_item">
                    <div class="gallery_img">
                        <img src="image/gallery/02-1.jpg" alt="">
                        <div class="hover">
                            <a class="light" href="image/gallery/02-1.jpg"><i class="fa fa-expand"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 gallery_item">
                    <div class="gallery_img">
                        <img src="image/gallery/03-1.jpg" alt="">
                        <div class="hover">
                            <a class="light" href="image/gallery/03-1.jpg"><i class="fa fa-expand"></i></a>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
@endsection
