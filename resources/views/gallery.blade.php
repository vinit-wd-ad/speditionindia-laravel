@extends('layouts.main')

@section('content')

    @include('includes.feature-banner', ['title' => 'Our Gallery'])

    <!-- start: About Section -->
    <section class="tj-about-section sec-gap">
        <div class="container">
            <!-- <h2 class="text-center mb-4">Masonry Style Gallery (No Gaps)</h2> -->
            <div class="row">
                <div class="col-12">
                    <div class="sec-heading text-center mb-4">
                        <h2 class="sec-title txt-anim">Captured Moments</h2>
                    </div>
                </div>
            </div>

            @include('includes.gallery_2025')
            @include('includes.gallery_our-team')
            @include('includes.gallery_old')

        </div>
    </section>
    <!-- end: About Section -->

@endsection

@section('title', 'Spedition India | Gallery')

@push('seo-schema')
    @php
        $schemaData = [
            '@context' => 'https://schema.org',
            '@type' => 'ImageGallery',
            '@id' => url('/gallery') . '#gallery',
            'url' => url('/gallery'),
            'name' => 'Spedition India Gallery',
            'isPartOf' => [
                '@id' => url('/') . '#website',
            ],
            'publisher' => [
                '@id' => url('/') . '#organization',
            ],
        ];
    @endphp
@endpush
