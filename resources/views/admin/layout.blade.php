<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="admin-themes-lab">
    <meta name="author" content="Mega Model">

    <link rel="shortcut icon" href="/assets/images/favicon.png" type="image/png">
    <title>Painel de Controle</title>

    <link href="http://fonts.googleapis.com/css?family=Nothing+You+Could+Do" rel="stylesheet" type="text/css">
    <link href="/assets/plugins/datatables/dataTables.min.css" rel="stylesheet">
    <link href="/assets/css/style.css" rel="stylesheet"> <!-- MANDATORY -->
    <link href="/assets/css/theme.css" rel="stylesheet"> <!-- MANDATORY -->
    <link href="/assets/css/ui.css" rel="stylesheet"> <!-- MANDATORY -->
    <link href="/assets/admin/layout1/css/layout.css" rel="stylesheet">
    <link href="/assets/css/custom.css" rel="stylesheet">

    <!-- BEGIN PAGE STYLE -->
    <link href="/assets/plugins/metrojs/metrojs.min.css" rel="stylesheet">
    <link href="/assets/plugins/metrojs/metrojs.min.css" rel="stylesheet">

    <!-- END PAGE STYLE -->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="/assets/plugins/modernizr/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <![endif]-->

    @yield('extra_head')

</head>

<!-- BEGIN BODY -->
<body class="fixed-topbar color-default theme-sdtd">
<section>

    @include('admin.partials.sidebar')

    <div class="main-content">

        @include('admin.partials.topbar')

        @yield('page-content')

    </div>

</section>

<!-- Preloader -->
<div class="loader-overlay">
    <div class="spinner">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
    </div>
</div>

<a href="#" class="scrollup"><i class="fa fa-angle-up"></i></a>

@yield('extra_body')

<script src="/assets/admin/layout1/js/layout.js"></script>

</body>
</html>