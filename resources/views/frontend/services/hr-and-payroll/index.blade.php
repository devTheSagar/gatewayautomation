@extends('frontend.master')

@section('title')
  Services - Hr & Payroll Management
@endsection

@section('content')
    <div>
        <!--page header section start-->
        <section class="bg-dark services-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12 heading-sec">
                        <h1 class="display-5 fw-bold">Human Resource Administration & Payroll Management</h1>
                        <p class="lead">We provide the complete solution of your business with the GATEWAY- ERP system.</p>
                    </div>
                </div>
            </div>
        </section>
        <!--page header section end-->
    </div>
    <!-- Human Resource Administration & Payroll Management Section Start -->
    <section class="feature-section pt-60 pb-120 bg-light">
        <div class="container">
            <div class="row align-items-lg-start justify-content-between">

                <!-- Full-width Intro Paragraph -->
                <div class="col-lg-12 mb-5">
                    <h2 class="text-center mb-4" style="color: rgb(34, 36, 39)">
                        Human Resource Administration & Payroll Management
                    </h2>
                    <p class="text-muted">
                        Our <strong>Human Resource Administration & Payroll Management System</strong> is a complete solution for managing your workforce efficiently. 
                        Designed for organizations of all sizes, it centralizes employee information, attendance, payroll, and other HR operations in a secure and streamlined platform.
                    </p>
                    <p class="text-muted">
                        From official records to personal employee data, skill tracking, and professional references, the system allows HR teams to maintain comprehensive employee profiles. 
                        Daily attendance, leave management, salary generation, and bonus calculation are automated to reduce errors and improve accuracy.
                    </p>
                    <p class="text-muted">
                        The system also supports advanced features such as mobile phone management, vehicle allocation, fuel allowance tracking, company gate passes, and security staff scheduling. 
                        It ensures seamless communication, workflow efficiency, and adherence to company policies.
                    </p>
                </div>

                <!-- Content List -->
                <div class="col-lg-6 mb-7 mb-lg-0">
                    <div class="feature-tab-info">
                        <ul class="list-unstyled mb-0">
                            <li><i class="fad fa-check-circle m-0"></i>Comprehensive Employee Information (Official, Benefits, Personal, Previous Employment, Academic, Skills, Professional Memberships, References, Separation, Transfers, Disciplinary Actions)</li>
                            <li><i class="fad fa-check-circle m-0"></i>Employee Daily Attendance Analysis</li>
                            <li><i class="fad fa-check-circle m-0"></i>Employee Monthly Salary Generation</li>
                            <li><i class="fad fa-check-circle m-0"></i>Bonus and Advance Salary Calculation</li>
                            <li><i class="fad fa-check-circle m-0"></i>Mobile Calling Information Management</li>
                            <li><i class="fad fa-check-circle m-0"></i>Company Gate Pass Issuance</li>
                            <li><i class="fad fa-check-circle m-0"></i>Vehicle Management System</li>
                            <li><i class="fad fa-check-circle m-0"></i>Mobile Phone Management (Set, SIM, Monthly Bills, etc.)</li>
                            <li><i class="fad fa-check-circle m-0"></i>Employee Fuel Allowance Entry</li>
                            <li><i class="fad fa-check-circle m-0"></i>Security Employee Information Management</li>
                            <li><i class="fad fa-check-circle m-0"></i>Security Employees Job Scheduling</li>
                            <li><i class="fad fa-check-circle m-0"></i>Security Bill Entry and Tracking</li>
                        </ul>
                    </div>
                </div>


                <div class="col-lg-6">
                    <div class="pr-lg-4 position-relative">
                        <div class="bg-light text-center rounded-custom overflow-hidden p-lg-5 p-4 mx-lg-auto">
                            <img src="{{ asset('uploads/img/erp/hr.jpg') }}" 
                                alt="Employee Management System" 
                                class="img-fluid rounded-custom shadow-sm">
                                <small><i>Employee Management</i></small>
                            <div class="position-absolute bg-secondary-dark z--1 dot-mask dm-size-16 dm-wh-350 bottom--40 right--40 bottom-right"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="pr-lg-4 position-relative">
                        <div class="bg-light text-center rounded-custom overflow-hidden p-lg-5 p-4 mx-lg-auto">
                            <img src="{{ asset('uploads/img/erp/hr-attendence.jpg') }}" 
                                alt="Attendence Management System" 
                                class="img-fluid rounded-custom shadow-sm">
                                <small><i>Attendence Management</i></small>
                            <div class="position-absolute bg-secondary-dark z--1 dot-mask dm-size-16 dm-wh-350 bottom--40 right--40 bottom-right"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="pr-lg-4 position-relative">
                        <div class="bg-light text-center rounded-custom overflow-hidden p-lg-5 p-4 mx-lg-auto">
                            <img src="{{ asset('uploads/img/erp/hr-salary.jpg') }}" 
                                alt="Salary Management System" 
                                class="img-fluid rounded-custom shadow-sm">
                                <small><i>Salary Management</i></small>
                            <div class="position-absolute bg-secondary-dark z--1 dot-mask dm-size-16 dm-wh-350 bottom--40 right--40 bottom-right"></div>
                        </div>
                    </div>
                </div>

                <!-- Conclusion -->
                <div class="col-lg-12 mt-5">
                    <p class="text-muted fw-semibold">
                        Our <strong>Human Resource Administration & Payroll Management System</strong> empowers organizations to manage their workforce efficiently, ensure timely salary and bonus processing, and maintain accurate employee records. 
                        By integrating advanced HR features, attendance tracking, and payroll automation, it enables HR teams to focus on employee development, compliance, and strategic growth, while minimizing administrative overhead.
                    </p>
                </div>

            </div>
        </div>
    </section>
    <!-- Human Resource Administration & Payroll Management Section End -->

@endsection