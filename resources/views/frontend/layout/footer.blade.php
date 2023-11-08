<footer id="footer">

    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class=" col-md-4 footer-contact">
                    <p>Corporate Office: 5th Floor, Bhuia Bari, Majar Cawrasta,
                        Uttar Khan, Uttara, Dhaka-1230</p>
                    <a href="/" class="logo me-auto">
                        <img src="{{ asset('frontend_assets/common/logo/2.png') }}" alt="" class="img-fluid w-50"
                            style="border-radius: 10px;">
                    </a>
                    {{-- <p class="mt-3">
                        <strong>Phone:</strong> 01678590205 - 9<br>
                        <strong>Email:</strong> askco_msp@ymail.com<br>
                        <strong>Email:</strong> chandan_msp@ymail.com<br>
                    </p> --}}
                </div>

                {{-- <div class="col-lg-3 col-md-6 footer-links">
                    <h4 class="text-white mb-0">Registered Office</h4>
                    <p>
                        House: 34, Old DOHS <br>
                        Dhaka cantonment.<br>
                        Banani, Dhaka-1206 <br>
                    </p>
                    <h4 class="text-white mb-0">Industry</h4>
                    <p>
                        Holding: 01, Ward: 05, <br> Road: 02, Block: B, <br> Ashulia, Dhaka
                    </p>
                </div> --}}
                <div class="col-md-4 footer-links">
                    <h4 class="text-white">Quick Links</h4>
                    <ul class="text-white">
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ route('home_page') }}">Home</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ route('about_us_page') }}">About us</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ route('contact') }}">Contact us</a></li>
                    </ul>
                </div>

                <div class="col-md-4 footer-links">
                    <h4 class="text-white mb-0">Follow Us</h4>
                    <div class="social-links text-md-right pt-3 pt-md-0">
                        <a target="_blank" href="https://www.facebook.com" class="facebook"><i
                                class="bx bxl-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                    </div>
                    <br>
                    <h4 class="text-white">Sign Up For Newsletters</h4>
                    <p>Get E-mail updates about our latest
                        products and information</p>

                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Your email" aria-label="Your email"
                            aria-describedby="button-addon2">
                        <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i
                                class="fa-solid fa-paper-plane" style="color: #025928"></i></button>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="container d-md-flex py-4">

        <div class="me-md-auto text-center text-md-start text-white">
            <div class="copyright">
                &copy; 2023 All Right Reserved, Zaman Trade International
            </div>
        </div>
    </div>
</footer>
