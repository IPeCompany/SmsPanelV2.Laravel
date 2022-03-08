<!doctype html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- This page only for admins and no need to index in search engines -->
    <meta name="robots" content="noindex">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
    <title>{{config('smsirlaravel.title')}}</title>
</head>
<body class="sidebar-mini vh-100" data-scrollbar-auto-hide="n">
<div class="wrapper">
    @include('Smsir::components.menu')
    <div class="content-wrapper">
        @yield('body')
    </div>
</div>
<footer>
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
</footer>
</body>
