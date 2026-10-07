@extends('layouts.main')

@section('content')

    @include('includes.feature-banner', ['title' => 'Mission & Vision'])

    <!-- start: About Section -->
    <section class="tj-about-section-2 section-gap rounded-0">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5 pe-lg-4 order-lg-1 order-2 scroll-anim-right">
                    <div class="about-img-area style-2 wow fadeInLeft" data-wow-delay=".3s">
                        <div class="about-img overflow-hidden">
                            <img data-speed=".8" src="{{ asset('web/images/service/Driving-Innovation.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 ps-lg-2 order-lg-2 order-1">
                    <div class="about-content-area">
                        <div class="sec-heading style-3">
                            <span class="sub-title wow fadeInUp" data-wow-delay=".3s"><i class="tji-box"></i>Get to Know
                                Us</span>
                            <h2 class="sec-title title-highlight">Driving Innovation and Excellence for Reliable Global
                                Logistics Solutions</h2>
                        </div>
                    </div>
                    <div class="about-bottom-area">
                        <div class="mission-vision-box scroll-anim-left">
                            <h4 class="title">Our Mission</h4>
                            <p class="desc">We endeavor to provide reliable logistics services through innovation,
                                talented teams and efficient freight management solutions.
                            </p>
                            <ul class="list-items">
                                <li><i class="tji-list"></i>Technology & Infrastructure Growth</li>
                                <li><i class="tji-list"></i>Skilled and Passionate Team</li>
                                <li><i class="tji-list"></i>Efficient Freight Management</li>
                                <li><i class="tji-list"></i>Ethical Customer Relationships</li>
                            </ul>
                        </div>
                        <div class="mission-vision-box scroll-anim-left">
                            <h4 class="title">Our Vision</h4>
                            <p class="desc">Our vision is to be a globally recognized logistics partner offering reliable,
                                flexible and efficient transportation services.
                            </p>
                            <ul class="list-items">
                                <li><i class="tji-list"></i>Global Logistics Leadership</li>
                                <li><i class="tji-list"></i>Reliable Service Excellence</li>
                                <li><i class="tji-list"></i>Flexible Logistics Solutions</li>
                                <li><i class="tji-list"></i>Sustainable Business Growth</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-shape-1">
            <img src="assets/images/shape/pattern-2.svg" alt="">
        </div>
        <div class="bg-shape-2">
            <img src="assets/images/shape/pattern-3.svg" alt="">
        </div>
    </section>
    <!-- end: About Section -->

    @include('includes.why-choose-section1')

    @include('includes.enquiry-section1')

    <!-- start: Project Section -->
    <section class="h7-project sec-gap bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="sec-heading text-center">
                        <h2 class="sec-title txt-anim">Benefits, diversity, and alignment</h2>
                    </div>
                </div>

                <div class="col-12 scroll-anim-right">
                    <img src="{{ asset('web/images/about/core-value.png') }}" alt="Image" class="w-100">
                </div>
            </div>
        </div>
    </section>
    <!-- end: Project Section -->
@endsection

@section('title', 'Spedition India | Our Mission & Vision')

@push('seo-schema')
    @php
        $schemaData = [
            '@context' => 'https://schema.org',
            '@type' => 'WebPage',
            '@id' => url('/mission-vision.php') . '#webpage',
            'url' => url('/mission-vision.php'),
            'name' => 'Mission & Vision | Spedition India',
            'isPartOf' => [
                '@id' => url('/') . '#website',
            ],
            'about' => [
                '@id' => url('/') . '#organization',
            ],
            'publisher' => [
                '@id' => url('/') . '#organization',
            ],
        ];
    @endphp
@endpush
