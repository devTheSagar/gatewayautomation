@extends('frontend.master')

@section('title')
  Services - Cloud Hosting
@endsection

@section('content')
    <div>
        <!--page header section start-->
        <section class="bg-dark services-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12 heading-sec">
                        <h1 class="display-5 fw-bold">Cloud Hosting Services</h1>
                        <p class="lead">Reliable, scalable, and secure cloud hosting solutions to power your business applications with maximum uptime.</p>
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
                        Our <strong>Cloud Hosting Services</strong> provide businesses with highly available, secure, and scalable infrastructure to run mission-critical applications. 
                        With modern cloud platforms, we deliver hosting solutions that adapt to your needs—ensuring performance, reliability, and cost-efficiency.
                    </p>
                    <p class="text-muted">
                        Whether you require <strong>dedicated cloud servers, virtual private hosting, managed cloud services, or hybrid solutions</strong>, we help you deploy and manage resources seamlessly. 
                        Our experts ensure continuous monitoring, automated backups, and strong security for your cloud environment.
                    </p>
                    <p class="text-muted">
                        By leveraging leading cloud technologies, our hosting solutions allow your business to grow without limitations while maintaining the highest levels of uptime and flexibility.
                    </p>
                </div>

                <!-- Features List -->
                <div class="col-lg-7 mb-7 mb-lg-0">
                    <div class="feature-tab-info">
                        <ul class="list-unstyled mb-0">
                            <li><i class="fad fa-check-circle m-0"></i>Scalable Cloud Infrastructure</li>
                            <li><i class="fad fa-check-circle m-0"></i>High Uptime & Reliability (99.9%)</li>
                            <li><i class="fad fa-check-circle m-0"></i>Managed Cloud Hosting</li>
                            <li><i class="fad fa-check-circle m-0"></i>Dedicated & Virtual Private Servers</li>
                            <li><i class="fad fa-check-circle m-0"></i>Hybrid & Multi-Cloud Solutions</li>
                            <li><i class="fad fa-check-circle m-0"></i>Automated Backups & Disaster Recovery</li>
                            <li><i class="fad fa-check-circle m-0"></i>Secure Data Protection & Encryption</li>
                            <li><i class="fad fa-check-circle m-0"></i>Application & Database Hosting</li>
                            <li><i class="fad fa-check-circle m-0"></i>Performance Optimization & Monitoring</li>
                            <li><i class="fad fa-check-circle m-0"></i>24/7 Technical Support</li>
                        </ul>
                    </div>
                </div>

                <!-- Image Section -->
                <div class="col-lg-5">
                    <div class="pr-lg-4 position-relative">
                        <div class="bg-white text-center rounded-custom overflow-hidden p-lg-5 p-4 mx-lg-auto shadow-sm">
                            <img src="{{ asset('uploads/img/erp/cloud-hosting.jpg') }}" 
                                alt="Cloud Hosting Services" 
                                class="img-fluid rounded-custom">
                            <small><i>Cloud Hosting</i></small>
                            <div class="position-absolute bg-secondary-dark z--1 dot-mask dm-size-16 dm-wh-350 top--40 left--40 top-left"></div>
                        </div>
                    </div>
                </div>

                <!-- Conclusion -->
                <div class="col-lg-12 mt-5">
                    <p class="text-muted fw-semibold">
                        With our <strong>Cloud Hosting Services</strong>, your business benefits from reliable performance, flexible scaling, and enterprise-grade security. 
                        We provide the cloud foundation that helps organizations innovate faster, reduce infrastructure costs, and deliver seamless digital experiences.
                    </p>
                </div>

            </div>
        </div>
    </section>
@endsection
