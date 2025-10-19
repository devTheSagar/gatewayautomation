@extends('backend.master')

@section('title')
  Edit Success Story
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
                    <li class="breadcrumb-item active" aria-current="page">Edit</li>
                </ol>
            </div>
        </div>
        <!-- PAGE-HEADER END -->

        <!-- main content start -->
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-header border-bottom">
                        <h3 class="card-title">Success story edit form</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.update.success-stories', $successStory->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <!-- image  -->
                            <div class="row mb-4">
                                <label for="image" class="form-label">Upload image <span class="text-danger">*</span></label>
                                <div class="col-sm-12 col-md-4">
                                    <input id="image" type="file" name="image" class="dropify" data-height="200" data-default-file="{{ asset($successStory->image) }}"/>
                                    @error('image')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <!-- heading  -->
                            <div class="form-group">
                                <label for="heading" class="form-label">Heading <span class="text-danger">*</span></label>
                                <textarea class="form-control @error('heading') is-invalid @enderror" name="heading" maxlength="225" id="heading" rows="3">{{ $successStory->heading }}</textarea>
                                @error('heading')
                                    <span class="heading">{{ $message }}</span>
                                @enderror
                            </div>
                            <!-- link  -->
                            <div class="form-group">
                                <label for="content" class="form-label">Content <span class="text-danger">*</span></label>
                                <textarea class="form-control @error('content') is-invalid @enderror" name="content" maxlength="225" id="content" rows="3">{{ $successStory->content }}</textarea>
                                @error('content')
                                    <span class="content">{{ $message }}</span>
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