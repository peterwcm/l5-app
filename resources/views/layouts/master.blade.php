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
        <div data-alert class="alert-box info">
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
    <script src="{{ elixir("js/app.js") }}"></script>

    <!-- Extra JS -->
    @yield('extra_body')
</body>
</html>
