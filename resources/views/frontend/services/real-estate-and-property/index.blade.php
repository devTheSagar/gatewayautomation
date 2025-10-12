@extends('frontend.master')

@section('title')
  Services - Real Estate & Property Management
@endsection

@section('content')
    <div>
        <!--page header section start-->
        <section class="bg-dark services-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12 heading-sec">
                        <h1 class="display-5 fw-bold">Real Estate & Property Management</h1>
                        <p class="lead">We provide the complete solution of your business with the GATEWAY- ERP system.</p>
                    </div>
                </div>
            </div>
        </section>
        <!--page header section end-->
    </div>

    <!--feature section start-->
    <section class="feature-section ptb-75 bg-light">
        <div class="container">
            <div class="row align-items-lg-start justify-content-between">

                <!-- Full-width Intro Paragraph -->
                <div class="col-lg-12 mb-5">
                    <h2 class="text-center mb-4" style="color: rgb(34, 36, 39)">
                        Human Resource Administration & Payroll Management
                    </h2>
                    <p class="text-muted">
                        Our Human Resource Administration & Payroll Management system provides a complete solution for managing employee data, attendance, payroll, and HR operations efficiently. 
                        From official records to performance tracking, it streamlines all HR processes and ensures compliance with company policies.
                    </p>
                </div>

                <!-- Content List -->
                <div class="col-lg-5 order-lg-2 mb-7 mb-lg-0">
                    <div class="feature-tab-info">
                        <ul class="list-unstyled mb-0">
                            <li><i class="fad fa-check-circle m-0"></i>Employee Daily Attendance Analysis</li>
                            <li><i class="fad fa-check-circle m-0"></i>Employee Monthly Salary Generation</li>
                            <li><i class="fad fa-check-circle m-0"></i>Bonus Calculation</li>
                            <li><i class="fad fa-check-circle m-0"></i>Advance Salary and Bonus Generation</li>
                            <li><i class="fad fa-check-circle m-0"></i>Mobile Calling Information</li>
                            <li><i class="fad fa-check-circle m-0"></i>Company Gate Pass</li>
                            <li><i class="fad fa-check-circle m-0"></i>Vehicle Management System</li>
                            <li><i class="fad fa-check-circle m-0"></i>Mobile Phone Management System (Set, SIM, Monthly Bills, etc.)</li>
                            <li><i class="fad fa-check-circle m-0"></i>Employee Fuel Allowance Entry</li>
                            <li><i class="fad fa-check-circle m-0"></i>Security Employee Information</li>
                            <li><i class="fad fa-check-circle m-0"></i>Security Employees Job Schedule</li>
                            <li><i class="fad fa-check-circle m-0"></i>Security Bill Entry</li>
                        </ul>
                    </div>
                </div>

                <!-- Image Section -->
                <div class="col-lg-6 order-lg-1">
                    <div class="pr-lg-4 mt-md-4 position-relative">
                        <div class="bg-light text-center rounded-custom overflow-hidden p-lg-5 p-4 mx-lg-auto">
                            <img src="{{ asset('uploads/img/erp/hr.jpg') }}" 
                                alt="HR Management System" 
                                class="img-fluid shadow-sm rounded-custom">
                            <small class="mt-5"><i>HR Admin & Payroll Management</i></small>
                            <div class="position-absolute bg-secondary-dark z--1 dot-mask dm-size-16 dm-wh-350 top--40 left--40 top-left"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--feature section end-->

    <!--feature section start-->
    <section class="feature-section pt-60 pb-120">
        <div class="container">
            <div class="row align-items-lg-start justify-content-between">

                <!-- Full-width Intro Paragraph -->
                <div class="col-lg-12 mb-5">
                    <h2 class="text-center mb-4" style="color: rgb(34, 36, 39)">
                        Account & Finance Management System
                    </h2>
                    <p class="text-muted">
                        Our <strong>Account & Finance Management System</strong> provides a complete financial management solution for your organization. 
                        From daily cash handling and bank transactions to detailed financial reporting, this system ensures accuracy, efficiency, and full control over your accounting operations.
                    </p>
                    <p class="text-muted">
                        Designed for businesses of any size, it offers flexible account classifications, multi-company support, and paperless accounting. 
                        Secure protocols and multi-level approval workflows ensure compliance while giving your team the ability to manage finances confidently.
                    </p>
                </div>

                <!-- Content List -->
                <div class="col-lg-6 mb-7 mb-lg-0">
                    <div class="feature-tab-info">
                        <ul class="list-unstyled mb-0">
                            <li><i class="fad fa-check-circle m-0"></i>Flexible Classification of Chart of Accounts to suit any business structure</li>
                            <li><i class="fad fa-check-circle m-0"></i>Bank, Branch & Account Information Management</li>
                            <li><i class="fad fa-check-circle m-0"></i>Cash and Bank Transfers across accounts securely</li>
                            <li><i class="fad fa-check-circle m-0"></i>Money Receipt Entry and quick Cancellation options</li>
                            <li><i class="fad fa-check-circle m-0"></i>Client Cheque Deposit Tracking</li>
                            <li><i class="fad fa-check-circle m-0"></i>Automatic Voucher Entry for different departments</li>
                            <li><i class="fad fa-check-circle m-0"></i>Cheque Book Management & Printing</li>
                            <li><i class="fad fa-check-circle m-0"></i>Receivables & Payables with Aging Analysis</li>
                            <li><i class="fad fa-check-circle m-0"></i>Ledger Management for comprehensive account overview</li>
                            <li><i class="fad fa-check-circle m-0"></i>Trail Balance Generation</li>
                            <li><i class="fad fa-check-circle m-0"></i>Complete Financial Statements (Position, Comprehensive Income, Cash Flows, Notes)</li>
                            <li><i class="fad fa-check-circle m-0"></i>Asset Register for efficient tracking of company assets</li>
                            <li><i class="fad fa-check-circle m-0"></i>Support for Multiple Companies</li>
                            <li><i class="fad fa-check-circle m-0"></i>Flexible Financial Year Setup</li>
                            <li><i class="fad fa-check-circle m-0"></i>Paperless Accounting to reduce errors and save time</li>
                            <li><i class="fad fa-check-circle m-0"></i>High Security for every transaction</li>
                            <li><i class="fad fa-check-circle m-0"></i>Multi-Level Approval System as per organizational requirements</li>
                            <li><i class="fad fa-check-circle m-0"></i>Customizable features for your business needs</li>
                        </ul>
                    </div>
                </div>

                <!-- Image Section -->
                <div class="col-lg-6">
                    <div class="pr-lg-4 position-relative">
                        <div class="bg-light text-center rounded-custom overflow-hidden p-lg-5 p-4 mx-lg-auto">
                            <img src="{{ asset('uploads/img/erp/afm.jpg') }}" 
                                alt="Account & Finance Management System" 
                                class="img-fluid rounded-custom shadow-sm">
                            <small class="mt-5"><i>Account & Finance Management</i></small>
                            <div class="position-absolute bg-secondary-dark z--1 dot-mask dm-size-16 dm-wh-350 bottom--40 right--40 bottom-right"></div>
                        </div>
                    </div>
                </div>

                <!-- Conclusion -->
                <div class="col-lg-12 mt-5">
                    <p class="text-muted fw-semibold">
                        Adopting our <strong>Account & Finance Management System</strong> ensures financial accuracy, security, and efficiency for your organization. 
                        With automation, advanced reporting, and multi-level approvals, your team can focus on strategic growth while the system manages the financial operations seamlessly.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <!--feature section end-->

    <!--feature section start-->
    <section class="feature-section ptb-120 bg-light">
        <div class="container">
            <div class="row align-items-lg-start justify-content-between">

                <!-- Full-width Intro Paragraph -->
                <div class="col-lg-12 mb-5">
                    <h2 class="text-center mb-4" style="color: rgb(34, 36, 39)">
                        Sales & Tele Sales Management
                    </h2>
                    <p class="text-muted">
                        Our <strong>Sales & Tele Sales Management</strong> module is designed to streamline your sales operations, enhance team productivity, and ensure accurate tracking of prospects, projects, and payments. 
                        From forming your sales team to monitoring client interactions, this system provides complete control over your sales process.
                    </p>
                    <p class="text-muted">
                        With tools for tracking sales calls, following up on leads, managing payment schedules, and analyzing performance via dashboards, your sales team can work efficiently while management gets a clear overview of operations.
                        The system also handles document uploads, fund declarations, and target management to keep all activities organized and compliant.
                    </p>
                </div>

                <!-- Image Section -->
                <div class="col-lg-6">
                    <div class="pr-lg-4 position-relative">
                        <div class="bg-light text-center rounded-custom overflow-hidden p-lg-5 p-4 mx-lg-auto">
                            <img src="{{ asset('uploads/img/erp/tele-sales.jpg') }}" 
                                alt="Sales & Tele Sales Management" 
                                class="img-fluid shadow-sm rounded-custom">
                            <small class="mt-5"><i>Sales & Tele Sales Management</i></small>
                            <div class="position-absolute bg-secondary-dark z--1 dot-mask dm-size-16 dm-wh-350 top--40 left--40 top-left"></div>
                        </div>
                    </div>
                </div>

                <!-- Content List -->
                <div class="col-lg-6 mb-7 mb-lg-0">
                    <div class="feature-tab-info">
                        <ul class="list-unstyled mb-0">
                            <li><i class="fad fa-check-circle m-0"></i>Sales Team Formation</li>
                            <li><i class="fad fa-check-circle m-0"></i>Prospect Information & Search</li>
                            <li><i class="fad fa-check-circle m-0"></i>Sales Call Due List Follow-up & Review</li>
                            <li><i class="fad fa-check-circle m-0"></i>View Sold Status of a Project</li>
                            <li><i class="fad fa-check-circle m-0"></i>Payment Schedule & Reschedule</li>
                            <li><i class="fad fa-check-circle m-0"></i>List of Price Proposals to Customers</li>
                            <li><i class="fad fa-check-circle m-0"></i>Payment Schedule Approval</li>
                            <li><i class="fad fa-check-circle m-0"></i>Allotment Permanent and Document Upload</li>
                            <li><i class="fad fa-check-circle m-0"></i>Source of Fund Declaration by Client</li>
                            <li><i class="fad fa-check-circle m-0"></i>Sales Target Information</li>
                            <li><i class="fad fa-check-circle m-0"></i>Marketing Document Upload & Download</li>
                            <li><i class="fad fa-check-circle m-0"></i>Dashboard for Management Analysis of Sales</li>
                            <li><i class="fad fa-check-circle m-0"></i>Discussion Dashboard</li>
                        </ul>
                    </div>
                </div>

                <!-- Conclusion -->
                <div class="col-lg-12 mt-5">
                    <p class="text-muted fw-semibold">
                        Our <strong>Sales & Tele Sales Management</strong> system empowers your team to efficiently manage leads, follow-ups, and sales operations. 
                        By combining automation, real-time dashboards, and document management, it ensures your sales process is structured, transparent, and optimized for maximum results.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <!--feature section end-->

    <!--feature section start-->
    <section class="feature-section pt-60 pb-120">
        <div class="container">
            <div class="row align-items-lg-start justify-content-between">

                <!-- Full-width Intro Paragraph -->
                <div class="col-lg-12 mb-5">
                    <h2 class="text-center mb-4" style="color: rgb(34, 36, 39)">
                        Procurement & Inventory Management
                    </h2>
                    <p class="text-muted">
                        Our <strong>Procurement & Inventory Management</strong> module is designed to streamline the entire supply chain and inventory process. 
                        From requisitions to material receiving and stock tracking, the system ensures accurate, timely, and efficient handling of all procurement operations.
                    </p>
                    <p class="text-muted">
                        With comprehensive tools for managing purchase orders, supplier information, material receiving reports, and inventory ledgers, businesses can optimize procurement decisions, reduce errors, and maintain full visibility over stock movements.
                        Advanced reporting features allow for rate comparisons, analysis, and monitoring of material transfers across departments or locations.
                    </p>
                </div>

                <!-- Content List -->
                <div class="col-lg-6 mb-7 mb-lg-0">
                    <div class="feature-tab-info">
                        <ul class="list-unstyled mb-0">
                            <li><i class="fad fa-check-circle m-0"></i>MPR Received</li>
                            <li><i class="fad fa-check-circle m-0"></i>Purchase Order</li>
                            <li><i class="fad fa-check-circle m-0"></i>Supplier Challan Information</li>
                            <li><i class="fad fa-check-circle m-0"></i>Material Receiving Report</li>
                            <li><i class="fad fa-check-circle m-0"></i>MRR Top Sheet</li>
                            <li><i class="fad fa-check-circle m-0"></i>Material Transfer Requisition Form</li>
                            <li><i class="fad fa-check-circle m-0"></i>MTRF Top Sheet</li>
                            <li><i class="fad fa-check-circle m-0"></i>Store Ledger Management</li>
                            <li><i class="fad fa-check-circle m-0"></i>Store Requisition</li>
                            <li><i class="fad fa-check-circle m-0"></i>Material Transfer Note</li>
                            <li><i class="fad fa-check-circle m-0"></i>Rate Comparisons and Analysis</li>
                        </ul>
                    </div>
                </div>

                <!-- Image Section -->
                <div class="col-lg-6">
                    <div class="pr-lg-4 position-relative">
                        <div class="bg-light text-center rounded-custom overflow-hidden p-lg-5 p-4 mx-lg-auto">
                            <img src="{{ asset('uploads/img/erp/procurement.jpg') }}" 
                                alt="Procurement & Inventory Management" 
                                class="img-fluid rounded-custom shadow-sm">
                            <small class="mt-5"><i>Procurement & Inventory Management</i></small>
                            <div class="position-absolute bg-secondary-dark z--1 dot-mask dm-size-16 dm-wh-350 bottom--40 right--40 bottom-right"></div>
                        </div>
                    </div>
                </div>

                <!-- Conclusion -->
                <div class="col-lg-12 mt-5">
                    <p class="text-muted fw-semibold">
                        Our <strong>Procurement & Inventory Management</strong> system empowers organizations to manage their procurement and inventory processes efficiently. 
                        By combining automation, detailed reporting, and real-time tracking, it ensures smooth supply chain operations, reduces errors, and improves decision-making for a well-organized and cost-effective workflow.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <!--feature section end-->

    <!--feature section start-->
    <section class="feature-section pt-60 pb-120">
        <div class="container">
            <div class="row align-items-lg-start justify-content-between">

                <!-- Full-width Intro Paragraph -->
                <div class="col-lg-12 mb-5">
                    <h2 class="text-center mb-4" style="color: rgb(34, 36, 39)">
                        Properties Development System
                    </h2>
                    <p class="text-muted">
                        Our <strong>Properties Development System</strong> provides a complete solution for managing real estate projects efficiently. 
                        From land acquisition to apartment planning, cost analysis, and project management, this system is designed to streamline every aspect of property development.
                    </p>
                    <p class="text-muted">
                        The system allows easy entry and follow-up of land information, calculation of FAR and project costs, management of agreements with legal documents, and detailed project planning. 
                        It also supports apartment area calculation, car parking allocation, and management analysis for informed decision-making.
                    </p>
                </div>

                <!-- Image Section -->
                <div class="col-lg-6">
                    <div class="pr-lg-4 position-relative">
                        <div class="bg-light text-center rounded-custom overflow-hidden p-lg-5 p-4 mx-lg-auto">
                            <img src="{{ asset('uploads/img/erp/properties.jpg') }}" 
                                alt="Properties Development System" 
                                class="img-fluid rounded-custom shadow-sm">
                            <small class="mt-5"><i>Properties Development System</i></small>
                            <div class="position-absolute bg-secondary-dark z--1 dot-mask dm-size-16 dm-wh-350 top--40 left--40 top-left"></div>
                        </div>
                    </div>
                </div>
                
                <!-- Content List -->
                <div class="col-lg-6 mb-7 mb-lg-0">
                    <div class="feature-tab-info">
                        <ul class="list-unstyled mb-0">
                            <li><i class="fad fa-check-circle m-0"></i>Land Information Entry and Follow-up</li>
                            <li><i class="fad fa-check-circle m-0"></i>FAR and Project Costing Calculation</li>
                            <li><i class="fad fa-check-circle m-0"></i>Agreement Information with LO</li>
                            <li><i class="fad fa-check-circle m-0"></i>Project Planning & Car Parking Selection</li>
                            <li><i class="fad fa-check-circle m-0"></i>Apartment Area Calculation and Analysis</li>
                            <li><i class="fad fa-check-circle m-0"></i>Management Analysis</li>
                        </ul>
                    </div>
                </div>

                <!-- Conclusion -->
                <div class="col-lg-12 mt-5">
                    <p class="text-muted fw-semibold">
                        The <strong>Properties Development System</strong> enables organizations to manage real estate projects with full transparency and control. 
                        By automating calculations, tracking land and apartment data, and providing detailed project analysis, it helps developers make informed decisions and efficiently manage all phases of property development.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <!--feature section end-->

    <!--feature section start-->
    <section class="feature-section pt-60 pb-120">
        <div class="container">
            <div class="row align-items-lg-start justify-content-between">

                <!-- Full-width Intro Paragraph -->
                <div class="col-lg-12 mb-5">
                    <h2 class="text-center mb-4" style="color: rgb(34, 36, 39)">
                        Architectural and Engineering Design Management
                    </h2>
                    <p class="text-muted">
                        Our <strong>Architectural and Engineering Design Management System</strong> provides a robust solution for managing all aspects of project design and engineering workflows. 
                        From issuing various letters to tracking work orders and weekly project updates, the system ensures every stage of design management is organized, transparent, and efficient.
                    </p>
                    <p class="text-muted">
                        This system enables seamless tracking of design movements, follow-ups, and updates, along with the ability to view project distribution charts. 
                        It also supports apartment area calculations, tentative cost abstracts, and consultant bill entries with approval workflows, ensuring compliance and accuracy in project execution.
                    </p>
                </div>

                <!-- Content List -->
                <div class="col-lg-6 mb-7 mb-lg-0">
                    <div class="feature-tab-info">
                        <ul class="list-unstyled mb-0">
                            <li><i class="fad fa-check-circle m-0"></i>Issue Different Types of Letters</li>
                            <li><i class="fad fa-check-circle m-0"></i>Work Order Generation and Approval System</li>
                            <li><i class="fad fa-check-circle m-0"></i>Weekly Project Working Status Update</li>
                            <li><i class="fad fa-check-circle m-0"></i>Design Movement, Follow-up & Update</li>
                            <li><i class="fad fa-check-circle m-0"></i>View Distribution Chart of Project</li>
                            <li><i class="fad fa-check-circle m-0"></i>Apartment Area Calculation and Approval</li>
                            <li><i class="fad fa-check-circle m-0"></i>Abstract of Tentative Cost</li>
                            <li><i class="fad fa-check-circle m-0"></i>Consultant Bill Entry and Approval</li>
                        </ul>
                    </div>
                </div>

                <!-- Image Section -->
                <div class="col-lg-6">
                    <div class="pr-lg-4 position-relative">
                        <div class="bg-light text-center rounded-custom overflow-hidden p-lg-5 p-4 mx-lg-auto">
                            <img src="{{ asset('uploads/img/erp/logistics.jpg') }}" 
                                alt="Architectural and Engineering Design Management" 
                                class="img-fluid rounded-custom shadow-sm">
                            <small class="mt-5"><i>Architectural & Engineering Design Management</i></small>
                            <div class="position-absolute bg-secondary-dark z--1 dot-mask dm-size-16 dm-wh-350 bottom--40 right--40 bottom-right"></div>
                        </div>
                    </div>
                </div>

                <!-- Conclusion -->
                <div class="col-lg-12 mt-5">
                    <p class="text-muted fw-semibold">
                        The <strong>Architectural and Engineering Design Management System</strong> empowers organizations to efficiently handle all design and engineering tasks. 
                        By providing structured workflows, real-time updates, and approval mechanisms, it ensures projects progress smoothly, costs are tracked accurately, and quality standards are maintained.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!--feature section end-->

    <!--feature section start-->
    <section class="feature-section pt-60 pb-120">
        <div class="container">
            <div class="row align-items-lg-start justify-content-between">

                <!-- Full-width Intro Paragraph -->
                <div class="col-lg-12 mb-5">
                    <h2 class="text-center mb-4" style="color: rgb(34, 36, 39)">
                        Estimation and Material Controlling System
                    </h2>
                    <p class="text-muted">
                        The <strong>Estimation and Material Controlling System</strong> is designed to streamline and optimize your project estimation and material management processes. 
                        It provides a reliable platform to manage BOQ entries, maintain a comprehensive material database, and perform detailed feasibility analyses, ensuring projects are executed efficiently and within budget.
                    </p>
                    <p class="text-muted">
                        By integrating estimation and material control in one system, organizations can reduce errors, improve cost accuracy, and enhance resource planning. 
                        The system ensures that all materials and project requirements are tracked in real-time, supporting informed decision-making for project managers and stakeholders.
                    </p>
                </div>

                <!-- Image Section -->
                <div class="col-lg-6">
                    <div class="pr-lg-4 position-relative">
                        <div class="bg-light text-center rounded-custom overflow-hidden p-lg-5 p-4 mx-lg-auto">
                            <img src="{{ asset('uploads/img/erp/properties.jpg') }}" 
                                alt="Estimation and Material Controlling System" 
                                class="img-fluid rounded-custom shadow-sm">
                            <small class="mt-5"><i>Estimation & Material Controlling System</i></small>
                            <div class="position-absolute bg-secondary-dark z--1 dot-mask dm-size-16 dm-wh-350 top--40 left--40 top-left"></div>
                        </div>
                    </div>
                </div>

                <!-- Content List -->
                <div class="col-lg-6 mb-7 mb-lg-0">
                    <div class="feature-tab-info">
                        <ul class="list-unstyled mb-0">
                            <li><i class="fad fa-check-circle m-0"></i>BOQ Entry and Follow-up</li>
                            <li><i class="fad fa-check-circle m-0"></i>Comprehensive Material Database</li>
                            <li><i class="fad fa-check-circle m-0"></i>Feasibility Analysis for projects and materials</li>
                        </ul>
                    </div>
                </div>

                <!-- Conclusion -->
                <div class="col-lg-12 mt-5">
                    <p class="text-muted fw-semibold">
                        Adopting the <strong>Estimation and Material Controlling System</strong> empowers organizations to manage project estimations and materials efficiently, 
                        minimizing errors, improving cost control, and enabling precise resource planning. 
                        With real-time tracking and analysis, it provides a solid foundation for successful project execution and financial oversight.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <!--feature section end-->

    <!--feature section start-->
    <section class="feature-section pt-60 pb-120">
        <div class="container">
            <div class="row align-items-lg-start justify-content-between">

                <!-- Full-width Intro Paragraph -->
                <div class="col-lg-12 mb-5">
                    <h2 class="text-center mb-4" style="color: rgb(34, 36, 39)">
                        Logistic Management
                    </h2>
                    <p class="text-muted">
                        The <strong>Logistic Management System</strong> is a comprehensive solution designed to streamline logistics operations, cost management, and document tracking. 
                        It allows organizations to define area-wise land costs, tax rates, VAT, and transfer costs accurately, ensuring transparent and efficient management of all logistics-related processes.
                    </p>
                    <p class="text-muted">
                        With features like allotment registration, marketing document upload/download, service request handling, and registration/mutation cost approvals, the system provides complete control over logistics workflows. 
                        Real-time tracking and systematic approvals help improve decision-making and reduce operational delays.
                    </p>
                </div>

                <!-- Content List -->
                <div class="col-lg-6 mb-7 mb-lg-0">
                    <div class="feature-tab-info">
                        <ul class="list-unstyled mb-0">
                            <li><i class="fad fa-check-circle m-0"></i>Area Wise Land Cost Definition</li>
                            <li><i class="fad fa-check-circle m-0"></i>Area Wise Source Tax Rate Definition</li>
                            <li><i class="fad fa-check-circle m-0"></i>Area Wise VAT Rate Definition</li>
                            <li><i class="fad fa-check-circle m-0"></i>Area Wise Transfer Cost Definition</li>
                            <li><i class="fad fa-check-circle m-0"></i>Allotment Registration</li>
                            <li><i class="fad fa-check-circle m-0"></i>Marketing Document Upload and Download</li>
                            <li><i class="fad fa-check-circle m-0"></i>Service Request Handling</li>
                            <li><i class="fad fa-check-circle m-0"></i>Registration/Mutation Cost View</li>
                            <li><i class="fad fa-check-circle m-0"></i>Registration Cost Approval</li>
                        </ul>
                    </div>
                </div>

                <!-- Image Section -->
                <div class="col-lg-6">
                    <div class="pr-lg-4 position-relative">
                        <div class="bg-light text-center rounded-custom overflow-hidden p-lg-5 p-4 mx-lg-auto">
                            <img src="{{ asset('uploads/img/erp/logistics.jpg') }}" 
                                alt="Logistic Management System" 
                                class="img-fluid rounded-custom shadow-sm">
                            <small class="mt-5"><i>Logistic Management</i></small>
                            <div class="position-absolute bg-secondary-dark z--1 dot-mask dm-size-16 dm-wh-350 bottom--40 right--40 bottom-right"></div>
                        </div>
                    </div>
                </div>

                <!-- Conclusion -->
                <div class="col-lg-12 mt-5">
                    <p class="text-muted fw-semibold">
                        Our <strong>Logistic Management System</strong> enables organizations to manage logistics operations efficiently, maintain transparency in costs, and ensure timely approvals. 
                        It provides a centralized platform to track documents, regulate costs, and improve operational decision-making for enhanced productivity and control.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <!--feature section end-->

    <!--feature section start-->
    <section class="feature-section pt-60 pb-120">
        <div class="container">
            <div class="row align-items-lg-start justify-content-between">

                <!-- Full-width Intro Paragraph -->
                <div class="col-lg-12 mb-5">
                    <h2 class="text-center mb-4" style="color: rgb(34, 36, 39)">
                        Post Hand Over Service Management System
                    </h2>
                    <p class="text-muted">
                        The <strong>Post Hand Over Service Management System</strong> is designed to ensure smooth management and follow-up of projects after handover. 
                        It provides a structured approach to handling post-handover tasks, from utility bill tracking to collections and invoice generation, ensuring seamless operations.
                    </p>
                    <p class="text-muted">
                        With features like project personnel assignment, reminder letter issuance, money receipt management, and detailed management analysis, the system helps organizations maintain service quality, enhance client satisfaction, and ensure timely follow-ups for all post-handover activities.
                    </p>
                </div>

                 <!-- Image Section -->
                <div class="col-lg-6">
                    <div class="pr-lg-4 position-relative">
                        <div class="bg-light text-center rounded-custom overflow-hidden p-lg-5 p-4 mx-lg-auto">
                            <img src="{{ asset('uploads/img/erp/properties.jpg') }}" 
                                alt="Post Hand Over Service Management System" 
                                class="img-fluid rounded-custom shadow-sm">
                            <small class="mt-5"><i>Post Hand Over Service Management</i></small>
                            <div class="position-absolute bg-secondary-dark z--1 dot-mask dm-size-16 dm-wh-350 top--40 left--40 top-left"></div>
                        </div>
                    </div>
                </div>

                <!-- Content List -->
                <div class="col-lg-6 mb-7 mb-lg-0">
                    <div class="feature-tab-info">
                        <ul class="list-unstyled mb-0">
                            <li><i class="fad fa-check-circle m-0"></i>Project Personnel Assignment and Follow-up</li>
                            <li><i class="fad fa-check-circle m-0"></i>Issuance of Different Types of Reminder Letters</li>
                            <li><i class="fad fa-check-circle m-0"></i>Project-wise Utility Bill Entry</li>
                            <li><i class="fad fa-check-circle m-0"></i>Collection and Invoice Generation</li>
                            <li><i class="fad fa-check-circle m-0"></i>Issue Money Receipt</li>
                            <li><i class="fad fa-check-circle m-0"></i>Management Analysis</li>
                        </ul>
                    </div>
                </div>

               

                <!-- Conclusion -->
                <div class="col-lg-12 mt-5">
                    <p class="text-muted fw-semibold">
                        Our <strong>Post Hand Over Service Management System</strong> ensures that all post-handover activities are tracked, documented, and analyzed efficiently. 
                        It empowers teams to maintain service excellence, streamline collections, and provide timely follow-ups, thereby enhancing overall client satisfaction and operational efficiency.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <!--feature section end-->

    <!--feature section start-->
    <section class="feature-section pt-60 pb-120">
        <div class="container">
            <div class="row align-items-lg-start justify-content-between">

                <!-- Full-width Intro Paragraph -->
                <div class="col-lg-12 mb-5">
                    <h2 class="text-center mb-4" style="color: rgb(34, 36, 39)">
                        Customer Service and Registration Management System
                    </h2>
                    <p class="text-muted">
                        The <strong>Customer Service and Registration Management System</strong> is a comprehensive solution designed to streamline client interactions and project registration processes. 
                        It ensures accurate documentation, timely follow-ups, and seamless coordination between customer service and accounts teams.
                    </p>
                    <p class="text-muted">
                        With features including issuance of letters, invoices, client financing tracking, registration cost calculation, document management, and service request follow-ups, this system helps organizations maintain high-quality customer service and efficient project registration management.
                    </p>
                </div>

                <!-- Content List -->
                <div class="col-lg-6 mb-7 mb-lg-0">
                    <div class="feature-tab-info">
                        <ul class="list-unstyled mb-0">
                            <li><i class="fad fa-check-circle m-0"></i>Issuance of Different Types of Letters</li>
                            <li><i class="fad fa-check-circle m-0"></i>Invoice and Reminder Letter Generation</li>
                            <li><i class="fad fa-check-circle m-0"></i>Client Loan/Financing Information Management</li>
                            <li><i class="fad fa-check-circle m-0"></i>Collection Instruction to Accounts</li>
                            <li><i class="fad fa-check-circle m-0"></i>View Deed Value of Project Registration</li>
                            <li><i class="fad fa-check-circle m-0"></i>Registration Cost Calculation with Breakup</li>
                            <li><i class="fad fa-check-circle m-0"></i>Document Upload and Download</li>
                            <li><i class="fad fa-check-circle m-0"></i>Clearance for Registration</li>
                            <li><i class="fad fa-check-circle m-0"></i>Registration Documents Handover</li>
                            <li><i class="fad fa-check-circle m-0"></i>Service Request and Follow-up of Registration</li>
                            <li><i class="fad fa-check-circle m-0"></i>Follow Data Bank Prospect Information</li>
                        </ul>
                    </div>
                </div>

                <!-- Image Section -->
                <div class="col-lg-6">
                    <div class="pr-lg-4 position-relative">
                        <div class="bg-light text-center rounded-custom overflow-hidden p-lg-5 p-4 mx-lg-auto">
                            <img src="{{ asset('uploads/img/erp/customer-service.jpg') }}" 
                                alt="Customer Service and Registration Management System" 
                                class="img-fluid rounded-custom shadow-sm">
                            <small class="mt-5"><i>Customer Service & Registration Management</i></small>
                            <div class="position-absolute bg-secondary-dark z--1 dot-mask dm-size-16 dm-wh-350 bottom--40 right--40 bottom-right"></div>
                        </div>
                    </div>
                </div>

                <!-- Conclusion -->
                <div class="col-lg-12 mt-5">
                    <p class="text-muted fw-semibold">
                        Adopting <strong>Customer Service and Registration Management System</strong> ensures efficient handling of client requests and project registrations. 
                        By integrating document management, follow-ups, and financial coordination, it enables organizations to enhance customer satisfaction, maintain accurate records, and streamline all post-registration operations.
                    </p>
                </div>

            </div>
        </div>
    </section>
    <!--feature section end-->
@endsection