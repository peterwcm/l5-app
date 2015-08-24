@extends('layouts.master')

@section('content')

<div class="home-banner">
    <div style="color:white;text-align:center;padding-top:180px;font-size:45px;letter-spacing: 2px;font-weight:700;">
        DISCOVER &amp; SHARE
    </div>
    <div style="color:white;text-align:center;padding-top:15px;font-size:20px;letter-spacing: 1px;">
        Experience the most amazing local adventures in your city.
    </div>

    <a href="/search">
        <div id="start-now">
            <span>Get Started</span>
            <span class="fa fa-chevron-right" style="margin-left:5px;font-size:12px !important;"></span>
        </div>
    </a>

    <video width="100%" height="100%" loop="" poster="https://d3ce7jb7ih53ua.cloudfront.net/verloca_new_design/main_page/first-page-1.png" id="bgvid" style="min-width:100%;" autoplay="">
        <source src="https://d3ce7jb7ih53ua.cloudfront.net/verloca_new_design/main_page/verlocal+header_3.mp4" type="video/mp4">
        <source src="https://d3ce7jb7ih53ua.cloudfront.net/verloca_new_design/main_page/verlocal+header_1.webm" type="video/webm">
    </video>
</div>

<div class="home-content">

</div>

@endsection
