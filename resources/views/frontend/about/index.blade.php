@extends('frontend.master')

@section('title')
  About Us
@endsection

@section('content')
    <div>
        <!--page header section start-->
        <section class="bg-dark about-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12 heading-sec">
                        <h1 class="display-5 fw-bold page-heading-img-txt" data-aos="fade-up" data-aos-delay="100">About us</h1>
                        <p class="nunito-sans-300 lead" data-aos="fade-up" data-aos-delay="200">
                            Welcome to the forefront of innovation in the ICT sector. Introducing Gateway Automation Ltd, 
                            a trailblazer in software solutions and IT-enabled services.
                        </p>
                    </div>
                </div>
                {{-- <div class="bg-circle rounded-circle circle-shape-3 position-absolute bg-dark-light right-5"></div> --}}
            </div>
        </section>
        <!--page header section end-->

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 mission-vision">
                        <ul class="list-unstyled mt-5">
                            <li class="d-flex align-items-start mb-4" data-aos="fade-right" data-aos-delay="300">
                                <div class="icon-box me-4">
                                    <img src="{{asset('frontend/assets/img/icon/mission.png')}}" width="50"/>
                                </div>
                                <div class="icon-content">
                                    <h3 class="h5 nunito-sans-700" style="color: rgb(34, 36, 39)">Our Mission</h3>
                                    <p class="nunito-sans-300" style="font-size: 1.1rem">
                                        {{-- {{ $aboutUs->mission ?? ''}} --}}
                                        {!! nl2br(e($aboutUs->mission ?? '')) !!}
                                    </p>
                                </div>
                            </li>
                            <li class="d-flex align-items-start mb-4" data-aos="fade-right" data-aos-delay="400">
                                <div class="icon-box me-4">
                                    <img src="{{asset('frontend/assets/img/icon/vision.png')}}" width="50"/>
                                </div>
                                <div class="icon-content">
                                    <h3 class="h5 nunito-sans-700" style="color: rgb(34, 36, 39)">Our Vision</h3>
                                    <p class="nunito-sans-300"style="font-size: 1.1rem">
                                        {{-- {{ $aboutUs->vision ?? ''}} --}}
                                        {!! nl2br(e($aboutUs->vision ?? '')) !!}
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Why Choose Us Section -->
        <section class="value-proposition-section py-5 bg-dark text-white">
            <div class="container">
                <div class="row justify-content-center text-center mb-5">
                    <div class="col-lg-8 col-md-10">
                        <h2 class="fw-bold mb-3 nunito-sans-700" data-aos="fade-up" data-aos-delay="100">Why Choose Us</h2>
                        <p class="nunito-sans-300 lead" data-aos="fade-up" data-aos-delay="200">
                            Discover what makes <strong>Gateway Automation Ltd</strong> the trusted choice for businesses embracing digital transformation.
                        </p>
                    </div>
                </div>
                
                <div class="row g-4">
                    @if ($aboutUs && is_array($aboutUs->card_icon))
                        @foreach ($aboutUs->card_icon as $index => $icon)
                            <div class="col-md-6 col-lg-3" data-aos="flip-left" data-aos-delay="300">
                                <div class="value-card text-center p-4 h-100">
                                    <div class="icon-circle mb-3 mx-auto">
                                        {!! $icon !!}
                                    </div>
                                    <h5 class="fw-bold m-2 nunito-sans-700" style="color: rgb(223, 223, 223)">
                                        {{ $aboutUs->card_heading[$index] ?? '' }}
                                    </h5>
                                    <p class="mb-0 nunito-sans-300">
                                        {{ $aboutUs->card_text[$index] ?? '' }}
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>

            </div>
        </section>


        <!-- Mission & Vision -->
        <section class="feature-section-two ptb-120 bg-light">
            <div class="container">
                <div class="row align-items-center justify-content-center">

                    <div class="col-lg-12 col-md-12">
                        <div class="section-heading">
                            <h2 class="nunito-sans-700" data-aos="fade-up" data-aos-delay="100" style="color: rgb(34, 36, 39)">Our Story</h2>

                            <p class="nunito-sans-300" style="font-size: 1.1rem" data-aos="fade-left" data-aos-delay="100">
                                {{-- {!! $aboutUs->story ?? '' !!} --}}
                                {!! nl2br(e($aboutUs->story ?? '')) !!}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
    </div>
@endsection
