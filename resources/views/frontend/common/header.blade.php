<!DOCTYPE html>
<html lang="en">

<head>
    <!--required meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <!--meta-->
    <meta name="description" content="Gateway Automation ltd provides cutting-edge automation, security, and smart technology solutions for your businesses. Experience innovation, reliability, and modern automation with us.">
    <meta name="author" content="ThemeTags">

    <!--favicon icon-->
    <link rel="icon" href="{{asset('frontend/assets/img/favicon.png')}}" type="image/png" sizes="16x16">

    <!--title-->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- here change the title  --}}
    <title>{{ config('app.name', 'Gateway Automation') }} | @yield('title')</title>

    <!--google fonts-->
    {{-- <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">

    {{-- bootstrap icons  --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

    <!--build:css-->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/main.css')}}">
    <!-- endbuild -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css">
    
    <!--custom css start-->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/custom.css')}}">
    <!--custom css end-->

    {{-- @livewireStyles --}}
    @stack('styles')

</head>

<body>

    <!--preloader start-->
    <div id="preloader">
        <div class="preloader-wrap">
            <img src="{{asset('frontend/assets/img/favicon.png')}}" alt="logo" class="img-fluid preloader-icon" />
            <div class="loading-bar"></div>
        </div>
    </div>
    <!--preloader end-->
    <!--main content wrapper start-->
    <div class="main-wrapper">

        <!--header section start-->
        <header class="main-header position-absolute w-100 header-custom">
            <nav class="navbar navbar-expand-xl navbar-dark sticky-header">
                <div class="container d-flex align-items-center justify-content-lg-between position-relative">
                    <a href="{{url('/')}}" class="navbar-brand d-flex align-items-center mb-md-0 text-decoration-none">
                        <img src="{{asset('frontend/assets/img/logo-white.png')}}" alt="logo" class="img-fluid logo-white" width="40%" />
                        <img src="{{asset('frontend/assets/img/logo-color.png')}}" alt="logo" class="img-fluid logo-color" width="40%" />
                    </a>

                    <a class="navbar-toggler position-absolute right-0 border-0" href="#offcanvasWithBackdrop" role="button">
                        <span class="far fa-bars" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBackdrop" aria-controls="offcanvasWithBackdrop"></span>
                    </a>
                    <div class="clearfix"></div>
                    <div class="collapse navbar-collapse justify-content-center">
                        <ul class="nav col-12 col-md-auto justify-content-center main-menu">
                            <li><a href="{{url('/')}}" class="nav-link {{ Route::is('home') ? 'active' : '' }}">Home</a></li>
                            <li><a href="{{ route('about') }}" class="nav-link {{ Route::is('about') ? 'active' : '' }}">About</a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle {{ Route::is('service.*') ? 'active' : '' }}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Services
                                </a>
                                <div class="dropdown-menu border-0 rounded-custom shadow py-0 bg-white">
                                    <div class="dropdown-grid rounded-custom width-half">
                                        <div class="dropdown-grid-item">
    <!-- Loop only active services -->
    @foreach($allServices->where('status', 1) as $index => $service)
        <a href="{{ route('service.view', $service->slug) }}" 
           class="dropdown-link {{ Route::is('service.view') && request()->slug == $service->slug ? 'active' : '' }}">
            <span class="demo-list btn-danger rounded text-white fw-bold">{{ $index + 1 }}</span>
            <div class="dropdown-info">
                <div class="drop-title">{{ $service->service_name }}</div>
            </div>
        </a>
    @endforeach
</div>


                                    </div>
                                </div>
                            </li>
                            <li><a href="{{ route('gallery') }}" class="nav-link {{ Route::is('gallery') ? 'active' : '' }}">Gallery</a></li>
                            <li><a href="{{ route('clients') }}" class="nav-link {{ Route::is('clients') ? 'active' : '' }}">Clients</a></li>
                            <li><a href="{{ route('contact') }}" class="nav-link {{ Route::is('contact') ? 'active' : '' }}">Contact</a></li>
                            <li class="d-flex align-items-center">
                                <a class="btn btn-gradient px-4 py-2 rounded-pill shadow-sm" href="{{ route('contact') }}">
                                    ⚡ Request a Demo
                                </a>
                            </li>

                        </ul>
                    </div>

                    <!-- <div class="action-btns text-end me-5 me-lg-0 d-none d-md-block d-lg-block">
                        <a href="#" class="btn btn-danger">Get Started</a>
                    </div> -->

                    <!-- Offcanvas Menu Start -->
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasWithBackdrop">
                        <!-- Header -->
                        <div class="offcanvas-header d-flex align-items-center justify-content-between py-3 px-3">
                            <!-- Small Logo -->
                            <a href="{{ route('home') }}" class="d-flex align-items-center mb-0 text-decoration-none">
                                <img src="{{ asset('frontend/assets/img/logo-color.png') }}" alt="logo" class="img-fluid" style="height:40px;" />
                            </a>

                            <!-- Close Button -->
                            <button type="button" class="close-btn" data-bs-dismiss="offcanvas" aria-label="Close">&times;</button>
                        </div>

                        <!-- Body -->
                        <div class="offcanvas-body px-3">
                            <ul class="nav flex-column main-menu">

                                <li><a href="{{ url('/') }}" class="nav-link">Home</a></li>
                                <li><a href="{{ route('about') }}" class="nav-link">About</a></li>

                                <!-- Services Collapsible -->
                                <li class="nav-item">
                                    <a class="nav-link d-flex justify-content-between align-items-center" 
                                    data-bs-toggle="collapse" href="#servicesCollapse" role="button" aria-expanded="false">
                                        Services
                                        <i class="bi bi-chevron-down"></i>
                                    </a>

                                    <div class="collapse" id="servicesCollapse">
                                        <ul class="nav flex-column ms-3 mt-2">
                                            @foreach($allServices as $index => $service)
                                                <li>
                                                     
                                                    <a href="{{ route('service.view', $service->slug) }}" 
                                                    class="nav-link d-flex align-items-center {{ Route::is('service.view') && request()->id == $service->slug ? 'active' : '' }}">
                                                        <div>
                                                            <span class="demo-list">{{ $index + 1 }}</span>
                                                        </div>
                                                        {{ $service->service_name }}
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </li>

                                <li><a href="{{ route('gallery') }}" class="nav-link">Gallery</a></li>
                                <li><a href="{{ route('clients') }}" class="nav-link">Clients</a></li>
                                <li><a href="{{ route('contact') }}" class="nav-link">Contact</a></li>

                                <li class="mt-3">
                                    <a class="btn btn-gradient px-4 py-2 rounded-pill shadow-sm" href="{{ route('contact') }}">
                                        ⚡ Request a Demo
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Offcanvas Menu End -->

                </div>
            </nav>
        </header>
        <!--header section end-->