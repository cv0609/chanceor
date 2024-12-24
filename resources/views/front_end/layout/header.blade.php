    <!-- Header Section Start -->
    <header class="sticky-header">
        <div class="container">
            <nav class="navigation-bar">
                <div class="brand-container">
                    <a href="{{ route('home') }}" class="brand-link">
                    </a>
                </div>

                <div class="menu-toggle-btn"></div>

                <div class="navigation-menu">
                    <ul>
                        <li><a class="{{ Route::is('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a></li>
                        <li><a class="{{ Route::is('how.to.play') ? 'active' : '' }}" href="{{ route('how.to.play') }}">How To Play</a></li>
                        <li><a class="{{ Route::is('leagues') ? 'active' : '' }}" href="{{ route('leagues') }}">Play Now</a></li>
                        <li><a class="{{ Route::is('about.us') ? 'active' : '' }}" href="{{ route('about.us') }}">About Us</a></li>
                        <li><a class="{{ Route::is('contact.us') ? 'active' : '' }}" href="{{ route('contact.us') }}">Contact Us</a></li>
                    </ul>
                    @if(!Auth::check())

                    <a href="{{ route('register') }}" class="butn signup-btn">Sign Up</a>
                    <a href="{{ route('login') }}" class="butn login-btn">Login</a>
                    @endif
                    @if(Auth::check())

                    <div class="profile">
                        <div class="avatar">
                            <div class="avatar-content">
                                <a href="#">
                                    <div class="profile-image">
                                    <img src="{{(!empty(Auth::user()->image)) ? asset(Auth::user()->image) : asset('assets/images/user.png') }}" alt="dp">
                                    </div>
                                    <span>{{ ucfirst(Auth::user()->first_name.' '.Auth::user()->last_name) }}</span>
                                </a>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path
                                        d="M201.4 374.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 306.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z" />
                                </svg>
                            </div>
                            <div class="dropdown">
                                <ul>
                                    <li><a href="{{ route('profile.profile') }}">
                                            <div class="profile-dropdown-options profile-image-dropdown"></div>My
                                            Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('profile.matches') }}">
                                            <div class="profile-dropdown-options profile-image-stadium"></div>My Matches
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('logout')}}">
                                            <div class="profile-dropdown-options profile-image-logout"></div>Logout
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endif

                    <div class="menu-close-btn"></div>
                </div>
            </nav>
        </div>
    </header>
    <!-- Header Section End -->