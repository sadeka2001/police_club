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
                       General Edit
                    </div>
                </div>
                <div class="page-title-actions">
                    <a href="{{ route('admin.general.index') }}" class="mb-2 mr-2 btn btn-danger"><i class="fa fa-reply"></i>
                        Back to list</a>
                </div>
            </div>
        </div>
        <div class="main-card mb-3 card">
            <div class="card-body">
                <form action="{{ route('admin.general.update', $general_info->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Home Title</label>
                                        <input type="text" name="home_tittle" class="form-control" value="{{ $general_info->home_tittle }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Home description</label>
                                        <textarea type="text" name="home_des" class="form-control" rows="3">{{ $general_info->home_des  }}</textarea>
                                    </div>


                                    <div class="form-group">
                                        <label>Gallery description</label>
                                        <textarea type="text" name="gallery_des" class="form-control" rows="3">{{ $general_info->gallery_des  }}</textarea>
                                    </div>

                                    <div class="form-group">
                                        <label>News description</label>
                                        <textarea type="text" name="news_des" class="form-control" rows="3">{{ $general_info->news_des  }}</textarea>
                                    </div>

                                    <div class="form-group">
                                        <label>Member description</label>
                                        <textarea type="text" name="member_des" class="form-control" rows="3">{{ $general_info->member_des  }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Service description</label>
                                        <textarea type="text" name="service_des" class="form-control" rows="3">{{ $general_info->service_des  }}</textarea>
                                    </div>

                                    <div class="form-group">
                                        <label>Status:</label>
                                        <div class="check-list">
                                            <label class="ui-radio ui-radio-success">
                                                <input type="radio" {{ $general_info->status == 1 ? 'checked' : '' }} name="status"
                                                    value="1">
                                                <span class="input-span"></span>Active</label>
                                            <label class="ui-radio ui-radio-danger">
                                                <input type="radio" {{ $general_info->status == 0 ? 'checked' : '' }} name="status"
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
                                        <label>Logo</label>
                                        <input type="file" name="logo" class="form-control">
                                        <img src="{{ asset('uploads/general/' .$general_info->logo) }}"
                                            style="height:80px; width:80px">
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





