@extends('frontend.layout.master')
@section('about_menu_active', 'active')
@section('page_title')
    About us
@endsection
@section('content')
    <main id="main" style="min-height: 90vh;">
        <div class="inner_page_hero d-flex flex-column align-items-center">
            <img src="{{ asset('frontend_assets/common/hero/about_hero.png') }}" alt="" class="w-100">

            <div class="text-center inner-box">
                <h5 class="text-white mb-0"><b>ABOUT US</b></h5>
            </div>
        </div>



        <!-- ======= Departments Section ======= -->
        <section id="departments" class="departments">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-4 text-center  order-2 order-lg-1">
                        <img src="{{ asset('frontend_assets/common/5.png') }}" alt="" class="img-fluid">
                    </div>
                    <div class="col-lg-8 details order-1 order-lg-2">
                        <h3 class="text-end section_title" style="color: #458300">OUR STORY</h3>
                        <p class="text-end">Askco Multipurpose Specialized Preservation Center Limited was started in 2002
                            by Ltd. Col MA
                            Mannan (Retd.) and the pioneer Company in Bangladesh for multi specialized cold storage seeing
                            the exigency to store agro commodities humid for retaining their market value and efficient
                            future us. Askco has been serving to multi nation and national corporate seed company for all
                            kind of seed, fruits, vegetable, processed food & pharmacy industries with 18 (eighteen) years
                            of expertise in the technology of Cold Storage preservation. The preservation mainly capacity of
                            this is about 4500 Metric tons batch wise. The project consist of pre - fabricated sand which is
                            favorable especially for seed product and fresh fruits & vegetable preservation & Processing
                            also. It has dehumidifier for exp & humidifier system which can keep high humid & low humid
                            Product.

                            It has pre - cooling & entry room available here. Climate controlled preservation facilities
                            with a range of temperature from 0 degree centigrade & relative humidity in the atmosphere
                            maintained from 40%-99% according to the en serving requirement of the product preserved. Askeo
                            multipurpose specialized preservation center limited has innovated and engineered the 1st of
                            kind rack of supported global standard cold storage in Bangladesh for seed. The project
                            reservation mainly preserves Seeds, vegetables all type of fruits & local agriculture consist
                            product in the peak season and then sale in the lean period when prices of the products is
                            relatively high. In fact the ultimate target of this project is to go for export our local
                            vegetables to the foreign market for earning foreign currency
                        </p>
                    </div>

                </div>
            </div>
        </section><!-- End Departments Section -->


        <section class="pt-0">
            <div class="container d-flex justify-content-center">
                <img src="{{ asset('frontend_assets/common/abput_middle.png') }}" class="img-fluid">

            </div>
        </section>

        <section id="" class="pt-0">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-12 details">
                        <h3 class="text-start section_title" style="color: #458300">OUR MISSION</h3>
                        <p class="text-start">The mission of Askco Multipurpose Specialized Preservation Centre ltd. is to
                            provide a customer-oriented and value-added public refrigerated warehouse with a simplified rate
                            structure. We have the business experience and the desire to provide consistent, excellent
                            service that will make doing business with Askco a simple, pleasant, and profitable experience
                            for our customers.
                            "The Company That Works with You". At Askco Multipurpose Specialized Preservation Centre Ltd. is
                            to be the vanguard of cold storage technology in Bangladesh, providing cutting-edge preservation
                            solutions for agro commodities while contributing to the sustainable growth of the agriculture
                            and food industries. We are committed to serving both national and multinational seed companies,
                            fruit and vegetable producers, processed food manufacturers, and pharmacy industries with
                            excellence, preserving the quality and value of their products.
                        </p>
                    </div>

                </div>
            </div>
        </section>
        <section id="" class="pt-0">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-12 details">
                        <h3 class="text-start section_title" style="color: #458300">OUR VISION</h3>
                        <p class="text-start">To create a sustainable model of local economy, urban community, regional
                            agriculture, environmental stewardship, and well-being through food.
                            please add existing word. Our vision is to lead the way in preserving and processing agro
                            commodities, ensuring the retention of their market value and quality. With 18 years of
                            expertise, we strive to set global standards in cold storage technology. We aim to expand our
                            capacity to meet the growing demands of our clients while exploring opportunities to export
                            local vegetables to international markets, thus contributing to the economic prosperity of
                            Bangladesh through foreign currency earnings. We are driven by innovation and a commitment to
                            excellence, maintaining the highest standards of preservation and quality control in every
                            aspect of our operations.
                        </p>
                    </div>

                </div>
            </div>
        </section>



        <!-- ======= Departments Section ======= -->
        {{-- <section id="departments" class="departments">
            <div class="container">
                <div class="row gy-4 mx-2 mx-md-0"style="box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1); border-radius: 10px;">
                    <div class="col-md-8 p-3 p-md-5 mt-0 details order-2 order-lg-1 ">
                        <p class="text-start">Our mission at Askco Multipurpose Specialized Preservation Center Limited is
                            to
                            be the vanguard of cold storage technology in Bangladesh, providing cutting-edge preservation
                            solutions for agro commodities while contributing to the sustainable growth of the agriculture
                            and food industries. We are committed to serving both national and multinational seed companies,
                            fruit and vegetable producers, processed food manufacturers, and pharmacy industries with
                            excellence, preserving the quality and value of their products.
                        </p>
                    </div>
                    <div class="col-md-4 py-2 mt-0 order-1 order-lg-2 d-flex align-items-center justify-content-center"
                        style="background-color: #2E3191; border-radius: 10px;">
                        <h6 class="text-white mb-0">OUR MISSION</h6>
                    </div>
                </div>
            </div>
        </section>
        <section id="departments" class="departments">
            <div class="container">
                <div class="row gy-4 mx-2 mx-md-0"style="box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1); border-radius: 10px;">
                    <div class="col-md-4 py-2 mt-0 d-flex align-items-center justify-content-center"
                        style="background-color: #458300; border-radius: 10px;">
                        <h6 class="text-white mb-0">OUR VISION</h6>
                    </div>
                    <div class="col-md-8 p-3 p-md-5 mt-0 details ">
                        <p class="text-start">Our vision is to lead the way in preserving and processing agro commodities,
                            ensuring the retention of their market value and quality. With 18 years of expertise, we strive
                            to set global standards in cold storage technology. We aim to expand our capacity to meet the
                            growing demands of our clients while exploring opportunities to export local vegetables to
                            international markets, thus contributing to the economic prosperity of Bangladesh through
                            foreign currency earnings. We are driven by innovation and a commitment to excellence,
                            maintaining the highest standards of preservation and quality control in every aspect of our
                            operations.
                        </p>
                    </div>

                </div>
            </div>
        </section> --}}



        <!-- ====== Clients Slider ====== -->
        <section id="about" class="about client_slider pt-0">
            {{-- <div class="container-fluid"> --}}
            <div class="section-title">
                <h2 class="section_title" style="color: #458300">CLIENTS</h2>
            </div>
            <section class="client-slider">
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
            {{-- </div> --}}
        </section>
    </main>


@endsection
