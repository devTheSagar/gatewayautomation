@extends('frontend.master')

@section('title')
  Payment
@endsection

@section('content')
    <div>
        <!--page header section start-->
        <section class="bg-dark services-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12 heading-sec">
                        <h1 class="display-5 fw-bold">Online Payment</h1>
                    </div>
                </div>
            </div>
        </section>
        <!--page header section end-->

        <section class="feature-section ptb-75 bg-light">
            <div class="container">
                <div class="row align-items-lg-center justify-content-center text-center">
                    <div class="col">
                        <div class="position-relative single-pricing-wrap rounded-custom bg-white custom-shadow p-5 mb-4 mb-lg-0">
                            <img src="{{asset('frontend/assets/img/bkash.jpg')}}" class="img-fluid"/>
                        </div>
                    </div>
                    <div class="col">
                        <div class="position-relative single-pricing-wrap rounded-custom bg-white custom-shadow p-5 mb-4 mb-lg-0">
                        <img src="{{asset('frontend/assets/img/nagad.jpg')}}" class="img-fluid"/>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection