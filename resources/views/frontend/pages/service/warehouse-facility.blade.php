@extends('frontend.layout.master')
@section('home_menu_active', 'active')
@section('page_title')
    Warehouse Facility
@endsection
@section('content')
    <main id="main" style="min-height: 90vh;">
        <div class="inner_page_hero d-flex flex-column align-items-center">
            <img src="{{ asset('frontend_assets/common/service/warehouse_facility/hero.png') }}" alt="" class="w-100">

            <div class="text-center inner-box">
                <h5 class="text-white mb-0"><b>Warehouse Facility</b></h5>
            </div>
        </div>

        <section id="departments" class="departments">
            <div class="container">
                <div class="row py-2 py-lg-4">
                    <div class="col-md-6 mb-3">
                        <div
                            style="display: flex;justify-content: center;align-items: center;">
                            <img src="{{ asset('frontend_assets/common/service/warehouse_facility/1.png') }}"
                                alt="" class="img-fluid">
                        </div>
                       
                    </div>

                    <div class="col-md-6 mb-3">
                        <div
                            style="display: flex;justify-content: center;align-items: center;">
                            <img src="{{ asset('frontend_assets/common/service/warehouse_facility/2.png') }}"
                                alt="" class="img-fluid" style="">
                        </div>
                        
                    </div>


                </div>

                <div class="row py-2 py-lg-4">
                    <div class="col-md-6 mb-3">
                        <div
                            style="display: flex;justify-content: center;align-items: center;">
                            <img src="{{ asset('frontend_assets/common/service/warehouse_facility/3.png') }}"
                                alt="" class="img-fluid">
                        </div>
                        
                    </div>

                    <div class="col-md-6 mb-3">
                        <div
                            style="display: flex;justify-content: center;align-items: center;">
                            <img src="{{ asset('frontend_assets/common/service/warehouse_facility/4.png') }}"
                                alt="" class="img-fluid" style="">
                        </div>
                        
                    </div>


                </div>





            </div>
        </section>

        


    </main>


@endsection
