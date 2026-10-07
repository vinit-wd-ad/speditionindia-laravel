@extends('layouts.main')

@section('content')

    @include('includes.feature-banner', ['title' => 'Our Events'])

    <!-- start: Associated Members (Event Details) -->
    <section class="tj-careers-section sec-gap">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Event Details Container -->
                    <div id="event-details-container">
                        @php
                            $imgUrl =
                                $event['image']['url'] ??
                                'https://www.speditionindia.com/wp-content/uploads/2023/09/global-meeting.png';
                            $title = $event['title'] ?? 'Untitled Event';
                            $description =
                                $event['description'] ?? '<p>No detailed description available for this event.</p>';
                        @endphp

                        <div class="event-details-wrapper">
                            <div class="event-details-top mb-5 pb-4 border-bottom">
                                <div class="event-thumb-col">
                                    <img src="{{ $imgUrl }}" alt="{{ $title }}" class="img-fluid">
                                </div>
                                <div class="event-info-col">
                                    <h1 class="event-title mb-3" style="font-size: 32px; font-weight: 700;">
                                        {!! $title !!}</h1>

                                    <div class="event-meta-list mb-3">
                                        @if ($dateRange)
                                            <p class="mb-2" style="font-size: 16px; color: #555;">
                                                <i class="fa fa-calendar-alt text-primary me-2"></i>
                                                <strong>Date:</strong> {{ $dateRange }}
                                            </p>
                                        @endif

                                        <p class="mb-0" style="font-size: 16px; color: #555;">
                                            <i class="fa fa-map-marker-alt text-primary me-2"></i>
                                            <strong>Location:</strong> {{ $locationText }}
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="event-content-full mt-4" style="font-size: 16px; line-height: 1.8; color: #444;">
                                {!! $description !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            function initGalleryLightbox() {
                const overlay = document.createElement('div');
                overlay.className = 'image-lightbox-overlay';
                overlay.id = 'galleryLightbox';
                overlay.innerHTML = `
                <span class="image-lightbox-close">&times;</span>
                <img class="image-lightbox-img" src="" alt="Zoomed Image">
            `;
                document.body.appendChild(overlay);

                const lightboxImg = overlay.querySelector('.image-lightbox-img');

                document.addEventListener('click', function(e) {
                    const target = e.target;
                    if (target.tagName === 'IMG' && target.closest('.gall-row')) {
                        lightboxImg.src = target.src;
                        lightboxImg.alt = target.alt || 'Gallery Image';
                        overlay.classList.add('active');
                    }
                });

                overlay.addEventListener('click', function(e) {
                    if (e.target !== lightboxImg) {
                        overlay.classList.remove('active');
                    }
                });

                document.addEventListener('keydown', function(e) {
                    if (e.key === 'Escape' && overlay.classList.contains('active')) {
                        overlay.classList.remove('active');
                    }
                });
            }

            initGalleryLightbox();
        });
    </script>

@endsection

@section('title', 'Spedition India | ' . ($event['title'] ?? 'Event Details'))
