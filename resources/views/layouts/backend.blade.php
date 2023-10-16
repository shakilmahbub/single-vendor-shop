<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ env('APP_NAME') }} - @yield('title')</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
    <link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png">

    @include('backend.particles.headerscripts')
</head>

<body>
@include('backend.particles.sidebar')
<!-- Right Panel -->
<div id="right-panel" class="right-panel">
@include('backend.particles.header')
<!-- Content -->
@yield('content')
<!-- /.content -->
    <div class="m-alert" id="notification_container">
        @isset($success)
            <?php $message = $success ?>
            <div class="alert alert-success">
                <h7>{{ $message }}</h7>
                <script>
                    removeAlert();
                </script>
            </div>
        @endisset

        @isset($error)
            <?php $message = $error ?>
            <div class="alert alert-danger">
                <h7>{{ $message }}</h7>
                <script>
                    removeAlert();
                </script>
            </div>
        @endisset

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <h7>{{ $message }}</h7>
                <script>
                    removeAlert();
                </script>
            </div>
        @endif
        @if ($message = Session::get('error'))
            <div class="alert alert-danger">
                <h7>{{ $message }}</h7>
                <script>
                    removeAlert();
                </script>
            </div>
        @endif

        @foreach ($errors->all() as $error)
            <div class="alert alert-danger">
                <h7>{{ $error }}</h7>
                <script>
                    removeAlert();
                </script>
            </div>
        @endforeach
    </div>
    <div class="clearfix"></div>
    <!-- Footer -->
@include('backend.particles.footer')
<!-- /.site-footer -->
</div>
<!-- /#right-panel -->

@include('backend.particles.footerscripts')
@yield('scripts')
</body>
</html>
