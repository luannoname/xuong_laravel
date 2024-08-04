<!DOCTYPE html>
<html lang="zxx">

<head>
    @include('client.component.head')
</head>

<body>
    <div class="header">
        @include('client.component.header')
    </div>

    <div class="body">
        @yield('content')
    </div>

    <div class="footer">
        @include('client.component.footer')
    </div>
</body>
@include('client.component.script')
@yield('js')

</html>

    