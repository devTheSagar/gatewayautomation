@extends('frontend.master')

@section('title')
  Service
@endsection

@section('content')
    <div>
        <!--page header section start-->
        <section class="bg-dark services-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12 heading-sec">
                        <h1 class="display-5 fw-bold">{{ $service->service_name }}</h1>
                        <p class="lead">We provide the complete solution of your business with the GATEWAY- ERP system.</p>
                    </div>
                </div>
            </div>
        </section>
        <!--page header section end-->
    </div>

    @if(!empty($service->sections))
        @foreach($service->sections as $section)
            <section class="feature-section pt-60 pb-120 bg-light">
                <div class="container">
                    <div class="row align-items-lg-start justify-content-between">

                        <!-- Full-width Intro Paragraph -->
                        <div class="col-lg-12 mb-5">
                            <h2 class="text-center mb-4" style="color: rgb(34, 36, 39)">
                                {{ $section['heading'] }}
                            </h2>
                            <p class="text-muted">
                            <p>{{ $section['content'] }}</p>
                            </p>
                        </div>




                        {{-- Features List --}}
                        @if(!empty($section['features']))
                        <!-- Content List -->
                            <div class="col-lg-6 mb-7 mb-lg-0">
                                <div class="feature-tab-info">
                                    <ul class="list-unstyled mb-0">
                                        @foreach($section['features'] as $feature)
                                            <li><i class="fad fa-check-circle m-0"></i>{{ $feature }}</li>
                                        @endforeach
                                        
                                    </ul>
                                </div>
                            </div>
                        @endif

                        


                        <div class="col-lg-6">
                            <div class="pr-lg-4 position-relative">
                                <div class="bg-light text-center rounded-custom overflow-hidden p-lg-5 p-4 mx-lg-auto">

                                    <img src="{{ asset($section['image']) }}" 
                                        alt="{{ $section['heading'] }}" 
                                        class="img-fluid rounded-custom shadow-sm">

                                    <small><i>{{ $section['heading'] }}</i></small>

                                    <div class="position-absolute bg-secondary-dark z--1 dot-mask dm-size-16 dm-wh-350 bottom--40 right--40 bottom-right"></div>
                                </div>
                            </div>
                        </div>


                        <!-- Conclusion -->
                        <div class="col-lg-12 mt-5">
                            <p class="text-muted fw-semibold">
                                {{ $service->conclusion }}
                            </p>
                        </div>

                    </div>
                </div>
            </section>
        @endforeach
    @endif

@endsection