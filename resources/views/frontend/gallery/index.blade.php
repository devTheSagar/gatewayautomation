@extends('frontend.master')

@section('title')
  Gallery
@endsection

@section('content')
    <div>
        <!--page header section start-->
        <section class="bg-dark services-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12 heading-sec">
                        <h1 class="display-5 fw-bold page-heading-img-txt" data-aos="fade-up" data-aos-delay="100">Our gallery</h1>
                        <p class="nunito-sans-300 lead" data-aos="fade-up" data-aos-delay="200">Explore our gallery to see featured clients, collaborations, and the projects we are proud to have delivered.</p>
                    </div>
                </div>
            </div>
        </section>
        <!--page header section end-->

        
        <section class="gallery-section ptb-75 bg-light">
            <div class="container">
                <div class="section-heading text-center mb-5">
                    <h2 class="roboto-mono-heading" data-aos="fade-up" data-aos-delay="100">Explore our curated collection of images and moments.</h2>
                </div>

                <div class="row g-4">

                    {{-- <div class="col-6 col-md-4 col-lg-3" data-aos="fade-left" data-aos-delay="100">
                        <div class="gallery-card" data-bs-toggle="modal" data-bs-target="#lightboxModal" data-img="{{asset('/frontend/assets/img/bkash.jpg')}}">
                            <img src="{{asset('/frontend/assets/img/bkash.jpg')}}" class="img-fluid" alt="Gallery Image">
                            <div class="overlay">
                                <i class="fas fa-search-plus"></i>
                            </div>
                        </div>
                    </div> --}}

                    {{-- <div class="col-6 col-md-4 col-lg-3" data-aos="fade-left" data-aos-delay="200">
                        <div class="gallery-card" data-bs-toggle="modal" data-bs-target="#lightboxModal" data-img="{{asset('/frontend/assets/img/nagad.jpg')}}">
                            <img src="{{asset('/frontend/assets/img/nagad.jpg')}}" class="img-fluid" alt="Gallery Image">
                            <div class="overlay">
                                <i class="fas fa-search-plus"></i>
                            </div>
                        </div>
                    </div> --}}

                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-left" data-aos-delay="300">
                        <div class="gallery-card" data-bs-toggle="modal" data-bs-target="#lightboxModal" data-img="{{asset('/frontend/assets/img/gallery/office.jfif')}}">
                            <img src="{{asset('/frontend/assets/img/gallery/office.jfif')}}" class="img-fluid" alt="Gallery Image">
                            <div class="overlay">
                                <i class="fas fa-search-plus"></i>
                            </div>
                        </div>
                    </div>

                    {{-- <div class="col-6 col-md-4 col-lg-3" data-aos="fade-left" data-aos-delay="400">
                        <div class="gallery-card" data-bs-toggle="modal" data-bs-target="#lightboxModal" data-img="{{asset('/frontend/assets/img/gallery/office1.jfif')}}">
                            <img src="{{asset('/frontend/assets/img/gallery/office1.jfif')}}" class="img-fluid" alt="Gallery Image">
                            <div class="overlay">
                                <i class="fas fa-search-plus"></i>
                            </div>
                        </div>
                    </div> --}}

                    {{-- <div class="col-6 col-md-4 col-lg-3" data-aos="fade-left" data-aos-delay="500">
                        <div class="gallery-card" data-bs-toggle="modal" data-bs-target="#lightboxModal" data-img="{{asset('/frontend/assets/img/gallery/office2.jfif')}}">
                            <img src="{{asset('/frontend/assets/img/gallery/office2.jfif')}}" class="img-fluid" alt="Gallery Image">
                            <div class="overlay">
                                <i class="fas fa-search-plus"></i>
                            </div>
                        </div>
                    </div> --}}

                    {{-- <div class="col-6 col-md-4 col-lg-3" data-aos="fade-left" data-aos-delay="600">
                        <div class="gallery-card" data-bs-toggle="modal" data-bs-target="#lightboxModal" data-img="{{asset('/frontend/assets/img/gallery/office3.jfif')}}">
                            <img src="{{asset('/frontend/assets/img/gallery/office3.jfif')}}" class="img-fluid" alt="Gallery Image">
                            <div class="overlay">
                                <i class="fas fa-search-plus"></i>
                            </div>
                        </div>
                    </div> --}}

                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-left" data-aos-delay="700">
                        <div class="gallery-card" data-bs-toggle="modal" data-bs-target="#lightboxModal" data-img="{{asset('/frontend/assets/img/gallery/meeting.jfif')}}">
                            <img src="{{asset('/frontend/assets/img/gallery/meeting.jfif')}}" class="img-fluid" alt="Gallery Image">
                            <div class="overlay">
                                <i class="fas fa-search-plus"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-left" data-aos-delay="700">
                        <div class="gallery-card" data-bs-toggle="modal" data-bs-target="#lightboxModal" data-img="{{asset('/frontend/assets/img/gallery/1.jpg')}}">
                            <img src="{{asset('/frontend/assets/img/gallery/1.jpg')}}" class="img-fluid" alt="Gallery Image">
                            <div class="overlay">
                                <i class="fas fa-search-plus"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-left" data-aos-delay="700">
                        <div class="gallery-card" data-bs-toggle="modal" data-bs-target="#lightboxModal" data-img="{{asset('/frontend/assets/img/gallery/2.jpg')}}">
                            <img src="{{asset('/frontend/assets/img/gallery/2.jpg')}}" class="img-fluid" alt="Gallery Image">
                            <div class="overlay">
                                <i class="fas fa-search-plus"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-left" data-aos-delay="700">
                        <div class="gallery-card" data-bs-toggle="modal" data-bs-target="#lightboxModal" data-img="{{asset('/frontend/assets/img/gallery/3.jpg')}}">
                            <img src="{{asset('/frontend/assets/img/gallery/3.jpg')}}" class="img-fluid" alt="Gallery Image">
                            <div class="overlay">
                                <i class="fas fa-search-plus"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-left" data-aos-delay="700">
                        <div class="gallery-card" data-bs-toggle="modal" data-bs-target="#lightboxModal" data-img="{{asset('/frontend/assets/img/gallery/4.jpg')}}">
                            <img src="{{asset('/frontend/assets/img/gallery/4.jpg')}}" class="img-fluid" alt="Gallery Image">
                            <div class="overlay">
                                <i class="fas fa-search-plus"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-left" data-aos-delay="700">
                        <div class="gallery-card" data-bs-toggle="modal" data-bs-target="#lightboxModal" data-img="{{asset('/frontend/assets/img/gallery/5.jpg')}}">
                            <img src="{{asset('/frontend/assets/img/gallery/5.jpg')}}" class="img-fluid" alt="Gallery Image">
                            <div class="overlay">
                                <i class="fas fa-search-plus"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-left" data-aos-delay="700">
                        <div class="gallery-card" data-bs-toggle="modal" data-bs-target="#lightboxModal" data-img="{{asset('/frontend/assets/img/gallery/6.jpg')}}">
                            <img src="{{asset('/frontend/assets/img/gallery/6.jpg')}}" class="img-fluid" alt="Gallery Image">
                            <div class="overlay">
                                <i class="fas fa-search-plus"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-left" data-aos-delay="700">
                        <div class="gallery-card" data-bs-toggle="modal" data-bs-target="#lightboxModal" data-img="{{asset('/frontend/assets/img/gallery/7.jpg')}}">
                            <img src="{{asset('/frontend/assets/img/gallery/7.jpg')}}" class="img-fluid" alt="Gallery Image">
                            <div class="overlay">
                                <i class="fas fa-search-plus"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-left" data-aos-delay="700">
                        <div class="gallery-card" data-bs-toggle="modal" data-bs-target="#lightboxModal" data-img="{{asset('/frontend/assets/img/gallery/8.jpg')}}">
                            <img src="{{asset('/frontend/assets/img/gallery/8.jpg')}}" class="img-fluid" alt="Gallery Image">
                            <div class="overlay">
                                <i class="fas fa-search-plus"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-left" data-aos-delay="700">
                        <div class="gallery-card" data-bs-toggle="modal" data-bs-target="#lightboxModal" data-img="{{asset('/frontend/assets/img/gallery/9.jpg')}}">
                            <img src="{{asset('/frontend/assets/img/gallery/9.jpg')}}" class="img-fluid" alt="Gallery Image">
                            <div class="overlay">
                                <i class="fas fa-search-plus"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-left" data-aos-delay="700">
                        <div class="gallery-card" data-bs-toggle="modal" data-bs-target="#lightboxModal" data-img="{{asset('/frontend/assets/img/gallery/10.jpg')}}">
                            <img src="{{asset('/frontend/assets/img/gallery/10.jpg')}}" class="img-fluid" alt="Gallery Image">
                            <div class="overlay">
                                <i class="fas fa-search-plus"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-left" data-aos-delay="700">
                        <div class="gallery-card" data-bs-toggle="modal" data-bs-target="#lightboxModal" data-img="{{asset('/frontend/assets/img/gallery/11.jpg')}}">
                            <img src="{{asset('/frontend/assets/img/gallery/11.jpg')}}" class="img-fluid" alt="Gallery Image">
                            <div class="overlay">
                                <i class="fas fa-search-plus"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-left" data-aos-delay="700">
                        <div class="gallery-card" data-bs-toggle="modal" data-bs-target="#lightboxModal" data-img="{{asset('/frontend/assets/img/gallery/12.jpg')}}">
                            <img src="{{asset('/frontend/assets/img/gallery/12.jpg')}}" class="img-fluid" alt="Gallery Image">
                            <div class="overlay">
                                <i class="fas fa-search-plus"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-left" data-aos-delay="700">
                        <div class="gallery-card" data-bs-toggle="modal" data-bs-target="#lightboxModal" data-img="{{asset('/frontend/assets/img/gallery/13.jpg')}}">
                            <img src="{{asset('/frontend/assets/img/gallery/13.jpg')}}" class="img-fluid" alt="Gallery Image">
                            <div class="overlay">
                                <i class="fas fa-search-plus"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-left" data-aos-delay="700">
                        <div class="gallery-card" data-bs-toggle="modal" data-bs-target="#lightboxModal" data-img="{{asset('/frontend/assets/img/gallery/14.jpg')}}">
                            <img src="{{asset('/frontend/assets/img/gallery/14.jpg')}}" class="img-fluid" alt="Gallery Image">
                            <div class="overlay">
                                <i class="fas fa-search-plus"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-left" data-aos-delay="700">
                        <div class="gallery-card" data-bs-toggle="modal" data-bs-target="#lightboxModal" data-img="{{asset('/frontend/assets/img/gallery/15.jpg')}}">
                            <img src="{{asset('/frontend/assets/img/gallery/15.jpg')}}" class="img-fluid" alt="Gallery Image">
                            <div class="overlay">
                                <i class="fas fa-search-plus"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-left" data-aos-delay="700">
                        <div class="gallery-card" data-bs-toggle="modal" data-bs-target="#lightboxModal" data-img="{{asset('/frontend/assets/img/gallery/16.jpg')}}">
                            <img src="{{asset('/frontend/assets/img/gallery/16.jpg')}}" class="img-fluid" alt="Gallery Image">
                            <div class="overlay">
                                <i class="fas fa-search-plus"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-left" data-aos-delay="700">
                        <div class="gallery-card" data-bs-toggle="modal" data-bs-target="#lightboxModal" data-img="{{asset('/frontend/assets/img/gallery/17.jpg')}}">
                            <img src="{{asset('/frontend/assets/img/gallery/17.jpg')}}" class="img-fluid" alt="Gallery Image">
                            <div class="overlay">
                                <i class="fas fa-search-plus"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-left" data-aos-delay="700">
                        <div class="gallery-card" data-bs-toggle="modal" data-bs-target="#lightboxModal" data-img="{{asset('/frontend/assets/img/gallery/18.jpg')}}">
                            <img src="{{asset('/frontend/assets/img/gallery/18.jpg')}}" class="img-fluid" alt="Gallery Image">
                            <div class="overlay">
                                <i class="fas fa-search-plus"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-left" data-aos-delay="700">
                        <div class="gallery-card" data-bs-toggle="modal" data-bs-target="#lightboxModal" data-img="{{asset('/frontend/assets/img/gallery/19.jpg')}}">
                            <img src="{{asset('/frontend/assets/img/gallery/19.jpg')}}" class="img-fluid" alt="Gallery Image">
                            <div class="overlay">
                                <i class="fas fa-search-plus"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-left" data-aos-delay="700">
                        <div class="gallery-card" data-bs-toggle="modal" data-bs-target="#lightboxModal" data-img="{{asset('/frontend/assets/img/gallery/20.jpg')}}">
                            <img src="{{asset('/frontend/assets/img/gallery/20.jpg')}}" class="img-fluid" alt="Gallery Image">
                            <div class="overlay">
                                <i class="fas fa-search-plus"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-left" data-aos-delay="700">
                        <div class="gallery-card" data-bs-toggle="modal" data-bs-target="#lightboxModal" data-img="{{asset('/frontend/assets/img/gallery/21.jpg')}}">
                            <img src="{{asset('/frontend/assets/img/gallery/21.jpg')}}" class="img-fluid" alt="Gallery Image">
                            <div class="overlay">
                                <i class="fas fa-search-plus"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-left" data-aos-delay="700">
                        <div class="gallery-card" data-bs-toggle="modal" data-bs-target="#lightboxModal" data-img="{{asset('/frontend/assets/img/gallery/22.jpg')}}">
                            <img src="{{asset('/frontend/assets/img/gallery/22.jpg')}}" class="img-fluid" alt="Gallery Image">
                            <div class="overlay">
                                <i class="fas fa-search-plus"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-left" data-aos-delay="700">
                        <div class="gallery-card" data-bs-toggle="modal" data-bs-target="#lightboxModal" data-img="{{asset('/frontend/assets/img/gallery/23.jpg')}}">
                            <img src="{{asset('/frontend/assets/img/gallery/23.jpg')}}" class="img-fluid" alt="Gallery Image">
                            <div class="overlay">
                                <i class="fas fa-search-plus"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-left" data-aos-delay="700">
                        <div class="gallery-card" data-bs-toggle="modal" data-bs-target="#lightboxModal" data-img="{{asset('/frontend/assets/img/gallery/24.jpg')}}">
                            <img src="{{asset('/frontend/assets/img/gallery/24.jpg')}}" class="img-fluid" alt="Gallery Image">
                            <div class="overlay">
                                <i class="fas fa-search-plus"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-left" data-aos-delay="700">
                        <div class="gallery-card" data-bs-toggle="modal" data-bs-target="#lightboxModal" data-img="{{asset('/frontend/assets/img/gallery/25.jpg')}}">
                            <img src="{{asset('/frontend/assets/img/gallery/25.jpg')}}" class="img-fluid" alt="Gallery Image">
                            <div class="overlay">
                                <i class="fas fa-search-plus"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-left" data-aos-delay="700">
                        <div class="gallery-card" data-bs-toggle="modal" data-bs-target="#lightboxModal" data-img="{{asset('/frontend/assets/img/gallery/26.jpg')}}">
                            <img src="{{asset('/frontend/assets/img/gallery/26.jpg')}}" class="img-fluid" alt="Gallery Image">
                            <div class="overlay">
                                <i class="fas fa-search-plus"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-left" data-aos-delay="700">
                        <div class="gallery-card" data-bs-toggle="modal" data-bs-target="#lightboxModal" data-img="{{asset('/frontend/assets/img/gallery/27.jpg')}}">
                            <img src="{{asset('/frontend/assets/img/gallery/27.jpg')}}" class="img-fluid" alt="Gallery Image">
                            <div class="overlay">
                                <i class="fas fa-search-plus"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-left" data-aos-delay="700">
                        <div class="gallery-card" data-bs-toggle="modal" data-bs-target="#lightboxModal" data-img="{{asset('/frontend/assets/img/gallery/28.jpg')}}">
                            <img src="{{asset('/frontend/assets/img/gallery/28.jpg')}}" class="img-fluid" alt="Gallery Image">
                            <div class="overlay">
                                <i class="fas fa-search-plus"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-left" data-aos-delay="700">
                        <div class="gallery-card" data-bs-toggle="modal" data-bs-target="#lightboxModal" data-img="{{asset('/frontend/assets/img/gallery/29.jpg')}}">
                            <img src="{{asset('/frontend/assets/img/gallery/29.jpg')}}" class="img-fluid" alt="Gallery Image">
                            <div class="overlay">
                                <i class="fas fa-search-plus"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-left" data-aos-delay="700">
                        <div class="gallery-card" data-bs-toggle="modal" data-bs-target="#lightboxModal" data-img="{{asset('/frontend/assets/img/gallery/30.jpg')}}">
                            <img src="{{asset('/frontend/assets/img/gallery/30.jpg')}}" class="img-fluid" alt="Gallery Image">
                            <div class="overlay">
                                <i class="fas fa-search-plus"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-left" data-aos-delay="700">
                        <div class="gallery-card" data-bs-toggle="modal" data-bs-target="#lightboxModal" data-img="{{asset('/frontend/assets/img/gallery/31.jpg')}}">
                            <img src="{{asset('/frontend/assets/img/gallery/31.jpg')}}" class="img-fluid" alt="Gallery Image">
                            <div class="overlay">
                                <i class="fas fa-search-plus"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-left" data-aos-delay="700">
                        <div class="gallery-card" data-bs-toggle="modal" data-bs-target="#lightboxModal" data-img="{{asset('/frontend/assets/img/gallery/32.jpg')}}">
                            <img src="{{asset('/frontend/assets/img/gallery/32.jpg')}}" class="img-fluid" alt="Gallery Image">
                            <div class="overlay">
                                <i class="fas fa-search-plus"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-left" data-aos-delay="700">
                        <div class="gallery-card" data-bs-toggle="modal" data-bs-target="#lightboxModal" data-img="{{asset('/frontend/assets/img/gallery/33.jpg')}}">
                            <img src="{{asset('/frontend/assets/img/gallery/33.jpg')}}" class="img-fluid" alt="Gallery Image">
                            <div class="overlay">
                                <i class="fas fa-search-plus"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-left" data-aos-delay="700">
                        <div class="gallery-card" data-bs-toggle="modal" data-bs-target="#lightboxModal" data-img="{{asset('/frontend/assets/img/gallery/34.jpg')}}">
                            <img src="{{asset('/frontend/assets/img/gallery/34.jpg')}}" class="img-fluid" alt="Gallery Image">
                            <div class="overlay">
                                <i class="fas fa-search-plus"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-left" data-aos-delay="700">
                        <div class="gallery-card" data-bs-toggle="modal" data-bs-target="#lightboxModal" data-img="{{asset('/frontend/assets/img/gallery/35.jpg')}}">
                            <img src="{{asset('/frontend/assets/img/gallery/35.jpg')}}" class="img-fluid" alt="Gallery Image">
                            <div class="overlay">
                                <i class="fas fa-search-plus"></i>
                            </div>
                        </div>
                    </div>

                    

                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-left" data-aos-delay="700">
                        <div class="gallery-card" data-bs-toggle="modal" data-bs-target="#lightboxModal" data-img="{{asset('/frontend/assets/img/gallery/40.jpeg')}}">
                            <img src="{{asset('/frontend/assets/img/gallery/40.jpeg')}}" class="img-fluid" alt="Gallery Image">
                            <div class="overlay">
                                <i class="fas fa-search-plus"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-left" data-aos-delay="700">
                        <div class="gallery-card" data-bs-toggle="modal" data-bs-target="#lightboxModal" data-img="{{asset('/frontend/assets/img/gallery/41.jpeg')}}">
                            <img src="{{asset('/frontend/assets/img/gallery/41.jpeg')}}" class="img-fluid" alt="Gallery Image">
                            <div class="overlay">
                                <i class="fas fa-search-plus"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-left" data-aos-delay="700">
                        <div class="gallery-card" data-bs-toggle="modal" data-bs-target="#lightboxModal" data-img="{{asset('/frontend/assets/img/gallery/42.jpeg')}}">
                            <img src="{{asset('/frontend/assets/img/gallery/42.jpeg')}}" class="img-fluid" alt="Gallery Image">
                            <div class="overlay">
                                <i class="fas fa-search-plus"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-left" data-aos-delay="700">
                        <div class="gallery-card" data-bs-toggle="modal" data-bs-target="#lightboxModal" data-img="{{asset('/frontend/assets/img/gallery/43.jpeg')}}">
                            <img src="{{asset('/frontend/assets/img/gallery/43.jpeg')}}" class="img-fluid" alt="Gallery Image">
                            <div class="overlay">
                                <i class="fas fa-search-plus"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-left" data-aos-delay="700">
                        <div class="gallery-card" data-bs-toggle="modal" data-bs-target="#lightboxModal" data-img="{{asset('/frontend/assets/img/gallery/44.jpeg')}}">
                            <img src="{{asset('/frontend/assets/img/gallery/44.jpeg')}}" class="img-fluid" alt="Gallery Image">
                            <div class="overlay">
                                <i class="fas fa-search-plus"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-left" data-aos-delay="700">
                        <div class="gallery-card" data-bs-toggle="modal" data-bs-target="#lightboxModal" data-img="{{asset('/frontend/assets/img/gallery/45.jpeg')}}">
                            <img src="{{asset('/frontend/assets/img/gallery/45.jpeg')}}" class="img-fluid" alt="Gallery Image">
                            <div class="overlay">
                                <i class="fas fa-search-plus"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-left" data-aos-delay="700">
                        <div class="gallery-card" data-bs-toggle="modal" data-bs-target="#lightboxModal" data-img="{{asset('/frontend/assets/img/gallery/46.jpeg')}}">
                            <img src="{{asset('/frontend/assets/img/gallery/46.jpeg')}}" class="img-fluid" alt="Gallery Image">
                            <div class="overlay">
                                <i class="fas fa-search-plus"></i>
                            </div>
                        </div>
                    </div>

                    {{-- video start  --}}
                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-left" data-aos-delay="700">
                        <div class="gallery-card" 
                            data-bs-toggle="modal" 
                            data-bs-target="#lightboxModal" 
                            data-img="{{ asset('/frontend/assets/img/gallery/36.mp4') }}" 
                            data-type="video">
                            <video class="img-fluid" muted autoplay loop playsinline>
                                <source src="{{ asset('/frontend/assets/img/gallery/36.mp4') }}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                            <div class="overlay">
                                <i class="fas fa-search-plus"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-left" data-aos-delay="700">
                        <div class="gallery-card" 
                            data-bs-toggle="modal" 
                            data-bs-target="#lightboxModal" 
                            data-img="{{ asset('/frontend/assets/img/gallery/37.mp4') }}" 
                            data-type="video">
                            <video class="img-fluid" muted autoplay loop playsinline>
                                <source src="{{ asset('/frontend/assets/img/gallery/37.mp4') }}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                            <div class="overlay">
                                <i class="fas fa-search-plus"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-left" data-aos-delay="700">
                        <div class="gallery-card" 
                            data-bs-toggle="modal" 
                            data-bs-target="#lightboxModal" 
                            data-img="{{ asset('/frontend/assets/img/gallery/38.mp4') }}" 
                            data-type="video">
                            <video class="img-fluid" muted autoplay loop playsinline>
                                <source src="{{ asset('/frontend/assets/img/gallery/38.mp4') }}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                            <div class="overlay">
                                <i class="fas fa-search-plus"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-left" data-aos-delay="700">
                        <div class="gallery-card" 
                            data-bs-toggle="modal" 
                            data-bs-target="#lightboxModal" 
                            data-img="{{ asset('/frontend/assets/img/gallery/39.mp4') }}" 
                            data-type="video">
                            <video class="img-fluid" muted autoplay loop playsinline>
                                <source src="{{ asset('/frontend/assets/img/gallery/39.mp4') }}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                            <div class="overlay">
                                <i class="fas fa-search-plus"></i>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>

        <!-- Bootstrap Modal for Lightbox -->
        <div class="modal fade" style="margin-top: 7vh" id="lightboxModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content bg-transparent border-0 position-relative">
                    
                    <div class="modal-body p-0 d-flex justify-content-center align-items-center">
                        <!-- Common wrapper with fixed size -->
                        <div id="mediaBox" style="width:700px; height:400px; background:#000; display:flex; align-items:center; justify-content:center;">
                            <img src="" id="lightboxImage" class="d-none" style="max-width:100%; max-height:100%; object-fit:contain;" alt="Expanded Image">
                            
                            <video id="lightboxVideo" class="d-none" style="max-width:100%; max-height:100%; object-fit:contain;" controls>
                                <source src="" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>

                    <!-- Close button -->
                    <button type="button" 
                        data-bs-dismiss="modal" 
                        aria-label="Close" 
                        style="
                            position: absolute; 
                            top: 10px; 
                            right: 10px; 
                            width: 45px; 
                            height: 45px; 
                            font-size: 1.8rem; 
                            color: white; 
                            background: rgba(255,0,0,0.8); 
                            border-radius: 50%; 
                            border: none; 
                            display: flex; 
                            align-items: center; 
                            justify-content: center; 
                            z-index: 1050;
                        ">
                        &times;
                    </button>
                </div>
            </div>
        </div>

    </div>

@endsection