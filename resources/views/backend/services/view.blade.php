@extends('backend.master')

@section('title')
  View Service
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
                    <h1 class="page-title">Service Details</h1>
                </div>
                <div class="ms-auto pageheader-btn">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.all.carousel') }}">Carousel</a></li>
                        <li class="breadcrumb-item active" aria-current="page">View Carousel</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->

            <!-- main content start -->
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-header border-bottom d-flex">
                            <h3 class="card-title me-3">Service Information</h3>
                            <div class="ms-auto">
                                <a href="{{ route('admin.add.service') }}" class="btn btn-primary">
                                    <i class="fa fa-plus"></i> Add New
                                </a>
                                <a href="{{ route('admin.edit.service', $service->id) }}" class="btn btn-success">
                                    <i class="fa fa-edit"></i> Edit Record
                                </a>
                                <a href="{{ route('admin.all.service') }}" class="btn btn-secondary">
                                    <i class="fa fa-list"></i> All Service
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th class="bg-light text-end" width="200">Service Name</th>
                                        <td>{{ $service->service_name ?? '' }}</td>
                                    </tr>
                                    <tr>
                                        <th class="bg-light text-end" width="200">Service Logo</th>
                                        <td>{!! $service->service_logo ?? '' !!}</td>
                                    </tr>

                                    {{-- section  --}}
                                    <tr>
                                        <th class="bg-light text-end">Sections</th>
                                        <td>
                                            @if(is_array($service->sections) && count($service->sections) > 0)
                                                @foreach($service->sections as $index => $section)
                                                    <div class="mb-3 border p-3">
                                                        <strong class="text-success">Section {{ $index + 1 }}:</strong>
                                                        <p><strong>Heading:</strong> {{ $section['heading'] ?? 'N/A' }}</p>
                                                        <p><strong>Content:</strong> {{ $section['content'] ?? 'N/A' }}</p>

                                                        @if(!empty($section['features']) && is_array($section['features']))
                                                            <p><strong>Feature List:</strong></p>
                                                            <ul>
                                                                @foreach($section['features'] as $featureIndex => $feature)
                                                                    <li>{{ $featureIndex + 1 }}. {{ $feature }}</li>
                                                                @endforeach
                                                            </ul>
                                                        @else
                                                            <p><strong>Feature List:</strong> N/A</p>
                                                        @endif

                                                        @if(!empty($section['image']))
                                                            <img src="{{ asset($section['image']) }}" 
                                                                alt="Section Image" 
                                                                class="img-fluid mt-2 mb-2" 
                                                                style="max-width: 300px;">
                                                        @else
                                                            <p>Image: N/A</p>
                                                        @endif
                                                    </div>
                                                @endforeach
                                            @else
                                                <span>No sections added.</span>
                                            @endif
                                        </td>
                                    </tr>

                                    <tr>
                                        <th class="bg-light text-end">Conclusion</th>
                                        <td>{{ $service->conclusion }}</td>
                                    </tr>

                                    <tr>
                                        <th class="bg-light text-end">Status</th>
                                        <td>
                                            <span class="badge bg-{{ $service->status ? 'success' : 'danger' }}">
                                                {{ $service->status ? 'Active' : 'Inactive' }}
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="bg-light text-end">Created at</th>
                                        <td>{{ $service->created_at->timezone('Asia/Dhaka')->format('d M Y, h:i A') }}</td>
                                    </tr>
                                    <tr>
                                        <th class="bg-light text-end">Updated at</th>
                                        <td>{{ $service->updated_at->timezone('Asia/Dhaka')->format('d M Y, h:i A') }}</td>
                                    </tr>
                                </tbody>
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




















