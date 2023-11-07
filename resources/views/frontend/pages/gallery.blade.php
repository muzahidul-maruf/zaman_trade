@extends('frontend.layout.master')
@section('gallery_menu_active', 'active')
@section('page_title')
    Gallery
@endsection

@section('custom_css')
    <style>
    </style>
@endsection
@section('content')
    <main id="main" style="min-height: 90vh;">
        <div class="inner_page_hero d-flex flex-column align-items-center">
            <img src="{{ asset('frontend_assets/common/gallery_header.png') }}" alt="" class="w-100">



            <div class="text-center inner-box">
                <h5 class="text-white mb-0"><b>Gallery</b></h5>
            </div>
        </div>



        <!-- ======= Gallery Section ======= -->
        <section id="gallery" class="gallery">
            <div class="container">
                <div class="row g-0">

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('frontend_assets/common/gallery_images/1 (1).png') }}"
                                class="galelry-lightbox">
                                <img src="{{ asset('frontend_assets/common/gallery_images/1 (1).png') }}" alt=""
                                    class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('frontend_assets/common/gallery_images/1 (2).png') }}"
                                class="galelry-lightbox">
                                <img src="{{ asset('frontend_assets/common/gallery_images/1 (2).png') }}" alt=""
                                    class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('frontend_assets/common/gallery_images/1 (3).png') }}"
                                class="galelry-lightbox">
                                <img src="{{ asset('frontend_assets/common/gallery_images/1 (3).png') }}" alt=""
                                    class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('frontend_assets/common/gallery_images/1 (4).png') }}"
                                class="galelry-lightbox">
                                <img src="{{ asset('frontend_assets/common/gallery_images/1 (4).png') }}" alt=""
                                    class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('frontend_assets/common/gallery_images/1 (5).png') }}"
                                class="galelry-lightbox">
                                <img src="{{ asset('frontend_assets/common/gallery_images/1 (5).png') }}" alt=""
                                    class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('frontend_assets/common/gallery_images/1 (6).png') }}"
                                class="galelry-lightbox">
                                <img src="{{ asset('frontend_assets/common/gallery_images/1 (6).png') }}" alt=""
                                    class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('frontend_assets/common/gallery_images/1 (7).png') }}"
                                class="galelry-lightbox">
                                <img src="{{ asset('frontend_assets/common/gallery_images/1 (7).png') }}" alt=""
                                    class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('frontend_assets/common/gallery_images/1 (8).png') }}"
                                class="galelry-lightbox">
                                <img src="{{ asset('frontend_assets/common/gallery_images/1 (8).png') }}" alt=""
                                    class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('frontend_assets/common/gallery_images/1 (9).png') }}"
                                class="galelry-lightbox">
                                <img src="{{ asset('frontend_assets/common/gallery_images/1 (9).png') }}" alt=""
                                    class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('frontend_assets/common/gallery_images/1 (10).png') }}"
                                class="galelry-lightbox">
                                <img src="{{ asset('frontend_assets/common/gallery_images/1 (10).png') }}" alt=""
                                    class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('frontend_assets/common/gallery_images/1 (11).png') }}"
                                class="galelry-lightbox">
                                <img src="{{ asset('frontend_assets/common/gallery_images/1 (11).png') }}" alt=""
                                    class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset('frontend_assets/common/gallery_images/1 (12).png') }}"
                                class="galelry-lightbox">
                                <img src="{{ asset('frontend_assets/common/gallery_images/1 (12).png') }}" alt=""
                                    class="img-fluid">
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </section>

    </main>


@endsection
