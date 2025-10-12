@extends('frontend.master')

@section('title')
  Contact
@endsection

@section('content')
    <div>
        <!--page header section start-->
        <section class="bg-dark contact-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 heading-sec">
                        <h1 class="display-5 fw-bold page-heading-img-txt" data-aos="fade-up" data-aos-delay="100">Contact Us</h1>
                        <p class="nunito-sans-300 lead" data-aos="fade-up" data-aos-delay="200">At Gateway, we’re always here to help. Reach out with questions, explore a partnership, or connect as an affiliate.</p>
                    </div>
                </div>
            </div>
        </section>
        <!--page header section end-->


        <!--contact us form start-->
        <section class="contact-us-form pt-60 pb-120" style="background: url('assets/img/shape/contact-us-bg.svg')no-repeat center bottom">
            <div class="container">
                <div class="row justify-content-lg-between align-items-start g-5">

                    <!-- Contact Info -->
                    <div class="col-lg-5 col-md-10 order-2 order-lg-1 mx-auto">

                        
                        <div class="text-center mb-5" data-aos="fade-up" data-aos-delay="100">
                            <a href="{{ asset('frontend/assets/img/brochure/Gateway_Brochure.pdf') }}" 
                            class="btn btn-primary" 
                            download="Gateway_Brochure.pdf">
                                <i class="fas fa-download me-2"></i> Download Brochure
                            </a>
                        </div>

    
                        <!-- Address -->
                        <div class="contact-us-promo p-4 mb-4 hover-card" data-aos="fade-up" data-aos-delay="300">
                            <div class="icon-wrapper mb-3">
                                <div class="icon-bg">
                                    <img src="{{asset('frontend/assets/img/icon/chat.png')}}" class="img-fluid" width="50" alt="Address Icon" />
                                </div>
                            </div>
                            <h5 class="card-title nunito-sans-300" style="color: rgb(75, 75, 75)">Address</h5>
                            <p class="card-text nunito-sans-300" style="font-size: 1.1rem">
                                Flat# E8, House# 3/43/A <br>
                                Nirban Shantikunja, Sharakunja, Sultanganj <br>
                                Rayer Bazar, Dhaka-1209, Bangladesh
                            </p>
                        </div>

                        <!-- Email -->
                        <div class="contact-us-promo p-4 mb-4 hover-card" data-aos="fade-up" data-aos-delay="400">
                            <div class="icon-wrapper mb-3">
                                <div class="icon-bg">
                                    <img src="{{asset('frontend/assets/img/icon/email.png')}}" class="img-fluid" width="50" alt="Email Icon" />
                                </div>
                            </div>
                            <h5 class="card-title nunito-sans-300" style="color: rgb(75, 75, 75)">Email Us</h5>
                            <p class="card-text nunito-sans-300" style="font-size: 1.1rem">
                                Drop us an email at <br>
                                <a href="mailto:info@gatewayautomations.com" style="font-size: 1.2rem">info@gatewayautomations.com</a>
                                <br> We usually respond within 24 hours.
                            </p>
                        </div>

                        <!-- Call -->
                        <div class="contact-us-promo p-4 hover-card" data-aos="fade-up" data-aos-delay="500">
                            <div class="icon-wrapper mb-3">
                                <div class="icon-bg">
                                    <img src="{{asset('frontend/assets/img/icon/call.png')}}" class="img-fluid" width="50" alt="Call Icon" />
                                </div>
                            </div>
                            <h5 class="card-title nunito-sans-300" style="color: rgb(75, 75, 75)">Call Us</h5>
                            <p class="card-text nunito-sans-300" style="font-size: 1.1rem">
                                Our experts are available <br>
                                <strong>Saturday – Thursday</strong><br>
                                <strong>10:00 AM – 6:00 PM (UTC)</strong>
                            </p>
                            <ul class="hotline list-unstyled text-center">
                                <li>
                                    <a href="tel:+880241022561" style="font-size: 1.1rem">TNT: <span>+8802 41022561</span></a>
                                </li>
                                <li>
                                    <a href="tel:+8801324258751" style="font-size: 1.1rem">Hotline: <span>+880 1324 258751</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>



                    <div class="col-lg-6 col-md-8 order-1 order-lg-2 mx-auto" id="contact-form-section" data-aos="fade-left" data-aos-delay="300">
                        <div class="section-heading mb-4 text-center text-lg-start">
                            <h2 class="fw-bold nunito-sans-800 form-heading" style="color: rgb(75, 75, 75)">Get in Touch</h2>
                            <p class="text-muted nunito-sans-300 form-subtitle" style="font-size: 1.1rem">
                                Have a question or query? Fill out the form below and our team will get back to you as soon as possible.
                            </p>
                        </div>

                        @if ($errors->any())
                            <script>
                                document.getElementById('contact-form-section').scrollIntoView({ behavior: 'smooth' });
                            </script>
                        @endif

                        <form action="{{ route('store.message') }}" method="POST" id="contact-form" class="contact-form p-4 bg-white rounded-4 shadow-lg">
                            @csrf
                            <div class="row g-4 mt-4">

                                <!-- Name -->
                                <div class="col-12">
                                    <label for="name" class="form-label fw-semibold" style="color: rgb(75, 75, 75)">Full Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control form-control-lg rounded-3 @error('name') is-invalid @enderror" value="{{ old('name') }}" name="name" placeholder="Enter your full name">
                                    @error('name')
                                        <div class="invalid-feedback"><small>{{ $message }}</small></div>
                                    @enderror
                                </div>

                                <!-- Phone -->
                                <div class="col-sm-6">
                                    <label for="phone" class="form-label fw-semibold" style="color: rgb(75, 75, 75)">Phone</label>
                                    <input type="number" class="form-control form-control-lg rounded-3 @error('phone') is-invalid @enderror" value="{{ old('phone') }}" name="phone" id="phone" placeholder="Enter your phone number">
                                    @error('phone')
                                        <div class="invalid-feedback"><small>{{ $message }}</small></div>
                                    @enderror
                                </div>

                                <!-- Email -->
                                <div class="col-sm-6">
                                    <label for="email" class="form-label fw-semibold" style="color: rgb(75, 75, 75)">Email <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control form-control-lg rounded-3 @error('email') is-invalid @enderror" value="{{ old('email') }}" name="email" id="email" placeholder="Enter your email address">
                                    @error('email')
                                        <div class="invalid-feedback"><small>{{ $message }}</small></div>
                                    @enderror
                                </div>

                                <!-- Message -->
                                <div class="col-12">
                                    <label for="message" class="form-label fw-semibold" style="color: rgb(75, 75, 75)">Message <span class="text-danger">*</span></label>
                                    <textarea class="form-control form-control-lg rounded-3 @error('message') is-invalid @enderror" name="message" id="message" placeholder="Write your message here..." rows="6">{{ old('message') }}</textarea>
                                    @error('message')
                                        <div class="invalid-feedback"><small>{{ $message }}</small></div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Submit -->
                            <div class="text-end mt-4">
                                <button type="submit" class="btn contact-submit-btn btn-gradient w-100 rounded-3 fw-semibold">
                                    Send Message
                                </button>
                            </div>
                        </form>
                    </div>

                </div>

            </div>
        </section>

        <section>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.0991293363095!2d90.36111540000002!3d23.7438442!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755bf4fb975aad9%3A0x6b510e18b71190fb!2zR2F0ZXdheSBBdXRvbWF0aW9uIEx0ZCAo4KaX4KeH4Kaf4KaT4Kef4KeHIOCmheCmn-Cni-CmruCnh-CmtuCmqCDgprLgpr8uKQ!5e0!3m2!1sen!2sbd!4v1662978772071!5m2!1sen!2sbd" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>
        <!--contact us form end-->
    </div>
@endsection