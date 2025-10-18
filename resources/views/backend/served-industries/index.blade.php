@extends('backend.master')

@section('title')
  Served Industries
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
                        <li class="breadcrumb-item active" aria-current="page">All Industries</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->

            <!-- main content start -->
            <div class="row row-sm">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header border-bottom">
                            <h3 class="card-title">All Industries</h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered text-nowrap border-bottom w-100" id="responsive-datatable">
                                    <thead>
                                        <tr>
                                            <th class="wd-15p border-bottom-0">SL</th>
                                            <th class="wd-15p border-bottom-0">Icon</th>
                                            <th class="wd-25p border-bottom-0">Industry</th>
                                            <th class="wd-25p border-bottom-0">Status</th>
                                            <th class="wd-25p border-bottom-0">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($servedIndustries as $servedIndustry)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>
                                                    <span class="fs-4">{!! $servedIndustry->icon_code !!}</span>
                                                </td>
                                                <td>{{ $servedIndustry->industry }}</td>
                                                <td class="text-center">
                                                    <div class="dropdown">
                                                        <button class="btn btn-sm dropdown-toggle {{ $servedIndustry->status == 1 ? 'bg-success' : 'bg-danger' }} text-white border-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                            {{ $servedIndustry->status == 1 ? 'Active' : 'Inactive' }}
                                                        </button>
                                                        <ul class="dropdown-menu">
                                                            <li>
                                                                <a class="dropdown-item text-success change-status" href="javascript:void(0)" data-id="{{ $servedIndustry->id }}" data-status="1">Active</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item text-danger change-status" href="javascript:void(0)" data-id="{{ $servedIndustry->id }}" data-status="0">Inactive</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <button type="button" 
                                                        class="btn btn-outline-secondary editBtn" 
                                                        data-id="{{ $servedIndustry->id }}"
                                                        data-icon="{{ $servedIndustry->icon_code }}"
                                                        data-industry="{{ $servedIndustry->industry }}"
                                                        data-bs-toggle="modal" 
                                                        data-bs-target="#editServedIndustries" 
                                                        title="Edit">
                                                        <i class="fa-solid fa-pen-to-square"></i>
                                                    </button>

                                                    <form action="{{ route('admin.delete.served-industries', $servedIndustry->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this industry?');">
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
            <div class="modal fade" id="editServedIndustries">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                        <form id="editForm" action="" method="POST">
                            @csrf
                            <input type="hidden" name="id" id="edit_id" value="{{ old('id') }}">
                            <div class="modal-header">
                                <h6 class="modal-title">Edit Served Industries</h6>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group mb-3">
                                    <label for="icon" class="form-label">Icon code (Bootstrap or Font awesome only) <span class="text-danger">*</span></label>
                                    <input type="text" name="icon_code" class="form-control @error('icon_code') is-invalid @enderror" maxlength="250" id="icon" value="{{ old('icon_code') }}">
                                    @error('icon_code')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <label for="indistry" class="form-label">Industry <span class="text-danger">*</span></label>
                                    <input type="text" name="industry" class="form-control @error('industry') is-invalid @enderror" maxlength="250" id="indistry" value="{{ old('industry') }}">
                                    @error('industry')
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

        </div>
    </div>
</div>
<!-- CONTAINER CLOSED -->
</div>

@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {

    // Change Status
    document.querySelectorAll('.change-status').forEach(button => {
        button.addEventListener('click', function (event) {
            event.preventDefault();
            const id = this.dataset.id;
            const status = this.dataset.status;
            const dropdown = this.closest('.dropdown');
            const btn = dropdown.querySelector('button');

            fetch(`{{ url('/admin/served-industries/status') }}/${id}`, {
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
                    btn.classList.remove('bg-success', 'bg-danger');
                    btn.classList.add(data.status == 1 ? 'bg-success' : 'bg-danger');
                    btn.textContent = data.status == 1 ? 'Active' : 'Inactive';
                }
            })
            .catch(err => console.error(err));
        });
    });

    // Edit Button
    document.querySelectorAll('.editBtn').forEach(button => {
        button.addEventListener('click', function () {
            const form = document.getElementById('editForm');
            form.action = "/admin/update/served-industries/" + this.dataset.id;
            document.getElementById('edit_id').value = this.dataset.id;
            document.getElementById('icon').value = this.dataset.icon;
            document.getElementById('indistry').value = this.dataset.industry;
        });
    });

    // Open modal on validation error
    @if($errors->any())
        var form = document.getElementById('editForm');
        let oldId = "{{ old('id') }}";
        if(oldId){
            form.action = "/admin/update/served-industries/" + oldId;
            document.getElementById('edit_id').value = oldId;
            document.getElementById('icon').value = `{!! old('icon_code') !!}`;
            document.getElementById('indistry').value = "{{ old('industry') }}";
        }
        var myModal = new bootstrap.Modal(document.getElementById('editServedIndustries'));
        myModal.show();
    @endif

});
</script>
@endpush
