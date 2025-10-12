@extends('frontend.master')

@section('title')
  Services - Education Management System
@endsection

@section('content')
    <div>
        <!--page header section start-->
        <section class="bg-dark services-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12 heading-sec">
                        <h1 class="display-5 fw-bold">Education Management System</h1>
                        <p class="lead">We provide the complete solution of your business with the GATEWAY- ERP system.</p>
                    </div>
                </div>
            </div>
        </section>
        <!--page header section end-->
    </div>
     

    <!--Education Management System section start-->
    <section class="feature-section pt-60 pb-120">
        <div class="container">
            <div class="row align-items-lg-start justify-content-between">

                <!-- Full-width Intro Paragraph -->
                <div class="col-lg-12 mb-5">
                    <p class="text-muted">
                        Our <strong>Education Management System (EMS)</strong>, powered by <strong>GATEWAY-ERP</strong>, is an all-in-one platform designed to simplify and automate academic as well as administrative processes. 
                        From student admissions to financial management, the system provides a centralized solution that enhances efficiency, transparency, and communication across institutions.
                    </p>
                    <p class="text-muted">
                        With <strong>digital attendance tracking</strong> for students, teachers, and employees, institutions can easily monitor participation and ensure accountability. 
                        The platform also supports <strong>online classes, assignments, and examinations</strong>, making it a perfect fit for both traditional and modern e-learning environments.
                    </p>
                    <p class="text-muted">
                        Financial operations are fully integrated, including <strong>student fee management, salary disbursement for staff, and comprehensive accounts tracking</strong>. 
                        Additionally, the system offers powerful <strong>notification tools (SMS/Email)</strong> to keep students, teachers, and parents updated in real time. 
                        It also includes <strong>library management and grading systems</strong> to streamline essential academic workflows.
                    </p>
                    <p class="text-muted">
                        Whether for schools, colleges, or universities, our EMS ensures that administrators, teachers, and students benefit from a <strong>seamless, organized, and future-ready platform</strong>. 
                        By reducing paperwork, improving data accuracy, and enabling quick access to information, it helps institutions stay ahead in today’s fast-evolving education sector.
                    </p>
                </div>

                <!-- Content List -->
                <div class="col-lg-6 mb-7 mb-lg-0">
                    <div class="feature-tab-info">
                        <ul class="list-unstyled mb-0">
                            <li><i class="fad fa-check-circle m-0"></i>Students Admission</li>
                            <li><i class="fad fa-check-circle m-0"></i>Students / Teachers / Employee Attendance</li>
                            <li><i class="fad fa-check-circle m-0"></i>Online Class Management</li>
                            <li><i class="fad fa-check-circle m-0"></i>Online Examination System</li>
                            <li><i class="fad fa-check-circle m-0"></i>Online Assignment Submission</li>
                            <li><i class="fad fa-check-circle m-0"></i>Students Fee Management</li>
                            <li><i class="fad fa-check-circle m-0"></i>Examination Grading System</li>
                            <li><i class="fad fa-check-circle m-0"></i>Notification Management (SMS / Email)</li>
                            <li><i class="fad fa-check-circle m-0"></i>Teachers / Employee Salary Management</li>
                            <li><i class="fad fa-check-circle m-0"></i>Library Management System</li>
                            <li><i class="fad fa-check-circle m-0"></i>Accounts & Financial Management</li>
                        </ul>
                    </div>
                </div>

                <!-- Image Section -->
                <div class="col-lg-6">
                    <div class="pr-lg-4 position-relative">
                        <div class="bg-light text-center rounded-custom overflow-hidden p-lg-5 p-4 mx-lg-auto">
                            <img src="{{ asset('uploads/img/erp/education.jpg') }}" 
                                alt="Education Management System" 
                                class="img-fluid rounded-custom shadow-sm">
                            <small><i>Education Management System</i></small>
                            <div class="position-absolute bg-secondary-dark z--1 dot-mask dm-size-16 dm-wh-350 top--40 left--40 top-left"></div>
                        </div>
                    </div>
                </div>

                <!-- Conclusion -->
                <div class="col-lg-12 mt-5">
                    <p class="text-muted fw-semibold">
                        Adopting our <strong>Education Management System</strong> empowers educational institutions to embrace digital transformation, improve efficiency, and enhance learning experiences. 
                        With its blend of academic, financial, and communication tools, it creates a unified ecosystem that supports administrators, teachers, students, and parents alike—ensuring long-term success in the education sector.
                    </p>
                </div>

            </div>
        </div>
    </section>
    <!--Education Management System section end-->

@endsection