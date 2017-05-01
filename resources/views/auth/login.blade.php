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
        <link href="/admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

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
                    <a class="navbar-brand" href="{{ url('/login') }}">
                        <h3 style="color: wheat;">Virtual Examination System</h3>
                    </a>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="panel panel-default">
                        <div class="panel-heading text-center" style="background-color: #666666;">
                            <h4 class="text-center" style="color: white;">Please Login With Valid Email Address & Password</h4>
                        </div>
                        <div class="panel-body">
                            <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                                {!!Form::open(array("url"=>"/login", "role"=>"form", "method"=>"POST"))!!}
                                <fieldset>
                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <label for="email" class="control-label col-md-4">E-Mail Address</label>
                                        <div class="col-md-8">
                                            <input class="form-control" id="email" name="email" type="email"/>
                                            @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                        <label for="password" class="control-label col-md-4">Password</label>
                                        <div class="col-md-8">
                                            <input class="form-control" id="password" name="password" type="password"/>
                                            @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group">
                                            <div class="checkbox col-md-offset-4 col-md-4">
                                                <label>
                                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : ''}}> Remember Me
                                                </label>
                                            </div>
                                            <div class="col-md-4">
                                                <a class="btn btn-link" href="{{ url('/password/reset') }}">
                                                    Forgot Your Password?
                                                </a>
                                            </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-8 col-md-offset-4">
                                            <button type="submit" class="btn btn-primary btn-block">
                                                Login
                                            </button>
                                        </div>
                                    </div>
                                </fieldset>
                                {!!Form::close()!!}
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>