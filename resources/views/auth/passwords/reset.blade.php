@extends('layout')

@section('title', 'Login')

@section('page-title')
    @include('partials._page-title', ['title' => __('authentication.ResetPassword')])
@endsection
            
@section('content')

<div class="container">
    <div class="row mb80">
        <div class="col-sm-4 offset-sm-4">
            <h3 class="page-title-small">@lang('authentication.ResetPassword')</h3>
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            {{ Form::open(['route' => 'password.request', 'class' => 'mb80']) }}
                <input type="hidden" name="token" value="{{ $token }}">
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="control-label">@lang('authentication.Email')</label>
                    <input id="email" type="email" class="form-control" name="email" value="{{ $email or old('email') }}" required autofocus>
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <!-- /.form-group -->
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" class="control-label">@lang('authentication.Password')</label>
                    <input id="password" type="password" class="form-control" name="password" required>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                <!-- /.form-group -->
                <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                    <label for="password-confirm" class="control-label">@lang('authentication.ConfirmPassword')</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                    @if ($errors->has('password_confirmation'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                        </span>
                    @endif
                </div>
                <!-- /.form-group -->
                <div class="form-group-btn">
                    <button type="submit" class="btn btn-primary btn-block">@Lang('authentication.ResetPassword')</button>
                </div>
                <!-- /.form-group-btn -->
            {{ Form::close() }}
        </div>
        <!-- /.col-* -->
    </div>
    <!-- /.row -->
</div>
<!-- /.container-fluid -->

@endsection
