@extends('backend.master')
@section('content')
    <div class="container p-5">
        <div class="app-page-title" style="background-color: #f1f4f6">
            <div class="row mb-4" style="background-color: #779cb5">
                <div class="text-white">
                    <h4>Service Information Here</h4>
                </div>

            </div>
            <div class="mt-2">
                <form action="{{ route('admin.service.update', $service->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-sm-2 col-md-8 ">
                            <div class="card p-4">
                                <div class="card-header">
                                    <h5 class="card-tittle">Service</h5>
                                </div>
                                <div class="row mb-3 ">
                                    <label for="home_title" class="col-sm-2 col-form-label">service Title</label>
                                    <div class="col-sm-10 mt-2">
                                        <input type="text" class="form-control" id="service_tittle" name="service_tittle"
                                            placeholder="Slider title here" value="{{ $service->service_tittle }}">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="service_subtittle" class="col-sm-2 col-form-label">service Detail</label>
                                    <div class="col-sm-10 mt-2">
                                        <textarea class="form-control" placeholder="Sservice details here" id="mysummernote" name="service_subtittle">{{ $service->service_subtittle }}</textarea>

                                        {{-- <input type="email" class="form-control" id="inputEmail3"> --}}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Status:</label>
                                    <div class="check-list">
                                        <label class="ui-radio ui-radio-success">
                                            <input type="radio" {{ $service->status == 1 ? 'checked' : '' }} name="status"
                                                value="1">
                                            <span class="input-span"></span>Active</label>
                                        <label class="ui-radio ui-radio-danger">
                                            <input type="radio" {{ $service->status == 0 ? 'checked' : '' }} name="status"
                                                value="0">
                                            <span class="input-span"></span>Inactive</label>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-sm-2 col-md-4">
                            <div class="card p-4">
                                <div class="card-header">
                                    <h5 class="card-tittle">Picture </h5>
                                </div>
                                <div class="card-body">
                                    <div class="row mb-2">
                                        {{-- <label for="logo" class="" name="logo">Logo</label> --}}
                                        <input type="file" name="service_image" placeholder="Choose image"
                                            id="service_image">
                                        <img src="{{ asset('uploads/service/' . $service->service_image) }}"
                                            style="height:80px; width:80px">

                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="form-group text-center mt-4">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endsection
