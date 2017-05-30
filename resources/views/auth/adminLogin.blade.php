@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h3><?php echo Session::get("mesage"); ?></h3>
            <div class="panel panel-danger">
                <div class="panel-heading text-center" style="background-color: ">
                    <h3><b>ADMIN Login</b></h3>
                </div>
                <div class="panel-body">
                    <p class="text-danger text-center"><strong><?php echo Session::get("error"); ?></strong></p>
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/admin-login') }}">
                        
                        {{ csrf_field() }}

                        <fieldset>
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="control-label col-md-4" style="color: black;">Email</label>
                                <div class="col-md-7">
                                    <input type="email" class="form-control" id="email" name="email" autofocus="" required=""/>
                                    admin@gmail.com

                                    @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="control-label col-md-4" style="color: black;">Password</label>
                                <div class="col-md-7">
                                    <input class="form-control" id="password" name="password" type="password" required=""/>
                                    12341234

                                    @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="checkbox col-md-offset-4 col-md-7">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : ''}}/> Remember Me
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-offset-4 col-md-3">
                                    <button type="submit" class="btn btn-success btn-block">LOGIN</button>
                                </div>
                                <div class="col-md-4">
                                    <a class="btn btn-link" href="{{ url('/password/reset') }}">
                                        <p class="text-danger">Forgot Your Password?</p>
                                    </a>
                                </div>
                            </div>
                        </fieldset>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
