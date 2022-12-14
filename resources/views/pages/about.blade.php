@extends('layouts.layout')
@section('title')
About
@endsection
@section('main')
<div class="container">
    <div class="page-header page-header-big text-center" style="background-image: url('{{asset("assets/images/about-us-header.jpg")}}')">
        <h1 class="page-title text-white">About us<span class="text-white">Who we are</span></h1>
    </div><!-- End .page-header -->
</div><!-- End .container -->

<div class="page-content pb-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-3 mb-lg-0">
                <h2 class="title">Our Vision</h2><!-- End .title -->
                <p>The biggest music house in Lebanon opened the door to every customer. To musicans and buyers who waited for too long to grab and start playing their favorite instrument. </p>
            </div><!-- End .col-lg-6 -->

            <div class="col-lg-6">
                <h2 class="title">Our Mission</h2><!-- End .title -->
            </div><!-- End .col-lg-6 -->
        </div><!-- End .row -->

        <div class="mb-5"></div><!-- End .mb-4 -->
    </div><!-- End .container -->

    <div class="bg-light-2 pt-6 pb-5 mb-6 mb-lg-8">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 mb-3 mb-lg-0">
                    <h2 class="title">Who We Are</h2><!-- End .title -->
                    <p class="lead text-primary mb-3">Guitarica Store</p><!-- End .lead text-primary -->
                    <p>We are music shop located in Belgrade, with over 30 employees in the store.</p>
                    <p class="mb-2">Got any question? Feel free to contact us!</p>

                    <a href="{{route("contact.index")}}" class="btn btn-sm btn-minwidth btn-outline-primary-2">
                        <span>CONTACT US</span>
                        <i class="icon-long-arrow-right"></i>
                    </a>
                </div><!-- End .col-lg-5 -->

                <div class="col-lg-6 offset-lg-1">
                    <div class="about-images">
                        <img src="assets/images/about/img-1.jpg" alt="" class="about-img-front">
                    </div><!-- End .about-images -->
                </div><!-- End .col-lg-6 -->
            </div><!-- End .row -->
        </div><!-- End .container -->
    </div><!-- End .bg-light-2 pt-6 pb-6 -->
</div><!-- End .page-content -->
@endsection