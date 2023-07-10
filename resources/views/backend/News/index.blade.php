@extends('backend.master')
@section('content')
    <div class="container p-5">
        <div class="app-page-title" style="background-color: #779cb5">
            <div class="d-flex justify-content-between">
                <div class="col-mb-2">
                    <div class="text-white"><h4>News Information</h4></div>
                </div>
                <div class="">
                    <a href="{{ route('admin.news.create') }}" class="btn bg-primary text-white"><i
                            class="fa fa-plus-circle"></i> Add New</a>
                </div>

            </div>
        </div>

        <table class="table table-bordered" id="table">
            <thead>
                <div class="row ">
                    <tr>
                        <th scope="col">S/N</th>
                        <th scope="col">News tittle</th>
                        <th scope="col">News description</th>


                        <th scope="col">image</th>

                        <th scope="col">status</th>
                        <th scope="col">Action</th>
                    </tr>
                </div>
            </thead>
            <tbody>
                <div class="row">

                    @foreach ($news_info as $news)
                        <tr>
                            <td>{{ $news->id }}</td>
                            <td>{{ $news->news_tittle }}</td>
                            <td>{{ $news->news_desc }}</td>

                            <td>
                                <img src="{{ asset('uploads/news/' . $news->news_image) }}" style="height: 50px;width:50px">

                            </td>

                            <td>
                                @if ($news->status == true)
                                    <span class="badge bg-success">Active</span>
                                @endif
                                @if ($news->status == false)
                                    <span class="badge bg-danger">Inactive</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('admin.news.edit', $news->id) }}" class="btn btn-primary"><i
                                        class="fa fa-edit"></i></a>


                                <form action="{{ route('admin.news.destroy', $news->id) }}" method="POST">
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
                        <th scope="col">News tittle</th>
                        <th scope="col">News description</th>
                        <th scope="col">image</th>
                        <th scope="col">status</th>
                        <th scope="col">Action</th>
                    </tr>
                </div>
            </tfoot>
        </table>
    </div>
@endsection
