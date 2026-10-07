@extends('layouts.main')

@section('content')
    <!-- start: Banner Slider -->
    <section class="tj-slider-section">
        <video class="w-100 object-cover" src="{{ asset('web/images/hero/freight-management.mp4') }}" autoplay muted loop
            playsinline></video>
    </section>
    <!-- end: Banner Slider -->

    <!-- start: About Section -->
    <section class="tj-about-section sec-gap">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 order-lg-1 order-2 scroll-anim-right">
                    <div class="about-img-area style-2">
                        <div class="about-img overflow-hidden">
                            <img data-speed=".8" src="{{ asset('web/images/about/about-6b.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 order-lg-2 order-1 scroll-anim-left">
                    <div class="about-content-area">
                        <div class="sec-heading style-3">
                            <span class="sub-title wow fadeInUp" data-wow-delay=".3s"><i class="tji-box"></i>Freight
                                Logistics</span>
                            <h2 class="sec-title txt-anim">Freight Management</h2>
                            <div class="element">
                                <img src="assets/images/about/airplane1.png" alt="">
                            </div>
                            <p class="desc my-4">Freight is the transport of goods and materials from one location to
                                another by a variety of means of transport, such as trucks, airplanes, ships, trains and
                                other vehicles. It is a vital process for the movement of goods along local, national and
                                international routes, facilitating global trade and supply chains. Spedition is among the
                                “best freight forwarding company in India” providing reliable and efficient solutions to
                                transport goods.</p>
                        </div>
                    </div>
                    <div class="about-bottom-area mt-5">
                        <div class="mission-vision-box wow fadeInLeft" data-wow-delay=".5s">
                            <h4 class="title">Why Choose Spedition</h4>
                            <p class="desc">Spedition is also all logistics solution provided all over the world because
                                one of the best freight forwarding companies in India expedition over the 6+ years of
                                experience in this field and worked with many clients and certified client they have given
                                the google review for our efficient work.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vactor">
                <img src="{{ asset('web/images/icons/truck-vector.png') }}" alt="" class="truck">
            </div>
        </div>
        <div class="bg-shape-1">
            <img src="{{ asset('web/images/shape/pattern-2.svg') }}" alt="">
        </div>
        <div class="bg-shape-2">
            <img src="{{ asset('web/images/shape/pattern-3.svg') }}" alt="">
        </div>
    </section>
    <!-- end: About Section -->

    <!-- start: Project Section -->
    <section class="tj-about-section-2 sec-gap section-gap-">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="sec-heading-wrap text-center">
                        <span class="sub-title wow fadeInUp" data-wow-delay=".3s"><i class="tji-box"></i>Choose The
                            Best</span>
                        <div class="sec-heading">
                            <h2 class="sec-title txt-anim">Our Freight Management Services</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4 mt-3 scroll-anim-right">
                    <a href="air-freight.php">
                        <div class="project-item">
                            <div class="project-img">
                                <img src="{{ asset('web') }}/images/hero/11.jpg" alt="">
                            </div>
                            <div class="project-content">
                                <div class="project-text">
                                    <h3 class="title"><a href="air-freight.php">Air Frieght</a></h3>
                                    <a class="project-btn" href="air-freight.php">
                                        <i class="tji-arrow-right-big"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 mt-3 scroll-anim-right">
                    <div class="project-item">
                        <div class="project-img">
                            <img src="{{ asset('web') }}/images/hero/13.jpg" alt="">
                        </div>
                        <div class="project-content">
                            <div class="project-text">
                                <h3 class="title"><a>Sea Frieght</a></h3>
                                <a class="project-btn">
                                    <i class="tji-arrow-right-big"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-3 scroll-anim-right">
                    <div class="project-item">
                        <div class="project-img">
                            <img src="{{ asset('web') }}/images/hero/12.jpg" alt="">
                        </div>
                        <div class="project-content">
                            <div class="project-text">
                                <h3 class="title"><a>Ground Frieght</a></h3>
                                <a class="project-btn">
                                    <i class="tji-arrow-right-big"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-3 scroll-anim-right">
                    <div class="project-item">
                        <div class="project-img">
                            <img src="{{ asset('web') }}/images/service/multimodel-transport.jpg" alt="">
                        </div>
                        <div class="project-content">
                            <div class="project-text">
                                <h3 class="title"><a>Multi-Modal Solutions</a></h3>
                                <a class="project-btn">
                                    <i class="tji-arrow-right-big"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-3 scroll-anim-right">
                    <div class="project-item">
                        <div class="project-img">
                            <img src="{{ asset('web') }}/images/service/transport.jpg" alt="">
                        </div>
                        <div class="project-content">
                            <div class="project-text">
                                <h3 class="title"><a>Transport Optimization</a></h3>
                                <a class="project-btn">
                                    <i class="tji-arrow-right-big"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-shape-1">
            <img src="{{ asset('web/images/shape/pattern-2.svg') }}" alt="">
        </div>
        <div class="bg-shape-2">
            <img src="{{ asset('web/images/shape/pattern-3.svg') }}" alt="">
        </div>
    </section>
    <!-- end: Project Section -->

    @include('includes.enquiry-section1')

    @include('includes.why-choose-section1')

@endsection

@section('title', 'Spedition India | Freight Management')

@push('seo-schema')
    @php
        $schemaData = [
            '@context' => 'https://schema.org',
            '@type' => 'Service',
            '@id' => url('/freight-management') . '#service',
            'name' => 'Freight Management',
            'url' => url('/freight-management'),
            'description' => 'Freight management and logistics solutions provided by Spedition India.',
            'provider' => [
                '@id' => url('/') . '#organization',
            ],
            'areaServed' => [
                '@type' => 'Country',
                'name' => 'India',
            ],
            'serviceType' => 'Freight Management',
        ];
    @endphp
@endpush
