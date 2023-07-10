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
                        FacultyMember Create
                    </div>
                </div>
                <div class="page-title-actions">
                    <a href="{{ route('admin.facultymember.index') }}" class="mb-2 mr-2 btn btn-danger"><i class="fa fa-reply"></i>
                        Back to list</a>
                </div>
            </div>
        </div>
        <div class="main-card mb-3 card">
            <div class="card-body">
                <form action="{{ route('admin.facultymember.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" name="name" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Designation</label>
                                        <input type="text" name="designation" class="form-control">
                                        
                                    </div>
                                    <div class="form-group">
                                        <label>Member description</label>
                                        <textarea type="text" name="member_details" class="form-control" rows="3"></textarea>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-3">
                                            <label>Facebook</label>
                                            <input type="text" class="form-control"  name="facebook">
                                        </div>
                                        <div class="col-md-3">
                                            <label>Twitter</label>
                                            <input type="text" class="form-control" name="twitter">
                                        </div>
                                        <div class="col-md-3">
                                            <label>Linkedin</label>
                                            <input type="text" class="form-control" name="linkedin">
                                        </div>
                                        <div class="col-md-3">
                                            <label>Youtube</label>
                                            <input type="text" class="form-control"name="youtube">
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
                                        <input type="file" name="image" class="form-control"
                                            id="image">
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




