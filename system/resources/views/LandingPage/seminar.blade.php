@extends('LandingPage.landing')
@section('content')
    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/4.jpg)">
        <div class="auto-container">
            <div class="title-box">
                <h1>Seminar</h1>
            </div>
            <ul class="page-breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li>Kegiatan</li>
                <li>Seminar</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->
    <!-- Blog Section -->
    <section class="blog-section">
        <div class="auto-container">
            <!-- News Block -->
            <div class="news-block-two wow fadeIn">
                @foreach ( $list as $seminar)
                    
                
                <div class="inner-box">
                    <div class="row clearfix">
                        <!-- Image Column -->
                        <div class="image-column col-lg-5 col-md-12 col-sm-12">
                            <div class="inner-column">
                                <figure class="image"><a href="#">  <img src="{{ url('public') }}/{{ $seminar->gambar_kegiatan }}" alt=""></a></figure>
                            </div>
                        </div>

                        <!-- Content Column -->
                        <div class="content-column col-lg-7 col-md-12 col-sm-12">
                            <div class="inner-column">
                                <ul class="info">
                                    <li class="day">{{ $seminar->tanggalSaja() }}</li>
                                    <li class="day">{{ $seminar->tahunSaja() }}</li>
                                    
                                </ul>
                                <div class="content">
                                    <h3><a href="#">{{ $seminar->nama_kegiatan }}</a></h3>
                                    <div class="text">{!! $seminar->potongString() !!}</div>
                                    <div class="link-box"><a href="{{ url('/detailSeminar', encrypt($seminar->id)) }}">Read More</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

           
        </div>
    </section>
    <!-- End Blog Section -->

@endsection
