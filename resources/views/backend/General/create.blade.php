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
                       General Create
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
                <form action="{{ route('admin.general.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Home Title</label>
                                        <input type="text" name="home_tittle" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Home description</label>
                                        <textarea type="text" name="home_des" class="form-control" rows="3"></textarea>
                                    </div>


                                    <div class="form-group">
                                        <label>Gallery description</label>
                                        <textarea type="text" name="gallery_des" class="form-control" rows="3"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label>News description</label>
                                        <textarea type="text" name="news_des" class="form-control" rows="3"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label>Member description</label>
                                        <textarea type="text" name="member_des" class="form-control" rows="3"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Service description</label>
                                        <textarea type="text" name="service_des" class="form-control" rows="3"></textarea>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Logo</label>
                                        <input type="file" name="logo" class="form-control"
                                            id="logo">
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




