@extends('layouts.master')

@section('content')
    <div class="home-banner">
        <div class="banner-h1">DISCOVER &amp; SHARE</div>
        <div class="banner-h2">Experience the most amazing local adventures in your city.</div>

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
                        <div class="featured-image" style="background-image: url(https://www.filepicker.io/api/file/3RC1MNURpWl68t1MDmNj);"></div>
                        <div class="featured-icon">
                            <span class="fa fa-chevron-right"></span>
                        </div>
                        <div class="featured-text">Become a Japanese Chef - Homemade Ramen and Gyoza!</div>
                    </div>
                </a>
                <a href="{{ url() }}">
                    <div class="featured-box">
                        <div class="featured-image" style="background-image: url(https://www.filepicker.io/api/file/9MjXpLJRrCIdTb9tSHCQ);"></div>
                        <div class="featured-icon">
                            <span class="fa fa-chevron-right"></span>
                        </div>
                        <div class="featured-text">Silk Scarf Painting Workshop with a True Artisan!</div>
                    </div>
                </a>
                <a href="{{ url() }}">
                    <div class="featured-box">
                        <div class="featured-image" style="background-image: url(https://www.filepicker.io/api/file/WMeFGMbuSRaoQHAt1grP);"></div>
                        <div class="featured-icon">
                            <span class="fa fa-chevron-right"></span>
                        </div>
                        <div class="featured-text">SoCal Overnight Surfing Trip (Camping Included)</div>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
