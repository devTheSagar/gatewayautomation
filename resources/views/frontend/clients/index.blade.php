@extends('frontend.master')

@section('title')
  Clients
@endsection

@section('content')
    @push('styles')
        <style>
            .client-list li .single-integration img {
                max-width: 150px;
                max-height: 100px;
            }
        </style>
    @endpush
    <div>
        <!--page header section start-->
        <section class="bg-dark clients-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12 heading-sec">
                        <h1 class="display-5 fw-bold page-heading-img-txt" data-aos="fade-up" data-aos-delay="100">Our Clients</h1>
                        <p class="nunito-sans-300 lead" data-aos="fade-up" data-aos-delay="200">Welcome to the forefront of innovation in the ICT sector. Introducing Gateway Automation Ltd, a trailblazer in software solutions and IT-enabled services. </p>
                    </div>
                </div>
            </div>
        </section>
        <!--page header section end-->
        <section class="integration-section">
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
                            <ul class="position-absolute animate-element parallax-element shape-service z--1 mt-5">
                                <li class="layer" data-depth="0.03">
                                    <img src="{{asset('frontend/assets/img/shape/dot-dot-wave-shape.svg')}}" alt="shape" class="img-fluid position-absolute color-shape-3">
                                </li>
                                <li class="layer" data-depth="0.03">
                                    <img src="{{asset('frontend/assets/img/color-shape/feature-3.svg')}}" alt="shape" class="img-fluid position-absolute color-shape-3">
                                </li>
                            </ul>
                            <!--animated shape end-->

                            <!-- Clients Grid -->
                            <div class="row g-4 justify-content-center client-wrapper">
                                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
                                    <div class="single-client p-3 bg-white rounded shadow-sm hover-shadow transition" data-aos="fade-up" data-aos-delay="100">
                                        <div class="logo-box">
                                            <img src="{{asset('frontend/assets/img/clients/ramkrisna.png')}}" alt="Ramakrishna Math & Mission Dhaka" class="img-fluid mb-2">
                                        </div>
                                        <h6 class="client-name mb-0">Ramakrishna Math & Mission Dhaka</h6>
                                    </div>
                                </div>

                                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
                                    <div class="single-client p-3 bg-white rounded shadow-sm hover-shadow transition" data-aos="fade-up" data-aos-delay="150">
                                        <div class="logo-box">
                                            <img src="{{asset('frontend/assets/img/clients/jcx.png')}}" alt="JCX Developments Ltd" class="img-fluid mb-2">
                                        </div>
                                        <h6 class="client-name mb-0">JCX Developments Ltd</h6>
                                    </div>
                                </div>

                                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
                                    <div class="single-client p-3 bg-white rounded shadow-sm hover-shadow transition" data-aos="fade-up" data-aos-delay="200">
                                        <div class="logo-box">
                                            <img src="{{asset('frontend/assets/img/clients/royal-gold.png')}}" alt="Royal Gold Pvt Ltd" class="img-fluid mb-2">
                                        </div>
                                        <h6 class="client-name mb-0">Royal Gold Pvt Ltd</h6>
                                    </div>
                                </div>

                                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
                                    <div class="single-client p-3 bg-white rounded shadow-sm hover-shadow transition" data-aos="fade-up" data-aos-delay="250">
                                        <div class="logo-box">
                                            <img src="{{asset('frontend/assets/img/clients/RI.png')}}" alt="Royal International" class="img-fluid mb-2">
                                        </div>
                                        <h6 class="client-name mb-0">Royal International</h6>
                                    </div>
                                </div>

                                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
                                    <div class="single-client p-3 bg-white rounded shadow-sm hover-shadow transition" data-aos="fade-up" data-aos-delay="300">
                                        <div class="logo-box">
                                            <img src="{{asset('frontend/assets/img/clients/.png')}}" alt="Chittagong Agro Machinery" class="img-fluid mb-2">
                                        </div>
                                        <h6 class="client-name mb-0">Chittagong Agro Machinery</h6>
                                    </div>
                                </div>

                                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
                                    <div class="single-client p-3 bg-white rounded shadow-sm hover-shadow transition" data-aos="fade-up" data-aos-delay="350">
                                        <div class="logo-box">
                                            <img src="{{asset('frontend/assets/img/clients/ril.png')}}" alt="KB Interlining Ltd." class="img-fluid mb-2">
                                        </div>
                                        <h6 class="client-name mb-0">KB Interlining Ltd.</h6>
                                    </div>
                                </div>

                                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
                                    <div class="single-client p-3 bg-white rounded shadow-sm hover-shadow transition" data-aos="fade-up" data-aos-delay="400">
                                        <div class="logo-box">
                                            <img src="{{asset('frontend/assets/img/clients/.png')}}" alt="Parts Zone" class="img-fluid mb-2">
                                        </div>
                                        <h6 class="client-name mb-0">Parts Zone</h6>
                                    </div>
                                </div>

                                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
                                    <div class="single-client p-3 bg-white rounded shadow-sm hover-shadow transition" data-aos="fade-up" data-aos-delay="450">
                                        <div class="logo-box">
                                            <img src="{{asset('frontend/assets/img/clients/mazidsons.png')}}" alt="Mazid Sons Construction Ltd" class="img-fluid mb-2">
                                        </div>
                                        <h6 class="client-name mb-0">Mazid Sons Construction Ltd</h6>
                                    </div>
                                </div>

                                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
                                    <div class="single-client p-3 bg-white rounded shadow-sm hover-shadow transition" data-aos="fade-up" data-aos-delay="500">
                                        <div class="logo-box">
                                            <img src="{{asset('frontend/assets/img/clients/Momenuddin3.png')}}" alt="Momen Uddin Ahmed & Co. Ltd." class="img-fluid mb-2">
                                        </div>
                                        <h6 class="client-name mb-0">Momen Uddin Ahmed & Co. Ltd.</h6>
                                    </div>
                                </div>

                                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
                                    <div class="single-client p-3 bg-white rounded shadow-sm hover-shadow transition" data-aos="fade-up" data-aos-delay="550">
                                        <div class="logo-box">
                                            <img src="{{asset('frontend/assets/img/clients/assu.png')}}" alt="Assurance Developments Ltd" class="img-fluid mb-2">
                                        </div>
                                        <h6 class="client-name mb-0">Assurance Developments Ltd</h6>
                                    </div>
                                </div>

                                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
                                    <div class="single-client p-3 bg-white rounded shadow-sm hover-shadow transition" data-aos="fade-up" data-aos-delay="600">
                                        <div class="logo-box">
                                            <img src="{{asset('frontend/assets/img/clients/merine.png')}}" alt="Atlantic Properties & Development Ltd" class="img-fluid mb-2">
                                        </div>
                                        <h6 class="client-name mb-0">Atlantic Properties & Development Ltd</h6>
                                    </div>
                                </div>

                                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
                                    <div class="single-client p-3 bg-white rounded shadow-sm hover-shadow transition" data-aos="fade-up" data-aos-delay="650">
                                        <div class="logo-box">
                                            <img src="{{asset('frontend/assets/img/clients/gorai-flims.png')}}" alt="Gorai Films" class="img-fluid mb-2">
                                        </div>
                                        <h6 class="client-name mb-0">Gorai Films</h6>
                                    </div>
                                </div>

                                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
                                    <div class="single-client p-3 bg-white rounded shadow-sm hover-shadow transition" data-aos="fade-up" data-aos-delay="700">
                                        <div class="logo-box">
                                            <img src="{{asset('frontend/assets/img/clients/creation.png')}}" alt="Creation Developments Ltd" class="img-fluid mb-2">
                                        </div>
                                        <h6 class="client-name mb-0">Creation Developments Ltd</h6>
                                    </div>
                                </div>

                                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
                                    <div class="single-client p-3 bg-white rounded shadow-sm hover-shadow transition" data-aos="fade-up" data-aos-delay="750">
                                        <div class="logo-box">
                                            <img src="{{asset('frontend/assets/img/clients/ramkrisna.png')}}" alt="Ramakrishna Math & Mission Dinajpur" class="img-fluid mb-2">
                                        </div>
                                        <h6 class="client-name mb-0">Ramakrishna Math & Mission Dinajpur</h6>
                                    </div>
                                </div>

                                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
                                    <div class="single-client p-3 bg-white rounded shadow-sm hover-shadow transition" data-aos="fade-up" data-aos-delay="800">
                                        <div class="logo-box">
                                            <img src="{{asset('frontend/assets/img/clients/saifan.png')}}" alt="Saifan Properties Limited" class="img-fluid mb-2">
                                        </div>
                                        <h6 class="client-name mb-0">Saifan Properties Limited</h6>
                                    </div>
                                </div>

                                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
                                    <div class="single-client p-3 bg-white rounded shadow-sm hover-shadow transition" data-aos="fade-up" data-aos-delay="850">
                                        <div class="logo-box">
                                            <img src="{{asset('frontend/assets/img/clients/mya.png')}}" alt="MYA Trading International" class="img-fluid mb-2">
                                        </div>
                                        <h6 class="client-name mb-0">MYA Trading International</h6>
                                    </div>
                                </div>

                                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
                                    <div class="single-client p-3 bg-white rounded shadow-sm hover-shadow transition" data-aos="fade-up" data-aos-delay="900">
                                        <div class="logo-box">
                                            <img src="{{asset('frontend/assets/img/clients/kk.png')}}" alt="KK Trade" class="img-fluid mb-2">
                                        </div>
                                        <h6 class="client-name mb-0">KK Trade</h6>
                                    </div>
                                </div>

                                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
                                    <div class="single-client p-3 bg-white rounded shadow-sm hover-shadow transition" data-aos="fade-up" data-aos-delay="950">
                                        <div class="logo-box">
                                            <img src="{{asset('frontend/assets/img/clients/wasa.png')}}" alt="W.Rahman & Co." class="img-fluid mb-2">
                                        </div>
                                        <h6 class="client-name mb-0">W.Rahman & Co.</h6>
                                    </div>
                                </div>

                                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
                                    <div class="single-client p-3 bg-white rounded shadow-sm hover-shadow transition" data-aos="fade-up" data-aos-delay="1000">
                                        <div class="logo-box">
                                            <img src="{{asset('frontend/assets/img/clients/rkmr.png')}}" alt="Ramakrishna Sevashrama Uttara Rowali" class="img-fluid mb-2">
                                        </div>
                                        <h6 class="client-name mb-0">Ramakrishna Sevashrama Uttara Rowali</h6>
                                    </div>
                                </div>

                                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
                                    <div class="single-client p-3 bg-white rounded shadow-sm hover-shadow transition" data-aos="fade-up" data-aos-delay="1050">
                                        <div class="logo-box">
                                            <img src="{{asset('frontend/assets/img/clients/doreen.png')}}" alt="Doreen Developments Limited" class="img-fluid mb-2">
                                        </div>
                                        <h6 class="client-name mb-0">Doreen Developments Limited</h6>
                                    </div>
                                </div>

                                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
                                    <div class="single-client p-3 bg-white rounded shadow-sm hover-shadow transition" data-aos="fade-up" data-aos-delay="1100">
                                        <div class="logo-box">
                                            <img src="{{asset('frontend/assets/img/clients/ramkrisna.png')}}" alt="Ramakrishna Ashrama & Mission Baliati, Manikgonj" class="img-fluid mb-2">
                                        </div>
                                        <h6 class="client-name mb-0">Ramakrishna Ashrama & Mission Baliati, Manikgonj</h6>
                                    </div>
                                </div>

                                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
                                    <div class="single-client p-3 bg-white rounded shadow-sm hover-shadow transition" data-aos="fade-up" data-aos-delay="1150">
                                        <div class="logo-box">
                                            <img src="{{asset('frontend/assets/img/clients/infinity.png')}}" alt="Infinity Homes Ltd." class="img-fluid mb-2">
                                        </div>
                                        <h6 class="client-name mb-0">Infinity Homes Ltd.</h6>
                                    </div>
                                </div>

                                <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
                                    <div class="single-client p-3 bg-white rounded shadow-sm hover-shadow transition" data-aos="fade-up" data-aos-delay="1200">
                                        <div class="logo-box">
                                            <img src="{{asset('frontend/assets/img/clients/modhucity.png')}}" alt="Modhu City" class="img-fluid mb-2">
                                        </div>
                                        <h6 class="client-name mb-0">Modhu City</h6>
                                    </div>
                                </div>

                                <!-- Repeat for remaining clients -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    @push('scripts')

    @endpush
@endsection