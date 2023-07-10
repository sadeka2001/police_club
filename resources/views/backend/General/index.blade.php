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
                        <h4> General information</h4>

                    </div>
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
                                <th scope="col">Home tittle</th>
                                <th scope="col">Home desc</th>

                                <th scope="col">gallery desc</th>
                                <th scope="col">news desc</th>

                                <th scope="col">member desc</th>
                                {{-- <th scope="col">about desc</th> --}}
                                <th scope="col">service desc</th>
                                <th scope="col">logo</th>

                                <th scope="col">status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </div>
                    </thead>
                    <tbody>
                        <div class="row">

                            @foreach ($general_info as $general)
                                <tr>
                                    <td>{{ $general->id }}</td>
                                    <td>{{ $general->home_tittle }}</td>
                                    <td>{{ $general->home_des }}</td>

                                    <td>{{ $general->gallery_des }}</td>
                                    <td>{{ $general->news_des }}</td>

                                    <td>{{ $general->member_des }}</td>

                                    <td>{{ $general->service_des }}</td>

                                    <td>
                                        <img src="{{ asset('uploads/general/' . $general->logo) }}"
                                            style="height: 50px;width:50px">

                                    </td>

                                    <td>
                                        @if ($general->status == true)
                                            <span class="badge bg-success">Active</span>
                                        @endif
                                        @if ($general->status == false)
                                            <span class="badge bg-danger">Inactive</span>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="action-btns">
                                            <a href="{{ route('admin.general.edit', $general->id) }}"
                                                class="btn btn-primary"><i class="fa fa-edit"></i></a>

                                            <form action="{{ route('admin.general.destroy', $general->id) }}"
                                                method="POST">
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

                    <tfoot>
                        <div class="row ">
                            <tr>
                                <th scope="col">S/N</th>
                                <th scope="col">Home tittle</th>
                                <th scope="col">Home desc</th>

                                <th scope="col">gallery desc</th>
                                <th scope="col">news desc</th>

                                <th scope="col">member desc</th>

                                <th scope="col">service desc</th>
                                <th scope="col">logo</th>

                                <th scope="col">status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </div>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>

@endsection
