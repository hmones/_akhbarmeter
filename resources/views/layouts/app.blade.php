<! DOCTYPE html>
<html {% if activeLocale=='ar'%} dir="rtl" lang="ar" {% endif %}>
<head>
    @include('partials.layouts.head')
    {% component 'SeoFeatures' %}
</head>
<body class="pushable">
<!-- Nav -->
@include('partials.layouts.nav')
@yield('sidebar')
<div class="pusher">
    {% partial "social-media" %}
    {% partial "header" %}
    <!-- Content -->
    @yield('content')
    {% partial "footer" %}
</div>
<script type="text/javascript" src="{{asset('dist/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('dist/semantic.min.js')}}"></script>
{% partial 'layouts/scripts-track'%}
@stack('scripts')
</body>
</html>