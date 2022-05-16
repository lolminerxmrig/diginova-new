@extends('vendor.installer.layouts.master')

@section('template_title')
    {{ trans('installer_messages.welcome.templateTitle') }}
@endsection

@section('title')
    {{ trans('installer_messages.welcome.title') }}
@endsection

@section('container')
    <div dir="rtl">
        <p class="text-center">
          {{ trans('installer_messages.welcome.message') }}
        </p>
        <p class="text-center">
          <a href="{{ route('LaravelInstaller::requirements') }}" class="button">
              <i class="fa fa-angle-left fa-fw" aria-hidden="true"></i>
              {{ trans('installer_messages.welcome.next') }}
          </a>
        </p>
    </div>
@endsection
