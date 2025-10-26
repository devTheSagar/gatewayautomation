@extends('backend.master')

@section('title', $service->service_name)

@section('content')
<div class="app-content main-content mt-0">
    <div class="side-app">
        <div class="main-container container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <h1 class="page-title">{{ $service->service_name }}</h1>
                <div class="ms-auto">
                    <a href="{{ route('admin.all.service') }}" class="btn btn-secondary">
                        <i class="fa fa-arrow-left"></i> Back
                    </a>
                </div>
            </div>

            <!-- Service Details Card -->
            <div class="card">
                <div class="card-body">

                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th class="bg-light text-end" width="200">Service Name</th>
                                <td>{{ $service->service_name }}</td>
                            </tr>

                            {{-- section  --}}
                            <tr>
                                <th class="bg-light text-end">Sections</th>
                                <td>
                                    @if(is_array($service->sections) && count($service->sections) > 0)
                                        @foreach($service->sections as $index => $section)
                                            <div class="mb-3 border p-3">
                                                <strong>Section {{ $index + 1 }}:</strong>
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
                                                        class="img-fluid mb-2" 
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
</div>
@endsection
