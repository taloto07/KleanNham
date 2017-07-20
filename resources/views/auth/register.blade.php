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
            {!! Form::open([ 'url' => 'register', 'class' => '' ]) !!}
                <div class="form-group {{ $errors->has('name') ? 'has-danger' : '' }}">
                    {{ Form::label('name', __('authentication.Name'), ['class' => 'control-label col-form-label'] ) }}
                    {{ Form::text('name', null, ['class' => 'form-control form-control-danger']) }}
                    <div class="form-control-feedback">{{ $errors->first('name') }}</div>
                </div>
                <!-- /.form-group -->
                <div class="form-group {{ $errors->has('email') ? 'has-danger' : '' }}">
                    {{ Form::label('email', __('authentication.Email'), ['class' => 'control-label col-form-label'] ) }}
                    {{ Form::email('email', null, ['class' => 'form-control form-control-danger']) }}
                    <div class="form-control-feedback">{{ $errors->first('email') }}</div>
                </div>
                <!-- /.form-group -->
                <div class="form-group {{ $errors->has('password') ? 'has-danger' : '' }}">
                    {{ Form::label('password', __('authentication.Password'), ['class' => 'control-label col-form-label'] ) }}
                    <input type="password" class="form-control form-control-danger" name="password" >
                    <div class="form-control-feedback">{{ $errors->first('password') }}</div>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label for="password-confirm" class="control-label">@lang('authentication.ConfirmPassword')</label>
                    <input id="password-confirm" type="password" class="form-control form-control-danger" name="password_confirmation">
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">@lang('authentication.Register')</button>
                </div>
                <!-- /.form-group -->
            {!! Form::close() !!}

            <h6><a href="{{ route('login') }}" class="text-muted">
                @lang('authentication.AlreadyHaveAnAccount')
            </a></h6>
        </div>
        <!-- /.col-sm-4 -->
    </div>
    <!-- /.row -->
</div>
<!-- /.container-fluid -->
        

@endsection
