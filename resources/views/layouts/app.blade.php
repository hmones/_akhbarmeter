<! DOCTYPE html>
<html @if(app()->isLocale('ar')) dir="rtl" lang="ar" @endif>
<head>
    <title>@yield('title', 'Page Title') - {{trans('navigation.header')}}</title>
    @include('partials.layouts.head')
</head>
<body class="pushable">
@include('partials.layouts.navigation')
@yield('sidebar')
<div class="pusher">
    @include('partials.layouts.socialmedia')
    @include('partials.layouts.header')
    <br><br><br>
    <div class="ui container">
        @yield('content')
    </div>
    @include('partials.layouts.footer')
</div>
<script type="text/javascript" src="{{asset('dist/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('dist/semantic.min.js')}}"></script>
@include('partials.layouts.tracking')
@stack('scripts')
</body>
</html>
