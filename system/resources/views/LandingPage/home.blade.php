@extends('LandingPage.landing')
@section('content')
    
    <!-- Bnner Section -->
    <section class="banner-section">
        <div class="banner-carousel owl-carousel owl-theme">
            <div class="slide-item" style="background-image: url({{ url('public') }}/landing/images/ularbiru.jpg);">
                <div class="auto-container">
                    <div class="content-box">
                        <h2 style="color: white; text-shadow: 2px 2px 2px black;">Selamat Datang!</h2>
                        <h4 style="color: white; text-shadow: 2px 2px 2px black;">di Yayasan Amfibi Reptil Indonesia.</h4>
                        <div class="link-box clearfix">
                            <a href="#" class="theme-btn btn-style-one">Jelajahi</a>
                            <a href="#" class="theme-btn btn-style-one">Bergabung</a>
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="slide-item" style="background-image: url({{ url('public') }}/landing/images/komodo1.jpg);">
                <div class="auto-container clearfix">
                    <div class="content-box pull-right">
                        <h2 style="color: white; text-shadow: 2px 2px 2px black;">Temukan!</h2>
                        <h4 style="color: white; text-shadow: 2px 2px 2px black;">Kekayaan dan Keunikan <br> Amfibi dan Reptil.</h4>
                        <div class="link-box clearfix">
                            <a href="#" class="theme-btn btn-style-one">Jelajahi</a>
                            <a href="#" class="theme-btn btn-style-one">Bergabung</a>
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="slide-item" style="background-image: url({{ url('public') }}/landing/images/kodok.jpg);">
                <div class="auto-container">
                    <div class="content-box">
                        <h2 style="color: white; text-shadow: 2px 2px 2px black;">Bergabunglah!</h2>
                        <h4 style="color: white; text-shadow: 2px 2px 2px black;">Mari jelajahi dan  <br> ikuti jejak langkah kita.</h4>
                        <div class="link-box clearfix">
                            <a href="#" class="theme-btn btn-style-one">Jelajahi</a>
                            <a href="#" class="theme-btn btn-style-one">Bergabung</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
    
    <!-- End Bnner Section -->

    <!-- Services Section -->
    <section class="services-section">
        <div class="auto-container">
            <div class="sec-title style-two">
                <div class="row clearfix">
                    <div class="title-column col-lg-4 col-md-12 col-sm-12">
                        <h2>Our Main <span>Services</span></h2>                
                    </div>
                    <div class="text-column col-lg-8 col-md-12 col-sm-12">
                        <div class="text">We provide ongoing property maintenance which includes lawn mowing, fertilizing, spring and fall cleanups, snow plowing & tree care & removal.</div>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <!-- Service Block -->
                <div class="service-block col-lg-3 col-md-6 col-sm-12 wow fadeIn">
                    <div class="inner-box">
                        <div class="image-box">
                            <img src="{{ url('public') }}/landing/images/resource/service-1.jpg" alt="">
                            <div class="icon-box"><span class="icon flaticon-flower"></span></div>
                            <div class="overlay-box">   
                                <div class="content">
                                    <div class="text">Environmental problems result when exotic plants are placed in the landscape that require extensive adaptation of the climate to allow</div>
                                    <div class="link"><a href="service-single.html">Read More</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="caption-box">
                            <h3><a href="services-single.html">Design & Planting</a></h3>
                        </div>
                    </div>
                </div>

                <!-- Service Block -->
                <div class="service-block col-lg-3 col-md-6 col-sm-12 wow fadeIn" data-wow-delay="400ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <img src="{{ url('public') }}/landing/images/resource/service-2.jpg" alt="">
                            <div class="icon-box"><span class="icon flaticon-mining"></span></div>
                            <div class="overlay-box">   
                                <div class="content">
                                    <div class="text">Environmental problems result when exotic plants are placed in the landscape that require extensive adaptation of the climate to allow</div>
                                    <div class="link"><a href="service-single.html">Read More</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="caption-box">
                            <h3><a href="services-single.html">Lawn & Garden Care</a></h3>
                        </div>
                    </div>
                </div>

                <!-- Service Block -->
                <div class="service-block col-lg-3 col-md-6 col-sm-12 wow fadeIn" data-wow-delay="800ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <img src="{{ url('public') }}/landing/images/resource/service-3.jpg" alt="">
                            <div class="icon-box"><span class="icon flaticon-autumn"></span></div>
                            <div class="overlay-box">   
                                <div class="content">
                                    <div class="text">Environmental problems result when exotic plants are placed in the landscape that require extensive adaptation of the climate to allow</div>
                                    <div class="link"><a href="service-single.html">Read More</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="caption-box">
                            <h3><a href="services-single.html">Spring & Fall Cleanup</a></h3>
                        </div>
                    </div>
                </div>

                <!-- Service Block -->
                <div class="service-block-two col-lg-3 col-md-6 col-sm-12 wow fadeIn" data-wow-delay="1200ms">
                    <div class="inner-box">
                        <div class="image"><img src="{{ url('public') }}/landing/images/resource/service-1.jpg" alt=""></div>
                        <div class="content-box">
                            <div class="content">
                                <h3>For <span>More Services</span> click below</h3>
                                <div class="icon-box"><a href="services.html"><span class="flaticon-leaf-1"></span></a></div>
                                <div class="link-box"><a href="#">getquote@support.com</a></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product Block -->
                <div class="product-block col-lg-6 col-md-12 col-sm-12 wow fadeIn">
                    <div class="inner-box">
                        <div class="image-box"><img src="{{ url('public') }}/landing/images/resource/product-1.png" alt=""></div>
                        <div class="content-box">
                            <span class="tag">For Every</span>
                            <h3>Design & 3D Modelling</h3>
                            <h4>Get upto 25% off</h4>
                            <div class="link"><a href="shop.html">Order Now</a></div>
                        </div>
                    </div>
                </div>

                <!-- Product Block -->
                <div class="product-block col-lg-6 col-md-12 col-sm-12 wow fadeIn" data-wow-delay="500ms">
                    <div class="inner-box">
                        <div class="image-box"><img src="{{ url('public') }}/landing/images/resource/product-2.png" alt=""></div>
                        <div class="content-box">
                            <span class="tag">Spl Offer</span>
                            <h3>Gardening Glove</h3>
                            <h4>Save upto 30%</h4>
                            <div class="link"><a href="shop.html">Order Now</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Services Section -->

    <!-- Why Choose Us -->
    <section class="why-choose-us" style="background-image: url({{ url('public') }}/landing/images/background/1.jpg);">
        <div class="outer-container">
            <div class="row no-gutters clearfix">
                <!-- Feature Block -->
                <div class="feature-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeIn">
                    <div class="inner-box">
                        <span class="float-text">t</span>
                        <div class="icon-box"><span class="icon flaticon-time"></span></div>
                        <h3><a href="service-single.html">On Time, Every Time</a></h3>
                        <div class="text">Must explain to you how all this mistaken idea of denouncing pleasure and praising  was born system. </div>
                        <div class="link"><a href="service-single.html">Read More</a></div>
                    </div>
                </div>

                <!-- Feature Block -->
                <div class="feature-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeIn" data-wow-delay="400ms">
                    <div class="inner-box">
                        <span class="float-text">i</span>
                        <div class="icon-box"><span class="icon flaticon-health"></span></div>
                        <h3><a href="service-single.html">Public Liability Insurance</a></h3>
                        <div class="text">Must explain to you how all this mistaken idea of denouncing pleasure and praising  was born system. </div>
                        <div class="link"><a href="service-single.html">Read More</a></div>
                    </div>
                </div>

                <!-- Feature Block -->
                <div class="feature-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeIn" data-wow-delay="800ms">
                    <div class="inner-box">
                        <span class="float-text">m</span>
                        <div class="icon-box"><span class="icon flaticon-industry"></span></div>
                        <h3><a href="service-single.html">Tailor-Made Designs</a></h3>
                        <div class="text">Must explain to you how all this mistaken idea of denouncing pleasure and praising  was born system. </div>
                        <div class="link"><a href="service-single.html">Read More</a></div>
                    </div>
                </div>

                <!-- Feature Block -->
                <div class="feature-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeIn" data-wow-delay="1200ms">
                    <div class="inner-box">
                        <span class="float-text">e</span>
                        <div class="icon-box"><span class="icon flaticon-ground"></span></div>
                        <h3><a href="service-single.html">Environmentally Friendly</a></h3>
                        <div class="text">Must explain to you how all this mistaken idea of denouncing pleasure and praising  was born system. </div>
                        <div class="link"><a href="service-single.html">Read More</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Why Choose Us -->

    <!-- Projects Section -->
    <section class="projects-section">
        <div class="auto-container">
            <!--MixitUp Galery-->
            <div class="sortable-masonry">
                <div class="heading-box clearfix">
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <div class="sec-title"> 
                                <h2>Latest <span>Projects</span></h2>
                            </div>
                        </div>

                        <div class="col-lg-8 col-md-12 col-sm-12">
                            <!--Filter-->
                            <div class="filters clearfix">
                                <ul class="filter-tabs filter-btns clearfix">
                                    <li class="filter active" data-role="button" data-filter=".all">All Projects <span>23</span></li>
                                    <li class="filter" data-role="button" data-filter=".lawn-care">Lawn Care <span>20</span></li>
                                    <li class="filter" data-role="button" data-filter=".garden-care">Garden Care <span>18</span></li>
                                    <li class="filter" data-role="button" data-filter=".planting">Planting <span>10</span></li>
                                    <li class="filter" data-role="button" data-filter=".snow-removal">Snow Removal <span>04</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="items-container row clearfix">
                    <!-- Project Block -->
                    <div class="project-block masonry-item all garden-care col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="image-box">
                            <figure class="image"><img src="{{ url('public') }}/landing/images/gallery/1.jpg" alt=""></figure>
                            <div class="overlay-box">
                                <div class="content-box">
                                    <h4>Snow Removal</h4>
                                    <a href="project-single.html" class="link">View Details <i class="flaticon-add"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project Block -->
                    <div class="project-block masonry-item all garden-care planting snow-removal col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="image-box">
                            <figure class="image"><img src="{{ url('public') }}/landing/images/gallery/2.jpg" alt=""></figure>
                             <div class="overlay-box">
                                <div class="content-box">
                                    <h4>Snow Removal</h4>
                                    <a href="project-single.html" class="link">View Details <i class="flaticon-add"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project Block -->
                    <div class="project-block masonry-item all planting snow-removal col-xl-6 col-lg-6 col-md-6 col-sm-12">
                        <div class="image-box">
                            <figure class="image"><img src="{{ url('public') }}/landing/images/gallery/3.jpg" alt=""></figure>
                            <div class="overlay-box">
                                <div class="content-box">
                                    <h4>Snow Removal</h4>
                                    <a href="project-single.html" class="link">View Details <i class="flaticon-add"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project Block -->
                    <div class="project-block masonry-item all snow-removal lawn-care planting col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="image-box">
                            <figure class="image"><img src="{{ url('public') }}/landing/images/gallery/4.jpg" alt=""></figure>
                            <div class="overlay-box">
                                <div class="content-box">
                                    <h4>Snow Removal</h4>
                                    <a href="project-single.html" class="link">View Details <i class="flaticon-add"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project Block -->
                    <div class="project-block masonry-item all snow-removal garden-care col-xl-3 col-lg-3 col-md-12 col-sm-12">
                        <div class="image-box">
                            <figure class="image"><img src="{{ url('public') }}/landing/images/gallery/5.jpg" alt=""></figure>
                            <div class="overlay-box">
                                <div class="content-box">
                                    <h4>Snow Removal</h4>
                                    <a href="project-single.html" class="link">View Details <i class="flaticon-add"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project Block -->
                    <div class="project-block masonry-item all garden-care planting lawn-care col-xl-6 col-lg-6 col-md-12 col-sm-12">
                        <div class="image-box">
                            <figure class="image"><img src="{{ url('public') }}/landing/images/gallery/6.jpg" alt=""></figure>
                            <div class="overlay-box">
                                <div class="content-box">
                                    <h4>Snow Removal</h4>
                                    <a href="project-single.html" class="link">View Details <i class="flaticon-add"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project Block -->
                    <div class="project-block masonry-item all lawn-care col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="image-box">
                            <figure class="image"><img src="{{ url('public') }}/landing/images/gallery/7.jpg" alt=""></figure>
                            <div class="overlay-box">
                                <div class="content-box">
                                    <h4>Snow Removal</h4>
                                    <a href="project-single.html" class="link">View Details <i class="flaticon-add"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project Block -->
                    <div class="project-block masonry-item all garden-care planting col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="image-box">
                            <figure class="image"><img src="{{ url('public') }}/landing/images/gallery/8.jpg" alt=""></figure>
                            <div class="overlay-box">
                                <div class="content-box">
                                    <h4>Snow Removal</h4>
                                    <a href="project-single.html" class="link">View Details <i class="flaticon-add"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="link-box">
                    <a href="projects.html" class="theme-btn btn-style-one">Load More</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Projects Section -->

    <!-- Process Section -->
    <section class="process-section" style="background-image: url({{ url('public') }}/landing/images/background/2.jpg);">
        <div class="auto-container">
            <div class="sec-title light text-center">
                <h2>Our Work <span>Process</span></h2>
                <div class="text">We design with you by asking questions and listening closely to your answers.</div>
            </div>

            <div class="row clearfix">
                <!-- Process Block -->
                <div class="process-block col-lg-3 col-md-6 col-sm-12 wow fadeIn">
                    <div class="inner-box">
                        <span class="icon flaticon-consulting"></span>
                        <h4><a href="working-process.html">Initial Consultation</a></h4>
                        <span class="count">1</span>
                    </div>
                </div>

                <!-- Process Block -->
                <div class="process-block col-lg-3 col-md-6 col-sm-12 wow fadeIn" data-wow-delay="400ms">
                    <div class="inner-box">
                        <span class="icon flaticon-sketch"></span>
                        <h4><a href="working-process.html">Design Installation</a></h4>
                        <span class="count">2</span>
                    </div>
                </div>

                <!-- Process Block -->
                <div class="process-block col-lg-3 col-md-6 col-sm-12 wow fadeIn" data-wow-delay="800ms">
                    <div class="inner-box">
                        <span class="icon flaticon-mining"></span>
                        <h4><a href="working-process.html">Construction Details</a></h4>
                        <span class="count">3</span>
                    </div>
                </div>

                <!-- Process Block -->
                <div class="process-block col-lg-3 col-md-6 col-sm-12 wow fadeIn" data-wow-delay="1200ms">
                    <div class="inner-box">
                        <span class="icon flaticon-wood-1"></span>
                        <h4><a href="working-process.html">Proper Maintenance</a></h4>
                        <span class="count">4</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Process Section -->

    <!-- Testimonial Section -->
    <section class="testimonials-section">
        <div class="auto-container">
            <div class="sec-title style-two">
                <div class="row clearfix">
                    <div class="title-column col-lg-4 col-md-12 col-sm-12">
                        <h2>Client <span>Testimonials</span></h2>                
                    </div> 
                    <div class="text-column col-lg-8 col-md-12 col-sm-12">
                        <div class="text">Read what our clients say about our landscaping services and know how we help our customers to get what they expect.</div>
                    </div>
                </div>
            </div>

            <div class="testimonial-carousel owl-carousel owl-theme">
                <!-- Testimonial BLock -->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="thumb"><img src="{{ url('public') }}/landing/images/resource/thumb-1.png" alt=""></div>
                        <h4>Great ! Garden Designs and Maintenace</h4>
                        <div class="text">Gardenarea helped me transform my dated, patchwork front yard into an inviting Southern Garden! gardenarea architect Michael Gregory worked.</div>
                        <div class="info-box">
                            <h5 class="name">Emileny Fernando</h5>
                            <span class="designation">California</span>
                        </div>
                    </div>
                </div>

                <!-- Testimonial BLock -->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="thumb"><img src="{{ url('public') }}/landing/images/resource/thumb-1.png" alt=""></div>
                        <h4>Great ! Garden Designs and Maintenace</h4>
                        <div class="text">Gardenarea helped me transform my dated, patchwork front yard into an inviting Southern Garden! gardenarea architect Michael Gregory worked.</div>
                        <div class="info-box">
                            <h5 class="name">Emileny Fernando</h5>
                            <span class="designation">California</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Testimonial Section -->

    <!-- News Section -->
    <section class="news-section">
        <div class="auto-container">
            <div class="sec-title style-three">
                <div class="row clearfix">
                    <div class="title-column col-lg-4 col-md-12 col-sm-12">
                        <h2>Latest From <span> Blog</span></h2>                
                    </div>  
                    <div class="text-column col-lg-8 col-md-12 col-sm-12">
                        <div class="text">Our experts sharing their experience to our customers know about<br> gardening tips, tricks and more. </div>
                    </div>
                </div>
            </div>

            <!-- News Carousel -->
            <div class="news-carousel owl-carousel owl-theme">
                <!-- News Block -->
                <div class="news-block">
                    <div class="inner-box">
                        <ul class="info">
                            <li class="day">14 <span>May</span></li>
                            <li class="comments">2  <span>Comnts</span></li>
                        </ul>
                        <div class="content">
                            <div class="author">by <a href="blog-single.html">Jeorge Bailey</a></div>
                            <h3><a href="blog-single.html">Snow Blower or Plow: what’s Better</a></h3>
                            <div class="text">Denouncing pleasure and praising pain born and will give you completed expound teachings...</div>
                            <div class="link-box"><a href="blog-single.html">Read More</a></div>
                        </div>
                    </div>
                </div>

                 <!-- News Block -->
                <div class="news-block">
                    <div class="inner-box">
                        <ul class="info">
                            <li class="day">14 <span>May</span></li>
                            <li class="comments">2  <span>Comnts</span></li>
                        </ul>
                        <div class="content">
                            <div class="author">by <a href="blog-single.html">Jeorge Bailey</a></div>
                            <h3><a href="blog-single.html">Snow Blower or Plow: what’s Better</a></h3>
                            <div class="text">Denouncing pleasure and praising pain born and will give you completed expound teachings...</div>
                            <div class="link-box"><a href="blog-single.html">Read More</a></div>
                        </div>
                    </div>
                </div>

                 <!-- News Block -->
                <div class="news-block">
                    <div class="inner-box">
                        <ul class="info">
                            <li class="day">14 <span>May</span></li>
                            <li class="comments">2  <span>Comnts</span></li>
                        </ul>
                        <div class="content">
                            <div class="author">by <a href="blog-single.html">Jeorge Bailey</a></div>
                            <h3><a href="blog-single.html">Snow Blower or Plow: what’s Better</a></h3>
                            <div class="text">Denouncing pleasure and praising pain born and will give you completed expound teachings...</div>
                            <div class="link-box"><a href="blog-single.html">Read More</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End News Section -->

    <!-- Contact Section -->
    <section class="contact-section">
        <div class="auto-container">
            <div class="row clearfix">
                <!-- Image Column -->
                <div class="image-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="image-box wow fadeIn">
                            <div class="image"><img src="{{ url('public') }}/landing/images/resource/image-1.jpg" alt=""></div> 
                            <div class="info-box">
                                <div class="text">For Any Emergency Service</div>
                                <h4>+1800-565-1234</h4>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Form Column -->
                <div class="form-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="text">We can help with your emergency situation, Would you like to get your estimate?.</div>
                        <div class="contact-form">
                            <form method="post" action="index.html">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <input type="text" name="username" placeholder="Name" required="">
                                        </div>
                                        
                                        <div class="form-group">
                                            <input type="email" name="email" placeholder="Email" required="">
                                        </div>

                                        <div class="form-group">
                                            <input type="text" name="phone" placeholder="Phone No" required="">
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                        <textarea name="message" placeholder="Message"></textarea>
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <button type="submit" name="submit-form" class="theme-btn btn-style-one">Submit Now</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Contact Section -->

    <!-- Map Section -->
    <section class="map-section" style="background-image: url({{ url('public') }}/landing/images/background/3.jpg);">
        <div class="auto-container clearfix">
            <div class="info-column clearfix">
                <div class="inner-column">
                    <div class="sec-title light"><h2>Contact Details</h2></div>
                    <div class="content">
                        <h5>Visit us on</h5>
                        <div class="text">DE 198 Tech Road <br>Bridge Str, Newyork 10026 <br>United States.</div>
                        <div class="link-box"><a href="contact.html">Other Branches</a></div>
                    </div>
                </div>
            </div>

            <!-- Map Column -->
            <div class="map-column">
                <div class="map-outer">
                    <!--Map Canvas-->
                    <div class="map-canvas"
                        data-zoom="12"
                        data-lat="-37.817085"
                        data-lng="144.955631"
                        data-type="roadmap"
                        data-hue="#ffc400"
                        data-title="Envato"
                        data-icon-path="images/icons/map-marker.png"
                        data-content="Melbourne VIC 3000, Australia<br><a href='mailto:info@youremail.com'>info@youremail.com</a>">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Map Section -->
@endsection