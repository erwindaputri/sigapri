@extends('LandingPage.landing')
@section('content')
    <!-- Services Section -->
    <section class="services-section">
        <div class="auto-container">
            <div class="sec-title style-two">
                <div class="row clearfix">
                    <div class="title-column col-lg-4 col-md-12 col-sm-12">
                        <h2><span>Spesies Reptil</span></h2>
                    </div>
                    <div class="text-column col-lg-8 col-md-12 col-sm-12">
                        <div class="text">Reptil adalah hewan berdarah dingin dengan sisik yang melindungi tubuhnya dan biasanya hidup di darat.
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                @foreach ($list as $reptil)
                    <!-- Service Block -->
                    <div class="service-block col-lg-3 col-md-6 col-sm-12 wow fadeIn">
                        <div class="inner-box">
                            <div class="image-box">
                                @if ($reptil->galeri->isNotEmpty())
                                    <img src="{{ url('public') }}/{{ $reptil->galeri->first()->gambar_spesies }}" alt="">
                                @endif
                                <div class="overlay-box">
                                    <div class="content">
                                        <div class="text">{{ $reptil->nama_spesies }}</div>
                                        <div class="link">
                                            <a href="{{ url('detailReptil',encrypt($reptil->id)) }}">Selengkap nya >></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="caption-box">
                                <h3>{{ $reptil->nama_spesies }}</h3>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <!--End Services Section -->
@endsection
