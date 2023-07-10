@extends('backend.master')
@section('content')
    <div class="container">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">

                    <div>User Information Here

                    </div>
                    <div class="col-sm-6 pt-4 text-right">
                        <a href="{{ route('admin.user.index') }}" class="btn bg-primary text-white"><i
                                class="fa fa-plus-circle"></i> All New</a>
                    </div>
                </div>

            </div>
        </div>
        <div class="row">
            <form action="{{ route('admin.user.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-sm-2 col-md-8 ">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-tittle">User</h5>
                            </div>
                            <div class="row mb-3 ">
                                <label for="home_title" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-9 mt-2">
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Name here">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="home_detail" class="col-sm-2 col-form-label">Email </label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="email" name="email"
                                        placeholder="Email here">
                                    {{-- <input type="email" class="form-control" id="inputEmail3"> --}}
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="home_detail" class="col-sm-2 col-form-label">Designation </label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="designation" name="designation"
                                        placeholder="Designation here">
                                    {{-- <input type="email" class="form-control" id="inputEmail3"> --}}
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="home_detail" class="col-sm-2 col-form-label">Contact </label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="contact" name="contact"
                                        placeholder="contact here">
                                    {{-- <input type="email" class="form-control" id="inputEmail3"> --}}
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label for="home_detail" class="col-sm-2 col-form-label">Password </label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="password" name="password"
                                    placeholder="Password here">
                                    {{-- <input type="email" class="form-control" id="inputEmail3"> --}}
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="home_detail" class="col-sm-2 col-form-label">Confirm Password </label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="" name=""
                                    placeholder="confirm pass here">
                                    {{-- <input type="email" class="form-control" id="inputEmail3"> --}}
                                </div>
                            </div>



                            <div class="row mb-3">
                                <label for="home_detail" class="col-sm-2 col-form-label">Select Role</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="" name=""
                                    placeholder="Role">
                                    {{-- <input type="email" class="form-control" id="inputEmail3"> --}}
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
                                    <input type="file" name="news_image" placeholder="Choose image"
                                        id="news_image">
                                    {{-- <img src="{{asset('uploads/general/')}}"> --}}

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
