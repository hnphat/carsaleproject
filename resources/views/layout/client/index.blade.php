<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8" />
    <title>
        @yield('title')
    </title>
    <base href="{{asset('')}}" />
    <link rel="shortcut icon" href="images/header/favicon.ico"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}" />
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>       
        @font-face {
            font-family: HyundaiSansHeadBold;
            src: url('fonts/HyundaiSansHead-Bold.otf');
        }

        @font-face {
            font-family: HyundaiOfficeBold;
            src: url('fonts/HyundaiSansText-Bold.otf');
        }

        @font-face {
            font-family: HyundaiOfficeRegular;
            src: url('fonts/HyundaiSansText-Regular.otf');
        }
        
        .hyundai-headFont {
            font-family: "HyundaiSansHeadBold", cursive, sans-serif;
        }

        .hyundai-normalfont {
            font-family: "HyundaiOfficeRegular", cursive, sans-serif;
        }

        .hyundai-boldfont {
            font-family: "HyundaiOfficeBold", cursive, sans-serif;
        }
    </style>
    <link rel="stylesheet" href="{{asset('')}}{{mix('css/appclient.css')}}" />
    @yield('local_css')
</head>
<body>
@include('layout.client.header')
@yield('content')
@include('layout.client.footer')
<!-- <script type="text/javascript">
    var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
    (function () {
        var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/5ae0471b5f7cdf4f05339854/default';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
</script> -->
<script src="{{asset('')}}{{mix('js/appclient.js')}}"></script>
@yield('local_script')
</body>
</html>