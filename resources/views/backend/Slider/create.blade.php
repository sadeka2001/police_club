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
                        Slider Create
                    </div>
                </div>
                <div class="page-title-actions">
                    <a href="{{ route('admin.slider.index') }}" class="mb-2 mr-2 btn btn-danger"><i class="fa fa-reply"></i>
                        Back to list</a>
                </div>
            </div>
        </div>
        <div class="main-card mb-3 card">
            <div class="card-body">
                <form action="{{ route('admin.slider.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Slider Title</label>
                                        <input type="text" name="slider_title" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Slider description</label>
                                        <textarea type="text" name="slider_description" class="form-control" rows="3"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Slider Image</label>
                                        <input type="file" name="slider_image" class="form-control"
                                            id="slider_image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group text-center mt-4">
                        <button type="submit" class="btn btn-primary btn-lg"><i class="fa fa-plus-circle"></i> CREATE</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection




