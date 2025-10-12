@extends('frontend.master')

@section('title')
  Services - Architectural & Engineering Management System
@endsection

@section('content')
    <div>
        <!-- Page Header Section Start -->
        <section class="bg-dark services-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12 heading-sec">
                        <h1 class="display-5 fw-bold">Architectural & Engineering Management System</h1>
                        <p class="lead">We provide the complete solution of your architectural and engineering projects with the GATEWAY ERP system.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Page Header Section End -->
    </div>

    <section class="feature-section pt-60 pb-120 bg-light">
        <div class="container">
            <div class="row align-items-lg-start justify-content-between">

                <!-- Intro Paragraph -->
                <div class="col-lg-12 mb-5">
                    <p class="text-muted">
                        Our <strong>Architectural & Engineering Management System</strong>, powered by <strong>GATEWAY</strong>, provides businesses and firms with advanced project management, design, and collaboration tools to enhance operational efficiency and ensure timely delivery. 
                        From blueprint management to engineering workflow optimization, we deliver solutions that support modern architectural and engineering requirements.
                    </p>
                    <p class="text-muted">
                        Whether your organization requires <strong>project tracking, documentation, design review, or team collaboration</strong>, our system ensures a centralized, secure, and scalable management platform. 
                        It enhances productivity, minimizes errors, and ensures better project outcomes.
                    </p>
                    <p class="text-muted">
                        Our Architectural & Engineering system is tailored to meet your specific business needs, offering flexible workflows, robust reporting, and integration capabilities that grow with your organization.
                    </p>
                </div>

                <!-- Features List -->
                <div class="col-lg-7 mb-7 mb-lg-0">
                    <div class="feature-tab-info">
                        <ul class="list-unstyled mb-0">
                            <li><i class="fad fa-check-circle m-0"></i>Centralized project management and documentation.</li>
                            <li><i class="fad fa-check-circle m-0"></i>Improved collaboration between architects and engineers.</li>
                            <li><i class="fad fa-check-circle m-0"></i>Enhanced project tracking and reporting.</li>
                            <li><i class="fad fa-check-circle m-0"></i>Design version control and approval workflows.</li>
                            <li><i class="fad fa-check-circle m-0"></i>Resource allocation and timeline management.</li>
                            <li><i class="fad fa-check-circle m-0"></i>Integration with CAD and BIM software.</li>
                            <li><i class="fad fa-check-circle m-0"></i>Automated task assignment and reminders.</li>
                            <li><i class="fad fa-check-circle m-0"></i>Secure cloud storage and data backup.</li>
                            <li><i class="fad fa-check-circle m-0"></i>Customizable reporting and analytics dashboard.</li>
                            <li><i class="fad fa-check-circle m-0"></i>Audit trail and compliance tracking for projects.</li>
                        </ul>
                    </div>
                </div>

                <!-- Image Section -->
                <div class="col-lg-5">
                    <div class="pr-lg-4 position-relative">
                        <div class="bg-white text-center rounded-custom overflow-hidden p-lg-5 p-4 mx-lg-auto shadow-sm">
                            <img src="{{ asset('uploads/img/erp/architectural-engineering.jfif') }}" 
                                alt="Architectural & Engineering Management System" 
                                class="img-fluid rounded-custom">
                            <small><i>Architectural & Engineering Management System</i></small>
                            <div class="position-absolute bg-secondary-dark z--1 dot-mask dm-size-16 dm-wh-350 top--40 left--40 top-left"></div>
                        </div>
                    </div>
                </div>

                <!-- Conclusion -->
                <div class="col-lg-12 mt-5">
                    <p class="text-muted fw-semibold">
                        The <strong>Architectural & Engineering Management System</strong> provides firms with a centralized, secure, and efficient platform to manage projects, streamline collaboration, and enhance reporting. 
                        With GATEWAY ERP, improve project outcomes, reduce errors, and maintain operational excellence in every phase of your architectural and engineering projects.
                    </p>
                </div>

            </div>
        </div>
    </section>
@endsection
