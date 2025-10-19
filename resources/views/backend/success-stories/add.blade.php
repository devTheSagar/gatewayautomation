@extends('backend.master')

@section('title')
  Add Success Story
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
                <h1 class="page-title">Success Stories</h1>
            </div>
            <div class="ms-auto pageheader-btn">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                    <li class="breadcrumb-item" aria-current="page">Success stories</li>
                    <li class="breadcrumb-item active" aria-current="page">Add</li>
                </ol>
            </div>
        </div>
        <!-- PAGE-HEADER END -->

        <!-- main content start -->
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-header border-bottom d-flex">
                        <h3 class="card-title me-3">Success story form</h3>
                        <a href="{{ route('admin.all.success-stories') }}" class="btn btn-success ms-auto">
                            <i class="fa fa-eye"></i> See All
                        </a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.store.success-stories') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <!-- image  -->
                            <div class="row mb-4">
                                <label for="image" class="form-label">Upload image <span class="text-danger">*</span></label>
                                <div class="col-sm-12 col-md-4">
                                    <input id="image" type="file" name="image" class="dropify" data-height="200" />
                                    @error('image')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <!-- heading  -->
                            <div class="form-group">
                                <label for="heading" class="form-label">Heading <span class="text-danger">*</span></label>
                                <textarea class="form-control @error('heading') is-invalid  @enderror" name="heading" maxlength="250" id="heading" rows="3">{{ old('heading') }}</textarea>
                                @error('heading')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <!-- link  -->
                            <div class="form-group">
                                <label for="content" class="form-label">Content <span class="text-danger">*</span></label>
                                <textarea class="form-control @error('content') is-invalid @enderror" name="content" maxlength="600" id="content" rows="3">{{ old('content') }}</textarea>
                                @error('content')
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