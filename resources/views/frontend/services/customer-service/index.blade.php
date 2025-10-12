@extends('frontend.master')

@section('title')
  Services - Customer Service & Registration System
@endsection

@section('content')
<div>
    <!--page header section start-->
    <section class="bg-dark services-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 heading-sec">
                    <h1 class="display-5 fw-bold">Customer Service & Registration System</h1>
                    <p class="lead">We provide an end-to-end solution to streamline your customer service and registration processes with the GATEWAY-ERP system.</p>
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
                    Our <strong>Customer Service & Registration System</strong> powered by <strong>GATEWAY ERP</strong> helps businesses efficiently manage customer interactions, streamline registration workflows, and improve overall service quality.
                </p>
                <p class="text-muted">
                    From handling inquiries and complaints to processing registrations, our system ensures accurate, timely, and organized management. It also supports reporting, analytics, and customer history tracking for better decision-making.
                </p>
                <p class="text-muted">
                    The system is designed to be user-friendly, scalable, and adaptable to your organization's specific needs, reducing administrative overhead and enhancing customer satisfaction.
                </p>
            </div>

            <!-- Features List -->
            <div class="col-lg-7 mb-7 mb-lg-0">
                <div class="feature-tab-info">
                    <ul class="list-unstyled mb-0">
                        <li><i class="fad fa-check-circle m-0"></i>Customer Inquiry Management</li>
                        <li><i class="fad fa-check-circle m-0"></i>Customer Registration & Enrollment</li>
                        <li><i class="fad fa-check-circle m-0"></i>Complaint Tracking & Resolution</li>
                        <li><i class="fad fa-check-circle m-0"></i>Automated Notifications & Alerts</li>
                        <li><i class="fad fa-check-circle m-0"></i>Reporting & Analytics Dashboard</li>
                        <li><i class="fad fa-check-circle m-0"></i>Customer Data Management & History</li>
                        <li><i class="fad fa-check-circle m-0"></i>Queue & Appointment Management</li>
                        <li><i class="fad fa-check-circle m-0"></i>User-friendly Interface for Staff</li>
                        <li><i class="fad fa-check-circle m-0"></i>Integration with ERP Modules</li>
                        <li><i class="fad fa-check-circle m-0"></i>Secure Access & Data Protection</li>
                    </ul>
                </div>
            </div>

            <!-- Image Section -->
            <div class="col-lg-5">
                <div class="pr-lg-4 position-relative">
                    <div class="bg-white text-center rounded-custom overflow-hidden p-lg-5 p-4 mx-lg-auto shadow-sm">
                        <img src="{{ asset('uploads/img/erp/customer-service-registration.webp') }}" 
                            alt="Customer Service & Registration System" 
                            class="img-fluid rounded-custom">
                        <small><i>Customer Service & Registration System</i></small>
                        <div class="position-absolute bg-secondary-dark z--1 dot-mask dm-size-16 dm-wh-350 top--40 left--40 top-left"></div>
                    </div>
                </div>
            </div>

            <!-- Conclusion -->
            <div class="col-lg-12 mt-5">
                <p class="text-muted fw-semibold">
                    Our <strong>Customer Service & Registration System</strong> ensures efficient, accurate, and professional management of all customer interactions and registration processes. 
                    By leveraging GATEWAY ERP, businesses can save time, reduce errors, and enhance customer satisfaction while maintaining organized records and actionable insights.
                </p>
            </div>

        </div>
    </div>
</section>
@endsection
