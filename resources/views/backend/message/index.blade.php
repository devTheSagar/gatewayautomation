@extends('backend.master')

@section('title')
  Messages
@endsection

@section('content')

    <main>
        <div class="container-fluid px-4">
            <h2 class="mt-4">All Messages</h2>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Messages</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Messages DataTable
                </div>
                <div class="card-body table-responsive">
                    {{-- bulk delete form  --}}
                    <form id="bulkDeleteForm" action="{{ route('admin.bulk.delete.messages') }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <table id="messages-table" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>
                                        <input type="checkbox" id="select-all">
                                        {{-- <span class="text-danger">*</span> --}}
                                    </th>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Message</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>
                                        <input type="checkbox" id="select-all-footer">
                                        {{-- <span class="text-danger">*</span> --}}
                                    </th>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Message</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach ($messages as $message)
                                    <tr 
                                        @if($message->is_read == 0) class="table-warning" @endif
                                        data-href="{{ route('admin.view.messages', $message->id) }}"
                                        style="cursor: pointer;"
                                    >
                                        <td>
                                            <input type="checkbox" name="ids[]" value="{{ $message->id }}" onclick="event.stopPropagation();">
                                        </td>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $message->name }}</td>
                                        <td>{{ $message->phone }}</td>
                                        <td>{{ $message->email }}</td>
                                        <td>{{ Str::limit($message->message, 50, '...') }}</td>
                                        <td>
                                            <a href="{{ route('admin.view.messages', $message->id) }}" 
                                            class="btn btn-sm btn-primary"
                                            onclick="event.stopPropagation();"
                                            title="View">
                                                <i class="bi bi-eye"></i>
                                            </a>

                                            <a href="{{ route('admin.delete.message', ['id' => $message->id]) }}" 
                                            class="btn btn-sm btn-danger"
                                            onclick="event.stopPropagation(); return confirm('Are you sure you want to delete this message?');"
                                            title="Delete">
                                                <i class="bi bi-trash"></i>
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
                    </form>
                </div>
            </div>
        </div>
    </main>

@endsection

