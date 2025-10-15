@extends('backend.master')

@section('title')
  View Carousel
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
                    <h1 class="page-title">Carousel Details</h1>
                </div>
                <div class="ms-auto pageheader-btn">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.all.carousel') }}">Carousel</a></li>
                        <li class="breadcrumb-item active" aria-current="page">View Carousel</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->

            <!-- main content start -->
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-header border-bottom d-flex justify-content-between align-items-center">
                            <h3 class="card-title">Carousel Information</h3>
                            <a href="{{ route('admin.all.carousel') }}" class="btn btn-sm btn-primary">
                                <i class="fa fa-arrow-left"></i> Back
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="text-start mb-4">
                                <img src="{{ asset($carousel->carousel_image) }}" 
                                     alt="carousel image" 
                                     class="img-fluid" 
                                     style="max-height: 300px; border-radius: 10px; border:1px solid #ddd;">
                            </div>

                            <table class="table table-bordered">
                                <tr>
                                    <th style="width: 20%">Heading</th>
                                    <td>{{ $carousel->carousel_heading ?? 'N/A' }}</td>
                                </tr>
                                <tr>
                                    <th>Learn More Link</th>
                                    <td>
                                        @if($carousel->learn_more_link)
                                            <a href="{{ $carousel->learn_more_link }}" target="_blank">
                                                {{ $carousel->learn_more_link }}
                                            </a>
                                        @else
                                            N/A
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td>
                                        <span class="badge {{ $carousel->status ? 'bg-success' : 'bg-danger' }}">
                                            {{ $carousel->status ? 'Active' : 'Inactive' }}
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Created At</th>
                                    <td>{{ $carousel->created_at->format('d M Y, h:i A') }}</td>
                                </tr>
                                <tr>
                                    <th>Updated At</th>
                                    <td>{{ $carousel->updated_at->format('d M Y, h:i A') }}</td>
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
