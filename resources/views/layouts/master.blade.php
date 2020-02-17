<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="{{ setting('seo.seo_description') ?? '' }}">
    <meta name="keywords" content="{{ setting('seo.meta_keyword') ?? ''}}">
    <meta name="author" content="{{ setting('seo.web_author') ?? '' }}">
    <link rel="icon" href="{{ Voyager::image(setting('site.favicon')) ?? '' }}" type="image/png" sizes="128x128">
    <title>
        @hasSection('pageTitle')
            @yield('pageTitle') | {{ setting('site.title') ?? ''}}
        @else
            {{ setting('site.title')  ?? ''}}
        @endif
    </title>

    <!-- Fonts -->

    <!-- Styles -->
    @stack('style')
</head>
<body class="@hasSection('bodyClass'){{$bodyClass}}@endif">
    <div id="app">
        @yield('content')
    </div>
    <!-- Scripts -->

    @stack('script')
</body>
</html>
