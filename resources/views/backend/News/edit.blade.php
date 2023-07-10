@extends('backend.master')
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
            <form action="{{ route('admin.news.update',$news->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-sm-2 col-md-8 ">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-tittle">News</h5>
                            </div>
                            <div class="row mb-3 ">
                                <label for="news_tittle" class="col-sm-2 col-form-label">News Title</label>
                                <div class="col-sm-9 mt-2">
                                    <input type="text" class="form-control" id="news_tittle" name="news_tittle"
                                        placeholder="news title here" value="{{ $news->news_tittle}}">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="news_desc" class="col-sm-2 col-form-label">News Detail</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" placeholder="news details here" id="news_desc" name="news_desc">{{ $news->news_desc }}</textarea>
                                    {{-- <input type="email" class="form-control" id="inputEmail3"> --}}
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Status:</label>
                                <div class="check-list">
                                    <label class="ui-radio ui-radio-success">
                                        <input type="radio" {{ $news->status ==1 ?'checked' :'' }} name="status" value="1">
                                        <span class="input-span"></span>Active</label>
                                    <label class="ui-radio ui-radio-danger">
                                        <input type="radio" {{ $news->status ==0 ?'checked' :'' }} name="status" value="0">
                                        <span class="input-span"></span>Inactive</label>
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
                                    {{-- <label for="logo" class="" name="logo">Logo</label> --}}
                                    <input type="file" name="news_image" placeholder="Choose image" id="news_image">
                                    <img src="{{asset('uploads/news/'.$news->news_image)}}" style="height:80px; width:80px">

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

@endsection
