@extends('frontend.layout.app')
@section('content')
<!-- START SECTION BANNER -->
<section class="background_bg breadcrumb_section overlay_bg2 page-title-light" data-img-src="{{ url('public/frontend/assets/images/service_bg.jpg') }}">
	<div class="container">
    	<div class="row">
        	<div class="col-md-12 text-center">
            	<div class="page-title">
            		<h1>Services</h1>
                </div>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item">Services</li>
                  </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION BANNER --> 

<!-- START SECTION FEATURE -->
<section class="small_pb">
	<div class="container">
    	<div class="row justify-content-center animation" data-animation="fadeInUp" data-animation-delay="0.2s">
        	<div class="col-md-4 col-sm-6 mb-lg-5 mb-4 text-center">
            	<div class="icon_box icon_box_style_5">
                    <div class="box_icon mb-3">	
                        <img src="{{ url('public/frontend/assets/images/service_img1.jpg') }}" alt="service_img1"/>
                    </div>
                    <div class="icon_box_content">
                        <h5>Responsive Design</h5>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                        <a href="#" class="btn btn-sm btn-outline-black">Read more</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-lg-5 mb-4 text-center">
            	<div class="icon_box icon_box_style_5">
                    <div class="box_icon mb-3">	
                        <img src="{{ url('public/frontend/assets/images/service_img2.jpg') }}" alt="service_img2"/>
                    </div>
                    <div class="icon_box_content">
                        <h5>Retina Ready</h5>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                        <a href="#" class="btn btn-sm btn-outline-black">Read more</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-lg-5 mb-4 text-center">
            	<div class="icon_box icon_box_style_5">
                    <div class="box_icon mb-3">	
                        <img src="{{ url('public/frontend/assets/images/service_img3.jpg') }}" alt="service_img3"/>
                    </div>
                    <div class="icon_box_content">
                        <h5>Parallax Effact</h5>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                        <a href="#" class="btn btn-sm btn-outline-black">Read more</a>
                    </div>
                 </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION FEATURE -->

<!-- START SECTION CALL TO ACTION -->
<section class="cta_section_small background_bg blue_overlay_bg position-relative fixed_bg" data-img-src="{{ url('public/frontend/assets/images/cta_bg2.jpg') }}">
	<div class="container">
    	<div class="row align-items-center animation" data-animation="fadeInUp" data-animation-delay="0.2s">
            <div class="col-md-8 text_white">
                <h2 class="">We always stay with our clients.</h2>
                <p class="mb-md-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim.</p>
            </div>
            <div class="col-md-4 text-md-right">	
                <a href="#" class="btn btn-outline-white">Contact Us</a>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION CALL TO ACTION -->

<!-- START SECTION SERVICE SHOWCASE -->
<section class="small_pb overflow_hide">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 animation" data-animation="fadeInUp" data-animation-delay="0.2s">
            	<div class="overlay_bg about_video_img mb-4 mb-lg-0">
            		<img src="{{ url('public/frontend/assets/images/about_img4.jpg') }}" alt="about_img4"/>
                    <a href="https://www.youtube.com/watch?v=7e90gBu4pas" class="video_popup video_play"><img class="bounce_img" src="{{ url('public/frontend/assets/images/play-icon.png') }}" alt="play-icon"></a>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 animation" data-animation="fadeInUp" data-animation-delay="0.4s">
                <div class="heading_s3"> 
                  <span class="sub_title">Lorem Ipsum Dolor consectetur adipiscing</span>
                  <h3>Showcase your services in a stunning way!</h3> 
                </div>
                <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary</p>
                <div class="list_style_4 color_blue mb-3">
                    <ul>
                        <li>Deep Customization Process</li>
                        <li>Technologies And Innovations consultant</li>
                        <li>Secured Transactions consultant</li>
                        <li>Unique Sales Methodoligies</li>
                    </ul>
                </div>
                <a href="#" class="btn btn-black">Read More</a>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION SERVICE SHOWCASE -->

<!-- START SECTION PRICING TABLE -->
<section class="small_pt small_pb">
	<div class="container">
    	<div class="row no-gutters animation" data-animation="fadeInUp" data-animation-delay="0.2s">
        	<div class="col-md-4 mb-md-5 mb-4">
            	<div class="pricing_box">
                	<div class="pr_title light_gray_bg">
                    	<h4>Basic</h4>
                        <div class="price_tage">
                        	<h2>$100</h2>
                            <span>Per Month</span>
                        </div>
                    </div>
                    <div class="pr_content">
                        <ul class="list_none pr_list">
                        	<li>Basic Options</li>
                            <li>Full Access</li>
                            <li>Customers Support</li>
                            <li>Free Updates</li>
                            <li>Advanced Options</li>
                            <li>Unlimited Services</li>
                        </ul>
                    </div>
                    <div class="pr_footer">
                    	<a href="#" class="btn btn-outline-default">Buy Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-md-5 mb-4">
            	<div class="pricing_box highlight_box">
                	<div class="pr_title bg_blue text_white">
                    	<h4>Standard</h4>
                        <div class="price_tage">
                        	<h2>$500</h2>
                            <span>Per Month</span>
                        </div>
                    </div>
                    <div class="pr_content">
                        <ul class="list_none pr_list">
                        	<li>Standard Options</li>
                            <li>Full Access</li>
                            <li>Customers Support</li>
                            <li>Free Updates</li>
                            <li>Advanced Options</li>
                            <li>Unlimited Services</li>
                        </ul>
                    </div>
                    <div class="pr_footer">
                    	<a href="#" class="btn btn-outline-default">Buy Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-md-5 mb-4">
            	<div class="pricing_box">
                	<div class="pr_title light_gray_bg">
                    	<h4>Unlimited</h4>
                        <div class="price_tage">
                        	<h2>$1000</h2>
                            <span>Per Month</span>
                        </div>
                    </div>
                    <div class="pr_content">
                        <ul class="list_none pr_list">
                        	<li>Unlimited Options</li>
                            <li>Full Access</li>
                            <li>Customers Support</li>
                            <li>Free Updates</li>
                            <li>Advanced Options</li>
                            <li>Unlimited Services</li>
                        </ul>
                    </div>
                    <div class="pr_footer">
                    	<a href="#" class="btn btn-outline-default">Buy Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION PRICING TABLE -->
@endsection