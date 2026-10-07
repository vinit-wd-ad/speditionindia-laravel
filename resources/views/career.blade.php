@extends('layouts.main')

@section('content')

    @include('includes.feature-banner', ['title' => ''  ,'image' => 'web/images/hero/career.jpg'])

    <!-- start: Associated Members -->
    <section class="tj-careers-section sec-gap">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="sec-heading text-center mb-2">
                        <h2 class="sec-title txt-anim">Career</h2>
                    </div>
                </div>
            </div>
            <div class="row rg-30 mt-5">
                <div class="col-xl-4 col-md-6 scroll-anim-right">
                    <div class="tj-careers">
                        <div class="tj-careers-icon mb-30">
                            <i class="tji-strategy"></i>
                        </div>
                        <div class="tj-careers-tag">
                            <span>Full time job/on site</span> <span>Immediate</span> <span>Experience: Min 2-3 years</span>
                        </div>
                        <h4 class="tj-careers-title">
                            <a href="{{ url('sales-executive') }}">Sales Executive</a>
                        </h4>
                        <div class="tj-careers-bottom">
                            <span class="location"><i class="tji-location"></i>Noida, India</span>
                            <a href="{{ url('sales-executive') }}" class="tj-careers-btn">
                                <div class="btn-text">
                                    <span>Apply Now</span>
                                </div>
                                <span class="btn-icon">
                                    <i class="tji-arrow-right"></i>
                                    <i class="tji-arrow-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 scroll-anim-right">
                    <div class="tj-careers">
                        <div class="tj-careers-icon mb-30">
                            <i class="tji-manage"></i>
                        </div>
                        <div class="tj-careers-tag">
                            <span>Full time job/on site</span> <span>Immediate</span> <span>Experience: Min 2-3 years</span>
                        </div>
                        <h4 class="tj-careers-title">
                            <a href="{{ url('sales-coordinator') }}">Overseas Sales Coordinator</a>
                        </h4>
                        <div class="tj-careers-bottom">
                            <span class="location"><i class="tji-location"></i>Noida, India</span>
                            <a href="{{ url('sales-coordinator') }}" class="tj-careers-btn">
                                <div class="btn-text">
                                    <span>Apply Now</span>
                                </div>
                                <span class="btn-icon">
                                    <i class="tji-arrow-right"></i>
                                    <i class="tji-arrow-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 scroll-anim-right">
                    <div class="tj-careers">
                        <div class="tj-careers-icon mb-30">
                            <i class="tji-process-1"></i>
                        </div>
                        <div class="tj-careers-tag">
                            <span>Full time job/on site</span> <span>Immediate</span> <span>Experience: Min 2-4 years</span>
                        </div>
                        <h4 class="tj-careers-title">
                            <a href="{{ url('account-executive') }}">Account Executive</a>
                        </h4>
                        <div class="tj-careers-bottom">
                            <span class="location"><i class="tji-location"></i>Noida, India</span>
                            <a href="{{ url('account-executive') }}" class="tj-careers-btn">
                                <div class="btn-text">
                                    <span>Apply Now</span>
                                </div>
                                <span class="btn-icon">
                                    <i class="tji-arrow-right"></i>
                                    <i class="tji-arrow-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end: Associated Members -->

@endsection

@section('title', 'Spedition India | Career')

@push('seo-schema')
    @php
        $schemaData = [
            '@context' => 'https://schema.org',
            '@type' => 'CollectionPage',
            '@id' => url('career') . '#webpage',
            'url' => url('career'),
            'name' => 'Careers | Spedition India',
            'isPartOf' => [
                '@id' => url('/') . '#website',
            ],
            'about' => [
                '@id' => url('/') . '#organization',
            ],
        ];
    @endphp
@endpush
