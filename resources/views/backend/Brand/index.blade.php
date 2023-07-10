{{-- @extends('backend.master')
@section('content')
    <div class="container">

        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">

                    <div class="col-sm-6">Brand Information

                    </div>
                    <div class="col-sm-6 pt-4 text-right">
                        <a href="{{ route('admin.brands.create') }}" class="btn bg-primary text-white"><i
                                class="fa fa-plus-circle"></i> Add New</a>
                    </div>
                </div>

            </div>
        </div>


        <table class="table table-bordered" id="table">
            <thead>
                <div class="row">
                    <tr>
                        <th scope="col">S/N</th>
                        <th scope="col">Brand Name</th>



                        <th scope="col">image</th>

                        <th scope="col">status</th>
                        <th scope="col">Action</th>
                    </tr>
                </div>
            </thead>
            <tbody>
                <div class="row">

                    @foreach ($brand_info as $brand)
                        <tr>
                            <td>{{ $brand->id }}</td>
                            <td>{{ $brand->brand_name }}</td>


                            <td>
                                <img src="{{ asset('uploads/Brand/' .$brand->brand_image) }}"
                                    style="height: 50px;width:50px">

                            </td>

                            <td>
                                @if ($brand->status == true)
                                    <span class="badge bg-success">Active</span>
                                @endif
                                @if ($brand->status == false)
                                    <span class="badge bg-danger">Inactive</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('admin.brands.edit',$brand->id) }}" class="btn btn-primary"><i
                                        class="fa fa-edit"></i></a>


                                <form action="{{ route('admin.brands.destroy',$brand->id) }}" method="POST">
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
                        <th scope="col">Brand Name</th>



                        <th scope="col">image</th>

                        <th scope="col">status</th>
                        <th scope="col">Action</th>
                    </tr>
                </div>
            </tfoot>
        </table>

    </div>
@endsection --}}



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
                   Brand
                    </div>
                </div>
                <div class="page-title-actions">
                    <a href="{{ route('admin.brands.create') }}" class="mb-2 mr-2 btn btn-primary"><i
                            class="fa fa-plus-circle"></i> Add New Brand</a>
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
                                <th scope="col">Brand Name</th>
                               <th scope="col">image</th>
<th scope="col">status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </div>
                    </thead>
                    <tbody>
                        <div class="row">

                            @foreach ($brand_info as $brand)
                        <tr>
                            <td>{{ $brand->id }}</td>
                            <td>{{ $brand->brand_name }}</td>


                            <td>
                                <img src="{{ asset('uploads/Brand/' .$brand->brand_image) }}"
                                    style="height: 50px;width:50px">

                            </td>

                            <td>
                                @if ($brand->status == true)
                                    <span class="badge bg-success">Active</span>
                                @endif
                                @if ($brand->status == false)
                                    <span class="badge bg-danger">Inactive</span>
                                @endif
                            </td>
                            <td>
                                <div class="action-btns">
                                <a href="{{ route('admin.brands.edit',$brand->id) }}" class="btn btn-primary"><i
                                        class="fa fa-edit"></i></a>


                                <form action="{{ route('admin.brands.destroy',$brand->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
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

