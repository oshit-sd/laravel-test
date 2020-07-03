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

    <title>LOGIN FOR ADMIN</title>
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
    <script defer src="{{ asset('assets') }}/js/jquery.min.js"></script>
    <script defer src="{{ asset('assets') }}/js/bootstrap.min.js"></script>
    <script defer src="{{ asset('assets') }}/js/jquery.slimscroll.min.js"></script>
    <script defer src="{{ asset('assets') }}/js/fastclick.js"></script>
    <script defer src="{{ asset('assets') }}/js/adminlte.min.js"></script>
    <script defer src="{{ asset('assets') }}/js/demo.js"></script>
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="javascript:void(0)">
                <b>Admin</b>Panel
            </a>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">
            <p class="login-box-msg">Sign in to admin panel</p>
            <form action="{{ route('admin.loginme') }}" method="post">
                @csrf()
                <div class="form-group has-feedback">
                    <input type="email" name="email" class="form-control" placeholder="Email" />
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" name="password" class="form-control" placeholder="Password" />
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row flex justify-content-center">
                    <!-- /.col -->
                    <div class="col-xs-4 flex justify-content-center">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
        </div>
        <!-- /.login-box-body -->
    </div>

    <!-- PNotify -->
    <script src="{{ asset('assets/backend/PNotify/PNotify.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/backend/PNotify/animate.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/backend/PNotify/confirm.js') }}" type="text/javascript"></script>

    <!-- validaiton, success, error, alert message -->
    @include('message.message-PNotify')
</body>

</html>