<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Chimptools.eu">
    <meta name="keywords" content="mailchimp, mandrill, mail, tools, sync, backups, versioning, api, copy, transfer">
    <meta name="author" content="vehar.eu">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title> @yield('title') </title>
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('favicons/apple-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset('favicons/apple-icon-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('favicons/apple-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('favicons/apple-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('favicons/apple-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('favicons/apple-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('favicons/apple-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('favicons/apple-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('favicons/apple-icon-180x180.png')}}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{asset('favicons/android-icon-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('favicons/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('favicons/favicon-96x96.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('favicons/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('favicons/manifest.json')}}">

    <!-- Start CSS -->
    <link href="{{ asset('assets/plugins/switchery/switchery.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/flag-icon.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">

@yield('style')

<!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- End CSS -->
</head>
<body class="vertical-layout">
<!-- End Infobar Setting Sidebar -->
<!-- Start Containerbar -->
<div id="containerbar">
    <!-- Start Leftbar -->
@include('layouts.leftbar')
<!-- End Leftbar -->
    <!-- Start Rightbar -->
@include('layouts.rightbar')
@yield('content')
<!-- End Rightbar -->
</div>
<!-- End Containerbar -->
<!-- Start JS -->
<script src="{{ asset('js/bootstrap.js') }}"></script>

{{--<script src="{{ asset('assets/js/jquery.min.js') }}"></script>--}}
{{--<script src="{{ asset('assets/js/popper.min.js') }}"></script>--}}
{{--<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>--}}
<script src="{{ asset('assets/js/modernizr.min.js') }}" defer></script>
<script src="{{ asset('assets/js/detect.js') }}" defer></script>
<script src="{{ asset('assets/js/jquery.slimscroll.js') }}" defer></script>
<script src="{{ asset('assets/js/vertical-menu.js') }}" defer></script>
<script src="{{ asset('assets/plugins/switchery/switchery.min.js') }}" defer></script>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('assets/js/core.js') }}" defer></script>

@yield('script')
<!-- Core JS -->
<!-- End JS -->


@if(session("info"))
    <script type="text/javascript" defer>
      toastr.info("{{ session("info")}}");
    </script>
@endif
@if(session("error"))
    <script type="text/javascript" defer>
      toastr.error("{{ session("error") }}");
    </script>
@endif
@if(session("warn"))
    <script type="text/javascript" defer>
      toastr.warning("{{ session("warn") }}");
    </script>
@endif
@if(session("success"))
    <script type="text/javascript" defer>
      toastr.success("{{ session("success") }}");
    </script>
@endif

</body>
</html>
