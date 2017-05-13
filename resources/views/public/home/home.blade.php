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
        <link href="{{asset("public/admin/vendor/bootstrap/css/bootstrap.min.css")}}" rel="stylesheet">
        <!--<link href="/admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">-->

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

        <nav class="navbar navbar-default navbar-static-top center-block" style="height: 100px; background-color: #330000;">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <h3 style="color: wheat;">Virtual Examination System</h3>
                    </a>
                </div>
            </div>
        </nav>

        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <h1 class="text-center">Welcome</h1>
                    <br>
                    <h3>Please <a href="{{url("/login")}}" class="btn btn-primary">Login</a> to participate in exam</h3>
                </div>
            </div>
        </div>

    </body>
</html>