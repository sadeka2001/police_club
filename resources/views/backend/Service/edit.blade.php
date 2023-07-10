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
                        Service Edit
                    </div>
                </div>
                <div class="page-title-actions">
                    <a href="{{ route('admin.service.index') }}" class="mb-2 mr-2 btn btn-danger"><i class="fa fa-reply"></i>
                        Back to list</a>
                </div>
            </div>
        </div>
        <div class="main-card mb-3 card">
            <div class="card-body">
                <form action="{{ route('admin.service.update',$service->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Service Title</label>
                                        <input type="text" name="service_tittle" class="form-control" value="{{ $service->service_tittle }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Service description</label>
                                        <textarea type="text" id="mysummernote" class="form-control"  name="service_subtittle"   rows="3">{{ $service->service_subtittle }}</textarea>
                                    </div>

                                    <div class="form-group">
                                        <label>Status:</label>
                                        <div class="check-list">
                                            <label class="ui-radio ui-radio-success">
                                                <input type="radio" {{ $service->status == 1 ? 'checked' : '' }} name="status"
                                                    value="1">
                                                <span class="input-span"></span>Active</label>
                                            <label class="ui-radio ui-radio-danger">
                                                <input type="radio" {{ $service->status == 0 ? 'checked' : '' }} name="status"
                                                    value="0">
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
                                        <label>Service Image</label>
                                        <input type="file" name="service_image" class="form-control"
                                            id="service_image">
                                            <img src="{{ asset('uploads/service/' . $service->service_image) }}"
                                            style="height:80px; width:80px">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group text-center mt-4">
                        <button type="submit" class="btn btn-primary btn-lg"><i class="fa fa-plus-circle"></i> UPDATE</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection


@push('css')

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css">
   
@endpush

@push('js')
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('assets/js/scripts.js') }}"></script>

<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
 
@endpush
@push('customJS')
    <script>
       $(document).ready(function() {
      $('#mysummernote').summernote({
        height:100,
      });
});
    </script>
@endpush
