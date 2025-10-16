@extends('backend.master')

@section('title')
  Edit Carousel
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
                    <h1 class="page-title">Carousel</h1>
                </div>
                <div class="ms-auto pageheader-btn">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                        <li class="breadcrumb-item" aria-current="page">Carousel</li>
                        <li class="breadcrumb-item active" aria-current="page">Edit Carousel</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->

            <!-- main content start -->
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-header border-bottom">
                            <h3 class="card-title">Carousel edit form</h3>
                            <a href="{{ route('admin.all.carousel') }}" class="btn btn-sm ms-3 btn-secondary">
                                <i class="fa fa-arrow-left"></i> Go Back
                            </a>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.update.carousel', $carousel->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <!-- image  -->
                                <div class="row mb-4">
                                    <label for="carousel_image" class="form-label">Upload carousel image <span class="text-danger">*</span></label>
                                    <div class="col-sm-12 col-md-4">
                                        <input id="carousel_image" name="carousel_image" type="file" class="dropify" data-height="200" data-default-file="{{ asset($carousel->carousel_image) }}"/>
                                        @error('carousel_image')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <!-- heading  -->
                                <div class="form-group">
                                    <label for="carousel_heading" class="form-label">Carousel heading</label>
                                    <textarea class="form-control @error('carousel_heading') is-invalid @enderror" name="carousel_heading" maxlength="2000" id="carousel_heading" rows="3">{{ $carousel->carousel_heading }}</textarea>
                                    @error('carousel_heading')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <!-- link  -->
                                <div class="form-group">
                                    <label for="learn_more_link" class="form-label">Learn more link</label>
                                    <textarea class="form-control @error('learn_more_link') is-invalid @enderror" name="learn_more_link" maxlength="2000" id="learn_more_link" rows="3">{{ $carousel->learn_more_link }}</textarea>
                                    @error('learn_more_link')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- submit button -->
                                <button type="submit" class="btn btn-primary w-50 mt-3">Save</button>
                                {{-- back btn  --}}
                                <a href="{{ route('admin.all.carousel') }}" class="btn ms-3 btn-secondary mt-3">
                                    <i class="fa fa-arrow-left"></i> Go Back
                                </a>
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