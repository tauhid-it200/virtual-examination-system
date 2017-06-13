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
        <link type="text/css" href="{{asset("public/admin/vendor/font-awesome/css/font-awesome.min.css")}}" rel="stylesheet">
        <link type="text/css" href="{{asset("public/css/app.css")}}" rel="stylesheet"/>

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
            <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
                <div class="container-fluid" style="height: 100px; background-color: #003333;">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="{{ url('/') }}" style="padding-top: 15px; padding-left: 50px;">
                            <p class="lead" style="color: #ffffff;">Virtual Examination System</p>
                        </a>
                    </div>
                </div>
            </nav>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        @yield('content')
                    </div>
                </div>
            </div>


        </div>

        <!-- Scripts -->
        <script type="text/javascript" src="{{asset("public/admin/vendor/bootstrap/js/bootstrap.min.js")}}"></script>
        <script type="text/javascript" src="{{asset("public/admin/vendor/jquery/jquery.min.js")}}"></script>
        <!--<script type="text/javascript" src="{{asset("public/js/app.js")}}"></script>-->
    </body>
</html>
