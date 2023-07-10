@extends('backend.master')
@section('content')
    <div class="container">

        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">

                    <div class="col-sm-6">Message

                    </div>
                    <div class="col-sm-6 pt-4 text-right">
                        <a href="{{ route('admin.message.index') }}" class="btn bg-primary text-white"><i
                                class="fa fa-plus-circle"></i> All List</a>
                    </div>
                </div>

            </div>
        </div>
        <div class="body">
            <h4>Name:{{ $messageInfo->name }}</h4>
            {{-- <h4><i class="fa fa-phone"></i>{{ $messageInfo->phone }}</h4> --}}
            <h4><i class="fa fa-envelope"></i>{{ $messageInfo->email }}</h4>
            <h4><i class="fa fa-calendar"></i>{{ $messageInfo->created_at }}</h4>
            <h4><i class="fa fa-comment"></i>{{ $messageInfo->subject }}</h4>
        </div>
    </div>
@endsection
