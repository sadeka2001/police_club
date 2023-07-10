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
                    Faculty Member
                    </div>
                </div>
                <div class="page-title-actions">
                    <a href="{{ route('admin.facultymember.create') }}" class="mb-2 mr-2 btn btn-primary"><i
                            class="fa fa-plus-circle"></i> Add New Member</a>
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
                        <th scope="col">Designation</th>
                        <th scope="col">Memeber Details</th>
                        <th scope="col">facebook</th>
                        <th scope="col">twitter</th>
                        <th scope="col">linkdin</th>
                        <th scope="col">youtube</th>
                        <th scope="col">Image</th>
                        <th scope="col">status</th>
                        <th scope="col">Action</th>
                            </tr>
                        </div>
                    </thead>
                    <tbody>
                        <div class="row">

                            @foreach  ( $faculty_member as $faculty_member)
                            <tr>
                                <td>{{ $faculty_member->id }}</td>
                                <td>{{ $faculty_member->name }}</td>
                                <td>{{ $faculty_member->designation }}</td>
                                <td>{{ $faculty_member->member_details }}</td>
    
                                <td>{{ $faculty_member->facebook }}</td>
    
    
                                <td>{{ $faculty_member->twitter }}</td>
                                <td>{{ $faculty_member->linkedin }}</td>
                                <td>{{ $faculty_member->youtube }}</td>
    
                                <td>
                                    <img src="{{ asset('uploads/Member/' .$faculty_member->image) }}" style="height: 50px;width:50px">
    
                                </td>
                                    <td>
                                        @if ($faculty_member->status == true)
                                            <span class="mb-2 mr-2 badge badge-success">Active</span>
                                        @endif
                                        @if ($faculty_member->status == false)
                                            <span class="mb-2 mr-2 badge badge-danger">Inactive</span>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="action-btns">
                                            <a href="{{ route('admin.facultymember.edit', $faculty_member->id) }}"
                                                class="btn btn-primary"><i class="fa fa-edit"></i></a>

                                            <form action="{{ route('admin.facultymember.destroy',$faculty_member->id) }}" method="POST">
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

