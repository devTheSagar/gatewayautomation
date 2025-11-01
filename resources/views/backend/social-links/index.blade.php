@extends('backend.master')

@section('title')
  Social Links
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
                    <h1 class="page-title">Social Links</h1>
                </div>
                <div class="ms-auto pageheader-btn">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Social Links</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->

            <!-- main content start -->
            <div class="row row-sm">
                <div class="col-lg-12">
                    <div class="card custom-card">
                        <div class="card-header border-bottom">
                            <h3 class="card-title">Social Links Table</h3>
                        </div>
                        <div class="card-body">

                            <div class="mb-3">
                                @if($socialLink)
                                    <button class="m-1 btn btn-success" data-bs-toggle="modal" data-bs-target="#editContent"><i class="fa fa-edit"></i>Edit Links</button>
                                    <form action="{{ route('admin.delete.social-links') }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this content?');">
                                        @csrf
                                        <button type="submit" class="m-1 btn btn-danger"><i class="fa fa-trash"></i>Delete Links</button>
                                    </form>
                                @else
                                    <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addContent" href="javascript:void(0)"><i class="fa fa-plus"></i>Add Content</a>
                                @endif
                            </div>

                            <div class="table-responsive">
                                <table class="table table-bordered mx-auto">
                                    <tbody>
                                        <tr>
                                            <th scope="row" class="bg-light text-end">Facebook</th>
                                            <td>{{ $socialLink->facebook ?? 'N/A' }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="bg-light text-end">Instagram</th>
                                            <td>{{ $socialLink->instagram ?? 'N/A' }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="bg-light text-end">Twitter</th>
                                            <td>{{ $socialLink->twitter ?? 'N/A' }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="bg-light text-end">Linkedin</th>
                                            <td>{{ $socialLink->linkedin ?? 'N/A' }}</td>
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
                        <form action="{{ route('admin.store.social-links') }}" method="POST">
                            @csrf
                            <div class="modal-header">
                                <h6 class="modal-title">Add Social Links</h6>
                                <button aria-label="Close" type="button" class="btn-close" data-bs-dismiss="modal" ><span aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="facebook" class="form-label">Facebook <span class="text-danger">*</span></label>
                                    <input type="text" name="facebook" class="form-control w-100 @error ('facebook') is-invalid @enderror" value="{{ old('facebook', $socialLink->facebook ?? '') }}" id="facebook">
                                    @error('facebook')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                
                                <div class="form-group">
                                    <label for="instagram" class="form-label">Instagram <span class="text-danger">*</span></label>
                                    <input type="text" name="instagram" class="form-control w-100 @error ('instagram') is-invalid @enderror" value="{{ old('instagram', $socialLink->instagram ?? '') }}" id="instagram">
                                    @error('instagram')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                
                                <div class="form-group">
                                    <label for="twitter" class="form-label">Twitter <span class="text-danger">*</span></label>
                                    <input type="text" name="twitter" class="form-control w-100 @error ('twitter') is-invalid @enderror" value="{{ old('twitter', $socialLink->twitter ?? '') }}" id="twitter">
                                    @error('twitter')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                
                                <div class="form-group">
                                    <label for="linkedin" class="form-label">Linkedin <span class="text-danger">*</span></label>
                                    <input type="text" name="linkedin" class="form-control w-100 @error ('linkedin') is-invalid @enderror" value="{{ old('linkedin', $socialLink->linkedin ?? '') }}" id="linkedin">
                                    @error('linkedin')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary" data-bs-target="#modalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Save</button>
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- EDIT CONTENT MODAL -->
            @if($socialLink)
                <div class="modal fade" id="editContent">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                            <form action="{{ route('admin.update.social-links') }}" method="POST">
                            @csrf
                            <div class="modal-header">
                                <h6 class="modal-title">Add contact us</h6>
                                <button aria-label="Close" type="button" class="btn-close" data-bs-dismiss="modal" ><span aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="facebook" class="form-label">Facebook <span class="text-danger">*</span></label>
                                    <input type="text" name="facebook" class="form-control w-100 @error ('facebook') is-invalid @enderror" value="{{ old('facebook', $socialLink->facebook ?? '') }}" id="facebook">
                                    @error('facebook')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                
                                <div class="form-group">
                                    <label for="instagram" class="form-label">Instagram <span class="text-danger">*</span></label>
                                    <input type="text" name="instagram" class="form-control w-100 @error ('instagram') is-invalid @enderror" value="{{ old('instagram', $socialLink->instagram ?? '') }}" id="instagram">
                                    @error('instagram')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                
                                <div class="form-group">
                                    <label for="twitter" class="form-label">Twitter <span class="text-danger">*</span></label>
                                    <input type="text" name="twitter" class="form-control w-100 @error ('twitter') is-invalid @enderror" value="{{ old('twitter', $socialLink->twitter) }}" id="twitter">
                                    @error('twitter')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                
                                <div class="form-group">
                                    <label for="linkedin" class="form-label">Linkedin <span class="text-danger">*</span></label>
                                    <input type="text" name="linkedin" class="form-control w-100 @error ('linkedin') is-invalid @enderror" value="{{ old('linkedin', $socialLink->linkedin) }}" id="linkedin">
                                    @error('linkedin')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary" data-bs-target="#modalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Save</button>
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
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
            @if(! $socialLink) 
                var myModal = new bootstrap.Modal(document.getElementById('addContent'));
                myModal.show();
            @else
                var myModal = new bootstrap.Modal(document.getElementById('editContent'));
                myModal.show();
            @endif
        });
    </script>
@endif
