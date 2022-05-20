<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("title")</title>
    @include('layouts.global-styles')
</head>

<body>
    @if (auth()->check())
        @include('admin.partials.header')
    @endif


    @yield('content')

    @include('layouts.global-scripts')

</body>

</html>