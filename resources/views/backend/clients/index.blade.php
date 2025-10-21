@extends('backend.master')

@section('title')
  All Clients
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
                    <h1 class="page-title">Clients</h1>
                </div>
                <div class="ms-auto pageheader-btn">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">All Clients</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->

            <!-- main content start -->
            <div class="row row-sm">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header border-bottom">
                            <h3 class="card-title">All Clients</h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered text-nowrap border-bottom w-100" id="responsive-datatable">
                                    <thead>
                                        <tr>
                                            <th class="wd-15p border-bottom-0">SL</th>
                                            <th class="wd-15p border-bottom-0">Company logo</th>
                                            <th class="wd-20p border-bottom-0">Logo alt text</th>
                                            <th class="wd-20p border-bottom-0">Company name</th>
                                            <th class="wd-15p border-bottom-0">Status</th>
                                            <th class="wd-10p border-bottom-0">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($clients as $client)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>
                                                    <img src="{{ asset($client->client_logo) }}" alt="carousel image" height="50px" width="50px" style="border-radius: 50%; border:1px solid rgb(206, 206, 206)">
                                                </td>
                                                <td>{{ $client->alt_txt }}</td>
                                                <td>{{ $client->company_name }}</td>
                                                {{-- active stataus  --}}
                                                <td class="text-center">
                                                    <div class="dropdown">
                                                        <button class="btn btn-sm dropdown-toggle {{ $client->status == 1 ? 'bg-success' : 'bg-danger' }} text-white border-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                            {{ $client->status == 1 ? 'Active' : 'Inactive' }}
                                                        </button>
                                                        <ul class="dropdown-menu">
                                                            <li>
                                                                <a class="dropdown-item text-success change-status" href="javascript:void(0)" data-id="{{ $client->id }}" data-status="1">Active</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item text-danger change-status"  href="javascript:void(0)" data-id="{{ $client->id }}" data-status="0">Inactive</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <a href="{{ route('admin.view.client', $client->id) }}" class="btn btn-outline-primary" title="Show">
                                                        <i class="fa-solid fa-eye"></i>
                                                    </a>
                                                    <a href="{{  route('admin.edit.client', $client->id) }}" class="btn btn-outline-secondary" title="Edit">
                                                        <i class="fa-solid fa-pen-to-square"></i>
                                                    </a>
                                                    <form action="{{ route('admin.delete.client', $client->id) }}" method="POST" class="d-inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-outline-danger" title="Delete" onclick="return confirm('Are you sure you want to delete this client?')">
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
            
        </div>
    </div>
</div>
    <!-- CONTAINER CLOSED -->
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

                    fetch(`{{ url('/admin/client/status') }}/${id}`, {
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