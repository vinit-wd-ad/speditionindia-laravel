@extends('layouts.main')

@section('content')

    @include('includes.feature-banner', ['title' => 'Our Team'])

    <!-- start: Team Section -->
    <section class="tj-team-section sec-gap">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="sec-heading text-center">
                        <h2 class="sec-title txt-anim">People Behind <span>Spedition.</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($teams as $team)
                    <div class="col-lg-3 col-sm-6">
                        <div class="team-item card open-team-modal" style="cursor: pointer;" data-name="{{ $team->name }}"
                            data-designation="{{ $team->designation }}"
                            data-img="{{ asset('storage/' . ($team->modal_image ?? $team->image)) }}">

                            <div class="team-img">
                                <div class="team-img-inner">
                                    <img src="{{ asset('storage/' . $team->image) }}" alt="{{ $team->name }}">
                                </div>
                            </div>

                            <div class="team-content p-2">
                                <h5 class="title"><a>{{ $team->name }}</a></h5>
                                <span class="designation">{{ $team->designation }}</span>
                            </div>

                            <div class="d-none team-bio">
                                {!! $team->description ?? '' !!}
                            </div>
                        </div>
                    </div>
                @endforeach
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
