<footer id="rs-footer" class="rs-footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="about-widget">
                        @if ($logoCount >= 1)
                            @foreach ($logos as $logo)
                                <a href="{{ $logo->logo_url }}"><img src="{{ asset('storage/' . $logo->logo) }}"
                                        alt="logo"></a>
                            @endforeach
                        @else
                            <img src="{{ asset('frontend/assets/images/newlogo-01.png') }}" alt="Footer">
                        @endif



                        @if ($footerCount >= 1)
                            @foreach ($footers as $footer)
                                <p>{{ $footer->footer_text_one }}</p>
                                <p class="margin-remove">{{ $footer->footer_text_two }}</p>
                            @endforeach
                        @else
                            <p>Tokyo H Power Properties Ltd. is one of the best developer company in Bangladesh. </p>
                            <p class="margin-remove">It’s organized by the Japanese expertise and Bangladeshi
                                hospitality with talented, hardworking and skilled personnel. </p>
                        @endif

                    </div>
                </div>

                <div class="col-md-3">
                    <h5 class="footer-title">Pages</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="sitemap-widget">
                                @if ($mainMenuCount >= 1)
                                    <?php $count = 0; ?>
                                    @foreach ($mainMenu as $menu)
                                        @if ($count < 3)
                                            <li class="active">
                                                <a href="{{ $menu->item_url }}">{{ $menu->item }}</a>
                                            </li>
                                            <?php $count++; ?>
                                        @else
                                        @break
                                    @endif
                                @endforeach
                            @else
                                <li class="active"><a href="index4.html">Home</a></li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            @endif

                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="sitemap-widget">
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <h5 class="footer-title"></h5>

                @if ($footerCount >= 1)
                    @foreach ($footers as $footer)
                        <p class="news-note">{{ $footer->footer_text_three }}</p>
                    @endforeach
                @else
                    <p class="news-note">Reasonable and competitive price, timely hand over and after sale
                        services are the fundamental policies of the company. Tokyo H Power Properties never
                        compromise with its quality. </p>
                @endif


                @if (session('successSend'))
                    <div class="alert alert-success">
                        {{ session('successSend') }}
                    </div>
                @endif
                <form class="footer-subscribe" action="{{ route('send-mail.store') }}" method="post">
                    @csrf
                    <input type="email" name="email" class="form-control" value="{{ old('email') }}"
                        placeholder="Enter Email">
                    <button type="submit" class="form-button"></button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="footer-bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="copyright">
                    <p>&copy; 2024 <a href="www.webtrustservices.com">tokyohpowerpropertiesltd</a>. All Rights
                        Reserved.</p><br><b>Design & Developed by Web Trust Services</b>
                </div>
            </div>
            <div class="col-md-8 col-sm-6">
                <div class="text-right ft-bottom-right">
                    <div class="footer-bottom-share">
                        <ul>
                            @if ($socialIconCount >= 1)
                                @foreach ($socialIcon as $icon)
                                    <li><a href="{{ $icon->icon_url }}"><i class="{{ $icon->icon }}"></i></a>
                                    </li>
                                @endforeach
                            @else
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
</div>
</footer>
