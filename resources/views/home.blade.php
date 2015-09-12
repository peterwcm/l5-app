@extends('layouts.master')

@section('menu')
    @include('partials.menu-landing')
@show

@section('content')
    <div class="home-banner">
        <div class="banner-h1">EXPLORE &amp; SHARE</div>
        <div class="banner-h2">Experience new activities with sports enthusiasts in your city.</div>

        <a href="{{ url() }}">
            <div id="start-now">
                <span>Get Started</span>
                <span class="fa fa-chevron-right"></span>
            </div>
        </a>

        <video width="100%" height="100%" loop="loop" autoplay="autoplay" poster="https://d3ce7jb7ih53ua.cloudfront.net/verloca_new_design/main_page/first-page-1.png">
            <source src="https://d3ce7jb7ih53ua.cloudfront.net/verloca_new_design/main_page/verlocal+header_3.mp4" type="video/mp4">
            <source src="https://d3ce7jb7ih53ua.cloudfront.net/verloca_new_design/main_page/verlocal+header_1.webm" type="video/webm">
        </video>
    </div>

    <div class="home-content">
        <div class="featured-info">
            <div class="featured-title">What's New</div>
            <div class="featured-content">
                <a href="{{ url() }}">
                    <div class="featured-box">
                        <div class="featured-image" style="background-image: url(http://media3.popsugar-assets.com/files/2014/03/05/973/n/1922398/f33553defe75bf1b_2efdbbe2a4b011e38ecd12c5c4545846_8.jpg.xxxlarge/i/whole-group-posed-together-during-cooking-class.jpg);"></div>
                        <div class="featured-icon">
                            <span class="fa fa-chevron-right"></span>
                        </div>
                        <div class="featured-text">Become a Chef! Join this awesome cooking class</div>
                    </div>
                </a>
                <a href="{{ url() }}">
                    <div class="featured-box">
                        <div class="featured-image" style="background-image: url(https://skateramp.files.wordpress.com/2012/06/a365e48cbad311e1b2fe1231380205bf_6.jpg);"></div>
                        <div class="featured-icon">
                            <span class="fa fa-chevron-right"></span>
                        </div>
                        <div class="featured-text">Looking for a skateboarding buddy to cruise around?</div>
                    </div>
                </a>
                <a href="{{ url() }}">
                    <div class="featured-box">
                        <div class="featured-image" style="background-image: url(http://www.marknolan.co.uk/wp-content/uploads/2012/08/8a54b98aee4211e1b13b22000a1e9e60_7.jpg);"></div>
                        <div class="featured-icon">
                            <span class="fa fa-chevron-right"></span>
                        </div>
                        <div class="featured-text">3-People bike trip, 1 Spot Left!</div>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
