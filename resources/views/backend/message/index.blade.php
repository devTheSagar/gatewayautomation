@extends('backend.master')

@section('title')
  Messages
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
                                            <form id="bulkDeleteForm" action="{{ route('admin.bulk.delete.messages') }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
											    <div class="table-responsive">
                                                
                                                    <table class="table table-bordered text-nowrap border-bottom w-100" id="responsive-datatable">
                                                        <thead>
                                                            <tr>
                                                                <th>
                                                                    <input type="checkbox"  id="select-all">
                                                                    {{-- <span class="text-danger">*</span> --}}
                                                                </th>
                                                                <th class="wd-15p border-bottom-0">SL</th>
                                                                <th class="wd-15p border-bottom-0">Name</th>
                                                                <th class="wd-25p border-bottom-0">E-mail</th>
                                                                <th class="wd-25p border-bottom-0">Phone</th>
                                                                <th class="wd-25p border-bottom-0">Message</th>
                                                                <th class="wd-25p border-bottom-0">Actions</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($messages as $message)
                                                                <tr @if($message->is_read == 0) class="table-warning" @endif
                                                                    data-href="{{ route('admin.view.messages', $message->id) }}"
                                                                    style="cursor: pointer;"
                                                                >
                                                                    <td>
                                                                        <input type="checkbox" name="ids[]" value="{{ $message->id }}" onclick="event.stopPropagation();">
                                                                    </td>
                                                                    <td>{{ $loop->iteration }}</td>
                                                                    <td>{{ $message->name }}</td>
                                                                    <td>{{ $message->email }}</td>
                                                                    <td>{{ $message->phone }}</td>
                                                                    <td>{{ Str::limit($message->message, 50, '...') }}</td>
                                                                    <td class="text-center">
                                                                        <a href="{{ route('admin.view.messages', $message->id) }}" 
                                                                        class="btn btn-outline-primary" 
                                                                        data-bs-toggle="tooltip" 
                                                                        data-bs-placement="top" 
                                                                        title="Show">
                                                                            <i class="fa-solid fa-eye"></i>
                                                                        </a>

                                                                        <a href="{{ route('admin.delete.message', ['id' => $message->id]) }}" 
                                                                        class="btn btn-outline-danger" 
                                                                        data-bs-toggle="tooltip" 
                                                                        data-bs-placement="top" 
                                                                        title="Delete" 
                                                                        onclick="return confirm('Are you sure you want to delete this item?')">
                                                                            <i class="fa-solid fa-trash"></i>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                            
                                                        </tbody>
                                                    </table>
                                                    {{-- bulk delete button  --}}
                                                    <button type="submit" class="btn btn-danger mt-2"
                                                            onclick="return confirm('Are you sure you want to delete selected messages?');">
                                                            Delete Selected
                                                    </button>
                                                </div>
                                            </form>
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

