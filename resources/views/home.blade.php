@extends('layouts.master')
@section('title', 'Home')
@section('content')

    <!-- Start Banner 
    ============================================= -->
    <div class="banner-area heading-exchange text-dark">
        <div id="bootcarousel" class="carousel inc-top-heading slide carousel-fade animate_text" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner carousel-zoom">
                <div class="item active">
                    <div class="slider-thumb bg-cover" style="background-image: url(assets/img/banner/1.jpg);"></div>
                    <div class="box-table">
                        <div class="box-cell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="content">
                                            <h1 data-animation="animated fadeInUp">Best <span>specialist</span></h1>
                                            <h2 data-animation="animated fadeInDown">PROVIDING SPECIALIST DENTAL CARE AND TRAINING</h2>
                                            <p data-animation="animated slideInUp">
                                                Firstly, our mission is to make you feel relaxed! Years of experience and technological advances have made dentistry better and better.
                                            </p>
                                            <a data-animation="animated slideInUp" class="btn btn-theme effect btn-md" href="#">View Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="slider-thumb bg-cover" style="background-image: url(assets/img/banner/2.jpg);"></div>
                    <div class="box-table">
                        <div class="box-cell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="content">
                                            <h1 data-animation="animated fadeInUp">Best <span>Technology</span></h1>
                                            
                                            <p data-animation="animated slideInUp">
                                                We promise excellent service every time! Remember, looking after your teeth, <br> allows you to smile and lead to individual and professional success.
                                            </p>
                                            <a data-animation="animated slideInUp" class="btn btn-theme effect btn-md" href="#">View Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="slider-thumb bg-cover" style="background-image: url(assets/img/banner/3.jpg);"></div>
                    <div class="box-table">
                        <div class="box-cell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="content">
                                            <h1 data-animation="animated fadeInUp"><span>Best</span> Care</h1>
                                            <h2 data-animation="animated fadeInDown">The country's best dental specialist</h2>
                                            <p data-animation="animated slideInUp">
                                                We give you more of what you want, the type of dental care you deserve!
                                            </p>
                                            <a data-animation="animated slideInUp" class="btn btn-theme effect btn-md" href="#">View Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Wrapper for slides -->

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#bootcarousel" data-slide="prev">
                <i class="fa fa-angle-left"></i>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#bootcarousel" data-slide="next">
                <i class="fa fa-angle-right"></i>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <!-- End Banner -->

    <div class="services-area bg-gray inc-icon default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="services-items text-center">

                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 equal-height">
                        <div class="item">
                            <div class="info">
                                <h4>
                                    <a href="#">Ask for a Consultation</a>
                                </h4>
                                <div class="overlay">
                                    <i class="flaticon-anesthesia"></i>
                                </div>
                                <p>
                                    Pop into our clinic, and we can have a look at your overall dental health to gauge what treatment is best suitable for you.
                                </p>
                                <a class="btn btn-theme border circle btn-md" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    
                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 equal-height">
                        <div class="item">
                            <div class="info">
                                <h4>
                                    <a href="#">A fantastic team</a>
                                </h4>
                                <div class="overlay">
                                    <i class="flaticon-anesthesia"></i>
                                </div>
                                <p>
                                    We pride ourselves on having built a friendly, experienced team whom our Clients have come to love.
                                </p>
                                <a class="btn btn-theme border circle btn-md" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 equal-height">
                        <div class="item">
                            <div class="info">
                                <h4>
                                    <a href="#">Emergency Service</a>
                                </h4>
                                <div class="overlay">
                                    <i class="flaticon-anesthesia"></i>
                                </div>
                                <p>
                                    If you are experiencing dental problems, you can call us to book your emergency treatment on the same day.
                                </p>
                                <a class="btn btn-theme border circle btn-md" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    
                </div>
            </div>
        </div>
    </div>
    <!-- End Services -->

    <!-- Start About
    ============================================= -->
    <div class="about-area default-padding">
        <div class="container">
            <div class="row">
                <div class="about-items">
                    <div class="col-md-6 info">
                        <h4>About Us</h4>
                        <h2>YOUR SMILE MEANS THE WORLD TO US</h2>
                        <p>
                            Welcome to our dental practice where we deliver smile as therapy! We build  new generation dentistry created by dental hygienist.
                            XXI century is time to learn, explore, sense and digest best about your smile! State of love and knowledge in delivering gentle dentistry.
                            You can register immediately and be part of our smiley family today. Although, we are private clinic, we keep our prices affordable to all Londoners.
                        </p>
                        <a class="btn btn-theme border btn-md" href="#">Learn More</a>
                        <div class="bottom">
                            <div class="video">
                                <a href="assets/img/video/ToothBrush.mp4" class="popup-youtube relative theme video-play-button item-center">
                                    <i class="fa fa-play"></i>
                                </a>
                            </div>
                            <div class="content">
                                <h4>Let’s see our intro video</h4>
                                <p>
                                    If your smile is not becoming to you, then you should be coming to me!
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 tabs-items">
                        <!-- Tab Nav -->
                        <ul class="nav nav-pills">
                            <li class="active">
                                <a data-toggle="tab" href="#tab1" aria-expanded="true">
                                    <i class="fas fa-notes-medical"></i> Comprehensive dental care
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#tab3" aria-expanded="false">
                                    <i class="fas fa-clock"></i> Opening Hour
                                </a>
                            </li>
                        </ul>
                        <!-- End Tab Nav -->
                        <!-- Start Tab Content -->
                        <div class="tab-content tab-content-info">
                            <!-- Single Item -->
                            <div id="tab1" class="tab-pane fade active in">
                                <div class="info title">
                                    <h3>Comprehensive dental care</h3>
                                    <p>
                                        Each member of our team prioritize to deliver comfortable and relaxed dental treatment in safe and friendly environment at every time.
                                        <br>
                                        Unique and universal approach to each client! We are bilingual dental team. English, Russian, Lithuanian, Arabic, Hindi, Spanish it’s languages we communicate. We are here to look after you as we would look after our family members.
                                        <br>
                                        Unique facial service
                                        <br>
                                        Looking for facial treatment? As a medically trained team we equally able to advice on fillers and facial injections.
                                    </p>
                                    <a class="btn btn-theme border btn-md" href="#">Make Appoinment</a>
                                </div>
                            </div>
                            <!-- End Single Item -->

                            <!-- Single Item -->
                            <div id="tab3" class="tab-pane fade">
                                <div class="info title">
                                    <h3>Schedule of working hours</h3>
                                    <ul>
                                        <li> <span> Mon - Tues :  </span>
                                          <div class="pull-right"> 9:00 – 18:00</div>
                                        </li>
                                        <li> <span> Wednes - Thurs :</span>
                                          <div class="pull-right"> 9:00 – 18:00</div>
                                        </li>
                                        <li> <span> Sunday : </span>
                                          <div class="pull-right"> 10:00 – 16:00 </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End Single Item -->

                        </div>
                        <!-- End Tab Content -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About -->

    <!-- Start Services 
    ============================================= -->
    <div class="blog-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="site-heading text-center">
                        <h2>Tooth Brush Dental <span>Our Services</span></h2>
                        <p>
                            PROVIDING SPECIALIST DENTAL CARE AND TRAINING
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="blog-items">
                    <!-- Single Item -->
                    <div class="col-md-4 single-item">
                        <div class="item">
                            <div class="thumb">
                                <a href="blog-single-right-sidebar.html">
                                    <img src="assets/img/blog/1.jpg" alt="Thumb">
                                </a>
                            </div>
                            <div class="info">
                                <h4>
                                    <a href="blog-single-right-sidebar.html">General Dentistry</a>
                                </h4>
                                <p>
                                    We work with the best experts to give you the best service.
                                </p>
                                <a class="btn btn-theme circle border btn-sm" href="blog-single-right-sidebar.html">Read More <i class="fas fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
                <div class="blog-items">
                    <!-- Single Item -->
                    <div class="col-md-4 single-item">
                        <div class="item">
                            <div class="thumb">
                                <a href="blog-single-right-sidebar.html">
                                    <img src="assets/img/blog/2.jpg" alt="Thumb">
                                </a>
                            </div>
                            <div class="info">
                                <h4>
                                    <a href="blog-single-right-sidebar.html">Specialist Dentistry</a>
                                </h4>
                                <p>
                                    We work with the best experts to give you the best service.
                                </p>
                                <a class="btn btn-theme circle border btn-sm" href="blog-single-right-sidebar.html">Read More <i class="fas fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
                <div class="blog-items">
                    <!-- Single Item -->
                    <div class="col-md-4 single-item">
                        <div class="item">
                            <div class="thumb">
                                <a href="blog-single-right-sidebar.html">
                                    <img src="assets/img/blog/3.jpg" alt="Thumb">
                                </a>
                            </div>
                            <div class="info">
                                <h4>
                                    <a href="blog-single-right-sidebar.html">Hygienist</a>
                                </h4>
                                <p>
                                    We work with the best experts to give you the best service.
                                </p>
                                <a class="btn btn-theme circle border btn-sm" href="blog-single-right-sidebar.html">Read More <i class="fas fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Services -->

    <!-- Start Why Chose Us 
    ============================================= -->
    <div class="chose-us-area item-half">
        <div class="container-full">
            <div class="row">
                <div class="col-md-6 thumb bg-cover" style="background-image: url(assets/img/banner/4.jpg);"></div>
                <div class="col-md-6 info">
                    <div class="heading">
                        <h2>Why Chose us</h2>
                        <p>
                            Firstly, our mission is to make you feel relaxed! Years of experience and technological advances have made dentistry better and better. ,
                            Our team is admitted to continue professional development and keep updated on any new, safe and effective treatment.
                            Secondly, we promise excellent service every time! Remember, looking after your teeth,  allows you to smile and lead to individual and professional success.
                        </p>
                    </div>
                    <ul>
                        <li>
                            <div class="info">
                                <h4>Dental Excellence</h4>
                                <p>
                                    We constantly strive to offer the best dental services in London, and while we know that complete perfection is never attainable - we will do our best to get there. 
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="info">
                                <h4>Quality</h4>
                                <p>
                                    We invest in development of our staff to help them improve their skills and learn new ones. This is reflected in the quality of work which they can produce for your smile.
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="info">
                                <h4>Transparent Pricing</h4>
                                <p>
                                    We understand that pricing is a big factor in choosing the right dentist. We can assure you ours is fair & transparent so you know exactly what your treatment will cost you. 
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="info">
                                <h4>Professional Integrity</h4>
                                <p>
                                    We will always support people for doing what is right, and will speak up if we see or hear something that doesn’t seem right. Our strong moral principles are the ground work of our approach to your treatment. 
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Why Chose Us -->

    <div class="gallery-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="site-heading text-center">
                        <h2>Tooth Brush Dental <span>Gallery</span></h2>
                        <p>
                            PROVIDING SPECIALIST DENTAL CARE AND TRAINING
                        </p>
                    </div>
                </div>
            </div>
            <div class="gallery-items-area text-center">
                <div class="row">
                    <div class="col-md-12 gallery-content">
                        <!-- End Mixitup Nav-->

                        <div class="row magnific-mix-gallery text-center masonary">
                            <div id="portfolio-grid" class="gallery-items col-3">
                                <!-- Single Item -->
                                <div class="pf-item development capital">
                                    <div class="effect-box">
                                        <img src="assets/img/gallery/1.jpg" alt="thumb">
                                        <div class="info">
                                          <h4><a href="#">Show</a></h4>
                                          <a href="assets/img/gallery/1.jpg" class="item popup-link"><i class="fa fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Item -->
                                <!-- Single Item -->
                                <div class="pf-item consulting branding">
                                    <div class="effect-box">
                                        <img src="assets/img/gallery/2.jpg" alt="thumb">
                                        <div class="info">
                                          <h4><a href="#">Show</a></h4>
                                          <a href="assets/img/gallery/2.jpg" class="item popup-link"><i class="fa fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Item -->
                                <!-- Single Item -->
                                <div class="pf-item consulting finance">
                                    <div class="effect-box">
                                        <img src="assets/img/gallery/3.jpg" alt="thumb">
                                        <div class="info">
                                          <h4><a href="#">Show</a></h4>
                                          <a href="assets/img/gallery/3.jpg" class="item popup-link"><i class="fa fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Item -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Gallery -->



    <!-- Start Newsletter 
    ============================================= -->
    <div class="newsletter-area default-padding shadow dark bg-fixed text-center text-light" style="background-image: url(assets/img/banner/7.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4>Subscribe For Get Update</h4>
                    <h2>Let’s Find An Office Near You.</h2>
                    <form action="#">
                        <div class="input-group stylish-input-group">
                            <input type="email" name="email" class="form-control" placeholder="Enter your e-mail here">
                            <button type="submit">
                                <i class="fa fa-paper-plane"></i>
                            </button>  
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Newsletter -->



@endsection