@extends('backend.master')

@section('title')
  Add Carousel
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
                    <h1 class="page-title">Messages</h1>
                </div>
                <div class="ms-auto pageheader-btn">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Messages</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->

            <!-- main content start -->
            <div class="row row-sm">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header border-bottom">
                            <h3 class="card-title">All Messages</h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered text-nowrap border-bottom w-100" id="responsive-datatable">
                                    <thead>
                                        <tr>
                                            <th class="wd-15p border-bottom-0">SL</th>
                                            <th class="wd-15p border-bottom-0">Image</th>
                                            <th class="wd-20p border-bottom-0">Heading</th>
                                            <th class="wd-15p border-bottom-0">Link</th>
                                            <th class="wd-15p border-bottom-0">Status</th>
                                            <th class="wd-10p border-bottom-0">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($carousels as $carousel)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>
                                                    <img src="{{ asset($carousel->carousel_image) }}" alt="carousel image" height="50px" width="50px" style="border-radius: 50%; border:1px solid rgb(206, 206, 206)">
                                                </td>
                                                {{-- <td>{{ $carousel->carousel_heading }}</td> --}}
                                                <td>{{ Str::limit($carousel->carousel_heading, 20, '...') }}</td>
                                                <td><a href="{{ $carousel->learn_more_link }}" target="_blank">{{ Str::limit($carousel->learn_more_link, 20, '...') }}</a></td>

                                                {{-- active stataus  --}}
                                                <td class="text-center">
                                                    <div class="dropdown">
                                                        <button class="btn btn-sm dropdown-toggle {{ $carousel->status == 1 ? 'bg-success' : 'bg-danger' }} text-white border-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                            {{ $carousel->status == 1 ? 'Active' : 'Inactive' }}
                                                        </button>
                                                        <ul class="dropdown-menu">
                                                            <li>
                                                                <a class="dropdown-item text-success change-status" href="javascript:void(0)" data-id="{{ $carousel->id }}" data-status="1">Active</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item text-danger change-status"  href="javascript:void(0)" data-id="{{ $carousel->id }}" data-status="0">Inactive</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>

                                                <td class="text-center">
                                                    <a href="{{ $carousel->slug ? route('admin.view.carousel', $carousel->slug) : '#' }}" class="btn btn-outline-primary" title="Show">
                                                        <i class="fa-solid fa-eye"></i>
                                                    </a>
                                                    <a href="{{  route('admin.edit.carousel', $carousel->id) }}" class="btn btn-outline-secondary" title="Edit">
                                                        <i class="fa-solid fa-pen-to-square"></i>
                                                    </a>
                                                    <form action="{{ route('admin.delete.carousel', $carousel->id) }}" method="POST" class="d-inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-outline-danger" title="Delete" onclick="return confirm('Are you sure you want to delete this carousel?')">
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