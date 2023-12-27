@extends('frontend.layout.master')
@section('contact_menu_active', 'active')
@section('page_title')
    Contact us
@endsection

@section('custom_css')

    <style>
        .contact_us_page .social-links a {
            font-size: 18px;
            display: inline-block;
            background: #038C33;
            color: #fff;
            line-height: 1;
            padding: 8px 0;
            margin-right: 20px;
            border-radius: 50%;
            text-align: center;
            width: 36px;
            height: 36px;
            transition: 0.3s;
        }

        .form-control {
            border: 1px solid #038C33;
        }

        .form-control:focus {
            box-shadow: none;
            outline: none;
        }
    </style>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
@endsection
@section('content')
    <main id="main" style="min-height: 90vh;">
        <div class="inner_page_hero d-flex flex-column align-items-center">
            <img src="{{ asset('frontend_assets/common/contact_hero.png') }}" alt="" class="w-100">



            <div class="text-center inner-box">
                <h5 class="text-white mb-0"><b>CONTACT US</b></h5>
            </div>
        </div>
        <!-- =======  Section ======= -->
        <section id="" class="">
            <div class="container mt-5 contact_us_page">
                <div class="row gy-4">
                    <div class="col-md-6">
                        <h5 class="text-uppercase mb-md-4" style="color: #038C33"><b>CONTACT US FOR ANY QUESTIONS</b></h5>
                        <h6><b>Corporate Office</b></h6>
                        <p style="margin-bottom:5px">
                            5th Floor, Bhuia Bari, Majar Cawrasta, <br> Uttar Khan, Uttara, Dhaka-1230
                        </p>
                        <p>
                            <i class="fa-brands fa-square-whatsapp fa-xl" style="color: #038C33;"></i> WhatsApp Us:
                            +8801714688549
                        </p>
                        <br>
                        <h6 class="" style=""><b>Reg. Office & Factory</b></h6>
                        <p style="margin-bottom:5px">
                            Bagni Bari, Moista Para, Birulia, Savar, Dhaka
                        </p>
                        <p>
                            <i class="fa-solid fa-phone" style="color: #038C33;"></i> Contact: +8801772373273
                        </p>
                        <br>
                        <h6 class="" style=""><b>Factory 02 (Pesticide)</b></h6>
                        <p>
                            BSCIC Industrial Estate: 6000 sq/ft
                            Narsingdi
                        </p>
                        <br>
                        <h6 class="" style=""><b>Factory 03 (Warehouse)</b></h6>
                        <p class="mb-5">
                            BSCIC Industrial Estate: 12000 sq/ft
                            Bhairab
                        </p>

                        <h4 style="color: #038C33" class="text-uppercase"><b>Follow our social network</b></h4>
                        <div class="social-links pt-3 pt-md-0">
                            <a target="_blank" href="https://www.facebook.com/askcomspcentreltd " class="facebook"><i
                                    class="bx bxl-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="">
                            <h5 class="mb-4" style="color: #458300"><b>GET IN TOUCH</b></h5>
                        </div>
                        <form action="{{ route('message-store') }}" method="post" role="form" class="">
                            @csrf
                            <div class="row">
                                <div class=" form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Your Name*" required>
                                </div>
                                <div class=" form-group mt-3 ">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email*" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="phone" id="phone"
                                    placeholder="Contact Number*" required>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="address" id="address"
                                    placeholder="Address*" required>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="type_of_query" id="type_of_query"
                                    placeholder="Query Type*" required>
                            </div>

                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Subject*" required>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message*" required></textarea>
                            </div>
                            <br>
                            <div class="text-center"><button type="submit" class="appointment-btn btn"
                                    style="background-color: #038C33">Send
                                    Message</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </section><!-- End Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact pt-0">
            <div class="container">
                <div class="mt-5 mb-3">
                    <iframe
                        src="https://www.google.com/maps/embed/v1/place?q=+Majar+Cawrasta,+Uttar+Khan,+Uttara,+Dhaka-1230&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"
                        width="100%" height="600"
                        style="border: 2px solid #038C33;
                        border-radius: 10px;" allowfullscreen=""
                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

            </div>
        </section><!-- End Contact Section -->

    </main>


@endsection


@section('custom_js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    @if (Session::has('message'))
        <script>
            var message = {!! json_encode(Session::get('message')) !!};
            toastr.success(message, {
                timeOut: 5000
            });
        </script>
    @endif

@endsection
