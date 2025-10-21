@extends('backend.master')

@section('title')
  Edit Client
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
                        <li class="breadcrumb-item active" aria-current="page">Edit Clinet</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->

            <!-- main content start -->
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-header border-bottom d-flex">
                            <h3 class="card-title">Clinet edit form</h3>
                            <div class="ms-auto">
                                <a href="{{ route('admin.add.client') }}" class="btn btn-primary">
                                    <i class="fa fa-plus"></i> Add Client
                                </a>
                                <a href="{{ route('admin.all.client') }}" class="btn btn-success">
                                    <i class="fa fa-list"></i> All Clients
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.update.client', $client->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <!-- image  -->
                                <div class="row mb-4">
                                    <label for="client_logo" class="form-label">Upload company logo <span class="text-danger">*</span></label>
                                    <div class="col-sm-12 col-md-4">
                                        <input id="client_logo" name="client_logo" type="file" class="dropify" data-height="200" data-default-file="{{ asset($client->client_logo) }}"/>
                                        @error('client_logo')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <!-- alt text  -->
                                <div class="form-group">
                                    <label for="alt_txt" class="form-label">Alt text <span class="text-danger">*</span></label>
                                    <input type="text" name="alt_txt" class="form-control @error('alt_txt') is-invalid @enderror" maxlength="250" id="alt_txt" value="{{ $client->alt_txt }}">
                                    @error('alt_txt')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <!-- company name  -->
                                <div class="form-group">
                                    <label for="company_name" class="form-label">Company name <span class="text-danger">*</span></label>
                                    <input type="text" name="company_name" class="form-control @error('company_name') is-invalid @enderror" maxlength="250" id="company_name" value="{{ $client->company_name }}">
                                    @error('company_name')
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