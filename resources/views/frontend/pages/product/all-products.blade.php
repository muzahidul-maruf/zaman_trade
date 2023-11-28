@extends('frontend.layout.master')
@section('products_menu_active', 'active')
@section('page_title')
    Products
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

                    <div class="col-md-3">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Products
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="category"
                                                id="flexRadioDefault1" checked readonly>
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                All Products
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Choose Category
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="category"
                                            id="flexRadioDefault1" checked>
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Agricultural Products
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="category"
                                            id="flexRadioDefault2">
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            Garments Products
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="category"
                                            id="flexRadioDefault3">
                                        <label class="form-check-label" for="flexRadioDefault3">
                                            others products
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div> --}}

                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="row">

                            @foreach ($products as $item)
                                <div class="col-md-4 mb-4">
                                    <div class="card" style="border: 2px solid #038C33;height:100%">
                                        <img src="{{ asset($item->image) }}" class="card-img-top p-3 img-fluid"
                                            alt="...">
                                        <div class="card-body text-center">
                                            <p class="card-text">{{ $item->name }}</p>
                                            <a href="{{ route('productDetails', $item->id) }}" class="btn text-white"
                                                style="background-color: #038C33">Read
                                                More</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            <nav aria-label="Page navigation pagination-wrapper" class="pagination-wrapper">
                                <div class="pagination justify-content-center">
                                    {!! $products->links() !!}
                                </div>
                            </nav>


                            {{-- <div class="col-md-4 mb-4">
                                <div class="card" style="border: 2px solid #038C33;height:100%">
                                    <img src="{{ asset('frontend_assets/common/homePage/15.png') }}"
                                        class="card-img-top p-3 img-fluid" alt="...">
                                    <div class="card-body text-center">
                                        <p class="card-text">Portable Moisture Meter Wile 200</p>
                                        <a href="#" class="btn text-white" style="background-color: #038C33">Read
                                            More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="card" style="border: 2px solid #038C33;height:100%">
                                    <img src="{{ asset('frontend_assets/common/homePage/16.png') }}"
                                        class="card-img-top p-3 img-fluid" alt="...">
                                    <div class="card-body text-center">
                                        <p class="card-text">High Accuracy Automatic Seed Counter</p>
                                        <a href="#" class="btn text-white" style="background-color: #038C33">Read
                                            More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="card" style="border: 2px solid #038C33;height:100%">
                                    <img src="{{ asset('frontend_assets/common/homePage/17.png') }}"
                                        class="card-img-top p-3 img-fluid" alt="...">
                                    <div class="card-body text-center">
                                        <p class="card-text">Precision Seed Divider</p>
                                        <a href="#" class="btn text-white" style="background-color: #038C33">Read
                                            More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="card" style="border: 2px solid #038C33;height:100%">
                                    <img src="{{ asset('frontend_assets/common/homePage/18.png') }}"
                                        class="card-img-top p-3 img-fluid" alt="...">
                                    <div class="card-body text-center">
                                        <p class="card-text">Thresher of Rice Wheat</p>
                                        <a href="#" class="btn text-white" style="background-color: #038C33">Read
                                            More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="card" style="border: 2px solid #038C33;height:100%">
                                    <img src="{{ asset('frontend_assets/common/homePage/19.png') }}"
                                        class="card-img-top p-3 img-fluid" alt="...">
                                    <div class="card-body text-center">
                                        <p class="card-text">New Style Laboratory Thresher</p>
                                        <a href="#" class="btn text-white" style="background-color: #038C33">Read
                                            More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="card" style="border: 2px solid #038C33;height:100%">
                                    <img src="{{ asset('frontend_assets/common/homePage/20.png') }}"
                                        class="card-img-top p-3 img-fluid" alt="...">
                                    <div class="card-body text-center">
                                        <p class="card-text">Seed Germination Incubator</p>
                                        <a href="#" class="btn text-white" style="background-color: #038C33">Read
                                            More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="card" style="border: 2px solid #038C33;height:100%">
                                    <img src="{{ asset('frontend_assets/common/homePage/21.png') }}"
                                        class="card-img-top p-3 img-fluid" alt="...">
                                    <div class="card-body text-center">
                                        <p class="card-text">Seed Neatness Workbench</p>
                                        <a href="#" class="btn text-white" style="background-color: #038C33">Read
                                            More</a>
                                    </div>
                                </div>
                            </div> --}}

                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main>


@endsection
