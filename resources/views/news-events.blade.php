@extends('layouts.main')

@section('content')

    @include('includes.feature-banner', ['title' => 'News & Events'])

    <!-- start: Upcoming Events Section -->
    <section class="tj-careers-section sec-gap">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="sec-heading text-center mb-2">
                        <h2 class="sec-title txt-anim">Our Upcoming Events</h2>
                    </div>
                </div>
            </div>
            <div class="row rg-30 mt-5">
                <div class="col-12">
                    <div id="upcoming-events-list" class="blog-wrapper h8-blog-wrapper h10-blog-wrapper">
                        @forelse($upcomingEvents as $index => $event)
                            @php
                                $imgUrl =
                                    $event['image']['url'] ??
                                    'https://www.speditionindia.com/wp-content/uploads/2023/09/global-meeting.png';
                                $title = $event['title'] ?? 'Untitled Event';

                                $descRaw = $event['description'] ?? ($event['excerpt'] ?? '');
                                $descText = \Illuminate\Support\Str::limit(strip_tags($descRaw), 120);

                                $startDate = \Carbon\Carbon::parse($event['start_date']);
                                $endDate = !empty($event['end_date'])
                                    ? \Carbon\Carbon::parse($event['end_date'])
                                    : null;

                                $topRightDate = $startDate->format('F - d');
                                $fullDateRange = $startDate->format('d F Y');
                                if ($endDate) {
                                    $fullDateRange .= ' - ' . $endDate->format('d F Y');
                                }

                                $venue = $event['venue'] ?? null;
                                $locationText = 'Location TBA';
                                if ($venue && !empty($venue['venue'])) {
                                    $locationParts = array_filter([
                                        $venue['venue'],
                                        $venue['city'] ?? null,
                                        $venue['country'] ?? null,
                                    ]);
                                    $locationText = implode(', ', $locationParts);
                                }

                                $eventLink = url('event/' . $event['slug']);
                            @endphp

                            <div
                                class="blog-item style-2 flex-row scroll-anim mb-4 event-item-upcoming {{ $index >= 6 ? 'd-none' : '' }}">
                                <div class="blog-thumb">
                                    <a href="{{ $eventLink }}">
                                        <img src="{{ $imgUrl }}" alt="{{ $title }}">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <div class="title-area">
                                        <h3 class="title">
                                            <a href="{{ $eventLink }}">{!! $title !!}</a>
                                        </h3>
                                        @if ($descText)
                                            <p class="event-desc mt-2 mb-3"
                                                style="color: #666; font-size: 14px; line-height: 1.5;">{!! $descText !!}
                                            </p>
                                        @endif
                                        <a class="text-btn" href="{{ $eventLink }}">
                                            <span class="btn-text"><span>Read More</span></span>
                                            <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                                        </a>
                                    </div>
                                    <div class="blog-meta align-items-end">
                                        <div class="blog-date-wrapper text-end">
                                            <h3>{{ $topRightDate }}</h3>
                                            <span class="blog-date">{{ $fullDateRange }}</span>
                                        </div>
                                        <span class="categories text-end">
                                            <i class="fa fa-map-marker-alt"></i>
                                            {{ $locationText }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <p class="text-center py-4">No upcoming events scheduled right now.</p>
                        @endforelse
                    </div>

                    <!-- Show More / Show Less Toggle Buttons -->
                    @if (count($upcomingEvents) > 6)
                        <div class="text-center mt-4">
                            <button id="btn-upcoming-toggle" class="tj-primary-btn btn" data-state="more">
                                <span id="txt-upcoming-toggle">Show More</span>
                            </button>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
    <!-- end: Upcoming Events Section -->

    <!-- start: Previous Events Section -->
    <section class="tj-about-section-2 rounded-0 sec-gap">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="sec-heading text-center mb-2">
                        <h2 class="sec-title txt-anim">Our Previous Events</h2>
                    </div>
                </div>
            </div>
            <div class="row rg-30 mt-5">
                <div class="col-12">
                    <div id="previous-events-list" class="blog-wrapper h8-blog-wrapper h10-blog-wrapper">
                        @forelse($previousEvents as $index => $event)
                            @php
                                $imgUrl =
                                    $event['image']['url'] ??
                                    'https://www.speditionindia.com/wp-content/uploads/2023/09/global-meeting.png';
                                $title = $event['title'] ?? 'Untitled Event';

                                $descRaw = $event['description'] ?? ($event['excerpt'] ?? '');
                                $descText = \Illuminate\Support\Str::limit(strip_tags($descRaw), 120);

                                $startDate = \Carbon\Carbon::parse($event['start_date']);
                                $endDate = !empty($event['end_date'])
                                    ? \Carbon\Carbon::parse($event['end_date'])
                                    : null;

                                $topRightDate = $startDate->format('F - d');
                                $fullDateRange = $startDate->format('d F Y');
                                if ($endDate) {
                                    $fullDateRange .= ' - ' . $endDate->format('d F Y');
                                }

                                $venue = $event['venue'] ?? null;
                                $locationText = 'Location TBA';
                                if ($venue && !empty($venue['venue'])) {
                                    $locationParts = array_filter([
                                        $venue['venue'],
                                        $venue['city'] ?? null,
                                        $venue['country'] ?? null,
                                    ]);
                                    $locationText = implode(', ', $locationParts);
                                }

                                $eventLink = url('event/' . $event['slug']);
                            @endphp

                            <div
                                class="blog-item style-2 flex-row scroll-anim mb-4 event-item-previous {{ $index >= 6 ? 'd-none' : '' }}">
                                <div class="blog-thumb">
                                    <a href="{{ $eventLink }}">
                                        <img src="{{ $imgUrl }}" alt="{{ $title }}">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <div class="title-area">
                                        <h3 class="title">
                                            <a href="{{ $eventLink }}">{!! $title !!}</a>
                                        </h3>
                                        @if ($descText)
                                            <p class="event-desc mt-2 mb-3"
                                                style="color: #666; font-size: 14px; line-height: 1.5;">{!! $descText !!}
                                            </p>
                                        @endif
                                        <a class="text-btn" href="{{ $eventLink }}">
                                            <span class="btn-text"><span>Read More</span></span>
                                            <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                                        </a>
                                    </div>
                                    <div class="blog-meta align-items-end">
                                        <div class="blog-date-wrapper text-end">
                                            <h3>{{ $topRightDate }}</h3>
                                            <span class="blog-date">{{ $fullDateRange }}</span>
                                        </div>
                                        <span class="categories text-end">
                                            <i class="fa fa-map-marker-alt"></i>
                                            {{ $locationText }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <p class="text-center py-4">No previous events found.</p>
                        @endforelse
                    </div>

                    <!-- Show More / Show Less Toggle Buttons -->
                    @if (count($previousEvents) > 6)
                        <div class="text-center mt-4">
                            <button id="btn-previous-toggle" class="bg-theme p-3 py-2 border-0 rounded" data-state="more">
                                <span id="txt-previous-toggle" class="text-white">Show More</span>
                            </button>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
    <!-- end: Previous Events Section -->
    <!-- Lightweight JS script for Show More / Show Less logic -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {

            function setupEventToggle(btnId, txtId, itemClass, sectionId) {
                const btn = document.getElementById(btnId);
                const btnTxt = document.getElementById(txtId);
                if (!btn) return;

                let visibleCount = 6;
                const step = 6;
                const allItems = document.querySelectorAll('.' + itemClass);

                btn.addEventListener('click', function() {
                    if (btn.getAttribute('data-state') === 'more') {
                        visibleCount += step;

                        allItems.forEach((item, index) => {
                            if (index < visibleCount) {
                                item.classList.remove('d-none');
                            }
                        });

                        if (visibleCount >= allItems.length) {
                            btnTxt.innerText = "Show Less";
                            btn.setAttribute('data-state', 'less');
                        }
                    } else {
                        visibleCount = 6;
                        allItems.forEach((item, index) => {
                            if (index >= 6) {
                                item.classList.add('d-none');
                            }
                        });

                        btnTxt.innerText = "Show More";
                        btn.setAttribute('data-state', 'more');

                        const section = document.getElementById(sectionId);
                        if (section) {
                            section.scrollIntoView({
                                behavior: 'smooth'
                            });
                        }
                    }
                });
            }

            // Initialize both sections
            setupEventToggle('btn-upcoming-toggle', 'txt-upcoming-toggle', 'event-item-upcoming',
                'upcoming-events-list');
            setupEventToggle('btn-previous-toggle', 'txt-previous-toggle', 'event-item-previous',
                'previous-events-list');
        });
    </script>

@endsection

@section('title', 'Spedition India | News & Events')

@push('seo-schema')
    @php
        $schemaData = [
            '@context' => 'https://schema.org',
            '@type' => 'CollectionPage',
            '@id' => url('news-events') . '#webpage',
            'url' => url('news-events'),
            'name' => 'News & Events | Spedition India',
            'isPartOf' => [
                '@id' => url('/') . '#website',
            ],
            'about' => [
                '@id' => url('/') . '#organization',
            ],
        ];
    @endphp
@endpush
