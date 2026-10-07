@extends('layouts.main')

@section('content')
    <!-- start: Banner Slider -->
    <section class="tj-slider-section">
        <video class="w-100 object-cover" src="{{ asset('web/video/spedition1.mp4') }}" autoplay muted loop
            playsinline></video>
        <div class="circle-text-wrap wow fadeInUp" data-wow-delay="1s">
            <span class="circle-text" data-bg-image="{{ asset('web/images/hero/circle-text.webp') }}"></span>
            <a class="circle-icon" href="#"><i class="tji-arrow-down-big"></i></a>
        </div>
    </section>
    <!-- end: Banner Slider -->

    <!-- start: Marquee Section -->
    <section class="tj-marquee-section rounded-0">
        <div class="marquee-wrapper">
            <div class="swiper marquee-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide marquee-item ps-4 py-2" style="background-color: #0c0c4c;">
                        <h4 class="marquee-text text-center">Spedition India Logistics Pvt Ltd</h4>
                    </div>
                    <div class="swiper-slide marquee-item ps-4 py-2" style="background-color: #2d3286;">
                        <h4 class="marquee-text text-center">Spedition India Storage Services Pvt Ltd</h4>
                    </div>
                    <div class="swiper-slide marquee-item ps-4 py-2" style="background-color: #0c0c4c;">
                        <h4 class="marquee-text text-center">SI Express Private Limited</h4>
                    </div>
                    <div class="swiper-slide marquee-item ps-4 py-2" style="background-color: #0f1469;">
                        <h4 class="marquee-text text-center">SI Freight Private Limited</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end: Marquee Section -->

    <!-- start: About Section -->
    <section class="tj-about-section section-gap">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 order-lg-1 order-2 scroll-anim-right">
                    <div class="about-img-area wow fadeInLeft" data-wow-delay=".2s">
                        <div class="about-img overflow-hidden pe-lg-5">
                            <img data-speed="0.8" src="{{ asset('web/images/about/about6d.png') }}" alt="">
                        </div>
                        <div class="box-area">
                            <div class="experience-box wow fadeInUp" data-wow-delay=".3s">
                                <span class="sub-title">Experiences</span>
                                <div class="customers-number">25+</div>
                                <h6 class="customers-text">Decades of Experience, Endless Innovation</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 order-lg-2 order-1 scroll-anim-left">
                    <div class="about-content-area style-1 wow fadeInLeft" data-wow-delay=".2s">
                        <div class="sec-heading">
                            <span class="sub-title wow fadeInUp" data-wow-delay=".3s"><i class="tji-box"></i>Get to Know
                                Us</span>
                            <h2 class="sec-title title-highlight">Global Logistics Expertise with Trusted Warehousing
                                Solutions <span></span></h2>
                        </div>
                        <div class="wow fadeInUp" data-wow-delay=".5s">
                            <a class="text-btn" href="{{ url('about-us.php') }}">
                                <span class="btn-text"><span>Learn More</span></span>
                                <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                            </a>
                        </div>
                    </div>
                    <div class="about-bottom-area">
                        <div class="client-review-cont scroll-anim-left" data-wow-delay=".7s">
                            <p class="desc mb-2">At Spedition, our journey started in April 2018, but our experience goes
                                back much further. With more than 25 years of logistics industry experience, our team has
                                successfully completed 2,500+ international exhibition logistics projects and various
                                complex projects worldwide.</p>
                        </div>
                        <div class="video-img scroll-anim-left" data-wow-delay=".9s">
                            <img src="{{ asset('web/images/logos/logo-png.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end: About Section -->

    <!-- start: Service Section -->
    @include('includes.service-section3')
    <!-- end: Service Section -->

    <!-- start: About Section -->
    <section class="tj-about-section section-gap">
        <div class="container">
            <div class="row row-gap-4">
                <div class="col-lg-4 col-md-6 order-lg-1 order-3">
                    <div class="countup-item style-2 scroll-anim-right" data-wow-delay=".1s">
                        <span class="count-icon"><i class="tji-complete"></i></span>
                        <span class="steps">01.</span>
                        <div class="count-inner">
                            <span class="count-text">Projects Completed.</span>
                            <div class="inline-content">
                                <span class="odometer countup-number" data-count="1500"></span>
                                <span class="count-plus">+</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-sm-12 order-lg-2 order-1">
                    <div class="about-content-area-2 scroll-anim-left" data-wow-delay=".3s">
                        <div class="about-content">
                            <div class="sec-heading style-2">
                                <span class="sub-title">Get to Know Us</span>
                                <h2 class="sec-title title-highlight">Driving into Excellence & Innovation: Your Trusted
                                    Partner for Sustainable Business Success</h2>
                            </div>
                            <div class="wow fadeInUp" data-wow-delay=".3s">
                                <a class="text-btn" href="#">
                                    <span class="btn-text"><span>Learn More</span></span>
                                    <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                                </a>
                            </div>
                        </div>
                        <div class="video-img scroll-anim-left" data-wow-delay=".7s">
                            <img src="{{ asset('web/images/about/import-export.webp') }}" alt="Image">
                            <a class="video-btn video-popup" data-autoplay="true" data-vbtype="video"
                                data-maxwidth="1200px" href="https:/www.youtube.com/watch?v=d3LtCIhCJKU">
                                <span><i class="tji-play"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 order-lg-3 order-2">
                    <div class="customers-box style-2 scroll-anim-right" data-wow-delay=".3s">
                        <div class="customers-bg" data-bg-image="{{ asset('web/images/about/about-4.webp') }}">
                        </div>
                        <div class="customers">
                            <ul>
                                <li class="wow fadeInLeft" data-wow-delay=".6s"><span><i class="tji-plus"></i></span>
                                </li>
                            </ul>
                        </div>
                        <h6 class="customers-text wow fadeInLeft" data-wow-delay=".6s">100000+ sq. ft. Industrial Facility
                        </h6>
                        <div class="star-icon zoomInOut"><img src="{{ asset('web/images/shape/star.svg') }}"
                                alt=""></div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 order-lg-4 order-4">
                    <div class="countup-item style-2 scroll-anim" data-wow-delay=".5s">
                        <span class="count-icon"><i class="tji-worldwide"></i></span>
                        <span class="steps">02.</span>
                        <div class="count-inner">
                            <span class="count-text">Core Technical Team</span>
                            <div class="inline-content">
                                <span class="odometer countup-number" data-count="50"></span>
                                <span class="count-plus">+</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 order-lg-5 order-5">
                    <div class="countup-item style-2 scroll-anim-left" data-wow-delay=".7s">
                        <span class="count-icon"><i class="tji-growth"></i></span>
                        <span class="steps">03.</span>
                        <div class="count-inner">
                            <span class="count-text">Our Team</span>
                            <div class="inline-content">
                                <span class="odometer countup-number" data-count="250"></span>
                                <span class="count-plus">+</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end: About Section -->

    <!-- start: Industries Section -->
    <section class="tj-project-section-3 h9-project sec-gap section-gap-x">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="sec-heading-wrap">
                        <div class="heading-wrap-content">
                            <div class="sec-heading style-8">
                                <span class="sub-title wow fadeInUp text-white" data-wow-delay=".3s">Types of
                                    Logistics</span>
                                <h2 class="sec-title txt-anim">Industries We Serve</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <script>
                window.phpProducts = @json($industries);
            </script>
            <div class="row justify-content-center" id="industriesRow"></div>
        </div>
        <div class="bg-shape-1">
            <img src="{{ asset('web/images/shape/pattern-2.svg') }}" alt="">
        </div>
        <div class="bg-shape-2">
            <img src="{{ asset('web/images/shape/pattern-3.svg') }}" alt="">
        </div>
    </section>
    <!-- end: Industries Section -->

    <!-- start: Choose Section -->
    @include('includes.why-choose-section1')
    <!-- end: Choose Section -->

    <!-- start: Client Section -->
    {{-- @include('includes.client-section1') --}}
    <!-- end: Client Section -->
    <section class="d-flex justify-content-center py-5" style="background: linear-gradient(180deg, #ddf0fe, #f8fcff);">
        <img src="{{ asset('web/images/about/pan-india.jpeg') }}" alt="">
    </section>
@endsection

@section('title', 'Spedition India | Excellence is Our Commitment')

@push('seo-schema')
    @php
        $schemaData = [
            '@context' => 'https://schema.org',
            '@graph' => [
                [
                    '@type' => 'Organization',
                    '@id' => url('/') . '#organization',
                    'name' => 'Spedition India',
                    'url' => url('/'),
                    'description' =>
                        'Spedition India provides freight forwarding, logistics, transportation and cargo handling solutions.',
                    'telephone' => '+91-120-6971313',
                    'email' => 'inquiry@speditionindia.com',
                    'address' => [
                        '@type' => 'PostalAddress',
                        'streetAddress' => 'B-121, B Block, Sector 64',
                        'addressLocality' => 'Noida',
                        'postalCode' => '201301',
                        'addressRegion' => 'Uttar Pradesh',
                        'addressCountry' => 'IN',
                    ],
                ],
                [
                    '@type' => 'WebSite',
                    '@id' => url('/') . '#website',
                    'url' => url('/'),
                    'name' => 'Spedition India',
                    'publisher' => [
                        '@id' => url('/') . '#organization',
                    ],
                ],
                [
                    '@type' => 'WebPage',
                    '@id' => url('/') . '#webpage',
                    'url' => url('/'),
                    'name' => 'Spedition India',
                    'isPartOf' => [
                        '@id' => url('/') . '#website',
                    ],
                    'about' => [
                        '@id' => url('/') . '#organization',
                    ],
                ],
            ],
        ];
    @endphp
    
@endpush
