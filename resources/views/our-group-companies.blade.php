@extends('layouts.main')

@section('content')

    @include('includes.feature-banner', ['title' => 'Our Group Companies'])

    <!-- start: About Section -->
    <section class="tj-about-section sec-gap">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 order-lg-2 order-1">
                    <div class="about-content-area">
                        <div class="sec-heading style-3 text-center">
                            <span class="sub-title"><i class="tji-box"></i>Our Companies</span>
                            <h2 class="sec-title txt-anim">Our Group Companies</h2>
                        </div>
                        <p class="desc my-4">We’re not a company in Spedition; we’re a team of passionate professionals
                            driven to make your logistics simple. Starting from an entire array of services under our group
                            companies, we’re dedicated to making each and every step of your supply chain happen as
                            smoothly, as efficiently, and with the devotion it requires. Let us transport you to the center
                            of our operations.</p>
                        <p class="desc">We’re not a company in Spedition; we’re a team of passionate professionals driven
                            to make your logistics simple. Starting from an entire array of services under our group
                            companies, we’re dedicated to making each and every step of your supply chain happen as
                            smoothly, as efficiently, and with the devotion it requires. Let us transport you to the center
                            of our operations.</p>
                        <p class="desc">Let’s work together & make your logistics hassle-free experience.</p>
                    </div>
                </div>
            </div>
            <div class="vactor">
                <img src="{{ asset('web/images/icons/ship-vector.png') }}" alt="" class="ship">
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

    <!-- start: Service Section -->
    <section class="tj-service-section service-2 sec-gap rounded-0 slidebar-stickiy-container group-companies">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="service-wrapper-2">
                        <div class="service-item-wrapper scroll-anim-right">
                            <div class="service-item style-7 ">
                                <div class="title-area">
                                    <h3 class="title w-100"><a>Spedition</a></h3>
                                </div>
                                <div class="service-content">
                                    <p class="desc">Spedition is the first company of the Spedition Group. Over the years,
                                        it has built its experience around exhibition logistics and other logistics
                                        solutions, helping clients manage the movement, handling and delivery of materials
                                        for exhibitions and different logistics requirements.</p>
                                </div>
                            </div>
                        </div>

                        <div class="service-item-wrapper scroll-anim-right mt-4">
                            <div class="service-item style-7">
                                <div class="title-area">
                                    <h3 class="title w-100"><a>Spedition India Pvt. Ltd.</a></h3>
                                </div>
                                <div class="service-content">
                                    <p class="desc">Spedition India Pvt. Ltd. is mainly into exhibition logistics
                                        services. The team works closely with exhibitors and businesses to handle the
                                        transportation, handling and delivery of exhibition materials, making sure
                                        everything gets to the right place at the right time.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="service-wrapper-2">

                        <div class="service-item-wrapper scroll-anim-left">
                            <div class="service-item style-7">
                                <div class="title-area">
                                    <h3 class="title w-100"><a>SI Freight</a></h3>
                                </div>
                                <div class="service-content">
                                    <p class="desc">SI Freight works mainly in international logistics, in collaboration
                                        with international agents and partners across different countries. This enables the
                                        company to coordinate shipments and provide end-to-end logistics support for
                                        customers moving goods internationally.</p>
                                </div>
                            </div>
                        </div>

                        <div class="service-item-wrapper scroll-anim-left mt-4">
                            <div class="service-item style-7">
                                <div class="title-area">
                                    <h3 class="title w-100"><a>SI Express</a></h3>
                                </div>
                                <div class="service-content">
                                    <p class="desc">SI Express provides express logistics and delivery services for
                                        domestic and international shipments. The company is committed to offering fast,
                                        dependable and convenient solutions to customers who require their shipments to be
                                        delivered on time. </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-12 mt-4">
                    <div class="service-wrapper-2">

                        <div class="service-item-wrapper scroll-anim">
                            <div class="service-item style-7">
                                <div class="title-area">
                                    <h3 class="title w-100"><a>Storeforme – Spedition India Storage Services Pvt. Ltd.</a>
                                    </h3>
                                </div>
                                <div class="service-content">
                                    <p class="desc">Storeforme is a self-storage solutions company offering storage space
                                        for individuals and businesses. Its services include storage solutions for garments,
                                        household essentials and commercial goods, providing customers with a convenient and
                                        flexible way to store their belongings.</p>
                                </div>
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
        <div class="bg-shape-3">
            <img src="{{ asset('web/images/shape/shape-blur.svg') }}" alt="">
        </div>
    </section>
    <!-- end: Service Section -->

    @include('includes.enquiry-section2')

    @include('includes.why-choose-section1')

@endsection

@section('title', 'Spedition India | Our Group Companies')

@push('seo-schema')
    @php
        $schemaData = [
            '@context' => 'https://schema.org',
            '@type' => 'WebPage',
            '@id' => url('/our-group-companies') . '#webpage',
            'url' => url('/our-group-companies'),
            'name' => 'Our Group Companies | Spedition India',
            'isPartOf' => [
                '@id' => url('/') . '#website',
            ],
            'about' => [
                '@id' => url('/') . '#organization',
            ],
        ];
    @endphp
@endpush
