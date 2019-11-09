@extends('frontend.layout.app')
@section('content')
<!-- START SECTION BANNER -->
<section class="background_bg breadcrumb_section overlay_bg2 page-title-light" data-img-src="{{ url('public/frontend/assets/images/portfolio_signle_bg1.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="page-title">
                    <h1>Portfolio</h1>
                </div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item">Portfolio</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<section class="small_pt">
    <div class="container">
        <div class="row">
            <div class="col-md-12 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                <div class="heading_s4 text-center">
                    <h2>Web Projects</h2>
                </div>
            </div>
        </div>
        <div class="row animation" data-animation="fadeInUp" data-animation-delay="0.4s">
            <div class="col-md-4 mt-3 mt-md-4">
                <div class="flip_box text_white">
                    <div class="front background_bg overlay_bg3" data-img-src="{{ url('public/frontend/assets/images/icon_box_img1.jpg') }}">
                        <div class="inner">
                            <i class="icon icon-display"></i>
                            <h5>Responsive Design</h5>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                        </div>
                    </div>
                    <div class="back bg_blue">
                        <div class="inner">	
                            <h5>Responsive Design</h5>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                            <a href="#" class="btn btn-outline-white">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-3 mt-md-4">
                <div class="flip_box text_white">
                    <div class="front background_bg overlay_bg3" data-img-src="{{ url('public/frontend/assets/images/icon_box_img2.jpg') }}">
                        <div class="inner">
                            <i class="icon icon-eye"></i>
                            <h5>Retina Ready</h5>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                        </div>
                    </div>
                    <div class="back bg_blue">
                        <div class="inner">	
                            <h5>Retina Ready</h5>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                            <a href="#" class="btn btn-outline-white">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-3 mt-md-4">
                <div class="flip_box text_white">
                    <div class="front background_bg overlay_bg3" data-img-src="{{ url('public/frontend/assets/images/icon_box_img3.jpg') }}">
                        <div class="inner">
                            <i class="icon icon-equalizer2"></i>
                            <h5>Parallax Effact</h5>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                        </div>
                    </div>
                    <div class="back bg_blue">
                        <div class="inner">	
                            <h5>Parallax Effact</h5>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                            <a href="#" class="btn btn-outline-white">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-3 mt-md-4">
                <div class="flip_box text_white">
                    <div class="front background_bg overlay_bg3" data-img-src="{{ url('public/frontend/assets/images/icon_box_img4.jpg') }}">
                        <div class="inner">
                            <i class="icon icon-embed2"></i>
                            <h5>Html5 & Css3</h5>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                        </div>
                    </div>
                    <div class="back bg_blue">
                        <div class="inner">	
                            <h5>Html5 & Css3</h5>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                            <a href="#" class="btn btn-outline-white">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-3 mt-md-4">
                <div class="flip_box text_white">
                    <div class="front background_bg overlay_bg3" data-img-src="{{ url('public/frontend/assets/images/icon_box_img5.jpg') }}">
                        <div class="inner">
                            <i class="icon icon-lifebuoy"></i>
                            <h5>Expert Support</h5>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                        </div>
                    </div>
                    <div class="back bg_blue">
                        <div class="inner">	
                            <h5>Expert Support</h5>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                            <a href="#" class="btn btn-outline-white">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-3 mt-md-4">
                <div class="flip_box text_white">
                    <div class="front background_bg overlay_bg3" data-img-src="{{ url('public/frontend/assets/images/icon_box_img6.jpg') }}">
                        <div class="inner">
                            <i class="icon icon-cog"></i>
                            <h5>Easy To Customize</h5>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                        </div>
                    </div>
                    <div class="back bg_blue">
                        <div class="inner">	
                            <h5>Easy To Customize</h5>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                            <a href="#" class="btn btn-outline-white">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION BANNER --> 
<!-- START SECTION PORTFOLIO -->
<section class="cta_section_small overlay_bg3 px-0">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-8 text_white animation animated fadeInUp" data-animation="fadeInUp" data-animation-delay="0.5s" style="animation-delay: 0.5s; opacity: 1;">
                <h2 class="">LIKE OUR WORK?</h2>
                <!--<p class="mb-md-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim.</p>-->
            </div>
            <div class="col-md-4 text-md-right animation animated fadeInUp" data-animation="fadeInUp" data-animation-delay="0.6s" style="animation-delay: 0.6s; opacity: 1;">	
                <a href="{{ route('contactus') }}" class="btn btn-outline-white">Contact Us</a>
            </div>
        </div>
    </div>
</section>
<section class="small_pt">
    <div class="container">
        <div class="row">
            <div class="col-md-12 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
                <div class="heading_s4 text-center">
                    <h2>Mobile Projects</h2>
                </div>
            </div>
        </div>
        <div class="row animation" data-animation="fadeInUp" data-animation-delay="0.4s">
            <div class="col-md-4 mt-3 mt-md-4">
                <div class="flip_box text_white">
                    <div class="front background_bg overlay_bg3" data-img-src="{{ url('public/frontend/assets/images/icon_box_img1.jpg') }}">
                        <div class="inner">
                            <i class="icon icon-display"></i>
                            <h5>Responsive Design</h5>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                        </div>
                    </div>
                    <div class="back bg_blue">
                        <div class="inner">	
                            <h5>Responsive Design</h5>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                            <a href="#" class="btn btn-outline-white">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-3 mt-md-4">
                <div class="flip_box text_white">
                    <div class="front background_bg overlay_bg3" data-img-src="{{ url('public/frontend/assets/images/icon_box_img2.jpg') }}">
                        <div class="inner">
                            <i class="icon icon-eye"></i>
                            <h5>Retina Ready</h5>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                        </div>
                    </div>
                    <div class="back bg_blue">
                        <div class="inner">	
                            <h5>Retina Ready</h5>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                            <a href="#" class="btn btn-outline-white">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-3 mt-md-4">
                <div class="flip_box text_white">
                    <div class="front background_bg overlay_bg3" data-img-src="{{ url('public/frontend/assets/images/icon_box_img3.jpg') }}">
                        <div class="inner">
                            <i class="icon icon-equalizer2"></i>
                            <h5>Parallax Effact</h5>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                        </div>
                    </div>
                    <div class="back bg_blue">
                        <div class="inner">	
                            <h5>Parallax Effact</h5>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                            <a href="#" class="btn btn-outline-white">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-3 mt-md-4">
                <div class="flip_box text_white">
                    <div class="front background_bg overlay_bg3" data-img-src="{{ url('public/frontend/assets/images/icon_box_img4.jpg') }}">
                        <div class="inner">
                            <i class="icon icon-embed2"></i>
                            <h5>Html5 & Css3</h5>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                        </div>
                    </div>
                    <div class="back bg_blue">
                        <div class="inner">	
                            <h5>Html5 & Css3</h5>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                            <a href="#" class="btn btn-outline-white">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-3 mt-md-4">
                <div class="flip_box text_white">
                    <div class="front background_bg overlay_bg3" data-img-src="{{ url('public/frontend/assets/images/icon_box_img5.jpg') }}">
                        <div class="inner">
                            <i class="icon icon-lifebuoy"></i>
                            <h5>Expert Support</h5>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                        </div>
                    </div>
                    <div class="back bg_blue">
                        <div class="inner">	
                            <h5>Expert Support</h5>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                            <a href="#" class="btn btn-outline-white">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-3 mt-md-4">
                <div class="flip_box text_white">
                    <div class="front background_bg overlay_bg3" data-img-src="{{ url('public/frontend/assets/images/icon_box_img6.jpg') }}">
                        <div class="inner">
                            <i class="icon icon-cog"></i>
                            <h5>Easy To Customize</h5>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                        </div>
                    </div>
                    <div class="back bg_blue">
                        <div class="inner">	
                            <h5>Easy To Customize</h5>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                            <a href="#" class="btn btn-outline-white">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection