@extends('Layout.Admin.base')
@section('content')



    <div class="row">
        <div class="col-md-12">
            <h2 class="content-title d-block pb-3 m-0">DATA HAK AKSES</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card rounded-none">
                <div class="card-header">
                    <a href="{{ url('SuperAdmin/HakAkses/add') }}" class="btn btn-success btn-sm float-right">
                        Tambah data
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th><center>No.</center></th>
                                    <th><center>Username</center></th>  
                                    <th><center>email</center></th>
                                    <th><center>password</center></th>
                                    <th><center>gambar</center></th>
                                    <th><center>Level</center></th>
                                    <th><center>Aksi</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list as $hak_akses)
                                <tr>
                                    <td><center>{{ $loop->iteration }}</center></td>
                                    <td><center>{{ $hak_akses->username }}</center></td>
                                    <td><center>{{ $hak_akses->email }}</center></td>
                                    <td><center>{{ $hak_akses->password}}</center></td>
                                    <td><center><img src="{{ url('public') }}/{{ $hak_akses->gambar}}" alt="" style="width: 50px;height:50px"></center></td>
                                    <td><center>{{ $hak_akses->level}}</center></td>
                                    <td>
                                        <center>
                                            <div class="btn-group">
                                                <a href="{{ url('SuperAdmin/HakAkses/update', $hak_akses) }}" class="btn btn-sm btn-primary">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="{{ url('SuperAdmin/HakAkses/hapus', $hak_akses->id) }}" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini ?!')">
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


@endsection
