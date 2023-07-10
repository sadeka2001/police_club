



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
                       News Edit
                    </div>
                </div>
                <div class="page-title-actions">
                    <a href="{{ route('admin.news.index') }}" class="mb-2 mr-2 btn btn-danger"><i class="fa fa-reply"></i>
                        Back to list</a>
                </div>
            </div>
        </div>
        <div class="main-card mb-3 card">
            <div class="card-body">
                <form action="{{ route('admin.news.update',$news->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>News Title</label>
                                        <input type="text" name="news_tittle" class="form-control" value="{{ $news->news_tittle}}">
                                    </div>
                                    <div class="form-group">
                                        <label>News description</label>
                                        <textarea type="text" name="news_desc" class="form-control" rows="3">{{ $news->news_desc }}</textarea>
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
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Slider Image</label>
                                        <input type="file" name="news_image" class="form-control"
                                            id="news_image">
                                            <img src="{{asset('uploads/news/'.$news->news_image)}}" style="height:80px; width:80px">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group text-center mt-4">
                        <button type="submit" class="btn btn-primary btn-lg"><i class="fa fa-plus-circle"></i> Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection





