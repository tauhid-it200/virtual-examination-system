<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Virtual Examination System</title>

    <!-- Styles -->
    <link type="text/css" href="{{asset("public/admin/vendor/bootstrap/css/bootstrap.min.css")}}" rel="stylesheet"/>
    <link type="text/css" href="{{asset("public/css/app.css")}}" rel="stylesheet"/>
    <link type="text/css" href="{{asset("public/admin/vendor/font-awesome/css/font-awesome.min.css")}}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top" style="height: 100px; background-color: #333333">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{ url('/') }}" style="">
                        <h3 class="text-danger" style="color: #ffffff;">Virtual Examination System</h3>
                    </a>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script type="text/javascript" src="{{asset("public/admin/vendor/bootstrap/js/bootstrap.min.js")}}"></script>
    <script type="text/javascript" src="{{asset("public/js/app.js")}}"></script>
</body>
</html>
