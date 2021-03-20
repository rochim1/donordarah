@extends('layouts.master')
@section('title', 'tentang kami')
@section('content')
<div class="wpo-breadcumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="wpo-breadcumb-wrap">
                    <h2>About Us</h2>
                    <ul>
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li><span>About</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="wpo-about-video-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 mx-auto d-block">
                        <div class="wpo-about-video-item">
                            <div class="wpo-about-video-img">
                                <img src="assets/images/about-vedio.jpg" alt="">
                                <div class="entry-media video-holder">
                                    <a href="https://www.youtube.com/embed/iSbzh0r9IV4?autoplay=1" class="video-btn" data-type="iframe">
                                        <i class=""></i>
                                    </a>
                                </div>
                            </div>  
                            <h2>See what we do for the <span>poor people and the children</span></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- wpo-about-video-area end -->
        <!-- wpo-mission-area start -->
        <div class="wpo-mission-area-2 section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="wpo-section-title">
                            <span>What We Do?</span>
                            <h2>We Are In A Mission To Help The Helpless</h2>
                        </div>
                    </div>
                </div>
                <div class="wpo-mission-wrap">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-12 custom-grid">
                            <div class="wpo-mission-item">
                                <div class="wpo-mission-icon-5">
                                    <img src="assets/images/mission/icon1.png" alt="">
                                </div>
                                <div class="wpo-mission-content">
                                    <h2>Clean Water</h2>
                                    <p>Lorem ipsum dolor amet cosectetur adipiscing, sed do eiusmod.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-12 custom-grid">
                            <div class="wpo-mission-item">
                                <div class="wpo-mission-icon-6">
                                    <img src="assets/images/mission/icon2.png" alt="">
                                </div>
                                <div class="wpo-mission-content">
                                    <h2>Healthy Food</h2>
                                    <p>Lorem ipsum dolor amet cosectetur adipiscing, sed do eiusmod.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-12 custom-grid">
                            <div class="wpo-mission-item">
                                <div class="wpo-mission-icon-7">
                                    <img src="assets/images/mission/icon3.png" alt="">
                                </div>
                                <div class="wpo-mission-content">
                                    <h2>Pure Education</h2>
                                    <p>Lorem ipsum dolor amet cosectetur adipiscing, sed do eiusmod.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-12 custom-grid">
                            <div class="wpo-mission-item">
                                <div class="wpo-mission-icon-8">
                                    <img src="assets/images/mission/icon4.png" alt="">
                                </div>
                                <div class="wpo-mission-content">
                                    <h2>Medical Facilities</h2>
                                    <p>Lorem ipsum dolor amet cosectetur adipiscing, sed do eiusmod.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection