@extends('layouts.main')

@section('content')

    @include('includes.feature-banner', ['title' => 'Affiliation Certification'])

    <!-- start: Associated Members -->
    <section class="h7-project sec-gap bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="sec-heading text-center">
                        <h2 class="sec-title txt-anim">Affiliation Certification</h2>
                    </div>
                </div>
            </div>
            <div class="row row-gap-md-3 justify-content-center">
                <div class="col-md-3 scroll-anim-right">
                    <img src="https://www.speditionindia.com/wp-content/uploads/2023/09/iso-certificate.jpg" alt=""
                        class="border preview">
                </div>

                <div class="col-md-3 scroll-anim-right">
                    <img src="http://speditionindia.com/wp-content/uploads/2023/09/meme-certificate-768x1105.jpg"
                        alt="" class="border preview">
                </div>

                <div class="col-md-6 scroll-anim-right">
                    <img src="https://www.speditionindia.com/wp-content/uploads/2023/09/iata-certificate.jpg" alt=""
                        class="border preview">
                </div>
            </div>
        </div>
    </section>
    <!-- end: Associated Members -->

    @include('includes.enquiry-section1')

    @include('includes.why-choose-section1')

@endsection

@section('title', 'Spedition India', 'Affiliation Certification')

@push('seo-schema')
    @php
        $schemaData = [
            '@context' => 'https://schema.org',
            '@type' => 'WebPage',
            '@id' => url('/affiliation-certification') . '#webpage',
            'url' => url('/affiliation-certification'),
            'name' => 'Affiliation & Certification | Spedition India',
            'isPartOf' => [
                '@id' => url('/') . '#website',
            ],
            'about' => [
                '@id' => url('/') . '#organization',
            ],
        ];
    @endphp
@endpush
