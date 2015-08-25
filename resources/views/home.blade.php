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
                <span class="fa fa-chevron-right" style="margin-left:5px;font-size:12px !important;"></span>
            </div>
        </a>

        <video width="100%" height="100%" loop="loop" autoplay="autoplay" poster="https://d3ce7jb7ih53ua.cloudfront.net/verloca_new_design/main_page/first-page-1.png">
            <source src="https://d3ce7jb7ih53ua.cloudfront.net/verloca_new_design/main_page/verlocal+header_3.mp4" type="video/mp4">
            <source src="https://d3ce7jb7ih53ua.cloudfront.net/verloca_new_design/main_page/verlocal+header_1.webm" type="video/webm">
        </video>
    </div>

    <div class="home-content">

    </div>
@endsection
