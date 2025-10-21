@extends('backend.master')

@section('title')
  View Client
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
                    <h1 class="page-title">Client Details</h1>
                </div>
                <div class="ms-auto pageheader-btn">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Client</a></li>
                        <li class="breadcrumb-item active" aria-current="page">View Client</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->

            <!-- main content start -->
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-header border-bottom d-flex">
                            <h3 class="card-title me-3">Client Information</h3>
                            <div class="ms-auto">
                                <a href="#" class="btn btn-success">
                                    <i class="fa fa-edit"></i> Edit Record
                                </a>
                                <a href="{{ route('admin.add.client') }}" class="btn btn-primary">
                                    <i class="fa fa-plus"></i> Add New
                                </a>
                                <a href="{{ route('admin.all.client') }}" class="btn btn-secondary">
                                    <i class="fa fa-list"></i> All Clients
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="text-start mb-4">
                                <img src="{{ asset($client->client_logo) }}" 
                                     alt="{{ $client->alt_txt }}" 
                                     class="img-fluid" 
                                     style="max-height: 300px; border-radius: 10px; border:1px solid #ddd;">
                            </div>

                            <table class="table table-bordered">
                                <tr>
                                    <th style="width: 20%">Alter Text</th>
                                    <td>{{ $client->alt_txt ?? 'N/A' }}</td>
                                </tr>
                                <tr>
                                    <th style="width: 20%">Company Name</th>
                                    <td>{{ $client->company_name ?? 'N/A' }}</td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td>
                                        <span class="badge {{ $client->status ? 'bg-success' : 'bg-danger' }}">
                                            {{ $client->status ? 'Active' : 'Inactive' }}
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Created At</th>
                                    <td>{{ $client->created_at->timezone('Asia/Dhaka')->format('d M Y, h:i A') }}</td>
                                </tr>
                                <tr>
                                    <th>Updated At</th>
                                    <td>{{ $client->updated_at->timezone('Asia/Dhaka')->format('d M Y, h:i A') }}</td>
                                </tr>
                            </table>
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
