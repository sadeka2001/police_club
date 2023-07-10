@extends('backend.master')
@section('content')
    <div class="container p-5">
        <div class="app-page-title" style="background-color: #f1f4f6">
            <div class="d-flex justify-content-between">

                <div class="">
                    <h4>Service Information Here</h4>

                </div>
                <div class="">
                    <a href="{{ route('admin.service.index') }}" class="btn bg-secondary text-white"><i
                            class="fa fa-plus-circle"></i> All list</a>
                </div>
            </div>

        <div class="mt-3">
            <form action="{{ route('admin.service.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-sm-9 col-md-8 ">
                        <div class="card p-4">
                            <div class="card-header">
                                <h5 class="card-tittle">servicer</h5>
                            </div>
                            <div class="row mb-3 ">
                                <label for="service_tittle" class="col-sm-2 col-form-label">service Title</label>
                                <div class="col-sm-10 mt-2">
                                    <input type="text" class="form-control" id="service_tittle" name="service_tittle"
                                        placeholder="service title here">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="service_subtittle" class="col-sm-2 col-form-label">service Detail</label>
                                <div class="col-sm-10 mt-2">
                                    <textarea class="form-control" placeholder="Service details here" id="mysummernote" name="service_subtittle"></textarea>
                                    {{-- <input type="email" class="form-control" id="inputEmail3"> --}}
                                </div>
                            </div>


                        </div>
                    </div>

                    <div class="col-sm-3 col-md-4">
                        <div class="card p-4">
                            <div class="card-header">
                                <h5 class="card-tittle">Picture and Other impormation</h5>
                            </div>
                            <div class="card-body">
                                <div class="row mb-3">
                                    {{-- <label for="logo" class="" name="logo">Logo</label> --}}
                                    <input type="file" name="service_image" placeholder="Choose image"
                                        id="service_image">
                                    {{-- <img src="{{asset('uploads/general/')}}"> --}}

                                </div>

                            </div>
                        </div>

                    </div>

                </div>
                <div class="form-group text-center mt-4">
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
