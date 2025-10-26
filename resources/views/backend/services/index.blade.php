@extends('backend.master')

@section('title', 'All Services')

@section('content')
<div class="app-content main-content mt-0">
    <div class="side-app">
        <div class="main-container container-fluid">

            <div class="page-header">
                <div><h1 class="page-title">Services</h1></div>
                <div class="ms-auto">
                    <a href="{{ route('admin.add.service') }}" class="btn btn-primary">
                        <i class="fa fa-plus"></i> Add New
                    </a>
                </div>
            </div>

            <div class="card">
                <div class="card-header border-bottom d-flex">
                    <h3 class="card-title">All Services</h3>
                </div>

                <div class="card-body">
                    <table class="table table-bordered text-nowrap" id="responsive-datatable">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Service Name</th>
                                <th>Content Sections</th>
                                <th>Conclusion</th>
                                <th>Status</th>
                                <th width="140">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($services as $key => $service)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $service->service_name }}</td>
                                <td>{{ count($service->sections ?? []) }} Sections</td>
                                <td>{{ Str::limit($service->conclusion, 30) }}</td>

                                {{-- active stataus  --}}
                                <td class="text-center">
                                    <div class="dropdown">
                                        <button class="btn btn-sm dropdown-toggle {{ $service->status == 1 ? 'bg-success' : 'bg-danger' }} text-white border-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            {{ $service->status == 1 ? 'Active' : 'Inactive' }}
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item text-success change-status" href="javascript:void(0)" data-id="{{ $service->id }}" data-status="1">Active</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item text-danger change-status"  href="javascript:void(0)" data-id="{{ $service->id }}" data-status="0">Inactive</a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>

                                <td class="text-center">
                                    <a href="{{ route('admin.show.service', $service->id) }}" class="btn btn-outline-primary btn-sm">
                                        <i class="fa fa-eye"></i>
                                    </a>

                                    <a href="{{ route('admin.edit.service', $service->id) }}" class="btn btn-outline-secondary btn-sm">
                                        <i class="fa fa-edit"></i>
                                    </a>

                                    <form action="{{ route('admin.delete.service', $service->id) }}" method="POST" class="d-inline">
                                        @csrf @method('DELETE')
                                        <button class="btn btn-outline-danger btn-sm" onclick="return confirm('Delete this service?')">
                                            <i class="fa fa-trash"></i>
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
@endsection

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

                    fetch(`{{ url('/admin/service/status') }}/${id}`, {
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
