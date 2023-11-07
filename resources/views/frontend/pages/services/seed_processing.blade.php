@extends('frontend.layout.master')
@section('services_menu_active', 'active')
@section('processing_menu_active', 'active')
@section('page_title')
    Seed Processing
@endsection
@section('custom_css')
    <style>
        .seed_box {
            box-shadow: 0px 4px 25px 0px rgba(0, 0, 0, 0.10);
            padding: 10px 20px;
            border-radius: 10px;
            min-height: 95px;
            margin-bottom: 20px;
            display: flex;
            align-items: center
        }

        .seed_box p {
            margin-bottom: 0;
        }
    </style>
@endsection
@section('content')
    <main id="main" style="min-height: 90vh;">
        <div class="inner_page_hero d-flex flex-column align-items-center position-relative">
            <img src="{{ asset('frontend_assets/common/seed-processing.png') }}" alt="" class="w-100">

            <div class="text-center inner-box">
                <h5 class="text-white mb-0 text-uppercase"><b>Seed Processing</b></h5>
            </div>
        </div>


        <section id="departments" class="departments">
            <div class="container">
                <div class="row gy-4">
                    <p class="text-dark">We have a separate work shed for fumigation, grading, packaging and necessary space
                        for sun
                        drying is also available. We have Unit-1 and Unit-2 Processing Plant Seed Cleaning/ Grading,
                        Gravity Separator, Treatment-Drying, Packing, Inkjet Print & delivery also</p>
                    <div class="col-lg-8 details order-2 order-lg-1">
                        <h5 class="text-dark"><b>Working Power & Capacity at Askco MSP Centre Limited also-</b></h5>
                        <ul>
                            <li class="text-dark">Rice Seed Cleaning grading per/Day Capacity up to 100MT.
                            </li>
                            <li class="text-dark">Seed Gravity Separator Per/Day Capacity up to 80MT.</li>
                            <li class="text-dark">Seed Treatment & Auto Drying Per/Day Capacity up to 80MT.</li>
                            <li class="text-dark">Small Seed Treater Cum Coating Dressing Drum for Vegetables capacity 200
                                kg per hour. </li>
                            <li class="text-dark">Manual Packing (Man Power) Per/Day Capacity up to 50 MT.</li>
                            <li class="text-dark">Auto Packing Per/Day Capacity up to 30 MT.</li>
                            <li class="text-dark">Ink jet Printing Per/Day Capacity 35000 Pcs Pouch.</li>
                            <li class="text-dark">Specialized Machinery for Seed Manual & Auto Packing, Re-Packing & works.
                            </li>

                        </ul>
                        <div class="" style="height: 250px;">
                            <img src="{{ asset('frontend_assets/common/112.png') }}" alt="" class="img-fluid"
                                style="height: 100%;">
                        </div>
                    </div>

                    <div class="col-lg-4 text-center order-1 order-lg-2">
                        <img src="{{ asset('frontend_assets/common/111.png') }}" alt="" class="img-fluid">
                    </div>

                </div>
            </div>
        </section>
        <section id="departments" class="departments pt-0">
            <div class="container">
                <div class="row gy-4 justify-content-center">
                    <div class="col-md-5 col-lg-4">
                        <img src="{{ asset('frontend_assets/common/113.png') }}" alt="" class="img-fluid">
                    </div>

                    <div class="col-md-5 col-lg-4">
                        <img src="{{ asset('frontend_assets/common/114.png') }}" alt="" class="img-fluid">
                    </div>

                </div>
            </div>
        </section>




    </main>


@endsection
