@extends('Layout.Super-Admin.base')
@section('content')
    <style>
        .card-images {
            padding: 0px !important;
            position: relative;
        }

        .img-spesies {
            width: 100%;
            max-height: 250px;
            min-height: 250px;
            border-radius: 4px
        }

        .card-button {
            position: absolute;
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(0, 0, 0, 0.5);
            opacity: 0;
            cursor: pointer;
            transition: all 0.3s linear
        }

        .card-images:hover .card-button {
            opacity: 1;
        }
    </style>


    <div class="row">
        <div class="col-md-12">
            <div class="pb-5 flex align-items-center justify-content-between">
                <h2 class="content-title">DETAIL DATA SPESIES <button class="btn btn-success float-right" data-toggle="modal" data-target="#tambah">TAMBAH GAMBAR</button></h2>
            </div>
        </div>
    </div>
    <div class="row">
        @foreach ($list->galeri as $g)
            <div class="col-md-4">
                <div class="card card-images">
                    <div class="card-body card-images">
                        <img src="{{ url('public/' . $g->gambar_spesies) }}" alt="" class="img-spesies">
                    </div>
                    <div class="card-button">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#update{{ $g->id }}">UPDATE</button>
                        <button class="btn btn-danger mx-2">HAPUS</button>
                    </div>
                </div>
            </div>
            <!-- Modal Tambah-->
            <div class="modal fade" id="update{{ $g->id }}" tabindex="-1" aria-labelledby="tambahLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <form action="{{ url('SuperAdmin/spesies/updateGambar', $g->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">UPDATE GAMBAR SPESIES</h5>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-lg-12 col-12">
                                        <div class="form-group">
                                            <label for="">Pilih Gambar</label>
                                            <input type="file" name="gambar_spesies" class="form-control" placeholder="Gambar spesies ...">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">BATAL</button>
                                <button type="submit" class="btn btn-primary">SIMPAN</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card rounded-none">
                <div class="card-body">
                    <ul class="list-unstyled profile-about-list">
                        <li class="d-flex align-items-center">
                            <i class="material-icons">school</i>
                            <span class="font-weight-bold ml-3">Nama spesies</span>
                            <p class="ml-3">{{ $list->nama_spesies }}</p>
                        </li>
                        <li class="d-flex align-items-center">
                            <i class="material-icons">school</i>
                            <span class="font-weight-bold ml-3">Nama Latin</span>
                            <p class="ml-3">{{ $list->nama_latin }}</p>
                        </li>
                        <li class="d-flex align-items-center">
                            <i class="material-icons">school</i>
                            <span class="font-weight-bold ml-3">Famili</span>
                            <p class="ml-3">{{ $list->famili }}</p>
                        </li>
                        <li class="d-flex align-items-center">
                            <i class="material-icons">school</i>
                            <span class="font-weight-bold ml-3">Kategori</span>
                            <p class="ml-3">{{ $list->kategori_spesies }}</p>
                        </li>
                        <li class="d-flex align-items-center">
                            <i class="material-icons">school</i>
                            <span class="font-weight-bold ml-3">Jenis</span>
                            <p class="ml-3">{{ $list->kategori_jenis }}</p>
                        </li>
                        <li class="d-flex align-items-center">
                            <i class="material-icons">school</i>
                            <span class="font-weight-bold ml-3">Daerah pesebaran</span>
                            <p class="ml-3">{{ $list->nama_daerah }}</p>
                        </li>
                        <li class="d-flex align-items-start">
                            <i class="material-icons">school</i>
                            <span class="font-weight-bold ml-3">Deskripsi</span>
                            <p class="ml-3">{!! $list->deskripsi !!}</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Modal Tambah-->
    <div class="modal fade" id="tambah" tabindex="-1" aria-labelledby="tambahLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form action="{{ url('SuperAdmin/spesies/tambahGambar') }}" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id_spesies" value="{{ $list->id }}">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="tambahLabel">TAMBAH GAMBAR SPESIES</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12 col-12">
                                <div class="form-group">
                                    <label for="">Pilih Gambar</label>
                                    <input type="file" name="gambar_spesies[]" class="form-control" placeholder="Famili spesies ..." multiple>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">BATAL</button>
                        <button type="submit" class="btn btn-primary">SIMPAN</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
