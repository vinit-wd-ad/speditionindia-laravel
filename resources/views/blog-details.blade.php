@extends('layouts.main')

@section('content')

    @php
        $title = $post['title']['rendered'] ?? 'Untitled';
        $content = $post['content']['rendered'] ?? '';

        $image = $post['_embedded']['wp:featuredmedia'][0]['source_url'] ?? null;

        $author = $post['_embedded']['author'][0]['name'] ?? 'Admin';
        $postDate = \Carbon\Carbon::parse($post['date'])->format('F d, Y');
    @endphp

    <!-- Breadcrumb Section -->
    <section class="tj-page-header rounded-0" data-bg-image="{{ asset('web/images/hero/12.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tj-page-header-content text-center">
                        <div class="tj-page-link">
                            <span><i class="tji-home"></i></span>
                            <span>
                                <a href="{{ url('/') }}">Home</a>
                            </span>
                            <span><i class="tji-arrow-right"></i></span>
                            <span>
                                <span id="header-title">{!! $title !!}</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end: Breadcrumb Section -->

    <!-- start: Blog Section -->
    <section class="tj-blog-section section-gap slidebar-stickiy-container">
        <div class="container">
            <div class="row row-gap-5">
                <div class="col-lg-8">
                    <div class="blog-details-wrapper">
                        @if ($image)
                            <div class="blog-thumb mb-4">
                                <img src="{{ $image }}" alt="{!! strip_tags($title) !!}" class="img-fluid rounded"
                                    style="width: 100%;">
                            </div>
                        @endif
                        <div class="blog-meta mb-3">
                            <span><i class="tji-user"></i> By <strong>{{ $author }}</strong></span> |
                            <span><i class="tji-calendar"></i> <span>{{ $postDate }}</span></span>
                        </div>

                        <div class="blog-content">
                            {!! $content !!}
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4">
                    <div class="tj-main-sidebar slidebar-stickiy">
                        <div class="tj-sidebar-widget tj-recent-posts wow fadeInUp" data-wow-delay=".3s">
                            <h4 class="widget-title">Related post</h4>
                            <ul>
                                @forelse($recentPosts as $recent)
                                    @php
                                        $rTitle = $recent['title']['rendered'] ?? 'Untitled';
                                        $rLink = route('blogs.show', $recent['slug']);
                                        $rImage =
                                            $recent['_embedded']['wp:featuredmedia'][0]['source_url'] ??
                                            'https://via.placeholder.com/150';
                                        $rDate = \Carbon\Carbon::parse($recent['date'])->format('d M Y');
                                    @endphp
                                    <li>
                                        <div class="post-thumb">
                                            <a href="{{ $rLink }}"><img src="{{ $rImage }}"
                                                    alt="{!! strip_tags($rTitle) !!}"></a>
                                        </div>
                                        <div class="post-content">
                                            <h6 class="post-title">
                                                <a href="{{ $rLink }}">{!! $rTitle !!}</a>
                                            </h6>
                                            <div class="blog-meta">
                                                <ul>
                                                    <li>{{ strtoupper($rDate) }}</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                @empty
                                    <li>
                                        <p class="p-2">No related posts found.</p>
                                    </li>
                                @endforelse
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end: Blog Section -->

@endsection

@section('title', 'Spedition India | ' . $title)
