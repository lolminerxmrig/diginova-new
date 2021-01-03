@if(auth()->guard('customer')->check())
    {{  'customer loggined' }}
    <a href="{{ route('customer.logout') }}">logout</a>
    {{ auth()->guard('customer')->user()->mobile }}
@else
    not logined
@endif
