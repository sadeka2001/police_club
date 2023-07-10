@extends('backend.master')
@section('content')
    <div class="container">

        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">

                    <div class="col-sm-6">Gallery Information

                    </div>
                    <div class="col-sm-6 pt-4 text-right">
                        <a href="{{ route('admin.gallery.create') }}" class="btn bg-primary text-white"><i
                                class="fa fa-plus-circle"></i>Add New</a>

                    </div>
                </div>

            </div>
        </div>


        <table class="table table-bordered" id="table">
            <thead>
                <div class="row">
                    <tr>
                        <th scope="col">S/N</th>
                        <th scope="col">Gallery Name</th>



                        <th scope="col">image</th>

                        <th scope="col">status</th>
                        <th scope="col">Action</th>
                    </tr>
                </div>
            </thead>
            <tbody>
                <div class="row">

                    @foreach ($gallery as $gallery_info)
                        <tr>
                            <td>{{ $gallery_info->id }}</td>
                            <td>{{ $gallery_info->gallary_name }}</td>


                            <td>
                                <img src="{{ asset('uploads/Gallery/' . $gallery_info->gallery_image) }}"
                                    style="height: 50px;width:50px">

                            </td>

                            <td>
                                @if ($gallery_info->status == true)
                                    <span class="badge bg-success">Active</span>
                                @endif
                                @if ($gallery_info->status == false)
                                    <span class="badge bg-danger">Inactive</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('admin.gallery.edit', $gallery_info->id) }}" class="btn btn-primary"><i
                                        class="fa fa-edit"></i></a>


                                <form action="{{ route('admin.gallery.destroy', $gallery_info->id) }}" method="POST">
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
                        <<th scope="col">S/N</th>
                            <th scope="col">Gallery Name</th>



                            <th scope="col">image</th>

                            <th scope="col">status</th>
                            <th scope="col">Action</th>
                    </tr>
                </div>
            </tfoot>
        </table>

    </div>
@endsection
