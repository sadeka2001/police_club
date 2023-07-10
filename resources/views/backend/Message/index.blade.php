@extends('backend.master')
@section('content')
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-medal icon-gradient bg-tempting-azure"></i>
                    </div>
                    <div>
                      Contact Message 
                    </div>
                </div>
                <div class="page-title-actions">
                    <a href="{{ route('admin.message.create') }}" class="mb-2 mr-2 btn btn-primary"><i
                            class="fa fa-plus-circle"></i> Back List </a>
                </div>
            </div>
        </div>
        <div class="main-card mb-3 card">
            <div class="card-body">
                <table class="table table-bordered" id="table">
                    <thead>
                        <div class="row ">
                            <tr>
                                <th scope="col">S/N</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>


                        <th scope="col">Subject</th>

                        <th scope="col">status</th>
                        <th scope="col">Action</th>
                            </tr>
                        </div>
                    </thead>
                    <tbody>
                        <div class="row">

                            @foreach ($message as $messages)
                        <tr>
                            <td>{{ $messages->id }}</td>
                            <td>{{ $messages->name }}</td>
                            <td>{{ $messages->email}}</td>
                            <td>{{ $messages->subject}}</td>
                           
                            <td>
                                @if ($messages->status == true)
                                    <span class="badge bg-success">Active</span>
                                @endif
                                @if ($messages->status == false)
                                    <span class="badge bg-danger">Inactive</span>
                                @endif
                            </td>
                            
                                    <td>
                                        <div class="action-btns">
                                            <a href="{{ route('admin.message.show', $messages->id) }}"
                                                class="btn btn-primary"><i class="fa fa-eye"></i></a>

                                            <form action="{{ route('admin.message.destroy', $messages->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger"><i
                                                        class="fa fa-trash"></i></button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </div>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@push('css')
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
    <!-- sweetalert css link -->
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>
@endpush

@push('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>
    <script src="//cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
@endpush
@push('customJS')
    <script>
        new DataTable('#table');
    </script>
@endpush
