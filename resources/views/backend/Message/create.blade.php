@extends('backend.master')
@section('content')
    <div class="container">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">

                    <div class="col sm-6">Message
                    </div>
                    <div class="col-sm-6 pt-4 text-right">
                        <a href="{{ route('admin.message.index') }}" class="btn bg-primary text-white"><i
                                class="fa fa-plus-circle"></i> All List</a>
                    </div>
                </div>

            </div>
        </div>
  
 
        <div class="row">
            <form action="{{ route('admin.message.store') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-sm-2 col-md-12 ">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-tittle">Message</h5>
                            </div>
                            <div class="row mb-3 ">
                                <label for="name" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-9 mt-2">
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Name here">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="email" name="email"
                                        placeholder="Email here">
                                    {{-- <input type="email" class="form-control" id="inputEmail3"> --}}
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="subject" class="col-sm-2 col-form-label">Subject </label>
                                <div class="col-sm-9 mt-2">
                                    <input type="text" class="form-control" id="subject" name="subject"
                                        placeholder="Message  here">
                                   
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
