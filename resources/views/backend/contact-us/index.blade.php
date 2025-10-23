@extends('backend.master')

@section('title')
  Contact Us
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
                    <h1 class="page-title">Contact Us</h1>
                </div>
                <div class="ms-auto pageheader-btn">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                        <li class="breadcrumb-item" aria-current="page">Contact Us</li>
                        <li class="breadcrumb-item active" aria-current="page">Manage Contact Us</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->

            <!-- main content start -->
            <div class="row row-sm">
                <div class="col-lg-12">
                    <div class="card custom-card">
                        <div class="card-header border-bottom">
                            <h3 class="card-title">Contact Us Table</h3>
                        </div>
                        <div class="card-body">

                            <div class="mb-3">
                                @if($contactUs)
                                    <button class="m-1 btn btn-warning" data-bs-toggle="modal" data-bs-target="#editContent">Edit Content</button>
                                    <form action="{{ route('admin.delete.contact-us') }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this content?');">
                                        @csrf
                                        <button type="submit" class="m-1 btn btn-danger">Delete Content</button>
                                    </form>
                                @else
                                    <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addContent" href="javascript:void(0)">Add Content</a>
                                @endif
                            </div>

                            <div class="table-responsive">
                                <table class="table table-bordered mx-auto">
                                    <tbody>
                                        <tr>
                                            <th scope="row" class="bg-light text-end">Address</th>
                                            <td>{{ $contactUs->address ?? 'N/A' }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="bg-light text-end">Email</th>
                                            <td>{{ $contactUs->email ?? 'N/A' }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="bg-light text-end">Day to day</th>
                                            <td>{{ $contactUs->day_to_day ?? 'N/A' }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="bg-light text-end">Time to time</th>
                                            <td>{{ $contactUs->time_to_time ?? 'N/A' }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="bg-light text-end">Tnt</th>
                                            <td>{{ $contactUs->tnt ?? 'N/A' }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="bg-light text-end">Mobile</th>
                                            <td>{{ $contactUs->mobile ?? 'N/A' }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- main content end -->

            <!-- ADD CONTENT MODAL -->
            <div class="modal fade" id="addContent">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                        <form action="{{ route('admin.store.contact-us') }}" method="POST">
                            @csrf
                            <div class="modal-header">
                                <h6 class="modal-title">Add contact us</h6>
                                <button aria-label="Close" type="button" class="btn-close" data-bs-dismiss="modal" ><span aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">
                                <!-- mission  -->
                                <div class="form-group">
                                    <label for="address" class="form-label">Address <span class="text-danger">*</span></label>
                                    <textarea class="form-control" name="address" maxlength="1000" id="address" rows="3"></textarea>
                                </div>
                                <!-- email  -->
                                <div class="form-group">
                                    <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                                    <input type="email" name="email" class="form-control w-100" id="email">
                                </div>
                                <div class="form-group">
                                    <label for="day_to_day" class="form-label">Day to day (day - day) <span class="text-danger">*</span></label>
                                    <input type="text" name="day_to_day" class="form-control w-100" id="day_to_day">
                                </div>
                                <div class="form-group">
                                    <label for="time_to_time" class="form-label">Time to time (__:__AM/PM - __:__AM/PM) <span class="text-danger">*</span></label>
                                    <input type="text" name="time_to_time" class="form-control w-100 w-100" id="time_to_time">
                                </div>
                                <div class="form-group">
                                    <label for="tnt" class="form-label">TNT <span class="text-danger">*</span></label>
                                    <input type="number" name="tnt" class="form-control w-100" id="tnt">
                                </div>
                                <div class="form-group">
                                    <label for="mobile" class="form-label">Mobile <span class="text-danger">*</span></label>
                                    <input type="number" name="mobile" class="form-control w-100" id="mobile">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary" data-bs-target="#modalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Save</button>
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- EDIT CONTENT MODAL -->
            @if($contactUs)
                <div class="modal fade" id="editContent">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                            <form action="{{ route('admin.update.contact-us') }}" method="POST">
                                @csrf
                                <div class="modal-header">
                                    <h6 class="modal-title">Add contact us</h6>
                                    <button aria-label="Close" type="button" class="btn-close" data-bs-dismiss="modal" ><span aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body">
                                    <!-- mission  -->
                                    <div class="form-group">
                                        <label for="address" class="form-label">Address <span class="text-danger">*</span></label>
                                        <textarea class="form-control" name="address" maxlength="1000" id="address" rows="3">{{ $contactUs->address }}</textarea>
                                    </div>
                                    <!-- email  -->
                                    <div class="form-group">
                                        <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                                        <input type="email" name="email" class="form-control w-100" value="{{ $contactUs->email }}" id="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="day_to_day" class="form-label">Day to day (day - day) <span class="text-danger">*</span></label>
                                        <input type="text" name="day_to_day" class="form-control w-100" value="{{ $contactUs->day_to_day }}" id="day_to_day">
                                    </div>
                                    <div class="form-group">
                                        <label for="time_to_time" class="form-label">Time to time (__:__AM/PM - __:__AM/PM) <span class="text-danger">*</span></label>
                                        <input type="text" name="time_to_time" class="form-control w-100 w-100" value="{{ $contactUs->time_to_time }}" id="time_to_time">
                                    </div>
                                    <div class="form-group">
                                        <label for="tnt" class="form-label">TNT <span class="text-danger">*</span></label>
                                        <input type="number" name="tnt" class="form-control w-100" value="{{ $contactUs->tnt }}" id="tnt">
                                    </div>
                                    <div class="form-group">
                                        <label for="mobile" class="form-label">Mobile <span class="text-danger">*</span></label>
                                        <input type="number" name="mobile" class="form-control w-100" value="{{ $contactUs->mobile }}" id="mobile">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary" data-bs-target="#modalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Save</button>
                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
<!-- CONTAINER CLOSED -->
@endsection


@if ($errors->any())
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            @if(! $contactUs) 
                var myModal = new bootstrap.Modal(document.getElementById('addContent'));
                myModal.show();
            @else
                var myModal = new bootstrap.Modal(document.getElementById('editContent'));
                myModal.show();
            @endif
        });
    </script>
@endif
