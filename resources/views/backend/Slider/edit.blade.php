@extends('backend.master')
@section('content')
    <div class="container p-5">
        <div class="app-page-title" style="background-color: #f1f4f6">
            <div class="row mb-4" style="background-color: #779cb5">
                <div class="text-white">
                    <h4>Slider Information Here</h4>
                </div>

            </div>

            <div class="mt-3">

                <form action="{{ route('admin.slider.update', $slider->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-sm-2 col-md-8 ">
                            <div class="card p-4">
                                <div class="card-header">
                                    <h5 class="card-tittle">Slider</h5>
                                </div>
                                <div class="row mb-3 ">
                                    <label for="slider_tittle" class="col-sm-2 col-form-label">Slide Title</label>
                                    <div class="col-sm-10 mt-2">
                                        <input type="text" class="form-control" id="slider_tittle" name="slider_tittle"
                                            placeholder="Slider title here" value="{{ $slider->slider_tittle }}">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="slider_subtittle" class="col-sm-2 col-form-label">Slide Detail</label>
                                    <div class="col-sm-10 mt-2">
                                        <textarea class="form-control" placeholder="Slider details here" id="slider_subtittle" name="slider_subtittle">{{ $slider->slider_subtittle }}</textarea>
                                        {{-- <input type="email" class="form-control" id="inputEmail3"> --}}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Status:</label>
                                    <div class="check-list">
                                        <label class="ui-radio ui-radio-success">
                                            <input type="radio" {{ $slider->status == 1 ? 'checked' : '' }} name="status"
                                                value="1">
                                            <span class="input-span"></span>Active</label>
                                        <label class="ui-radio ui-radio-danger">
                                            <input type="radio" {{ $slider->status == 0 ? 'checked' : '' }} name="status"
                                                value="0">
                                            <span class="input-span"></span>Inactive</label>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-sm-2 col-md-4">
                            <div class="card p-4">
                                <div class="card-header">
                                    <h5 class="card-tittle">Picture and Other impormation</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row mb-2">
                                        {{-- <label for="logo" class="" name="logo">Logo</label> --}}
                                        <input type="file" name="slider_image" placeholder="Choose image"
                                            id="slider_image">
                                        <img src="{{ asset('uploads/slider/' . $slider->slider_image) }}"
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
