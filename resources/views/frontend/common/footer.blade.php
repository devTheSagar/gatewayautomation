        <!--footer section start-->
        <footer class="footer-section text-white position-relative">
            <!--footer top start-->
            <div class="footer-top ptb-75" style="background: #0B163F; position: relative; overflow: hidden;">
                <div class="container">
                    <div class="row justify-content-between">
                        <!-- Logo & Description -->
                        <div class="col-md-8 col-lg-3 mb-5 mb-lg-0">
                            <div class="footer-single-col">
                                <a href="{{ route('home') }}" class="d-block mb-3">
                                    <img src="{{asset('frontend/assets/img/logo-white.png')}}" alt="logo" class="img-fluid logo-white" width="150">
                                </a>
                                <p class="text-muted nunito-sans-400">Gateway Automation Ltd is a private limited company, specializing in ERP management systems, software & ITES support.</p>
                                <img src="{{asset('frontend/assets/img/gr-code.jpeg')}}" class="img-fluid mt-3" style="border:3px solid #ffffff" width="150" alt="QR Code">
                                {{-- brochure download button  --}}
                                <div class="d-flex align-items-center mt-3">
                                    <i class="bi bi-download me-2" aria-hidden="true"></i>
                                    <a href="{{ asset('frontend/assets/img/brochure/Gateway_Brochure.pdf') }}" class="footer-link m-0" download="Gateway_Brochure.pdf">
                                        <i><b>Download Brochure</b></i>
                                    </a>
                                </div>
                            </div>
                            <div class="mt-4">
                                <h5 class="footer-title mt-3 mb-0">Uselful Links</h5>
                                <ul class="list-unstyled footer-nav-list mb-0 row">
                                    <div class="col-6 nunito-sans-100">
                                        <li><a href="{{ route('payment') }}" class="footer-link">Online Payment</a></li>
                                    </div>
                                </ul>
                            </div>
                        </div>

                        <!-- Services Links -->
                        <div class="col-md-5 mt-lg-3 col-lg-5 mb-4 mb-md-0">
                            <h5 class="footer-title mb-3">Services</h5>
                            <ul class="list-unstyled footer-nav-list mb-0 row">
                                <div class="col-6 nunito-sans-100">
                                    <li><a href="{{ route('service.account-and-finance') }}" class="footer-link">Account & Finance Management System</a></li>
                                    <li><a href="{{ route('service.hr-and-payroll') }}" class="footer-link">HR Administration & Payroll</a></li>
                                    <li><a href="{{ route('service.real-estate-and-property') }}" class="footer-link">Real Estate & Property</a></li>
                                    <li><a href="{{ route('service.trading-business') }}" class="footer-link">Trading Business</a></li>
                                    <li><a href="{{ route('service.supply-chain-management') }}" class="footer-link">Supply Chain Management</a></li>
                                    <li><a href="{{ route('service.mobile-management-service') }}" class="footer-link">Mobile Phone Management System</a></li>
                                    <li><a href="{{ route('service.procurement-inventory') }}" class="footer-link">Procurement & Inventory Management System</a></li>
                                    <li><a href="{{ route('service.vehicle-management') }}" class="footer-link">Vehicle Management System</a></li>
                                    <li><a href="{{ route('service.softwate-development') }}" class="footer-link">Software Development</a></li>
                                    <li><a href="{{ route('training-consultancy') }}" class="footer-link">Training & Consultancy</a></li>
                                </div>
                                <div class="col-6">
                                    <li><a href="{{ route('service.manufacturing') }}" class="footer-link">Manufacturing</a></li>
                                    <li><a href="{{ route('service.education-management') }}" class="footer-link">Education Management</a></li>
                                    <li><a href="{{ route('service.tea-estate-management') }}" class="footer-link">Tea Estate Management</a></li>
                                    <li><a href="{{ route('service.app-website') }}" class="footer-link">Mobile App & Website</a></li>
                                    <li><a href="{{ route('service.customer-service') }}" class="footer-link">Customer Service & Registration</a></li>
                                    <li><a href="{{ route('service.architectural-eng') }}" class="footer-link">Architectural & Engineering Management System</a></li>
                                    <li><a href="{{ route('service.sales-telesales') }}" class="footer-link">Sales & Telesales Management System</a></li>
                                    <li><a href="{{ route('service.ites-support') }}" class="footer-link">ITES Support</a></li>
                                    <li><a href="{{ route('service.cloud-hosting') }}" class="footer-link">Cloud Hosting</a></li>
                                </div>
                            </ul>
                        </div>

                        <!-- Contact Info -->
                        <div class="col-md-6 mt-lg-3 col-lg-3 mb-4 mb-md-0">
                            <h5 class="footer-title mb-3" style="font-size: 1.25rem;">Contact</h5>
                            <p class="text-muted mb-2 nunito-sans-500" style="font-size: 1rem;"><strong>TNT:</strong> +8802 41022561</p>
                            <p class="text-muted mb-2 nunito-sans-500" style="font-size: 1rem;"><strong>Hotline:</strong> +880 1324 258751</p>
                            <p class="text-muted mb-3 contact-address" style="font-size: 0.95rem; line-height: 1.6;">
                                <strong>Address:</strong> Flat# E8, House# 3/43/A, Nirban Shantikunja, Sharakunja,
                                Sultanganj, Rayer Bazar, Dhaka-1209, Bangladesh
                            </p>

                            <!-- BASIS Member Section -->
                            <div class="d-flex flex-column align-items-start gap-2 mt-3">
                                <small class="text-muted nunito-sans-900">Member of BASIS</small>
                                <div class="basis-logo-wrapper">
                                    <img src="{{ asset('frontend/assets/img/basis.png') }}" class="img-fluid" width="120" alt="BASIS Logo">
                                </div>
                            </div>

                            <!-- Social Buttons under BASIS logo -->
                            <div class="mt-5">
                                <h4 class="footer-title mb-3">Follow Us</h4>
                                <ul class="list-unstyled list-inline mb-0 footer-social-list">
                                    <li class="list-inline-item"><a target="_blank" href="https://www.facebook.com/erpgateway" class="social-link"><i class="fab fa-facebook-f"></i></a></li>
                                    <li class="list-inline-item"><a target="_blank" href="https://www.instagram.com/gatewayautomationltd/" class="social-link"><i class="fab fa-instagram"></i></a></li>
                                    <li class="list-inline-item"><a target="_blank" href="https://twitter.com/GatewayAutomat1" class="social-link"><i class="fab fa-twitter"></i></a></li>
                                    <li class="list-inline-item"><a target="_blank" href="https://www.linkedin.com/in/gateway-automation-ltd-ab2156210" class="social-link"><i class="fab fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--footer top end-->

            <!--footer bottom start-->
            <div class="footer-bottom py-1" style="background: #050c25;">
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-md-12 col-lg-12 text-center">
                            <p class="mb-0 text-muted">&copy; {{ date('Y') }} Gateway Automation Limited. All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--footer bottom end-->
        </footer>


        <!--footer section end-->

    </div>
    <a href="#" onclick="topFunction()" id="back-to-top" class="back-to-top fs-5">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z"/>
        </svg>
    </a>



    <!--build:js-->
    <script src="{{asset('frontend/assets/js/vendors/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/vendors/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/vendors/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/vendors/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/vendors/parallax.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/vendors/aos.js')}}"></script>
    <script src="{{asset('frontend/assets/js/app.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <script>
        // Get the button
        let mybutton = document.getElementById("back-to-top");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    <!--endbuild-->




    {{-- for galleries light box effect or zoom effect  --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const lightboxImage = document.getElementById('lightboxImage');
            const lightboxVideo = document.getElementById('lightboxVideo');
            const galleryCards = document.querySelectorAll('.gallery-card');
            const modal = document.getElementById('lightboxModal');

            // Reset modal on close
            modal.addEventListener('hidden.bs.modal', function() {
                lightboxImage.src = '';
                lightboxImage.classList.add('d-none');
                lightboxVideo.pause();
                lightboxVideo.querySelector('source').src = '';
                lightboxVideo.load();
                lightboxVideo.classList.add('d-none');
            });

            // Open media in modal
            galleryCards.forEach(card => {
                card.addEventListener('click', function() {
                    const src = this.getAttribute('data-img');
                    const type = this.getAttribute('data-type') || 'image';

                    if (type === 'video') {
                        lightboxImage.classList.add('d-none');
                        lightboxVideo.classList.remove('d-none');
                        lightboxVideo.querySelector('source').src = src;
                        lightboxVideo.load();
                        lightboxVideo.play();
                    } else {
                        lightboxVideo.classList.add('d-none');
                        lightboxImage.classList.remove('d-none');
                        lightboxImage.src = src;
                    }
                });
            });
        });
    </script>




    {{-- particle js integration  --}}
    <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
    <script>
        particlesJS("particles-js", {
            "particles": {
                "number": { "value": 60 },
                "size": { "value": 3 },
                "color": { "value": "#ffffff" },
                "opacity": { "value": 0.5 },
                "line_linked": { "enable": true, "distance": 150, "color": "#ffffff", "opacity": 0.3, "width": 1 },
                "move": { "enable": true, "speed": 0.5 }
            },
            "interactivity": {
                "events": {
                    "onhover": { "enable": true, "mode": "repulse" },
                    "onclick": { "enable": true, "mode": "push" }
                }
            }
        });
    </script>





    <!-- AOS CSS -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <!-- AOS JS -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

    <script>
        AOS.init({
            duration: 1000,   // animation duration in ms
            once: true,      // animate every scroll
            mirror: false      // animate on scroll up as well
        });
    </script>






    




    {{-- mobile view dropdown toggle functionality --}}
    <script>
    document.querySelectorAll('.offcanvas .dropdown-toggle').forEach(toggle => {
        toggle.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation(); // <-- prevent Bootstrap auto-close

            const parentLi = this.parentElement;
            const dropdownMenu = parentLi.querySelector('.dropdown-menu');

            this.classList.toggle('collapsed');
            parentLi.classList.toggle('show');

            dropdownMenu.style.display =
                dropdownMenu.style.display === "flex" ? "none" : "flex";
        });
    });
    </script>




    {{-- splider integration for testimonial section  --}}
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var splide = new Splide('#mts-slider', {
                type: 'loop',
                autoplay: true,
                interval: 5000,
                pauseOnHover: true,
                arrows: false, // disable default
                pagination: false,
                gap: '2rem',
                perPage: 1,
                breakpoints: { 768: { perPage: 1 }, 1024: { perPage: 2 } },
            });

            splide.mount();

            // Bind custom arrows AFTER mount
            document.getElementById('mts-prev').addEventListener('click', function() {
                splide.go('<');
            });
            document.getElementById('mts-next').addEventListener('click', function() {
                splide.go('>');
            });

            // Progress bar
            var progressBar = document.querySelector('.mts-progress-bar');
            splide.on('mounted move', function () {
                var totalSlides = splide.Components.Controller.getEnd() + 1;
                var rate = Math.min((splide.index + 1) / totalSlides, 1);
                progressBar.style.width = (rate * 100) + '%';
            });
        });
    </script>


    {{-- @livewireScripts --}}
    @stack('scripts')
</body>

</html>