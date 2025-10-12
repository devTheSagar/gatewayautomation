@extends('frontend.master')

@section('title')
  Services - Tea Estate Management System
@endsection

@section('content')
    <div>
        <!--page header section start-->
        <section class="bg-dark services-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12 heading-sec">
                        <h1 class="display-5 fw-bold">Tea Estate Management System</h1>
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
                    Our <strong>Tea Estate Management System</strong>, powered by <strong>GATEWAY-ERP</strong>, is designed to handle the unique challenges of managing large plantations. 
                    From labor attendance and salary management to stock control and delivery tracking, the system ensures smooth operations across departments. 
                    It simplifies day-to-day estate activities while providing accurate and transparent reporting for better decision-making.
                </p>
                <p class="text-muted">
                    With features like <strong>employee attendance tracking, daily labor summaries, ration card management, and asset monitoring</strong>, the platform helps estate owners and managers reduce paperwork and improve efficiency. 
                    It also supports <strong>bin card records, goods received notifications, and store management</strong>, ensuring proper accountability at every stage of the process.
                </p>
                <p class="text-muted">
                    Whether it’s financial tracking, logistics coordination, or workforce supervision, our system integrates all operations into one streamlined platform. 
                    By automating repetitive tasks and digitizing records, the Tea Estate Management System empowers organizations to save time, cut costs, and boost productivity.
                </p>
            </div>

            <!-- Features List -->
            <div class="col-lg-7 mb-7 mb-lg-0">
                <div class="feature-tab-info">
                    <ul class="list-unstyled mb-0">
                        <li><i class="fad fa-check-circle m-0"></i>Details Invoice</li>
                        <li><i class="fad fa-check-circle m-0"></i>Employee Attendance</li>
                        <li><i class="fad fa-check-circle m-0"></i>Daily Labor Summary</li>
                        <li><i class="fad fa-check-circle m-0"></i>Monthly Salary Information</li>
                        <li><i class="fad fa-check-circle m-0"></i>Bin Card Information</li>
                        <li><i class="fad fa-check-circle m-0"></i>Fixed Asset Information</li>
                        <li><i class="fad fa-check-circle m-0"></i>Goods Received Notification</li>
                        <li><i class="fad fa-check-circle m-0"></i>Store Information</li>
                        <li><i class="fad fa-check-circle m-0"></i>Ration Card Information</li>
                        <li><i class="fad fa-check-circle m-0"></i>Delivery Information</li>
                        <li><i class="fad fa-check-circle m-0"></i>Section Bed Information</li>
                        <li><i class="fad fa-check-circle m-0"></i>Control Manual Etc.</li>
                    </ul>
                </div>
            </div>

            <!-- Image Section -->
            <div class="col-lg-5">
                <div class="pr-lg-4 position-relative">
                    <div class="bg-white text-center rounded-custom overflow-hidden p-lg-5 p-4 mx-lg-auto shadow-sm">
                        <img src="{{ asset('uploads/img/erp/tea.jpg') }}" 
                            alt="Tea Estate Management System" 
                            class="img-fluid rounded-custom">
                        <small><i>Tea Estate Management System</i></small>
                        <div class="position-absolute bg-secondary-dark z--1 dot-mask dm-size-16 dm-wh-350 top--40 left--40 top-left"></div>
                    </div>
                </div>
            </div>

            <!-- Conclusion -->
            <div class="col-lg-12 mt-5">
                <p class="text-muted fw-semibold">
                    Our <strong>Tea Estate Management System</strong> offers a comprehensive digital solution for plantation operations. 
                    By integrating workforce management, financial tracking, and inventory control into a single platform, it enables tea estates to operate more efficiently, 
                    improve transparency, and maximize productivity in today’s competitive agriculture sector.
                </p>
            </div>

        </div>
    </div>
</section>

@endsection