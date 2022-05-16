@extends('vendor.installer.layouts.master')

@section('template_title')
    {{ trans('installer_messages.permissions.templateTitle') }}
@endsection

@section('title')
    {{ trans('installer_messages.permissions.title') }}
{{--    <i class="fa fa-key fa-fw" aria-hidden="true"></i>--}}
@endsection

@section('container')

    <ul class="list">
        @foreach($permissions['permissions'] as $permission)
        <li class="list__item list__item--permissions {{ $permission['isSet'] ? 'success' : 'error' }}">
            {{ $permission['folder'] }}
            <span>
                <i class="fa fa-fw fa-{{ $permission['isSet'] ? 'check-circle-o' : 'exclamation-circle' }}"></i>
                {{ $permission['permission'] }}
            </span>
        </li>
        @endforeach
    </ul>

    @if ( ! isset($permissions['errors']))
        <div class="buttons" dir="rtl">
            <a href="{{ route('LaravelInstaller::environment') }}" class="button">
                <i class="fa fa-angle-right fa-fw" aria-hidden="true"></i>
                {{ trans('installer_messages.permissions.next') }}
            </a>
        </div>
    @endif

@endsection
