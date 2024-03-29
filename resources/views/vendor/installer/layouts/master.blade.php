<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@if (trim($__env->yieldContent('template_title')))@yield('template_title') | @endif {{ trans('installer_messages.title') }}</title>

        <link rel="icon" type="image/png" href="{{ !is_null($favicon_image)? $site_url . '/' . $favicon_image->path . '/'. $favicon_image->name : '' }}"/>
        <link href="{{ asset('installer/css/style.min.css') }}" rel="stylesheet"/>
        @yield('style')
        <script>
            window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
            ]); ?>
        </script>
    </head>
    <body>
        <div class="master">
            <div class="box">
                <div class="header">
                    <h1 class="header__title">@yield('title')</h1>
                </div>
                <ul class="step" dir="rtl">
                    <li class="step__divider"></li>
                    <li class="step__item {{ isActive('LaravelInstaller::final') }}">
                        <i class="step__icon" aria-hidden="true">
                            <img src="{{ asset('installer/img/icons/driver.png') }}" width="20px">
                        </i>
                    </li>
                    <li class="step__divider"></li>
                    <li class="step__item {{ isActive('LaravelInstaller::environment')}} {{ isActive('LaravelInstaller::environmentWizard')}} {{ isActive('LaravelInstaller::environmentClassic')}}">
                        @if(Request::is('install/environment') || Request::is('install/environment/wizard') || Request::is('install/environment/classic') )
                            <a href="{{ route('LaravelInstaller::environment') }}">
                                <i class="step__icon" aria-hidden="true">
                                    <img src="{{ asset('installer/img/icons/settings.png') }}" width="20px">
                                </i>
                            </a>
                        @else
                            <i class="step__icon" aria-hidden="true">
                                <img src="{{ asset('installer/img/icons/settings.png') }}" width="20px">
                            </i>
                        @endif
                    </li>
                    <li class="step__divider"></li>
                    <li class="step__item {{ isActive('LaravelInstaller::permissions') }}">
                        @if(Request::is('install/permissions') || Request::is('install/environment') || Request::is('install/environment/wizard') || Request::is('install/environment/classic') )
                            <a href="{{ route('LaravelInstaller::permissions') }}">
                                <i class="step__icon" aria-hidden="true">
                                    <img src="{{ asset('installer/img/icons/key.png') }}" width="20px">
                                </i>
                            </a>
                        @else
                            <i class="step__icon" aria-hidden="true">
                                <img src="{{ asset('installer/img/icons/key.png') }}" width="20px">
                            </i>
                        @endif
                    </li>
                    <li class="step__divider"></li>
                    <li class="step__item {{ isActive('LaravelInstaller::requirements') }}">
                        @if(Request::is('install') || Request::is('install/requirements') || Request::is('install/permissions') || Request::is('install/environment') || Request::is('install/environment/wizard') || Request::is('install/environment/classic') )
                            <a href="{{ route('LaravelInstaller::requirements') }}">
                                <i class="step__icon" aria-hidden="true">
                                    <img src="{{ asset('installer/img/icons/monitor.png') }}" width="20px">
                                </i>
                            </a>
                        @else
                            <i class="step__icon" aria-hidden="true">
                                <img src="{{ asset('installer/img/icons/monitor.png') }}" width="20px">
                            </i>
                        @endif
                    </li>
                    <li class="step__divider"></li>
                    <li class="step__item {{ isActive('LaravelInstaller::welcome') }}">
                        @if(Request::is('install') || Request::is('install/requirements') || Request::is('install/permissions') || Request::is('install/environment') || Request::is('install/environment/wizard') || Request::is('install/environment/classic') )
                            <a href="{{ route('LaravelInstaller::welcome') }}">
                                <i class="step__icon" aria-hidden="true">
                                    <img src="{{ asset('installer/img/icons/home.png') }}" width="20px">
                                </i>
                            </a>
                        @else
                            <i class="step__icon" aria-hidden="true">
                                <img src="{{ asset('installer/img/icons/home.png') }}" width="20px">
                            </i>
                        @endif
                    </li>
                    <li class="step__divider"></li>
                </ul>
                <div class="main">
                    @if (session('message'))
                        <p class="alert text-center">
                            <strong>
                                @if(is_array(session('message')))
                                    {{ session('message')['message'] }}
                                @else
                                    {{ session('message') }}
                                @endif
                            </strong>
                        </p>
                    @endif
                    @if(session()->has('errors'))
                        <div class="alert alert-danger" id="error_alert" dir="rtl">
{{--                            <button type="button" class="close" id="close_alert" data-dismiss="alert" aria-hidden="true">--}}
{{--                                 <i class="fa fa-close" aria-hidden="true"></i>--}}
{{--                            </button>--}}
{{--                            <h6>--}}
{{--                                <i class="fa fa-fw fa-exclamation-triangle" aria-hidden="true"></i>--}}
{{--                                {{ trans('installer_messages.forms.errorTitle') }}--}}
{{--                            </h6>--}}
                            <ul style="margin-top: 10px;">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @yield('container')
                </div>
            </div>
        </div>
        @yield('scripts')
        <script type="text/javascript">
            var x = document.getElementById('error_alert');
            var y = document.getElementById('close_alert');
            y.onclick = function() {
                x.style.display = "none";
            };
        </script>
    </body>
</html>
