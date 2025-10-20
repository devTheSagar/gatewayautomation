@extends('backend.master')

@section('title')
    All Technologies
@endsection

@section('content')
<div class="app-content main-content mt-0">
    <div class="side-app">
        <div class="main-container container-fluid">

            <!-- PAGE-HEADER -->
            <div class="page-header">
                <div>
                    <h1 class="page-title">Technologies</h1>
                </div>
                <div class="ms-auto pageheader-btn">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">All Technologies</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->

            <!-- main content start -->
            <div class="row row-sm">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header border-bottom d-flex">
                            <h3 class="card-title">All Technologies</h3>
                            <a href="{{ route('admin.add.technologies') }}" class="btn btn-primary ms-auto">
                                <i class="fa fa-plus"></i> Add New
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered text-nowrap border-bottom w-100" id="responsive-datatable">
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Image</th>
                                            <th>Alt text</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($technologies as $technology)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>
                                                    <img src="{{ asset($technology->tech_logo) }}" alt="tech image" height="50px" width="50px" style="border-radius:50%; border:1px solid #ccc;">
                                                </td>
                                                <td>{{ $technology->alt_txt }}</td>
                                                <td class="text-center">
                                                    <div class="dropdown">
                                                        <button class="btn btn-sm dropdown-toggle {{ $technology->status == 1 ? 'bg-success' : 'bg-danger' }} text-white border-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                            {{ $technology->status == 1 ? 'Active' : 'Inactive' }}
                                                        </button>
                                                        <ul class="dropdown-menu">
                                                            <li>
                                                                <a class="dropdown-item text-success change-status" href="javascript:void(0)" data-id="{{ $technology->id }}" data-status="1">Active</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item text-danger change-status" href="javascript:void(0)" data-id="{{ $technology->id }}" data-status="0">Inactive</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <button type="button" class="btn btn-outline-secondary editBtn" 
                                                        data-id="{{ $technology->id }}" 
                                                        data-tech_logo="{{ $technology->tech_logo }}" 
                                                        data-alt_txt="{{ $technology->alt_txt }}" 
                                                        data-bs-toggle="modal" data-bs-target="#editTechnologies" 
                                                        title="Edit">
                                                        <i class="fa-solid fa-pen-to-square"></i>
                                                    </button>

                                                    <form action="{{ route('admin.delete.technology', $technology->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this technology?');">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-outline-danger" title="Delete">
                                                            <i class="fa-solid fa-trash"></i>
                                                        </button>
                                                    </form>
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

            <!-- Edit Modal -->
            <div class="modal fade" id="editTechnologies">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <form id="editForm" action="" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" id="edit_id" value="{{ old('id') }}">
                            <div class="modal-header">
                                <h6 class="modal-title">Edit Technologies</h6>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row mb-4">
                                    <label for="tech_logo" class="form-label">Upload Technology Logo <span class="text-danger">*</span></label>
                                    <div class="col-md-4">
                                        <input id="tech_logo" type="file" name="tech_logo" class="dropify" data-height="200"/>
                                        @error('tech_logo')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="alt_txt" class="form-label">Alt Text <span class="text-danger">*</span></label>
                                    <input type="text" id="alt_txt" name="alt_txt" class="form-control @error('alt_txt') is-invalid @enderror" maxlength="250" value="{{ old('alt_txt') }}">
                                    @error('alt_txt')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Update</button>
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {

    // Change Status
    document.querySelectorAll('.change-status').forEach(button => {
        button.addEventListener('click', function () {
            const id = this.dataset.id;
            const status = this.dataset.status;
            const btn = this.closest('.dropdown').querySelector('button');

            fetch(`{{ url('/admin/technology/status') }}/${id}`, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({ status: status })
            })
            .then(res => res.json())
            .then(data => {
                if(data.success){
                    btn.classList.remove('bg-success','bg-danger');
                    btn.classList.add(data.status == 1 ? 'bg-success' : 'bg-danger');
                    btn.textContent = data.status == 1 ? 'Active' : 'Inactive';
                }
            });
        });
    });

    // Edit Button
    document.querySelectorAll('.editBtn').forEach(button => {
        button.addEventListener('click', function () {
            const form = document.getElementById('editForm');
            form.action = "/admin/update/technology/" + this.dataset.id;
            document.getElementById('edit_id').value = this.dataset.id;
            document.getElementById('alt_txt').value = this.dataset.alt_txt;

            // Dropify image preview
            let drEvent = $('#tech_logo').dropify();
            drEvent = drEvent.data('dropify');
            drEvent.resetPreview();
            drEvent.clearElement();
            drEvent.settings['defaultFile'] = "{{ asset('') }}" + this.dataset.tech_logo;
            drEvent.destroy();
            drEvent.init();
        });
    });

    // Open modal on validation error
    @if($errors->any())
        var form = document.getElementById('editForm');
        let oldId = "{{ old('id') }}";
        if(oldId){
            form.action = "/admin/update/technology/" + oldId;
            document.getElementById('edit_id').value = oldId;
            document.getElementById('alt_txt').value = "{{ old('alt_txt') }}";

            let drEvent = $('#tech_logo').dropify();
            drEvent = drEvent.data('dropify');
            drEvent.resetPreview();
            drEvent.clearElement();
            drEvent.destroy();
            drEvent.init();
        }
        new bootstrap.Modal(document.getElementById('editTechnologies')).show();
    @endif

});
</script>
@endpush
