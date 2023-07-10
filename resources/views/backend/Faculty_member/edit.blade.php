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
                        FacultyMember Edit
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
                <form action="{{ route('admin.facultymember.update',$faculty_member->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" name="name" class="form-control" value="{{ $faculty_member->name }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Designation</label>
                                        <input type="text" name="designation" class="form-control" value="{{ $faculty_member->designation }}">
                                        
                                    </div>
                                    <div class="form-group">
                                        <label>Member description</label>
                                        <textarea type="text" name="member_details" class="form-control" rows="3">{{ $faculty_member->member_details }}"</textarea>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-3">
                                            <label>Facebook</label>
                                            <input type="text" class="form-control"  name="facebook" value="{{ $faculty_member->facebook }}">
                                        </div>
                                        <div class="col-md-3">
                                            <label>Twitter</label>
                                            <input type="text" class="form-control" name="twitter" value="{{ $faculty_member->twitter }}">
                                        </div>
                                        <div class="col-md-3">
                                            <label>Linkedin</label>
                                            <input type="text" class="form-control" name="linkedin" value="{{ $faculty_member->linkedin }}">
                                        </div>
                                        <div class="col-md-3">
                                            <label>Youtube</label>
                                            <input type="text" class="form-control"name="youtube" value="{{ $faculty_member->youtube }}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Status:</label>
                                        <div class="check-list">
                                            <label class="ui-radio ui-radio-success">
                                                <input type="radio" {{ $faculty_member->status ==1 ?'checked' :'' }} name="status" value="1">
                                                <span class="input-span"></span>Active</label>
                                            <label class="ui-radio ui-radio-danger">
                                                <input type="radio" {{ $faculty_member->status ==0 ?'checked' :'' }} name="status" value="0">
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
                                        <input type="file" name="image" class="form-control"
                                            id="image">
                                            <img src="{{asset('uploads/Member/'.$faculty_member->image)}}" style="height:80px; width:80px">
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




