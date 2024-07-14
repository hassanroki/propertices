@extends('frontend.master')

@section('content')
    <!--Preloader start here-->
    @extends('frontend.preloader')
    <!--Preloader area end here-->

    <!--Header Start-->
    @extends('frontend.header')
    <!--Header End-->



    <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs sec-color">
        <img src="{{ asset('frontend/assets/images/banner/blog.jpg') }}" alt="Breadcrubs" />
        <div class="breadcrumbs-inner">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        @if ($singleProjectCount >= 1)
                            <h1 class="page-title">{{ $project->p_name }}</h1>
                        @else
                            <h1 class="page-title">Camellia</h1>
                        @endif

                        <ul>
                            <li>
                                <a class="active" href="index.html">Home</a>
                            </li>
                            <li><a href="#">Pages</a></li>
                            @if ($singleProjectCount >= 1)
                                <li>{{ $project->p_name }}</li>
                            @else
                                <li>Camellia</li>
                            @endif

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs End -->

    <!-- project details Start -->
    <div id="rs-project-details" class="rs-project-details mt-100">
        <div class="top-images">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 top-img">
                        @if ($singleProjectCount >= 1)
                            <img src="{{ asset('storage/' . $project->photo) }}" alt="">
                        @else
                            <img src="{{ asset('frontend/assets/images/project/01. P-930 , R-43 , B-L (Camellia).jpg') }}"
                                alt="">
                        @endif

                    </div>
                </div>
                <div class="container">
                    <h1>Project Details</h1>
                    <table>
                        <tr>
                            <th>Project Name</th>
                            <td>{{ $project->p_name }}</td>
                        </tr>
                        <tr>
                            <th>Land Area</th>
                            <td>{{ $project->land_area }}</td>
                        </tr>
                        <tr>
                            <th>Project Face</th>
                            <td>{{ $project->project_face }}</td>
                        </tr>
                        <tr>
                            <th>Height of The Building</th>
                            <td>{{ $project->b_height }}</td>
                        </tr>
                        <tr>
                            <th>Number of Flat</th>
                            <td>{{ $project->num_flat }} Nos</td>
                        </tr>
                        <tr>
                            <th>Flat Size</th>
                            <td>{{ $project->flat_size }}</td>
                        </tr>
                        <tr>
                            <th>Each Floor</th>
                            <td>{{ $project->each_floor }} Unit</td>
                        </tr>
                        <tr>
                            <th>Address</th>
                            <td>{{ $project->address }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- project details end  -->

    <!-- Relatade Product Start  -->
    <div id="relatade-project" class="relatade-project rs-home-project mb-100">
        <div class="container">
            <div class="sec-title text-center">
                <h3>Project Picture</h3>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="project-img">
                        <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30"
                            data-autoplay="true" data-autoplay-timeout="5000" data-smart-speed="2000" data-dots="false"
                            data-nav="false" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="false"
                            data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false"
                            data-ipad-device-dots="false" data-md-device="3" data-md-device-nav="false"
                            data-md-device-dots="false">

                            @if ($projectCount >= 1)
                                @foreach ($projects as $project)
                                <div class="single-img">
                                    <div class="img-part">
                                        <img src="{{ asset('storage/' . $project->photo) }}"
                                            alt="">
                                        <div class="case-study-overlay">
                                            <div class="case-middle-align">
                                                <div class="case-study-text">
                                                    <div class="case-study-icon">
                                                        <i class="fa fa-plus"></i>
                                                        <i class="fa fa-paper-plane"></i>
                                                    </div>
                                                    <div class="case-study-icon-text">
                                                        <a class="icon-title" href="{{ route('project', $project->id) }}">{{ $project->p_name }}</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            @else
                                <div class="single-img">
                                    <div class="img-part">
                                        <img src="{{ asset('frontend/assets/images/project/02. Under Construction/01.  P-930 , R-43 , B-L (Camellia)/01. P-930 , R-43 , B-L (Camellia).jpg') }}"
                                            alt="">
                                        <div class="case-study-overlay">
                                            <div class="case-middle-align">
                                                <div class="case-study-text">
                                                    <div class="case-study-icon">
                                                        <i class="fa fa-plus"></i>
                                                        <i class="fa fa-paper-plane"></i>
                                                    </div>
                                                    <div class="case-study-icon-text">
                                                        <a class="icon-title" href="#">Construction1</a>
                                                        <p class="icon-subtitle">Interiors, Architecture</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="single-img">
                                    <div class="img-part">
                                        <img src="{{ asset('frontend/assets/images/project/02. Under Construction/01.  P-930 , R-43 , B-L (Camellia)/01.jpg') }}"
                                            alt="">
                                        <div class="case-study-overlay">
                                            <div class="case-middle-align">
                                                <div class="case-study-text">
                                                    <div class="case-study-icon">
                                                        <i class="fa fa-plus"></i>
                                                        <i class="fa fa-paper-plane"></i>
                                                    </div>
                                                    <div class="case-study-icon-text">
                                                        <a class="icon-title" href="#">Camellia</a>
                                                        <p class="icon-subtitle">Design, House & Exterior, Metal Roofing</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="single-img">
                                    <div class="img-part">
                                        <img src="{{ asset('frontend/assets/images/project/02. Under Construction/01.  P-930 , R-43 , B-L (Camellia)/02.jpg') }}"
                                            alt="">
                                        <div class="case-study-overlay">
                                            <div class="case-middle-align">
                                                <div class="case-study-text">
                                                    <div class="case-study-icon">
                                                        <i class="fa fa-plus"></i>
                                                        <i class="fa fa-paper-plane"></i>
                                                    </div>
                                                    <div class="case-study-icon-text">
                                                        <a class="icon-title" href="#">Camellia</a>
                                                        <p class="icon-subtitle">House & Exterior, Architecture, House
                                                            Renovation</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="single-img">
                                    <div class="img-part">
                                        <img src="{{ asset('frontend/assets/images/project/02. Under Construction/01.  P-930 , R-43 , B-L (Camellia)/03.jpg') }}"
                                            alt="">
                                        <div class="case-study-overlay">
                                            <div class="case-middle-align">
                                                <div class="case-study-text">
                                                    <div class="case-study-icon">
                                                        <i class="fa fa-plus"></i>
                                                        <i class="fa fa-paper-plane"></i>
                                                    </div>
                                                    <div class="case-study-icon-text">
                                                        <a class="icon-title" href="#">Camellia</a>
                                                        <p class="icon-subtitle">Design, Architecture</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="single-img">
                                    <div class="img-part">
                                        <img src="{{ asset('frontend/assets/images/project/02. Under Construction/01.  P-930 , R-43 , B-L (Camellia)/04.jpg') }}"
                                            alt="">
                                        <div class="case-study-overlay">
                                            <div class="case-middle-align">
                                                <div class="case-study-text">
                                                    <div class="case-study-icon">
                                                        <i class="fa fa-plus"></i>
                                                        <i class="fa fa-paper-plane"></i>
                                                    </div>
                                                    <div class="case-study-icon-text">
                                                        <a class="icon-title" href="#">Camellia</a>
                                                        <p class="icon-subtitle">Design, Architecture</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="single-img">
                                    <div class="img-part">
                                        <img src="{{ asset('frontend/assets/images/project/02. Under Construction/01.  P-930 , R-43 , B-L (Camellia)/05.jpg') }}"
                                            alt="">
                                        <div class="case-study-overlay">
                                            <div class="case-middle-align">
                                                <div class="case-study-text">
                                                    <div class="case-study-icon">
                                                        <i class="fa fa-plus"></i>
                                                        <i class="fa fa-paper-plane"></i>
                                                    </div>
                                                    <div class="case-study-icon-text">
                                                        <a class="icon-title" href="#">Camellia</a>
                                                        <p class="icon-subtitle">Design, Architecture</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="single-img">
                                    <div class="img-part">
                                        <img src="{{ asset('frontend/assets/images/project/02. Under Construction/01.  P-930 , R-43 , B-L (Camellia)/06.jpg') }}"
                                            alt="">
                                        <div class="case-study-overlay">
                                            <div class="case-middle-align">
                                                <div class="case-study-text">
                                                    <div class="case-study-icon">
                                                        <i class="fa fa-plus"></i>
                                                        <img src="{{ asset('frontend/assets/images/project/02. Under Construction/01.  P-930 , R-43 , B-L (Camellia)/06.jpg') }}"
                                                            alt="">
                                                        <i class="fa fa-paper-plane"></i>
                                                    </div>
                                                    <div class="case-study-icon-text">
                                                        <a class="icon-title" href="#">Camellia</a>
                                                        <p class="icon-subtitle">Design, Architecture</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="single-img">
                                    <div class="img-part">
                                        <img src="{{ asset('frontend/assets/images/project/02. Under Construction/01.  P-930 , R-43 , B-L (Camellia)/07.jpg') }}"
                                            alt="">
                                        <div class="case-study-overlay">
                                            <div class="case-middle-align">
                                                <div class="case-study-text">
                                                    <div class="case-study-icon">
                                                        <i class="fa fa-plus"></i>
                                                        <i class="fa fa-paper-plane"></i>
                                                    </div>
                                                    <div class="case-study-icon-text">
                                                        <a class="icon-title" href="#">Camellia</a>
                                                        <p class="icon-subtitle">Design, Architecture</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Relatade Product End  -->

    <!-- start scrollUp  -->
    <div id="scrollUp">
        <i class="fa fa-angle-up"></i>
    </div>
@endsection
