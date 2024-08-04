
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('admin.component.head')
    @yield('css')
</head>
<body>
    <div id="wrapper">
        @include('admin.component.sidebar')
        
        <div id="page-wrapper" class="gray-bg">
            @include('admin.component.navbar')
            @yield('content')
            @include('admin.component.footer')
        </div>

    </div>
</body>
@include('admin.component.script')
@yield('js')

</html>
