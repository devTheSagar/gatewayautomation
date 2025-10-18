@extends('backend.master')

@section('title')
  Content
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
                        <li class="breadcrumb-item active" aria-current="page">Manage Content</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->

            <!-- main content start -->
            <div class="row row-sm">
                <div class="col-lg-12">
                    <div class="card custom-card">
                        <div class="card-header border-bottom">
                            <h3 class="card-title">Content Table</h3>
                        </div>
                        <div class="card-body">

                            <div class="mb-3">
                                @if($content)
                                    <button class="m-1 btn btn-warning" data-bs-toggle="modal" data-bs-target="#editContent">Edit Content</button>
                                    <form action="{{ route('admin.delete.content') }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this content?');">
                                        @csrf
                                        <button type="submit" class="m-1 btn btn-danger">Delete Content</button>
                                    </form>

                                @else
                                    <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addContent" href="javascript:void(0)">Add Content</a>
                                @endif
                            </div>

                            <div class="table-responsive">
                                <table class="table table-bordered mx-auto">
                                    <tbody>
                                        <tr>
                                            <th scope="row" class="bg-light text-end">Heading</th>
                                            <td>{{ $content?->heading ?? 'No content available' }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="bg-light text-end">Sub heading</th>
                                            <td>{{ $content?->sub_heading ?? 'No content available' }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="bg-light text-end">Content</th>
                                            <td>{{ $content?->content ?? 'No content available' }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- main content end -->

            <!-- ADD CONTENT MODAL -->
            <div class="modal fade" id="addContent">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                        <form action="{{ route('admin.store.content') }}" method="POST">
                            @csrf
                            <div class="modal-header">
                                <h6 class="modal-title">Add Content</h6>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group mb-3">
                                    <label class="form-label">Home Page Heading <span class="text-danger">*</span></label>
                                    <input type="text" name="heading" class="form-control @error('heading') is-invalid @enderror" maxlength="250" value="{{ old('heading') }}">
                                    @error('heading')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-label">Home Page Sub-heading <span class="text-danger">*</span></label>
                                    <textarea class="form-control @error('sub_heading') is-invalid @enderror" name="sub_heading" maxlength="500" rows="2" >{{ old('sub_heading') }}</textarea>
                                    @error('sub_heading')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-label">Homepage Content <span class="text-danger">*</span></label>
                                    <textarea class="form-control @error('content') is-invalid @enderror" name="content" maxlength="2000" rows="4" >{{ old('content') }}</textarea>
                                    @error('content')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-primary" type="submit">Save</button>
                                <button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- EDIT CONTENT MODAL -->
            @if($content)
            <div class="modal fade" id="editContent">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                        <form action="{{ route('admin.update.content') }}" method="POST">
                            @csrf
                            <div class="modal-header">
                                <h6 class="modal-title">Edit Content</h6>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group mb-3">
                                    <label class="form-label">Home Page Heading <span class="text-danger">*</span></label>
                                    <input type="text" name="heading" class="form-control @error ('heading') is-invalid @enderror" maxlength="250" value="{{ $content->heading }}" >
                                    @error('heading')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-label">Home Page Sub-heading <span class="text-danger">*</span></label>
                                    <textarea class="form-control @error('sub_heading')  is-invalid @enderror" name="sub_heading" maxlength="500" rows="2" >{{ $content->sub_heading }}</textarea>
                                    @error('sub_heading')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-label">Homepage Content <span class="text-danger">*</span></label>
                                    <textarea class="form-control @error('content') is-invalid @enderror" name="content" maxlength="2000" rows="4" >{{ $content->content }}</textarea>
                                    @error('content')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-primary" type="submit">Update</button>
                                <button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            @endif

        </div>
    </div>
</div>
<!-- CONTAINER CLOSED -->
@endsection


@if ($errors->any())
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            @if(! $content) 
                var myModal = new bootstrap.Modal(document.getElementById('addContent'));
                myModal.show();
            @else
                var myModal = new bootstrap.Modal(document.getElementById('editContent'));
                myModal.show();
            @endif
        });
    </script>
@endif
