@extends('frontend.master')

@section('title')
  Services - ICT Services
@endsection

@section('content')
    <div>
        <!--page header section start-->
        <section class="bg-dark services-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12 heading-sec">
                        <h1 class="display-5 fw-bold">ICT Services</h1>
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
                        Our <strong>ICT Services</strong>, powered by <strong>GATEWAY</strong>, provide businesses with comprehensive technology solutions to enhance operational efficiency, network performance, and digital security. 
                        From IT infrastructure setup to cloud integration and cybersecurity, we deliver services that support modern business demands.
                    </p>
                    <p class="text-muted">
                        Whether your organization requires <strong>network administration, server management, cloud services, or IT consulting</strong>, our team ensures reliable, scalable, and secure solutions. 
                        We focus on proactive monitoring, rapid troubleshooting, and implementing best practices to maximize uptime and reduce IT risks.
                    </p>
                    <p class="text-muted">
                        Our ICT services are tailored to meet your specific business needs, offering flexible support models and advanced technology solutions that adapt as your organization grows.
                    </p>
                </div>

                <!-- Features List -->
                <div class="col-lg-7 mb-7 mb-lg-0">
                    <div class="feature-tab-info">
                        <ul class="list-unstyled mb-0">
                            <li><i class="fad fa-check-circle m-0"></i>Network Setup & Administration</li>
                            <li><i class="fad fa-check-circle m-0"></i>Server Installation & Management</li>
                            <li><i class="fad fa-check-circle m-0"></i>Cloud Integration & Hosting Solutions</li>
                            <li><i class="fad fa-check-circle m-0"></i>Cybersecurity & Data Protection</li>
                            <li><i class="fad fa-check-circle m-0"></i>IT Consulting & Strategy Planning</li>
                            <li><i class="fad fa-check-circle m-0"></i>Software Deployment & Licensing</li>
                            <li><i class="fad fa-check-circle m-0"></i>Backup & Disaster Recovery Solutions</li>
                            <li><i class="fad fa-check-circle m-0"></i>Proactive IT Monitoring & Maintenance</li>
                            <li><i class="fad fa-check-circle m-0"></i>Wireless & VPN Setup</li>
                            <li><i class="fad fa-check-circle m-0"></i>Technical Support & Helpdesk Services</li>
                        </ul>
                    </div>
                </div>

                <!-- Image Section -->
                <div class="col-lg-5">
                    <div class="pr-lg-4 position-relative">
                        <div class="bg-white text-center rounded-custom overflow-hidden p-lg-5 p-4 mx-lg-auto shadow-sm">
                            <img src="{{ asset('uploads/img/erp/ict-services.jpg') }}" 
                                alt="ICT Services" 
                                class="img-fluid rounded-custom">
                            <small><i>ICT Services</i></small>
                            <div class="position-absolute bg-secondary-dark z--1 dot-mask dm-size-16 dm-wh-350 top--40 left--40 top-left"></div>
                        </div>
                    </div>
                </div>

                <!-- Conclusion -->
                <div class="col-lg-12 mt-5">
                    <p class="text-muted fw-semibold">
                        Our <strong>ICT Services</strong> provide businesses with a robust, secure, and scalable technology foundation. 
                        By combining expert support with advanced infrastructure solutions, we help organizations improve efficiency, safeguard data, and stay competitive in the digital era.
                    </p>
                </div>

            </div>
        </div>
    </section>



@endsection