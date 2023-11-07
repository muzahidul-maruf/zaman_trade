@extends('frontend.layout.master')
@section('services_menu_active', 'active')
@section('packaging_menu_active', 'active')
@section('page_title')
    Seed Packing
@endsection
@section('custom_css')
    <style>
        @media screen and (max-width: 575px) {}

        @media (min-width: 575px) and (max-width: 767px) {}

        @media (min-width: 767px) and (max-width: 991px) {}

        @media (min-width: 991px) and (max-width: 1199px) {}

        @media (min-width: 1199px) and (max-width: 1399px) {}

        @media (min-width: 1399px) {}
    </style>
@endsection
@section('content')
    <main id="main" style="min-height: 90vh;">
        <div class="inner_page_hero d-flex flex-column align-items-center">
            <img src="{{ asset('frontend_assets/common/seed_packaging.png') }}" alt="" class="w-100">

            <div class="text-center inner-box">
                <h5 class="text-white mb-0 text-uppercase"><b>Seed Packing</b></h5>
            </div>
        </div>


        <section id="departments" class="departments">
            <div class="container">
                <div class="row gy-4">
                    <p class="text-dark"> Seed packaging is the process of filling, weighing and sewing of bags with seed.
                        An ideal storage
                        facility should satisfy the following requirements
                    </p>
                    <div class="details">
                        <ul>
                            <li class="text-dark">It should provide maximum possible protection from ground moisture, rain,
                                insect pests,
                                molds, rodents, birds, fore etc.
                            </li>
                            <li class="text-dark">It should provide the necessary facility for inspection, disinfection,
                                loading, unloading,
                                cleaning and reconditioning.</li>
                            <li class="text-dark">It should protect grain from excessive moisture and temperature favorable
                                to both insect and
                                mold development.</li>
                            <li class="text-dark">It should be economical and suitable for a particular situation.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section id="departments" class="departments pt-0">
            <div class="container">
                <div class="row gy-4 justify-content-center">
                    <div class="col-md-5 col-lg-4">
                        <img src="{{ asset('frontend_assets/common/115.png') }}" alt="" class="img-fluid">

                    </div>

                    <div class="col-md-5 col-lg-4">
                        <img src="{{ asset('frontend_assets/common/365.png') }}" alt="" class="img-fluid">
                    </div>

                </div>
            </div>
        </section>
    </main>
@endsection
