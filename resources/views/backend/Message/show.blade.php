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
                        Contact message
                    </div>
                </div>
                <div class="page-title-actions">
                    <a href="{{ route('admin.message.index') }}" class="mb-2 mr-2 btn btn-primary"><i
                            class="fa fa-plus-circle"></i>Back to List </a>
                </div>
            </div>

        </div>
        <div class="main-card mb-3 card">
            <div class="card-body">
                <h4>Name:{{ $messageInfo->name }}</h4>
                {{-- <h4><i class="fa fa-phone"></i>{{ $messageInfo->phone }}</h4> --}}
                <h4><i class="fa fa-envelope"></i>{{ $messageInfo->email }}</h4>
                <h4><i class="fa fa-calendar"></i>{{ $messageInfo->created_at }}</h4>
                <h4><i class="fa fa-comment"></i>{{ $messageInfo->subject }}</h4>
                {{-- <textarea type="text" name="" id="" cols="50" rows="10"></textarea> --}}
            </div>
        </div>
    </div>
@endsection
