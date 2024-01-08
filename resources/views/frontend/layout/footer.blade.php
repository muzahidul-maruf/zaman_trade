<footer id="footer">

    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-md-5 col-lg-4 footer-contact">
                    <a href="/" class="logo me-auto">
                        <img src="{{ asset('frontend_assets/common/logo/2.png') }}" alt="" class="img-fluid w-50"
                            style="border-radius: 10px;">
                    </a>

                    <div class="mt-2">
                        <ul style="list-style: none;padding-left: 0;">
                            <li style="display: flex;align-items: center;">
                                <i class="fa-solid fa-location-dot me-3"></i>
                                <div>
                                    Corporate Office: 5th Floor, Bhuia Bari, Majar Cawrasta,
                                    Uttar Khan, Uttara, Dhaka-1230
                                </div>

                            </li>
                            <li><i class="fa-solid fa-phone me-3"></i>+8801714688549</li>
                            <li><i class="fa-solid fa-envelope me-3"></i>zamantrade1988@gmail.com</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 col-lg-4 footer-links">
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
                        <a target="_blank"
                            href="https://www.facebook.com/ZTIPPE?show_switched_toast=0&show_invite_to_follow=0&show_switched_tooltip=0&show_podcast_settings=0&show_community_review_changes=0&show_community_rollback=0&show_follower_visibility_disclosure=0"
                            class="facebook"><i class="bx bxl-facebook"></i></a>
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
                        <button class="btn" type="button" id="button-addon2" style="background: #fff"><i
                                class="fa-solid fa-paper-plane" style="color: #025928"></i></button>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="container d-md-flex py-4">

        {{-- <div class="me-md-auto text-center text-md-start text-white"> --}}
        <div class="text-center text-white w-100">
            <div class="copyright">
                &copy; 2023 All Right Reserved, Zaman Trade International
            </div>
        </div>
    </div>
</footer>
