@extends('themes.hotel_intan.layouts')
@section('content')
    <!--================Breadcrumb Area =================-->
    <section class="breadcrumb_area">
        <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
        <div class="container">
            <div class="page-cover text-center">
                <h2 class="page-cover-tittle">About Hotel</h2>
                <ol class="breadcrumb">
                    <li><a href="/">Home</a></li>
                    <li class="active">About Hotel</li>
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
                    <section class="about_history_area section_gap">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 d_flex align-items-center">
                                    <div class="about_content ">
                                        <h2 class="title title_color">About Hotel</h2>
                                        <p class="mb-0">Hotel simpel yang terletak di bangunan dengan fasad warni-warni ini berjarak 3 km dari stasiun kereta Cirebon Prujakan, 1 km dari Keraton Kacirebonan abad ke-19, dan 5 km dari Pantai
                                            Kejawanan.</p>
                                        <p> Kamar simpel menyediakan Wi-Fi gratis, TV layar datar, AC, serta fasilitas pembuat teh dan kopi. Semua kamar memiliki kamar mandi dalam serta teras atau balkon bersama yang menghadap ke kebun. Suite memiliki area duduk dan ruang makan.</p>
                                        <p>Terdapat kolam renang outdoor dengan teras, meja dengan payung, plus kebun. Tersedia ruang acara dengan kapasitas 200 tamu.</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <img class="img-fluid" src="{{ themeUrl('assets/images/hotel/hotel-intan-1.jpg') }}"
                                        alt="img">
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
    <!--================Contact Area =================-->
@endsection
