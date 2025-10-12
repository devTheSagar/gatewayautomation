@extends('frontend.master')

@section('title')
  Services - Software Development
@endsection

@section('content')
    <div>
        <!--page header section start-->
        <section class="bg-dark services-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12 heading-sec">
                        <h1 class="display-5 fw-bold">Software Development Services</h1>
                        <p class="lead">Custom-built software solutions to power innovation, efficiency, and business growth.</p>
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
                        Our <strong>Software Development Services</strong> empower businesses with cutting-edge digital solutions designed to meet unique needs and challenges. 
                        From web and mobile applications to enterprise systems, we deliver scalable, secure, and high-performing software tailored to your business goals.
                    </p>
                    <p class="text-muted">
                        Whether you need <strong>custom applications, ERP systems, SaaS products, or software integration</strong>, our expert developers and engineers use modern technologies and best practices to ensure robust performance and long-term value. 
                        We emphasize clean code, user-centric design, and agile delivery.
                    </p>
                    <p class="text-muted">
                        By leveraging innovative tools, cloud platforms, and automation, we help organizations transform ideas into powerful digital products that enhance efficiency, customer experience, and competitive advantage.
                    </p>
                </div>

                <!-- Features List -->
                <div class="col-lg-7 mb-7 mb-lg-0">
                    <div class="feature-tab-info">
                        <ul class="list-unstyled mb-0">
                            <li><i class="fad fa-check-circle m-0"></i>Custom Web Application Development</li>
                            <li><i class="fad fa-check-circle m-0"></i>Mobile App Development (iOS & Android)</li>
                            <li><i class="fad fa-check-circle m-0"></i>Enterprise Resource Planning (ERP) Solutions</li>
                            <li><i class="fad fa-check-circle m-0"></i>Software Maintenance & Support</li>
                            <li><i class="fad fa-check-circle m-0"></i>Cloud-Based Application Development</li>
                            <li><i class="fad fa-check-circle m-0"></i>SaaS Product Development</li>
                            <li><i class="fad fa-check-circle m-0"></i>API Development & System Integration</li>
                            <li><i class="fad fa-check-circle m-0"></i>UI/UX Design & Prototyping</li>
                            <li><i class="fad fa-check-circle m-0"></i>Automation & Workflow Optimization</li>
                            <li><i class="fad fa-check-circle m-0"></i>Custom CRM & CMS Solutions</li>
                        </ul>
                    </div>
                </div>

                <!-- Image Section -->
                <div class="col-lg-5">
                    <div class="pr-lg-4 position-relative">
                        <div class="bg-white text-center rounded-custom overflow-hidden p-lg-5 p-4 mx-lg-auto shadow-sm">
                            <img src="{{ asset('uploads/img/erp/software-development.jpg') }}" 
                                alt="Software Development Services" 
                                class="img-fluid rounded-custom">
                            <small><i>Software Development</i></small>
                            <div class="position-absolute bg-secondary-dark z--1 dot-mask dm-size-16 dm-wh-350 top--40 left--40 top-left"></div>
                        </div>
                    </div>
                </div>

                <!-- Conclusion -->
                <div class="col-lg-12 mt-5">
                    <p class="text-muted fw-semibold">
                        With our <strong>Software Development Services</strong>, your business gains future-ready solutions built for performance, scalability, and growth. 
                        By combining technical expertise, agile methodologies, and innovation, we deliver software that empowers organizations to thrive in the digital era.
                    </p>
                </div>

            </div>
        </div>
    </section>
@endsection
