@extends('frontend.layout.master')
@section('services_menu_active', 'active')
@section('laboratory_menu_active', 'active')
@section('page_title')
    Seed Laboratory
@endsection
@section('custom_css')
    <style>
        .seed_lab .section_title {
            text-transform: uppercase;
        }
    </style>
@endsection
@section('content')
    <main id="main" style="min-height: 90vh;">
        <div class="inner_page_hero d-flex flex-column align-items-center position-relative">
            <img src="{{ asset('frontend_assets/common/seed_lab.png') }}" alt="" class="w-100">

            <div class="text-center inner-box">
                <h5 class="text-white mb-0 text-uppercase"><b>Seed Laboratory</b></h5>
            </div>
        </div>


        <section id="departments" class="departments">
            <div class="container seed_lab">
                <div class="row gy-4">
                    {{-- <p>We have a separate work shed for fumigation, grading, packaging and necessary space for sun
                        drying is also available. We have Unit-1 and Unit-2 Processing Plant Seed Cleaning/ Grading,
                        Gravity Separator, Treatment-Drying, Packing, Inkjet Print & delivery also</p> --}}
                    <div class="col-lg-8 details order-2 order-lg-1">
                        <p class="text-dark">Seed plays a vital role in the potential crop yield of each small grain
                            producer. Small grain
                            seed must comply with legal requirements with regard to the purity and germination percentage
                            before it can be marketed. The Small Grain Institute now has a registered Seed Testing
                            Laboratory that uses international methods (viz. ISTA methods) to determine the quality
                            characteristics of seed. This ensures that results are generally accepted by buyers and sellers
                            of seed. Tests that can be done by the laboratory include the following:</p>
                        {{-- <h5><b>Working Power & Capacity at Askco MSP Centre Limited also-</b></h5> --}}
                        <h6 class="section_title" style="color: #46833D"><b>Genetic purity analysis</b></h6>
                        <p class="text-dark">The determination of the cultivar purity is determined visually according to
                            kernel
                            characteristics. Mixed seed lots, unetiquetted seed lots or carry-over seed can be identified on
                            cultivar level.</p>
                        <h6 class="section_title" style="color: #46833D">Physical purity</b></h6>
                        <p class="text-dark">Seed must be free of seed of other crops as well as weed seed. Pure seed is
                            then tested to determine the percentage germination.</p>
                        <h6 class="section_title" style="color: #46833D">Germination percentage</b></h6>
                        <p class="text-dark">It gives an indication of the percentage seed that forms normal seedlings under
                            favorable conditions. Here high risk seed lots will definitely have to be tested because of the
                            high input costs, and the producer will have to make sure that seed purchased has a germination
                            percentage above the minimum of 80%.</p>
                        <h6 class="section_title" style="color: #46833D">Coleoptile length tests</b></h6>
                        <p class="text-dark">Coleoptile lengths are especially used in the dryland production areas, because
                            planting depths are often deep and emergence problems can occur. Especially certain seed
                            treatments influence the coleoptile length and therefore it is tested to ensure that the minimum
                            requirements are met</p>
                        <h6 class="section_title" style="color: #46833D">Grading of small grains
                            </b></h6>
                        <p class="text-dark">Grading of small grains can also be done for the producer to determine the
                            class and grade of the harvest.</p>

                    </div>

                    <div class="col-lg-4 text-center order-1 order-lg-2">
                        <img src="{{ asset('frontend_assets/common/seed_lab_2.png') }}" alt="" class="img-fluid">
                    </div>

                </div>
            </div>
        </section>
        <section id="departments" class="departments pt-0">
            <div class="container">
                <div class="row gy-4 justify-content-center">
                    <div class="col-md-5 col-lg-4">
                        <img src="{{ asset('frontend_assets/common/seed_lab_3.png') }}" alt="" class="img-fluid">
                    </div>

                    <div class="col-md-5 col-lg-4">
                        <img src="{{ asset('frontend_assets/common/seed_lab_4.png') }}" alt="" class="img-fluid">
                    </div>

                </div>
            </div>
        </section>




    </main>


@endsection
