@extends('vendor.installer.layouts.master')

@section('template_title')
    {{ trans('installer_messages.environment.menu.templateTitle') }}
@endsection

@section('title')
    {!! trans('installer_messages.environment.menu.title') !!}
    <i class="fa fa-cog fa-fw" aria-hidden="true"></i>
@endsection

@section('container')
    <div dir="rtl">
        <p class="text-center">
            {!! trans('installer_messages.environment.menu.desc') !!}
        </p>
        <div class="buttons">
            <a href="{{ route('LaravelInstaller::environmentWizard') }}" class="button button-wizard">
                {{ trans('installer_messages.environment.menu.wizard-button') }}
                <i class="fa fa-sliders fa-fw" aria-hidden="true"></i>
            </a>
            <a href="{{ route('LaravelInstaller::environmentClassic') }}" class="button button-classic">
                {{ trans('installer_messages.environment.menu.classic-button') }}
                <i class="fa fa-code fa-fw" aria-hidden="true"></i>
            </a>
        </div>
    </div>
@endsection
