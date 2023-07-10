@extends('backend.master')
@section('content')
    <div class="container">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">

                    <div class="col sm-6">Faculty Information Here
                    </div>

                </div>

            </div>
        </div>
        <div class="row">
            <form action="{{ route('admin.facultymember.update',$faculty_member->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-sm-2 col-md-8 ">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-tittle">Faculty Member</h5>
                            </div>
                            <div class="row mb-3 ">
                                <label for="name" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-9 mt-2">
                                    <input type="text" class="form-control" id="name" name="name" value="{{$faculty_member->name }}"
                                        placeholder="member name here">
                                </div>
                            </div>


                            <div class="row mb-3 ">
                                <label for="designation" class="col-sm-2 col-form-label">Designation</label>
                                <div class="col-sm-9 mt-2">
                                    <input type="text" class="form-control" id="designation" name="designation"
                                        placeholder="member designation here" value="{{$faculty_member->designation }}">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="member_details" class="col-sm-2 col-form-label">Member Description</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" placeholder="Member description here" id="member_details" name="member_details">{{   $faculty_member->member_details}}</textarea>
                                    {{-- <input type="email" class="form-control" id="inputEmail3"> --}}
                                </div>
                            </div>




                            <div class="row mb-3">
                                <div class="col-md-3">
                                    <label for="facebook" class="form-label">Facebook</label>
                                    <input type="text" class="form-control" id="facebook" name="facebook" value="{{ $faculty_member->facebook }}">
                                </div>
                                <div class="col-md-3">
                                    <label for="twitter" class="form-label">Twitter</label>
                                    <input type="text" class="form-control" id="twitter" name="twitter" value="{{ $faculty_member->twitter }}">
                                </div>
                                <div class="col-md-3">
                                    <label for="linkedin" class="form-label">Linkedin</label>
                                    <input type="text" class="form-control" id="linkedin" name="linkedin" value="{{ $faculty_member->linkedin }}">
                                </div>
                                <div class="col-md-2">
                                    <label for="instragam" class="form-label">Youtubr</label>
                                    <input type="text" class="form-control" id="youtube" name="youtube" value="{{ $faculty_member->youtube }}">
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

                    <div class="col-sm-6 col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-tittle">Picture and Other impormation</h5>
                            </div>
                            <div class="card-body">
                                <div class="row mb-3 ">

                                    <input type="file" name="image" placeholder="Choose image" id="image">
                                    <img src="{{asset('uploads/Member/'.$faculty_member->image)}}" style="height:80px; width:80px">

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
    {{-- <br><br>
    <hr>
    <div>
        <div>
            <a href="{{ route('admin.general.index') }}">Index</a><br>
            <a href="{{ route('admin.general.store') }}">Store</a>
        </div>
    </div> --}}
@endsection
