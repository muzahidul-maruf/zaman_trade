<footer id="footer">

    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 footer-contact">
                    {{-- <h3>AskCo</h3> --}}
                    <a href="/" class="logo me-auto">
                        <img src="{{ asset('frontend_assets/common/logo/2.png') }}" alt="" class="img-fluid w-50">
                    </a>
                    <p class="mt-3">
                        <strong>Phone:</strong> 01678590205 - 9<br>
                        <strong>Email:</strong> askco_msp@ymail.com<br>
                        <strong>Email:</strong> chandan_msp@ymail.com<br>
                    </p>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
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
                </div>
                <div class="col-lg-3 col-md-6 footer-links">
                    <h4 class="text-white">Quick Links</h4>
                    <ul class="text-white">
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ route('home_page') }}">Home</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ route('gallery') }}">Gallery</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ route('about_us_page') }}">About us</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ route('contact') }}">Contact us</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4 class="text-white">Our Services</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ route('seed-processing') }}">Seed
                                Processing</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ route('seed-packaging') }}">Seed
                                Packing</a></li>

                        <li><i class="bx bx-chevron-right"></i> <a href="{{ route('seed-storage') }}">Seed Storage</a>
                        </li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ route('seed-laboratory') }}">Seed
                                Laboratory</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ route('transport') }}">Transport</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container d-md-flex py-4">

        <div class="me-md-auto text-center text-md-start text-white">
            <div class="copyright">
                &copy; Copyright <strong><span>Askco MSP Center Ltd,</span></strong> All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/ -->
                {{-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> --}}
            </div>
        </div>
        <div class="social-links text-center text-md-right pt-3 pt-md-0">
            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a target="_blank" href="https://www.facebook.com/askcomspcentreltd " class="facebook"><i
                    class="bx bxl-facebook"></i></a>
            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
    </div>
</footer>
