@extends('LandingPage.landing')
@section('content')
    <div class="sidebar-page-container alternate">
        <div class="auto-container">
            <div class="row clearfix">
                <!--Content Side-->
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                    <div class="blog-single">
                        <!-- News Block -->
                        <div class="news-block-three">

                            <div class="inner-box">

                                <div class="image-box wow fadeIn">
                                    <figure class="image"> <img src="{{ url('public') }}/{{ $list->gambar_kegiatan }}" alt=""></figure>
                                </div>

                                <!-- Content Column -->
                                <div class="content-box">
                                    <div class="inner-box">
                                        <ul class="info">
                                            <li class="day">{{ $list->tanggalSaja() }}</li>
                                            <li class="day">{{ $list->tahunSaja() }}</li>
                                        </ul>
                                        <div class="content">
                                            <div class="author">By <a href="blog-single.html">Jeorge Bailey</a></div>
                                            <h3>{{ $list->nama_kegiatan }}</h3>
                                            <p>{!! $list->deskripsi !!}</p>


                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- Other Option -->



                    </div>
                </div>

                <!--Sidebar Side-->
                <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                    <aside class="sidebar default-sidebar">

                        <!-- Search -->

                        <!-- Recent Posts -->
                        <div class="sidebar-widget news-widget">
                            <div class="sidebar-title">
                                <h2>Recent Post</h2>
                            </div>
                            <div class="widget-content">
                                <!--News Widget Block-->
                                <div class="news-widget-block">
                                    <div class="widget-inner">
                                        <div class="post-date"><span class="fa fa-clock-o"></span> March 31, 2018</div>
                                        <h3><a href="blog-single.html">Special Message Regarding Mystery Shopper Programs.</a></h3>
                                    </div>
                                </div>

                                <!--News Widget Block-->
                                <div class="news-widget-block">
                                    <div class="widget-inner">
                                        <div class="post-date"><span class="fa fa-clock-o"></span> March 06, 2018</div>
                                        <h3><a href="blog-single.html">More than 50 percent of the work we do today didnot exist.</a></h3>
                                    </div>
                                </div>

                                <!--News Widget Block-->
                                <div class="news-widget-block">
                                    <div class="widget-inner">
                                        <div class="post-date"><span class="fa fa-clock-o"></span> March 06, 2018</div>
                                        <h3><a href="blog-single.html">How Landscaping Can Add Curb Appeal to Your Home?</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </aside>
                </div>
            </div>
        </div>
    </div>
@endsection
