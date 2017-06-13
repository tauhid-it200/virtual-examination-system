@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading text-center">
        <h3><b>USER Registration</b></h3>
    </div>
    <div class="panel-body">
        <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">

            {{ csrf_field() }}

            <fieldset>
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="name" class="col-md-4 control-label" style="color: black;">Name</label>

                    <div class="col-md-7">
                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                        @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="col-md-4 control-label" style="color: black;">Email</label>

                    <div class="col-md-7">
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                        @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" class="col-md-4 control-label" style="color: black;">Password</label>

                    <div class="col-md-7">
                        <input id="password" type="password" class="form-control" name="password" required>

                        @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label for="password-confirm" class="col-md-4 control-label" style="color: black;">Confirm Password</label>

                    <div class="col-md-7">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-offset-4 col-md-7">
                        <button type="submit" class="btn btn-success btn-block">REGISTER</button>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
</div>

@endsection
