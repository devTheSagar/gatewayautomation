@extends('frontend.master')

@section('title')
  Services - Vehicle Management System
@endsection

@section('content')
    <div>
        <!--page header section start-->
        <section class="bg-dark services-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12 heading-sec">
                        <h1 class="display-5 fw-bold">Vehicle Management System</h1>
                        <p class="lead">We provide the complete solution of your business with the GATEWAY- ERP system.</p>
                    </div>
                </div>
            </div>
        </section>
        <!--page header section end-->
    </div>

    <section class="feature-section pt-60 pb-120 bg-light">
        <div class="container">
            <div class="row align-items-lg-start justify-content-between">

                <!-- Intro Paragraph -->
                <div class="col-lg-12 mb-5">
                    <p class="text-muted">
                        Our <strong>Vehicle Management System</strong>, powered by <strong>GATEWAY</strong>, helps organizations efficiently monitor and manage their fleet operations. 
                        From scheduling maintenance to tracking real-time vehicle usage, the system ensures improved productivity and reduced operational costs.
                    </p>
                    <p class="text-muted">
                        Whether your business involves logistics, transport services, or company fleets, our solution provides centralized control for vehicle monitoring, driver management, and expense tracking. 
                        It ensures your fleet operates at peak efficiency while minimizing downtime.
                    </p>
                    <p class="text-muted">
                        The system also enhances decision-making with insightful reports and analytics, giving businesses better control over vehicle performance and lifecycle management.
                    </p>
                </div>

                <!-- Features List -->
                <div class="col-lg-7 mb-7 mb-lg-0">
                    <div class="feature-tab-info">
                        <ul class="list-unstyled mb-0">
                            <li><i class="fad fa-check-circle m-0"></i>Efficient scheduling of vehicle maintenance and repairs.</li>
                            <li><i class="fad fa-check-circle m-0"></i>Real-time tracking of vehicle location and usage.</li>
                            <li><i class="fad fa-check-circle m-0"></i>Improved management of vehicle-related expenses and logistics.</li>
                            <li><i class="fad fa-check-circle m-0"></i>Driver management and assignment tracking.</li>
                            <li><i class="fad fa-check-circle m-0"></i>Fuel consumption monitoring and optimization.</li>
                            <li><i class="fad fa-check-circle m-0"></i>Automated reminders for renewals (tax, insurance, fitness).</li>
                            <li><i class="fad fa-check-circle m-0"></i>Comprehensive reporting and performance analytics.</li>
                        </ul>
                    </div>
                </div>

                <!-- Image Section -->
                <div class="col-lg-5">
                    <div class="pr-lg-4 position-relative">
                        <div class="bg-white text-center rounded-custom overflow-hidden p-lg-5 p-4 mx-lg-auto shadow-sm">
                            <img src="{{ asset('uploads/img/erp/vehicle-management.jpg') }}" 
                                alt="Vehicle Management System" 
                                class="img-fluid rounded-custom">
                            <small><i>Vehicle Management System</i></small>
                            <div class="position-absolute bg-secondary-dark z--1 dot-mask dm-size-16 dm-wh-350 top--40 left--40 top-left"></div>
                        </div>
                    </div>
                </div>

                <!-- Conclusion -->
                <div class="col-lg-12 mt-5">
                    <p class="text-muted fw-semibold">
                        With our <strong>Vehicle Management System</strong>, businesses gain full visibility of their fleet, reduce costs, and improve efficiency. 
                        By integrating maintenance, tracking, and reporting, the system ensures smarter operations and enhanced customer satisfaction.
                    </p>
                </div>

            </div>
        </div>
    </section>
@endsection
