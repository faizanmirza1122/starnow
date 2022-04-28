<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    @include('layouts.head')
</head>

<body>

    @if (Route::currentRouteName() != 'placelisting')
    @include('layouts.header')
    @endif

    @yield('content')

    @if (Route::currentRouteName() != 'discover' || Route::currentRouteName() != 'placelisting')
    @include('layouts.footer')
    @endif


    @include('layouts.scripts')

</body>

</html>