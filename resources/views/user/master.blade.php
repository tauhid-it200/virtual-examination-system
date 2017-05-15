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
                    <a class="navbar-brand" href="{{ url('/home') }}">
                        <h3 style="color: wheat;">Virtual Examination System</h3>
                    </a>
                </div>
                <br>
                <br>
                <a class="btn btn-danger pull-right" href="{{ url('/user-logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                <form id="logout-form" action="{{ url('/user-logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </div>
        </nav>

        @yield("content")

    </body>
</html>