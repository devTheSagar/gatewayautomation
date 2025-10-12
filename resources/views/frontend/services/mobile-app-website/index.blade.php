@extends('frontend.master')

@section('title')
  Services - Mobile App & Website Design and Devolopment
@endsection

@section('content')
    <div>
        <!--page header section start-->
        <section class="bg-dark services-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12 heading-sec">
                        <h1 class="display-5 fw-bold">Mobile App & Website Design and Devolopment</h1>
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
                        Our <strong>Mobile App & Website Design and Development</strong> service empowers businesses to establish a strong digital presence with innovative, user-friendly, and scalable solutions. 
                        At <strong>GATEWAY</strong>, we combine modern technologies, creative design, and strategic development to deliver apps and websites that are not only visually appealing but also optimized for performance, security, and usability.
                    </p>
                    <p class="text-muted">
                        Whether you need a <strong>custom mobile application, responsive website, or integrated digital platform</strong>, our experienced team ensures seamless functionality across devices. 
                        From idea to launch, we focus on crafting solutions that align with your business goals while delivering an engaging experience for your users. 
                        With a customer-first approach, we integrate best practices in UI/UX design, SEO optimization, and cutting-edge frameworks to future-proof your digital platform.
                    </p>
                    <p class="text-muted">
                        We understand that every business is unique. That’s why our solutions are tailored, flexible, and built with scalability in mind, ensuring that as your business grows, your digital ecosystem grows with it.
                    </p>
                </div>

                <!-- Features List -->
                <div class="col-lg-7 mb-7 mb-lg-0">
                    <div class="feature-tab-info">
                        <ul class="list-unstyled mb-0">
                            <li><i class="fad fa-check-circle m-0"></i>Custom Mobile App Development (iOS & Android)</li>
                            <li><i class="fad fa-check-circle m-0"></i>Responsive Website Design & Development</li>
                            <li><i class="fad fa-check-circle m-0"></i>E-commerce Website & App Solutions</li>
                            <li><i class="fad fa-check-circle m-0"></i>UI/UX Design & Prototyping</li>
                            <li><i class="fad fa-check-circle m-0"></i>Content Management System (CMS) Integration</li>
                            <li><i class="fad fa-check-circle m-0"></i>API Development & Third-party Integration</li>
                            <li><i class="fad fa-check-circle m-0"></i>SEO-Friendly & Performance-Optimized Development</li>
                            <li><i class="fad fa-check-circle m-0"></i>Cross-Platform App Development</li>
                            <li><i class="fad fa-check-circle m-0"></i>Maintenance & Support Services</li>
                            <li><i class="fad fa-check-circle m-0"></i>Scalable & Secure Architecture</li>
                        </ul>
                    </div>
                </div>

                <!-- Image Section -->
                <div class="col-lg-5">
                    <div class="pr-lg-4 position-relative">
                        <div class="bg-white text-center rounded-custom overflow-hidden p-lg-5 p-4 mx-lg-auto shadow-sm">
                            <img src="{{ asset('uploads/img/erp/mobile-web.jpg') }}" 
                                alt="Mobile App & Website Design and Development" 
                                class="img-fluid rounded-custom">
                            <small><i>Mobile App & Website Design and Development</i></small>
                            <div class="position-absolute bg-secondary-dark z--1 dot-mask dm-size-16 dm-wh-350 top--40 left--40 top-left"></div>
                        </div>
                    </div>
                </div>

                <!-- Conclusion -->
                <div class="col-lg-12 mt-5">
                    <p class="text-muted fw-semibold">
                        Our <strong>Mobile App & Website Design and Development</strong> services provide businesses with a complete digital solution that is innovative, scalable, and results-driven. 
                        By combining creativity with technology, we help you reach your audience, build trust, and achieve sustainable growth in today’s fast-paced digital world.
                    </p>
                </div>

            </div>
        </div>
    </section>


@endsection