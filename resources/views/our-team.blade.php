@extends('layouts.main')

@section('content')

    @include('includes.feature-banner', ['title' => 'Our Team'])

    <!-- start: Team Section -->
    <section class="tj-team-section sec-gap">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="sec-heading text-center">
                        <!--<span class="sub-title wow fadeInUp" data-wow-delay=".1s"><i class="tji-box"></i>Meet Our Team</span>-->
                        <h2 class="sec-title txt-anim">People Behind <span>Spedition.</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="team-item card" data-project-id="harpreet-singh">
                        <div class="team-img open-team-modal">
                            <div class="team-img-inner">
                                <img src="{{ asset('web/images/team/harpreet1.jpeg') }}" alt="">
                            </div>
                        </div>

                        <div class="team-content open-team-modal p-2">
                            <h5 class="title"><a>Harpreet Singh</a></h5>
                            <span class="designation">Head Operations</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="team-item card" data-project-id="munish-bhardwaj">
                        <div class="team-img open-team-modal">
                            <div class="team-img-inner">
                                <img src="https://speditionindia.com/wp-content/uploads/2021/09/munish-150x150.jpg"
                                    alt="">
                            </div>
                        </div>

                        <div class="team-content open-team-modal p-2">
                            <h5 class="title"><a>Munish Bhardwaj</a></h5>
                            <span class="designation">Country Head Fairs & Exhibitions</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end: Team Section -->

    @include('includes.enquiry-section1')

    @include('includes.why-choose-section1')

@endsection

@section('title', 'Spedition India | Our Team')

@push('seo-schema')
    @php
        $schemaData = [
            '@context' => 'https://schema.org',
            '@type' => 'WebPage',
            '@id' => url('/our-team') . '#webpage',
            'url' => url('/our-team'),
            'name' => 'Our Team | Spedition India',
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
