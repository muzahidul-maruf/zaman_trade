<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

        {{-- <h1 class="logo me-auto"><a href="/">Askco</a></h1> --}}
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="/" class="logo me-auto">
            <img src="{{ asset('frontend_assets/common/logo/1.png') }}" alt="" class="img-fluid">
        </a>

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a class="nav-link scrollto @yield('home_menu_active')" href="{{ route('home_page') }}"><b>HOME</b></a></li>
                <li><a class="nav-link scrollto @yield('about_menu_active')" href="{{ route('about_us_page') }}"><b>ABOUT
                            US</b></a></li>
                {{-- <li class="dropdown">
                    <a class="@yield('services_menu_active')" href="#">
                        <span>Services</span>
                        <i class="bi bi-chevron-down"></i>
                    </a>
                    <ul>
                        <li><a class="@yield('processing_menu_active')" href="{{ route('seed-processing') }}">Seed Processing</a></li>
                        <li><a class="@yield('packaging_menu_active')" href="{{ route('seed-packaging') }}">Seed Packing</a></li>
                        <li><a class="@yield('storage_menu_active')" href="{{ route('seed-storage') }}">Seed Storage</a></li>
                        <li><a class="@yield('laboratory_menu_active')" href="{{ route('seed-laboratory') }}">Seed Laboratory</a></li>
                        <li><a class="@yield('transport_menu_active')" href="{{ route('transport') }}">Transport</a></li>
                    </ul>
                </li> --}}
                <li><a class="nav-link scrollto @yield('clients_menu_active')" href="#"><b>OUR PRODUCTS</b></a>
                </li>
                <li><a class="nav-link scrollto @yield('clients_menu_active')" href="{{ route('clients') }}"><b>OUR CLIENTS</b></a>
                </li>
                {{-- <li><a class="nav-link scrollto @yield('gallery_menu_active')" href="{{ route('gallery') }}">Gallery</a></li> --}}
                <li><a class="nav-link scrollto @yield('contact_menu_active')" href="{{ route('contact') }}"><b>CONTACT</b></a></li>

            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

        {{-- <a href="#appointment" class="appointment-btn scrollto"><span class="d-none d-md-inline">Make an</span>
            Appointment</a> --}}

    </div>
</header>
