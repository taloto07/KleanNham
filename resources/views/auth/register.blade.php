@extends('layout')

@section('title', 'Register')

@section('page-title')
    @include('partials._page-title', ['title' => __('authentication.Register')])
@endsection

@section('content')

<div class="container">
    <div class="row mb80">
        <div class="col-sm-4 offset-sm-4">
            <h3 class="page-title-small">@lang('authentication.Register')</h3>
            {!! Form::open([ 'url' => 'register', 'class' => 'mb80' ]) !!}
                <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                    {{ Form::label('name', __('authentication.Name'), ['class' => 'control-label'] ) }}
                    {{ Form::text('name', null, ['class' => 'form-control', 'aria-describedby' => 'nameErrorMessage']) }}
                    <span id="nameErrorMessage" class="help-block">{{ $errors->first('name') }}</span>
                </div>
                <!-- /.form-group -->
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
                    <label for="password-confirm" class="control-label">@lang('authentication.ConfirmPassword')</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">@lang('authentication.Register')</button>
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
