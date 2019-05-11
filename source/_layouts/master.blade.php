<!DOCTYPE html>
<html lang="en">
    <head>
        @if($page->production && $page->gaTrackingId)
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id={{ $page->gaTrackingId }}"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', '{{ $page->gaTrackingId }}');
        </script>
        @endif

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <title>{{ $page->title ? $page->title . ' | ' : '' }}{{ $page->siteName }}</title>

        <link rel="icon" href="/favicon.ico" type="image/x-icon">

        @section('meta')
        <!-- Search Engine -->
        <meta name="description" content="{{ $page->description ?? $page->excerpt ?? $page->siteDescription }}">
        <meta name="image" content="{{ $page->image ? $page->baseUrl . $page->image : $page->baseUrl . '/assets/images/backgrounds/home-bg.jpg' }}">
        <!-- Schema.org for Google -->
        <meta itemprop="name" content="{{ $page->title ? $page->title . ' | ' : '' }}{{ $page->siteName }}">
        <meta itemprop="description" content="{{ $page->description ?? $page->excerpt ?? $page->siteDescription }}">
        <meta itemprop="image" content="{{ $page->image ? $page->baseUrl . $page->image : $page->baseUrl . '/assets/images/backgrounds/home-bg.jpg' }}">
        <!-- Twitter -->
        <meta name="twitter:card" content="summary">
        <meta name="twitter:title" content="{{ $page->title ? $page->title . ' | ' : '' }}{{ $page->siteName }}">
        <meta name="twitter:description" content="{{ $page->description ?? $page->excerpt ?? $page->siteDescription }}">
        <meta name="twitter:site" content="@rick_west8">
        <meta name="twitter:creator" content="@rick_west8">
        <meta name="twitter:image:src" content="{{ $page->image ? $page->baseUrl . $page->image : $page->baseUrl . '/assets/images/backgrounds/home-bg.jpg' }}">
        <!-- Open Graph general (Facebook, Pinterest & Google+) -->
        <meta name="og:title" content="{{ $page->title ? $page->title . ' | ' : '' }}{{ $page->siteName }}">
        <meta name="og:description" content="{{ $page->description ?? $page->excerpt ?? $page->siteDescription }}">
        <meta name="og:image" content="{{ $page->image ? $page->baseUrl . $page->image : $page->baseUrl . '/assets/images/backgrounds/home-bg.jpg' }}">
        <meta name="og:url" content="{{ $page->getUrl() }}">
        <meta name="og:site_name" content="{{ $page->siteName }}">
        <meta name="og:locale" content="en_GB">
        <meta name="og:type" content="website">

        @show

        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    </head>
    <body>
        @yield('body')
        <script src="{{ mix('js/main.js', 'assets/build') }}" type="text/javascript"></script>
    </body>
</html>
