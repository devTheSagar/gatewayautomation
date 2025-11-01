@extends('backend.master')

@section('title')
  Brochure
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
                    <h1 class="page-title">Brochure</h1>
                </div>
                <div class="ms-auto pageheader-btn">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Brochure</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->

            <!-- main content start -->
            <div class="row row-sm">
                <div class="col-lg-12">
                    <div class="card custom-card">
                        <div class="card-header border-bottom">
                            <h3 class="card-title">Brochure Table</h3>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <a class="btn btn-primary" data-bs-target="#modalToggle" data-bs-toggle="modal" href="javascript:void(0)"><i class="fa fa-upload"></i> Upload Brochure</a>
                            </div>
                            <p>Uploading new brochure will replace the old one.</p>
                            <div class="table-responsive">
                                <table class="table table-bordered text-nowrap border-bottom w-100" id="responsive-datatable">
                                    <thead>
                                        <tr>
                                            <th class="wd-15p border-bottom-0">Brochure</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if($brochure)
                                            <tr>
                                                <td>
                                                    <a href="{{ asset($brochure->brochure) }}" target="_blank">
                                                        {{ basename($brochure->brochure) }}  {{-- shows only file name --}}
                                                    </a>
                                                </td>
                                            </tr>
                                        @else
                                            <tr>
                                                <td class="text-center text-danger">No brochure uploaded yet.</td>
                                            </tr>
                                        @endif
                                    </tbody>

                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- main content end -->

            <!-- TOGGLE MODAL ADD CONTENT FORM -->
            <!-- UPLOAD BROCHURE MODAL -->
            <div class="modal fade" id="modalToggle">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                        <form action="{{ route('admin.add.brochure') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-header">
                                <h6 class="modal-title">Upload Brochure</h6>
                                <button aria-label="Close" type="button" class="btn-close" data-bs-dismiss="modal" ><span aria-hidden="true">&times;</span></button>
                            </div>

                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="brochureFile" class="form-label">Select Brochure (PDF)</label>
                                    <input type="file" name="brochure" id="brochureFile" class="form-control" accept=".pdf" required>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Upload</button>
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>




            <!-- IMAGE VIEW MODAL -->
            <div class="modal fade" id="showImageModal" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Gallery Image</h5>
                            <button aria-label="Close" type="button" class="btn-close" data-bs-dismiss="modal" ><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body text-center">
                            <img id="modalImagePreview" src="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- CONTAINER CLOSED -->
</div>
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



@push('scripts')
    

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.querySelectorAll('.showImageBtn').forEach(btn => {
                btn.addEventListener('click', function () {
                    let imgUrl = this.getAttribute('data-img');
                    document.getElementById('modalImagePreview').src = imgUrl;
                    var modal = new bootstrap.Modal(document.getElementById('showImageModal'));
                    modal.show();
                });
            });
        });
    </script>

@endpush