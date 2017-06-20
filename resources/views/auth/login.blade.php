@extends('layout')

@section('title', 'Login')

@section('page-title')
    @include('partials._page-title', ['title' => __('authentication.Login')])
@endsection
            
@section('content')

<div class="container">
    <div class="row mb80">
        <div class="col-sm-4 offset-sm-4">
            <h3 class="page-title-small">@lang('authentication.Login')</h3>
            {!! Form::open([ 'url' => 'login', 'class' => 'mb80' ]) !!}
                <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                    {{ Form::label('email', __('authentication.Email'), ['class' => 'control-label'] ) }}
                    {{ Form::email('email', null, ['class' => 'form-control', 'aria-describedby' => 'emailErrorMessage']) }}
                    <span id="emailErrorMessage" class="help-block">{{ $errors->first('email') }}</span>
                </div>
                <!-- /.form-group -->
                <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                    {{ Form::label('password', __('authentication.Password'), ['class' => 'control-label'] ) }}
                    <input type="password" class="form-control" name="password" aria-describedby="passwordErrorMessage" required>
                    <span id="passwordErrorMessage" class="help-block">{{ $errors->first('password') }}</span>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label class="form-check-label">
                        <input type="checkbox" name="remember" class="form-check-input" {{ old('remember') ? 'checked' : '' }}> @lang('authentication.RememberMe')
                    </label>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">@lang('authentication.Login')</button>
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        @lang('authentication.ForgotPassword')
                    </a>
                </div>
                <!-- /.form-group -->
            {!! Form::close() !!}
        </div>
        <!-- /.col-sm-4 -->
    </div>
    <!-- /.row -->
</div>
<!-- /.container-fluid -->

@endsection
