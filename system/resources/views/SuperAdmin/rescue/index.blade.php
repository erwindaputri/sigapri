@extends('Layout.Super-Admin.base')
@section('content')



    <div class="row">
        <div class="col-md-12">
            <h2 class="content-title d-block pb-3 m-0">DATA RESCUE</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card rounded-none">
                <div class="card-header">
                    <a href="{{ url('SuperAdmin/rescue/add') }}" class="btn btn-success btn-sm float-right">
                        Tambah data
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th><center>No.</center></th>
                                    <th><center>No Telepon/WA</center></th>  
                                    <th><center>Email</center></th>
                                    <th><center>Alamat</center></th>
                                    <th><center>Aksi</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list as $rescue)
                                <tr>
                                    <td><center>{{ $loop->iteration }}</center></td>
                                    <td><center>{{ $rescue->nomor_telepon }}</center></td>
                                    <td><center>{{ $rescue->email }}</center></td>
                                    <td><center>{{ $rescue->alamat}}</center></td>
                                    <td>
                                        <center>
                                            <div class="btn-group">
                                                <a href="{{ url('SuperAdmin/rescue/update', $rescue) }}" class="btn btn-sm btn-primary">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="{{ url('SuperAdmin/rescue/hapus', $rescue->id) }}" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini ?!')">
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
