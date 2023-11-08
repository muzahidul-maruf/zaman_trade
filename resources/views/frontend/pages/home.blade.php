@extends('frontend.layout.master')
@section('home_menu_active', 'active')
@section('page_title')
    Home
@endsection
@section('content')

    <!-- ======= Hero Section ======= -->
    @include('frontend._partials.hero')
    <!-- End Hero -->

    <main id="main">
        <!-- ======= Why Us Section ======= -->
        {{-- <section id="why-us" class="why-us">
            <div class="container">

                <div class="row">

                    <div class="col-lg-12 d-flex align-items-stretch">
                        <div class="icon-boxes d-flex flex-column justify-content-center">
                            <div class="row">
                                <div class="col-xl-3 d-flex align-items-stretch">
                                    <div class="icon-box mt-4 mt-xl-0" style="background: #458301">
                                        <i class="fa-solid fa-truck-arrow-right"></i>
                                        <h4>Transport Facility</h4>
                                    </div>
                                </div>
                                <div class="col-xl-3 d-flex align-items-stretch">
                                    <div class="icon-box mt-4 mt-xl-0" style="background: #2E3191;">
                                        <i class="fa-solid fa-charging-station"></i>
                                        <h4>Backup Generator</h4>
                                    </div>
                                </div>
                                <div class="col-xl-3 d-flex align-items-stretch">
                                    <div class="icon-box mt-4 mt-xl-0" style="background: #458301">
                                        <i class="fa-solid fa-vial-virus"></i>
                                        <h4>Laboratory Equipments & Facility</h4>
                                    </div>
                                </div>
                                <div class="col-xl-3 d-flex align-items-stretch">
                                    <div class="icon-box mt-4 mt-xl-0" style="background: #2E3191">
                                        <i class="fa-regular fa-snowflake"></i>
                                        <h4>Dehumidifier &
                                            Humidifier System</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section> --}}

        <section id="departments" class="departments pt-0">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-8 details">

                        <h3 class="section_title" style="color: #038C33">WHO WE ARE</h3>

                        <p class="f-18 text-dark">Zaman Trade International is a leading international trading company with a
                            primary
                            commitment to providing exceptional customer service. Our business revolves around the core
                            principles of attentiveness, effectiveness, and proactivity. We take pride in delivering
                            personalized attention to each of our valued customers, ensuring their unique needs and
                            preferences are met with precision and care. With a dedication to excellence, Zaman Trade
                            International continues to stand as a trusted partner in the world of global trade.</p>
                        <div>
                            <a href="{{ route('about_us_page') }}" class="appointment-btn mb-2">DISCOVER
                                MORE</a>
                        </div>
                    </div>
                    <div class="col-lg-4 text-center">
                        <img src="{{ asset('frontend_assets/common/homePage/1.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>

        <section id="services" class="services pt-0">
            <div class="container">

                <div class="section-title">
                    <h2 class="section_title" style="color: #038C33">OUR SERVICES</h2>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="icon-box">
                            <img class="img-fluid" src="{{ asset('frontend_assets/common/homePage/2.png') }}"
                                alt="">
                            <h5 class="mt-4">Agricultural Products Producer</h5>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="icon-box">
                            <img class="img-fluid" src="{{ asset('frontend_assets/common/homePage/3.png') }}"
                                alt="">
                            <h5 class="mt-4">Agricultural Products Distributor</h5>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="icon-box">
                            <img class="img-fluid" src="{{ asset('frontend_assets/common/homePage/4.png') }}"
                                alt="">
                            <h5 class="mt-4">Agro Machinery Supplier</h5>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="icon-box">
                            <img class="img-fluid" src="{{ asset('frontend_assets/common/homePage/5.png') }}"
                                alt="">
                            <h5 class="mt-4">Warehouse Facility</h5>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="icon-box">
                            <img class="img-fluid" src="{{ asset('frontend_assets/common/homePage/6.png') }}"
                                alt="">
                            <h5 class="mt-4">Garments Products (Knit Item)</h5>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="icon-box">
                            <img class="img-fluid" src="{{ asset('frontend_assets/common/homePage/7.png') }}"
                                alt="">
                            <h5 class="mt-4">Manpower Outsourcing and Vendor Management</h5>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <section id="about" class="about pt-0">
            <div class="container">
                <div class="section-title">
                    <h2 class="section_title" style="color: #038C33">WHY CHOOSE US</h2>
                </div>

                <div class="row">
                    <div class="col-md-4 py-1 px-lg-5">
                        <div class="text-center">
                            <img class="img-fluid" src="{{ asset('frontend_assets/common/homePage/8.png') }}"
                                alt="">
                        </div>
                        <h5 class="text-center py-2 text-dark"><b>Loyalty</b></h5>
                        <p class="text-center">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                            doloremque
                            laudantium, totam rem aperiam, eaque ipsa qua</p>
                    </div>
                    <div class="col-md-4 py-1 px-lg-5">
                        <div class="text-center">
                            <img class="img-fluid" src="{{ asset('frontend_assets/common/homePage/9.png') }}"
                                alt="">
                        </div>
                        <h5 class="text-center py-2 text-dark"><b>Honesty</b></h5>
                        <p class="text-center">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                            doloremque
                            laudantium, totam rem aperiam, eaque ipsa qua</p>
                    </div>
                    <div class="col-md-4 py-1 px-lg-5">
                        <div class="text-center">
                            <img class="img-fluid" src="{{ asset('frontend_assets/common/homePage/10.png') }}"
                                alt="">
                        </div>
                        <h5 class="text-center py-2 text-dark"><b>Integrity</b></h5>
                        <p class="text-center">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                            doloremque
                            laudantium, totam rem aperiam, eaque ipsa qua</p>
                    </div>
                    <div class="col-md-4 py-1 px-lg-5">
                        <div class="text-center">
                            <img class="img-fluid" src="{{ asset('frontend_assets/common/homePage/11.png') }}"
                                alt="">
                        </div>
                        <h5 class="text-center py-2 text-dark"><b>Reliability</b></h5>
                        <p class="text-center">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                            doloremque
                            laudantium, totam rem aperiam, eaque ipsa qua</p>
                    </div>
                    <div class="col-md-4 py-1 px-lg-5">
                        <div class="text-center">
                            <img class="img-fluid" src="{{ asset('frontend_assets/common/homePage/12.png') }}"
                                alt="">
                        </div>
                        <h5 class="text-center py-2 text-dark"><b>Transparency</b></h5>
                        <p class="text-center">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                            doloremque
                            laudantium, totam rem aperiam, eaque ipsa qua</p>
                    </div>
                    <div class="col-md-4 py-1 px-lg-5">
                        <div class="text-center">
                            <img class="img-fluid" src="{{ asset('frontend_assets/common/homePage/13.png') }}"
                                alt="">
                        </div>
                        <h5 class="text-center py-2 text-dark"><b>Mutual Respect</b></h5>
                        <p class="text-center">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                            doloremque
                            laudantium, totam rem aperiam, eaque ipsa qua</p>
                    </div>
                </div>

            </div>
        </section>


        <section id="about" class="about pt-0">
            <div class="container">
                <div class="section-title">
                    <h2 class="section_title text-start" style="color: #038C33">OUR FEATURE PRODUCTS</h2>
                </div>

                <div class="row">
                    <div class="col-md-4 col-lg-3 mb-4">
                        <div class="card" style="border: 2px solid #038C33">
                            <img src="{{ asset('frontend_assets/common/homePage/14.png') }}"
                                class="card-img-top p-3 img-fluid" alt="...">
                            <div class="card-body text-center">
                                <p class="card-text">Grain Moisture Meter LDS 1G</p>
                                <a href="#" class="btn text-white" style="background-color: #038C33">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3 mb-4">
                        <div class="card" style="border: 2px solid #038C33">
                            <img src="{{ asset('frontend_assets/common/homePage/15.png') }}"
                                class="card-img-top p-3 img-fluid" alt="...">
                            <div class="card-body text-center">
                                <p class="card-text">Portable Moisture Meter Wile 200</p>
                                <a href="#" class="btn text-white" style="background-color: #038C33">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3 mb-4">
                        <div class="card" style="border: 2px solid #038C33">
                            <img src="{{ asset('frontend_assets/common/homePage/16.png') }}"
                                class="card-img-top p-3 img-fluid" alt="...">
                            <div class="card-body text-center">
                                <p class="card-text">High Accuracy Automatic Seed Counter</p>
                                <a href="#" class="btn text-white" style="background-color: #038C33">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3 mb-4">
                        <div class="card" style="border: 2px solid #038C33">
                            <img src="{{ asset('frontend_assets/common/homePage/17.png') }}"
                                class="card-img-top p-3 img-fluid" alt="...">
                            <div class="card-body text-center">
                                <p class="card-text">Precision Seed Divider</p>
                                <a href="#" class="btn text-white" style="background-color: #038C33">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3 mb-4">
                        <div class="card" style="border: 2px solid #038C33">
                            <img src="{{ asset('frontend_assets/common/homePage/18.png') }}"
                                class="card-img-top p-3 img-fluid" alt="...">
                            <div class="card-body text-center">
                                <p class="card-text">Thresher of Rice Wheat</p>
                                <a href="#" class="btn text-white" style="background-color: #038C33">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3 mb-4">
                        <div class="card" style="border: 2px solid #038C33">
                            <img src="{{ asset('frontend_assets/common/homePage/19.png') }}"
                                class="card-img-top p-3 img-fluid" alt="...">
                            <div class="card-body text-center">
                                <p class="card-text">New Style Laboratory Thresher</p>
                                <a href="#" class="btn text-white" style="background-color: #038C33">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3 mb-4">
                        <div class="card" style="border: 2px solid #038C33">
                            <img src="{{ asset('frontend_assets/common/homePage/20.png') }}"
                                class="card-img-top p-3 img-fluid" alt="...">
                            <div class="card-body text-center">
                                <p class="card-text">Seed Germination Incubator</p>
                                <a href="#" class="btn text-white" style="background-color: #038C33">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3 mb-4">
                        <div class="card" style="border: 2px solid #038C33">
                            <img src="{{ asset('frontend_assets/common/homePage/21.png') }}"
                                class="card-img-top p-3 img-fluid" alt="...">
                            <div class="card-body text-center">
                                <p class="card-text">Seed Neatness Workbench</p>
                                <a href="#" class="btn text-white" style="background-color: #038C33">Read More</a>
                            </div>
                        </div>
                    </div>

                </div>


            </div>
        </section>



        <section id="about" class="about client_slider pt-0">

            <div class="section-title">
                <h2 class="section_title mb-0" style="color: #038C33">OUR VALUABLE CLIENTS</h2>
            </div>
            <section class="client-slider" style="padding: 20px 0px">
                <div class="slider">
                    <div class="logos me-3 me-md-0">
                        <img src="{{ asset('frontend_assets/common/client-slider/1.png') }}">
                        <img src="{{ asset('frontend_assets/common/client-slider/2.png') }}">
                        <img src="{{ asset('frontend_assets/common/client-slider/3.png') }}">
                        <img src="{{ asset('frontend_assets/common/client-slider/4.png') }}">
                        <img src="{{ asset('frontend_assets/common/client-slider/5.png') }}">
                        <img src="{{ asset('frontend_assets/common/client-slider/6.png') }}">
                    </div>
                    <div class="logos">
                        <img src="{{ asset('frontend_assets/common/client-slider/1.png') }}">
                        <img src="{{ asset('frontend_assets/common/client-slider/2.png') }}">
                        <img src="{{ asset('frontend_assets/common/client-slider/3.png') }}">
                        <img src="{{ asset('frontend_assets/common/client-slider/4.png') }}">
                        <img src="{{ asset('frontend_assets/common/client-slider/5.png') }}">
                        <img src="{{ asset('frontend_assets/common/client-slider/6.png') }}">
                    </div>
                </div>
            </section>
            <section class="client-slider" style="padding: 20px 0px">
                <div class="slider">
                    <div class="logos me-3 me-md-0">
                        {{-- <img src="{{ asset('frontend_assets/common/client-slider/7.png') }}"> --}}
                        <img src="{{ asset('frontend_assets/common/client-slider/8.png') }}">
                        <img src="{{ asset('frontend_assets/common/client-slider/9.png') }}">
                        <img src="{{ asset('frontend_assets/common/client-slider/10.png') }}">
                        <img src="{{ asset('frontend_assets/common/client-slider/11.png') }}">
                        <img src="{{ asset('frontend_assets/common/client-slider/12.png') }}">
                        <img src="{{ asset('frontend_assets/common/client-slider/13.png') }}">
                    </div>
                    <div class="logos">
                        {{-- <img src="{{ asset('frontend_assets/common/client-slider/7.png') }}"> --}}
                        <img src="{{ asset('frontend_assets/common/client-slider/8.png') }}">
                        <img src="{{ asset('frontend_assets/common/client-slider/9.png') }}">
                        <img src="{{ asset('frontend_assets/common/client-slider/10.png') }}">
                        <img src="{{ asset('frontend_assets/common/client-slider/11.png') }}">
                        <img src="{{ asset('frontend_assets/common/client-slider/12.png') }}">
                        <img src="{{ asset('frontend_assets/common/client-slider/13.png') }}">
                    </div>
                </div>
            </section>

        </section>


        <section id="testimonials" class="testimonials pt-0">
            <div class="container pt-5" style="background-color: #038C33; border-radius: 10px;">

                <div class="section-title pb-0">
                    <h2 class="section_title mb-0 text-uppercase" style="color: #fff">What our clients say</h2>
                </div>

                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <p class="text-white">
                                        <i class="bx bxs-quote-alt-left quote-icon-left" style=""></i>
                                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                        irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                        pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                        deserunt mollit anim id est laborum."
                                        <i class="bx bxs-quote-alt-right quote-icon-right" style=""></i>
                                    </p>
                                    <img src="{{ asset('frontend_assets/common/avater.png') }}" class="testimonial-img"
                                        alt="">
                                    <h3 class="text-white">Shafayat Rahman</h3>
                                    <h4 class="text-white mb-0">Manager</h4>
                                    <p class="text-white">ABC Seed Company</p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section>


    </main>


@endsection
