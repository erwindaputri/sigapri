@extends('LandingPage.landing')
@section('content')
    
  
  

    <!-- Projects Section -->
    <section class="projects-section">
        <div class="auto-container">
            <!--MixitUp Galery-->
            <div class="sortable-masonry">
                <div class="heading-box clearfix">
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <div class="sec-title"> 
                                <h2> <span>E-book</span></h2>
                            </div>
                        </div>

                        <div class="col-lg-8 col-md-12 col-sm-12">
                            <!--Filter-->
                            
                        </div>
                    </div>
                </div>

                <div class="items-container row clearfix">
                    @foreach ( $list as $ebook)
                    <!-- Project Block -->
                    <div class="project-block masonry-item all garden-care col-xl-2 col-lg-2 col-md-6 col-sm-12">
                        <div class="image-box">
                            <figure class="image"><img src="{{ url('public') }}/{{ $ebook->sampul}}" alt=""></figure>
                            <div class="overlay-box">
                                <div class="content-box">
                                    <h4>"{{ $ebook->nama_ebook }}"</h4>
                                    <a href="{{ url('public') }}/{{ $ebook->pdf }}" class="link" target="_blank"> View Details <i class="flaticon-add"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                    
                </div>

                <div class="link-box">
                    <a href="projects.html" class="theme-btn btn-style-one">Load More</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Projects Section -->


  
@endsection