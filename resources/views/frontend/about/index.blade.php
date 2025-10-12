@extends('frontend.master')

@section('title')
  About Us
@endsection

@section('content')
    <div>
        <!--page header section start-->
        <section class="bg-dark about-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12 heading-sec">
                        <h1 class="display-5 fw-bold page-heading-img-txt" data-aos="fade-up" data-aos-delay="100">About us</h1>
                        <p class="nunito-sans-300 lead" data-aos="fade-up" data-aos-delay="200">
                            Welcome to the forefront of innovation in the ICT sector. Introducing Gateway Automation Ltd, 
                            a trailblazer in software solutions and IT-enabled services.
                        </p>
                    </div>
                </div>
                {{-- <div class="bg-circle rounded-circle circle-shape-3 position-absolute bg-dark-light right-5"></div> --}}
            </div>
        </section>
        <!--page header section end-->

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 mission-vision">
                        <ul class="list-unstyled mt-5">
                            <li class="d-flex align-items-start mb-4" data-aos="fade-right" data-aos-delay="300">
                                <div class="icon-box me-4">
                                    <img src="{{asset('frontend/assets/img/icon/mission.png')}}" width="50"/>
                                </div>
                                <div class="icon-content">
                                    <h3 class="h5 nunito-sans-700" style="color: rgb(34, 36, 39)">Our Mission</h3>
                                    <p class="nunito-sans-300" style="font-size: 1.1rem">
                                        Our mission is to empower businesses by fully digitizing every aspect of their operations, 
                                        streamlining processes, and enhancing efficiency. Driven by the spirit of "Made in Bangladesh," 
                                        we are committed to delivering innovative and reliable technology solutions that help organizations 
                                        achieve their goals, optimize performance, and embrace the future of digital transformation with confidence.
                                    </p>
                                </div>
                            </li>
                            <li class="d-flex align-items-start mb-4" data-aos="fade-right" data-aos-delay="400">
                                <div class="icon-box me-4">
                                    <img src="{{asset('frontend/assets/img/icon/vision.png')}}" width="50"/>
                                </div>
                                <div class="icon-content">
                                    <h3 class="h5 nunito-sans-700" style="color: rgb(34, 36, 39)">Our Vision</h3>
                                    <p class="nunito-sans-300"style="font-size: 1.1rem">
                                        Our vision is to become the leading partner for businesses seeking seamless and innovative technology solutions. 
                                        We aim to provide the perfect blend of efficiency, reliability, and cutting-edge digital tools, enabling organizations 
                                        to thrive, grow sustainably, and achieve their full potential in an increasingly competitive and technology-driven world.
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Why Choose Us Section -->
        <section class="value-proposition-section py-5 bg-dark text-white">
            <div class="container">
                <div class="row justify-content-center text-center mb-5">
                    <div class="col-lg-8 col-md-10">
                        <h2 class="fw-bold mb-3 nunito-sans-700" data-aos="fade-up" data-aos-delay="100">Why Choose Us</h2>
                        <p class="nunito-sans-300 lead" data-aos="fade-up" data-aos-delay="200">
                            Discover what makes <strong>Gateway Automation Ltd</strong> the trusted choice for businesses embracing digital transformation.
                        </p>
                    </div>
                </div>
                <div class="row g-4">
                    <!-- Card 1 -->
                    <div class="col-md-6 col-lg-3" data-aos="flip-left" data-aos-delay="300">
                        <div class="value-card text-center p-4 h-100">
                            <div class="icon-circle mb-3 mx-auto">
                                <i class="fas fa-cogs fa-2x text-white"></i>
                            </div>
                            <h5 class="fw-bold m-2 nunito-sans-700" style="color: rgb(223, 223, 223)">Proven ERP Expertise</h5>
                            <p class="mb-0 nunito-sans-300">Decades of excellence in delivering scalable ERP systems tailored to your industry.</p>
                        </div>
                    </div>
                    <!-- Card 2 -->
                    <div class="col-md-6 col-lg-3" data-aos="flip-left" data-aos-delay="400">
                        <div class="value-card text-center p-4 h-100">
                            <div class="icon-circle mb-3 mx-auto">
                                <i class="fas fa-tools fa-2x text-white"></i>
                            </div>
                            <h5 class="fw-bold m-2 nunito-sans-700" style="color: rgb(223, 223, 223)">Customized Solutions</h5>
                            <p class="mb-0 nunito-sans-300">Solutions designed specifically for Bangladeshi businesses and their unique challenges.</p>
                        </div>
                    </div>
                    <!-- Card 3 -->
                    <div class="col-md-6 col-lg-3" data-aos="flip-left" data-aos-delay="500">
                        <div class="value-card text-center p-4 h-100">
                            <div class="icon-circle mb-3 mx-auto">
                                <i class="fas fa-calendar-alt fa-2x text-white"></i>
                            </div>
                            <h5 class="fw-bold m-2 nunito-sans-700" style="color: rgb(223, 223, 223)">20+ Years Experience</h5>
                            <p class="mb-0 nunito-sans-300">Backed by two decades of proven success in ICT and business process automation.</p>
                        </div>
                    </div>
                    <!-- Card 4 -->
                    <div class="col-md-6 col-lg-3" data-aos="flip-left" data-aos-delay="600">
                        <div class="value-card text-center p-4 h-100">
                            <div class="icon-circle mb-3 mx-auto">
                                <i class="fas fa-headset fa-2x text-white"></i>
                            </div>
                            <h5 class="fw-bold m-2 nunito-sans-700" style="color: rgb(223, 223, 223)">Dedicated Support</h5>
                            <p class="mb-0 nunito-sans-300">A reliable team that ensures your systems run smoothly, always by your side.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        


        <!-- Mission & Vision -->
        <section class="feature-section-two ptb-120 bg-light">
            <div class="container">
                <div class="row align-items-center justify-content-center">

                    <div class="col-lg-12 col-md-12">
                        <div class="section-heading">
                            <h2 class="nunito-sans-700" data-aos="fade-up" data-aos-delay="100" style="color: rgb(34, 36, 39)">Our Story</h2>

                            <p class="nunito-sans-300" style="font-size: 1.1rem" data-aos="fade-left" data-aos-delay="100">
                                Gateway Automation Ltd is a distinguished private limited company at the forefront of the Information and Communication Technology (ICT) sector, 
                                specializing in providing comprehensive software and IT-enabled services (ITES). Our primary focus is on 
                                <strong>Enterprise Resource Planning (ERP)</strong> management systems, designed to streamline, automate, and enhance business processes across various industries. 
                                Our journey is driven by a clear inspiration — the desire to simplify technology — and a core strength rooted in integrity, transparency, and a commitment to excellence.
                            </p>

                            <p class="nunito-sans-300" style="font-size: 1.1rem" data-aos="fade-right" data-aos-delay="100">
                                With over two decades of experience in ICT and business process management, Gateway Automation Ltd has continuously evolved to address the dynamic needs of modern enterprises. 
                                We leverage deep domain expertise and technological innovation to deliver solutions that are not only functional but also scalable, adaptable, and tailored to the unique requirements of each client. 
                                Our ERP systems are purpose-built to support diverse business operations, including Real Estate & Property Management, Trading, Supply Chain Management, Manufacturing, and more.
                            </p>

                            <p class="nunito-sans-300" style="font-size: 1.1rem" data-aos="fade-left" data-aos-delay="100">
                                Understanding that every business — whether large-scale or small-scale — has its unique challenges, we offer specialized solutions such as our top-tier 
                                Account & Finance Management System and Human Resource Management System. These platforms are seamlessly integrated, enabling organizations to enhance operational efficiency, 
                                reduce redundancies, and gain actionable insights. Central to our service philosophy is the customization of ERP applications, which allows businesses to automate critical processes 
                                while maintaining full control and visibility through a centralized database consolidating inputs from departments such as Human Resources, Finance, Inventory, Manufacturing, Sales, and Marketing.
                            </p>

                            <p class="nunito-sans-300" data-aos="fade-right" data-aos-delay="100">
                                The GATEWAY-ERP system embodies our commitment to delivering end-to-end solutions for all business needs. By combining automation, real-time insights, and intuitive design, 
                                we empower organizations to optimize performance, improve decision-making, and drive sustainable growth. Our key offerings include:
                            </p>

                            <ul>
                                <li class="nunito-sans-300" style="font-size: 1.1rem" data-aos="fade-up" data-aos-delay="100">Account & Finance Management System</li>
                                <li class="nunito-sans-300" style="font-size: 1.1rem" data-aos="fade-up" data-aos-delay="150">Human Resource Management System</li>
                                <li class="nunito-sans-300" style="font-size: 1.1rem" data-aos="fade-up" data-aos-delay="200">Administration Management System</li>
                                <li class="nunito-sans-300" style="font-size: 1.1rem" data-aos="fade-up" data-aos-delay="250">Architectural & Engineering Management System</li>
                                <li class="nunito-sans-300" style="font-size: 1.1rem" data-aos="fade-up" data-aos-delay="300">Customer Service & Registration Management System</li>
                                <li class="nunito-sans-300" style="font-size: 1.1rem" data-aos="fade-up" data-aos-delay="350">Logistics Management System</li>
                                <li class="nunito-sans-300" style="font-size: 1.1rem" data-aos="fade-up" data-aos-delay="400">Property Development & Procurement Management System</li>
                                <li class="nunito-sans-300" style="font-size: 1.1rem" data-aos="fade-up" data-aos-delay="450">Sales & Telesales Management System</li> 
                                <li class="nunito-sans-300" style="font-size: 1.1rem" data-aos="fade-up" data-aos-delay="500">Procurement & Inventory Management System</li>
                                <li class="nunito-sans-300" style="font-size: 1.1rem" data-aos="fade-up" data-aos-delay="550">Design Service Management System</li>
                                <li class="nunito-sans-300" style="font-size: 1.1rem" data-aos="fade-up" data-aos-delay="600">Vehicle Management System</li>
                                <li class="nunito-sans-300" style="font-size: 1.1rem" data-aos="fade-up" data-aos-delay="650">System Administration</li>
                                <li class="nunito-sans-300" style="font-size: 1.1rem" data-aos="fade-up" data-aos-delay="700">Education Management System</li>
                                <li class="nunito-sans-300" style="font-size: 1.1rem" data-aos="fade-up" data-aos-delay="750">Tea Estate Management System</li>
                                <li class="nunito-sans-300" style="font-size: 1.1rem" data-aos="fade-up" data-aos-delay="800">Mobile App & Website Design and Development</li>
                                <li class="nunito-sans-300" style="font-size: 1.1rem" data-aos="fade-up" data-aos-delay="850">ICT Services</li>
                            </ul>

                            <p class="nunito-sans-300" style="font-size: 1.1rem" data-aos="fade-left" data-aos-delay="100">
                                Beyond providing robust ERP solutions, Gateway Automation Ltd adopts a holistic approach to business technology. 
                                We offer value-added services such as Mobile App & Website development, ICT consulting, and technical support 
                                to ensure that businesses can thrive in a digital-first environment. By integrating innovation, reliability, and industry best practices, 
                                we position ourselves as a trusted partner in guiding organizations through the complexities of automation and digital transformation.
                            </p>

                            <p class="nunito-sans-300" style="font-size: 1.1rem" data-aos="fade-right" data-aos-delay="100">
                                At Gateway Automation Ltd, our story is one of dedication, expertise, and a relentless pursuit of technological excellence. 
                                We are committed to helping businesses achieve their goals, unlock their full potential, and navigate the ever-changing landscape of the ICT world with confidence and clarity.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
    </div>
@endsection
