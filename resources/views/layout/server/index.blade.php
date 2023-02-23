<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    @yield('title')
    <base href="{{asset('')}}" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}" />
    @yield('local_css')
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
    <link rel="stylesheet" href="{{asset('')}}{{mix('css/app.css')}}" />
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
    @include('layout.server.navbar')
    @include('layout.server.menu')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @yield('content_header')
        <section class="content">
        @yield('content')
        </section>
    </div>
    <!-- Content Wrapper. Contains page content -->
    @include('layout.server.footer')
    @include('layout.server.quickbar')
</div>
<!-- ./wrapper -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('dist/js/adminlte.js')}}"></script>
<!-- <script src="{{asset('js/app.js')}}"></script> -->
<script src="{{asset('')}}{{mix('js/app.js')}}"></script>
@yield('local_script')
</body>
</html>