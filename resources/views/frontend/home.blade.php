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

                    <div class="swiper-slide">
                        <img src="{{asset('uploads/img/slider/business-management.jpg')}}" />
                        <div class="caption">
                            <h4 class="nunito-sans-800 glow-fire" data-aos="fade-up" data-aos-delay="300" style="font-size: 2rem"><span class="">Empowering</span> Businesses with Smarter ERP Solutions</h4>
                            <div class="action-btns mt-5">
                                <a href="{{ route('page.business-management') }}" class="btn btn-danger me-3" data-aos="fade-up" data-aos-delay="400">Learn more</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="{{asset('uploads/img/slider/right-dession.jpg')}}" />
                        <div class="caption">
                            <h4 class="nunito-sans-800 glow-fire" style="font-size: 2rem">Digitizing every step of your business process — proudly Made in Bangladesh</h4>
                            <div class="action-btns mt-5">
                                <a href="{{ route('page.right-decision') }}" class="btn btn-danger me-3">Learn more</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="{{asset('uploads/img/slider/integrated-business.jpg')}}" />
                        <div class="caption">
                            <h4 class="nunito-sans-800 glow-fire" style="font-size: 2rem">Integrated all Business Process</h4>
                            <div class="action-btns mt-5">
                                <a href="{{ route('page.integrated-all-busines') }}" class="btn btn-danger me-3">Learn more</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="{{asset('uploads/img/slider/real-time.jpg')}}" />
                        <div class="caption">
                            <h4 class="nunito-sans-800 glow-fire" style="font-size: 2rem">Real Time Decision Support System</h4>
                            <div class="action-btns mt-5">
                                <a href="{{ route('page.real-time-decision') }}" class="btn btn-danger me-3">Learn more</a>
                            </div>
                        </div>
                    </div>
                    
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
                <div class="row justify-content-center align-content-center">
                    <div class="mb-4 text-center">
                        <h2 class="roboto-mono-heading" data-aos="fade-up" data-aos-delay="100">
                            Empowering Businesses with Smarter ERP Solutions
                        </h2>
                        <h3 class="roboto-mono-subheading" data-aos="fade-up" data-aos-delay="200">
                            Digitizing every step of your business process — Proudly Made in Bangladesh
                        </h3>
                    </div>
                    <div class="col-lg-12">
                        <div class="text-start">
                            <p class="nunito-sans-400"
                            style="font-size: 18px; line-height: 1.8; color: #464646;"
                            data-aos="fade-right" data-aos-delay="300">
                                Welcome to <strong>Gateway Automation Limited</strong>, where innovation meets efficiency.  
                                We deliver cutting-edge <strong>ERP solutions</strong> that simplify complexity, unify data, 
                                and provide real-time insights to help your business operate smarter and grow sustainably.
                                
                                Our customizable ERP adapts to your unique workflows—whether in finance, manufacturing, 
                                supply chain, or services—empowering your teams with collaboration, analytics, and data-driven decisions.
                                
                                From planning to integration, training, and ongoing support, we partner with you at every step 
                                to ensure a seamless transition and maximum value from your ERP investment.
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
                    <div class="col-lg-2 col-md-4 col-6" data-aos="zoom-in" data-aos-delay="100">
                        <div class="industry-card p-4 h-100">
                            <i class="bi bi-houses icon"></i>
                            <h6 class="nunito-sans-700 mt-3">Real Estate</h6>
                        </div>
                    </div>
                    <!-- Industry 2 -->
                    <div class="col-lg-2 col-md-4 col-6" data-aos="zoom-in" data-aos-delay="200">
                        <div class="industry-card p-4 h-100">
                            <i class="bi bi-map icon"></i>
                            <h6 class="nunito-sans-700 mt-3">Land Development</h6>
                        </div>
                    </div>
                    <!-- Industry 3 -->
                    <div class="col-lg-2 col-md-4 col-6" data-aos="zoom-in" data-aos-delay="300">
                        <div class="industry-card p-4 h-100">
                            <i class="bi bi-building icon"></i>
                            <h6 class="nunito-sans-700 mt-3">Construction</h6>
                        </div>
                    </div>
                    <!-- Industry 4 -->
                    <div class="col-lg-2 col-md-4 col-6" data-aos="zoom-in" data-aos-delay="400">
                        <div class="industry-card p-4 h-100">
                            <i class="bi bi-gear-wide-connected icon"></i>
                            <h6 class="nunito-sans-700 mt-3">Manufacturing</h6>
                        </div>
                    </div>
                    <!-- Industry 5 -->
                    <div class="col-lg-2 col-md-4 col-6" data-aos="zoom-in" data-aos-delay="500">
                        <div class="industry-card p-4 h-100">
                            <i class="bi bi-basket3 icon"></i>
                            <h6 class="nunito-sans-700 mt-3">Trading</h6>
                        </div>
                    </div>
                    <!-- Industry 6 -->
                    <div class="col-lg-2 col-md-4 col-6" data-aos="zoom-in" data-aos-delay="600">
                        <div class="industry-card p-4 h-100">
                            <i class="bi bi-heart-pulse icon"></i>
                            <h6 class="nunito-sans-700 mt-3">Healthcare</h6>
                        </div>
                    </div>

                    <!-- Second row (centered) -->
                    <div class="w-100"></div>
                    <div class="col-lg-2 col-md-4 col-6" data-aos="zoom-in" data-aos-delay="700">
                        <div class="industry-card p-4 h-100">
                            <i class="bi bi-mortarboard icon"></i>
                            <h6 class="nunito-sans-700 mt-3">Education</h6>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6" data-aos="zoom-in" data-aos-delay="800">
                        <div class="industry-card p-4 h-100">
                            <i class="bi bi-globe2 icon"></i>
                            <h6 class="nunito-sans-700 mt-3">Others</h6>
                        </div>
                    </div>
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
                <div class="col-lg-4 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="300">
                    <div class="case-card flex-fill position-relative">
                        <!-- Front Illustration -->
                        <div class="case-front text-center p-4">
                            <img src="{{ asset('frontend/assets/img/construction_firm_case.png') }}" 
                                alt="Construction" class="img-fluid rounded mb-3">
                            <h3 class="nunito-sans-700 fw-semibold">Construction</h3>
                        </div>
                        
                        <!-- Hover Content -->
                        <div class="case-overlay text-start p-4 d-flex flex-column">
                            <h4 class="nunito-sans-700 fw-semibold mb-3 mt-3">Construction Firm</h4>
                            <p class="nunito-sans-400 fs-6" style="font-size: 0.8rem">
                                By implementing our ERP system, the construction firm was able to <strong>streamline procurement processes</strong> and establish real-time <strong>project tracking</strong>.  
                                This not only eliminated delays caused by manual coordination but also improved vendor management and budget control.  
                                As a result, the company achieved a significant <strong>22% reduction in operational costs</strong> within the first year, while ensuring projects were delivered on time and with higher efficiency.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Story 2 -->
                <div class="col-lg-4 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="300">
                    <div class="case-card flex-fill position-relative">
                        <!-- Front Illustration -->
                        <div class="case-front text-center p-4">
                            <img src="{{ asset('frontend/assets/img/manufacturing_plant_case.png') }}" 
                                alt="Manufacturing Plant" class="img-fluid rounded mb-3">
                            <h3 class="nunito-sans-700 fw-semibold">Manufacturing Plant</h3>
                        </div>
                        <!-- Hover Content -->
                        <div class="case-overlay text-start p-4 d-flex flex-column">
                            <h4 class="nunito-sans-700 fw-semibold mb-3 mt-3">Manufacturing Plant</h4>
                            <p class="nunito-sans-400 fs-6" style="font-size: 0.8rem">
                                With our ERP solution, the manufacturing plant gained <strong>real-time visibility into inventory levels</strong> and automated stock management,  
                                preventing overstocking and material shortages. The system also streamlined <strong>maintenance scheduling</strong>, reducing unexpected downtime.  
                                Together, these improvements enabled the plant to operate with greater efficiency, driving a remarkable <strong>30% increase in overall productivity</strong> within the first year.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Story 3 -->
                <div class="col-lg-4 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="300">
                    <div class="case-card flex-fill position-relative">
                        <!-- Front Illustration -->
                        <div class="case-front text-center p-4">
                            <img src="{{ asset('frontend/assets/img/healthcare_network_case.png') }}" 
                                alt="Healthcare Network" class="img-fluid rounded mb-3">
                            <h3 class="nunito-sans-700 fw-semibold">Healthcare Network</h3>
                        </div>
                        <!-- Hover Content -->
                        <div class="case-overlay text-start p-4 d-flex flex-column">
                            <h4 class="nunito-sans-700 fw-semibold mb-3 mt-3">Healthcare Network</h4>
                            <p class="nunito-sans-400 fs-6" style="font-size: 0.8rem">
                                Successfully deployed a comprehensive ERP system for managing patient records and billing processes, streamlining administrative tasks and reducing manual workload by <strong>50%</strong>. This implementation not only improved operational efficiency but also enhanced compliance with healthcare regulations, ensuring accurate and secure handling of sensitive patient data.
                            </p>
                        </div>
                    </div>
                </div>
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
            <div class="tech-card" data-aos="flip-left" data-aos-delay="300"><img src="{{ asset('frontend/assets/img/oracle1.png') }}" alt="Oracle"></div>
            <div class="tech-card" data-aos="flip-left" data-aos-delay="350"><img src="{{ asset('frontend/assets/img/apex.png') }}" alt="Oracle Apex"></div>
            <div class="tech-card" data-aos="flip-left" data-aos-delay="400"><img src="{{ asset('frontend/assets/img/oracle_db.png') }}" alt="Oracle Database"></div>
            <div class="tech-card" data-aos="flip-left" data-aos-delay="450"><img src="{{ asset('frontend/assets/img/oracle-database-logo.png') }}" alt="Oracle Database"></div>
            <div class="tech-card" data-aos="flip-left" data-aos-delay="500"><img src="{{ asset('frontend/assets/img/pl-sql.png') }}" alt="PL SQL"></div>
            <div class="tech-card" data-aos="flip-left" data-aos-delay="550"><img src="{{ asset('frontend/assets/img/oracle_reports.jpg') }}" alt="Oracle Reports"></div>
            <div class="tech-card" data-aos="flip-left" data-aos-delay="600"><img src="{{ asset('frontend/assets/img/oracle-fusion-middleware-3.png') }}" alt="Oracle Fusion Middleware"></div>
            <div class="tech-card" data-aos="flip-left" data-aos-delay="650"><img src="{{ asset('frontend/assets/img/linux.png') }}" alt="Linux"></div>
            <div class="tech-card" data-aos="flip-left" data-aos-delay="700"><img src="{{ asset('frontend/assets/img/server.png') }}" alt="Server"></div>
            <div class="tech-card" data-aos="flip-left" data-aos-delay="750"><img src="{{ asset('frontend/assets/img/sql.png') }}" alt="sql"></div>
            <div class="tech-card" data-aos="flip-left" data-aos-delay="800"><img src="{{ asset('frontend/assets/img/java.png') }}" alt="Java"></div>
            <div class="tech-card" data-aos="flip-left" data-aos-delay="850"><img src="{{ asset('frontend/assets/img/windows.png') }}" alt="Windows"></div>
            <div class="tech-card" data-aos="flip-left" data-aos-delay="900"><img src="{{ asset('frontend/assets/img/android.png') }}" alt="Android"></div>
            <div class="tech-card" data-aos="flip-left" data-aos-delay="950"><img src="{{ asset('frontend/assets/img/apple.png') }}" alt="Apple"></div>
            <div class="tech-card" data-aos="flip-left" data-aos-delay="1000"><img src="{{ asset('frontend/assets/img/php.png') }}" alt="PHP"></div>
            <div class="tech-card" data-aos="flip-left" data-aos-delay="1050"><img src="{{ asset('frontend/assets/img/laravel.png') }}" alt="Laravel"></div>
            <div class="tech-card" data-aos="flip-left" data-aos-delay="1100"><img src="{{ asset('frontend/assets/img/mysql.png') }}" alt="MySQL"></div>
            <div class="tech-card" data-aos="flip-left" data-aos-delay="1150"><img src="{{ asset('frontend/assets/img/html.png') }}" alt="HTML"></div>
            <div class="tech-card" data-aos="flip-left" data-aos-delay="1200"><img src="{{ asset('frontend/assets/img/css.png') }}" alt="CSS"></div>
            <div class="tech-card" data-aos="flip-left" data-aos-delay="1250"><img src="{{ asset('frontend/assets/img/js.png') }}" alt="JavaScript"></div>
            <div class="tech-card" data-aos="flip-left" data-aos-delay="1300"><img src="{{ asset('frontend/assets/img/wordpress.png') }}" alt="WordPress"></div>
            <div class="tech-card" data-aos="flip-left" data-aos-delay="1350"><img src="{{ asset('frontend/assets/img/nodejs.png') }}" alt="Node.js"></div>
            <div class="tech-card" data-aos="flip-left" data-aos-delay="1400"><img src="{{ asset('frontend/assets/img/react.png') }}" alt="React"></div>
            <div class="tech-card" data-aos="flip-left" data-aos-delay="1450"><img src="{{ asset('frontend/assets/img/typescript.png') }}" alt="Typescript"></div>
            <div class="tech-card" data-aos="flip-left" data-aos-delay="1500"><img src="{{ asset('frontend/assets/img/bootstrap.png') }}" alt="Bootstrap"></div>
        </div>

    </div>
</section>



        {{-- CTA section  --}}
        <section class="mts-section">
            <div class="mts-container">
                <!-- Header -->
                {{-- <div class="mts-header">
                    <h2 class="mts-title">What They Say About Us</h2>
                    <p class="mts-subtitle">
                        Hear from our clients who transformed their businesses with our solutions.
                    </p>
                </div> --}}


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
                            <li class="splide__slide">
                                <div class="mts-card">
                                    <img src="{{asset('frontend/assets/img/testimonial/quotes-dot.svg')}}" alt="quotes" class="mts-quote-top">
                                    <div class="mts-author">
                                        <img src="{{asset('frontend/assets/img/clients/ramkrisna.jpg')}}" class="mts-avatar" alt="user">
                                        <div>
                                            <h6 class="mts-author-name">Swami Vibhatmananda</h6>
                                            <small class="mts-author-position">Secretary at Ramakrishna Mission, Dinajpur</small>
                                        </div>
                                    </div>
                                    <p class="mts-text">
                                        Gateway Accounts & Finance Management System at Ramakrishna Ashrama & Ramakrishana Mission, Dinajpur, Bangladesh is working smoothly and we are very much happy to use the software. Best wishes to Gateway Automation Limited.
                                    </p>
                                    <img src="{{asset('frontend/assets/img/testimonial/quotes.svg')}}" alt="quotes" class="mts-quote-bottom">
                                </div>
                            </li>
                            <!-- Slide 2 -->
                            <li class="splide__slide">
                                <div class="mts-card">
                                    <img src="{{asset('frontend/assets/img/testimonial/quotes-dot.svg')}}" alt="quotes" class="mts-quote-top">
                                    <div class="mts-author">
                                        <img src="{{asset('frontend/assets/img/clients/RI.jpg')}}" class="mts-avatar" alt="user">
                                        <div>
                                            <h6 class="mts-author-name">Alak Kumar Saha</h6>
                                            <small class="mts-author-position">Managing Director at Royal Gold Bangladesh Limited</small>
                                        </div>
                                    </div>
                                    <p class="mts-text">
                                       Working with Gateway Automation Limited has been a game-changer for Royal Gold Bangladesh Limited. Their Trading Management System transformed our operations by streamlining inventory management, enhancing order processing, and providing real-time insights into our trading activities. The team’s expertise and commitment to delivering a tailored solution have significantly improved our efficiency and accuracy. We couldn't be more satisfied with the results!
                                    </p>
                                    <img src="{{asset('frontend/assets/img/testimonial/quotes.svg')}}" alt="quotes" class="mts-quote-bottom">
                                </div>
                            </li>
                            <!-- Slide 3 -->
                            <li class="splide__slide">
                                <div class="mts-card">
                                    <img src="{{asset('frontend/assets/img/testimonial/quotes-dot.svg')}}" alt="quotes" class="mts-quote-top">
                                    <div class="mts-author">
                                        <img src="{{asset('frontend/assets/img/clients/mazidsons.jpg')}}" class="mts-avatar" alt="user">
                                        <div>
                                            <h6 class="mts-author-name">Md. Jourgisur Rahaman</h6>
                                            <small class="mts-author-position">Executive Director at Mazidsons Construction Limited</small>
                                        </div>
                                    </div>
                                    <p class="mts-text">
                                        Partnering with Gateway Automation Limited has been a pivotal decision for Masidsons Construction Limited. Their Architectural & Engineering Management System has streamlined our project management processes, improved coordination between teams, and enhanced our overall project execution. The team’s expertise and dedication to customizing their solutions to fit our unique needs have made a significant impact on our operations. Their commitment to excellence and innovative approach is truly commendable. We wholeheartedly recommend their services to others in the industry.
                                    </p>
                                    <img src="{{asset('frontend/assets/img/testimonial/quotes.svg')}}" alt="quotes" class="mts-quote-bottom">
                                </div>
                            </li>
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
                                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
                                    <div class="single-client p-3 bg-white rounded shadow-sm hover-shadow transition" data-aos="fade-up" data-aos-delay="100">
                                        <div class="logo-box">
                                            <img src="{{asset('frontend/assets/img/clients/ramkrisna.png')}}" alt="Ramakrishna Math & Mission Dhaka" class="img-fluid mb-2">
                                        </div>
                                        <h6 class="client-name mb-0 nunito-sans-800">Ramakrishna Math & Mission Dhaka</h6>
                                    </div>
                                </div>

                                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
                                    <div class="single-client p-3 bg-white rounded shadow-sm hover-shadow transition" data-aos="fade-up" data-aos-delay="150">
                                        <div class="logo-box">
                                            <img src="{{asset('frontend/assets/img/clients/royal-gold.png')}}" alt="Royal Gold Pvt Ltd" class="img-fluid mb-2">
                                        </div>
                                        <h6 class="client-name mb-0 nunito-sans-800">Royal Gold Pvt Ltd</h6>
                                    </div>
                                </div>

                                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
                                    <div class="single-client p-3 bg-white rounded shadow-sm hover-shadow transition" data-aos="fade-up" data-aos-delay="200">
                                        <div class="logo-box">
                                            <img src="{{asset('frontend/assets/img/clients/RI.png')}}" alt="Royal International" class="img-fluid mb-2">
                                        </div>
                                        <h6 class="client-name mb-0 nunito-sans-800">Royal International</h6>
                                    </div>
                                </div>

                                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
                                    <div class="single-client p-3 bg-white rounded shadow-sm hover-shadow transition" data-aos="fade-up" data-aos-delay="250">
                                        <div class="logo-box">
                                            <img src="{{asset('frontend/assets/img/clients/.png')}}" alt="Chittagong Agro Machinery" class="img-fluid mb-2">
                                        </div>
                                        <h6 class="client-name mb-0 nunito-sans-800">Chittagong Agro Machinery</h6>
                                    </div>
                                </div>

                                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
                                    <div class="single-client p-3 bg-white rounded shadow-sm hover-shadow transition" data-aos="fade-up" data-aos-delay="300">
                                        <div class="logo-box">
                                            <img src="{{asset('frontend/assets/img/clients/ril.png')}}" alt="KB Interlining Ltd." class="img-fluid mb-2">
                                        </div>
                                        <h6 class="client-name mb-0 nunito-sans-800">KB Interlining Ltd.</h6>
                                    </div>
                                </div>

                                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
                                    <div class="single-client p-3 bg-white rounded shadow-sm hover-shadow transition" data-aos="fade-up" data-aos-delay="350">
                                        <div class="logo-box">
                                            <img src="{{asset('frontend/assets/img/clients/.png')}}" alt="Parts Zone" class="img-fluid mb-2">
                                        </div>
                                        <h6 class="client-name mb-0 nunito-sans-800">Parts Zone</h6>
                                    </div>
                                </div>

                                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
                                    <div class="single-client p-3 bg-white rounded shadow-sm hover-shadow transition" data-aos="fade-up" data-aos-delay="400">
                                        <div class="logo-box">
                                            <img src="{{asset('frontend/assets/img/clients/mazidsons.png')}}" alt="Mazid Sons Construction Ltd" class="img-fluid mb-2">
                                        </div>
                                        <h6 class="client-name mb-0 nunito-sans-800">Mazid Sons Construction Ltd</h6>
                                    </div>
                                </div>

                                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
                                    <div class="single-client p-3 bg-white rounded shadow-sm hover-shadow transition" data-aos="fade-up" data-aos-delay="450">
                                        <div class="logo-box">
                                            <img src="{{asset('frontend/assets/img/clients/Momenuddin3.png')}}" alt="Momen Uddin Ahmed & Co. Ltd." class="img-fluid mb-2">
                                        </div>
                                        <h6 class="client-name mb-0 nunito-sans-800">Momen Uddin Ahmed & Co. Ltd.</h6>
                                    </div>
                                </div>

                                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
                                    <div class="single-client p-3 bg-white rounded shadow-sm hover-shadow transition" data-aos="fade-up" data-aos-delay="500">
                                        <div class="logo-box">
                                            <img src="{{asset('frontend/assets/img/clients/assu.png')}}" alt="Assurance Developments Ltd" class="img-fluid mb-2">
                                        </div>
                                        <h6 class="client-name mb-0 nunito-sans-800">Assurance Developments Ltd</h6>
                                    </div>
                                </div>

                                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
                                    <div class="single-client p-3 bg-white rounded shadow-sm hover-shadow transition" data-aos="fade-up" data-aos-delay="550">
                                        <div class="logo-box">
                                            <img src="{{asset('frontend/assets/img/clients/merine.png')}}" alt="Atlantic Properties & Development Ltd" class="img-fluid mb-2">
                                        </div>
                                        <h6 class="client-name mb-0 nunito-sans-800">Atlantic Properties & Development Ltd</h6>
                                    </div>
                                </div>

                                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
                                    <div class="single-client p-3 bg-white rounded shadow-sm hover-shadow transition" data-aos="fade-up" data-aos-delay="600">
                                        <div class="logo-box">
                                            <img src="{{asset('frontend/assets/img/clients/gorai-flims.png')}}" alt="Gorai Films" class="img-fluid mb-2">
                                        </div>
                                        <h6 class="client-name mb-0 nunito-sans-800">Gorai Films</h6>
                                    </div>
                                </div>

                                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
                                    <div class="single-client p-3 bg-white rounded shadow-sm hover-shadow transition" data-aos="fade-up" data-aos-delay="650">
                                        <div class="logo-box">
                                            <img src="{{asset('frontend/assets/img/clients/creation.png')}}" alt="Creation Developments Ltd" class="img-fluid mb-2">
                                        </div>
                                        <h6 class="client-name mb-0 nunito-sans-800">Creation Developments Ltd</h6>
                                    </div>
                                </div>

                                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
                                    <div class="single-client p-3 bg-white rounded shadow-sm hover-shadow transition" data-aos="fade-up" data-aos-delay="700">
                                        <div class="logo-box">
                                            <img src="{{asset('frontend/assets/img/clients/ramkrisna.png')}}" alt="Ramakrishna Math & Mission Dinajpur" class="img-fluid mb-2">
                                        </div>
                                        <h6 class="client-name mb-0 nunito-sans-800">Ramakrishna Math & Mission Dinajpur</h6>
                                    </div>
                                </div>

                                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
                                    <div class="single-client p-3 bg-white rounded shadow-sm hover-shadow transition" data-aos="fade-up" data-aos-delay="750">
                                        <div class="logo-box">
                                            <img src="{{asset('frontend/assets/img/clients/saifan.png')}}" alt="Saifan Properties Limited" class="img-fluid mb-2">
                                        </div>
                                        <h6 class="client-name mb-0 nunito-sans-800">Saifan Properties Limited</h6>
                                    </div>
                                </div>

                                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
                                    <div class="single-client p-3 bg-white rounded shadow-sm hover-shadow transition" data-aos="fade-up" data-aos-delay="800">
                                        <div class="logo-box">
                                            <img src="{{asset('frontend/assets/img/clients/mya.png')}}" alt="MYA Trading International" class="img-fluid mb-2">
                                        </div>
                                        <h6 class="client-name mb-0 nunito-sans-800">MYA Trading International</h6>
                                    </div>
                                </div>

                                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
                                    <div class="single-client p-3 bg-white rounded shadow-sm hover-shadow transition" data-aos="fade-up" data-aos-delay="850">
                                        <div class="logo-box">
                                            <img src="{{asset('frontend/assets/img/clients/kk.png')}}" alt="KK Trade" class="img-fluid mb-2">
                                        </div>
                                        <h6 class="client-name mb-0 nunito-sans-800">KK Trade</h6>
                                    </div>
                                </div>

                                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
                                    <div class="single-client p-3 bg-white rounded shadow-sm hover-shadow transition" data-aos="fade-up" data-aos-delay="900">
                                        <div class="logo-box">
                                            <img src="{{asset('frontend/assets/img/clients/wasa.png')}}" alt="W.Rahman & Co." class="img-fluid mb-2">
                                        </div>
                                        <h6 class="client-name mb-0 nunito-sans-800">W.Rahman & Co.</h6>
                                    </div>
                                </div>

                                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
                                    <div class="single-client p-3 bg-white rounded shadow-sm hover-shadow transition" data-aos="fade-up" data-aos-delay="950">
                                        <div class="logo-box">
                                            <img src="{{asset('frontend/assets/img/clients/rkmr.png')}}" alt="Ramakrishna Sevashrama Uttara Rowali" class="img-fluid mb-2">
                                        </div>
                                        <h6 class="client-name mb-0 nunito-sans-800">Ramakrishna Sevashrama Uttara Rowali</h6>
                                    </div>
                                </div>

                                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
                                    <div class="single-client p-3 bg-white rounded shadow-sm hover-shadow transition" data-aos="fade-up" data-aos-delay="1000">
                                        <div class="logo-box">
                                            <img src="{{asset('frontend/assets/img/clients/doreen.png')}}" alt="Doreen Developments Limited" class="img-fluid mb-2">
                                        </div>
                                        <h6 class="client-name mb-0 nunito-sans-800">Doreen Developments Limited</h6>
                                    </div>
                                </div>

                                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
                                    <div class="single-client p-3 bg-white rounded shadow-sm hover-shadow transition" data-aos="fade-up" data-aos-delay="1050">
                                        <div class="logo-box">
                                            <img src="{{asset('frontend/assets/img/clients/ramkrisna.png')}}" alt="Ramakrishna Ashrama & Mission Baliati, Manikgonj" class="img-fluid mb-2">
                                        </div>
                                        <h6 class="client-name mb-0 nunito-sans-800">Ramakrishna Ashrama & Mission Baliati, Manikgonj</h6>
                                    </div>
                                </div>

                                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
                                    <div class="single-client p-3 bg-white rounded shadow-sm hover-shadow transition" data-aos="fade-up" data-aos-delay="1100">
                                        <div class="logo-box">
                                            <img src="{{asset('frontend/assets/img/clients/jcx.png')}}" alt="JCX Developments Ltd" class="img-fluid mb-2">
                                        </div>
                                        <h6 class="client-name mb-0 nunito-sans-800">JCX Developments Ltd</h6>
                                    </div>
                                </div>

                                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
                                    <div class="single-client p-3 bg-white rounded shadow-sm hover-shadow transition" data-aos="fade-up" data-aos-delay="1150">
                                        <div class="logo-box">
                                            <img src="{{asset('frontend/assets/img/clients/infinity.png')}}" alt="Infinity Homes Ltd." class="img-fluid mb-2">
                                        </div>
                                        <h6 class="client-name mb-0 nunito-sans-800">Infinity Homes Ltd.</h6>
                                    </div>
                                </div>

                                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
                                    <div class="single-client p-3 bg-white rounded shadow-sm hover-shadow transition" data-aos="fade-up" data-aos-delay="1200">
                                        <div class="logo-box">
                                            <img src="{{asset('frontend/assets/img/clients/modhucity.png')}}" alt="Modhu City" class="img-fluid mb-2">
                                        </div>
                                        <h6 class="client-name mb-0 nunito-sans-800">Modhu City</h6>
                                    </div>
                                </div>

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

