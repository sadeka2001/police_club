@extends('backend.master')
@section('content')
    <div class="container p-5">
        <div class="app-page-title" style="background-color: #9dbacd">
            <div class="d-flex justify-content-between">
                <div class="">
                    <div>
                        <h4>News Information Here</h4>
                    </div>
                </div>
                <div class="">
                    <a href="{{ route('admin.news.index') }}" class="btn bg-primary text-white"><i
                            class="fa fa-plus-circle"></i> All New</a>
                </div>
            </div>

            <div class="mt-2">
                <form action="{{ route('admin.news.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-sm-2 col-md-8 ">
                            <div class="card p-4">
                                <div class="card-header">
                                    <h5 class="card-tittle">News</h5>
                                </div>
                                <div class="row mb-3 ">
                                    <label for="news_tittle" class="col-sm-2 col-form-label">News Title</label>
                                    <div class="col-sm-10 mt-2">
                                        <input type="text" class="form-control" id="news_tittle" name="news_tittle"
                                            placeholder="news title here">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="news_desc" class="col-sm-2 col-form-label">News Detail</label>
                                    <div class="col-sm-10 mt-2">
                                        <textarea class="form-control" placeholder="News details here" id="news_desc" name="news_desc"></textarea>
                                        {{-- <input type="email" class="form-control" id="inputEmail3"> --}}
                                    </div>
                                </div>


                            </div>
                        </div>

                        <div class="col-sm-3 col-md-4">
                            <div class="card p-4">
                                <div class="card-header">
                                    <h5 class="card-tittle">Picture </h5>
                                </div>
                                <div class="card-body">
                                    <div class="row mb-3">
                                        {{-- <label for="logo" class="" name="logo">Logo</label> --}}
                                        <input type="file" name="news_image" placeholder="Choose image" id="news_image">
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
    {{-- <br><br>
    <hr>
    <div>
        <div>
            <a href="{{ route('admin.general.index') }}">Index</a><br>
            <a href="{{ route('admin.general.store') }}">Store</a>
        </div>
    </div> --}}
@endsection
