<header id="rs-header" class="icon-header header-5">
    <!-- Toolbar start -->
    <div class="toolbar-top-area hidden-sm hidden-xs">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-7 col-xs-12">
                    <div class="toolbar-contact">
                        <ul>
                            @if ($welcomeCount >= 1)
                                @foreach ($welcomes as $welcome)
                                    <li>
                                        <i class="{{ $welcome->icon }}"></i>
                                        {{ $welcome->description }}
                                    </li>
                                @endforeach
                            @else
                                <li>
                                    <i class="fa-solid fa-handshake"></i>
                                    Welcome to TOKYO H Power Properties
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-5 col-xs-12">
                    <div class="toolbar-sl-share">
                        <ul>
                            @if ($socialIconCount >= 1)
                                <li class="follow">Follow us</li>
                                @foreach ($socialIcon as $icon)
                                    <li><a href="{{ $icon->icon_url }}"><i class="{{ $icon->icon }}"></i></a></li>
                                @endforeach
                            @else
                                <li class="follow">Follow us</li>
                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-google-plus-g"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Toolbar End -->

    <!-- Header Menu Start -->
    <div class="middle-header-home4">
        <div class="container">

            <div class="row">

                <div class="col-md-3 col-sm-12">
                    <div class="logo">
                        @if ($logoCount >= 1)
                            @foreach ($logos as $logo)
                                <a href="{{ $logo->logo_url }}"><img src="{{ asset('storage/' . $logo->logo) }}"
                                        alt="logo"></a>
                            @endforeach
                        @else
                            <a href="index.html"><img src="{{ asset('frontend/assets/images/newlogo-01.png') }}"
                                    alt="logo"></a>
                        @endif
                    </div>
                </div>

                <div class="col-md-9 col-sm-12 hidden-xs hidden-sm">
                    <div class="header-contact-info">
                        <ul>
                            @if ($contactIconCount >= 1)
                                @foreach ($contactIcon as $item)
                                    <li class="phone">
                                        <i class="{{ $item->icon }}"></i>
                                        <a href="{{ $item->icon_url }}">{{ $item->title }}</a>
                                    </li>
                                @endforeach
                            @else
                                <li class="phone">
                                    <i class="glyph-icon flaticon-technology"></i>
                                    <a href="tel:(+123)4567890">+8809678-886886</a>
                                </li>
                                <li class="email">
                                    <i class="glyph-icon flaticon-multimedia"></i>
                                    <a href="mailto:info@hpowerproperties.com">info@tokyohopowerpropertiesltd.com</a>
                                </li>
                                <li class="time">
                                    <i class="fa fa-clock-o"></i>
                                    Sat - Thu 9:30 - 5:30
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="menu-area menu-sticky4">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="header-bottom-area">
                            <nav class="nav navbar">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                                        data-target=".navbar-collapse">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <div class="navbar-collapse collapse">
                                    <ul>
                                        @if ($mainMenuCount >= 1)
                                            @foreach ($mainMenu as $menu)
                                                <li class="active">
                                                    <a href="{{ $menu->item_url }}">{{ $menu->item }}</a>
                                                </li>
                                            @endforeach
                                        @else
                                            <li class="active"><a href="#rs-header">Home</a></li>
                                            <li><a href="#rs-about">About</a></li>
                                            <li><a href="#rs-service">Services</a></li>
                                            <li><a href="#rs-project">Project</a></li>
                                            <li><a href="#rs-contact">Contact</a></li>
                                        @endif
                                    </ul>
                                </div>
                            </nav>
                            <div class="get-quote">
                                <a href="contact.html" class="quote-button">Get a Quote</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header Menu End -->
</header>
