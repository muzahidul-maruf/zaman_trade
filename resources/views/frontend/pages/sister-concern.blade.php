@extends('frontend.layout.master')
@section('sister_concern_menu_active', 'active')
@section('page_title')
    Sister Concern
@endsection
@section('content')
    <main id="main" style="min-height: 90vh;">
        <div class="inner_page_hero d-flex flex-column align-items-center">
            <img src="{{ asset('frontend_assets/common/sister.png') }}" alt="" class="w-100">

            <div class="text-center inner-box">
                <h5 class="text-white mb-0"><b>Sister Concern</b></h5>
                {{-- <h5 class="text-white mb-0"><b>SISTER CONCERN</b></h5> --}}
            </div>
        </div>

        <section id="departments" class="departments">
            <div class="container">
                <div class="row py-2 py-lg-4">
                    <div class="col-12" style="border: 1px solid #038c33;min-height:250px;border-radius: 10px; ">
                        <div class="row h-100 p-4">
                            <div class="col-md-6">
                                <div
                                    style="height: 100%;display: flex;flex-direction: column;align-items: center;justify-content: center;width: 100%;text-align: center;">
                                    <h4 style="color: #038c33;">Green National Agro Industry</h4>
                                    <p>(Hybrid Seed Business)</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <img src="{{ asset('frontend_assets/common/sister/1.jpeg') }}" alt=""
                                    class="w-100">
                            </div>

                        </div>
                    </div>
                </div>

                <div class="row py-2 py-lg-4">
                    <div class="col-12" style="border: 1px solid #038c33;min-height:250px;border-radius: 10px; ">
                        <div class="row h-100 p-4">
                            <div class="col-md-6">
                                <div
                                    style="height: 100%;display: flex;flex-direction: column;align-items: center;justify-content: center;width: 100%;text-align: center;">
                                    <h4 style="color: #038c33;">Bagrow Preservation Limited-1000 mt</h4>
                                    <p>(Dehumidified Seed Storage)</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <img src="{{ asset('frontend_assets/common/sister/2.png') }}" alt="" class="w-100">
                            </div>

                        </div>
                    </div>
                </div>

                <div class="row py-2 py-lg-4">
                    <div class="col-12" style="border: 1px solid #038c33;min-height:250px;border-radius: 10px; ">
                        <div class="row h-100 p-4">
                            <div class="col-md-6">
                                <div
                                    style="height: 100%;display: flex;flex-direction: column;align-items: center;justify-content: center;width: 100%;text-align: center;">
                                    <h4 style="color: #038c33;">Transpan Knitex Limited</h4>
                                    <p>(Garments Products-Knite)</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <img src="{{ asset('frontend_assets/common/sister/3.png') }}" alt="" class="w-100">
                            </div>

                        </div>
                    </div>
                </div>


            </div>
        </section>

        {{-- <section id="" class="pt-0">
            <div class="container">
                <div class="row p-3" style="background-color: #038C33; color:white; border-radius:10px;">
                    <div class="col-12 details">
                        <h3 class="text-center section_title">OUR MISSION</h3>
                        <p class="text-start mb-0">· Perceiving customer needs at utmost level by providing them flexibility
                            in
                            sourcing, competitive prices, on-time deliveries and customized solutions for unique needs
                        </p>
                        <p class="text-start mb-0">· Continually building our skills and knowledge to meet the growing and
                            diverse needs of customers
                        </p>
                        <p class="text-start mb-0">· Sustaining our reputation as a reliable, customer-oriented, dynamic
                            player
                            in the market
                        </p>
                        <p class="text-start mb-0">· Ensuring fair and equitable employment conditions by providing a
                            stimulating
                            working environment based on respect and partnership
                        </p>
                        <p class="text-start mb-0">· Together attract and attain customers products and services quickly.
                        </p>
                        <p class="text-start mb-0">· Achieving profitable growth, operational and organizational excellence
                            without compromising from our values and business ethics
                        </p>
                    </div>

                </div>
            </div>
        </section>

        <section id="" class="pt-0">
            <div class="container">
                <div class="row p-3" style="background-color: #025928; color:white; border-radius:10px;">
                    <div class="col-12 details">
                        <h3 class="text-center section_title">OUR VISION</h3>
                        <p class="text-start mb-0">· Perceiving customer needs at utmost level by providing them flexibility
                            in
                            sourcing, competitive prices, on-time deliveries and customized solutions for unique needs
                        </p>
                        <p class="text-start mb-0">· Continually building our skills and knowledge to meet the growing and
                            diverse needs of customers
                        </p>
                        <p class="text-start mb-0">· Sustaining our reputation as a reliable, customer-oriented, dynamic
                            player
                            in the market
                        </p>
                        <p class="text-start mb-0">· Ensuring fair and equitable employment conditions by providing a
                            stimulating
                            working environment based on respect and partnership
                        </p>
                        <p class="text-start mb-0">· Together attract and attain customers products and services quickly.
                        </p>
                        <p class="text-start mb-0">· Achieving profitable growth, operational and organizational excellence
                            without compromising from our values and business ethics
                        </p>
                    </div>

                </div>
            </div>
        </section>


        <section id="" class="pt-0">
            <div class="container">
                <div class="row justify-content-center" style="">
                    <h3 class="text-center section_title text-uppercase" style="color: #038C33">OUR Success Deal with
                        Product list</h3>

                    <div class="col-12">
                        <h5 class="text-dark text-uppercase"><b>Agriculture Products & Equipment</b></h5>
                    </div>

                    <div class="col-md-6 mb-3">
                        <div style="border: 2px solid #038C33; border-radius: 10px; height: 100%;">
                            <p class="text-center my-2"> Seed Moisture Test Machine (India, China,
                                Japan & Thailand)</p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div style="border: 2px solid #038C33; border-radius: 10px; height: 100%;">
                            <p class="text-center my-2"> Seed Germination Paper (India)</p>
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <div style="border: 2px solid #038C33; border-radius: 10px; height: 100%;">
                            <p class="text-center my-2"> Seed Grading Machine (India, China & Thailand)</p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div style="border: 2px solid #038C33; border-radius: 10px; height: 100%;">
                            <p class="text-center my-2">Seed Surface Drying Machine (India, China, & Thailand)</p>
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <div style="border: 2px solid #038C33; border-radius: 10px; height: 100%;">
                            <p class="text-center my-2"> Seed Treatment Machine (India, China, & Thailand)</p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div style="border: 2px solid #038C33; border-radius: 10px; height: 100%;">
                            <p class="text-center my-2"> Seeds Production/Distribute, Local and Hybrid (India, China, &
                                Thailand)</p>
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <div style="border: 2px solid #038C33; border-radius: 10px; height: 100%;">
                            <p class="text-center my-2">Seed Treatment Chemicals</p>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center mt-5" style="">


                    <div class="col-12">
                        <h5 class="text-dark text-uppercase"><b>Garments Products</b></h5>
                    </div>

                    <div class="col-md-6 mb-3">
                        <div style="border: 2px solid #038C33; border-radius: 10px; height: 100%;">
                            <p class="text-center my-2"> Cloth Mask with Company Branding</p>
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <div style="border: 2px solid #038C33; border-radius: 10px; height: 100%;">
                            <p class="text-center my-2"> T-Shirt/Polo for Promotional Branding</p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div style="border: 2px solid #038C33; border-radius: 10px; height: 100%;">
                            <p class="text-center my-2"> Oven Shirts/Jeans with Customization and
                                Branding Facility</p>
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <div style="border: 2px solid #038C33; border-radius: 10px; height: 100%;">
                            <p class="text-center my-2"> Non-Oven Tissue Bag with Customization and
                                Branding Facility</p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div style="border: 2px solid #038C33; border-radius: 10px; height: 100%;">
                            <p class="text-center my-2"> Hats and Bags</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mt-5" style="">


                    <div class="col-12">
                        <h5 class="text-dark text-uppercase"><b>Other Products</b></h5>
                    </div>

                    <p>Parker Pen, Mug, Table Clock, Umbrella, Calendar with branding, filter paper for electronics & motors
                        company,
                        Dehumidifier/Air-conditioned etc.</p>


                </div>
            </div>
        </section> --}}




    </main>


@endsection
