<!DOCTYPE html>
<html>

<head data-baseurl="{{URL::to('/')}}">
    <meta charset="utf-8">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Oshit Sutra Dar</title>
    <!-- Font Awesome Ionicons -->
    <link rel="stylesheet" href="{{ asset('assets') }}/icons/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/icons/Ionicons/css/ionicons.min.css">
    <!-- Styles -->
    <link href="{{ asset('css/all.css') }}" rel="stylesheet">

    <!-- PNotify -->
    <link rel="stylesheet" href="{{ asset('assets/backend/PNotify/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/backend/PNotify/animate.css') }}">
    <link href="{{ asset('assets/backend/PNotify/PNotifyBrightTheme.css') }}" rel="stylesheet" type="text/css" />

    <!-- JS Files -->
    <script src="{{ asset('assets') }}/js/jquery.min.js"></script>
    <script defer src="{{ asset('assets') }}/js/bootstrap.min.js"></script>
    <script defer src="{{ asset('assets') }}/js/jquery.slimscroll.min.js"></script>
    <script defer src="{{ asset('assets') }}/js/fastclick.js"></script>
    <script defer src="{{ asset('assets') }}/js/adminlte.min.js"></script>
    <script defer src="{{ asset('assets') }}/js/demo.js"></script>

    <!-- PNotify -->
    <script src="{{ asset('assets/backend/PNotify/PNotify.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/backend/PNotify/animate.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/backend/PNotify/confirm.js') }}" type="text/javascript"></script>

</head>

<body class="hold-transition skin-blue sidebar-mini body">
    <div class="wrapper">
        <!--============ Header start ============-->
        @include('layouts.partials.backend.header')

        <!--============ Leftside start ============-->
        @include('layouts.partials.backend.leftside')

        <div class="content-wrapper">
            <!--============ Breadcrumbs ============-->
            @include('layouts.partials.backend.breadcrumbs')
            <!--============ /Breadcrumbs ============-->

            <!--============ Main content ============-->
            <section class="content">
                @yield('content')
            </section>
            <!--============ /Main content ============-->
        </div>

        <!--============ footer start ============-->
        @include('layouts.partials.backend.footer')
        <!--============ footer end ============-->

        <!-- validaiton, success, error, alert message -->
        @include('message.message-PNotify')
    </div>
</body>

</html>