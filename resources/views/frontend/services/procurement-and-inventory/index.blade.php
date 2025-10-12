@extends('frontend.master')

@section('title')
  Services - Procurement & Inventory Management
@endsection

@section('content')
    <div>
        <!--page header section start-->
        <section class="bg-dark services-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12 heading-sec">
                        <h1 class="display-5 fw-bold">Procurement & Inventory Management</h1>
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
                        Our <strong>Procurement & Inventory Management</strong> services, powered by <strong>GATEWAY</strong>, help businesses optimize their purchasing operations and stock control to reduce costs and improve efficiency. 
                        From vendor management to inventory forecasting, our solutions ensure seamless supply chain operations.
                    </p>
                    <p class="text-muted">
                        Whether your organization deals with <strong>large-scale procurement, multi-location warehouses, or just-in-time inventory systems</strong>, our ERP-powered module provides accurate tracking, real-time updates, and automated workflows to minimize risks and prevent stockouts.
                    </p>
                    <p class="text-muted">
                        We focus on providing businesses with full visibility of their inventory and procurement cycle, ensuring smarter decision-making and improved supplier collaboration.
                    </p>
                </div>

                <!-- Features List -->
                <div class="col-lg-7 mb-7 mb-lg-0">
                    <div class="feature-tab-info">
                        <ul class="list-unstyled mb-0">
                            <li><i class="fad fa-check-circle m-0"></i>Streamlined procurement process and supplier management.</li>
                            <li><i class="fad fa-check-circle m-0"></i>Real-time inventory tracking and control.</li>
                            <li><i class="fad fa-check-circle m-0"></i>Improved accuracy in inventory forecasting and replenishment.</li>
                            <li><i class="fad fa-check-circle m-0"></i>Automated purchase orders and approvals.</li>
                            <li><i class="fad fa-check-circle m-0"></i>Integration with accounting and finance modules.</li>
                            <li><i class="fad fa-check-circle m-0"></i>Multi-warehouse and multi-location inventory support.</li>
                            <li><i class="fad fa-check-circle m-0"></i>Supplier performance monitoring and analytics.</li>
                            <li><i class="fad fa-check-circle m-0"></i>Barcode/RFID-based stock management.</li>
                            <li><i class="fad fa-check-circle m-0"></i>Automated reordering to prevent stockouts.</li>
                            <li><i class="fad fa-check-circle m-0"></i>Comprehensive audit trails for compliance.</li>
                        </ul>
                    </div>
                </div>

                <!-- Image Section -->
                <div class="col-lg-5">
                    <div class="pr-lg-4 position-relative">
                        <div class="bg-white text-center rounded-custom overflow-hidden p-lg-5 p-4 mx-lg-auto shadow-sm">
                            <img src="{{ asset('uploads/img/erp/procurement-inventory.jpg') }}" 
                                alt="Procurement & Inventory Management" 
                                class="img-fluid rounded-custom">
                            <small><i>Procurement & Inventory Management</i></small>
                            <div class="position-absolute bg-secondary-dark z--1 dot-mask dm-size-16 dm-wh-350 top--40 left--40 top-left"></div>
                        </div>
                    </div>
                </div>

                <!-- Conclusion -->
                <div class="col-lg-12 mt-5">
                    <p class="text-muted fw-semibold">
                        Our <strong>Procurement & Inventory Management</strong> solutions help businesses reduce wastage, improve supplier collaboration, and maintain an optimal balance of supply and demand. 
                        With automation, real-time data, and predictive analytics, organizations can achieve higher efficiency, cost savings, and complete control over their procurement and inventory processes.
                    </p>
                </div>

            </div>
        </div>
    </section>
@endsection
