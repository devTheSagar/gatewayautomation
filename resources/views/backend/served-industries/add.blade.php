@extends('backend.master')

@section('title')
  Add Carousel
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
                    <h1 class="page-title">Served Industries</h1>
                </div>
                <div class="ms-auto pageheader-btn">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                        <li class="breadcrumb-item" aria-current="page">Served Industries</li>
                        <li class="breadcrumb-item active" aria-current="page">Add Industry</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->

            <!-- main content start -->
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-header border-bottom">
                            <h3 class="card-title">Add Industry form</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.store.served-industry') }}" method="POST">
                                @csrf
                                <!-- image  -->
                                <div class="row mb-4">
                                    <label for="icon" class="form-label">Icon code (Bootstrap or Font awesome only) <span class="text-danger">*</span></label>
                                    <div class="col-sm-12 col-md-6">
                                        <input type="text" name="icon_code" class="form-control @error('icon_code') is-invalid @enderror" maxlength="250" id="icon" value="{{ old('icon_code') }}">
                                        @error('icon_code')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <!-- heading  -->
                                <div class="row mb-4">
                                    <label for="indistry" class="form-label">Industry <span class="text-danger">*</span></label>
                                    <div class="col-sm-12 col-md-6">
                                        <input type="text" name="industry" class="form-control @error('industry') is-invalid @enderror" maxlength="250" id="indistry" value="{{ old('industry') }}">
                                        @error('industry')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                {{-- <a href="javascript:void(0)" type="submit" class="btn btn-primary w-50">Save</a> --}}
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