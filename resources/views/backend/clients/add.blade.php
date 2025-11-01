@extends('backend.master')

@section('title')
  Add Client
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
                    <h1 class="page-title">Clinet</h1>
                </div>
                <div class="ms-auto pageheader-btn">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                        <li class="breadcrumb-item" aria-current="page">Clinets</li>
                        <li class="breadcrumb-item active" aria-current="page">Add Clinet</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->

            <!-- main content start -->
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-header border-bottom">
                            <h3 class="card-title">Clinet form</h3>
                            <a href="{{ route('admin.all.client') }}" class="btn btn-secondary ms-auto">
                                <i class="fa fa-list"></i> All Clients
                            </a>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.store.client') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <!-- image  -->
                                <div class="row mb-4">
                                    <label for="client_logo" class="form-label">Upload company logo <span class="text-danger">*</span></label>
                                    <div class="col-sm-12 col-md-4">
                                        <input id="client_logo" name="client_logo" type="file" class="dropify" data-height="200" />
                                        @error('client_logo')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <!-- alt text  -->
                                <div class="form-group">
                                    <label for="alt_txt" class="form-label">Alt text <span class="text-danger">*</span></label>
                                    <input type="text" name="alt_txt" class="form-control @error('alt_txt') is-invalid @enderror" maxlength="250" id="alt_txt" value="{{ old('alt_txt') }}">
                                    @error('alt_txt')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <!-- company name  -->
                                <div class="form-group">
                                    <label for="company_name" class="form-label">Company name <span class="text-danger">*</span></label>
                                    <input type="text" name="company_name" class="form-control @error('company_name') is-invalid @enderror" maxlength="250" id="company_name" value="{{ old('company_name') }}">
                                    @error('company_name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary w-50">Save</button>
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