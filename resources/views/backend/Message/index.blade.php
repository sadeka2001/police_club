@extends('backend.master')
@section('content')
    <div class="container">

        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">

                    <div class="col-sm-6">Message

                    </div>
                    <div class="col-sm-6 pt-4 text-right">
                        <a href="{{ route('admin.message.create') }}" class="btn bg-primary text-white"><i
                                class="fa fa-plus-circle"></i> Add New</a>
                    </div>
                </div>

            </div>
        </div>


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
                              
                                <a href="{{ route('admin.message.show',$messages->id) }}" class="btn btn-info btn-sm "><i
                                        class="fa fa-eye"></i></a>


                                <form action="{{ route('admin.message.destroy',$messages->id) }}" method="POST">
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
                        <th scope="col">Email</th>


                        <th scope="col">Subject</th>

                        <th scope="col">status</th>
                        <th scope="col">Action</th>
                    </tr>
                </div>
            </tfoot>
        </table>

    </div>
@endsection
