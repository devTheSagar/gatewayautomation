@extends('frontend.master')

@section('title')
  Services - Mobile Phone Management System
@endsection

@section('content')
    <div>
        <!-- Page Header Section Start -->
        <section class="bg-dark services-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12 heading-sec">
                        <h1 class="display-5 fw-bold">Mobile Phone Management System</h1>
                        <p class="lead">Streamline your mobile operations with GATEWAY ERP’s comprehensive Mobile Phone Management System.</p>
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
                        Our <strong>Mobile Phone Management System</strong> by <strong>GATEWAY</strong> is designed to optimize mobile inventory, user management, and device tracking for businesses of any scale. 
                        Monitor device lifecycle, manage SIM allocations, and ensure seamless workflow across your mobile assets.
                    </p>
                    <p class="text-muted">
                        Whether you require <strong>mobile device provisioning, usage tracking, repair management, or billing integration</strong>, our system ensures a secure and centralized management platform. 
                        Reduce administrative overhead and improve mobile operational efficiency.
                    </p>
                    <p class="text-muted">
                        The system is customizable, scalable, and integrates smoothly with your existing ERP infrastructure, providing a complete mobile management solution for your organization.
                    </p>
                </div>

                <!-- Features List -->
                <div class="col-lg-7 mb-7 mb-lg-0">
                    <div class="feature-tab-info">
                        <ul class="list-unstyled mb-0">
                            <li><i class="fad fa-check-circle m-0"></i>Device Inventory Management</li>
                            <li><i class="fad fa-check-circle m-0"></i>SIM & Plan Tracking</li>
                            <li><i class="fad fa-check-circle m-0"></i>Repair & Maintenance Logging</li>
                            <li><i class="fad fa-check-circle m-0"></i>Mobile User Access Control</li>
                            <li><i class="fad fa-check-circle m-0"></i>Billing & Usage Monitoring</li>
                            <li><i class="fad fa-check-circle m-0"></i>Alerts & Notifications for Expiry/Repairs</li>
                            <li><i class="fad fa-check-circle m-0"></i>Centralized Reporting Dashboard</li>
                            <li><i class="fad fa-check-circle m-0"></i>Integration with Existing ERP Modules</li>
                            <li><i class="fad fa-check-circle m-0"></i>Compliance & Audit Tracking</li>
                            <li><i class="fad fa-check-circle m-0"></i>Customizable Workflows & Permissions</li>
                        </ul>
                    </div>
                </div>

                <!-- Image Section -->
                <div class="col-lg-5">
                    <div class="pr-lg-4 position-relative">
                        <div class="bg-white text-center rounded-custom overflow-hidden p-lg-5 p-4 mx-lg-auto shadow-sm">
                            <img src="{{ asset('uploads/img/erp/mobile-phone-management.webp') }}" 
                                alt="Mobile Phone Management System" 
                                class="img-fluid rounded-custom">
                            <small><i>Mobile Phone Management System</i></small>
                            <div class="position-absolute bg-secondary-dark z--1 dot-mask dm-size-16 dm-wh-350 top--40 left--40 top-left"></div>
                        </div>
                    </div>
                </div>

                <!-- Conclusion -->
                <div class="col-lg-12 mt-5">
                    <p class="text-muted fw-semibold">
                        The <strong>Mobile Phone Management System</strong> provides businesses with a centralized, secure, and efficient platform to manage all mobile devices and users. 
                        Reduce costs, streamline operations, and enhance visibility across all mobile resources with GATEWAY ERP.
                    </p>
                </div>

            </div>
        </div>
    </section>
@endsection
