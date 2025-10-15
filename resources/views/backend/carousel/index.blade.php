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
                                                <td><a href="{{ $carousel->learn_more_link }}">{{ Str::limit($carousel->learn_more_link, 20, '...') }}</a></td>
                                                <td class="text-center">
                                                    <div class="dropdown">
                                                        <button class="btn btn-sm dropdown-toggle bg-success text-white border-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                            Active
                                                        </button>
                                                        <ul class="dropdown-menu">
                                                            <li>
                                                                <a class="dropdown-item text-success" href="#">Active</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item text-danger" href="#">Inactive</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
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
            
        </div>
    </div>
</div>
    <!-- CONTAINER CLOSED -->
</div>

@endsection