@extends('Layout.Super-Admin.base')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2 class="content-title d-block pb-3 m-0">DATA Anggota</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card rounded-none">
                <div class="card-header">
                    <a href="{{ url('SuperAdmin/anggota/create') }}" class="btn btn-success btn-sm float-right">
                        Tambah data
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responive">
                        <table id="zero-conf" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Aksi</th>
                                    <th>NIK</th>
                                    <th>Nama</th>
                                    <th>Status</th>
                                    <th>Poto</th>
                                   
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list_anggota as $anggota)
                                    <tr>
                                        <td class="text-center">
                                            {{ $loop->iteration }}
                                        </td>
                                        <td class="text-center">

                                            <div class="btn-group">

                                                <a href="{{ url('SuperAdmin/ebook/update', $anggota->id) }}" class="btn btn-sm btn-primary">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="{{ url('SuperAdmin/ebook/hapus', $anggota) }}" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini ?!')">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                            </div>

                                        </td>
                                        <td class="text-center">{{ $anggota->nik }}</td>
                                        <td class="text-center">{{ $anggota->nama }}</td>
                                        <td class="text-center">
                                            @if ($anggota->status == 1)
                                                <button class="btn btn-primary"><span class="fa fa-check"></span> Konfirmasi</button>
                                            @endif

                                            @if ($anggota->status == 2)
                                                <p>Akun Sudah Terdaftar</p>
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            <img src="{{ url("public/$anggota->poto") }}" style="width: 30%; height:30%">
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
