<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ Admin::title() }}</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <link rel="stylesheet" href="{{ admin_asset("/vendor/admin/AdminLTE/bootstrap/css/bootstrap.min.css") }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ admin_asset("/vendor/admin/font-awesome/css/font-awesome.min.css") }}">

    <!-- Theme style -->
    <link rel="stylesheet" href="{{ admin_asset("/vendor/admin/AdminLTE/dist/css/skins/" . config('admin.skin') .".min.css") }}">

    {!! Admin::css() !!}
    <link rel="stylesheet" href="{{ admin_asset("/vendor/admin/laravel-admin/laravel-admin.css") }}">
    <link rel="stylesheet" href="{{ admin_asset("/vendor/admin/nprogress/nprogress.css") }}">
    <link rel="stylesheet" href="{{ admin_asset("/vendor/admin/sweetalert/dist/sweetalert.css") }}">
    <link rel="stylesheet" href="{{ admin_asset("/vendor/admin/nestable/nestable.css") }}">
    <link rel="stylesheet" href="{{ admin_asset("/vendor/admin/toastr/build/toastr.min.css") }}">
    <link rel="stylesheet" href="{{ admin_asset("/vendor/admin/bootstrap3-editable/css/bootstrap-editable.css") }}">
    <link rel="stylesheet" href="{{ admin_asset("/vendor/admin/google-fonts/fonts.css") }}">
    <link rel="stylesheet" href="{{ admin_asset("/vendor/admin/AdminLTE/dist/css/AdminLTE.min.css") }}">

    <!-- REQUIRED JS SCRIPTS -->
    <script src="{{ admin_asset ("/vendor/admin/AdminLTE/plugins/jQuery/jQuery-2.1.4.min.js") }}"></script>
    <script src="{{ admin_asset ("/vendor/admin/AdminLTE/bootstrap/js/bootstrap.min.js") }}"></script>
    <script src="{{ admin_asset ("/vendor/admin/AdminLTE/plugins/slimScroll/jquery.slimscroll.min.js") }}"></script>
    <script src="{{ admin_asset ("/vendor/admin/AdminLTE/dist/js/app.min.js") }}"></script>
    <script src="{{ admin_asset ("/vendor/admin/jquery-pjax/jquery.pjax.js") }}"></script>
    <script src="{{ admin_asset ("/vendor/admin/nprogress/nprogress.js") }}"></script>

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="hold-transition {{config('admin.skin')}} {{join(' ', config('admin.layout'))}}">
<div class="wrapper">

    @include('admin.partials.header')

    @include('admin.partials.sidebar')

    <div class="content-wrapper" id="pjax-container">
        @yield('content')
        {!! Admin::script() !!}
    </div>

    @include('admin.partials.footer')

</div>

<!-- ./wrapper -->

<script>
    function LA() {}
    LA.token = "{{ csrf_token() }}";
</script>

<!-- REQUIRED JS SCRIPTS -->
<script src="{{ admin_asset ("/vendor/admin/nestable/jquery.nestable.js") }}"></script>
<script src="{{ admin_asset ("/vendor/admin/toastr/build/toastr.min.js") }}"></script>
<script src="{{ admin_asset ("/vendor/admin/bootstrap3-editable/js/bootstrap-editable.min.js") }}"></script>
<script src="{{ admin_asset ("/vendor/admin/sweetalert/dist/sweetalert.min.js") }}"></script>
{!! Admin::js() !!}
<script src="{{ admin_asset ("/vendor/admin/laravel-admin/laravel-admin.js") }}"></script>

</body>
</html>
