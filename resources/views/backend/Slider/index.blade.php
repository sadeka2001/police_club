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
                        Sliders
                    </div>
                </div>
                <div class="page-title-actions">
                    <a href="{{ route('admin.slider.create') }}" class="mb-2 mr-2 btn btn-primary"><i
                            class="fa fa-plus-circle"></i> Add New Slider</a>
                </div>
            </div>
        </div>
        <div class="main-card mb-3 card">
            <div class="card-body">
                <table class="table table-bordered" id="table">
                    <thead>
                        <div class="row ">
                            <tr>
                                <th scope="col">S/N</th>
                                <th scope="col">Slider tittle</th>
                                <th scope="col">Slider desc</th>


                                <th scope="col">image</th>

                                <th scope="col">status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </div>
                    </thead>
                    <tbody>
                        <div class="row">

                            @foreach ($slider_info as $slider)
                                <tr>
                                    <td>{{ $slider->id }}</td>
                                    <td>{{ $slider->slider_tittle }}</td>
                                    <td>{{ $slider->slider_subtittle }}</td>

                                    <td>
                                        <img src="{{ asset('uploads/slider/' . $slider->slider_image) }}"
                                            style="height: 50px;width:50px">

                                    </td>

                                    <td>
                                        @if ($slider->status == true)
                                            <span class="mb-2 mr-2 badge badge-success">Active</span>
                                        @endif
                                        @if ($slider->status == false)
                                            <span class="mb-2 mr-2 badge badge-danger">Inactive</span>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="action-btns">
                                            <a href="{{ route('admin.slider.edit', $slider->id) }}"
                                                class="btn btn-primary"><i class="fa fa-edit"></i></a>

                                            <form action="{{ route('admin.slider.destroy', $slider->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger"><i
                                                        class="fa fa-trash"></i></button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </div>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@push('css')
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
    <!-- sweetalert css link -->
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>
@endpush

@push('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>
    <script src="//cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
@endpush
@push('customJS')
    <script>
        new DataTable('#table');
    </script>
@endpush
