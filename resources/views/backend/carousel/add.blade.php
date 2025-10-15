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
                    <h1 class="page-title">Carousel</h1>
                </div>
                <div class="ms-auto pageheader-btn">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                        <li class="breadcrumb-item" aria-current="page">Carousel</li>
                        <li class="breadcrumb-item active" aria-current="page">Add Carousel</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->

            <!-- main content start -->
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-header border-bottom">
                            <h3 class="card-title">Carousel form</h3>
                        </div>
                        <div class="card-body">
                            <!-- image  -->
                            <div class="row mb-4">
                                <label for="image" class="form-label">Upload carousel image <span class="text-danger">*</span></label>
                                <div class="col-sm-12 col-md-4">
                                    <input id="image" type="file" class="dropify" data-height="200" />
                                </div>
                            </div>
                            <!-- heading  -->
                            <div class="form-group">
                                <label for="textarea" class="form-label">Carousel heading</label>
                                <textarea class="form-control" maxlength="225" id="textarea" rows="3"></textarea>
                            </div>
                            <!-- link  -->
                            <div class="form-group">
                                <label for="textarea" class="form-label">Learn more link</label>
                                <textarea class="form-control" maxlength="225" id="textarea" rows="3"></textarea>
                            </div>

                            <a href="javascript:void(0)" class="btn btn-primary w-50">Save</a>

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