@extends('Layout.Super-Admin.base')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="pb-5 flex align-items-center justify-content-between">
                <h2 class="content-title">DETAIL DATA KEGIATAN <button class="btn btn-success float-right" data-toggle="modal" data-target="#tambah">TAMBAH GAMBAR</button></h2>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-images">
                <div class="card-body card-images">
                    <img src="{{ url('public') }}/{{ $list->gambar_kegiatan }}" width="50%" alt="" class="img-spesies">
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card rounded-none">
                <div class="card-body">
                    <ul class="list-unstyled profile-about-list">
                        <li>
                            <i class="material-icons">school</i>
                            <span>Nama kegiatan</span>
                            <p class="mx-4">{{ $list->nama_kegiatan }}</p>
                        </li>
                        <li>
                            <i class="material-icons">school</i>
                            <span>Kategori</span>
                            <p class="mx-4">{{ $list->kategori_kegiatan }}</p>
                        </li>
                        <li>
                            <i class="material-icons">school</i>
                            <span>Deskripsi</span>
                            <p class="mx-4">{!! $list->deskripsi !!}</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
