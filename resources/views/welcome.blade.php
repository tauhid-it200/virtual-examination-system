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
        <link type="text/css" href="{{asset("public/admin/vendor/bootstrap/css/bootstrap.min.css")}}" rel="stylesheet">
        <link type="text/css" href="{{asset("public/admin/vendor/font-awesome/css/font-awesome.min.css")}}" rel="stylesheet">
        <link type="text/css" href="{{asset("public/css/app.css")}}" rel="stylesheet">

        <!-- Scripts -->
        <script>
            window.Laravel = <?php
echo json_encode([
    'csrfToken' => csrf_token(),
]);
?>
        </script>
    </head>
    <body>
        <div id="wrapper" class="center-block">
            <nav class="navbar navbar-inverse navbar-static-top" role="navigation" style="height: 100px; background-color: #003333;">
                <div class="container">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="{{ url('/') }}">
                            <h3 style="color: #ffffff;">Virtual Examination System</h3>
                        </a>
                    </div>
                </div>
            </nav>
            <div class="container">
                <div class="row">
                    <div class="col-lg-offset-2 col-lg-8 text-center">
                        <h1>WELCOME</h1>
                        <br>
                        <br>
                        <br>
                        <br>
                        <a href="{{url('/login')}}" class="btn btn-primary btn-lg">Login as USER<span class="fa fa-user fa-fw"></span></a>
                        <a href="{{url('/admin-login')}}" class="btn btn-danger btn-lg">Login as ADMIN<span class="fa fa-user-secret fa-fw"></span></a>
                    </div>
                </div>
            </div>
        </div>

        <script type="text/javascript" src="{{asset("public/admin/vendor/jquery/jquery.min.js")}}"></script>
        <script src="{{asset("public/admin/vendor/bootstrap/js/bootstrap.min.js")}}"></script>
    </body>
</html>