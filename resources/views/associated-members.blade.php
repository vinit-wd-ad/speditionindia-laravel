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

            <div class="row row-gap-md-3 justify-content-center">
                @foreach ($associatedMembers as $member)
                    <div class="col-md-2 scroll-anim-right">
                        {{-- Agar image Filament ke default public disk par save hoti hai --}}
                        <img src="{{ asset('storage/' . $member->image) }}" alt="{{ $member->title ?? 'Associated Member' }}"
                            class="border">
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
