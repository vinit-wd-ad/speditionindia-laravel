@extends('layouts.main')

@section('content')

    @include('includes.feature-banner', ['title' => $project->name])

    <section class="tj-about-section-1 service-2 sec-gap rounded-0 slidebar-stickiy-container">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 order-lg-2 order-1">
                    <div class="about-content-area">
                        <div class="sec-heading style-3 text-center">
                            <h2 class="sec-title txt-anim">{{ $project->name }}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
    
                    {{-- 1. MAIN PROJECT KA APNA CONTENT (Agar content hai toh sabse pehle yeh dikhega) --}}
                    @if ($project->content)
                        <div class="main-project-content mb-5">
                            @foreach ($project->content as $block)
                                @if ($block['type'] === 'heading')
                                    @php $level = $block['data']['level'] ?? 'h2'; @endphp
                                    <{{ $level }} class="title w-100 mb-3">{{ $block['data']['text'] }}</{{ $level }}>
                                @endif
    
                                @if ($block['type'] === 'paragraph')
                                    <div class="service-content mb-4">
                                        <div class="desc">{!! $block['data']['text'] !!}</div>
                                    </div>
                                @endif
    
                                @if ($block['type'] === 'html_code')
                                    <div class="custom-html-wrapper mb-4">
                                        {!! $block['data']['html'] ?? '' !!}
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    @endif
    
                    {{-- 2. CHILD PROJECTS LIST (Agar is project ke children hain, toh content ke baad yeh dikhenge) --}}
                    @if ($project->children && $project->children->count() > 0)
                        <div class="row mb-5">
                            @foreach ($project->children as $child)
                                <div class="col-lg-12 mb-4">
                                    <div class="service-wrapper-2 p-4"
                                        style="background: #fff; border-radius: 8px; box-shadow: 0 0 15px rgba(0,0,0,0.05);">
    
                                        {{-- Top Header: Heading & View More Button --}}
                                        <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3">
                                            <div class="title-area m-0">
                                                <h3 class="title m-0" style="font-size: 24px;">
                                                    @if ($child->has_content)
                                                        <a href="{{ route('moment-workstyle.show', $child->slug) }}">{{ $child->name }}</a>
                                                    @else
                                                        {{ $child->name }}
                                                    @endif
                                                </h3>
                                            </div>
    
                                            @if ($child->has_content)
                                                <div class="btn-area">
                                                    <a href="{{ route('moment-workstyle.show', $child->slug) }}"
                                                        class="tj-primary-btn">
                                                        <span class="btn-text"><span>View More</span></span>
                                                        <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                                                    </a>
                                                </div>
                                            @endif
                                        </div>
    
                                        <div class="service-content mb-3">
                                            <p class="desc">
                                                @if ($child->has_content)
                                                    <a href="{{ route('moment-workstyle.show', $child->slug) }}">Explore more</a> about {{ $child->name }}.
                                                @else
                                                    Explore more about {{ $child->name }}.
                                                @endif
                                            </p>
                                        </div>
    
                                        {{-- Child Nested Images Slider --}}
                                        @php
                                            $nestedImages = $child->getAllNestedImages();
                                        @endphp
    
                                        @if ($nestedImages->count() > 0)
                                            <div class="child-images-slider mt-4">
                                                <div class="swiper project-slider-2">
                                                    <div class="swiper-wrapper">
                                                        @foreach ($nestedImages as $img)
                                                            <div class="swiper-slide">
                                                                <div class="gallery-item-preview"
                                                                    style="height: 200px; overflow: hidden; box-shadow: 0 2px 5px rgba(0,0,0,0.1); border-radius: 6px;">
                                                                    <img src="{{ asset('storage/' . $img->image_path) }}"
                                                                        alt="{{ $img->caption ?? $child->name }}"
                                                                        style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease;"
                                                                        onmouseover="this.style.transform='scale(1.05)'"
                                                                        onmouseout="this.style.transform='scale(1)'">
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                                <div class="swiper-pagination-area mt-3 text-center"></div>
                                            </div>
                                        @endif
    
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif
    
                    {{-- 3. MAIN PROJECT'S OWN GALLERY / IMAGES (Independent block: agar main project ki apni images hain toh woh bhi yahan render hongi) --}}
                    @if ($project->images && $project->images->count() > 0)
                        <div class="row mt-5">
                            <h3 class="txt-anim mb-4">Our Gallery</h3>
                            <div class="masonry-gallery">
                                @foreach ($project->images as $image)
                                    <div class="gallery-item">
                                        <img src="{{ asset('storage/' . $image->image_path) }}"
                                            alt="{{ $image->caption ?? 'Spedition Team Gallery' }}">
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif
    
                </div>
            </div>
        </div>
    
        {{-- Background Shapes --}}
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

@endsection

@section('title', $project->name . ' | Spedition India')

@push('seo-schema')
    @php
        $schemaData = [
            '@context' => 'https://schema.org',
            '@type' => 'WebPage',
            '@id' => url('/moment-workstyle/' . $project->slug) . '#webpage',
            'url' => url('/moment-workstyle/' . $project->slug),
            'name' => $project->name . ' | Spedition India',
            'isPartOf' => [
                '@id' => url('/') . '#website',
            ],
        ];
    @endphp
@endpush
