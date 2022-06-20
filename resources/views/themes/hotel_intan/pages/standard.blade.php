@extends('themes.hotel_intan.layouts')
@section('content')
    <!--================Breadcrumb Area =================-->
    <section class="breadcrumb_area">
        <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
        <div class="container">
            <div class="page-cover text-center">
                <h2 class="page-cover-tittle">Standard</h2>
                <ol class="breadcrumb">
                    <li><a href="/">Home</a></li>
                    <li class="active">Standard</li>
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
                                        <h2 class="title title_color">Standard</h2>
                                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat voluptas
                                            laudantium officiis
                                            repudiandae deserunt ad porro tenetur asperiores illum et. Tempore eaque
                                            architecto obcaecati
                                            quae at quas ipsa maiores exercitationem!.</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <img class="img-fluid" src="{{ themeUrl('assets/images/hotel/room-4.jpg') }}"
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
