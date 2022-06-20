@extends('themes.hotel_intan.layouts')
@section('content')
    <!--================Breadcrumb Area =================-->
    <section class="breadcrumb_area">
        <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
        <div class="container">
            <div class="page-cover text-center">
                <h2 class="page-cover-tittle">Contact Us</h2>
                <ol class="breadcrumb">
                    <li><a href="/">Home</a></li>
                    <li class="active">Contact Us</li>
                </ol>
            </div>
        </div>
    </section>
    <!--================Breadcrumb Area =================-->

    <!--================Contact Area =================-->
    <section class="contact_area section_gap">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2>OUR LOCATION</h2>
                    <p>Jl. Karang Anyar (Pangeran Drajat) No. 36, Kelurahan Jagasatru, Kecamatan Pekalipan, Jagasatru, Kec.
                        Pekalipan, Kota
                        Cirebon, Jawa Barat 45115</p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.313276195729!2d108.5617396143655!3d-6.7315806676893875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f1d83f970a8d3%3A0x6b0bbf86ad12ef45!2sHotel%20Intan!5e0!3m2!1sid!2sid!4v1649306433384!5m2!1sid!2sid"
                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="row">
                <div class="col-md mt-3">
                    <div class="contact_info">
                        <div class="info_item">
                            <i class="lnr lnr-home"></i>
                            <h6>Hotel Intan</h6>
                            <p>Kota Cirebon, Indonesia</p>
                        </div>
                        <div class="info_item">
                            <i class="lnr lnr-phone-handset"></i>
                            <h6><a href="#">123 456 789</a></h6>
                            <p>Mon to Fri 9am to 6 pm</p>
                        </div>
                        <div class="info_item">
                            <i class="lnr lnr-envelope"></i>
                            <h6><a href="#">support@example.com</a></h6>
                            <p>Send us your query anytime!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Contact Area =================-->
@endsection
