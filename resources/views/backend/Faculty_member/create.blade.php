@extends('backend.master')
@section('content')
    <div class="container">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">

                    <div class="col sm-6">Faculty Information Here
                    </div>
                    <div class="col-sm-6 pt-4 text-right">
                        <a href="{{ route('admin.facultymember.index') }}" class="btn bg-secondary text-white"><i
                                class="fa fa-plus-circle"></i> All list</a>
                    </div>
                </div>

            </div>
        </div>
        <div class="row">
            <form action="{{ route('admin.facultymember.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-sm-2 col-md-8 ">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-tittle">Faculty Member</h5>
                            </div>
                            <div class="row mb-3 ">
                                <label for="name" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-9 mt-2">
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="member name here">
                                </div>
                            </div>


                            <div class="row mb-3 ">
                                <label for="designation" class="col-sm-2 col-form-label">Designation</label>
                                <div class="col-sm-9 mt-2">
                                    <input type="text" class="form-control" id="designation" name="designation"
                                        placeholder="member designation here">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="member_details" class="col-sm-2 col-form-label">Member Description</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" placeholder="Member description here" id="member_details" name="member_details"></textarea>
                                </div>
                            </div>




                            <div class="row mb-3">
                                <div class="col-md-3">
                                    <label for="facebook" class="form-label">Facebook</label>
                                    <input type="text" class="form-control" id="facebook" name="facebook">
                                </div>
                                <div class="col-md-3">
                                    <label for="twitter" class="form-label">Twitter</label>
                                    <input type="text" class="form-control" id="twitter" name="twitter">
                                </div>
                                <div class="col-md-3">
                                    <label for="linkedin" class="form-label">Linkedin</label>
                                    <input type="text" class="form-control" id="linkedin" name="linkedin">
                                </div>
                                <div class="col-md-2">
                                    <label for="instragam" class="form-label">Youtubr</label>
                                    <input type="text" class="form-control" id="youtube" name="youtube">
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


                                </div>

                            </div>
                        </div>

                    </div>

                </div>
                <div class="form-group text-center mt-3">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Create</button>
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
