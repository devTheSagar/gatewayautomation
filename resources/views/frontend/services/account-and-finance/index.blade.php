@extends('frontend.master')

@section('title')
  Services - Account & Finance Management System
@endsection

@section('content')
    <div>
        <!--page header section start-->
        <section class="bg-dark services-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12 heading-sec">
                        <h1 class="display-5 fw-bold page-heading-img-txt" data-aos="fade-up" data-aos-delay="100" style="line-height:3rem">Account & Finance Management System</h1>
                        <p class="nunito-sans-300 lead" data-aos="fade-up" data-aos-delay="200">We provide the complete solution of your business with the GATEWAY- ERP system.</p>
                    </div>
                </div>
            </div>
        </section>
        <!--page header section end-->
    </div>
    <!-- Account & Finance Management Section Start -->
    
    <section class="feature-section pt-60 pb-120 nunito-sans-300" style="font-size: 1.2rem">
        <div class="container">
            <div class="row align-items-lg-start justify-content-between">

                <!-- Full-width Intro Paragraph -->
                <div class="col-lg-12 mb-5">
                    {{-- <h2 class="text-center mb-4" style="color: rgb(34, 36, 39)">
                        Account & Finance Management System
                    </h2> --}}
                    <p class="text-muted" data-aos="fade-right" data-aos-delay="100">
                        Our <strong>Account & Finance Management System</strong>, powered by <strong>GATEWAY-ERP</strong>, is a complete solution designed to streamline and optimize your business finances. 
                        From day-to-day transactions to detailed financial reporting, it provides organizations with a robust, secure, and flexible platform to manage all accounting operations efficiently.
                    </p>
                    <p class="text-muted" data-aos="fade-left" data-aos-delay="100">
                        The system helps businesses organize accounts with a <strong>flexible Chart of Accounts</strong>, manage cash flow and bank accounts, automate voucher entries, and track client cheques accurately. 
                        It also includes <strong>ledger management, asset tracking, and paperless accounting</strong> to save time and reduce errors.
                    </p>
                    <p class="text-muted" data-aos="fade-left" data-aos-delay="100">
                        Built for <strong>multi-company operations</strong> and <strong>flexible financial years</strong>, it adapts to organizations of any size. High-level security protocols protect every transaction, while a <strong>multi-level approval workflow</strong> ensures compliance with organizational policies.
                    </p>
                    <p class="text-muted" data-aos="fade-right" data-aos-delay="100">
                        With <strong>complete financial reporting capabilities</strong>—including Statements of Financial Position, Comprehensive Income, Cash Flows, and Notes—managers can make informed decisions, optimize resources, and plan for sustainable growth. 
                        The GATEWAY Account & Finance Management System is more than just an accounting tool; it is a <strong>comprehensive financial ecosystem</strong> that helps businesses operate efficiently, maintain transparency, and gain full control over financial operations.
                    </p>
                    
                </div>

                <!-- Content List -->
                <div class="col-lg-6 mb-7 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature-tab-info">
                        <ul class="list-unstyled mb-0">
                            <li style="font-size: 1.1rem"><i class="fad fa-check-circle m-0"></i>Flexible Classification of Chart of Accounts to suit any business structure</li>
                            <li style="font-size: 1.1rem"><i class="fad fa-check-circle m-0"></i>Complete Bank, Branch, and Account Management for easy tracking</li>
                            <li style="font-size: 1.1rem"><i class="fad fa-check-circle m-0"></i>Secure and efficient Cash & Bank Transfers across multiple accounts</li>
                            <li style="font-size: 1.1rem"><i class="fad fa-check-circle m-0"></i>Money Receipt Entry with options for quick cancellations</li>
                            <li style="font-size: 1.1rem"><i class="fad fa-check-circle m-0"></i>Client Cheque Deposit Tracking for accurate financial reconciliation</li>
                            <li style="font-size: 1.1rem"><i class="fad fa-check-circle m-0"></i>Automatic Voucher Entry for various departments to save time</li>
                            <li style="font-size: 1.1rem"><i class="fad fa-check-circle m-0"></i>Cheque Book Management and Printing directly from the system</li>
                            <li style="font-size: 1.1rem"><i class="fad fa-check-circle m-0"></i>Detailed Receivables & Payables management with aging analysis</li>
                            <li style="font-size: 1.1rem"><i class="fad fa-check-circle m-0"></i>Ledger Management for comprehensive account overview</li>
                            <li style="font-size: 1.1rem"><i class="fad fa-check-circle m-0"></i>Trail Balance Generation for accurate financial checks</li>
                            <li style="font-size: 1.1rem"><i class="fad fa-check-circle m-0"></i>Complete Financial Statements including Statement of Financial Position, Comprehensive Income, Cash Flows, and Notes</li>
                            <li style="font-size: 1.1rem"><i class="fad fa-check-circle m-0"></i>Asset Register for efficient tracking of company assets</li>
                            <li style="font-size: 1.1rem"><i class="fad fa-check-circle m-0"></i>Support for Multiple Companies under a single system</li>
                            <li style="font-size: 1.1rem"><i class="fad fa-check-circle m-0"></i>Flexible Financial Year Setup tailored to organizational requirements</li>
                            <li style="font-size: 1.1rem"><i class="fad fa-check-circle m-0"></i>Paperless Accounting to reduce manual errors and save time</li>
                            <li style="font-size: 1.1rem"><i class="fad fa-check-circle m-0"></i>High Security Protocols for each transaction to prevent unauthorized access</li>
                            <li style="font-size: 1.1rem"><i class="fad fa-check-circle m-0"></i>Multi-Level Approval System to enforce organizational compliance and controls</li>
                            <li style="font-size: 1.1rem"><i class="fad fa-check-circle m-0"></i>Customizable Features to adapt to your company’s specific accounting needs</li>
                        </ul>
                    </div>
                </div>

                <!-- Image Section -->
                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
                    <div class="pr-lg-4 position-relative">
                        <div class="bg-light text-center rounded-custom overflow-hidden p-lg-5 p-4 mx-lg-auto">
                            <img src="{{ asset('uploads/img/erp/afm.jpg') }}" 
                                alt="Account & Finance Management System" 
                                class="img-fluid rounded-custom shadow-sm">
                                <small><i>Account & Finance Management</i></small>
                            <div class="position-absolute bg-secondary-dark z--1 dot-mask dm-size-16 dm-wh-350 bottom--40 right--40 bottom-right"></div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 mt-5" data-aos="fade-up" data-aos-delay="200">
                    <p class="text-muted fw-semibold">
                        Adopting our <strong>Account & Finance Management System</strong> ensures your organization stays financially agile, compliant, and well-informed. 
                        By integrating advanced automation, security, and reporting features, it empowers your team to focus on strategic growth while leaving financial management in a reliable, streamlined system.
                    </p>
                </div>

            </div>
        </div>
    </section>
    <!-- Account & Finance Management Section End -->

@endsection