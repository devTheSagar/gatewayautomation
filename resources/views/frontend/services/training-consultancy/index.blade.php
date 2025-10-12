@extends('frontend.master')

@section('title')
  Services - Training & Consultancy
@endsection

@section('content')
    <div>
        <!--page header section start-->
        <section class="bg-dark services-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12 heading-sec">
                        <h1 class="display-5 fw-bold">Training & Consultancy Services</h1>
                        <p class="lead">Empowering individuals and businesses with knowledge, skills, and expert guidance to thrive in the digital age.</p>
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
                        Our <strong>Training & Consultancy Services</strong> are designed to equip professionals and organizations with practical skills and strategic insights. 
                        From hands-on technical training to business process consultancy, we help bridge knowledge gaps and drive impactful transformation.
                    </p>
                    <p class="text-muted">
                        Whether you’re seeking <strong>IT training, professional workshops, or tailored consultancy</strong>, our expert team brings industry best practices and real-world experience to every engagement. 
                        We focus on both technical and organizational excellence to ensure sustainable growth.
                    </p>
                    <p class="text-muted">
                        By combining expert-led sessions, interactive learning, and customized consultancy, we enable businesses and individuals to stay ahead in a rapidly evolving digital landscape.
                    </p>
                </div>

                <!-- Features List -->
                <div class="col-lg-7 mb-7 mb-lg-0">
                    <div class="feature-tab-info">
                        <ul class="list-unstyled mb-0">
                            <li><i class="fad fa-check-circle m-0"></i>Corporate IT Training Programs</li>
                            <li><i class="fad fa-check-circle m-0"></i>Customized Technical Workshops</li>
                            <li><i class="fad fa-check-circle m-0"></i>Business & Process Consultancy</li>
                            <li><i class="fad fa-check-circle m-0"></i>Agile & Project Management Training</li>
                            <li><i class="fad fa-check-circle m-0"></i>ERP & Software Implementation Guidance</li>
                            <li><i class="fad fa-check-circle m-0"></i>Cloud & DevOps Consultancy</li>
                            <li><i class="fad fa-check-circle m-0"></i>Cybersecurity Awareness Training</li>
                            <li><i class="fad fa-check-circle m-0"></i>Career Development & Mentorship</li>
                            <li><i class="fad fa-check-circle m-0"></i>Workshops on Emerging Technologies (AI, IoT, Blockchain)</li>
                            <li><i class="fad fa-check-circle m-0"></i>Organizational Change Management</li>
                        </ul>
                    </div>
                </div>

                <!-- Image Section -->
                <div class="col-lg-5">
                    <div class="pr-lg-4 position-relative">
                        <div class="bg-white text-center rounded-custom overflow-hidden p-lg-5 p-4 mx-lg-auto shadow-sm">
                            <img src="{{ asset('uploads/img/erp/training-consultancy.jpg') }}" 
                                alt="Training & Consultancy Services" 
                                class="img-fluid rounded-custom">
                            <small><i>Training & Consultancy</i></small>
                            <div class="position-absolute bg-secondary-dark z--1 dot-mask dm-size-16 dm-wh-350 top--40 left--40 top-left"></div>
                        </div>
                    </div>
                </div>

                <!-- Conclusion -->
                <div class="col-lg-12 mt-5">
                    <p class="text-muted fw-semibold">
                        With our <strong>Training & Consultancy Services</strong>, we empower businesses and professionals with the right skills, strategies, and expert advice. 
                        From digital transformation to career growth, we provide the tools and insights to succeed in today’s competitive environment.
                    </p>
                </div>

            </div>
        </div>
    </section>
@endsection
