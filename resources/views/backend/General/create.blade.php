@extends('backend.master')
@section('content')
    <div class="container p-5">
        <div class="app-page-title " style="background-color: #f1f4f6">
            <div class="">
                <h5>General Information Here</h5>
            </div>
        </div>
        <div class="">
            <form action="{{ route('admin.general.store') }}" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-sm-9 col-md-8 ">
                        <div class="card p-4">
                            <div class="card-header">
                                <h5 class="card-tittle">General</h5>
                            </div>

                            <div class="row mt-3 mb-3">
                                <label for="home_title" class="col-sm-2 col-form-label">Home Title</label>
                                <div class="col-sm-10 mt-2">
                                    <input type="text" class="form-control" id="home_tittle" name="home_tittle"
                                        placeholder="Home title here">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="home_detail" class="col-sm-2 col-form-label">Home Detail</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" placeholder="Home details here" id="home_des" name="home_des"></textarea>
                                    {{-- <input type="email" class="form-control" id="inputEmail3"> --}}
                                </div>
                            </div>

                            <div class="row mb-3 ">
                                <label for="msg" class="col-sm-2 col-form-label">Msg Title</label>
                                <div class="col-sm-10 mt-2">
                                    <input type="text" class="form-control" id="msg_title" name="msg_title"
                                        placeholder="message tittle here">
                                </div>
                            </div>

                            <div class="row mb-3 ">
                                <label for="msg" class="col-sm-2 col-form-label">Msg Author</label>
                                <div class="col-sm-10 mt-2">
                                    <input type="text" class="form-control" id="msg_author" name="msg_author"
                                        placeholder="message author here">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="msg" class="col-sm-2 col-form-label">Msg Description</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" placeholder="Message details here" id="msg_desc" name="msg_desc"></textarea>
                                    {{-- <input type="email" class="form-control" id="inputEmail3"> --}}
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="gallery" class="col-sm-2 col-form-label">Gallery Description</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" placeholder="Gallery details here" id="gallery_des" name="gallery_des"></textarea>
                                    {{-- <input type="email" class="form-control" id="inputEmail3"> --}}
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="news_des" class="col-sm-2 col-form-label">News Description</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" placeholder="News details here" id="news_des" name="news_des"></textarea>
                                    {{-- <input type="email" class="form-control" id="inputEmail3"> --}}
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="client_des" class="col-sm-2 col-form-label">Client Description</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" placeholder="Client description here" id="client_des" name="client_des"></textarea>
                                    {{-- <input type="email" class="form-control" id="inputEmail3"> --}}
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="member_des" class="col-sm-2 col-form-label">Member Description</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" placeholder="Member description here" id="member_des" name="member_des"></textarea>
                                    {{-- <input type="email" class="form-control" id="inputEmail3"> --}}
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="about_des" class="col-sm-2 col-form-label">About Description</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" placeholder="About description here" id="about_des" name="about_des"></textarea>
                                    {{-- <input type="email" class="form-control" id="inputEmail3"> --}}
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="service_des" class="col-sm-2 col-form-label">Service Description</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" placeholder="Service description here" id="service_des" name="service_des"></textarea>
                                    {{-- <input type="email" class="form-control" id="inputEmail3"> --}}
                                </div>
                            </div>

                            <div class="row mb-3 ">
                                <label for="map" class="col-sm-2 col-form-label">Map</label>
                                <div class="col-sm-10 mt-2">
                                    <input type="map" class="form-control" id="map" name="map"
                                        placeholder="Map Link here">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <label for="mobile" class="form-label">Mobile</label>
                                    <input type="text" class="form-control" id="mobile" name="mobile">
                                </div>
                                <div class="col-md-4">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="text" class="form-control" id="email" name="email">
                                </div>
                                <div class="col-md-4">
                                    <label for="address" class="form-label">Address</label>
                                    <input type="text" class="form-control" id="address" name="address">
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
                                <div class="col-md-3">
                                    <label for="instragam" class="form-label">Instragam</label>
                                    <input type="text" class="form-control" id="instragam" name="instragam">
                                </div>
                            </div>


                            <div class="form-group">
                                <label>Status:</label>
                                <div class="check-list">
                                    <label class="ui-radio ui-radio-success">
                                        <input type="radio" name="status">
                                        <span class="input-span"></span>Active</label>
                                    <label class="ui-radio ui-radio-danger">
                                        <input type="radio" name="status">
                                        <span class="input-span"></span>Inactive</label>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-sm-3 col-md-4">
                        <div class="card p-4">
                            <div class="card-header">
                                <h5 class="card-tittle">Picture</h5>
                            </div>
                            <div class="card-body">
                                <div class="row mb-3 ">
                                    <input type="file" name="logo" placeholder="Choose image" id="logo">
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
@endsection
