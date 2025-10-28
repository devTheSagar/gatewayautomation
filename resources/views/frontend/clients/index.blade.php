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
                                                <img src="{{ $client->client_logo }}" alt="Ramakrishna Math & Mission Dhaka" class="img-fluid mb-2">
                                            </div>
                                            <h6 class="client-name mb-0">{{ $client->company_name }}</h6>
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
    </div>

    @push('scripts')

    @endpush
@endsection