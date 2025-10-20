@extends('backend.master')

@section('title')
  View Testimonial
@endsection

@section('content')

<!--app-content open-->
<div class="app-content main-content mt-0">
    <div class="side-app">

        <!-- CONTAINER -->
        <div class="main-container container-fluid">

            <!-- PAGE-HEADER -->
            <div class="page-header">
                <div>
                    <h1 class="page-title">Testimonial Details</h1>
                </div>
                <div class="ms-auto pageheader-btn">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.all.carousel') }}">Testimonials</a></li>
                        <li class="breadcrumb-item active" aria-current="page">View Testimonial</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->

            <!-- main content start -->
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-header border-bottom d-flex">
                            <h3 class="card-title me-3">Testimonial Information</h3>
                            <div class="ms-auto">
                                <a href="{{ route('admin.add.testimonial') }}" class="btn btn-primary">
                                    <i class="fa fa-plus"></i> Add New
                                </a>
                                <a href="{{ route('admin.all.testimonial') }}" class="btn btn-secondary">
                                    <i class="fa fa-arrow-left"></i> Go Back
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="text-start mb-4">
                                <img src="{{ asset($testimonial->company_logo) }}" 
                                     alt="{{ $testimonial->alt_txt }}" 
                                     class="img-fluid" 
                                     style="max-height: 300px; border-radius: 10px; border:1px solid #ddd;">
                            </div>

                            <table class="table table-bordered">
                                <tr>
                                    <th style="width: 20%">Client Name</th>
                                    <td>{{ $testimonial->client_name ?? 'N/A' }}</td>
                                </tr>
                                <tr>
                                    <th>Company $ Designation</th>
                                    <td>{{ $testimonial->client_designation ?? 'N/A' }}</td>
                                </tr>
                                <tr>
                                    <th>Testimonial</th>
                                    <td>{{ $testimonial->testimonial_content ?? 'N/A' }}</td>
                                </tr>
                                <tr>
                                    <th>Alter Text</th>
                                    <td>{{ $testimonial->alt_txt ?? 'N/A' }}</td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td>
                                        <span class="badge {{ $testimonial->status ? 'bg-success' : 'bg-danger' }}">
                                            {{ $testimonial->status ? 'Active' : 'Inactive' }}
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Created At</th>
                                    <td>{{ $testimonial->created_at->timezone('Asia/Dhaka')->format('d M Y, h:i A') }}</td>
                                </tr>
                                <tr>
                                    <th>Updated At</th>
                                    <td>{{ $testimonial->updated_at->timezone('Asia/Dhaka')->format('d M Y, h:i A') }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- main content end -->

        </div>
    </div>
</div>
<!-- CONTAINER CLOSED -->
</div>

@endsection
