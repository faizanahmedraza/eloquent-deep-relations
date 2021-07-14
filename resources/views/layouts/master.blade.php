<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{env('APP_NAME')}}</title>
    <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css">
    @stack('styles')
</head>
<body>
@yield('content')
<script src="/assets/js/bootstrap.bundle.min.js"></script>
@stack('scripts')
</body>
</html>