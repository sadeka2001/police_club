@extends('backend.master')
@section('content')
    <div class="container">

        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">

                    <div>Faculty member Information Here

                    </div>
                    <div class="col-sm-6 pt-4 text-right">
                        <a href="{{ route('admin.facultymember.create') }}" class="btn bg-secondary text-white"><i
                                class="fa fa-plus-circle"></i> Add list</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="container">
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

                    @foreach ( $faculty_member as $faculty_member)
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
                                    <span class="badge bg-success">Active</span>
                                @endif
                                @if ($faculty_member->status == false)
                                    <span class="badge bg-danger">Inactive</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('admin.facultymember.edit',$faculty_member->id) }}" class="btn btn-primary"><i
                                        class="fa fa-edit"></i></a>

                                <form action="{{ route('admin.facultymember.destroy',$faculty_member->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                </form>
                            </td>

                        </tr>
                    @endforeach
                </div>
            </tbody>

            <tfoot>
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
            </tfoot>
        </table>

    </div>
@endsection
