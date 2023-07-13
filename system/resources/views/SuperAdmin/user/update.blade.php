@extends('Layout.Super-Admin.base')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="page-title br-0 mb-3">FORM UPDATE DATA USER</h3>
            </div>

        </div>
    </div>
    <section class="content">

        <div class="row">
            <div class="col-lg-12 col-12">
                <div class="card rounded-md shadow-md">
                    <div class="card-body">
                        <form action="{{ url('SuperAdmin/user/updateAct', $list->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-4 col-12">
                                    <div class="form-group">
                                        <label for="">Username</label>
                                        <input type="text" name="username" value="{{ $list->username }}" class="form-control" placeholder="Username ..." required>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-12">
                                    <div class="form-group">
                                        <label for="">Email</label>
                                        <input type="text" name="email" value="{{ $list->email }}" class="form-control" placeholder="Email ..." required>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-12">
                                    <div class="form-group">
                                        <label for="">Password</label>
                                        <input type="text" name="password"  class="form-control" placeholder="Password ..." >
                                    </div>
                                </div>

                                <div class="col-lg-6 col-12">
                                    <div class="form-group">
                                        <label for="">Gambar</label>
                                        <input id="gambar" type="file" name="gambar_user" class="form-control" accept=".png, .jpg, .jpeg">
                                        <img id="gambarPreview" src="{{ url("public/$list->gambar_user") }}" class="rounded float-end" width="50%">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="form-group">
                                        <label for="">Hak Akses</label>
                                        <select name="level" id="" class="form-control">
                                            <option value=""> --- Pilih ---</option>
                                            <option value="Super Admin" @if ($list->level == 'Super Admin')
                                                selected
                                            @endif>Super Admin</option>
                                            <option value="Admin" @if ($list->level == 'Admin')
                                                selected
                                            @endif>Admin</option>
                                            <option value="Anggota" @if ($list->level == 'Anggota')
                                                selected
                                            @endif>Anggota</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-12">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <a href="{{ url('SuperAdmin/user') }}" class="btn btn-warning">BATAL</a>
                                        <button class="btn btn-primary mx-2">SIMPAN</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
@push('script')
    <script>
        $(document).ready(function() {
            $("#gambar").on("change", function(e) {
                var imageFile = e.target.files[0];

                if (imageFile) {
                    const reader = new FileReader();
                    reader.readAsDataURL(imageFile);

                    reader.addEventListener("load", () => {
                        $("#gambarPreview").attr("src", reader.result);
                    });
                }
            });
        });
    </script>
@endpush
