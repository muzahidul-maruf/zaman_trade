@extends('frontend.layout.master')
@section('products_menu_active', 'active')
@section('page_title')
    Product Details
@endsection
@section('custom_css')
    <style>
        .accordion-button:not(.collapsed) {
            color: white;
            background-color: #038C33;
        }
    </style>
@endsection
@section('content')
    <main id="main" style="min-height: 90vh;">
        <div class="inner_page_hero d-flex flex-column align-items-center">
            <img src="{{ asset('frontend_assets/common/product_hero.png') }}" alt="" class="w-100">

            <div class="text-center inner-box">
                <h5 class="text-white mb-0"><b>Our Products</b></h5>
            </div>
        </div>



        <!-- ======= Departments Section ======= -->
        <section id="departments" class="departments">
            <div class="container">
                <div class="row gy-4">

                    <div class="col-md-5" style="">
                        <div style="border:2px solid #038C33; border-radius:10px;">
                            <img src="{{ asset($product->image) }}" class="card-img-top p-3 img-fluid" alt="...">
                        </div>
                    </div>
                    <div class="col-md-7" style="">
                        <div class="p-3" style="border:2px solid #038C33; border-radius:10px; height: 100%;">
                            <h6 style="color: #038C33;"><b>{{ $product->name }}</b></h6>
                            <h6>Description:</h6>
                            <hr class="my-1"
                                style="height:2px; border-width:0; color:#038C33; background-color:#038C33; opacity:unset;">
                            <p>
                                {!! $product->description !!}
                            </p>
                        </div>

                    </div>

                </div>

            </div>
        </section>

        <section id="about" class="about pt-0">
            <div class="container">
                <div class="section-title">
                    <h2 class="section_title text-start" style="color: #038C33">MORE PRODUCTS</h2>
                    <hr class=""
                        style="height:2px; border-width:0; color:#038C33; background-color:#038C33; opacity:unset;">
                </div>


                <div class="row">

                    @foreach ($other_products as $item)
                        <div class="col-md-4 col-lg-3 mb-4">
                            <div class="card" style="border: 2px solid #038C33;height:100%;">
                                <img src="{{ asset($item->image) }}" class="card-img-top p-3 img-fluid" alt="...">
                                <div class="card-body text-center">
                                    <p class="card-text">{{ $item->name }}</p>
                                    <a href="{{ route('productDetails', $item->id) }}" class="btn text-white"
                                        style="background-color: #038C33">Read More</a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    {{-- <div class="col-md-4 col-lg-3 mb-4">
                        <div class="card" style="border: 2px solid #038C33;height:100%;">
                            <img src="{{ asset('frontend_assets/common/homePage/15.png') }}"
                                class="card-img-top p-3 img-fluid" alt="...">
                            <div class="card-body text-center">
                                <p class="card-text">Portable Moisture Meter Wile 200</p>
                                <a href="#" class="btn text-white" style="background-color: #038C33">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3 mb-4">
                        <div class="card" style="border: 2px solid #038C33;height:100%;">
                            <img src="{{ asset('frontend_assets/common/homePage/16.png') }}"
                                class="card-img-top p-3 img-fluid" alt="...">
                            <div class="card-body text-center">
                                <p class="card-text">High Accuracy Automatic Seed Counter</p>
                                <a href="#" class="btn text-white" style="background-color: #038C33">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3 mb-4">
                        <div class="card" style="border: 2px solid #038C33;height:100%;">
                            <img src="{{ asset('frontend_assets/common/homePage/17.png') }}"
                                class="card-img-top p-3 img-fluid" alt="...">
                            <div class="card-body text-center">
                                <p class="card-text">Precision Seed Divider</p>
                                <a href="#" class="btn text-white" style="background-color: #038C33">Read More</a>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </section>
    </main>
@endsection
