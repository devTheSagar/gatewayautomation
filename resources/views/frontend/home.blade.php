@extends('frontend.master')

@section('title')
  Home
@endsection

@section('content')
 
    <STYLE type="text/css">
        h1 { text-align: left ;
        font-size:small;
        font-weight:15;
        text-size-adjust: auto;
        }

        #particles-js {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 2; /* Above images */
            pointer-events: none; /* allow clicks through */
        }

        .hero-section .swiper,
        .hero-section .swiper img {
            position: relative;
            z-index: 1; /* below particles */
        }
    </STYLE>
    <!-- img1 {
    width: 100%;
    height: auto;
    }-->
    
    <div>
        <!--hero section start-->
        <section class="hero-section text-white bg-dark mobile-padding" style="background: url('assets/img/shape/dot-dot-wave-shape.svg') no-repeat bottom left">

            <!-- Particle Overlay -->
            {{-- <div id="particles-js"></div> --}}
            
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">

                    {{-- this div is for festiv card image. it is static, not dynamic  --}}
                    {{-- <div class="swiper-slide">
                        <img src="{{asset('uploads/img/slider/sharodiya-card.jpg')}}"/>
                    </div> --}}

                    {{-- SLIDER  --}}
                    @foreach ($carousels as $carousel)
                        <div class="swiper-slide">
                            <img src="{{ asset($carousel->carousel_image) }}" />
                            <div class="caption">
                                <h4 class="nunito-sans-800 glow-fire" data-aos="fade-up" data-aos-delay="300" style="font-size: 2rem">{{ $carousel->carousel_heading }}</h4>
                                <div class="action-btns mt-5">
                                    {{-- @if ($carousel->learn_more_link)
                                        <a href="{{ $carousel->learn_more_link }}" class="btn btn-danger me-3" data-aos="fade-up" data-aos-delay="400">Learn more</a>
                                    @elseif () --}}
                                    {{-- only if not empty  --}}
                                    @if (!empty($carousel->learn_more_link))
                                        <a href="{{ $carousel->learn_more_link }}" class="btn btn-danger me-3" data-aos="fade-up" data-aos-delay="400">Learn more</a>
                                    @endif

                                </div>
                            </div>
                        </div>
                    @endforeach
                    
                </div>
                {{-- <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div> --}}
                <div class="swiper-pagination"></div>
            </div>
        </section>
        <!--hero section end-->



        <!--feature tab section start-->
        <section class="feature-tab-section my-5">
            <div class="container">
                @if ($content)
                    <div class="row justify-content-center align-content-center">
                        <div class="mb-4 text-center">
                            <h2 class="roboto-mono-heading" data-aos="fade-up" data-aos-delay="100">
                                {{ $content->heading ?? '' }}
                            </h2>
                            <h3 class="roboto-mono-subheading" data-aos="fade-up" data-aos-delay="200">
                                {{ $content->sub_heading ?? '' }}
                            </h3>
                        </div>
                        <div class="col-lg-12">
                            <div class="text-start">
                                <p class="nunito-sans-400"
                                style="font-size: 18px; line-height: 1.8; color: #464646;"
                                data-aos="fade-right" data-aos-delay="300">
                                    {{ $content->content ?? '' }}
                                </p>

                                <p class="nunito-sans-400"
                                style="font-size: 18px; line-height: 1.8; color: #464646;"
                                data-aos="fade-left" data-aos-delay="400">
                                    Get started today—schedule a demo and discover how <strong>Gateway Automation Limited</strong> 
                                    can streamline operations, improve efficiency, and drive lasting success.
                                </p>

                                <div class="d-flex align-items-center justify-content-center">
                                    <a class="btn btn-learn-more" href="{{ route('about') }}"
                                    data-aos="zoom-in" data-aos-delay="500">
                                    Learn More
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                @endif
                
            </div>
        </section>




        {{-- service section  --}}
        <!-- Services We Provide Section -->
        <section class="py-5" style="background: linear-gradient(135deg, #f9fafb, #e5e7eb);">
            <div class="container">
                <div class="mb-5">
                    <h2 class="roboto-mono-heading" data-aos="fade-up" data-aos-delay="100">
                        Services We Provide
                    </h2>
                    <h3 class="roboto-mono-subheading" data-aos="fade-up" data-aos-delay="200">
                        Tailored Solutions to Streamline Your Business and Boost Productivity
                    </h3>
                </div>

                <div class="row justify-content-center">

                    <!-- Service Items -->
                    <div class="col-6 col-md-4 col-lg-2 mb-4" data-aos="zoom-in" data-aos-delay="50">
                        <a href="{{ route('service.account-and-finance') }}" class="text-decoration-none">
                            <div class="service-card text-center p-3 shadow-sm h-100 rounded-4 bg-white hover-shadow">
                                <i class="bi bi-cash-coin display-5 mb-3 float-icon"></i>
                                <h6 class="nunito-sans-700 mt-2 fw-semibold small mb-0">Account & Finance Management</h6>
                            </div>
                        </a>
                    </div>

                    <div class="col-6 col-md-4 col-lg-2 mb-4" data-aos="zoom-in" data-aos-delay="60">
                        <a href="{{ route('service.hr-and-payroll') }}" class="text-decoration-none">
                            <div class="service-card text-center p-3 shadow-sm h-100 rounded-4 bg-white hover-shadow">
                                <i class="bi bi-people-fill display-5 mb-3 float-icon"></i>
                                <h6 class="nunito-sans-700 mt-2 fw-semibold small mb-0">HR Admin & Payroll</h6>
                            </div>
                        </a>
                    </div>

                    <div class="col-6 col-md-4 col-lg-2 mb-4" data-aos="zoom-in" data-aos-delay="70">
                        <a href="{{ route('service.real-estate-and-property') }}" class="text-decoration-none">
                            <div class="service-card text-center p-3 shadow-sm h-100 rounded-4 bg-white hover-shadow">
                                <i class="bi bi-building display-5 mb-3 float-icon"></i>
                                <h6 class="nunito-sans-700 mt-2 fw-semibold small mb-0">Real Estate & Property Management</h6>
                            </div>
                        </a>
                    </div>

                    <div class="col-6 col-md-4 col-lg-2 mb-4" data-aos="zoom-in" data-aos-delay="80">
                        <a href="{{ route('service.trading-business') }}" class="text-decoration-none">
                            <div class="service-card text-center p-3 shadow-sm h-100 rounded-4 bg-white hover-shadow">
                                <i class="bi bi-shop display-5 mb-3 float-icon"></i>
                                <h6 class="nunito-sans-700 mt-2 fw-semibold small mb-0">Trading Business</h6>
                            </div>
                        </a>
                    </div>

                    <div class="col-6 col-md-4 col-lg-2 mb-4" data-aos="zoom-in" data-aos-delay="90">
                        <a href="{{ route('service.supply-chain-management') }}" class="text-decoration-none">
                            <div class="service-card text-center p-3 shadow-sm h-100 rounded-4 bg-white hover-shadow">
                                <i class="bi bi-truck display-5 mb-3 float-icon"></i>
                                <h6 class="nunito-sans-700 mt-2 fw-semibold small mb-0">Supply Chain Management System</h6>
                            </div>
                        </a>
                    </div>

                    <div class="col-6 col-md-4 col-lg-2 mb-4" data-aos="zoom-in" data-aos-delay="100">
                        <a href="{{ route('service.manufacturing') }}" class="text-decoration-none">
                            <div class="service-card text-center p-3 shadow-sm h-100 rounded-4 bg-white hover-shadow">
                                <i class="bi bi-gear-fill display-5 mb-3 float-icon"></i>
                                <h6 class="nunito-sans-700 mt-2 fw-semibold small mb-0">Manufacturing</h6>
                            </div>
                        </a>
                    </div>

                    <div class="col-6 col-md-4 col-lg-2 mb-4" data-aos="zoom-in" data-aos-delay="110">
                        <a href="{{ route('service.education-management') }}" class="text-decoration-none">
                            <div class="service-card text-center p-3 shadow-sm h-100 rounded-4 bg-white hover-shadow">
                                <i class="bi bi-mortarboard-fill display-5 mb-3 float-icon"></i>
                                <h6 class="nunito-sans-700 mt-2 fw-semibold small mb-0">Education Management System</h6>
                            </div>
                        </a>
                    </div>

                    <div class="col-6 col-md-4 col-lg-2 mb-4" data-aos="zoom-in" data-aos-delay="120">
                        <a href="{{ route('service.tea-estate-management') }}" class="text-decoration-none">
                            <div class="service-card text-center p-3 shadow-sm h-100 rounded-4 bg-white hover-shadow">
                                <i class="bi bi-tree-fill display-5 mb-3 float-icon"></i>
                                <h6 class="nunito-sans-700 mt-2 fw-semibold small mb-0">Tea Estate Management System</h6>
                            </div>
                        </a>
                    </div>

                    <div class="col-6 col-md-4 col-lg-2 mb-4" data-aos="zoom-in" data-aos-delay="130">
                        <a href="{{ route('service.app-website') }}" class="text-decoration-none">
                            <div class="service-card text-center p-3 shadow-sm h-100 rounded-4 bg-white hover-shadow">
                                <i class="bi bi-phone display-5 mb-3 float-icon"></i>
                                <h6 class="nunito-sans-700 mt-2 fw-semibold small mb-0">Mobile App & Website Development</h6>
                            </div>
                        </a>
                    </div>

                    <div class="col-6 col-md-4 col-lg-2 mb-4" data-aos="zoom-in" data-aos-delay="140">
                        <a href="{{ route('service.ict') }}" class="text-decoration-none">
                            <div class="service-card text-center p-3 shadow-sm h-100 rounded-4 bg-white hover-shadow">
                                <i class="bi bi-pc-display display-5 mb-3 float-icon"></i>
                                <h6 class="nunito-sans-700 mt-2 fw-semibold small mb-0">ICT Services</h6>
                            </div>
                        </a>
                    </div>

                    <div class="col-6 col-md-4 col-lg-2 mb-4" data-aos="zoom-in" data-aos-delay="150">
                        <a href="{{ route('service.customer-service') }}" class="text-decoration-none">
                            <div class="service-card text-center p-3 shadow-sm h-100 rounded-4 bg-white hover-shadow">
                                <i class="bi bi-headset display-5 mb-3 float-icon"></i>
                                <h6 class="nunito-sans-700 mt-2 fw-semibold small mb-0">Customer Service & Registration.</h6>
                            </div>
                        </a>
                    </div>

                    <div class="col-6 col-md-4 col-lg-2 mb-4" data-aos="zoom-in" data-aos-delay="160">
                        <a href="{{ route('service.mobile-management-service') }}" class="text-decoration-none">
                            <div class="service-card text-center p-3 shadow-sm h-100 rounded-4 bg-white hover-shadow">
                                <i class="bi bi-phone-fill display-5 mb-3 float-icon"></i>
                                <h6 class="nunito-sans-700 mt-2 fw-semibold small mb-0">Mobile Phone Management</h6>
                            </div>
                        </a>
                    </div>

                    <div class="col-6 col-md-4 col-lg-2 mb-4" data-aos="zoom-in" data-aos-delay="170">
                        <a href="{{ route('service.architectural-eng') }}" class="text-decoration-none">
                            <div class="service-card text-center p-3 shadow-sm h-100 rounded-4 bg-white hover-shadow">
                                <i class="bi bi-rulers display-5 mb-3 float-icon"></i>
                                <h6 class="nunito-sans-700 mt-2 fw-semibold small mb-0">Architectural & Engineering.</h6>
                            </div>
                        </a>
                    </div>

                    <div class="col-6 col-md-4 col-lg-2 mb-4" data-aos="zoom-in" data-aos-delay="180">
                        <a href="{{ route('service.procurement-inventory') }}" class="text-decoration-none">
                            <div class="service-card text-center p-3 shadow-sm h-100 rounded-4 bg-white hover-shadow">
                                <i class="bi bi-box-seam display-5 mb-3 float-icon"></i>
                                <h6 class="nunito-sans-700 mt-2 fw-semibold small mb-0">Procurement & Inventory</h6>
                            </div>
                        </a>
                    </div>

                    <div class="col-6 col-md-4 col-lg-2 mb-4" data-aos="zoom-in" data-aos-delay="190">
                        <a href="{{ route('service.sales-telesales') }}" class="text-decoration-none">
                            <div class="service-card text-center p-3 shadow-sm h-100 rounded-4 bg-white hover-shadow">
                                <i class="bi bi-telephone-forward display-5 mb-3 float-icon"></i>
                                <h6 class="nunito-sans-700 mt-2 fw-semibold small mb-0">Sales & Telesales</h6>
                            </div>
                        </a>
                    </div>

                    <div class="col-6 col-md-4 col-lg-2 mb-4" data-aos="zoom-in" data-aos-delay="200">
                        <a href="{{ route('service.vehicle-management') }}" class="text-decoration-none">
                            <div class="service-card text-center p-3 shadow-sm h-100 rounded-4 bg-white hover-shadow">
                                <i class="bi bi-car-front display-5 mb-3 float-icon"></i>
                                <h6 class="nunito-sans-700 mt-2 fw-semibold small mb-0">Vehicle Management</h6>
                            </div>
                        </a>
                    </div>
                    
                    <div class="col-6 col-md-4 col-lg-2 mb-4" data-aos="zoom-in" data-aos-delay="210">
                        <a href="{{ route('service.ites-support') }}" class="text-decoration-none">
                            <div class="service-card text-center p-3 shadow-sm h-100 rounded-4 bg-white hover-shadow">
                                <i class="bi bi-headset display-5 mb-3 float-icon"></i>
                                <h6 class="nunito-sans-700 mt-2 fw-semibold small mb-0">ITES Support</h6>
                            </div>
                        </a>
                    </div>

                    <div class="col-6 col-md-4 col-lg-2 mb-4" data-aos="zoom-in" data-aos-delay="220">
                        <a href="{{ route('service.softwate-development') }}" class="text-decoration-none">
                            <div class="service-card text-center p-3 shadow-sm h-100 rounded-4 bg-white hover-shadow">
                                <i class="bi bi-code-slash display-5 mb-3 float-icon"></i>
                                <h6 class="nunito-sans-700 mt-2 fw-semibold small mb-0">Software Development</h6>
                            </div>
                        </a>
                    </div>

                    <div class="col-6 col-md-4 col-lg-2 mb-4" data-aos="zoom-in" data-aos-delay="230">
                        <a href="{{ route('service.cloud-hosting') }}" class="text-decoration-none">
                            <div class="service-card text-center p-3 shadow-sm h-100 rounded-4 bg-white hover-shadow">
                                <i class="bi bi-cloud-fill display-5 mb-3 float-icon"></i>
                                <h6 class="nunito-sans-700 mt-2 fw-semibold small mb-0">Cloud Hosting</h6>
                            </div>
                        </a>
                    </div>

                    <div class="col-6 col-md-4 col-lg-2 mb-4" data-aos="zoom-in" data-aos-delay="240">
                        <a href="{{ route('training-consultancy') }}" class="text-decoration-none">
                            <div class="service-card text-center p-3 shadow-sm h-100 rounded-4 bg-white hover-shadow">
                                <i class="bi bi-mortarboard-fill display-5 mb-3 float-icon"></i>
                                <h6 class="nunito-sans-700 mt-2 fw-semibold small mb-0">Training & Consultancy</h6>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </section>




        {{-- industries we serve section  --}}
        <section class="py-5" style="background: linear-gradient(135deg, #0f172a, #1e293b); color: #fff;">
            <div class="container">
                <!-- Section Title -->
                <div class="row justify-content-center text-center mb-5">
                    <div class="col-lg-8">
                        <h2 class="roboto-mono-heading text-white" data-aos="fade-up" data-aos-delay="100">Industries We Serve</h2>
                        <h3 class="roboto-mono-subheading text-white" data-aos="fade-up" data-aos-delay="200">Tailored solutions for every industry.</h3>
                    </div>
                </div>

                <!-- Industries Grid -->
                <div class="row text-center g-4 justify-content-center">
                    <!-- Industry 1 -->
                    @foreach ($industries as $industry)
                        <div class="col-lg-2 col-md-4 col-6" data-aos="zoom-in" data-aos-delay="100">
                            <div class="industry-card p-4 h-100">
                                @if (!empty($industry->icon_code))
                                    {!! $industry->icon_code !!}
                                @endif
                                <h6 class="nunito-sans-700 mt-3">
                                    @if (!empty($industry->industry))
                                        {!! $industry->industry !!}
                                    @endif
                                </h6>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>






        {{-- case studies section  --}}
        <section class="py-5" style="background: #f9fafc;">
            <div class="container">
                <!-- Section Title -->
                <div class="row justify-content-center text-center mb-5">
                    <div class="col-lg-8">
                        <h2 class="roboto-mono-heading" data-aos="fade-up" data-aos-delay="100">Success Stories</h2>
                        <h3 class="roboto-mono-subheading" data-aos="fade-up" data-aos-delay="200">See how our ERP solutions have transformed businesses across different industries.</h3>
                    </div>
                </div>

                <!-- Case Study Cards -->
                <div class="row g-4">
                    <!-- Story 1 -->
                    @foreach ($successStories as $successStory)
                        <div class="col-lg-4 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="300">
                            <div class="case-card flex-fill position-relative">
                                <!-- Front Illustration -->
                                <div class="case-front text-center p-4">
                                    <img src=" @if (!empty($successStory->image)) {{ $successStory->image }} @endif" 
                                        alt="Construction" class="img-fluid rounded mb-3">
                                    <h3 class="nunito-sans-700 fw-semibold">
                                        @if (!empty($successStory->heading))
                                            {!! $successStory->heading !!}
                                        @endif
                                    </h3>
                                </div>
                                
                                <!-- Hover Content -->
                                <div class="case-overlay text-start p-4 d-flex flex-column">
                                    <h4 class="nunito-sans-700 fw-semibold mb-3 mt-3">
                                        @if (!empty($successStory->heading))
                                            {!! $successStory->heading !!}
                                        @endif
                                    </h4>
                                    <p class="nunito-sans-400 fs-6" style="font-size: 0.8rem">
                                        @if (!empty($successStory->content))
                                            {!! $successStory->content !!}
                                        @endif
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Call to Action -->
                <div class="row justify-content-center mt-5">
                    <div class="col-lg-6 text-center">
                        {{-- <a href="#demo" class="btn btn-primary btn-lg me-3">Get a Demo</a> --}}
                        <a href="{{ route('contact') }}" class="btn btn-outline-dark btn-lg" data-aos="fade-up" data-aos-delay="400">Get a Demo</a>
                    </div>
                </div>
            </div>
        </section>




        {{-- technologies we use --}}
        <section class="technologies-section py-5 position-relative" style="background: linear-gradient(135deg, #f9fafb, #e5e7eb);">
            <div class="container text-center">
                <h2 class="roboto-mono-heading" data-aos="fade-up" data-aos-delay="100">Technologies We Use</h2>
                <p class="roboto-mono-subheading" data-aos="fade-up" data-aos-delay="200">
                    We leverage the latest tools and frameworks to deliver robust and scalable solutions.
                </p>

                <!-- Tech Logos Grid -->
                <div class="tech-grid mt-4">
                    @foreach ($technologies as $technology)
                        <div class="tech-card" data-aos="flip-left" data-aos-delay="300">
                            <img src="@if (!empty($technology->tech_logo)) {{ $technology->tech_logo }} @endif" alt="@if (!empty($technology->alt_txt)) {{ $technology->alt_txt }} @endif">
                        </div>
                    @endforeach
                </div>

            </div>
        </section>



        {{-- CTA section  --}}
        <section class="mts-section">
            <div class="mts-container">
                <!-- Section Title -->
                <div class="row justify-content-center text-center mb-5">
                    <div class="col-lg-8">
                        <h2 class="roboto-mono-heading text-white" data-aos="fade-up" data-aos-delay="100">What They Say About Us</h2>
                        <h3 class="roboto-mono-subheading text-white" data-aos="fade-up" data-aos-delay="200">Hear from our clients who transformed their businesses with our solutions.</h3>
                    </div>
                </div>

                <!-- Splide Slider -->
                <div id="mts-slider" class="splide" data-aos="fade-up" data-aos-delay="300">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <!-- Slide 1 -->
                            @foreach ($testimonials as $testimonial)
                                <li class="splide__slide">
                                    <div class="mts-card">
                                        <img src="{{asset('frontend/assets/img/testimonial/quotes-dot.svg')}}" alt="quotes" class="mts-quote-top">
                                        <div class="mts-author">
                                            <img src="{{ $testimonial->company_logo }}" class="mts-avatar" alt="{{ $testimonial->alt_txt }}">
                                            <div>
                                                <h6 class="mts-author-name">{{ $testimonial->client_name }}</h6>
                                                <small class="mts-author-position">{{ $testimonial->client_designation }}</small>
                                            </div>
                                        </div>
                                        <p class="mts-text">
                                            {{ $testimonial->testimonial_content }}
                                        </p>
                                        <img src="{{asset('frontend/assets/img/testimonial/quotes.svg')}}" alt="quotes" class="mts-quote-bottom">
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <!-- Progress bar -->
                    <div class="mts-progress">
                        <div class="mts-progress-bar"></div>
                    </div>

                    <!-- Custom Navigation arrows -->
                    <button id="mts-prev" class="mts-arrow mts-arrow-prev">&#10094;</button>
                    <button id="mts-next" class="mts-arrow mts-arrow-next">&#10095;</button>
                </div>
            </div>
        </section>


        <!-- Clients Section -->
        <section class="integration-section ptb-120">
            <div class="container">
                <!-- Section Heading -->
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <div class="section-heading">
                            <h2 class="roboto-mono-heading" data-aos="fade-up" data-aos-delay="100">Some of Our Valuable Clients</h2>
                            <p class="roboto-mono-subheading" data-aos="fade-up" data-aos-delay="200">We proudly work with these amazing organizations across industries.</p>
                        </div>
                    </div>
                </div>

                <!-- Clients Grid -->
                <div class="row">
                    <div class="col-12">
                        <div class="integration-wrapper position-relative w-100">
                            <!--animated shape start-->
                            {{-- <ul class="position-absolute animate-element parallax-element shape-service z--1 mt-5">
                                <li class="layer" data-depth="0.03">
                                    <img src="{{asset('frontend/assets/img/shape/dot-dot-wave-shape.svg')}}" alt="shape" class="img-fluid position-absolute color-shape-3">
                                </li>
                                <li class="layer" data-depth="0.03">
                                    <img src="{{asset('frontend/assets/img/color-shape/feature-3.svg')}}" alt="shape" class="img-fluid position-absolute color-shape-3">
                                </li>
                            </ul> --}}
                            <!--animated shape end-->

                            <!-- Clients Grid -->
                            <div class="row g-4 justify-content-center client-wrapper">

                                @foreach ($clients as $client)
                                    <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
                                        <div class="single-client p-3 bg-white rounded shadow-sm hover-shadow transition" data-aos="fade-up" data-aos-delay="100">
                                            <div class="logo-box">
                                                <img src="{{ $client->client_logo }}" alt="{{ $client->alt_txt }}" class="img-fluid mb-2">
                                            </div>
                                            <h6 class="client-name mb-0 nunito-sans-800">{{ $client->company_name }}</h6>
                                        </div>
                                    </div>
                                @endforeach
                                <!-- Repeat for remaining clients -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--integration section end-->
    </div>





    @push('scripts')

        {{-- js code for Swipers --}}
        <script>
            // Existing Swiper
            var swiper1 = new Swiper(".mySwiper", {
                spaceBetween: 30,
                effect: "fade",
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                },
                speed: 1000
            });

            // Testimonial Swiper
            var testimonialSwiper = new Swiper(".testimonialSwiper", {
                loop: false,
                slidesPerView: 1,
                spaceBetween: 30,
                autoHeight: false, // ✅ adjusts height per slide smoothly
                grabCursor: true,
                speed: 800,
                autoplay: {
                    delay: 4000,
                    disableOnInteraction: false,
                    pauseOnMouseEnter: true,
                },
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
            });




            // ✅ Trim testimonial text to 200 chars and add "Read more"
            document.querySelectorAll('.testimonial-text').forEach(function(el) {
                let fullText = el.textContent.trim();

                if (fullText.length > 200) {
                    let shortText = fullText.substring(0, 200) + "...";
                    el.setAttribute("data-full-text", fullText);
                    el.textContent = shortText;

                    let link = document.createElement("a");
                    link.href = "javascript:void(0);";
                    link.className = "see-more";
                    link.textContent = "Read more";

                    el.after(link);

                    link.addEventListener("click", function() {
                        if (el.classList.contains("expanded")) {
                            el.textContent = shortText;
                            this.textContent = "Read more";
                            el.classList.remove("expanded");
                        } else {
                            el.textContent = fullText;
                            this.textContent = "Read less";
                            el.classList.add("expanded");
                        }
                    });
                }
            });


        </script>




        {{-- scroll effect for nav tab  --}}
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const tabLinks = document.querySelectorAll('.feature-tab-list-2 .nav-link');
                const headerOffset = 50; // adjust this value according to your header height

                tabLinks.forEach(link => {
                    link.addEventListener('shown.bs.tab', function (event) {
                        const targetId = link.getAttribute('data-bs-target');
                        const targetElement = document.querySelector(targetId);
                        if (targetElement) {
                            const elementPosition = targetElement.getBoundingClientRect().top + window.pageYOffset;
                            const offsetPosition = elementPosition - headerOffset;

                            window.scrollTo({
                                top: offsetPosition,
                                behavior: 'smooth'
                            });
                        }
                    });
                });
            });
        </script>

    @endpush


@endsection

