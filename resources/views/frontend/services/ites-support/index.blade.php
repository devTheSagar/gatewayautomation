@extends('frontend.master')

@section('title')
  Services - ITES Support
@endsection

@section('content')
    <div>
        <!--page header section start-->
        <section class="bg-dark services-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12 heading-sec">
                        <h1 class="display-5 fw-bold">ITES Support Services</h1>
                        <p class="lead">Comprehensive outsourcing solutions to streamline your business operations and maximize efficiency.</p>
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
                        Our <strong>ITES Support Services</strong> provide businesses with tailored outsourcing solutions to improve productivity, reduce operational costs, and optimize resource utilization. 
                        From data management to customer service and technical support, we deliver end-to-end services that align with your business objectives.
                    </p>
                    <p class="text-muted">
                        Whether your organization requires <strong>back-office support, helpdesk services, data processing, or customer engagement solutions</strong>, our skilled team ensures high-quality, timely, and reliable results. 
                        We focus on process automation, cost-efficiency, and performance excellence to help your business grow.
                    </p>
                    <p class="text-muted">
                        With flexible support models and scalable solutions, our ITES services adapt to your unique business needs, ensuring long-term success and customer satisfaction.
                    </p>
                </div>

                <!-- Features List -->
                <div class="col-lg-7 mb-7 mb-lg-0">
                    <div class="feature-tab-info">
                        <ul class="list-unstyled mb-0">
                            <li><i class="fad fa-check-circle m-0"></i>Data Entry & Data Processing</li>
                            <li><i class="fad fa-check-circle m-0"></i>Customer Service & Call Center Support</li>
                            <li><i class="fad fa-check-circle m-0"></i>Helpdesk & Technical Support</li>
                            <li><i class="fad fa-check-circle m-0"></i>Back-Office Operations Management</li>
                            <li><i class="fad fa-check-circle m-0"></i>Document Management & Digitization</li>
                            <li><i class="fad fa-check-circle m-0"></i>HR & Payroll Processing</li>
                            <li><i class="fad fa-check-circle m-0"></i>Finance & Accounting Outsourcing</li>
                            <li><i class="fad fa-check-circle m-0"></i>Email, Chat & Omni-Channel Support</li>
                            <li><i class="fad fa-check-circle m-0"></i>Research & Analytics Services</li>
                            <li><i class="fad fa-check-circle m-0"></i>Custom ITES Solutions</li>
                        </ul>
                    </div>
                </div>

                <!-- Image Section -->
                <div class="col-lg-5">
                    <div class="pr-lg-4 position-relative">
                        <div class="bg-white text-center rounded-custom overflow-hidden p-lg-5 p-4 mx-lg-auto shadow-sm">
                            <img src="{{ asset('uploads/img/erp/ites-support.jpg') }}" 
                                alt="ITES Support Services" 
                                class="img-fluid rounded-custom">
                            <small><i>ITES Support</i></small>
                            <div class="position-absolute bg-secondary-dark z--1 dot-mask dm-size-16 dm-wh-350 top--40 left--40 top-left"></div>
                        </div>
                    </div>
                </div>

                <!-- Conclusion -->
                <div class="col-lg-12 mt-5">
                    <p class="text-muted fw-semibold">
                        With <strong>ITES Support</strong>, businesses gain a trusted partner that handles critical processes with accuracy and efficiency. 
                        By leveraging advanced tools, skilled teams, and industry best practices, we help organizations improve performance, reduce costs, and stay competitive in today’s digital landscape.
                    </p>
                </div>

            </div>
        </div>
    </section>
@endsection
