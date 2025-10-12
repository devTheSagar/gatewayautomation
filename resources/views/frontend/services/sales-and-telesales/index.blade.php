@extends('frontend.master')

@section('title')
  Services - Sales & Telesales Management System
@endsection

@section('content')
    <div>
        <!--page header section start-->
        <section class="bg-dark services-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12 heading-sec">
                        <h1 class="display-5 fw-bold">Sales & Telesales Management System</h1>
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
                        Our <strong>Sales & Telesales Management System</strong>, powered by <strong>GATEWAY</strong>, empowers businesses to streamline customer acquisition, strengthen relationships, and boost revenue. 
                        From lead generation to sales closure, our ERP solution provides the right tools to manage the full sales cycle efficiently.
                    </p>
                    <p class="text-muted">
                        Whether your organization focuses on <strong>B2B telesales, outbound call campaigns, or managing sales teams</strong>, our solution ensures better productivity through real-time tracking, performance insights, and automation of repetitive tasks.
                    </p>
                    <p class="text-muted">
                        We focus on improving <strong>customer engagement, sales forecasting, and telesales efficiency</strong>, enabling organizations to reach their sales goals faster and with greater accuracy.
                    </p>
                </div>

                <!-- Features List -->
                <div class="col-lg-7 mb-7 mb-lg-0">
                    <div class="feature-tab-info">
                        <ul class="list-unstyled mb-0">
                            <li><i class="fad fa-check-circle m-0"></i>Improved lead management and conversion rates.</li>
                            <li><i class="fad fa-check-circle m-0"></i>Efficient tracking of sales performance and targets.</li>
                            <li><i class="fad fa-check-circle m-0"></i>Enhanced support for telesales activities and customer outreach.</li>
                            <li><i class="fad fa-check-circle m-0"></i>Automated follow-ups and reminders for sales teams.</li>
                            <li><i class="fad fa-check-circle m-0"></i>Integrated CRM features for better customer relationship management.</li>
                            <li><i class="fad fa-check-circle m-0"></i>Customizable dashboards for sales analytics.</li>
                            <li><i class="fad fa-check-circle m-0"></i>Support for outbound and inbound telesales campaigns.</li>
                            <li><i class="fad fa-check-circle m-0"></i>Centralized tracking of leads, opportunities, and deals.</li>
                            <li><i class="fad fa-check-circle m-0"></i>Role-based access for sales agents and managers.</li>
                            <li><i class="fad fa-check-circle m-0"></i>Seamless integration with marketing and finance modules.</li>
                        </ul>
                    </div>
                </div>

                <!-- Image Section -->
                <div class="col-lg-5">
                    <div class="pr-lg-4 position-relative">
                        <div class="bg-white text-center rounded-custom overflow-hidden p-lg-5 p-4 mx-lg-auto shadow-sm">
                            <img src="{{ asset('uploads/img/erp/sales-telesales1.webp') }}" 
                                alt="Sales & Telesales Management System"  
                                class="img-fluid rounded-custom"
                                style="height: 40vh; object-fit: cover;">
                            <small><i>Sales & Telesales Management</i></small>
                            <div class="position-absolute bg-secondary-dark z--1 dot-mask dm-size-16 dm-wh-350 top--40 left--40 top-left"></div>
                        </div>
                    </div>
                </div>

                <!-- Conclusion -->
                <div class="col-lg-12 mt-5">
                    <p class="text-muted fw-semibold">
                        Our <strong>Sales & Telesales Management System</strong> enhances customer outreach, strengthens telesales operations, and provides real-time insights into sales performance. 
                        By combining automation, analytics, and CRM features, businesses can maximize conversions and achieve sustainable revenue growth.
                    </p>
                </div>

            </div>
        </div>
    </section>
@endsection
