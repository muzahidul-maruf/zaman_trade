@extends('frontend.layout.master')
@section('services_menu_active', 'active')
@section('storage_menu_active', 'active')
@section('page_title')
    Seed Storage
@endsection
@section('custom_css')
    <style>
        .seed_storage .section_title {
            text-transform: uppercase;
        }
    </style>
@endsection
@section('content')
    <main id="main" style="min-height: 90vh;">
        <div class="inner_page_hero d-flex flex-column align-items-center position-relative">
            <img src="{{ asset('frontend_assets/common/seed_storage_1.png') }}" alt="" class="w-100">

            <div class="text-center inner-box">
                <h5 class="text-white mb-0 text-uppercase"><b>Seed Storage</b></h5>
            </div>
        </div>


        <section id="departments" class="departments">
            <div class="container seed_storage">
                <div class="row gy-4">
                    <h6 class="section_title" style="color: #46833D"><b>Seed Storage Definition</b></h6>
                    <p class="text-dark mt-0">Seed storage may be defined as the seed conservation method obtained from the
                        harvest until they are planted for successful crop production. The seeds are required to be
                        conserved through proper storage for a short or long period. During seed storage, moisture is
                        controlled correctly for the protection of deterioration.</p>
                    <div class="col-lg-8 details order-2 order-lg-1">

                        <h6 class="section_title" style="color: #46833D"><b>Purposes of seed storage</b></h6>
                        <p class="text-dark">The purpose of seed storage is to maintain the seed in good physical and
                            physiological condition from the time they are harvested until the time they are planted.</p>
                        <ul>
                            <li>To protect seeds from insects, pests, and diseases.</li>
                            <li>To conserve seeds until they germinate for subsequent crop production.</li>
                        </ul>

                        <h6 class="section_title" style="color: #46833D">Importance of seed storage</b></h6>
                        <ul>
                            <li>It increases crop yield.</li>
                            <li>To get good plant stands in addition to healthy and vigorous plants.</li>
                            <li>It decreases the seed-borne disease due to changes in local climate at storage.</li>
                        </ul>

                        <h6 class="section_title" style="color: #46833D">Conditions of seed storage
                            </b></h6>
                        <p class="text-dark">Seed storage aims to maintain its germination capacity more stringent
                            conditions are required than those to conserve the nutritional or industrial quality of seed.
                        </p>
                        <ul>
                            <li>During storage, some of the germination capacity is lost slowly or rapidly, depending on
                                storage conditions.</li>
                            <li>The store temperature and moisture will be low for dry seed storage at 10°C and relative
                                humidity at 50%.</li>
                        </ul>
                    </div>

                    <div class="col-lg-4 text-center order-1 order-lg-2">
                        <img src="{{ asset('frontend_assets/common/seed_storage_2.png') }}" alt=""
                            class="img-fluid">
                    </div>

                </div>
            </div>
        </section>
        <section id="departments" class="departments pt-0">
            <div class="container">
                <div class="row gy-4 justify-content-center">
                    <div class="col-md-5 col-lg-4">
                        <img src="{{ asset('frontend_assets/common/seed_storage_3.png') }}" alt=""
                            class="img-fluid">
                    </div>

                    <div class="col-md-5 col-lg-4">
                        <img src="{{ asset('frontend_assets/common/seed_storage_4.png') }}" alt=""
                            class="img-fluid">
                    </div>

                </div>
            </div>
        </section>
    </main>


@endsection
