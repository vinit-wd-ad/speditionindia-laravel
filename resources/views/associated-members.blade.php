@extends('layouts.main')

@section('content')

    @include('includes.feature-banner', ['title' => 'Associated Members'])

    <!-- start: Associated Members -->
    <section class="h7-project sec-gap bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="sec-heading text-center">
                        <h2 class="sec-title txt-anim">Associated Members</h2>
                    </div>
                </div>
            </div>
            @php
                $clients = [
                    'client-1.webp',
                    'client-2.webp',
                    'client-3.webp',
                    'client-4.webp',
                    'client-5.webp',
                    'client-6.webp',
                    'client-7.webp',
                    'client-8.webp',
                    'client-9.webp',
                    'client-10.webp',
                    'client-11.webp',
                    'client-12.webp',
                    'client-13.webp',
                    'client-14.webp',
                    'client-15.webp',
                    'client-16.webp',
                    'client-17.webp',
                    'client-18.webp',
                    'client-19.webp',
                ];
            @endphp

            <div class="row row-gap-md-3 justify-content-center">
                @foreach ($clients as $client)
                    <div class="col-md-2 scroll-anim-right">
                        <img src="{{ asset('web/images/client/' . $client) }}" alt="Client Logo" class="border">
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- end: Associated Members -->

    @include('includes.enquiry-section1')

    @include('includes.why-choose-section1')

@endsection

@section('title', 'Spedition India')

@push('seo-schema')
    @php
        $schemaData = [
            '@context' => 'https://schema.org',
            '@type' => 'WebPage',
            '@id' => url('/associated-members') . '#webpage',
            'url' => url('/associated-members'),
            'name' => 'Associated Members | Spedition India',
            'isPartOf' => [
                '@id' => url('/') . '#website',
            ],
            'about' => [
                '@id' => url('/') . '#organization',
            ],
        ];
    @endphp
@endpush
