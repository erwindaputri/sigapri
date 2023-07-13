@extends('Layout.Super-Admin.base')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2 class="content-title d-block pb-3 m-0">DATA USER</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card rounded-none">
                <div class="card-header">
                    <a href="{{ url('SuperAdmin/user/add') }}" class="btn btn-success btn-sm float-right">
                        Tambah data
                    </a>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">

                                <table id="zero-conf" class="display" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>
                                                <center>No.</center>
                                            </th>
                                            <th>
                                                <center>Username</center>
                                            </th>
                                            <th>
                                                <center>Email</center>
                                            </th>
                                            <th>
                                                <center>Gambar</center>
                                            </th>
                                            <th>
                                                <center>Level</center>
                                            </th>
                                            <th>
                                                <center>Aksi</center>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($list as $user)
                                            <tr>
                                                <td>
                                                    <center>{{ $loop->iteration }}</center>
                                                </td>
                                                <td>
                                                    <center>{{ $user->username }}</center>
                                                </td>
                                                <td>
                                                    <center>{{ $user->email }}</center>
                                                </td>
                                                <td>
                                                    <center><img src="{{ url('public') }}/{{ $user->gambar_user }}" alt="" style="width: 45px;height:45px;border-radius:50%"></center>
                                                </td>
                                                <td>
                                                    <center>{{ $user->level }}</center>
                                                </td>
                                                <td>
                                                    <center>
                                                        <div class="btn-group">
                                                            <a href="{{ url('SuperAdmin/user/update', $user) }}" class="btn btn-sm btn-primary">
                                                                <i class="fa fa-edit"></i>
                                                            </a>
                                                            <a href="{{ url('SuperAdmin/user/hapus', $user->id) }}" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini ?!')">
                                                                <i class="fa fa-trash"></i>
                                                            </a>
                                                        </div>
                                                    </center>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
