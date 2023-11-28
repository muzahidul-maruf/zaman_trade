@extends('frontend.layout.master')
@section('products_menu_active', 'active')
@section('page_title')
    Products
@endsection

@section('custom_css')

    <style>

    </style>
@endsection
@section('content')
    <main id="main" style="min-height: 90vh;">
        <div class="inner_page_hero d-flex flex-column align-items-center">
            <img src="{{ asset('frontend_assets/common/all_product_hero.png') }}" alt="" class="w-100">



            <div class="text-center inner-box">
                <h5 class="text-white mb-0"><b>OUR PRODUCTS</b></h5>
            </div>
        </div>



        <section id="departments" class="departments">
            <div class="container">
                <div class="row">
                    

                </div>
            </div>
        </section>

    </main>


@endsection
