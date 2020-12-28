<!DOCTYPE html>
<html dir="rtl">
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('seller/icon/caf67ad9.ico') }}" type="image/icon">
    <link rel="stylesheet" href="{{ asset('seller/css/select2.css') }}">
    <script src="{{ asset('seller/js/jquery.min.js') }}"></script>
    @yield('head')
</head>
<body cz-shortcut-listen="true">
<div class="c-new-login">
    @yield('content')
</div>
</body>
</html>
