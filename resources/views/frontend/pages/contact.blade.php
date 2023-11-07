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
            background: #2E3191;
            color: #fff;
            line-height: 1;
            padding: 8px 0;
            margin-right: 4px;
            border-radius: 50%;
            text-align: center;
            width: 36px;
            height: 36px;
            transition: 0.3s;
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
                    <div class="col-md-6 col-lg-8">
                        <h6 class="text-uppercase" style="color: #2E3191"><b>Registered Office</b></h6>
                        <p style="color: #2E3191">House: 34, Old DOHS, Dhaka cantonment. Banani, Dhaka-1206
                        </p>
                        <br>
                        <h6 class="text-uppercase" style="color: #2E3191"><b>Industry</b></h6>
                        <p style="color: #2E3191">Holding: 01, Ward: 05, Road: 02, Block: B, Ashulia, Dhaka
                        </p>

                    </div>
                    <div class="col-md-6 col-lg-4">
                        <h6 class="text-uppercase" style="color: #458300"><b>CONTACT US</b></h6>
                        <div class="d-flex mb-2">
                            <div style="height:25px;width:25px;background:#458300;padding:3px;border-radius:50%;display: flex;justify-content: center;align-items: center;"
                                class="me-2">
                                <i class="fa-solid fa-phone fa-xs" style="color: #fff"></i>
                            </div>
                            <div>01678590205 - 9</div>
                        </div>
                        <div class="d-flex mb-2">
                            <div style="height:25px;width:25px;background:#458300;padding:3px;border-radius:50%;display: flex;justify-content: center;align-items: center;"
                                class="me-2">
                                <i class="fa-solid fa-envelope fa-xs" style="color: #fff"></i>
                            </div>
                            <div>askco_msp@ymail.com</div>
                        </div>
                        <div class="d-flex mb-2">
                            <div style="height:25px;width:25px;background:#458300;padding:3px;border-radius:50%;display: flex;justify-content: center;align-items: center;"
                                class="me-2">
                                <i class="fa-solid fa-envelope fa-xs" style="color: #fff"></i>
                            </div>
                            <div>chandan_msp@ymail.com</div>
                        </div>


                        <h6 class="text-uppercase pt-3" style="color: #458300"><b>Follow our social network</b></h6>

                        <div class="social-links pt-3 pt-md-0">
                            <a target="_blank" href="https://www.facebook.com/askcomspcentreltd " class="facebook"><i
                                    class="bx bxl-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="d-flex justify-content-center mb-5" style="height: 500px;">
                            <img class="img-fluid" src="{{ asset('frontend_assets/common/contact.png') }}" alt=""
                                style="height:100%;">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="section-title pb-0">
                            <h2 class="mb-0 " style="color: #458300">GET IN TOUCH</h2>
                        </div>
                        <form action="{{ route('message-store') }}" method="post" role="form" class="">
                            @csrf
                            <div class="row">
                                <div class=" form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Your Name" required>
                                </div>
                                <div class=" form-group mt-3 ">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone"
                                    required>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="type_of_query" id="type_of_query"
                                    placeholder="Query Type" required>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="address" id="address"
                                    placeholder="Address" required>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Subject" required>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                            </div>
                            <br>
                            <div class="text-center"><button type="submit" class="appointment-btn btn"
                                    style="background-color: #2E3191">Send
                                    Message</button></div>
                        </form>
                    </div>
                </div>

            </div>

            <div class="mt-5 mb-3">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d964.6602282418689!2d90.32656171624025!3d23.891903604902108!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c37a9cf406e3%3A0x5c9cb92988b786a2!2sAskco%20MSP%20Centre%20Limited!5e0!3m2!1sen!2sbd!4v1696099237630!5m2!1sen!2sbd"
                    width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
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
