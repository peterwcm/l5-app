@extends('layouts.master')

@section('extra_head')
    <link href="{{ elixir('css/pages/home.css') }}" rel="stylesheet">
@endsection

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
        <div class="featured-contents">
            <div class="featured-title">What's New</div>
            <div class="whatsnew-content">
                <a href="{{ url() }}">
                    <div class="inline deal-box">
                        <div style="background-image: url(https://www.filepicker.io/api/file/3RC1MNURpWl68t1MDmNj);
                            background-size: cover;background-position: center;width:300px;height:150px;">
                        </div>
                        <div style="margin:0 auto;margin-top:-20px;width:40px;height:40px;border-radius:40px;
                            background:#88c5cc;">
                            <span class="fa fa-chevron-right" style="color:white;line-height:45px;margin-left:2px;
                            font-weight:300 !important;font-size:12px !important;"></span>
                        </div>
                        <div style="margin-top:12px;font-size:14px;padding-left:20px;padding-right:20px;color:#999999;">
                            Become a Japanese Chef - Homemade Ramen and Gyoza!</div></div>
                </a>
                <a href="/event/nyc-crafting-painting-silkscarf">
                    <div class="inline deal-box">
                        <div style="background-image: url(https://www.filepicker.io/api/file/3RC1MNURpWl68t1MDmNj);
                            background-size: cover;background-position: center;width:300px;height:150px;">
                        </div>
                        <div style="margin:0 auto;margin-top:-20px;width:40px;height:40px;border-radius:40px;
                            background:#88c5cc;">
                            <span class="fa fa-chevron-right" style="color:white;line-height:45px;margin-left:2px;
                            font-weight:300 !important;font-size:12px !important;"></span>
                        </div>
                        <div style="margin-top:12px;font-size:14px;padding-left:20px;padding-right:20px;color:#999999;">
                            Become a Japanese Chef - Homemade Ramen and Gyoza!</div></div>
                </a>
                <a href="/event/nyc-crafting-painting-silkscarf">
                    <div class="inline deal-box">
                        <div style="background-image: url(https://www.filepicker.io/api/file/3RC1MNURpWl68t1MDmNj);
                            background-size: cover;background-position: center;width:300px;height:150px;">
                        </div>
                        <div style="margin:0 auto;margin-top:-20px;width:40px;height:40px;border-radius:40px;
                            background:#88c5cc;">
                            <span class="fa fa-chevron-right" style="color:white;line-height:45px;margin-left:2px;
                            font-weight:300 !important;font-size:12px !important;"></span>
                        </div>
                        <div style="margin-top:12px;font-size:14px;padding-left:20px;padding-right:20px;color:#999999;">
                            Become a Japanese Chef - Homemade Ramen and Gyoza!</div></div>
                </a>
            </div>
        </div>
    </div>
@endsection
