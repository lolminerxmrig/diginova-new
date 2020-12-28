<!DOCTYPE html>
<html dir="rtl">
<head>
    <meta charset=UTF-8">
    <title>@yield('title')</title>
    <meta name="robots" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('assets/images/icons/static/files/283b32ca.ico" type="image/icon') }} ">
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('assets/images/icons/iphone-pwa-icon-57.png') }} ">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('assets/images/icons/iphone-pwa-icon-60.png') }} ">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/images/icons/iphone-pwa-icon-72.png') }} ">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/images/icons/iphone-pwa-icon-76.png') }} ">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/images/icons/iphone-pwa-icon-114.png') }} ">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets/images/icons/iphone-pwa-icon-120.png') }} ">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('assets/images/icons/iphone-pwa-icon-144.png') }} ">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('assets/images/icons/iphone-pwa-icon-152.png') }} ">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/icons/iphone-pwa-icon-180.png') }} ">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('assets/images/icons/android-icon-192x192.png') }} ">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/icons/favicon-32x32.png') }} ">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('assets/images/icons/favicon-96x96.png') }} ">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/icons/favicon-16x16.png') }} ">
    <link rel="stylesheet" href="{{ asset('assets/css/customize.css') }} ">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }} ">
    <link rel="stylesheet" href="{{ asset('assets/css/max-height1184px.css') }} " media="screen and (max-height: 1184px)">
    <link rel="stylesheet" href="{{ asset('assets/css/max-width1365px.css') }} " media="screen and (max-width: 1365px)">
    <link rel="stylesheet" href="{{ asset('assets/css/min-width1025px.css') }} " media="screen and (min-width: 1025px)">
    <link rel="stylesheet" href="{{ asset('assets/css/min-width1366px.css') }} " media="screen and (min-width: 1366px)">
    <link rel="stylesheet" href="{{ asset('assets/css/min-width1680px.css') }} " media="screen and (min-width: 1680px)">
    <script src="{{ asset('assets/js/sentry.js') }} "></script>
    @yield('head')
</head>

<body class="is-access-page account-pages" style="" cz-shortcut-listen="true">
<main id="main">

    @if(isset($errors) && ($errors->first()))
    <div id="inline-error" class="c-toast__container js-toast-container">
            <div class="c-toast js-toast">
                <div class="c-toast__text js-toast-text" >
                        {{ $errors->first() }}
                </div>

                <div class="c-toast__btn-container">
                    <button id="inline-error-btn" type="button"class="js-toast-btn o-link o-link--sm o-link--no-border o-btn">
                        متوجه شدم
                    </button>
                </div>
            </div>
    </div>
    @endif

    <div class="semi-modal-layout">
        <section class="o-page o-page--account-box">
            <div class="u-hidden js-invalid-login-message" data-invalid="0">
            </div>
            <div class="c-login__box">
              @yield('content')
            </div>
        </section>
    </div>

    <script>
        function fadeOutEffect() {
            var fadeTarget = document.getElementById("inline-error");
            var fadeEffect = setInterval(function () {
                if (!fadeTarget.style.opacity) {
                    fadeTarget.style.opacity = 1;
                }
                if (fadeTarget.style.opacity > 0) {
                    fadeTarget.style.opacity -= 0.1;
                } else {
                    clearInterval(fadeEffect);
                }
            }, 20);
        }
        document.getElementById("inline-error-btn").addEventListener('click', fadeOutEffect);
    </script>

</main>
</body>
</html>
