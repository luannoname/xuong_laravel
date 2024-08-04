
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')</title>

    <link href="{{ url("admin/assets") }}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ url("admin/assets") }}/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="{{ url("admin/assets") }}/css/animate.css" rel="stylesheet">
    <link href="{{ url("admin/assets") }}/css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">

    @yield('content')

    <!-- Mainly scripts -->
    <script src="{{ url("admin/assets") }}/js/jquery-3.1.1.min.js"></script>
    <script src="{{ url("admin/assets") }}/js/bootstrap.min.js"></script>

</body>

</html>
