<meta content="text/html; charset=UTF8" http-equiv="content-type">
<meta content="AkhbarMeter" name="author">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<link href="{{ asset('img/logo.png')}}" rel="icon" type="image/png"/>

@stack('styles')

@if(app()->getLocale() === 'ar')
    <link href="{{ asset('dist/semantic.rtl.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/rtl.css') }}" rel="stylesheet">
@else
    <link href="{{ asset('dist/semantic.min.css') }}" rel="stylesheet">
@endif

<link rel="stylesheet" href="{{asset('css/cookieconsent.min.css')}}"/>
<link rel="stylesheet" href="{{asset('compiled/css/theme.css')}}"/>

<link href="{{asset('img/favicon.ico')}}" rel="shortcut icon" type="image/x-icon">
<link href="{{asset('img/favicons/apple-icon-57x57.png')}}" rel="apple-touch-icon" sizes="57x57">
<link href="{{asset('img/favicons/apple-icon-60x60.png')}}" rel="apple-touch-icon" sizes="60x60">
<link href="{{asset('img/favicons/apple-icon-72x72.png')}}" rel="apple-touch-icon" sizes="72x72">
<link href="{{asset('img/favicons/apple-icon-76x76.png')}}" rel="apple-touch-icon" sizes="76x76">
<link href="{{asset('img/favicons/apple-icon-114x114.png')}}" rel="apple-touch-icon" sizes="114x114">
<link href="{{asset('img/favicons/apple-icon-120x120.png')}}" rel="apple-touch-icon" sizes="120x120">
<link href="{{asset('img/favicons/apple-icon-144x144.png')}}" rel="apple-touch-icon" sizes="144x144">
<link href="{{asset('img/favicons/apple-icon-152x152.png')}}" rel="apple-touch-icon" sizes="152x152">
<link href="{{asset('img/favicons/apple-icon-180x180.png')}}" rel="apple-touch-icon" sizes="180x180">
<link href="{{asset('img/favicons/android-icon-192x192.png')}}" rel="icon" sizes="192x192" type="image/png">
<link href="{{asset('img/favicons/favicon-32x32.png')}}" rel="icon" sizes="32x32" type="image/png">
<link href="{{asset('img/favicons/favicon-96x96.png')}}" rel="icon" sizes="96x96" type="image/png">
<link href="{{asset('img/favicons/favicon-16x16.png')}}" rel="icon" sizes="16x16" type="image/png">
<link href="{{asset('img/favicons/manifest.json')}}" rel="manifest">
<meta content="#ffffff" name="msapplication-TileColor">
<meta content="{{ asset('img/favicons/ms-icon-144x144.png')}}" name="msapplication-TileImage">
<meta content="#ffffff" name="theme-color">
<meta content="74NYbxWdMx6SuVA-t8ZCmYZlQZFm-SYVaQZDvxBzRng" name="google-site-verification"/>
<meta content="957356004319479" property="fb:pages"/>
@yield('meta')
