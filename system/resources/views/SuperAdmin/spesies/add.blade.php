@extends('Layout.Super-Admin.base')
@section('content')
    <style>
        .maps {
            width: 100%;
            height: 400px;
        }
    </style>

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="page-title br-0 mb-3">FORM TAMBAH DATA SPESIES</h3>
            </div>

        </div>
    </div>
    <section class="content">

        <div class="row">
            <div class="col-lg-12 col-12">
                <div class="card rounded-md shadow-md">
                    <div class="card-body">
                        <form action="{{ url('SuperAdmin/spesies/tambahAct') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-4 col-12">
                                    <div class="form-group">
                                        <label for="">Nama Spesies</label>
                                        <input type="text" name="nama_spesies" class="form-control" placeholder="Nama spesies ...">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-12">
                                    <div class="form-group">
                                        <label for="">Nama Latin</label>
                                        <input type="text" name="nama_latin" class="form-control" placeholder="Nama latin ...">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-12">
                                    <div class="form-group">
                                        <label for="">Famili</label>
                                        <input type="text" name="famili" class="form-control" placeholder="Famili spesies ...">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-12">
                                    <div class="form-group">
                                        <label for="">Kategori</label>
                                        <select name="kategori_spesies" id="" class="form-control">
                                            <option value="">--- Pilih ---</option>
                                            <option value="Amfibi">Amfibi</option>
                                            <option value="Reptil">Reptil</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-12">
                                    <div class="form-group">
                                        <label for="">Kategori Jenis</label>
                                        <select name="kategori_jenis" id="" class="form-control">
                                            <option value="">--- Pilih ---</option>
                                            <option value="Berbisa">Berbisa</option>
                                            <option value="Tidak Berbisa">Tidak Berbisa</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-12">
                                    <div class="form-group">
                                        <label for="">Gambar</label>
                                        <input type="hidden" name="lat" id="lat" />
                                        <input type="hidden" name="lng" id="lng" />
                                        <input id="gambar" type="file" name="gambar_spesies[]" class="form-control" placeholder="Famili spesies ..." multiple>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-12">
                                    <div class="form-group">
                                        <label for="">Daerah pesebaran</label>
                                        <input type="text" name="nama_daerah" id="nama_daerah">
                                        <input type="text"data-toggle="modal" id="daerah" data-target="#exampleModal" class="form-control" placeholder="Daerah pesebaran spesies ...">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label for="">Pratinjau Gambar</label>
                                    <div id="wrapperPreview"></div>
                                </div>
                                <div class="col-lg-12 col-12 mt-2">
                                    <div class="form-group">
                                        <label for="">Deskripsi</label>
                                        <textarea class="textarea" name="deskripsi" placeholder="Deskripsi ..." style="width: 100%;padding: 12px;border-radius:4px;border:1.5px solid grey;overflow-x:hidden"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-12">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <a href="{{ url('SuperAdmin/spesies') }}" class="btn btn-warning">BATAL</a>
                                        <button class="btn btn-primary mx-2">SIMPAN</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title font-size-24" id="exampleModalLabel">LOKASI PESEBARAN SPESIES</h1>
                    </div>
                    <div class="modal-body">
                        <div id="maps" class="maps"></div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- jQuery 3 -->

    <script src="{{ url('public') }}/admin/assets/plugins/jquery/jquery-3.4.1.min.js"></script>

    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA1MgLuZuyqR_OGY3ob3M52N46TDBRI_9k&callback=initMap&libraries=&v=weekly"></script>
    <script>
        let myLatlng = {
            lat: 0.0315034,
            lng: 109.6132273
        };
        let map = new google.maps.Map(document.getElementById("maps"), {
            zoom: 5.5,
            center: myLatlng,
        });

        map.addListener("click", (e) => {

            var lat = e.latLng.toJSON().lat.toFixed(7);
            var lng = e.latLng.toJSON().lng.toFixed(7)
            $('#lat').val(lat);
            $('#lng').val(lng);

            $.get('https://nominatim.openstreetmap.org/reverse?format=jsonv2&lat=' + lat + '&lon=' + lng, function(data) {
                $('#daerah').val(data.display_name)
                $('#nama_daerah').val(data.display_name)
            });
        });
    </script>
@endsection
@push('script')
    <script>
        $(document).ready(function() {
            $("#gambar").on("change", function(e) {
                var imageFile = e.target.files;
                for ($i = 0; $i < imageFile.length; $i++) {
                    if (imageFile) {
                        const reader = new FileReader();
                        reader.readAsDataURL(imageFile[$i]);
                        reader.addEventListener("load", () => {
                            // console.log(reader.result);
                            $("#wrapperPreview").append('<img src="' + reader.result + '" width="100" style="margin: 0 10 10 0;">');
                        });
                    }
                }
                
            });
        });
    </script>
@endpush
