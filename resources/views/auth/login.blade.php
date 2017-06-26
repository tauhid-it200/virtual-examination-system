@extends('layouts.app')

@section('content')

<div class="panel panel-success">
    <div class="panel-heading text-center lead">
        <p><b>USER Login</b></p>
    </div>
    <div class="panel-body">
        <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">

            {{ csrf_field() }}

            <fieldset>
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="control-label col-md-4" style="color: black;">EMAIL</label>
                    <div class="col-md-7">
                        <input type="email" class="form-control" id="email" name="email" autofocus="" required=""/>

                        @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" class="control-label col-md-4" style="color: black;">PASSWORD</label>
                    <div class="col-md-7">
                        <input class="form-control" id="password" name="password" type="password" required=""/>

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
                        <button type="submit" class="btn btn-primary btn-block">LOGIN</button>
                    </div>
                    <div class="col-md-4">
                        <a class="btn btn-link" href="{{ url('/password/reset') }}">
                            <p class="text-danger">Forgot Your Password?</p>
                        </a>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-offset-4 col-md-5">
                        <p>Do not have an account?</p>
                    </div>
                    <div>
                        <a href="{{url('/register')}}" class="btn btn-success">SIGN UP</a>
                    </div>
                </div>
            </fieldset>

        </form>
    </div>
</div>

@endsection
