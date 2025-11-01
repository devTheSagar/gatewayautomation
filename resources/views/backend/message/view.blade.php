@extends('backend.master')

@section('title')
  View Message
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
                        <h1 class="page-title">Carousel</h1>
                    </div>
                    <div class="ms-auto pageheader-btn">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">All Messages</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->

                <!-- main content start -->
                <div class="row row-sm">
                    <div class="col-lg-12">
                        <div class="card custom-card">
                            <div class="card-header border-bottom d-flex">
                                <h3 class="card-title">Bordered Table</h3>
                                <div class="ms-auto">
                                    <a href="{{ route('admin.messages') }}" class="btn btn-secondary">
                                        <i class="fa fa-list"></i> All Messages
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered mx-auto">
                                        <tbody>
                                            <tr>
                                                <th scope="row" class="bg-light text-end">Name</th>
                                                <td>{{ $message->name }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="bg-light text-end">Phone</th>
                                                <td>{{ $message->phone }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="bg-light text-end">Email</th>
                                                <td>{{ $message->email }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="bg-light text-end">Message</th>
                                                <td>{{ $message->message }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="bg-light text-end">Received at</th>
                                                <td>{{ $message->created_at->setTimezone('Asia/Dhaka')->format('d M Y, h:i A') }}</td>
                                            </tr>
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