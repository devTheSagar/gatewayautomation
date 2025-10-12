<!DOCTYPE html>
<html lang="en">

<head>
    <!--required meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <!--meta-->
    <meta name="description" content="Quiety creative Saas, software technology, Saas agency & business Bootstrap 5 Html template. It is best and famous software company and Saas website template.">
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
                                            <!-- <h6 class="drop-heading">Customize Enterprise Resource Planning (ERP)</h6> -->
                                            <a href="{{ route('service.account-and-finance') }}" class="dropdown-link {{ Route::is('service.account-and-finance') ? 'active' : '' }}">
                                                <span class="demo-list btn-danger rounded text-white fw-bold">1</span>
                                                <div class="dropdown-info">
                                                    <div class="drop-title">Account & Finance Management System</div>
                                                </div>
                                            </a>
                                            <a href="{{ route('service.hr-and-payroll') }}" class="dropdown-link {{ Route::is('service.hr-and-payroll') ? 'active' : '' }}">
                                                <span class="demo-list btn-danger rounded text-white fw-bold">2</span>
                                                <div class="dropdown-info">
                                                    <div class="drop-title">Human Resource Administration & Payroll Management</div>
                                                </div>
                                            </a>
                                            <a href="{{ route('service.real-estate-and-property') }}" class="dropdown-link {{ Route::is('service.real-estate-and-property') ? 'active' : '' }}">
                                                <span class="demo-list btn-danger rounded text-white fw-bold">3</span>
                                                <div class="dropdown-info">
                                                    <div class="drop-title">Real Estate & Property Management</div>
                                                </div>
                                            </a>
                                            <a href="{{ route('service.trading-business') }}" class="dropdown-link {{ Route::is('service.trading-business') ? 'active' : '' }}">
                                                <span class="demo-list btn-danger rounded text-white fw-bold">4</span>
                                                <div class="dropdown-info">
                                                    <div class="drop-title">Trading Business</div>
                                                </div>
                                            </a>
                                            <a href="{{ route('service.supply-chain-management') }}" class="dropdown-link {{ Route::is('service.supply-chain-management') ? 'active' : '' }}">
                                                <span class="demo-list btn-danger rounded text-white fw-bold">5</span>
                                                <div class="dropdown-info">
                                                    <div class="drop-title">Supply Chain Management System</div>
                                                </div>
                                            </a>
                                            <a href="{{ route('service.manufacturing') }}" class="dropdown-link {{ Route::is('service.manufacturing') ? 'active' : '' }}">
                                                <span class="demo-list btn-danger rounded text-white fw-bold">6</span>
                                                <div class="dropdown-info">
                                                    <div class="drop-title">Manufacturing</div>
                                                </div>
                                            </a>
                                            <a href="{{ route('service.education-management') }}" class="dropdown-link {{ Route::is('service.education-management') ? 'active' : '' }}">
                                                <span class="demo-list btn-danger rounded text-white fw-bold">7</span>
                                                <div class="dropdown-info">
                                                    <div class="drop-title">Education Management System</div>
                                                </div>
                                            </a>
                                            <a href="{{ route('service.tea-estate-management') }}" class="dropdown-link {{ Route::is('service.tea-estate-management') ? 'active' : '' }}">
                                                <span class="demo-list btn-danger rounded text-white fw-bold">8</span>
                                                <div class="dropdown-info">
                                                    <div class="drop-title">Tea Estate Management System</div>
                                                </div>
                                            </a>
                                            <a href="{{ route('service.app-website') }}" class="dropdown-link {{ Route::is('service.app-website') ? 'active' : '' }}">
                                                <span class="demo-list btn-danger rounded text-white fw-bold">9</span>
                                                <div class="dropdown-info">
                                                    <div class="drop-title">Mobile App & Website design and development</div>
                                                </div>
                                            </a>
                                            <a href="{{ route('service.ict') }}" class="dropdown-link {{ Route::is('service.ict') ? 'active' : '' }}">
                                                <span class="demo-list btn-danger rounded text-white fw-bold">10</span>
                                                <div class="dropdown-info">
                                                    <div class="drop-title">ICT Services</div>
                                                </div>
                                            </a>
                                            <a href="{{ route('service.customer-service') }}" class="dropdown-link {{ Route::is('service.customer-service') ? 'active' : '' }}">
                                                <span class="demo-list btn-danger rounded text-white fw-bold">11</span>
                                                <div class="dropdown-info">
                                                    <div class="drop-title">Customer Service & Registration System</div>
                                                </div>
                                            </a>
                                            <a href="{{ route('service.mobile-management-service') }}" class="dropdown-link {{ Route::is('service.mobile-management-service') ? 'active' : '' }}">
                                                <span class="demo-list btn-danger rounded text-white fw-bold">12</span>
                                                <div class="dropdown-info">
                                                    <div class="drop-title">Mobile Phone Management System</div>
                                                </div>
                                            </a>
                                            <a href="{{ route('service.architectural-eng') }}" class="dropdown-link {{ Route::is('service.architectural-eng') ? 'active' : '' }}">
                                                <span class="demo-list btn-danger rounded text-white fw-bold">13</span>
                                                <div class="dropdown-info">
                                                    <div class="drop-title">Architectural & Engineering Management System</div>
                                                </div>
                                            </a>
                                            <a href="{{ route('service.procurement-inventory') }}" class="dropdown-link {{ Route::is('service.procurement-inventory') ? 'active' : '' }}">
                                                <span class="demo-list btn-danger rounded text-white fw-bold">14</span>
                                                <div class="dropdown-info">
                                                    <div class="drop-title">Procurement & Inventory Management System</div>
                                                </div>
                                            </a>
                                            <a href="{{ route('service.sales-telesales') }}" class="dropdown-link {{ Route::is('service.sales-telesales') ? 'active' : '' }}">
                                                <span class="demo-list btn-danger rounded text-white fw-bold">15</span>
                                                <div class="dropdown-info">
                                                    <div class="drop-title">Sales & Telesales Management System</div>
                                                </div>
                                            </a>
                                            <a href="{{ route('service.vehicle-management') }}" class="dropdown-link {{ Route::is('service.vehicle-management') ? 'active' : '' }}">
                                                <span class="demo-list btn-danger rounded text-white fw-bold">16</span>
                                                <div class="dropdown-info">
                                                    <div class="drop-title">Vehicle Management System</div>
                                                </div>
                                            </a>
                                            <a href="{{ route('service.ites-support') }}" class="dropdown-link {{ Route::is('service.ites-support') ? 'active' : '' }}">
                                                <span class="demo-list btn-danger rounded text-white fw-bold">17</span>
                                                <div class="dropdown-info">
                                                    <div class="drop-title">ITES Support</div>
                                                </div>
                                            </a>
                                            <a href="{{ route('service.softwate-development') }}" class="dropdown-link {{ Route::is('service.softwate-development') ? 'active' : '' }}">
                                                <span class="demo-list btn-danger rounded text-white fw-bold">18</span>
                                                <div class="dropdown-info">
                                                    <div class="drop-title">Software Development</div>
                                                </div>
                                            </a>
                                            <a href="{{ route('service.cloud-hosting') }}" class="dropdown-link {{ Route::is('service.cloud-hosting') ? 'active' : '' }}">
                                                <span class="demo-list btn-danger rounded text-white fw-bold">19</span>
                                                <div class="dropdown-info">
                                                    <div class="drop-title">Cloud Hosting</div>
                                                </div>
                                            </a>
                                            <a href="{{ route('training-consultancy') }}" class="dropdown-link {{ Route::is('training-consultancy') ? 'active' : '' }}">
                                                <span class="demo-list btn-danger rounded text-white fw-bold">20</span>
                                                <div class="dropdown-info">
                                                    <div class="drop-title">Training & Consultancy</div>
                                                </div>
                                            </a>
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

                                <!-- Services Dropdown -->
                                <li class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle collapsed">Services</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{ route('service.account-and-finance') }}" class="dropdown-link"><span class="demo-list">1</span> Account & Finance Management System</a></li>
                                        <li><a href="{{ route('service.hr-and-payroll') }}" class="dropdown-link"><span class="demo-list">2</span> Human Resource Administration & Payroll Management</a></li>
                                        <li><a href="{{ route('service.real-estate-and-property') }}" class="dropdown-link"><span class="demo-list">3</span> Real Estate & Property Management</a></li>
                                        <li><a href="{{ route('service.trading-business') }}" class="dropdown-link"><span class="demo-list">4</span> Trading Business</a></li>
                                        <li><a href="{{ route('service.supply-chain-management') }}" class="dropdown-link"><span class="demo-list">5</span> Supply Chain Management System</a></li>
                                        <li><a href="{{ route('service.manufacturing') }}" class="dropdown-link"><span class="demo-list">6</span> Manufacturing</a></li>
                                        <li><a href="{{ route('service.education-management') }}" class="dropdown-link"><span class="demo-list">7</span> Education Management System</a></li>
                                        <li><a href="{{ route('service.tea-estate-management') }}" class="dropdown-link"><span class="demo-list">8</span> Tea Estate Management System</a></li>
                                        <li><a href="{{ route('service.app-website') }}" class="dropdown-link"><span class="demo-list">9</span> Mobile App & Website design and development</a></li>
                                        <li><a href="{{ route('service.ict') }}" class="dropdown-link"><span class="demo-list">10</span> ICT Services</a></li>
                                        <li><a href="{{ route('service.customer-service') }}" class="dropdown-link"><span class="demo-list">11</span> Customer Service & Registration System</a></li>
                                        <li><a href="{{ route('service.mobile-management-service') }}" class="dropdown-link"><span class="demo-list">12</span> Mobile Phone Management System</a></li>
                                        <li><a href="{{ route('service.architectural-eng') }}" class="dropdown-link"><span class="demo-list">13</span> Architectural & Engineering Management System</a></li>
                                        <li><a href="{{ route('service.procurement-inventory') }}" class="dropdown-link"><span class="demo-list">14</span> Procurement & Inventory Management System</a></li>
                                        <li><a href="{{ route('service.sales-telesales') }}" class="dropdown-link"><span class="demo-list">15</span> Sales & Telesales Management System</a></li>
                                        <li><a href="{{ route('service.vehicle-management') }}" class="dropdown-link"><span class="demo-list">16</span> Vehicle Management System</a></li>
                                        <li><a href="{{ route('service.ites-support') }}" class="dropdown-link"><span class="demo-list">17</span> ITES Support</a></li>
                                        <li><a href="{{ route('service.softwate-development') }}" class="dropdown-link"><span class="demo-list">18</span> Software Development</a></li>
                                        <li><a href="{{ route('service.cloud-hosting') }}" class="dropdown-link"><span class="demo-list">19</span> Cloud Hosting</a></li>
                                        <li><a href="{{ route('training-consultancy') }}" class="dropdown-link"><span class="demo-list">20</span> Training & Consultancy</a></li>
                                    </ul>
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