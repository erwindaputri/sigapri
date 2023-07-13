@extends('Layout.Admin.base')
@section('content')



    <div class="row">
        <div class="col-md-12">
            <h2 class="content-title d-block pb-3 m-0">DATA SPESIES</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card rounded-none">
                <div class="card-header">
                    <a href="{{ url('Admin/spesies/add') }}" class="btn btn-success btn-sm float-right">
                        Tambah data
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th><center>No.</center></th>
                                    <th><center>Nama</center></th>
                                    <th><center>Nama Latin</center></th>
                                    <th><center>Kategori</center></th>
                                    <th><center>Jenis</center></th>
                                    <th><center>Famili</center></th>
                                    <th><center>Aksi</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list as $item)
                                <tr>
                                    <td><center>{{ $loop->iteration }}</center></td>
                                    <td><center>{{ $item->nama_spesies }}</center></td>
                                    <td><center>{{ $item->nama_latin }}</center></td>
                                    <td><center>{{ $item->kategori_spesies }}</center></td>
                                    <td><center>{{ $item->kategori_jenis }}</center></td>
                                    <td><center>{{ $item->famili }}</center></td>
                                    <td>
                                        <center>
                                            <div class="btn-group">
                                                <a href="{{ url('Admin/spesies/detail', encrypt($item->id)) }}" class="btn btn-sm btn-warning">
                                                    <i class="fa fa-info"></i>
                                                </a>
                                                <a href="{{ url('Admin/spesies/update', $item->id) }}" class="btn btn-sm btn-primary">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="{{ url('Admin/spesies/hapus', $item->id) }}" class="btn btn-sm btn-danger">
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
