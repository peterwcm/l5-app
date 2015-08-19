<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.head')
</head>

<body>
    @section('menu')
        @include('partials.menu')
    @show

    @yield('sub-menu')

    <!-- check for flash notification message -->
    @if(Session::has('message'))
        <div data-alert class="alert-box info" style="margin-bottom: 0;">
            {{ Session::get('message') }}
            <a href="javascript:void(0)" class="close">&times;</a>
        </div>
    @endif

    @yield('content')

    <div id="footer_container">
        @section('footer')
            @include('partials.footer')
        @show
    </div>

    <!-- JS -->
    {{--<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>--}}
    {{--<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>--}}
    {{--{{ HTML::script('js/foundation.min.js') }}--}}
    {{--<script type="text/javascript" src="//code.jquery.com/ui/1.10.3/jquery-ui.min.js"></script>--}}

    <!-- Extra JS -->
    @yield('extra_body')
</body>
</html>
