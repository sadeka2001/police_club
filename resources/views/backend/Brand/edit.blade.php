{{-- @extends('backend.master')
@section('content')
    <div class="container">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">

                    <div>News Information Here

                    </div>
                </div>

            </div>
        </div>
        <div class="row">
            <form action="{{ route('admin.brands.update', $brand->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method("PUT")
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
                                        value="{{ $brand->brand_name }}" placeholder="Brand name here">
                                </div>
                            </div>

                        </div>
                    </div>

                <div class="col-md-3">
                    <label>Status:</label>
                    <div class="check-list">
                        <label class="ui-radio ui-radio-success">
                            <input type="radio" {{ $brand->status ==1 ?'checked' :'' }} name="status" value="1">
                            <span class="input-span"></span>Active</label>
                        <label class="ui-radio ui-radio-danger">
                            <input type="radio" {{ $brand->status ==0 ?'checked' :'' }} name="status" value="0">
                            <span class="input-span"></span>Inactive</label>
                    </div>
                </div>
                    <div class="col-sm-2 col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-tittle">Picture and Other impormation</h5>
                            </div>
                            <div class="card-body">
                                <div class="row mb-2">

                                    <input type="file" name="brand_image" placeholder="Choose image" id="brand_image">
                                    <img src="{{ asset('uploads/Brand/' . $brand->brand_image) }}"
                                        style="height: 50px;width:50px">

                                </div>

                            </div>
                        </div>

                    </div>

                </div>
                <div class="form-group text-center mt-3">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Update</button>
                </div>
            </form>
        </div>
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
                        Brand Edit
                    </div>
                </div>
                <div class="page-title-actions">
                    <a href="{{ route('admin.brands.index') }}" class="mb-2 mr-2 btn btn-danger"><i class="fa fa-reply"></i>
                        Back to list</a>
                </div>
            </div>
        </div>
        <div class="main-card mb-3 card">
            <div class="card-body">
                <form action="{{ route('admin.brands.update', $brand->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Brand Title</label>
                                        <input type="text" name="brand_name" class="form-control" value="{{$brand->brand_name  }}">
                                    </div>
                                    

                                    <div class="form-group">
                                        <label>Status:</label>
                                        <div class="check-list">
                                            <label class="ui-radio ui-radio-success">
                                                <input type="radio" {{ $brand->status == 1 ? 'checked' : '' }} name="status"
                                                    value="1">
                                                <span class="input-span"></span>Active</label>
                                            <label class="ui-radio ui-radio-danger">
                                                <input type="radio" {{$brand->status == 0 ? 'checked' : '' }} name="status"
                                                    value="0">
                                                <span class="input-span"></span>Inactive</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Brand Image</label>
                                        <input type="file" name="brand_image" class="form-control"
                                            id="brand_image">
                                            <img src="{{ asset('uploads/Brand/' . $brand->brand_image) }}"
                                            style="height: 50px;width:50px">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group text-center mt-4">
                        <button type="submit" class="btn btn-primary btn-lg"><i class="fa fa-plus-circle"></i> UPDATE</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection





