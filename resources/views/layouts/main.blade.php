<!doctype html>
<html class="no-js" lang="en">

<head>
    @include('layouts.head')
    <title>{!! html_entity_decode(strip_tags(trim($__env->yieldContent('title', 'Spedition India'))), ENT_QUOTES, 'UTF-8') !!}</title>
    <meta name="description" content="@yield('desc', '')">
    @stack('seo-schema')
    @isset($schemaData)
        <script type="application/ld+json">
            {!! json_encode($schemaData, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
        </script>
    @endisset
    <script>
        window.baseUrl = "{{ asset('web/') }}/";
    </script>
</head>

<body>
    @include('layouts.header')

    <div id="smooth-wrapper">
        <div id="smooth-content">
            <main id="primary" class="site-main">

                @yield('content')

            </main>

            @include('layouts.footer')
        </div>
    </div>
    <div id="teamModal" class="modal">
        <div class="modal-content" style="min-width: 80%; border: none; margin-top: 5%;">
            <span class="close-btn-products">&times;</span>
            <div class="row">
                <div class="col-md-5">
                    <img src="" alt="" id="teamMemberImg" class="w-100">
                </div>
                <div class="col-md-7 d-flex flex-column justify-content-center">
                    <h3 id="teamMemberTitle" class="my-2"></h3>
                    <p id="teamMemberDesignation" class="mb-4 text-theme"></p>
                    <p id="teamMemberDesc"></p>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.script')
</body>

</html>
