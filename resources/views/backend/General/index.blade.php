@extends('backend.master')
@section('content')
    <div class="p-4" style="background-color: #f1f4f6">
        <div class="app-page-title">
            <div><h4 class="">General Information Here</h4></div>
        </div>
        <div class="">
            <table class="table table-bordered" id="table">
                <thead>
                    <div class="row ">
                        <tr>
                            <th scope="col">S/N</th>
                            <th scope="col">Home tittle</th>
                            <th scope="col">Home desc</th>
                            <th scope="col">msg tittle</th>
                            <th scope="col">msg author</th>
                            <th scope="col">msg desc</th>
                            <th scope="col">gallery desc</th>
                            <th scope="col">news desc</th>
                            <th scope="col">client desc</th>
                            <th scope="col">member desc</th>
                            <th scope="col">about desc</th>
                            <th scope="col">service desc</th>
                            <th scope="col">logo</th>
                            <th scope="col">map</th>
                            <th scope="col">mobile</th>
                            <th scope="col">email</th>
                            <th scope="col">address</th>
                            <th scope="col">facebook</th>
                            <th scope="col">twitter</th>
                            <th scope="col">linkdin</th>
                            <th scope="col">instragram</th>
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
                                <td>{{ $general->msg_title }}</td>

                                <td>{{ $general->msg_author }}</td>
                                <td>{{ $general->msg_desc }}</td>
                                <td>{{ $general->gallery_des }}</td>
                                <td>{{ $general->news_des }}</td>
                                <td>{{ $general->client_des }}</td>
                                <td>{{ $general->member_des }}</td>
                                <td>{{ $general->about_des }}</td>
                                <td>{{ $general->service_des }}</td>
                                {{-- <td>{{ $general->about_des }}</td> --}}
                                <td>
                                    <img src="{{ asset('uploads/general/' . $general->logo) }}"
                                        style="height: 50px;width:50px">

                                </td>
                                <td>{{ $general->map }}</td>
                                <td>{{ $general->mobile }}</td>
                                <td>{{ $general->email }}</td>
                                <td>{{ $general->address }}</td>

                                <td>{{ $general->facebook }}</td>
                                <td>{{ $general->twitter }}</td>
                                <td>{{ $general->linkedin }}</td>
                                <td>{{ $general->instragam }}</td>
                                <td>
                                    @if ($general->status == true)
                                        <span class="badge bg-success">Active</span>
                                    @endif
                                    @if ($general->status == false)
                                        <span class="badge bg-danger">Inactive</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('admin.general.edit', $general->id) }}" class="btn btn-primary"><i
                                            class="fa fa-edit"></i></a>

                                    <form action="{{ route('admin.general.destroy', $general->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                    </form>
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
                            <th scope="col">msg tittle</th>
                            <th scope="col">msg author</th>
                            <th scope="col">msg desc</th>
                            <th scope="col">gallery desc</th>
                            <th scope="col">news desc</th>
                            <th scope="col">client desc</th>
                            <th scope="col">member desc</th>
                            <th scope="col">about desc</th>
                            <th scope="col">service desc</th>
                            <th scope="col">logo</th>
                            <th scope="col">map</th>
                            <th scope="col">mobile</th>
                            <th scope="col">email</th>
                            <th scope="col">address</th>
                            <th scope="col">facebook</th>
                            <th scope="col">twitter</th>
                            <th scope="col">linkdin</th>
                            <th scope="col">instragram</th>
                            <th scope="col">status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </div>
                </tfoot>
            </table>
        </div>
    </div>
@endsection
