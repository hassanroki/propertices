@extends('frontend.master')

@section('content')
    <!--Preloader start here-->
    @extends('frontend.preloader')
    <!--Preloader area end here-->

    <!--Header Start-->
    @extends('frontend.header')
    <!--Header End-->

    <!--Slider Section Start-->
    <div class="slider-container">
        @if ($bannerCount >= 1)
            @foreach ($banners as $banner)
                <div class="slide active">
                    <img src="{{ asset('storage/' . $banner->item) }}" alt="Slide 1">
                </div>
            @endforeach
        @else
            <div class="slide active">
                <img src="{{ asset('frontend/assets/images/slider/Dahlia 2nd.jpg') }}" alt="Slide 1">

            </div>
            <div class="slide">
                <img src="{{ asset('frontend/assets/images/slider/Dahlia.jpg') }}" alt="Slide 2">

            </div>

            <div class="slide">
                <img src="{{ asset('frontend/assets/images/slider/Dream house 2.jpg') }}" alt="Slide 2">

            </div>

            <div class="slide">
                <img src="{{ asset('frontend/assets/images/slider/Ronex.jpg') }}" alt="Slide 2">

            </div>

            <div class="slide">
                <img src="{{ asset('frontend/assets/images/slider/rose valley.jpg') }}" alt="Slide 2">

            </div>
        @endif

    </div>
    <!--start our classes sections -->

    <!-- About Us Start -->
    <div id="rs-about" class="rs-about3 pt-100 pb-100">
        <div class="container">
            <div class="row">
                @if ($aboutCount >= 1)
                    @foreach ($aboutUs as $about)
                        <div class="col-md-5 col-sm-12">
                            <div class="about-left-img">
                                <img src="{{ asset('storage/' . $about->img) }}" alt="Single Man" />
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-12">
                            <div class="about-right-text">
                                <h3 class="title">{{ $about->title }}</h3>
                                <p class="some-text">{{ $about->description_one }}</p>
                                <p class="some-text">{{ $about->description_two }}</p>
                                <p class="some-text">{{ $about->description_three }}</p>
                                <div class="ceo">
                                    <p>{{ $about->name }}</p>
                                    {{ $about->designation }}
                                    <div class="signature">
                                        {{ $about->company_name }}<br>
                                        ({{ $about->sub_company }})
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="col-md-5 col-sm-12">
                        <div class="about-left-img">
                            <img src="{{ asset('frontend/assets/images/about/Mamun sir.jpg') }}" alt="Single Man" />
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-12">
                        <div class="about-right-text">
                            <h3 class="title">Welcome To Tokyo Hpower Properties</h3>
                            <p class="some-text">
                                Tokyo H Power Properties Ltd. is one of the best developer company in Bangladesh. It’s
                                organized by the Japanese expertise and Bangladeshi hospitality with talented, hardworking
                                and skilled personnel. The name Tokyo H Power Properties Ltd has been derived for developing
                                concept & ideas of truly committed, nature friendly & urban Living. Our team consists of
                                best planners, architects, structural designers, supervising Engineers, legal and financial
                                expert and marketing & management professionals. Each area of our work is departmentalized
                                on a purely functional basis and is directed to achieve qualitative superiority. All
                                planning work, programs and schedules are
                                aided by computerized information systems to achieve the highest standard of accuracy. We
                                thus proceed to build homes, introducing daring and innovative living concepts.
                            </p>
                            <p class="some-text">
                                Reasonable and competitive price, timely hand over and after sale services are the
                                fundamental policies of the company. Tokyo H Power Properties never compromise with its
                                quality. After sale services for utmost satisfaction of the client with peaceful and
                                comfortable living. We are committed to bear and strengthen the trust of the investors
                                forever.
                            </p>
                            <p class="some-text">
                                We hope that, this brochure will be very much helpful for your future plan.
                            </p>
                            <div class="ceo">
                                <p>Mazba Uddin Mamun</p>
                                Chairman
                                <div class="signature">
                                    Tokyo H Power Properties Ltd.<br>
                                    (A sister concern of H power group)
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

            </div>
        </div>
    </div>
    <!-- About Us End -->

    <!-- Services Section Start -->
    <section id="rs-service" class="rs-service1 gray-color sec-spacer">
        <div class="container">
            <div class="sec-title text-center">
                <h3>Our services</h3>
            </div>
            <div class="row grid-style-1">

                @if ($serviceCount >= 1)
                    @foreach ($services as $service)
                        <div class="col-md-4 col-sm-6">
                            <div class="item-wrap">
                                <div class="item">
                                    <div class="icon">
                                        <a href="{{ $service->img_url }}">
                                            <img src="{{ asset('storage/' . $service->img) }}"
                                                style="width: 80px; height: 80px;">
                                        </a>
                                    </div>
                                    <div class="title">
                                        <h4>
                                            <a href="{{ $service->title_url }}">{{ $service->title }}</a>
                                        </h4>
                                    </div>
                                    <div class="some-text">
                                        {{ $service->s_paragraph }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="col-md-4 col-sm-6">
                        <div class="item-wrap">
                            <div class="item">
                                <div class="icon">
                                    <a href="#">
                                        <img src="{{ asset('frontend/assets/images/icon/development-area.png') }}"
                                            style="width: 80px; height: 80px;">
                                    </a>
                                </div>
                                <div class="title">
                                    <h4>
                                        <a href="#">Land Development</a>
                                    </h4>
                                </div>
                                <div class="some-text">
                                    Land surveying and analysis to determine optimal layout and design.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="item-wrap">
                            <div class="item">
                                <div class="icon">
                                    <a href="#">
                                        <img src="{{ asset('frontend/assets/images/icon/office-building.png') }}"
                                            style="width: 80px; height: 80px;">
                                    </a>
                                </div>
                                <div class="title">
                                    <h4>
                                        <a href="#">Land Acquisition</a>
                                    </h4>
                                </div>
                                <div class="some-text">
                                    Market research and feasibility studies to assess demand and potential.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="item-wrap">
                            <div class="item">
                                <div class="icon">
                                    <a href="#">
                                        <img src="{{ asset('frontend/assets/images/icon/handshake.png') }}"
                                            style="width: 80px; height: 80px;">
                                    </a>
                                </div>
                                <div class="title">
                                    <h4>
                                        <a href="#">Joint Venture</a>
                                    </h4>
                                </div>
                                <div class="some-text">
                                    Conduct research and development activities to innovate.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="item-wrap">
                            <div class="item">
                                <div class="icon">
                                    <a href="#">
                                        <img src="{{ asset('frontend/assets/images/icon/project.png') }}"
                                            style="width: 80px; height: 80px;">
                                    </a>
                                </div>
                                <div class="title">
                                    <h4>
                                        <a href="#">Project Management</a>
                                    </h4>
                                </div>
                                <div class="some-text">
                                    Optimizing Supply Chain Efficiency Through Digital Transformation
                                </div>
                            </div>
                        </div>
                    </div>
                @endif


            </div>
        </div>
    </section>
    <!-- Services Section End -->



    <!-- project section start -->
    <section id="rs-project" class="rs-project2 gray-bg sec-spacer">
        <div class="container">
            <div class="sec-title text-center">
                <h3>Our Project</h3>
            </div>
            <div class="project-filter">
                <button class="active" data-filter=".filter1">Up-Comming</button>
                <button data-filter=".filter2">Under Constraction</button>
                <button data-filter=".filter3">Completed</button>
            </div>
            <div class="row">
                <div class="grid">

                    @if ($projectCount >= 1)
                        @foreach ($projects as $project)
                            <div class="col-md-4 col-sm-6 grid-item filter1">
                                <div class="project-item">
                                    <div class="project-img">
                                        <img src="{{ asset('storage/' . $project->photo) }}" alt="project Image" />
                                    </div>
                                    <div class="project-content">
                                        <div class="border-overly"></div>
                                        <div class="display-table">
                                            <div class="display-table-cell">
                                                <!-- zoom btn -->
                                                <a class="image-popup p-zoom"
                                                    href="{{ asset('storage/' . $project->photo) }}"
                                                    title="CONSTRUCTION">

                                                    <i class="fa fa-plus"></i>


                                                </a>
                                                <!-- view btn -->
                                                <a class="btn-view" href="#">
                                                    <i class="fa fa-paper-plane"></i>
                                                </a>
                                                <h4 class="p-title"><a
                                                        href={{ route('project', $project->id) }}">{{ $project->p_name }}</a>
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <!-- 1 -->
                        <div class="col-md-4 col-sm-6 grid-item filter1">
                            <div class="project-item">
                                <div class="project-img">
                                    <img src="{{ asset('frontend/assets/images/project/Red Rose.jpg') }}"
                                        alt="project Image" />
                                </div>
                                <div class="project-content">
                                    <div class="border-overly"></div>
                                    <div class="display-table">
                                        <div class="display-table-cell">
                                            <!-- zoom btn -->
                                            <a class="image-popup p-zoom"
                                                href="{{ asset('frontend/assets/images/project/Red Rose.jpg') }}"
                                                title="CONSTRUCTION">

                                                <i class="fa fa-plus"></i>


                                            </a>
                                            <!-- view btn -->
                                            <a class="btn-view" href="#">
                                                <i class="fa fa-paper-plane"></i>
                                            </a>

                                            <h4 class="p-title"><a href="upcomming.html">Red Rose</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- 7 -->
                        <div class="col-md-4 col-sm-6 grid-item filter2">
                            <div class="project-item">
                                <div class="project-img">
                                    <img src="{{ asset('frontend/assets/images/project/01. P-930 , R-43 , B-L (Camellia).jpg') }}"
                                        alt="project Image" />
                                </div>
                                <div class="project-content">
                                    <div class="border-overly"></div>
                                    <div class="display-table">
                                        <div class="display-table-cell">
                                            <!-- zoom btn -->
                                            <a class="image-popup p-zoom"
                                                href="images/project/01. P-930 , R-43 , B-L (Camellia).jpg"
                                                title="CONSTRUCTION">
                                                <i class="fa fa-plus"></i>
                                            </a>
                                            <!-- view btn -->
                                            <a class="btn-view" href="#">
                                                <i class="fa fa-paper-plane"></i>
                                            </a>

                                            <h4 class="p-title"><a href="camellia.html">Camellia</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- 8 -->
                        <div class="col-md-4 col-sm-6 grid-item filter2">
                            <div class="project-item">
                                <div class="project-img">
                                    <img src="{{ asset('frontend/assets/images/project/02. P-1989, R-28, B-L (Dahlia).jpg') }}"
                                        alt="project Image" />
                                </div>
                                <div class="project-content">
                                    <div class="border-overly"></div>
                                    <div class="display-table">
                                        <div class="display-table-cell">
                                            <!-- zoom btn -->
                                            <a class="image-popup p-zoom"
                                                href="{{ asset('frontend/assets/images/project/02. P-1989, R-28, B-L (Dahlia).jpg') }}"
                                                title="INDOOR REDESIGN PROJECT">
                                                <i class="fa fa-plus"></i>
                                            </a>
                                            <!-- view btn -->
                                            <a class="btn-view" href="#">
                                                <i class="fa fa-paper-plane"></i>
                                            </a>

                                            <h4 class="p-title"><a href="dhalia.html">Dahlia</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- 11 -->
                        <div class="col-md-4 col-sm-6 grid-item filter2">
                            <div class="project-item">
                                <div class="project-img">
                                    <img src="{{ asset('frontend/assets/images/project/05. P-529, R-6, B-H (Ronex Dream).jpg') }}"
                                        alt="project Image" />
                                </div>
                                <div class="project-content">
                                    <div class="border-overly"></div>
                                    <div class="display-table">
                                        <div class="display-table-cell">
                                            <!-- zoom btn -->
                                            <a class="image-popup p-zoom"
                                                href="{{ asset('frontend/assets/images/project/05. P-529, R-6, B-H (Ronex Dream).jpg') }}"
                                                title="INDOOR REDESIGN PROJECT">
                                                <i class="fa fa-plus"></i>
                                            </a>
                                            <!-- view btn -->
                                            <a class="btn-view" href="#">
                                                <i class="fa fa-paper-plane"></i>
                                            </a>

                                            <h4 class="p-title"><a href="ronexdream.html">Ronex Dream</a></h4>
                                            <!-- <p class="p-desc">Lorem Ipsum is not simply random text</p> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- 12 -->
                        <div class="col-md-4 col-sm-6 grid-item filter2">
                            <div class="project-item">
                                <div class="project-img">
                                    <img src="{{ asset('frontend/assets/images/project/07. P-572, R-5, B-H (Dream House 2).jpg') }}"
                                        alt="project Image" />
                                </div>
                                <div class="project-content">
                                    <div class="border-overly"></div>
                                    <div class="display-table">
                                        <div class="display-table-cell">
                                            <!-- zoom btn -->
                                            <a class="image-popup p-zoom"
                                                href="{{ asset('frontend/assets/images/project/07. P-572, R-5, B-H (Dream House 2).jpg') }}"
                                                title="INDOOR REDESIGN PROJECT">
                                                <i class="fa fa-plus"></i>
                                            </a>
                                            <!-- view btn -->
                                            <a class="btn-view" href="#">
                                                <i class="fa fa-paper-plane"></i>
                                            </a>

                                            <h4 class="p-title"><a href="dreamhouse2.html">Dream House-2</a></h4>
                                            <!-- <p class="p-desc">Lorem Ipsum is not simply random text</p> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- 12 -->
                        <div class="col-md-4 col-sm-6 grid-item filter2">
                            <div class="project-item">
                                <div class="project-img">
                                    <img src="{{ asset('frontend/assets/images/project/09. P-450, R-9, B-K (Rose Valley).jpg') }}"
                                        alt="project Image" />
                                </div>
                                <div class="project-content">
                                    <div class="border-overly"></div>
                                    <div class="display-table">
                                        <div class="display-table-cell">
                                            <!-- zoom btn -->
                                            <a class="image-popup p-zoom"
                                                href="{{ asset('frontend/assets/images/project/09. P-450, R-9, B-K (Rose Valley).jpg') }}"
                                                title="INDOOR REDESIGN PROJECT">
                                                <i class="fa fa-plus"></i>
                                            </a>
                                            <!-- view btn -->
                                            <a class="btn-view" href="#">
                                                <i class="fa fa-paper-plane"></i>
                                            </a>

                                            <h4 class="p-title"><a href="rosevalley.html">Rose Valley</a></h4>
                                            <!-- <p class="p-desc">Lorem Ipsum is not simply random text</p> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 12 -->
                    @endif


                </div>
            </div>
        </div>
    </section>
    <!-- project section end-->

    <!-- Contact Start -->
    <div id="rs-contact" class="rs-contact sec-spacer">
        <div class="container">
            <div class="sec-title text-center">
                <h3>Our Contact Details</h3>
                <p>Lorem ipsum madolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
            </div>
            <div class="contact-bg">

                <div class="row">

                    <div class="col-md-4 col-sm-4 margin">
                        @if ($contactPhoneCount >= 1)
                            @foreach ($contactPhones as $contactPhone)
                                <div class="contact-address">
                                    <div class="address-item">
                                        <div class="address-icon">
                                            <i class="{{ $contactPhone->phone_num_icon }}"></i>
                                        </div>
                                        <div class="address-text">
                                            {{ $contactPhone->phone_num_one }} <br>
                                            {{ $contactPhone->phone_num_two }}
                                        </div>
                                    </div>
                                    <div class="address-item">
                                        <div class="address-icon">
                                            <i class="{{ $contactPhone->email_icon }}"></i>
                                        </div>
                                        <div class="address-text">
                                            {{ $contactPhone->email }} <br>
                                            {{ $contactPhone->website_link }}
                                        </div>
                                    </div>
                                    <div class="address-item">
                                        <div class="address-icon">
                                            <i class="{{ $contactPhone->address_icon }}"></i>
                                        </div>
                                        <div class="address-text">
                                            {{ $contactPhone->address_one }} <br>
                                            {{ $contactPhone->address_two }}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="contact-address">
                                <div class="address-item">
                                    <div class="address-icon">
                                        <i class="glyph-icon flaticon-technology"></i>
                                    </div>
                                    <div class="address-text">
                                        +8801774758837 <br>
                                        +8801774758838
                                    </div>
                                </div>
                                <div class="address-item">
                                    <div class="address-icon">
                                        <i class="glyph-icon flaticon-multimedia"></i>
                                    </div>
                                    <div class="address-text">
                                        info@tokyohpowerpropertiesltd.com <br>
                                        www.tokyohpowerpropertiesltd.com
                                    </div>
                                </div>
                                <div class="address-item">
                                    <div class="address-icon">
                                        <i class="glyph-icon flaticon-signs"></i>
                                    </div>
                                    <div class="address-text">
                                        JCX Business Tower,
                                        13th Floor, Plot- 1136/A, Japan Street, Block # I <br>
                                        Bashundhara Residential Area, Dhaka- 1229
                                    </div>
                                </div>
                            </div>
                        @endif

                    </div>

                    <div class="margin col-md-8 col-sm-8">
                        <!-- Map Start -->
                        <div id="contact-info2" class="contact-info2">
                            <div class="container-fluid full-width">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 padding-0">
                                        <iframe
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1534.6334618365368!2d90.43111602575316!3d23.818810140216975!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7d8f5fb7689%3A0xcae6416894cbd900!2sBashundhara%20Residential%20Area!5e0!3m2!1sen!2sbd!4v1720066977253!5m2!1sen!2sbd"
                                            width="600" height="450" style="border:0;" allowfullscreen=""
                                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Map end -->
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="contact-form pt-50">
                            <div id="form-messages">
                                @if (session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            </div>
                            <form action="{{ route('contact.store') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-field">
                                            <i class="fa fa-address-book-o"></i>
                                            <input type="text" name="name" class="form-control"
                                                value="{{ old('name') }}" placeholder="Enter Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-field">
                                            <i class="glyph-icon flaticon-multimedia"></i>
                                            <input type="email" name="email" class="form-control"
                                                value="{{ old('email') }}" placeholder="Enter Email">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-field">
                                            <i class="glyph-icon flaticon-technology"></i>
                                            <input type="text" name="phone" class="form-control"
                                                value="{{ old('phone') }}" placeholder="Enter Phone Number">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-field">
                                            <i class="fa fa-gear"></i>
                                            <input type="text" name="website_url" class="form-control"
                                                value="{{ old('website_url') }}" placeholder="Enter Website Link">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-field">
                                    <textarea name="message" class="form-control" rows="6" placeholder="Enter Message">{{ old('message') }}</textarea>
                                </div>
                                <div class="form-button">
                                    <button type="submit" class="btn btn-success">Message</button>
                                </div>
                            </form>
                            
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Contact End -->



    <!-- start scrollUp  -->
    <div id="scrollUp">
        <i class="fa fa-angle-up"></i>
    </div>
@endsection
