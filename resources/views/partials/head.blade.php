<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>@yield('title', 'L5 App')</title>

<!-- Favicon -->
<link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon"/>
<link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon"/>

<!-- CSS -->
<link media="all" type="text/css" rel="stylesheet" href="//code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css">
<link media="all" type="text/css" rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
<link href="{{ elixir('css/app.css') }}" rel="stylesheet">

<!-- Fonts -->
<link href='//fonts.googleapis.com/css?family=Lato:100normal,100italic,300normal,300italic,400normal,400italic,700normal,700italic,900normal,900italic' rel='stylesheet' type='text/css'>

<!-- JS -->
{{--{{ Minify::javascript('/js/vendor/modernizr.js') }}--}}
{{--{{ Minify::javascript('/js/vendor/jquery.js') }}--}}

<!-- Extra CSS -->
@yield('extra_head')

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->