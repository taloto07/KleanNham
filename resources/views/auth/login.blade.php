@extends('layout')

@section('title', 'Login')

{{-- @section('page-title')
    @include('partials._page-title', ['title' => __('authentication.Login')])
@endsection --}}
            
@section('content')

<div class="container">
    <div class="row mb80">
        <div class="col-sm-4 offset-sm-4">
            <h3 class="page-title-small">@lang('authentication.Login')</h3>
            {!! Form::open([ 'url' => 'login', 'class' => '' ]) !!}
                <div class="form-group {{ $errors->has('email') ? 'has-danger' : '' }}">
                    {{ Form::label('email', __('authentication.Email'), ['class' => 'control-label col-form-label'] ) }}
                    {{ Form::email('email', null, ['class' => 'form-control form-control-danger']) }}
                    <div class="form-control-feedback">{{ $errors->first('email') }}</div>
                </div>
                <!-- /.form-group -->
                <div class="form-group {{ $errors->has('password') ? 'has-danger' : '' }}">
                    {{ Form::label('password', __('authentication.Password'), ['class' => 'control-label col-form-label'] ) }}
                    <input type="password" class="form-control form-control-danger" name="password" id="password">
                    <div class="form-control-feedback">{{ $errors->first('password') }}</div>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label class="form-check-label">
                        <input type="checkbox" name="remember" class="form-check-input" {{ old('remember') ? 'checked' : '' }}> @lang('authentication.RememberMe')
                    </label>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">@lang('authentication.Login')</button>
                </div>
                <!-- /.form-group -->
            {!! Form::close() !!}

            <h6>
                <a href="{{ route('password.request') }}" class="text-muted">
                    @lang('authentication.ForgotPassword')
                </a>
                <a href="{{ route('register') }}" class="text-muted">
                    @lang('authentication.DontHaveAccountYet')
                </a>
            </h6>
        </div>
        <!-- /.col-sm-4 -->
    </div>
    <!-- /.row -->
</div>
<!-- /.container-fluid -->

@endsection
