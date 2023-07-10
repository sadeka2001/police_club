@extends('backend.master')
@section('content')
    <div class="container p-5">
        <div class="app-page-title" style="background-color: #89adc6">
            <div class="d-flex justify-content-between">
                <div class="text-white"><h4>Slider Information Here</h4></div>
                <div class="">
                    <a href="{{ route('admin.slider.index') }}" class="btn bg-primary text-white"><i
                            class="fa fa-plus-circle"></i> All New</a>
                </div>
            </div>
            <div class="mt-3">
                <form action="{{ route('admin.slider.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row ">
                        <div class="col-sm-9 col-md-8">
                            <div class="card p-4">
                                <div class="card-header">
                                    <h5 class="card-tittle">Slider</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row mb-3">
                                        <label for="slider_tittle" class="col-sm-2 col-form-label">Slide Title</label>
                                        <div class="col-sm-10 mt-2">
                                            <input type="text" class="form-control" id="slider_tittle" name="slider_tittle"
                                                placeholder="Slider title here">
                                        </div>
                                    </div>
        
                                    <div class="row mb-3">
                                        <label for="slider_subtittle" class="col-sm-2 col-form-label">Slide Detail</label>
                                        <div class="col-sm-10 mt-2">
                                            <textarea class="form-control" placeholder="Slider details here" id="slider_subtittle" name="slider_subtittle"></textarea>
                                            {{-- <input type="email" class="form-control" id="inputEmail3"> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <div class="col-sm-3 col-md-4">
                            <div class="card p-4">
                                <div class="card-header">
                                    <h5 class="card-tittle">Picture</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row mb-3">
                                        {{-- <label for="logo" class="" name="logo">Logo</label> --}}
                                        <input type="file" name="slider_image" placeholder="Choose image" id="slider_image">
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
    </div>
@endsection
