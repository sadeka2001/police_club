@extends('backend.master')
@section('content')
    <div class="container">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">

                    <div>News Information Here
                        <div class="col-sm-6 pt-4 text-right">
                            <a href="{{ route('admin.brands.index') }}" class="btn bg-secondary text-white"><i
                                    class="fa fa-plus-circle"></i> All list</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="row">
            <form action="{{ route('admin.brands.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-sm-2 col-md-8 ">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-tittle">Brand</h5>
                            </div>
                            <div class="row mb-3 ">
                                <label for="brand_name" class="col-sm-2 col-form-label">Brand Name</label>
                                <div class="col-sm-9 mt-2">
                                    <input type="text" class="form-control" id="brand_name" name="brand_name"
                                        placeholder="news title here">
                                </div>
                            </div>




                        </div>
                    </div>

                    <div class="col-sm-2 col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-tittle">Picture and Other impormation</h5>
                            </div>
                            <div class="card-body">
                                <div class="row mb-2">

                                    <input type="file" name="brand_image" placeholder="Choose image"
                                        id="brand_image">
                                    {{-- <img src="{{asset('uploads/general/')}}"> --}}

                                </div>

                            </div>
                        </div>

                    </div>

                </div>
                <div class="form-group text-center mt-3">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Create</button>
                </div>
            </form>
        </div>
    </div>
    {{-- <br><br>
    <hr>
    <div>
        <div>
            <a href="{{ route('admin.general.index') }}">Index</a><br>
            <a href="{{ route('admin.general.store') }}">Store</a>
        </div>
    </div> --}}
@endsection
