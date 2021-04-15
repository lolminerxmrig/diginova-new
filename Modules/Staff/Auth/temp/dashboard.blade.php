<meta name="csrf-token" content="{{ csrf_token() }}">

@if(auth()->guard('staff')->check())
    {{  'staff loggined' }}
    <a href="{{ route('staff.logout') }}">logout</a>
    {{ auth()->guard('staff')->user()->email }}
@endif
