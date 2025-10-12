<!--APP-SIDEBAR-->
            <div class="sticky">
                <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
                <div class="app-sidebar">
                    <div class="side-header">
                        <a class="header-brand1" href="index.html">
                            <img src="{{ asset('backend/assets/images/brand/logo.png') }}" class="header-brand-img desktop-logo" alt="logo">
                            <img src="{{ asset('backend/assets/images/brand/logo-1.png') }}" class="header-brand-img toggle-logo" alt="logo">
                            <img src="{{ asset('backend/assets/images/brand/logo-2.png') }}" class="header-brand-img light-logo" alt="logo">
                            <img src="{{ asset('backend/assets/images/brand/logo-3.png') }}" class="header-brand-img light-logo1" alt="logo">
                        </a><!-- LOGO -->
                    </div>
                    <div class="main-sidemenu">
                        <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg"
                                fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                            </svg>
                        </div>
                        <ul class="side-menu">
                            <li>
                                <h3>Menu</h3>
                            </li>
							<li class="slide">
								<a class="side-menu__item has-link" data-bs-toggle="slide" href="index.html">
									<svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M19.9794922,7.9521484l-6-5.2666016c-1.1339111-0.9902344-2.8250732-0.9902344-3.9589844,0l-6,5.2666016C3.3717041,8.5219116,2.9998169,9.3435669,3,10.2069702V19c0.0018311,1.6561279,1.3438721,2.9981689,3,3h2.5h7c0.0001831,0,0.0003662,0,0.0006104,0H18c1.6561279-0.0018311,2.9981689-1.3438721,3-3v-8.7930298C21.0001831,9.3435669,20.6282959,8.5219116,19.9794922,7.9521484z M15,21H9v-6c0.0014038-1.1040039,0.8959961-1.9985962,2-2h2c1.1040039,0.0014038,1.9985962,0.8959961,2,2V21z M20,19c-0.0014038,1.1040039-0.8959961,1.9985962-2,2h-2v-6c-0.0018311-1.6561279-1.3438721-2.9981689-3-3h-2c-1.6561279,0.0018311-2.9981689,1.3438721-3,3v6H6c-1.1040039-0.0014038-1.9985962-0.8959961-2-2v-8.7930298C3.9997559,9.6313477,4.2478027,9.0836182,4.6806641,8.7041016l6-5.2666016C11.0455933,3.1174927,11.5146484,2.9414673,12,2.9423828c0.4853516-0.0009155,0.9544067,0.1751099,1.3193359,0.4951172l6,5.2665405C19.7521973,9.0835571,20.0002441,9.6313477,20,10.2069702V19z"/></svg>
									<span class="side-menu__label">Dashboard</span>
								</a>
							</li>
                            <li>
                                <h3>Messages</h3>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item has-link" data-bs-toggle="slide" href="{{ route('admin.messages') }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                        <path d="M20.5,4h-17C2.6716,4,2,4.6716,2,5.5v13C2,19.3284,2.6716,20,3.5,20h17c0.8284,0,1.5-0.6716,1.5-1.5v-13
                                            C22,4.6716,21.3284,4,20.5,4z M20,6l-8,5L4,6H20z M4,18v-9l8,5l8-5v9H4z"/>
                                    </svg>
                                    <span class="side-menu__label">Messages</span>
                                </a>
                            </li>
                            <li>
                                <h3>Homepage</h3>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="9 6 15 12 9 18"></polyline>
                                        <line x1="3" y1="12" x2="6" y2="12"></line>
                                        <line x1="18" y1="12" x2="21" y2="12"></line>
                                    </svg>
                                    <span class="side-menu__label">Carousel</span>
                                    <i class="angle fa fa-angle-right"></i>
                                </a>
                                <ul class="slide-menu">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">Carousel</a></li>
                                    <li><a href="add-carousel.html" class="slide-item">Add carousel</a></li>
                                    <li><a href="all-carousel.html" class="slide-item">All carousel</a></li>
                                </ul>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item has-link" data-bs-toggle="slide" href="content.html">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                                        <circle cx="7" cy="12" r="2.5"></circle>
                                        <circle cx="17" cy="8" r="2.5"></circle>
                                        <circle cx="17" cy="16" r="2.5"></circle>
                                        <path d="M9 12h6"></path>
                                    </svg>
                                    <span class="side-menu__label">Content</span>
                                </a>

                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="side-menu__icon"
                                        width="20"
                                        height="20"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="1.5"
                                        stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M21 21H3V2.5C3 2.223877 3.223877 2 3.5 2S4 2.223877 4 2.5V21h17.5c0.276123 0 0.5-0.223877 0.5-0.5S21.776123 21 21.5 21H21z"/>
                                        <path d="M8 16V8.5M11 21V8.5M15 21V12.5M19 21V4.5"/>
                                    </svg>
                                    <span class="side-menu__label">Served Industries</span>
                                    <i class="angle fa fa-angle-right"></i>
                                </a>
                                <ul class="slide-menu">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">Served Industries</a></li>
                                    <li><a href="add-industry.html" class="slide-item">Add industry</a></li>
                                    <li><a href="all-industries.html" class="slide-item">All Industries</a></li>
                                </ul>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="side-menu__icon"
                                        width="20"
                                        height="20"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="1.5"
                                        stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <polygon points="12,2 14.9,8.5 22,9.3 16,14 17.5,21 12,17.5 6.5,21 8,14 2,9.3 9.1,8.5" fill="none" stroke="currentColor" stroke-width="1.5"/>
                                    </svg>
                                    <span class="side-menu__label">Success Stories</span>
                                    <i class="angle fa fa-angle-right"></i>
                                </a>
                                <ul class="slide-menu">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">Success Stories</a></li>
                                    <li><a href="add-success-story.html" class="slide-item">Add</a></li>
                                    <li><a href="all-success-stories.html" class="slide-item">All</a></li>
                                </ul>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="side-menu__icon"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="1.6"
                                        stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <!-- Central Node -->
                                        <circle cx="12" cy="12" r="3"></circle>
                                        <!-- Connecting Lines / Circuit -->
                                        <line x1="12" y1="3" x2="12" y2="9"></line>
                                        <line x1="12" y1="15" x2="12" y2="21"></line>
                                        <line x1="3" y1="12" x2="9" y2="12"></line>
                                        <line x1="15" y1="12" x2="21" y2="12"></line>
                                        <!-- Diagonal Connections -->
                                        <line x1="5" y1="5" x2="9" y2="9"></line>
                                        <line x1="15" y1="15" x2="19" y2="19"></line>
                                        <line x1="5" y1="19" x2="9" y2="15"></line>
                                        <line x1="15" y1="9" x2="19" y2="5"></line>
                                    </svg>
                                    <span class="side-menu__label">Technologies</span>
                                    <i class="angle fa fa-angle-right"></i>
                                </a>

                                <ul class="slide-menu">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">Technologies</a></li>
                                    <li><a href="add-technologies.html" class="slide-item">Add technology</a></li>
                                    <li><a href="all-technologies.html" class="slide-item">All technologies</a></li>
                                </ul>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="side-menu__icon"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="1.8"
                                        stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <!-- Large Speech Bubble -->
                                        <path d="M3 5h18v12H7l-4 4V5z"></path>
                                        <!-- Lines representing text inside bubble -->
                                        <line x1="6" y1="8" x2="14" y2="8"></line>
                                        <line x1="6" y1="11" x2="14" y2="11"></line>
                                        <line x1="6" y1="14" x2="10" y2="14"></line>
                                    </svg>
                                    <span class="side-menu__label">Testimonials</span>
                                    <i class="angle fa fa-angle-right"></i>
                                </a>
                                <ul class="slide-menu">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">Testimonials</a></li>
                                    <li><a href="add-testimonial.html" class="slide-item">Add testimonial</a></li>
                                    <li><a href="all-testimonials.html" class="slide-item">All testimonials</a></li>
                                </ul>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="side-menu__icon"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="1.6"
                                        stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <!-- Primary user -->
                                        <circle cx="12" cy="8" r="3"></circle>
                                        <path d="M5 21v-2a4 4 0 0 1 4-4h6a4 4 0 0 1 4 4v2"></path>
                                        <!-- Secondary user (client group) -->
                                        <circle cx="6.5" cy="10.5" r="2"></circle>
                                        <path d="M2 21v-1a3 3 0 0 1 3-3h3"></path>
                                    </svg>
                                    <span class="side-menu__label">Clients</span>
                                    <i class="angle fa fa-angle-right"></i>
                                </a>
                                <ul class="slide-menu">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">Clients</a></li>
                                    <li><a href="add-client.html" class="slide-item">Add clients</a></li>
                                    <li><a href="all-clients.html" class="slide-item">All clients</a></li>
                                </ul>
                            </li>
                            <li>
                                <h3>Other Pages</h3>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item has-link" data-bs-toggle="slide" href="about-us.html">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="side-menu__icon"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <!-- Main User Head -->
                                        <circle cx="12" cy="8" r="4"></circle>
                                        <!-- Main User Body -->
                                        <path d="M8 21v-4a4 4 0 0 1 8 0v4"></path>
                                        <!-- Side Users (group) -->
                                        <circle cx="5.5" cy="12" r="2.5"></circle>
                                        <circle cx="18.5" cy="12" r="2.5"></circle>
                                        <path d="M5.5 15v3"></path>
                                        <path d="M18.5 15v3"></path>
                                    </svg>
                                    <span class="side-menu__label">About Us</span>
                                </a>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="side-menu__icon"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <!-- Slider 1 -->
                                        <line x1="4" y1="6" x2="20" y2="6"></line>
                                        <circle cx="8" cy="6" r="2"></circle>
                                        <!-- Slider 2 -->
                                        <line x1="4" y1="12" x2="20" y2="12"></line>
                                        <circle cx="16" cy="12" r="2"></circle>
                                        <!-- Slider 3 -->
                                        <line x1="4" y1="18" x2="20" y2="18"></line>
                                        <circle cx="12" cy="18" r="2"></circle>
                                    </svg>
                                    <span class="side-menu__label">Services</span>
                                    <i class="angle fa fa-angle-right"></i>
                                </a>
                                <ul class="slide-menu">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">Services</a></li>
                                    <li><a href="maps1.html" class="slide-item">Add service</a></li>
                                    <li><a href="maps2.html" class="slide-item">All services</a></li>
                                </ul>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="gallery.html">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="side-menu__icon"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <!-- Outer rectangle -->
                                        <rect x="3" y="4" width="18" height="16" rx="2" ry="2"></rect>
                                        <!-- Inner diagonal line -->
                                        <line x1="3" y1="20" x2="21" y2="4"></line>
                                        <!-- Small circle (like sun/photo spot) -->
                                        <circle cx="7" cy="8" r="1.5"></circle>
                                    </svg>
                                    <span class="side-menu__label">Gallery</span>
                                    <!-- <i class="angle fa fa-angle-right"></i> -->
                                </a>
                                <!-- <ul class="slide-menu">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">Gallery</a></li>
                                    <li><a href="maps1.html" class="slide-item">Add photo</a></li>
                                    <li><a href="maps2.html" class="slide-item">All photo</a></li>
                                </ul> -->
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="side-menu__icon"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="1.6"
                                        stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <!-- Primary user -->
                                        <circle cx="12" cy="8" r="3"></circle>
                                        <path d="M5 21v-2a4 4 0 0 1 4-4h6a4 4 0 0 1 4 4v2"></path>
                                        <!-- Secondary user (client group) -->
                                        <circle cx="6.5" cy="10.5" r="2"></circle>
                                        <path d="M2 21v-1a3 3 0 0 1 3-3h3"></path>
                                    </svg>
                                    <span class="side-menu__label">Clients</span>
                                    <i class="angle fa fa-angle-right"></i>
                                </a>
                                <ul class="slide-menu">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">Clients</a></li>
                                    <li><a href="maps1.html" class="slide-item">Add client</a></li>
                                    <li><a href="maps2.html" class="slide-item">All clients</a></li>
                                </ul>
                            </li>
                            <li>
                                <h3>More</h3>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item has-link" data-bs-toggle="slide" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="side-menu__icon"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <!-- Speech bubble -->
                                        <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                                        <!-- Small circle/message dot -->
                                        <circle cx="12" cy="11" r="1.5"></circle>
                                    </svg>
                                    <span class="side-menu__label">Contact Us</span>
                                </a>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item has-link" data-bs-toggle="slide" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="side-menu__icon"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <!-- Circle base -->
                                        <circle cx="12" cy="18" r="3"></circle>
                                        <!-- Upward arrow -->
                                        <path d="M12 15V6"></path>
                                        <path d="M9 9l3-3 3 3"></path>
                                    </svg>
                                    <span class="side-menu__label">Upload Brochure</span>
                                </a>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item has-link" data-bs-toggle="slide" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="side-menu__icon"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <!-- Nodes -->
                                        <circle cx="6" cy="12" r="2"></circle>
                                        <circle cx="12" cy="6" r="2"></circle>
                                        <circle cx="18" cy="12" r="2"></circle>
                                        <!-- Connections -->
                                        <path d="M6 12L12 6"></path>
                                        <path d="M12 6L18 12"></path>
                                    </svg>
                                    <span class="side-menu__label">Social Links</span>
                                </a>
                            </li>
                        </ul>
                        <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                                width="24" height="24" viewBox="0 0 24 24">
                                <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <!--/APP-SIDEBAR-->