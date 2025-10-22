@extends('backend.master')

@section('title')
  Gallery
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
                    <h1 class="page-title">Gallery</h1>
                </div>
                <div class="ms-auto pageheader-btn">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Gallery</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->

            <!-- main content start -->
            <div class="row row-sm">
                <div class="col-lg-12">
                    <div class="card custom-card">
                        <div class="card-header border-bottom">
                            <h3 class="card-title">Gallery Table</h3>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <a class="btn btn-primary" data-bs-target="#modalToggle" data-bs-toggle="modal" href="javascript:void(0)">Add Content</a>
                                <button class="m-1 btn btn-danger">Delete Content</button>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-bordered text-nowrap border-bottom w-100" id="responsive-datatable">
                                    <thead>
                                        <tr>
                                            <th class="wd-15p border-bottom-0">SL</th>
                                            <th class="wd-15p border-bottom-0">Image</th>
                                            <th class="wd-25p border-bottom-0">Status</th>
                                            <th class="wd-25p border-bottom-0">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($gallery as $galleryImage)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>
                                                    <img src="{{ asset($galleryImage->gallery_image) }}" alt="gallery image" height="50px" width="50px" style="border-radius: 50%; border:1px solid rgb(206, 206, 206)">
                                                </td>
                                                {{-- active stataus  --}}
                                                <td class="text-center">
                                                    <div class="dropdown">
                                                        <button class="btn btn-sm dropdown-toggle {{ $galleryImage->status == 1 ? 'bg-success' : 'bg-danger' }} text-white border-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                            {{ $galleryImage->status == 1 ? 'Active' : 'Inactive' }}
                                                        </button>
                                                        <ul class="dropdown-menu">
                                                            <li>
                                                                <a class="dropdown-item text-success change-status" href="javascript:void(0)" data-id="{{ $galleryImage->id }}" data-status="1">Active</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item text-danger change-status"  href="javascript:void(0)" data-id="{{ $galleryImage->id }}" data-status="0">Inactive</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                {{-- <td>active</td> --}}
                                                <td class="text-center">
                                                    <button type="button" class="btn btn-outline-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Show">
                                                        <i class="fa-solid fa-eye"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-outline-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                        <i class="fa-solid fa-pen-to-square"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-outline-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                        <i class="fa-solid fa-trash"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- main content end -->

            <!-- TOGGLE MODAL ADD CONTENT FORM -->
            <div class="modal fade " id="modalToggle">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                        <form action="{{ route('admin.add.gallery') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-header">
                                <h6 class="modal-title">Add content</h6>
                                <button aria-label="Close" class="btn-close" data-bs-dismiss="modal" ><span aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">
                                <div>
                                    {{-- <input type="file" name="gallery_image" accept=" image/jpeg, image/png, image/jpg" /> --}}
                                    <input id="" name="gallery_image" type="file" class="dropify" data-height="200" />
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-primary" type="submit" data-bs-target="#modalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Save</button>
                                <button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button>
                            </div>
                        </form>
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
    <!-- ACTIVE INACTIVE STATUS SELECT FOR CAROUSEL PAGE  -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.querySelectorAll('.change-status').forEach(button => {
                button.addEventListener('click', function (event) {
                    event.preventDefault(); // prevent default link action
                    const id = this.getAttribute('data-id');
                    const status = this.getAttribute('data-status');
                    const dropdown = this.closest('.dropdown'); // reference to the parent dropdown
                    const btn = dropdown.querySelector('button'); // the button to update

                    fetch(`{{ url('/admin/carousel/status') }}/${id}`, {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}',
                            'Content-Type': 'application/json'
                        },
                        body: JSON.stringify({ status: status })
                    })
                    .then(res => res.json())
                    .then(data => {
                        if (data.success) {
                            // Update button color and text
                            btn.classList.remove('bg-success', 'bg-danger');
                            btn.classList.add(data.status == 1 ? 'bg-success' : 'bg-danger');
                            btn.textContent = data.status == 1 ? 'Active' : 'Inactive';
                        }
                    })
                    .catch(err => console.error(err));
                });
            });
        });
    </script>
@endpush