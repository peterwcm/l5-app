<div class="top-bar-background">
    <nav class="top-bar landing" data-topbar role="navigation" data-options="is_hover:false">
        <ul class="title-area">
            <li class="name">
                <h1><a href="{{ url() }}"><span>Laravel</span></a></h1>
            </li>
            <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
        </ul>

        <section class="top-bar-section">
            <!-- Right Nav Section -->
            <ul class="right">
                @if(Auth::check())
                    <ul class="right">
                        <li class="has-dropdown"><a>{{ Auth::user()->first_name }}</a>
                            <ul class="dropdown">
                                <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                                <li><a href="{{ route('logout') }}">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                @else
                    {{--<li class="active">{{ route('lessons.new', 'Teach') }}</li>--}}
                    <li><a href="{{ route('signup') }}">SIGN UP</a></li>
                    <li><a href="{{ route('login') }}">LOGIN</a></li>
                @endif
            </ul>
        </section>
    </nav>
</div>
