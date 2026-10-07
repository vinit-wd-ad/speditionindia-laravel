@extends('layouts.main')

@section('content')

    @include('includes.feature-banner', [
        'title' => 'Our Blogs',
        'image' => 'web/images/hero/blogs.jpg',
    ])

    <!-- start: Blog Section -->
    <section class="tj-blog-section sec-gap">
        <div class="container">
            <div class="row row-gap-4">

                @if (isset($error))
                    <div class="col-12 text-center text-danger">
                        <p>{{ $error }}</p>
                    </div>
                @endif

                <!-- Blog Grid Loop -->
                @forelse($posts as $post)
                    @php
                        $title = $post['title']['rendered'] ?? 'Untitled';
                        $slug = $post['slug'] ?? '#';
                        $link = url('blog/' . $slug);

                        $image =
                            $post['_embedded']['wp:featuredmedia'][0]['source_url'] ??
                            'https://via.placeholder.com/768x435';

                        $postDate = \Carbon\Carbon::parse($post['date']);
                        $dateNum = $postDate->format('d');
                        $monthName = $postDate->format('M');

                        $author = $post['_embedded']['author'][0]['name'] ?? 'Admin';
                    @endphp

                    <div class="col-xl-4 col-md-6 scroll-anim-right">
                        <div class="blog-item">
                            <div class="blog-thumb">
                                <a href="{{ $link }}"><img src="{{ $image }}" alt="{{ $title }}"></a>
                                <div class="blog-date">
                                    <span class="date">{{ $dateNum }}</span>
                                    <span class="month">{{ $monthName }}</span>
                                </div>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <span>By <a href="{{ $link }}">{{ $author }}</a></span>
                                </div>
                                <h4 class="title">
                                    <a href="{{ $link }}">{!! $title !!}</a>
                                </h4>
                                <a class="text-btn" href="{{ $link }}">
                                    <span class="btn-text"><span>Read More</span></span>
                                    <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    @if (!isset($error))
                        <div class="col-12 text-center">
                            <p>No blogs found.</p>
                        </div>
                    @endif
                @endforelse

            </div>

            <!-- Dynamic Pagination -->
            @if ($totalPages > 1)
                @php
                    $maxVisiblePages = 5;
                    $startPage = max(1, $currentPage - floor($maxVisiblePages / 2));
                    $endPage = $startPage + $maxVisiblePages - 1;

                    if ($endPage > $totalPages) {
                        $endPage = $totalPages;
                        $startPage = max(1, $endPage - $maxVisiblePages + 1);
                    }
                @endphp

                <div class="tj-pagination d-flex justify-content-center mt-5">
                    <ul>
                        @if ($currentPage > 1)
                            <li>
                                <a class="prev page-numbers"
                                    href="{{ route('blogs', ['page' => $currentPage - 1]) }}">
                                    <i class="tji-arrow-left-long"></i>
                                </a>
                            </li>
                        @endif

                        @if ($startPage > 1)
                            <li><a class="page-numbers" href="{{ route('blogs', ['page' => 1]) }}">01</a></li>
                            @if ($startPage > 2)
                                <li><span class="page-numbers dots">...</span></li>
                            @endif
                        @endif

                        @for ($i = $startPage; $i <= $endPage; $i++)
                            @php $pageFormatted = sprintf("%02d", $i); @endphp
                            @if ($i == $currentPage)
                                <li>
                                    <span aria-current="page" class="page-numbers current">{{ $pageFormatted }}</span>
                                </li>
                            @else
                                <li>
                                    <a class="page-numbers"
                                        href="{{ route('blogs', ['page' => $i]) }}">{{ $pageFormatted }}</a>
                                </li>
                            @endif
                        @endfor

                        @if ($endPage < $totalPages)
                            @if ($endPage < $totalPages - 1)
                                <li><span class="page-numbers dots">...</span></li>
                            @endif
                            <li>
                                <a class="page-numbers" href="{{ route('blogs', ['page' => $totalPages]) }}">
                                    {{ sprintf('%02d', $totalPages) }}
                                </a>
                            </li>
                        @endif

                        @if ($currentPage < $totalPages)
                            <li>
                                <a class="next page-numbers"
                                    href="{{ route('blogs', ['page' => $currentPage + 1]) }}">
                                    <i class="tji-arrow-right-long"></i>
                                </a>
                            </li>
                        @endif
                    </ul>
                </div>
            @endif

        </div>
    </section>
    <!-- end: Blog Section -->

@endsection

@section('title', 'Spedition India | Blogs')

@push('seo-schema')
    @php
        $schemaData = [
            '@context' => 'https://schema.org',
            '@type' => 'Blog',
            '@id' => url('blogs') . '#blog',
            'url' => url('blogs'),
            'name' => 'Spedition India Blogs',
            'publisher' => [
                '@id' => url('/') . '#organization',
            ],
        ];
    @endphp
@endpush
