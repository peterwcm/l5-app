<div class="top-bar-background">
    <nav class="top-bar" data-topbar role="navigation" data-options="is_hover:false">
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
                    <span class="mobile-appear">
                        <li>
                            <a href="{{ URL::route('messages') }}">
                                &nbsp;<span class='fa fa-envelope fa-lg'></span>
                                <span>&nbsp;&nbsp;&nbsp;Messages</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ URL::route('profile.edit') }}">
                                &nbsp;<span class='fa fa-user fa-lg'></span>
                                <span>&nbsp;&nbsp;&nbsp;&nbsp;Profile</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ URL::route('bookings') }}">
                                &nbsp;<span class='fa fa-calendar fa-lg'></span>
                                <span>&nbsp;&nbsp;&nbsp;Bookings</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ URL::route('lessons.new') }}">
                                &nbsp;<span class='fa fa-graduation-cap fa-lg'></span>
                                <span>&nbsp;&nbsp;&nbsp;Teach</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ URL::route('settings') }}">
                                &nbsp;<span class='fa fa-cog fa-lg'></span>
                                <span>&nbsp;&nbsp;&nbsp;&nbsp;Account</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ URL::route('logout') }}">
                                &nbsp;<span class='fa fa-sign-out fa-lg'></span>
                                <span>&nbsp;&nbsp;&nbsp;&nbsp;Logout</span>
                            </a>
                        </li>
                    </span>
                    <li class="mobile-disappear menu-highlight active">{{ link_to_route('lessons.new', 'Teach') }}</li>
                    <li class="mobile-disappear">
                        <a href="{{ URL::route('messages') }}">
                            <span class='fa fa-envelope fa-lg'></span>
                        </a>
                    </li>
                    <li class="mobile-disappear has-dropdown">
                        <a href="#"><img class="menu-profile-picture" src='{{ url('images/lav_pic.jpg') }}'> {{{ Auth::user()->first_name }}}</a>
                        <ul class="dropdown">
                            {{--<li>{{ route('profile.edit', 'Profile') }}</li>--}}
                            {{--<li>{{ route('bookings', 'Bookings') }}</li>--}}
                            {{--<li>{{ route('settings', 'Account') }}</li>--}}
                            {{--<li>{{ route('logout', 'Logout') }}</li>--}}
                        </ul>
                    </li>
                @else
                    {{--<li class="active">{{ route('lessons.new', 'Teach') }}</li>--}}
                    <li><a href="{{ route('signup') }}">Sign Up</a></li>
                    <li><a href="{{ route('login') }}">Login</a></li>
                @endif
            </ul>
        </section>
    </nav>
</div>
