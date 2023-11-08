@extends('frontend.layout.master')
@section('clients_menu_active', 'active')
@section('page_title')
    Our Clients
@endsection

@section('custom_css')

    <style>
        .gallery .gallery-item {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 10px;
        }

        .gallery_footer {
            display: flex;
            height: 50px;
            background: #038C33;
            justify-content: center;
            align-items: center;
            border-radius: 2px 2px 25px 2px;
            color: #fff;
            margin-bottom: 15px;
            padding: 2px 10px;
        }
    </style>
@endsection
@section('content')
    <main id="main" style="min-height: 90vh;">
        <div class="inner_page_hero d-flex flex-column align-items-center">
            <img src="{{ asset('frontend_assets/common/our_clients.png') }}" alt="" class="w-100">



            <div class="text-center inner-box">
                <h5 class="text-white mb-0"><b>OUR CLIENTS</b></h5>
            </div>
        </div>



        <!-- ======= Gallery Section ======= -->
        <section id="gallery" class="gallery">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('frontend_assets/common/local_clients/1.png') }}" class="galelry-lightbox">
                                <img src="{{ asset('frontend_assets/common/local_clients/1.png') }}" alt=""
                                    class="img-fluid">
                            </a>
                        </div>
                        <div class="gallery_footer">
                            Bayer Crop Science
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('frontend_assets/common/local_clients/2.png') }}" class="galelry-lightbox">
                                <img src="{{ asset('frontend_assets/common/local_clients/2.png') }}" alt=""
                                    class="img-fluid">
                            </a>
                        </div>
                        <div class="gallery_footer">
                            Haychem Bangladesh Limited
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('frontend_assets/common/local_clients/3.png') }}" class="galelry-lightbox">
                                <img src="{{ asset('frontend_assets/common/local_clients/3.png') }}" alt=""
                                    class="img-fluid">
                            </a>
                        </div>
                        <div class="gallery_footer">
                            Syngenta Bangladesh Ltd
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('frontend_assets/common/local_clients/4.png') }}" class="galelry-lightbox">
                                <img src="{{ asset('frontend_assets/common/local_clients/4.png') }}" alt=""
                                    class="img-fluid">
                            </a>
                        </div>
                        <div class="gallery_footer">
                            Corteva Agri Science
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('frontend_assets/common/local_clients/5.png') }}" class="galelry-lightbox">
                                <img src="{{ asset('frontend_assets/common/local_clients/5.png') }}" alt=""
                                    class="img-fluid">
                            </a>
                        </div>
                        <div class="gallery_footer">
                            Macdonald Bangladesh Limited
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('frontend_assets/common/local_clients/6.png') }}" class="galelry-lightbox">
                                <img src="{{ asset('frontend_assets/common/local_clients/6.png') }}" alt=""
                                    class="img-fluid">
                            </a>
                        </div>
                        <div class="gallery_footer">
                            Mahdin Group
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('frontend_assets/common/local_clients/7.png') }}" class="galelry-lightbox">
                                <img src="{{ asset('frontend_assets/common/local_clients/7.png') }}" alt=""
                                    class="img-fluid">
                            </a>
                        </div>
                        <div class="gallery_footer">
                            Askco Group
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('frontend_assets/common/local_clients/8.png') }}" class="galelry-lightbox">
                                <img src="{{ asset('frontend_assets/common/local_clients/8.png') }}" alt=""
                                    class="img-fluid">
                            </a>
                        </div>
                        <div class="gallery_footer">
                            Genitica
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('frontend_assets/common/local_clients/9.png') }}" class="galelry-lightbox">
                                <img src="{{ asset('frontend_assets/common/local_clients/9.png') }}" alt=""
                                    class="img-fluid">
                            </a>
                        </div>
                        <div class="gallery_footer">
                            Aarong
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('frontend_assets/common/local_clients/10.png') }}" class="galelry-lightbox">
                                <img src="{{ asset('frontend_assets/common/local_clients/10.png') }}" alt=""
                                    class="img-fluid">
                            </a>
                        </div>
                        <div class="gallery_footer">
                            Lal Teer Seed Limited
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('frontend_assets/common/local_clients/11.png') }}" class="galelry-lightbox">
                                <img src="{{ asset('frontend_assets/common/local_clients/11.png') }}" alt=""
                                    class="img-fluid">
                            </a>
                        </div>
                        <div class="gallery_footer">
                            Ispahani Agro Limited
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('frontend_assets/common/local_clients/12.png') }}"
                                class="galelry-lightbox">
                                <img src="{{ asset('frontend_assets/common/local_clients/12.png') }}" alt=""
                                    class="img-fluid">
                            </a>
                        </div>
                        <div class="gallery_footer">
                            ACI Limited
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('frontend_assets/common/local_clients/13.png') }}"
                                class="galelry-lightbox">
                                <img src="{{ asset('frontend_assets/common/local_clients/13.png') }}" alt=""
                                    class="img-fluid">
                            </a>
                        </div>
                        <div class="gallery_footer">
                            Suprime Seed Company Limited
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('frontend_assets/common/local_clients/14.png') }}"
                                class="galelry-lightbox">
                                <img src="{{ asset('frontend_assets/common/local_clients/14.png') }}" alt=""
                                    class="img-fluid">
                            </a>
                        </div>
                        <div class="gallery_footer">
                            Surovi Group
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('frontend_assets/common/local_clients/15.png') }}"
                                class="galelry-lightbox">
                                <img src="{{ asset('frontend_assets/common/local_clients/15.png') }}" alt=""
                                    class="img-fluid">
                            </a>
                        </div>
                        <div class="gallery_footer">
                            Igloo Ice Cream
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('frontend_assets/common/local_clients/16.png') }}"
                                class="galelry-lightbox">
                                <img src="{{ asset('frontend_assets/common/local_clients/16.png') }}" alt=""
                                    class="img-fluid">
                            </a>
                        </div>
                        <div class="gallery_footer">
                            Bondhon Genetics Limited
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('frontend_assets/common/local_clients/17.png') }}"
                                class="galelry-lightbox">
                                <img src="{{ asset('frontend_assets/common/local_clients/17.png') }}" alt=""
                                    class="img-fluid">
                            </a>
                        </div>
                        <div class="gallery_footer">
                            Royel IT Limited
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('frontend_assets/common/local_clients/18.png') }}"
                                class="galelry-lightbox">
                                <img src="{{ asset('frontend_assets/common/local_clients/18.png') }}" alt=""
                                    class="img-fluid">
                            </a>
                        </div>
                        <div class="gallery_footer">
                            Alli Contraction Ltd
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('frontend_assets/common/local_clients/19.png') }}"
                                class="galelry-lightbox">
                                <img src="{{ asset('frontend_assets/common/local_clients/19.png') }}" alt=""
                                    class="img-fluid">
                            </a>
                        </div>
                        <div class="gallery_footer">
                            Bangladesh Police
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('frontend_assets/common/local_clients/20.png') }}"
                                class="galelry-lightbox">
                                <img src="{{ asset('frontend_assets/common/local_clients/20.png') }}" alt=""
                                    class="img-fluid">
                            </a>
                        </div>
                        <div class="gallery_footer">
                            Indigo Positive Limited
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('frontend_assets/common/local_clients/21.png') }}"
                                class="galelry-lightbox">
                                <img src="{{ asset('frontend_assets/common/local_clients/21.png') }}" alt=""
                                    class="img-fluid">
                            </a>
                        </div>
                        <div class="gallery_footer">
                            Brain Work Limited
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('frontend_assets/common/local_clients/22.png') }}"
                                class="galelry-lightbox">
                                <img src="{{ asset('frontend_assets/common/local_clients/22.png') }}" alt=""
                                    class="img-fluid">
                            </a>
                        </div>
                        <div class="gallery_footer">
                            Indigo Anjum Limited
                        </div>
                    </div>


                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('frontend_assets/common/local_clients/23.png') }}"
                                class="galelry-lightbox">
                                <img src="{{ asset('frontend_assets/common/local_clients/23.png') }}" alt=""
                                    class="img-fluid">
                            </a>
                        </div>
                        <div class="gallery_footer">
                            Pally Bazar Limited
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('frontend_assets/common/local_clients/24.png') }}"
                                class="galelry-lightbox">
                                <img src="{{ asset('frontend_assets/common/local_clients/24.png') }}" alt=""
                                    class="img-fluid">
                            </a>
                        </div>
                        <div class="gallery_footer">
                            Individual Client around the country (160+)
                        </div>
                    </div>

                </div>

            </div>
        </section>

    </main>


@endsection
