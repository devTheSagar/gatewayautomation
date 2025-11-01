@extends('backend.master')

@section('title')
  Edit Testimonial
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
                <h1 class="page-title">Testimonials</h1>
            </div>
            <div class="ms-auto pageheader-btn">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                    <li class="breadcrumb-item" aria-current="page">Testimonials</li>
                    <li class="breadcrumb-item active" aria-current="page">Edit</li>
                </ol>
            </div>
        </div>
        <!-- PAGE-HEADER END -->

        <!-- main content start -->
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-header border-bottom d-flex">
                        <h3 class="card-title me-3">Testimonials edit form</h3>
                        <div class="ms-auto">
                            <a href="{{ route('admin.add.testimonial') }}" class="btn btn-primary">
                                <i class="fa fa-plus"></i> Add New
                            </a>
                            <a href="{{ route('admin.view.testimonial', $testimonial->id) }}" class="btn btn-success">
                                <i class="fa fa-eye"></i> View Testimonial
                            </a>
                            <a href="{{ route('admin.all.testimonial') }}" class="btn btn-secondary">
                                <i class="fa fa-list"></i> All Testimonial
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                            <form action="{{ route('admin.update.testimonial', $testimonial->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <!-- logo  -->
                                <div class="row mb-4">
                                    <label for="company_logo" class="form-label">Upload company logo <span class="text-danger">*</span></label>
                                    <div class="col-sm-12 col-md-4">
                                        <input id="company_logo" name="company_logo" type="file" class="dropify" data-height="200" data-default-file="{{ asset($testimonial->company_logo) }}"/>
                                        @error('company_logo')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <!-- alt text  -->
                                <div class="form-group">
                                    <label for="alt_txt" class="form-label">Logo alt text <span class="text-danger">*</span></label>
                                    <input type="text" name="alt_txt" class="form-control @error('alt_txt') is-invalid @enderror" maxlength="250" id="alt_txt" value="{{ $testimonial->alt_txt }}">
                                    @error('alt_txt')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <!-- client name  -->
                                <div class="form-group">
                                    <label for="client_name" class="form-label">Client name <span class="text-danger">*</span></label>
                                    <input type="text" name="client_name" class="form-control @error('client_name') is-invalid @enderror" maxlength="250" id="client_name" value="{{ $testimonial->client_name }}">
                                    @error('client_name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <!-- client designation  -->
                                <div class="form-group">
                                    <label for="client_designation" class="form-label">Client designation <span class="text-danger">*</span></label>
                                    <input type="text" name="client_designation" class="form-control @error('client_designation') is-invalid @enderror" maxlength="250" id="client_designation" value="{{ $testimonial->client_designation }}">
                                    @error('client_designation')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <!-- testimonial content  -->
                                <div class="form-group">
                                    <label for="testimonial_content" class="form-label">Testimonial content <span class="text-danger">*</span></label>
                                    <textarea class="form-control @error('testimonial_content') is-invalid @enderror" name="testimonial_content" maxlength="3000" id="textarea" rows="3" id="testimonial_content">{{ $testimonial->testimonial_content }}</textarea>
                                    @error('testimonial_content')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <button type="submit" class="btn btn-primary w-50">Update</button>
                            </form>
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