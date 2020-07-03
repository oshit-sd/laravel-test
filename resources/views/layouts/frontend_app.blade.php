<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}">

    <title>Tiny Content Management System</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('assets/frontend/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{ asset('assets/frontend/css/blog-home.css') }}" rel="stylesheet">
    <!-- Font Awesome Ionicons -->
    <link rel="stylesheet" href="{{ asset('assets') }}/icons/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/icons/Ionicons/css/ionicons.min.css">
</head>

<body>
    <!-- Navigation -->
    @include('layouts.partials.frontend.nav')

    <!-- Page Content -->
    <div class="container" style="min-height:600px;">
        @yield('content')
    </div>
    <!-- /.container -->

    <!-- Footer -->
    @include('layouts.partials.frontend.footer')


    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('assets/frontend/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>